<?php

namespace InfoComplementaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InfoComplementaireBundle:Default:index.html.twig');
    }
}
