<?php

/* CineBundle:Cine:nuevo.html.twig */
class __TwigTemplate_d7e5af561c939e666fcdc95c32a66e89550f409a0152836fc8639e1f3ed81de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Cine:nuevo.html.twig", 1);
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
        $__internal_ea82e1120498e9babb65296dada184b296bc91116392855debc920cbea5190c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea82e1120498e9babb65296dada184b296bc91116392855debc920cbea5190c7->enter($__internal_ea82e1120498e9babb65296dada184b296bc91116392855debc920cbea5190c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:nuevo.html.twig"));

        $__internal_01ae8f87e285d9d91e84e13dd5411da9639b2abdfb62f2ba79dda4cf3e78ead3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ae8f87e285d9d91e84e13dd5411da9639b2abdfb62f2ba79dda4cf3e78ead3->enter($__internal_01ae8f87e285d9d91e84e13dd5411da9639b2abdfb62f2ba79dda4cf3e78ead3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Cine:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea82e1120498e9babb65296dada184b296bc91116392855debc920cbea5190c7->leave($__internal_ea82e1120498e9babb65296dada184b296bc91116392855debc920cbea5190c7_prof);

        
        $__internal_01ae8f87e285d9d91e84e13dd5411da9639b2abdfb62f2ba79dda4cf3e78ead3->leave($__internal_01ae8f87e285d9d91e84e13dd5411da9639b2abdfb62f2ba79dda4cf3e78ead3_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_5a78e2d9faf2b8416f3def8e12c8eb7b24d3624a8762c324532bf5a1af6434c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a78e2d9faf2b8416f3def8e12c8eb7b24d3624a8762c324532bf5a1af6434c7->enter($__internal_5a78e2d9faf2b8416f3def8e12c8eb7b24d3624a8762c324532bf5a1af6434c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_16121f27dc3d0585f89bf44840defa514d0dc3cef908d905924f374f302df75a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16121f27dc3d0585f89bf44840defa514d0dc3cef908d905924f374f302df75a->enter($__internal_16121f27dc3d0585f89bf44840defa514d0dc3cef908d905924f374f302df75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"container\">
        <h3 class=\"light grey-text text-lighten-3\">Nuevo cine:</h3>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "            <script>Materialize.toast(\"";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\", 6000, 'rounded')</script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        <div class=\"row\">
            <div>
                ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'label');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("class" => "browser-default center-align")));
        echo "
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"clearfix\">
    </div>
";
        
        $__internal_16121f27dc3d0585f89bf44840defa514d0dc3cef908d905924f374f302df75a->leave($__internal_16121f27dc3d0585f89bf44840defa514d0dc3cef908d905924f374f302df75a_prof);

        
        $__internal_5a78e2d9faf2b8416f3def8e12c8eb7b24d3624a8762c324532bf5a1af6434c7->leave($__internal_5a78e2d9faf2b8416f3def8e12c8eb7b24d3624a8762c324532bf5a1af6434c7_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Cine:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 8,  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
        <h3 class=\"light grey-text text-lighten-3\">Nuevo cine:</h3>
        {% for message in app.session.flashbag().get('status') %}
            <script>Materialize.toast(\"{{ message }}\", 6000, 'rounded')</script>
        {% endfor %}
        <div class=\"row\">
            <div>
                {{form_start(form)}}
                {{ form_label(form.estado) }}
                {{ form_widget(form.estado, { 'attr': {'class': 'browser-default center-align'} })  }}
                {{form_end(form)}}
            </div>
        </div>
        <div class=\"clearfix\">
    </div>
{% endblock %}", "CineBundle:Cine:nuevo.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Cine/nuevo.html.twig");
    }
}
