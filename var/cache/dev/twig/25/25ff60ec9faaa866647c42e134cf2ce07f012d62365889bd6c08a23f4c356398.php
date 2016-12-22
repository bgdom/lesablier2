<?php

/* base.html.twig */
class __TwigTemplate_290c4d94add3f2d2802a7e260ed9b495375c8fce84381556d28b25893b80c004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body1' => array($this, 'block_body1'),
            'mid' => array($this, 'block_mid'),
            'body2' => array($this, 'block_body2'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72302c75811fb3c9f4803990924d89888822b39165ec4032a2e4c7b35e5f8b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72302c75811fb3c9f4803990924d89888822b39165ec4032a2e4c7b35e5f8b5c->enter($__internal_72302c75811fb3c9f4803990924d89888822b39165ec4032a2e4c7b35e5f8b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <head>
\t\t<!-- Meta -->
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
        <!-- Favicon -->
        <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" rel=\"shortcut icon\" type=\"image/x-icon\">
\t\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\" type=\"image/x-icon\">
    </head>
    <body>

\t\t<div id=\"body-bg\">
        ";
        // line 35
        $this->displayBlock('body1', $context, $blocks);
        // line 126
        echo "\t\t\t";
        $this->displayBlock('mid', $context, $blocks);
        // line 128
        echo "\t\t\t";
        $this->displayBlock('body2', $context, $blocks);
        // line 214
        echo "\t\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 256
        echo "\t\t</div>
    </body>
</html>
";
        
        $__internal_72302c75811fb3c9f4803990924d89888822b39165ec4032a2e4c7b35e5f8b5c->leave($__internal_72302c75811fb3c9f4803990924d89888822b39165ec4032a2e4c7b35e5f8b5c_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_6134cd48d022f6f6eb469119b8219ad5eedd4d952c65d24a48aefe026c33cac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6134cd48d022f6f6eb469119b8219ad5eedd4d952c65d24a48aefe026c33cac7->enter($__internal_6134cd48d022f6f6eb469119b8219ad5eedd4d952c65d24a48aefe026c33cac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue";
        
        $__internal_6134cd48d022f6f6eb469119b8219ad5eedd4d952c65d24a48aefe026c33cac7->leave($__internal_6134cd48d022f6f6eb469119b8219ad5eedd4d952c65d24a48aefe026c33cac7_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5025fe175eb9c1b47e47abbe3cf1edbca4114eac3690e60902fd857a38481f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5025fe175eb9c1b47e47abbe3cf1edbca4114eac3690e60902fd857a38481f7->enter($__internal_b5025fe175eb9c1b47e47abbe3cf1edbca4114eac3690e60902fd857a38481f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<!-- Template CSS -->
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nexus.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/LobiBox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<!-- Google Fonts-->
\t\t\t<link href=\"http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300\" rel=\"stylesheet\" type=\"text/css\">
\t\t\t<link href=\"http://fonts.googleapis.com/css?family=PT+Sans\" type=\"text/css\" rel=\"stylesheet\">
\t\t\t<link href=\"http://fonts.googleapis.com/css?family=Roboto:400,300\" rel=\"stylesheet\" type=\"text/css\">
\t\t";
        
        $__internal_b5025fe175eb9c1b47e47abbe3cf1edbca4114eac3690e60902fd857a38481f7->leave($__internal_b5025fe175eb9c1b47e47abbe3cf1edbca4114eac3690e60902fd857a38481f7_prof);

    }

    // line 35
    public function block_body1($context, array $blocks = array())
    {
        $__internal_5a7de1cd83c0dbfee462168f63c3386c070773ecbf06e6d510ade04e492c127a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7de1cd83c0dbfee462168f63c3386c070773ecbf06e6d510ade04e492c127a->enter($__internal_5a7de1cd83c0dbfee462168f63c3386c070773ecbf06e6d510ade04e492c127a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body1"));

        // line 36
        echo "            <ul class=\"social-icons pull-right hidden-xs\">
                <li class=\"social-rss\">
                    <a href=\"#\" target=\"_blank\" title=\"RSS\"></a>
                </li>
                <li class=\"social-twitter\">
                    <a href=\"#\" target=\"_blank\" title=\"Twitter\"></a>
                </li>
                <li class=\"social-facebook\">
                    <a href=\"#\" target=\"_blank\" title=\"Facebook\"></a>
                </li>
                <li class=\"social-googleplus\">
                    <a href=\"#\" target=\"_blank\" title=\"GooglePlus\"></a>
                </li>
            </ul>
            <div id=\"pre-header\" class=\"container\" style=\"height: ";
        // line 50
        if (array_key_exists("accueil", $context)) {
            echo " 340px ";
        } else {
            echo " 100px ";
        }
        echo "\">
                <!-- Spacing above header -->
            </div>
            <div id=\"header\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Logo -->
                        <div class=\"logo\">
                            <a href=\"index.php\" title=\"Accueil\">
                                <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- Top Menu -->
             <div id=\"hornav\" class=\"container no-padding\">
                 <div class=\"row\">
                    <div class=\"col-md-12 no-padding\">
                        <div class=\"text-center visible-lg\">
                            <ul id=\"hornavmenu\" class=\"nav navbar-nav\">

                                <li>
                                    <a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("authentification_homepage");
        echo "\" class=\"fa-home\">Accueil</a>
                                </li>

\t\t\t\t\t\t\t\t\t";
        // line 77
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "IdUtilisateur", 1 => false), "method")) {
            // line 78
            echo "\t\t\t\t\t\t\t\t<li>
                                    <a href=\"";
            // line 79
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion_indexpage");
            echo "\" class=\"fa-gears\">Authentification</a>

                                </li>
                                ";
        }
        // line 83
        echo "\t\t\t\t\t\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 84
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "IdUtilisateur", 1 => false), "method")) {
                // line 85
                echo "\t\t\t\t\t\t\t\t<li>
                                    <a href=\"";
                // line 86
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("info_espace_perso_homepage");
                echo "\" class=\"fa-copy\">espace personnel</a>
                                </li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 90
        echo "                                <li>
                                    <a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voyage_homepage");
        echo "\" class=\"fa-th\">Voyages</a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("info_complementaire_homepage");
        echo "\" class=\"fa-font\">Qui sommes nous?</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("info_contact_homepage");
        echo "\" class=\"fa-comment\">Contact</a>
                                </li>
\t\t\t\t\t\t\t\t";
        // line 99
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 100
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "IdUtilisateur", 1 => false), "method")) {
                // line 101
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 102
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion_indexpage");
                echo "\" class=\"fa-gears\">Deconnexion</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 105
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 106
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
\t\t\t";
        // line 112
        if (array_key_exists("accueil", $context)) {
            // line 113
            echo "            <div id=\"post_header\" class=\"container\" style=\"height: 340px\">
                <!-- Spacing below header -->
            </div>
\t\t\t";
        } else {
            // line 117
            echo "\t\t\t<div id=\"post_header\" class=\"container\" style=\"height: 40px \">
                <!-- Spacing below header -->
            </div>
\t\t\t";
        }
        // line 121
        echo "            <div id=\"content-top-border\" class=\"container\">
            </div>
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
\t\t\t";
        
        $__internal_5a7de1cd83c0dbfee462168f63c3386c070773ecbf06e6d510ade04e492c127a->leave($__internal_5a7de1cd83c0dbfee462168f63c3386c070773ecbf06e6d510ade04e492c127a_prof);

    }

    // line 126
    public function block_mid($context, array $blocks = array())
    {
        $__internal_1eac163538e395ccad4fa9d79e72f9b41ae5cf5c3ac8c75282630ca2c22892ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eac163538e395ccad4fa9d79e72f9b41ae5cf5c3ac8c75282630ca2c22892ca->enter($__internal_1eac163538e395ccad4fa9d79e72f9b41ae5cf5c3ac8c75282630ca2c22892ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mid"));

        // line 127
        echo "\t\t\t";
        
        $__internal_1eac163538e395ccad4fa9d79e72f9b41ae5cf5c3ac8c75282630ca2c22892ca->leave($__internal_1eac163538e395ccad4fa9d79e72f9b41ae5cf5c3ac8c75282630ca2c22892ca_prof);

    }

    // line 128
    public function block_body2($context, array $blocks = array())
    {
        $__internal_08197c3f22b20a95621d0e7ebfa53067860e74f8f3575d11060ed056288a168a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08197c3f22b20a95621d0e7ebfa53067860e74f8f3575d11060ed056288a168a->enter($__internal_08197c3f22b20a95621d0e7ebfa53067860e74f8f3575d11060ed056288a168a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        // line 129
        echo "\t\t\t<!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id=\"content-bottom-border\" class=\"container\">
            </div>
            <div id=\"base\">
                <div class=\"container padding-vert-30 margin-top-60\">
                    <div class=\"row\">
                        <!-- Contact Details -->
                        <div class=\"col-md-4 margin-bottom-20\">
                            <h3 class=\"margin-bottom-10\">Pour nous contacter</h3>
                            <p>
                                <span class=\"fa-phone\">Telephone:</span>+33 6 66 66 66 66
                                <br>
                                <span class=\"fa-envelope\">Email:</span>
                                <a href=\"mailto:info@leSablier.com\">info@leSablier.com</a>
                                <br>
                                <span class=\"fa-link\">Website:</span>
                                <a href=\"#\">www.leSablier.com</a>
                            </p>
                            <p>143 avenue de Versailles
                                <br>IUT Paris Descartes
                                <br>Paris 75016
                                <br>France</p>
                        </div>
                        <!-- End Contact Details -->
                        <!-- Sample Menu -->
                        <div class=\"col-md-3 margin-bottom-20\">
                            <h3 class=\"margin-bottom-10\">Menu</h3>
                            <ul class=\"menu\">
                                <li>
                                    <a class=\"fa-tasks\" href=\"contact.php\">Nous contacter</a>
                                </li>
                                <li>
                                    <a class=\"fa-users\" href=\"nous.php\">Qui sommes nous?</a>
                                </li>
                                <li>
                                    <a class=\"fa-signal\" href=\"https://www.univ-paris5.fr/\">Site de Paris Descartes</a>
                                </li>

                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <!-- End Sample Menu -->
                        <div class=\"col-md-1\"></div>
                        <!-- Disclaimer -->
                        <div class=\"col-md-3 margin-bottom-20 padding-vert-30 text-center\">
                            <h3 class=\"color-gray margin-bottom-10\">Join our Newsletter</h3>
                            <p>
                                 Inscrivez vous et recevez nos
                                <br>derniers voyages et news!
                            </p>
                            <input type=\"email\">
                            <br>
                            <button class=\"btn btn-primary btn-lg margin-top-20\" type=\"button\">S'inscrire</button>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div id=\"footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footermenu\" class=\"col-md-8\">
                            <ul class=\"list-unstyled list-inline\">
                                <li>
                                    <a target=\"_blank\">Dominique Besson</a>
                                </li>
                                <li>
                                    <a target=\"_blank\">Julien Dos Santos</a>
                                </li>
                                <li>
                                    <a target=\"_blank\">Melodie Tanier</a>
                                </li>
                                <li>
                                    <a target=\"_blank\">Emilie Couleard</a>
                                </li>
                            </ul>
                        </div>
                        <div id=\"copyright\" class=\"col-md-4\">
                            <p class=\"pull-right\">(c) 2016 Your Copyright Info</p>
                        </div>
                    </div>
                </div>
            </div>
\t\t\t";
        
        $__internal_08197c3f22b20a95621d0e7ebfa53067860e74f8f3575d11060ed056288a168a->leave($__internal_08197c3f22b20a95621d0e7ebfa53067860e74f8f3575d11060ed056288a168a_prof);

    }

    // line 214
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7441e49d0c95055b467bc993318ec9dd743120f5eab8e246653e5595c429a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7441e49d0c95055b467bc993318ec9dd743120f5eab8e246653e5595c429a0b->enter($__internal_b7441e49d0c95055b467bc993318ec9dd743120f5eab8e246653e5595c429a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 215
        echo "\t\t\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>

\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.isotope.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.slicknav.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.visible.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>

\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>

\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slimbox2.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>

\t\t\t\t<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t\t\t\t<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lobibox.min.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
\t\t\t\t<script >
\t\t\t\t\t";
        // line 233
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 234
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg_err"]) {
                // line 235
                echo "\t\t\t\t\t\t\tLobibox.notify('error', {
\t\t\t\t\t\t\tmsg: '";
                // line 236
                echo twig_escape_filter($this->env, $context["msg_err"], "html", null, true);
                echo "'
\t\t\t\t\t\t\t});
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg_err'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "\t\t\t\t\t";
        }
        // line 240
        echo "\t\t\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 241
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg_err"]) {
                // line 242
                echo "\t\t\t\t\t\tLobibox.notify('info', {
