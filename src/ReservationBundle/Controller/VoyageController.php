<?php

namespace ReservationBundle\Controller;

use ReservationBundle\Entity\Destination;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use ReservationBundle\Entity\Commande;
use ReservationBundle\Form\CommandeType;
use Symfony\Component\HttpFoundation\Response;

class VoyageController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getRepository('ReservationBundle:Destination');
        if($request->isXmlHttpRequest()){
            $cc = $request->request->get('pays',null);
            if($cc !== null){
                $res = $em->findByInitial($cc);
                /*if($res)
                    return new Response('<div id="zoneVoyages">y\'en a</div>');
                else
                    return new Response('<div id="zoneVoyages">y\'en a pas</div>');*/
                return $this->render('reservation/template_voyages.html.twig' , array('destinations' => ($res) ? $res : null));
            }
            return $this->render('reservation/template_voyages.html.twig' , array('destinations' => null));
        }else
            return $this->render('reservation/voyages.html.twig', array('destinations' => $em->findAll()));
    }

    public function voyageAction($id = 0, Request $request){
        $session = $request->getSession();
        $er = $this->getDoctrine()->getRepository('ReservationBundle:Destination');
        $cmd = new Commande();
        $form = $this->createForm(CommandeType::class, $cmd, array('action' => $this->generateUrl('voyage_destinationpage', array('id' => $id)),'attr' => array('class' => 'signup-page')));
        $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()) {
           if($session->get('IdUtilisateur',false)){
               try{
                   $em = $this->getDoctrine()->getManager();
                   $cmd->setIdUtilisateur($session->get('IdUtilisateur'));
                   $cmd->setIdDestination($id);
                   $em->persist($cmd);
                   $em->flush();
                   $this->addFlash('notice','Votre Réservation a été prise en compte');
                   return $this->redirectToRoute('voyage_homepage');
               }catch(\Doctrine\DBAL\Exception\UniqueConstraintViolationException $e){
                   $this->addFlash('error','Vous avez déjà réservé à cette date et heure, changez');
               }
           }else {
               $session->set('last_url', $this->generateUrl('voyage_destinationpage', array('id' => $id), UrlGeneratorInterface::ABSOLUTE_URL));
               $this->addFlash('warning','Il faut vous connecter');
               return $this->redirectToRoute('connexion_indexpage');
           }
       }
        $o = $er->find($id);
        if(!$o)
            return $this->render('reservation/voyage.html.twig');
        else
            return $this->render('reservation/voyage.html.twig', array('destination' => $o, 'form' => $form->createView()));
    }
}
