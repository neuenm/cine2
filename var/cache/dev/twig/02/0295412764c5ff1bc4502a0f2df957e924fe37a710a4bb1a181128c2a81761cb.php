<?php

/* CineBundle:Pelicopia:nueva.html.twig */
class __TwigTemplate_41917864c59d8c55e70301ba591f560eb3aa24ecd3fd95b92a639e143ca89fe3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Pelicopia:nueva.html.twig", 1);
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
        $__internal_b8abcfc671e2795eb8418c5ef8acb59d2f207ab6038d6ca70b0972b22a7fe70c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8abcfc671e2795eb8418c5ef8acb59d2f207ab6038d6ca70b0972b22a7fe70c->enter($__internal_b8abcfc671e2795eb8418c5ef8acb59d2f207ab6038d6ca70b0972b22a7fe70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicopia:nueva.html.twig"));

        $__internal_4bc15dacb6477742dc883c678f2629ad4cc9f0c9a0d26c2df1d6dce2cd37fd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc15dacb6477742dc883c678f2629ad4cc9f0c9a0d26c2df1d6dce2cd37fd16->enter($__internal_4bc15dacb6477742dc883c678f2629ad4cc9f0c9a0d26c2df1d6dce2cd37fd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicopia:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8abcfc671e2795eb8418c5ef8acb59d2f207ab6038d6ca70b0972b22a7fe70c->leave($__internal_b8abcfc671e2795eb8418c5ef8acb59d2f207ab6038d6ca70b0972b22a7fe70c_prof);

        
        $__internal_4bc15dacb6477742dc883c678f2629ad4cc9f0c9a0d26c2df1d6dce2cd37fd16->leave($__internal_4bc15dacb6477742dc883c678f2629ad4cc9f0c9a0d26c2df1d6dce2cd37fd16_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_cd2ce5f55c64b697be7012f040b840c8b184fd28e41dd7170182ec2e7e694daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2ce5f55c64b697be7012f040b840c8b184fd28e41dd7170182ec2e7e694daf->enter($__internal_cd2ce5f55c64b697be7012f040b840c8b184fd28e41dd7170182ec2e7e694daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_786bd970d6b8e2265e2725408b0596559cc1d369bb66b3592add147c48693f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786bd970d6b8e2265e2725408b0596559cc1d369bb66b3592add147c48693f09->enter($__internal_786bd970d6b8e2265e2725408b0596559cc1d369bb66b3592add147c48693f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <h3 class=\"light grey-text text-lighten-3\">Nueva Copia de Pelicula:</h3>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "            <script>Materialize.toast(\"";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\", 6000, 'rounded')</script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idPeli", array()), 'label');
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idPeli", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idFormato", array()), 'label');
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idFormato", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idioma", array()), 'label');
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idioma", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'label');
        echo "
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("class" => "browser-default")));
        echo "
                ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
        </div>
        <div class=\"clearfix\">
    </div>
";
        
        $__internal_786bd970d6b8e2265e2725408b0596559cc1d369bb66b3592add147c48693f09->leave($__internal_786bd970d6b8e2265e2725408b0596559cc1d369bb66b3592add147c48693f09_prof);

        
        $__internal_cd2ce5f55c64b697be7012f040b840c8b184fd28e41dd7170182ec2e7e694daf->leave($__internal_cd2ce5f55c64b697be7012f040b840c8b184fd28e41dd7170182ec2e7e694daf_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Pelicopia:nueva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  102 => 19,  98 => 18,  94 => 17,  90 => 16,  86 => 15,  82 => 14,  78 => 13,  74 => 12,  70 => 11,  66 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
        <h3 class=\"light grey-text text-lighten-3\">Nueva Copia de Pelicula:</h3>
        {% for message in app.session.flashbag().get('status') %}
            <script>Materialize.toast(\"{{ message }}\", 6000, 'rounded')</script>
        {% endfor %}
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
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
        <div class=\"clearfix\">
    </div>
{% endblock %}", "CineBundle:Pelicopia:nueva.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Pelicopia/nueva.html.twig");
    }
}
