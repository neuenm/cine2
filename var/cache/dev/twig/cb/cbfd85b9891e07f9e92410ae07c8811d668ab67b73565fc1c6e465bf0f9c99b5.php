<?php

/* CineBundle:Cine:nuevo.html.twig */
class __TwigTemplate_d7e5af561c939e666fcdc95c32a66e89550f409a0152836fc8639e1f3ed81de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Cine:nuevo.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CineBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_561fe601024087d43274674d71a4a0d5cc22e5ffdf43d9cbae1ef121e04da4d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561fe601024087d43274674d71a4a0d5cc22e5ffdf43d9cbae1ef121e04da4d1->enter($__internal_561fe601024087d43274674d71a4a0d5cc22e5ffdf43d9cbae1ef121e04da4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:nuevo.html.twig"));

        $__internal_d6a9fa0ec61d4f94bf32c11a744bdb159d024e35030b20c055cb5e0a8ab66b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a9fa0ec61d4f94bf32c11a744bdb159d024e35030b20c055cb5e0a8ab66b53->enter($__internal_d6a9fa0ec61d4f94bf32c11a744bdb159d024e35030b20c055cb5e0a8ab66b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_561fe601024087d43274674d71a4a0d5cc22e5ffdf43d9cbae1ef121e04da4d1->leave($__internal_561fe601024087d43274674d71a4a0d5cc22e5ffdf43d9cbae1ef121e04da4d1_prof);

        
        $__internal_d6a9fa0ec61d4f94bf32c11a744bdb159d024e35030b20c055cb5e0a8ab66b53->leave($__internal_d6a9fa0ec61d4f94bf32c11a744bdb159d024e35030b20c055cb5e0a8ab66b53_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_7d2c9c424b492d34fdb495a1fd08bf1329505ed6ddc37f6574e03202e0fa017b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d2c9c424b492d34fdb495a1fd08bf1329505ed6ddc37f6574e03202e0fa017b->enter($__internal_7d2c9c424b492d34fdb495a1fd08bf1329505ed6ddc37f6574e03202e0fa017b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d39e79ef05ed6f72d2094695b15cdb1a5edf3cae4bddfebe2d805b6739bf332b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39e79ef05ed6f72d2094695b15cdb1a5edf3cae4bddfebe2d805b6739bf332b->enter($__internal_d39e79ef05ed6f72d2094695b15cdb1a5edf3cae4bddfebe2d805b6739bf332b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <h3 class=\"light grey-text text-lighten-3\">Nuevo cine:</h3>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "        <script>Materialize.toast(\"";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\", 6000, 'rounded')</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'label');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_d39e79ef05ed6f72d2094695b15cdb1a5edf3cae4bddfebe2d805b6739bf332b->leave($__internal_d39e79ef05ed6f72d2094695b15cdb1a5edf3cae4bddfebe2d805b6739bf332b_prof);

        
        $__internal_7d2c9c424b492d34fdb495a1fd08bf1329505ed6ddc37f6574e03202e0fa017b->leave($__internal_7d2c9c424b492d34fdb495a1fd08bf1329505ed6ddc37f6574e03202e0fa017b_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Cine:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  77 => 11,  73 => 10,  69 => 9,  65 => 7,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"CineBundle::layout.html.twig\" %}
{% block content %}
    <h3 class=\"light grey-text text-lighten-3\">Nuevo cine:</h3>
    {% for message in app.session.flashbag().get('status') %}
        <script>Materialize.toast(\"{{ message }}\", 6000, 'rounded')</script>
    {% endfor %}
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
            {{form_start(form)}}
            {{ form_label(form.estado) }}
            {{ form_widget(form.estado, { 'attr': {'class': 'browser-default'} })  }}
            {{form_end(form)}}
        </div>
    </div>
    <div class=\"clearfix\">
{% endblock %}", "CineBundle:Cine:nuevo.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Cine/nuevo.html.twig");
    }
}
