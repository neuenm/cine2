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
        $__internal_919c1d49e0d91e5556b8962b76aeb64ba9e899a2c1e5f66696aedd6dd4774f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919c1d49e0d91e5556b8962b76aeb64ba9e899a2c1e5f66696aedd6dd4774f46->enter($__internal_919c1d49e0d91e5556b8962b76aeb64ba9e899a2c1e5f66696aedd6dd4774f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a0ce94f14793200fb2e00ee7ffe41494b6ecfb9c6a2474aa351713371cf4187e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ce94f14793200fb2e00ee7ffe41494b6ecfb9c6a2474aa351713371cf4187e->enter($__internal_a0ce94f14793200fb2e00ee7ffe41494b6ecfb9c6a2474aa351713371cf4187e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_919c1d49e0d91e5556b8962b76aeb64ba9e899a2c1e5f66696aedd6dd4774f46->leave($__internal_919c1d49e0d91e5556b8962b76aeb64ba9e899a2c1e5f66696aedd6dd4774f46_prof);

        
        $__internal_a0ce94f14793200fb2e00ee7ffe41494b6ecfb9c6a2474aa351713371cf4187e->leave($__internal_a0ce94f14793200fb2e00ee7ffe41494b6ecfb9c6a2474aa351713371cf4187e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f59a0bd09112a5046fd1e9ee122015ef20191481ab044a84ea335a5a2e02e6f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59a0bd09112a5046fd1e9ee122015ef20191481ab044a84ea335a5a2e02e6f7->enter($__internal_f59a0bd09112a5046fd1e9ee122015ef20191481ab044a84ea335a5a2e02e6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dd3f81494918a1fce27bf7a96dd2bb3fc737e3aea254dd09e84499bc9eeadbee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd3f81494918a1fce27bf7a96dd2bb3fc737e3aea254dd09e84499bc9eeadbee->enter($__internal_dd3f81494918a1fce27bf7a96dd2bb3fc737e3aea254dd09e84499bc9eeadbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dd3f81494918a1fce27bf7a96dd2bb3fc737e3aea254dd09e84499bc9eeadbee->leave($__internal_dd3f81494918a1fce27bf7a96dd2bb3fc737e3aea254dd09e84499bc9eeadbee_prof);

        
        $__internal_f59a0bd09112a5046fd1e9ee122015ef20191481ab044a84ea335a5a2e02e6f7->leave($__internal_f59a0bd09112a5046fd1e9ee122015ef20191481ab044a84ea335a5a2e02e6f7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dc0aaa17c859d12de94f08681471e6f92870cb9ac0593fc1af2f7322a4991b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc0aaa17c859d12de94f08681471e6f92870cb9ac0593fc1af2f7322a4991b9->enter($__internal_5dc0aaa17c859d12de94f08681471e6f92870cb9ac0593fc1af2f7322a4991b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_224d7ba6e162ed7a52fd666e091e37c08e66e2a3e93b70b2fb063f30703e6040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224d7ba6e162ed7a52fd666e091e37c08e66e2a3e93b70b2fb063f30703e6040->enter($__internal_224d7ba6e162ed7a52fd666e091e37c08e66e2a3e93b70b2fb063f30703e6040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_224d7ba6e162ed7a52fd666e091e37c08e66e2a3e93b70b2fb063f30703e6040->leave($__internal_224d7ba6e162ed7a52fd666e091e37c08e66e2a3e93b70b2fb063f30703e6040_prof);

        
        $__internal_5dc0aaa17c859d12de94f08681471e6f92870cb9ac0593fc1af2f7322a4991b9->leave($__internal_5dc0aaa17c859d12de94f08681471e6f92870cb9ac0593fc1af2f7322a4991b9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_104d647181b1bee766738587d1e5cf735e6b37ae3db0924c64f88e702ef51c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104d647181b1bee766738587d1e5cf735e6b37ae3db0924c64f88e702ef51c96->enter($__internal_104d647181b1bee766738587d1e5cf735e6b37ae3db0924c64f88e702ef51c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0879e58e0f8e6969b09872f1383637513a6bbe654ec18dc0ae070df22fddbe76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0879e58e0f8e6969b09872f1383637513a6bbe654ec18dc0ae070df22fddbe76->enter($__internal_0879e58e0f8e6969b09872f1383637513a6bbe654ec18dc0ae070df22fddbe76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0879e58e0f8e6969b09872f1383637513a6bbe654ec18dc0ae070df22fddbe76->leave($__internal_0879e58e0f8e6969b09872f1383637513a6bbe654ec18dc0ae070df22fddbe76_prof);

        
        $__internal_104d647181b1bee766738587d1e5cf735e6b37ae3db0924c64f88e702ef51c96->leave($__internal_104d647181b1bee766738587d1e5cf735e6b37ae3db0924c64f88e702ef51c96_prof);

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