\t\t\t\t\t\t\tmsg: '";
                // line 243
                echo twig_escape_filter($this->env, $context["msg_err"], "html", null, true);
                echo "'
\t\t\t\t\t\t});
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg_err'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "\t\t\t\t\t";
        }
        // line 247
        echo "\t\t\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 248
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg_err"]) {
                // line 249
                echo "\t\t\t\t\t\tLobibox.notify('warning', {
\t\t\t\t\t\t\tmsg: '";
                // line 250
                echo twig_escape_filter($this->env, $context["msg_err"], "html", null, true);
                echo "'
\t\t\t\t\t\t});
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg_err'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "\t\t\t\t\t";
        }
        // line 254
        echo "\t\t\t\t</script>
\t\t\t";
        
        $__internal_b7441e49d0c95055b467bc993318ec9dd743120f5eab8e246653e5595c429a0b->leave($__internal_b7441e49d0c95055b467bc993318ec9dd743120f5eab8e246653e5595c429a0b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  535 => 254,  532 => 253,  523 => 250,  520 => 249,  515 => 248,  512 => 247,  509 => 246,  500 => 243,  497 => 242,  492 => 241,  489 => 240,  486 => 239,  477 => 236,  474 => 235,  469 => 234,  467 => 233,  462 => 231,  457 => 229,  452 => 227,  447 => 225,  442 => 223,  437 => 221,  432 => 219,  427 => 217,  423 => 216,  418 => 215,  412 => 214,  321 => 129,  315 => 128,  308 => 127,  302 => 126,  291 => 121,  285 => 117,  279 => 113,  277 => 112,  269 => 106,  266 => 105,  260 => 102,  257 => 101,  254 => 100,  252 => 99,  247 => 97,  241 => 94,  235 => 91,  232 => 90,  229 => 89,  223 => 86,  220 => 85,  217 => 84,  214 => 83,  207 => 79,  204 => 78,  202 => 77,  196 => 74,  178 => 59,  162 => 50,  146 => 36,  140 => 35,  127 => 23,  123 => 22,  119 => 21,  115 => 20,  111 => 19,  107 => 18,  101 => 16,  95 => 15,  83 => 14,  73 => 256,  70 => 214,  67 => 128,  64 => 126,  62 => 35,  54 => 30,  49 => 29,  47 => 15,  43 => 14,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <head>
\t\t<!-- Meta -->
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
        <!-- Favicon -->
        <title>{% block title %}Bienvenue{% endblock %}</title>
        {% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" rel=\"stylesheet\">
\t\t\t<!-- Template CSS -->
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/responsive.css') }}\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/nexus.css') }}\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/custom.css') }}\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/LobiBox.min.css') }}\" rel=\"stylesheet\">
\t\t\t<!-- Google Fonts-->
\t\t\t<link href=\"http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300\" rel=\"stylesheet\" type=\"text/css\">
\t\t\t<link href=\"http://fonts.googleapis.com/css?family=PT+Sans\" type=\"text/css\" rel=\"stylesheet\">
\t\t\t<link href=\"http://fonts.googleapis.com/css?family=Roboto:400,300\" rel=\"stylesheet\" type=\"text/css\">
\t\t{% endblock %}
\t\t<link href=\"{{ asset('images/favicon.ico') }}\" rel=\"shortcut icon\" type=\"image/x-icon\">
\t\t<link href=\"{{ asset('images/favicon.ico') }}\" rel=\"icon\" type=\"image/x-icon\">
    </head>
    <body>

