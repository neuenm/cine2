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
        $__internal_bf8824bdadd9bb854a2c4f72a1431c48b0ce47b4fa0db8e3fb03b8a6706f54c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf8824bdadd9bb854a2c4f72a1431c48b0ce47b4fa0db8e3fb03b8a6706f54c2->enter($__internal_bf8824bdadd9bb854a2c4f72a1431c48b0ce47b4fa0db8e3fb03b8a6706f54c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicopia:index.html.twig"));

        $__internal_4a7c63de6c79b81f08f21856a4ba6f4b388dfb598ed7feb40b7209bd58799177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7c63de6c79b81f08f21856a4ba6f4b388dfb598ed7feb40b7209bd58799177->enter($__internal_4a7c63de6c79b81f08f21856a4ba6f4b388dfb598ed7feb40b7209bd58799177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicopia:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf8824bdadd9bb854a2c4f72a1431c48b0ce47b4fa0db8e3fb03b8a6706f54c2->leave($__internal_bf8824bdadd9bb854a2c4f72a1431c48b0ce47b4fa0db8e3fb03b8a6706f54c2_prof);

        
        $__internal_4a7c63de6c79b81f08f21856a4ba6f4b388dfb598ed7feb40b7209bd58799177->leave($__internal_4a7c63de6c79b81f08f21856a4ba6f4b388dfb598ed7feb40b7209bd58799177_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77da2d379a09cc08e60d1cb188ca6c7b7c1356e1ace347321c7abe26e333547f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77da2d379a09cc08e60d1cb188ca6c7b7c1356e1ace347321c7abe26e333547f->enter($__internal_77da2d379a09cc08e60d1cb188ca6c7b7c1356e1ace347321c7abe26e333547f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9b1d438504725fb4167749bc803829d6a5e59179d9eb621414b00ef3fd77264f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1d438504725fb4167749bc803829d6a5e59179d9eb621414b00ef3fd77264f->enter($__internal_9b1d438504725fb4167749bc803829d6a5e59179d9eb621414b00ef3fd77264f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css\">
    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js\"></script>
";
        
        $__internal_9b1d438504725fb4167749bc803829d6a5e59179d9eb621414b00ef3fd77264f->leave($__internal_9b1d438504725fb4167749bc803829d6a5e59179d9eb621414b00ef3fd77264f_prof);

        
        $__internal_77da2d379a09cc08e60d1cb188ca6c7b7c1356e1ace347321c7abe26e333547f->leave($__internal_77da2d379a09cc08e60d1cb188ca6c7b7c1356e1ace347321c7abe26e333547f_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_986d0d19c487aeae2a235c2f38e71e09de637a8afda9d117a54c15bb06ba47be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_986d0d19c487aeae2a235c2f38e71e09de637a8afda9d117a54c15bb06ba47be->enter($__internal_986d0d19c487aeae2a235c2f38e71e09de637a8afda9d117a54c15bb06ba47be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e7f70bcfa1dbe8040191a4868093e983c614a465470e8be52da4f2ff19f882be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f70bcfa1dbe8040191a4868093e983c614a465470e8be52da4f2ff19f882be->enter($__internal_e7f70bcfa1dbe8040191a4868093e983c614a465470e8be52da4f2ff19f882be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "        <script>Materialize.toast(\"";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\", 6000, 'rounded')</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "<div class=\"row\">
    <h3 class=\"light grey-text text-lighten-3\">Listado de copias de peliculas:</h3>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pelicopias"] ?? $this->getContext($context, "pelicopias")));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 17
            echo "     <ul class=\"collapsible popout col s12 m10 lighten-3\" data-collapsible=\"expandable\">
            <li>
                <div class=\"collapsible-header grey lighten-1\"><i class=\"material-icons\">theaters</i><h5> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pelicula"], "idPeli", array()), "nombre", array()), "html", null, true);
            echo "</h5></div>
                <div class=\"collapsible-body\">
                    <div class=\"card-panel grey grey lighten-3\">
                        <span class=\"text-darken-2 \"><b>Sinopsis:</b> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pelicula"], "idPeli", array()), "sinopsis", array()), "html", null, true);
            echo "</span>
                    </div>

                    <img class=\"img-rounded left \" width=\"200\"  height=\"250\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute($context["pelicula"], "idPeli", array()), "imagen", array()))), "html", null, true);
            echo "\"/>
                    <div>
                        <h5 class=\"light grey-text text-lighten-3\">Fecha de estreno: ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["pelicula"], "idPeli", array()), "fechaEstreno", array()), "d-m-y"), "html", null, true);
            echo "</h5>
                        <h5 class=\"light grey-text text-lighten-3\">Duracion: ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["pelicula"], "idPeli", array()), "duracion", array()), "m-s"), "html", null, true);
            echo "</h5>
                        <h5 class=\"light grey-text text-lighten-3\">Genero: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["pelicula"], "idPeli", array()), "idGenero", array()), "nombre", array()), "html", null, true);
            echo "</h5>
                        <h5 class=\"light grey-text text-lighten-3\">Formato: ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pelicula"], "idFormato", array()), "nombre", array()), "html", null, true);
            echo "</h5>
                        <h5 class=\"light grey-text text-lighten-3\">Idioma: ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pelicula"], "idioma", array()), "nombre", array()), "html", null, true);
            echo "</h5>
                    </div>
                    ";
            // line 33
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                // line 34
                echo "                        <div class=\"right\">
                            <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pelicopia_edita", array("id" => $this->getAttribute($context["pelicula"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-floating btn-large waves-effect waves-light green\"><i class=\"material-icons\">mode_edit</i></a>
                            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pelicopia_elimina", array("id" => $this->getAttribute($context["pelicula"], "id", array()))), "html", null, true);
                echo "\"  class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">delete</i></a>
                        </div>
                    ";
            }
            // line 39
            echo "                </div>
            </li>
    </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
</div>


<div class=\"clearfix\">
";
        
        $__internal_e7f70bcfa1dbe8040191a4868093e983c614a465470e8be52da4f2ff19f882be->leave($__internal_e7f70bcfa1dbe8040191a4868093e983c614a465470e8be52da4f2ff19f882be_prof);

        
        $__internal_986d0d19c487aeae2a235c2f38e71e09de637a8afda9d117a54c15bb06ba47be->leave($__internal_986d0d19c487aeae2a235c2f38e71e09de637a8afda9d117a54c15bb06ba47be_prof);

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
        return array (  165 => 43,  156 => 39,  150 => 36,  146 => 35,  143 => 34,  141 => 33,  136 => 31,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  115 => 25,  109 => 22,  103 => 19,  99 => 17,  95 => 16,  90 => 13,  81 => 11,  76 => 10,  67 => 9,  50 => 3,  41 => 2,  11 => 1,);
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
