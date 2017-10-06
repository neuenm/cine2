<?php

/* CineBundle:Funcion:nueva.html.twig */
class __TwigTemplate_23d9546afc239cee5fd422017524a27f9b040e54ef93814edba9481e427b42e4 extends Twig_Template
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
        $__internal_85cf1b7ca6940748fcade970be5af6428df26af4b1dfec931a3194f6a0a845fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85cf1b7ca6940748fcade970be5af6428df26af4b1dfec931a3194f6a0a845fb->enter($__internal_85cf1b7ca6940748fcade970be5af6428df26af4b1dfec931a3194f6a0a845fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:nueva.html.twig"));

        $__internal_a5c84e0fb0544071d539eafe5fc5b4c1367915bf3316fbcc55f84c80b21f3476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c84e0fb0544071d539eafe5fc5b4c1367915bf3316fbcc55f84c80b21f3476->enter($__internal_a5c84e0fb0544071d539eafe5fc5b4c1367915bf3316fbcc55f84c80b21f3476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85cf1b7ca6940748fcade970be5af6428df26af4b1dfec931a3194f6a0a845fb->leave($__internal_85cf1b7ca6940748fcade970be5af6428df26af4b1dfec931a3194f6a0a845fb_prof);

        
        $__internal_a5c84e0fb0544071d539eafe5fc5b4c1367915bf3316fbcc55f84c80b21f3476->leave($__internal_a5c84e0fb0544071d539eafe5fc5b4c1367915bf3316fbcc55f84c80b21f3476_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b01e8770d0cb21c65a68128e78b3f54027a5425914524142e229d3f64e469c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01e8770d0cb21c65a68128e78b3f54027a5425914524142e229d3f64e469c84->enter($__internal_b01e8770d0cb21c65a68128e78b3f54027a5425914524142e229d3f64e469c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f90b735f1029b18b033db7da7031f14e771ffff5550f8b1db34cb2c6a7c8ee59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90b735f1029b18b033db7da7031f14e771ffff5550f8b1db34cb2c6a7c8ee59->enter($__internal_f90b735f1029b18b033db7da7031f14e771ffff5550f8b1db34cb2c6a7c8ee59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h3 class=\"light grey-text text-lighten-3\">Nueva Funcion:</h3>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_f90b735f1029b18b033db7da7031f14e771ffff5550f8b1db34cb2c6a7c8ee59->leave($__internal_f90b735f1029b18b033db7da7031f14e771ffff5550f8b1db34cb2c6a7c8ee59_prof);

        
        $__internal_b01e8770d0cb21c65a68128e78b3f54027a5425914524142e229d3f64e469c84->leave($__internal_b01e8770d0cb21c65a68128e78b3f54027a5425914524142e229d3f64e469c84_prof);

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
