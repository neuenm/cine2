<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5540c6804a9fec78ac83f7670cd5d2ae25b51193ca19679756861588312e8c87 extends Twig_Template
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
        $__internal_8184a3eeba249282ab7be2b410cc2a8c9e5d01bcdf9157952b32a45d6aac3fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8184a3eeba249282ab7be2b410cc2a8c9e5d01bcdf9157952b32a45d6aac3fd5->enter($__internal_8184a3eeba249282ab7be2b410cc2a8c9e5d01bcdf9157952b32a45d6aac3fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_47881205530757bf2c3c93aab9bd9a9cb2dc18b0bd35ca94ce14e5c6b614151b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47881205530757bf2c3c93aab9bd9a9cb2dc18b0bd35ca94ce14e5c6b614151b->enter($__internal_47881205530757bf2c3c93aab9bd9a9cb2dc18b0bd35ca94ce14e5c6b614151b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8184a3eeba249282ab7be2b410cc2a8c9e5d01bcdf9157952b32a45d6aac3fd5->leave($__internal_8184a3eeba249282ab7be2b410cc2a8c9e5d01bcdf9157952b32a45d6aac3fd5_prof);

        
        $__internal_47881205530757bf2c3c93aab9bd9a9cb2dc18b0bd35ca94ce14e5c6b614151b->leave($__internal_47881205530757bf2c3c93aab9bd9a9cb2dc18b0bd35ca94ce14e5c6b614151b_prof);

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
