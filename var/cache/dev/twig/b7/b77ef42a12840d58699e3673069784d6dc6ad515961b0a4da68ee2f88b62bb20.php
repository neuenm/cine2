<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_93e6d97fe1779f5e1ad3aeb45ba946d842a23dff8c07c99deb961e708599fd1c extends Twig_Template
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
        $__internal_dbe885cc171c778730000f50e171836a9c951ec93a7156bd25ab75ba1f63043c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe885cc171c778730000f50e171836a9c951ec93a7156bd25ab75ba1f63043c->enter($__internal_dbe885cc171c778730000f50e171836a9c951ec93a7156bd25ab75ba1f63043c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_c16e3fbc40e8afa8f13ad721b108de7b821a6522e3dd92fb0211b56a8b51211e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16e3fbc40e8afa8f13ad721b108de7b821a6522e3dd92fb0211b56a8b51211e->enter($__internal_c16e3fbc40e8afa8f13ad721b108de7b821a6522e3dd92fb0211b56a8b51211e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_dbe885cc171c778730000f50e171836a9c951ec93a7156bd25ab75ba1f63043c->leave($__internal_dbe885cc171c778730000f50e171836a9c951ec93a7156bd25ab75ba1f63043c_prof);

        
        $__internal_c16e3fbc40e8afa8f13ad721b108de7b821a6522e3dd92fb0211b56a8b51211e->leave($__internal_c16e3fbc40e8afa8f13ad721b108de7b821a6522e3dd92fb0211b56a8b51211e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
