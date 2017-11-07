<?php

/* CineBundle:Pelicula:edita.html.twig */
class __TwigTemplate_d84c0c3233b08503434f3d9bc0adc200f7d48b2e034d2040feca9ee96d39778e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Pelicula:edita.html.twig", 1);
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
        $__internal_000b6bd06e225a48d530e31ddcf9cc64971f09f21e76b05e1a67da7463ee9c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000b6bd06e225a48d530e31ddcf9cc64971f09f21e76b05e1a67da7463ee9c2b->enter($__internal_000b6bd06e225a48d530e31ddcf9cc64971f09f21e76b05e1a67da7463ee9c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:edita.html.twig"));

        $__internal_dfd8c6ca9835aee2835672aebd5ee1ac13a29017ed5c9341fffc151a91899807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd8c6ca9835aee2835672aebd5ee1ac13a29017ed5c9341fffc151a91899807->enter($__internal_dfd8c6ca9835aee2835672aebd5ee1ac13a29017ed5c9341fffc151a91899807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Pelicula:edita.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_000b6bd06e225a48d530e31ddcf9cc64971f09f21e76b05e1a67da7463ee9c2b->leave($__internal_000b6bd06e225a48d530e31ddcf9cc64971f09f21e76b05e1a67da7463ee9c2b_prof);

        
        $__internal_dfd8c6ca9835aee2835672aebd5ee1ac13a29017ed5c9341fffc151a91899807->leave($__internal_dfd8c6ca9835aee2835672aebd5ee1ac13a29017ed5c9341fffc151a91899807_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_d379dffaf165e9992a01066317c725b38abb4502df99a4946daf8576ef6280ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d379dffaf165e9992a01066317c725b38abb4502df99a4946daf8576ef6280ed->enter($__internal_d379dffaf165e9992a01066317c725b38abb4502df99a4946daf8576ef6280ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7e63d1229c391333919a7562d79849fcc4383d942aa9a60bbd7847b702bb36f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e63d1229c391333919a7562d79849fcc4383d942aa9a60bbd7847b702bb36f8->enter($__internal_7e63d1229c391333919a7562d79849fcc4383d942aa9a60bbd7847b702bb36f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"container\">
        <h3  class=\"light grey-text text-lighten-3\">Edicion de la pelicula:</h3>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "            <script>Materialize.toast(\"";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\", 6000, 'rounded')</script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-4 \">
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
            <p class=\"col-md-3 col-sm-6 pull-right \" style=\"margin-right:10px; margin-left:10px\"><img class=\"img-rounded\" width=\"250\" height=\"400\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute(($context["pelicula"] ?? $this->getContext($context, "pelicula")), "imagen", array()))), "html", null, true);
        echo "\"/></p>
        </div>
        </div>
        <div class=\"clearfix\">
    </div>
";
        
        $__internal_7e63d1229c391333919a7562d79849fcc4383d942aa9a60bbd7847b702bb36f8->leave($__internal_7e63d1229c391333919a7562d79849fcc4383d942aa9a60bbd7847b702bb36f8_prof);

        
        $__internal_d379dffaf165e9992a01066317c725b38abb4502df99a4946daf8576ef6280ed->leave($__internal_d379dffaf165e9992a01066317c725b38abb4502df99a4946daf8576ef6280ed_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Pelicula:edita.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  75 => 14,  71 => 13,  66 => 10,  57 => 8,  53 => 7,  49 => 5,  40 => 4,  11 => 1,);
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
    <div class=\"container\">
        <h3  class=\"light grey-text text-lighten-3\">Edicion de la pelicula:</h3>
        {% for message in app.session.flashbag().get('status') %}
            <script>Materialize.toast(\"{{ message }}\", 6000, 'rounded')</script>
        {% endfor %}
        <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-4 \">
                {{form_start(form)}}
                {{form_end(form)}}
            </div>
            <p class=\"col-md-3 col-sm-6 pull-right \" style=\"margin-right:10px; margin-left:10px\"><img class=\"img-rounded\" width=\"250\" height=\"400\" src=\"{{ asset(\"uploads/\"~pelicula.imagen)}}\"/></p>
        </div>
        </div>
        <div class=\"clearfix\">
    </div>
{% endblock %}", "CineBundle:Pelicula:edita.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Pelicula/edita.html.twig");
    }
}