\t\t<div id=\"body-bg\">
        {% block body1 %}
            <ul class=\"social-icons pull-right hidden-xs\">
                <li class=\"social-rss\">
                    <a href=\"#\" target=\"_blank\" title=\"RSS\"></a>
                </li>
                <li class=\"social-twitter\">
                    <a href=\"#\" target=\"_blank\" title=\"Twitter\"></a>
                </li>
                <li class=\"social-facebook\">
                    <a href=\"#\" target=\"_blank\" title=\"Facebook\"></a>
                </li>
                <li class=\"social-googleplus\">
                    <a href=\"#\" target=\"_blank\" title=\"GooglePlus\"></a>
                </li>
            </ul>
            <div id=\"pre-header\" class=\"container\" style=\"height: {% if accueil is defined %} 340px {% else %} 100px {% endif %}\">
                <!-- Spacing above header -->
            </div>
            <div id=\"header\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Logo -->
                        <div class=\"logo\">
                            <a href=\"index.php\" title=\"Accueil\">
                                <img src=\"{{ asset('images/logo.png') }}\" alt=\"Logo\" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- Top Menu -->
             <div id=\"hornav\" class=\"container no-padding\">
                 <div class=\"row\">
                    <div class=\"col-md-12 no-padding\">
                        <div class=\"text-center visible-lg\">
                            <ul id=\"hornavmenu\" class=\"nav navbar-nav\">

                                <li>
                                    <a href=\"{{ path('authentification_homepage') }}\" class=\"fa-home\">Accueil</a>
                                </li>

