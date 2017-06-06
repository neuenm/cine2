<?php

/* CineBundle:Funcion:confirma.html.twig */
class __TwigTemplate_8a53f74112ed8323e51fa27cb4de5c2e96a0b11150cfa73b79872e69b318766e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Funcion:confirma.html.twig", 1);
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
        $__internal_304e87a2030b42279a4f68343a39187b86cc34f515d0f46ff36f6fb4d8f2e692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_304e87a2030b42279a4f68343a39187b86cc34f515d0f46ff36f6fb4d8f2e692->enter($__internal_304e87a2030b42279a4f68343a39187b86cc34f515d0f46ff36f6fb4d8f2e692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:confirma.html.twig"));

        $__internal_1854a4d6663ba24ab3d11fae81a186be256345015579ce561747f94426b5e619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1854a4d6663ba24ab3d11fae81a186be256345015579ce561747f94426b5e619->enter($__internal_1854a4d6663ba24ab3d11fae81a186be256345015579ce561747f94426b5e619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:confirma.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_304e87a2030b42279a4f68343a39187b86cc34f515d0f46ff36f6fb4d8f2e692->leave($__internal_304e87a2030b42279a4f68343a39187b86cc34f515d0f46ff36f6fb4d8f2e692_prof);

        
        $__internal_1854a4d6663ba24ab3d11fae81a186be256345015579ce561747f94426b5e619->leave($__internal_1854a4d6663ba24ab3d11fae81a186be256345015579ce561747f94426b5e619_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_12cbd142e0a39f902c1cf4a3025f517e0ad2944f5d3e5c22e0c7bcf66acdaa74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12cbd142e0a39f902c1cf4a3025f517e0ad2944f5d3e5c22e0c7bcf66acdaa74->enter($__internal_12cbd142e0a39f902c1cf4a3025f517e0ad2944f5d3e5c22e0c7bcf66acdaa74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_928f330339d65ec6d04c433328c4cfe008714024af64bb3324bd4375a9ac49c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928f330339d65ec6d04c433328c4cfe008714024af64bb3324bd4375a9ac49c5->enter($__internal_928f330339d65ec6d04c433328c4cfe008714024af64bb3324bd4375a9ac49c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["funciones"] ?? $this->getContext($context, "funciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["funcion"]) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["funcion"], "precio", array()), "html", null, true);
            echo "
        <div class=\"row\">
            <div class=\"col m3\">
                <h5>Desliza la barra para elegir cuantas butacas queres reservar:<h2>
                <form action=\"#\">
                    <p class=\"range-field\">
                        <input id=\"cantidad\" type=\"range\" name=\"cantidad\" min=\"0\" max=\"10\" step=\"1\" value=\"1\">
                        <br>
                        <h5>Cantidad de entradas</h5>
                        <input type=\"text\" name=\"valorcantidad\" id=\"valorcantidad\" value=\"\">
                        <br>
                    </p>
                </form>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['funcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function()
        {
            \$('#cantidad').change(function() {
                \$('#valorcantidad').val(\$(this).val())*5;

            });
        });
    </script>

";
        
        $__internal_928f330339d65ec6d04c433328c4cfe008714024af64bb3324bd4375a9ac49c5->leave($__internal_928f330339d65ec6d04c433328c4cfe008714024af64bb3324bd4375a9ac49c5_prof);

        
        $__internal_12cbd142e0a39f902c1cf4a3025f517e0ad2944f5d3e5c22e0c7bcf66acdaa74->leave($__internal_12cbd142e0a39f902c1cf4a3025f517e0ad2944f5d3e5c22e0c7bcf66acdaa74_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Funcion:confirma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

    {% for funcion in funciones %}
        {{ funcion.precio }}
        <div class=\"row\">
            <div class=\"col m3\">
                <h5>Desliza la barra para elegir cuantas butacas queres reservar:<h2>
                <form action=\"#\">
                    <p class=\"range-field\">
                        <input id=\"cantidad\" type=\"range\" name=\"cantidad\" min=\"0\" max=\"10\" step=\"1\" value=\"1\">
                        <br>
                        <h5>Cantidad de entradas</h5>
                        <input type=\"text\" name=\"valorcantidad\" id=\"valorcantidad\" value=\"\">
                        <br>
                    </p>
                </form>
            </div>
        </div>
    {% endfor %}

    <script type=\"text/javascript\">
        \$(document).ready(function()
        {
            \$('#cantidad').change(function() {
                \$('#valorcantidad').val(\$(this).val())*5;

            });
        });
    </script>

{% endblock %}", "CineBundle:Funcion:confirma.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Funcion/confirma.html.twig");
    }
}
