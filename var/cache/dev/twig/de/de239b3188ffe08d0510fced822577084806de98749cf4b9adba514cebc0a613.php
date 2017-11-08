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
        $__internal_3a22340cfceaebe36e3615b4d9cdf417d972d5de6b9780fbc2e4548a5b31091a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a22340cfceaebe36e3615b4d9cdf417d972d5de6b9780fbc2e4548a5b31091a->enter($__internal_3a22340cfceaebe36e3615b4d9cdf417d972d5de6b9780fbc2e4548a5b31091a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle::layout.html.twig"));

        $__internal_33d4e3a9e5424c2f4495de0d5dffc73fc066b905c245ec275e929727d90a15af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d4e3a9e5424c2f4495de0d5dffc73fc066b905c245ec275e929727d90a15af->enter($__internal_33d4e3a9e5424c2f4495de0d5dffc73fc066b905c245ec275e929727d90a15af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle::layout.html.twig"));

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
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo "\" class=\"right btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">add</i></a>
                </li>
            </ul>
        </div>
    </div>
</div>



<nav class=\"red\">
    <div class=\"nav-wrapper\">
        <a href=\"#!\" class=\"brand-logo\"><img  width=\"70\"  height=\"80\" src=\"http://vignette2.wikia.nocookie.net/clubpenguin/images/6/65/Popcorn_Pin.PNG/revision/latest?cb=20141203015251\"/></a>
        <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
        <ul class=\"right hide-on-med-and-down\">
            ";
        // line 77
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 78
            echo "                <li  class=\"light grey-text text-lighten-3\">Bienvenido, ";
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
        // line 80
        echo "

            <!-- Dropdown Trigger -->
            ";
        // line 83
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == null)) {
            // line 84
            echo "                <li class=\"fuente\"><a href=\"#modal1\"> Ya tenes una cuenta? <i class=\"material-icons right\">arrow_drop_down</i></a></li>
            ";
        } else {
            // line 86
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                // line 87
                echo "                    <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown\">Opciones administrativas <i class=\"material-icons right\">arrow_drop_down</i></a></li>
                ";
            }
            // line 89
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Salir</a></li>
            ";
        }
        // line 91
        echo "        </ul>
        <ul class=\"side-nav\" id=\"mobile-demo\">
            ";
        // line 93
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 94
            echo "                <li class=\"blue-grey darken-4-text\">Bienvenido, ";
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
        // line 96
        echo "
            <!-- Dropdown Trigger -->
            ";
        // line 98
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == null)) {
            // line 99
            echo "                <li><a href=\"#modal1\"> Ya tenes una cuenta? <i class=\"material-icons right\">arrow_drop_down</i></a></li>
            ";
        } else {
            // line 101
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                // line 102
                echo "                    <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">Opciones administrativas <i class=\"material-icons right\">arrow_drop_down</i></a></li>
                ";
            }
            // line 104
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Salir</a></li>
            ";
        }
        // line 106
        echo "        </ul>
    </div>
</nav>

<ul id=\"dropdown\" class=\"dropdown-content\">
    <li >
        <ul class=\"dropdown-menu\">
            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Cines\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_cine");
        echo "\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_cine");
        echo "\">Listar </a></li>
                </ul>
            </li>
            <li class=\"divider\"></li>

            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Funciones\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("funcion_nueva");
        echo "\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("funcion_index");
        echo "\">Listar</a></li>

                </ul>
            </li>
            <li class=\"divider\"></li>

            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Peliculas\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_peli");
        echo "\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_peli");
        echo "\">Listar</a></li>
                </ul>
            </li>
            <li class=\"divider\"></li>

            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Peliculas (copias)\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pelicopia_nueva");
        echo "\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pelicopia_index");
        echo "\">Listar</a></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>

<ul id=\"dropdown1\" class=\"dropdown-content\">
    <li >
        <ul class=\"dropdown-menu\">
            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Cines\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"";
        // line 158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_cine");
        echo "\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_cine");
        echo "\">Listar </a></li>
                </ul>
            </li>
            <li class=\"divider\"></li>

            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Funciones\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("funcion_nueva");
        echo "\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("funcion_index");
        echo "\">Listar</a></li>

                </ul>
            </li>
            <li class=\"divider\"></li>

            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Peliculas\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_peli");
        echo "\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_peli");
        echo "\">Listar</a></li>
                </ul>
            </li>
            <li class=\"divider\"></li>

            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Peliculas (copias)\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pelicopia_nueva");
        echo "\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pelicopia_index");
        echo "\">Listar</a></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>




