<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_49c05e13b8949c84e9e73a70a98e15cd00313f651e3a93dc2a03709a6e89049b extends Twig_Template
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
        $__internal_9f194685c4492b7533c0b9b36496b94b4b0b4c174add4e06bc81988f9a4c55d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f194685c4492b7533c0b9b36496b94b4b0b4c174add4e06bc81988f9a4c55d6->enter($__internal_9f194685c4492b7533c0b9b36496b94b4b0b4c174add4e06bc81988f9a4c55d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_6f3874c61c76bfa8fb00e7cfc4c6d14ad4912c05e084e58dba45b67496e1c200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3874c61c76bfa8fb00e7cfc4c6d14ad4912c05e084e58dba45b67496e1c200->enter($__internal_6f3874c61c76bfa8fb00e7cfc4c6d14ad4912c05e084e58dba45b67496e1c200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9f194685c4492b7533c0b9b36496b94b4b0b4c174add4e06bc81988f9a4c55d6->leave($__internal_9f194685c4492b7533c0b9b36496b94b4b0b4c174add4e06bc81988f9a4c55d6_prof);

        
        $__internal_6f3874c61c76bfa8fb00e7cfc4c6d14ad4912c05e084e58dba45b67496e1c200->leave($__internal_6f3874c61c76bfa8fb00e7cfc4c6d14ad4912c05e084e58dba45b67496e1c200_prof);

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
