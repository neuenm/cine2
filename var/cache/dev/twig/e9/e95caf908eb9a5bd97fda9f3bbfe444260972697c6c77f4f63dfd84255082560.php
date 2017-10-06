<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_72111f2bb34a4692c3c0a7e55cc41e467ad2b8c3530294bfd71f5611508f0b06 extends Twig_Template
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
        $__internal_660b6f44cfc93e3ec88201122cb9eb5427381e4613ba54bcff2e251630dac442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660b6f44cfc93e3ec88201122cb9eb5427381e4613ba54bcff2e251630dac442->enter($__internal_660b6f44cfc93e3ec88201122cb9eb5427381e4613ba54bcff2e251630dac442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_1ddf5f6b43f7bfbf56d47f11199dce10b9e1417f3a757c5fb3e9045feb59be7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ddf5f6b43f7bfbf56d47f11199dce10b9e1417f3a757c5fb3e9045feb59be7a->enter($__internal_1ddf5f6b43f7bfbf56d47f11199dce10b9e1417f3a757c5fb3e9045feb59be7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_660b6f44cfc93e3ec88201122cb9eb5427381e4613ba54bcff2e251630dac442->leave($__internal_660b6f44cfc93e3ec88201122cb9eb5427381e4613ba54bcff2e251630dac442_prof);

        
        $__internal_1ddf5f6b43f7bfbf56d47f11199dce10b9e1417f3a757c5fb3e9045feb59be7a->leave($__internal_1ddf5f6b43f7bfbf56d47f11199dce10b9e1417f3a757c5fb3e9045feb59be7a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
