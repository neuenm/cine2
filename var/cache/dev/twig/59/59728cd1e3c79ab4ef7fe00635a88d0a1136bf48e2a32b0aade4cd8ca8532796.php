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
        $__internal_79738e8072144f4691766c79080661bb2014be97699e2a629faac334e526be91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79738e8072144f4691766c79080661bb2014be97699e2a629faac334e526be91->enter($__internal_79738e8072144f4691766c79080661bb2014be97699e2a629faac334e526be91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:nueva.html.twig"));

        $__internal_22f8a7bbe05106b98ddde9ed626d5c50f0e7f91b7ce9cb7ff334f55086cb38c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f8a7bbe05106b98ddde9ed626d5c50f0e7f91b7ce9cb7ff334f55086cb38c7->enter($__internal_22f8a7bbe05106b98ddde9ed626d5c50f0e7f91b7ce9cb7ff334f55086cb38c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79738e8072144f4691766c79080661bb2014be97699e2a629faac334e526be91->leave($__internal_79738e8072144f4691766c79080661bb2014be97699e2a629faac334e526be91_prof);

        
        $__internal_22f8a7bbe05106b98ddde9ed626d5c50f0e7f91b7ce9cb7ff334f55086cb38c7->leave($__internal_22f8a7bbe05106b98ddde9ed626d5c50f0e7f91b7ce9cb7ff334f55086cb38c7_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ca042b6be4461846377002abe056b909d4c970b17ea9859d9994b327ad837c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca042b6be4461846377002abe056b909d4c970b17ea9859d9994b327ad837c5e->enter($__internal_ca042b6be4461846377002abe056b909d4c970b17ea9859d9994b327ad837c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_52b508c6cde0722e0d9fc3d4094ccc72cd260ba46f3b7555ce0c5d7b2ca5350a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b508c6cde0722e0d9fc3d4094ccc72cd260ba46f3b7555ce0c5d7b2ca5350a->enter($__internal_52b508c6cde0722e0d9fc3d4094ccc72cd260ba46f3b7555ce0c5d7b2ca5350a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <h3 class=\"text-center light grey-text text-lighten-3\">Nueva Pelicula:</h3>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("encrtype" => "multipart/form-data"));
        echo "
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"clearfix\">
    </div>
";
        
        $__internal_52b508c6cde0722e0d9fc3d4094ccc72cd260ba46f3b7555ce0c5d7b2ca5350a->leave($__internal_52b508c6cde0722e0d9fc3d4094ccc72cd260ba46f3b7555ce0c5d7b2ca5350a_prof);

        
        $__internal_ca042b6be4461846377002abe056b909d4c970b17ea9859d9994b327ad837c5e->leave($__internal_ca042b6be4461846377002abe056b909d4c970b17ea9859d9994b327ad837c5e_prof);

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
        return array (  74 => 12,  70 => 11,  66 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
        <h3 class=\"text-center light grey-text text-lighten-3\">Nueva Pelicula:</h3>
        {% for message in app.session.flashbag().get('status') %}
            <script>Materialize.toast(\"{{ message }}\", 6000, 'rounded')</script>
        {% endfor %}
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
                {{form_start(form,{\"encrtype\":\"multipart/form-data\"})}}
                {{form_end(form)}}
            </div>
        </div>
        <div class=\"clearfix\">
    </div>
{% endblock %}", "CineBundle:Pelicula:nueva.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Pelicula/nueva.html.twig");
    }
}
