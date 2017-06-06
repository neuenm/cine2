<?php

/* CineBundle:Pelicula:nueva.html.twig */
class __TwigTemplate_d8aa6409fe3b47297077e44485e895dcf164f1f8bee8a4f839ee624e9684323c extends Twig_Template
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
        $__internal_37bed6f5e851f63c051393d879728a1c499f78fac9c5f70d9d5b1235e01dcc03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37bed6f5e851f63c051393d879728a1c499f78fac9c5f70d9d5b1235e01dcc03->enter($__internal_37bed6f5e851f63c051393d879728a1c499f78fac9c5f70d9d5b1235e01dcc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:nueva.html.twig"));

        $__internal_74184ffce58b65ed612bb50932ebeaa758ea286735b459e1b9efbbba26b9af89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74184ffce58b65ed612bb50932ebeaa758ea286735b459e1b9efbbba26b9af89->enter($__internal_74184ffce58b65ed612bb50932ebeaa758ea286735b459e1b9efbbba26b9af89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37bed6f5e851f63c051393d879728a1c499f78fac9c5f70d9d5b1235e01dcc03->leave($__internal_37bed6f5e851f63c051393d879728a1c499f78fac9c5f70d9d5b1235e01dcc03_prof);

        
        $__internal_74184ffce58b65ed612bb50932ebeaa758ea286735b459e1b9efbbba26b9af89->leave($__internal_74184ffce58b65ed612bb50932ebeaa758ea286735b459e1b9efbbba26b9af89_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_879d55a40817b00d15c2839e3775350aba95b2917a8eb0e8c27414b9b89248e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879d55a40817b00d15c2839e3775350aba95b2917a8eb0e8c27414b9b89248e5->enter($__internal_879d55a40817b00d15c2839e3775350aba95b2917a8eb0e8c27414b9b89248e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_570592991fa0af4ea5875ddc2d3a9a5974f9766243952aab6385e3e92d529909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570592991fa0af4ea5875ddc2d3a9a5974f9766243952aab6385e3e92d529909->enter($__internal_570592991fa0af4ea5875ddc2d3a9a5974f9766243952aab6385e3e92d529909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1 class=\"text-center\"\">Nueva Pelicula:</h1>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("encrtype" => "multipart/form-data"));
        echo "
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_570592991fa0af4ea5875ddc2d3a9a5974f9766243952aab6385e3e92d529909->leave($__internal_570592991fa0af4ea5875ddc2d3a9a5974f9766243952aab6385e3e92d529909_prof);

        
        $__internal_879d55a40817b00d15c2839e3775350aba95b2917a8eb0e8c27414b9b89248e5->leave($__internal_879d55a40817b00d15c2839e3775350aba95b2917a8eb0e8c27414b9b89248e5_prof);

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
