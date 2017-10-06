<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d9ffae65641b2646830901a5f86c06bf780d0129aa15524b0693f8abf9d9bfc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_658329e751c50385f3afefb6ade21de82dbdd38a9b1f7f135e3930629ce5fefb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658329e751c50385f3afefb6ade21de82dbdd38a9b1f7f135e3930629ce5fefb->enter($__internal_658329e751c50385f3afefb6ade21de82dbdd38a9b1f7f135e3930629ce5fefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a91de51c168aaf0c4e610477d6b974256987f9d54c0fd9642a6d8a96b19194e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91de51c168aaf0c4e610477d6b974256987f9d54c0fd9642a6d8a96b19194e2->enter($__internal_a91de51c168aaf0c4e610477d6b974256987f9d54c0fd9642a6d8a96b19194e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_658329e751c50385f3afefb6ade21de82dbdd38a9b1f7f135e3930629ce5fefb->leave($__internal_658329e751c50385f3afefb6ade21de82dbdd38a9b1f7f135e3930629ce5fefb_prof);

        
        $__internal_a91de51c168aaf0c4e610477d6b974256987f9d54c0fd9642a6d8a96b19194e2->leave($__internal_a91de51c168aaf0c4e610477d6b974256987f9d54c0fd9642a6d8a96b19194e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dcef3c4be83f0e93d2f60faade0246f92359adcbc3eb5a27f49a36d96d6cde4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dcef3c4be83f0e93d2f60faade0246f92359adcbc3eb5a27f49a36d96d6cde4->enter($__internal_5dcef3c4be83f0e93d2f60faade0246f92359adcbc3eb5a27f49a36d96d6cde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9278014e3b5bf4b74b27300d66c4ac13f1f29f0ed063bb9d5d33121040416dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9278014e3b5bf4b74b27300d66c4ac13f1f29f0ed063bb9d5d33121040416dc6->enter($__internal_9278014e3b5bf4b74b27300d66c4ac13f1f29f0ed063bb9d5d33121040416dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9278014e3b5bf4b74b27300d66c4ac13f1f29f0ed063bb9d5d33121040416dc6->leave($__internal_9278014e3b5bf4b74b27300d66c4ac13f1f29f0ed063bb9d5d33121040416dc6_prof);

        
        $__internal_5dcef3c4be83f0e93d2f60faade0246f92359adcbc3eb5a27f49a36d96d6cde4->leave($__internal_5dcef3c4be83f0e93d2f60faade0246f92359adcbc3eb5a27f49a36d96d6cde4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1ab28a83aed87f4c982bc50c591bccb01412ad50ae2bd018044e534639007cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ab28a83aed87f4c982bc50c591bccb01412ad50ae2bd018044e534639007cd->enter($__internal_b1ab28a83aed87f4c982bc50c591bccb01412ad50ae2bd018044e534639007cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59966d310780fb2693b256453d3a237ff6abffd0c32b58288e2bcf53d8e798c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59966d310780fb2693b256453d3a237ff6abffd0c32b58288e2bcf53d8e798c8->enter($__internal_59966d310780fb2693b256453d3a237ff6abffd0c32b58288e2bcf53d8e798c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_59966d310780fb2693b256453d3a237ff6abffd0c32b58288e2bcf53d8e798c8->leave($__internal_59966d310780fb2693b256453d3a237ff6abffd0c32b58288e2bcf53d8e798c8_prof);

        
        $__internal_b1ab28a83aed87f4c982bc50c591bccb01412ad50ae2bd018044e534639007cd->leave($__internal_b1ab28a83aed87f4c982bc50c591bccb01412ad50ae2bd018044e534639007cd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
