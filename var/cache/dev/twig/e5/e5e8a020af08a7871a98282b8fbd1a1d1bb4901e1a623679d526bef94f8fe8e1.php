<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c338a711af04d90dc0489dfe0379d3c1c02271b31353bba73e57fe1984d6afa5 extends Twig_Template
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
        $__internal_eaedbf8f77421f634344bf05bf090f8112b426ac4b568b9882b2d275918c7bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaedbf8f77421f634344bf05bf090f8112b426ac4b568b9882b2d275918c7bc2->enter($__internal_eaedbf8f77421f634344bf05bf090f8112b426ac4b568b9882b2d275918c7bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_930dfb5f82ad2504783a962a3b2f05322c60b4feff8515a8e7e26656aa4ff7f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930dfb5f82ad2504783a962a3b2f05322c60b4feff8515a8e7e26656aa4ff7f3->enter($__internal_930dfb5f82ad2504783a962a3b2f05322c60b4feff8515a8e7e26656aa4ff7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_eaedbf8f77421f634344bf05bf090f8112b426ac4b568b9882b2d275918c7bc2->leave($__internal_eaedbf8f77421f634344bf05bf090f8112b426ac4b568b9882b2d275918c7bc2_prof);

        
        $__internal_930dfb5f82ad2504783a962a3b2f05322c60b4feff8515a8e7e26656aa4ff7f3->leave($__internal_930dfb5f82ad2504783a962a3b2f05322c60b4feff8515a8e7e26656aa4ff7f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
