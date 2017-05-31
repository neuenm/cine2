<?php

/* CineBundle:Funcion:nueva.html.twig */
class __TwigTemplate_2c0089b9dc5adbefea1d2134fff3003e52adc210b28f44254bcc276c08d1393d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Funcion:nueva.html.twig", 1);
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
        $__internal_49739bd9f44beb21d2b9cd26ce7d807d3a0d84c6765a05efc082c0535ad347e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49739bd9f44beb21d2b9cd26ce7d807d3a0d84c6765a05efc082c0535ad347e1->enter($__internal_49739bd9f44beb21d2b9cd26ce7d807d3a0d84c6765a05efc082c0535ad347e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:nueva.html.twig"));

        $__internal_f4961948f66cdb67980b5c690c1b837c318ef4da62b76d62be48ea8081bea1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4961948f66cdb67980b5c690c1b837c318ef4da62b76d62be48ea8081bea1e9->enter($__internal_f4961948f66cdb67980b5c690c1b837c318ef4da62b76d62be48ea8081bea1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49739bd9f44beb21d2b9cd26ce7d807d3a0d84c6765a05efc082c0535ad347e1->leave($__internal_49739bd9f44beb21d2b9cd26ce7d807d3a0d84c6765a05efc082c0535ad347e1_prof);

        
        $__internal_f4961948f66cdb67980b5c690c1b837c318ef4da62b76d62be48ea8081bea1e9->leave($__internal_f4961948f66cdb67980b5c690c1b837c318ef4da62b76d62be48ea8081bea1e9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6a2e6f20329242c8a18d72e7300a9e84d78538cdf313895e7312c5d38d4ae8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2e6f20329242c8a18d72e7300a9e84d78538cdf313895e7312c5d38d4ae8d3->enter($__internal_6a2e6f20329242c8a18d72e7300a9e84d78538cdf313895e7312c5d38d4ae8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_93fa6c5848214681e0d29456a9c97925b79d29a4e025621015d15e01687cda96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fa6c5848214681e0d29456a9c97925b79d29a4e025621015d15e01687cda96->enter($__internal_93fa6c5848214681e0d29456a9c97925b79d29a4e025621015d15e01687cda96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h3 class=\"light grey-text text-lighten-3\">Nueva Funcion:</h3>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "        ";
            if (($context["message"] == "Pelicula agregada correctamente")) {
                // line 7
                echo "            <div class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            } else {
                // line 9
                echo "            <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            }
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_93fa6c5848214681e0d29456a9c97925b79d29a4e025621015d15e01687cda96->leave($__internal_93fa6c5848214681e0d29456a9c97925b79d29a4e025621015d15e01687cda96_prof);

        
        $__internal_6a2e6f20329242c8a18d72e7300a9e84d78538cdf313895e7312c5d38d4ae8d3->leave($__internal_6a2e6f20329242c8a18d72e7300a9e84d78538cdf313895e7312c5d38d4ae8d3_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Funcion:nueva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  81 => 14,  77 => 12,  71 => 11,  65 => 9,  59 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h3 class=\"light grey-text text-lighten-3\">Nueva Funcion:</h3>
    {% for message in app.session.flashbag().get('status') %}
        {% if message== \"Pelicula agregada correctamente\" %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {%else%}
            <div class=\"alert alert-danger\">{{ message }}</div>
        {% endif %}
    {% endfor %}
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
            {{form_start(form)}}
            {{form_end(form)}}

        </div>
    </div>
    <div class=\"clearfix\">
{% endblock %}", "CineBundle:Funcion:nueva.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Funcion/nueva.html.twig");
    }
}
