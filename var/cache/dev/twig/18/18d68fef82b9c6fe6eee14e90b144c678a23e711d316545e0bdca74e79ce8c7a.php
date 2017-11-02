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
        $__internal_fc5614eed4d3a5df10938a62d7eb96e0749c2d55618a78df2fe3fcb1788085eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5614eed4d3a5df10938a62d7eb96e0749c2d55618a78df2fe3fcb1788085eb->enter($__internal_fc5614eed4d3a5df10938a62d7eb96e0749c2d55618a78df2fe3fcb1788085eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:edita.html.twig"));

        $__internal_ad29642d70010ba8094bd5ba66830f6cb0f11959120dac40d7ac5fcf8b956b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad29642d70010ba8094bd5ba66830f6cb0f11959120dac40d7ac5fcf8b956b2b->enter($__internal_ad29642d70010ba8094bd5ba66830f6cb0f11959120dac40d7ac5fcf8b956b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:edita.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc5614eed4d3a5df10938a62d7eb96e0749c2d55618a78df2fe3fcb1788085eb->leave($__internal_fc5614eed4d3a5df10938a62d7eb96e0749c2d55618a78df2fe3fcb1788085eb_prof);

        
        $__internal_ad29642d70010ba8094bd5ba66830f6cb0f11959120dac40d7ac5fcf8b956b2b->leave($__internal_ad29642d70010ba8094bd5ba66830f6cb0f11959120dac40d7ac5fcf8b956b2b_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_ac581d3a82750231cae932b5c9d3cce1978c28dbd3923eb8f1e9c9303a87a933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac581d3a82750231cae932b5c9d3cce1978c28dbd3923eb8f1e9c9303a87a933->enter($__internal_ac581d3a82750231cae932b5c9d3cce1978c28dbd3923eb8f1e9c9303a87a933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_331bb07b31c3bf214a056b2063da4f88123587d54b8323fcf1bc462797a50691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331bb07b31c3bf214a056b2063da4f88123587d54b8323fcf1bc462797a50691->enter($__internal_331bb07b31c3bf214a056b2063da4f88123587d54b8323fcf1bc462797a50691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <h1 class=\"text-center\">Edicion de Cine:</h1>
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
        echo "
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'label');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_331bb07b31c3bf214a056b2063da4f88123587d54b8323fcf1bc462797a50691->leave($__internal_331bb07b31c3bf214a056b2063da4f88123587d54b8323fcf1bc462797a50691_prof);

        
        $__internal_ac581d3a82750231cae932b5c9d3cce1978c28dbd3923eb8f1e9c9303a87a933->leave($__internal_ac581d3a82750231cae932b5c9d3cce1978c28dbd3923eb8f1e9c9303a87a933_prof);

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
        return array (  82 => 13,  78 => 12,  74 => 11,  70 => 10,  65 => 7,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    <h1 class=\"text-center\">Edicion de Cine:</h1>
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
{% endblock %}", "CineBundle:Cine:edita.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Cine/edita.html.twig");
    }
}
