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
        $__internal_67563539200aefd59d4e9d765160466b0ca5dfe2dfd4d43b2eeff0f6f95e6b71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67563539200aefd59d4e9d765160466b0ca5dfe2dfd4d43b2eeff0f6f95e6b71->enter($__internal_67563539200aefd59d4e9d765160466b0ca5dfe2dfd4d43b2eeff0f6f95e6b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:edita.html.twig"));

        $__internal_141a5aac910c65035856bad2aac568a2a35405c6a81b5259685effe3a832bb83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141a5aac910c65035856bad2aac568a2a35405c6a81b5259685effe3a832bb83->enter($__internal_141a5aac910c65035856bad2aac568a2a35405c6a81b5259685effe3a832bb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:edita.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67563539200aefd59d4e9d765160466b0ca5dfe2dfd4d43b2eeff0f6f95e6b71->leave($__internal_67563539200aefd59d4e9d765160466b0ca5dfe2dfd4d43b2eeff0f6f95e6b71_prof);

        
        $__internal_141a5aac910c65035856bad2aac568a2a35405c6a81b5259685effe3a832bb83->leave($__internal_141a5aac910c65035856bad2aac568a2a35405c6a81b5259685effe3a832bb83_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_1eff945e5319ccdfb286c254f31c11855df6d27609d9e097adb31ef41d7856e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eff945e5319ccdfb286c254f31c11855df6d27609d9e097adb31ef41d7856e3->enter($__internal_1eff945e5319ccdfb286c254f31c11855df6d27609d9e097adb31ef41d7856e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6da38b0fc09919b3df9bb8257f5147c2c0453b3f2f6e77b9c05d5f89c52b62ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da38b0fc09919b3df9bb8257f5147c2c0453b3f2f6e77b9c05d5f89c52b62ea->enter($__internal_6da38b0fc09919b3df9bb8257f5147c2c0453b3f2f6e77b9c05d5f89c52b62ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <h1 class=\"text-center\"\">Edicion de Cine:</h1>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "        ";
            if (($context["message"] == "Se guardaron sus cambios correctamente")) {
                // line 6
                echo "            <div class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            } else {
                // line 8
                echo "            <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            }
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'label');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_6da38b0fc09919b3df9bb8257f5147c2c0453b3f2f6e77b9c05d5f89c52b62ea->leave($__internal_6da38b0fc09919b3df9bb8257f5147c2c0453b3f2f6e77b9c05d5f89c52b62ea_prof);

        
        $__internal_1eff945e5319ccdfb286c254f31c11855df6d27609d9e097adb31ef41d7856e3->leave($__internal_1eff945e5319ccdfb286c254f31c11855df6d27609d9e097adb31ef41d7856e3_prof);

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
        return array (  94 => 17,  90 => 16,  86 => 15,  82 => 14,  77 => 11,  71 => 10,  65 => 8,  59 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    <h1 class=\"text-center\"\">Edicion de Cine:</h1>
    {% for message in app.session.flashbag().get('status') %}
        {% if message== \"Se guardaron sus cambios correctamente\" %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {%else%}
            <div class=\"alert alert-danger\">{{ message }}</div>
        {% endif %}
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
