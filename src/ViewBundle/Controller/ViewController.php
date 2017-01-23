<?php

namespace ViewBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ViewController extends Controller{
    /**
     * @Route("/",name="home")
     */
    public function getLandingPage() {
        return $this->render('ViewBundle:Default:landingPage.html.twig');
    }
}
