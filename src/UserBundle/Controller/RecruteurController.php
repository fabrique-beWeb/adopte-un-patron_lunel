<?php

namespace UserBundle\Controller;

use UserBundle\Entity\Recruteur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Recruteur controller.
 *
 * @Route("recruteur")
 */
class RecruteurController extends Controller {

    /**
     * Lists all recruteur entities.
     *
     * @Route("recruteur/", name="recruteur_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $recruteurs = $em->getRepository('UserBundle:Recruteur')->findAll();
        $offres = $em->getRepository('OffreBundle:Offre')->findAll();

        return $this->render('recruteur/index.html.twig', array(
                    'recruteurs' => $recruteurs,
                    'offres' => $offres,
        ));
    }

    /**
     * Creates a new recruteur entity.
     *
     * @Route("InscriptionRecruteur/new", name="recruteur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $recruteur = new Recruteur();
        $form = $this->createForm('UserBundle\Form\RecruteurType', $recruteur);
        $form->handleRequest($request);
        $recruteur->setRole(array("ROLE_RECRUTEUR"));

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($recruteur);
            $em->flush($recruteur);

            return $this->redirectToRoute('recruteur_show', array('id' => $recruteur->getId()));
        }


        return $this->render('recruteur/newRecruteur.html.twig', array(
                    'recruteur' => $recruteur,
                    'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/gestion", name="gestionRecruteur")
     */
    public function gestionRecruteur() {
        $em = $this->getDoctrine()->getManager();

        $offres = $em->getRepository('OffreBundle:Offre')->findAll();
        return $this->render('recruteur/gestion_recrutor.html.twig', array(
                    'offres' => $offres,
        ));
    }

    /**
     * @Route("/index", name="indexRecruteur")
     */
    public function indexRecruteur() {
        $em = $this->getDoctrine()->getManager();

        $offres = $em->getRepository('OffreBundle:Offre')->findByUserId($this->getUser());
        $recruteurs = $em->getRepository('UserBundle:Recruteur')->findById($this->getUser());
        return $this->render('recruteur/indexRecruteur.html.twig', array(
                    'offres' => $offres,
                    'recruteurs' => $recruteurs,
        ));
    }

    /**
     * Finds and displays a recruteur entity.
     *
     * @Route("recruteur/{id}", name="recruteur_show")
     * @Method("GET")
     */
    public function showAction(Recruteur $recruteur) {


        $deleteForm = $this->createDeleteForm($recruteur);

        return $this->render('recruteur/show.html.twig', array(
                    'recruteur' => $recruteur,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing recruteur entity.
     *
     * @Route("recruteur/{id}/edit", name="recruteur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Recruteur $recruteur) {
        $deleteForm = $this->createDeleteForm($recruteur);
        $editForm = $this->createForm('UserBundle\Form\RecruteurType', $recruteur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('recruteur_edit', array('id' => $recruteur->getId()));
        }

        return $this->render('recruteur/edit.html.twig', array(
                    'recruteur' => $recruteur,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a recruteur entity.
     *
     * @Route("recruteur/{id}", name="recruteur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Recruteur $recruteur) {
        $form = $this->createDeleteForm($recruteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($recruteur);
            $em->flush($recruteur);
        }

        return $this->redirectToRoute('recruteur_index');
    }

    /**
     * Creates a form to delete a recruteur entity.
     *
     * @param Recruteur $recruteur The recruteur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Recruteur $recruteur) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('recruteur_delete', array('id' => $recruteur->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
