<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b576ac9e838fb837da9dfc47aeb8821964b387e5e93a49e597f6c0aac59652f9 extends Twig_Template
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
        $__internal_72555c92a0231aa04663bc01000b33ec43f3bd0330b43e5e6bdcdde72906709f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72555c92a0231aa04663bc01000b33ec43f3bd0330b43e5e6bdcdde72906709f->enter($__internal_72555c92a0231aa04663bc01000b33ec43f3bd0330b43e5e6bdcdde72906709f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_9443a19db25ea3db6b56f7d3cb646e599f4442fe5faa7ca23cefc0d23ba2c4f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9443a19db25ea3db6b56f7d3cb646e599f4442fe5faa7ca23cefc0d23ba2c4f8->enter($__internal_9443a19db25ea3db6b56f7d3cb646e599f4442fe5faa7ca23cefc0d23ba2c4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_72555c92a0231aa04663bc01000b33ec43f3bd0330b43e5e6bdcdde72906709f->leave($__internal_72555c92a0231aa04663bc01000b33ec43f3bd0330b43e5e6bdcdde72906709f_prof);

        
        $__internal_9443a19db25ea3db6b56f7d3cb646e599f4442fe5faa7ca23cefc0d23ba2c4f8->leave($__internal_9443a19db25ea3db6b56f7d3cb646e599f4442fe5faa7ca23cefc0d23ba2c4f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
