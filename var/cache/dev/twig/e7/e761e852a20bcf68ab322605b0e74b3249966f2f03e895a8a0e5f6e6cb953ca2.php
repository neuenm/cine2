<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2ace783b508e2369b5be6fdb8cc26a46e20f9bb55f0df8c9256f2d9027f272e5 extends Twig_Template
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
        $__internal_3ae0a1425ea70efae08b67dafd1bb2427cb1e653ff72ed621f37ed430be8284c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae0a1425ea70efae08b67dafd1bb2427cb1e653ff72ed621f37ed430be8284c->enter($__internal_3ae0a1425ea70efae08b67dafd1bb2427cb1e653ff72ed621f37ed430be8284c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_36d82d4159018e496131cbf01cc54c8088919458e5eb1a9f910d273e165a76c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d82d4159018e496131cbf01cc54c8088919458e5eb1a9f910d273e165a76c2->enter($__internal_36d82d4159018e496131cbf01cc54c8088919458e5eb1a9f910d273e165a76c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3ae0a1425ea70efae08b67dafd1bb2427cb1e653ff72ed621f37ed430be8284c->leave($__internal_3ae0a1425ea70efae08b67dafd1bb2427cb1e653ff72ed621f37ed430be8284c_prof);

        
        $__internal_36d82d4159018e496131cbf01cc54c8088919458e5eb1a9f910d273e165a76c2->leave($__internal_36d82d4159018e496131cbf01cc54c8088919458e5eb1a9f910d273e165a76c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
