<?php

namespace ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VoyageController extends Controller
{
    public function indexAction()
    {
		$em = $this->getDoctrine()->getRepository('ReservationBundle:Destination');
        return $this->render('reservation/voyage.html.twig', array('destinations' => $em->findAll()));
    }
	
	public function listeAction(){
		
	}
	
	public function destinationAction($pays, $title){
		
	}
	
	public function paysAction($pays){
		
	}
	
	private function verifResa(Request &$request){
		
	}
}
