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
     * @Route ("/loginCheck", name="loginCheck")
     * @throws Exception
     */
    public function LoginCheck() {
        throw new Exception('Verifie le security');
    }


}
