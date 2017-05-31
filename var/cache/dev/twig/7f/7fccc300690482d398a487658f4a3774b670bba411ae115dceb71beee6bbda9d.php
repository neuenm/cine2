<?php

/* CineBundle:User:index.html.twig */
class __TwigTemplate_8915766082c1e9a17d6beafbb71e8aea49d7cb8e5cf7fbb90877c0c48a087d61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:User:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CineBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a82ba671c0030d2ac03d653b01a42d2657c58287f19c8d0cf65fc9217f1c3fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82ba671c0030d2ac03d653b01a42d2657c58287f19c8d0cf65fc9217f1c3fb4->enter($__internal_a82ba671c0030d2ac03d653b01a42d2657c58287f19c8d0cf65fc9217f1c3fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:User:index.html.twig"));

        $__internal_01b24be121578137ea1a3273b6300e49659fad3e9ed42394bf803b3ab6c3c084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b24be121578137ea1a3273b6300e49659fad3e9ed42394bf803b3ab6c3c084->enter($__internal_01b24be121578137ea1a3273b6300e49659fad3e9ed42394bf803b3ab6c3c084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a82ba671c0030d2ac03d653b01a42d2657c58287f19c8d0cf65fc9217f1c3fb4->leave($__internal_a82ba671c0030d2ac03d653b01a42d2657c58287f19c8d0cf65fc9217f1c3fb4_prof);

        
        $__internal_01b24be121578137ea1a3273b6300e49659fad3e9ed42394bf803b3ab6c3c084->leave($__internal_01b24be121578137ea1a3273b6300e49659fad3e9ed42394bf803b3ab6c3c084_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_5b9c40e12a1e50c7ac37f2e6f1fca5af9dd362c4d4dbcbc4d1b241d93e745093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9c40e12a1e50c7ac37f2e6f1fca5af9dd362c4d4dbcbc4d1b241d93e745093->enter($__internal_5b9c40e12a1e50c7ac37f2e6f1fca5af9dd362c4d4dbcbc4d1b241d93e745093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_eef7b24cbef4bf67bbc1c4f84b4b0c6353e2dd4f5037fd27ae8d31c45e18af32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef7b24cbef4bf67bbc1c4f84b4b0c6353e2dd4f5037fd27ae8d31c45e18af32->enter($__internal_eef7b24cbef4bf67bbc1c4f84b4b0c6353e2dd4f5037fd27ae8d31c45e18af32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 4
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "la concha de su madre
";
        
        $__internal_eef7b24cbef4bf67bbc1c4f84b4b0c6353e2dd4f5037fd27ae8d31c45e18af32->leave($__internal_eef7b24cbef4bf67bbc1c4f84b4b0c6353e2dd4f5037fd27ae8d31c45e18af32_prof);

        
        $__internal_5b9c40e12a1e50c7ac37f2e6f1fca5af9dd362c4d4dbcbc4d1b241d93e745093->leave($__internal_5b9c40e12a1e50c7ac37f2e6f1fca5af9dd362c4d4dbcbc4d1b241d93e745093_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 6,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"CineBundle::layout.html.twig\" %}
{% block content %}
    {% for message in app.session.flashbag().get('error') %}
        <div class=\"alert alert-danger\">{{ message }}</div>
    {% endfor %}
la concha de su madre
{% endblock %}", "CineBundle:User:index.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/User/index.html.twig");
    }
}
