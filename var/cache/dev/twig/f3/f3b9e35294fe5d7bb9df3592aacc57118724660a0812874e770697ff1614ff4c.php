<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_382cb4ce311e8c69b48b919f3b3e30f7628e8de53aa225e6994d726162bb1125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2faa5ff614a0e923626d0cb432458b0d10f688ea8e78d3efd53198cde57ab397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2faa5ff614a0e923626d0cb432458b0d10f688ea8e78d3efd53198cde57ab397->enter($__internal_2faa5ff614a0e923626d0cb432458b0d10f688ea8e78d3efd53198cde57ab397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_76b8fc24fdac045122b60fab1bdd3b19e4f9935a9cac7e13efa221c5a6bbe4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b8fc24fdac045122b60fab1bdd3b19e4f9935a9cac7e13efa221c5a6bbe4fa->enter($__internal_76b8fc24fdac045122b60fab1bdd3b19e4f9935a9cac7e13efa221c5a6bbe4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2faa5ff614a0e923626d0cb432458b0d10f688ea8e78d3efd53198cde57ab397->leave($__internal_2faa5ff614a0e923626d0cb432458b0d10f688ea8e78d3efd53198cde57ab397_prof);

        
        $__internal_76b8fc24fdac045122b60fab1bdd3b19e4f9935a9cac7e13efa221c5a6bbe4fa->leave($__internal_76b8fc24fdac045122b60fab1bdd3b19e4f9935a9cac7e13efa221c5a6bbe4fa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_86d2ae1e30cec48d984e3f5b7a2f99db888e072b9647922c0fc7ba4b800e8512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d2ae1e30cec48d984e3f5b7a2f99db888e072b9647922c0fc7ba4b800e8512->enter($__internal_86d2ae1e30cec48d984e3f5b7a2f99db888e072b9647922c0fc7ba4b800e8512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3c739a8f3b6d8c4f19c41ec7f9bed91a70af03e3b0dfff5a2b3635e40610d8ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c739a8f3b6d8c4f19c41ec7f9bed91a70af03e3b0dfff5a2b3635e40610d8ea->enter($__internal_3c739a8f3b6d8c4f19c41ec7f9bed91a70af03e3b0dfff5a2b3635e40610d8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3c739a8f3b6d8c4f19c41ec7f9bed91a70af03e3b0dfff5a2b3635e40610d8ea->leave($__internal_3c739a8f3b6d8c4f19c41ec7f9bed91a70af03e3b0dfff5a2b3635e40610d8ea_prof);

        
        $__internal_86d2ae1e30cec48d984e3f5b7a2f99db888e072b9647922c0fc7ba4b800e8512->leave($__internal_86d2ae1e30cec48d984e3f5b7a2f99db888e072b9647922c0fc7ba4b800e8512_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
