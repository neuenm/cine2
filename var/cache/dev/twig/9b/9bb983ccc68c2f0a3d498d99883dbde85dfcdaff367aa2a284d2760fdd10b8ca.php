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
        $__internal_b35a1b1e2ccce54d610d3df29f98a1fac38105452997bb7863da94142f5339f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b35a1b1e2ccce54d610d3df29f98a1fac38105452997bb7863da94142f5339f9->enter($__internal_b35a1b1e2ccce54d610d3df29f98a1fac38105452997bb7863da94142f5339f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:horarios.html.twig"));

        $__internal_3ad3c8bd456e8b00f031fb2ab0ce0ba0ac770b32ac7513fb98447d4cc54752dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad3c8bd456e8b00f031fb2ab0ce0ba0ac770b32ac7513fb98447d4cc54752dd->enter($__internal_3ad3c8bd456e8b00f031fb2ab0ce0ba0ac770b32ac7513fb98447d4cc54752dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:horarios.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_b35a1b1e2ccce54d610d3df29f98a1fac38105452997bb7863da94142f5339f9->leave($__internal_b35a1b1e2ccce54d610d3df29f98a1fac38105452997bb7863da94142f5339f9_prof);

        
        $__internal_3ad3c8bd456e8b00f031fb2ab0ce0ba0ac770b32ac7513fb98447d4cc54752dd->leave($__internal_3ad3c8bd456e8b00f031fb2ab0ce0ba0ac770b32ac7513fb98447d4cc54752dd_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_b735985941c90d2eddbe78985f9b26d915fa4acbf08bca0e9670c5e9585b2919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b735985941c90d2eddbe78985f9b26d915fa4acbf08bca0e9670c5e9585b2919->enter($__internal_b735985941c90d2eddbe78985f9b26d915fa4acbf08bca0e9670c5e9585b2919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e40998f62aaaf5107eb83e5cf70aa95864e07ff1ef99c6a56a3f06a1c0da6656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e40998f62aaaf5107eb83e5cf70aa95864e07ff1ef99c6a56a3f06a1c0da6656->enter($__internal_e40998f62aaaf5107eb83e5cf70aa95864e07ff1ef99c6a56a3f06a1c0da6656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "
    <div class=\"row\">
    <ul class=\"collection col l9\">

    <table>
    <thead>
    <tr>
        <th>Dia</th>
        <th>Hora</th>
        <th>Precio</th>
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
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["funcion"], "fecha", array()), "d-m-y"), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["funcion"], "hora", array()), "h:m"), "html", null, true);
            echo "</td>
            <td>\$";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["funcion"], "precio", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entrada_confirmacion", array("id" => $this->getAttribute($context["funcion"], "id", array()))), "html", null, true);
            echo "\"><button>ir</button></a></td>
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
        
        $__internal_e40998f62aaaf5107eb83e5cf70aa95864e07ff1ef99c6a56a3f06a1c0da6656->leave($__internal_e40998f62aaaf5107eb83e5cf70aa95864e07ff1ef99c6a56a3f06a1c0da6656_prof);

        
        $__internal_b735985941c90d2eddbe78985f9b26d915fa4acbf08bca0e9670c5e9585b2919->leave($__internal_b735985941c90d2eddbe78985f9b26d915fa4acbf08bca0e9670c5e9585b2919_prof);

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
        <th>Dia</th>
        <th>Hora</th>
        <th>Precio</th>
        <th></th>
    </tr>
    </thead>
    {% for funcion in funciones %}
        <tbody>
        <tr>
            <td>{{ funcion.fecha |date('d-m-y') }}</td>
            <td>{{ funcion.hora|date('h:m') }}</td>
            <td>\${{ funcion.precio }}</td>
            <td><a href=\"{{path(\"entrada_confirmacion\", {\"id\":funcion.id})}}\"><button>ir</button></a></td>
        </tr>
        </tbody>
    {% endfor %}
    </table>

{% endblock %}", "CineBundle:Funcion:horarios.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Funcion/horarios.html.twig");
    }
}
