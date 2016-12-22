<?php

namespace InfoComplementaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EspacePersoController extends Controller
{
    public function indexAction(Request $request)
    {
        $idUtilisateur = $request->getSession()->get('IdUtilisateur',false);
        if($idUtilisateur){
            $er = $this->getDoctrine()->getRepository('AuthentificationBundle:Utilisateur');
            $erC = $this->getDoctrine()->getRepository('ReservationBundle:Commande');
            $erD = $this->getDoctrine()->getRepository('ReservationBundle:Destination');

            $commandes = $erC->findBy(array(
                'idUtilisateur' => $idUtilisateur
            ));
            $destinations = null;

            foreach ($commandes as $value) {
                $destination = $erD->findOneBy(array(
                    'id' => $value->getIdDestination()
                ));
                $destinations[] = array(
                    'titre' => $destination->getTitre(),
                    'pays' => $destination->getPays(),
                    'ville' => $destination->getVille(),
                    'id' => $destination->getId(),
                    'dateHist' => $destination->getDateHist(),
                    'qtePers' => $value->getQtePers(),
                    'dateCom' => $value->getDateCom(),
                    'heureCom' => $value->getTimeCom()
                );
            }
            return $this->render('InfoComplementaire\espacePerso.html.twig', array(
                'utilisateur' => $er->findOneBy(array(
                    'id' => $idUtilisateur
                )),
                'destinations' => $destinations
            ));
        }else {
            $this->addFlash('warning', 'Vous devez vous connecter');
            return $this->redirectToRoute('connexion_indexpage');
        }
    }
}
