<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f5a4e4e47a61dbc596b8a5cf6c4251cf9809cbaa7fe0192c935bf3aa4bd7f2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f504fd519af41c144f912ec11999a2a54cc6c81c63564678a5385a474dfa354d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f504fd519af41c144f912ec11999a2a54cc6c81c63564678a5385a474dfa354d->enter($__internal_f504fd519af41c144f912ec11999a2a54cc6c81c63564678a5385a474dfa354d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0aac1cfa7111046984f11bcbe3eddb87d8639292527cbe4f8dc98acd9704c161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aac1cfa7111046984f11bcbe3eddb87d8639292527cbe4f8dc98acd9704c161->enter($__internal_0aac1cfa7111046984f11bcbe3eddb87d8639292527cbe4f8dc98acd9704c161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f504fd519af41c144f912ec11999a2a54cc6c81c63564678a5385a474dfa354d->leave($__internal_f504fd519af41c144f912ec11999a2a54cc6c81c63564678a5385a474dfa354d_prof);

        
        $__internal_0aac1cfa7111046984f11bcbe3eddb87d8639292527cbe4f8dc98acd9704c161->leave($__internal_0aac1cfa7111046984f11bcbe3eddb87d8639292527cbe4f8dc98acd9704c161_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3547de739b49ae0fa20d3f469e9fa25b1a0117f64f1848c32cb55a9b1eb98ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3547de739b49ae0fa20d3f469e9fa25b1a0117f64f1848c32cb55a9b1eb98ab9->enter($__internal_3547de739b49ae0fa20d3f469e9fa25b1a0117f64f1848c32cb55a9b1eb98ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6d7de906b950877fd0d032183483aefb564c903960fa92cda39a7fa55da0d22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7de906b950877fd0d032183483aefb564c903960fa92cda39a7fa55da0d22f->enter($__internal_6d7de906b950877fd0d032183483aefb564c903960fa92cda39a7fa55da0d22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6d7de906b950877fd0d032183483aefb564c903960fa92cda39a7fa55da0d22f->leave($__internal_6d7de906b950877fd0d032183483aefb564c903960fa92cda39a7fa55da0d22f_prof);

        
        $__internal_3547de739b49ae0fa20d3f469e9fa25b1a0117f64f1848c32cb55a9b1eb98ab9->leave($__internal_3547de739b49ae0fa20d3f469e9fa25b1a0117f64f1848c32cb55a9b1eb98ab9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_21ddd866104298b5927c11ab64e91829ac498dc3b587afc6b339590229453b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ddd866104298b5927c11ab64e91829ac498dc3b587afc6b339590229453b7b->enter($__internal_21ddd866104298b5927c11ab64e91829ac498dc3b587afc6b339590229453b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ac317817940df0729e106b38ecaf74f7216212551179780b68c9bade4aa4bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac317817940df0729e106b38ecaf74f7216212551179780b68c9bade4aa4bb2->enter($__internal_1ac317817940df0729e106b38ecaf74f7216212551179780b68c9bade4aa4bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1ac317817940df0729e106b38ecaf74f7216212551179780b68c9bade4aa4bb2->leave($__internal_1ac317817940df0729e106b38ecaf74f7216212551179780b68c9bade4aa4bb2_prof);

        
        $__internal_21ddd866104298b5927c11ab64e91829ac498dc3b587afc6b339590229453b7b->leave($__internal_21ddd866104298b5927c11ab64e91829ac498dc3b587afc6b339590229453b7b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdf90ae06e677a30b0fa4686aa5655d96446dc20b751ed47f7bc41d22d3da1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf90ae06e677a30b0fa4686aa5655d96446dc20b751ed47f7bc41d22d3da1bd->enter($__internal_bdf90ae06e677a30b0fa4686aa5655d96446dc20b751ed47f7bc41d22d3da1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5f4c5a760e9d54832897a6e5e195a8565c80c7dd459b0e7a878e62b8dddc518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f4c5a760e9d54832897a6e5e195a8565c80c7dd459b0e7a878e62b8dddc518->enter($__internal_d5f4c5a760e9d54832897a6e5e195a8565c80c7dd459b0e7a878e62b8dddc518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d5f4c5a760e9d54832897a6e5e195a8565c80c7dd459b0e7a878e62b8dddc518->leave($__internal_d5f4c5a760e9d54832897a6e5e195a8565c80c7dd459b0e7a878e62b8dddc518_prof);

        
        $__internal_bdf90ae06e677a30b0fa4686aa5655d96446dc20b751ed47f7bc41d22d3da1bd->leave($__internal_bdf90ae06e677a30b0fa4686aa5655d96446dc20b751ed47f7bc41d22d3da1bd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
