<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5c39970d0f62eebec53d6d8a047872f68deb9b53c68121b1736044beb2a3c477 extends Twig_Template
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
        $__internal_1b6d72d88a7763b2aa046962489d6bf0ae109d1ed8e7f0d35d68c332407e4c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6d72d88a7763b2aa046962489d6bf0ae109d1ed8e7f0d35d68c332407e4c99->enter($__internal_1b6d72d88a7763b2aa046962489d6bf0ae109d1ed8e7f0d35d68c332407e4c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b22490e7f588f5b3c0c9c6152009ed78ab9b6f33ed247ef60ae45bde2be83741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22490e7f588f5b3c0c9c6152009ed78ab9b6f33ed247ef60ae45bde2be83741->enter($__internal_b22490e7f588f5b3c0c9c6152009ed78ab9b6f33ed247ef60ae45bde2be83741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_1b6d72d88a7763b2aa046962489d6bf0ae109d1ed8e7f0d35d68c332407e4c99->leave($__internal_1b6d72d88a7763b2aa046962489d6bf0ae109d1ed8e7f0d35d68c332407e4c99_prof);

        
        $__internal_b22490e7f588f5b3c0c9c6152009ed78ab9b6f33ed247ef60ae45bde2be83741->leave($__internal_b22490e7f588f5b3c0c9c6152009ed78ab9b6f33ed247ef60ae45bde2be83741_prof);

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
