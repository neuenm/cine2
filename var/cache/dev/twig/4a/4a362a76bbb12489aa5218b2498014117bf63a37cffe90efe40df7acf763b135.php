<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_464c6167f8ca2490d2a0afd51fb369b2b491bfb9f9e72d194875d9901ba2d706 extends Twig_Template
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
        $__internal_1d65f00f456f890d902a622039661c8b10682cddb9336e6b6c73e6682f7bdbaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d65f00f456f890d902a622039661c8b10682cddb9336e6b6c73e6682f7bdbaa->enter($__internal_1d65f00f456f890d902a622039661c8b10682cddb9336e6b6c73e6682f7bdbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_53a25077fddbc429a44f37de10afcb87d636b1e3bebaf60c1b386d4355308d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a25077fddbc429a44f37de10afcb87d636b1e3bebaf60c1b386d4355308d8c->enter($__internal_53a25077fddbc429a44f37de10afcb87d636b1e3bebaf60c1b386d4355308d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1d65f00f456f890d902a622039661c8b10682cddb9336e6b6c73e6682f7bdbaa->leave($__internal_1d65f00f456f890d902a622039661c8b10682cddb9336e6b6c73e6682f7bdbaa_prof);

        
        $__internal_53a25077fddbc429a44f37de10afcb87d636b1e3bebaf60c1b386d4355308d8c->leave($__internal_53a25077fddbc429a44f37de10afcb87d636b1e3bebaf60c1b386d4355308d8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
