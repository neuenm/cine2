<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fe527007acf5d27a058d7cc714e187ad085376dff826d0e7e109bf7efeaf0710 extends Twig_Template
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
        $__internal_8658952b5ba8a158d7c625c9fbd32811fc7b77f0db0438ab5e721676f42feb9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8658952b5ba8a158d7c625c9fbd32811fc7b77f0db0438ab5e721676f42feb9a->enter($__internal_8658952b5ba8a158d7c625c9fbd32811fc7b77f0db0438ab5e721676f42feb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_e362c4880603003b0fcb8cfdba7ca998c65e6a34414613279d9738df927ac2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e362c4880603003b0fcb8cfdba7ca998c65e6a34414613279d9738df927ac2fb->enter($__internal_e362c4880603003b0fcb8cfdba7ca998c65e6a34414613279d9738df927ac2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8658952b5ba8a158d7c625c9fbd32811fc7b77f0db0438ab5e721676f42feb9a->leave($__internal_8658952b5ba8a158d7c625c9fbd32811fc7b77f0db0438ab5e721676f42feb9a_prof);

        
        $__internal_e362c4880603003b0fcb8cfdba7ca998c65e6a34414613279d9738df927ac2fb->leave($__internal_e362c4880603003b0fcb8cfdba7ca998c65e6a34414613279d9738df927ac2fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
