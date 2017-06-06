<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca279fbe6754cbd208cd65ae2559722e9ace99644634b7146c75260bb1ace75d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca279fbe6754cbd208cd65ae2559722e9ace99644634b7146c75260bb1ace75d->enter($__internal_ca279fbe6754cbd208cd65ae2559722e9ace99644634b7146c75260bb1ace75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0543c3e6941172ea0f46b2789223d92e08ae9bc351ce06b44472a41a64f0b302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0543c3e6941172ea0f46b2789223d92e08ae9bc351ce06b44472a41a64f0b302->enter($__internal_0543c3e6941172ea0f46b2789223d92e08ae9bc351ce06b44472a41a64f0b302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca279fbe6754cbd208cd65ae2559722e9ace99644634b7146c75260bb1ace75d->leave($__internal_ca279fbe6754cbd208cd65ae2559722e9ace99644634b7146c75260bb1ace75d_prof);

        
        $__internal_0543c3e6941172ea0f46b2789223d92e08ae9bc351ce06b44472a41a64f0b302->leave($__internal_0543c3e6941172ea0f46b2789223d92e08ae9bc351ce06b44472a41a64f0b302_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6b487405313b07c086a49bd8dc3a182be2e58b3292f9b6400ca7f8767371423e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b487405313b07c086a49bd8dc3a182be2e58b3292f9b6400ca7f8767371423e->enter($__internal_6b487405313b07c086a49bd8dc3a182be2e58b3292f9b6400ca7f8767371423e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ab493a15a2c07023b52e22da486191cfca9c714c0758a37ccac6a6c2c5e103f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab493a15a2c07023b52e22da486191cfca9c714c0758a37ccac6a6c2c5e103f9->enter($__internal_ab493a15a2c07023b52e22da486191cfca9c714c0758a37ccac6a6c2c5e103f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ab493a15a2c07023b52e22da486191cfca9c714c0758a37ccac6a6c2c5e103f9->leave($__internal_ab493a15a2c07023b52e22da486191cfca9c714c0758a37ccac6a6c2c5e103f9_prof);

        
        $__internal_6b487405313b07c086a49bd8dc3a182be2e58b3292f9b6400ca7f8767371423e->leave($__internal_6b487405313b07c086a49bd8dc3a182be2e58b3292f9b6400ca7f8767371423e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7493f29c5233fbe2e9776f08977dd5512f107128535a64747a369dc224e6de29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7493f29c5233fbe2e9776f08977dd5512f107128535a64747a369dc224e6de29->enter($__internal_7493f29c5233fbe2e9776f08977dd5512f107128535a64747a369dc224e6de29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_88c941ffa568af035f66b6a94635e16032c8d08211ee86455243cc23a9e8aa77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c941ffa568af035f66b6a94635e16032c8d08211ee86455243cc23a9e8aa77->enter($__internal_88c941ffa568af035f66b6a94635e16032c8d08211ee86455243cc23a9e8aa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_88c941ffa568af035f66b6a94635e16032c8d08211ee86455243cc23a9e8aa77->leave($__internal_88c941ffa568af035f66b6a94635e16032c8d08211ee86455243cc23a9e8aa77_prof);

        
        $__internal_7493f29c5233fbe2e9776f08977dd5512f107128535a64747a369dc224e6de29->leave($__internal_7493f29c5233fbe2e9776f08977dd5512f107128535a64747a369dc224e6de29_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58036a6b8d12f9909e74aa3ac804c5e60f9aeed3a3c8bfc8f3c5f60c61f410e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58036a6b8d12f9909e74aa3ac804c5e60f9aeed3a3c8bfc8f3c5f60c61f410e8->enter($__internal_58036a6b8d12f9909e74aa3ac804c5e60f9aeed3a3c8bfc8f3c5f60c61f410e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8d260d3165ef82d6bec2a65082d9a843b1933792af94ece0c5caec1d7c980f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d260d3165ef82d6bec2a65082d9a843b1933792af94ece0c5caec1d7c980f46->enter($__internal_8d260d3165ef82d6bec2a65082d9a843b1933792af94ece0c5caec1d7c980f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d260d3165ef82d6bec2a65082d9a843b1933792af94ece0c5caec1d7c980f46->leave($__internal_8d260d3165ef82d6bec2a65082d9a843b1933792af94ece0c5caec1d7c980f46_prof);

        
        $__internal_58036a6b8d12f9909e74aa3ac804c5e60f9aeed3a3c8bfc8f3c5f60c61f410e8->leave($__internal_58036a6b8d12f9909e74aa3ac804c5e60f9aeed3a3c8bfc8f3c5f60c61f410e8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
