<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9180ece55a1d6e178d05e18ba2cbbc42d59183df6c1aa11037f0ec8ef46ede2c extends Twig_Template
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
        $__internal_363407f373418e1ed4acd9f30c97b8c5930770fa7fc0cad35742ffb0140572ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_363407f373418e1ed4acd9f30c97b8c5930770fa7fc0cad35742ffb0140572ea->enter($__internal_363407f373418e1ed4acd9f30c97b8c5930770fa7fc0cad35742ffb0140572ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_040b788c5fbb81debcefc9de3047146abeecd9007dbed59858c1f1cd9e8bdac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040b788c5fbb81debcefc9de3047146abeecd9007dbed59858c1f1cd9e8bdac6->enter($__internal_040b788c5fbb81debcefc9de3047146abeecd9007dbed59858c1f1cd9e8bdac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_363407f373418e1ed4acd9f30c97b8c5930770fa7fc0cad35742ffb0140572ea->leave($__internal_363407f373418e1ed4acd9f30c97b8c5930770fa7fc0cad35742ffb0140572ea_prof);

        
        $__internal_040b788c5fbb81debcefc9de3047146abeecd9007dbed59858c1f1cd9e8bdac6->leave($__internal_040b788c5fbb81debcefc9de3047146abeecd9007dbed59858c1f1cd9e8bdac6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
