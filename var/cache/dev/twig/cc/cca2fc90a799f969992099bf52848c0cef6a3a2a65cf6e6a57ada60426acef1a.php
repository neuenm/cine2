<?php

/* CineBundle:Reserva:exito.html.twig */
class __TwigTemplate_5e64bd9101fb2f4a23581a1031d01eee76394de0bd1c60f23fac5d22d49030d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Reserva:exito.html.twig", 1);
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
        $__internal_8e46f297e1c93449b22ccbe740b0eaf737337dba4674bf27fa56b6aa90c9c920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e46f297e1c93449b22ccbe740b0eaf737337dba4674bf27fa56b6aa90c9c920->enter($__internal_8e46f297e1c93449b22ccbe740b0eaf737337dba4674bf27fa56b6aa90c9c920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:exito.html.twig"));

        $__internal_3825f1629a24d19271bc595033a1aefdb047477aded79ea35669ce172d4d540a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3825f1629a24d19271bc595033a1aefdb047477aded79ea35669ce172d4d540a->enter($__internal_3825f1629a24d19271bc595033a1aefdb047477aded79ea35669ce172d4d540a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:exito.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e46f297e1c93449b22ccbe740b0eaf737337dba4674bf27fa56b6aa90c9c920->leave($__internal_8e46f297e1c93449b22ccbe740b0eaf737337dba4674bf27fa56b6aa90c9c920_prof);

        
        $__internal_3825f1629a24d19271bc595033a1aefdb047477aded79ea35669ce172d4d540a->leave($__internal_3825f1629a24d19271bc595033a1aefdb047477aded79ea35669ce172d4d540a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_9f3ba1fe384d939436db945402f2b48ffd9aca50fe5724c2b4d10bfb2973a772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f3ba1fe384d939436db945402f2b48ffd9aca50fe5724c2b4d10bfb2973a772->enter($__internal_9f3ba1fe384d939436db945402f2b48ffd9aca50fe5724c2b4d10bfb2973a772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_56eb6d6a5c9bfbc0f14713fe5bbb575edef5e75ab9f8b877c19ae5e1f3baa1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56eb6d6a5c9bfbc0f14713fe5bbb575edef5e75ab9f8b877c19ae5e1f3baa1dc->enter($__internal_56eb6d6a5c9bfbc0f14713fe5bbb575edef5e75ab9f8b877c19ae5e1f3baa1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <h2 class=\"white-text\">Ya tenes tus entradas!!</h2>
    <h3 class=\"white-text\" >Ahora solo te queda ir al cine y escanear este codigo en la boleteria rapida y obtener tus entradas (sacale una foto al codigo y cuando estes en el cine la boleteria rapida te va a pedir que le muestres tu codigo QR)</h3>
    <button id=\"codigo\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["codigo"] ?? $this->getContext($context, "codigo")), "html", null, true);
        echo "\" onclick=\"mostrarqr()\" class=\"waves-effect waves-light btn\">Ver codigo QR</button>
    <div class=\"center\" id=\"divCodigo\"></div>

    <h5 class=\"white-text\">Si no tenes bateria o preferis anotar el codigo podes:     <button id=\"texto\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["codigo"] ?? $this->getContext($context, "codigo")), "html", null, true);
        echo "\" onclick=\"mostrartexto()\" class=\"waves-effect waves-light btn\">Ver codigo texto</button>
    </h5>

    <div class=\"center-align white-text\" id=\"divTexto\"><h2>";
        // line 12
        echo twig_escape_filter($this->env, ($context["codigo"] ?? $this->getContext($context, "codigo")), "html", null, true);
        echo "</h2></div>


    <p><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Volver</a></p>

<script>
    \$( document ).ready(function() {
        \$(\"#divTexto\").toggle();
    });

    function mostrarqr() {
        var codigo =\$('#codigo').val();
        \$(\"#divCodigo\").empty();
        \$(\"#divCodigo\").qrcode({
            width:300,
            height: 300,
            text: codigo
        });

    }
    function mostrartexto() {
        \$(\"#divTexto\").toggle();
        }



</script>

";
        
        $__internal_56eb6d6a5c9bfbc0f14713fe5bbb575edef5e75ab9f8b877c19ae5e1f3baa1dc->leave($__internal_56eb6d6a5c9bfbc0f14713fe5bbb575edef5e75ab9f8b877c19ae5e1f3baa1dc_prof);

        
        $__internal_9f3ba1fe384d939436db945402f2b48ffd9aca50fe5724c2b4d10bfb2973a772->leave($__internal_9f3ba1fe384d939436db945402f2b48ffd9aca50fe5724c2b4d10bfb2973a772_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Reserva:exito.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  66 => 12,  60 => 9,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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

    <h2 class=\"white-text\">Ya tenes tus entradas!!</h2>
    <h3 class=\"white-text\" >Ahora solo te queda ir al cine y escanear este codigo en la boleteria rapida y obtener tus entradas (sacale una foto al codigo y cuando estes en el cine la boleteria rapida te va a pedir que le muestres tu codigo QR)</h3>
    <button id=\"codigo\" value=\"{{ codigo }}\" onclick=\"mostrarqr()\" class=\"waves-effect waves-light btn\">Ver codigo QR</button>
    <div class=\"center\" id=\"divCodigo\"></div>

    <h5 class=\"white-text\">Si no tenes bateria o preferis anotar el codigo podes:     <button id=\"texto\" value=\"{{ codigo }}\" onclick=\"mostrartexto()\" class=\"waves-effect waves-light btn\">Ver codigo texto</button>
    </h5>

    <div class=\"center-align white-text\" id=\"divTexto\"><h2>{{ codigo }}</h2></div>


    <p><a href=\"{{path(\"index\")}}\">Volver</a></p>

<script>
    \$( document ).ready(function() {
        \$(\"#divTexto\").toggle();
    });

    function mostrarqr() {
        var codigo =\$('#codigo').val();
        \$(\"#divCodigo\").empty();
        \$(\"#divCodigo\").qrcode({
            width:300,
            height: 300,
            text: codigo
        });

    }
    function mostrartexto() {
        \$(\"#divTexto\").toggle();
        }



</script>

{% endblock %}", "CineBundle:Reserva:exito.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Reserva/exito.html.twig");
    }
}
