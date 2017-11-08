<?php

/* RetiraentradaBundle:Retira:retira.html.twig */
class __TwigTemplate_38ce58ac3e8d3a7bb0e46b767cf1a4b6beb5904d008664ba74e9e5c2e07e5cbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RetiraentradaBundle::layout.html.twig", "RetiraentradaBundle:Retira:retira.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RetiraentradaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25ad7f1f8c629c1fbf781daa748007f6ca8f7f77a20eebf6a7fcfeda62602269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ad7f1f8c629c1fbf781daa748007f6ca8f7f77a20eebf6a7fcfeda62602269->enter($__internal_25ad7f1f8c629c1fbf781daa748007f6ca8f7f77a20eebf6a7fcfeda62602269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RetiraentradaBundle:Retira:retira.html.twig"));

        $__internal_a8d5e4e3ef3bd251f0a764807b7b7223a101aace5b10b967b1f2bbc2cfd3c6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d5e4e3ef3bd251f0a764807b7b7223a101aace5b10b967b1f2bbc2cfd3c6c8->enter($__internal_a8d5e4e3ef3bd251f0a764807b7b7223a101aace5b10b967b1f2bbc2cfd3c6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RetiraentradaBundle:Retira:retira.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25ad7f1f8c629c1fbf781daa748007f6ca8f7f77a20eebf6a7fcfeda62602269->leave($__internal_25ad7f1f8c629c1fbf781daa748007f6ca8f7f77a20eebf6a7fcfeda62602269_prof);

        
        $__internal_a8d5e4e3ef3bd251f0a764807b7b7223a101aace5b10b967b1f2bbc2cfd3c6c8->leave($__internal_a8d5e4e3ef3bd251f0a764807b7b7223a101aace5b10b967b1f2bbc2cfd3c6c8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0bf2609ab60c7095340e9e81ed74c4a9de214b9aadbb64b0b104ad53d3bba4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf2609ab60c7095340e9e81ed74c4a9de214b9aadbb64b0b104ad53d3bba4c8->enter($__internal_0bf2609ab60c7095340e9e81ed74c4a9de214b9aadbb64b0b104ad53d3bba4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9d09b1d2cf81077669072da4c03f1984e04d27dc39d84a0aae2c304d75914876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d09b1d2cf81077669072da4c03f1984e04d27dc39d84a0aae2c304d75914876->enter($__internal_9d09b1d2cf81077669072da4c03f1984e04d27dc39d84a0aae2c304d75914876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"card\">
        <img class=\"card-img-top\" src=\"http://espectaculo-cordoba.com.ar/wp-content/uploads/2017/04/cine-1.jpg\" alt=\"Card image cap\">
        <div class=\"card-block\">
            <h2 class=\"card-text\">Ingresa el codigo de tu reserva!</h2>
            ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_9d09b1d2cf81077669072da4c03f1984e04d27dc39d84a0aae2c304d75914876->leave($__internal_9d09b1d2cf81077669072da4c03f1984e04d27dc39d84a0aae2c304d75914876_prof);

        
        $__internal_0bf2609ab60c7095340e9e81ed74c4a9de214b9aadbb64b0b104ad53d3bba4c8->leave($__internal_0bf2609ab60c7095340e9e81ed74c4a9de214b9aadbb64b0b104ad53d3bba4c8_prof);

    }

    public function getTemplateName()
    {
        return "RetiraentradaBundle:Retira:retira.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"RetiraentradaBundle::layout.html.twig\" %}

{% block content %}
    <div class=\"card\">
        <img class=\"card-img-top\" src=\"http://espectaculo-cordoba.com.ar/wp-content/uploads/2017/04/cine-1.jpg\" alt=\"Card image cap\">
        <div class=\"card-block\">
            <h2 class=\"card-text\">Ingresa el codigo de tu reserva!</h2>
            {{form_start(form)}}
            {{form_end(form)}}
        </div>
    </div>
{% endblock %}", "RetiraentradaBundle:Retira:retira.html.twig", "/home/neuen/php2016/cine2/src/RetiraentradaBundle/Resources/views/Retira/retira.html.twig");
    }
}
