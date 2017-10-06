<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e59a2c086b49ec745ee64efdd015abb83e0b7738abe97e39bed586d7688f8482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59a2c086b49ec745ee64efdd015abb83e0b7738abe97e39bed586d7688f8482->enter($__internal_e59a2c086b49ec745ee64efdd015abb83e0b7738abe97e39bed586d7688f8482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_76d7f13215421c7561f06a5195b15f98eea9a0ffddb9bf7f37bda7fb6313f5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d7f13215421c7561f06a5195b15f98eea9a0ffddb9bf7f37bda7fb6313f5c6->enter($__internal_76d7f13215421c7561f06a5195b15f98eea9a0ffddb9bf7f37bda7fb6313f5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e59a2c086b49ec745ee64efdd015abb83e0b7738abe97e39bed586d7688f8482->leave($__internal_e59a2c086b49ec745ee64efdd015abb83e0b7738abe97e39bed586d7688f8482_prof);

        
        $__internal_76d7f13215421c7561f06a5195b15f98eea9a0ffddb9bf7f37bda7fb6313f5c6->leave($__internal_76d7f13215421c7561f06a5195b15f98eea9a0ffddb9bf7f37bda7fb6313f5c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_231a0439303b59533748aeba120d4ff500151ff3ca6fba6439fc8ff58ba868a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231a0439303b59533748aeba120d4ff500151ff3ca6fba6439fc8ff58ba868a2->enter($__internal_231a0439303b59533748aeba120d4ff500151ff3ca6fba6439fc8ff58ba868a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f3a93d011633bda31cf8b5625cde43f686bc541377d20c99cf9c167e60e906dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a93d011633bda31cf8b5625cde43f686bc541377d20c99cf9c167e60e906dc->enter($__internal_f3a93d011633bda31cf8b5625cde43f686bc541377d20c99cf9c167e60e906dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f3a93d011633bda31cf8b5625cde43f686bc541377d20c99cf9c167e60e906dc->leave($__internal_f3a93d011633bda31cf8b5625cde43f686bc541377d20c99cf9c167e60e906dc_prof);

        
        $__internal_231a0439303b59533748aeba120d4ff500151ff3ca6fba6439fc8ff58ba868a2->leave($__internal_231a0439303b59533748aeba120d4ff500151ff3ca6fba6439fc8ff58ba868a2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d8f9cb260e5ecc9515d2e6911f0e879d9d7cf55ff45bb498ce4e3ba584c0cce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f9cb260e5ecc9515d2e6911f0e879d9d7cf55ff45bb498ce4e3ba584c0cce2->enter($__internal_d8f9cb260e5ecc9515d2e6911f0e879d9d7cf55ff45bb498ce4e3ba584c0cce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0499d99ff6f97afc30132d5c69d2b1188cd3c8f11c253ff94b7696bfd8810ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0499d99ff6f97afc30132d5c69d2b1188cd3c8f11c253ff94b7696bfd8810ef3->enter($__internal_0499d99ff6f97afc30132d5c69d2b1188cd3c8f11c253ff94b7696bfd8810ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0499d99ff6f97afc30132d5c69d2b1188cd3c8f11c253ff94b7696bfd8810ef3->leave($__internal_0499d99ff6f97afc30132d5c69d2b1188cd3c8f11c253ff94b7696bfd8810ef3_prof);

        
        $__internal_d8f9cb260e5ecc9515d2e6911f0e879d9d7cf55ff45bb498ce4e3ba584c0cce2->leave($__internal_d8f9cb260e5ecc9515d2e6911f0e879d9d7cf55ff45bb498ce4e3ba584c0cce2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c9f67891ca89474d013a35931bb7d5bee10881b0056d3921f9e5a6215b6c549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c9f67891ca89474d013a35931bb7d5bee10881b0056d3921f9e5a6215b6c549->enter($__internal_7c9f67891ca89474d013a35931bb7d5bee10881b0056d3921f9e5a6215b6c549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_37c475c4b38314a736f7b7f1cfc3268a967be7af316dbb09dce5113e5ed2f17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c475c4b38314a736f7b7f1cfc3268a967be7af316dbb09dce5113e5ed2f17b->enter($__internal_37c475c4b38314a736f7b7f1cfc3268a967be7af316dbb09dce5113e5ed2f17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_37c475c4b38314a736f7b7f1cfc3268a967be7af316dbb09dce5113e5ed2f17b->leave($__internal_37c475c4b38314a736f7b7f1cfc3268a967be7af316dbb09dce5113e5ed2f17b_prof);

        
        $__internal_7c9f67891ca89474d013a35931bb7d5bee10881b0056d3921f9e5a6215b6c549->leave($__internal_7c9f67891ca89474d013a35931bb7d5bee10881b0056d3921f9e5a6215b6c549_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
