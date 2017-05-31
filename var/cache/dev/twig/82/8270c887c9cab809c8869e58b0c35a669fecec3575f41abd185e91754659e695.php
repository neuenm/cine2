<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ebf05e586466d89badaed167526fa33f798d21d780b16c296530be20a407ec7a extends Twig_Template
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
        $__internal_dd48869a002f52908ddfe882105fd84c3c3a2b261c6a75c3ca1db2e402496e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd48869a002f52908ddfe882105fd84c3c3a2b261c6a75c3ca1db2e402496e5a->enter($__internal_dd48869a002f52908ddfe882105fd84c3c3a2b261c6a75c3ca1db2e402496e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_018755edbd9b6096142e410c41b378b54c29633d54dde28343c102c02e3d3edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018755edbd9b6096142e410c41b378b54c29633d54dde28343c102c02e3d3edf->enter($__internal_018755edbd9b6096142e410c41b378b54c29633d54dde28343c102c02e3d3edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_dd48869a002f52908ddfe882105fd84c3c3a2b261c6a75c3ca1db2e402496e5a->leave($__internal_dd48869a002f52908ddfe882105fd84c3c3a2b261c6a75c3ca1db2e402496e5a_prof);

        
        $__internal_018755edbd9b6096142e410c41b378b54c29633d54dde28343c102c02e3d3edf->leave($__internal_018755edbd9b6096142e410c41b378b54c29633d54dde28343c102c02e3d3edf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
