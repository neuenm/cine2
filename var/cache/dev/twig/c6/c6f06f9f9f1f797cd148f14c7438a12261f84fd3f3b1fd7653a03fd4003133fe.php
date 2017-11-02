<?php

/* CineBundle:Funcion:index.html.twig */
class __TwigTemplate_79a3964b2a24b9ea1781fba8b0a918209d31bc6373950c86b56adc615ca606c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Funcion:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CineBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be811198c7898ee298ed6d7439b4196cdadc97cb05a6be29f72832605bdaae7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be811198c7898ee298ed6d7439b4196cdadc97cb05a6be29f72832605bdaae7d->enter($__internal_be811198c7898ee298ed6d7439b4196cdadc97cb05a6be29f72832605bdaae7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:index.html.twig"));

        $__internal_7d06c510918c7027f7c6a7689327ac270476e15020344bbdc76f87766bdce5e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d06c510918c7027f7c6a7689327ac270476e15020344bbdc76f87766bdce5e9->enter($__internal_7d06c510918c7027f7c6a7689327ac270476e15020344bbdc76f87766bdce5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be811198c7898ee298ed6d7439b4196cdadc97cb05a6be29f72832605bdaae7d->leave($__internal_be811198c7898ee298ed6d7439b4196cdadc97cb05a6be29f72832605bdaae7d_prof);

        
        $__internal_7d06c510918c7027f7c6a7689327ac270476e15020344bbdc76f87766bdce5e9->leave($__internal_7d06c510918c7027f7c6a7689327ac270476e15020344bbdc76f87766bdce5e9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7cc07656bd9317d515deb52c08509ac7f46da04b4f05f01864b2eae82945e1f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc07656bd9317d515deb52c08509ac7f46da04b4f05f01864b2eae82945e1f1->enter($__internal_7cc07656bd9317d515deb52c08509ac7f46da04b4f05f01864b2eae82945e1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3775ff2045412eff2f986a0ba80863738725360ef04c814086009f88543d594a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3775ff2045412eff2f986a0ba80863738725360ef04c814086009f88543d594a->enter($__internal_3775ff2045412eff2f986a0ba80863738725360ef04c814086009f88543d594a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h3 class=\"light grey-text text-lighten-3\">Listado de Funciones::</h3>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "        <script>Materialize.toast(\"";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\", 6000, 'rounded')</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    <div class=\"row\">
    <ul class=\"collection col l6\">

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["funciones"] ?? $this->getContext($context, "funciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["funcion"]) {
            // line 12
            echo "                <li class=\"collection-item avatar\">
                    <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idPeli", array()), "imagen", array()))), "html", null, true);
            echo "\" alt=\"\" class=\"circle\">
                    <span class=\"title\"> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idPeli", array()), "nombre", array()), "html", null, true);
            echo "
                    ";
            // line 15
            if (($this->getAttribute($context["funcion"], "disponibles", array()) == 0)) {
                // line 16
                echo "                        <p>AGOTADO!</p>
                    ";
            }
            // line 18
            echo "                    </span>
                    <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idFormato", array()), "nombre", array()), "html", null, true);
            echo " <br>
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idioma", array()), "nombre", array()), "html", null, true);
            echo "
                    ";
            // line 21
            if (array_key_exists("cine", $context)) {
                // line 22
                echo "                        <button data-valo=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "id", array()), "html", null, true);
                echo "\" data-cine=\"";
                echo twig_escape_filter($this->env, ($context["cine"] ?? $this->getContext($context, "cine")), "html", null, true);
                echo "\" onclick=\"ajaxget(this)\"><a>horarios</a> </button>
                    ";
            }
            // line 24
            echo "                    ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                // line 25
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_funcion", array("id" => $this->getAttribute($context["funcion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">delete</i></a>
                        <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_funcion", array("id" => $this->getAttribute($context["funcion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-floating btn-large waves-effect waves-light green\"><i class=\"material-icons\">mode_edit</i></a>
                    ";
            }
            // line 28
            echo "
        </p>
                </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['funcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </ul>

    <div id=\"horarios\" class=\"col l6 right-align \">

    <div/>

    <script type=\"text/javascript\">
        function ajaxget(identificador){

            var conexion;
            if(window.XMLHttpRequest) {
                conexion=new XMLHttpRequest();
            } else {
                conexion=new ActiveXObject(\"Microsoft.XMLHTTP\");
            }
            conexion.onreadystatechange = function() {
                if(conexion.readyState==4 && conexion.status==200) {
                    document.getElementById(\"horarios\").innerHTML=conexion.responseText;
                }
            }
            conexion.open(\"GET\",'/horarios/'+\$(identificador).data('valo')+'/'+\$(identificador).data('cine') ,true);
            conexion.send();
        }
    </script>
";
        
        $__internal_3775ff2045412eff2f986a0ba80863738725360ef04c814086009f88543d594a->leave($__internal_3775ff2045412eff2f986a0ba80863738725360ef04c814086009f88543d594a_prof);

        
        $__internal_7cc07656bd9317d515deb52c08509ac7f46da04b4f05f01864b2eae82945e1f1->leave($__internal_7cc07656bd9317d515deb52c08509ac7f46da04b4f05f01864b2eae82945e1f1_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Funcion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 32,  125 => 28,  120 => 26,  115 => 25,  112 => 24,  104 => 22,  102 => 21,  98 => 20,  94 => 19,  91 => 18,  87 => 16,  85 => 15,  81 => 14,  77 => 13,  74 => 12,  70 => 11,  65 => 8,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block content %}
    <h3 class=\"light grey-text text-lighten-3\">Listado de Funciones::</h3>
    {% for message in app.session.flashbag().get('status') %}
        <script>Materialize.toast(\"{{ message }}\", 6000, 'rounded')</script>
    {% endfor %}
    <div class=\"row\">
    <ul class=\"collection col l6\">

    {% for funcion in funciones %}
                <li class=\"collection-item avatar\">
                    <img src=\"{{asset(\"uploads/\"~funcion.idPeliCopia.idPeli.imagen)}}\" alt=\"\" class=\"circle\">
                    <span class=\"title\"> {{ funcion.idPeliCopia.idPeli.nombre }}
                    {% if funcion.disponibles == 0 %}
                        <p>AGOTADO!</p>
                    {% endif %}
                    </span>
                    <p>{{ funcion.idPeliCopia.idFormato.nombre }} <br>
                        {{ funcion.idPeliCopia.idioma.nombre }}
                    {% if cine is defined %}
                        <button data-valo=\"{{funcion.idPeliCopia.id}}\" data-cine=\"{{ cine }}\" onclick=\"ajaxget(this)\"><a>horarios</a> </button>
                    {% endif %}
                    {%if app.user.role==\"ROLE_ADMIN\" %}
                        <a href=\"{{path(\"eliminar_funcion\", {\"id\":funcion.id})}}\" class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">delete</i></a>
                        <a href=\"{{path(\"editar_funcion\", {\"id\":funcion.id})}}\" class=\"btn-floating btn-large waves-effect waves-light green\"><i class=\"material-icons\">mode_edit</i></a>
                    {% endif %}

        </p>
                </li>
        {% endfor %}
    </ul>

    <div id=\"horarios\" class=\"col l6 right-align \">

    <div/>

    <script type=\"text/javascript\">
        function ajaxget(identificador){

            var conexion;
            if(window.XMLHttpRequest) {
                conexion=new XMLHttpRequest();
            } else {
                conexion=new ActiveXObject(\"Microsoft.XMLHTTP\");
            }
            conexion.onreadystatechange = function() {
                if(conexion.readyState==4 && conexion.status==200) {
                    document.getElementById(\"horarios\").innerHTML=conexion.responseText;
                }
            }
            conexion.open(\"GET\",'/horarios/'+\$(identificador).data('valo')+'/'+\$(identificador).data('cine') ,true);
            conexion.send();
        }
    </script>
{% endblock %}", "CineBundle:Funcion:index.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Funcion/index.html.twig");
    }
}
