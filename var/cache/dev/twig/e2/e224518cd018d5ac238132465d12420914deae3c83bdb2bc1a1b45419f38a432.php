<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f95666c81433a9db671897442a315670391444112b887aed1be9b9e4577d515e extends Twig_Template
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
        $__internal_ec1e6ac56cccc3ab0a9f049a87fb6582173aa7977aa892ac93badcd3ef364328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1e6ac56cccc3ab0a9f049a87fb6582173aa7977aa892ac93badcd3ef364328->enter($__internal_ec1e6ac56cccc3ab0a9f049a87fb6582173aa7977aa892ac93badcd3ef364328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7faae981322a774fa3001d702e79fb149f0e9771f0ca3d41d73881a62ef4fa19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7faae981322a774fa3001d702e79fb149f0e9771f0ca3d41d73881a62ef4fa19->enter($__internal_7faae981322a774fa3001d702e79fb149f0e9771f0ca3d41d73881a62ef4fa19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ec1e6ac56cccc3ab0a9f049a87fb6582173aa7977aa892ac93badcd3ef364328->leave($__internal_ec1e6ac56cccc3ab0a9f049a87fb6582173aa7977aa892ac93badcd3ef364328_prof);

        
        $__internal_7faae981322a774fa3001d702e79fb149f0e9771f0ca3d41d73881a62ef4fa19->leave($__internal_7faae981322a774fa3001d702e79fb149f0e9771f0ca3d41d73881a62ef4fa19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
