<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cf98befa34d6fd83c86761236c260b9a9d3e7c2c68dd45d3cce13b4178408a30 extends Twig_Template
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
        $__internal_f6ad8246f3893c7d62161d3a65d1c78079ae3ef3214607c16bb293cadd2284db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ad8246f3893c7d62161d3a65d1c78079ae3ef3214607c16bb293cadd2284db->enter($__internal_f6ad8246f3893c7d62161d3a65d1c78079ae3ef3214607c16bb293cadd2284db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_148d7682470fb04d0a26e6af8c343697d4b9fa8953be8affcfc1117be80895b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148d7682470fb04d0a26e6af8c343697d4b9fa8953be8affcfc1117be80895b0->enter($__internal_148d7682470fb04d0a26e6af8c343697d4b9fa8953be8affcfc1117be80895b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f6ad8246f3893c7d62161d3a65d1c78079ae3ef3214607c16bb293cadd2284db->leave($__internal_f6ad8246f3893c7d62161d3a65d1c78079ae3ef3214607c16bb293cadd2284db_prof);

        
        $__internal_148d7682470fb04d0a26e6af8c343697d4b9fa8953be8affcfc1117be80895b0->leave($__internal_148d7682470fb04d0a26e6af8c343697d4b9fa8953be8affcfc1117be80895b0_prof);

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
