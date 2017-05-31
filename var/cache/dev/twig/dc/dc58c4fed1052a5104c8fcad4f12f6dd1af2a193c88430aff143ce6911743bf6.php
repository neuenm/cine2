<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_745334594c39bbcc9077d6af6cc507bbd4d5bccd70cf7763d6ef047fc81d1f4c extends Twig_Template
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
        $__internal_2143c60f84a66980f83e38ff60c337361eb900ddbd49745da44ab7c9c60bfa94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2143c60f84a66980f83e38ff60c337361eb900ddbd49745da44ab7c9c60bfa94->enter($__internal_2143c60f84a66980f83e38ff60c337361eb900ddbd49745da44ab7c9c60bfa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_fef394d60183306e240dc829d16c03ba958506ece48e55cc1fbbf347b9345cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef394d60183306e240dc829d16c03ba958506ece48e55cc1fbbf347b9345cb7->enter($__internal_fef394d60183306e240dc829d16c03ba958506ece48e55cc1fbbf347b9345cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2143c60f84a66980f83e38ff60c337361eb900ddbd49745da44ab7c9c60bfa94->leave($__internal_2143c60f84a66980f83e38ff60c337361eb900ddbd49745da44ab7c9c60bfa94_prof);

        
        $__internal_fef394d60183306e240dc829d16c03ba958506ece48e55cc1fbbf347b9345cb7->leave($__internal_fef394d60183306e240dc829d16c03ba958506ece48e55cc1fbbf347b9345cb7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
