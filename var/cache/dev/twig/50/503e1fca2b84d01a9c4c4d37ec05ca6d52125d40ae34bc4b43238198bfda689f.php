<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d7dbf3db3bb7bed2a3f4feef7501c2394c961991fa14539e0d0c8dba0b6de77c extends Twig_Template
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
        $__internal_edea155d4b2bed6d01c48410a5f8d8a7199534158781049bcb7aba0ea8b69c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edea155d4b2bed6d01c48410a5f8d8a7199534158781049bcb7aba0ea8b69c92->enter($__internal_edea155d4b2bed6d01c48410a5f8d8a7199534158781049bcb7aba0ea8b69c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_482da638112186864d4b0fa833790c066f635cd7be604cd1d665a07999e9bc05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482da638112186864d4b0fa833790c066f635cd7be604cd1d665a07999e9bc05->enter($__internal_482da638112186864d4b0fa833790c066f635cd7be604cd1d665a07999e9bc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_edea155d4b2bed6d01c48410a5f8d8a7199534158781049bcb7aba0ea8b69c92->leave($__internal_edea155d4b2bed6d01c48410a5f8d8a7199534158781049bcb7aba0ea8b69c92_prof);

        
        $__internal_482da638112186864d4b0fa833790c066f635cd7be604cd1d665a07999e9bc05->leave($__internal_482da638112186864d4b0fa833790c066f635cd7be604cd1d665a07999e9bc05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
