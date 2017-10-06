<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3778406ef85a6637d2a2a0be9d378272396e22464ec59695638d364213c2a4f4 extends Twig_Template
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
        $__internal_e301eb07905dbdbff989d07fece8b600f5962be0d51f7fba02329a467800fead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e301eb07905dbdbff989d07fece8b600f5962be0d51f7fba02329a467800fead->enter($__internal_e301eb07905dbdbff989d07fece8b600f5962be0d51f7fba02329a467800fead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_db2ef8750fc0f337215f50c4b2724c66393f4c58d8a9d219bb28e1395a2cb52d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2ef8750fc0f337215f50c4b2724c66393f4c58d8a9d219bb28e1395a2cb52d->enter($__internal_db2ef8750fc0f337215f50c4b2724c66393f4c58d8a9d219bb28e1395a2cb52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e301eb07905dbdbff989d07fece8b600f5962be0d51f7fba02329a467800fead->leave($__internal_e301eb07905dbdbff989d07fece8b600f5962be0d51f7fba02329a467800fead_prof);

        
        $__internal_db2ef8750fc0f337215f50c4b2724c66393f4c58d8a9d219bb28e1395a2cb52d->leave($__internal_db2ef8750fc0f337215f50c4b2724c66393f4c58d8a9d219bb28e1395a2cb52d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_99f51ef042733958a33c48b3f90b386d6ec8dd648a45db64b796d933df10c948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f51ef042733958a33c48b3f90b386d6ec8dd648a45db64b796d933df10c948->enter($__internal_99f51ef042733958a33c48b3f90b386d6ec8dd648a45db64b796d933df10c948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3ffe3709276f031fdc516a8a3206f20f042845fe4ae8145e54cd78accc89b832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffe3709276f031fdc516a8a3206f20f042845fe4ae8145e54cd78accc89b832->enter($__internal_3ffe3709276f031fdc516a8a3206f20f042845fe4ae8145e54cd78accc89b832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3ffe3709276f031fdc516a8a3206f20f042845fe4ae8145e54cd78accc89b832->leave($__internal_3ffe3709276f031fdc516a8a3206f20f042845fe4ae8145e54cd78accc89b832_prof);

        
        $__internal_99f51ef042733958a33c48b3f90b386d6ec8dd648a45db64b796d933df10c948->leave($__internal_99f51ef042733958a33c48b3f90b386d6ec8dd648a45db64b796d933df10c948_prof);

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
