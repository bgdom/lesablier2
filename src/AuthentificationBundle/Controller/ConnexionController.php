<?php

namespace AuthentificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AuthentificationBundle\Entity\Utilisateur;

class ConnexionController extends Controller
{
    public function indexAction(Request $request)
    {
		$session = $request->getSession();
		if(!$session->get('IdUtilisateur',false)){
			if(null !== $request->query->get('verif') && $request->query->get('verif') == 1){
				$this->verifAction($request,$session);
			}
			return $this->render('connexion/connexion.html.twig');
		}else{
			$this->addFlash('notice','Vous êtes déjà connecté');
			return $this->redirectToRoute('authentification_homepage');
		}
    }
	
	private function verifAction(Request &$request, &$session)
    {
        $posts = $request->request;
		$login = $posts->get('login');
		$pass = $posts->get('password');
		if(isset($login) && isset($pass)){
			if( strlen($login) > 0 && strlen($login) <= 50 && strlen($pass) > 0 && strlen($pass) <= 30 ){
				$repo = $this->getDoctrine()->getRepository('AuthentificationBundle:Utilisateur');
				$utilisateur = $repo->findOneBy(array(
					'nom' => $pass,
					'email' => $login
				));
				if(isset($utilisateur)){
					$session->set('IdUtilisateur',$utilisateur->getId());
				}else
					$this->addFlash('erreur','Pas d\'utilisateurs correspondant.');
			}else 
					$this->addFlash('erreur','Une erreur est survenue lors de la connexion, veuillez vérifier vos informations.');
		}
    }
}
