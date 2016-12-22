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
            $erA = $this->getDoctrine()->getRepository('ReservationBundle:Avis');


            $commandes = $erC->findBy(array(
                'idUtilisateur' => $idUtilisateur
            ));
            $destinations = null;
            $avis = null;
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
                $avi = $erA->findOneBy(array(
                    'idUtilisateur' => $idUtilisateur,
                    'idDestination' => $destination->getId()
                ));
                if($avi){
                    $avis[] = array(
                        'titre' => $destination->getTitre(),
                        'dateHist' => $destination->getDateHist(),
                        'contenu' => $avi->getContenu()
                    );
                }
            }
            return $this->render('InfoComplementaire\espacePerso.html.twig', array(
                'utilisateur' => $er->findOneBy(array(
                    'id' => $idUtilisateur
                )),
                'destinations' => $destinations,
                'avis' => $avis
            ));
        }else {
            $this->addFlash('warning', 'Vous devez vous connecter');
            return $this->redirectToRoute('connexion_indexpage');
        }
    }
}