\t\t\t\t\t\t\t\t\t{% if not app.session.get('IdUtilisateur', false) %}
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"{{ path('connexion_indexpage') }}\" class=\"fa-gears\">Authentification</a>

                                </li>
                                {% endif %}
\t\t\t\t\t\t\t\t{% if app.request.hasPreviousSession %}
\t\t\t\t\t\t\t\t\t{% if app.session.get('IdUtilisateur', false) %}
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"{{path('info_espace_perso_homepage') }}\" class=\"fa-copy\">espace personnel</a>
                                </li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endif %}
                                <li>
                                    <a href=\"{{ path('voyage_homepage') }}\" class=\"fa-th\">Voyages</a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"{{ path('info_complementaire_homepage') }}\" class=\"fa-font\">Qui sommes nous?</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('info_contact_homepage') }}\" class=\"fa-comment\">Contact</a>
                                </li>
\t\t\t\t\t\t\t\t{% if app.request.hasPreviousSession %}
\t\t\t\t\t\t\t\t\t{% if app.session.get('IdUtilisateur', false) %}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('deconnexion_indexpage') }}\" class=\"fa-gears\">Deconnexion</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{%endif %}
\t\t\t\t\t\t\t\t{% endif %}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
\t\t\t{% if accueil is defined %}
            <div id=\"post_header\" class=\"container\" style=\"height: 340px\">
                <!-- Spacing below header -->
            </div>
