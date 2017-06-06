<?php

/* base.html.twig */
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
        $__internal_4c064fafc0b94c30fa173ad35e68312503092475fbd8841321a5b2c6367d5ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c064fafc0b94c30fa173ad35e68312503092475fbd8841321a5b2c6367d5ab4->enter($__internal_4c064fafc0b94c30fa173ad35e68312503092475fbd8841321a5b2c6367d5ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d6d94490c25bbedd40108c7703c2fc48f31a63691f628af2eba3f2fe043ad711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d94490c25bbedd40108c7703c2fc48f31a63691f628af2eba3f2fe043ad711->enter($__internal_d6d94490c25bbedd40108c7703c2fc48f31a63691f628af2eba3f2fe043ad711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4c064fafc0b94c30fa173ad35e68312503092475fbd8841321a5b2c6367d5ab4->leave($__internal_4c064fafc0b94c30fa173ad35e68312503092475fbd8841321a5b2c6367d5ab4_prof);

        
        $__internal_d6d94490c25bbedd40108c7703c2fc48f31a63691f628af2eba3f2fe043ad711->leave($__internal_d6d94490c25bbedd40108c7703c2fc48f31a63691f628af2eba3f2fe043ad711_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_10d9d657120d53f5e42a25cf141156354de3cb1d96ecbe97805378d4b4085073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d9d657120d53f5e42a25cf141156354de3cb1d96ecbe97805378d4b4085073->enter($__internal_10d9d657120d53f5e42a25cf141156354de3cb1d96ecbe97805378d4b4085073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d5018d442753d39bbaf2fa965b82b37d7dac6edfa3181730d926a3f1b00d54d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5018d442753d39bbaf2fa965b82b37d7dac6edfa3181730d926a3f1b00d54d2->enter($__internal_d5018d442753d39bbaf2fa965b82b37d7dac6edfa3181730d926a3f1b00d54d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d5018d442753d39bbaf2fa965b82b37d7dac6edfa3181730d926a3f1b00d54d2->leave($__internal_d5018d442753d39bbaf2fa965b82b37d7dac6edfa3181730d926a3f1b00d54d2_prof);

        
        $__internal_10d9d657120d53f5e42a25cf141156354de3cb1d96ecbe97805378d4b4085073->leave($__internal_10d9d657120d53f5e42a25cf141156354de3cb1d96ecbe97805378d4b4085073_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e02e0b962bc434d16ab5ede66ea96e368bbb310011f4e8d7b3e41329e608ad92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e02e0b962bc434d16ab5ede66ea96e368bbb310011f4e8d7b3e41329e608ad92->enter($__internal_e02e0b962bc434d16ab5ede66ea96e368bbb310011f4e8d7b3e41329e608ad92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e041f75c0dbceafb5cfc7b0cb9dda3890ed14b87a0026eb1b58b9e1187f89e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e041f75c0dbceafb5cfc7b0cb9dda3890ed14b87a0026eb1b58b9e1187f89e27->enter($__internal_e041f75c0dbceafb5cfc7b0cb9dda3890ed14b87a0026eb1b58b9e1187f89e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e041f75c0dbceafb5cfc7b0cb9dda3890ed14b87a0026eb1b58b9e1187f89e27->leave($__internal_e041f75c0dbceafb5cfc7b0cb9dda3890ed14b87a0026eb1b58b9e1187f89e27_prof);

        
        $__internal_e02e0b962bc434d16ab5ede66ea96e368bbb310011f4e8d7b3e41329e608ad92->leave($__internal_e02e0b962bc434d16ab5ede66ea96e368bbb310011f4e8d7b3e41329e608ad92_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_92897555a60716ed541a10ec55ab5a2bf095a8b91159ef7c71515f25d50aa148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92897555a60716ed541a10ec55ab5a2bf095a8b91159ef7c71515f25d50aa148->enter($__internal_92897555a60716ed541a10ec55ab5a2bf095a8b91159ef7c71515f25d50aa148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e84e8df15b1a736f8d35a4ebf0786ed7973b12c0df33dc3ce178ac2236993ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e84e8df15b1a736f8d35a4ebf0786ed7973b12c0df33dc3ce178ac2236993ac->enter($__internal_7e84e8df15b1a736f8d35a4ebf0786ed7973b12c0df33dc3ce178ac2236993ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7e84e8df15b1a736f8d35a4ebf0786ed7973b12c0df33dc3ce178ac2236993ac->leave($__internal_7e84e8df15b1a736f8d35a4ebf0786ed7973b12c0df33dc3ce178ac2236993ac_prof);

        
        $__internal_92897555a60716ed541a10ec55ab5a2bf095a8b91159ef7c71515f25d50aa148->leave($__internal_92897555a60716ed541a10ec55ab5a2bf095a8b91159ef7c71515f25d50aa148_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_afd7fbf231cb64f5e96bd6782e294e3098c6fad15aee705ad5ad4726c30c288a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd7fbf231cb64f5e96bd6782e294e3098c6fad15aee705ad5ad4726c30c288a->enter($__internal_afd7fbf231cb64f5e96bd6782e294e3098c6fad15aee705ad5ad4726c30c288a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3cd70023f4c0ad336f18600be58170be858bde3fb1db8bb90226dd636ff51df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd70023f4c0ad336f18600be58170be858bde3fb1db8bb90226dd636ff51df7->enter($__internal_3cd70023f4c0ad336f18600be58170be858bde3fb1db8bb90226dd636ff51df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3cd70023f4c0ad336f18600be58170be858bde3fb1db8bb90226dd636ff51df7->leave($__internal_3cd70023f4c0ad336f18600be58170be858bde3fb1db8bb90226dd636ff51df7_prof);

        
        $__internal_afd7fbf231cb64f5e96bd6782e294e3098c6fad15aee705ad5ad4726c30c288a->leave($__internal_afd7fbf231cb64f5e96bd6782e294e3098c6fad15aee705ad5ad4726c30c288a_prof);

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
