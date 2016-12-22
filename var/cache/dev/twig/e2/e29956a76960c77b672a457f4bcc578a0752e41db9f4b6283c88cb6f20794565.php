<?php

/* default/index.html.twig */
class __TwigTemplate_7e3198a397defac845b4d27b335766e16d2cf764a5591d94fd4c891f1f1fe436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mid' => array($this, 'block_mid'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6840795186193d48c625c0c1c80e6f863fd0cbe9cc93a7a13fdb21e34ef91afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6840795186193d48c625c0c1c80e6f863fd0cbe9cc93a7a13fdb21e34ef91afd->enter($__internal_6840795186193d48c625c0c1c80e6f863fd0cbe9cc93a7a13fdb21e34ef91afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6840795186193d48c625c0c1c80e6f863fd0cbe9cc93a7a13fdb21e34ef91afd->leave($__internal_6840795186193d48c625c0c1c80e6f863fd0cbe9cc93a7a13fdb21e34ef91afd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1ae5259166194b211f4a4083ac883266b61e536f4197f5f4abbe331980dd080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ae5259166194b211f4a4083ac883266b61e536f4197f5f4abbe331980dd080->enter($__internal_f1ae5259166194b211f4a4083ac883266b61e536f4197f5f4abbe331980dd080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Accueil
";
        
        $__internal_f1ae5259166194b211f4a4083ac883266b61e536f4197f5f4abbe331980dd080->leave($__internal_f1ae5259166194b211f4a4083ac883266b61e536f4197f5f4abbe331980dd080_prof);

    }

    // line 5
    public function block_mid($context, array $blocks = array())
    {
        $__internal_208e06ccf114398682c4025ef19cca3f63370f3019541923ba1bbc5f69e4b64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208e06ccf114398682c4025ef19cca3f63370f3019541923ba1bbc5f69e4b64e->enter($__internal_208e06ccf114398682c4025ef19cca3f63370f3019541923ba1bbc5f69e4b64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mid"));

        // line 6
        echo "    <div id=\"content\">
                <div class=\"container no-padding\">
                    <div class=\"row\">
                        <!-- Carousel Slideshow -->
                        <div id=\"carousel-example\" class=\"carousel slide\" data-ride=\"carousel\">
                            <!-- Carousel Indicators -->
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carousel-example\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carousel-example\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carousel-example\" data-slide-to=\"2\"></li>
\t\t\t\t\t\t\t\t<li data-target=\"#carousel-example\" data-slide-to=\"3\"></li>
                            </ol>
                            <div class=\"clearfix\"></div>
                            <!-- End Carousel Indicators -->
                            <!-- Carousel Images -->
                            <div class=\"carousel-inner\">
                                <div class=\"item active\">
                                    <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slideshow/slide1.jpg"), "html", null, true);
        echo "\"\">
                                </div>
                                <div class=\"item\">
                                    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slideshow/slide2.jpg"), "html", null, true);
        echo "\"\">
                                </div>
                                <div class=\"item\">
                                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slideshow/slide3.jpg"), "html", null, true);
        echo "\"\">
                                </div>
                                <div class=\"item\">
                                    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slideshow/slide4.jpg"), "html", null, true);
        echo "\"\">
                                </div>
                            </div>
                            <!-- End Carousel Images -->
                            <!-- Carousel Controls -->
                            <a class=\"left carousel-control\" href=\"#carousel-example\" data-slide=\"prev\">
                                <span class=\"glyphicon glyphicon-chevron-left\"></span>
                            </a>
                            <a class=\"right carousel-control\" href=\"#carousel-example\" data-slide=\"next\">
                                <span class=\"glyphicon glyphicon-chevron-right\"></span>
                            </a>
                            <!-- End Carousel Controls -->
                        </div>
                        <!-- End Carousel Slideshow -->
                    </div>
                </div>
                <div class=\"container background-gray-lighter\">
                    <div class=\"row margin-vert-40\">
                        <div class=\"col-md-4\">
                            <div class=\"col-md-4\">
                                <i class=\"fa-clock-o fa-5x color-primary\"></i>
                            </div>
                            <div class=\"col-md-8\">
                                <h2 class=\"margin-top-5 margin-bottom-0\">3 474 345</h2>
                                <p>HEURES REMONTES EN ARRIERE</p>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"col-md-4\">
                                <i class=\"fa-tachometer fa-5x color-primary\"></i>
                            </div>
                            <div class=\"col-md-8\">
                                <h2 class=\"margin-top-5 margin-bottom-0\">3 324</h2>
                                <p>VOYAGES DANS LE TEMPS</p>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"col-md-4\">
                                <i class=\"fa-users fa-5x color-primary\"></i>
                            </div>
                            <div class=\"col-md-8\">
                                <h2 class=\"margin-top-5 margin-bottom-0\">1567</h2>
                                <p>CLIENTS SATISFAITS</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"container background-white\">
                    <div class=\"row margin-vert-30\">
                        <!-- Main Text -->
                        <div class=\"col-md-12\">
                            <h2 class=\"text-center\">Bienvenue sur le Sablier</h2>
                            <p class=\"text-center\">Le site unique pour voyager dans le temps</p>
                            <p class=\"text-center\">Selectionnez votre voyage, remplissez le formulaire et passez à l'agence pour vivre une aventure extraordinaire. </p>
                        </div>
                        <!-- End Main Text -->
                    </div>
                </div>
                <div class=\"container background-gray-lighter\">
                    <div class=\"row padding-vert-20\">
                        <div class=\"col-md-1\">
                        </div>
                        <div class=\"col-md-10\">
                            <!-- Portfolio -->
                            <ul class=\"portfolio-group\">
\t\t\t\t\t\t\t\t<!-- Portfolio Item -->
                                <li class=\"portfolio-item col-sm-6 col-xs-6 padding-20\">

                                        <figure class=\"animate fadeInLeft\">
                                            <img alt=\"image1\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/frontpage/image1.jpg"), "html", null, true);
        echo "\">
                                            <figcaption>
                                                <h3>La Pré-histoire</h3>
                                                <span>Qui n'a jamais rêvé de voir un dinosaure de ses propres yeux ? </span>
                                            </figcaption>
                                        </figure>

                                </li>
                                <!-- //Portfolio Item// -->
                                <!-- Portfolio Item -->
                                <li class=\"portfolio-item col-sm-6 col-xs-6 padding-20\">

                                        <figure class=\"animate fadeInRight\">
                                            <img alt=\"image2\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/frontpage/image2.jpg"), "html", null, true);
        echo "\">
                                            <figcaption>
                                                <h3>L'Egypte Antique</h3>
                                                <span>Visitez les pyramides et rencontrez les pharaons ailleurs que dans leurs tombeaux! </span>
                                            </figcaption>
                                        </figure>

                                </li>
                                <!-- //Portfolio Item// -->
                                <!-- Portfolio Item -->
                                <li class=\"portfolio-item col-sm-6 col-xs-6 padding-20\">

                                        <figure class=\"animate fadeInLeft\">
                                            <img alt=\"image3\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/frontpage/image3.jpg"), "html", null, true);
        echo "\">
                                            <figcaption>
                                                <h3>Le Moyen-Age</h3>
                                                <span>Rencontrer un roi ou une reine et devenir un chevalier est une occasion unique qu'on ne peut vivre qu'avec Le Sablier!</span>
                                            </figcaption>
                                        </figure>

                                </li>
                                <!-- //Portfolio Item// -->
                                <!-- Portfolio Item -->
                                <li class=\"portfolio-item col-sm-6 col-xs-6 padding-20\">

                                        <figure class=\"animate fadeInRight\">
                                            <img alt=\"image4\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/frontpage/image4.jpg"), "html", null, true);
        echo "\">
                                            <figcaption>
                                                <h3>La Renaissance</h3>
                                                <span>Decouvrez les plus grands esprits du monde comme Leonard de Vinci ou Galilée et leurs decouvertes! </span>
                                            </figcaption>
                                        </figure>

                                </li>
                                <!-- //Portfolio Item// -->
                                <!-- Portfolio Item -->
                                <li class=\"portfolio-item col-sm-6 col-xs-6 padding-20\">

                                        <figure class=\"animate fadeInLeft\">
                                            <img alt=\"image5\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/frontpage/image5.jpg"), "html", null, true);
        echo "\">
                                            <figcaption>
                                                <h3>Le Futur 2.0</h3>
                                                <span>Vous mourrez d'envie de voir l'evolution technologique sans précédent que connaitra la civilisation humaine? Allez 100 ans en avant! </span>
                                            </figcaption>
                                        </figure>

                                </li>
                                <!-- //Portfolio Item// -->
                                <!-- Portfolio Item -->
                                <li class=\"portfolio-item col-sm-6 col-xs-6 padding-20\">

                                        <figure class=\"animate fadeInRight\">
                                            <img alt=\"image6\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/frontpage/image6.jpg"), "html", null, true);
        echo "\">
                                            <figcaption>
                                                <h3>Le Futur 3.0</h3>
                                                <span>Mystère mystère...</span>
                                            </figcaption>
                                        </figure>

                                </li>
                            </ul>
                            <!-- End Portfolio -->
                        </div>
                        <div class=\"col-md-1\">
                        </div>
                    </div>
                </div>
