<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_21130c7f6407b251e9c21950ab66e05b328aafbe1c8ad2cf7cf4aa4ebc628683 extends Twig_Template
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
        $__internal_36dd9fa5e87f5fa765818787daa4a0d91f79ef29e011e5c483d82b5db02a6247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36dd9fa5e87f5fa765818787daa4a0d91f79ef29e011e5c483d82b5db02a6247->enter($__internal_36dd9fa5e87f5fa765818787daa4a0d91f79ef29e011e5c483d82b5db02a6247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_17b1d2e3187e983515f4c67a6373075a62554bbdfdfd489dfec2c45775ef1cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b1d2e3187e983515f4c67a6373075a62554bbdfdfd489dfec2c45775ef1cb2->enter($__internal_17b1d2e3187e983515f4c67a6373075a62554bbdfdfd489dfec2c45775ef1cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_36dd9fa5e87f5fa765818787daa4a0d91f79ef29e011e5c483d82b5db02a6247->leave($__internal_36dd9fa5e87f5fa765818787daa4a0d91f79ef29e011e5c483d82b5db02a6247_prof);

        
        $__internal_17b1d2e3187e983515f4c67a6373075a62554bbdfdfd489dfec2c45775ef1cb2->leave($__internal_17b1d2e3187e983515f4c67a6373075a62554bbdfdfd489dfec2c45775ef1cb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
