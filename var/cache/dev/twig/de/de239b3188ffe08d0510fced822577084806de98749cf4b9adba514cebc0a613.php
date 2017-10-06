<?php

/* CineBundle::layout.html.twig */
class __TwigTemplate_006a1cc790f232ff259dbdf76f146cef47edcb5c742f7fcde61c038785f08e41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_addb1dcf43c8f2d46c145ace2074b1d1afe18ee8381b13eb7fc054d16bdc984b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addb1dcf43c8f2d46c145ace2074b1d1afe18ee8381b13eb7fc054d16bdc984b->enter($__internal_addb1dcf43c8f2d46c145ace2074b1d1afe18ee8381b13eb7fc054d16bdc984b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle::layout.html.twig"));

        $__internal_740c878f23b6e1a261fa2db3a1dd5ecb715a94dedab9515d3700c739c09ff545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740c878f23b6e1a261fa2db3a1dd5ecb715a94dedab9515d3700c739c09ff545->enter($__internal_740c878f23b6e1a261fa2db3a1dd5ecb715a94dedab9515d3700c739c09ff545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle::layout.html.twig"));

        // line 1
        echo "<html>
<head>
    <title>";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "

    <style>
        #map {
            height: 80%;
            width: 50%;
        }
        body{
            height: 80%;
            /* Center and scale the image nicely */
            background-color: black;
            background-repeat: no-repeat;
            background-size: cover;
        }/* Full height */
        footer{
            position: fixed;
            bottom: 0;
            width:100%;

        }

    </style>
</head>

<body>

<div id=\"modal1\" class=\"modal\">
    <div class=\"modal-content\">
        <h4 class=\"fuente\">Login</h4>
        <div class=\"container\">
            <ul>
                <li>
                    <div class=\"col-md-12\">
                        <form action=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
                            <label>Email:</label>
                            <input type=\"email\" id=\"username\" name=\"_username\"  class=\"form-control\" />
                            <br/>
                            <label>Contraseña:</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                            <br/>
                            <input type=\"submit\" value=\"Entrar\" class=\"btn -succes\"/>

                            <input type=\"hidden\" name=\"_target_path\" value=\"/index\" />
                        </form>
                    </div>
                </li>
                <li>
                    <b>Si aun no tenes una cuenta registrate:</b>
                    <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo "\" class=\"right btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">add</i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<ul id=\"dropdown2\" class=\"dropdown-content\">
    <li >
        <ul class=\"dropdown-menu\">
            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Cines\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_cine");
        echo "\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_cine");
        echo "\">Listar </a></li>
                </ul>
            </li>
            <li class=\"divider\"></li>

            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Funciones\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("funcion_nueva");
        echo "\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("funcion_index");
        echo "\">Listar</a></li>

                </ul>
            </li>
            <li class=\"divider\"></li>

            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Peliculas\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_peli");
        echo "\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_peli");
        echo "\">Listar</a></li>
                </ul>
            </li>
            <li class=\"divider\"></li>

            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Peliculas (copias)\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pelicopia_nueva");
        echo "\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pelicopia_index");
        echo "\">Listar</a></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>

<div class=\"navbar-fixed\">
    <nav>
        <div class=\"nav-wrapper red\">
            <a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"brand-logo center\"><img  width=\"70\"  height=\"80\" src=\"http://vignette2.wikia.nocookie.net/clubpenguin/images/6/65/Popcorn_Pin.PNG/revision/latest?cb=20141203015251\"/>
            </a>
            <ul class=\"right hide-on-med-and-down\">
                ";
        // line 118
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 119
            echo "                    <li>Bienvenido, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "apellido", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                echo " (Administrador) ";
            }
            echo "</li>
                ";
        }
        // line 121
        echo "
                <!-- Dropdown Trigger -->
                ";
        // line 123
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == null)) {
            // line 124
            echo "                    <li class=\"fuente\"><a href=\"#modal1\"> Ya tenes una cuenta? <i class=\"material-icons right\">arrow_drop_down</i></a></li>
                ";
        } else {
            // line 126
            echo "                    ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                // line 127
                echo "                        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown2\">Opciones administrativas <i class=\"material-icons right\">arrow_drop_down</i></a></li>
                    ";
            }
            // line 129
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Salir</a></li>
                ";
        }
        // line 131
        echo "            </ul>
            <ul class=\"left hide-on-med-and-down\">
                <li class=\"waves-effect waves-black fuente\"><a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_cine");
        echo "\">SACAR ENTRADAS!!</a></li>
                <li class=\"waves-effect waves-black fuente\"><a href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_cine");
        echo "\">Cines</a></li>
                <li class=\"waves-effect waves-black fuente\"><a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("funcion_index");
        echo "\">Funciones</a></li>
                <li class=\"waves-effect waves-black fuente\"><a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pelicopia_index");
        echo "\">Peliculas</a></li>
            </ul>
        </div>
    </nav>
</div>




<section id=\"content\">
    ";
        // line 146
        $this->displayBlock('content', $context, $blocks);
        // line 147
        echo "</section>

