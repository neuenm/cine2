<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2860e5c2f8c997d9d0dcb582a6c488d9a51615957c5bde6e68a1c68889f2393e extends Twig_Template
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
        $__internal_a4ecc91f8e459a588ab1b1df9c68d244b265cd43de523aa695e9682603bafdd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ecc91f8e459a588ab1b1df9c68d244b265cd43de523aa695e9682603bafdd0->enter($__internal_a4ecc91f8e459a588ab1b1df9c68d244b265cd43de523aa695e9682603bafdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e260065f083c03775ec00fbc8200a0dfeb93a97a07455041e3a233a08b8e4952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e260065f083c03775ec00fbc8200a0dfeb93a97a07455041e3a233a08b8e4952->enter($__internal_e260065f083c03775ec00fbc8200a0dfeb93a97a07455041e3a233a08b8e4952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a4ecc91f8e459a588ab1b1df9c68d244b265cd43de523aa695e9682603bafdd0->leave($__internal_a4ecc91f8e459a588ab1b1df9c68d244b265cd43de523aa695e9682603bafdd0_prof);

        
        $__internal_e260065f083c03775ec00fbc8200a0dfeb93a97a07455041e3a233a08b8e4952->leave($__internal_e260065f083c03775ec00fbc8200a0dfeb93a97a07455041e3a233a08b8e4952_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
