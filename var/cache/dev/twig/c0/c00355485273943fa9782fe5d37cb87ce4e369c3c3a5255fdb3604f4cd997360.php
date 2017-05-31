<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e6edc42f55d3c39052e08df7255db127de489cbd08a73c6216bfac31e535808d extends Twig_Template
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
        $__internal_86cc7071fdc55dff746412a0a96b9436d1598525bec922e2e2c6dc819a1caf06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86cc7071fdc55dff746412a0a96b9436d1598525bec922e2e2c6dc819a1caf06->enter($__internal_86cc7071fdc55dff746412a0a96b9436d1598525bec922e2e2c6dc819a1caf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_a50f9eedcfc9d53954dc9180860e4c68e9224ed7c0612b2cdf222db6ad768ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50f9eedcfc9d53954dc9180860e4c68e9224ed7c0612b2cdf222db6ad768ddc->enter($__internal_a50f9eedcfc9d53954dc9180860e4c68e9224ed7c0612b2cdf222db6ad768ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_86cc7071fdc55dff746412a0a96b9436d1598525bec922e2e2c6dc819a1caf06->leave($__internal_86cc7071fdc55dff746412a0a96b9436d1598525bec922e2e2c6dc819a1caf06_prof);

        
        $__internal_a50f9eedcfc9d53954dc9180860e4c68e9224ed7c0612b2cdf222db6ad768ddc->leave($__internal_a50f9eedcfc9d53954dc9180860e4c68e9224ed7c0612b2cdf222db6ad768ddc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
