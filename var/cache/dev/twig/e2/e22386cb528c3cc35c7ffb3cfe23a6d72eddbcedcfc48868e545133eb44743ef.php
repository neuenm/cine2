<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a3115c01f0f98af2e3fa2fd019f03553964fb6866ffe8d8c011a7e57ec5b13ac extends Twig_Template
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
        $__internal_23c3263463cc24f53b30d457ce8b215c9887e84f5e5d8871871ce760d084d672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c3263463cc24f53b30d457ce8b215c9887e84f5e5d8871871ce760d084d672->enter($__internal_23c3263463cc24f53b30d457ce8b215c9887e84f5e5d8871871ce760d084d672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_afee3a1fc2a46860faab29c1280fe593983d87f16aa1b9e2b74a1c25b9cf2a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afee3a1fc2a46860faab29c1280fe593983d87f16aa1b9e2b74a1c25b9cf2a64->enter($__internal_afee3a1fc2a46860faab29c1280fe593983d87f16aa1b9e2b74a1c25b9cf2a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_23c3263463cc24f53b30d457ce8b215c9887e84f5e5d8871871ce760d084d672->leave($__internal_23c3263463cc24f53b30d457ce8b215c9887e84f5e5d8871871ce760d084d672_prof);

        
        $__internal_afee3a1fc2a46860faab29c1280fe593983d87f16aa1b9e2b74a1c25b9cf2a64->leave($__internal_afee3a1fc2a46860faab29c1280fe593983d87f16aa1b9e2b74a1c25b9cf2a64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
