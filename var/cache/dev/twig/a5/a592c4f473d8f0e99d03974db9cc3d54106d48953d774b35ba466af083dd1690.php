<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0bf77a47730e02fcf23c94ec7e89c784ea00fe6ec14f2c3a6da988c62afea9a4 extends Twig_Template
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
        $__internal_02ec98795d7b21dac774b2934260cf014db5908ada8d56f469f57b58987e0cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ec98795d7b21dac774b2934260cf014db5908ada8d56f469f57b58987e0cde->enter($__internal_02ec98795d7b21dac774b2934260cf014db5908ada8d56f469f57b58987e0cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a5c4b65ecb4c1ea88712efeef57380e5c7f5fa8dd81c92202fcd0eea56adbfde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c4b65ecb4c1ea88712efeef57380e5c7f5fa8dd81c92202fcd0eea56adbfde->enter($__internal_a5c4b65ecb4c1ea88712efeef57380e5c7f5fa8dd81c92202fcd0eea56adbfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_02ec98795d7b21dac774b2934260cf014db5908ada8d56f469f57b58987e0cde->leave($__internal_02ec98795d7b21dac774b2934260cf014db5908ada8d56f469f57b58987e0cde_prof);

        
        $__internal_a5c4b65ecb4c1ea88712efeef57380e5c7f5fa8dd81c92202fcd0eea56adbfde->leave($__internal_a5c4b65ecb4c1ea88712efeef57380e5c7f5fa8dd81c92202fcd0eea56adbfde_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
