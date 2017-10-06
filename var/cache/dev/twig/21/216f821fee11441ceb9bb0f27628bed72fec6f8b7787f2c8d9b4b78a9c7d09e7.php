<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bbc52713541d035994e8865cb299655a6527c2d9a87235596b02f0d9ec8ee303 extends Twig_Template
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
        $__internal_220885689d9de34a97d95fdccdcebea2b05431e4acb5ebc903001004b919da3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_220885689d9de34a97d95fdccdcebea2b05431e4acb5ebc903001004b919da3e->enter($__internal_220885689d9de34a97d95fdccdcebea2b05431e4acb5ebc903001004b919da3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_35472b006e9962d137caac4ff22c12088b3a65bf03ded8e048f79af8bef2861d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35472b006e9962d137caac4ff22c12088b3a65bf03ded8e048f79af8bef2861d->enter($__internal_35472b006e9962d137caac4ff22c12088b3a65bf03ded8e048f79af8bef2861d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_220885689d9de34a97d95fdccdcebea2b05431e4acb5ebc903001004b919da3e->leave($__internal_220885689d9de34a97d95fdccdcebea2b05431e4acb5ebc903001004b919da3e_prof);

        
        $__internal_35472b006e9962d137caac4ff22c12088b3a65bf03ded8e048f79af8bef2861d->leave($__internal_35472b006e9962d137caac4ff22c12088b3a65bf03ded8e048f79af8bef2861d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
