<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_591587cf3d250cb6a75144042f9ed364511a48f8d1e4425a30d8a632482553fd extends Twig_Template
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
        $__internal_0f6fe277845e680ecf209d489ff9ad372cbb94995c525bcbc7cff94e85f6a6e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6fe277845e680ecf209d489ff9ad372cbb94995c525bcbc7cff94e85f6a6e6->enter($__internal_0f6fe277845e680ecf209d489ff9ad372cbb94995c525bcbc7cff94e85f6a6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c4756bffab344dbc027c723235798c63bdf3a257711b1c6176213620f5fd3af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4756bffab344dbc027c723235798c63bdf3a257711b1c6176213620f5fd3af8->enter($__internal_c4756bffab344dbc027c723235798c63bdf3a257711b1c6176213620f5fd3af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f6fe277845e680ecf209d489ff9ad372cbb94995c525bcbc7cff94e85f6a6e6->leave($__internal_0f6fe277845e680ecf209d489ff9ad372cbb94995c525bcbc7cff94e85f6a6e6_prof);

        
        $__internal_c4756bffab344dbc027c723235798c63bdf3a257711b1c6176213620f5fd3af8->leave($__internal_c4756bffab344dbc027c723235798c63bdf3a257711b1c6176213620f5fd3af8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1db42a6452df6bc515e4cfc8fa1ad9adef9249233a8c9fdcbebd4dcf6bc63174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db42a6452df6bc515e4cfc8fa1ad9adef9249233a8c9fdcbebd4dcf6bc63174->enter($__internal_1db42a6452df6bc515e4cfc8fa1ad9adef9249233a8c9fdcbebd4dcf6bc63174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_37c1432be24a1963b9ad5efd973cf7e99570de0fe492fae890dd5085554e4309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c1432be24a1963b9ad5efd973cf7e99570de0fe492fae890dd5085554e4309->enter($__internal_37c1432be24a1963b9ad5efd973cf7e99570de0fe492fae890dd5085554e4309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_37c1432be24a1963b9ad5efd973cf7e99570de0fe492fae890dd5085554e4309->leave($__internal_37c1432be24a1963b9ad5efd973cf7e99570de0fe492fae890dd5085554e4309_prof);

        
        $__internal_1db42a6452df6bc515e4cfc8fa1ad9adef9249233a8c9fdcbebd4dcf6bc63174->leave($__internal_1db42a6452df6bc515e4cfc8fa1ad9adef9249233a8c9fdcbebd4dcf6bc63174_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8108afdff060d77c0a76b9c0802c89ef36a8b47419e6b0a5096eb2652a38b212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8108afdff060d77c0a76b9c0802c89ef36a8b47419e6b0a5096eb2652a38b212->enter($__internal_8108afdff060d77c0a76b9c0802c89ef36a8b47419e6b0a5096eb2652a38b212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9defe0398e836ba62dcbb7a3b039b2f7e3f3ea8f9b6c82609234e05809020afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9defe0398e836ba62dcbb7a3b039b2f7e3f3ea8f9b6c82609234e05809020afc->enter($__internal_9defe0398e836ba62dcbb7a3b039b2f7e3f3ea8f9b6c82609234e05809020afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9defe0398e836ba62dcbb7a3b039b2f7e3f3ea8f9b6c82609234e05809020afc->leave($__internal_9defe0398e836ba62dcbb7a3b039b2f7e3f3ea8f9b6c82609234e05809020afc_prof);

        
        $__internal_8108afdff060d77c0a76b9c0802c89ef36a8b47419e6b0a5096eb2652a38b212->leave($__internal_8108afdff060d77c0a76b9c0802c89ef36a8b47419e6b0a5096eb2652a38b212_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4a0e7760a392308762da8ba86364bfe61b55b31295d8f469b01d5158d102464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a0e7760a392308762da8ba86364bfe61b55b31295d8f469b01d5158d102464->enter($__internal_b4a0e7760a392308762da8ba86364bfe61b55b31295d8f469b01d5158d102464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a8b2ca98354d2556d9df2440cabad0c465232ff4c75ffc64ecc6e5d0a1a84f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b2ca98354d2556d9df2440cabad0c465232ff4c75ffc64ecc6e5d0a1a84f60->enter($__internal_a8b2ca98354d2556d9df2440cabad0c465232ff4c75ffc64ecc6e5d0a1a84f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a8b2ca98354d2556d9df2440cabad0c465232ff4c75ffc64ecc6e5d0a1a84f60->leave($__internal_a8b2ca98354d2556d9df2440cabad0c465232ff4c75ffc64ecc6e5d0a1a84f60_prof);

        
        $__internal_b4a0e7760a392308762da8ba86364bfe61b55b31295d8f469b01d5158d102464->leave($__internal_b4a0e7760a392308762da8ba86364bfe61b55b31295d8f469b01d5158d102464_prof);

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
