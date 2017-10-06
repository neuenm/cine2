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
        $__internal_c0e28c4f60fa467654d58a6c58c976edfdec9bcc10a1b35d444e6b4f77e5c74b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e28c4f60fa467654d58a6c58c976edfdec9bcc10a1b35d444e6b4f77e5c74b->enter($__internal_c0e28c4f60fa467654d58a6c58c976edfdec9bcc10a1b35d444e6b4f77e5c74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e44b97c53c3def7c2a03d43753430d36ab63cc060c882b1133546d9d58c2991d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44b97c53c3def7c2a03d43753430d36ab63cc060c882b1133546d9d58c2991d->enter($__internal_e44b97c53c3def7c2a03d43753430d36ab63cc060c882b1133546d9d58c2991d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0e28c4f60fa467654d58a6c58c976edfdec9bcc10a1b35d444e6b4f77e5c74b->leave($__internal_c0e28c4f60fa467654d58a6c58c976edfdec9bcc10a1b35d444e6b4f77e5c74b_prof);

        
        $__internal_e44b97c53c3def7c2a03d43753430d36ab63cc060c882b1133546d9d58c2991d->leave($__internal_e44b97c53c3def7c2a03d43753430d36ab63cc060c882b1133546d9d58c2991d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e894de81ce8b94dff74a35fb7fd7b3c636eb709c0411590da08337e8b0c8a6ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e894de81ce8b94dff74a35fb7fd7b3c636eb709c0411590da08337e8b0c8a6ed->enter($__internal_e894de81ce8b94dff74a35fb7fd7b3c636eb709c0411590da08337e8b0c8a6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cb25347ec0ad4a7c23150e4e7951bd8865b10fd85889a2918665f94fc90efaab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb25347ec0ad4a7c23150e4e7951bd8865b10fd85889a2918665f94fc90efaab->enter($__internal_cb25347ec0ad4a7c23150e4e7951bd8865b10fd85889a2918665f94fc90efaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cb25347ec0ad4a7c23150e4e7951bd8865b10fd85889a2918665f94fc90efaab->leave($__internal_cb25347ec0ad4a7c23150e4e7951bd8865b10fd85889a2918665f94fc90efaab_prof);

        
        $__internal_e894de81ce8b94dff74a35fb7fd7b3c636eb709c0411590da08337e8b0c8a6ed->leave($__internal_e894de81ce8b94dff74a35fb7fd7b3c636eb709c0411590da08337e8b0c8a6ed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ebdce96904068e9511fa24fbbb074ecca62c02d03e7d66020210894f3c16847d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebdce96904068e9511fa24fbbb074ecca62c02d03e7d66020210894f3c16847d->enter($__internal_ebdce96904068e9511fa24fbbb074ecca62c02d03e7d66020210894f3c16847d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_af98437dbf70fc3634c7e843bbfb09bfc70496045ec66453afb4b27903770a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af98437dbf70fc3634c7e843bbfb09bfc70496045ec66453afb4b27903770a62->enter($__internal_af98437dbf70fc3634c7e843bbfb09bfc70496045ec66453afb4b27903770a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_af98437dbf70fc3634c7e843bbfb09bfc70496045ec66453afb4b27903770a62->leave($__internal_af98437dbf70fc3634c7e843bbfb09bfc70496045ec66453afb4b27903770a62_prof);

        
        $__internal_ebdce96904068e9511fa24fbbb074ecca62c02d03e7d66020210894f3c16847d->leave($__internal_ebdce96904068e9511fa24fbbb074ecca62c02d03e7d66020210894f3c16847d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e82b78cdd1f01ef0f2827a6dc9976e9db44c638688506b3dc98f721a47a7f9f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82b78cdd1f01ef0f2827a6dc9976e9db44c638688506b3dc98f721a47a7f9f2->enter($__internal_e82b78cdd1f01ef0f2827a6dc9976e9db44c638688506b3dc98f721a47a7f9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7e8db6febba59e5ad088a2f291c0dd54f7d319bfc54a2b329949c93bd6dd9061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8db6febba59e5ad088a2f291c0dd54f7d319bfc54a2b329949c93bd6dd9061->enter($__internal_7e8db6febba59e5ad088a2f291c0dd54f7d319bfc54a2b329949c93bd6dd9061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7e8db6febba59e5ad088a2f291c0dd54f7d319bfc54a2b329949c93bd6dd9061->leave($__internal_7e8db6febba59e5ad088a2f291c0dd54f7d319bfc54a2b329949c93bd6dd9061_prof);

        
        $__internal_e82b78cdd1f01ef0f2827a6dc9976e9db44c638688506b3dc98f721a47a7f9f2->leave($__internal_e82b78cdd1f01ef0f2827a6dc9976e9db44c638688506b3dc98f721a47a7f9f2_prof);

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
