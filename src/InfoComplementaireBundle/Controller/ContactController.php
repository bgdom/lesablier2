<?php

namespace InfoComplementaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function indexAction()
    {
        return $this->render('InfoComplementaire\contact.html.twig');
    }
}
