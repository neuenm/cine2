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
        $__internal_c5c884388d29de1f27101cc7b7710a38402358501930ed0259dfcc6e84c1ef43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c884388d29de1f27101cc7b7710a38402358501930ed0259dfcc6e84c1ef43->enter($__internal_c5c884388d29de1f27101cc7b7710a38402358501930ed0259dfcc6e84c1ef43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:index.html.twig"));

        $__internal_741a562101d4139aca950f22d9b37b64172ddaece2226a112114ad137fd7f567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741a562101d4139aca950f22d9b37b64172ddaece2226a112114ad137fd7f567->enter($__internal_741a562101d4139aca950f22d9b37b64172ddaece2226a112114ad137fd7f567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5c884388d29de1f27101cc7b7710a38402358501930ed0259dfcc6e84c1ef43->leave($__internal_c5c884388d29de1f27101cc7b7710a38402358501930ed0259dfcc6e84c1ef43_prof);

        
        $__internal_741a562101d4139aca950f22d9b37b64172ddaece2226a112114ad137fd7f567->leave($__internal_741a562101d4139aca950f22d9b37b64172ddaece2226a112114ad137fd7f567_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_863f2bf2a0fdd488af05759d1e691e2454199617ddcc79502adb645dc1ccf305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863f2bf2a0fdd488af05759d1e691e2454199617ddcc79502adb645dc1ccf305->enter($__internal_863f2bf2a0fdd488af05759d1e691e2454199617ddcc79502adb645dc1ccf305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ee4fa0adb7e996bb483960e89f630f6d143275f7d4534279055bd242c1365e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4fa0adb7e996bb483960e89f630f6d143275f7d4534279055bd242c1365e74->enter($__internal_ee4fa0adb7e996bb483960e89f630f6d143275f7d4534279055bd242c1365e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
    <ul class=\"collection col l9\">

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
            echo "</span>
                    <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idFormato", array()), "nombre", array()), "html", null, true);
            echo " <br>
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idioma", array()), "nombre", array()), "html", null, true);
            echo "
                    <button data-valo=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "id", array()), "html", null, true);
            echo "\" onclick=\"ajaxget(this)\"><a>horarios</a> </button>

        </p>
                </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['funcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </ul>

    <div id=\"horarios\" class=\"col l3 right-align \">



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
            conexion.open(\"GET\",'/horarios/'+\$(identificador).data('valo'),true);
            conexion.send();
        }
    </script>
";
        
        $__internal_ee4fa0adb7e996bb483960e89f630f6d143275f7d4534279055bd242c1365e74->leave($__internal_ee4fa0adb7e996bb483960e89f630f6d143275f7d4534279055bd242c1365e74_prof);

        
        $__internal_863f2bf2a0fdd488af05759d1e691e2454199617ddcc79502adb645dc1ccf305->leave($__internal_863f2bf2a0fdd488af05759d1e691e2454199617ddcc79502adb645dc1ccf305_prof);

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
        return array (  116 => 26,  105 => 21,  101 => 20,  97 => 19,  93 => 18,  89 => 17,  86 => 16,  82 => 15,  77 => 12,  71 => 11,  65 => 9,  59 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <ul class=\"collection col l9\">

    {% for funcion in funciones %}
                <li class=\"collection-item avatar\">
                    <img src=\"{{asset(\"uploads/\"~funcion.idPeliCopia.idPeli.imagen)}}\" alt=\"\" class=\"circle\">
                    <span class=\"title\"> {{ funcion.idPeliCopia.idPeli.nombre }}</span>
                    <p>{{ funcion.idPeliCopia.idFormato.nombre }} <br>
                        {{ funcion.idPeliCopia.idioma.nombre }}
                    <button data-valo=\"{{funcion.idPeliCopia.id}}\" onclick=\"ajaxget(this)\"><a>horarios</a> </button>

        </p>
                </li>
        {% endfor %}
    </ul>

    <div id=\"horarios\" class=\"col l3 right-align \">



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
            conexion.open(\"GET\",'/horarios/'+\$(identificador).data('valo'),true);
            conexion.send();
        }
    </script>
{% endblock %}", "CineBundle:Funcion:index.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Funcion/index.html.twig");
    }
}