\t\t\t\t<div class=\"container background-white\">
                    <div class=\"row margin-vert-30\">
\t\t\t\t\t\t<h1 class=\"text-center\">Quelques avis...</h1>
\t\t\t\t\t\t";
        // line 184
        if ((null === (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")))) {
            // line 185
            echo "                            <div class=\"col-md-12 login-page margin-bottom-40\">
                                <h2 class=\"text-left\">Aucuns</h2>
                            </div>
                        ";
        } else {
            // line 189
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")));
            foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
                // line 190
                echo "                                <div class=\"col-md-12 login-page margin-bottom-40\">
                                    <h2 class=\"text-left\">";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($context["avi"], "prenom", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["avi"], "titre", array()), "html", null, true);
                echo "</br></h2>
                                    <p class=\"text-left\">";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avi"], "dateHist", array()), "format", array(0 => "d"), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avi"], "dateHist", array()), "format", array(0 => "m"), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avi"], "dateHist", array()), "format", array(0 => "Y"), "method"), "html", null, true);
                echo "</br></p>
                                    <p class=\"text-left\"><em>";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute($context["avi"], "contenu", array()), "html", null, true);
                echo "</em></p>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "                        ";
        }
        // line 197
        echo "                    </div>
                </div>
            </div>
";
        
        $__internal_208e06ccf114398682c4025ef19cca3f63370f3019541923ba1bbc5f69e4b64e->leave($__internal_208e06ccf114398682c4025ef19cca3f63370f3019541923ba1bbc5f69e4b64e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 197,  304 => 196,  295 => 193,  287 => 192,  281 => 191,  278 => 190,  273 => 189,  267 => 185,  265 => 184,  244 => 166,  228 => 153,  212 => 140,  196 => 127,  180 => 114,  164 => 101,  92 => 32,  86 => 29,  80 => 26,  74 => 23,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}
