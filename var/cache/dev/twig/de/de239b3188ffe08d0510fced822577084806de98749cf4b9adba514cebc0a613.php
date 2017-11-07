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
        $__internal_abf0e9c33300334c45a568f5b6375320e156d614ae912dc2fa1f007e3affdce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf0e9c33300334c45a568f5b6375320e156d614ae912dc2fa1f007e3affdce6->enter($__internal_abf0e9c33300334c45a568f5b6375320e156d614ae912dc2fa1f007e3affdce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle::layout.html.twig"));

        $__internal_21fd536818eedbf3b036724b5208dfecdb08f039ee1b9e389a278e864cf7335c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21fd536818eedbf3b036724b5208dfecdb08f039ee1b9e389a278e864cf7335c->enter($__internal_21fd536818eedbf3b036724b5208dfecdb08f039ee1b9e389a278e864cf7335c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle::layout.html.twig"));

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
<ul id=\"dropdown2\" class=\"dropdown-content\">
    <li >
        <ul class=\"dropdown-menu\">
            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Cines\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_cine");
        echo "\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_cine");
        echo "\">Listar </a></li>
                </ul>
            </li>
            <li class=\"divider\"></li>

            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Funciones\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("funcion_nueva");
        echo "\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("funcion_index");
        echo "\">Listar</a></li>

                </ul>
            </li>
            <li class=\"divider\"></li>

            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Peliculas\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_peli");
        echo "\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_peli");
        echo "\">Listar</a></li>
                </ul>
            </li>
            <li class=\"divider\"></li>

            <li class=\"dropdown-submenu\">
                <ul><optgroup label=\"Peliculas (copias)\"></ul>
                <ul class=\"dropdown-menu\">
                    <li><a tabindex=\"-1\" href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pelicopia_nueva");
        echo "\">Agregar</a></li>
                    <li><a tabindex=\"-1\" href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pelicopia_index");
        echo "\">Listar</a></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>


<nav class=\"red\">
    <div class=\"nav-wrapper\">
        <a href=\"#!\" class=\"brand-logo\"><img  width=\"70\"  height=\"80\" src=\"http://vignette2.wikia.nocookie.net/clubpenguin/images/6/65/Popcorn_Pin.PNG/revision/latest?cb=20141203015251\"/></a>
        <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
        <ul class=\"right hide-on-med-and-down\">
            ";
        // line 117
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 118
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
        // line 120
        echo "

            <!-- Dropdown Trigger -->
            ";
        // line 123
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == null)) {
            // line 124
            echo "                <li class=\"fuente\"><a href=\"#modal1\"> Ya tenes una cuenta? <i class=\"material-icons right\">arrow_drop_down</i></a></li>
            ";
        } else {
            // line 126
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                // line 127
                echo "                    <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown2\">Opciones administrativas <i class=\"material-icons right\">arrow_drop_down</i></a></li>
                ";
            }
            // line 129
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Salir</a></li>
            ";
        }
        // line 131
        echo "        </ul>
        <ul class=\"side-nav\" id=\"mobile-demo\">
            ";
        // line 133
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 134
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
        // line 136
        echo "
            <!-- Dropdown Trigger -->
            ";
        // line 138
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == null)) {
            // line 139
            echo "                <li><a href=\"#modal1\"> Ya tenes una cuenta? <i class=\"material-icons right\">arrow_drop_down</i></a></li>
            ";
        } else {
            // line 141
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                // line 142
                echo "                    <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown2\">Opciones administrativas <i class=\"material-icons right\">arrow_drop_down</i></a></li>
                ";
            }
            // line 144
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Salir</a></li>
            ";
        }
        // line 146
        echo "        </ul>
    </div>
</nav>





