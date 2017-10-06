<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c68e8f3556d491c6a7920c412510dd2829b44d6b0957808f7a1412d0e2a0a883 extends Twig_Template
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
        $__internal_975579d4da7472538744704d48cacea7ac481e358c023ee8c17480fd3abb452f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975579d4da7472538744704d48cacea7ac481e358c023ee8c17480fd3abb452f->enter($__internal_975579d4da7472538744704d48cacea7ac481e358c023ee8c17480fd3abb452f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_212fe17afd1e8b0635a9e3b93d18be07ef99b97e8b7f84fa7665baa488a4b87f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212fe17afd1e8b0635a9e3b93d18be07ef99b97e8b7f84fa7665baa488a4b87f->enter($__internal_212fe17afd1e8b0635a9e3b93d18be07ef99b97e8b7f84fa7665baa488a4b87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_975579d4da7472538744704d48cacea7ac481e358c023ee8c17480fd3abb452f->leave($__internal_975579d4da7472538744704d48cacea7ac481e358c023ee8c17480fd3abb452f_prof);

        
        $__internal_212fe17afd1e8b0635a9e3b93d18be07ef99b97e8b7f84fa7665baa488a4b87f->leave($__internal_212fe17afd1e8b0635a9e3b93d18be07ef99b97e8b7f84fa7665baa488a4b87f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
