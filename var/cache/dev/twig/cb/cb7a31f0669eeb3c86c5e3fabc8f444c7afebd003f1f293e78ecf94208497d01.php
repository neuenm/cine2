<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3ad961c7f7ddd6f9b368b0851dbf6388b6d24b89caf8aacb5bdcd3a517cfb42e extends Twig_Template
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
        $__internal_d03045a01c517446b80e64a0b70fadc24d1e8fb18ca5218f5b367f77a1fcef23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03045a01c517446b80e64a0b70fadc24d1e8fb18ca5218f5b367f77a1fcef23->enter($__internal_d03045a01c517446b80e64a0b70fadc24d1e8fb18ca5218f5b367f77a1fcef23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_95dd593cdc28c0c489db8ee763d127fcaabcdc58adf6df5f4a33d7a123b81c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95dd593cdc28c0c489db8ee763d127fcaabcdc58adf6df5f4a33d7a123b81c78->enter($__internal_95dd593cdc28c0c489db8ee763d127fcaabcdc58adf6df5f4a33d7a123b81c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d03045a01c517446b80e64a0b70fadc24d1e8fb18ca5218f5b367f77a1fcef23->leave($__internal_d03045a01c517446b80e64a0b70fadc24d1e8fb18ca5218f5b367f77a1fcef23_prof);

        
        $__internal_95dd593cdc28c0c489db8ee763d127fcaabcdc58adf6df5f4a33d7a123b81c78->leave($__internal_95dd593cdc28c0c489db8ee763d127fcaabcdc58adf6df5f4a33d7a123b81c78_prof);

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
