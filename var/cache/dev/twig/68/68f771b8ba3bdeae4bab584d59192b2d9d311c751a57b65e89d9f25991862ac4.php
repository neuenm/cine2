<?php

/* CineBundle:Pelicula:nueva.html.twig */
class __TwigTemplate_be5ffd31c9d679bcfbed1feacd5925c7b246a5b50057bf2e18f0c5209911d987 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Pelicula:nueva.html.twig", 1);
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
        $__internal_6747fa73f4f3343f6054d2102bbd7a7804a1927370e18f46362b5a35076c8075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6747fa73f4f3343f6054d2102bbd7a7804a1927370e18f46362b5a35076c8075->enter($__internal_6747fa73f4f3343f6054d2102bbd7a7804a1927370e18f46362b5a35076c8075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:nueva.html.twig"));

        $__internal_ccc0721856155c1b159d15bc972d8d12a9da6b19ed97c6db399d39a42d3e0da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc0721856155c1b159d15bc972d8d12a9da6b19ed97c6db399d39a42d3e0da6->enter($__internal_ccc0721856155c1b159d15bc972d8d12a9da6b19ed97c6db399d39a42d3e0da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6747fa73f4f3343f6054d2102bbd7a7804a1927370e18f46362b5a35076c8075->leave($__internal_6747fa73f4f3343f6054d2102bbd7a7804a1927370e18f46362b5a35076c8075_prof);

        
        $__internal_ccc0721856155c1b159d15bc972d8d12a9da6b19ed97c6db399d39a42d3e0da6->leave($__internal_ccc0721856155c1b159d15bc972d8d12a9da6b19ed97c6db399d39a42d3e0da6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5ac30fa292276485c43c970b0ee12a578609ec059d78ba7834f709581820f4d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac30fa292276485c43c970b0ee12a578609ec059d78ba7834f709581820f4d9->enter($__internal_5ac30fa292276485c43c970b0ee12a578609ec059d78ba7834f709581820f4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_91502a45c876d0e4a3e91cf3c4d1184f794f304cdbf665c5131c53eaeac80d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91502a45c876d0e4a3e91cf3c4d1184f794f304cdbf665c5131c53eaeac80d94->enter($__internal_91502a45c876d0e4a3e91cf3c4d1184f794f304cdbf665c5131c53eaeac80d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1 class=\"text-center\"\">Nueva Pelicula:</h1>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("encrtype" => "multipart/form-data"));
        echo "
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_91502a45c876d0e4a3e91cf3c4d1184f794f304cdbf665c5131c53eaeac80d94->leave($__internal_91502a45c876d0e4a3e91cf3c4d1184f794f304cdbf665c5131c53eaeac80d94_prof);

        
        $__internal_5ac30fa292276485c43c970b0ee12a578609ec059d78ba7834f709581820f4d9->leave($__internal_5ac30fa292276485c43c970b0ee12a578609ec059d78ba7834f709581820f4d9_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Pelicula:nueva.html.twig";
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
    <h1 class=\"text-center\"\">Nueva Pelicula:</h1>
    {% for message in app.session.flashbag().get('status') %}
        {% if message== \"Pelicula agregada correctamente\" %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {%else%}
            <div class=\"alert alert-danger\">{{ message }}</div>
        {% endif %}
    {% endfor %}
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
            {{form_start(form,{\"encrtype\":\"multipart/form-data\"})}}
            {{form_end(form)}}
        </div>
    </div>
    <div class=\"clearfix\">
{% endblock %}", "CineBundle:Pelicula:nueva.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Pelicula/nueva.html.twig");
    }
}
