<?php

/* CineBundle:Pelicula:index.html.twig */
class __TwigTemplate_223684fe5a56d3b6b2ce43937506d92da0678299707d8f1df9674e8c7171c1f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Pelicula:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CineBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e28f02309a68160b8a9d55b4e500396dbd86a116abfc0e059e5e1716871f67b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28f02309a68160b8a9d55b4e500396dbd86a116abfc0e059e5e1716871f67b4->enter($__internal_e28f02309a68160b8a9d55b4e500396dbd86a116abfc0e059e5e1716871f67b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:index.html.twig"));

        $__internal_e5eb91b9ea44f942730ee528ab55d0b2de31e19c1de8e78c6272a54a47ea8d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5eb91b9ea44f942730ee528ab55d0b2de31e19c1de8e78c6272a54a47ea8d86->enter($__internal_e5eb91b9ea44f942730ee528ab55d0b2de31e19c1de8e78c6272a54a47ea8d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e28f02309a68160b8a9d55b4e500396dbd86a116abfc0e059e5e1716871f67b4->leave($__internal_e28f02309a68160b8a9d55b4e500396dbd86a116abfc0e059e5e1716871f67b4_prof);

        
        $__internal_e5eb91b9ea44f942730ee528ab55d0b2de31e19c1de8e78c6272a54a47ea8d86->leave($__internal_e5eb91b9ea44f942730ee528ab55d0b2de31e19c1de8e78c6272a54a47ea8d86_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ebb94c4dcc9f7674968ea56c3006bd6b2df5d3966d33dde2992fa6e1c8bc6bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ebb94c4dcc9f7674968ea56c3006bd6b2df5d3966d33dde2992fa6e1c8bc6bb->enter($__internal_9ebb94c4dcc9f7674968ea56c3006bd6b2df5d3966d33dde2992fa6e1c8bc6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2a9e0b9bdb26e6cf0953687108600f2bfdff03f08090fe427f7ab45aa08e9cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9e0b9bdb26e6cf0953687108600f2bfdff03f08090fe427f7ab45aa08e9cc1->enter($__internal_2a9e0b9bdb26e6cf0953687108600f2bfdff03f08090fe427f7ab45aa08e9cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css\">
    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js\"></script>
";
        
        $__internal_2a9e0b9bdb26e6cf0953687108600f2bfdff03f08090fe427f7ab45aa08e9cc1->leave($__internal_2a9e0b9bdb26e6cf0953687108600f2bfdff03f08090fe427f7ab45aa08e9cc1_prof);

        
        $__internal_9ebb94c4dcc9f7674968ea56c3006bd6b2df5d3966d33dde2992fa6e1c8bc6bb->leave($__internal_9ebb94c4dcc9f7674968ea56c3006bd6b2df5d3966d33dde2992fa6e1c8bc6bb_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_7d1bd0b5b4a1ae77936a1273c17fda519b7b250f71025e33ea50d0b12470274b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1bd0b5b4a1ae77936a1273c17fda519b7b250f71025e33ea50d0b12470274b->enter($__internal_7d1bd0b5b4a1ae77936a1273c17fda519b7b250f71025e33ea50d0b12470274b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_897a5e438257358ddd5a80dfdc555abf835ad0c7d26e72f19b6618c5482bbd83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897a5e438257358ddd5a80dfdc555abf835ad0c7d26e72f19b6618c5482bbd83->enter($__internal_897a5e438257358ddd5a80dfdc555abf835ad0c7d26e72f19b6618c5482bbd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "<div class=\"row\">
    <h3 class=\"light grey-text text-lighten-3\">Listado de peliculas:</h3>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peliculas"]) ? $context["peliculas"] : $this->getContext($context, "peliculas")));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 17
            echo "     <ul class=\"collapsible popout col s12 m10 lighten-3\" data-collapsible=\"expandable\">
            <li>
                <div class=\"collapsible-header grey lighten-1\"><i class=\"material-icons\">theaters</i><h5> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "nombre", array()), "html", null, true);
            echo "</h5></div>
                <div class=\"collapsible-body\">
                    <div class=\"card-panel grey grey lighten-3\">
                        <span class=\"text-darken-2 \"><b>Sinopsis:</b> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "sinopsis", array()), "html", null, true);
            echo "</span>
                    </div>

                    <img class=\"img-rounded left \" width=\"200\"  height=\"250\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["pelicula"], "imagen", array()))), "html", null, true);
            echo "\"/>
                    <div>
                        <h5 class=\"light grey-text text-lighten-3\">Fecha de estreno: ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fechaEstreno", array()), "d-m-Y"), "html", null, true);
            echo "</h5>
                        <h5 class=\"light grey-text text-lighten-3\">Duracion: ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "duracion", array()), "h:m"), "html", null, true);
            echo "</h5>
                        <h5 class=\"light grey-text text-lighten-3\">Genero: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pelicula"], "idGenero", array()), "nombre", array()), "html", null, true);
            echo "</h5>
                    </div>
                    <div class=\"right\">
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_peli", array("id" => $this->getAttribute($context["pelicula"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-floating btn-large waves-effect waves-light green\"><i class=\"material-icons\">mode_edit</i></a>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_peli", array("id" => $this->getAttribute($context["pelicula"], "id", array()))), "html", null, true);
            echo "\"  class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">delete</i></a>
                    </div>
                </div>
            </li>
    </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "

