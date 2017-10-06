<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_11fbc2198b9cff59e44d0de36bc9cd6575455705f2ca6dcc7421f23ea21bc1d0 extends Twig_Template
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
        $__internal_76f032476023532723aaf8a438ab7772493c95009f5a647132b62534e7ce537d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f032476023532723aaf8a438ab7772493c95009f5a647132b62534e7ce537d->enter($__internal_76f032476023532723aaf8a438ab7772493c95009f5a647132b62534e7ce537d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_3b636b069d160933c1463df2bcf08b079ec928418fe4e06f333bc449fb4f5bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b636b069d160933c1463df2bcf08b079ec928418fe4e06f333bc449fb4f5bd4->enter($__internal_3b636b069d160933c1463df2bcf08b079ec928418fe4e06f333bc449fb4f5bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_76f032476023532723aaf8a438ab7772493c95009f5a647132b62534e7ce537d->leave($__internal_76f032476023532723aaf8a438ab7772493c95009f5a647132b62534e7ce537d_prof);

        
        $__internal_3b636b069d160933c1463df2bcf08b079ec928418fe4e06f333bc449fb4f5bd4->leave($__internal_3b636b069d160933c1463df2bcf08b079ec928418fe4e06f333bc449fb4f5bd4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
