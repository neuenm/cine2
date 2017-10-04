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
        $__internal_c9fbabed524aa5befd325b66a7d5423f15fd085d0d7aab3a94e5e3ddc575fbe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9fbabed524aa5befd325b66a7d5423f15fd085d0d7aab3a94e5e3ddc575fbe9->enter($__internal_c9fbabed524aa5befd325b66a7d5423f15fd085d0d7aab3a94e5e3ddc575fbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicopia:edita.html.twig"));

        $__internal_353e34a2a279ff52a4836023231e78d379ced8dcb5ddd3302510d72f48ebbc52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353e34a2a279ff52a4836023231e78d379ced8dcb5ddd3302510d72f48ebbc52->enter($__internal_353e34a2a279ff52a4836023231e78d379ced8dcb5ddd3302510d72f48ebbc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicopia:edita.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9fbabed524aa5befd325b66a7d5423f15fd085d0d7aab3a94e5e3ddc575fbe9->leave($__internal_c9fbabed524aa5befd325b66a7d5423f15fd085d0d7aab3a94e5e3ddc575fbe9_prof);

        
        $__internal_353e34a2a279ff52a4836023231e78d379ced8dcb5ddd3302510d72f48ebbc52->leave($__internal_353e34a2a279ff52a4836023231e78d379ced8dcb5ddd3302510d72f48ebbc52_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_e5fb0b80952bb30026a0c3b8f0dc04e6e1fbf55f6b7fe7ae847842e4ae9a6a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5fb0b80952bb30026a0c3b8f0dc04e6e1fbf55f6b7fe7ae847842e4ae9a6a12->enter($__internal_e5fb0b80952bb30026a0c3b8f0dc04e6e1fbf55f6b7fe7ae847842e4ae9a6a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_02f421967d568b9066b55dc038f1e91aa8c4cf658f6855673243a5a22aefa84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f421967d568b9066b55dc038f1e91aa8c4cf658f6855673243a5a22aefa84f->enter($__internal_02f421967d568b9066b55dc038f1e91aa8c4cf658f6855673243a5a22aefa84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h3 class=\"light grey-text text-lighten-3\">Edicion de la copia de la pelicula:</h3>

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "        ";
            if (($context["message"] == "Se guardaron sus cambios correctamente")) {
                // line 9
                echo "            <div class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            } else {
                // line 11
                echo "            <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            }
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-6 col-sm-4 \">
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idPeli", array()), 'label');
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idPeli", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idFormato", array()), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idFormato", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idioma", array()), 'label');
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idioma", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'label');
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_02f421967d568b9066b55dc038f1e91aa8c4cf658f6855673243a5a22aefa84f->leave($__internal_02f421967d568b9066b55dc038f1e91aa8c4cf658f6855673243a5a22aefa84f_prof);

        
        $__internal_e5fb0b80952bb30026a0c3b8f0dc04e6e1fbf55f6b7fe7ae847842e4ae9a6a12->leave($__internal_e5fb0b80952bb30026a0c3b8f0dc04e6e1fbf55f6b7fe7ae847842e4ae9a6a12_prof);

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
        return array (  119 => 26,  115 => 25,  111 => 24,  107 => 23,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  78 => 14,  72 => 13,  66 => 11,  60 => 9,  57 => 8,  53 => 7,  49 => 5,  40 => 4,  11 => 1,);
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
{% endblock %}", "CineBundle:Pelicopia:edita.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Pelicopia/edita.html.twig");
    }
}
