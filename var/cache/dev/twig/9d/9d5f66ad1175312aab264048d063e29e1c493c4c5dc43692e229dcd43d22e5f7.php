<?php

/* ::base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
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
        $__internal_a5e0048bf7154eaeaf4028e00d7dcb09ca9171018a1b79565cf0ad301e606842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5e0048bf7154eaeaf4028e00d7dcb09ca9171018a1b79565cf0ad301e606842->enter($__internal_a5e0048bf7154eaeaf4028e00d7dcb09ca9171018a1b79565cf0ad301e606842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_cfeb052ed1438bef51ba93cdff8c0c752b9d1193d6e11165e37f4b10a3420b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfeb052ed1438bef51ba93cdff8c0c752b9d1193d6e11165e37f4b10a3420b60->enter($__internal_cfeb052ed1438bef51ba93cdff8c0c752b9d1193d6e11165e37f4b10a3420b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a5e0048bf7154eaeaf4028e00d7dcb09ca9171018a1b79565cf0ad301e606842->leave($__internal_a5e0048bf7154eaeaf4028e00d7dcb09ca9171018a1b79565cf0ad301e606842_prof);

        
        $__internal_cfeb052ed1438bef51ba93cdff8c0c752b9d1193d6e11165e37f4b10a3420b60->leave($__internal_cfeb052ed1438bef51ba93cdff8c0c752b9d1193d6e11165e37f4b10a3420b60_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_195e252e6fd025ac8b27a46c10c80e45e267bfb0d88b5aaa8bc4d5b8ae07ff7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195e252e6fd025ac8b27a46c10c80e45e267bfb0d88b5aaa8bc4d5b8ae07ff7f->enter($__internal_195e252e6fd025ac8b27a46c10c80e45e267bfb0d88b5aaa8bc4d5b8ae07ff7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4dca24564d5d63f425204b68e388652a44fdf21bdbcfd4bd70eb2d91b57c498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4dca24564d5d63f425204b68e388652a44fdf21bdbcfd4bd70eb2d91b57c498->enter($__internal_f4dca24564d5d63f425204b68e388652a44fdf21bdbcfd4bd70eb2d91b57c498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f4dca24564d5d63f425204b68e388652a44fdf21bdbcfd4bd70eb2d91b57c498->leave($__internal_f4dca24564d5d63f425204b68e388652a44fdf21bdbcfd4bd70eb2d91b57c498_prof);

        
        $__internal_195e252e6fd025ac8b27a46c10c80e45e267bfb0d88b5aaa8bc4d5b8ae07ff7f->leave($__internal_195e252e6fd025ac8b27a46c10c80e45e267bfb0d88b5aaa8bc4d5b8ae07ff7f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_011bbea877107c23881d63c1eac79caab443926d623d736c3109bb071e088d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_011bbea877107c23881d63c1eac79caab443926d623d736c3109bb071e088d98->enter($__internal_011bbea877107c23881d63c1eac79caab443926d623d736c3109bb071e088d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c4a749cfe5211757e29fbc028839fc86e64f8eac1cf27b30063ce9dfbef0e489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a749cfe5211757e29fbc028839fc86e64f8eac1cf27b30063ce9dfbef0e489->enter($__internal_c4a749cfe5211757e29fbc028839fc86e64f8eac1cf27b30063ce9dfbef0e489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c4a749cfe5211757e29fbc028839fc86e64f8eac1cf27b30063ce9dfbef0e489->leave($__internal_c4a749cfe5211757e29fbc028839fc86e64f8eac1cf27b30063ce9dfbef0e489_prof);

        
        $__internal_011bbea877107c23881d63c1eac79caab443926d623d736c3109bb071e088d98->leave($__internal_011bbea877107c23881d63c1eac79caab443926d623d736c3109bb071e088d98_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b43a530bcd6d9ccce73411294275f54de5b164c871bb3c0e168ead62c3fe7da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b43a530bcd6d9ccce73411294275f54de5b164c871bb3c0e168ead62c3fe7da4->enter($__internal_b43a530bcd6d9ccce73411294275f54de5b164c871bb3c0e168ead62c3fe7da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15603076198880fd60dd43721d9e2f40bd66843be881b87002d7fead7546d3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15603076198880fd60dd43721d9e2f40bd66843be881b87002d7fead7546d3f7->enter($__internal_15603076198880fd60dd43721d9e2f40bd66843be881b87002d7fead7546d3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_15603076198880fd60dd43721d9e2f40bd66843be881b87002d7fead7546d3f7->leave($__internal_15603076198880fd60dd43721d9e2f40bd66843be881b87002d7fead7546d3f7_prof);

        
        $__internal_b43a530bcd6d9ccce73411294275f54de5b164c871bb3c0e168ead62c3fe7da4->leave($__internal_b43a530bcd6d9ccce73411294275f54de5b164c871bb3c0e168ead62c3fe7da4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a9af33a8a6ecff0e08f7e017a29452b19e47e4e07f03e7c572b938b186c5f731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9af33a8a6ecff0e08f7e017a29452b19e47e4e07f03e7c572b938b186c5f731->enter($__internal_a9af33a8a6ecff0e08f7e017a29452b19e47e4e07f03e7c572b938b186c5f731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ce7daf91f9481bbe9e281056cd35a49ea968de5a7f556f684364d6a77de0c910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7daf91f9481bbe9e281056cd35a49ea968de5a7f556f684364d6a77de0c910->enter($__internal_ce7daf91f9481bbe9e281056cd35a49ea968de5a7f556f684364d6a77de0c910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ce7daf91f9481bbe9e281056cd35a49ea968de5a7f556f684364d6a77de0c910->leave($__internal_ce7daf91f9481bbe9e281056cd35a49ea968de5a7f556f684364d6a77de0c910_prof);

        
        $__internal_a9af33a8a6ecff0e08f7e017a29452b19e47e4e07f03e7c572b938b186c5f731->leave($__internal_a9af33a8a6ecff0e08f7e017a29452b19e47e4e07f03e7c572b938b186c5f731_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/home/neuen/php2016/cine2/app/Resources/views/base.html.twig");
    }
}
