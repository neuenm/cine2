<?php

/* CineBundle:Pelicopia:edita.html.twig */
class __TwigTemplate_86b3f89f997b3a2dbcdf50060e5ee50831e2fade00ffe074b799e0a91a15ca36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Pelicopia:edita.html.twig", 1);
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
        $__internal_dcbcd0f5975a2732d8029801003c450b4ed16b0417b696bba2564d0a2f5933ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcbcd0f5975a2732d8029801003c450b4ed16b0417b696bba2564d0a2f5933ac->enter($__internal_dcbcd0f5975a2732d8029801003c450b4ed16b0417b696bba2564d0a2f5933ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicopia:edita.html.twig"));

        $__internal_37e2e89557bbf7da667793469d59f96b8ded2344eb4c4cfadc2f6d1b2e2e7cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e2e89557bbf7da667793469d59f96b8ded2344eb4c4cfadc2f6d1b2e2e7cbc->enter($__internal_37e2e89557bbf7da667793469d59f96b8ded2344eb4c4cfadc2f6d1b2e2e7cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicopia:edita.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcbcd0f5975a2732d8029801003c450b4ed16b0417b696bba2564d0a2f5933ac->leave($__internal_dcbcd0f5975a2732d8029801003c450b4ed16b0417b696bba2564d0a2f5933ac_prof);

        
        $__internal_37e2e89557bbf7da667793469d59f96b8ded2344eb4c4cfadc2f6d1b2e2e7cbc->leave($__internal_37e2e89557bbf7da667793469d59f96b8ded2344eb4c4cfadc2f6d1b2e2e7cbc_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_2752724a50ef7d3ce1db7a8f801a881c096b1b8c9a549f1de3455c1ca23f849c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2752724a50ef7d3ce1db7a8f801a881c096b1b8c9a549f1de3455c1ca23f849c->enter($__internal_2752724a50ef7d3ce1db7a8f801a881c096b1b8c9a549f1de3455c1ca23f849c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2f31ca3b51a8578fed36a84b3949711cca127ce3e3ca8f3aa1110bfadca61fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f31ca3b51a8578fed36a84b3949711cca127ce3e3ca8f3aa1110bfadca61fd8->enter($__internal_2f31ca3b51a8578fed36a84b3949711cca127ce3e3ca8f3aa1110bfadca61fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div class=\"container\">
        <h3 class=\"light grey-text text-lighten-3\">Edicion de la copia de la pelicula:</h3>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "            ";
            if (($context["message"] == "Se guardaron sus cambios correctamente")) {
                // line 10
                echo "                <div class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
            ";
            } else {
                // line 12
                echo "                <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
            ";
            }
            // line 14
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-4 \">
                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idPeli", array()), 'label');
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idPeli", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idFormato", array()), 'label');
        echo "
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idFormato", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idioma", array()), 'label');
        echo "
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idioma", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'label');
        echo "
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
        </div>
        <div class=\"clearfix\">
    </div>
";
        
        $__internal_2f31ca3b51a8578fed36a84b3949711cca127ce3e3ca8f3aa1110bfadca61fd8->leave($__internal_2f31ca3b51a8578fed36a84b3949711cca127ce3e3ca8f3aa1110bfadca61fd8_prof);

        
        $__internal_2752724a50ef7d3ce1db7a8f801a881c096b1b8c9a549f1de3455c1ca23f849c->leave($__internal_2752724a50ef7d3ce1db7a8f801a881c096b1b8c9a549f1de3455c1ca23f849c_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Pelicopia:edita.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 27,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  79 => 15,  73 => 14,  67 => 12,  61 => 10,  58 => 9,  54 => 8,  49 => 5,  40 => 4,  11 => 1,);
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
        <h3 class=\"light grey-text text-lighten-3\">Edicion de la copia de la pelicula:</h3>
        {% for message in app.session.flashbag().get('status') %}
            {% if message== \"Se guardaron sus cambios correctamente\" %}
                <div class=\"alert alert-success\">{{ message }}</div>
            {%else%}
                <div class=\"alert alert-danger\">{{ message }}</div>
            {% endif %}
        {% endfor %}
        <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-4 \">
                {{form_start(form)}}
                {{ form_label(form.idPeli) }}
                {{ form_widget(form.idPeli, { 'attr': {'class': 'browser-default'} })  }}
                {{ form_label(form.idFormato) }}
                {{ form_widget(form.idFormato, { 'attr': {'class': 'browser-default'} })  }}
                {{ form_label(form.idioma) }}
                {{ form_widget(form.idioma, { 'attr': {'class': 'browser-default'} })  }}
                {{ form_label(form.estado) }}
                {{ form_widget(form.estado, { 'attr': {'class': 'browser-default'} })  }}
                {{form_end(form)}}
            </div>
        </div>
        </div>
        <div class=\"clearfix\">
    </div>
{% endblock %}", "CineBundle:Pelicopia:edita.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Pelicopia/edita.html.twig");
    }
}
