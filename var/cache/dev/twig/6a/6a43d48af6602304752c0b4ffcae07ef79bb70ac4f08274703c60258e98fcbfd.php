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
        $__internal_cc5a30026b3d1e90880743ced47e55e9243438bf5c2b90f13d71dad4ee1adedf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5a30026b3d1e90880743ced47e55e9243438bf5c2b90f13d71dad4ee1adedf->enter($__internal_cc5a30026b3d1e90880743ced47e55e9243438bf5c2b90f13d71dad4ee1adedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Salas:carga.html.twig"));

        $__internal_dc7085b0ad4d0ba19883c487a6096a465c4b10d8ac32041b4b62d9f0f865fb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7085b0ad4d0ba19883c487a6096a465c4b10d8ac32041b4b62d9f0f865fb87->enter($__internal_dc7085b0ad4d0ba19883c487a6096a465c4b10d8ac32041b4b62d9f0f865fb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Salas:carga.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc5a30026b3d1e90880743ced47e55e9243438bf5c2b90f13d71dad4ee1adedf->leave($__internal_cc5a30026b3d1e90880743ced47e55e9243438bf5c2b90f13d71dad4ee1adedf_prof);

        
        $__internal_dc7085b0ad4d0ba19883c487a6096a465c4b10d8ac32041b4b62d9f0f865fb87->leave($__internal_dc7085b0ad4d0ba19883c487a6096a465c4b10d8ac32041b4b62d9f0f865fb87_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_09cb6d6e515090768c3adf7468f30d2970db3a571eea8bae5eeb10aa829dc74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09cb6d6e515090768c3adf7468f30d2970db3a571eea8bae5eeb10aa829dc74c->enter($__internal_09cb6d6e515090768c3adf7468f30d2970db3a571eea8bae5eeb10aa829dc74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ae1715150a3c1d78b9c7149a0cf794e20ace4c5dac69bf8d23fe24a244831dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1715150a3c1d78b9c7149a0cf794e20ace4c5dac69bf8d23fe24a244831dcf->enter($__internal_ae1715150a3c1d78b9c7149a0cf794e20ace4c5dac69bf8d23fe24a244831dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ae1715150a3c1d78b9c7149a0cf794e20ace4c5dac69bf8d23fe24a244831dcf->leave($__internal_ae1715150a3c1d78b9c7149a0cf794e20ace4c5dac69bf8d23fe24a244831dcf_prof);

        
        $__internal_09cb6d6e515090768c3adf7468f30d2970db3a571eea8bae5eeb10aa829dc74c->leave($__internal_09cb6d6e515090768c3adf7468f30d2970db3a571eea8bae5eeb10aa829dc74c_prof);

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
