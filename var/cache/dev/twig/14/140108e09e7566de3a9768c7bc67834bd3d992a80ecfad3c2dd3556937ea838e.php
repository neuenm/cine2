<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_f18bce53188003eb7527903561aab68e58953a37f8b14ae3bbb0035361bba4dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32d2bd02bdac89cf84939d319cf1666fcf3c8e45f093c8b0cd46d3c8b85b773a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d2bd02bdac89cf84939d319cf1666fcf3c8e45f093c8b0cd46d3c8b85b773a->enter($__internal_32d2bd02bdac89cf84939d319cf1666fcf3c8e45f093c8b0cd46d3c8b85b773a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_a1b9274b18c5ff015e78a8fdb9298cea3fcfeb5a8a4dcc4240ed9f72aa90450d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b9274b18c5ff015e78a8fdb9298cea3fcfeb5a8a4dcc4240ed9f72aa90450d->enter($__internal_a1b9274b18c5ff015e78a8fdb9298cea3fcfeb5a8a4dcc4240ed9f72aa90450d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "class", array()) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "type", array())) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute(($context["trace"] ?? null), "file", array(), "any", true, true) && $this->getAttribute(($context["trace"] ?? null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
        $__internal_32d2bd02bdac89cf84939d319cf1666fcf3c8e45f093c8b0cd46d3c8b85b773a->leave($__internal_32d2bd02bdac89cf84939d319cf1666fcf3c8e45f093c8b0cd46d3c8b85b773a_prof);

        
        $__internal_a1b9274b18c5ff015e78a8fdb9298cea3fcfeb5a8a4dcc4240ed9f72aa90450d->leave($__internal_a1b9274b18c5ff015e78a8fdb9298cea3fcfeb5a8a4dcc4240ed9f72aa90450d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 6,  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "@Twig/Exception/trace.txt.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
