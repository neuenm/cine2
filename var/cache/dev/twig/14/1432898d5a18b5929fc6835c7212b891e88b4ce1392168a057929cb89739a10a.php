<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c6f06d42be8bf90389e58359ef7b6d90c87b52f4126969fecd20e7ec7bc4287d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2095a012a5cd41b76f2c24a167f17b72c1f809373cb19232e82ba637c3fa060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2095a012a5cd41b76f2c24a167f17b72c1f809373cb19232e82ba637c3fa060->enter($__internal_f2095a012a5cd41b76f2c24a167f17b72c1f809373cb19232e82ba637c3fa060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3db48947220463756040f90c82ba329a2dc3c1b39e82b555d45fbfedee82b79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db48947220463756040f90c82ba329a2dc3c1b39e82b555d45fbfedee82b79f->enter($__internal_3db48947220463756040f90c82ba329a2dc3c1b39e82b555d45fbfedee82b79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f2095a012a5cd41b76f2c24a167f17b72c1f809373cb19232e82ba637c3fa060->leave($__internal_f2095a012a5cd41b76f2c24a167f17b72c1f809373cb19232e82ba637c3fa060_prof);

        
        $__internal_3db48947220463756040f90c82ba329a2dc3c1b39e82b555d45fbfedee82b79f->leave($__internal_3db48947220463756040f90c82ba329a2dc3c1b39e82b555d45fbfedee82b79f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
