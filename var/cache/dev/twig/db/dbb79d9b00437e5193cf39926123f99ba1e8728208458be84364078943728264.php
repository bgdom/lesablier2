<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2e21b490afbb18fc6f7f0326e401a70f2772694bb520443b98b94baa0531f546 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eca4e6f46b3e0e742ede7e9fb0412593b80bd9c8bca978242372a5a00e38b359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca4e6f46b3e0e742ede7e9fb0412593b80bd9c8bca978242372a5a00e38b359->enter($__internal_eca4e6f46b3e0e742ede7e9fb0412593b80bd9c8bca978242372a5a00e38b359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eca4e6f46b3e0e742ede7e9fb0412593b80bd9c8bca978242372a5a00e38b359->leave($__internal_eca4e6f46b3e0e742ede7e9fb0412593b80bd9c8bca978242372a5a00e38b359_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7208d8ef6fc019c8e4a5156d8cbb01376d1733ff0b6e559d853b330a586da655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7208d8ef6fc019c8e4a5156d8cbb01376d1733ff0b6e559d853b330a586da655->enter($__internal_7208d8ef6fc019c8e4a5156d8cbb01376d1733ff0b6e559d853b330a586da655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7208d8ef6fc019c8e4a5156d8cbb01376d1733ff0b6e559d853b330a586da655->leave($__internal_7208d8ef6fc019c8e4a5156d8cbb01376d1733ff0b6e559d853b330a586da655_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9ded54d3732de3a36403a2eba84c0c1040d84dc94b20388ffcff9e195526ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ded54d3732de3a36403a2eba84c0c1040d84dc94b20388ffcff9e195526ff7->enter($__internal_d9ded54d3732de3a36403a2eba84c0c1040d84dc94b20388ffcff9e195526ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d9ded54d3732de3a36403a2eba84c0c1040d84dc94b20388ffcff9e195526ff7->leave($__internal_d9ded54d3732de3a36403a2eba84c0c1040d84dc94b20388ffcff9e195526ff7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ffafa0fa53d15defc75a9c66bec4bb824840cedc98555bca75d62644e0582a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffafa0fa53d15defc75a9c66bec4bb824840cedc98555bca75d62644e0582a0->enter($__internal_9ffafa0fa53d15defc75a9c66bec4bb824840cedc98555bca75d62644e0582a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9ffafa0fa53d15defc75a9c66bec4bb824840cedc98555bca75d62644e0582a0->leave($__internal_9ffafa0fa53d15defc75a9c66bec4bb824840cedc98555bca75d62644e0582a0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\lesablier2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
