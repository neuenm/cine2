<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
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
        $__internal_9f9d3dd12bcbad03402d605ea41a06b25a880eca4eae82ed067e18e9cbf054ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9d3dd12bcbad03402d605ea41a06b25a880eca4eae82ed067e18e9cbf054ad->enter($__internal_9f9d3dd12bcbad03402d605ea41a06b25a880eca4eae82ed067e18e9cbf054ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_dbfb70fea38430059564b53de56a9728f976e81fa909b21d4c76188b36681ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfb70fea38430059564b53de56a9728f976e81fa909b21d4c76188b36681ed2->enter($__internal_dbfb70fea38430059564b53de56a9728f976e81fa909b21d4c76188b36681ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f9d3dd12bcbad03402d605ea41a06b25a880eca4eae82ed067e18e9cbf054ad->leave($__internal_9f9d3dd12bcbad03402d605ea41a06b25a880eca4eae82ed067e18e9cbf054ad_prof);

        
        $__internal_dbfb70fea38430059564b53de56a9728f976e81fa909b21d4c76188b36681ed2->leave($__internal_dbfb70fea38430059564b53de56a9728f976e81fa909b21d4c76188b36681ed2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_03b9e7c69e849c75db51dd1f6e2d4d2a9846cfd58105ad26487961645762fa72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b9e7c69e849c75db51dd1f6e2d4d2a9846cfd58105ad26487961645762fa72->enter($__internal_03b9e7c69e849c75db51dd1f6e2d4d2a9846cfd58105ad26487961645762fa72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4371e262f5ff12e7983ce1b893e62ecdd796001e5e924ccbdf7e247c864dcc21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4371e262f5ff12e7983ce1b893e62ecdd796001e5e924ccbdf7e247c864dcc21->enter($__internal_4371e262f5ff12e7983ce1b893e62ecdd796001e5e924ccbdf7e247c864dcc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4371e262f5ff12e7983ce1b893e62ecdd796001e5e924ccbdf7e247c864dcc21->leave($__internal_4371e262f5ff12e7983ce1b893e62ecdd796001e5e924ccbdf7e247c864dcc21_prof);

        
        $__internal_03b9e7c69e849c75db51dd1f6e2d4d2a9846cfd58105ad26487961645762fa72->leave($__internal_03b9e7c69e849c75db51dd1f6e2d4d2a9846cfd58105ad26487961645762fa72_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e06184e19fd6bef4cfc2a61c368ff41241c4d404e519a03309fa06f7633ea24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e06184e19fd6bef4cfc2a61c368ff41241c4d404e519a03309fa06f7633ea24->enter($__internal_7e06184e19fd6bef4cfc2a61c368ff41241c4d404e519a03309fa06f7633ea24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2472e3fea4319db3ff084337099aede16ecaaece9fbe09aba077a0d112ccd540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2472e3fea4319db3ff084337099aede16ecaaece9fbe09aba077a0d112ccd540->enter($__internal_2472e3fea4319db3ff084337099aede16ecaaece9fbe09aba077a0d112ccd540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2472e3fea4319db3ff084337099aede16ecaaece9fbe09aba077a0d112ccd540->leave($__internal_2472e3fea4319db3ff084337099aede16ecaaece9fbe09aba077a0d112ccd540_prof);

        
        $__internal_7e06184e19fd6bef4cfc2a61c368ff41241c4d404e519a03309fa06f7633ea24->leave($__internal_7e06184e19fd6bef4cfc2a61c368ff41241c4d404e519a03309fa06f7633ea24_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_92c1e0c77ba83a29e3708c20942f5b36fbcb0d27db1d65bdf1df7e79b55f7e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c1e0c77ba83a29e3708c20942f5b36fbcb0d27db1d65bdf1df7e79b55f7e4a->enter($__internal_92c1e0c77ba83a29e3708c20942f5b36fbcb0d27db1d65bdf1df7e79b55f7e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d8415b038545fa2090d4b20c21913f89121b14e0afe8234c48ecccb809a64196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8415b038545fa2090d4b20c21913f89121b14e0afe8234c48ecccb809a64196->enter($__internal_d8415b038545fa2090d4b20c21913f89121b14e0afe8234c48ecccb809a64196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d8415b038545fa2090d4b20c21913f89121b14e0afe8234c48ecccb809a64196->leave($__internal_d8415b038545fa2090d4b20c21913f89121b14e0afe8234c48ecccb809a64196_prof);

        
        $__internal_92c1e0c77ba83a29e3708c20942f5b36fbcb0d27db1d65bdf1df7e79b55f7e4a->leave($__internal_92c1e0c77ba83a29e3708c20942f5b36fbcb0d27db1d65bdf1df7e79b55f7e4a_prof);

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
