<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_18c16ca2c53592334c03fa11a1018bedee3cb9551b1407f4ca695eb737acead2 extends Twig_Template
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
        $__internal_9dff200e6d01736cd8e2e70e6f28bab5d27480f28fb1bbbc0f74f543beab196a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dff200e6d01736cd8e2e70e6f28bab5d27480f28fb1bbbc0f74f543beab196a->enter($__internal_9dff200e6d01736cd8e2e70e6f28bab5d27480f28fb1bbbc0f74f543beab196a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_06a667ef4d598d8580b400da7b89e9689c4f8d24cc9f37c9ba7795dde36416dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a667ef4d598d8580b400da7b89e9689c4f8d24cc9f37c9ba7795dde36416dd->enter($__internal_06a667ef4d598d8580b400da7b89e9689c4f8d24cc9f37c9ba7795dde36416dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
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
        
        $__internal_9dff200e6d01736cd8e2e70e6f28bab5d27480f28fb1bbbc0f74f543beab196a->leave($__internal_9dff200e6d01736cd8e2e70e6f28bab5d27480f28fb1bbbc0f74f543beab196a_prof);

        
        $__internal_06a667ef4d598d8580b400da7b89e9689c4f8d24cc9f37c9ba7795dde36416dd->leave($__internal_06a667ef4d598d8580b400da7b89e9689c4f8d24cc9f37c9ba7795dde36416dd_prof);

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
