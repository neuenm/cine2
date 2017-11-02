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
        $__internal_fecf9fcbd0435d53ed366c0386a2dfae6bbd73635520c3bc5966ccd11b5da547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fecf9fcbd0435d53ed366c0386a2dfae6bbd73635520c3bc5966ccd11b5da547->enter($__internal_fecf9fcbd0435d53ed366c0386a2dfae6bbd73635520c3bc5966ccd11b5da547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7b392e9620a87ca57c05b2b5f37667831f3721b124caa750ce1bad331a61a106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b392e9620a87ca57c05b2b5f37667831f3721b124caa750ce1bad331a61a106->enter($__internal_7b392e9620a87ca57c05b2b5f37667831f3721b124caa750ce1bad331a61a106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fecf9fcbd0435d53ed366c0386a2dfae6bbd73635520c3bc5966ccd11b5da547->leave($__internal_fecf9fcbd0435d53ed366c0386a2dfae6bbd73635520c3bc5966ccd11b5da547_prof);

        
        $__internal_7b392e9620a87ca57c05b2b5f37667831f3721b124caa750ce1bad331a61a106->leave($__internal_7b392e9620a87ca57c05b2b5f37667831f3721b124caa750ce1bad331a61a106_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_47343a678433113ff357376ba03798b2e99ad8027e9eb6c75a7c3f3340e495e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47343a678433113ff357376ba03798b2e99ad8027e9eb6c75a7c3f3340e495e3->enter($__internal_47343a678433113ff357376ba03798b2e99ad8027e9eb6c75a7c3f3340e495e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b645b01e02c21495559409408d6f192c230c324661063fc9e63e64a5b24758d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b645b01e02c21495559409408d6f192c230c324661063fc9e63e64a5b24758d8->enter($__internal_b645b01e02c21495559409408d6f192c230c324661063fc9e63e64a5b24758d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b645b01e02c21495559409408d6f192c230c324661063fc9e63e64a5b24758d8->leave($__internal_b645b01e02c21495559409408d6f192c230c324661063fc9e63e64a5b24758d8_prof);

        
        $__internal_47343a678433113ff357376ba03798b2e99ad8027e9eb6c75a7c3f3340e495e3->leave($__internal_47343a678433113ff357376ba03798b2e99ad8027e9eb6c75a7c3f3340e495e3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ce3c010756f89eb23f0d328c9e90aed8ab4c21bdec8448099bb398e93b0a57b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce3c010756f89eb23f0d328c9e90aed8ab4c21bdec8448099bb398e93b0a57b->enter($__internal_3ce3c010756f89eb23f0d328c9e90aed8ab4c21bdec8448099bb398e93b0a57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30779ca73e01f2e876da41ba3e3e343537b26c12f75310f225a6529780f9572f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30779ca73e01f2e876da41ba3e3e343537b26c12f75310f225a6529780f9572f->enter($__internal_30779ca73e01f2e876da41ba3e3e343537b26c12f75310f225a6529780f9572f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_30779ca73e01f2e876da41ba3e3e343537b26c12f75310f225a6529780f9572f->leave($__internal_30779ca73e01f2e876da41ba3e3e343537b26c12f75310f225a6529780f9572f_prof);

        
        $__internal_3ce3c010756f89eb23f0d328c9e90aed8ab4c21bdec8448099bb398e93b0a57b->leave($__internal_3ce3c010756f89eb23f0d328c9e90aed8ab4c21bdec8448099bb398e93b0a57b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96941a221ad3d695d878e652ec7a5692378da4a98d11d961940cdf9f69aeb0f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96941a221ad3d695d878e652ec7a5692378da4a98d11d961940cdf9f69aeb0f0->enter($__internal_96941a221ad3d695d878e652ec7a5692378da4a98d11d961940cdf9f69aeb0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eeb98d26569837009727b1c07a349bd7a2d717acbb2345642158c2172a94ea0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb98d26569837009727b1c07a349bd7a2d717acbb2345642158c2172a94ea0f->enter($__internal_eeb98d26569837009727b1c07a349bd7a2d717acbb2345642158c2172a94ea0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_eeb98d26569837009727b1c07a349bd7a2d717acbb2345642158c2172a94ea0f->leave($__internal_eeb98d26569837009727b1c07a349bd7a2d717acbb2345642158c2172a94ea0f_prof);

        
        $__internal_96941a221ad3d695d878e652ec7a5692378da4a98d11d961940cdf9f69aeb0f0->leave($__internal_96941a221ad3d695d878e652ec7a5692378da4a98d11d961940cdf9f69aeb0f0_prof);

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
