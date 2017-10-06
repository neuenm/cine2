<?php

/* CineBundle:Pelicopia:nueva.html.twig */
class __TwigTemplate_41917864c59d8c55e70301ba591f560eb3aa24ecd3fd95b92a639e143ca89fe3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Pelicopia:nueva.html.twig", 1);
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
        $__internal_9155d2be7d4d2c5cc465c5581441a361e10229557742dd165abd9b02e05ac8eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9155d2be7d4d2c5cc465c5581441a361e10229557742dd165abd9b02e05ac8eb->enter($__internal_9155d2be7d4d2c5cc465c5581441a361e10229557742dd165abd9b02e05ac8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicopia:nueva.html.twig"));

        $__internal_7efaea89852303e9510daf852630b72eca86fefefa6db28159925de215016c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efaea89852303e9510daf852630b72eca86fefefa6db28159925de215016c0e->enter($__internal_7efaea89852303e9510daf852630b72eca86fefefa6db28159925de215016c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicopia:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9155d2be7d4d2c5cc465c5581441a361e10229557742dd165abd9b02e05ac8eb->leave($__internal_9155d2be7d4d2c5cc465c5581441a361e10229557742dd165abd9b02e05ac8eb_prof);

        
        $__internal_7efaea89852303e9510daf852630b72eca86fefefa6db28159925de215016c0e->leave($__internal_7efaea89852303e9510daf852630b72eca86fefefa6db28159925de215016c0e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e91f15d3b76bcc69d7d610d5aeae849361c6d073fcb8e2d4ad2071c8fe449a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e91f15d3b76bcc69d7d610d5aeae849361c6d073fcb8e2d4ad2071c8fe449a8d->enter($__internal_e91f15d3b76bcc69d7d610d5aeae849361c6d073fcb8e2d4ad2071c8fe449a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_15ff932963eda7cdd8636b950e4753c38997a620f84689c19f4538b877f55058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ff932963eda7cdd8636b950e4753c38997a620f84689c19f4538b877f55058->enter($__internal_15ff932963eda7cdd8636b950e4753c38997a620f84689c19f4538b877f55058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h3 class=\"light grey-text text-lighten-3\">Nueva Copia de Pelicula:</h3>
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idPeli", array()), 'label');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idPeli", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idFormato", array()), 'label');
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idFormato", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idioma", array()), 'label');
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idioma", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'label');
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_15ff932963eda7cdd8636b950e4753c38997a620f84689c19f4538b877f55058->leave($__internal_15ff932963eda7cdd8636b950e4753c38997a620f84689c19f4538b877f55058_prof);

        
        $__internal_e91f15d3b76bcc69d7d610d5aeae849361c6d073fcb8e2d4ad2071c8fe449a8d->leave($__internal_e91f15d3b76bcc69d7d610d5aeae849361c6d073fcb8e2d4ad2071c8fe449a8d_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Pelicopia:nueva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 23,  113 => 22,  109 => 21,  105 => 20,  101 => 19,  97 => 18,  93 => 17,  89 => 16,  85 => 15,  81 => 14,  77 => 12,  71 => 11,  65 => 9,  59 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h3 class=\"light grey-text text-lighten-3\">Nueva Copia de Pelicula:</h3>
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
            {{ form_label(form.idPeli) }}
            {{ form_widget(form.idPeli, { 'attr': {'class': 'browser-default'} })  }}
            {{ form_label(form.idFormato) }}
            {{ form_widget(form.idFormato, { 'attr': {'class': 'browser-default'} })  }}
            {{ form_label(form.idioma) }}
            {{ form_widget(form.idioma, { 'attr': {'class': 'browser-default'} })  }}
            {{ form_label(form.estado) }}
            {{ form_widget(form.estado, { 'attr': {'class': 'browser-default'} })  }}
            {{form_end(form)}}

        </div>
    </div>
    <div class=\"clearfix\">
{% endblock %}", "CineBundle:Pelicopia:nueva.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Pelicopia/nueva.html.twig");
    }
}
