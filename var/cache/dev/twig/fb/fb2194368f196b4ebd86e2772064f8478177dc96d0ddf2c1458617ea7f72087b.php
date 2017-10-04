<?php

/* CineBundle:Funcion:nueva.html.twig */
class __TwigTemplate_23d9546afc239cee5fd422017524a27f9b040e54ef93814edba9481e427b42e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Funcion:nueva.html.twig", 1);
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
        $__internal_83422fb4011b1252a7eb0aadeffc281d9558f65417505443740b52792088bb27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83422fb4011b1252a7eb0aadeffc281d9558f65417505443740b52792088bb27->enter($__internal_83422fb4011b1252a7eb0aadeffc281d9558f65417505443740b52792088bb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:nueva.html.twig"));

        $__internal_ebd84cd8a578df0615fb576f731c34e14656207d606800e652e2eff186fdf3ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd84cd8a578df0615fb576f731c34e14656207d606800e652e2eff186fdf3ac->enter($__internal_ebd84cd8a578df0615fb576f731c34e14656207d606800e652e2eff186fdf3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83422fb4011b1252a7eb0aadeffc281d9558f65417505443740b52792088bb27->leave($__internal_83422fb4011b1252a7eb0aadeffc281d9558f65417505443740b52792088bb27_prof);

        
        $__internal_ebd84cd8a578df0615fb576f731c34e14656207d606800e652e2eff186fdf3ac->leave($__internal_ebd84cd8a578df0615fb576f731c34e14656207d606800e652e2eff186fdf3ac_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_94421abb57f4fa5163b015fc006d1fea051779e4e4830223ef752a0478b01b6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94421abb57f4fa5163b015fc006d1fea051779e4e4830223ef752a0478b01b6f->enter($__internal_94421abb57f4fa5163b015fc006d1fea051779e4e4830223ef752a0478b01b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7f2ce2ea5fe4d98bd365a106043abdf988846b5fd54514047a80f12bc5c08ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2ce2ea5fe4d98bd365a106043abdf988846b5fd54514047a80f12bc5c08ef7->enter($__internal_7f2ce2ea5fe4d98bd365a106043abdf988846b5fd54514047a80f12bc5c08ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h3 class=\"light grey-text text-lighten-3\">Nueva Funcion:</h3>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "        ";
            if (($context["message"] == "Pelicula agregada correctamente")) {
                // line 7
                echo "            <div class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            } else {
                // line 9
                echo "            <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            }
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_7f2ce2ea5fe4d98bd365a106043abdf988846b5fd54514047a80f12bc5c08ef7->leave($__internal_7f2ce2ea5fe4d98bd365a106043abdf988846b5fd54514047a80f12bc5c08ef7_prof);

        
        $__internal_94421abb57f4fa5163b015fc006d1fea051779e4e4830223ef752a0478b01b6f->leave($__internal_94421abb57f4fa5163b015fc006d1fea051779e4e4830223ef752a0478b01b6f_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Funcion:nueva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  81 => 14,  77 => 12,  71 => 11,  65 => 9,  59 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h3 class=\"light grey-text text-lighten-3\">Nueva Funcion:</h3>
    {% for message in app.session.flashbag().get('status') %}
        {% if message== \"Pelicula agregada correctamente\" %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {%else%}
            <div class=\"alert alert-danger\">{{ message }}</div>
        {% endif %}
    {% endfor %}
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
            {{form_start(form)}}
            {{form_end(form)}}
        </div>
    </div>
    <div class=\"clearfix\">
{% endblock %}", "CineBundle:Funcion:nueva.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Funcion/nueva.html.twig");
    }
}
