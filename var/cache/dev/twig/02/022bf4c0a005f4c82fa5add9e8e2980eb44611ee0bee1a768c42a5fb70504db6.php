<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6afe6d4d2aa9e61b1ac0d45c640b4deb300e7e6225415a9d5202d581fcf46fb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4938d1045f4d13320f62c87f49b9152de3a6a68252747a3a30587e9622604e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4938d1045f4d13320f62c87f49b9152de3a6a68252747a3a30587e9622604e4d->enter($__internal_4938d1045f4d13320f62c87f49b9152de3a6a68252747a3a30587e9622604e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4938d1045f4d13320f62c87f49b9152de3a6a68252747a3a30587e9622604e4d->leave($__internal_4938d1045f4d13320f62c87f49b9152de3a6a68252747a3a30587e9622604e4d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8a0181e0ad52fc0cb28c51ee07c156afd3585176ba211e1fa0b7180233174a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0181e0ad52fc0cb28c51ee07c156afd3585176ba211e1fa0b7180233174a43->enter($__internal_8a0181e0ad52fc0cb28c51ee07c156afd3585176ba211e1fa0b7180233174a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8a0181e0ad52fc0cb28c51ee07c156afd3585176ba211e1fa0b7180233174a43->leave($__internal_8a0181e0ad52fc0cb28c51ee07c156afd3585176ba211e1fa0b7180233174a43_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ffdec2a7b34c4f712ee6c5d77b74d0416cfaaa097dea885a9abe18a1243c564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffdec2a7b34c4f712ee6c5d77b74d0416cfaaa097dea885a9abe18a1243c564->enter($__internal_3ffdec2a7b34c4f712ee6c5d77b74d0416cfaaa097dea885a9abe18a1243c564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3ffdec2a7b34c4f712ee6c5d77b74d0416cfaaa097dea885a9abe18a1243c564->leave($__internal_3ffdec2a7b34c4f712ee6c5d77b74d0416cfaaa097dea885a9abe18a1243c564_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1944eae86851c7b121e5f7ea9e29c8a0f6d73a8d8e8ed8067e65d6a7facc89c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1944eae86851c7b121e5f7ea9e29c8a0f6d73a8d8e8ed8067e65d6a7facc89c0->enter($__internal_1944eae86851c7b121e5f7ea9e29c8a0f6d73a8d8e8ed8067e65d6a7facc89c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1944eae86851c7b121e5f7ea9e29c8a0f6d73a8d8e8ed8067e65d6a7facc89c0->leave($__internal_1944eae86851c7b121e5f7ea9e29c8a0f6d73a8d8e8ed8067e65d6a7facc89c0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\lesablier2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
