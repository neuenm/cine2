<?php

/* RetiraentradaBundle::layout.html.twig */
class __TwigTemplate_b67ed36344c185077adb4c059541e60039ce149314b8388422d89a4d1a80d2b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afba7dfef8931aa8c0e45e185d54bbda88ecd5527a9f326a68acebb9d2ba4b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afba7dfef8931aa8c0e45e185d54bbda88ecd5527a9f326a68acebb9d2ba4b68->enter($__internal_afba7dfef8931aa8c0e45e185d54bbda88ecd5527a9f326a68acebb9d2ba4b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RetiraentradaBundle::layout.html.twig"));

        $__internal_6729872047f13270cbce49d44e32d7db0c8c84a88f8f6d4df35fc969002a336d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6729872047f13270cbce49d44e32d7db0c8c84a88f8f6d4df35fc969002a336d->enter($__internal_6729872047f13270cbce49d44e32d7db0c8c84a88f8f6d4df35fc969002a336d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RetiraentradaBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "



<section id=\"content\">
    ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "</section>
";
        
        $__internal_afba7dfef8931aa8c0e45e185d54bbda88ecd5527a9f326a68acebb9d2ba4b68->leave($__internal_afba7dfef8931aa8c0e45e185d54bbda88ecd5527a9f326a68acebb9d2ba4b68_prof);

        
        $__internal_6729872047f13270cbce49d44e32d7db0c8c84a88f8f6d4df35fc969002a336d->leave($__internal_6729872047f13270cbce49d44e32d7db0c8c84a88f8f6d4df35fc969002a336d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f5a0112a3204fca576f444559e0f699a090fb342e989aa2ef545d8fcf7e6afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5a0112a3204fca576f444559e0f699a090fb342e989aa2ef545d8fcf7e6afb->enter($__internal_6f5a0112a3204fca576f444559e0f699a090fb342e989aa2ef545d8fcf7e6afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc6b0062513ecd344b9c3f62c83b8352c02966204556bd7c6352d752c51a9991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6b0062513ecd344b9c3f62c83b8352c02966204556bd7c6352d752c51a9991->enter($__internal_bc6b0062513ecd344b9c3f62c83b8352c02966204556bd7c6352d752c51a9991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Retirar Entrada ";
        
        $__internal_bc6b0062513ecd344b9c3f62c83b8352c02966204556bd7c6352d752c51a9991->leave($__internal_bc6b0062513ecd344b9c3f62c83b8352c02966204556bd7c6352d752c51a9991_prof);

        
        $__internal_6f5a0112a3204fca576f444559e0f699a090fb342e989aa2ef545d8fcf7e6afb->leave($__internal_6f5a0112a3204fca576f444559e0f699a090fb342e989aa2ef545d8fcf7e6afb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f39c52b5aa6cac16e96705a045462917f0bea60512dac5d1c0bd413522e6c22b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f39c52b5aa6cac16e96705a045462917f0bea60512dac5d1c0bd413522e6c22b->enter($__internal_f39c52b5aa6cac16e96705a045462917f0bea60512dac5d1c0bd413522e6c22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0c8659b02f3bdf22c99e6f2dbad23ac6bf01965012dbae7f4892600bc80faeed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8659b02f3bdf22c99e6f2dbad23ac6bf01965012dbae7f4892600bc80faeed->enter($__internal_0c8659b02f3bdf22c99e6f2dbad23ac6bf01965012dbae7f4892600bc80faeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>

    ";
        
        $__internal_0c8659b02f3bdf22c99e6f2dbad23ac6bf01965012dbae7f4892600bc80faeed->leave($__internal_0c8659b02f3bdf22c99e6f2dbad23ac6bf01965012dbae7f4892600bc80faeed_prof);

        
        $__internal_f39c52b5aa6cac16e96705a045462917f0bea60512dac5d1c0bd413522e6c22b->leave($__internal_f39c52b5aa6cac16e96705a045462917f0bea60512dac5d1c0bd413522e6c22b_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_c3035a05489a406fc5badf01d2aff1000012c47891d5a4ef6753b4129eaaa246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3035a05489a406fc5badf01d2aff1000012c47891d5a4ef6753b4129eaaa246->enter($__internal_c3035a05489a406fc5badf01d2aff1000012c47891d5a4ef6753b4129eaaa246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dcd57098956aa6c4a3ffd8ee61e1d2f940505d8f0d2a1057af688e6d6f411f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd57098956aa6c4a3ffd8ee61e1d2f940505d8f0d2a1057af688e6d6f411f46->enter($__internal_dcd57098956aa6c4a3ffd8ee61e1d2f940505d8f0d2a1057af688e6d6f411f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " cotenido por defcto ";
        
        $__internal_dcd57098956aa6c4a3ffd8ee61e1d2f940505d8f0d2a1057af688e6d6f411f46->leave($__internal_dcd57098956aa6c4a3ffd8ee61e1d2f940505d8f0d2a1057af688e6d6f411f46_prof);

        
        $__internal_c3035a05489a406fc5badf01d2aff1000012c47891d5a4ef6753b4129eaaa246->leave($__internal_c3035a05489a406fc5badf01d2aff1000012c47891d5a4ef6753b4129eaaa246_prof);

    }

    public function getTemplateName()
    {
        return "RetiraentradaBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  102 => 18,  87 => 7,  78 => 6,  60 => 4,  49 => 19,  47 => 18,  40 => 13,  38 => 6,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <title>{%block title %}Retirar Entrada {% endblock %}</title>

    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>

    {% endblock %}




<section id=\"content\">
    {% block content %} cotenido por defcto {% endblock %}
</section>
", "RetiraentradaBundle::layout.html.twig", "/home/neuen/php2016/cine2/src/RetiraentradaBundle/Resources/views/layout.html.twig");
    }
}
