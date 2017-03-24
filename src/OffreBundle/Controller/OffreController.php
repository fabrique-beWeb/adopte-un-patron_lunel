<?php

namespace OffreBundle\Controller;

use OffreBundle\Entity\Offre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Offre controller.
 *
 * @Route("offre")
 */
class OffreController extends Controller {

    /**
     * Lists all offre entities.
     *
     * @Route("/", name="offre_index")
     * @Method("GET")
     */
    public function getOffres() {
        $em = $this->getDoctrine()->getManager();

        $offres = $em->getRepository('OffreBundle:Offre')->findAll();

        return $this->render('offre/index.html.twig', array(
                    'offres' => $offres,
        ));
    }

    /**
     * Creates a new offre entity.
     *
     * @Route("/nouveau", name="offre_new")
     * @Method({"GET", "POST"})
     * 
     */
    public function createOffre(Request $request) {
        $offre = new Offre();
        $form = $this->createForm('OffreBundle\Form\OffreType', $offre);
        $form->handleRequest($request);
        //on cherche avec l'user id récupérer dans la session courante
        $this->getDoctrine()->getRepository(Offre::class)->findByUserId($this->getUser());

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //on set luserid de la session courante
            $offre->setUserId($this->getUser());
            $em->persist($offre);
            $em->flush($offre);

            return $this->redirectToRoute('offre_show', array('id' => $offre->getId()));
        }


        return $this->render('offre/newOffres.html.twig', array(
            'offre' => $offre,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a offre entity.
     *
     * @Route("/{id}", name="offre_show")
     * @Method("GET")
     */
    public function getOffre(Offre $offre) {
        return $this->render('offre/show.html.twig', array(
                    'offre' => $offre,
        ));
    }

    /**
     * Displays a form to edit an existing offre entity.
     *
     * @Route("/modifier/{id}", name="offre_edit")
     * @Method({"GET", "POST"})
     */
    public function editOffre(Request $request, Offre $offre) {
        $editForm = $this->createForm('OffreBundle\Form\OffreType', $offre);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('offre_edit', array('id' => $offre->getId()));
        }

        return $this->render('offre/edit.html.twig', array(
                    'offre' => $offre,
                    'edit_form' => $editForm->createView(),
        ));
    }
}
