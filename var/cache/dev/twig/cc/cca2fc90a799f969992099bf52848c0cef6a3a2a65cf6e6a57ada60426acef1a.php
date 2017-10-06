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
        $__internal_8e8895217afeee9e406f5950a74eb9e5ce12379408fc018ede4f1d8b12a5ee1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8895217afeee9e406f5950a74eb9e5ce12379408fc018ede4f1d8b12a5ee1e->enter($__internal_8e8895217afeee9e406f5950a74eb9e5ce12379408fc018ede4f1d8b12a5ee1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:exito.html.twig"));

        $__internal_6295aab12a6863826e2f6a8dcbab046921b88bab79d4f7e15755d5b81efa73ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6295aab12a6863826e2f6a8dcbab046921b88bab79d4f7e15755d5b81efa73ce->enter($__internal_6295aab12a6863826e2f6a8dcbab046921b88bab79d4f7e15755d5b81efa73ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:exito.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e8895217afeee9e406f5950a74eb9e5ce12379408fc018ede4f1d8b12a5ee1e->leave($__internal_8e8895217afeee9e406f5950a74eb9e5ce12379408fc018ede4f1d8b12a5ee1e_prof);

        
        $__internal_6295aab12a6863826e2f6a8dcbab046921b88bab79d4f7e15755d5b81efa73ce->leave($__internal_6295aab12a6863826e2f6a8dcbab046921b88bab79d4f7e15755d5b81efa73ce_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_5c95f7588ed3848d8f7eebb3d59af5c2d8c2727f09ec0e1a8c8ab84b9a3589d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c95f7588ed3848d8f7eebb3d59af5c2d8c2727f09ec0e1a8c8ab84b9a3589d3->enter($__internal_5c95f7588ed3848d8f7eebb3d59af5c2d8c2727f09ec0e1a8c8ab84b9a3589d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_803fa925151f869907072be6388befccbda7f91bf57773e79cdb2b6fc0b0e3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803fa925151f869907072be6388befccbda7f91bf57773e79cdb2b6fc0b0e3e0->enter($__internal_803fa925151f869907072be6388befccbda7f91bf57773e79cdb2b6fc0b0e3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_803fa925151f869907072be6388befccbda7f91bf57773e79cdb2b6fc0b0e3e0->leave($__internal_803fa925151f869907072be6388befccbda7f91bf57773e79cdb2b6fc0b0e3e0_prof);

        
        $__internal_5c95f7588ed3848d8f7eebb3d59af5c2d8c2727f09ec0e1a8c8ab84b9a3589d3->leave($__internal_5c95f7588ed3848d8f7eebb3d59af5c2d8c2727f09ec0e1a8c8ab84b9a3589d3_prof);

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
