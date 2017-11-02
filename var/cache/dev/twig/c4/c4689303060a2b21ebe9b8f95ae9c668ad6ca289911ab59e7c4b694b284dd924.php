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
        $__internal_15ccebe29201202262e1870cf8f6bb291541065c17e09af00f676e3f070d1da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ccebe29201202262e1870cf8f6bb291541065c17e09af00f676e3f070d1da6->enter($__internal_15ccebe29201202262e1870cf8f6bb291541065c17e09af00f676e3f070d1da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:horarios.html.twig"));

        $__internal_a88403b7fa23a9d0e6c9208b30b8737b47bc51b92cd420284c69cdc3712a0b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88403b7fa23a9d0e6c9208b30b8737b47bc51b92cd420284c69cdc3712a0b1a->enter($__internal_a88403b7fa23a9d0e6c9208b30b8737b47bc51b92cd420284c69cdc3712a0b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:horarios.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_15ccebe29201202262e1870cf8f6bb291541065c17e09af00f676e3f070d1da6->leave($__internal_15ccebe29201202262e1870cf8f6bb291541065c17e09af00f676e3f070d1da6_prof);

        
        $__internal_a88403b7fa23a9d0e6c9208b30b8737b47bc51b92cd420284c69cdc3712a0b1a->leave($__internal_a88403b7fa23a9d0e6c9208b30b8737b47bc51b92cd420284c69cdc3712a0b1a_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_dc0fad7533a1b6c9ca900f2a5d9cdd7ac1b9772523d3a7f003f67e6dc687e008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc0fad7533a1b6c9ca900f2a5d9cdd7ac1b9772523d3a7f003f67e6dc687e008->enter($__internal_dc0fad7533a1b6c9ca900f2a5d9cdd7ac1b9772523d3a7f003f67e6dc687e008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_339d301f40607c00ae244f045b3f78c058e30a82b4673ab63d7aaab0f3d401f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339d301f40607c00ae244f045b3f78c058e30a82b4673ab63d7aaab0f3d401f2->enter($__internal_339d301f40607c00ae244f045b3f78c058e30a82b4673ab63d7aaab0f3d401f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_339d301f40607c00ae244f045b3f78c058e30a82b4673ab63d7aaab0f3d401f2->leave($__internal_339d301f40607c00ae244f045b3f78c058e30a82b4673ab63d7aaab0f3d401f2_prof);

        
        $__internal_dc0fad7533a1b6c9ca900f2a5d9cdd7ac1b9772523d3a7f003f67e6dc687e008->leave($__internal_dc0fad7533a1b6c9ca900f2a5d9cdd7ac1b9772523d3a7f003f67e6dc687e008_prof);

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
