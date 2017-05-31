<?php

/* CineBundle::layout.html.twig */
class __TwigTemplate_b95ddcd0bfa9457579de28fa5ec1efb3302edc7af482cdf428dc7819b37c95cb extends Twig_Template
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
        $__internal_81c5389bd7f862dc9fce5f4e83820039016033f982399c52891ea3efae7924dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81c5389bd7f862dc9fce5f4e83820039016033f982399c52891ea3efae7924dc->enter($__internal_81c5389bd7f862dc9fce5f4e83820039016033f982399c52891ea3efae7924dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle::layout.html.twig"));

        $__internal_88c9b30e860a7e43ed8ce87578bf6610bf9f619841fd8cef359085d3968bb54b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c9b30e860a7e43ed8ce87578bf6610bf9f619841fd8cef359085d3968bb54b->enter($__internal_88c9b30e860a7e43ed8ce87578bf6610bf9f619841fd8cef359085d3968bb54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle::layout.html.twig"));

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
        // line 15
        echo "

        <style>
            #map {
                height: 80%;
                width: 50%;
            }
            body{
                background-image: url(\"http://www.elfueguino.com.ar/wp-content/uploads/2016/11/cine-estudio-.jpg\");
            }

        </style>

    </head>
    
    <body>
    <ul id=\"dropdown1\" class=\"dropdown-content\">
        <li class=\"dropdown\">
            <b>Logueate</b> <span class=\"caret\">
                <div class=\"col-md-12\">
                    <form action=\"";
        // line 35
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
            <b>Registrate</b> <span class=\"caret\">
            <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo "\" class=\"right btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">add</i></a>
        </li>
    </ul>


    <ul id=\"dropdown2\" class=\"dropdown-content\">
        <li class=\"dropdown\">
            <ul class=\"dropdown-menu\">
                <li class=\"dropdown-submenu\">
                    <ul><optgroup label=\"Cines\"></ul>
                    <ul class=\"dropdown-menu\">
                        <li><a tabindex=\"-1\" href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_cine");
        echo "\">Agregar</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_cine");
        echo "\">Listar Cines</a></li>
                    </ul>
                </li>
                <li class=\"divider\"></li>

                <li class=\"dropdown-submenu\">
                    <ul><optgroup label=\"Funciones\"></ul>
                    <ul class=\"dropdown-menu\">
                        <li><a tabindex=\"-1\" href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("funcion_nueva");
        echo "\">Agregar</a></li>
                    </ul>
                </li>
                <li class=\"divider\"></li>

                <li class=\"dropdown-submenu\">
                    <ul><optgroup label=\"Peliculas\"></ul>
                    <ul class=\"dropdown-menu\">
                        <li><a tabindex=\"-1\" href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_peli");
        echo "\">Agregar</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_peli");
        echo "\">Listar peliculas</a></li>
                    </ul>
                </li>
                <li class=\"divider\"></li>

                <li class=\"dropdown-submenu\">
                    <ul><optgroup label=\"Peliculas (copias)\"></ul>
                    <ul class=\"dropdown-menu\">
                        <li><a tabindex=\"-1\" href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pelicopia_nueva");
        echo "\">Agregar</a></li>
                        <li><a tabindex=\"-1\" href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pelicopia_index");
        echo "\">Listar peliculas</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>

    <div class=\"navbar-fixed\">
        <nav>
            <div class=\"nav-wrapper black\">
                <a href=\"#!\" class=\"brand-logo\"><img  width=\"70\"  height=\"80\" src=\"http://vignette2.wikia.nocookie.net/clubpenguin/images/6/65/Popcorn_Pin.PNG/revision/latest?cb=20141203015251\"/>
                </a>
                <ul class=\"right hide-on-med-and-down\">
                    ";
        // line 101
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 102
            echo "                        <li>Bienvenido, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "apellido", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                echo " (Administrador) ";
            }
            echo "</li>
                    ";
        }
        // line 104
        echo "
                    <!-- Dropdown Trigger -->
                    ";
        // line 106
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 107
            echo "                        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">Ya tenes una cuenta?<i class=\"material-icons right\">arrow_drop_down</i></a></li>
                    ";
        } else {
            // line 109
            echo "                        ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                // line 110
                echo "                    <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown2\">Opciones administrativas <i class=\"material-icons right\">arrow_drop_down</i></a></li>
                        ";
            }
            // line 112
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Salir</a></li>
                    ";
        }
        // line 114
        echo "                </ul>
            </div>
        </nav>
    </div>




        <section id=\"content\">
            ";
        // line 123
        $this->displayBlock('content', $context, $blocks);
        // line 124
        echo "        </section>
        <footer>
            <footer class=\"page-footer black\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col l6 s12\">
                            <h5 class=\"white-text\">Footer Content</h5>
                            <p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your footer content.</p>
                        </div>
                        <div class=\"col l4 offset-l2 s12\">
                            <h5 class=\"white-text\">Links</h5>
                            <ul>
                                <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 1</a></li>
                                <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 2</a></li>
                                <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 3</a></li>
                                <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"footer-copyright\">
                    <div class=\"container\">
                        © 2014 Copyright Text
                        <a class=\"grey-text text-lighten-4 right\" href=\"#!\">More Links</a>
                    </div>
                </div>
            </footer>
        </footer>




    </body>
