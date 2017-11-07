<?php

/* CineBundle:Funcion:nueva.html.twig */
class __TwigTemplate_23d9546afc239cee5fd422017524a27f9b040e54ef93814edba9481e427b42e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Funcion:nueva.html.twig", 1);
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
        $__internal_692814689d36be06d6803e0509eb816e42ad2e6a7c3e4ec2885f49875d89766f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692814689d36be06d6803e0509eb816e42ad2e6a7c3e4ec2885f49875d89766f->enter($__internal_692814689d36be06d6803e0509eb816e42ad2e6a7c3e4ec2885f49875d89766f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:nueva.html.twig"));

        $__internal_dff92cf0a55026b3da9929c134928d6ae3722d237fb4c813b3ab81361d70b6cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff92cf0a55026b3da9929c134928d6ae3722d237fb4c813b3ab81361d70b6cc->enter($__internal_dff92cf0a55026b3da9929c134928d6ae3722d237fb4c813b3ab81361d70b6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_692814689d36be06d6803e0509eb816e42ad2e6a7c3e4ec2885f49875d89766f->leave($__internal_692814689d36be06d6803e0509eb816e42ad2e6a7c3e4ec2885f49875d89766f_prof);

        
        $__internal_dff92cf0a55026b3da9929c134928d6ae3722d237fb4c813b3ab81361d70b6cc->leave($__internal_dff92cf0a55026b3da9929c134928d6ae3722d237fb4c813b3ab81361d70b6cc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_37542a4ac56fe427ed4e1b435e04996fefda5ae1e970598448bf274fea900312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37542a4ac56fe427ed4e1b435e04996fefda5ae1e970598448bf274fea900312->enter($__internal_37542a4ac56fe427ed4e1b435e04996fefda5ae1e970598448bf274fea900312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_63651dcce0af863b831c5634f1dc693a6e704e1b8bd43f511845f487875da6a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63651dcce0af863b831c5634f1dc693a6e704e1b8bd43f511845f487875da6a0->enter($__internal_63651dcce0af863b831c5634f1dc693a6e704e1b8bd43f511845f487875da6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <h3 class=\"light grey-text text-lighten-3\">Nueva Funcion:</h3>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "            <script>Materialize.toast(\"";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\", 6000, 'rounded')</script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"clearfix\">
    </div>
";
        
        $__internal_63651dcce0af863b831c5634f1dc693a6e704e1b8bd43f511845f487875da6a0->leave($__internal_63651dcce0af863b831c5634f1dc693a6e704e1b8bd43f511845f487875da6a0_prof);

        
        $__internal_37542a4ac56fe427ed4e1b435e04996fefda5ae1e970598448bf274fea900312->leave($__internal_37542a4ac56fe427ed4e1b435e04996fefda5ae1e970598448bf274fea900312_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Funcion:nueva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  70 => 11,  66 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container\">
        <h3 class=\"light grey-text text-lighten-3\">Nueva Funcion:</h3>
        {% for message in app.session.flashbag().get('status') %}
            <script>Materialize.toast(\"{{ message }}\", 6000, 'rounded')</script>
        {% endfor %}
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
                {{form_start(form)}}
                {{form_end(form)}}
            </div>
        </div>
        <div class=\"clearfix\">
    </div>
{% endblock %}", "CineBundle:Funcion:nueva.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Funcion/nueva.html.twig");
    }
}
