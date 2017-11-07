<?php

/* CineBundle:User:registro.html.twig */
class __TwigTemplate_877a28f1a2da1cb08fddfa5e718e195a1dbd84845ba53f1f0ee7eb5acedf6c97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:User:registro.html.twig", 1);
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
        $__internal_64d2acca181c7538a047003de234a21db270666ea1371590ff0647beb4a93ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d2acca181c7538a047003de234a21db270666ea1371590ff0647beb4a93ac5->enter($__internal_64d2acca181c7538a047003de234a21db270666ea1371590ff0647beb4a93ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:User:registro.html.twig"));

        $__internal_80d53dbc24857a29115b73fa9c3efa5b79893d891d9b6b1b2da2658b5661172e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d53dbc24857a29115b73fa9c3efa5b79893d891d9b6b1b2da2658b5661172e->enter($__internal_80d53dbc24857a29115b73fa9c3efa5b79893d891d9b6b1b2da2658b5661172e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:User:registro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64d2acca181c7538a047003de234a21db270666ea1371590ff0647beb4a93ac5->leave($__internal_64d2acca181c7538a047003de234a21db270666ea1371590ff0647beb4a93ac5_prof);

        
        $__internal_80d53dbc24857a29115b73fa9c3efa5b79893d891d9b6b1b2da2658b5661172e->leave($__internal_80d53dbc24857a29115b73fa9c3efa5b79893d891d9b6b1b2da2658b5661172e_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_aa89434360292d529e0a0742e54f58bd336b27bd18318f86172dfb45a53b51a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa89434360292d529e0a0742e54f58bd336b27bd18318f86172dfb45a53b51a7->enter($__internal_aa89434360292d529e0a0742e54f58bd336b27bd18318f86172dfb45a53b51a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_eff5c3e0bee9f1ce20ef2e7ce2881f87119bb494bb198e4982a7dae2f36f67b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff5c3e0bee9f1ce20ef2e7ce2881f87119bb494bb198e4982a7dae2f36f67b2->enter($__internal_eff5c3e0bee9f1ce20ef2e7ce2881f87119bb494bb198e4982a7dae2f36f67b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 4
            echo "            <script>Materialize.toast(\"";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\", 6000, 'rounded')</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
    <div class=\"container\">
        <h3 class=\"light grey-text text-lighten-3\">A Registrarse...</h3>
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaNac", array()), 'label');
        echo "
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaNac", array()), 'widget');
        echo "
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"clearfix\">
    </div>
";
        
        $__internal_eff5c3e0bee9f1ce20ef2e7ce2881f87119bb494bb198e4982a7dae2f36f67b2->leave($__internal_eff5c3e0bee9f1ce20ef2e7ce2881f87119bb494bb198e4982a7dae2f36f67b2_prof);

        
        $__internal_aa89434360292d529e0a0742e54f58bd336b27bd18318f86172dfb45a53b51a7->leave($__internal_aa89434360292d529e0a0742e54f58bd336b27bd18318f86172dfb45a53b51a7_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:User:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 14,  78 => 13,  74 => 12,  70 => 11,  63 => 6,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    {% for message in app.session.flashbag().get('status') %}
            <script>Materialize.toast(\"{{ message }}\", 6000, 'rounded')</script>
    {% endfor %}

    <div class=\"container\">
        <h3 class=\"light grey-text text-lighten-3\">A Registrarse...</h3>
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4\">
                {{form_start(form)}}
                    {{ form_label(form.fechaNac) }}
                    {{ form_widget(form.fechaNac) }}
                {{form_end(form)}}
            </div>
        </div>
        <div class=\"clearfix\">
    </div>
{% endblock %}", "CineBundle:User:registro.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/User/registro.html.twig");
    }
}