\t\t\t{% else %}
\t\t\t<div id=\"post_header\" class=\"container\" style=\"height: 40px \">
                <!-- Spacing below header -->
            </div>
\t\t\t{% endif %}
            <div id=\"content-top-border\" class=\"container\">
            </div>
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
\t\t\t{% endblock %}
\t\t\t{% block mid %}
\t\t\t{% endblock %}
\t\t\t{% block body2 %}
\t\t\t<!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id=\"content-bottom-border\" class=\"container\">
            </div>
            <div id=\"base\">
                <div class=\"container padding-vert-30 margin-top-60\">
                    <div class=\"row\">
                        <!-- Contact Details -->
                        <div class=\"col-md-4 margin-bottom-20\">
                            <h3 class=\"margin-bottom-10\">Pour nous contacter</h3>
                            <p>
                                <span class=\"fa-phone\">Telephone:</span>+33 6 66 66 66 66
                                <br>
                                <span class=\"fa-envelope\">Email:</span>
                                <a href=\"mailto:info@leSablier.com\">info@leSablier.com</a>
                                <br>
                                <span class=\"fa-link\">Website:</span>
                                <a href=\"#\">www.leSablier.com</a>
                            </p>
                            <p>143 avenue de Versailles
                                <br>IUT Paris Descartes
                                <br>Paris 75016
                                <br>France</p>
                        </div>
                        <!-- End Contact Details -->
                        <!-- Sample Menu -->
                        <div class=\"col-md-3 margin-bottom-20\">
                            <h3 class=\"margin-bottom-10\">Menu</h3>
                            <ul class=\"menu\">
                                <li>
                                    <a class=\"fa-tasks\" href=\"contact.php\">Nous contacter</a>
                                </li>
                                <li>
                                    <a class=\"fa-users\" href=\"nous.php\">Qui sommes nous?</a>
                                </li>
                                <li>
                                    <a class=\"fa-signal\" href=\"https://www.univ-paris5.fr/\">Site de Paris Descartes</a>
                                </li>

                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <!-- End Sample Menu -->
                        <div class=\"col-md-1\"></div>
                        <!-- Disclaimer -->
                        <div class=\"col-md-3 margin-bottom-20 padding-vert-30 text-center\">
                            <h3 class=\"color-gray margin-bottom-10\">Join our Newsletter</h3>
                            <p>
                                 Inscrivez vous et recevez nos
                                <br>derniers voyages et news!
                            </p>
                            <input type=\"email\">
                            <br>
                            <button class=\"btn btn-primary btn-lg margin-top-20\" type=\"button\">S'inscrire</button>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div id=\"footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footermenu\" class=\"col-md-8\">
                            <ul class=\"list-unstyled list-inline\">
                                <li>
                                    <a target=\"_blank\">Dominique Besson</a>
                                </li>
                                <li>
                                    <a target=\"_blank\">Julien Dos Santos</a>
                                </li>
                                <li>
                                    <a target=\"_blank\">Melodie Tanier</a>
                                </li>
                                <li>
                                    <a target=\"_blank\">Emilie Couleard</a>
                                </li>
                            </ul>
                        </div>
                        <div id=\"copyright\" class=\"col-md-4\">
                            <p class=\"pull-right\">(c) 2016 Your Copyright Info</p>
                        </div>
                    </div>
                </div>
            </div>
