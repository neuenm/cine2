<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_130f1aae5fb1f2edca868dca51bc325092dc39c0a8ac85fe6a9574f7ab9718a7 extends Twig_Template
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
        $__internal_6dde338f5dd38eef1ece2801ff50d3479d8748e07a4468d5a4c980a611dd2435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dde338f5dd38eef1ece2801ff50d3479d8748e07a4468d5a4c980a611dd2435->enter($__internal_6dde338f5dd38eef1ece2801ff50d3479d8748e07a4468d5a4c980a611dd2435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c2120572ad1e0ab1876ad91f2ba5b75ea4c0c68db649e043aeabbfc1a7b12b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2120572ad1e0ab1876ad91f2ba5b75ea4c0c68db649e043aeabbfc1a7b12b6b->enter($__internal_c2120572ad1e0ab1876ad91f2ba5b75ea4c0c68db649e043aeabbfc1a7b12b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6dde338f5dd38eef1ece2801ff50d3479d8748e07a4468d5a4c980a611dd2435->leave($__internal_6dde338f5dd38eef1ece2801ff50d3479d8748e07a4468d5a4c980a611dd2435_prof);

        
        $__internal_c2120572ad1e0ab1876ad91f2ba5b75ea4c0c68db649e043aeabbfc1a7b12b6b->leave($__internal_c2120572ad1e0ab1876ad91f2ba5b75ea4c0c68db649e043aeabbfc1a7b12b6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
