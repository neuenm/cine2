<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b0028a8547a599d0c3a38a0d7e27f7fca7b96e86b3d0ac0edaa54bac25fbed2a extends Twig_Template
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
        $__internal_c5a3c244a3d2170d625d3b05dffc6f54d6e706ed7c59cb03f649ebd136a036e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5a3c244a3d2170d625d3b05dffc6f54d6e706ed7c59cb03f649ebd136a036e4->enter($__internal_c5a3c244a3d2170d625d3b05dffc6f54d6e706ed7c59cb03f649ebd136a036e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_87d2159a872b526f2bb1b516bdcd744a7a4fe3f50b1e2c849f51d3f3b4e8bd4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d2159a872b526f2bb1b516bdcd744a7a4fe3f50b1e2c849f51d3f3b4e8bd4a->enter($__internal_87d2159a872b526f2bb1b516bdcd744a7a4fe3f50b1e2c849f51d3f3b4e8bd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c5a3c244a3d2170d625d3b05dffc6f54d6e706ed7c59cb03f649ebd136a036e4->leave($__internal_c5a3c244a3d2170d625d3b05dffc6f54d6e706ed7c59cb03f649ebd136a036e4_prof);

        
        $__internal_87d2159a872b526f2bb1b516bdcd744a7a4fe3f50b1e2c849f51d3f3b4e8bd4a->leave($__internal_87d2159a872b526f2bb1b516bdcd744a7a4fe3f50b1e2c849f51d3f3b4e8bd4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
