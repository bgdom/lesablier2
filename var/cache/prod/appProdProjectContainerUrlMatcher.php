<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // info_complementaire_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'info_complementaire_homepage');
            }

            return array (  '_controller' => 'InfoComplementaireBundle\\Controller\\DefaultController::indexAction',  '_route' => 'info_complementaire_homepage',);
        }

        // authentification_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'authentification_homepage');
            }

            return array (  '_controller' => 'AuthentificationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'authentification_homepage',);
        }

        // connexion_indexpage
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'AuthentificationBundle\\Controller\\ConnexionController::indexAction',  '_route' => 'connexion_indexpage',);
        }

        // inscription_indexpage
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'AuthentificationBundle\\Controller\\InscriptionController::indexAction',  '_route' => 'inscription_indexpage',);
        }

        // deconnexion_indexpage
        if ($pathinfo === '/deconnexion') {
            return array (  '_controller' => 'AuthentificationBundle\\Controller\\DeconnexionController::indexAction',  '_route' => 'deconnexion_indexpage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
