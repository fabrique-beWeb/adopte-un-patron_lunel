<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ViewBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;

/**
 * Description of LoginController
 *
 * @author romain-ruperez
 */
class LoginController extends Controller {
    
    /**
     * @Route("/login", name="login")
     */
    public function getLogin()
    {
        return $this->render('default/login.html.twig');
    }

    
    /**
     * @Route ("/loginCheck", name="loginCheck")
     * @throws Exception
     */
    public function LoginCheck() {
        throw new Exception('Verifie le security');
    }
    
    /**
    * @Route("/logOut",name="logOut")
    * @throws Exception
    */
    public function logOut() {
        throw new Exception('Verifiez votre fichier security');
    }

}
