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
        $__internal_23a38d52488c05583fc476964320fe1fd241b5c7c180e4dd2e508748322be4bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a38d52488c05583fc476964320fe1fd241b5c7c180e4dd2e508748322be4bf->enter($__internal_23a38d52488c05583fc476964320fe1fd241b5c7c180e4dd2e508748322be4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:prueba.html.twig"));

        $__internal_ac3d0c55b3207c98f4bb6a62d7c65d1a9f50866769c1358ca368f077924f63eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3d0c55b3207c98f4bb6a62d7c65d1a9f50866769c1358ca368f077924f63eb->enter($__internal_ac3d0c55b3207c98f4bb6a62d7c65d1a9f50866769c1358ca368f077924f63eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:prueba.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23a38d52488c05583fc476964320fe1fd241b5c7c180e4dd2e508748322be4bf->leave($__internal_23a38d52488c05583fc476964320fe1fd241b5c7c180e4dd2e508748322be4bf_prof);

        
        $__internal_ac3d0c55b3207c98f4bb6a62d7c65d1a9f50866769c1358ca368f077924f63eb->leave($__internal_ac3d0c55b3207c98f4bb6a62d7c65d1a9f50866769c1358ca368f077924f63eb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_03362128128eccdc8df16282b00aec419276108edd0e57392ec1129fc4719e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03362128128eccdc8df16282b00aec419276108edd0e57392ec1129fc4719e19->enter($__internal_03362128128eccdc8df16282b00aec419276108edd0e57392ec1129fc4719e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1d07c93ccddbde41eb9ef706bf2d8c346a3d7e29f15a61fdcd49ec22ec374334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d07c93ccddbde41eb9ef706bf2d8c346a3d7e29f15a61fdcd49ec22ec374334->enter($__internal_1d07c93ccddbde41eb9ef706bf2d8c346a3d7e29f15a61fdcd49ec22ec374334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h3 class=\"light grey-text text-lighten-3\">Confirmacion... Pago</h3>
    <p class=\"light grey-text text-lighten-3\">En Sacatuentrada.com usamos Mercado Pago para que sea mas facil para todos, si uan no tenes una cuenta create una <h4>

    <img class=\"\" src=\"http://makeoverlab.com.ar/wp-content/uploads/2016/10/mercadopago.png\">
         <button class=\"waves-effect waves-light btn\"><i class=\"material-icons left\">payment</i><a name=\"MP-Checkout\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["preference"] ?? $this->getContext($context, "preference")), "response", array()), "init_point", array()), "html", null, true);
        echo "\" >Pagar</a></button>
    <script type=\"text/javascript\" src=\"//resources.mlstatic.com/mptools/render.js\"></script>
";
        
        $__internal_1d07c93ccddbde41eb9ef706bf2d8c346a3d7e29f15a61fdcd49ec22ec374334->leave($__internal_1d07c93ccddbde41eb9ef706bf2d8c346a3d7e29f15a61fdcd49ec22ec374334_prof);

        
        $__internal_03362128128eccdc8df16282b00aec419276108edd0e57392ec1129fc4719e19->leave($__internal_03362128128eccdc8df16282b00aec419276108edd0e57392ec1129fc4719e19_prof);

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
         <button class=\"waves-effect waves-light btn\"><i class=\"material-icons left\">payment</i><a name=\"MP-Checkout\" href=\"{{ preference.response.init_point }}\" >Pagar</a></button>
    <script type=\"text/javascript\" src=\"//resources.mlstatic.com/mptools/render.js\"></script>
{% endblock %}", "CineBundle:Reserva:prueba.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Reserva/prueba.html.twig");
    }
}