Accueil
{% endblock %}
{% block mid %}
    <div id=\"content\">
                <div class=\"container no-padding\">
                    <div class=\"row\">
                        <!-- Carousel Slideshow -->
                        <div id=\"carousel-example\" class=\"carousel slide\" data-ride=\"carousel\">
                            <!-- Carousel Indicators -->
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carousel-example\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carousel-example\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carousel-example\" data-slide-to=\"2\"></li>
\t\t\t\t\t\t\t\t<li data-target=\"#carousel-example\" data-slide-to=\"3\"></li>
                            </ol>
                            <div class=\"clearfix\"></div>
                            <!-- End Carousel Indicators -->
                            <!-- Carousel Images -->
                            <div class=\"carousel-inner\">
                                <div class=\"item active\">
                                    <img src=\"{{ asset('images/slideshow/slide1.jpg') }}\"\">
                                </div>
                                <div class=\"item\">
                                    <img src=\"{{ asset('images/slideshow/slide2.jpg') }}\"\">
                                </div>
                                <div class=\"item\">
                                    <img src=\"{{ asset('images/slideshow/slide3.jpg') }}\"\">
                                </div>
                                <div class=\"item\">
                                    <img src=\"{{ asset('images/slideshow/slide4.jpg') }}\"\">
                                </div>
                            </div>
                            <!-- End Carousel Images -->
                            <!-- Carousel Controls -->
                            <a class=\"left carousel-control\" href=\"#carousel-example\" data-slide=\"prev\">
                                <span class=\"glyphicon glyphicon-chevron-left\"></span>
                            </a>
                            <a class=\"right carousel-control\" href=\"#carousel-example\" data-slide=\"next\">
                                <span class=\"glyphicon glyphicon-chevron-right\"></span>
                            </a>
                            <!-- End Carousel Controls -->
                        </div>
                        <!-- End Carousel Slideshow -->
                    </div>
                </div>
                <div class=\"container background-gray-lighter\">
                    <div class=\"row margin-vert-40\">
                        <div class=\"col-md-4\">
                            <div class=\"col-md-4\">
                                <i class=\"fa-clock-o fa-5x color-primary\"></i>
                            </div>
                            <div class=\"col-md-8\">
                                <h2 class=\"margin-top-5 margin-bottom-0\">3 474 345</h2>
                                <p>HEURES REMONTES EN ARRIERE</p>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"col-md-4\">
                                <i class=\"fa-tachometer fa-5x color-primary\"></i>
                            </div>
                            <div class=\"col-md-8\">
                                <h2 class=\"margin-top-5 margin-bottom-0\">3 324</h2>
                                <p>VOYAGES DANS LE TEMPS</p>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"col-md-4\">
                                <i class=\"fa-users fa-5x color-primary\"></i>
                            </div>
                            <div class=\"col-md-8\">
                                <h2 class=\"margin-top-5 margin-bottom-0\">1567</h2>
                                <p>CLIENTS SATISFAITS</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"container background-white\">
                    <div class=\"row margin-vert-30\">
                        <!-- Main Text -->
                        <div class=\"col-md-12\">
                            <h2 class=\"text-center\">Bienvenue sur le Sablier</h2>
                            <p class=\"text-center\">Le site unique pour voyager dans le temps</p>
                            <p class=\"text-center\">Selectionnez votre voyage, remplissez le formulaire et passez à l'agence pour vivre une aventure extraordinaire. </p>
                        </div>
                        <!-- End Main Text -->
                    </div>
                </div>
                <div class=\"container background-gray-lighter\">
                    <div class=\"row padding-vert-20\">
                        <div class=\"col-md-1\">
                        </div>
                        <div class=\"col-md-10\">
                            <!-- Portfolio -->
                            <ul class=\"portfolio-group\">
