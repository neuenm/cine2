<?php

/* CineBundle:Reserva:horarios.html.twig */
class __TwigTemplate_5c383c3789ca149948aa964e02e9dd5f603d02c5a7bbc24fb8d8877f19caaacc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7aa78bd5b9c8d425753d3d897bce9311310281feb841a20168010ed558ff94e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa78bd5b9c8d425753d3d897bce9311310281feb841a20168010ed558ff94e1->enter($__internal_7aa78bd5b9c8d425753d3d897bce9311310281feb841a20168010ed558ff94e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:horarios.html.twig"));

        $__internal_ac5fbc754330eb62916452d5209ac24b2ccac88f88d63b60f19292a52b9638e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5fbc754330eb62916452d5209ac24b2ccac88f88d63b60f19292a52b9638e8->enter($__internal_ac5fbc754330eb62916452d5209ac24b2ccac88f88d63b60f19292a52b9638e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:horarios.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_7aa78bd5b9c8d425753d3d897bce9311310281feb841a20168010ed558ff94e1->leave($__internal_7aa78bd5b9c8d425753d3d897bce9311310281feb841a20168010ed558ff94e1_prof);

        
        $__internal_ac5fbc754330eb62916452d5209ac24b2ccac88f88d63b60f19292a52b9638e8->leave($__internal_ac5fbc754330eb62916452d5209ac24b2ccac88f88d63b60f19292a52b9638e8_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_6e85a52b1d2edcd1070aaafd94bed8ff4dc96a843b6054aa8e5af1ea95722825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e85a52b1d2edcd1070aaafd94bed8ff4dc96a843b6054aa8e5af1ea95722825->enter($__internal_6e85a52b1d2edcd1070aaafd94bed8ff4dc96a843b6054aa8e5af1ea95722825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_01128fc5d95a10e1f75737eab457ad5d8c7773cb00ccd81573e3fa3656f349ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01128fc5d95a10e1f75737eab457ad5d8c7773cb00ccd81573e3fa3656f349ea->enter($__internal_01128fc5d95a10e1f75737eab457ad5d8c7773cb00ccd81573e3fa3656f349ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "
    <div class=\"row\">
    <ul class=\"collection col l9\">

    <table>
    <thead>
    <tr>
        <th class=\"white-text\" >Dia</th>
        <th class=\"white-text\" >Hora</th>
        <th class=\"white-text\" >Precio</th>
        <th></th>
    </tr>
    </thead>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["funciones"] ?? $this->getContext($context, "funciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["funcion"]) {
            // line 16
            echo "        <tbody>
        <tr>
            <td class=\"white-text\" >";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["funcion"], "fecha", array()), "d-m-y"), "html", null, true);
            echo "</td>
            <td class=\"white-text\" >";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["funcion"], "hora", array()), "html", null, true);
            echo "</td>
            <td class=\"white-text\" >\$";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["funcion"], "precio", array()), "html", null, true);
            echo "</td>
            <td class=\"white-text\" ><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entrada_confirmacion", array("id" => $this->getAttribute($context["funcion"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">forward</i></a></td>
        </tr>
        </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['funcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </table>

";
        
        $__internal_01128fc5d95a10e1f75737eab457ad5d8c7773cb00ccd81573e3fa3656f349ea->leave($__internal_01128fc5d95a10e1f75737eab457ad5d8c7773cb00ccd81573e3fa3656f349ea_prof);

        
        $__internal_6e85a52b1d2edcd1070aaafd94bed8ff4dc96a843b6054aa8e5af1ea95722825->leave($__internal_6e85a52b1d2edcd1070aaafd94bed8ff4dc96a843b6054aa8e5af1ea95722825_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Reserva:horarios.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  63 => 16,  59 => 15,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block content %}

    <div class=\"row\">
    <ul class=\"collection col l9\">

    <table>
    <thead>
    <tr>
        <th class=\"white-text\" >Dia</th>
        <th class=\"white-text\" >Hora</th>
        <th class=\"white-text\" >Precio</th>
        <th></th>
    </tr>
    </thead>
    {% for funcion in funciones %}
        <tbody>
        <tr>
            <td class=\"white-text\" >{{ funcion.fecha |date('d-m-y') }}</td>
            <td class=\"white-text\" >{{ funcion.hora }}</td>
            <td class=\"white-text\" >\${{ funcion.precio }}</td>
            <td class=\"white-text\" ><a href=\"{{path(\"entrada_confirmacion\", {\"id\":funcion.id})}}\" class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">forward</i></a></td>
        </tr>
        </tbody>
    {% endfor %}
    </table>

{% endblock %}", "CineBundle:Reserva:horarios.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Reserva/horarios.html.twig");
    }
}
