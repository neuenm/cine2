<?php

/* CineBundle:Cine:nuevo.html.twig */
class __TwigTemplate_2790ba3b02e4382f7ec5f8353d09384bcaec371d5256f72cd317fb05f48e6b41 extends Twig_Template
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
        $__internal_063c52f0228c3b7311b181c6f1df7d06c42a8261951af688cd954f35cc70f541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063c52f0228c3b7311b181c6f1df7d06c42a8261951af688cd954f35cc70f541->enter($__internal_063c52f0228c3b7311b181c6f1df7d06c42a8261951af688cd954f35cc70f541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:nuevo.html.twig"));

        $__internal_7d6dc79a21f18f0acb2b2b145f15d8ddea36af08415693059cdfef010ec8c9c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6dc79a21f18f0acb2b2b145f15d8ddea36af08415693059cdfef010ec8c9c6->enter($__internal_7d6dc79a21f18f0acb2b2b145f15d8ddea36af08415693059cdfef010ec8c9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_063c52f0228c3b7311b181c6f1df7d06c42a8261951af688cd954f35cc70f541->leave($__internal_063c52f0228c3b7311b181c6f1df7d06c42a8261951af688cd954f35cc70f541_prof);

        
        $__internal_7d6dc79a21f18f0acb2b2b145f15d8ddea36af08415693059cdfef010ec8c9c6->leave($__internal_7d6dc79a21f18f0acb2b2b145f15d8ddea36af08415693059cdfef010ec8c9c6_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_2d2f3988979bb15174d83b435092585ac9c624bfc1961b5a40299e8b702c356e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2f3988979bb15174d83b435092585ac9c624bfc1961b5a40299e8b702c356e->enter($__internal_2d2f3988979bb15174d83b435092585ac9c624bfc1961b5a40299e8b702c356e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5ffc300b25cc3f10e8a1a0926cc2e43f347b032172ddbcf53c57adc7dc8249e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ffc300b25cc3f10e8a1a0926cc2e43f347b032172ddbcf53c57adc7dc8249e2->enter($__internal_5ffc300b25cc3f10e8a1a0926cc2e43f347b032172ddbcf53c57adc7dc8249e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <h3 class=\"light grey-text text-lighten-3\">Nuevo cine:</h3>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'label');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "

            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_5ffc300b25cc3f10e8a1a0926cc2e43f347b032172ddbcf53c57adc7dc8249e2->leave($__internal_5ffc300b25cc3f10e8a1a0926cc2e43f347b032172ddbcf53c57adc7dc8249e2_prof);

        
        $__internal_2d2f3988979bb15174d83b435092585ac9c624bfc1961b5a40299e8b702c356e->leave($__internal_2d2f3988979bb15174d83b435092585ac9c624bfc1961b5a40299e8b702c356e_prof);

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
