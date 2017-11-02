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
        $__internal_0a6c19da2ffde7420c9923f046cecdf796ecc712b8515ac980715ba288566d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6c19da2ffde7420c9923f046cecdf796ecc712b8515ac980715ba288566d94->enter($__internal_0a6c19da2ffde7420c9923f046cecdf796ecc712b8515ac980715ba288566d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:nueva.html.twig"));

        $__internal_8d242d5b2aa6835c869d81a8840fa7c399ce2e3e028a20a28446314479c492e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d242d5b2aa6835c869d81a8840fa7c399ce2e3e028a20a28446314479c492e1->enter($__internal_8d242d5b2aa6835c869d81a8840fa7c399ce2e3e028a20a28446314479c492e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a6c19da2ffde7420c9923f046cecdf796ecc712b8515ac980715ba288566d94->leave($__internal_0a6c19da2ffde7420c9923f046cecdf796ecc712b8515ac980715ba288566d94_prof);

        
        $__internal_8d242d5b2aa6835c869d81a8840fa7c399ce2e3e028a20a28446314479c492e1->leave($__internal_8d242d5b2aa6835c869d81a8840fa7c399ce2e3e028a20a28446314479c492e1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_13471f513cca58afdaaf24b4b0e819c57e81fd199dc81f71dd67fb4f7e99dda9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13471f513cca58afdaaf24b4b0e819c57e81fd199dc81f71dd67fb4f7e99dda9->enter($__internal_13471f513cca58afdaaf24b4b0e819c57e81fd199dc81f71dd67fb4f7e99dda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f9947860a692ff8cb8248d07294eeb1516eaf033c68049d3f1f260b2deba4c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9947860a692ff8cb8248d07294eeb1516eaf033c68049d3f1f260b2deba4c12->enter($__internal_f9947860a692ff8cb8248d07294eeb1516eaf033c68049d3f1f260b2deba4c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h3 class=\"light grey-text text-lighten-3\">Nueva Funcion:</h3>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_f9947860a692ff8cb8248d07294eeb1516eaf033c68049d3f1f260b2deba4c12->leave($__internal_f9947860a692ff8cb8248d07294eeb1516eaf033c68049d3f1f260b2deba4c12_prof);

        
        $__internal_13471f513cca58afdaaf24b4b0e819c57e81fd199dc81f71dd67fb4f7e99dda9->leave($__internal_13471f513cca58afdaaf24b4b0e819c57e81fd199dc81f71dd67fb4f7e99dda9_prof);

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
    <h3 class=\"light grey-text text-lighten-3\">Nueva Funcion:</h3>
    {% for message in app.session.flashbag().get('status') %}
        <script>Materialize.toast(\"{{ message }}\", 6000, 'rounded')</script>
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
