<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_35d9165c8a8bcd1c978980c9a88924822fce6ed95e2c1c4ecae4388f244f6193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56bf4f53c12ff2d16718ad1483208943e6fd40bdf4d90467aa1ffc116c5bd572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56bf4f53c12ff2d16718ad1483208943e6fd40bdf4d90467aa1ffc116c5bd572->enter($__internal_56bf4f53c12ff2d16718ad1483208943e6fd40bdf4d90467aa1ffc116c5bd572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8d0fd3e0ecd1e8450dbf5adadab52ff8de5ba028cdffe6a5cc1ef0b0eca487a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0fd3e0ecd1e8450dbf5adadab52ff8de5ba028cdffe6a5cc1ef0b0eca487a7->enter($__internal_8d0fd3e0ecd1e8450dbf5adadab52ff8de5ba028cdffe6a5cc1ef0b0eca487a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56bf4f53c12ff2d16718ad1483208943e6fd40bdf4d90467aa1ffc116c5bd572->leave($__internal_56bf4f53c12ff2d16718ad1483208943e6fd40bdf4d90467aa1ffc116c5bd572_prof);

        
        $__internal_8d0fd3e0ecd1e8450dbf5adadab52ff8de5ba028cdffe6a5cc1ef0b0eca487a7->leave($__internal_8d0fd3e0ecd1e8450dbf5adadab52ff8de5ba028cdffe6a5cc1ef0b0eca487a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d40e394e18d4d6b6833916918a0df25e84cdc7da5dcb0a720e04e485b3fa4288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d40e394e18d4d6b6833916918a0df25e84cdc7da5dcb0a720e04e485b3fa4288->enter($__internal_d40e394e18d4d6b6833916918a0df25e84cdc7da5dcb0a720e04e485b3fa4288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0be8b9e4c764d269fc2c54b416212f8512bf607e23d92cf8de193f09d1cb3e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be8b9e4c764d269fc2c54b416212f8512bf607e23d92cf8de193f09d1cb3e26->enter($__internal_0be8b9e4c764d269fc2c54b416212f8512bf607e23d92cf8de193f09d1cb3e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0be8b9e4c764d269fc2c54b416212f8512bf607e23d92cf8de193f09d1cb3e26->leave($__internal_0be8b9e4c764d269fc2c54b416212f8512bf607e23d92cf8de193f09d1cb3e26_prof);

        
        $__internal_d40e394e18d4d6b6833916918a0df25e84cdc7da5dcb0a720e04e485b3fa4288->leave($__internal_d40e394e18d4d6b6833916918a0df25e84cdc7da5dcb0a720e04e485b3fa4288_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
