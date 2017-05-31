<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7f1a45908ead9090137e08091ab679e1869474b22f0bef4b45cf2f023beec13f extends Twig_Template
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
        $__internal_bd3e14a974188e7cbbfaee2b90a4ac801089765603d24f58084a9f9ee5f71488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd3e14a974188e7cbbfaee2b90a4ac801089765603d24f58084a9f9ee5f71488->enter($__internal_bd3e14a974188e7cbbfaee2b90a4ac801089765603d24f58084a9f9ee5f71488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_9ae6809eaa3d4fabf6d1412319349bea28a2419d21c2e3f8bb3f8b5a0d6568a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae6809eaa3d4fabf6d1412319349bea28a2419d21c2e3f8bb3f8b5a0d6568a5->enter($__internal_9ae6809eaa3d4fabf6d1412319349bea28a2419d21c2e3f8bb3f8b5a0d6568a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_bd3e14a974188e7cbbfaee2b90a4ac801089765603d24f58084a9f9ee5f71488->leave($__internal_bd3e14a974188e7cbbfaee2b90a4ac801089765603d24f58084a9f9ee5f71488_prof);

        
        $__internal_9ae6809eaa3d4fabf6d1412319349bea28a2419d21c2e3f8bb3f8b5a0d6568a5->leave($__internal_9ae6809eaa3d4fabf6d1412319349bea28a2419d21c2e3f8bb3f8b5a0d6568a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
