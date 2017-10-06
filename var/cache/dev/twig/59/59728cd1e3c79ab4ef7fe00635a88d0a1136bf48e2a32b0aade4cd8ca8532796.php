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
        $__internal_c13d1119f5e7994dcd6a14075a6a6e5edb09276b36ee5c545344f7f09b01eef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c13d1119f5e7994dcd6a14075a6a6e5edb09276b36ee5c545344f7f09b01eef1->enter($__internal_c13d1119f5e7994dcd6a14075a6a6e5edb09276b36ee5c545344f7f09b01eef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:nueva.html.twig"));

        $__internal_83bc6db30571f583bb11b6558876d4e7473a79e7e4d8853c6e35b5628a4acb4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83bc6db30571f583bb11b6558876d4e7473a79e7e4d8853c6e35b5628a4acb4c->enter($__internal_83bc6db30571f583bb11b6558876d4e7473a79e7e4d8853c6e35b5628a4acb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c13d1119f5e7994dcd6a14075a6a6e5edb09276b36ee5c545344f7f09b01eef1->leave($__internal_c13d1119f5e7994dcd6a14075a6a6e5edb09276b36ee5c545344f7f09b01eef1_prof);

        
        $__internal_83bc6db30571f583bb11b6558876d4e7473a79e7e4d8853c6e35b5628a4acb4c->leave($__internal_83bc6db30571f583bb11b6558876d4e7473a79e7e4d8853c6e35b5628a4acb4c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_221a2213294ed8e0c29bf6f0606323988769af623c296195d1edef2b1a4a3ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221a2213294ed8e0c29bf6f0606323988769af623c296195d1edef2b1a4a3ed7->enter($__internal_221a2213294ed8e0c29bf6f0606323988769af623c296195d1edef2b1a4a3ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1fda7f9b3d6cdc53a6650d560805f94aeb2417137e12b73de7aaeee4f1cd1dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fda7f9b3d6cdc53a6650d560805f94aeb2417137e12b73de7aaeee4f1cd1dd4->enter($__internal_1fda7f9b3d6cdc53a6650d560805f94aeb2417137e12b73de7aaeee4f1cd1dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_1fda7f9b3d6cdc53a6650d560805f94aeb2417137e12b73de7aaeee4f1cd1dd4->leave($__internal_1fda7f9b3d6cdc53a6650d560805f94aeb2417137e12b73de7aaeee4f1cd1dd4_prof);

        
        $__internal_221a2213294ed8e0c29bf6f0606323988769af623c296195d1edef2b1a4a3ed7->leave($__internal_221a2213294ed8e0c29bf6f0606323988769af623c296195d1edef2b1a4a3ed7_prof);

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
