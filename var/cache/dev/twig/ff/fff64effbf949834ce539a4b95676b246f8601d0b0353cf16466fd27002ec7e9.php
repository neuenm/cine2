<?php

/* CineBundle:Reserva:notificacion.html.twig */
class __TwigTemplate_11cb4b8442bc62925ecef8dd463f66c4d12631adbe89c25662b7f0d0fed42182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Reserva:notificacion.html.twig", 1);
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
        $__internal_d66b0b35957ff8ed274c8e88706d844ec8b7d3f828c4514433fdcc6146fc043e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66b0b35957ff8ed274c8e88706d844ec8b7d3f828c4514433fdcc6146fc043e->enter($__internal_d66b0b35957ff8ed274c8e88706d844ec8b7d3f828c4514433fdcc6146fc043e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:notificacion.html.twig"));

        $__internal_fe8d4c182a852c1c44e94e9f8d1d4fad1cca73bdc8de22909a154edd1cb080dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe8d4c182a852c1c44e94e9f8d1d4fad1cca73bdc8de22909a154edd1cb080dd->enter($__internal_fe8d4c182a852c1c44e94e9f8d1d4fad1cca73bdc8de22909a154edd1cb080dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:notificacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d66b0b35957ff8ed274c8e88706d844ec8b7d3f828c4514433fdcc6146fc043e->leave($__internal_d66b0b35957ff8ed274c8e88706d844ec8b7d3f828c4514433fdcc6146fc043e_prof);

        
        $__internal_fe8d4c182a852c1c44e94e9f8d1d4fad1cca73bdc8de22909a154edd1cb080dd->leave($__internal_fe8d4c182a852c1c44e94e9f8d1d4fad1cca73bdc8de22909a154edd1cb080dd_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_f4c08c7d800e147e8d8e47aee20bbf695b34d25effdad7b59449953b9b2280f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c08c7d800e147e8d8e47aee20bbf695b34d25effdad7b59449953b9b2280f9->enter($__internal_f4c08c7d800e147e8d8e47aee20bbf695b34d25effdad7b59449953b9b2280f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1a7c603178b228dc1695ef80099a7952227fbd50f600cf93c993ee647126dd73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7c603178b228dc1695ef80099a7952227fbd50f600cf93c993ee647126dd73->enter($__internal_1a7c603178b228dc1695ef80099a7952227fbd50f600cf93c993ee647126dd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "   <h1>";
        echo twig_escape_filter($this->env, ($context["info"] ?? $this->getContext($context, "info")), "html", null, true);
        echo "</h1>
";
        
        $__internal_1a7c603178b228dc1695ef80099a7952227fbd50f600cf93c993ee647126dd73->leave($__internal_1a7c603178b228dc1695ef80099a7952227fbd50f600cf93c993ee647126dd73_prof);

        
        $__internal_f4c08c7d800e147e8d8e47aee20bbf695b34d25effdad7b59449953b9b2280f9->leave($__internal_f4c08c7d800e147e8d8e47aee20bbf695b34d25effdad7b59449953b9b2280f9_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Reserva:notificacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
   <h1>{{ info }}</h1>
{% endblock %}", "CineBundle:Reserva:notificacion.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Reserva/notificacion.html.twig");
    }
}
