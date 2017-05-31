<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c0393b1b7287cf1620ac412d8d0faeff4fde74a4f77df9815778d0a9c16065e3 extends Twig_Template
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
        $__internal_eb03ae309bbe3daa7e146f7a8fcdd02c777c2f95949d86937d2a035e78a6b83d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb03ae309bbe3daa7e146f7a8fcdd02c777c2f95949d86937d2a035e78a6b83d->enter($__internal_eb03ae309bbe3daa7e146f7a8fcdd02c777c2f95949d86937d2a035e78a6b83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d589f932d75674d73ee66f362fa579d01f1c1c84a64cddc5c5e79158f3558e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d589f932d75674d73ee66f362fa579d01f1c1c84a64cddc5c5e79158f3558e7d->enter($__internal_d589f932d75674d73ee66f362fa579d01f1c1c84a64cddc5c5e79158f3558e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_eb03ae309bbe3daa7e146f7a8fcdd02c777c2f95949d86937d2a035e78a6b83d->leave($__internal_eb03ae309bbe3daa7e146f7a8fcdd02c777c2f95949d86937d2a035e78a6b83d_prof);

        
        $__internal_d589f932d75674d73ee66f362fa579d01f1c1c84a64cddc5c5e79158f3558e7d->leave($__internal_d589f932d75674d73ee66f362fa579d01f1c1c84a64cddc5c5e79158f3558e7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
