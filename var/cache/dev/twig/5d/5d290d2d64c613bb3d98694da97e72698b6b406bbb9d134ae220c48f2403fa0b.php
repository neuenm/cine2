<?php

/* CineBundle:Funcion:edita.html.twig */
class __TwigTemplate_55ea88279c2fc4afbc908a9669bd744c5b58b284bc2ae4633221585db87ab9e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Funcion:edita.html.twig", 1);
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
        $__internal_2be94c4f2566807e1bb7b29cbb825e70bfee3451e1d975c45b65440c2a95bdd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be94c4f2566807e1bb7b29cbb825e70bfee3451e1d975c45b65440c2a95bdd2->enter($__internal_2be94c4f2566807e1bb7b29cbb825e70bfee3451e1d975c45b65440c2a95bdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:edita.html.twig"));

        $__internal_7c46239cb461014e2b3fa2e399329c2dd39637e8cacbbe2efffcfa69b33e0b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c46239cb461014e2b3fa2e399329c2dd39637e8cacbbe2efffcfa69b33e0b05->enter($__internal_7c46239cb461014e2b3fa2e399329c2dd39637e8cacbbe2efffcfa69b33e0b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:edita.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be94c4f2566807e1bb7b29cbb825e70bfee3451e1d975c45b65440c2a95bdd2->leave($__internal_2be94c4f2566807e1bb7b29cbb825e70bfee3451e1d975c45b65440c2a95bdd2_prof);

        
        $__internal_7c46239cb461014e2b3fa2e399329c2dd39637e8cacbbe2efffcfa69b33e0b05->leave($__internal_7c46239cb461014e2b3fa2e399329c2dd39637e8cacbbe2efffcfa69b33e0b05_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_b64989e982fb1971993fe2a4e99aacf9eaf0f6e51f543d08266dc9c9d56924f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b64989e982fb1971993fe2a4e99aacf9eaf0f6e51f543d08266dc9c9d56924f1->enter($__internal_b64989e982fb1971993fe2a4e99aacf9eaf0f6e51f543d08266dc9c9d56924f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c67c338bce49bad1b15c3d47b08640bd61df806e77c49ac354b7d03ca5e82e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67c338bce49bad1b15c3d47b08640bd61df806e77c49ac354b7d03ca5e82e8e->enter($__internal_c67c338bce49bad1b15c3d47b08640bd61df806e77c49ac354b7d03ca5e82e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1 class=\"text-center\"\">Edicion de la funcion:</h1>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "        ";
            if (($context["message"] == "Se guardaron sus cambios correctamente")) {
                // line 8
                echo "            <div class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            } else {
                // line 10
                echo "            <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        ";
            }
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    <div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-6 col-sm-4 \">
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    </div>
    <div class=\"clearfix\">
";
        
        $__internal_c67c338bce49bad1b15c3d47b08640bd61df806e77c49ac354b7d03ca5e82e8e->leave($__internal_c67c338bce49bad1b15c3d47b08640bd61df806e77c49ac354b7d03ca5e82e8e_prof);

        
        $__internal_b64989e982fb1971993fe2a4e99aacf9eaf0f6e51f543d08266dc9c9d56924f1->leave($__internal_b64989e982fb1971993fe2a4e99aacf9eaf0f6e51f543d08266dc9c9d56924f1_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Funcion:edita.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 17,  82 => 16,  77 => 13,  71 => 12,  65 => 10,  59 => 8,  56 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 1,);
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
    <h1 class=\"text-center\"\">Edicion de la funcion:</h1>
    {% for message in app.session.flashbag().get('status') %}
        {% if message== \"Se guardaron sus cambios correctamente\" %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {%else%}
            <div class=\"alert alert-danger\">{{ message }}</div>
        {% endif %}
    {% endfor %}
    <div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-6 col-sm-4 \">
            {{form_start(form)}}
            {{form_end(form)}}
        </div>
    </div>
    </div>
    <div class=\"clearfix\">
{% endblock %}", "CineBundle:Funcion:edita.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Funcion/edita.html.twig");
    }
}
