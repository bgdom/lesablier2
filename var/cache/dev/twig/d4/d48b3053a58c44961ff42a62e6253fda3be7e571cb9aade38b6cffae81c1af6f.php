<?php

/* InfoComplementaire\contact.html.twig */
class __TwigTemplate_33f5819ff273f1540a07b76f1eacf408890c1df0491df2f836f167087eabc17c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InfoComplementaire\\contact.html.twig", 1);
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
        $__internal_a9d588af01fe90e679a6e914664ee2363bcfbf8905d8473f0e28b8e443568b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d588af01fe90e679a6e914664ee2363bcfbf8905d8473f0e28b8e443568b02->enter($__internal_a9d588af01fe90e679a6e914664ee2363bcfbf8905d8473f0e28b8e443568b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InfoComplementaire\\contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9d588af01fe90e679a6e914664ee2363bcfbf8905d8473f0e28b8e443568b02->leave($__internal_a9d588af01fe90e679a6e914664ee2363bcfbf8905d8473f0e28b8e443568b02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_64d7a561f72745f0912ffb211a8bed8e9581d97a4b9f554df082472818a10825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d7a561f72745f0912ffb211a8bed8e9581d97a4b9f554df082472818a10825->enter($__internal_64d7a561f72745f0912ffb211a8bed8e9581d97a4b9f554df082472818a10825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Contact
";
        
        $__internal_64d7a561f72745f0912ffb211a8bed8e9581d97a4b9f554df082472818a10825->leave($__internal_64d7a561f72745f0912ffb211a8bed8e9581d97a4b9f554df082472818a10825_prof);

    }

    // line 5
    public function block_mid($context, array $blocks = array())
    {
        $__internal_f9a488398cce1860c59d96bf7ac6fa9eb9eb8479c22094ee1b45a77ea4a867d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a488398cce1860c59d96bf7ac6fa9eb9eb8479c22094ee1b45a77ea4a867d8->enter($__internal_f9a488398cce1860c59d96bf7ac6fa9eb9eb8479c22094ee1b45a77ea4a867d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mid"));

        echo "\t
<div id=\"content\">
                <div class=\"container background-white\">
                    <div class=\"row margin-vert-30\">
                        <!-- Main Column -->
                        <div class=\"col-md-9\">
                            <!-- Main Content -->
                            <div class=\"headline\">
                                <h2>Formulaire de contact</h2>
                            </div>
                            <p></p>
                            <br>
                            <!-- Contact Form -->
                            <form>
                                <label>Nom</label>
                                <div class=\"row margin-bottom-20\">
                                    <div class=\"col-md-6 col-md-offset-0\">
                                        <input class=\"form-control\" type=\"text\">
                                    </div>
                                </div>
                                <label>Email
                                    <span class=\"color-red\">*</span>
                                </label>
                                <div class=\"row margin-bottom-20\">
                                    <div class=\"col-md-6 col-md-offset-0\">
                                        <input class=\"form-control\" type=\"text\">
                                    </div>
                                </div>
                                <label>Message</label>
                                <div class=\"row margin-bottom-20\">
                                    <div class=\"col-md-8 col-md-offset-0\">
                                        <textarea rows=\"8\" class=\"form-control\"></textarea>
                                    </div>
                                </div>
                                <p>
                                    <button type=\"submit\" class=\"btn btn-primary\">Envoyer le message</button>
                                </p>
                            </form>
                            <!-- End Contact Form -->
                            <!-- End Main Content -->
                        </div>
                        <!-- End Main Column -->
                        <!-- Side Column -->
                        <div class=\"col-md-3\">
                            <!-- Recent Posts -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panel-title\">Informations</h3>
                                </div>
                                <div class=\"panel-body\">
                                    <p>Il peu y avoir quelques interférences. Ainsi, si vous recevez des caractères non identifiés, c'est qu'ils viennent du futur. Si vous recevez des hieroglyphes, c'est que nous sommes dans le passé. Ne soyez pas surpris.</p>
                                    <ul class=\"list-unstyled\">
                                        <li>
                                            <i class=\"fa-phone color-primary\"></i>+33 6 66 66 66 66</li>
                                        <li>
                                            <i class=\"fa-envelope color-primary\"></i>info@sablier.com</li>
                                        <li style=\"\toverflow:hidden; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;\">
                                            <i class=\"fa-home color-primary\"></i>";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("authentification_homepage");
        echo "</li>
                                    </ul>
                                    <ul class=\"list-unstyled\">
                                        <li>
                                            <strong class=\"color-primary\">Lundi - Vendredi:</strong> 9:00 à 6:00</li>
                                        <li>
                                            <strong class=\"color-primary\">Samedi:</strong> 10:00 à 3:00</li>
                                        <li>
                                            <strong class=\"color-primary\">Dimanche:</strong> Fermé</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End recent Posts -->
                            <!-- About -->
                            
                            <!-- End About -->
                        </div>
                        <!-- End Side Column -->
                    </div>
                </div>
            </div>
";
        
        $__internal_f9a488398cce1860c59d96bf7ac6fa9eb9eb8479c22094ee1b45a77ea4a867d8->leave($__internal_f9a488398cce1860c59d96bf7ac6fa9eb9eb8479c22094ee1b45a77ea4a867d8_prof);

    }

    public function getTemplateName()
    {
        return "InfoComplementaire\\contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 62,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
Contact
{% endblock %}
{% block mid %}\t
<div id=\"content\">
                <div class=\"container background-white\">
                    <div class=\"row margin-vert-30\">
                        <!-- Main Column -->
                        <div class=\"col-md-9\">
                            <!-- Main Content -->
                            <div class=\"headline\">
                                <h2>Formulaire de contact</h2>
                            </div>
                            <p></p>
                            <br>
                            <!-- Contact Form -->
                            <form>
                                <label>Nom</label>
                                <div class=\"row margin-bottom-20\">
                                    <div class=\"col-md-6 col-md-offset-0\">
                                        <input class=\"form-control\" type=\"text\">
                                    </div>
                                </div>
                                <label>Email
                                    <span class=\"color-red\">*</span>
                                </label>
                                <div class=\"row margin-bottom-20\">
                                    <div class=\"col-md-6 col-md-offset-0\">
                                        <input class=\"form-control\" type=\"text\">
                                    </div>
                                </div>
                                <label>Message</label>
                                <div class=\"row margin-bottom-20\">
                                    <div class=\"col-md-8 col-md-offset-0\">
                                        <textarea rows=\"8\" class=\"form-control\"></textarea>
                                    </div>
                                </div>
                                <p>
                                    <button type=\"submit\" class=\"btn btn-primary\">Envoyer le message</button>
                                </p>
                            </form>
                            <!-- End Contact Form -->
                            <!-- End Main Content -->
                        </div>
                        <!-- End Main Column -->
                        <!-- Side Column -->
                        <div class=\"col-md-3\">
                            <!-- Recent Posts -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panel-title\">Informations</h3>
                                </div>
                                <div class=\"panel-body\">
                                    <p>Il peu y avoir quelques interférences. Ainsi, si vous recevez des caractères non identifiés, c'est qu'ils viennent du futur. Si vous recevez des hieroglyphes, c'est que nous sommes dans le passé. Ne soyez pas surpris.</p>
                                    <ul class=\"list-unstyled\">
                                        <li>
                                            <i class=\"fa-phone color-primary\"></i>+33 6 66 66 66 66</li>
                                        <li>
                                            <i class=\"fa-envelope color-primary\"></i>info@sablier.com</li>
                                        <li style=\"\toverflow:hidden; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;\">
                                            <i class=\"fa-home color-primary\"></i>{{ url('authentification_homepage') }}</li>
                                    </ul>
                                    <ul class=\"list-unstyled\">
                                        <li>
                                            <strong class=\"color-primary\">Lundi - Vendredi:</strong> 9:00 à 6:00</li>
                                        <li>
                                            <strong class=\"color-primary\">Samedi:</strong> 10:00 à 3:00</li>
                                        <li>
                                            <strong class=\"color-primary\">Dimanche:</strong> Fermé</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End recent Posts -->
                            <!-- About -->
                            
                            <!-- End About -->
                        </div>
                        <!-- End Side Column -->
                    </div>
                </div>
            </div>
{% endblock %}", "InfoComplementaire\\contact.html.twig", "C:\\wamp64\\www\\lesablier2\\app\\Resources\\views\\InfoComplementaire\\contact.html.twig");
    }
}
