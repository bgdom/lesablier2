<?php

/* reservation/template_voyages.html.twig */
class __TwigTemplate_7fe1965439bebf22aad82bb775ca326c0b73b61abc81cf77cf7ac2446906517c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_165ac06afd7229d2c52629eea7f7c7b158295d96e7ca7dbc4c11a874a28d0b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165ac06afd7229d2c52629eea7f7c7b158295d96e7ca7dbc4c11a874a28d0b7d->enter($__internal_165ac06afd7229d2c52629eea7f7c7b158295d96e7ca7dbc4c11a874a28d0b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/template_voyages.html.twig"));

        // line 1
        echo "<div id=\"zoneVoyages\" class=\"col-md-12 portfolio-group no-padding\">
    ";
        // line 2
        if ((null === (isset($context["destinations"]) ? $context["destinations"] : $this->getContext($context, "destinations")))) {
            // line 3
            echo "        <div class=\"col-md-6 portfolio-item margin-bottom-40 code\">
                    <p>Aucunes destination trouvée</p>
        </div>
    ";
        } else {
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["destinations"]) ? $context["destinations"] : $this->getContext($context, "destinations")));
            foreach ($context['_seq'] as $context["_key"] => $context["destination"]) {
                // line 8
                echo "                <!-- Portfolio Item -->
                <div class=\"col-md-6 portfolio-item margin-bottom-40 code\">
                        <div>
                                <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voyage_destinationpage", array("id" => $this->getAttribute($context["destination"], "id", array()))), "html", null, true);
                echo "\">
                                    <figure>
                                                <img src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/portfolio/image"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["destination"], "id", array()), "html", null, true);
                echo ".jpg\" alt=\"image";
                echo twig_escape_filter($this->env, $this->getAttribute($context["destination"], "id", array()), "html", null, true);
                echo "\">
                                                    <figcaption>
                                                        <h3 class=\"margin-top-20\">le ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["destination"], "dateHist", array()), "format", array(0 => "d"), "method"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["destination"], "dateHist", array()), "format", array(0 => "m"), "method"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["destination"], "dateHist", array()), "format", array(0 => "Y"), "method"), "html", null, true);
                echo "</h3>
                                                        <span>Cliquez pour réserver un voyage pour ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["destination"], "ville", array()), "html", null, true);
                echo "!</span>
                                                </figcaption>
                                        </figure>
                                </a>
                        </div>
                    </div>
                <!-- End Portfolio Item -->
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destination'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        // line 25
        echo "
</div>
";
        
        $__internal_165ac06afd7229d2c52629eea7f7c7b158295d96e7ca7dbc4c11a874a28d0b7d->leave($__internal_165ac06afd7229d2c52629eea7f7c7b158295d96e7ca7dbc4c11a874a28d0b7d_prof);

    }

    public function getTemplateName()
    {
        return "reservation/template_voyages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  78 => 24,  64 => 16,  56 => 15,  48 => 13,  43 => 11,  38 => 8,  33 => 7,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"zoneVoyages\" class=\"col-md-12 portfolio-group no-padding\">
    {% if destinations is null %}
        <div class=\"col-md-6 portfolio-item margin-bottom-40 code\">
                    <p>Aucunes destination trouvée</p>
        </div>
    {% else %}
        {% for destination in destinations %}
                <!-- Portfolio Item -->
                <div class=\"col-md-6 portfolio-item margin-bottom-40 code\">
                        <div>
                                <a href=\"{{ path('voyage_destinationpage', {'id' : destination.id }) }}\">
                                    <figure>
                                                <img src=\"{{ asset('images/portfolio/image') }}{{destination.id}}.jpg\" alt=\"image{{ destination.id }}\">
                                                    <figcaption>
                                                        <h3 class=\"margin-top-20\">le {{ destination.dateHist.format('d') }}-{{ destination.dateHist.format('m') }}-{{ destination.dateHist.format('Y') }}</h3>
                                                        <span>Cliquez pour réserver un voyage pour {{ destination.ville }}!</span>
                                                </figcaption>
                                        </figure>
                                </a>
                        </div>
                    </div>
                <!-- End Portfolio Item -->
        {% endfor %}
    {% endif %}

</div>
", "reservation/template_voyages.html.twig", "C:\\wamp64\\www\\lesablier2\\app\\Resources\\views\\reservation\\template_voyages.html.twig");
    }
}
