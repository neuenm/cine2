<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_3bad7450074ba7743855011c96717adf4a3b177996b5c74cc2aa439f6c0a2c28 extends Twig_Template
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
        $__internal_fa40a447d40766aee55053a3850a9bf50107f9d194cff6e21ad3e71a26ea71c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa40a447d40766aee55053a3850a9bf50107f9d194cff6e21ad3e71a26ea71c2->enter($__internal_fa40a447d40766aee55053a3850a9bf50107f9d194cff6e21ad3e71a26ea71c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_43fe1e58ecfcc0a37137dfde9578f285f4c0271f0c8c5b9ca3aee6e2720c44f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43fe1e58ecfcc0a37137dfde9578f285f4c0271f0c8c5b9ca3aee6e2720c44f6->enter($__internal_43fe1e58ecfcc0a37137dfde9578f285f4c0271f0c8c5b9ca3aee6e2720c44f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_fa40a447d40766aee55053a3850a9bf50107f9d194cff6e21ad3e71a26ea71c2->leave($__internal_fa40a447d40766aee55053a3850a9bf50107f9d194cff6e21ad3e71a26ea71c2_prof);

        
        $__internal_43fe1e58ecfcc0a37137dfde9578f285f4c0271f0c8c5b9ca3aee6e2720c44f6->leave($__internal_43fe1e58ecfcc0a37137dfde9578f285f4c0271f0c8c5b9ca3aee6e2720c44f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
