<?php

/* CineBundle:Funcion:horarios.html.twig */
class __TwigTemplate_7f0e408672993d00243e77049c34dd7e6b3b3bd90c31dea2468a284e115463bd extends Twig_Template
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
        $__internal_eb0823cbca17283c8e94948b3015739e20ebc6663d940d8373459e449a421a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb0823cbca17283c8e94948b3015739e20ebc6663d940d8373459e449a421a55->enter($__internal_eb0823cbca17283c8e94948b3015739e20ebc6663d940d8373459e449a421a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:horarios.html.twig"));

        $__internal_a37406536a25e0650800d1d186b7244164fdceba6754358cd71a12f171f1342f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a37406536a25e0650800d1d186b7244164fdceba6754358cd71a12f171f1342f->enter($__internal_a37406536a25e0650800d1d186b7244164fdceba6754358cd71a12f171f1342f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:horarios.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_eb0823cbca17283c8e94948b3015739e20ebc6663d940d8373459e449a421a55->leave($__internal_eb0823cbca17283c8e94948b3015739e20ebc6663d940d8373459e449a421a55_prof);

        
        $__internal_a37406536a25e0650800d1d186b7244164fdceba6754358cd71a12f171f1342f->leave($__internal_a37406536a25e0650800d1d186b7244164fdceba6754358cd71a12f171f1342f_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_c307d25de2214cb663f2196a96604bec003771319cdf777acdd63e2b8817c62f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c307d25de2214cb663f2196a96604bec003771319cdf777acdd63e2b8817c62f->enter($__internal_c307d25de2214cb663f2196a96604bec003771319cdf777acdd63e2b8817c62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_53f414c72270f59edf161071f695a53576125277d04b1863e34437c80360540f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f414c72270f59edf161071f695a53576125277d04b1863e34437c80360540f->enter($__internal_53f414c72270f59edf161071f695a53576125277d04b1863e34437c80360540f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_53f414c72270f59edf161071f695a53576125277d04b1863e34437c80360540f->leave($__internal_53f414c72270f59edf161071f695a53576125277d04b1863e34437c80360540f_prof);

        
        $__internal_c307d25de2214cb663f2196a96604bec003771319cdf777acdd63e2b8817c62f->leave($__internal_c307d25de2214cb663f2196a96604bec003771319cdf777acdd63e2b8817c62f_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Funcion:horarios.html.twig";
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

{% endblock %}", "CineBundle:Funcion:horarios.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Funcion/horarios.html.twig");
    }
}
