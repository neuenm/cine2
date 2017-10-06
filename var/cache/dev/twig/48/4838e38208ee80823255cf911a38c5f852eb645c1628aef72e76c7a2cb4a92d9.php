<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8a72aa64d0b831e00b010149ab4ce976eb1e3850427d11304701fa2c6628539c extends Twig_Template
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
        $__internal_ee87db73949c2b16df2a574df14cfa8e23d83fbf5d7b36fe99086f9b8ead724e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee87db73949c2b16df2a574df14cfa8e23d83fbf5d7b36fe99086f9b8ead724e->enter($__internal_ee87db73949c2b16df2a574df14cfa8e23d83fbf5d7b36fe99086f9b8ead724e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a10206f8d4d90247b1c3820aac08e574f2f7998f3aca3c498a7126fa899dced9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10206f8d4d90247b1c3820aac08e574f2f7998f3aca3c498a7126fa899dced9->enter($__internal_a10206f8d4d90247b1c3820aac08e574f2f7998f3aca3c498a7126fa899dced9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_ee87db73949c2b16df2a574df14cfa8e23d83fbf5d7b36fe99086f9b8ead724e->leave($__internal_ee87db73949c2b16df2a574df14cfa8e23d83fbf5d7b36fe99086f9b8ead724e_prof);

        
        $__internal_a10206f8d4d90247b1c3820aac08e574f2f7998f3aca3c498a7126fa899dced9->leave($__internal_a10206f8d4d90247b1c3820aac08e574f2f7998f3aca3c498a7126fa899dced9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
