<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5acd844f409673cd43ab926899acc42577f4324de05a51fa4357d83679c5bb6c extends Twig_Template
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
        $__internal_f3908b4c6db06aa7bf064a85309ac49a60251b6ca27da5c3d47950f20833b90e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3908b4c6db06aa7bf064a85309ac49a60251b6ca27da5c3d47950f20833b90e->enter($__internal_f3908b4c6db06aa7bf064a85309ac49a60251b6ca27da5c3d47950f20833b90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_fa9b9dcd13ae2d1ebf532042de66c9c15ab86b0fc4f981440c19632d432ac6e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9b9dcd13ae2d1ebf532042de66c9c15ab86b0fc4f981440c19632d432ac6e4->enter($__internal_fa9b9dcd13ae2d1ebf532042de66c9c15ab86b0fc4f981440c19632d432ac6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f3908b4c6db06aa7bf064a85309ac49a60251b6ca27da5c3d47950f20833b90e->leave($__internal_f3908b4c6db06aa7bf064a85309ac49a60251b6ca27da5c3d47950f20833b90e_prof);

        
        $__internal_fa9b9dcd13ae2d1ebf532042de66c9c15ab86b0fc4f981440c19632d432ac6e4->leave($__internal_fa9b9dcd13ae2d1ebf532042de66c9c15ab86b0fc4f981440c19632d432ac6e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
