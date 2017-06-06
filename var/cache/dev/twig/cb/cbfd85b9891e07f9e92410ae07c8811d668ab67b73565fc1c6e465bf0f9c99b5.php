<?php

/* CineBundle:Cine:nuevo.html.twig */
class __TwigTemplate_d7e5af561c939e666fcdc95c32a66e89550f409a0152836fc8639e1f3ed81de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Cine:nuevo.html.twig", 1);
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
        $__internal_31fdaedfe7c8d7a0cb5f0fd70393a97895b20b48efa7927f88a7263eaf872235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31fdaedfe7c8d7a0cb5f0fd70393a97895b20b48efa7927f88a7263eaf872235->enter($__internal_31fdaedfe7c8d7a0cb5f0fd70393a97895b20b48efa7927f88a7263eaf872235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:nuevo.html.twig"));

        $__internal_d6a8dfbee25d6cbf3d698a4e9444b294143cc33fd168a28be5e0bcd0401734da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a8dfbee25d6cbf3d698a4e9444b294143cc33fd168a28be5e0bcd0401734da->enter($__internal_d6a8dfbee25d6cbf3d698a4e9444b294143cc33fd168a28be5e0bcd0401734da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31fdaedfe7c8d7a0cb5f0fd70393a97895b20b48efa7927f88a7263eaf872235->leave($__internal_31fdaedfe7c8d7a0cb5f0fd70393a97895b20b48efa7927f88a7263eaf872235_prof);

        
        $__internal_d6a8dfbee25d6cbf3d698a4e9444b294143cc33fd168a28be5e0bcd0401734da->leave($__internal_d6a8dfbee25d6cbf3d698a4e9444b294143cc33fd168a28be5e0bcd0401734da_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_1e2884806bd4e68ac8be4d298d68754c7959e1cd7d13174ab994108c06a61699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2884806bd4e68ac8be4d298d68754c7959e1cd7d13174ab994108c06a61699->enter($__internal_1e2884806bd4e68ac8be4d298d68754c7959e1cd7d13174ab994108c06a61699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fab4ba2c06bf8d858c66c069c533080bf3e1e259dce6b4a051f6c9a33fe42352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab4ba2c06bf8d858c66c069c533080bf3e1e259dce6b4a051f6c9a33fe42352->enter($__internal_fab4ba2c06bf8d858c66c069c533080bf3e1e259dce6b4a051f6c9a33fe42352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <h3 class=\"light grey-text text-lighten-3\">Nuevo cine:</h3>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "        ";
            if (($context["message"] == "Cine agregado correctamente")) {
                // line 6
                echo "            <div class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            } else {
                // line 8
                echo "            <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            }
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'label');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "

            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_fab4ba2c06bf8d858c66c069c533080bf3e1e259dce6b4a051f6c9a33fe42352->leave($__internal_fab4ba2c06bf8d858c66c069c533080bf3e1e259dce6b4a051f6c9a33fe42352_prof);

        
        $__internal_1e2884806bd4e68ac8be4d298d68754c7959e1cd7d13174ab994108c06a61699->leave($__internal_1e2884806bd4e68ac8be4d298d68754c7959e1cd7d13174ab994108c06a61699_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Cine:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 17,  89 => 15,  85 => 14,  81 => 13,  77 => 11,  71 => 10,  65 => 8,  59 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    <h3 class=\"light grey-text text-lighten-3\">Nuevo cine:</h3>
    {% for message in app.session.flashbag().get('status') %}
        {% if message== \"Cine agregado correctamente\" %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {%else%}
            <div class=\"alert alert-danger\">{{ message }}</div>
        {% endif %}
    {% endfor %}
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
            {{form_start(form)}}
            {{ form_label(form.estado) }}
            {{ form_widget(form.estado, { 'attr': {'class': 'browser-default'} })  }}

            {{form_end(form)}}
        </div>
    </div>
    <div class=\"clearfix\">
{% endblock %}", "CineBundle:Cine:nuevo.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Cine/nuevo.html.twig");
    }
}
