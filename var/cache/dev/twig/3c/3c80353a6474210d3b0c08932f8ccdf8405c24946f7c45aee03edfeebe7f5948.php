<?php

/* CineBundle:Pelicula:edita.html.twig */
class __TwigTemplate_d84c0c3233b08503434f3d9bc0adc200f7d48b2e034d2040feca9ee96d39778e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Pelicula:edita.html.twig", 1);
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
        $__internal_7eed944a0553ba569cf1320e845a1f7c962b69458c467370e8f06125c822306a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eed944a0553ba569cf1320e845a1f7c962b69458c467370e8f06125c822306a->enter($__internal_7eed944a0553ba569cf1320e845a1f7c962b69458c467370e8f06125c822306a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:edita.html.twig"));

        $__internal_920275527db14c13d1bb0b2cd4e7629636f046e3d88da39e7dd56cfba76b5e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_920275527db14c13d1bb0b2cd4e7629636f046e3d88da39e7dd56cfba76b5e38->enter($__internal_920275527db14c13d1bb0b2cd4e7629636f046e3d88da39e7dd56cfba76b5e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:edita.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eed944a0553ba569cf1320e845a1f7c962b69458c467370e8f06125c822306a->leave($__internal_7eed944a0553ba569cf1320e845a1f7c962b69458c467370e8f06125c822306a_prof);

        
        $__internal_920275527db14c13d1bb0b2cd4e7629636f046e3d88da39e7dd56cfba76b5e38->leave($__internal_920275527db14c13d1bb0b2cd4e7629636f046e3d88da39e7dd56cfba76b5e38_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_f08a9a6e1e9aac958088433626b568b849a9d09dfe47b811b5b389826b2ca404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08a9a6e1e9aac958088433626b568b849a9d09dfe47b811b5b389826b2ca404->enter($__internal_f08a9a6e1e9aac958088433626b568b849a9d09dfe47b811b5b389826b2ca404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6351a938fc9d513143367229ca105462a963a02850b0255db4adeb21669261f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6351a938fc9d513143367229ca105462a963a02850b0255db4adeb21669261f2->enter($__internal_6351a938fc9d513143367229ca105462a963a02850b0255db4adeb21669261f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1 class=\"text-center\"\">Edicion de la pelicula:</h1>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "        ";
            if (($context["message"] == "Se guardaron sus cambios correctamente")) {
                // line 8
                echo "            <div class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            } else {
                // line 10
                echo "            <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            }
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    <div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-6 col-sm-4 \">
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        <p class=\"col-md-3 col-sm-6 pull-right \" style=\"margin-right:10px; margin-left:10px\"><img class=\"img-rounded\" width=\"250\" height=\"400\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute(($context["pelicula"] ?? $this->getContext($context, "pelicula")), "imagen", array()))), "html", null, true);
        echo "\"/></p>
    </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_6351a938fc9d513143367229ca105462a963a02850b0255db4adeb21669261f2->leave($__internal_6351a938fc9d513143367229ca105462a963a02850b0255db4adeb21669261f2_prof);

        
        $__internal_f08a9a6e1e9aac958088433626b568b849a9d09dfe47b811b5b389826b2ca404->leave($__internal_f08a9a6e1e9aac958088433626b568b849a9d09dfe47b811b5b389826b2ca404_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Pelicula:edita.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  86 => 17,  82 => 16,  77 => 13,  71 => 12,  65 => 10,  59 => 8,  56 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 1,);
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
    <h1 class=\"text-center\"\">Edicion de la pelicula:</h1>
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
            {{form_end(form)}}
        </div>
        <p class=\"col-md-3 col-sm-6 pull-right \" style=\"margin-right:10px; margin-left:10px\"><img class=\"img-rounded\" width=\"250\" height=\"400\" src=\"{{ asset(\"uploads/\"~pelicula.imagen)}}\"/></p>
    </div>
    </div>
    <div class=\"clearfix\">
{% endblock %}", "CineBundle:Pelicula:edita.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Pelicula/edita.html.twig");
    }
}
