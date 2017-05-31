<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_20c2fdd99a640badbe60982cd2708a6e48cc13582239f3bb08e1b9d4217b3849 extends Twig_Template
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
        $__internal_f95fdda446ed1f496b8ca7c31e13c57c866bfea4eda9b103f906eeb70185cc9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95fdda446ed1f496b8ca7c31e13c57c866bfea4eda9b103f906eeb70185cc9b->enter($__internal_f95fdda446ed1f496b8ca7c31e13c57c866bfea4eda9b103f906eeb70185cc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f519a45bd6818f7d938ca11f8e9ae823b290adacfcc85643f9067ff228f1d66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f519a45bd6818f7d938ca11f8e9ae823b290adacfcc85643f9067ff228f1d66c->enter($__internal_f519a45bd6818f7d938ca11f8e9ae823b290adacfcc85643f9067ff228f1d66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f95fdda446ed1f496b8ca7c31e13c57c866bfea4eda9b103f906eeb70185cc9b->leave($__internal_f95fdda446ed1f496b8ca7c31e13c57c866bfea4eda9b103f906eeb70185cc9b_prof);

        
        $__internal_f519a45bd6818f7d938ca11f8e9ae823b290adacfcc85643f9067ff228f1d66c->leave($__internal_f519a45bd6818f7d938ca11f8e9ae823b290adacfcc85643f9067ff228f1d66c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
