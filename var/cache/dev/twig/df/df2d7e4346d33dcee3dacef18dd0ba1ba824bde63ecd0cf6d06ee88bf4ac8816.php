<?php

/* nous.html.twig */
class __TwigTemplate_af687bc4eb2cbd4bc7058a31ca3684a8a5f04ff37db19d6100f269860bd0105a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nous.html.twig", 1);
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
        $__internal_a3dfb2eb50cb94ccd29f42e6d2300c665c1c8b2f7951a47690ee8e25499fa28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3dfb2eb50cb94ccd29f42e6d2300c665c1c8b2f7951a47690ee8e25499fa28c->enter($__internal_a3dfb2eb50cb94ccd29f42e6d2300c665c1c8b2f7951a47690ee8e25499fa28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nous.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3dfb2eb50cb94ccd29f42e6d2300c665c1c8b2f7951a47690ee8e25499fa28c->leave($__internal_a3dfb2eb50cb94ccd29f42e6d2300c665c1c8b2f7951a47690ee8e25499fa28c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_db9afd1772b84211defa3ee8c82ea0d194819a8cbf5a09fd23fffd1736af7d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9afd1772b84211defa3ee8c82ea0d194819a8cbf5a09fd23fffd1736af7d86->enter($__internal_db9afd1772b84211defa3ee8c82ea0d194819a8cbf5a09fd23fffd1736af7d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Nous
";
        
        $__internal_db9afd1772b84211defa3ee8c82ea0d194819a8cbf5a09fd23fffd1736af7d86->leave($__internal_db9afd1772b84211defa3ee8c82ea0d194819a8cbf5a09fd23fffd1736af7d86_prof);

    }

    // line 5
    public function block_mid($context, array $blocks = array())
    {
        $__internal_608d383722cd43098422c4b5723b077ca3deb9a1f951f846208e22a3491b7fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608d383722cd43098422c4b5723b077ca3deb9a1f951f846208e22a3491b7fd2->enter($__internal_608d383722cd43098422c4b5723b077ca3deb9a1f951f846208e22a3491b7fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mid"));

        echo "\t
<div id=\"content\">
                <div class=\"container background-white\">
                    <div class=\"row margin-vert-30\">
                        <div class=\"col-md-12\">
                            <h2>A propos de nous</h2>
                            <div class=\"row\">
                                <div class=\"col-md-6 animate fadeIn\">
                                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/fillers/aboutme.jpg"), "html", null, true);
        echo "\" alt=\"about-me\" class=\"margin-top-10\">
                                    <ul class=\"list-inline about-me-icons margin-vert-20\">
                                        <li>
                                            <a href=\"https://cdn.meme.am/instances/500x/51395073.jpg\">
                                                <i class=\"fa-lg fa-border fa-linkedin\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"https://cdn.meme.am/instances/500x/51395073.jpg\">
                                                <i class=\"fa-lg fa-border fa-facebook\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"https://cdn.meme.am/instances/500x/51395073.jpg\">
                                                <i class=\"fa-lg fa-border fa-dribbble\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"https://cdn.meme.am/instances/500x/51395073.jpg\">
                                                <i class=\"fa-lg fa-border fa-google-plus\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"col-md-6 margin-bottom-10 animate fadeInRight\">
                                    <h3 class=\"padding-top-10 pull-left\">Melodie Tanier, Emilie Couleard, Dominique Besson, Julien Dos Santos
                                        <small>- Createur de Sablier</small>
                                    </h3>
                                    <div class=\"clearfix\"></div>
                                    <h4>
                                        <em>Actuellement en 2ème année de DUT Informatique à l'IUT Paris Descartes, nous avons créer le Sablier pour permettre à n'importe qui de voyager dans le temps.</em>
                                    </h4>
                                    <p>Julien est un véritable chimiste , maître des molécules, c'est à lui que l'on doit la creation du sablier. Melodie est la testeuse de voyage : c'est elle qui permet de verifier que le lieu et la date ne pose aucun problème pour le voyageur... Il ne faudrait pas se faire dévorer par un dinosaure ou couper la tête par un roi fou ! 
\t\t\t\t\t\t\t\t\tDominique, quant à lui, est notre historien préféré! Il connait l'histoire par coeur, et c'est grace à lui que les voyages sont si pertinents et riche en emotion! Emilie, enfin, est notre docteur : elle vous soigne lorsque vous vous desartibulez (eh oui, comme dans Harry Potter!).. en effet, le voyage dans le temps n'est pas sans risque: il y a une chance sur dix de mourir dans d'atroce souffrances </p>
                                     
                                </div>
                            </div>
                            <hr>
                            
                             <!-- End My Skills -->
                   
                                
                         
                            <!-- End Accordion -->
                        </div>
                    </div>
                </div>
</div>
";
        
        $__internal_608d383722cd43098422c4b5723b077ca3deb9a1f951f846208e22a3491b7fd2->leave($__internal_608d383722cd43098422c4b5723b077ca3deb9a1f951f846208e22a3491b7fd2_prof);

    }

    public function getTemplateName()
    {
        return "nous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
Nous
{% endblock %}
{% block mid %}\t
<div id=\"content\">
                <div class=\"container background-white\">
                    <div class=\"row margin-vert-30\">
                        <div class=\"col-md-12\">
                            <h2>A propos de nous</h2>
                            <div class=\"row\">
                                <div class=\"col-md-6 animate fadeIn\">
                                    <img src=\"{{ asset('images/fillers/aboutme.jpg') }}\" alt=\"about-me\" class=\"margin-top-10\">
                                    <ul class=\"list-inline about-me-icons margin-vert-20\">
                                        <li>
                                            <a href=\"https://cdn.meme.am/instances/500x/51395073.jpg\">
                                                <i class=\"fa-lg fa-border fa-linkedin\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"https://cdn.meme.am/instances/500x/51395073.jpg\">
                                                <i class=\"fa-lg fa-border fa-facebook\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"https://cdn.meme.am/instances/500x/51395073.jpg\">
                                                <i class=\"fa-lg fa-border fa-dribbble\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"https://cdn.meme.am/instances/500x/51395073.jpg\">
                                                <i class=\"fa-lg fa-border fa-google-plus\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"col-md-6 margin-bottom-10 animate fadeInRight\">
                                    <h3 class=\"padding-top-10 pull-left\">Melodie Tanier, Emilie Couleard, Dominique Besson, Julien Dos Santos
                                        <small>- Createur de Sablier</small>
                                    </h3>
                                    <div class=\"clearfix\"></div>
                                    <h4>
                                        <em>Actuellement en 2ème année de DUT Informatique à l'IUT Paris Descartes, nous avons créer le Sablier pour permettre à n'importe qui de voyager dans le temps.</em>
                                    </h4>
                                    <p>Julien est un véritable chimiste , maître des molécules, c'est à lui que l'on doit la creation du sablier. Melodie est la testeuse de voyage : c'est elle qui permet de verifier que le lieu et la date ne pose aucun problème pour le voyageur... Il ne faudrait pas se faire dévorer par un dinosaure ou couper la tête par un roi fou ! 
\t\t\t\t\t\t\t\t\tDominique, quant à lui, est notre historien préféré! Il connait l'histoire par coeur, et c'est grace à lui que les voyages sont si pertinents et riche en emotion! Emilie, enfin, est notre docteur : elle vous soigne lorsque vous vous desartibulez (eh oui, comme dans Harry Potter!).. en effet, le voyage dans le temps n'est pas sans risque: il y a une chance sur dix de mourir dans d'atroce souffrances </p>
                                     
                                </div>
                            </div>
                            <hr>
                            
                             <!-- End My Skills -->
                   
                                
                         
                            <!-- End Accordion -->
                        </div>
                    </div>
                </div>
</div>
{% endblock %}", "nous.html.twig", "C:\\wamp64\\www\\lesablier2\\app\\Resources\\views\\nous.html.twig");
    }
}
