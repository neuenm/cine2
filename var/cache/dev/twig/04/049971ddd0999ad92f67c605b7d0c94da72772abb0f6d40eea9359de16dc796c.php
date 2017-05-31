<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_08c5260ee4e561334fa86420cf42aadde8851b4a82c32d1a9f959c9f68affdd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2eb349e2eb923be89db87c278df3ae8a0398b390b8159126df875dcacfc56d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb349e2eb923be89db87c278df3ae8a0398b390b8159126df875dcacfc56d6e->enter($__internal_2eb349e2eb923be89db87c278df3ae8a0398b390b8159126df875dcacfc56d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_adc2891b462f9f74ee95f24764d7def3f82fdb1206cbd00c4c54700a2ddc0234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc2891b462f9f74ee95f24764d7def3f82fdb1206cbd00c4c54700a2ddc0234->enter($__internal_adc2891b462f9f74ee95f24764d7def3f82fdb1206cbd00c4c54700a2ddc0234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eb349e2eb923be89db87c278df3ae8a0398b390b8159126df875dcacfc56d6e->leave($__internal_2eb349e2eb923be89db87c278df3ae8a0398b390b8159126df875dcacfc56d6e_prof);

        
        $__internal_adc2891b462f9f74ee95f24764d7def3f82fdb1206cbd00c4c54700a2ddc0234->leave($__internal_adc2891b462f9f74ee95f24764d7def3f82fdb1206cbd00c4c54700a2ddc0234_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9db8122dcdf0db00b292b9fab3b7be91e6b3f074470cee3432bf864c54141ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db8122dcdf0db00b292b9fab3b7be91e6b3f074470cee3432bf864c54141ec4->enter($__internal_9db8122dcdf0db00b292b9fab3b7be91e6b3f074470cee3432bf864c54141ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f8a94bb357eda4167108a2e91405c12e91ed9ca3b83f669be96f2e3c27665641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a94bb357eda4167108a2e91405c12e91ed9ca3b83f669be96f2e3c27665641->enter($__internal_f8a94bb357eda4167108a2e91405c12e91ed9ca3b83f669be96f2e3c27665641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_f8a94bb357eda4167108a2e91405c12e91ed9ca3b83f669be96f2e3c27665641->leave($__internal_f8a94bb357eda4167108a2e91405c12e91ed9ca3b83f669be96f2e3c27665641_prof);

        
        $__internal_9db8122dcdf0db00b292b9fab3b7be91e6b3f074470cee3432bf864c54141ec4->leave($__internal_9db8122dcdf0db00b292b9fab3b7be91e6b3f074470cee3432bf864c54141ec4_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c243d517dd119d1bf815e42f6b17abd505ffd9375f5d345a76c957cafe5d4133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c243d517dd119d1bf815e42f6b17abd505ffd9375f5d345a76c957cafe5d4133->enter($__internal_c243d517dd119d1bf815e42f6b17abd505ffd9375f5d345a76c957cafe5d4133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a0d3086ef58ba8bc2b03ba2267819a9a5d62de0e2abe1cbc596b5721d363f7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d3086ef58ba8bc2b03ba2267819a9a5d62de0e2abe1cbc596b5721d363f7c8->enter($__internal_a0d3086ef58ba8bc2b03ba2267819a9a5d62de0e2abe1cbc596b5721d363f7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a0d3086ef58ba8bc2b03ba2267819a9a5d62de0e2abe1cbc596b5721d363f7c8->leave($__internal_a0d3086ef58ba8bc2b03ba2267819a9a5d62de0e2abe1cbc596b5721d363f7c8_prof);

        
        $__internal_c243d517dd119d1bf815e42f6b17abd505ffd9375f5d345a76c957cafe5d4133->leave($__internal_c243d517dd119d1bf815e42f6b17abd505ffd9375f5d345a76c957cafe5d4133_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/neuen/php2016/cine2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
