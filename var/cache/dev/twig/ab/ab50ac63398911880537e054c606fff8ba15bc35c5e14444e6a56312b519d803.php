<?php

/* base.html.twig */
class __TwigTemplate_16a23e782c877cef47f574aedb0825f8bdb2fcf5aed0bf15a527a227eee5d38c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31abeec9e0450b85721e7e2cbecfd47e3c40b37b5212531eab5387880c2ff5eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31abeec9e0450b85721e7e2cbecfd47e3c40b37b5212531eab5387880c2ff5eb->enter($__internal_31abeec9e0450b85721e7e2cbecfd47e3c40b37b5212531eab5387880c2ff5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_52e878811c55e26952177406e343e7f7377baa6c214321123e19a3ca6d1fa333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e878811c55e26952177406e343e7f7377baa6c214321123e19a3ca6d1fa333->enter($__internal_52e878811c55e26952177406e343e7f7377baa6c214321123e19a3ca6d1fa333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_31abeec9e0450b85721e7e2cbecfd47e3c40b37b5212531eab5387880c2ff5eb->leave($__internal_31abeec9e0450b85721e7e2cbecfd47e3c40b37b5212531eab5387880c2ff5eb_prof);

        
        $__internal_52e878811c55e26952177406e343e7f7377baa6c214321123e19a3ca6d1fa333->leave($__internal_52e878811c55e26952177406e343e7f7377baa6c214321123e19a3ca6d1fa333_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_000e4ec210241de90829b4b89dc586cd3b727af4ecf18f8fe1702550487e18aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000e4ec210241de90829b4b89dc586cd3b727af4ecf18f8fe1702550487e18aa->enter($__internal_000e4ec210241de90829b4b89dc586cd3b727af4ecf18f8fe1702550487e18aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00a0a411dc56b1888c82589968c40582083478da40b1de8ecd95efc79854dcbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a0a411dc56b1888c82589968c40582083478da40b1de8ecd95efc79854dcbb->enter($__internal_00a0a411dc56b1888c82589968c40582083478da40b1de8ecd95efc79854dcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_00a0a411dc56b1888c82589968c40582083478da40b1de8ecd95efc79854dcbb->leave($__internal_00a0a411dc56b1888c82589968c40582083478da40b1de8ecd95efc79854dcbb_prof);

        
        $__internal_000e4ec210241de90829b4b89dc586cd3b727af4ecf18f8fe1702550487e18aa->leave($__internal_000e4ec210241de90829b4b89dc586cd3b727af4ecf18f8fe1702550487e18aa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3a718e9a9b9555d04b19a67910603d4ff68d67d3d97cedcdb92cd1684827be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a718e9a9b9555d04b19a67910603d4ff68d67d3d97cedcdb92cd1684827be0->enter($__internal_a3a718e9a9b9555d04b19a67910603d4ff68d67d3d97cedcdb92cd1684827be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_adb39cfafc91f9e3f6cdfd2dd526ebf15cf48a0324faeb347b71e5fa1ad91c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb39cfafc91f9e3f6cdfd2dd526ebf15cf48a0324faeb347b71e5fa1ad91c26->enter($__internal_adb39cfafc91f9e3f6cdfd2dd526ebf15cf48a0324faeb347b71e5fa1ad91c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_adb39cfafc91f9e3f6cdfd2dd526ebf15cf48a0324faeb347b71e5fa1ad91c26->leave($__internal_adb39cfafc91f9e3f6cdfd2dd526ebf15cf48a0324faeb347b71e5fa1ad91c26_prof);

        
        $__internal_a3a718e9a9b9555d04b19a67910603d4ff68d67d3d97cedcdb92cd1684827be0->leave($__internal_a3a718e9a9b9555d04b19a67910603d4ff68d67d3d97cedcdb92cd1684827be0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e17287571174962feebab803d99f9e510e879f98eeb0c0d1012ff6dd25e0a3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e17287571174962feebab803d99f9e510e879f98eeb0c0d1012ff6dd25e0a3c1->enter($__internal_e17287571174962feebab803d99f9e510e879f98eeb0c0d1012ff6dd25e0a3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34f51172319c7b312f96ee73519c4b066e49a3bfafeec71136d7f29d284d17b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f51172319c7b312f96ee73519c4b066e49a3bfafeec71136d7f29d284d17b6->enter($__internal_34f51172319c7b312f96ee73519c4b066e49a3bfafeec71136d7f29d284d17b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_34f51172319c7b312f96ee73519c4b066e49a3bfafeec71136d7f29d284d17b6->leave($__internal_34f51172319c7b312f96ee73519c4b066e49a3bfafeec71136d7f29d284d17b6_prof);

        
        $__internal_e17287571174962feebab803d99f9e510e879f98eeb0c0d1012ff6dd25e0a3c1->leave($__internal_e17287571174962feebab803d99f9e510e879f98eeb0c0d1012ff6dd25e0a3c1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7dd49352745c3a813a20fb15c6762705ee7c14f3df8fbc862fd584f6f7e3681c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd49352745c3a813a20fb15c6762705ee7c14f3df8fbc862fd584f6f7e3681c->enter($__internal_7dd49352745c3a813a20fb15c6762705ee7c14f3df8fbc862fd584f6f7e3681c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_783db7dae3c24c9c75a75004898c36b5ebd7dce11264edcb5f3a730e8ba35c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783db7dae3c24c9c75a75004898c36b5ebd7dce11264edcb5f3a730e8ba35c95->enter($__internal_783db7dae3c24c9c75a75004898c36b5ebd7dce11264edcb5f3a730e8ba35c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_783db7dae3c24c9c75a75004898c36b5ebd7dce11264edcb5f3a730e8ba35c95->leave($__internal_783db7dae3c24c9c75a75004898c36b5ebd7dce11264edcb5f3a730e8ba35c95_prof);

        
        $__internal_7dd49352745c3a813a20fb15c6762705ee7c14f3df8fbc862fd584f6f7e3681c->leave($__internal_7dd49352745c3a813a20fb15c6762705ee7c14f3df8fbc862fd584f6f7e3681c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/neuen/php2016/cine2/app/Resources/views/base.html.twig");
    }
}
