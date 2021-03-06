<?php

/* InfoComplementaire\nous.html.twig */
class __TwigTemplate_f7174f9c44dc8a4be2288c3a563c9debf30db24a728b51a085a8fc5e05c9fe95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InfoComplementaire\\nous.html.twig", 1);
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
        $__internal_3b6b17739941241362d603a25a66cd23c99698d737f5e2b6ec6528ffdf02717f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6b17739941241362d603a25a66cd23c99698d737f5e2b6ec6528ffdf02717f->enter($__internal_3b6b17739941241362d603a25a66cd23c99698d737f5e2b6ec6528ffdf02717f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InfoComplementaire\\nous.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b6b17739941241362d603a25a66cd23c99698d737f5e2b6ec6528ffdf02717f->leave($__internal_3b6b17739941241362d603a25a66cd23c99698d737f5e2b6ec6528ffdf02717f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b46df52b4970b804e92d61de1384286da0d38bcaa57588b45aaf5285c28cbea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46df52b4970b804e92d61de1384286da0d38bcaa57588b45aaf5285c28cbea6->enter($__internal_b46df52b4970b804e92d61de1384286da0d38bcaa57588b45aaf5285c28cbea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Nous
";
        
        $__internal_b46df52b4970b804e92d61de1384286da0d38bcaa57588b45aaf5285c28cbea6->leave($__internal_b46df52b4970b804e92d61de1384286da0d38bcaa57588b45aaf5285c28cbea6_prof);

    }

    // line 5
    public function block_mid($context, array $blocks = array())
    {
        $__internal_32195239bb2c6488add2074e7f01551ffc9133a462f8d13decf434b30ce6746e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32195239bb2c6488add2074e7f01551ffc9133a462f8d13decf434b30ce6746e->enter($__internal_32195239bb2c6488add2074e7f01551ffc9133a462f8d13decf434b30ce6746e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mid"));

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
        
        $__internal_32195239bb2c6488add2074e7f01551ffc9133a462f8d13decf434b30ce6746e->leave($__internal_32195239bb2c6488add2074e7f01551ffc9133a462f8d13decf434b30ce6746e_prof);

    }

    public function getTemplateName()
    {
        return "InfoComplementaire\\nous.html.twig";
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
{% endblock %}", "InfoComplementaire\\nous.html.twig", "C:\\wamp64\\www\\lesablier2\\app\\Resources\\views\\InfoComplementaire\\nous.html.twig");
    }
}