\t\t\t{% endblock %}
\t\t\t{% block javascripts %}
\t\t\t\t<script type=\"text/javascript\" src=\"{{ asset('js/jquery.min.js') }}\" type=\"text/javascript\"></script>
\t\t\t\t<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
\t\t\t\t<script type=\"text/javascript\" src=\"{{ asset('js/scripts.js') }}\"></script>

\t\t\t\t<script type=\"text/javascript\" src=\"{{ asset('js/jquery.isotope.js') }}\" type=\"text/javascript\"></script>

\t\t\t\t<script type=\"text/javascript\" src=\"{{ asset('js/jquery.slicknav.js') }}\" type=\"text/javascript\"></script>

\t\t\t\t<script type=\"text/javascript\" src=\"{{ asset('js/jquery.visible.js') }}\" charset=\"utf-8\"></script>

\t\t\t\t<script type=\"text/javascript\" src=\"{{ asset('js/jquery.sticky.js') }}\" charset=\"utf-8\"></script>

\t\t\t\t<script type=\"text/javascript\" src=\"{{ asset('js/slimbox2.js') }}\" charset=\"utf-8\"></script>

\t\t\t\t<script src=\"{{ asset('js/modernizr.custom.js') }}\" type=\"text/javascript\"></script>

\t\t\t\t<script src=\"{{ asset('js/lobibox.min.js') }}\"  type=\"text/javascript\"></script>
\t\t\t\t<script >
\t\t\t\t\t{% if app.request.hasPreviousSession %}
\t\t\t\t\t\t{% for msg_err in app.session.flashBag.get('error') %}
\t\t\t\t\t\t\tLobibox.notify('error', {
\t\t\t\t\t\t\tmsg: '{{msg_err}}'
\t\t\t\t\t\t\t});
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if app.request.hasPreviousSession %}
\t\t\t\t\t\t{% for msg_err in app.session.flashBag.get('notice') %}
\t\t\t\t\t\tLobibox.notify('info', {
\t\t\t\t\t\t\tmsg: '{{msg_err}}'
\t\t\t\t\t\t});
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if app.request.hasPreviousSession %}
\t\t\t\t\t\t{% for msg_err in app.session.flashBag.get('warning') %}
\t\t\t\t\t\tLobibox.notify('warning', {
\t\t\t\t\t\t\tmsg: '{{msg_err}}'
\t\t\t\t\t\t});
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t</script>
\t\t\t{% endblock %}
\t\t</div>
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\lesablier2\\app\\Resources\\views\\base.html.twig");
    }
}
