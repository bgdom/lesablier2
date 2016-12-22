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
        $__internal_c78d66d8eda79afba3e388d0d411260e782cec8ab690e3424dc45c599b14be0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78d66d8eda79afba3e388d0d411260e782cec8ab690e3424dc45c599b14be0a->enter($__internal_c78d66d8eda79afba3e388d0d411260e782cec8ab690e3424dc45c599b14be0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c78d66d8eda79afba3e388d0d411260e782cec8ab690e3424dc45c599b14be0a->leave($__internal_c78d66d8eda79afba3e388d0d411260e782cec8ab690e3424dc45c599b14be0a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56d30c8e3a9e97d3fd2bd5709a781bf872630d547b6e1196605ad486ea5d53dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d30c8e3a9e97d3fd2bd5709a781bf872630d547b6e1196605ad486ea5d53dd->enter($__internal_56d30c8e3a9e97d3fd2bd5709a781bf872630d547b6e1196605ad486ea5d53dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_56d30c8e3a9e97d3fd2bd5709a781bf872630d547b6e1196605ad486ea5d53dd->leave($__internal_56d30c8e3a9e97d3fd2bd5709a781bf872630d547b6e1196605ad486ea5d53dd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfa797b02abb8158ae171429d32f20aa66d209b9821daf4207381cf94bd8c5bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa797b02abb8158ae171429d32f20aa66d209b9821daf4207381cf94bd8c5bf->enter($__internal_bfa797b02abb8158ae171429d32f20aa66d209b9821daf4207381cf94bd8c5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bfa797b02abb8158ae171429d32f20aa66d209b9821daf4207381cf94bd8c5bf->leave($__internal_bfa797b02abb8158ae171429d32f20aa66d209b9821daf4207381cf94bd8c5bf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_43386a17a12e079fa7a55feb85fa057e393f6d8b70ee2a62b5227efd81fe7a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43386a17a12e079fa7a55feb85fa057e393f6d8b70ee2a62b5227efd81fe7a96->enter($__internal_43386a17a12e079fa7a55feb85fa057e393f6d8b70ee2a62b5227efd81fe7a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_43386a17a12e079fa7a55feb85fa057e393f6d8b70ee2a62b5227efd81fe7a96->leave($__internal_43386a17a12e079fa7a55feb85fa057e393f6d8b70ee2a62b5227efd81fe7a96_prof);

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
