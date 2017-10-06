<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_309d080f5974df84644bd4e4095d9e0c79c337c730538a651b6f3c6c15f236eb extends Twig_Template
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
        $__internal_df96d7c10542c029c28bcf3f7156ea90ef1c6ff80a1c74e25c07f4ec8b9fb4de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df96d7c10542c029c28bcf3f7156ea90ef1c6ff80a1c74e25c07f4ec8b9fb4de->enter($__internal_df96d7c10542c029c28bcf3f7156ea90ef1c6ff80a1c74e25c07f4ec8b9fb4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_813dc05be0ce17e101a1c1c816b4ae367bf11d029981a5491dc4ec1bf9dfd892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813dc05be0ce17e101a1c1c816b4ae367bf11d029981a5491dc4ec1bf9dfd892->enter($__internal_813dc05be0ce17e101a1c1c816b4ae367bf11d029981a5491dc4ec1bf9dfd892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_df96d7c10542c029c28bcf3f7156ea90ef1c6ff80a1c74e25c07f4ec8b9fb4de->leave($__internal_df96d7c10542c029c28bcf3f7156ea90ef1c6ff80a1c74e25c07f4ec8b9fb4de_prof);

        
        $__internal_813dc05be0ce17e101a1c1c816b4ae367bf11d029981a5491dc4ec1bf9dfd892->leave($__internal_813dc05be0ce17e101a1c1c816b4ae367bf11d029981a5491dc4ec1bf9dfd892_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
