<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a4e254d99350e31e2f1320a6b3258f61bc6876a0452cf5602c2a2eef09494fc extends Twig_Template
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
        $__internal_5e2262e84adfd5fb5910c2faf65ba08a2b02d648865727e753e050eba7279686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e2262e84adfd5fb5910c2faf65ba08a2b02d648865727e753e050eba7279686->enter($__internal_5e2262e84adfd5fb5910c2faf65ba08a2b02d648865727e753e050eba7279686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c1e626797cd408b79899ade53f32930830581d2fb239fddfe2897e6e60955f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e626797cd408b79899ade53f32930830581d2fb239fddfe2897e6e60955f16->enter($__internal_c1e626797cd408b79899ade53f32930830581d2fb239fddfe2897e6e60955f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5e2262e84adfd5fb5910c2faf65ba08a2b02d648865727e753e050eba7279686->leave($__internal_5e2262e84adfd5fb5910c2faf65ba08a2b02d648865727e753e050eba7279686_prof);

        
        $__internal_c1e626797cd408b79899ade53f32930830581d2fb239fddfe2897e6e60955f16->leave($__internal_c1e626797cd408b79899ade53f32930830581d2fb239fddfe2897e6e60955f16_prof);

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
