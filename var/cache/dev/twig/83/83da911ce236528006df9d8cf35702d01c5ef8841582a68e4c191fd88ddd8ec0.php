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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09716f45a0c6a6664d92ece0bba0ddb597ed1bdb3a871c52f3d3032aa4d8afc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09716f45a0c6a6664d92ece0bba0ddb597ed1bdb3a871c52f3d3032aa4d8afc6->enter($__internal_09716f45a0c6a6664d92ece0bba0ddb597ed1bdb3a871c52f3d3032aa4d8afc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/voyages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09716f45a0c6a6664d92ece0bba0ddb597ed1bdb3a871c52f3d3032aa4d8afc6->leave($__internal_09716f45a0c6a6664d92ece0bba0ddb597ed1bdb3a871c52f3d3032aa4d8afc6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b4cd329c8506b924c12d0f4f6940d741d2e4619cff85d935d6d4d2169aa43c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4cd329c8506b924c12d0f4f6940d741d2e4619cff85d935d6d4d2169aa43c0->enter($__internal_3b4cd329c8506b924c12d0f4f6940d741d2e4619cff85d935d6d4d2169aa43c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Voyages
";
        
        $__internal_3b4cd329c8506b924c12d0f4f6940d741d2e4619cff85d935d6d4d2169aa43c0->leave($__internal_3b4cd329c8506b924c12d0f4f6940d741d2e4619cff85d935d6d4d2169aa43c0_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee28dc1994cf1885ac1adc52d078eb0063ac2ac25afa267d63ad98449459a782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee28dc1994cf1885ac1adc52d078eb0063ac2ac25afa267d63ad98449459a782->enter($__internal_ee28dc1994cf1885ac1adc52d078eb0063ac2ac25afa267d63ad98449459a782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styleConnexion.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_ee28dc1994cf1885ac1adc52d078eb0063ac2ac25afa267d63ad98449459a782->leave($__internal_ee28dc1994cf1885ac1adc52d078eb0063ac2ac25afa267d63ad98449459a782_prof);

    }

    // line 9
    public function block_mid($context, array $blocks = array())
    {
        $__internal_43f2557bfadd7b6e04a98e56a43449cce57fa2684a9193ea3571bae41197ad28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f2557bfadd7b6e04a98e56a43449cce57fa2684a9193ea3571bae41197ad28->enter($__internal_43f2557bfadd7b6e04a98e56a43449cce57fa2684a9193ea3571bae41197ad28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mid"));

        // line 10
        echo "    <div id=\"content\">
        <div class=\"container background-white\">
            <div class=\"row margin-vert-30\">
                <div class=\"col-md-12\">
                    <h2>Les Voyages</h2>
                    <!-- End Filter Buttons -->
\t\t\t\t</div>
            </div>
            <div class=\"row\">
                ";
        // line 19
        echo twig_include($this->env, $context, "reservation/template_voyages.html.twig");
        echo "
            </div>
\t\t\t<div class=\"row\">
\t\t\t\t<embed src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("svg/map.svg"), "html", null, true);
        echo "\" type=\"image/svg+xml\" id=\"world\" width=\"808\" height=\"430\"></embed>
\t\t\t</div>
        </div>
    </div>
";
        
        $__internal_43f2557bfadd7b6e04a98e56a43449cce57fa2684a9193ea3571bae41197ad28->leave($__internal_43f2557bfadd7b6e04a98e56a43449cce57fa2684a9193ea3571bae41197ad28_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd2901e164f8373d5a42c93d5913b5bb039478655ad47f548fc9b6efd69abe8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2901e164f8373d5a42c93d5913b5bb039478655ad47f548fc9b6efd69abe8a->enter($__internal_cd2901e164f8373d5a42c93d5913b5bb039478655ad47f548fc9b6efd69abe8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">

\t  /*
\t\tDue to restrictions imposed by the same-origin policy, this demo
\t\tprobably won't work when accessed using the file:// URI scheme. If
\t\tyou're having trouble getting it to work, try accessing it over HTTP.
\t  */

\t  (function () {
\t\t  var world = document.getElementById(\"world\");
\t\t  world.addEventListener(\"load\", function () {
\t\t\t \tvar doc = world.getSVGDocument();
\t\t\t  doc.addEventListener(\"mouseover\",function(e){
\t\t\t  var target = e.target;
\t\t\t  var cc = target.getAttribute(\"cc\") || target.parentElement.getAttribute(\"cc\");
\t\t\t  if (cc) {
\t\t\t\t\ttarget.style.fill = \"green\";
\t\t\t\t }

\t\t\t\t });

\t\t\t\t doc.addEventListener(\"mouseout\",function(e){
\t\t\t\t var target = e.target;
\t\t\t\t\t\t var cc = target.getAttribute(\"cc\") || target.parentElement.getAttribute(\"cc\");
\t\t\t\t if (cc) {
\t\t\t\t\ttarget.style.fill = \"white\";
\t\t\t\t }

\t\t\t\t });

\t\t\t\t// Alert the ISO3166 code of clicked countries
\t\t\t\tdoc.addEventListener(\"click\", function (e) {
\t\t\t\t\t  var target = e.target;
\t\t\t\t\t\t var cc = target.getAttribute(\"cc\") || target.parentElement.getAttribute(\"cc\");
\t\t\t\t\t  if (cc) {
\t\t\t\t\t\t   \$.post(\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voyage_homepage");
        echo "\",{
\t\t\t\t\t\t\t   pays: cc
\t\t\t\t\t\t   },function(data, status){
\t\t\t\t\t\t\t   \$(\"#zoneVoyages\").replaceWith(data);
\t\t\t\t\t\t   });
\t\t\t\t\t  }else
\t\t\t\t\t\talert(\"inexistant\");

\t\t\t\t});

\t\t  });
\t  }());



\t</script>
";
        
        $__internal_cd2901e164f8373d5a42c93d5913b5bb039478655ad47f548fc9b6efd69abe8a->leave($__internal_cd2901e164f8373d5a42c93d5913b5bb039478655ad47f548fc9b6efd69abe8a_prof);

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
        return array (  152 => 64,  112 => 28,  106 => 27,  94 => 22,  88 => 19,  77 => 10,  71 => 9,  62 => 7,  57 => 6,  51 => 5,  43 => 3,  37 => 2,  11 => 1,);
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
{% endblock %}
{% block mid %}
    <div id=\"content\">
        <div class=\"container background-white\">
            <div class=\"row margin-vert-30\">
                <div class=\"col-md-12\">
                    <h2>Les Voyages</h2>
                    <!-- End Filter Buttons -->
\t\t\t\t</div>
            </div>
            <div class=\"row\">
                {{ include('reservation/template_voyages.html.twig') }}
            </div>
\t\t\t<div class=\"row\">
\t\t\t\t<embed src=\"{{asset('svg/map.svg')}}\" type=\"image/svg+xml\" id=\"world\" width=\"808\" height=\"430\"></embed>
\t\t\t</div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
\t{{parent()}}
\t<script type=\"text/javascript\">

\t  /*
\t\tDue to restrictions imposed by the same-origin policy, this demo
\t\tprobably won't work when accessed using the file:// URI scheme. If
\t\tyou're having trouble getting it to work, try accessing it over HTTP.
\t  */

\t  (function () {
\t\t  var world = document.getElementById(\"world\");
\t\t  world.addEventListener(\"load\", function () {
\t\t\t \tvar doc = world.getSVGDocument();
\t\t\t  doc.addEventListener(\"mouseover\",function(e){
\t\t\t  var target = e.target;
\t\t\t  var cc = target.getAttribute(\"cc\") || target.parentElement.getAttribute(\"cc\");
\t\t\t  if (cc) {
\t\t\t\t\ttarget.style.fill = \"green\";
\t\t\t\t }

\t\t\t\t });

\t\t\t\t doc.addEventListener(\"mouseout\",function(e){
\t\t\t\t var target = e.target;
\t\t\t\t\t\t var cc = target.getAttribute(\"cc\") || target.parentElement.getAttribute(\"cc\");
\t\t\t\t if (cc) {
\t\t\t\t\ttarget.style.fill = \"white\";
\t\t\t\t }

\t\t\t\t });

\t\t\t\t// Alert the ISO3166 code of clicked countries
\t\t\t\tdoc.addEventListener(\"click\", function (e) {
\t\t\t\t\t  var target = e.target;
\t\t\t\t\t\t var cc = target.getAttribute(\"cc\") || target.parentElement.getAttribute(\"cc\");
\t\t\t\t\t  if (cc) {
\t\t\t\t\t\t   \$.post(\"{{path('voyage_homepage')}}\",{
\t\t\t\t\t\t\t   pays: cc
\t\t\t\t\t\t   },function(data, status){
\t\t\t\t\t\t\t   \$(\"#zoneVoyages\").replaceWith(data);
\t\t\t\t\t\t   });
\t\t\t\t\t  }else
\t\t\t\t\t\talert(\"inexistant\");

\t\t\t\t});

\t\t  });
\t  }());



\t</script>
{% endblock %}
", "reservation/voyages.html.twig", "C:\\wamp64\\www\\lesablier2\\app\\Resources\\views\\reservation\\voyages.html.twig");
    }
}
