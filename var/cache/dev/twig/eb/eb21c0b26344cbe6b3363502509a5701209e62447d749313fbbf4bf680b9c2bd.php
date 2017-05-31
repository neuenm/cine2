<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_088aed55407e96c4139af374847046f6fd0123ccbb4bffe982caf1fab75cd443 extends Twig_Template
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
        $__internal_d43e42eed9d477ca14f33f2d00545cf192a5de6e8881125b8b37616b8a1806b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43e42eed9d477ca14f33f2d00545cf192a5de6e8881125b8b37616b8a1806b8->enter($__internal_d43e42eed9d477ca14f33f2d00545cf192a5de6e8881125b8b37616b8a1806b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_f1dc665c4dd543616e8176fedf12a9a73a9fd36ef3de968147780b6a42dfe230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1dc665c4dd543616e8176fedf12a9a73a9fd36ef3de968147780b6a42dfe230->enter($__internal_f1dc665c4dd543616e8176fedf12a9a73a9fd36ef3de968147780b6a42dfe230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d43e42eed9d477ca14f33f2d00545cf192a5de6e8881125b8b37616b8a1806b8->leave($__internal_d43e42eed9d477ca14f33f2d00545cf192a5de6e8881125b8b37616b8a1806b8_prof);

        
        $__internal_f1dc665c4dd543616e8176fedf12a9a73a9fd36ef3de968147780b6a42dfe230->leave($__internal_f1dc665c4dd543616e8176fedf12a9a73a9fd36ef3de968147780b6a42dfe230_prof);

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
