<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7a0807ab90842576cc468ab9224ef624d727f17b9729de216a9e990fe8d07bec extends Twig_Template
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
        $__internal_c9d197034814a5fe3c750a17a1fd2a485dbe88951f5c7ad7a2ebf39331731ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d197034814a5fe3c750a17a1fd2a485dbe88951f5c7ad7a2ebf39331731ef5->enter($__internal_c9d197034814a5fe3c750a17a1fd2a485dbe88951f5c7ad7a2ebf39331731ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_4fbb0a9105b26eb69605ffd9ada6fc93d5dd784cfab541a6b3cf4d209b9918f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fbb0a9105b26eb69605ffd9ada6fc93d5dd784cfab541a6b3cf4d209b9918f1->enter($__internal_4fbb0a9105b26eb69605ffd9ada6fc93d5dd784cfab541a6b3cf4d209b9918f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c9d197034814a5fe3c750a17a1fd2a485dbe88951f5c7ad7a2ebf39331731ef5->leave($__internal_c9d197034814a5fe3c750a17a1fd2a485dbe88951f5c7ad7a2ebf39331731ef5_prof);

        
        $__internal_4fbb0a9105b26eb69605ffd9ada6fc93d5dd784cfab541a6b3cf4d209b9918f1->leave($__internal_4fbb0a9105b26eb69605ffd9ada6fc93d5dd784cfab541a6b3cf4d209b9918f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
