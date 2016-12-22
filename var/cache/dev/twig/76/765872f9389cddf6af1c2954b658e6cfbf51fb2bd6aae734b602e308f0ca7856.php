<?php

/* InfoComplementaire\espacePerso.html.twig */
class __TwigTemplate_6d9fb194809c68556d63ba5f5ce74cbc04752f72f540c675f86e525f83b5aca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InfoComplementaire\\espacePerso.html.twig", 1);
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
        $__internal_c10dce0fb4ed92ff7cc86c0995bd72064cb59838bb13608d9f4d5ae03bb35ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10dce0fb4ed92ff7cc86c0995bd72064cb59838bb13608d9f4d5ae03bb35ab5->enter($__internal_c10dce0fb4ed92ff7cc86c0995bd72064cb59838bb13608d9f4d5ae03bb35ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InfoComplementaire\\espacePerso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c10dce0fb4ed92ff7cc86c0995bd72064cb59838bb13608d9f4d5ae03bb35ab5->leave($__internal_c10dce0fb4ed92ff7cc86c0995bd72064cb59838bb13608d9f4d5ae03bb35ab5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_51b288fbf66a6e144f635f757ff19611406a25fefe46370297d9cb85e67df786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b288fbf66a6e144f635f757ff19611406a25fefe46370297d9cb85e67df786->enter($__internal_51b288fbf66a6e144f635f757ff19611406a25fefe46370297d9cb85e67df786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Espace Personnel
";
        
        $__internal_51b288fbf66a6e144f635f757ff19611406a25fefe46370297d9cb85e67df786->leave($__internal_51b288fbf66a6e144f635f757ff19611406a25fefe46370297d9cb85e67df786_prof);

    }

    // line 7
    public function block_mid($context, array $blocks = array())
    {
        $__internal_505dfeb0032ccdb1d6c0ee0382a89017322f8ab23d20fb84bfbdc39602c4a60f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505dfeb0032ccdb1d6c0ee0382a89017322f8ab23d20fb84bfbdc39602c4a60f->enter($__internal_505dfeb0032ccdb1d6c0ee0382a89017322f8ab23d20fb84bfbdc39602c4a60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mid"));

        // line 8
        echo "<!-- === BEGIN CONTENT === -->
            <div id=\"content\">
                <div class=\"container background-white\">
                    <div class=\"row margin-vert-30\">
                        <div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 animate fadeIn\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/image0"), "html", null, true);
        echo ".jpeg\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 margin-bottom-10 \">
\t\t\t\t\t\t\t\t\t<h1 class=\"padding-top-10 pull-left\">Mes informations personnelles</h1>
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"animate fadeInRight\">
\t\t\t\t\t\t\t\t\t<p><h3>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "nom", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t<p><h3>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "prenom", array()), "html", null, true);
        echo "</h3></p>
\t\t\t\t\t\t\t\t\t<p><h3>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "email", array()), "html", null, true);
        echo "</h3></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    <hr>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 margin-bottom-10 \">
\t\t\t\t\t\t\t\t\t<h1 class=\"padding-top-10 pull-left\">Mes Réservations
\t\t\t\t\t\t\t\t\t<small>(voyages)</small>
                                    </h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 portfolio-group no-padding\">
\t\t\t\t\t\t\t\t<!-- Portfolio Item -->
                                ";
        // line 36
        if ( !(null === (isset($context["destinations"]) ? $context["destinations"] : $this->getContext($context, "destinations")))) {
            // line 37
            echo "    \t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["destinations"]) ? $context["destinations"] : $this->getContext($context, "destinations")));
            foreach ($context['_seq'] as $context["_key"] => $context["destination"]) {
                // line 38
                echo "    \t\t\t\t\t\t\t\t<div class=\"col-md-6 portfolio-item margin-bottom-40 animate fadeInLeft\">
    \t\t\t\t\t\t\t\t\t<div>
    \t\t\t\t\t\t\t\t\t\t<a href=\"#\">
    \t\t\t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/image"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["destination"], "id", array()), "html", null, true);
                echo ".jpg\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["destination"], "id", array()), "html", null, true);
                echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"margin-top-20\">";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["destination"], "pays", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["destination"], "ville", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["destination"], "dateHist", array()), "format", array(0 => "d"), "method"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["destination"], "dateHist", array()), "format", array(0 => "m"), "method"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["destination"], "dateHist", array()), "format", array(0 => "Y"), "method"), "html", null, true);
                echo "</h3>
                                                        <h3><em>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["destination"], "titre", array()), "html", null, true);
                echo "</em></h3>
                                                        <span>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["destination"], "qtePers", array()), "html", null, true);
                echo " place(s) pour le ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["destination"], "dateCom", array()), "format", array(0 => "d"), "method"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["destination"], "dateCom", array()), "format", array(0 => "m"), "method"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["destination"], "dateCom", array()), "format", array(0 => "Y"), "method"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["destination"], "heureCom", array()), "format", array(0 => "h"), "method"), "html", null, true);
                echo "H";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["destination"], "heureCom", array()), "format", array(0 => "i"), "method"), "html", null, true);
                echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<!-- End Portfolio Item -->
    \t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destination'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                                ";
        } else {
            // line 55
            echo "                                    <h4><em>Aucunes</em></h4>
                                ";
        }
        // line 57
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    <hr>
                            <!-- End Accordion -->
                        </div>
