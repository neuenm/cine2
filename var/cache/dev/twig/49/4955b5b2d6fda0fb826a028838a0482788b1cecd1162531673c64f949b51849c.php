<?php

/* CineBundle:Pelicula:edita.html.twig */
class __TwigTemplate_e27f01c49d7e4a3d64b026f6b952c3deec3d73dd0e2ac560b8caec862e84d638 extends Twig_Template
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
        $__internal_fe91f5cd16d880466241af63a95a31cc474a6bed8d149ab57395dd8c010e4b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe91f5cd16d880466241af63a95a31cc474a6bed8d149ab57395dd8c010e4b69->enter($__internal_fe91f5cd16d880466241af63a95a31cc474a6bed8d149ab57395dd8c010e4b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:edita.html.twig"));

        $__internal_fdc0a28d8c9cd39cd0396501b58543c230498bdc261b5357f17efbf5f91840d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc0a28d8c9cd39cd0396501b58543c230498bdc261b5357f17efbf5f91840d5->enter($__internal_fdc0a28d8c9cd39cd0396501b58543c230498bdc261b5357f17efbf5f91840d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:edita.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe91f5cd16d880466241af63a95a31cc474a6bed8d149ab57395dd8c010e4b69->leave($__internal_fe91f5cd16d880466241af63a95a31cc474a6bed8d149ab57395dd8c010e4b69_prof);

        
        $__internal_fdc0a28d8c9cd39cd0396501b58543c230498bdc261b5357f17efbf5f91840d5->leave($__internal_fdc0a28d8c9cd39cd0396501b58543c230498bdc261b5357f17efbf5f91840d5_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_fe25767da5735ead330670ccee4c8987f4fadfbb0fe6e7512622453b036f69cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe25767da5735ead330670ccee4c8987f4fadfbb0fe6e7512622453b036f69cc->enter($__internal_fe25767da5735ead330670ccee4c8987f4fadfbb0fe6e7512622453b036f69cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ab4217717204aab51eabf416db86525f472c9be71dc7639f8d1ee13bc5c4917c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4217717204aab51eabf416db86525f472c9be71dc7639f8d1ee13bc5c4917c->enter($__internal_ab4217717204aab51eabf416db86525f472c9be71dc7639f8d1ee13bc5c4917c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1 class=\"text-center\"\">Edicion de la pelicula:</h1>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        <p class=\"col-md-3 col-sm-6 pull-right \" style=\"margin-right:10px; margin-left:10px\"><img class=\"img-rounded\" width=\"250\" height=\"400\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["pelicula"]) ? $context["pelicula"] : $this->getContext($context, "pelicula")), "imagen", array()))), "html", null, true);
        echo "\"/></p>
    </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_ab4217717204aab51eabf416db86525f472c9be71dc7639f8d1ee13bc5c4917c->leave($__internal_ab4217717204aab51eabf416db86525f472c9be71dc7639f8d1ee13bc5c4917c_prof);

        
        $__internal_fe25767da5735ead330670ccee4c8987f4fadfbb0fe6e7512622453b036f69cc->leave($__internal_fe25767da5735ead330670ccee4c8987f4fadfbb0fe6e7512622453b036f69cc_prof);

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
