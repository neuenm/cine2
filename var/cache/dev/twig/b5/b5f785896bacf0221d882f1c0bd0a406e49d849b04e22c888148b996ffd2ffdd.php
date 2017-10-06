<?php

/* CineBundle:User:registro.html.twig */
class __TwigTemplate_877a28f1a2da1cb08fddfa5e718e195a1dbd84845ba53f1f0ee7eb5acedf6c97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:User:registro.html.twig", 1);
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
        $__internal_d4c7f2b2fcb7a1d3401acb23a3c05c7f3e5939151a84bcbc799409b3e073f156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c7f2b2fcb7a1d3401acb23a3c05c7f3e5939151a84bcbc799409b3e073f156->enter($__internal_d4c7f2b2fcb7a1d3401acb23a3c05c7f3e5939151a84bcbc799409b3e073f156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:User:registro.html.twig"));

        $__internal_1a6e0ea366fac4e9335dec4fd18eed80e13768d7ee42ada7b138ec5f041502d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6e0ea366fac4e9335dec4fd18eed80e13768d7ee42ada7b138ec5f041502d8->enter($__internal_1a6e0ea366fac4e9335dec4fd18eed80e13768d7ee42ada7b138ec5f041502d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:User:registro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4c7f2b2fcb7a1d3401acb23a3c05c7f3e5939151a84bcbc799409b3e073f156->leave($__internal_d4c7f2b2fcb7a1d3401acb23a3c05c7f3e5939151a84bcbc799409b3e073f156_prof);

        
        $__internal_1a6e0ea366fac4e9335dec4fd18eed80e13768d7ee42ada7b138ec5f041502d8->leave($__internal_1a6e0ea366fac4e9335dec4fd18eed80e13768d7ee42ada7b138ec5f041502d8_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_6eaae0c8bf9676c31dc0f1eb877cb651eb059ed47c59ddff38ad5300cd8f543c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eaae0c8bf9676c31dc0f1eb877cb651eb059ed47c59ddff38ad5300cd8f543c->enter($__internal_6eaae0c8bf9676c31dc0f1eb877cb651eb059ed47c59ddff38ad5300cd8f543c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2a0b9cffd00f5321a2c572de1816cf99bf06d69de92af8b5c6d37e556e7c1442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0b9cffd00f5321a2c572de1816cf99bf06d69de92af8b5c6d37e556e7c1442->enter($__internal_2a0b9cffd00f5321a2c572de1816cf99bf06d69de92af8b5c6d37e556e7c1442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 4
            echo "        ";
            if (($context["message"] == "Ahora podes iniciar sesion. Ya podes disfrutar nuestro servicio..")) {
                // line 5
                echo "            <div class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            } else {
                // line 7
                echo "            <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            }
            // line 9
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "

    <h3 class=\"light grey-text text-lighten-3\">A Registrarse...</h3>
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaNac", array()), 'label');
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaNac", array()), 'widget', array("attr" => array("class" => "datepicker")));
        echo "
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_2a0b9cffd00f5321a2c572de1816cf99bf06d69de92af8b5c6d37e556e7c1442->leave($__internal_2a0b9cffd00f5321a2c572de1816cf99bf06d69de92af8b5c6d37e556e7c1442_prof);

        
        $__internal_6eaae0c8bf9676c31dc0f1eb877cb651eb059ed47c59ddff38ad5300cd8f543c->leave($__internal_6eaae0c8bf9676c31dc0f1eb877cb651eb059ed47c59ddff38ad5300cd8f543c_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:User:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 18,  90 => 17,  86 => 16,  82 => 15,  75 => 10,  69 => 9,  63 => 7,  57 => 5,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    {% for message in app.session.flashbag().get('status') %}
        {% if message== \"Ahora podes iniciar sesion. Ya podes disfrutar nuestro servicio..\" %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {%else%}
            <div class=\"alert alert-danger\">{{ message }}</div>
        {% endif %}
    {% endfor %}


    <h3 class=\"light grey-text text-lighten-3\">A Registrarse...</h3>
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
            {{form_start(form)}}
                {{ form_label(form.fechaNac) }}
                {{ form_widget(form.fechaNac, { 'attr': {'class': 'datepicker'}}) }}
            {{form_end(form)}}
        </div>
    </div>
    <div class=\"clearfix\">
{% endblock %}", "CineBundle:User:registro.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/User/registro.html.twig");
    }
}
