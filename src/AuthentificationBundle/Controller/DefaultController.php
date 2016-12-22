<?php

namespace AuthentificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $er = $this->getDoctrine()->getRepository('AuthentificationBundle:Utilisateur');
        $erD = $this->getDoctrine()->getRepository('ReservationBundle:Destination');
        $emA = $this->getDoctrine()->getManager();

        $avis = null;
        $resA = $emA->createQueryBuilder()
            ->select('a.contenu, a.idDestination, a.idUtilisateur')
            ->from('ReservationBundle:Avis','a')
            ->setMaxResults(5)
            ->getQuery()->getResult();
        if($resA){
            foreach ($resA as $avi) {
                $dest = $erD->findOneBy(array('id' => $avi['idDestination']));
                $avis[] = array(
                    'contenu' => $avi['contenu'],
                    'titre' => $dest->getTitre(),
                    'dateHist' => $dest->getDateHist(),
                    'prenom' => $er->findOneBy(array('id' => $avi['idUtilisateur']))->getPrenom()
                );
            }
        }

        return $this->render('default/index.html.twig', array('accueil' => true, 'avis' => $avis));
    }
}
