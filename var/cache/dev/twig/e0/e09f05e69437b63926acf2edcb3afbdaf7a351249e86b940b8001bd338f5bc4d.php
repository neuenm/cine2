<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0ce245151fa743221c8d4a642b07817b5d6ce422103b5b18107a347399f52d65 extends Twig_Template
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
        $__internal_50ea811de1f6b2dce5d7bfd275c1919415fb69920e683634d51fabfa5049e032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ea811de1f6b2dce5d7bfd275c1919415fb69920e683634d51fabfa5049e032->enter($__internal_50ea811de1f6b2dce5d7bfd275c1919415fb69920e683634d51fabfa5049e032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_948a2c489c4b3c5c2acda28809e14487c6efacde8b9ad3e167025dfaeadcc15d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948a2c489c4b3c5c2acda28809e14487c6efacde8b9ad3e167025dfaeadcc15d->enter($__internal_948a2c489c4b3c5c2acda28809e14487c6efacde8b9ad3e167025dfaeadcc15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_50ea811de1f6b2dce5d7bfd275c1919415fb69920e683634d51fabfa5049e032->leave($__internal_50ea811de1f6b2dce5d7bfd275c1919415fb69920e683634d51fabfa5049e032_prof);

        
        $__internal_948a2c489c4b3c5c2acda28809e14487c6efacde8b9ad3e167025dfaeadcc15d->leave($__internal_948a2c489c4b3c5c2acda28809e14487c6efacde8b9ad3e167025dfaeadcc15d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
