<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9c854dee4c01cfc49af56dcdb13b73fdc20856c51455b844d0c3a16eefcc6a8e extends Twig_Template
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
        $__internal_45134ab2a72ea1c62a66b4fa06dfc31b9275a763df1ee685dbb4ff5aa60d5e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45134ab2a72ea1c62a66b4fa06dfc31b9275a763df1ee685dbb4ff5aa60d5e85->enter($__internal_45134ab2a72ea1c62a66b4fa06dfc31b9275a763df1ee685dbb4ff5aa60d5e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f3b6d131c16aa5ba32561b307946b875d35b7bd876ba0d057dd80e3773216b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b6d131c16aa5ba32561b307946b875d35b7bd876ba0d057dd80e3773216b70->enter($__internal_f3b6d131c16aa5ba32561b307946b875d35b7bd876ba0d057dd80e3773216b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_45134ab2a72ea1c62a66b4fa06dfc31b9275a763df1ee685dbb4ff5aa60d5e85->leave($__internal_45134ab2a72ea1c62a66b4fa06dfc31b9275a763df1ee685dbb4ff5aa60d5e85_prof);

        
        $__internal_f3b6d131c16aa5ba32561b307946b875d35b7bd876ba0d057dd80e3773216b70->leave($__internal_f3b6d131c16aa5ba32561b307946b875d35b7bd876ba0d057dd80e3773216b70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