</html>

<script>
    \$(document).ready(function(){
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

</script>

";
        
        $__internal_81c5389bd7f862dc9fce5f4e83820039016033f982399c52891ea3efae7924dc->leave($__internal_81c5389bd7f862dc9fce5f4e83820039016033f982399c52891ea3efae7924dc_prof);

        
        $__internal_88c9b30e860a7e43ed8ce87578bf6610bf9f619841fd8cef359085d3968bb54b->leave($__internal_88c9b30e860a7e43ed8ce87578bf6610bf9f619841fd8cef359085d3968bb54b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_302894b77adf076c35047180493d6bf1514ecd8549fa6f32775548e484c1f62a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_302894b77adf076c35047180493d6bf1514ecd8549fa6f32775548e484c1f62a->enter($__internal_302894b77adf076c35047180493d6bf1514ecd8549fa6f32775548e484c1f62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_afc8c44aee4590e0b8cf8eb0c921286f67953ce7d938d1b222bcc2a40e63f134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc8c44aee4590e0b8cf8eb0c921286f67953ce7d938d1b222bcc2a40e63f134->enter($__internal_afc8c44aee4590e0b8cf8eb0c921286f67953ce7d938d1b222bcc2a40e63f134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "titulo por defecto ";
        
        $__internal_afc8c44aee4590e0b8cf8eb0c921286f67953ce7d938d1b222bcc2a40e63f134->leave($__internal_afc8c44aee4590e0b8cf8eb0c921286f67953ce7d938d1b222bcc2a40e63f134_prof);

        
        $__internal_302894b77adf076c35047180493d6bf1514ecd8549fa6f32775548e484c1f62a->leave($__internal_302894b77adf076c35047180493d6bf1514ecd8549fa6f32775548e484c1f62a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43171c6952bde9c5f2a3dab08848e5b7d0db912da07141f1c0d3c1bdf6664c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43171c6952bde9c5f2a3dab08848e5b7d0db912da07141f1c0d3c1bdf6664c0e->enter($__internal_43171c6952bde9c5f2a3dab08848e5b7d0db912da07141f1c0d3c1bdf6664c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_44ed05c869bb14a3fb6caf919b8fc7f4014d2676e8bc0d9fe6da5a7700eb490e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ed05c869bb14a3fb6caf919b8fc7f4014d2676e8bc0d9fe6da5a7700eb490e->enter($__internal_44ed05c869bb14a3fb6caf919b8fc7f4014d2676e8bc0d9fe6da5a7700eb490e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "            <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("materialize/js/materialize.min.js"), "html", null, true);
        echo "\"></script>
            <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css\">
            <!-- Compiled and minified JavaScript -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js\"></script>
            <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/verssion-commit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        ";
        
        $__internal_44ed05c869bb14a3fb6caf919b8fc7f4014d2676e8bc0d9fe6da5a7700eb490e->leave($__internal_44ed05c869bb14a3fb6caf919b8fc7f4014d2676e8bc0d9fe6da5a7700eb490e_prof);

        
        $__internal_43171c6952bde9c5f2a3dab08848e5b7d0db912da07141f1c0d3c1bdf6664c0e->leave($__internal_43171c6952bde9c5f2a3dab08848e5b7d0db912da07141f1c0d3c1bdf6664c0e_prof);

    }

    // line 123
    public function block_content($context, array $blocks = array())
    {
        $__internal_5b178aef823d3c3c8417f8dee326d458fcd80adf5e019e6d670b84db3b6abb00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b178aef823d3c3c8417f8dee326d458fcd80adf5e019e6d670b84db3b6abb00->enter($__internal_5b178aef823d3c3c8417f8dee326d458fcd80adf5e019e6d670b84db3b6abb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a23761cfeffecc248dfebac44eddceefc5be389a3063c9480778522a8ecc0e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23761cfeffecc248dfebac44eddceefc5be389a3063c9480778522a8ecc0e65->enter($__internal_a23761cfeffecc248dfebac44eddceefc5be389a3063c9480778522a8ecc0e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " cotenido por defcto ";
        
        $__internal_a23761cfeffecc248dfebac44eddceefc5be389a3063c9480778522a8ecc0e65->leave($__internal_a23761cfeffecc248dfebac44eddceefc5be389a3063c9480778522a8ecc0e65_prof);

        
        $__internal_5b178aef823d3c3c8417f8dee326d458fcd80adf5e019e6d670b84db3b6abb00->leave($__internal_5b178aef823d3c3c8417f8dee326d458fcd80adf5e019e6d670b84db3b6abb00_prof);

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
        return array (  318 => 123,  305 => 12,  297 => 7,  294 => 6,  285 => 5,  267 => 3,  204 => 124,  202 => 123,  191 => 114,  185 => 112,  181 => 110,  178 => 109,  174 => 107,  172 => 106,  168 => 104,  156 => 102,  154 => 101,  138 => 88,  134 => 87,  123 => 79,  119 => 78,  108 => 70,  97 => 62,  93 => 61,  79 => 50,  61 => 35,  39 => 15,  37 => 5,  32 => 3,  28 => 1,);
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
        <title>{%block title %}titulo por defecto {% endblock %}</title>

        {% block stylesheets %}
            <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('materialize/js/materialize.min.js') }}\"></script>
            <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css\">
            <!-- Compiled and minified JavaScript -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js\"></script>
            <script src=\"{{ asset('pickadate/verssion-commit.js') }}\" type=\"text/javascript\"></script>

        {% endblock %}


        <style>
            #map {
                height: 80%;
                width: 50%;
            }
            body{
                background-image: url(\"http://www.elfueguino.com.ar/wp-content/uploads/2016/11/cine-estudio-.jpg\");
            }

        </style>

    </head>
    
    <body>
    <ul id=\"dropdown1\" class=\"dropdown-content\">
        <li class=\"dropdown\">
            <b>Logueate</b> <span class=\"caret\">
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
            <b>Registrate</b> <span class=\"caret\">
            <a href=\"{{path(\"register\")}}\" class=\"right btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">add</i></a>
        </li>
    </ul>


    <ul id=\"dropdown2\" class=\"dropdown-content\">
        <li class=\"dropdown\">
            <ul class=\"dropdown-menu\">
                <li class=\"dropdown-submenu\">
                    <ul><optgroup label=\"Cines\"></ul>
                    <ul class=\"dropdown-menu\">
                        <li><a tabindex=\"-1\" href=\"{{path(\"nuevo_cine\")}}\">Agregar</a></li>
                        <li><a tabindex=\"-1\" href=\"{{path(\"index_cine\")}}\">Listar Cines</a></li>
                    </ul>
                </li>
                <li class=\"divider\"></li>

                <li class=\"dropdown-submenu\">
                    <ul><optgroup label=\"Funciones\"></ul>
                    <ul class=\"dropdown-menu\">
                        <li><a tabindex=\"-1\" href=\"{{path(\"funcion_nueva\")}}\">Agregar</a></li>
                    </ul>
                </li>
                <li class=\"divider\"></li>

                <li class=\"dropdown-submenu\">
                    <ul><optgroup label=\"Peliculas\"></ul>
                    <ul class=\"dropdown-menu\">
                        <li><a tabindex=\"-1\" href=\"{{path(\"nueva_peli\")}}\">Agregar</a></li>
                        <li><a tabindex=\"-1\" href=\"{{path(\"index_peli\")}}\">Listar peliculas</a></li>
                    </ul>
                </li>
                <li class=\"divider\"></li>

                <li class=\"dropdown-submenu\">
                    <ul><optgroup label=\"Peliculas (copias)\"></ul>
                    <ul class=\"dropdown-menu\">
                        <li><a tabindex=\"-1\" href=\"{{path(\"pelicopia_nueva\")}}\">Agregar</a></li>
                        <li><a tabindex=\"-1\" href=\"{{path(\"pelicopia_index\")}}\">Listar peliculas</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>

    <div class=\"navbar-fixed\">
        <nav>
            <div class=\"nav-wrapper black\">
                <a href=\"#!\" class=\"brand-logo\"><img  width=\"70\"  height=\"80\" src=\"http://vignette2.wikia.nocookie.net/clubpenguin/images/6/65/Popcorn_Pin.PNG/revision/latest?cb=20141203015251\"/>
                </a>
                <ul class=\"right hide-on-med-and-down\">
                    {%if app.user != null%}
                        <li>Bienvenido, {{app.user.nombre}} {{app.user.apellido}} {%if app.user.role == \"ROLE_ADMIN\" %} (Administrador) {%endif%}</li>
                    {% endif %}

                    <!-- Dropdown Trigger -->
                    {%if app.user == null%}
                        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">Ya tenes una cuenta?<i class=\"material-icons right\">arrow_drop_down</i></a></li>
                    {% else %}
                        {%if app.user.role == \"ROLE_ADMIN\" %}
                    <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown2\">Opciones administrativas <i class=\"material-icons right\">arrow_drop_down</i></a></li>
                        {% endif %}
                        <li><a href=\"{{path(\"logout\")}}\">Salir</a></li>
                    {% endif %}
                </ul>
            </div>
        </nav>
    </div>




        <section id=\"content\">
            {% block content %} cotenido por defcto {% endblock %}
        </section>
        <footer>
            <footer class=\"page-footer black\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col l6 s12\">
                            <h5 class=\"white-text\">Footer Content</h5>
                            <p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your footer content.</p>
                        </div>
                        <div class=\"col l4 offset-l2 s12\">
                            <h5 class=\"white-text\">Links</h5>
                            <ul>
                                <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 1</a></li>
                                <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 2</a></li>
                                <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 3</a></li>
                                <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"footer-copyright\">
                    <div class=\"container\">
                        © 2014 Copyright Text
                        <a class=\"grey-text text-lighten-4 right\" href=\"#!\">More Links</a>
                    </div>
                </div>
            </footer>
        </footer>




    </body>
</html>

<script>
    \$(document).ready(function(){
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

</script>

", "CineBundle::layout.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/layout.html.twig");
    }
}
