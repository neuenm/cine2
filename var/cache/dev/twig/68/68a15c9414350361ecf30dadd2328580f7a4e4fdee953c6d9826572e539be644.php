<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ac726820293249da78cea7c982774f27f5f1d3163fa84b2b6c7cec3db2a0ae15 extends Twig_Template
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
        $__internal_5b5bb7bf2fb4d07a42e9dd62ab5b85d5ac3b2c9faf7fe2043b46ca01b2f1537a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b5bb7bf2fb4d07a42e9dd62ab5b85d5ac3b2c9faf7fe2043b46ca01b2f1537a->enter($__internal_5b5bb7bf2fb4d07a42e9dd62ab5b85d5ac3b2c9faf7fe2043b46ca01b2f1537a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_f94ff98708c3b7ebeeb0377f2887ab29d24cc365a32f6dda19c4228fd18753ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94ff98708c3b7ebeeb0377f2887ab29d24cc365a32f6dda19c4228fd18753ed->enter($__internal_f94ff98708c3b7ebeeb0377f2887ab29d24cc365a32f6dda19c4228fd18753ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5b5bb7bf2fb4d07a42e9dd62ab5b85d5ac3b2c9faf7fe2043b46ca01b2f1537a->leave($__internal_5b5bb7bf2fb4d07a42e9dd62ab5b85d5ac3b2c9faf7fe2043b46ca01b2f1537a_prof);

        
        $__internal_f94ff98708c3b7ebeeb0377f2887ab29d24cc365a32f6dda19c4228fd18753ed->leave($__internal_f94ff98708c3b7ebeeb0377f2887ab29d24cc365a32f6dda19c4228fd18753ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
