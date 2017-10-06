<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_05e4ba2fd294fdec1729ead3147bccf54b5ac9a204e9543a8a9ab09d10e5ee8d extends Twig_Template
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
        $__internal_65ec63297a54a0c55e221293ae927aeb0fa4a6f0af2a987ee4f6f538446b785b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ec63297a54a0c55e221293ae927aeb0fa4a6f0af2a987ee4f6f538446b785b->enter($__internal_65ec63297a54a0c55e221293ae927aeb0fa4a6f0af2a987ee4f6f538446b785b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a53e6168707554178f35bd3ac8601182352f6f23c12f606c81664d3a03048b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53e6168707554178f35bd3ac8601182352f6f23c12f606c81664d3a03048b24->enter($__internal_a53e6168707554178f35bd3ac8601182352f6f23c12f606c81664d3a03048b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_65ec63297a54a0c55e221293ae927aeb0fa4a6f0af2a987ee4f6f538446b785b->leave($__internal_65ec63297a54a0c55e221293ae927aeb0fa4a6f0af2a987ee4f6f538446b785b_prof);

        
        $__internal_a53e6168707554178f35bd3ac8601182352f6f23c12f606c81664d3a03048b24->leave($__internal_a53e6168707554178f35bd3ac8601182352f6f23c12f606c81664d3a03048b24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
