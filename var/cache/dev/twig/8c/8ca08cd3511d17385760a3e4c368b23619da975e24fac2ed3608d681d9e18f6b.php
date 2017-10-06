<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5dd881581bc15836809338988f2ffb1d30def9304e678fa262239ebe510c712a extends Twig_Template
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
        $__internal_e0868308a0b51cf933f236db799e1300e7bea4ca87a0dbc98ab1639ea9786c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0868308a0b51cf933f236db799e1300e7bea4ca87a0dbc98ab1639ea9786c93->enter($__internal_e0868308a0b51cf933f236db799e1300e7bea4ca87a0dbc98ab1639ea9786c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_a504a1265a9e26b30dd5ef08d23f137dc6577f37ab3b96cd3cae93b6a7661ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a504a1265a9e26b30dd5ef08d23f137dc6577f37ab3b96cd3cae93b6a7661ea6->enter($__internal_a504a1265a9e26b30dd5ef08d23f137dc6577f37ab3b96cd3cae93b6a7661ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e0868308a0b51cf933f236db799e1300e7bea4ca87a0dbc98ab1639ea9786c93->leave($__internal_e0868308a0b51cf933f236db799e1300e7bea4ca87a0dbc98ab1639ea9786c93_prof);

        
        $__internal_a504a1265a9e26b30dd5ef08d23f137dc6577f37ab3b96cd3cae93b6a7661ea6->leave($__internal_a504a1265a9e26b30dd5ef08d23f137dc6577f37ab3b96cd3cae93b6a7661ea6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
