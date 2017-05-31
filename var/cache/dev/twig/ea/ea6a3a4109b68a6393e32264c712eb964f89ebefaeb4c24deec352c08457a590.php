<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4969bea49e290217815879578197f07e8b206b62a37f387e4f6d1d30db41b5f6 extends Twig_Template
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
        $__internal_b329328b4f3d7fb5d78eda7825e308789fed75406610f29105e9a516bbbcf706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b329328b4f3d7fb5d78eda7825e308789fed75406610f29105e9a516bbbcf706->enter($__internal_b329328b4f3d7fb5d78eda7825e308789fed75406610f29105e9a516bbbcf706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0054870c293067d6593d7f99730f6e3be9dfe6922fb6517d00adb9abf7428654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0054870c293067d6593d7f99730f6e3be9dfe6922fb6517d00adb9abf7428654->enter($__internal_0054870c293067d6593d7f99730f6e3be9dfe6922fb6517d00adb9abf7428654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b329328b4f3d7fb5d78eda7825e308789fed75406610f29105e9a516bbbcf706->leave($__internal_b329328b4f3d7fb5d78eda7825e308789fed75406610f29105e9a516bbbcf706_prof);

        
        $__internal_0054870c293067d6593d7f99730f6e3be9dfe6922fb6517d00adb9abf7428654->leave($__internal_0054870c293067d6593d7f99730f6e3be9dfe6922fb6517d00adb9abf7428654_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
