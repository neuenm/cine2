<?php

/* CineBundle:Funcion:prueba.html.twig */
class __TwigTemplate_13c9e768ef3cff45920910f9a057b7746dcd2bfa08fe532e94a399e6b56f1cda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Funcion:prueba.html.twig", 1);
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
        $__internal_a69fa4bb443ccdc97276cd1b8237c2dee255ea3ff2ca311bdba857df4b9366d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69fa4bb443ccdc97276cd1b8237c2dee255ea3ff2ca311bdba857df4b9366d3->enter($__internal_a69fa4bb443ccdc97276cd1b8237c2dee255ea3ff2ca311bdba857df4b9366d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:prueba.html.twig"));

        $__internal_e88677322a24c4a50c9147d848b6c560297e09f7254eee7e969dc700924e3af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88677322a24c4a50c9147d848b6c560297e09f7254eee7e969dc700924e3af3->enter($__internal_e88677322a24c4a50c9147d848b6c560297e09f7254eee7e969dc700924e3af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:prueba.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a69fa4bb443ccdc97276cd1b8237c2dee255ea3ff2ca311bdba857df4b9366d3->leave($__internal_a69fa4bb443ccdc97276cd1b8237c2dee255ea3ff2ca311bdba857df4b9366d3_prof);

        
        $__internal_e88677322a24c4a50c9147d848b6c560297e09f7254eee7e969dc700924e3af3->leave($__internal_e88677322a24c4a50c9147d848b6c560297e09f7254eee7e969dc700924e3af3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fe0f064493b8c3a6ff691f6f47ca6eb654f056c7fa917aa4938e6318d85784ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0f064493b8c3a6ff691f6f47ca6eb654f056c7fa917aa4938e6318d85784ad->enter($__internal_fe0f064493b8c3a6ff691f6f47ca6eb654f056c7fa917aa4938e6318d85784ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c64535fdcf9d47f4aa7c52d8024657f091d05cefe48e1d232a55061b81138e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64535fdcf9d47f4aa7c52d8024657f091d05cefe48e1d232a55061b81138e95->enter($__internal_c64535fdcf9d47f4aa7c52d8024657f091d05cefe48e1d232a55061b81138e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h3 class=\"light grey-text text-lighten-3\">Confirmacion... Pago</h3>
    <p class=\"light grey-text text-lighten-3\">En Sacatuentrada.com usamos Mercado Pago para que sea mas facil para todos, si uan no tenes una cuenta create una <h4>

    <img class=\"\" src=\"http://makeoverlab.com.ar/wp-content/uploads/2016/10/mercadopago.png\">
     ";
        // line 8
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 9
            echo "         <button class=\"waves-effect waves-light btn\"><i class=\"material-icons left\">payment</i><a name=\"MP-Checkout\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["preference"] ?? $this->getContext($context, "preference")), "response", array()), "sandbox_init_point", array()), "html", null, true);
            echo "\" >Pagar</a></button>
                Enlace que abre dos ventanas</a>
            ";
        } else {
            // line 12
            echo "
            <button class=\"waves-effect waves-light btn disabled\"><i class=\"material-icons left\">payment</i><a name=\"MP-Checkout\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["preference"] ?? $this->getContext($context, "preference")), "response", array()), "init_point", array()), "html", null, true);
            echo "\" >Pagar</a></button>
         <p class=\"light grey-text text-lighten-3\">Tenes que iniciar sesion para habitar el boton de pago</p>
     ";
        }
        // line 16
        echo "
    <script type=\"text/javascript\" src=\"//resources.mlstatic.com/mptools/render.js\"></script>
";
        
        $__internal_c64535fdcf9d47f4aa7c52d8024657f091d05cefe48e1d232a55061b81138e95->leave($__internal_c64535fdcf9d47f4aa7c52d8024657f091d05cefe48e1d232a55061b81138e95_prof);

        
        $__internal_fe0f064493b8c3a6ff691f6f47ca6eb654f056c7fa917aa4938e6318d85784ad->leave($__internal_fe0f064493b8c3a6ff691f6f47ca6eb654f056c7fa917aa4938e6318d85784ad_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Funcion:prueba.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  67 => 13,  64 => 12,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h3 class=\"light grey-text text-lighten-3\">Confirmacion... Pago</h3>
    <p class=\"light grey-text text-lighten-3\">En Sacatuentrada.com usamos Mercado Pago para que sea mas facil para todos, si uan no tenes una cuenta create una <h4>

    <img class=\"\" src=\"http://makeoverlab.com.ar/wp-content/uploads/2016/10/mercadopago.png\">
     {%if app.user != null%}
         <button class=\"waves-effect waves-light btn\"><i class=\"material-icons left\">payment</i><a name=\"MP-Checkout\" href=\"{{ preference.response.sandbox_init_point }}\" >Pagar</a></button>
                Enlace que abre dos ventanas</a>
            {% else %}

            <button class=\"waves-effect waves-light btn disabled\"><i class=\"material-icons left\">payment</i><a name=\"MP-Checkout\" href=\"{{ preference.response.init_point }}\" >Pagar</a></button>
         <p class=\"light grey-text text-lighten-3\">Tenes que iniciar sesion para habitar el boton de pago</p>
     {% endif %}

    <script type=\"text/javascript\" src=\"//resources.mlstatic.com/mptools/render.js\"></script>
{% endblock %}", "CineBundle:Funcion:prueba.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Funcion/prueba.html.twig");
    }
}
