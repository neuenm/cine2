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
        $__internal_15166ecfdc36feb774dbde29ffcad13b77a633026ac46a6a982650e5cab3061c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15166ecfdc36feb774dbde29ffcad13b77a633026ac46a6a982650e5cab3061c->enter($__internal_15166ecfdc36feb774dbde29ffcad13b77a633026ac46a6a982650e5cab3061c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:index.html.twig"));

        $__internal_78ed42e69a6ff8df74c02784f7e2621235380b670e9bd937fe16cc49671c95c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ed42e69a6ff8df74c02784f7e2621235380b670e9bd937fe16cc49671c95c1->enter($__internal_78ed42e69a6ff8df74c02784f7e2621235380b670e9bd937fe16cc49671c95c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15166ecfdc36feb774dbde29ffcad13b77a633026ac46a6a982650e5cab3061c->leave($__internal_15166ecfdc36feb774dbde29ffcad13b77a633026ac46a6a982650e5cab3061c_prof);

        
        $__internal_78ed42e69a6ff8df74c02784f7e2621235380b670e9bd937fe16cc49671c95c1->leave($__internal_78ed42e69a6ff8df74c02784f7e2621235380b670e9bd937fe16cc49671c95c1_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0f6bcd5b16bdee917c095a154c9aa2e7f29d45b4f84c91a451805e00edfa67cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6bcd5b16bdee917c095a154c9aa2e7f29d45b4f84c91a451805e00edfa67cf->enter($__internal_0f6bcd5b16bdee917c095a154c9aa2e7f29d45b4f84c91a451805e00edfa67cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_783b42c429cd4908d59dc4b562e1f189e979c96fbaeaef5e9c463239c65d0c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783b42c429cd4908d59dc4b562e1f189e979c96fbaeaef5e9c463239c65d0c21->enter($__internal_783b42c429cd4908d59dc4b562e1f189e979c96fbaeaef5e9c463239c65d0c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css\">
    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js\"></script>
";
        
        $__internal_783b42c429cd4908d59dc4b562e1f189e979c96fbaeaef5e9c463239c65d0c21->leave($__internal_783b42c429cd4908d59dc4b562e1f189e979c96fbaeaef5e9c463239c65d0c21_prof);

        
        $__internal_0f6bcd5b16bdee917c095a154c9aa2e7f29d45b4f84c91a451805e00edfa67cf->leave($__internal_0f6bcd5b16bdee917c095a154c9aa2e7f29d45b4f84c91a451805e00edfa67cf_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_1d3f4f10bc426c70cc4a0778d2e2047b71ae877feacf1601bbb7cbd8963e4159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3f4f10bc426c70cc4a0778d2e2047b71ae877feacf1601bbb7cbd8963e4159->enter($__internal_1d3f4f10bc426c70cc4a0778d2e2047b71ae877feacf1601bbb7cbd8963e4159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_88c5a66015accc36c6158e34eac9ed0ca3bb7ac4035a84a03c3330bf7b9f98b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c5a66015accc36c6158e34eac9ed0ca3bb7ac4035a84a03c3330bf7b9f98b7->enter($__internal_88c5a66015accc36c6158e34eac9ed0ca3bb7ac4035a84a03c3330bf7b9f98b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    ";
            // line 31
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                // line 32
                echo "
                        <div class=\"right\">
                            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_peli", array("id" => $this->getAttribute($context["pelicula"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-floating btn-large waves-effect waves-light green\"><i class=\"material-icons\">mode_edit</i></a>
                            <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_peli", array("id" => $this->getAttribute($context["pelicula"], "id", array()))), "html", null, true);
                echo "\"  class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">delete</i></a>
                        </div>
                    ";
            }
            // line 38
            echo "                </div>
            </li>
    </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "

</div>


<div class=\"clearfix\">
";
        
        $__internal_88c5a66015accc36c6158e34eac9ed0ca3bb7ac4035a84a03c3330bf7b9f98b7->leave($__internal_88c5a66015accc36c6158e34eac9ed0ca3bb7ac4035a84a03c3330bf7b9f98b7_prof);

        
        $__internal_1d3f4f10bc426c70cc4a0778d2e2047b71ae877feacf1601bbb7cbd8963e4159->leave($__internal_1d3f4f10bc426c70cc4a0778d2e2047b71ae877feacf1601bbb7cbd8963e4159_prof);

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
        return array (  158 => 42,  149 => 38,  143 => 35,  139 => 34,  135 => 32,  133 => 31,  128 => 29,  124 => 28,  120 => 27,  115 => 25,  109 => 22,  103 => 19,  99 => 17,  95 => 16,  90 => 13,  81 => 11,  76 => 10,  67 => 9,  50 => 3,  41 => 2,  11 => 1,);
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
                    {%if app.user.role==\"ROLE_ADMIN\" %}

                        <div class=\"right\">
                            <a href=\"{{path(\"editar_peli\", {\"id\":pelicula.id})}}\" class=\"btn-floating btn-large waves-effect waves-light green\"><i class=\"material-icons\">mode_edit</i></a>
                            <a href=\"{{path(\"eliminar_peli\", {\"id\":pelicula.id})}}\"  class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">delete</i></a>
                        </div>
                    {% endif %}
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
