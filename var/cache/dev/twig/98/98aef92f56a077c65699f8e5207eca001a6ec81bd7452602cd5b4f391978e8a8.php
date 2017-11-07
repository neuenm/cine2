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
        $__internal_bbf5fbf736416cfc934caaa990495f3b92753e88bf20f776a57f41ecfc7e6a82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf5fbf736416cfc934caaa990495f3b92753e88bf20f776a57f41ecfc7e6a82->enter($__internal_bbf5fbf736416cfc934caaa990495f3b92753e88bf20f776a57f41ecfc7e6a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Default:index.html.twig"));

        $__internal_0a95e2aeb0dc172d8dfa9d7926d63ddb12a08a2e6f2125db646918789e773d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a95e2aeb0dc172d8dfa9d7926d63ddb12a08a2e6f2125db646918789e773d63->enter($__internal_0a95e2aeb0dc172d8dfa9d7926d63ddb12a08a2e6f2125db646918789e773d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbf5fbf736416cfc934caaa990495f3b92753e88bf20f776a57f41ecfc7e6a82->leave($__internal_bbf5fbf736416cfc934caaa990495f3b92753e88bf20f776a57f41ecfc7e6a82_prof);

        
        $__internal_0a95e2aeb0dc172d8dfa9d7926d63ddb12a08a2e6f2125db646918789e773d63->leave($__internal_0a95e2aeb0dc172d8dfa9d7926d63ddb12a08a2e6f2125db646918789e773d63_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_9495287cbff29294eb67b45b55cd508671cb2ff1a870c71c2b809b3ca9345fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9495287cbff29294eb67b45b55cd508671cb2ff1a870c71c2b809b3ca9345fd1->enter($__internal_9495287cbff29294eb67b45b55cd508671cb2ff1a870c71c2b809b3ca9345fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_731ea6b3fc33c82ffcc82fcfa3fbfb2fb71cd263a86fe86e546b5a4d4c93e0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731ea6b3fc33c82ffcc82fcfa3fbfb2fb71cd263a86fe86e546b5a4d4c93e0d7->enter($__internal_731ea6b3fc33c82ffcc82fcfa3fbfb2fb71cd263a86fe86e546b5a4d4c93e0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 4
            echo "        <script>Materialize.toast(\"";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\", 6000, 'rounded')</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
    <div  class=\"fuente\"><h1 class=\"white-text center\">Saca tu entrada en solo 4 pasos</h1></div>
     <div class=\"carousel carousel-slider center\" data-indicators=\"true\">
         ";
        // line 9
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 10
            echo "             <div class=\"carousel-fixed-item center\">
                 <a class=\"waves-effect waves-light btn-large\" href=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_cine");
            echo "\" ><i class=\"material-icons right\">forward</i>Empezar</a>
             </div>
         ";
        } else {
            // line 14
            echo "         <div class=\"carousel-fixed-item center\">
             <a class=\"waves-effect waves-light btn-large\" href=\"#modal1\" ><i class=\"material-icons right\">forward</i>Para empezar tenes que iniciar sesion</a>
         </div>
         ";
        }
        // line 18
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
    <h3 class=\" white-text fuente\">Algunos de los Cines que podes elegir ...</h3>
    <div class=\"container top\" >
        <div class=\"row\">
            <div class=\"col s12 m6 l4\"><IMG SRC=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cine/images/logo1.png"), "html", null, true);
        echo "\" width=\"150px\" height=\"150px\"></div>
            <div class=\"col s12 m6 l4\"><IMG SRC=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cine/images/logo2.png"), "html", null, true);
        echo "\" width=\"300px\" height=\"150px\"></div>
            <div class=\"col s12 m6 l4\"><IMG SRC=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cine/images/logo5.png"), "html", null, true);
        echo "\" width=\"300px\" height=\"150px\"></div>
            <div class=\"col s12 m6 l4\"><IMG SRC=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cine/images/logo7.png"), "html", null, true);
        echo "\" width=\"300px\" height=\"150px\"></div>
            <div class=\"col s12 m6 l4\"><IMG SRC=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cine/images/logo6.png"), "html", null, true);
        echo "\" width=\"300px\" height=\"150px\"></div>
            <div class=\"col s12 m6 l4\"><IMG SRC=\"";
        // line 45
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
        
        $__internal_731ea6b3fc33c82ffcc82fcfa3fbfb2fb71cd263a86fe86e546b5a4d4c93e0d7->leave($__internal_731ea6b3fc33c82ffcc82fcfa3fbfb2fb71cd263a86fe86e546b5a4d4c93e0d7_prof);

        
        $__internal_9495287cbff29294eb67b45b55cd508671cb2ff1a870c71c2b809b3ca9345fd1->leave($__internal_9495287cbff29294eb67b45b55cd508671cb2ff1a870c71c2b809b3ca9345fd1_prof);

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
        return array (  129 => 45,  125 => 44,  121 => 43,  117 => 42,  113 => 41,  109 => 40,  85 => 18,  79 => 14,  73 => 11,  70 => 10,  68 => 9,  63 => 6,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    <h3 class=\" white-text fuente\">Algunos de los Cines que podes elegir ...</h3>
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
