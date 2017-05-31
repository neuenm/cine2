<?php

/* CineBundle:Pelicopia:edita.html.twig */
class __TwigTemplate_58f6a24080a1a4ed35610ad131de11c704f995bd25a6858d065dd05b52584c46 extends Twig_Template
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
        $__internal_89d2b8b7b2f17f43c43b7bdb2d64a4eb8634b2dd58868580057df08e95b0b42b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d2b8b7b2f17f43c43b7bdb2d64a4eb8634b2dd58868580057df08e95b0b42b->enter($__internal_89d2b8b7b2f17f43c43b7bdb2d64a4eb8634b2dd58868580057df08e95b0b42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicopia:edita.html.twig"));

        $__internal_cefdf65cac01f7905eabaac265d5f42f1e19682e61742bdc4f1441ea3803f7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cefdf65cac01f7905eabaac265d5f42f1e19682e61742bdc4f1441ea3803f7e8->enter($__internal_cefdf65cac01f7905eabaac265d5f42f1e19682e61742bdc4f1441ea3803f7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicopia:edita.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89d2b8b7b2f17f43c43b7bdb2d64a4eb8634b2dd58868580057df08e95b0b42b->leave($__internal_89d2b8b7b2f17f43c43b7bdb2d64a4eb8634b2dd58868580057df08e95b0b42b_prof);

        
        $__internal_cefdf65cac01f7905eabaac265d5f42f1e19682e61742bdc4f1441ea3803f7e8->leave($__internal_cefdf65cac01f7905eabaac265d5f42f1e19682e61742bdc4f1441ea3803f7e8_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_0b3d7f47242160dcbcb2229c021966ebe2eb6fe178f89f45c69c77352e531903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b3d7f47242160dcbcb2229c021966ebe2eb6fe178f89f45c69c77352e531903->enter($__internal_0b3d7f47242160dcbcb2229c021966ebe2eb6fe178f89f45c69c77352e531903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_33927193a7d40302bd75885ce0a590b460434c94d4427bc5090017399e4cbe00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33927193a7d40302bd75885ce0a590b460434c94d4427bc5090017399e4cbe00->enter($__internal_33927193a7d40302bd75885ce0a590b460434c94d4427bc5090017399e4cbe00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h3 class=\"light grey-text text-lighten-3\">Edicion de la copia de la pelicula:</h3>

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idPeli", array()), 'label');
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idPeli", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idFormato", array()), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idFormato", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idioma", array()), 'label');
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idioma", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'label');
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_33927193a7d40302bd75885ce0a590b460434c94d4427bc5090017399e4cbe00->leave($__internal_33927193a7d40302bd75885ce0a590b460434c94d4427bc5090017399e4cbe00_prof);

        
        $__internal_0b3d7f47242160dcbcb2229c021966ebe2eb6fe178f89f45c69c77352e531903->leave($__internal_0b3d7f47242160dcbcb2229c021966ebe2eb6fe178f89f45c69c77352e531903_prof);

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
