<?php

/* CineBundle:Pelicopia:index.html.twig */
class __TwigTemplate_16129d5620df1ee27e23c1afd4d8f12546e6b07e05a2994c3a9425d8858e62c4 extends Twig_Template
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
        $__internal_cf897c52d0de61a5fce774d5b2f1404a722e2c902775d6aa963cdcaf54de5498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf897c52d0de61a5fce774d5b2f1404a722e2c902775d6aa963cdcaf54de5498->enter($__internal_cf897c52d0de61a5fce774d5b2f1404a722e2c902775d6aa963cdcaf54de5498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicopia:index.html.twig"));

        $__internal_fd5580674e2c1ee85e9d41a6749b37773768a1b0993b4763f6398f6a708cc562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5580674e2c1ee85e9d41a6749b37773768a1b0993b4763f6398f6a708cc562->enter($__internal_fd5580674e2c1ee85e9d41a6749b37773768a1b0993b4763f6398f6a708cc562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicopia:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf897c52d0de61a5fce774d5b2f1404a722e2c902775d6aa963cdcaf54de5498->leave($__internal_cf897c52d0de61a5fce774d5b2f1404a722e2c902775d6aa963cdcaf54de5498_prof);

        
        $__internal_fd5580674e2c1ee85e9d41a6749b37773768a1b0993b4763f6398f6a708cc562->leave($__internal_fd5580674e2c1ee85e9d41a6749b37773768a1b0993b4763f6398f6a708cc562_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ac06352838a01c454c5ed94a6a91fc6f79ca350f4b2248f83d0f532b6bc862b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac06352838a01c454c5ed94a6a91fc6f79ca350f4b2248f83d0f532b6bc862b->enter($__internal_0ac06352838a01c454c5ed94a6a91fc6f79ca350f4b2248f83d0f532b6bc862b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_85254f78048a32be12ee67a09ef2e9f0bfbf69e818c934553e0dc3c434faee19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85254f78048a32be12ee67a09ef2e9f0bfbf69e818c934553e0dc3c434faee19->enter($__internal_85254f78048a32be12ee67a09ef2e9f0bfbf69e818c934553e0dc3c434faee19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css\">
    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js\"></script>
";
        
        $__internal_85254f78048a32be12ee67a09ef2e9f0bfbf69e818c934553e0dc3c434faee19->leave($__internal_85254f78048a32be12ee67a09ef2e9f0bfbf69e818c934553e0dc3c434faee19_prof);

        
        $__internal_0ac06352838a01c454c5ed94a6a91fc6f79ca350f4b2248f83d0f532b6bc862b->leave($__internal_0ac06352838a01c454c5ed94a6a91fc6f79ca350f4b2248f83d0f532b6bc862b_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_7f40c140dee1b6ca47d6670d83b2bf2ea3d06c0b772fbdcabafa597115b0693b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f40c140dee1b6ca47d6670d83b2bf2ea3d06c0b772fbdcabafa597115b0693b->enter($__internal_7f40c140dee1b6ca47d6670d83b2bf2ea3d06c0b772fbdcabafa597115b0693b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1cf885ae1db522845187c20b7f604172deebc318f1ce8978897ec910e93aa974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf885ae1db522845187c20b7f604172deebc318f1ce8978897ec910e93aa974->enter($__internal_1cf885ae1db522845187c20b7f604172deebc318f1ce8978897ec910e93aa974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
    <h3 class=\"light grey-text text-lighten-3\">Listado de copias de peliculas:</h3>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pelicopias"]) ? $context["pelicopias"] : $this->getContext($context, "pelicopias")));
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["pelicula"], "idPeli", array()), "fechaEstreno", array()), "Y-m-d"), "html", null, true);
            echo "</h5>
                        <h5 class=\"light grey-text text-lighten-3\">Duracion: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pelicula"], "idPeli", array()), "duracion", array()), "html", null, true);
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
                    <div class=\"right\">
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pelicopia_edita", array("id" => $this->getAttribute($context["pelicula"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-floating btn-large waves-effect waves-light green\"><i class=\"material-icons\">mode_edit</i></a>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pelicopia_elimina", array("id" => $this->getAttribute($context["pelicula"], "id", array()))), "html", null, true);
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
        // line 41
        echo "

</div>


<div class=\"clearfix\">
";
        
        $__internal_1cf885ae1db522845187c20b7f604172deebc318f1ce8978897ec910e93aa974->leave($__internal_1cf885ae1db522845187c20b7f604172deebc318f1ce8978897ec910e93aa974_prof);

        
        $__internal_7f40c140dee1b6ca47d6670d83b2bf2ea3d06c0b772fbdcabafa597115b0693b->leave($__internal_7f40c140dee1b6ca47d6670d83b2bf2ea3d06c0b772fbdcabafa597115b0693b_prof);

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
        return array (  158 => 41,  146 => 35,  142 => 34,  136 => 31,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  115 => 25,  109 => 22,  103 => 19,  99 => 17,  95 => 16,  90 => 13,  81 => 11,  76 => 10,  67 => 9,  50 => 3,  41 => 2,  11 => 1,);
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
                        <h5 class=\"light grey-text text-lighten-3\">Fecha de estreno: {{ pelicula.idPeli.fechaEstreno|date('Y-m-d') }}</h5>
                        <h5 class=\"light grey-text text-lighten-3\">Duracion: {{ pelicula.idPeli.duracion}}</h5>
                        <h5 class=\"light grey-text text-lighten-3\">Genero: {{ pelicula.idPeli.idGenero.nombre }}</h5>
                        <h5 class=\"light grey-text text-lighten-3\">Formato: {{ pelicula.idFormato.nombre }}</h5>
                        <h5 class=\"light grey-text text-lighten-3\">Idioma: {{ pelicula.idioma.nombre }}</h5>
                    </div>
                    <div class=\"right\">
                        <a href=\"{{path(\"pelicopia_edita\", {\"id\":pelicula.id})}}\" class=\"btn-floating btn-large waves-effect waves-light green\"><i class=\"material-icons\">mode_edit</i></a>
                        <a href=\"{{path(\"pelicopia_elimina\", {\"id\":pelicula.id})}}\"  class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">delete</i></a>
                    </div>
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
