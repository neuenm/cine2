<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_26acc31d17f5af168d6099e9ca08600e1b57dd43186732c28ba176a4bdb1b750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d052fa06ce3e2c7872f7cd90e517fec8eecc0f3c343e6516a87424fb96cdfff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d052fa06ce3e2c7872f7cd90e517fec8eecc0f3c343e6516a87424fb96cdfff->enter($__internal_3d052fa06ce3e2c7872f7cd90e517fec8eecc0f3c343e6516a87424fb96cdfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9f104320a94269a0e5df8a5bfb15561612e22e8a533b64cde6f73dad4f4eb898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f104320a94269a0e5df8a5bfb15561612e22e8a533b64cde6f73dad4f4eb898->enter($__internal_9f104320a94269a0e5df8a5bfb15561612e22e8a533b64cde6f73dad4f4eb898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d052fa06ce3e2c7872f7cd90e517fec8eecc0f3c343e6516a87424fb96cdfff->leave($__internal_3d052fa06ce3e2c7872f7cd90e517fec8eecc0f3c343e6516a87424fb96cdfff_prof);

        
        $__internal_9f104320a94269a0e5df8a5bfb15561612e22e8a533b64cde6f73dad4f4eb898->leave($__internal_9f104320a94269a0e5df8a5bfb15561612e22e8a533b64cde6f73dad4f4eb898_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5602b66f54b94bba3f4c0991820c95bd7ed542f973aba95bfb0aec65eddc816b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5602b66f54b94bba3f4c0991820c95bd7ed542f973aba95bfb0aec65eddc816b->enter($__internal_5602b66f54b94bba3f4c0991820c95bd7ed542f973aba95bfb0aec65eddc816b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ecc011216893adef022149420bb1b7d6c4b79b544e6b71c57474ffd81387deb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc011216893adef022149420bb1b7d6c4b79b544e6b71c57474ffd81387deb0->enter($__internal_ecc011216893adef022149420bb1b7d6c4b79b544e6b71c57474ffd81387deb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ecc011216893adef022149420bb1b7d6c4b79b544e6b71c57474ffd81387deb0->leave($__internal_ecc011216893adef022149420bb1b7d6c4b79b544e6b71c57474ffd81387deb0_prof);

        
        $__internal_5602b66f54b94bba3f4c0991820c95bd7ed542f973aba95bfb0aec65eddc816b->leave($__internal_5602b66f54b94bba3f4c0991820c95bd7ed542f973aba95bfb0aec65eddc816b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b0c0c1b7d7fa14d2238d7f6634051da56ac4dcf5c4db6aad7c865d46470ee69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0c0c1b7d7fa14d2238d7f6634051da56ac4dcf5c4db6aad7c865d46470ee69->enter($__internal_1b0c0c1b7d7fa14d2238d7f6634051da56ac4dcf5c4db6aad7c865d46470ee69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87c515510b27158202da37c0dee205b7b915a32b8368eaa0b6688b2fb5f6ebd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c515510b27158202da37c0dee205b7b915a32b8368eaa0b6688b2fb5f6ebd2->enter($__internal_87c515510b27158202da37c0dee205b7b915a32b8368eaa0b6688b2fb5f6ebd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_87c515510b27158202da37c0dee205b7b915a32b8368eaa0b6688b2fb5f6ebd2->leave($__internal_87c515510b27158202da37c0dee205b7b915a32b8368eaa0b6688b2fb5f6ebd2_prof);

        
        $__internal_1b0c0c1b7d7fa14d2238d7f6634051da56ac4dcf5c4db6aad7c865d46470ee69->leave($__internal_1b0c0c1b7d7fa14d2238d7f6634051da56ac4dcf5c4db6aad7c865d46470ee69_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
