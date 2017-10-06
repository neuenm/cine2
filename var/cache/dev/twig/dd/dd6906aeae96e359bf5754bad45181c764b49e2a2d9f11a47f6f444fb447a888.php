<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9553fa96834c0ab4dcb8de3e70f72131636b26386dd26bde3b020531765d74b9 extends Twig_Template
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
        $__internal_288b98d713c7353e302b93b56f863825faa7ae4ecc20ab1ed75476785de3553c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288b98d713c7353e302b93b56f863825faa7ae4ecc20ab1ed75476785de3553c->enter($__internal_288b98d713c7353e302b93b56f863825faa7ae4ecc20ab1ed75476785de3553c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7c0068e73cf4f4a451129e8a1cff697c0161cd9e2c1a28fd019edeeac1487389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0068e73cf4f4a451129e8a1cff697c0161cd9e2c1a28fd019edeeac1487389->enter($__internal_7c0068e73cf4f4a451129e8a1cff697c0161cd9e2c1a28fd019edeeac1487389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_288b98d713c7353e302b93b56f863825faa7ae4ecc20ab1ed75476785de3553c->leave($__internal_288b98d713c7353e302b93b56f863825faa7ae4ecc20ab1ed75476785de3553c_prof);

        
        $__internal_7c0068e73cf4f4a451129e8a1cff697c0161cd9e2c1a28fd019edeeac1487389->leave($__internal_7c0068e73cf4f4a451129e8a1cff697c0161cd9e2c1a28fd019edeeac1487389_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
