<?php

namespace ViewBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;


class ViewController extends Controller{
    /**
     * @Route("/",name="home")
     * @Template("ViewBundle:Default:landingPage.html.twig")
     */
    public function getLandingPage(Request $r) {
        /*
         * cette fonction sert juste a faire un traitement pour augmente le temps
         * de chargement de la page, et permet de s'autentifier correctement.
         */
        $gt = $r->getSession()->get(Security::AUTHENTICATION_ERROR);
        return null; 
    }
}
