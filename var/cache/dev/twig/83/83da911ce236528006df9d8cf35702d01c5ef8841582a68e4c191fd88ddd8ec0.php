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
        $__internal_aa9a83350d2e644e931fd5fda79fafabcace67645f01ec1cbd1deab9f27166ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9a83350d2e644e931fd5fda79fafabcace67645f01ec1cbd1deab9f27166ba->enter($__internal_aa9a83350d2e644e931fd5fda79fafabcace67645f01ec1cbd1deab9f27166ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/voyages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa9a83350d2e644e931fd5fda79fafabcace67645f01ec1cbd1deab9f27166ba->leave($__internal_aa9a83350d2e644e931fd5fda79fafabcace67645f01ec1cbd1deab9f27166ba_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_32cf63fc723b850ddb37ae349562e818649599b44e94fe32b10d41d7828900e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32cf63fc723b850ddb37ae349562e818649599b44e94fe32b10d41d7828900e4->enter($__internal_32cf63fc723b850ddb37ae349562e818649599b44e94fe32b10d41d7828900e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Voyages
";
        
        $__internal_32cf63fc723b850ddb37ae349562e818649599b44e94fe32b10d41d7828900e4->leave($__internal_32cf63fc723b850ddb37ae349562e818649599b44e94fe32b10d41d7828900e4_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8fa17bd78ce90a7b71ad6e65611b68ffb09722d7a2b90928e9feeb9cb9a6dca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa17bd78ce90a7b71ad6e65611b68ffb09722d7a2b90928e9feeb9cb9a6dca2->enter($__internal_8fa17bd78ce90a7b71ad6e65611b68ffb09722d7a2b90928e9feeb9cb9a6dca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styleConnexion.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_8fa17bd78ce90a7b71ad6e65611b68ffb09722d7a2b90928e9feeb9cb9a6dca2->leave($__internal_8fa17bd78ce90a7b71ad6e65611b68ffb09722d7a2b90928e9feeb9cb9a6dca2_prof);

    }

    // line 9
    public function block_mid($context, array $blocks = array())
    {
        $__internal_ec3514da002085c44f82fbf40797ccc0ca2f2ee90e184b88035d46357559feab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3514da002085c44f82fbf40797ccc0ca2f2ee90e184b88035d46357559feab->enter($__internal_ec3514da002085c44f82fbf40797ccc0ca2f2ee90e184b88035d46357559feab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mid"));

        // line 10
        echo "    <div id=\"content\">
        <div class=\"container background-white\">
            <div class=\"row margin-vert-30\">
                <div class=\"col-md-12\">
                    <h2>Les Voyages</h2>
                    <!-- End Filter Buttons -->
\t\t\t\t</div>
            </div>
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"chargement\" class=\"col-md-12\">
                    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gif/loading.gif"), "html", null, true);
        echo "\" alt=\"chargement...\"/>
\t\t\t\t</div>
            </div>
            <div class=\"row\">
                ";
        // line 24
        echo twig_include($this->env, $context, "reservation/template_voyages.html.twig");
        echo "
            </div>
\t\t\t<div class=\"row\">
\t\t\t\t<embed src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("svg/map.svg"), "html", null, true);
        echo "\" type=\"image/svg+xml\" id=\"world\" width=\"808\" height=\"430\"></embed>
\t\t\t</div>
        </div>
    </div>
";
        
        $__internal_ec3514da002085c44f82fbf40797ccc0ca2f2ee90e184b88035d46357559feab->leave($__internal_ec3514da002085c44f82fbf40797ccc0ca2f2ee90e184b88035d46357559feab_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52dffed0f856e455b65712921313ef9c5f0d6fb9b369ca8674f8ee5976a9a3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52dffed0f856e455b65712921313ef9c5f0d6fb9b369ca8674f8ee5976a9a3de->enter($__internal_52dffed0f856e455b65712921313ef9c5f0d6fb9b369ca8674f8ee5976a9a3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
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
\t\t\t\t\$(\"#chargement\").hide();
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
\t\t\t\t\t\t  \$(\"#zoneVoyages\").hide();
\t\t\t\t\t\t  \$(\"#chargement\").show();
\t\t\t\t\t\t   \$.post(\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voyage_homepage");
        echo "\",{
\t\t\t\t\t\t\t   pays: cc
\t\t\t\t\t\t   },function(data, status){
\t\t\t\t\t\t\t   \$(\"#chargement\").hide();
\t\t\t\t\t\t\t   \$(\"#zoneVoyages\").replaceWith(data);
\t\t\t\t\t\t\t   \$(\"#zoneVoyages\").show();
\t\t\t\t\t\t   });
\t\t\t\t\t  }else
\t\t\t\t\t\talert(\"inexistant\");

\t\t\t\t});

\t\t  });
\t  }());



\t</script>
";
        
        $__internal_52dffed0f856e455b65712921313ef9c5f0d6fb9b369ca8674f8ee5976a9a3de->leave($__internal_52dffed0f856e455b65712921313ef9c5f0d6fb9b369ca8674f8ee5976a9a3de_prof);

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
        return array (  163 => 72,  120 => 33,  114 => 32,  102 => 27,  96 => 24,  89 => 20,  77 => 10,  71 => 9,  62 => 7,  57 => 6,  51 => 5,  43 => 3,  37 => 2,  11 => 1,);
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
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"chargement\" class=\"col-md-12\">
                    <img src=\"{{asset('gif/loading.gif')}}\" alt=\"chargement...\"/>
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
\t\t\t\t\$(\"#chargement\").hide();
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
\t\t\t\t\t\t  \$(\"#zoneVoyages\").hide();
\t\t\t\t\t\t  \$(\"#chargement\").show();
\t\t\t\t\t\t   \$.post(\"{{path('voyage_homepage')}}\",{
\t\t\t\t\t\t\t   pays: cc
\t\t\t\t\t\t   },function(data, status){
\t\t\t\t\t\t\t   \$(\"#chargement\").hide();
\t\t\t\t\t\t\t   \$(\"#zoneVoyages\").replaceWith(data);
\t\t\t\t\t\t\t   \$(\"#zoneVoyages\").show();
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
