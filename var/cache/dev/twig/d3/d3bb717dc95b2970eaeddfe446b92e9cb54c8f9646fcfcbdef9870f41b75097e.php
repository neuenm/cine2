<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3ca726a765665cdc1618bd7ebd4ce7e48793bb9f06479b81ea76d7ee186b491a extends Twig_Template
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
        $__internal_c114ce15f4026c2152f54241958d12d232105967ec523b099425547f94e0cb1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c114ce15f4026c2152f54241958d12d232105967ec523b099425547f94e0cb1d->enter($__internal_c114ce15f4026c2152f54241958d12d232105967ec523b099425547f94e0cb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_bd47d1b36da82d6ead6ef0211fc66aa6b3a9842bfca5209b7136b9f4213ef069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd47d1b36da82d6ead6ef0211fc66aa6b3a9842bfca5209b7136b9f4213ef069->enter($__internal_bd47d1b36da82d6ead6ef0211fc66aa6b3a9842bfca5209b7136b9f4213ef069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c114ce15f4026c2152f54241958d12d232105967ec523b099425547f94e0cb1d->leave($__internal_c114ce15f4026c2152f54241958d12d232105967ec523b099425547f94e0cb1d_prof);

        
        $__internal_bd47d1b36da82d6ead6ef0211fc66aa6b3a9842bfca5209b7136b9f4213ef069->leave($__internal_bd47d1b36da82d6ead6ef0211fc66aa6b3a9842bfca5209b7136b9f4213ef069_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
