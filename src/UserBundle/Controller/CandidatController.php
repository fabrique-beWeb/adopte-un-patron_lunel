<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\Candidat;

class CandidatController extends Controller
{
//    /**
//     * Lists all candidat entities.
//     *
//     * @Route("candidat/", name="candidat_index")
//     * @Method("GET")
//     */
//    public function indexAction()
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $candidat = $em->getRepository('UserBundle:Candidat')->findById($this->getUser());
//        return $this->render('candidat/index.html.twig', array(
//                    'candidat' => $candidat,
//        ));
//    }

    /**
     * Page d'inscription des candidats.
     *
     * @Route("inscripttion/candidat/new", name="candidat_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $candidat = new Candidat();
        $form = $this->createForm('UserBundle\Form\CandidatType', $candidat);
        $form->handleRequest($request);
        $candidat->setRole(array("ROLE_CANDIDAT"));

        if ($form->isSubmitted() && $form->isValid()) {
            $image = md5(uniqid()) . "." . $candidat->getImage()->guessExtension();
            $candidat->getImage()->move('../web/uploads', $image);
            $candidat->setImage($image);
            $em = $this->getDoctrine()->getManager();
            $candidat->setDateInscription(date("d/m/Y"));
            $em->persist($candidat);
            $em->flush($candidat);

            return $this->redirectToRoute('candidat_show', array('id' => $candidat->getId()));
        }

        return $this->render('candidat/newCandidat.html.twig', array(
            'candidat' => $candidat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a candidat entity.
     *
     * @Route("candidat/index/{id}", name="candidat_show")
     * @Method("GET")
     */
    public function showAction(Candidat $candidat)
    {
//        $deleteForm = $this->createDeleteForm($candidat);

        return $this->render('candidat/showCandidat.html.twig', array(
            'candidat' => $candidat,
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing candidat entity.
     *
     * @Route("candidat/gestion/{id}", name="candidat_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Candidat $candidat)
    {
//        $deleteForm = $this->createDeleteForm($candidat);
        $editForm = $this->createForm('UserBundle\Form\CandidatType', $candidat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('candidat_edit', array('id' => $candidat->getId()));
        }

        return $this->render('candidat/editCandidat.html.twig', array(
            'candidat' => $candidat,
            'edit_form' => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        ));
    }

//    /**
//     * Deletes a candidat entity.
//     *
//     * @Route("candidat/{id}", name="candidat_delete")
//     * @Method("DELETE")
//     */
//    public function deleteAction(Request $request, Candidat $candidat)
//    {
//        $form = $this->createDeleteForm($candidat);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->remove($candidat);
//            $em->flush($candidat);
//        }
//
//        return $this->redirectToRoute('candidat_index');
//    }
//
//    /**
//     * Creates a form to delete a candidat entity.
//     *
//     * @param Candidat $candidat The candidat entity
//     *
//     * @return Form The form
//     */
//    private function createDeleteForm(Candidat $candidat)
//    {
//        return $this->createFormBuilder()
//            ->setAction($this->generateUrl('candidat_delete', array('id' => $candidat->getId())))
//            ->setMethod('DELETE')
//            ->getForm()
//        ;
//    }
    
}
