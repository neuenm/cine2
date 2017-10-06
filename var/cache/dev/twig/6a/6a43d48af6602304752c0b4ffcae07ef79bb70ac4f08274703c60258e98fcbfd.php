<?php

/* CineBundle:Salas:carga.html.twig */
class __TwigTemplate_3bb4b3d6665e30033476a1512db092e5ccfe35a57302f384e83e09b4c895e0ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Salas:carga.html.twig", 1);
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
        $__internal_5b29525e681abcb70e629f5f1ca07033f015998e55e04cc65e7242d3ae325544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b29525e681abcb70e629f5f1ca07033f015998e55e04cc65e7242d3ae325544->enter($__internal_5b29525e681abcb70e629f5f1ca07033f015998e55e04cc65e7242d3ae325544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Salas:carga.html.twig"));

        $__internal_488f6861990b089cb153cebc7c474bf79a525fbac2fdaf5d7cb4574e165167d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488f6861990b089cb153cebc7c474bf79a525fbac2fdaf5d7cb4574e165167d3->enter($__internal_488f6861990b089cb153cebc7c474bf79a525fbac2fdaf5d7cb4574e165167d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Salas:carga.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b29525e681abcb70e629f5f1ca07033f015998e55e04cc65e7242d3ae325544->leave($__internal_5b29525e681abcb70e629f5f1ca07033f015998e55e04cc65e7242d3ae325544_prof);

        
        $__internal_488f6861990b089cb153cebc7c474bf79a525fbac2fdaf5d7cb4574e165167d3->leave($__internal_488f6861990b089cb153cebc7c474bf79a525fbac2fdaf5d7cb4574e165167d3_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_d0d8c1b54011e2e550b0fc82e177af1578fa518aecde02a2639632943fa725eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d8c1b54011e2e550b0fc82e177af1578fa518aecde02a2639632943fa725eb->enter($__internal_d0d8c1b54011e2e550b0fc82e177af1578fa518aecde02a2639632943fa725eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_98a8dc10816ecddaf04ef862f7e42386920e582217b1220689e7c9a1aaca933b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a8dc10816ecddaf04ef862f7e42386920e582217b1220689e7c9a1aaca933b->enter($__internal_98a8dc10816ecddaf04ef862f7e42386920e582217b1220689e7c9a1aaca933b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vistas"] ?? $this->getContext($context, "vistas")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 6
            echo "        <h4>Sala:</h4>
        ";
            // line 7
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock($context["form"], 'form_start');
            echo "
        ";
            // line 8
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock($context["form"], 'form_end');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        
        $__internal_98a8dc10816ecddaf04ef862f7e42386920e582217b1220689e7c9a1aaca933b->leave($__internal_98a8dc10816ecddaf04ef862f7e42386920e582217b1220689e7c9a1aaca933b_prof);

        
        $__internal_d0d8c1b54011e2e550b0fc82e177af1578fa518aecde02a2639632943fa725eb->leave($__internal_d0d8c1b54011e2e550b0fc82e177af1578fa518aecde02a2639632943fa725eb_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Salas:carga.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  61 => 8,  57 => 7,  54 => 6,  49 => 5,  40 => 4,  11 => 1,);
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
    {% for form in vistas %}
        <h4>Sala:</h4>
        {{form_start(form)}}
        {{form_end(form)}}
    {% endfor %}

{% endblock %}
", "CineBundle:Salas:carga.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Salas/carga.html.twig");
    }
}
