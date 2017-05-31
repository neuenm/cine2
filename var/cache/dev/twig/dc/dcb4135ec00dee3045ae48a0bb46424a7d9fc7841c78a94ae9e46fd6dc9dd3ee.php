<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2a0d9df5bf939ac2e79500bff4de7265fd99eaeb10d8c3784c5df3295b94f676 extends Twig_Template
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
        $__internal_d2ef676067a089afd55251a0777709d91e6c4e1cc32585a5b532c4b6b3d77f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ef676067a089afd55251a0777709d91e6c4e1cc32585a5b532c4b6b3d77f54->enter($__internal_d2ef676067a089afd55251a0777709d91e6c4e1cc32585a5b532c4b6b3d77f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_a7ae25f67d477c432f3e53f517c3ecba3c00affc2ca8a0d8b3ad426766962b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ae25f67d477c432f3e53f517c3ecba3c00affc2ca8a0d8b3ad426766962b5b->enter($__internal_a7ae25f67d477c432f3e53f517c3ecba3c00affc2ca8a0d8b3ad426766962b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d2ef676067a089afd55251a0777709d91e6c4e1cc32585a5b532c4b6b3d77f54->leave($__internal_d2ef676067a089afd55251a0777709d91e6c4e1cc32585a5b532c4b6b3d77f54_prof);

        
        $__internal_a7ae25f67d477c432f3e53f517c3ecba3c00affc2ca8a0d8b3ad426766962b5b->leave($__internal_a7ae25f67d477c432f3e53f517c3ecba3c00affc2ca8a0d8b3ad426766962b5b_prof);

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
