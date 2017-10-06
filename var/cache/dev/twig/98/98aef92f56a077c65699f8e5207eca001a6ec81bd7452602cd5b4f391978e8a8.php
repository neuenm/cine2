<?php

/* CineBundle:Default:index.html.twig */
class __TwigTemplate_1b1dfa3ef7b86a76036bd63d88cdbe7804f23acf8d29bc35d54cee41574358ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Default:index.html.twig", 1);
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
        $__internal_c77041d8d8e85004a4bcae1e20cc6efe4ce02467fe8e91bd6c32a5f789fb4298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77041d8d8e85004a4bcae1e20cc6efe4ce02467fe8e91bd6c32a5f789fb4298->enter($__internal_c77041d8d8e85004a4bcae1e20cc6efe4ce02467fe8e91bd6c32a5f789fb4298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Default:index.html.twig"));

        $__internal_069f9126f012314142aef3755dc2ef126decc6fec7206b1eb76ab832667e9c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_069f9126f012314142aef3755dc2ef126decc6fec7206b1eb76ab832667e9c1a->enter($__internal_069f9126f012314142aef3755dc2ef126decc6fec7206b1eb76ab832667e9c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c77041d8d8e85004a4bcae1e20cc6efe4ce02467fe8e91bd6c32a5f789fb4298->leave($__internal_c77041d8d8e85004a4bcae1e20cc6efe4ce02467fe8e91bd6c32a5f789fb4298_prof);

        
        $__internal_069f9126f012314142aef3755dc2ef126decc6fec7206b1eb76ab832667e9c1a->leave($__internal_069f9126f012314142aef3755dc2ef126decc6fec7206b1eb76ab832667e9c1a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_834bca45db264eb358f823c873b30040ccdc368b449e75e219bdbae0196693ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834bca45db264eb358f823c873b30040ccdc368b449e75e219bdbae0196693ae->enter($__internal_834bca45db264eb358f823c873b30040ccdc368b449e75e219bdbae0196693ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5ab22831099c1ab5856491c1a14f69cd81c9d2b92dd73f4fd758486bbf247696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab22831099c1ab5856491c1a14f69cd81c9d2b92dd73f4fd758486bbf247696->enter($__internal_5ab22831099c1ab5856491c1a14f69cd81c9d2b92dd73f4fd758486bbf247696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div  class=\"fuente\"><h1 class=\"white-text center\">Saca tu entrada en solo 4 pasos</h1></div>
     <div class=\"carousel carousel-slider center\" data-indicators=\"true\">
         ";
        // line 5
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 6
            echo "             <div class=\"carousel-fixed-item center\">
                 <a class=\"waves-effect waves-light btn-large\" href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_cine");
            echo "\" ><i class=\"material-icons right\">forward</i>Empezar</a>
             </div>
         ";
        } else {
            // line 10
            echo "         <div class=\"carousel-fixed-item center\">
             <a class=\"waves-effect waves-light btn-large\" href=\"#modal1\" ><i class=\"material-icons right\">forward</i>Para empezar tenes que iniciar sesion</a>
         </div>
         ";
        }
        // line 14
        echo "

         <div class=\"carousel-item blue white-text\" href=\"#four!\">
             <h1 class=\"fuente\">4°</h1>
             <h4 class=\"white-text fuente\">Saca tus entradas y paga como quieras</h4>
         </div>
          <div class=\"carousel-item red white-text\" href=\"#one!\">
               <h1 class=\"fuente\">1°</h1>
               <h4 class=\"white-text fuente\">Elegi el cine que te quede mas comodo</h4>
          </div>
          <div class=\"carousel-item amber white-text\" href=\"#two!\">
               <h1 class=\"fuente\">2°</h1>
               <h4 class=\"white-text fuente\">Elegi la peli que mas te guste</h4>
          </div>
          <div class=\"carousel-item green white-text\" href=\"#three!\">
               <h1 class=\"fuente\">3°</h1>
               <h4 class=\"white-text fuente\">Busca el horario que prefieras</h4>
          </div>
     </div>
    <h3 class=\" white-text fuente\">Algunos de los sines que podes elegir ...</h3>
    <div class=\"container top\" >
        <div class=\"row\">
            <div class=\"col s12 m6 l4\"><IMG SRC=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cine/images/logo1.png"), "html", null, true);
        echo "\" width=\"150px\" height=\"150px\"></div>
            <div class=\"col s12 m6 l4\"><IMG SRC=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cine/images/logo2.png"), "html", null, true);
        echo "\" width=\"300px\" height=\"150px\"></div>
            <div class=\"col s12 m6 l4\"><IMG SRC=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cine/images/logo5.png"), "html", null, true);
        echo "\" width=\"300px\" height=\"150px\"></div>
            <div class=\"col s12 m6 l4\"><IMG SRC=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cine/images/logo7.png"), "html", null, true);
        echo "\" width=\"300px\" height=\"150px\"></div>
            <div class=\"col s12 m6 l4\"><IMG SRC=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cine/images/logo6.png"), "html", null, true);
        echo "\" width=\"300px\" height=\"150px\"></div>
            <div class=\"col s12 m6 l4\"><IMG SRC=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cine/images/logo8.png"), "html", null, true);
        echo "\" width=\"300px\" height=\"250px\"></div>


        </div>
    </div>
     <script>
          \$(document).ready(function(){
               \$('.slider').slider();
               \$('.carousel.carousel-slider').carousel({fullWidth: true});
               \$('.carousel').carousel('next');

          });
     </script>
