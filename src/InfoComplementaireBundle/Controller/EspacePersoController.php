<?php

namespace InfoComplementaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EspacePersoController extends Controller
{
    public function indexAction()
    {
        return $this->render('contact.html.twig');
    }
}
