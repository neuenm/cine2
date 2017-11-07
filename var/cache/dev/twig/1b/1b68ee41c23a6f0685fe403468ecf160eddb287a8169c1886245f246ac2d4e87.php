<?php

/* CineBundle:Pelicopia:index.html.twig */
class __TwigTemplate_1af77a25e4bb86411446af65676f99af53c0f69bfe17a6ab4795a07c2dbd05f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Pelicopia:index.html.twig", 1);
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
        $__internal_fbf08649be7fbbe9da7059c3c2a0294d55afaf584ee2e978d6d607236e749aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf08649be7fbbe9da7059c3c2a0294d55afaf584ee2e978d6d607236e749aa2->enter($__internal_fbf08649be7fbbe9da7059c3c2a0294d55afaf584ee2e978d6d607236e749aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicopia:index.html.twig"));

        $__internal_6858665913e0b0137b7aceb37b6297d458380a25a3b243fe251d36cda36e255e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6858665913e0b0137b7aceb37b6297d458380a25a3b243fe251d36cda36e255e->enter($__internal_6858665913e0b0137b7aceb37b6297d458380a25a3b243fe251d36cda36e255e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicopia:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbf08649be7fbbe9da7059c3c2a0294d55afaf584ee2e978d6d607236e749aa2->leave($__internal_fbf08649be7fbbe9da7059c3c2a0294d55afaf584ee2e978d6d607236e749aa2_prof);

        
        $__internal_6858665913e0b0137b7aceb37b6297d458380a25a3b243fe251d36cda36e255e->leave($__internal_6858665913e0b0137b7aceb37b6297d458380a25a3b243fe251d36cda36e255e_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e1cf976fa6c83d270f5d3415f4a6c94b0929ecd4adafc290254cb522034dc570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1cf976fa6c83d270f5d3415f4a6c94b0929ecd4adafc290254cb522034dc570->enter($__internal_e1cf976fa6c83d270f5d3415f4a6c94b0929ecd4adafc290254cb522034dc570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7ead567a73e00d2755fac05f671591097a1ac1848391bee29211080bd6a81e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ead567a73e00d2755fac05f671591097a1ac1848391bee29211080bd6a81e23->enter($__internal_7ead567a73e00d2755fac05f671591097a1ac1848391bee29211080bd6a81e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css\">
    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js\"></script>
";
        
        $__internal_7ead567a73e00d2755fac05f671591097a1ac1848391bee29211080bd6a81e23->leave($__internal_7ead567a73e00d2755fac05f671591097a1ac1848391bee29211080bd6a81e23_prof);

        
        $__internal_e1cf976fa6c83d270f5d3415f4a6c94b0929ecd4adafc290254cb522034dc570->leave($__internal_e1cf976fa6c83d270f5d3415f4a6c94b0929ecd4adafc290254cb522034dc570_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_4627b64a498a74c0637b8639e0175cf0931421d465f16db74a3a3b8cf1d30a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4627b64a498a74c0637b8639e0175cf0931421d465f16db74a3a3b8cf1d30a77->enter($__internal_4627b64a498a74c0637b8639e0175cf0931421d465f16db74a3a3b8cf1d30a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2228b8828f29ac0866d31771c7fd98c592b30edb2eac00bd928f35d9a3f12a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2228b8828f29ac0866d31771c7fd98c592b30edb2eac00bd928f35d9a3f12a8c->enter($__internal_2228b8828f29ac0866d31771c7fd98c592b30edb2eac00bd928f35d9a3f12a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "

    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "        <script>Materialize.toast(\"";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\", 6000, 'rounded')</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    <div class=\"row\">
        <h3 class=\"light grey-text text-lighten-3\">Listado de copias de peliculas:</h3>

        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pelicopias"] ?? $this->getContext($context, "pelicopias")));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 19
            echo "         <ul class=\"collapsible popout col s12 m10 lighten-3\" data-collapsible=\"expandable\">
                <li>
                    <div class=\"collapsible-header grey lighten-1\"><i class=\"material-icons\">theaters</i><h5> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pelicula"], "idPeli", array()), "nombre", array()), "html", null, true);
            echo "</h5></div>
                    <div class=\"collapsible-body\">
                        <div class=\"card-panel grey grey lighten-3\">
                            <span class=\"text-darken-2 \"><b>Sinopsis:</b> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pelicula"], "idPeli", array()), "sinopsis", array()), "html", null, true);
            echo "</span>
                        </div>

                        <img class=\"img-rounded left \" width=\"200\"  height=\"250\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute($context["pelicula"], "idPeli", array()), "imagen", array()))), "html", null, true);
            echo "\"/>
                        <div>
                            <h5 class=\"light grey-text text-lighten-3\">Fecha de estreno: ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["pelicula"], "idPeli", array()), "fechaEstreno", array()), "d-m-y"), "html", null, true);
            echo "</h5>
                            <h5 class=\"light grey-text text-lighten-3\">Duracion: ";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["pelicula"], "idPeli", array()), "duracion", array()), "m-s"), "html", null, true);
            echo "</h5>
                            <h5 class=\"light grey-text text-lighten-3\">Genero: ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["pelicula"], "idPeli", array()), "idGenero", array()), "nombre", array()), "html", null, true);
            echo "</h5>
                            <h5 class=\"light grey-text text-lighten-3\">Formato: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pelicula"], "idFormato", array()), "nombre", array()), "html", null, true);
            echo "</h5>
                            <h5 class=\"light grey-text text-lighten-3\">Idioma: ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pelicula"], "idioma", array()), "nombre", array()), "html", null, true);
            echo "</h5>
                        </div>
                        ";
            // line 35
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                // line 36
                echo "                            <div class=\"right\">
                                <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pelicopia_edita", array("id" => $this->getAttribute($context["pelicula"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-floating btn-large waves-effect waves-light green\"><i class=\"material-icons\">mode_edit</i></a>
                                <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pelicopia_elimina", array("id" => $this->getAttribute($context["pelicula"], "id", array()))), "html", null, true);
                echo "\"  class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">delete</i></a>
                            </div>
                        ";
            }
            // line 41
            echo "                    </div>
                </li>
        </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
    </div>


    <div class=\"clearfix\">
