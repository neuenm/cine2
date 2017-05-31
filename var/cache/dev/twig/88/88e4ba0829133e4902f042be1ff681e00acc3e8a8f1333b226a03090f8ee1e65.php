<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d85e295de9f94a240e50ce96bc72b14c1db3eedca0bebd0c799d94baabcc26a6 extends Twig_Template
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
        $__internal_8f6674995098e3b1419de421def3c64bc5c5bac30f78d569b9871df9c2c6f0be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f6674995098e3b1419de421def3c64bc5c5bac30f78d569b9871df9c2c6f0be->enter($__internal_8f6674995098e3b1419de421def3c64bc5c5bac30f78d569b9871df9c2c6f0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_7034912cd71a49281917924055bc3a40e55f1c77e3ffc5769be3e61ebfa6eb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7034912cd71a49281917924055bc3a40e55f1c77e3ffc5769be3e61ebfa6eb64->enter($__internal_7034912cd71a49281917924055bc3a40e55f1c77e3ffc5769be3e61ebfa6eb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8f6674995098e3b1419de421def3c64bc5c5bac30f78d569b9871df9c2c6f0be->leave($__internal_8f6674995098e3b1419de421def3c64bc5c5bac30f78d569b9871df9c2c6f0be_prof);

        
        $__internal_7034912cd71a49281917924055bc3a40e55f1c77e3ffc5769be3e61ebfa6eb64->leave($__internal_7034912cd71a49281917924055bc3a40e55f1c77e3ffc5769be3e61ebfa6eb64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