<section id=\"content\">
    ";
        // line 155
        $this->displayBlock('content', $context, $blocks);
        // line 156
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
        
        $__internal_abf0e9c33300334c45a568f5b6375320e156d614ae912dc2fa1f007e3affdce6->leave($__internal_abf0e9c33300334c45a568f5b6375320e156d614ae912dc2fa1f007e3affdce6_prof);

        
        $__internal_21fd536818eedbf3b036724b5208dfecdb08f039ee1b9e389a278e864cf7335c->leave($__internal_21fd536818eedbf3b036724b5208dfecdb08f039ee1b9e389a278e864cf7335c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ce81d166797a99f11e583db835837177c4168f9a89fefc0e2297b531a7045d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce81d166797a99f11e583db835837177c4168f9a89fefc0e2297b531a7045d9->enter($__internal_6ce81d166797a99f11e583db835837177c4168f9a89fefc0e2297b531a7045d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25c3960088fe3b09bad59dcbbf4198f36ccb68306f7f60c8bbd9b2e4dbfb3256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c3960088fe3b09bad59dcbbf4198f36ccb68306f7f60c8bbd9b2e4dbfb3256->enter($__internal_25c3960088fe3b09bad59dcbbf4198f36ccb68306f7f60c8bbd9b2e4dbfb3256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cines ";
        
        $__internal_25c3960088fe3b09bad59dcbbf4198f36ccb68306f7f60c8bbd9b2e4dbfb3256->leave($__internal_25c3960088fe3b09bad59dcbbf4198f36ccb68306f7f60c8bbd9b2e4dbfb3256_prof);

        
        $__internal_6ce81d166797a99f11e583db835837177c4168f9a89fefc0e2297b531a7045d9->leave($__internal_6ce81d166797a99f11e583db835837177c4168f9a89fefc0e2297b531a7045d9_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_23d7c2a48ab036a289d639a44073401c35dbb44749a50efcecd28967f13f7483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d7c2a48ab036a289d639a44073401c35dbb44749a50efcecd28967f13f7483->enter($__internal_23d7c2a48ab036a289d639a44073401c35dbb44749a50efcecd28967f13f7483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cfc2cb2d23470c0d5bd051f2f6c6d6f1a63ae0a00516c3b51fd3efab91fc0c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc2cb2d23470c0d5bd051f2f6c6d6f1a63ae0a00516c3b51fd3efab91fc0c46->enter($__internal_cfc2cb2d23470c0d5bd051f2f6c6d6f1a63ae0a00516c3b51fd3efab91fc0c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_cfc2cb2d23470c0d5bd051f2f6c6d6f1a63ae0a00516c3b51fd3efab91fc0c46->leave($__internal_cfc2cb2d23470c0d5bd051f2f6c6d6f1a63ae0a00516c3b51fd3efab91fc0c46_prof);

        
        $__internal_23d7c2a48ab036a289d639a44073401c35dbb44749a50efcecd28967f13f7483->leave($__internal_23d7c2a48ab036a289d639a44073401c35dbb44749a50efcecd28967f13f7483_prof);

    }

    // line 155
    public function block_content($context, array $blocks = array())
    {
        $__internal_b994581aae5ee863edbeffb04881631fd181763990e52073884046a6cc382209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b994581aae5ee863edbeffb04881631fd181763990e52073884046a6cc382209->enter($__internal_b994581aae5ee863edbeffb04881631fd181763990e52073884046a6cc382209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_15654e987962011b13195e650c306961e71df90e7a42e1f507988d811fa6b38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15654e987962011b13195e650c306961e71df90e7a42e1f507988d811fa6b38b->enter($__internal_15654e987962011b13195e650c306961e71df90e7a42e1f507988d811fa6b38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " cotenido por defcto ";
        
        $__internal_15654e987962011b13195e650c306961e71df90e7a42e1f507988d811fa6b38b->leave($__internal_15654e987962011b13195e650c306961e71df90e7a42e1f507988d811fa6b38b_prof);

        
        $__internal_b994581aae5ee863edbeffb04881631fd181763990e52073884046a6cc382209->leave($__internal_b994581aae5ee863edbeffb04881631fd181763990e52073884046a6cc382209_prof);

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
        return array (  364 => 155,  351 => 13,  342 => 6,  333 => 5,  315 => 3,  264 => 156,  262 => 155,  251 => 146,  245 => 144,  241 => 142,  238 => 141,  234 => 139,  232 => 138,  228 => 136,  216 => 134,  214 => 133,  210 => 131,  204 => 129,  200 => 127,  197 => 126,  193 => 124,  191 => 123,  186 => 120,  174 => 118,  172 => 117,  156 => 104,  152 => 103,  141 => 95,  137 => 94,  125 => 85,  121 => 84,  110 => 76,  106 => 75,  91 => 63,  74 => 49,  39 => 16,  37 => 5,  32 => 3,  28 => 1,);
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
                    <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown2\">Opciones administrativas <i class=\"material-icons right\">arrow_drop_down</i></a></li>
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
                    <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown2\">Opciones administrativas <i class=\"material-icons right\">arrow_drop_down</i></a></li>
                {% endif %}
                <li><a href=\"{{path(\"logout\")}}\">Salir</a></li>
            {% endif %}
        </ul>
    </div>
</nav>





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