<section id=\"content\">
    ";
        // line 198
        $this->displayBlock('content', $context, $blocks);
        // line 199
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
        \$(\".button-collapse\").sideNav();
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
        \$('.carousel').carousel({
            padding: 200
        });
        autoplay()
        function autoplay() {
            \$('.carousel').carousel('next');
            setTimeout(autoplay, 3000);
        }
    });


</script>";
        
        $__internal_3a22340cfceaebe36e3615b4d9cdf417d972d5de6b9780fbc2e4548a5b31091a->leave($__internal_3a22340cfceaebe36e3615b4d9cdf417d972d5de6b9780fbc2e4548a5b31091a_prof);

        
        $__internal_33d4e3a9e5424c2f4495de0d5dffc73fc066b905c245ec275e929727d90a15af->leave($__internal_33d4e3a9e5424c2f4495de0d5dffc73fc066b905c245ec275e929727d90a15af_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b03b689e9f1f482ec15bc632ec2255cde8c6b466ee636380eec1ef646a77e975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03b689e9f1f482ec15bc632ec2255cde8c6b466ee636380eec1ef646a77e975->enter($__internal_b03b689e9f1f482ec15bc632ec2255cde8c6b466ee636380eec1ef646a77e975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd4fdd1cc5a94cf157c2493fa34b5f3d66198ea299bf24ee719972df1e7f9ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4fdd1cc5a94cf157c2493fa34b5f3d66198ea299bf24ee719972df1e7f9ea9->enter($__internal_bd4fdd1cc5a94cf157c2493fa34b5f3d66198ea299bf24ee719972df1e7f9ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cines ";
        
        $__internal_bd4fdd1cc5a94cf157c2493fa34b5f3d66198ea299bf24ee719972df1e7f9ea9->leave($__internal_bd4fdd1cc5a94cf157c2493fa34b5f3d66198ea299bf24ee719972df1e7f9ea9_prof);

        
        $__internal_b03b689e9f1f482ec15bc632ec2255cde8c6b466ee636380eec1ef646a77e975->leave($__internal_b03b689e9f1f482ec15bc632ec2255cde8c6b466ee636380eec1ef646a77e975_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c00fbfef6da4fd44da7b49c6fc4343376e59c0251becc793af996486c224d5c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00fbfef6da4fd44da7b49c6fc4343376e59c0251becc793af996486c224d5c0->enter($__internal_c00fbfef6da4fd44da7b49c6fc4343376e59c0251becc793af996486c224d5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2bac3c0e2a7383131794e63bd12892ed541058dc4e9eb6cd43d0f2074c7b9e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bac3c0e2a7383131794e63bd12892ed541058dc4e9eb6cd43d0f2074c7b9e60->enter($__internal_2bac3c0e2a7383131794e63bd12892ed541058dc4e9eb6cd43d0f2074c7b9e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2bac3c0e2a7383131794e63bd12892ed541058dc4e9eb6cd43d0f2074c7b9e60->leave($__internal_2bac3c0e2a7383131794e63bd12892ed541058dc4e9eb6cd43d0f2074c7b9e60_prof);

        
        $__internal_c00fbfef6da4fd44da7b49c6fc4343376e59c0251becc793af996486c224d5c0->leave($__internal_c00fbfef6da4fd44da7b49c6fc4343376e59c0251becc793af996486c224d5c0_prof);

    }

    // line 198
    public function block_content($context, array $blocks = array())
    {
        $__internal_bc6cd1e2b9bde44f1c1bb3ee033189c645b60424603d77385ae348d55e03eb58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6cd1e2b9bde44f1c1bb3ee033189c645b60424603d77385ae348d55e03eb58->enter($__internal_bc6cd1e2b9bde44f1c1bb3ee033189c645b60424603d77385ae348d55e03eb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e9581f6364b12e2758b26192d0e6aea611bff8550c5e95c421b6ea7d897104e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9581f6364b12e2758b26192d0e6aea611bff8550c5e95c421b6ea7d897104e7->enter($__internal_e9581f6364b12e2758b26192d0e6aea611bff8550c5e95c421b6ea7d897104e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " cotenido por defcto ";
        
        $__internal_e9581f6364b12e2758b26192d0e6aea611bff8550c5e95c421b6ea7d897104e7->leave($__internal_e9581f6364b12e2758b26192d0e6aea611bff8550c5e95c421b6ea7d897104e7_prof);

        
        $__internal_bc6cd1e2b9bde44f1c1bb3ee033189c645b60424603d77385ae348d55e03eb58->leave($__internal_bc6cd1e2b9bde44f1c1bb3ee033189c645b60424603d77385ae348d55e03eb58_prof);

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
        return array (  431 => 198,  418 => 13,  409 => 6,  400 => 5,  382 => 3,  331 => 199,  329 => 198,  315 => 187,  311 => 186,  300 => 178,  296 => 177,  284 => 168,  280 => 167,  269 => 159,  265 => 158,  249 => 145,  245 => 144,  234 => 136,  230 => 135,  218 => 126,  214 => 125,  203 => 117,  199 => 116,  187 => 106,  181 => 104,  177 => 102,  174 => 101,  170 => 99,  168 => 98,  164 => 96,  152 => 94,  150 => 93,  146 => 91,  140 => 89,  136 => 87,  133 => 86,  129 => 84,  127 => 83,  122 => 80,  110 => 78,  108 => 77,  91 => 63,  74 => 49,  39 => 16,  37 => 5,  32 => 3,  28 => 1,);
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



<nav class=\"red\">
    <div class=\"nav-wrapper\">
        <a href=\"#!\" class=\"brand-logo\"><img  width=\"70\"  height=\"80\" src=\"http://vignette2.wikia.nocookie.net/clubpenguin/images/6/65/Popcorn_Pin.PNG/revision/latest?cb=20141203015251\"/></a>
        <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
        <ul class=\"right hide-on-med-and-down\">
            {%if app.user != null%}
                <li  class=\"light grey-text text-lighten-3\">Bienvenido, {{app.user.nombre}} {{app.user.apellido}} {%if app.user.role == \"ROLE_ADMIN\" %} (Administrador) {%endif%}</li>
            {% endif %}


            <!-- Dropdown Trigger -->
            {%if app.user == null%}
                <li class=\"fuente\"><a href=\"#modal1\"> Ya tenes una cuenta? <i class=\"material-icons right\">arrow_drop_down</i></a></li>
            {% else %}
                {%if app.user.role == \"ROLE_ADMIN\" %}
                    <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown\">Opciones administrativas <i class=\"material-icons right\">arrow_drop_down</i></a></li>
                {% endif %}
                <li><a href=\"{{path(\"logout\")}}\">Salir</a></li>
            {% endif %}
        </ul>
        <ul class=\"side-nav\" id=\"mobile-demo\">
            {%if app.user != null%}
                <li class=\"blue-grey darken-4-text\">Bienvenido, {{app.user.nombre}} {{app.user.apellido}} {%if app.user.role == \"ROLE_ADMIN\" %} (Administrador) {%endif%}</li>
            {% endif %}

            <!-- Dropdown Trigger -->
            {%if app.user == null%}
                <li><a href=\"#modal1\"> Ya tenes una cuenta? <i class=\"material-icons right\">arrow_drop_down</i></a></li>
            {% else %}
                {%if app.user.role == \"ROLE_ADMIN\" %}
                    <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">Opciones administrativas <i class=\"material-icons right\">arrow_drop_down</i></a></li>
                {% endif %}
                <li><a href=\"{{path(\"logout\")}}\">Salir</a></li>
            {% endif %}
        </ul>
    </div>
</nav>

<ul id=\"dropdown\" class=\"dropdown-content\">
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

<ul id=\"dropdown1\" class=\"dropdown-content\">
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
        \$(\".button-collapse\").sideNav();
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
        \$('.carousel').carousel({
            padding: 200
        });
        autoplay()
        function autoplay() {
            \$('.carousel').carousel('next');
            setTimeout(autoplay, 3000);
        }
    });


</script>", "CineBundle::layout.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/layout.html.twig");
    }
}
