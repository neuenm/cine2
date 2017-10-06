<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_150ca7d995468e02789c19d70f5a82365301ecebc21b38fde8bc2214e9f04740 extends Twig_Template
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
        $__internal_52c4ef24012f9cf87bb72c32d0f4c07780ed492a6fb8f1b015951f1d51cf1e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c4ef24012f9cf87bb72c32d0f4c07780ed492a6fb8f1b015951f1d51cf1e1a->enter($__internal_52c4ef24012f9cf87bb72c32d0f4c07780ed492a6fb8f1b015951f1d51cf1e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9f6f6d9118abf3ac9e03f3a7019ccc645f43ed0452a324baa8b44794d389aaea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6f6d9118abf3ac9e03f3a7019ccc645f43ed0452a324baa8b44794d389aaea->enter($__internal_9f6f6d9118abf3ac9e03f3a7019ccc645f43ed0452a324baa8b44794d389aaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52c4ef24012f9cf87bb72c32d0f4c07780ed492a6fb8f1b015951f1d51cf1e1a->leave($__internal_52c4ef24012f9cf87bb72c32d0f4c07780ed492a6fb8f1b015951f1d51cf1e1a_prof);

        
        $__internal_9f6f6d9118abf3ac9e03f3a7019ccc645f43ed0452a324baa8b44794d389aaea->leave($__internal_9f6f6d9118abf3ac9e03f3a7019ccc645f43ed0452a324baa8b44794d389aaea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eea9c1d82b550f5b8fc64949184c1df06f77400fe310a9e14d354a601eb562b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea9c1d82b550f5b8fc64949184c1df06f77400fe310a9e14d354a601eb562b6->enter($__internal_eea9c1d82b550f5b8fc64949184c1df06f77400fe310a9e14d354a601eb562b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1e0faa113ea375cf6cad529c16100b4171249e1db8d3bbfd826afbcc425f263c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0faa113ea375cf6cad529c16100b4171249e1db8d3bbfd826afbcc425f263c->enter($__internal_1e0faa113ea375cf6cad529c16100b4171249e1db8d3bbfd826afbcc425f263c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_1e0faa113ea375cf6cad529c16100b4171249e1db8d3bbfd826afbcc425f263c->leave($__internal_1e0faa113ea375cf6cad529c16100b4171249e1db8d3bbfd826afbcc425f263c_prof);

        
        $__internal_eea9c1d82b550f5b8fc64949184c1df06f77400fe310a9e14d354a601eb562b6->leave($__internal_eea9c1d82b550f5b8fc64949184c1df06f77400fe310a9e14d354a601eb562b6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6050f9f23864a4b16cacd9fef1e4a075db4450c6f2d5bcdc6976e20587bbb31f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6050f9f23864a4b16cacd9fef1e4a075db4450c6f2d5bcdc6976e20587bbb31f->enter($__internal_6050f9f23864a4b16cacd9fef1e4a075db4450c6f2d5bcdc6976e20587bbb31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ca6fc31cf2b9d058a5a74136aabcd34d8bbd46fee3c8b7ef8f07e9bcb561101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca6fc31cf2b9d058a5a74136aabcd34d8bbd46fee3c8b7ef8f07e9bcb561101->enter($__internal_5ca6fc31cf2b9d058a5a74136aabcd34d8bbd46fee3c8b7ef8f07e9bcb561101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_5ca6fc31cf2b9d058a5a74136aabcd34d8bbd46fee3c8b7ef8f07e9bcb561101->leave($__internal_5ca6fc31cf2b9d058a5a74136aabcd34d8bbd46fee3c8b7ef8f07e9bcb561101_prof);

        
        $__internal_6050f9f23864a4b16cacd9fef1e4a075db4450c6f2d5bcdc6976e20587bbb31f->leave($__internal_6050f9f23864a4b16cacd9fef1e4a075db4450c6f2d5bcdc6976e20587bbb31f_prof);

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
