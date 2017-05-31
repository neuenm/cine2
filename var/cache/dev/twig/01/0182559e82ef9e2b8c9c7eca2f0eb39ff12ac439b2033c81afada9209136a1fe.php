<?php

/* CineBundle:User:registro.html.twig */
class __TwigTemplate_cd1458e285762dc69135e2a7bba89e6cc061918d4375cd2015e89c8ff416907b extends Twig_Template
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
        $__internal_f244ef6ca72880793f3bf662585e930797be0199f29af84990893bb8f2216825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f244ef6ca72880793f3bf662585e930797be0199f29af84990893bb8f2216825->enter($__internal_f244ef6ca72880793f3bf662585e930797be0199f29af84990893bb8f2216825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:User:registro.html.twig"));

        $__internal_5f3df6bbd3c46d4ac1d608b0642ff60f97e7e04849312c601e9c24eca886eca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3df6bbd3c46d4ac1d608b0642ff60f97e7e04849312c601e9c24eca886eca5->enter($__internal_5f3df6bbd3c46d4ac1d608b0642ff60f97e7e04849312c601e9c24eca886eca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:User:registro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f244ef6ca72880793f3bf662585e930797be0199f29af84990893bb8f2216825->leave($__internal_f244ef6ca72880793f3bf662585e930797be0199f29af84990893bb8f2216825_prof);

        
        $__internal_5f3df6bbd3c46d4ac1d608b0642ff60f97e7e04849312c601e9c24eca886eca5->leave($__internal_5f3df6bbd3c46d4ac1d608b0642ff60f97e7e04849312c601e9c24eca886eca5_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_c74bfaf57b9f9e71adb213175119d5c9649800c4bbdf0842eaa9ebb6597a8ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74bfaf57b9f9e71adb213175119d5c9649800c4bbdf0842eaa9ebb6597a8ece->enter($__internal_c74bfaf57b9f9e71adb213175119d5c9649800c4bbdf0842eaa9ebb6597a8ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_21399712e6ed0a664b343fd1bf75daf6cc9b8743580e2485119f75a12feb4e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21399712e6ed0a664b343fd1bf75daf6cc9b8743580e2485119f75a12feb4e15->enter($__internal_21399712e6ed0a664b343fd1bf75daf6cc9b8743580e2485119f75a12feb4e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNac", array()), 'label');
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNac", array()), 'widget', array("attr" => array("class" => "datepicker")));
        echo "
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_21399712e6ed0a664b343fd1bf75daf6cc9b8743580e2485119f75a12feb4e15->leave($__internal_21399712e6ed0a664b343fd1bf75daf6cc9b8743580e2485119f75a12feb4e15_prof);

        
        $__internal_c74bfaf57b9f9e71adb213175119d5c9649800c4bbdf0842eaa9ebb6597a8ece->leave($__internal_c74bfaf57b9f9e71adb213175119d5c9649800c4bbdf0842eaa9ebb6597a8ece_prof);

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
