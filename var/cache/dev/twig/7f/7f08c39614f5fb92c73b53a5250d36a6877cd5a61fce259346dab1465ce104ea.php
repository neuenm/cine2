<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_5e574a10f155a288ffab61ed7cf443a299938de2c35bbcbc0e6b142780a815a4 extends Twig_Template
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
        $__internal_f286554e961d89d2eb8546df654e066d6b6a9ccc2bb0cdc038bcd2a08bee2a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f286554e961d89d2eb8546df654e066d6b6a9ccc2bb0cdc038bcd2a08bee2a21->enter($__internal_f286554e961d89d2eb8546df654e066d6b6a9ccc2bb0cdc038bcd2a08bee2a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_829adc82363b8f074888037eb894cb4e7e05414b4c9695b7cf38fcee2e167e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829adc82363b8f074888037eb894cb4e7e05414b4c9695b7cf38fcee2e167e73->enter($__internal_829adc82363b8f074888037eb894cb4e7e05414b4c9695b7cf38fcee2e167e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_f286554e961d89d2eb8546df654e066d6b6a9ccc2bb0cdc038bcd2a08bee2a21->leave($__internal_f286554e961d89d2eb8546df654e066d6b6a9ccc2bb0cdc038bcd2a08bee2a21_prof);

        
        $__internal_829adc82363b8f074888037eb894cb4e7e05414b4c9695b7cf38fcee2e167e73->leave($__internal_829adc82363b8f074888037eb894cb4e7e05414b4c9695b7cf38fcee2e167e73_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
