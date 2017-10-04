<?php

/* CineBundle:Pelicula:nueva.html.twig */
class __TwigTemplate_d8aa6409fe3b47297077e44485e895dcf164f1f8bee8a4f839ee624e9684323c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Pelicula:nueva.html.twig", 1);
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
        $__internal_39d1378998938bb1e905e699f335f36741fa9c4a5eaca2c5c040dc466a34e5f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d1378998938bb1e905e699f335f36741fa9c4a5eaca2c5c040dc466a34e5f4->enter($__internal_39d1378998938bb1e905e699f335f36741fa9c4a5eaca2c5c040dc466a34e5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:nueva.html.twig"));

        $__internal_799d62d03167a4788ceaf5abe37a77239156f350e111859ecc2617095716a4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799d62d03167a4788ceaf5abe37a77239156f350e111859ecc2617095716a4d1->enter($__internal_799d62d03167a4788ceaf5abe37a77239156f350e111859ecc2617095716a4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39d1378998938bb1e905e699f335f36741fa9c4a5eaca2c5c040dc466a34e5f4->leave($__internal_39d1378998938bb1e905e699f335f36741fa9c4a5eaca2c5c040dc466a34e5f4_prof);

        
        $__internal_799d62d03167a4788ceaf5abe37a77239156f350e111859ecc2617095716a4d1->leave($__internal_799d62d03167a4788ceaf5abe37a77239156f350e111859ecc2617095716a4d1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d2ddd2a21a92a8591caf00bb183fae40de7585eef11dc629e22d82631dab7dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ddd2a21a92a8591caf00bb183fae40de7585eef11dc629e22d82631dab7dc1->enter($__internal_d2ddd2a21a92a8591caf00bb183fae40de7585eef11dc629e22d82631dab7dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_29fcd7bb3b7f0a947e78d515e6c800a4560728b8f394de3a6651510f25ac1377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29fcd7bb3b7f0a947e78d515e6c800a4560728b8f394de3a6651510f25ac1377->enter($__internal_29fcd7bb3b7f0a947e78d515e6c800a4560728b8f394de3a6651510f25ac1377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1 class=\"text-center\"\">Nueva Pelicula:</h1>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("encrtype" => "multipart/form-data"));
        echo "
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_29fcd7bb3b7f0a947e78d515e6c800a4560728b8f394de3a6651510f25ac1377->leave($__internal_29fcd7bb3b7f0a947e78d515e6c800a4560728b8f394de3a6651510f25ac1377_prof);

        
        $__internal_d2ddd2a21a92a8591caf00bb183fae40de7585eef11dc629e22d82631dab7dc1->leave($__internal_d2ddd2a21a92a8591caf00bb183fae40de7585eef11dc629e22d82631dab7dc1_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Pelicula:nueva.html.twig";
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
    <h1 class=\"text-center\"\">Nueva Pelicula:</h1>
    {% for message in app.session.flashbag().get('status') %}
        {% if message== \"Pelicula agregada correctamente\" %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {%else%}
            <div class=\"alert alert-danger\">{{ message }}</div>
        {% endif %}
    {% endfor %}
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
            {{form_start(form,{\"encrtype\":\"multipart/form-data\"})}}
            {{form_end(form)}}
        </div>
    </div>
    <div class=\"clearfix\">
{% endblock %}", "CineBundle:Pelicula:nueva.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Pelicula/nueva.html.twig");
    }
}
