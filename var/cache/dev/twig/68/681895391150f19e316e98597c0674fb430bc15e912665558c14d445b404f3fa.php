<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1c37874738953529b4457236dc462d0685884944bd2295fa25ed56b669b5ee00 extends Twig_Template
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
        $__internal_5ade2e7c9d7d259eeadbf4365e0052d75328a9177d2e5628a9ffd1c94cfe4e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ade2e7c9d7d259eeadbf4365e0052d75328a9177d2e5628a9ffd1c94cfe4e64->enter($__internal_5ade2e7c9d7d259eeadbf4365e0052d75328a9177d2e5628a9ffd1c94cfe4e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_dd92f0288853bc0151fcbfe717a52c6a54a7de2918be30732a9992d00dacd5d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd92f0288853bc0151fcbfe717a52c6a54a7de2918be30732a9992d00dacd5d0->enter($__internal_dd92f0288853bc0151fcbfe717a52c6a54a7de2918be30732a9992d00dacd5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ade2e7c9d7d259eeadbf4365e0052d75328a9177d2e5628a9ffd1c94cfe4e64->leave($__internal_5ade2e7c9d7d259eeadbf4365e0052d75328a9177d2e5628a9ffd1c94cfe4e64_prof);

        
        $__internal_dd92f0288853bc0151fcbfe717a52c6a54a7de2918be30732a9992d00dacd5d0->leave($__internal_dd92f0288853bc0151fcbfe717a52c6a54a7de2918be30732a9992d00dacd5d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_edb5d8acfe8d6e5f6e59bc19aa28e457f65fa3d45b1cf2cbbbd13f91d6c75ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb5d8acfe8d6e5f6e59bc19aa28e457f65fa3d45b1cf2cbbbd13f91d6c75ae9->enter($__internal_edb5d8acfe8d6e5f6e59bc19aa28e457f65fa3d45b1cf2cbbbd13f91d6c75ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7c64152be5dd6399f54501bfaf02f61bfade12d1d7d9344c9bf251ab8b5c5f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c64152be5dd6399f54501bfaf02f61bfade12d1d7d9344c9bf251ab8b5c5f7b->enter($__internal_7c64152be5dd6399f54501bfaf02f61bfade12d1d7d9344c9bf251ab8b5c5f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7c64152be5dd6399f54501bfaf02f61bfade12d1d7d9344c9bf251ab8b5c5f7b->leave($__internal_7c64152be5dd6399f54501bfaf02f61bfade12d1d7d9344c9bf251ab8b5c5f7b_prof);

        
        $__internal_edb5d8acfe8d6e5f6e59bc19aa28e457f65fa3d45b1cf2cbbbd13f91d6c75ae9->leave($__internal_edb5d8acfe8d6e5f6e59bc19aa28e457f65fa3d45b1cf2cbbbd13f91d6c75ae9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1702369a4428bc43e23697a2e161760d9e04f65d94b42ff6516d9791c298ef0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1702369a4428bc43e23697a2e161760d9e04f65d94b42ff6516d9791c298ef0c->enter($__internal_1702369a4428bc43e23697a2e161760d9e04f65d94b42ff6516d9791c298ef0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d8e56bcb2e9365c1e914d1789b9dd54ef149fa3ef8500a7f87fabbd7687f873f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e56bcb2e9365c1e914d1789b9dd54ef149fa3ef8500a7f87fabbd7687f873f->enter($__internal_d8e56bcb2e9365c1e914d1789b9dd54ef149fa3ef8500a7f87fabbd7687f873f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d8e56bcb2e9365c1e914d1789b9dd54ef149fa3ef8500a7f87fabbd7687f873f->leave($__internal_d8e56bcb2e9365c1e914d1789b9dd54ef149fa3ef8500a7f87fabbd7687f873f_prof);

        
        $__internal_1702369a4428bc43e23697a2e161760d9e04f65d94b42ff6516d9791c298ef0c->leave($__internal_1702369a4428bc43e23697a2e161760d9e04f65d94b42ff6516d9791c298ef0c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef2c3e2a333360a63e028a856030eb4dff39da983573c9dd6910dc335e2a90d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef2c3e2a333360a63e028a856030eb4dff39da983573c9dd6910dc335e2a90d0->enter($__internal_ef2c3e2a333360a63e028a856030eb4dff39da983573c9dd6910dc335e2a90d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84d135700ff643f6faa2efbbfadca4407269d4bee33b2afb6bb8f8f7b0932938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d135700ff643f6faa2efbbfadca4407269d4bee33b2afb6bb8f8f7b0932938->enter($__internal_84d135700ff643f6faa2efbbfadca4407269d4bee33b2afb6bb8f8f7b0932938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_84d135700ff643f6faa2efbbfadca4407269d4bee33b2afb6bb8f8f7b0932938->leave($__internal_84d135700ff643f6faa2efbbfadca4407269d4bee33b2afb6bb8f8f7b0932938_prof);

        
        $__internal_ef2c3e2a333360a63e028a856030eb4dff39da983573c9dd6910dc335e2a90d0->leave($__internal_ef2c3e2a333360a63e028a856030eb4dff39da983573c9dd6910dc335e2a90d0_prof);

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
