<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_928c700f1bd55e7d3ce8c237ede9f16eb961626e4bf9ade239529ad63438dae4 extends Twig_Template
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
        $__internal_56156afb87ae6e2f354a9ecc32bd606db3aa58775f7900f081e3e03866466854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56156afb87ae6e2f354a9ecc32bd606db3aa58775f7900f081e3e03866466854->enter($__internal_56156afb87ae6e2f354a9ecc32bd606db3aa58775f7900f081e3e03866466854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_21b9d6cdbbfe5480a3a353682cb179e2f922ca1fc8f1241595c3edae56b5336c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b9d6cdbbfe5480a3a353682cb179e2f922ca1fc8f1241595c3edae56b5336c->enter($__internal_21b9d6cdbbfe5480a3a353682cb179e2f922ca1fc8f1241595c3edae56b5336c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_56156afb87ae6e2f354a9ecc32bd606db3aa58775f7900f081e3e03866466854->leave($__internal_56156afb87ae6e2f354a9ecc32bd606db3aa58775f7900f081e3e03866466854_prof);

        
        $__internal_21b9d6cdbbfe5480a3a353682cb179e2f922ca1fc8f1241595c3edae56b5336c->leave($__internal_21b9d6cdbbfe5480a3a353682cb179e2f922ca1fc8f1241595c3edae56b5336c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