\t\t\t\t\t\t\t\t<!-- Portfolio Item -->
                                <li class=\"portfolio-item col-sm-6 col-xs-6 padding-20\">

                                        <figure class=\"animate fadeInLeft\">
                                            <img alt=\"image1\" src=\"{{ asset('images/frontpage/image1.jpg') }}\">
                                            <figcaption>
                                                <h3>La Pré-histoire</h3>
                                                <span>Qui n'a jamais rêvé de voir un dinosaure de ses propres yeux ? </span>
                                            </figcaption>
                                        </figure>

                                </li>
                                <!-- //Portfolio Item// -->
                                <!-- Portfolio Item -->
                                <li class=\"portfolio-item col-sm-6 col-xs-6 padding-20\">

                                        <figure class=\"animate fadeInRight\">
                                            <img alt=\"image2\" src=\"{{ asset('images/frontpage/image2.jpg') }}\">
                                            <figcaption>
                                                <h3>L'Egypte Antique</h3>
                                                <span>Visitez les pyramides et rencontrez les pharaons ailleurs que dans leurs tombeaux! </span>
                                            </figcaption>
                                        </figure>

                                </li>
                                <!-- //Portfolio Item// -->
                                <!-- Portfolio Item -->
                                <li class=\"portfolio-item col-sm-6 col-xs-6 padding-20\">

                                        <figure class=\"animate fadeInLeft\">
                                            <img alt=\"image3\" src=\"{{ asset('images/frontpage/image3.jpg') }}\">
                                            <figcaption>
                                                <h3>Le Moyen-Age</h3>
                                                <span>Rencontrer un roi ou une reine et devenir un chevalier est une occasion unique qu'on ne peut vivre qu'avec Le Sablier!</span>
                                            </figcaption>
                                        </figure>

                                </li>
                                <!-- //Portfolio Item// -->
                                <!-- Portfolio Item -->
                                <li class=\"portfolio-item col-sm-6 col-xs-6 padding-20\">

                                        <figure class=\"animate fadeInRight\">
                                            <img alt=\"image4\" src=\"{{ asset('images/frontpage/image4.jpg') }}\">
                                            <figcaption>
                                                <h3>La Renaissance</h3>
                                                <span>Decouvrez les plus grands esprits du monde comme Leonard de Vinci ou Galilée et leurs decouvertes! </span>
                                            </figcaption>
                                        </figure>

                                </li>
                                <!-- //Portfolio Item// -->
                                <!-- Portfolio Item -->
                                <li class=\"portfolio-item col-sm-6 col-xs-6 padding-20\">

                                        <figure class=\"animate fadeInLeft\">
                                            <img alt=\"image5\" src=\"{{ asset('images/frontpage/image5.jpg') }}\">
                                            <figcaption>
                                                <h3>Le Futur 2.0</h3>
                                                <span>Vous mourrez d'envie de voir l'evolution technologique sans précédent que connaitra la civilisation humaine? Allez 100 ans en avant! </span>
                                            </figcaption>
                                        </figure>

                                </li>
                                <!-- //Portfolio Item// -->
                                <!-- Portfolio Item -->
                                <li class=\"portfolio-item col-sm-6 col-xs-6 padding-20\">

                                        <figure class=\"animate fadeInRight\">
                                            <img alt=\"image6\" src=\"{{ asset('images/frontpage/image6.jpg') }}\">
                                            <figcaption>
                                                <h3>Le Futur 3.0</h3>
                                                <span>Mystère mystère...</span>
                                            </figcaption>
                                        </figure>

                                </li>
                            </ul>
                            <!-- End Portfolio -->
                        </div>
                        <div class=\"col-md-1\">
                        </div>
                    </div>
                </div>
\t\t\t\t<div class=\"container background-white\">
                    <div class=\"row margin-vert-30\">
\t\t\t\t\t\t<h1 class=\"text-center\">Quelques avis...</h1>
\t\t\t\t\t\t{% if avis is null%}
                            <div class=\"col-md-12 login-page margin-bottom-40\">
                                <h2 class=\"text-left\">Aucuns</h2>
                            </div>
                        {% else %}
                            {% for avi in avis %}
                                <div class=\"col-md-12 login-page margin-bottom-40\">
                                    <h2 class=\"text-left\">{{avi.prenom}} - {{avi.titre}}</br></h2>
                                    <p class=\"text-left\">{{avi.dateHist.format('d') }}/{{ avi.dateHist.format('m') }}/{{ avi.dateHist.format('Y') }}</br></p>
                                    <p class=\"text-left\"><em>{{avi.contenu}}</em></p>
                                </div>
                            {% endfor %}
                        {% endif %}
                    </div>
                </div>
            </div>
{% endblock %}
", "default/index.html.twig", "C:\\wamp64\\www\\lesablier2\\app\\Resources\\views\\default\\index.html.twig");
    }
}
