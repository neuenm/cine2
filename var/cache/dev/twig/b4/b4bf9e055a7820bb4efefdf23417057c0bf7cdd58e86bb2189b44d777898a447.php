<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fea3a793720e7e3ca582497db3bcbbd044a3fdefbfd6759e0bc06bfffe26ad1b extends Twig_Template
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
        $__internal_06f21d8f2282795102ee8443581ae30d06bfbb76f550018a19e7903167dccaeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f21d8f2282795102ee8443581ae30d06bfbb76f550018a19e7903167dccaeb->enter($__internal_06f21d8f2282795102ee8443581ae30d06bfbb76f550018a19e7903167dccaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_a0ee431d4755d91ab515ea35f0b0971bc6a59582a97573077e0f87101e7afba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ee431d4755d91ab515ea35f0b0971bc6a59582a97573077e0f87101e7afba1->enter($__internal_a0ee431d4755d91ab515ea35f0b0971bc6a59582a97573077e0f87101e7afba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_06f21d8f2282795102ee8443581ae30d06bfbb76f550018a19e7903167dccaeb->leave($__internal_06f21d8f2282795102ee8443581ae30d06bfbb76f550018a19e7903167dccaeb_prof);

        
        $__internal_a0ee431d4755d91ab515ea35f0b0971bc6a59582a97573077e0f87101e7afba1->leave($__internal_a0ee431d4755d91ab515ea35f0b0971bc6a59582a97573077e0f87101e7afba1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