";
        
        $__internal_5ab22831099c1ab5856491c1a14f69cd81c9d2b92dd73f4fd758486bbf247696->leave($__internal_5ab22831099c1ab5856491c1a14f69cd81c9d2b92dd73f4fd758486bbf247696_prof);

        
        $__internal_834bca45db264eb358f823c873b30040ccdc368b449e75e219bdbae0196693ae->leave($__internal_834bca45db264eb358f823c873b30040ccdc368b449e75e219bdbae0196693ae_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 41,  110 => 40,  106 => 39,  102 => 38,  98 => 37,  94 => 36,  70 => 14,  64 => 10,  58 => 7,  55 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
    <div  class=\"fuente\"><h1 class=\"white-text center\">Saca tu entrada en solo 4 pasos</h1></div>
     <div class=\"carousel carousel-slider center\" data-indicators=\"true\">
         {%if app.user != null%}
             <div class=\"carousel-fixed-item center\">
                 <a class=\"waves-effect waves-light btn-large\" href=\"{{ path('index_cine') }}\" ><i class=\"material-icons right\">forward</i>Empezar</a>
             </div>
         {% else %}
         <div class=\"carousel-fixed-item center\">
             <a class=\"waves-effect waves-light btn-large\" href=\"#modal1\" ><i class=\"material-icons right\">forward</i>Para empezar tenes que iniciar sesion</a>
         </div>
         {% endif %}


         <div class=\"carousel-item blue white-text\" href=\"#four!\">
             <h1 class=\"fuente\">4°</h1>
             <h4 class=\"white-text fuente\">Saca tus entradas y paga como quieras</h4>
         </div>
          <div class=\"carousel-item red white-text\" href=\"#one!\">
               <h1 class=\"fuente\">1°</h1>
               <h4 class=\"white-text fuente\">Elegi el cine que te quede mas comodo</h4>
          </div>
          <div class=\"carousel-item amber white-text\" href=\"#two!\">
               <h1 class=\"fuente\">2°</h1>
               <h4 class=\"white-text fuente\">Elegi la peli que mas te guste</h4>
          </div>
          <div class=\"carousel-item green white-text\" href=\"#three!\">
               <h1 class=\"fuente\">3°</h1>
               <h4 class=\"white-text fuente\">Busca el horario que prefieras</h4>
          </div>
     </div>
    <h3 class=\" white-text fuente\">Algunos de los sines que podes elegir ...</h3>
    <div class=\"container top\" >
        <div class=\"row\">
            <div class=\"col s12 m6 l4\"><IMG SRC=\"{{ asset('bundles/cine/images/logo1.png') }}\" width=\"150px\" height=\"150px\"></div>
            <div class=\"col s12 m6 l4\"><IMG SRC=\"{{ asset('bundles/cine/images/logo2.png') }}\" width=\"300px\" height=\"150px\"></div>
            <div class=\"col s12 m6 l4\"><IMG SRC=\"{{ asset('bundles/cine/images/logo5.png') }}\" width=\"300px\" height=\"150px\"></div>
            <div class=\"col s12 m6 l4\"><IMG SRC=\"{{ asset('bundles/cine/images/logo7.png') }}\" width=\"300px\" height=\"150px\"></div>
            <div class=\"col s12 m6 l4\"><IMG SRC=\"{{ asset('bundles/cine/images/logo6.png') }}\" width=\"300px\" height=\"150px\"></div>
            <div class=\"col s12 m6 l4\"><IMG SRC=\"{{ asset('bundles/cine/images/logo8.png') }}\" width=\"300px\" height=\"250px\"></div>


        </div>
    </div>
     <script>
          \$(document).ready(function(){
               \$('.slider').slider();
               \$('.carousel.carousel-slider').carousel({fullWidth: true});
               \$('.carousel').carousel('next');

          });
     </script>
{% endblock %}
", "CineBundle:Default:index.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Default/index.html.twig");
    }
}
