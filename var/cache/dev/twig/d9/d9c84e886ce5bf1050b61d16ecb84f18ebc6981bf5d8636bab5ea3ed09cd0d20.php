<?php

/* CineBundle:User:index.html.twig */
class __TwigTemplate_a38be9521632e15874c37266cb0851464f3a90b26a860688ee0f0a9dabfc0dd4 extends Twig_Template
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
        $__internal_7268b7da0876bd88b1b17616eb14e10aac734dde87d12de880c36dfafc57a561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7268b7da0876bd88b1b17616eb14e10aac734dde87d12de880c36dfafc57a561->enter($__internal_7268b7da0876bd88b1b17616eb14e10aac734dde87d12de880c36dfafc57a561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:User:index.html.twig"));

        $__internal_6421e99a9bedf2053d906060e2163cc3f8f222176824120049f7ae1810e4de51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6421e99a9bedf2053d906060e2163cc3f8f222176824120049f7ae1810e4de51->enter($__internal_6421e99a9bedf2053d906060e2163cc3f8f222176824120049f7ae1810e4de51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7268b7da0876bd88b1b17616eb14e10aac734dde87d12de880c36dfafc57a561->leave($__internal_7268b7da0876bd88b1b17616eb14e10aac734dde87d12de880c36dfafc57a561_prof);

        
        $__internal_6421e99a9bedf2053d906060e2163cc3f8f222176824120049f7ae1810e4de51->leave($__internal_6421e99a9bedf2053d906060e2163cc3f8f222176824120049f7ae1810e4de51_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_22921cc988219b2636471a601d0d37d3b481d5aab14f21ecc6db0eab0493fc91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22921cc988219b2636471a601d0d37d3b481d5aab14f21ecc6db0eab0493fc91->enter($__internal_22921cc988219b2636471a601d0d37d3b481d5aab14f21ecc6db0eab0493fc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_35572a3f317e1fb4df787b9e1e0a8f81dba73d038112c2522759ea21923636c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35572a3f317e1fb4df787b9e1e0a8f81dba73d038112c2522759ea21923636c4->enter($__internal_35572a3f317e1fb4df787b9e1e0a8f81dba73d038112c2522759ea21923636c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "error"), "method"));
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
        
        $__internal_35572a3f317e1fb4df787b9e1e0a8f81dba73d038112c2522759ea21923636c4->leave($__internal_35572a3f317e1fb4df787b9e1e0a8f81dba73d038112c2522759ea21923636c4_prof);

        
        $__internal_22921cc988219b2636471a601d0d37d3b481d5aab14f21ecc6db0eab0493fc91->leave($__internal_22921cc988219b2636471a601d0d37d3b481d5aab14f21ecc6db0eab0493fc91_prof);

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
        return array (  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
{% endblock %}", "CineBundle:User:index.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/User/index.html.twig");
    }
}
