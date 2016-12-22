<?php

/* reservation/voyages.html.twig */
class __TwigTemplate_a0f6e2186f173d2fc6cb2e15f4d498b5d44887097fe26f6b3f9a6bccb623f234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/voyages.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'mid' => array($this, 'block_mid'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcd4945d00ff137caf348215ca73e33c9f339790a46fbbf34042f127481dc948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd4945d00ff137caf348215ca73e33c9f339790a46fbbf34042f127481dc948->enter($__internal_bcd4945d00ff137caf348215ca73e33c9f339790a46fbbf34042f127481dc948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/voyages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcd4945d00ff137caf348215ca73e33c9f339790a46fbbf34042f127481dc948->leave($__internal_bcd4945d00ff137caf348215ca73e33c9f339790a46fbbf34042f127481dc948_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd7c402157ead1d0a64963d414e18bcb0a7b0f89931317a84be43e0f40ddc7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7c402157ead1d0a64963d414e18bcb0a7b0f89931317a84be43e0f40ddc7df->enter($__internal_dd7c402157ead1d0a64963d414e18bcb0a7b0f89931317a84be43e0f40ddc7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Voyages
";
        
        $__internal_dd7c402157ead1d0a64963d414e18bcb0a7b0f89931317a84be43e0f40ddc7df->leave($__internal_dd7c402157ead1d0a64963d414e18bcb0a7b0f89931317a84be43e0f40ddc7df_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_10bb5a7b7bda07abb2b78cc3ae342222314fb5ea146e1e3c6e809b9a7ba231d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10bb5a7b7bda07abb2b78cc3ae342222314fb5ea146e1e3c6e809b9a7ba231d2->enter($__internal_10bb5a7b7bda07abb2b78cc3ae342222314fb5ea146e1e3c6e809b9a7ba231d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styleConnexion.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_10bb5a7b7bda07abb2b78cc3ae342222314fb5ea146e1e3c6e809b9a7ba231d2->leave($__internal_10bb5a7b7bda07abb2b78cc3ae342222314fb5ea146e1e3c6e809b9a7ba231d2_prof);

    }

    // line 9
    public function block_mid($context, array $blocks = array())
    {
        $__internal_25f790a5d678909cbbec0d20cbccca10315cf82150a5911c8ce5ed7038c89223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f790a5d678909cbbec0d20cbccca10315cf82150a5911c8ce5ed7038c89223->enter($__internal_25f790a5d678909cbbec0d20cbccca10315cf82150a5911c8ce5ed7038c89223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mid"));

        // line 10
        echo "    <div id=\"content\">
        <div class=\"container background-white\">
            <div class=\"row margin-vert-30\">
                <div class=\"col-md-12\">
                    <h2>Les Voyages</h2>
                    <!-- End Filter Buttons -->
\t\t\t\t\t\t\t\t</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 portfolio-group no-padding\">
\t\t\t\t\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["destinations"]) ? $context["destinations"] : $this->getContext($context, "destinations")));
        foreach ($context['_seq'] as $context["_key"] => $context["destination"]) {
            // line 21
            echo "\t\t\t\t\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 portfolio-item margin-bottom-40 code\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voyage_destinationpage", array("id" => $this->getAttribute($context["destination"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/image"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["destination"], "id", array()), "html", null, true);
            echo ".jpg\" alt=\"image";
            echo twig_escape_filter($this->env, $this->getAttribute($context["destination"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"margin-top-20\">le ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["destination"], "dateHist", array()), "format", array(0 => "d"), "method"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["destination"], "dateHist", array()), "format", array(0 => "m"), "method"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["destination"], "dateHist", array()), "format", array(0 => "Y"), "method"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Cliquez pour réserver un voyage pour ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["destination"], "ville", array()), "html", null, true);
            echo "!</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End Portfolio Item -->
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t\t\t\t\t</div>
            </div>
        </div>
    </div>
";
        
        $__internal_25f790a5d678909cbbec0d20cbccca10315cf82150a5911c8ce5ed7038c89223->leave($__internal_25f790a5d678909cbbec0d20cbccca10315cf82150a5911c8ce5ed7038c89223_prof);

    }

    public function getTemplateName()
    {
        return "reservation/voyages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 37,  118 => 29,  110 => 28,  102 => 26,  97 => 24,  92 => 21,  88 => 20,  76 => 10,  70 => 9,  61 => 7,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
Voyages
{% endblock %}
{% block stylesheets %}
\t{{ parent () }}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/styleConnexion.css') }}\" rel=\"stylesheet\">
{% endblock%}
{% block mid %}
    <div id=\"content\">
        <div class=\"container background-white\">
            <div class=\"row margin-vert-30\">
                <div class=\"col-md-12\">
                    <h2>Les Voyages</h2>
                    <!-- End Filter Buttons -->
\t\t\t\t\t\t\t\t</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 portfolio-group no-padding\">
\t\t\t\t\t\t\t\t{% for destination in destinations %}
\t\t\t\t\t\t\t\t\t\t<!-- Portfolio Item -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 portfolio-item margin-bottom-40 code\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('voyage_destinationpage', {'id' : destination.id }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/portfolio/image') }}{{destination.id}}.jpg\" alt=\"image{{ destination.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"margin-top-20\">le {{ destination.dateHist.format('d') }}-{{ destination.dateHist.format('m') }}-{{ destination.dateHist.format('Y') }}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Cliquez pour réserver un voyage pour {{ destination.ville }}!</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End Portfolio Item -->
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
            </div>
        </div>
    </div>
{% endblock %}
", "reservation/voyages.html.twig", "C:\\wamp64\\www\\lesablier2\\app\\Resources\\views\\reservation\\voyages.html.twig");
    }
}
