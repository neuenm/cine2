<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8c3ddb75acad9502a7074dd1a37596775f86480b54b462f68f989e79a96ef60b extends Twig_Template
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
        $__internal_a2a1b7989149375289cc5919c8e570303070a96b17ebc6cf21c3c236c03810f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a1b7989149375289cc5919c8e570303070a96b17ebc6cf21c3c236c03810f5->enter($__internal_a2a1b7989149375289cc5919c8e570303070a96b17ebc6cf21c3c236c03810f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_cfa6c88219c5d4a1d69729fe709bc1fc6e3974ce88af2ecd7694eebfe2b01da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa6c88219c5d4a1d69729fe709bc1fc6e3974ce88af2ecd7694eebfe2b01da0->enter($__internal_cfa6c88219c5d4a1d69729fe709bc1fc6e3974ce88af2ecd7694eebfe2b01da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a2a1b7989149375289cc5919c8e570303070a96b17ebc6cf21c3c236c03810f5->leave($__internal_a2a1b7989149375289cc5919c8e570303070a96b17ebc6cf21c3c236c03810f5_prof);

        
        $__internal_cfa6c88219c5d4a1d69729fe709bc1fc6e3974ce88af2ecd7694eebfe2b01da0->leave($__internal_cfa6c88219c5d4a1d69729fe709bc1fc6e3974ce88af2ecd7694eebfe2b01da0_prof);

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
