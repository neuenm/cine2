<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_48a9fb388dc0766d884c9606f4b4cc46b7a959692cb4fc2a88e9557df80e099b extends Twig_Template
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
        $__internal_41a03a25f7e57a64b55f153c06a9663aba942178aeaa65caf6b6e879000254f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a03a25f7e57a64b55f153c06a9663aba942178aeaa65caf6b6e879000254f0->enter($__internal_41a03a25f7e57a64b55f153c06a9663aba942178aeaa65caf6b6e879000254f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_24057fa8d2920333c68ae3e5a51ae214c40b151e89a0840be342c98eaa51b7fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24057fa8d2920333c68ae3e5a51ae214c40b151e89a0840be342c98eaa51b7fc->enter($__internal_24057fa8d2920333c68ae3e5a51ae214c40b151e89a0840be342c98eaa51b7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_41a03a25f7e57a64b55f153c06a9663aba942178aeaa65caf6b6e879000254f0->leave($__internal_41a03a25f7e57a64b55f153c06a9663aba942178aeaa65caf6b6e879000254f0_prof);

        
        $__internal_24057fa8d2920333c68ae3e5a51ae214c40b151e89a0840be342c98eaa51b7fc->leave($__internal_24057fa8d2920333c68ae3e5a51ae214c40b151e89a0840be342c98eaa51b7fc_prof);

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
