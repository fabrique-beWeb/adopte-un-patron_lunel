<?php

namespace OffreBundle\Controller;

use OffreBundle\Entity\Offre;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use UserBundle\Entity\Skill;

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
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $offres = $em->getRepository('OffreBundle:Offre')->findAll();

        return $this->render('offre/index.html.twig', array(
                    'offres' => $offres,
        ));
    }

    /**
     * Creates a new offre entity.
     *
     * @Route("/new", name="offre_new")
     * @Method({"GET", "POST"})
     * 
     */
    public function newAction(Request $request) {
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
     * @Route("/get/skills")
     * 
     */
    public function getSkills(Request $request) {
         $session = $request->getSession();
         $session->set('foo', 'bar');
        $data = $this->getDoctrine()->getRepository(Skill::class)->findAll();
        $status = 200;

        $headers = array(
            'Access-Control-Allow-Origin' => 'http://www.adopte-un-patron.fr');
        return new JsonResponse($data, $status, $headers, $session);
    }

    /**
     * Finds and displays a offre entity.
     *
     * @Route("/{id}", name="offre_show")
     * @Method("GET")
     */
    public function showAction(Offre $offre) {
        return $this->render('offre/show.html.twig', array(
                    'offre' => $offre,
        ));
    }

    /**
     * Displays a form to edit an existing offre entity.
     *
     * @Route("/edit/{id}", name="offre_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Offre $offre) {
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
