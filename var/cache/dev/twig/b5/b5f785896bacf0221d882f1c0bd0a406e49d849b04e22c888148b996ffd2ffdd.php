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
        $__internal_6360701b27cd080e67122d19c241a7b34e51213bb2081071cda4fb0b6930ca48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6360701b27cd080e67122d19c241a7b34e51213bb2081071cda4fb0b6930ca48->enter($__internal_6360701b27cd080e67122d19c241a7b34e51213bb2081071cda4fb0b6930ca48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:User:registro.html.twig"));

        $__internal_b082970249b0833647e7492cad9b8de0468fab8fbc05612a0c112b780435a97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b082970249b0833647e7492cad9b8de0468fab8fbc05612a0c112b780435a97b->enter($__internal_b082970249b0833647e7492cad9b8de0468fab8fbc05612a0c112b780435a97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:User:registro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6360701b27cd080e67122d19c241a7b34e51213bb2081071cda4fb0b6930ca48->leave($__internal_6360701b27cd080e67122d19c241a7b34e51213bb2081071cda4fb0b6930ca48_prof);

        
        $__internal_b082970249b0833647e7492cad9b8de0468fab8fbc05612a0c112b780435a97b->leave($__internal_b082970249b0833647e7492cad9b8de0468fab8fbc05612a0c112b780435a97b_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_22b220e9ef7a6f2720c1dff4a660f64f505c7e8c05b7530f4b44d8259de39270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b220e9ef7a6f2720c1dff4a660f64f505c7e8c05b7530f4b44d8259de39270->enter($__internal_22b220e9ef7a6f2720c1dff4a660f64f505c7e8c05b7530f4b44d8259de39270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e53b3df8a5bc0db7e1dcc9dbef142a72c1f313c5c3a8591c71b0ba9086de7c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53b3df8a5bc0db7e1dcc9dbef142a72c1f313c5c3a8591c71b0ba9086de7c51->enter($__internal_e53b3df8a5bc0db7e1dcc9dbef142a72c1f313c5c3a8591c71b0ba9086de7c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 4
            echo "            <script>Materialize.toast(\"";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\", 6000, 'rounded')</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "

    <h3 class=\"light grey-text text-lighten-3\">A Registrarse...</h3>
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaNac", array()), 'label');
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaNac", array()), 'widget');
        echo "
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_e53b3df8a5bc0db7e1dcc9dbef142a72c1f313c5c3a8591c71b0ba9086de7c51->leave($__internal_e53b3df8a5bc0db7e1dcc9dbef142a72c1f313c5c3a8591c71b0ba9086de7c51_prof);

        
        $__internal_22b220e9ef7a6f2720c1dff4a660f64f505c7e8c05b7530f4b44d8259de39270->leave($__internal_22b220e9ef7a6f2720c1dff4a660f64f505c7e8c05b7530f4b44d8259de39270_prof);

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
        return array (  82 => 14,  78 => 13,  74 => 12,  70 => 11,  63 => 6,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
            <script>Materialize.toast(\"{{ message }}\", 6000, 'rounded')</script>
    {% endfor %}


    <h3 class=\"light grey-text text-lighten-3\">A Registrarse...</h3>
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
            {{form_start(form)}}
                {{ form_label(form.fechaNac) }}
                {{ form_widget(form.fechaNac) }}
            {{form_end(form)}}
        </div>
    </div>
    <div class=\"clearfix\">
{% endblock %}", "CineBundle:User:registro.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/User/registro.html.twig");
    }
}
