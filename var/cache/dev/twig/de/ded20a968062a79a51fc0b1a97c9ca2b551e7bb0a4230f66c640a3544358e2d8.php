<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_bd42d5eef0b87f337d802967f44c3e314a467f4bf0b7652af4ac76f340c5c619 extends Twig_Template
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
        $__internal_a3adad572e78db0294139b9b1602c36c6d3adc75644012e0f53c7890b0b48c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3adad572e78db0294139b9b1602c36c6d3adc75644012e0f53c7890b0b48c7f->enter($__internal_a3adad572e78db0294139b9b1602c36c6d3adc75644012e0f53c7890b0b48c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_383a5bc5bae3a4788648bb97f3c4109defab8588a3979cf78ea28d959684087e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383a5bc5bae3a4788648bb97f3c4109defab8588a3979cf78ea28d959684087e->enter($__internal_383a5bc5bae3a4788648bb97f3c4109defab8588a3979cf78ea28d959684087e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a3adad572e78db0294139b9b1602c36c6d3adc75644012e0f53c7890b0b48c7f->leave($__internal_a3adad572e78db0294139b9b1602c36c6d3adc75644012e0f53c7890b0b48c7f_prof);

        
        $__internal_383a5bc5bae3a4788648bb97f3c4109defab8588a3979cf78ea28d959684087e->leave($__internal_383a5bc5bae3a4788648bb97f3c4109defab8588a3979cf78ea28d959684087e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