";
        
        $__internal_2228b8828f29ac0866d31771c7fd98c592b30edb2eac00bd928f35d9a3f12a8c->leave($__internal_2228b8828f29ac0866d31771c7fd98c592b30edb2eac00bd928f35d9a3f12a8c_prof);

        
        $__internal_4627b64a498a74c0637b8639e0175cf0931421d465f16db74a3a3b8cf1d30a77->leave($__internal_4627b64a498a74c0637b8639e0175cf0931421d465f16db74a3a3b8cf1d30a77_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Pelicopia:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 45,  159 => 41,  153 => 38,  149 => 37,  146 => 36,  144 => 35,  139 => 33,  135 => 32,  131 => 31,  127 => 30,  123 => 29,  118 => 27,  112 => 24,  106 => 21,  102 => 19,  98 => 18,  93 => 15,  84 => 13,  80 => 12,  76 => 10,  67 => 9,  50 => 3,  41 => 2,  11 => 1,);
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
        <script>Materialize.toast(\"{{ message }}\", 6000, 'rounded')</script>
    {% endfor %}
    <div class=\"row\">
        <h3 class=\"light grey-text text-lighten-3\">Listado de copias de peliculas:</h3>

        {% for pelicula in pelicopias %}
         <ul class=\"collapsible popout col s12 m10 lighten-3\" data-collapsible=\"expandable\">
                <li>
                    <div class=\"collapsible-header grey lighten-1\"><i class=\"material-icons\">theaters</i><h5> {{ pelicula.idPeli.nombre }}</h5></div>
                    <div class=\"collapsible-body\">
                        <div class=\"card-panel grey grey lighten-3\">
                            <span class=\"text-darken-2 \"><b>Sinopsis:</b> {{pelicula.idPeli.sinopsis }}</span>
                        </div>

                        <img class=\"img-rounded left \" width=\"200\"  height=\"250\" src=\"{{ asset(\"uploads/\"~pelicula.idPeli.imagen)}}\"/>
                        <div>
                            <h5 class=\"light grey-text text-lighten-3\">Fecha de estreno: {{ pelicula.idPeli.fechaEstreno|date('d-m-y') }}</h5>
                            <h5 class=\"light grey-text text-lighten-3\">Duracion: {{ pelicula.idPeli.duracion |date('m-s')}}</h5>
                            <h5 class=\"light grey-text text-lighten-3\">Genero: {{ pelicula.idPeli.idGenero.nombre }}</h5>
                            <h5 class=\"light grey-text text-lighten-3\">Formato: {{ pelicula.idFormato.nombre }}</h5>
                            <h5 class=\"light grey-text text-lighten-3\">Idioma: {{ pelicula.idioma.nombre }}</h5>
                        </div>
                        {%if app.user.role==\"ROLE_ADMIN\" %}
                            <div class=\"right\">
                                <a href=\"{{path(\"pelicopia_edita\", {\"id\":pelicula.id})}}\" class=\"btn-floating btn-large waves-effect waves-light green\"><i class=\"material-icons\">mode_edit</i></a>
                                <a href=\"{{path(\"pelicopia_elimina\", {\"id\":pelicula.id})}}\"  class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">delete</i></a>
                            </div>
                        {% endif %}
                    </div>
                </li>
        </ul>
        {% endfor %}

    </div>


    <div class=\"clearfix\">
{% endblock %}
", "CineBundle:Pelicopia:index.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Pelicopia/index.html.twig");
    }
}
