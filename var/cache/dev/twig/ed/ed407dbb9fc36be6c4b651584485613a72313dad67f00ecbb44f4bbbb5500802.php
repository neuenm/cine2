<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3a23e5b3d4ec9ef94a09aaffb6956f1bd7905c26dc56ad3ee1165e6825344ab7 extends Twig_Template
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
        $__internal_ba05d2990076138574db449e4f75470ae17dfb3e54e51e1054351b8b556e6f94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba05d2990076138574db449e4f75470ae17dfb3e54e51e1054351b8b556e6f94->enter($__internal_ba05d2990076138574db449e4f75470ae17dfb3e54e51e1054351b8b556e6f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_3d81f0fb61caad88e8bcd56c6e0e72f3445bdd601c313a89dd747f6e260bc00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d81f0fb61caad88e8bcd56c6e0e72f3445bdd601c313a89dd747f6e260bc00c->enter($__internal_3d81f0fb61caad88e8bcd56c6e0e72f3445bdd601c313a89dd747f6e260bc00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ba05d2990076138574db449e4f75470ae17dfb3e54e51e1054351b8b556e6f94->leave($__internal_ba05d2990076138574db449e4f75470ae17dfb3e54e51e1054351b8b556e6f94_prof);

        
        $__internal_3d81f0fb61caad88e8bcd56c6e0e72f3445bdd601c313a89dd747f6e260bc00c->leave($__internal_3d81f0fb61caad88e8bcd56c6e0e72f3445bdd601c313a89dd747f6e260bc00c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
