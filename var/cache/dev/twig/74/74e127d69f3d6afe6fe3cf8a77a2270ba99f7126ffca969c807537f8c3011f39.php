<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f032ca10893d3d2453ba1f3cd7598481f940f7fd5137d010f38b14ad1b6a30d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d3a6307f0398f3af959730d2b3422b9e147952d040688b333c0eee3ccce9c9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d3a6307f0398f3af959730d2b3422b9e147952d040688b333c0eee3ccce9c9e->enter($__internal_5d3a6307f0398f3af959730d2b3422b9e147952d040688b333c0eee3ccce9c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_759dbd4376da2a6c81c8076ec19fa707f64c3967e56d0c0fa9450683dfa54ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759dbd4376da2a6c81c8076ec19fa707f64c3967e56d0c0fa9450683dfa54ce3->enter($__internal_759dbd4376da2a6c81c8076ec19fa707f64c3967e56d0c0fa9450683dfa54ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d3a6307f0398f3af959730d2b3422b9e147952d040688b333c0eee3ccce9c9e->leave($__internal_5d3a6307f0398f3af959730d2b3422b9e147952d040688b333c0eee3ccce9c9e_prof);

        
        $__internal_759dbd4376da2a6c81c8076ec19fa707f64c3967e56d0c0fa9450683dfa54ce3->leave($__internal_759dbd4376da2a6c81c8076ec19fa707f64c3967e56d0c0fa9450683dfa54ce3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0740d5b93369c6814f16799ca0dbb4bfa815a6a11102ebccd39afdb2776944e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0740d5b93369c6814f16799ca0dbb4bfa815a6a11102ebccd39afdb2776944e1->enter($__internal_0740d5b93369c6814f16799ca0dbb4bfa815a6a11102ebccd39afdb2776944e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_697a40030938b414cf0563e0dfc4b1820d3c5b0adcdc0d563afed108ab51d3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697a40030938b414cf0563e0dfc4b1820d3c5b0adcdc0d563afed108ab51d3e1->enter($__internal_697a40030938b414cf0563e0dfc4b1820d3c5b0adcdc0d563afed108ab51d3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_697a40030938b414cf0563e0dfc4b1820d3c5b0adcdc0d563afed108ab51d3e1->leave($__internal_697a40030938b414cf0563e0dfc4b1820d3c5b0adcdc0d563afed108ab51d3e1_prof);

        
        $__internal_0740d5b93369c6814f16799ca0dbb4bfa815a6a11102ebccd39afdb2776944e1->leave($__internal_0740d5b93369c6814f16799ca0dbb4bfa815a6a11102ebccd39afdb2776944e1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c2b10ab924c4973abb0df1bdd1eea728a645fe86290acae2f41851c6fb694c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b10ab924c4973abb0df1bdd1eea728a645fe86290acae2f41851c6fb694c7a->enter($__internal_c2b10ab924c4973abb0df1bdd1eea728a645fe86290acae2f41851c6fb694c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_05662de2c9e2675f0ea5a178ab1909bd36bb23c5d5ab7ffa2c13b1ed7704895e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05662de2c9e2675f0ea5a178ab1909bd36bb23c5d5ab7ffa2c13b1ed7704895e->enter($__internal_05662de2c9e2675f0ea5a178ab1909bd36bb23c5d5ab7ffa2c13b1ed7704895e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_05662de2c9e2675f0ea5a178ab1909bd36bb23c5d5ab7ffa2c13b1ed7704895e->leave($__internal_05662de2c9e2675f0ea5a178ab1909bd36bb23c5d5ab7ffa2c13b1ed7704895e_prof);

        
        $__internal_c2b10ab924c4973abb0df1bdd1eea728a645fe86290acae2f41851c6fb694c7a->leave($__internal_c2b10ab924c4973abb0df1bdd1eea728a645fe86290acae2f41851c6fb694c7a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_911664fb705e8e657c691d2280898fae381d3ecc00c01684a8fcbc1c149c4eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911664fb705e8e657c691d2280898fae381d3ecc00c01684a8fcbc1c149c4eec->enter($__internal_911664fb705e8e657c691d2280898fae381d3ecc00c01684a8fcbc1c149c4eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e167803ad832b4751b5e174653b8cb7d42f7d7465904757f3b0673730b48512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e167803ad832b4751b5e174653b8cb7d42f7d7465904757f3b0673730b48512->enter($__internal_3e167803ad832b4751b5e174653b8cb7d42f7d7465904757f3b0673730b48512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3e167803ad832b4751b5e174653b8cb7d42f7d7465904757f3b0673730b48512->leave($__internal_3e167803ad832b4751b5e174653b8cb7d42f7d7465904757f3b0673730b48512_prof);

        
        $__internal_911664fb705e8e657c691d2280898fae381d3ecc00c01684a8fcbc1c149c4eec->leave($__internal_911664fb705e8e657c691d2280898fae381d3ecc00c01684a8fcbc1c149c4eec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
