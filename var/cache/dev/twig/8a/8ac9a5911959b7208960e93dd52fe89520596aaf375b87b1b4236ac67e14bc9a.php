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
        $__internal_a40510e9b17ae465f9b88730bf2c0ca8c505f9d6d3fffdd932ef7cd6f0265b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a40510e9b17ae465f9b88730bf2c0ca8c505f9d6d3fffdd932ef7cd6f0265b60->enter($__internal_a40510e9b17ae465f9b88730bf2c0ca8c505f9d6d3fffdd932ef7cd6f0265b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7196a18c65719dfde3c6aa4050efec36678e705b585224fb6721e20d098fa8f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7196a18c65719dfde3c6aa4050efec36678e705b585224fb6721e20d098fa8f8->enter($__internal_7196a18c65719dfde3c6aa4050efec36678e705b585224fb6721e20d098fa8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a40510e9b17ae465f9b88730bf2c0ca8c505f9d6d3fffdd932ef7cd6f0265b60->leave($__internal_a40510e9b17ae465f9b88730bf2c0ca8c505f9d6d3fffdd932ef7cd6f0265b60_prof);

        
        $__internal_7196a18c65719dfde3c6aa4050efec36678e705b585224fb6721e20d098fa8f8->leave($__internal_7196a18c65719dfde3c6aa4050efec36678e705b585224fb6721e20d098fa8f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ceeb10821b6890ba0d473c27360606b31eafe4b0db1ee5e75269184721e0f14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ceeb10821b6890ba0d473c27360606b31eafe4b0db1ee5e75269184721e0f14->enter($__internal_5ceeb10821b6890ba0d473c27360606b31eafe4b0db1ee5e75269184721e0f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac9efc02c7c56c4a16e12efa3846d7c4ab88ce15b8b048c0cd2480f36b43ed9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9efc02c7c56c4a16e12efa3846d7c4ab88ce15b8b048c0cd2480f36b43ed9b->enter($__internal_ac9efc02c7c56c4a16e12efa3846d7c4ab88ce15b8b048c0cd2480f36b43ed9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ac9efc02c7c56c4a16e12efa3846d7c4ab88ce15b8b048c0cd2480f36b43ed9b->leave($__internal_ac9efc02c7c56c4a16e12efa3846d7c4ab88ce15b8b048c0cd2480f36b43ed9b_prof);

        
        $__internal_5ceeb10821b6890ba0d473c27360606b31eafe4b0db1ee5e75269184721e0f14->leave($__internal_5ceeb10821b6890ba0d473c27360606b31eafe4b0db1ee5e75269184721e0f14_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0620a5c7146c77db33a1061bf5f7c6c5ce1f530387f5b0866c802f8ddbb755c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0620a5c7146c77db33a1061bf5f7c6c5ce1f530387f5b0866c802f8ddbb755c3->enter($__internal_0620a5c7146c77db33a1061bf5f7c6c5ce1f530387f5b0866c802f8ddbb755c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3eb93e352e18d45ed726d4923e4ec47808aef1e4e6406b5fb1b884a0b9cc3d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb93e352e18d45ed726d4923e4ec47808aef1e4e6406b5fb1b884a0b9cc3d53->enter($__internal_3eb93e352e18d45ed726d4923e4ec47808aef1e4e6406b5fb1b884a0b9cc3d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3eb93e352e18d45ed726d4923e4ec47808aef1e4e6406b5fb1b884a0b9cc3d53->leave($__internal_3eb93e352e18d45ed726d4923e4ec47808aef1e4e6406b5fb1b884a0b9cc3d53_prof);

        
        $__internal_0620a5c7146c77db33a1061bf5f7c6c5ce1f530387f5b0866c802f8ddbb755c3->leave($__internal_0620a5c7146c77db33a1061bf5f7c6c5ce1f530387f5b0866c802f8ddbb755c3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fad85707b163f9c5d0e973da8f57a8a14caf15d0213fa5669adfdcd215a5890d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad85707b163f9c5d0e973da8f57a8a14caf15d0213fa5669adfdcd215a5890d->enter($__internal_fad85707b163f9c5d0e973da8f57a8a14caf15d0213fa5669adfdcd215a5890d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cceb7a68176738eca1251b789bd111279b5372267155f9fdb804465ee655afe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cceb7a68176738eca1251b789bd111279b5372267155f9fdb804465ee655afe1->enter($__internal_cceb7a68176738eca1251b789bd111279b5372267155f9fdb804465ee655afe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cceb7a68176738eca1251b789bd111279b5372267155f9fdb804465ee655afe1->leave($__internal_cceb7a68176738eca1251b789bd111279b5372267155f9fdb804465ee655afe1_prof);

        
        $__internal_fad85707b163f9c5d0e973da8f57a8a14caf15d0213fa5669adfdcd215a5890d->leave($__internal_fad85707b163f9c5d0e973da8f57a8a14caf15d0213fa5669adfdcd215a5890d_prof);

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
