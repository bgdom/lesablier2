<?php

/* inscription/inscription.html.twig */
class __TwigTemplate_2eaa702c3d70e8a11d319fb911051bfa45df542c6d0ec6c896e3f93c7766b0f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "inscription/inscription.html.twig", 1);
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
        $__internal_eadc25ee359b4ffa621536bd52204664efcbf03a9e58280c749b73381285580f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eadc25ee359b4ffa621536bd52204664efcbf03a9e58280c749b73381285580f->enter($__internal_eadc25ee359b4ffa621536bd52204664efcbf03a9e58280c749b73381285580f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription/inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eadc25ee359b4ffa621536bd52204664efcbf03a9e58280c749b73381285580f->leave($__internal_eadc25ee359b4ffa621536bd52204664efcbf03a9e58280c749b73381285580f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9dace6bb36fc922121bcc7d63dee0c82a1dfa3ef58f4456bdeec5a9f8564079d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dace6bb36fc922121bcc7d63dee0c82a1dfa3ef58f4456bdeec5a9f8564079d->enter($__internal_9dace6bb36fc922121bcc7d63dee0c82a1dfa3ef58f4456bdeec5a9f8564079d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Connexion
";
        
        $__internal_9dace6bb36fc922121bcc7d63dee0c82a1dfa3ef58f4456bdeec5a9f8564079d->leave($__internal_9dace6bb36fc922121bcc7d63dee0c82a1dfa3ef58f4456bdeec5a9f8564079d_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e3d0e477edfd30b914124d3b3e0238bff4ed043a35808651c564fd36e9b9f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3d0e477edfd30b914124d3b3e0238bff4ed043a35808651c564fd36e9b9f45->enter($__internal_9e3d0e477edfd30b914124d3b3e0238bff4ed043a35808651c564fd36e9b9f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styleConnexion.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_9e3d0e477edfd30b914124d3b3e0238bff4ed043a35808651c564fd36e9b9f45->leave($__internal_9e3d0e477edfd30b914124d3b3e0238bff4ed043a35808651c564fd36e9b9f45_prof);

    }

    // line 9
    public function block_mid($context, array $blocks = array())
    {
        $__internal_0eba8e94e26ab6983f63cdc9115f9f34cfcdf86c49b3634f630fd38f6d701375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eba8e94e26ab6983f63cdc9115f9f34cfcdf86c49b3634f630fd38f6d701375->enter($__internal_0eba8e94e26ab6983f63cdc9115f9f34cfcdf86c49b3634f630fd38f6d701375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mid"));

        echo "\t\t
\t\t<section>
\t\t\t\t<!-- === BEGIN CONTENT === -->
            <div id=\"content\">
\t\t\t\t";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 14
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "erreur"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["erreurMsg"]) {
                // line 15
                echo "\t\t\t\t\t<div class=\"padding-top-30 container background-white\" id=\"errorMess\">
\t\t\t\t\t\t<p>";
                // line 16
                echo twig_escape_filter($this->env, $context["erreurMsg"], "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['erreurMsg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t<div class=\"container background-white\">                
                    <div class=\"row margin-vert-30\">
                        <!-- Register Box -->
                        <div class=\"col-md-6 col-md-offset-3 col-sm-offset-3\">
                            <form method=\"post\" action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription_indexpage", array("verif" => 1));
        echo "\" class=\"signup-page\">
                                <div class=\"signup-header\">
                                    <h2>Creer un nouveau compte</h2>
                                    <p>Déjà membre? Clique 
                                        <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion_indexpage");
        echo "\">ICI </a>pour te connecter à ton compte</p>
                                </div>
                                <label>Nom</label>
                                <input class=\"form-control margin-bottom-20\" name=\"nom\" maxlength=\"30\" type=\"text\">
                                <label>Prenom</label>
                                <input class=\"form-control margin-bottom-20\" name=\"prenom\" maxlength=\"30\" type=\"text\">
                                <label>Adresse Email
                                    <span class=\"color-red\">*</span>
                                </label>
                                <input name=\"email\" maxlength=\"50\" class=\"form-control margin-bottom-20\" type=\"text\">
\t\t\t\t\t\t\t\t<label>Age</label>
                                <input class=\"form-control margin-bottom-20\" name=\"age\" maxlength=\"30\" type=\"number\">
                                <div class=\"form-control margin-bottom-20\"><input type=\"radio\" placeholder=\"M\" name=\"sexe\" value=\"M\">M     
\t\t\t\t\t\t\t\t<input type=\"radio\" placeholder=\"F\" name=\"sexe\" value=\"F\">F</div>
                                <hr>
                                <div class=\"row\">
                                    <div class=\"col-lg-8\">
                                        <label class=\"checkbox\">
                                            <input type=\"checkbox\">J'ai lu et j'accepte
                                            <a href=\"http://top-citations-proverbes.com/wp-content/uploads/2015/08/Citation_courte__Le_Plus_grand_mensonge_de_lhistoire_%E2%80%A6_Jai_lu_et_jaccepte_les_conditions_dutil_02251-593x593.jpg\">les conditions d'utilisations.</a>
                                        </label>
                                    </div>
                                    <div class=\"col-lg-4 text-right\">
                                        <button class=\"btn btn-primary\" type=\"submit\">Inscription</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Register Box -->
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
\t\t</section>
";
        
        $__internal_0eba8e94e26ab6983f63cdc9115f9f34cfcdf86c49b3634f630fd38f6d701375->leave($__internal_0eba8e94e26ab6983f63cdc9115f9f34cfcdf86c49b3634f630fd38f6d701375_prof);

    }

    public function getTemplateName()
    {
        return "inscription/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 28,  109 => 24,  103 => 20,  100 => 19,  91 => 16,  88 => 15,  83 => 14,  81 => 13,  70 => 9,  61 => 7,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
{% block mid %}\t\t
\t\t<section>
\t\t\t\t<!-- === BEGIN CONTENT === -->
            <div id=\"content\">
\t\t\t\t{% if app.request.hasPreviousSession %}
\t\t\t\t\t{% for erreurMsg in  app.session.flashBag.get('erreur') %}
\t\t\t\t\t<div class=\"padding-top-30 container background-white\" id=\"errorMess\">
\t\t\t\t\t\t<p>{{ erreurMsg }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"container background-white\">                
                    <div class=\"row margin-vert-30\">
                        <!-- Register Box -->
                        <div class=\"col-md-6 col-md-offset-3 col-sm-offset-3\">
                            <form method=\"post\" action=\"{{ path('inscription_indexpage', {'verif' : 1}) }}\" class=\"signup-page\">
                                <div class=\"signup-header\">
                                    <h2>Creer un nouveau compte</h2>
                                    <p>Déjà membre? Clique 
                                        <a href=\"{{ path('connexion_indexpage') }}\">ICI </a>pour te connecter à ton compte</p>
                                </div>
                                <label>Nom</label>
                                <input class=\"form-control margin-bottom-20\" name=\"nom\" maxlength=\"30\" type=\"text\">
                                <label>Prenom</label>
                                <input class=\"form-control margin-bottom-20\" name=\"prenom\" maxlength=\"30\" type=\"text\">
                                <label>Adresse Email
                                    <span class=\"color-red\">*</span>
                                </label>
                                <input name=\"email\" maxlength=\"50\" class=\"form-control margin-bottom-20\" type=\"text\">
\t\t\t\t\t\t\t\t<label>Age</label>
                                <input class=\"form-control margin-bottom-20\" name=\"age\" maxlength=\"30\" type=\"number\">
                                <div class=\"form-control margin-bottom-20\"><input type=\"radio\" placeholder=\"M\" name=\"sexe\" value=\"M\">M     
\t\t\t\t\t\t\t\t<input type=\"radio\" placeholder=\"F\" name=\"sexe\" value=\"F\">F</div>
                                <hr>
                                <div class=\"row\">
                                    <div class=\"col-lg-8\">
                                        <label class=\"checkbox\">
                                            <input type=\"checkbox\">J'ai lu et j'accepte
                                            <a href=\"http://top-citations-proverbes.com/wp-content/uploads/2015/08/Citation_courte__Le_Plus_grand_mensonge_de_lhistoire_%E2%80%A6_Jai_lu_et_jaccepte_les_conditions_dutil_02251-593x593.jpg\">les conditions d'utilisations.</a>
                                        </label>
                                    </div>
                                    <div class=\"col-lg-4 text-right\">
                                        <button class=\"btn btn-primary\" type=\"submit\">Inscription</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Register Box -->
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
\t\t</section>
{% endblock %}", "inscription/inscription.html.twig", "C:\\wamp64\\www\\lesablier2\\app\\Resources\\views\\inscription\\inscription.html.twig");
    }
}
