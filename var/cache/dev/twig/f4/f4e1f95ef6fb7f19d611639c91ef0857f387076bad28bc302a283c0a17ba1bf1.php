<?php

/* CineBundle:Cine:edita.html.twig */
class __TwigTemplate_d5784c93c5a0e86a652d8bf8665a35cfc565f047b5d4582ec20ff03abba6db17 extends Twig_Template
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
        $__internal_4035611e6367d2d14308105dd0ec56e16cefdcbb4bf43afc7728c771ac75cb54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4035611e6367d2d14308105dd0ec56e16cefdcbb4bf43afc7728c771ac75cb54->enter($__internal_4035611e6367d2d14308105dd0ec56e16cefdcbb4bf43afc7728c771ac75cb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:edita.html.twig"));

        $__internal_3d0f7dd405076d069ec954de39dd9dd0454f56e074a91d91f04559309281358e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0f7dd405076d069ec954de39dd9dd0454f56e074a91d91f04559309281358e->enter($__internal_3d0f7dd405076d069ec954de39dd9dd0454f56e074a91d91f04559309281358e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:edita.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4035611e6367d2d14308105dd0ec56e16cefdcbb4bf43afc7728c771ac75cb54->leave($__internal_4035611e6367d2d14308105dd0ec56e16cefdcbb4bf43afc7728c771ac75cb54_prof);

        
        $__internal_3d0f7dd405076d069ec954de39dd9dd0454f56e074a91d91f04559309281358e->leave($__internal_3d0f7dd405076d069ec954de39dd9dd0454f56e074a91d91f04559309281358e_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_398d0d98104fea1b760368b2e8d4d34c299d7868f9b705b7ec16cc9b5c041da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398d0d98104fea1b760368b2e8d4d34c299d7868f9b705b7ec16cc9b5c041da8->enter($__internal_398d0d98104fea1b760368b2e8d4d34c299d7868f9b705b7ec16cc9b5c041da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8e0ddc7a6809ce50bc93237f4e5c368a1867144c650595ccc4158650840b20da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0ddc7a6809ce50bc93237f4e5c368a1867144c650595ccc4158650840b20da->enter($__internal_8e0ddc7a6809ce50bc93237f4e5c368a1867144c650595ccc4158650840b20da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <h1 class=\"text-center\"\">Edicion de Cine:</h1>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'label');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_8e0ddc7a6809ce50bc93237f4e5c368a1867144c650595ccc4158650840b20da->leave($__internal_8e0ddc7a6809ce50bc93237f4e5c368a1867144c650595ccc4158650840b20da_prof);

        
        $__internal_398d0d98104fea1b760368b2e8d4d34c299d7868f9b705b7ec16cc9b5c041da8->leave($__internal_398d0d98104fea1b760368b2e8d4d34c299d7868f9b705b7ec16cc9b5c041da8_prof);

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
