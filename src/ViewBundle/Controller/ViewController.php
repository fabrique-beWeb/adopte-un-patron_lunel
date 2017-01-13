<?php

namespace ViewBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ViewController extends Controller{
    /**
     * @Route("/",name="home")
     * @Template("ViewBundle:Default:landingPage.html.twig")
     */
    public function getLandingPage() {
        return null;
    }
}
