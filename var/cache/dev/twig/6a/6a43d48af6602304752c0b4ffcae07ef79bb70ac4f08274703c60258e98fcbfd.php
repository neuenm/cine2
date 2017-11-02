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
        $__internal_e8a2139dca947f940cac489b74d3f971cf66916d203fe2da9e30462b686090b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a2139dca947f940cac489b74d3f971cf66916d203fe2da9e30462b686090b7->enter($__internal_e8a2139dca947f940cac489b74d3f971cf66916d203fe2da9e30462b686090b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Salas:carga.html.twig"));

        $__internal_fe30288460f6599b46fe3c48544254f89294eb5a18a825c345654c39aea0e240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe30288460f6599b46fe3c48544254f89294eb5a18a825c345654c39aea0e240->enter($__internal_fe30288460f6599b46fe3c48544254f89294eb5a18a825c345654c39aea0e240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Salas:carga.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8a2139dca947f940cac489b74d3f971cf66916d203fe2da9e30462b686090b7->leave($__internal_e8a2139dca947f940cac489b74d3f971cf66916d203fe2da9e30462b686090b7_prof);

        
        $__internal_fe30288460f6599b46fe3c48544254f89294eb5a18a825c345654c39aea0e240->leave($__internal_fe30288460f6599b46fe3c48544254f89294eb5a18a825c345654c39aea0e240_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_10ce70db1b14ee710cde7900570d84dce0be3476d47a2417e7b41eb2d5b527c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ce70db1b14ee710cde7900570d84dce0be3476d47a2417e7b41eb2d5b527c0->enter($__internal_10ce70db1b14ee710cde7900570d84dce0be3476d47a2417e7b41eb2d5b527c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_abe93222c15dcad8fd6f6aa9090db394bedc31f7496ce041e8121208cd61061f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe93222c15dcad8fd6f6aa9090db394bedc31f7496ce041e8121208cd61061f->enter($__internal_abe93222c15dcad8fd6f6aa9090db394bedc31f7496ce041e8121208cd61061f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo "\">Volver</a></p>
    ";
        }
        // line 13
        echo "


";
        
        $__internal_abe93222c15dcad8fd6f6aa9090db394bedc31f7496ce041e8121208cd61061f->leave($__internal_abe93222c15dcad8fd6f6aa9090db394bedc31f7496ce041e8121208cd61061f_prof);

        
        $__internal_10ce70db1b14ee710cde7900570d84dce0be3476d47a2417e7b41eb2d5b527c0->leave($__internal_10ce70db1b14ee710cde7900570d84dce0be3476d47a2417e7b41eb2d5b527c0_prof);

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
        return array (  74 => 13,  68 => 11,  63 => 9,  58 => 8,  56 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 1,);
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
        <p><a class=\"waves-effect waves-light btn\" href=\"{{path(\"index\")}}\">Volver</a></p>
    {% endif %}



{% endblock %}
", "CineBundle:Salas:carga.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Salas/carga.html.twig");
    }
}
