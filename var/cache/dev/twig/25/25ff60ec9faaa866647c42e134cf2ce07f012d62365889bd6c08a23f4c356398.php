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
        $__internal_dfc2ba59314645730e2e03ac996863a4a2746c23bdd7d09108cb76f0c4c508e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc2ba59314645730e2e03ac996863a4a2746c23bdd7d09108cb76f0c4c508e4->enter($__internal_dfc2ba59314645730e2e03ac996863a4a2746c23bdd7d09108cb76f0c4c508e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 249
        echo "\t\t</div>
    </body>
</html>
";
        
        $__internal_dfc2ba59314645730e2e03ac996863a4a2746c23bdd7d09108cb76f0c4c508e4->leave($__internal_dfc2ba59314645730e2e03ac996863a4a2746c23bdd7d09108cb76f0c4c508e4_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_079f728291ec077d25ac52738fc0206fc9f2ed764ffff0316f10f0bb4a8a95f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079f728291ec077d25ac52738fc0206fc9f2ed764ffff0316f10f0bb4a8a95f6->enter($__internal_079f728291ec077d25ac52738fc0206fc9f2ed764ffff0316f10f0bb4a8a95f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue";
        
        $__internal_079f728291ec077d25ac52738fc0206fc9f2ed764ffff0316f10f0bb4a8a95f6->leave($__internal_079f728291ec077d25ac52738fc0206fc9f2ed764ffff0316f10f0bb4a8a95f6_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d89164ef7898519a713f5fd7d6235f885275fc5420f747d273ac4161bb4b89d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89164ef7898519a713f5fd7d6235f885275fc5420f747d273ac4161bb4b89d8->enter($__internal_d89164ef7898519a713f5fd7d6235f885275fc5420f747d273ac4161bb4b89d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d89164ef7898519a713f5fd7d6235f885275fc5420f747d273ac4161bb4b89d8->leave($__internal_d89164ef7898519a713f5fd7d6235f885275fc5420f747d273ac4161bb4b89d8_prof);

    }

    // line 35
    public function block_body1($context, array $blocks = array())
    {
        $__internal_5812e2f32dcf4839f8d0276d74a70ee128369489deeb394fa5b326af426e9c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5812e2f32dcf4839f8d0276d74a70ee128369489deeb394fa5b326af426e9c1b->enter($__internal_5812e2f32dcf4839f8d0276d74a70ee128369489deeb394fa5b326af426e9c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body1"));

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
                            <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("authentification_homepage");
        echo "\" title=\"Accueil\">
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
        
        $__internal_5812e2f32dcf4839f8d0276d74a70ee128369489deeb394fa5b326af426e9c1b->leave($__internal_5812e2f32dcf4839f8d0276d74a70ee128369489deeb394fa5b326af426e9c1b_prof);

    }

    // line 126
    public function block_mid($context, array $blocks = array())
    {
        $__internal_f3c819f7f60ab643b20f66572d3a1155d51c1005fc54a867af1f181557981463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c819f7f60ab643b20f66572d3a1155d51c1005fc54a867af1f181557981463->enter($__internal_f3c819f7f60ab643b20f66572d3a1155d51c1005fc54a867af1f181557981463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mid"));

        // line 127
        echo "\t\t\t";
        
        $__internal_f3c819f7f60ab643b20f66572d3a1155d51c1005fc54a867af1f181557981463->leave($__internal_f3c819f7f60ab643b20f66572d3a1155d51c1005fc54a867af1f181557981463_prof);

    }

    // line 128
    public function block_body2($context, array $blocks = array())
    {
        $__internal_984f1cf6062b83f181ac5cd3d97fa1fa00c7bebdfee18ecb2788695ecda7d231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984f1cf6062b83f181ac5cd3d97fa1fa00c7bebdfee18ecb2788695ecda7d231->enter($__internal_984f1cf6062b83f181ac5cd3d97fa1fa00c7bebdfee18ecb2788695ecda7d231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

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
        
        $__internal_984f1cf6062b83f181ac5cd3d97fa1fa00c7bebdfee18ecb2788695ecda7d231->leave($__internal_984f1cf6062b83f181ac5cd3d97fa1fa00c7bebdfee18ecb2788695ecda7d231_prof);

    }

    // line 214
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dde03bf81a88a90f1f529a917e4ccbbb0802628db4e342f645d683c3fb5fa188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde03bf81a88a90f1f529a917e4ccbbb0802628db4e342f645d683c3fb5fa188->enter($__internal_dde03bf81a88a90f1f529a917e4ccbbb0802628db4e342f645d683c3fb5fa188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.isotope.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.slicknav.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.visible.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slimbox2.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
\t\t\t\t<script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t\t<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lobibox.min.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
\t\t\t\t<script >
\t\t\t\t\t";
        // line 226
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 227
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg_err"]) {
                // line 228
                echo "\t\t\t\t\t\t\tLobibox.notify('error', {
\t\t\t\t\t\t\tmsg: '";
                // line 229
                echo twig_escape_filter($this->env, $context["msg_err"], "html", null, true);
                echo "'
\t\t\t\t\t\t\t});
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg_err'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "\t\t\t\t\t";
        }
        // line 233
        echo "\t\t\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 234
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg_err"]) {
                // line 235
                echo "\t\t\t\t\t\tLobibox.notify('info', {
\t\t\t\t\t\t\tmsg: '";
                // line 236
                echo twig_escape_filter($this->env, $context["msg_err"], "html", null, true);
                echo "'
\t\t\t\t\t\t});
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg_err"]) {
                // line 242
                echo "\t\t\t\t\t\tLobibox.notify('warning', {
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
        echo "\t\t\t\t</script>
\t\t\t";
        
        $__internal_dde03bf81a88a90f1f529a917e4ccbbb0802628db4e342f645d683c3fb5fa188->leave($__internal_dde03bf81a88a90f1f529a917e4ccbbb0802628db4e342f645d683c3fb5fa188_prof);

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
        return array (  531 => 247,  528 => 246,  519 => 243,  516 => 242,  511 => 241,  508 => 240,  505 => 239,  496 => 236,  493 => 235,  488 => 234,  485 => 233,  482 => 232,  473 => 229,  470 => 228,  465 => 227,  463 => 226,  458 => 224,  454 => 223,  450 => 222,  446 => 221,  442 => 220,  438 => 219,  434 => 218,  430 => 217,  426 => 216,  421 => 215,  415 => 214,  324 => 129,  318 => 128,  311 => 127,  305 => 126,  294 => 121,  288 => 117,  282 => 113,  280 => 112,  272 => 106,  269 => 105,  263 => 102,  260 => 101,  257 => 100,  255 => 99,  250 => 97,  244 => 94,  238 => 91,  235 => 90,  232 => 89,  226 => 86,  223 => 85,  220 => 84,  217 => 83,  210 => 79,  207 => 78,  205 => 77,  199 => 74,  181 => 59,  177 => 58,  162 => 50,  146 => 36,  140 => 35,  127 => 23,  123 => 22,  119 => 21,  115 => 20,  111 => 19,  107 => 18,  101 => 16,  95 => 15,  83 => 14,  73 => 249,  70 => 214,  67 => 128,  64 => 126,  62 => 35,  54 => 30,  49 => 29,  47 => 15,  43 => 14,  28 => 1,);
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
                            <a href=\"{{path('authentification_homepage')}}\" title=\"Accueil\">
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
