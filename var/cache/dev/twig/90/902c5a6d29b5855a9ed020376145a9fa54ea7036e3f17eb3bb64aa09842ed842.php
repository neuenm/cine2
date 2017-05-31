<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d24c51838a6bffd90c607402fb6aca098c9f7b4b506b065f66d3e66a1f9f4060 extends Twig_Template
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
        $__internal_56351c307a7d70e38afaddb674db7ef44f64c23979b28e24b85367b6d2690e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56351c307a7d70e38afaddb674db7ef44f64c23979b28e24b85367b6d2690e98->enter($__internal_56351c307a7d70e38afaddb674db7ef44f64c23979b28e24b85367b6d2690e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e6607e1c9c83f51f70d4d3cd2538af82ddeb7c72380bbb1a99718ef544617d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6607e1c9c83f51f70d4d3cd2538af82ddeb7c72380bbb1a99718ef544617d90->enter($__internal_e6607e1c9c83f51f70d4d3cd2538af82ddeb7c72380bbb1a99718ef544617d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_56351c307a7d70e38afaddb674db7ef44f64c23979b28e24b85367b6d2690e98->leave($__internal_56351c307a7d70e38afaddb674db7ef44f64c23979b28e24b85367b6d2690e98_prof);

        
        $__internal_e6607e1c9c83f51f70d4d3cd2538af82ddeb7c72380bbb1a99718ef544617d90->leave($__internal_e6607e1c9c83f51f70d4d3cd2538af82ddeb7c72380bbb1a99718ef544617d90_prof);

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