</div>


<div class=\"clearfix\">
";
        
        $__internal_897a5e438257358ddd5a80dfdc555abf835ad0c7d26e72f19b6618c5482bbd83->leave($__internal_897a5e438257358ddd5a80dfdc555abf835ad0c7d26e72f19b6618c5482bbd83_prof);

        
        $__internal_7d1bd0b5b4a1ae77936a1273c17fda519b7b250f71025e33ea50d0b12470274b->leave($__internal_7d1bd0b5b4a1ae77936a1273c17fda519b7b250f71025e33ea50d0b12470274b_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Pelicula:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 39,  138 => 33,  134 => 32,  128 => 29,  124 => 28,  120 => 27,  115 => 25,  109 => 22,  103 => 19,  99 => 17,  95 => 16,  90 => 13,  81 => 11,  76 => 10,  67 => 9,  50 => 3,  41 => 2,  11 => 1,);
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
{% block stylesheets %}
    {{ parent() }}
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css\">
    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js\"></script>
{% endblock %}
{% block content %}
    {% for message in app.session.flashbag().get('status') %}
            <div class=\"alert alert-danger\">{{ message }}</div>
    {% endfor %}
<div class=\"row\">
    <h3 class=\"light grey-text text-lighten-3\">Listado de peliculas:</h3>

    {% for pelicula in peliculas %}
     <ul class=\"collapsible popout col s12 m10 lighten-3\" data-collapsible=\"expandable\">
            <li>
                <div class=\"collapsible-header grey lighten-1\"><i class=\"material-icons\">theaters</i><h5> {{ pelicula.nombre }}</h5></div>
                <div class=\"collapsible-body\">
                    <div class=\"card-panel grey grey lighten-3\">
                        <span class=\"text-darken-2 \"><b>Sinopsis:</b> {{ pelicula.sinopsis }}</span>
                    </div>

                    <img class=\"img-rounded left \" width=\"200\"  height=\"250\" src=\"{{ asset(\"uploads/\"~pelicula.imagen)}}\"/>
                    <div>
                        <h5 class=\"light grey-text text-lighten-3\">Fecha de estreno: {{ pelicula.fechaEstreno|date('d-m-Y') }}</h5>
                        <h5 class=\"light grey-text text-lighten-3\">Duracion: {{ pelicula.duracion|date(\"h:m\")}}</h5>
                        <h5 class=\"light grey-text text-lighten-3\">Genero: {{ pelicula.idGenero.nombre }}</h5>
                    </div>
                    <div class=\"right\">
                        <a href=\"{{path(\"editar_peli\", {\"id\":pelicula.id})}}\" class=\"btn-floating btn-large waves-effect waves-light green\"><i class=\"material-icons\">mode_edit</i></a>
                        <a href=\"{{path(\"eliminar_peli\", {\"id\":pelicula.id})}}\"  class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">delete</i></a>
                    </div>
                </div>
            </li>
    </ul>
    {% endfor %}


</div>


<div class=\"clearfix\">
{% endblock %}
", "CineBundle:Pelicula:index.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Pelicula/index.html.twig");
    }
}
