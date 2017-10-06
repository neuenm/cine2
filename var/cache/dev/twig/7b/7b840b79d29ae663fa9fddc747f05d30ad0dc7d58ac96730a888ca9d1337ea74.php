<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_aa15f58eb5b23ff33096a330603351099836f7a58ca0137ee1746301f0e7d28e extends Twig_Template
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
        $__internal_e964cafeed03be2f3c7655441f85dbea80912b960e81e096fe742f94fb24cd9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e964cafeed03be2f3c7655441f85dbea80912b960e81e096fe742f94fb24cd9b->enter($__internal_e964cafeed03be2f3c7655441f85dbea80912b960e81e096fe742f94fb24cd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a8d70f2e857acbf6c0904dce4742469236d4475d5b005b198b7ca96d192ae636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d70f2e857acbf6c0904dce4742469236d4475d5b005b198b7ca96d192ae636->enter($__internal_a8d70f2e857acbf6c0904dce4742469236d4475d5b005b198b7ca96d192ae636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e964cafeed03be2f3c7655441f85dbea80912b960e81e096fe742f94fb24cd9b->leave($__internal_e964cafeed03be2f3c7655441f85dbea80912b960e81e096fe742f94fb24cd9b_prof);

        
        $__internal_a8d70f2e857acbf6c0904dce4742469236d4475d5b005b198b7ca96d192ae636->leave($__internal_a8d70f2e857acbf6c0904dce4742469236d4475d5b005b198b7ca96d192ae636_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
