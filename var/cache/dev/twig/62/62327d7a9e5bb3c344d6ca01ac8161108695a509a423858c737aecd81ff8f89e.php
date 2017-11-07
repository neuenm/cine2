<?php

/* RetiraentradaBundle:Retira:retira.html.twig */
class __TwigTemplate_38ce58ac3e8d3a7bb0e46b767cf1a4b6beb5904d008664ba74e9e5c2e07e5cbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_794f72a3697c7218f966619b5ef28815f51823c2ea6d25f1ef5c8364e1bd28a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_794f72a3697c7218f966619b5ef28815f51823c2ea6d25f1ef5c8364e1bd28a3->enter($__internal_794f72a3697c7218f966619b5ef28815f51823c2ea6d25f1ef5c8364e1bd28a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RetiraentradaBundle:Retira:retira.html.twig"));

        $__internal_08f036bede883a539f3eff76c58524d055c38c1c32c507202e8ee8f9415759ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f036bede883a539f3eff76c58524d055c38c1c32c507202e8ee8f9415759ae->enter($__internal_08f036bede883a539f3eff76c58524d055c38c1c32c507202e8ee8f9415759ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RetiraentradaBundle:Retira:retira.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_794f72a3697c7218f966619b5ef28815f51823c2ea6d25f1ef5c8364e1bd28a3->leave($__internal_794f72a3697c7218f966619b5ef28815f51823c2ea6d25f1ef5c8364e1bd28a3_prof);

        
        $__internal_08f036bede883a539f3eff76c58524d055c38c1c32c507202e8ee8f9415759ae->leave($__internal_08f036bede883a539f3eff76c58524d055c38c1c32c507202e8ee8f9415759ae_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_3f0d5494a3bb169582d727a0d218e0f1169dc9d6e90195d71ecc1cadaa3a535b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f0d5494a3bb169582d727a0d218e0f1169dc9d6e90195d71ecc1cadaa3a535b->enter($__internal_3f0d5494a3bb169582d727a0d218e0f1169dc9d6e90195d71ecc1cadaa3a535b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_63d7c8187fcf1c53875ea86bb8426416ab82fc733ec9e06511b1596b102711af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d7c8187fcf1c53875ea86bb8426416ab82fc733ec9e06511b1596b102711af->enter($__internal_63d7c8187fcf1c53875ea86bb8426416ab82fc733ec9e06511b1596b102711af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_63d7c8187fcf1c53875ea86bb8426416ab82fc733ec9e06511b1596b102711af->leave($__internal_63d7c8187fcf1c53875ea86bb8426416ab82fc733ec9e06511b1596b102711af_prof);

        
        $__internal_3f0d5494a3bb169582d727a0d218e0f1169dc9d6e90195d71ecc1cadaa3a535b->leave($__internal_3f0d5494a3bb169582d727a0d218e0f1169dc9d6e90195d71ecc1cadaa3a535b_prof);

    }

    public function getTemplateName()
    {
        return "RetiraentradaBundle:Retira:retira.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block content %}
    {{form_start(form)}}
    {{form_end(form)}}
{% endblock %}", "RetiraentradaBundle:Retira:retira.html.twig", "/home/neuen/php2016/cine2/src/RetiraentradaBundle/Resources/views/Retira/retira.html.twig");
    }
}
