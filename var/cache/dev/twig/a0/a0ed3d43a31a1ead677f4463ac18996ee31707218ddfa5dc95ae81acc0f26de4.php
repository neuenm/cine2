<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e846c2f27e8bf52e59dd2e71d123ee42d64657fde4248bfb523199ee7510d23a extends Twig_Template
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
        $__internal_926e6e793348874e886a995bad2d68f63a8348afd900793de19e5786d2f8848e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926e6e793348874e886a995bad2d68f63a8348afd900793de19e5786d2f8848e->enter($__internal_926e6e793348874e886a995bad2d68f63a8348afd900793de19e5786d2f8848e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3bb7f3b75b1442c00c81fa2c3fd03a83885aadf98aec6141276dd8d4030ca322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb7f3b75b1442c00c81fa2c3fd03a83885aadf98aec6141276dd8d4030ca322->enter($__internal_3bb7f3b75b1442c00c81fa2c3fd03a83885aadf98aec6141276dd8d4030ca322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_926e6e793348874e886a995bad2d68f63a8348afd900793de19e5786d2f8848e->leave($__internal_926e6e793348874e886a995bad2d68f63a8348afd900793de19e5786d2f8848e_prof);

        
        $__internal_3bb7f3b75b1442c00c81fa2c3fd03a83885aadf98aec6141276dd8d4030ca322->leave($__internal_3bb7f3b75b1442c00c81fa2c3fd03a83885aadf98aec6141276dd8d4030ca322_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
