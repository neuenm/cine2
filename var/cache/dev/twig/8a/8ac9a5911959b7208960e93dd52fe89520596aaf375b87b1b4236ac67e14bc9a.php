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
        $__internal_e00bffae0128536c0edc60a2e24dbe4fae5e4982333418ae8c43d35373ff91cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00bffae0128536c0edc60a2e24dbe4fae5e4982333418ae8c43d35373ff91cc->enter($__internal_e00bffae0128536c0edc60a2e24dbe4fae5e4982333418ae8c43d35373ff91cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c232178d8f61df6bd45509a6847eaf30633ef59478ad9b85505a8e0863ba91e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c232178d8f61df6bd45509a6847eaf30633ef59478ad9b85505a8e0863ba91e8->enter($__internal_c232178d8f61df6bd45509a6847eaf30633ef59478ad9b85505a8e0863ba91e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e00bffae0128536c0edc60a2e24dbe4fae5e4982333418ae8c43d35373ff91cc->leave($__internal_e00bffae0128536c0edc60a2e24dbe4fae5e4982333418ae8c43d35373ff91cc_prof);

        
        $__internal_c232178d8f61df6bd45509a6847eaf30633ef59478ad9b85505a8e0863ba91e8->leave($__internal_c232178d8f61df6bd45509a6847eaf30633ef59478ad9b85505a8e0863ba91e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a0a26304d46ef65d0ce7444567523a7fd35c968a8726e786eb16d9142464883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a0a26304d46ef65d0ce7444567523a7fd35c968a8726e786eb16d9142464883->enter($__internal_1a0a26304d46ef65d0ce7444567523a7fd35c968a8726e786eb16d9142464883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8b4f2d322698000c9c1204fa2ea99bd5ad6b603006828bf3c913026bce4a1395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4f2d322698000c9c1204fa2ea99bd5ad6b603006828bf3c913026bce4a1395->enter($__internal_8b4f2d322698000c9c1204fa2ea99bd5ad6b603006828bf3c913026bce4a1395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8b4f2d322698000c9c1204fa2ea99bd5ad6b603006828bf3c913026bce4a1395->leave($__internal_8b4f2d322698000c9c1204fa2ea99bd5ad6b603006828bf3c913026bce4a1395_prof);

        
        $__internal_1a0a26304d46ef65d0ce7444567523a7fd35c968a8726e786eb16d9142464883->leave($__internal_1a0a26304d46ef65d0ce7444567523a7fd35c968a8726e786eb16d9142464883_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d471b0a9fac11c4e93a24e51d70730738ffa4292ffcf2bdb52aa08a1902285fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d471b0a9fac11c4e93a24e51d70730738ffa4292ffcf2bdb52aa08a1902285fd->enter($__internal_d471b0a9fac11c4e93a24e51d70730738ffa4292ffcf2bdb52aa08a1902285fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ed43aec674948e8b5ac41d50303211e754e097385da946aa66a1e630ce8556d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed43aec674948e8b5ac41d50303211e754e097385da946aa66a1e630ce8556d3->enter($__internal_ed43aec674948e8b5ac41d50303211e754e097385da946aa66a1e630ce8556d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ed43aec674948e8b5ac41d50303211e754e097385da946aa66a1e630ce8556d3->leave($__internal_ed43aec674948e8b5ac41d50303211e754e097385da946aa66a1e630ce8556d3_prof);

        
        $__internal_d471b0a9fac11c4e93a24e51d70730738ffa4292ffcf2bdb52aa08a1902285fd->leave($__internal_d471b0a9fac11c4e93a24e51d70730738ffa4292ffcf2bdb52aa08a1902285fd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5bef251c3652f3868ea45fc13bd8d72ea7d117011a9a9c2d1e2d2d58242fa1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bef251c3652f3868ea45fc13bd8d72ea7d117011a9a9c2d1e2d2d58242fa1f6->enter($__internal_5bef251c3652f3868ea45fc13bd8d72ea7d117011a9a9c2d1e2d2d58242fa1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_426f67d02c268f3a2639661caab66028ceea25205b5c378757c40c72321307d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426f67d02c268f3a2639661caab66028ceea25205b5c378757c40c72321307d6->enter($__internal_426f67d02c268f3a2639661caab66028ceea25205b5c378757c40c72321307d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_426f67d02c268f3a2639661caab66028ceea25205b5c378757c40c72321307d6->leave($__internal_426f67d02c268f3a2639661caab66028ceea25205b5c378757c40c72321307d6_prof);

        
        $__internal_5bef251c3652f3868ea45fc13bd8d72ea7d117011a9a9c2d1e2d2d58242fa1f6->leave($__internal_5bef251c3652f3868ea45fc13bd8d72ea7d117011a9a9c2d1e2d2d58242fa1f6_prof);

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
