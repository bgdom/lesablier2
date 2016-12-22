<?php

/* connexion/connexion.html.twig */
class __TwigTemplate_a501dcd7c6614c177b56d4b5e842a08c89a10983a266156769500c2da0a9cf12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "connexion/connexion.html.twig", 1);
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
        $__internal_8c21061917c59c5d2e8bee0c57c529ae00cf3914bf7cb19ef8ebe8732372efef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c21061917c59c5d2e8bee0c57c529ae00cf3914bf7cb19ef8ebe8732372efef->enter($__internal_8c21061917c59c5d2e8bee0c57c529ae00cf3914bf7cb19ef8ebe8732372efef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion/connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c21061917c59c5d2e8bee0c57c529ae00cf3914bf7cb19ef8ebe8732372efef->leave($__internal_8c21061917c59c5d2e8bee0c57c529ae00cf3914bf7cb19ef8ebe8732372efef_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d0cf719c7be9205e936932c39128294a1d561e39fc96e3c423cda33084adc66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0cf719c7be9205e936932c39128294a1d561e39fc96e3c423cda33084adc66->enter($__internal_3d0cf719c7be9205e936932c39128294a1d561e39fc96e3c423cda33084adc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Connexion
";
        
        $__internal_3d0cf719c7be9205e936932c39128294a1d561e39fc96e3c423cda33084adc66->leave($__internal_3d0cf719c7be9205e936932c39128294a1d561e39fc96e3c423cda33084adc66_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_022137dd749c559b467ade4e8cab51be7495d46d8c06a05492f78707ce3831c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022137dd749c559b467ade4e8cab51be7495d46d8c06a05492f78707ce3831c8->enter($__internal_022137dd749c559b467ade4e8cab51be7495d46d8c06a05492f78707ce3831c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styleConnexion.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_022137dd749c559b467ade4e8cab51be7495d46d8c06a05492f78707ce3831c8->leave($__internal_022137dd749c559b467ade4e8cab51be7495d46d8c06a05492f78707ce3831c8_prof);

    }

    // line 9
    public function block_mid($context, array $blocks = array())
    {
        $__internal_2b90c38f623a1a3967d9e94d3b01a3f3b3ed201af65437469715a5371b120097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b90c38f623a1a3967d9e94d3b01a3f3b3ed201af65437469715a5371b120097->enter($__internal_2b90c38f623a1a3967d9e94d3b01a3f3b3ed201af65437469715a5371b120097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mid"));

        // line 10
        echo "    \t\t<section>
\t\t\t\t<!-- === BEGIN CONTENT === -->
\t\t\t\t<div id=\"content\">
\t\t\t\t\t";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 14
            echo "\t\t\t\t\t\t";
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "IdUtilisateur", 1 => false), "method")) {
                // line 15
                echo "                    <div class=\"container background-white\">
                        <div class=\"row margin-vert-30\">
                            <!-- Login Box -->
                            <div class=\"col-md-6 col-md-offset-3 col-sm-offset-3\">
                                <form method=\"post\" action=\" ";
                // line 19
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion_indexpage", array("verif" => 1));
                echo "\" class=\"login-page\">
                                    <div class=\"login-header margin-bottom-30\">
                                        <h2>Connectez vous</h2>
                                    </div>
                                    <div class=\"input-group margin-bottom-20\">
                                        <span class=\"input-group-addon\">
                                            <i class=\"fa fa-user\"></i>
                                        </span>
                                        <input name=\"login\" maxlength=\"50\" placeholder=\"Entrez votre Email\" class=\"form-control\" type=\"text\">
                                    </div>
                                    <div class=\"input-group margin-bottom-20\">
                                        <span class=\"input-group-addon\">
                                            <i class=\"fa fa-lock\"></i>
                                        </span>
                                        <input maxlength=\"30\" placeholder=\"Mot de passe\" class=\"form-control\" type=\"password\" name=\"password\">
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <button class=\"btn btn-primary pull-right\" type=\"submit\">Connexion</button>
                                        </div>
                                    </div>
                                    <hr>
\t\t\t\t\t\t\t\t\t<div class=\"signup-header\">
\t\t\t\t\t\t\t\t\t\t<p>Pas encore menbre ? Clique 
                                        <a href=\" ";
                // line 43
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription_indexpage");
                echo " \">ICI </a>pour t'inscrire</p>
\t\t\t\t\t\t\t\t\t</div>
                                </form>
                            </div>
\t\t\t\t\t\t\t
                            <!-- End Login Box -->
                        </div>
                    </div>
\t\t\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 54
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "IdUtilisateur", 1 => false), "method")) {
                // line 55
                echo "\t\t\t\t\t\t<div class=\"container background-white\">
\t\t\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 col-sm-offset-3\">
\t\t\t\t\t\t\t\t<p>Vous êtes connectés, <a href=\"";
                // line 57
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion_indexpage");
                echo "\"> se déconnecter ?</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t\t";
        }
        // line 62
        echo "                </div>
\t\t\t\t<!-- === END CONTENT === -->
\t\t\t\t
\t\t</section>

";
        
        $__internal_2b90c38f623a1a3967d9e94d3b01a3f3b3ed201af65437469715a5371b120097->leave($__internal_2b90c38f623a1a3967d9e94d3b01a3f3b3ed201af65437469715a5371b120097_prof);

    }

    public function getTemplateName()
    {
        return "connexion/connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 62,  151 => 61,  144 => 57,  140 => 55,  137 => 54,  134 => 53,  131 => 52,  119 => 43,  92 => 19,  86 => 15,  83 => 14,  81 => 13,  76 => 10,  70 => 9,  61 => 7,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
Connexion
{% endblock %}
{% block stylesheets %}
\t{{ parent () }}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/styleConnexion.css') }}\" rel=\"stylesheet\">
{% endblock%}
{% block mid %}
    \t\t<section>
\t\t\t\t<!-- === BEGIN CONTENT === -->
\t\t\t\t<div id=\"content\">
\t\t\t\t\t{% if app.request.hasPreviousSession %}
\t\t\t\t\t\t{% if not app.session.get('IdUtilisateur', false ) %}
                    <div class=\"container background-white\">
                        <div class=\"row margin-vert-30\">
                            <!-- Login Box -->
                            <div class=\"col-md-6 col-md-offset-3 col-sm-offset-3\">
                                <form method=\"post\" action=\" {{ path('connexion_indexpage', {'verif' : 1}) }}\" class=\"login-page\">
                                    <div class=\"login-header margin-bottom-30\">
                                        <h2>Connectez vous</h2>
                                    </div>
                                    <div class=\"input-group margin-bottom-20\">
                                        <span class=\"input-group-addon\">
                                            <i class=\"fa fa-user\"></i>
                                        </span>
                                        <input name=\"login\" maxlength=\"50\" placeholder=\"Entrez votre Email\" class=\"form-control\" type=\"text\">
                                    </div>
                                    <div class=\"input-group margin-bottom-20\">
                                        <span class=\"input-group-addon\">
                                            <i class=\"fa fa-lock\"></i>
                                        </span>
                                        <input maxlength=\"30\" placeholder=\"Mot de passe\" class=\"form-control\" type=\"password\" name=\"password\">
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <button class=\"btn btn-primary pull-right\" type=\"submit\">Connexion</button>
                                        </div>
                                    </div>
                                    <hr>
\t\t\t\t\t\t\t\t\t<div class=\"signup-header\">
\t\t\t\t\t\t\t\t\t\t<p>Pas encore menbre ? Clique 
                                        <a href=\" {{ path('inscription_indexpage') }} \">ICI </a>pour t'inscrire</p>
\t\t\t\t\t\t\t\t\t</div>
                                </form>
                            </div>
\t\t\t\t\t\t\t
                            <!-- End Login Box -->
                        </div>
                    </div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if app.request.hasPreviousSession %}
\t\t\t\t\t\t{% if app.session.get('IdUtilisateur', false) %}
\t\t\t\t\t\t<div class=\"container background-white\">
\t\t\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 col-sm-offset-3\">
\t\t\t\t\t\t\t\t<p>Vous êtes connectés, <a href=\"{{ path('deconnexion_indexpage') }}\"> se déconnecter ?</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
                </div>
\t\t\t\t<!-- === END CONTENT === -->
\t\t\t\t
\t\t</section>

{% endblock %}
", "connexion/connexion.html.twig", "C:\\wamp64\\www\\lesablier2\\app\\Resources\\views\\connexion\\connexion.html.twig");
    }
}
