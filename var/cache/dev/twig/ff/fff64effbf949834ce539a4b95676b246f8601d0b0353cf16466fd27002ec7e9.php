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
        $__internal_30306cb5efa7bae6f58c542bbd6793f5bf734b1103f8acfcc2f395bca4254411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30306cb5efa7bae6f58c542bbd6793f5bf734b1103f8acfcc2f395bca4254411->enter($__internal_30306cb5efa7bae6f58c542bbd6793f5bf734b1103f8acfcc2f395bca4254411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:notificacion.html.twig"));

        $__internal_aed485ea931ff7fd4af11eccc25f4094ef871cd79e6febf6b9a1e9853542aa69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed485ea931ff7fd4af11eccc25f4094ef871cd79e6febf6b9a1e9853542aa69->enter($__internal_aed485ea931ff7fd4af11eccc25f4094ef871cd79e6febf6b9a1e9853542aa69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:notificacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30306cb5efa7bae6f58c542bbd6793f5bf734b1103f8acfcc2f395bca4254411->leave($__internal_30306cb5efa7bae6f58c542bbd6793f5bf734b1103f8acfcc2f395bca4254411_prof);

        
        $__internal_aed485ea931ff7fd4af11eccc25f4094ef871cd79e6febf6b9a1e9853542aa69->leave($__internal_aed485ea931ff7fd4af11eccc25f4094ef871cd79e6febf6b9a1e9853542aa69_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_fc957391b7566b7d884e50214cf61429c88f3a6826c18901ce100c0ae6fdc901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc957391b7566b7d884e50214cf61429c88f3a6826c18901ce100c0ae6fdc901->enter($__internal_fc957391b7566b7d884e50214cf61429c88f3a6826c18901ce100c0ae6fdc901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9c2ecb6372b4f921fbaa4928c44e06f0cb56b94c7512f40cfe24e629a1125cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2ecb6372b4f921fbaa4928c44e06f0cb56b94c7512f40cfe24e629a1125cfd->enter($__internal_9c2ecb6372b4f921fbaa4928c44e06f0cb56b94c7512f40cfe24e629a1125cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "   <h1>";
        echo twig_escape_filter($this->env, ($context["info"] ?? $this->getContext($context, "info")), "html", null, true);
        echo "</h1>
";
        
        $__internal_9c2ecb6372b4f921fbaa4928c44e06f0cb56b94c7512f40cfe24e629a1125cfd->leave($__internal_9c2ecb6372b4f921fbaa4928c44e06f0cb56b94c7512f40cfe24e629a1125cfd_prof);

        
        $__internal_fc957391b7566b7d884e50214cf61429c88f3a6826c18901ce100c0ae6fdc901->leave($__internal_fc957391b7566b7d884e50214cf61429c88f3a6826c18901ce100c0ae6fdc901_prof);

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
