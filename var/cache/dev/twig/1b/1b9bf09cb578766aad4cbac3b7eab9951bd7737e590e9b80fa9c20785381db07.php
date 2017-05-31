<?php

/* CineBundle:Default:index.html.twig */
class __TwigTemplate_ee482d4082d679cb39355c3b32491740daf42960bdc36dbd48e054df53ff3d4b extends Twig_Template
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
        $__internal_d85c3b507d9d6e780c1f60c6cfdeec64e7e87d8dd2ee07a0cf00871e9ebda0b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d85c3b507d9d6e780c1f60c6cfdeec64e7e87d8dd2ee07a0cf00871e9ebda0b0->enter($__internal_d85c3b507d9d6e780c1f60c6cfdeec64e7e87d8dd2ee07a0cf00871e9ebda0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Default:index.html.twig"));

        $__internal_8553e9aa86d01ccd5d9bd8ea6b0402cc3d0a9776cec872935d15b7c649bf0c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8553e9aa86d01ccd5d9bd8ea6b0402cc3d0a9776cec872935d15b7c649bf0c06->enter($__internal_8553e9aa86d01ccd5d9bd8ea6b0402cc3d0a9776cec872935d15b7c649bf0c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d85c3b507d9d6e780c1f60c6cfdeec64e7e87d8dd2ee07a0cf00871e9ebda0b0->leave($__internal_d85c3b507d9d6e780c1f60c6cfdeec64e7e87d8dd2ee07a0cf00871e9ebda0b0_prof);

        
        $__internal_8553e9aa86d01ccd5d9bd8ea6b0402cc3d0a9776cec872935d15b7c649bf0c06->leave($__internal_8553e9aa86d01ccd5d9bd8ea6b0402cc3d0a9776cec872935d15b7c649bf0c06_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_06550366e7db1c0b41214fa6a06c9af0ab61d58008cdbbe44e1c3536b1e98dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06550366e7db1c0b41214fa6a06c9af0ab61d58008cdbbe44e1c3536b1e98dcc->enter($__internal_06550366e7db1c0b41214fa6a06c9af0ab61d58008cdbbe44e1c3536b1e98dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9fd5389af62125401b363ba72531bc544999ebb7717b2347ed7dc240abec37a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd5389af62125401b363ba72531bc544999ebb7717b2347ed7dc240abec37a7->enter($__internal_9fd5389af62125401b363ba72531bc544999ebb7717b2347ed7dc240abec37a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9fd5389af62125401b363ba72531bc544999ebb7717b2347ed7dc240abec37a7->leave($__internal_9fd5389af62125401b363ba72531bc544999ebb7717b2347ed7dc240abec37a7_prof);

        
        $__internal_06550366e7db1c0b41214fa6a06c9af0ab61d58008cdbbe44e1c3536b1e98dcc->leave($__internal_06550366e7db1c0b41214fa6a06c9af0ab61d58008cdbbe44e1c3536b1e98dcc_prof);

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
