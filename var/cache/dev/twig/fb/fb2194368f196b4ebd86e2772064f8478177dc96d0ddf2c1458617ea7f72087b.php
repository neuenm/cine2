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
        $__internal_60d4a977d53dd3f0b77ab775df7b005e86767ab258bcbbfe30401e73727d6338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d4a977d53dd3f0b77ab775df7b005e86767ab258bcbbfe30401e73727d6338->enter($__internal_60d4a977d53dd3f0b77ab775df7b005e86767ab258bcbbfe30401e73727d6338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:nueva.html.twig"));

        $__internal_a494e1acd520747fcd853fb6fa9f036a0b9673b3541525e618e07bc59bd89b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a494e1acd520747fcd853fb6fa9f036a0b9673b3541525e618e07bc59bd89b95->enter($__internal_a494e1acd520747fcd853fb6fa9f036a0b9673b3541525e618e07bc59bd89b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60d4a977d53dd3f0b77ab775df7b005e86767ab258bcbbfe30401e73727d6338->leave($__internal_60d4a977d53dd3f0b77ab775df7b005e86767ab258bcbbfe30401e73727d6338_prof);

        
        $__internal_a494e1acd520747fcd853fb6fa9f036a0b9673b3541525e618e07bc59bd89b95->leave($__internal_a494e1acd520747fcd853fb6fa9f036a0b9673b3541525e618e07bc59bd89b95_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_475b3e963f45e067b3c126a0c502b991ade0642af6cebdec49a879dbf58df729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475b3e963f45e067b3c126a0c502b991ade0642af6cebdec49a879dbf58df729->enter($__internal_475b3e963f45e067b3c126a0c502b991ade0642af6cebdec49a879dbf58df729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7ba619ceb94f553e9346ef221500ed9da6f8bbd470a22034d57a76eb572f76d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba619ceb94f553e9346ef221500ed9da6f8bbd470a22034d57a76eb572f76d5->enter($__internal_7ba619ceb94f553e9346ef221500ed9da6f8bbd470a22034d57a76eb572f76d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_7ba619ceb94f553e9346ef221500ed9da6f8bbd470a22034d57a76eb572f76d5->leave($__internal_7ba619ceb94f553e9346ef221500ed9da6f8bbd470a22034d57a76eb572f76d5_prof);

        
        $__internal_475b3e963f45e067b3c126a0c502b991ade0642af6cebdec49a879dbf58df729->leave($__internal_475b3e963f45e067b3c126a0c502b991ade0642af6cebdec49a879dbf58df729_prof);

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
