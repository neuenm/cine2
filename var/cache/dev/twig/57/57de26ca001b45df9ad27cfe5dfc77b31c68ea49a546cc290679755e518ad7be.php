<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8ca35c741c53deb2eae986d130ebef13d180170fefaeac5e70ae1d771f7e09e3 extends Twig_Template
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
        $__internal_d445f84f090bd8e4f7a3f9304105cbf01b1f4c2ca70e2b3f0f831065802c4521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d445f84f090bd8e4f7a3f9304105cbf01b1f4c2ca70e2b3f0f831065802c4521->enter($__internal_d445f84f090bd8e4f7a3f9304105cbf01b1f4c2ca70e2b3f0f831065802c4521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_1ea7147d32d6d14070abaec0604ae60232539f1c4f3a6a3ad25ca9f1309124d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea7147d32d6d14070abaec0604ae60232539f1c4f3a6a3ad25ca9f1309124d2->enter($__internal_1ea7147d32d6d14070abaec0604ae60232539f1c4f3a6a3ad25ca9f1309124d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d445f84f090bd8e4f7a3f9304105cbf01b1f4c2ca70e2b3f0f831065802c4521->leave($__internal_d445f84f090bd8e4f7a3f9304105cbf01b1f4c2ca70e2b3f0f831065802c4521_prof);

        
        $__internal_1ea7147d32d6d14070abaec0604ae60232539f1c4f3a6a3ad25ca9f1309124d2->leave($__internal_1ea7147d32d6d14070abaec0604ae60232539f1c4f3a6a3ad25ca9f1309124d2_prof);

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
