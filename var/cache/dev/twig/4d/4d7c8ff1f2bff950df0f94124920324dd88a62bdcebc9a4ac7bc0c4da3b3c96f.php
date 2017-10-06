<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e194ef62e459aa667479cd07d0674ab38328eefce490bac5a7ad21749ffe7309 extends Twig_Template
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
        $__internal_4fd2188c94e42c5260842e93792fcc3147e65e603fc363c36e4fddcb27733e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fd2188c94e42c5260842e93792fcc3147e65e603fc363c36e4fddcb27733e4a->enter($__internal_4fd2188c94e42c5260842e93792fcc3147e65e603fc363c36e4fddcb27733e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6f910c5025236eb8b320ac7447bce5f7c655fc56736b1692db13bf10f5cc87f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f910c5025236eb8b320ac7447bce5f7c655fc56736b1692db13bf10f5cc87f1->enter($__internal_6f910c5025236eb8b320ac7447bce5f7c655fc56736b1692db13bf10f5cc87f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4fd2188c94e42c5260842e93792fcc3147e65e603fc363c36e4fddcb27733e4a->leave($__internal_4fd2188c94e42c5260842e93792fcc3147e65e603fc363c36e4fddcb27733e4a_prof);

        
        $__internal_6f910c5025236eb8b320ac7447bce5f7c655fc56736b1692db13bf10f5cc87f1->leave($__internal_6f910c5025236eb8b320ac7447bce5f7c655fc56736b1692db13bf10f5cc87f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
