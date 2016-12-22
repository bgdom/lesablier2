<?php

/* reservation/voyage.html.twig */
class __TwigTemplate_f3e3e83ee9edc35fbc5cab4f52b325ad8b13b87ddbf0269cd6c36b44ffdfd099 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/voyage.html.twig", 1);
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
        $__internal_6f9c84c0bad89751b23fc8f0049e1191bb6d67bca96893b094a2f130990fac43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9c84c0bad89751b23fc8f0049e1191bb6d67bca96893b094a2f130990fac43->enter($__internal_6f9c84c0bad89751b23fc8f0049e1191bb6d67bca96893b094a2f130990fac43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/voyage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f9c84c0bad89751b23fc8f0049e1191bb6d67bca96893b094a2f130990fac43->leave($__internal_6f9c84c0bad89751b23fc8f0049e1191bb6d67bca96893b094a2f130990fac43_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_95cc835e617b1446841e1cd3d50a891bad0b713fc22784f46d724b45edf5133a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95cc835e617b1446841e1cd3d50a891bad0b713fc22784f46d724b45edf5133a->enter($__internal_95cc835e617b1446841e1cd3d50a891bad0b713fc22784f46d724b45edf5133a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        if (array_key_exists("destination", $context)) {
            // line 5
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : $this->getContext($context, "destination")), "titre", array()), "html", null, true);
            echo "
\t";
        } else {
            // line 7
            echo "\t\tNothing
\t";
        }
        
        $__internal_95cc835e617b1446841e1cd3d50a891bad0b713fc22784f46d724b45edf5133a->leave($__internal_95cc835e617b1446841e1cd3d50a891bad0b713fc22784f46d724b45edf5133a_prof);

    }

    // line 11
    public function block_mid($context, array $blocks = array())
    {
        $__internal_e59ccbf64e42465f42e74be7badd7c1d2d1e5ca1f7d1d4e71f489558abf4f8da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59ccbf64e42465f42e74be7badd7c1d2d1e5ca1f7d1d4e71f489558abf4f8da->enter($__internal_e59ccbf64e42465f42e74be7badd7c1d2d1e5ca1f7d1d4e71f489558abf4f8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mid"));

        // line 12
        echo "\t";
        if (array_key_exists("destination", $context)) {
            // line 13
            echo "\t\t\t<div id=\"content\">
\t\t\t\t<div class=\"container background-white\">
\t\t\t\t\t<div class=\"row margin-vert-30\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 portfolio-group no-padding\">
\t\t\t\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 portfolio-item margin-bottom-40 code\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/image"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : $this->getContext($context, "destination")), "id", array()), "html", null, true);
            echo ".jpg\" alt=\"image";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : $this->getContext($context, "destination")), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"margin-top-20\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : $this->getContext($context, "destination")), "pays", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : $this->getContext($context, "destination")), "titre", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["destination"]) ? $context["destination"] : $this->getContext($context, "destination")), "dateHist", array()), "format", array(0 => "d"), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["destination"]) ? $context["destination"] : $this->getContext($context, "destination")), "dateHist", array()), "format", array(0 => "m"), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["destination"]) ? $context["destination"] : $this->getContext($context, "destination")), "dateHist", array()), "format", array(0 => "Y"), "method"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : $this->getContext($context, "destination")), "description", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 portfolio-item margin-bottom-40 code\">
\t\t\t\t\t\t\t\t\t\t";
            // line 51
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
\t\t\t\t\t\t\t\t\t\t\t<div class=\"signup-header\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Réservation</h2>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t    ";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateCom", array()), 'row');
            echo "
\t\t\t\t\t\t\t\t\t\t    ";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timeCom", array()), 'row');
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qtePers", array()), 'row');
            echo "
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            // line 63
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Portfolio Item -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t";
        } else {
            // line 72
            echo "\t<div id=\"content\">
\t\t<div class=\"container background-white\">
\t\t\t<div class=\"row margin-vert-30\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>Les Voyages</h2>
\t\t\t\t\t<!-- End Filter Buttons -->
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12 portfolio-group no-padding\">
\t\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t\t<div class=\"col-md-6 portfolio-item margin-bottom-40 code\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/image"), "html", null, true);
            echo "0.jpeg\" alt=\"image0\">
\t\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"margin-top-20\">Nothing</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Nothing</span>
\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<!-- End Portfolio Item -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        
        $__internal_e59ccbf64e42465f42e74be7badd7c1d2d1e5ca1f7d1d4e71f489558abf4f8da->leave($__internal_e59ccbf64e42465f42e74be7badd7c1d2d1e5ca1f7d1d4e71f489558abf4f8da_prof);

    }

    public function getTemplateName()
    {
        return "reservation/voyage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 86,  150 => 72,  138 => 63,  132 => 60,  126 => 57,  122 => 56,  118 => 55,  110 => 51,  100 => 26,  88 => 25,  80 => 23,  68 => 13,  65 => 12,  59 => 11,  50 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
\t{% if destination is defined %}
\t\t{{destination.titre}}
\t{% else %}
\t\tNothing
\t{% endif %}
{% endblock %}

{% block mid %}
\t{% if destination is defined %}
\t\t\t<div id=\"content\">
\t\t\t\t<div class=\"container background-white\">
\t\t\t\t\t<div class=\"row margin-vert-30\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 portfolio-group no-padding\">
\t\t\t\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 portfolio-item margin-bottom-40 code\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/portfolio/image') }}{{destination.id}}.jpg\" alt=\"image{{destination.id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"margin-top-20\">{{destination.pays}} - {{destination.titre}} - {{ destination.dateHist.format('d') }}/{{ destination.dateHist.format('m') }}/{{ destination.dateHist.format('Y') }}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{destination.description}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 portfolio-item margin-bottom-40 code\">
\t\t\t\t\t\t\t\t\t\t{#<form action=\"{{path('voyage_destinationpage', {'id': destination.id, 'verif' : 1})}}\" method=\"post\" class=\"signup-page\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"signup-header\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Réservation</h2>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"dateResa\">Date</label>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control margin-bottom-20\" type=\"date\" name=\"dateResa\" />
\t\t\t\t\t\t\t\t\t\t\t<label for=\"qtePers\">Nombre de personne</label>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control margin-bottom-20\" type=\"number\" name=\"qtePers\" >
\t\t\t\t\t\t\t\t\t\t\t<label for=\"hourResa\">Heure</label>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control margin-bottom-20\" type=\"time\" name=\"hourResa\" />
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"<?php echo \$_GET['id']; ?>\" />
\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\">Réserver</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>#}
\t\t\t\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"signup-header\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Réservation</h2>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.dateCom) }}
\t\t\t\t\t\t\t\t\t\t    {{ form_row(form.timeCom) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.qtePers) }}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.save) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Portfolio Item -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t{% else %}
\t<div id=\"content\">
\t\t<div class=\"container background-white\">
\t\t\t<div class=\"row margin-vert-30\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>Les Voyages</h2>
\t\t\t\t\t<!-- End Filter Buttons -->
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12 portfolio-group no-padding\">
\t\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t\t<div class=\"col-md-6 portfolio-item margin-bottom-40 code\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/portfolio/image') }}0.jpeg\" alt=\"image0\">
\t\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"margin-top-20\">Nothing</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Nothing</span>
\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<!-- End Portfolio Item -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t{% endif %}
{% endblock %}
", "reservation/voyage.html.twig", "C:\\wamp64\\www\\lesablier2\\app\\Resources\\views\\reservation\\voyage.html.twig");
    }
}
