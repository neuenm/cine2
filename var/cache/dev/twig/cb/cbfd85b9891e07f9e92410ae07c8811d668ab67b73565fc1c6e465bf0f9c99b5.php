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
        $__internal_94714bea71399cb79dd8cb69da0cf6528eb4c31367d8b964250b8d16ab93df7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94714bea71399cb79dd8cb69da0cf6528eb4c31367d8b964250b8d16ab93df7f->enter($__internal_94714bea71399cb79dd8cb69da0cf6528eb4c31367d8b964250b8d16ab93df7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:nuevo.html.twig"));

        $__internal_fedc62d66833800aa8063b2d3f6cd7d30c37fd1fe74cc86864db3446fb1e5bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fedc62d66833800aa8063b2d3f6cd7d30c37fd1fe74cc86864db3446fb1e5bdb->enter($__internal_fedc62d66833800aa8063b2d3f6cd7d30c37fd1fe74cc86864db3446fb1e5bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94714bea71399cb79dd8cb69da0cf6528eb4c31367d8b964250b8d16ab93df7f->leave($__internal_94714bea71399cb79dd8cb69da0cf6528eb4c31367d8b964250b8d16ab93df7f_prof);

        
        $__internal_fedc62d66833800aa8063b2d3f6cd7d30c37fd1fe74cc86864db3446fb1e5bdb->leave($__internal_fedc62d66833800aa8063b2d3f6cd7d30c37fd1fe74cc86864db3446fb1e5bdb_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_14355253850fde71bc80269557e0338833f39b481934413b3d9259419080462f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14355253850fde71bc80269557e0338833f39b481934413b3d9259419080462f->enter($__internal_14355253850fde71bc80269557e0338833f39b481934413b3d9259419080462f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d28323e933d83c432b1417bb808b06943fa33cf5c77fcaaac9a2978759ec3704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28323e933d83c432b1417bb808b06943fa33cf5c77fcaaac9a2978759ec3704->enter($__internal_d28323e933d83c432b1417bb808b06943fa33cf5c77fcaaac9a2978759ec3704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_d28323e933d83c432b1417bb808b06943fa33cf5c77fcaaac9a2978759ec3704->leave($__internal_d28323e933d83c432b1417bb808b06943fa33cf5c77fcaaac9a2978759ec3704_prof);

        
        $__internal_14355253850fde71bc80269557e0338833f39b481934413b3d9259419080462f->leave($__internal_14355253850fde71bc80269557e0338833f39b481934413b3d9259419080462f_prof);

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
        return array (  93 => 16,  89 => 15,  85 => 14,  81 => 13,  77 => 11,  71 => 10,  65 => 8,  59 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
