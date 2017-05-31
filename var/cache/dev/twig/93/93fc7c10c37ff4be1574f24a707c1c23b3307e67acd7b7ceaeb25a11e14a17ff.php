<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_5e44c2d9d8b77ca90ed4d6bec19c71d84810f4d15ae830c7d16db70331335456 extends Twig_Template
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
        $__internal_f06cc8b4e49bf1a5cc816d81c348d31ef82f06e401823323b1415ba63de08a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06cc8b4e49bf1a5cc816d81c348d31ef82f06e401823323b1415ba63de08a12->enter($__internal_f06cc8b4e49bf1a5cc816d81c348d31ef82f06e401823323b1415ba63de08a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_471b7358c30c2703dcb270fe0084370233dc17172a31da5957be7ad0c5b9b619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471b7358c30c2703dcb270fe0084370233dc17172a31da5957be7ad0c5b9b619->enter($__internal_471b7358c30c2703dcb270fe0084370233dc17172a31da5957be7ad0c5b9b619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_f06cc8b4e49bf1a5cc816d81c348d31ef82f06e401823323b1415ba63de08a12->leave($__internal_f06cc8b4e49bf1a5cc816d81c348d31ef82f06e401823323b1415ba63de08a12_prof);

        
        $__internal_471b7358c30c2703dcb270fe0084370233dc17172a31da5957be7ad0c5b9b619->leave($__internal_471b7358c30c2703dcb270fe0084370233dc17172a31da5957be7ad0c5b9b619_prof);

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
