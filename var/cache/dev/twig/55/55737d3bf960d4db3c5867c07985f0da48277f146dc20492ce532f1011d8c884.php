<?php

/* CineBundle:Reserva:prueba.html.twig */
class __TwigTemplate_69994bd051e749e4a1325e1cf59a85caba44d7b63149ed05a99581bb378267ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Reserva:prueba.html.twig", 1);
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
        $__internal_bf9f4b76c682bb29e29c9049006654816e13ddc6970c7f3139cb15a7cf9d9c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9f4b76c682bb29e29c9049006654816e13ddc6970c7f3139cb15a7cf9d9c31->enter($__internal_bf9f4b76c682bb29e29c9049006654816e13ddc6970c7f3139cb15a7cf9d9c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:prueba.html.twig"));

        $__internal_3b9998b44b8dfea53278bed3cc35fa35502e1c1d230b18b4964b626a2eba308d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9998b44b8dfea53278bed3cc35fa35502e1c1d230b18b4964b626a2eba308d->enter($__internal_3b9998b44b8dfea53278bed3cc35fa35502e1c1d230b18b4964b626a2eba308d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:prueba.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf9f4b76c682bb29e29c9049006654816e13ddc6970c7f3139cb15a7cf9d9c31->leave($__internal_bf9f4b76c682bb29e29c9049006654816e13ddc6970c7f3139cb15a7cf9d9c31_prof);

        
        $__internal_3b9998b44b8dfea53278bed3cc35fa35502e1c1d230b18b4964b626a2eba308d->leave($__internal_3b9998b44b8dfea53278bed3cc35fa35502e1c1d230b18b4964b626a2eba308d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3c37eab22b7a3a5d37912481e2b5b0e0fb4e9fc7b866ff4cd98d7409b9c4edfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c37eab22b7a3a5d37912481e2b5b0e0fb4e9fc7b866ff4cd98d7409b9c4edfa->enter($__internal_3c37eab22b7a3a5d37912481e2b5b0e0fb4e9fc7b866ff4cd98d7409b9c4edfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_44cb4b0e0138ca4b77ff26a543756491b46b090fe8a333ff0343de8172ebfe1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44cb4b0e0138ca4b77ff26a543756491b46b090fe8a333ff0343de8172ebfe1f->enter($__internal_44cb4b0e0138ca4b77ff26a543756491b46b090fe8a333ff0343de8172ebfe1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h3 class=\"light grey-text text-lighten-3\">Confirmacion... Pago</h3>
    <p class=\"light grey-text text-lighten-3\">En Sacatuentrada.com usamos Mercado Pago para que sea mas facil para todos, si uan no tenes una cuenta create una <h4>

    <img class=\"\" src=\"http://makeoverlab.com.ar/wp-content/uploads/2016/10/mercadopago.png\">
    <button class=\"waves-effect waves-light btn\"><i class=\"material-icons left\">payment</i><a name=\"MP-Checkout\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["preference"] ?? $this->getContext($context, "preference")), "response", array()), "init_point", array()), "html", null, true);
        echo "\">Pagar</a></button>
    <script type=\"text/javascript\" src=\"//resources.mlstatic.com/mptools/render.js\"></script>
";
        
        $__internal_44cb4b0e0138ca4b77ff26a543756491b46b090fe8a333ff0343de8172ebfe1f->leave($__internal_44cb4b0e0138ca4b77ff26a543756491b46b090fe8a333ff0343de8172ebfe1f_prof);

        
        $__internal_3c37eab22b7a3a5d37912481e2b5b0e0fb4e9fc7b866ff4cd98d7409b9c4edfa->leave($__internal_3c37eab22b7a3a5d37912481e2b5b0e0fb4e9fc7b866ff4cd98d7409b9c4edfa_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Reserva:prueba.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <button class=\"waves-effect waves-light btn\"><i class=\"material-icons left\">payment</i><a name=\"MP-Checkout\" href=\"{{ preference.response.init_point }}\">Pagar</a></button>
    <script type=\"text/javascript\" src=\"//resources.mlstatic.com/mptools/render.js\"></script>
{% endblock %}", "CineBundle:Reserva:prueba.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Reserva/prueba.html.twig");
    }
}
