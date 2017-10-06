<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_3c823171a7055ca7ea8177e5e8086b8cc54f06469ba2968fa83ee1d6eba22e92 extends Twig_Template
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
        $__internal_0bd81a9bae1a7450e686f32156da0330d683a44ec3c892ddb1ae5237f3b8e34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bd81a9bae1a7450e686f32156da0330d683a44ec3c892ddb1ae5237f3b8e34b->enter($__internal_0bd81a9bae1a7450e686f32156da0330d683a44ec3c892ddb1ae5237f3b8e34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_e9866d7929ca6f8b5937b2953667511cbb369039d8929e6a6d24eb37b19b797a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9866d7929ca6f8b5937b2953667511cbb369039d8929e6a6d24eb37b19b797a->enter($__internal_e9866d7929ca6f8b5937b2953667511cbb369039d8929e6a6d24eb37b19b797a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_0bd81a9bae1a7450e686f32156da0330d683a44ec3c892ddb1ae5237f3b8e34b->leave($__internal_0bd81a9bae1a7450e686f32156da0330d683a44ec3c892ddb1ae5237f3b8e34b_prof);

        
        $__internal_e9866d7929ca6f8b5937b2953667511cbb369039d8929e6a6d24eb37b19b797a->leave($__internal_e9866d7929ca6f8b5937b2953667511cbb369039d8929e6a6d24eb37b19b797a_prof);

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