<footer class=\"page-footer red footer\">
        <div class=\"container\">
            © 2017
            <a class=\"grey-text text-lighten-4 right\" href=\"#!\">More Links</a>
        </div>
</footer>




</body>
</html>

<script>
    \$(document).ready(function(){
        \$('.modal').modal();
        \$('.dropdown-submenu a.test').on(\"click\", function(e){
            \$(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
        \$('.collapsible').collapsible();
        \$('.select').material_select();
        \$('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    });
</script>";
        
        $__internal_addb1dcf43c8f2d46c145ace2074b1d1afe18ee8381b13eb7fc054d16bdc984b->leave($__internal_addb1dcf43c8f2d46c145ace2074b1d1afe18ee8381b13eb7fc054d16bdc984b_prof);

        
        $__internal_740c878f23b6e1a261fa2db3a1dd5ecb715a94dedab9515d3700c739c09ff545->leave($__internal_740c878f23b6e1a261fa2db3a1dd5ecb715a94dedab9515d3700c739c09ff545_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cafa2e7aa4a537518c042c3afa80355bc7f969aff8bf06457acc50e722c084aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cafa2e7aa4a537518c042c3afa80355bc7f969aff8bf06457acc50e722c084aa->enter($__internal_cafa2e7aa4a537518c042c3afa80355bc7f969aff8bf06457acc50e722c084aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c4b60c099bf342c10f9288cd3e077ea624177b16059d30dd609b060468725b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b60c099bf342c10f9288cd3e077ea624177b16059d30dd609b060468725b98->enter($__internal_c4b60c099bf342c10f9288cd3e077ea624177b16059d30dd609b060468725b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cines ";
        
        $__internal_c4b60c099bf342c10f9288cd3e077ea624177b16059d30dd609b060468725b98->leave($__internal_c4b60c099bf342c10f9288cd3e077ea624177b16059d30dd609b060468725b98_prof);

        
        $__internal_cafa2e7aa4a537518c042c3afa80355bc7f969aff8bf06457acc50e722c084aa->leave($__internal_cafa2e7aa4a537518c042c3afa80355bc7f969aff8bf06457acc50e722c084aa_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff2077d636cf0ecb915c244b57fddeeedf21ad2845f02e4881c42b516fd38c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff2077d636cf0ecb915c244b57fddeeedf21ad2845f02e4881c42b516fd38c96->enter($__internal_ff2077d636cf0ecb915c244b57fddeeedf21ad2845f02e4881c42b516fd38c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1f0106de53dd9b6bf35d9ea4c805a2416a20ff4fc6e143302ba643787617dc96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0106de53dd9b6bf35d9ea4c805a2416a20ff4fc6e143302ba643787617dc96->enter($__internal_1f0106de53dd9b6bf35d9ea4c805a2416a20ff4fc6e143302ba643787617dc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
        <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css\">
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Anton\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cine/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

    ";
        
        $__internal_1f0106de53dd9b6bf35d9ea4c805a2416a20ff4fc6e143302ba643787617dc96->leave($__internal_1f0106de53dd9b6bf35d9ea4c805a2416a20ff4fc6e143302ba643787617dc96_prof);

        
        $__internal_ff2077d636cf0ecb915c244b57fddeeedf21ad2845f02e4881c42b516fd38c96->leave($__internal_ff2077d636cf0ecb915c244b57fddeeedf21ad2845f02e4881c42b516fd38c96_prof);

    }

    // line 146
    public function block_content($context, array $blocks = array())
    {
        $__internal_721e6d7fdfff749a64209b97bd46e3d86dd132d36a93a9f8b28f790f4aa8ae3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721e6d7fdfff749a64209b97bd46e3d86dd132d36a93a9f8b28f790f4aa8ae3f->enter($__internal_721e6d7fdfff749a64209b97bd46e3d86dd132d36a93a9f8b28f790f4aa8ae3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a5232c30454fd211fdbb95d698a83a5de7891928a3c2e2d3126368c5469a8de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5232c30454fd211fdbb95d698a83a5de7891928a3c2e2d3126368c5469a8de5->enter($__internal_a5232c30454fd211fdbb95d698a83a5de7891928a3c2e2d3126368c5469a8de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " cotenido por defcto ";
        
        $__internal_a5232c30454fd211fdbb95d698a83a5de7891928a3c2e2d3126368c5469a8de5->leave($__internal_a5232c30454fd211fdbb95d698a83a5de7891928a3c2e2d3126368c5469a8de5_prof);

        
        $__internal_721e6d7fdfff749a64209b97bd46e3d86dd132d36a93a9f8b28f790f4aa8ae3f->leave($__internal_721e6d7fdfff749a64209b97bd46e3d86dd132d36a93a9f8b28f790f4aa8ae3f_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 146,  320 => 13,  311 => 6,  302 => 5,  284 => 3,  244 => 147,  242 => 146,  229 => 136,  225 => 135,  221 => 134,  217 => 133,  213 => 131,  207 => 129,  203 => 127,  200 => 126,  196 => 124,  194 => 123,  190 => 121,  178 => 119,  176 => 118,  170 => 115,  157 => 105,  153 => 104,  142 => 96,  138 => 95,  126 => 86,  122 => 85,  111 => 77,  107 => 76,  92 => 64,  74 => 49,  39 => 16,  37 => 5,  32 => 3,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <title>{%block title %}Cines {% endblock %}</title>

    {% block stylesheets %}
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
        <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css\">
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Anton\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">
        <link href=\"{{ asset('bundles/cine/styles.css') }}\" type=\"text/css\" rel=\"stylesheet\" />

    {% endblock %}


    <style>
        #map {
            height: 80%;
            width: 50%;
        }
        body{
            height: 80%;
            /* Center and scale the image nicely */
            background-color: black;
            background-repeat: no-repeat;
            background-size: cover;
        }/* Full height */
        footer{
            position: fixed;
            bottom: 0;
            width:100%;

        }

    </style>
</head>

<body>

<div id=\"modal1\" class=\"modal\">
    <div class=\"modal-content\">
        <h4 class=\"fuente\">Login</h4>
        <div class=\"container\">
            <ul>
                <li>
                    <div class=\"col-md-12\">
                        <form action=\"{{path(\"login_check\")}}\" method=\"post\">
                            <label>Email:</label>
                            <input type=\"email\" id=\"username\" name=\"_username\"  class=\"form-control\" />
                            <br/>
                            <label>Contraseña:</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                            <br/>
                            <input type=\"submit\" value=\"Entrar\" class=\"btn -succes\"/>

                            <input type=\"hidden\" name=\"_target_path\" value=\"/index\" />
                        </form>
                    </div>
                </li>
                <li>
                    <b>Si aun no tenes una cuenta registrate:</b>
                    <a href=\"{{path(\"register\")}}\" class=\"right btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">add</i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<ul id=\"dropdown2\" class=\"dropdown-content\">
    <li >
        <ul class=\"dropdown-menu\">
            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Cines\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"{{path(\"nuevo_cine\")}}\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"{{path(\"index_cine\")}}\">Listar </a></li>
                </ul>
            </li>
            <li class=\"divider\"></li>

            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Funciones\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"{{path(\"funcion_nueva\")}}\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"{{path(\"funcion_index\")}}\">Listar</a></li>

                </ul>
            </li>
            <li class=\"divider\"></li>

            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Peliculas\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"{{path(\"nueva_peli\")}}\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"{{path(\"index_peli\")}}\">Listar</a></li>
                </ul>
            </li>
            <li class=\"divider\"></li>

            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Peliculas (copias)\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"{{path(\"pelicopia_nueva\")}}\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"{{path(\"pelicopia_index\")}}\">Listar</a></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>

<div class=\"navbar-fixed\">
    <nav>
        <div class=\"nav-wrapper red\">
            <a href=\"{{ path(\"index\") }}\" class=\"brand-logo center\"><img  width=\"70\"  height=\"80\" src=\"http://vignette2.wikia.nocookie.net/clubpenguin/images/6/65/Popcorn_Pin.PNG/revision/latest?cb=20141203015251\"/>
            </a>
            <ul class=\"right hide-on-med-and-down\">
                {%if app.user != null%}
                    <li>Bienvenido, {{app.user.nombre}} {{app.user.apellido}} {%if app.user.role == \"ROLE_ADMIN\" %} (Administrador) {%endif%}</li>
                {% endif %}

                <!-- Dropdown Trigger -->
                {%if app.user == null%}
                    <li class=\"fuente\"><a href=\"#modal1\"> Ya tenes una cuenta? <i class=\"material-icons right\">arrow_drop_down</i></a></li>
                {% else %}
                    {%if app.user.role == \"ROLE_ADMIN\" %}
                        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown2\">Opciones administrativas <i class=\"material-icons right\">arrow_drop_down</i></a></li>
                    {% endif %}
                    <li><a href=\"{{path(\"logout\")}}\">Salir</a></li>
                {% endif %}
            </ul>
            <ul class=\"left hide-on-med-and-down\">
                <li class=\"waves-effect waves-black fuente\"><a href=\"{{path(\"index_cine\")}}\">SACAR ENTRADAS!!</a></li>
                <li class=\"waves-effect waves-black fuente\"><a href=\"{{path(\"index_cine\")}}\">Cines</a></li>
                <li class=\"waves-effect waves-black fuente\"><a href=\"{{path(\"funcion_index\")}}\">Funciones</a></li>
                <li class=\"waves-effect waves-black fuente\"><a href=\"{{path(\"pelicopia_index\")}}\">Peliculas</a></li>
            </ul>
        </div>
    </nav>
</div>




<section id=\"content\">
    {% block content %} cotenido por defcto {% endblock %}
</section>

<footer class=\"page-footer red footer\">
        <div class=\"container\">
            © 2017
            <a class=\"grey-text text-lighten-4 right\" href=\"#!\">More Links</a>
        </div>
</footer>




</body>
</html>

<script>
    \$(document).ready(function(){
        \$('.modal').modal();
        \$('.dropdown-submenu a.test').on(\"click\", function(e){
            \$(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
        \$('.collapsible').collapsible();
        \$('.select').material_select();
        \$('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    });
</script>", "CineBundle::layout.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/layout.html.twig");
    }
}
