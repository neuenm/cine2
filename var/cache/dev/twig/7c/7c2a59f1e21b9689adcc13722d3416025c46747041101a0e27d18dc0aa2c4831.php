<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_051bd04427dc939548eaa8f5b0a0517bb14c3c738a23c550c898cc8249c035d2 extends Twig_Template
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
        $__internal_5c65764ba9649f96a3bc619f498300310017f3fde03a87ee56becb20f8c14c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c65764ba9649f96a3bc619f498300310017f3fde03a87ee56becb20f8c14c58->enter($__internal_5c65764ba9649f96a3bc619f498300310017f3fde03a87ee56becb20f8c14c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_412a8c1f87868e5ce95280e02921ff30f3e7403f8706a208eae624207fff9efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412a8c1f87868e5ce95280e02921ff30f3e7403f8706a208eae624207fff9efd->enter($__internal_412a8c1f87868e5ce95280e02921ff30f3e7403f8706a208eae624207fff9efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5c65764ba9649f96a3bc619f498300310017f3fde03a87ee56becb20f8c14c58->leave($__internal_5c65764ba9649f96a3bc619f498300310017f3fde03a87ee56becb20f8c14c58_prof);

        
        $__internal_412a8c1f87868e5ce95280e02921ff30f3e7403f8706a208eae624207fff9efd->leave($__internal_412a8c1f87868e5ce95280e02921ff30f3e7403f8706a208eae624207fff9efd_prof);

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
