<?php

namespace InfoComplementaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NousController extends Controller
{
    public function indexAction()
    {
        return $this->render('InfoComplementaire\nous.html.twig');
    }
}
