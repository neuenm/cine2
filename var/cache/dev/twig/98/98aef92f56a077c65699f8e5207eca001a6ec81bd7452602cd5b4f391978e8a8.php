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
        $__internal_7e7e26e6bc6fa84d8b720c5627a3d814de38c5e26be90c8355c1dfa41fa83486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7e26e6bc6fa84d8b720c5627a3d814de38c5e26be90c8355c1dfa41fa83486->enter($__internal_7e7e26e6bc6fa84d8b720c5627a3d814de38c5e26be90c8355c1dfa41fa83486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Default:index.html.twig"));

        $__internal_67b27f22f96fd25ba91fefc7248af4faa6516dba58b811d358f063ff9f5dd7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b27f22f96fd25ba91fefc7248af4faa6516dba58b811d358f063ff9f5dd7e9->enter($__internal_67b27f22f96fd25ba91fefc7248af4faa6516dba58b811d358f063ff9f5dd7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e7e26e6bc6fa84d8b720c5627a3d814de38c5e26be90c8355c1dfa41fa83486->leave($__internal_7e7e26e6bc6fa84d8b720c5627a3d814de38c5e26be90c8355c1dfa41fa83486_prof);

        
        $__internal_67b27f22f96fd25ba91fefc7248af4faa6516dba58b811d358f063ff9f5dd7e9->leave($__internal_67b27f22f96fd25ba91fefc7248af4faa6516dba58b811d358f063ff9f5dd7e9_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_32bd2d2e7d645851d245ff22cbd2702a72b48cc3e34021f2296485d5a0cbd256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32bd2d2e7d645851d245ff22cbd2702a72b48cc3e34021f2296485d5a0cbd256->enter($__internal_32bd2d2e7d645851d245ff22cbd2702a72b48cc3e34021f2296485d5a0cbd256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_707818dc1ab467a3073542bffb8ebf87fb69a62a0bc932a931ce64451bc2fa9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707818dc1ab467a3073542bffb8ebf87fb69a62a0bc932a931ce64451bc2fa9c->enter($__internal_707818dc1ab467a3073542bffb8ebf87fb69a62a0bc932a931ce64451bc2fa9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_707818dc1ab467a3073542bffb8ebf87fb69a62a0bc932a931ce64451bc2fa9c->leave($__internal_707818dc1ab467a3073542bffb8ebf87fb69a62a0bc932a931ce64451bc2fa9c_prof);

        
        $__internal_32bd2d2e7d645851d245ff22cbd2702a72b48cc3e34021f2296485d5a0cbd256->leave($__internal_32bd2d2e7d645851d245ff22cbd2702a72b48cc3e34021f2296485d5a0cbd256_prof);

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
