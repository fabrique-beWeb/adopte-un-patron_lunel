<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\Recruteur;


class RecruteurController extends Controller {

    //Page d'inscription des recruteurs
    /**
     * Creates a new recruteur entity.
     *
     * @Route("inscription/recruteur/new", name="recruteur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $recruteur = new Recruteur();
        $form = $this->createForm('UserBundle\Form\RecruteurType', $recruteur);
        $form->handleRequest($request);
        $recruteur->setRole(array("ROLE_RECRUTEUR"));

        if ($form->isSubmitted() && $form->isValid()) {
            $logo = md5(uniqid()) . "." . $recruteur->getLogo()->guessExtension();
            $recruteur->getLogo()->move('../web/uploads', $logo);
            $recruteur->setLogo($logo);
            $em = $this->getDoctrine()->getManager();
            $recruteur->setDateInscription(date("d/m/Y"));            
            $em->persist($recruteur);
            $em->flush($recruteur);

            return $this->redirectToRoute('home', array('id' => $recruteur->getId()));
        }


        return $this->render('recruteur/newRecruteur.html.twig', array(
                    'recruteur' => $recruteur,
                    'form' => $form->createView(),
        ));
    }

    
    //Index Recruteur
    /**
     * @Route("recruteur/index", name="indexRecruteur")
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

    
    //gestion Recruteur
    /**
     * Displays a form to edit an existing recruteur entity.
     *
     * @Route("recruteur/gestion/{id}", name="recruteur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Recruteur $recruteur) {
        $editForm = $this->createForm('UserBundle\Form\RecruteurType', $recruteur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('recruteur_edit', array('id' => $recruteur->getId()));
        }

        return $this->render('recruteur/edit.html.twig', array(
                    'recruteur' => $recruteur,
                    'edit_form' => $editForm->createView(),
        ));
    }
}
