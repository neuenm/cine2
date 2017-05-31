<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_4b5a8896f844be78cc29ce16bf73623f169ce02e0db28166670a6c37d3130528 extends Twig_Template
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
        $__internal_b6bcbd1bcd47bd481a77c53f67f15b6a10272ee7e15ca087170526def3323fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6bcbd1bcd47bd481a77c53f67f15b6a10272ee7e15ca087170526def3323fdd->enter($__internal_b6bcbd1bcd47bd481a77c53f67f15b6a10272ee7e15ca087170526def3323fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_ee707da91465c4b5cf00059f1994d85091b47af8070bacc014c0129eb87b95ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee707da91465c4b5cf00059f1994d85091b47af8070bacc014c0129eb87b95ee->enter($__internal_ee707da91465c4b5cf00059f1994d85091b47af8070bacc014c0129eb87b95ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b6bcbd1bcd47bd481a77c53f67f15b6a10272ee7e15ca087170526def3323fdd->leave($__internal_b6bcbd1bcd47bd481a77c53f67f15b6a10272ee7e15ca087170526def3323fdd_prof);

        
        $__internal_ee707da91465c4b5cf00059f1994d85091b47af8070bacc014c0129eb87b95ee->leave($__internal_ee707da91465c4b5cf00059f1994d85091b47af8070bacc014c0129eb87b95ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
