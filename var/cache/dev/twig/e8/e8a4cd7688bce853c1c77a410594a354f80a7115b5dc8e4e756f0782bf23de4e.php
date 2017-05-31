<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_83123fab43de04f1b54a28dc99af0339bd02dc11647760031fd7bc2a43b053c2 extends Twig_Template
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
        $__internal_f77ada5825afca82d05e64dbc69ff78ca4ac5c9b92f4c08eac9574b266dafc68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77ada5825afca82d05e64dbc69ff78ca4ac5c9b92f4c08eac9574b266dafc68->enter($__internal_f77ada5825afca82d05e64dbc69ff78ca4ac5c9b92f4c08eac9574b266dafc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_4bce8ff43d628a42a1b9b4c23b72a867a736483a120e82b59b1c9ccd6baa7507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bce8ff43d628a42a1b9b4c23b72a867a736483a120e82b59b1c9ccd6baa7507->enter($__internal_4bce8ff43d628a42a1b9b4c23b72a867a736483a120e82b59b1c9ccd6baa7507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f77ada5825afca82d05e64dbc69ff78ca4ac5c9b92f4c08eac9574b266dafc68->leave($__internal_f77ada5825afca82d05e64dbc69ff78ca4ac5c9b92f4c08eac9574b266dafc68_prof);

        
        $__internal_4bce8ff43d628a42a1b9b4c23b72a867a736483a120e82b59b1c9ccd6baa7507->leave($__internal_4bce8ff43d628a42a1b9b4c23b72a867a736483a120e82b59b1c9ccd6baa7507_prof);

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
