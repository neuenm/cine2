<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e2eb27c7b78c950318342e84d54b27c1b64d39182eaec41166bc7207572d2827 extends Twig_Template
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
        $__internal_96bb555cb3fbc23d844b6d58044158cb1d0f8f4885456d808d48e3a97a1ba5cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96bb555cb3fbc23d844b6d58044158cb1d0f8f4885456d808d48e3a97a1ba5cb->enter($__internal_96bb555cb3fbc23d844b6d58044158cb1d0f8f4885456d808d48e3a97a1ba5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_82a1558399dc645177ee7eeca9541992343c69a0e2628b87e51dde9caaac55c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a1558399dc645177ee7eeca9541992343c69a0e2628b87e51dde9caaac55c3->enter($__internal_82a1558399dc645177ee7eeca9541992343c69a0e2628b87e51dde9caaac55c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_96bb555cb3fbc23d844b6d58044158cb1d0f8f4885456d808d48e3a97a1ba5cb->leave($__internal_96bb555cb3fbc23d844b6d58044158cb1d0f8f4885456d808d48e3a97a1ba5cb_prof);

        
        $__internal_82a1558399dc645177ee7eeca9541992343c69a0e2628b87e51dde9caaac55c3->leave($__internal_82a1558399dc645177ee7eeca9541992343c69a0e2628b87e51dde9caaac55c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