\t\t\t\t\t\t<h1 class=\"text-right padding-top-10 pull-right\">Mes Avis</h1>
\t\t\t\t\t\t<?php
\t\t\t\t\t\tforeach(\$avis As \$avi){
\t\t\t\t\t\t?>
                        <!-- Main Text -->
                        <div class=\"col-md-12 login-page margin-bottom-40\">
                            <h2 class=\"text-left\"><?php echo \$avi['Lieu'] .' - '. \$avi['DateHist'];?></h2>
                            <p class=\"text-left\"><em><?php echo htmlspecialchars(\$avi['Contenu']); ?></em></p>
                        </div>
                        <!-- End Main Text -->
\t\t\t\t\t\t<?php
\t\t\t\t\t\t}
\t\t\t\t\t\t?>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
";
        
        $__internal_505dfeb0032ccdb1d6c0ee0382a89017322f8ab23d20fb84bfbdc39602c4a60f->leave($__internal_505dfeb0032ccdb1d6c0ee0382a89017322f8ab23d20fb84bfbdc39602c4a60f_prof);

    }

    public function getTemplateName()
    {
        return "InfoComplementaire\\espacePerso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  161 => 55,  158 => 54,  134 => 46,  130 => 45,  118 => 44,  110 => 42,  104 => 38,  99 => 37,  97 => 36,  81 => 23,  77 => 22,  73 => 21,  64 => 15,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
Espace Personnel
{% endblock %}

{% block mid %}
<!-- === BEGIN CONTENT === -->
            <div id=\"content\">
                <div class=\"container background-white\">
                    <div class=\"row margin-vert-30\">
                        <div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 animate fadeIn\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/portfolio/image0')}}.jpeg\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 margin-bottom-10 \">
\t\t\t\t\t\t\t\t\t<h1 class=\"padding-top-10 pull-left\">Mes informations personnelles</h1>
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"animate fadeInRight\">
\t\t\t\t\t\t\t\t\t<p><h3>{{utilisateur.nom}}</h3>
\t\t\t\t\t\t\t\t\t<p><h3>{{utilisateur.prenom}}</h3></p>
\t\t\t\t\t\t\t\t\t<p><h3>{{utilisateur.email}}</h3></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    <hr>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 margin-bottom-10 \">
\t\t\t\t\t\t\t\t\t<h1 class=\"padding-top-10 pull-left\">Mes Réservations
\t\t\t\t\t\t\t\t\t<small>(voyages)</small>
                                    </h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 portfolio-group no-padding\">
\t\t\t\t\t\t\t\t<!-- Portfolio Item -->
                                {% if not destinations is null %}
    \t\t\t\t\t\t\t\t{% for destination in destinations %}
    \t\t\t\t\t\t\t\t<div class=\"col-md-6 portfolio-item margin-bottom-40 animate fadeInLeft\">
    \t\t\t\t\t\t\t\t\t<div>
    \t\t\t\t\t\t\t\t\t\t<a href=\"#\">
    \t\t\t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('images/portfolio/image')}}{{destination.id}}.jpg\" alt=\"{{destination.id}}\">
    \t\t\t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"margin-top-20\">{{destination.pays}} {{destination.ville}} {{ destination.dateHist.format('d') }}-{{ destination.dateHist.format('m') }}-{{ destination.dateHist.format('Y') }}</h3>
                                                        <h3><em>{{destination.titre}}</em></h3>
                                                        <span>{{destination.qtePers}} place(s) pour le {{ destination.dateCom.format('d') }}-{{ destination.dateCom.format('m') }}-{{ destination.dateCom.format('Y') }} à {{ destination.heureCom.format('h')}}H{{ destination.heureCom.format('i')}}</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<!-- End Portfolio Item -->
    \t\t\t\t\t\t\t\t{% endfor %}
                                {% else %}
                                    <h4><em>Aucunes</em></h4>
                                {% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    <hr>
                            <!-- End Accordion -->
                        </div>
\t\t\t\t\t\t<h1 class=\"text-right padding-top-10 pull-right\">Mes Avis</h1>
\t\t\t\t\t\t<?php
\t\t\t\t\t\tforeach(\$avis As \$avi){
\t\t\t\t\t\t?>
                        <!-- Main Text -->
                        <div class=\"col-md-12 login-page margin-bottom-40\">
                            <h2 class=\"text-left\"><?php echo \$avi['Lieu'] .' - '. \$avi['DateHist'];?></h2>
                            <p class=\"text-left\"><em><?php echo htmlspecialchars(\$avi['Contenu']); ?></em></p>
                        </div>
                        <!-- End Main Text -->
\t\t\t\t\t\t<?php
\t\t\t\t\t\t}
\t\t\t\t\t\t?>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
{% endblock %}
", "InfoComplementaire\\espacePerso.html.twig", "C:\\wamp64\\www\\lesablier2\\app\\Resources\\views\\InfoComplementaire\\espacePerso.html.twig");
    }
}
