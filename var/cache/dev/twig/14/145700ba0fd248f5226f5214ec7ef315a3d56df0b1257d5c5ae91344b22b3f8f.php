<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_84e82b5be0ec632505aa6a7578682d5e838af20b51f1958494f4daed74d61192 extends Twig_Template
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
        $__internal_2759a34b581af5df78eb1cf34dbf59f353f5acef7c49ec3939fd65bbbd69b9c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2759a34b581af5df78eb1cf34dbf59f353f5acef7c49ec3939fd65bbbd69b9c3->enter($__internal_2759a34b581af5df78eb1cf34dbf59f353f5acef7c49ec3939fd65bbbd69b9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_d4c7a6ee992ce041940d531b58812c1dc4c1e2d24009ef57af24cb8f7c67024e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c7a6ee992ce041940d531b58812c1dc4c1e2d24009ef57af24cb8f7c67024e->enter($__internal_d4c7a6ee992ce041940d531b58812c1dc4c1e2d24009ef57af24cb8f7c67024e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_2759a34b581af5df78eb1cf34dbf59f353f5acef7c49ec3939fd65bbbd69b9c3->leave($__internal_2759a34b581af5df78eb1cf34dbf59f353f5acef7c49ec3939fd65bbbd69b9c3_prof);

        
        $__internal_d4c7a6ee992ce041940d531b58812c1dc4c1e2d24009ef57af24cb8f7c67024e->leave($__internal_d4c7a6ee992ce041940d531b58812c1dc4c1e2d24009ef57af24cb8f7c67024e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
