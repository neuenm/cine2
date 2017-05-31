<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4d26adbebfa14c42ec61beddd94044f150afbd9bcec9763aa3cf51695163961a extends Twig_Template
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
        $__internal_e489e79ba2b6f162ec55352db831ef9277c35ef24a3fba34e1d69b3f2459b748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e489e79ba2b6f162ec55352db831ef9277c35ef24a3fba34e1d69b3f2459b748->enter($__internal_e489e79ba2b6f162ec55352db831ef9277c35ef24a3fba34e1d69b3f2459b748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4441b8599a50dbe16d5635e58e7d5542431a8a9998a3b35d0e458f45f7137b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4441b8599a50dbe16d5635e58e7d5542431a8a9998a3b35d0e458f45f7137b34->enter($__internal_4441b8599a50dbe16d5635e58e7d5542431a8a9998a3b35d0e458f45f7137b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e489e79ba2b6f162ec55352db831ef9277c35ef24a3fba34e1d69b3f2459b748->leave($__internal_e489e79ba2b6f162ec55352db831ef9277c35ef24a3fba34e1d69b3f2459b748_prof);

        
        $__internal_4441b8599a50dbe16d5635e58e7d5542431a8a9998a3b35d0e458f45f7137b34->leave($__internal_4441b8599a50dbe16d5635e58e7d5542431a8a9998a3b35d0e458f45f7137b34_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29aab74708edfc0a1ed415b6c60a7f596d914e60563f15acd151e733166f6bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29aab74708edfc0a1ed415b6c60a7f596d914e60563f15acd151e733166f6bb2->enter($__internal_29aab74708edfc0a1ed415b6c60a7f596d914e60563f15acd151e733166f6bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_57bccd4141e58bc3db75c8efde6bcc2c67d2bec8b2368414d2d70fc8ff599d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bccd4141e58bc3db75c8efde6bcc2c67d2bec8b2368414d2d70fc8ff599d36->enter($__internal_57bccd4141e58bc3db75c8efde6bcc2c67d2bec8b2368414d2d70fc8ff599d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_57bccd4141e58bc3db75c8efde6bcc2c67d2bec8b2368414d2d70fc8ff599d36->leave($__internal_57bccd4141e58bc3db75c8efde6bcc2c67d2bec8b2368414d2d70fc8ff599d36_prof);

        
        $__internal_29aab74708edfc0a1ed415b6c60a7f596d914e60563f15acd151e733166f6bb2->leave($__internal_29aab74708edfc0a1ed415b6c60a7f596d914e60563f15acd151e733166f6bb2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bf0ba0f4dc3ba70eaf93e80c1be2d9ca94912a147510683dd9bcb372a504a94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf0ba0f4dc3ba70eaf93e80c1be2d9ca94912a147510683dd9bcb372a504a94->enter($__internal_3bf0ba0f4dc3ba70eaf93e80c1be2d9ca94912a147510683dd9bcb372a504a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edeacf6be57cfd514785c35901d13a95acb6cc1a356dbbf56fee5a2a4fe0bffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edeacf6be57cfd514785c35901d13a95acb6cc1a356dbbf56fee5a2a4fe0bffb->enter($__internal_edeacf6be57cfd514785c35901d13a95acb6cc1a356dbbf56fee5a2a4fe0bffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_edeacf6be57cfd514785c35901d13a95acb6cc1a356dbbf56fee5a2a4fe0bffb->leave($__internal_edeacf6be57cfd514785c35901d13a95acb6cc1a356dbbf56fee5a2a4fe0bffb_prof);

        
        $__internal_3bf0ba0f4dc3ba70eaf93e80c1be2d9ca94912a147510683dd9bcb372a504a94->leave($__internal_3bf0ba0f4dc3ba70eaf93e80c1be2d9ca94912a147510683dd9bcb372a504a94_prof);

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
