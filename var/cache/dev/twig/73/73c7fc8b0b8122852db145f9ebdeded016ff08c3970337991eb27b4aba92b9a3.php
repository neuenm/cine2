<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a3b7eb4bfb950f5aa53b5550b8ea2f30b9fbc91b1755810c3226c6098178193 extends Twig_Template
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
        $__internal_df6303014e3f9d47a4d795b583eb6e93227fe651d55eac3ad1b7b1e6f0dad8f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6303014e3f9d47a4d795b583eb6e93227fe651d55eac3ad1b7b1e6f0dad8f7->enter($__internal_df6303014e3f9d47a4d795b583eb6e93227fe651d55eac3ad1b7b1e6f0dad8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_552c41a2ff9af34f3d2aef53276fc1432aee2a45fb9ed6d5baf43a9f83903ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552c41a2ff9af34f3d2aef53276fc1432aee2a45fb9ed6d5baf43a9f83903ae5->enter($__internal_552c41a2ff9af34f3d2aef53276fc1432aee2a45fb9ed6d5baf43a9f83903ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_df6303014e3f9d47a4d795b583eb6e93227fe651d55eac3ad1b7b1e6f0dad8f7->leave($__internal_df6303014e3f9d47a4d795b583eb6e93227fe651d55eac3ad1b7b1e6f0dad8f7_prof);

        
        $__internal_552c41a2ff9af34f3d2aef53276fc1432aee2a45fb9ed6d5baf43a9f83903ae5->leave($__internal_552c41a2ff9af34f3d2aef53276fc1432aee2a45fb9ed6d5baf43a9f83903ae5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
