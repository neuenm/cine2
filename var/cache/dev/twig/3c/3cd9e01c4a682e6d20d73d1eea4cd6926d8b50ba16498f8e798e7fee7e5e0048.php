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
        $__internal_b395871eade316f9acbc511f63daada97128c12b8f38ee4c1fafae4deea50bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b395871eade316f9acbc511f63daada97128c12b8f38ee4c1fafae4deea50bd9->enter($__internal_b395871eade316f9acbc511f63daada97128c12b8f38ee4c1fafae4deea50bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5b8a7db05869dd3049189e78a4ac3902119e1893eb3404d4bbd84495af512497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8a7db05869dd3049189e78a4ac3902119e1893eb3404d4bbd84495af512497->enter($__internal_5b8a7db05869dd3049189e78a4ac3902119e1893eb3404d4bbd84495af512497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b395871eade316f9acbc511f63daada97128c12b8f38ee4c1fafae4deea50bd9->leave($__internal_b395871eade316f9acbc511f63daada97128c12b8f38ee4c1fafae4deea50bd9_prof);

        
        $__internal_5b8a7db05869dd3049189e78a4ac3902119e1893eb3404d4bbd84495af512497->leave($__internal_5b8a7db05869dd3049189e78a4ac3902119e1893eb3404d4bbd84495af512497_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_946620035daf43161ea29969a7687e68b28e026d056b5ce9a3877c3c73822b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946620035daf43161ea29969a7687e68b28e026d056b5ce9a3877c3c73822b2a->enter($__internal_946620035daf43161ea29969a7687e68b28e026d056b5ce9a3877c3c73822b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e4c52b8c8b74a52435dff3574e5bc41adf0f8b5c309c19db8f587cb9b5c6ce1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c52b8c8b74a52435dff3574e5bc41adf0f8b5c309c19db8f587cb9b5c6ce1e->enter($__internal_e4c52b8c8b74a52435dff3574e5bc41adf0f8b5c309c19db8f587cb9b5c6ce1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4c52b8c8b74a52435dff3574e5bc41adf0f8b5c309c19db8f587cb9b5c6ce1e->leave($__internal_e4c52b8c8b74a52435dff3574e5bc41adf0f8b5c309c19db8f587cb9b5c6ce1e_prof);

        
        $__internal_946620035daf43161ea29969a7687e68b28e026d056b5ce9a3877c3c73822b2a->leave($__internal_946620035daf43161ea29969a7687e68b28e026d056b5ce9a3877c3c73822b2a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69aca7706b4561f6521c1a58e88bb74a5b45a7b5e92ace6216fb656e27c065a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69aca7706b4561f6521c1a58e88bb74a5b45a7b5e92ace6216fb656e27c065a3->enter($__internal_69aca7706b4561f6521c1a58e88bb74a5b45a7b5e92ace6216fb656e27c065a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_be970d5699575b5ada6588209644e5df2ae199f49ca35597c63917bd01b3f7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be970d5699575b5ada6588209644e5df2ae199f49ca35597c63917bd01b3f7d1->enter($__internal_be970d5699575b5ada6588209644e5df2ae199f49ca35597c63917bd01b3f7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be970d5699575b5ada6588209644e5df2ae199f49ca35597c63917bd01b3f7d1->leave($__internal_be970d5699575b5ada6588209644e5df2ae199f49ca35597c63917bd01b3f7d1_prof);

        
        $__internal_69aca7706b4561f6521c1a58e88bb74a5b45a7b5e92ace6216fb656e27c065a3->leave($__internal_69aca7706b4561f6521c1a58e88bb74a5b45a7b5e92ace6216fb656e27c065a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fb40bd4b11219667e5b08fe249625ced9ffb22df71f0f1fc4461711129f0942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb40bd4b11219667e5b08fe249625ced9ffb22df71f0f1fc4461711129f0942->enter($__internal_0fb40bd4b11219667e5b08fe249625ced9ffb22df71f0f1fc4461711129f0942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_02e6d0054daaf8e0296e2bfc98cb2517a8c66a450d908e74852d952bad034e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e6d0054daaf8e0296e2bfc98cb2517a8c66a450d908e74852d952bad034e86->enter($__internal_02e6d0054daaf8e0296e2bfc98cb2517a8c66a450d908e74852d952bad034e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_02e6d0054daaf8e0296e2bfc98cb2517a8c66a450d908e74852d952bad034e86->leave($__internal_02e6d0054daaf8e0296e2bfc98cb2517a8c66a450d908e74852d952bad034e86_prof);

        
        $__internal_0fb40bd4b11219667e5b08fe249625ced9ffb22df71f0f1fc4461711129f0942->leave($__internal_0fb40bd4b11219667e5b08fe249625ced9ffb22df71f0f1fc4461711129f0942_prof);

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
