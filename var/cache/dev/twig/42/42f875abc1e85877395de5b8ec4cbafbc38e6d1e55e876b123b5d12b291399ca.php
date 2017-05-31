<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3d2c7425441f8f0c3f07e3460420439686e33b53833f2c03432a381b413f2342 extends Twig_Template
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
        $__internal_64aa99202416c930e3d8b64d808a2cbde2d90aeb6e4e7e4799d36fad8dfd17ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64aa99202416c930e3d8b64d808a2cbde2d90aeb6e4e7e4799d36fad8dfd17ca->enter($__internal_64aa99202416c930e3d8b64d808a2cbde2d90aeb6e4e7e4799d36fad8dfd17ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a74e4368c2aab7af08879823386986af7ad571cd7e63e3664f018b900bb22dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74e4368c2aab7af08879823386986af7ad571cd7e63e3664f018b900bb22dc4->enter($__internal_a74e4368c2aab7af08879823386986af7ad571cd7e63e3664f018b900bb22dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_64aa99202416c930e3d8b64d808a2cbde2d90aeb6e4e7e4799d36fad8dfd17ca->leave($__internal_64aa99202416c930e3d8b64d808a2cbde2d90aeb6e4e7e4799d36fad8dfd17ca_prof);

        
        $__internal_a74e4368c2aab7af08879823386986af7ad571cd7e63e3664f018b900bb22dc4->leave($__internal_a74e4368c2aab7af08879823386986af7ad571cd7e63e3664f018b900bb22dc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
