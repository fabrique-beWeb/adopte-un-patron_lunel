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
    
//    /**
//     * @Route("/login",name="log")
//     */
//    public function getLog() {
//        return $this->render('default/login.html.twig');
//    }

    /**
     * @Route("/login_check", name="login")
     */
    public function getLogin()
    {
        return $this->render('default/login.html.twig');
    }
}
