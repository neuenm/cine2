<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_380c2263d5d5dffddc67ad2c77738733e2756522ec6e996e71a24425bc67cdf2 extends Twig_Template
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
        $__internal_9c71baa6163db6e5540fca72646a399961c35e271aadee80d2a079464ec83355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c71baa6163db6e5540fca72646a399961c35e271aadee80d2a079464ec83355->enter($__internal_9c71baa6163db6e5540fca72646a399961c35e271aadee80d2a079464ec83355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d795a1c89810995055c7afed11326a3820d12dc2c55227e06b2be0089822dbfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d795a1c89810995055c7afed11326a3820d12dc2c55227e06b2be0089822dbfd->enter($__internal_d795a1c89810995055c7afed11326a3820d12dc2c55227e06b2be0089822dbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9c71baa6163db6e5540fca72646a399961c35e271aadee80d2a079464ec83355->leave($__internal_9c71baa6163db6e5540fca72646a399961c35e271aadee80d2a079464ec83355_prof);

        
        $__internal_d795a1c89810995055c7afed11326a3820d12dc2c55227e06b2be0089822dbfd->leave($__internal_d795a1c89810995055c7afed11326a3820d12dc2c55227e06b2be0089822dbfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
