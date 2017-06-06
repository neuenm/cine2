<?php

/* CineBundle:Pelicula:index.html.twig */
class __TwigTemplate_9931416acfe37927d7cbfe46395594a04fbdd7b30e43b97a119df965b76c15b5 extends Twig_Template
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
        $__internal_5990957cb92483e6abe28d3533057b1bb82c8edaf4f3d921c055a2804dd3e1c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5990957cb92483e6abe28d3533057b1bb82c8edaf4f3d921c055a2804dd3e1c3->enter($__internal_5990957cb92483e6abe28d3533057b1bb82c8edaf4f3d921c055a2804dd3e1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:index.html.twig"));

        $__internal_7b14bdf9b375da98d8e0f1d5871d1097c89991b00db6743299de06ae1ad3fdcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b14bdf9b375da98d8e0f1d5871d1097c89991b00db6743299de06ae1ad3fdcc->enter($__internal_7b14bdf9b375da98d8e0f1d5871d1097c89991b00db6743299de06ae1ad3fdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5990957cb92483e6abe28d3533057b1bb82c8edaf4f3d921c055a2804dd3e1c3->leave($__internal_5990957cb92483e6abe28d3533057b1bb82c8edaf4f3d921c055a2804dd3e1c3_prof);

        
        $__internal_7b14bdf9b375da98d8e0f1d5871d1097c89991b00db6743299de06ae1ad3fdcc->leave($__internal_7b14bdf9b375da98d8e0f1d5871d1097c89991b00db6743299de06ae1ad3fdcc_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a2885d4a9ecb464c199b6c2a3266668aa147418e06d378b71d88d4d6b11f364f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2885d4a9ecb464c199b6c2a3266668aa147418e06d378b71d88d4d6b11f364f->enter($__internal_a2885d4a9ecb464c199b6c2a3266668aa147418e06d378b71d88d4d6b11f364f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b32b1f3840142ff8c58e91a6e7ca429209dd28a16b6b0affa65d508759ffc922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32b1f3840142ff8c58e91a6e7ca429209dd28a16b6b0affa65d508759ffc922->enter($__internal_b32b1f3840142ff8c58e91a6e7ca429209dd28a16b6b0affa65d508759ffc922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css\">
    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js\"></script>
";
        
        $__internal_b32b1f3840142ff8c58e91a6e7ca429209dd28a16b6b0affa65d508759ffc922->leave($__internal_b32b1f3840142ff8c58e91a6e7ca429209dd28a16b6b0affa65d508759ffc922_prof);

        
        $__internal_a2885d4a9ecb464c199b6c2a3266668aa147418e06d378b71d88d4d6b11f364f->leave($__internal_a2885d4a9ecb464c199b6c2a3266668aa147418e06d378b71d88d4d6b11f364f_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_273e9cda55c0ee8ed0a3ffa0616d1025fad9680484b643e9dd10339baf6c3943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_273e9cda55c0ee8ed0a3ffa0616d1025fad9680484b643e9dd10339baf6c3943->enter($__internal_273e9cda55c0ee8ed0a3ffa0616d1025fad9680484b643e9dd10339baf6c3943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0b3fb39c623f0400348049a9d8de5286578ad1f7e4f15a15813b262b30e8555d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3fb39c623f0400348049a9d8de5286578ad1f7e4f15a15813b262b30e8555d->enter($__internal_0b3fb39c623f0400348049a9d8de5286578ad1f7e4f15a15813b262b30e8555d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
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
        $context['_seq'] = twig_ensure_traversable(($context["peliculas"] ?? $this->getContext($context, "peliculas")));
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
        
        $__internal_0b3fb39c623f0400348049a9d8de5286578ad1f7e4f15a15813b262b30e8555d->leave($__internal_0b3fb39c623f0400348049a9d8de5286578ad1f7e4f15a15813b262b30e8555d_prof);

        
        $__internal_273e9cda55c0ee8ed0a3ffa0616d1025fad9680484b643e9dd10339baf6c3943->leave($__internal_273e9cda55c0ee8ed0a3ffa0616d1025fad9680484b643e9dd10339baf6c3943_prof);

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
