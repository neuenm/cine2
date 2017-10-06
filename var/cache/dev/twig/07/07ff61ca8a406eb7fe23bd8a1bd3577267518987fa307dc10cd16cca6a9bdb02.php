<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5b92c25c5c9b2f32d8bbc27cab807545e111bb03e7b13183f129d14b34485e3a extends Twig_Template
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
        $__internal_3b128eeaa04ce000b8aa23ede7a0313229d096a44e3dedf0abf2e0ca27d92847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b128eeaa04ce000b8aa23ede7a0313229d096a44e3dedf0abf2e0ca27d92847->enter($__internal_3b128eeaa04ce000b8aa23ede7a0313229d096a44e3dedf0abf2e0ca27d92847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_ae3967923b80899df40760944292ffc2d9110cd94048cf4df6525389f9a53cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3967923b80899df40760944292ffc2d9110cd94048cf4df6525389f9a53cac->enter($__internal_ae3967923b80899df40760944292ffc2d9110cd94048cf4df6525389f9a53cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3b128eeaa04ce000b8aa23ede7a0313229d096a44e3dedf0abf2e0ca27d92847->leave($__internal_3b128eeaa04ce000b8aa23ede7a0313229d096a44e3dedf0abf2e0ca27d92847_prof);

        
        $__internal_ae3967923b80899df40760944292ffc2d9110cd94048cf4df6525389f9a53cac->leave($__internal_ae3967923b80899df40760944292ffc2d9110cd94048cf4df6525389f9a53cac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
