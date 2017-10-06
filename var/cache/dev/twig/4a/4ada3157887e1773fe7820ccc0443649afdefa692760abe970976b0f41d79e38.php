<?php

/* CineBundle:Reserva:error.html.twig */
class __TwigTemplate_3efd9caf9fe43d3244142ac641b3869b0326348cc731c4a86b22a10a7bc6fe39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Reserva:error.html.twig", 1);
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
        $__internal_2a3ff344c5985c1355034a69d7b28c0c611b921669aa680f42081159811c8b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3ff344c5985c1355034a69d7b28c0c611b921669aa680f42081159811c8b5e->enter($__internal_2a3ff344c5985c1355034a69d7b28c0c611b921669aa680f42081159811c8b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:error.html.twig"));

        $__internal_bc67d98a0adb5594484528ab8fdc8c18d9dc284feb0d626be8e8076c8bf708ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc67d98a0adb5594484528ab8fdc8c18d9dc284feb0d626be8e8076c8bf708ac->enter($__internal_bc67d98a0adb5594484528ab8fdc8c18d9dc284feb0d626be8e8076c8bf708ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a3ff344c5985c1355034a69d7b28c0c611b921669aa680f42081159811c8b5e->leave($__internal_2a3ff344c5985c1355034a69d7b28c0c611b921669aa680f42081159811c8b5e_prof);

        
        $__internal_bc67d98a0adb5594484528ab8fdc8c18d9dc284feb0d626be8e8076c8bf708ac->leave($__internal_bc67d98a0adb5594484528ab8fdc8c18d9dc284feb0d626be8e8076c8bf708ac_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_29aa22ac3238ba8aca109b92bfdfda31b2c312368390061243201a329f9d8fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29aa22ac3238ba8aca109b92bfdfda31b2c312368390061243201a329f9d8fed->enter($__internal_29aa22ac3238ba8aca109b92bfdfda31b2c312368390061243201a329f9d8fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_aef61afdc5fee24d9bee60d43ce587e594752dee8ea61373083454fb0d34ab56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef61afdc5fee24d9bee60d43ce587e594752dee8ea61373083454fb0d34ab56->enter($__internal_aef61afdc5fee24d9bee60d43ce587e594752dee8ea61373083454fb0d34ab56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div class=\"card\">
    <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQThm6x307tj5SzRnhw2bAOWAhfpXOwJVQZYIx3_iPdYSOAsVll\">
    </div>

    <div class=\"card-content\">
        <span class=\"card-title activator grey-text text-darken-4\">Entradas agotadas !! solo nos quedan ";
        // line 11
        echo twig_escape_filter($this->env, ($context["disponibles"] ?? $this->getContext($context, "disponibles")), "html", null, true);
        echo "<i class=\"material-icons right\">more_vert</i></span>
        <p><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Volver</a></p>
    </div>
</div>
";
        
        $__internal_aef61afdc5fee24d9bee60d43ce587e594752dee8ea61373083454fb0d34ab56->leave($__internal_aef61afdc5fee24d9bee60d43ce587e594752dee8ea61373083454fb0d34ab56_prof);

        
        $__internal_29aa22ac3238ba8aca109b92bfdfda31b2c312368390061243201a329f9d8fed->leave($__internal_29aa22ac3238ba8aca109b92bfdfda31b2c312368390061243201a329f9d8fed_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Reserva:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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

<div class=\"card\">
    <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQThm6x307tj5SzRnhw2bAOWAhfpXOwJVQZYIx3_iPdYSOAsVll\">
    </div>

    <div class=\"card-content\">
        <span class=\"card-title activator grey-text text-darken-4\">Entradas agotadas !! solo nos quedan {{ disponibles }}<i class=\"material-icons right\">more_vert</i></span>
        <p><a href=\"{{path(\"index\")}}\">Volver</a></p>
    </div>
</div>
{% endblock %}", "CineBundle:Reserva:error.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Reserva/error.html.twig");
    }
}
