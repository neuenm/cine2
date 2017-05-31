<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_e78def2eec1dc358dfeb1fde2957637d159e6f2c1c8b2f0e32f97aeb0ac5694f extends Twig_Template
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
        $__internal_ea2da966e21e07ff2d5a0d3ed30873c28d777e48d67f8accfe06d9504cc7d83a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2da966e21e07ff2d5a0d3ed30873c28d777e48d67f8accfe06d9504cc7d83a->enter($__internal_ea2da966e21e07ff2d5a0d3ed30873c28d777e48d67f8accfe06d9504cc7d83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_4046d2052b5360db8ad85473652a40e0a0fe3a9f0df96f29ecd02520e731f0b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4046d2052b5360db8ad85473652a40e0a0fe3a9f0df96f29ecd02520e731f0b0->enter($__internal_4046d2052b5360db8ad85473652a40e0a0fe3a9f0df96f29ecd02520e731f0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_ea2da966e21e07ff2d5a0d3ed30873c28d777e48d67f8accfe06d9504cc7d83a->leave($__internal_ea2da966e21e07ff2d5a0d3ed30873c28d777e48d67f8accfe06d9504cc7d83a_prof);

        
        $__internal_4046d2052b5360db8ad85473652a40e0a0fe3a9f0df96f29ecd02520e731f0b0->leave($__internal_4046d2052b5360db8ad85473652a40e0a0fe3a9f0df96f29ecd02520e731f0b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
