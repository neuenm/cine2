<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e604c17d60b9bbb8f9cac0322a678f018970625992eb1bc06a579c5eff88914b extends Twig_Template
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
        $__internal_651214269ce2a4b106b1c3750f6d0677e53f96f0e843936e484e922565b1fc64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651214269ce2a4b106b1c3750f6d0677e53f96f0e843936e484e922565b1fc64->enter($__internal_651214269ce2a4b106b1c3750f6d0677e53f96f0e843936e484e922565b1fc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_658b9e5ec7da9fcfa6c26026664ece4ab1ab558e395a16241b3cd3e9b8369a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658b9e5ec7da9fcfa6c26026664ece4ab1ab558e395a16241b3cd3e9b8369a63->enter($__internal_658b9e5ec7da9fcfa6c26026664ece4ab1ab558e395a16241b3cd3e9b8369a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_651214269ce2a4b106b1c3750f6d0677e53f96f0e843936e484e922565b1fc64->leave($__internal_651214269ce2a4b106b1c3750f6d0677e53f96f0e843936e484e922565b1fc64_prof);

        
        $__internal_658b9e5ec7da9fcfa6c26026664ece4ab1ab558e395a16241b3cd3e9b8369a63->leave($__internal_658b9e5ec7da9fcfa6c26026664ece4ab1ab558e395a16241b3cd3e9b8369a63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
