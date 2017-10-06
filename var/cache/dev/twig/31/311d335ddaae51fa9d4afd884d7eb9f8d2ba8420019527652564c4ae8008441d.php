<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_67b6c4b75c73ea256d9274ba7abce871d65d9a6f616988fe80da1cc8701da5cf extends Twig_Template
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
        $__internal_0e05cae22effe349b74606f82be88bcfdfec565b6221867b558e1b93de149d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e05cae22effe349b74606f82be88bcfdfec565b6221867b558e1b93de149d5b->enter($__internal_0e05cae22effe349b74606f82be88bcfdfec565b6221867b558e1b93de149d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_68e03a82289d2984bef211c3ec3cdad7094c6bbe8c10aceaea80521170540662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e03a82289d2984bef211c3ec3cdad7094c6bbe8c10aceaea80521170540662->enter($__internal_68e03a82289d2984bef211c3ec3cdad7094c6bbe8c10aceaea80521170540662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0e05cae22effe349b74606f82be88bcfdfec565b6221867b558e1b93de149d5b->leave($__internal_0e05cae22effe349b74606f82be88bcfdfec565b6221867b558e1b93de149d5b_prof);

        
        $__internal_68e03a82289d2984bef211c3ec3cdad7094c6bbe8c10aceaea80521170540662->leave($__internal_68e03a82289d2984bef211c3ec3cdad7094c6bbe8c10aceaea80521170540662_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
