<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_618983f679de0065177a0c78f78d401d0ff0df03eadbe6c18fa5fcea0c1cc4fe extends Twig_Template
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
        $__internal_2ba080b686b76d9fe475d7e90c80b26d133cf561c4ab75f9b384cd7c2338dc95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba080b686b76d9fe475d7e90c80b26d133cf561c4ab75f9b384cd7c2338dc95->enter($__internal_2ba080b686b76d9fe475d7e90c80b26d133cf561c4ab75f9b384cd7c2338dc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_18defefb45e21249b03375ff2d1e74a2ab2495008f839994635b0aa3504ed3f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18defefb45e21249b03375ff2d1e74a2ab2495008f839994635b0aa3504ed3f2->enter($__internal_18defefb45e21249b03375ff2d1e74a2ab2495008f839994635b0aa3504ed3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2ba080b686b76d9fe475d7e90c80b26d133cf561c4ab75f9b384cd7c2338dc95->leave($__internal_2ba080b686b76d9fe475d7e90c80b26d133cf561c4ab75f9b384cd7c2338dc95_prof);

        
        $__internal_18defefb45e21249b03375ff2d1e74a2ab2495008f839994635b0aa3504ed3f2->leave($__internal_18defefb45e21249b03375ff2d1e74a2ab2495008f839994635b0aa3504ed3f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
