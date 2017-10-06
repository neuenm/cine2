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
        $__internal_286bff1e464de9b2e1de7e4209440d3a3b4e00843c3864851a53ff64a6e28bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286bff1e464de9b2e1de7e4209440d3a3b4e00843c3864851a53ff64a6e28bfe->enter($__internal_286bff1e464de9b2e1de7e4209440d3a3b4e00843c3864851a53ff64a6e28bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:index.html.twig"));

        $__internal_95b5c1d4d683df5d7d64c9c5b4d599700b09b512b55126f2981c01063451a514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b5c1d4d683df5d7d64c9c5b4d599700b09b512b55126f2981c01063451a514->enter($__internal_95b5c1d4d683df5d7d64c9c5b4d599700b09b512b55126f2981c01063451a514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_286bff1e464de9b2e1de7e4209440d3a3b4e00843c3864851a53ff64a6e28bfe->leave($__internal_286bff1e464de9b2e1de7e4209440d3a3b4e00843c3864851a53ff64a6e28bfe_prof);

        
        $__internal_95b5c1d4d683df5d7d64c9c5b4d599700b09b512b55126f2981c01063451a514->leave($__internal_95b5c1d4d683df5d7d64c9c5b4d599700b09b512b55126f2981c01063451a514_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6f422aa8f6ed7e493c525f343516acb4f80e10cdc15619e7bc719a3ab886804a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f422aa8f6ed7e493c525f343516acb4f80e10cdc15619e7bc719a3ab886804a->enter($__internal_6f422aa8f6ed7e493c525f343516acb4f80e10cdc15619e7bc719a3ab886804a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b2fde39b53a1f6570f81d2cbf01c16bad8d03e3f9fc9e6bf0076d8c28fcfb449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2fde39b53a1f6570f81d2cbf01c16bad8d03e3f9fc9e6bf0076d8c28fcfb449->enter($__internal_b2fde39b53a1f6570f81d2cbf01c16bad8d03e3f9fc9e6bf0076d8c28fcfb449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h3 class=\"light grey-text text-lighten-3\">Listado de Funciones::</h3>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "        ";
            if (($context["message"] == "Pelicula agregada correctamente")) {
                // line 7
                echo "            <div class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            } else {
                // line 9
                echo "            <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            }
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    <div class=\"row\">
    <ul class=\"collection col l6\">

    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["funciones"] ?? $this->getContext($context, "funciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["funcion"]) {
            // line 16
            echo "                <li class=\"collection-item avatar\">
                    <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idPeli", array()), "imagen", array()))), "html", null, true);
            echo "\" alt=\"\" class=\"circle\">
                    <span class=\"title\"> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idPeli", array()), "nombre", array()), "html", null, true);
            echo "
                    ";
            // line 19
            if (($this->getAttribute($context["funcion"], "disponibles", array()) == 0)) {
                // line 20
                echo "                        <p>AGOTADO!</p>
                    ";
            }
            // line 22
            echo "                    </span>
                    <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idFormato", array()), "nombre", array()), "html", null, true);
            echo " <br>
                        ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idioma", array()), "nombre", array()), "html", null, true);
            echo "
                    ";
            // line 25
            if (array_key_exists("cine", $context)) {
                // line 26
                echo "                        <button data-valo=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "id", array()), "html", null, true);
                echo "\" data-cine=\"";
                echo twig_escape_filter($this->env, ($context["cine"] ?? $this->getContext($context, "cine")), "html", null, true);
                echo "\" onclick=\"ajaxget(this)\"><a>horarios</a> </button>
                    ";
            }
            // line 28
            echo "                    ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
                // line 29
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_funcion", array("id" => $this->getAttribute($context["funcion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">delete</i></a>
                        <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_funcion", array("id" => $this->getAttribute($context["funcion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-floating btn-large waves-effect waves-light green\"><i class=\"material-icons\">mode_edit</i></a>
                    ";
            }
            // line 32
            echo "
        </p>
                </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['funcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
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
        
        $__internal_b2fde39b53a1f6570f81d2cbf01c16bad8d03e3f9fc9e6bf0076d8c28fcfb449->leave($__internal_b2fde39b53a1f6570f81d2cbf01c16bad8d03e3f9fc9e6bf0076d8c28fcfb449_prof);

        
        $__internal_6f422aa8f6ed7e493c525f343516acb4f80e10cdc15619e7bc719a3ab886804a->leave($__internal_6f422aa8f6ed7e493c525f343516acb4f80e10cdc15619e7bc719a3ab886804a_prof);

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
        return array (  146 => 36,  137 => 32,  132 => 30,  127 => 29,  124 => 28,  116 => 26,  114 => 25,  110 => 24,  106 => 23,  103 => 22,  99 => 20,  97 => 19,  93 => 18,  89 => 17,  86 => 16,  82 => 15,  77 => 12,  71 => 11,  65 => 9,  59 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        {% if message== \"Pelicula agregada correctamente\" %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {%else%}
            <div class=\"alert alert-danger\">{{ message }}</div>
        {% endif %}
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
