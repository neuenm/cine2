<?php

/* CineBundle:Funcion:index.html.twig */
class __TwigTemplate_a9008f466dfea84129396b070c8c8c2ceb20236b82d1ca46505ad11ebcb073df extends Twig_Template
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
        $__internal_16ae32b9392d2a4b34cb70b0186c983fee889a7bb20c74e159bd5079a3e42ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ae32b9392d2a4b34cb70b0186c983fee889a7bb20c74e159bd5079a3e42ee8->enter($__internal_16ae32b9392d2a4b34cb70b0186c983fee889a7bb20c74e159bd5079a3e42ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:index.html.twig"));

        $__internal_9c6e0cb0fbcbac0812d1d8b97d9285a0ede595e4cff1362f9fe3f6056df1d52e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6e0cb0fbcbac0812d1d8b97d9285a0ede595e4cff1362f9fe3f6056df1d52e->enter($__internal_9c6e0cb0fbcbac0812d1d8b97d9285a0ede595e4cff1362f9fe3f6056df1d52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16ae32b9392d2a4b34cb70b0186c983fee889a7bb20c74e159bd5079a3e42ee8->leave($__internal_16ae32b9392d2a4b34cb70b0186c983fee889a7bb20c74e159bd5079a3e42ee8_prof);

        
        $__internal_9c6e0cb0fbcbac0812d1d8b97d9285a0ede595e4cff1362f9fe3f6056df1d52e->leave($__internal_9c6e0cb0fbcbac0812d1d8b97d9285a0ede595e4cff1362f9fe3f6056df1d52e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6c6c30be4056cee9c70787f8c5a3dc434dbb1805a5719a125d8b66f78893ee51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c6c30be4056cee9c70787f8c5a3dc434dbb1805a5719a125d8b66f78893ee51->enter($__internal_6c6c30be4056cee9c70787f8c5a3dc434dbb1805a5719a125d8b66f78893ee51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_533002a2527796dcfbbc6a7204ecb062ba608f0843acea8327547f58d813b60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533002a2527796dcfbbc6a7204ecb062ba608f0843acea8327547f58d813b60e->enter($__internal_533002a2527796dcfbbc6a7204ecb062ba608f0843acea8327547f58d813b60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h3 class=\"light grey-text text-lighten-3\">Listado de Funciones:</h3>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
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
        echo "
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["funciones"]) ? $context["funciones"] : $this->getContext($context, "funciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["funcion"]) {
            // line 14
            echo "        <ul class=\"collapsible popout col s12 m10 lighten-3\" data-collapsible=\"expandable\">
            <li>
                <div class=\"collapsible-header grey lighten-1\"><i class=\"material-icons\">theaters</i><h5> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idPeli", array()), "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idFormato", array()), "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idioma", array()), "nombre", array()), "html", null, true);
            echo "</h5></div>
                <div class=\"collapsible-body\">

                </div>
            </li>
        </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['funcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "

";
        
        $__internal_533002a2527796dcfbbc6a7204ecb062ba608f0843acea8327547f58d813b60e->leave($__internal_533002a2527796dcfbbc6a7204ecb062ba608f0843acea8327547f58d813b60e_prof);

        
        $__internal_6c6c30be4056cee9c70787f8c5a3dc434dbb1805a5719a125d8b66f78893ee51->leave($__internal_6c6c30be4056cee9c70787f8c5a3dc434dbb1805a5719a125d8b66f78893ee51_prof);

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
        return array (  105 => 23,  88 => 16,  84 => 14,  80 => 13,  77 => 12,  71 => 11,  65 => 9,  59 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h3 class=\"light grey-text text-lighten-3\">Listado de Funciones:</h3>
    {% for message in app.session.flashbag().get('status') %}
        {% if message== \"Pelicula agregada correctamente\" %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {%else%}
            <div class=\"alert alert-danger\">{{ message }}</div>
        {% endif %}
    {% endfor %}

    {% for funcion in funciones %}
        <ul class=\"collapsible popout col s12 m10 lighten-3\" data-collapsible=\"expandable\">
            <li>
                <div class=\"collapsible-header grey lighten-1\"><i class=\"material-icons\">theaters</i><h5> {{ funcion.idPeliCopia.idPeli.nombre }} {{ funcion.idPeliCopia.idFormato.nombre }} {{ funcion.idPeliCopia.idioma.nombre }}</h5></div>
                <div class=\"collapsible-body\">

                </div>
            </li>
        </ul>
    {% endfor %}


{% endblock %}", "CineBundle:Funcion:index.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Funcion/index.html.twig");
    }
}
