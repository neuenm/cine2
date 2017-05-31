<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_592ff4764007cbe170440c412c0d978230f9cedd9b99f092de982e0728b1ec2c extends Twig_Template
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
        $__internal_99cf0764be48272bb64230c590730dd3d282285d75b89c0db5048c28ad23a546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99cf0764be48272bb64230c590730dd3d282285d75b89c0db5048c28ad23a546->enter($__internal_99cf0764be48272bb64230c590730dd3d282285d75b89c0db5048c28ad23a546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_79608308cd0e016482dcc9f872977b5ab3bd7ef3c9f1be583af485cee501e546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79608308cd0e016482dcc9f872977b5ab3bd7ef3c9f1be583af485cee501e546->enter($__internal_79608308cd0e016482dcc9f872977b5ab3bd7ef3c9f1be583af485cee501e546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_99cf0764be48272bb64230c590730dd3d282285d75b89c0db5048c28ad23a546->leave($__internal_99cf0764be48272bb64230c590730dd3d282285d75b89c0db5048c28ad23a546_prof);

        
        $__internal_79608308cd0e016482dcc9f872977b5ab3bd7ef3c9f1be583af485cee501e546->leave($__internal_79608308cd0e016482dcc9f872977b5ab3bd7ef3c9f1be583af485cee501e546_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
