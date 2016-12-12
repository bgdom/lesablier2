<?php

namespace AuthentificationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeconnexionController extends Controller
{
    public function indexAction(Request $request)
    {
		$request->getSession()->clear();
		$this->addFlash('warning','Vous êtes déconnecté');
        return $this->redirectToRoute('authentification_homepage');
    }
}
