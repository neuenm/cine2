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
        $__internal_214ae6e6589b5393b26a9dfc5be94f3d5aa352648f1d1a30fc4636b4787009a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_214ae6e6589b5393b26a9dfc5be94f3d5aa352648f1d1a30fc4636b4787009a8->enter($__internal_214ae6e6589b5393b26a9dfc5be94f3d5aa352648f1d1a30fc4636b4787009a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:nueva.html.twig"));

        $__internal_40052a6e26e7333ac0a80c36c2d5eef5c4c72d8b209856bf9bfa5fd4ded60b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40052a6e26e7333ac0a80c36c2d5eef5c4c72d8b209856bf9bfa5fd4ded60b2c->enter($__internal_40052a6e26e7333ac0a80c36c2d5eef5c4c72d8b209856bf9bfa5fd4ded60b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_214ae6e6589b5393b26a9dfc5be94f3d5aa352648f1d1a30fc4636b4787009a8->leave($__internal_214ae6e6589b5393b26a9dfc5be94f3d5aa352648f1d1a30fc4636b4787009a8_prof);

        
        $__internal_40052a6e26e7333ac0a80c36c2d5eef5c4c72d8b209856bf9bfa5fd4ded60b2c->leave($__internal_40052a6e26e7333ac0a80c36c2d5eef5c4c72d8b209856bf9bfa5fd4ded60b2c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2b2693a2a0e623f5c85fecca574ec2ce1b66c3b1ba3e7fddab6ed83641cc5788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b2693a2a0e623f5c85fecca574ec2ce1b66c3b1ba3e7fddab6ed83641cc5788->enter($__internal_2b2693a2a0e623f5c85fecca574ec2ce1b66c3b1ba3e7fddab6ed83641cc5788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_32811eda98a2a6b552c3e50b923f5d189cdf69a5ff8b816e9d47dcbcb50f855d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32811eda98a2a6b552c3e50b923f5d189cdf69a5ff8b816e9d47dcbcb50f855d->enter($__internal_32811eda98a2a6b552c3e50b923f5d189cdf69a5ff8b816e9d47dcbcb50f855d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1 class=\"text-center light grey-text text-lighten-3\">Nueva Pelicula:</h1>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "        <script>Materialize.toast(\"";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\", 6000, 'rounded')</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("encrtype" => "multipart/form-data"));
        echo "
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_32811eda98a2a6b552c3e50b923f5d189cdf69a5ff8b816e9d47dcbcb50f855d->leave($__internal_32811eda98a2a6b552c3e50b923f5d189cdf69a5ff8b816e9d47dcbcb50f855d_prof);

        
        $__internal_2b2693a2a0e623f5c85fecca574ec2ce1b66c3b1ba3e7fddab6ed83641cc5788->leave($__internal_2b2693a2a0e623f5c85fecca574ec2ce1b66c3b1ba3e7fddab6ed83641cc5788_prof);

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
        return array (  73 => 11,  69 => 10,  65 => 8,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1 class=\"text-center light grey-text text-lighten-3\">Nueva Pelicula:</h1>
    {% for message in app.session.flashbag().get('status') %}
        <script>Materialize.toast(\"{{ message }}\", 6000, 'rounded')</script>
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
