<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_1babc699651978b36e072d15ab6d3e370ff62d9367e6aff85e4701d8da4a7608 extends Twig_Template
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
        $__internal_e9d3a19d3476ba61de4ebe76d287c3f6935f92e0552cdeec43fbdcf7de2096b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d3a19d3476ba61de4ebe76d287c3f6935f92e0552cdeec43fbdcf7de2096b1->enter($__internal_e9d3a19d3476ba61de4ebe76d287c3f6935f92e0552cdeec43fbdcf7de2096b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_0f1d4cffb9fd6378c18c067f13a3c0f5edaa1b8782215c9a345d0ec89432109e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1d4cffb9fd6378c18c067f13a3c0f5edaa1b8782215c9a345d0ec89432109e->enter($__internal_0f1d4cffb9fd6378c18c067f13a3c0f5edaa1b8782215c9a345d0ec89432109e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e9d3a19d3476ba61de4ebe76d287c3f6935f92e0552cdeec43fbdcf7de2096b1->leave($__internal_e9d3a19d3476ba61de4ebe76d287c3f6935f92e0552cdeec43fbdcf7de2096b1_prof);

        
        $__internal_0f1d4cffb9fd6378c18c067f13a3c0f5edaa1b8782215c9a345d0ec89432109e->leave($__internal_0f1d4cffb9fd6378c18c067f13a3c0f5edaa1b8782215c9a345d0ec89432109e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
