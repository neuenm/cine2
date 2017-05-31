<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6fbcd91bfd5c5e4e2461d575dbc4896693f14c6111f45844ccab3384e99bcc4d extends Twig_Template
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
        $__internal_5adad9823a03b6796421963dad0fc4aa08c28746fa8182f1c744adc2b18e21ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5adad9823a03b6796421963dad0fc4aa08c28746fa8182f1c744adc2b18e21ff->enter($__internal_5adad9823a03b6796421963dad0fc4aa08c28746fa8182f1c744adc2b18e21ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f448850d4234b18a6e3383cf89ba992ba8d3301e926f0c8d9a0491a51c54ab04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f448850d4234b18a6e3383cf89ba992ba8d3301e926f0c8d9a0491a51c54ab04->enter($__internal_f448850d4234b18a6e3383cf89ba992ba8d3301e926f0c8d9a0491a51c54ab04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_5adad9823a03b6796421963dad0fc4aa08c28746fa8182f1c744adc2b18e21ff->leave($__internal_5adad9823a03b6796421963dad0fc4aa08c28746fa8182f1c744adc2b18e21ff_prof);

        
        $__internal_f448850d4234b18a6e3383cf89ba992ba8d3301e926f0c8d9a0491a51c54ab04->leave($__internal_f448850d4234b18a6e3383cf89ba992ba8d3301e926f0c8d9a0491a51c54ab04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
