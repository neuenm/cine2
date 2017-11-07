<?php

/* CineBundle:Salas:carga.html.twig */
class __TwigTemplate_3bb4b3d6665e30033476a1512db092e5ccfe35a57302f384e83e09b4c895e0ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Salas:carga.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CineBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d02911a236091ec30e8866f9ceec90209ae2cf1f872391afca6bdc79d46d1a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02911a236091ec30e8866f9ceec90209ae2cf1f872391afca6bdc79d46d1a45->enter($__internal_d02911a236091ec30e8866f9ceec90209ae2cf1f872391afca6bdc79d46d1a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Salas:carga.html.twig"));

        $__internal_3c3702309b441d703bc9927e76cd82022fcdbabdddeff94fa54d07e3ab658795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3702309b441d703bc9927e76cd82022fcdbabdddeff94fa54d07e3ab658795->enter($__internal_3c3702309b441d703bc9927e76cd82022fcdbabdddeff94fa54d07e3ab658795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Salas:carga.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d02911a236091ec30e8866f9ceec90209ae2cf1f872391afca6bdc79d46d1a45->leave($__internal_d02911a236091ec30e8866f9ceec90209ae2cf1f872391afca6bdc79d46d1a45_prof);

        
        $__internal_3c3702309b441d703bc9927e76cd82022fcdbabdddeff94fa54d07e3ab658795->leave($__internal_3c3702309b441d703bc9927e76cd82022fcdbabdddeff94fa54d07e3ab658795_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_60c27ae8a94c428120f640e4472240be8fed7e16503307028c019cd13e4a57f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c27ae8a94c428120f640e4472240be8fed7e16503307028c019cd13e4a57f7->enter($__internal_60c27ae8a94c428120f640e4472240be8fed7e16503307028c019cd13e4a57f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9ba3116cb038debd654b543dabade7184523ee9f396f4eac3bf85236aefb1c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba3116cb038debd654b543dabade7184523ee9f396f4eac3bf85236aefb1c39->enter($__internal_9ba3116cb038debd654b543dabade7184523ee9f396f4eac3bf85236aefb1c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h4 class=\"white-text text-lighten-3\" >Salas:</h4>
    <h3 class=\"white-text text-lighten-3\" > ";
        // line 6
        echo twig_escape_filter($this->env, ($context["cant"] ?? $this->getContext($context, "cant")), "html", null, true);
        echo " </h3>
    ";
        // line 7
        if ((($context["cant"] ?? $this->getContext($context, "cant")) != 0)) {
            // line 8
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
        ";
            // line 9
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
    ";
        } else {
            // line 11
            echo "        <p><a class=\"waves-effect waves-light btn\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
            echo "\">Finalizar carga del cine</a></p>
    ";
        }
        
        $__internal_9ba3116cb038debd654b543dabade7184523ee9f396f4eac3bf85236aefb1c39->leave($__internal_9ba3116cb038debd654b543dabade7184523ee9f396f4eac3bf85236aefb1c39_prof);

        
        $__internal_60c27ae8a94c428120f640e4472240be8fed7e16503307028c019cd13e4a57f7->leave($__internal_60c27ae8a94c428120f640e4472240be8fed7e16503307028c019cd13e4a57f7_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Salas:carga.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  63 => 9,  58 => 8,  56 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"CineBundle::layout.html.twig\" %}


{% block content %}
    <h4 class=\"white-text text-lighten-3\" >Salas:</h4>
    <h3 class=\"white-text text-lighten-3\" > {{ cant }} </h3>
    {% if cant != 0 %}
        {{form_start(form) }}
        {{form_end(form)}}
    {% else %}
        <p><a class=\"waves-effect waves-light btn\" href=\"{{path(\"index\")}}\">Finalizar carga del cine</a></p>
    {% endif %}
{% endblock %}
", "CineBundle:Salas:carga.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Salas/carga.html.twig");
    }
}
