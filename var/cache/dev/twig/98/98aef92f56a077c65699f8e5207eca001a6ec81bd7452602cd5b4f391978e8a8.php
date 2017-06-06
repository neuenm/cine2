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
        $__internal_eb3a472162566038a2b8b496dc26e4984bd3a4c764ed0034b40f25d7f42ab085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3a472162566038a2b8b496dc26e4984bd3a4c764ed0034b40f25d7f42ab085->enter($__internal_eb3a472162566038a2b8b496dc26e4984bd3a4c764ed0034b40f25d7f42ab085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Default:index.html.twig"));

        $__internal_d5727ec7c36c96744f9d4cc439f689b119ca247abe24c1cf159aa41055b44e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5727ec7c36c96744f9d4cc439f689b119ca247abe24c1cf159aa41055b44e51->enter($__internal_d5727ec7c36c96744f9d4cc439f689b119ca247abe24c1cf159aa41055b44e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb3a472162566038a2b8b496dc26e4984bd3a4c764ed0034b40f25d7f42ab085->leave($__internal_eb3a472162566038a2b8b496dc26e4984bd3a4c764ed0034b40f25d7f42ab085_prof);

        
        $__internal_d5727ec7c36c96744f9d4cc439f689b119ca247abe24c1cf159aa41055b44e51->leave($__internal_d5727ec7c36c96744f9d4cc439f689b119ca247abe24c1cf159aa41055b44e51_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_ccc05e11de64a65557dba1533b41f532d64d2dafd6f5e90ddc278a29cd145b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc05e11de64a65557dba1533b41f532d64d2dafd6f5e90ddc278a29cd145b04->enter($__internal_ccc05e11de64a65557dba1533b41f532d64d2dafd6f5e90ddc278a29cd145b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_253a3f0d2d53137a2e16993632c8c41c45f1a76258b1d1eac69253f4f17679ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253a3f0d2d53137a2e16993632c8c41c45f1a76258b1d1eac69253f4f17679ad->enter($__internal_253a3f0d2d53137a2e16993632c8c41c45f1a76258b1d1eac69253f4f17679ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "     <div class=\"carousel carousel-slider center\" data-indicators=\"true\">
          <div class=\"carousel-fixed-item center\">
               <a class=\"btn waves-effect white grey-text darken-text-2\" href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_cine");
        echo "\">Empezar</a>
          </div>
          <div class=\"carousel-item red white-text\" href=\"#one!\">
               <h2>Elegi el cine</h2>
               <p class=\"white-text\">This is your first panel</p>
          </div>
          <div class=\"carousel-item amber white-text\" href=\"#two!\">
               <h2>Elegi la peli</h2>
               <p class=\"white-text\">This is your second panel</p>
          </div>
          <div class=\"carousel-item green white-text\" href=\"#three!\">
               <h2>Elegi la hora</h2>
               <p class=\"white-text\">This is your third panel</p>
          </div>
          <div class=\"carousel-item blue white-text\" href=\"#four!\">
               <h2>Saca tus entradas</h2>
               <p class=\"white-text\">This is your fourth panel</p>
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
        
        $__internal_253a3f0d2d53137a2e16993632c8c41c45f1a76258b1d1eac69253f4f17679ad->leave($__internal_253a3f0d2d53137a2e16993632c8c41c45f1a76258b1d1eac69253f4f17679ad_prof);

        
        $__internal_ccc05e11de64a65557dba1533b41f532d64d2dafd6f5e90ddc278a29cd145b04->leave($__internal_ccc05e11de64a65557dba1533b41f532d64d2dafd6f5e90ddc278a29cd145b04_prof);

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
        return array (  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
     <div class=\"carousel carousel-slider center\" data-indicators=\"true\">
          <div class=\"carousel-fixed-item center\">
               <a class=\"btn waves-effect white grey-text darken-text-2\" href=\"{{ path('index_cine') }}\">Empezar</a>
          </div>
          <div class=\"carousel-item red white-text\" href=\"#one!\">
               <h2>Elegi el cine</h2>
               <p class=\"white-text\">This is your first panel</p>
          </div>
          <div class=\"carousel-item amber white-text\" href=\"#two!\">
               <h2>Elegi la peli</h2>
               <p class=\"white-text\">This is your second panel</p>
          </div>
          <div class=\"carousel-item green white-text\" href=\"#three!\">
               <h2>Elegi la hora</h2>
               <p class=\"white-text\">This is your third panel</p>
          </div>
          <div class=\"carousel-item blue white-text\" href=\"#four!\">
               <h2>Saca tus entradas</h2>
               <p class=\"white-text\">This is your fourth panel</p>
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
