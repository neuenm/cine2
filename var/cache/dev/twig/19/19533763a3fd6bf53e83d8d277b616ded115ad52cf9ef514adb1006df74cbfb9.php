<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_95d7afa5dccedf33d5c5855dd7cff6cece12ad2c9179c95e5f380d3d7bc24e66 extends Twig_Template
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
        $__internal_31f18a3448d2cc304c1adb2502bb8d35bc5c5c5b4a9590890623904b99784d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f18a3448d2cc304c1adb2502bb8d35bc5c5c5b4a9590890623904b99784d4c->enter($__internal_31f18a3448d2cc304c1adb2502bb8d35bc5c5c5b4a9590890623904b99784d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ddd3fde1f700cf383f132b92ff7276d70ee5dadce8ba974eeda080a9e548ecff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd3fde1f700cf383f132b92ff7276d70ee5dadce8ba974eeda080a9e548ecff->enter($__internal_ddd3fde1f700cf383f132b92ff7276d70ee5dadce8ba974eeda080a9e548ecff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_31f18a3448d2cc304c1adb2502bb8d35bc5c5c5b4a9590890623904b99784d4c->leave($__internal_31f18a3448d2cc304c1adb2502bb8d35bc5c5c5b4a9590890623904b99784d4c_prof);

        
        $__internal_ddd3fde1f700cf383f132b92ff7276d70ee5dadce8ba974eeda080a9e548ecff->leave($__internal_ddd3fde1f700cf383f132b92ff7276d70ee5dadce8ba974eeda080a9e548ecff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
