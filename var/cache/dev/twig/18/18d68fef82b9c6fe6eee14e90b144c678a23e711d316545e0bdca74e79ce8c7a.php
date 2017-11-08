<?php

/* CineBundle:Cine:edita.html.twig */
class __TwigTemplate_40d0759d41a2e846f77be784c602f0080051a18f5b68e49651f3e445a9cd31ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Cine:edita.html.twig", 1);
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
        $__internal_c199685459f987849422a09f651dfc9c6befb64c5564b92927ee468663afdf75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c199685459f987849422a09f651dfc9c6befb64c5564b92927ee468663afdf75->enter($__internal_c199685459f987849422a09f651dfc9c6befb64c5564b92927ee468663afdf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:edita.html.twig"));

        $__internal_6ed1c156ef3e5742f88a1bab80a0b2405c995cae18f818186003c697aa2d387d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed1c156ef3e5742f88a1bab80a0b2405c995cae18f818186003c697aa2d387d->enter($__internal_6ed1c156ef3e5742f88a1bab80a0b2405c995cae18f818186003c697aa2d387d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:edita.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c199685459f987849422a09f651dfc9c6befb64c5564b92927ee468663afdf75->leave($__internal_c199685459f987849422a09f651dfc9c6befb64c5564b92927ee468663afdf75_prof);

        
        $__internal_6ed1c156ef3e5742f88a1bab80a0b2405c995cae18f818186003c697aa2d387d->leave($__internal_6ed1c156ef3e5742f88a1bab80a0b2405c995cae18f818186003c697aa2d387d_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_f4ecb42c4d6dd073cfc7c780a17cde80fad942f33883dcf416be6414df4d6b01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ecb42c4d6dd073cfc7c780a17cde80fad942f33883dcf416be6414df4d6b01->enter($__internal_f4ecb42c4d6dd073cfc7c780a17cde80fad942f33883dcf416be6414df4d6b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5ee08ad508d55e1928310b613a2af208e65eb9f9551f74c1f18b5279a7fd0aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee08ad508d55e1928310b613a2af208e65eb9f9551f74c1f18b5279a7fd0aa6->enter($__internal_5ee08ad508d55e1928310b613a2af208e65eb9f9551f74c1f18b5279a7fd0aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"container\">
        <h3 class=\"light grey-text text-lighten-3\">Edicion de Cine:</h3>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "            <script>Materialize.toast(\"";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\", 6000, 'rounded')</script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'label');
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>>
";
        
        $__internal_5ee08ad508d55e1928310b613a2af208e65eb9f9551f74c1f18b5279a7fd0aa6->leave($__internal_5ee08ad508d55e1928310b613a2af208e65eb9f9551f74c1f18b5279a7fd0aa6_prof);

        
        $__internal_f4ecb42c4d6dd073cfc7c780a17cde80fad942f33883dcf416be6414df4d6b01->leave($__internal_f4ecb42c4d6dd073cfc7c780a17cde80fad942f33883dcf416be6414df4d6b01_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Cine:edita.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  79 => 13,  75 => 12,  71 => 11,  66 => 8,  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
    <div class=\"container\">
        <h3 class=\"light grey-text text-lighten-3\">Edicion de Cine:</h3>
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
    </div>>
{% endblock %}", "CineBundle:Cine:edita.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Cine/edita.html.twig");
    }
}
