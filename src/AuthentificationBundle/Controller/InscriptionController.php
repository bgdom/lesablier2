<?php

namespace AuthentificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AuthentificationBundle\Entity\Utilisateur;

class InscriptionController extends Controller
{
    public function indexAction(Request $request)
    {
		$session = $request->getSession();
		if(!$session->get('IdUtilisateur',false)){
			if(null !== $request->query->get('verif') && $request->query->get('verif') == 1){
				$this->verifAction($request,$session);
			}
			return $this->render('inscription/inscription.html.twig');
		}else{
			$this->addFlash('info','Vous êtes déjà connecté');
			return $this->redirectToRoute('authentification_homepage');
		}
    }
	
	private function verificationAction(Request &$request, &$session)
	{
        $posts = $request->request;
		$nom = $posts->get('nom');
		$prenom = $posts->get('prenom');
		$email = $posts->get('email');
		$age = (int) $age = $posts->get('age');
		$sexe = $posts->get('sexe');
		if(isset($nom,$prenom,$email,$age,$sexe) && strlen($nom) > 0 && strlen($nom) <= 30 && strlen($prenom) > 0 && strlen($prenom) <= 30 && strlen($email) > 0 && strlen($email) <= 50 && 	$age > 0 && strlen($sexe) == 1 && (strtoupper($sexe) == 'H' ||  strtoupper($sexe) == 'F')){
			$user = new Utilisateur();
			$user->setNom($nom);
			$user->setPrenom($prenom);
			$user->setEmail($email);
			$user->setAge($age);
			$user->setSexe($sexe);
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();
			
			$this->addFlash('notice','Vous êtes inscrit, connectez vous maintenant');
			$this->redirectToRoute('connexion_indexpage');
		}
    }
}