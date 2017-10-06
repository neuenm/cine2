<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_43cfa4df6fa507a07dd290b4b81fca69b70f03cab0b64e18100a287cfa1b70c6 extends Twig_Template
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
        $__internal_cf77cc65bf7039aec3e3498ec200a6a3dd072fc7ee863340f38d52d127875ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf77cc65bf7039aec3e3498ec200a6a3dd072fc7ee863340f38d52d127875ed5->enter($__internal_cf77cc65bf7039aec3e3498ec200a6a3dd072fc7ee863340f38d52d127875ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_182bc35f81bbcdd8c6d75e99962ceee24dfd8d8a1f22bce7929aa92795b8e73b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182bc35f81bbcdd8c6d75e99962ceee24dfd8d8a1f22bce7929aa92795b8e73b->enter($__internal_182bc35f81bbcdd8c6d75e99962ceee24dfd8d8a1f22bce7929aa92795b8e73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_cf77cc65bf7039aec3e3498ec200a6a3dd072fc7ee863340f38d52d127875ed5->leave($__internal_cf77cc65bf7039aec3e3498ec200a6a3dd072fc7ee863340f38d52d127875ed5_prof);

        
        $__internal_182bc35f81bbcdd8c6d75e99962ceee24dfd8d8a1f22bce7929aa92795b8e73b->leave($__internal_182bc35f81bbcdd8c6d75e99962ceee24dfd8d8a1f22bce7929aa92795b8e73b_prof);

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
