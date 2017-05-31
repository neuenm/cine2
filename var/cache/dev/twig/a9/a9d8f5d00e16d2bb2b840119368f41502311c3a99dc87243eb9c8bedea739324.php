<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ec9964fa15ddf64fd4350f2abe4273a3c7f2c4ed7ab69374bcb74ba3fc7f6757 extends Twig_Template
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
        $__internal_45c2aa6bd2be3ea61b851824b34dca5931263b8756e1e600b4ceaca91146a2df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c2aa6bd2be3ea61b851824b34dca5931263b8756e1e600b4ceaca91146a2df->enter($__internal_45c2aa6bd2be3ea61b851824b34dca5931263b8756e1e600b4ceaca91146a2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_58f63f38a44e80f184f7a329cd9e9060874b2750e5d3ed33632cbdbca14a10b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f63f38a44e80f184f7a329cd9e9060874b2750e5d3ed33632cbdbca14a10b4->enter($__internal_58f63f38a44e80f184f7a329cd9e9060874b2750e5d3ed33632cbdbca14a10b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_45c2aa6bd2be3ea61b851824b34dca5931263b8756e1e600b4ceaca91146a2df->leave($__internal_45c2aa6bd2be3ea61b851824b34dca5931263b8756e1e600b4ceaca91146a2df_prof);

        
        $__internal_58f63f38a44e80f184f7a329cd9e9060874b2750e5d3ed33632cbdbca14a10b4->leave($__internal_58f63f38a44e80f184f7a329cd9e9060874b2750e5d3ed33632cbdbca14a10b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
