<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9ee74711064f84c8aafc5e578c9732d32ad9184033e0190a76f6eb7e38ed4620 extends Twig_Template
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
        $__internal_17dde9d43ab11c0c787d7a9b0e2ee7ec5139b54ee39776425e54b3f51760b6c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17dde9d43ab11c0c787d7a9b0e2ee7ec5139b54ee39776425e54b3f51760b6c7->enter($__internal_17dde9d43ab11c0c787d7a9b0e2ee7ec5139b54ee39776425e54b3f51760b6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_973c2f41eac0ee21d974aaf450e1ba049647352470217361335092fa1d078b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973c2f41eac0ee21d974aaf450e1ba049647352470217361335092fa1d078b4b->enter($__internal_973c2f41eac0ee21d974aaf450e1ba049647352470217361335092fa1d078b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_17dde9d43ab11c0c787d7a9b0e2ee7ec5139b54ee39776425e54b3f51760b6c7->leave($__internal_17dde9d43ab11c0c787d7a9b0e2ee7ec5139b54ee39776425e54b3f51760b6c7_prof);

        
        $__internal_973c2f41eac0ee21d974aaf450e1ba049647352470217361335092fa1d078b4b->leave($__internal_973c2f41eac0ee21d974aaf450e1ba049647352470217361335092fa1d078b4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
