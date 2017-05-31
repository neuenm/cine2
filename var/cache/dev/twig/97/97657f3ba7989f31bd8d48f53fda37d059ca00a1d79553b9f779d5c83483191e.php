<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_74a162d103971931d5ccae6b760f0f02c73d5992f8a15a5b35260eefc2ea096d extends Twig_Template
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
        $__internal_0448219b5bdd61d51a414685b0d48a873d5120c2785802e6e9f254fc892a9e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0448219b5bdd61d51a414685b0d48a873d5120c2785802e6e9f254fc892a9e77->enter($__internal_0448219b5bdd61d51a414685b0d48a873d5120c2785802e6e9f254fc892a9e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_34dbe43802b323b8cad699cc377b5a280d8438a007c63132c452e483d5ec6cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34dbe43802b323b8cad699cc377b5a280d8438a007c63132c452e483d5ec6cae->enter($__internal_34dbe43802b323b8cad699cc377b5a280d8438a007c63132c452e483d5ec6cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0448219b5bdd61d51a414685b0d48a873d5120c2785802e6e9f254fc892a9e77->leave($__internal_0448219b5bdd61d51a414685b0d48a873d5120c2785802e6e9f254fc892a9e77_prof);

        
        $__internal_34dbe43802b323b8cad699cc377b5a280d8438a007c63132c452e483d5ec6cae->leave($__internal_34dbe43802b323b8cad699cc377b5a280d8438a007c63132c452e483d5ec6cae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
