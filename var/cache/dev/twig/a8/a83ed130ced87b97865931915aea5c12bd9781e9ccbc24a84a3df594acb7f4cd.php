<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_4a5d0037b804a3ce04895392e00ed0ca4ac13f3b16c709538212ff8d1ca2c798 extends Twig_Template
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
        $__internal_b2ab635e21fa2d464692779d2a74b873ad8fc528b3958b3f65e2ecfbe0c91b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ab635e21fa2d464692779d2a74b873ad8fc528b3958b3f65e2ecfbe0c91b8c->enter($__internal_b2ab635e21fa2d464692779d2a74b873ad8fc528b3958b3f65e2ecfbe0c91b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_9a2990bb4f2847673ce2f3fcc932aeeaf9ba7bbbb3f77a6e408cbdd4185c3f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2990bb4f2847673ce2f3fcc932aeeaf9ba7bbbb3f77a6e408cbdd4185c3f63->enter($__internal_9a2990bb4f2847673ce2f3fcc932aeeaf9ba7bbbb3f77a6e408cbdd4185c3f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_b2ab635e21fa2d464692779d2a74b873ad8fc528b3958b3f65e2ecfbe0c91b8c->leave($__internal_b2ab635e21fa2d464692779d2a74b873ad8fc528b3958b3f65e2ecfbe0c91b8c_prof);

        
        $__internal_9a2990bb4f2847673ce2f3fcc932aeeaf9ba7bbbb3f77a6e408cbdd4185c3f63->leave($__internal_9a2990bb4f2847673ce2f3fcc932aeeaf9ba7bbbb3f77a6e408cbdd4185c3f63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
