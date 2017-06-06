<?php

/* CineBundle:Cine:index.html.twig */
class __TwigTemplate_9f13f3092295a7698fdc4d46dc5a55b4c65d13773bfda9e56e2dc22009033fba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Cine:index.html.twig", 1);
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
        $__internal_057781dc9c0a004a16e9209141a625c7d74cd123ca6ae27853a82438ff6ef373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057781dc9c0a004a16e9209141a625c7d74cd123ca6ae27853a82438ff6ef373->enter($__internal_057781dc9c0a004a16e9209141a625c7d74cd123ca6ae27853a82438ff6ef373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:index.html.twig"));

        $__internal_b1b4f89635cc3c4ec5ae461a363eeb1f44b367e60d43326aa33758f7f15a80ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b4f89635cc3c4ec5ae461a363eeb1f44b367e60d43326aa33758f7f15a80ad->enter($__internal_b1b4f89635cc3c4ec5ae461a363eeb1f44b367e60d43326aa33758f7f15a80ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_057781dc9c0a004a16e9209141a625c7d74cd123ca6ae27853a82438ff6ef373->leave($__internal_057781dc9c0a004a16e9209141a625c7d74cd123ca6ae27853a82438ff6ef373_prof);

        
        $__internal_b1b4f89635cc3c4ec5ae461a363eeb1f44b367e60d43326aa33758f7f15a80ad->leave($__internal_b1b4f89635cc3c4ec5ae461a363eeb1f44b367e60d43326aa33758f7f15a80ad_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b60d9f51a8b20c7b834cf479463a3cf4ebe905b49bfadd6b02839a4f358778d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b60d9f51a8b20c7b834cf479463a3cf4ebe905b49bfadd6b02839a4f358778d0->enter($__internal_b60d9f51a8b20c7b834cf479463a3cf4ebe905b49bfadd6b02839a4f358778d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3cfdcc6760fbb973a3116f69c306fdb1a2421b5e3f2356352192b21370b98202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cfdcc6760fbb973a3116f69c306fdb1a2421b5e3f2356352192b21370b98202->enter($__internal_3cfdcc6760fbb973a3116f69c306fdb1a2421b5e3f2356352192b21370b98202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css\">
    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js\"></script>
";
        
        $__internal_3cfdcc6760fbb973a3116f69c306fdb1a2421b5e3f2356352192b21370b98202->leave($__internal_3cfdcc6760fbb973a3116f69c306fdb1a2421b5e3f2356352192b21370b98202_prof);

        
        $__internal_b60d9f51a8b20c7b834cf479463a3cf4ebe905b49bfadd6b02839a4f358778d0->leave($__internal_b60d9f51a8b20c7b834cf479463a3cf4ebe905b49bfadd6b02839a4f358778d0_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_8d5306c7e64ddc69470e884116b2d168211590b4130948c1e63be6341e89a772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5306c7e64ddc69470e884116b2d168211590b4130948c1e63be6341e89a772->enter($__internal_8d5306c7e64ddc69470e884116b2d168211590b4130948c1e63be6341e89a772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_50571969ec486631d5c4dddf09d172a10d7d1f630a08405240177804a4c1ca09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50571969ec486631d5c4dddf09d172a10d7d1f630a08405240177804a4c1ca09->enter($__internal_50571969ec486631d5c4dddf09d172a10d7d1f630a08405240177804a4c1ca09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <div class=\"row \">
        <div class=\"col s12 m6 l6\">
            <h3 class=\"light grey-text text-lighten-3\">A que cine queres ir hoy?</h3>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["cine"]);
        foreach ($context['_seq'] as $context["_key"] => $context["cine"]) {
            // line 18
            echo "                    <ul class=\"collapsible popout col s12 m10 lighten-3\" data-collapsible=\"accordion\" >
                        <li>
                            <div class=\"collapsible-header grey lighten-1\"><i class=\"material-icons\">local_movies</i><h5>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["cine"], "nombre", array()), "html", null, true);
            echo "</h5></div>
                            <div class=\"collapsible-body\">
                                <h6> <i class=\"material-icons\">fullscreen</i><h7 class=\"light grey-text text-lighten-3\"> Cantidad de salas: ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["cine"], "cantSalas", array()), "html", null, true);
            echo "</h7></h6>
                                <h6> <i class=\"material-icons\">location_on</i><h7 class=\"light grey-text text-lighten-3\"> Ubicacion: ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["cine"], "ubicacion", array()), "html", null, true);
            echo "</h7></h6>
                                <a class=\"verMap\" data-ubicacion=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["cine"], "ubicacion", array()), "html", null, true);
            echo " \" ><i class=\"material-icons\">my_location</i><h7 class=\"light grey-text text-lighten-3\">Ver ubicacion en el mapa</h7></a>
                                <br>
                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_cine", array("id" => $this->getAttribute($context["cine"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">delete</i></a>
                                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_cine", array("id" => $this->getAttribute($context["cine"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-floating btn-large waves-effect waves-light green\"><i class=\"material-icons\">mode_edit</i></a>
                                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entrada_nueva", array("id" => $this->getAttribute($context["cine"], "id", array()))), "html", null, true);
            echo "\" class=\"waves-effect waves-light btn left-align\">Ir a este cine</a>
                            </div>
                        </li>
                    </ul>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </div>
        <br>
        <br>
        <br>
        <br>
        <div class=\"col s12 m6 l6\" id=\"map\" >

        </div>


    </div>
    </div>


    <script>
        var latitud=0;
        var longitud=0;
        var miLat=0;
        var miLong=0;

        \$(document ).ready(function() {
            navigator.geolocation.getCurrentPosition(showPosition);
            function showPosition(position) {
                miLat =  (position.coords.latitude);
                miLong = (position.coords.longitude);
                initMap(miLat, miLong);
            }
        });


        \$(\".verMap\").click(function() {
            \$.getJSON(\"https://maps.googleapis.com/maps/api/geocode/json?address=\"+\$(this).data(\"ubicacion\") +\"Rio Cuarto\"+\"&key=AIzaSyDOrsRsupsXpwHVPEqAKWHvZtBDSTCOEt4\", function (coordenada) {
                latitud = (coordenada.results[0].geometry.location.lat);
                longitud = (coordenada.results[0].geometry.location.lng);

                initMap(latitud, longitud);   //llamo a la funcion de google declarada abajo con los parametrod de la fip

                navigator.geolocation.getCurrentPosition(showPosition);
                function showPosition(position) {
                    miLat =  (position.coords.latitude);
                    miLong = (position.coords.longitude);
                }
            });
        });

    </script>
    <script>
        var map;
        function initMap(lat,long) {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: lat, lng: long},
                zoom: 15,
                styles: [
                    {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                    {
                        featureType: 'administrative.locality',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'poi',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'geometry',
                        stylers: [{color: '#263c3f'}]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#6b9a76'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry',
                        stylers: [{color: '#38414e'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#212a37'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#9ca5b3'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'geometry',
                        stylers: [{color: '#746855'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#1f2835'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#f3d19c'}]
                    },
                    {
                        featureType: 'transit',
                        elementType: 'geometry',
                        stylers: [{color: '#2f3948'}]
                    },
                    {
                        featureType: 'transit.station',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'geometry',
                        stylers: [{color: '#17263c'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#515c6d'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'labels.text.stroke',
                        stylers: [{color: '#17263c'}]
                    }
                ]
            });
            var marker1 = new google.maps.Marker({     //para qe aparezca el iconito rojo
                position:{lat: lat, lng: long},
                map: map,
                title: \"Cine!!\",
                icon:'https://dgw4q244hguhe.cloudfront.net/~/media/Images/VIP/VIPClubTableImages/ticket.png?la=en&vs=1&d=20160411T163729&hash=7E3FC68D652563B312B1F020DA038C6C3C26B311',
                animation: google.maps.Animation.BOUNCE,
                MarkerLabel: \"CINE!\",
            });

            var marker = new google.maps.Marker({     //para qe aparezca el iconito rojo
                position:{lat: miLat, lng: miLong},
                map: map,
                title: 'Usted esta aqui',
                draggable: true,
                icon:\"https://maxcdn.icons8.com/office/PNG/40/Very_Basic/home-40.png\"

            });
            marker1.setMap(map);   //llama a las dos var anteriores y las ejecuta
            marker.setMap(map)

        }



    </script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDOrsRsupsXpwHVPEqAKWHvZtBDSTCOEt4&callback=initMap\">
    </script>


    </div>

";
        
        $__internal_50571969ec486631d5c4dddf09d172a10d7d1f630a08405240177804a4c1ca09->leave($__internal_50571969ec486631d5c4dddf09d172a10d7d1f630a08405240177804a4c1ca09_prof);

        
        $__internal_8d5306c7e64ddc69470e884116b2d168211590b4130948c1e63be6341e89a772->leave($__internal_8d5306c7e64ddc69470e884116b2d168211590b4130948c1e63be6341e89a772_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Cine:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 33,  129 => 28,  125 => 27,  121 => 26,  116 => 24,  112 => 23,  108 => 22,  103 => 20,  99 => 18,  95 => 17,  90 => 14,  81 => 12,  76 => 11,  67 => 10,  50 => 3,  41 => 2,  11 => 1,);
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
    <div class=\"row \">
        <div class=\"col s12 m6 l6\">
            <h3 class=\"light grey-text text-lighten-3\">A que cine queres ir hoy?</h3>
            {% for cine in cine %}
                    <ul class=\"collapsible popout col s12 m10 lighten-3\" data-collapsible=\"accordion\" >
                        <li>
                            <div class=\"collapsible-header grey lighten-1\"><i class=\"material-icons\">local_movies</i><h5>{{ cine.nombre }}</h5></div>
                            <div class=\"collapsible-body\">
                                <h6> <i class=\"material-icons\">fullscreen</i><h7 class=\"light grey-text text-lighten-3\"> Cantidad de salas: {{ cine.cantSalas }}</h7></h6>
                                <h6> <i class=\"material-icons\">location_on</i><h7 class=\"light grey-text text-lighten-3\"> Ubicacion: {{ cine.ubicacion }}</h7></h6>
                                <a class=\"verMap\" data-ubicacion=\"{{cine.ubicacion}} \" ><i class=\"material-icons\">my_location</i><h7 class=\"light grey-text text-lighten-3\">Ver ubicacion en el mapa</h7></a>
                                <br>
                                <a href=\"{{path(\"eliminar_cine\", {\"id\":cine.id})}}\" class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">delete</i></a>
                                <a href=\"{{path(\"editar_cine\", {\"id\":cine.id})}}\" class=\"btn-floating btn-large waves-effect waves-light green\"><i class=\"material-icons\">mode_edit</i></a>
                                <a href=\"{{path(\"entrada_nueva\", {\"id\":cine.id})}}\" class=\"waves-effect waves-light btn left-align\">Ir a este cine</a>
                            </div>
                        </li>
                    </ul>
            {% endfor %}
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class=\"col s12 m6 l6\" id=\"map\" >

        </div>


    </div>
    </div>


    <script>
        var latitud=0;
        var longitud=0;
        var miLat=0;
        var miLong=0;

        \$(document ).ready(function() {
            navigator.geolocation.getCurrentPosition(showPosition);
            function showPosition(position) {
                miLat =  (position.coords.latitude);
                miLong = (position.coords.longitude);
                initMap(miLat, miLong);
            }
        });


        \$(\".verMap\").click(function() {
            \$.getJSON(\"https://maps.googleapis.com/maps/api/geocode/json?address=\"+\$(this).data(\"ubicacion\") +\"Rio Cuarto\"+\"&key=AIzaSyDOrsRsupsXpwHVPEqAKWHvZtBDSTCOEt4\", function (coordenada) {
                latitud = (coordenada.results[0].geometry.location.lat);
                longitud = (coordenada.results[0].geometry.location.lng);

                initMap(latitud, longitud);   //llamo a la funcion de google declarada abajo con los parametrod de la fip

                navigator.geolocation.getCurrentPosition(showPosition);
                function showPosition(position) {
                    miLat =  (position.coords.latitude);
                    miLong = (position.coords.longitude);
                }
            });
        });

    </script>
    <script>
        var map;
        function initMap(lat,long) {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: lat, lng: long},
                zoom: 15,
                styles: [
                    {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                    {
                        featureType: 'administrative.locality',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'poi',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'geometry',
                        stylers: [{color: '#263c3f'}]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#6b9a76'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry',
                        stylers: [{color: '#38414e'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#212a37'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#9ca5b3'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'geometry',
                        stylers: [{color: '#746855'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#1f2835'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#f3d19c'}]
                    },
                    {
                        featureType: 'transit',
                        elementType: 'geometry',
                        stylers: [{color: '#2f3948'}]
                    },
                    {
                        featureType: 'transit.station',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'geometry',
                        stylers: [{color: '#17263c'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#515c6d'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'labels.text.stroke',
                        stylers: [{color: '#17263c'}]
                    }
                ]
            });
            var marker1 = new google.maps.Marker({     //para qe aparezca el iconito rojo
                position:{lat: lat, lng: long},
                map: map,
                title: \"Cine!!\",
                icon:'https://dgw4q244hguhe.cloudfront.net/~/media/Images/VIP/VIPClubTableImages/ticket.png?la=en&vs=1&d=20160411T163729&hash=7E3FC68D652563B312B1F020DA038C6C3C26B311',
                animation: google.maps.Animation.BOUNCE,
                MarkerLabel: \"CINE!\",
            });

            var marker = new google.maps.Marker({     //para qe aparezca el iconito rojo
                position:{lat: miLat, lng: miLong},
                map: map,
                title: 'Usted esta aqui',
                draggable: true,
                icon:\"https://maxcdn.icons8.com/office/PNG/40/Very_Basic/home-40.png\"

            });
            marker1.setMap(map);   //llama a las dos var anteriores y las ejecuta
            marker.setMap(map)

        }



    </script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDOrsRsupsXpwHVPEqAKWHvZtBDSTCOEt4&callback=initMap\">
    </script>


    </div>

{% endblock %}
", "CineBundle:Cine:index.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Cine/index.html.twig");
    }
}
