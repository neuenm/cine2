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
        $__internal_828cad254221215c28c6ab9fe35dfcb79962003553d37d758b1dc25615835652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_828cad254221215c28c6ab9fe35dfcb79962003553d37d758b1dc25615835652->enter($__internal_828cad254221215c28c6ab9fe35dfcb79962003553d37d758b1dc25615835652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:edita.html.twig"));

        $__internal_8c562ad35e35d41d5014194500837822b4b1b2ac7895853812ed668b6b6bdfbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c562ad35e35d41d5014194500837822b4b1b2ac7895853812ed668b6b6bdfbd->enter($__internal_8c562ad35e35d41d5014194500837822b4b1b2ac7895853812ed668b6b6bdfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Funcion:edita.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_828cad254221215c28c6ab9fe35dfcb79962003553d37d758b1dc25615835652->leave($__internal_828cad254221215c28c6ab9fe35dfcb79962003553d37d758b1dc25615835652_prof);

        
        $__internal_8c562ad35e35d41d5014194500837822b4b1b2ac7895853812ed668b6b6bdfbd->leave($__internal_8c562ad35e35d41d5014194500837822b4b1b2ac7895853812ed668b6b6bdfbd_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_58054feea8cbe5443e7621ea140bbbbbc4a9c5f435a228dda087ec8f39a56c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58054feea8cbe5443e7621ea140bbbbbc4a9c5f435a228dda087ec8f39a56c3d->enter($__internal_58054feea8cbe5443e7621ea140bbbbbc4a9c5f435a228dda087ec8f39a56c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f2d70a20c7af7348b95385094539ac9ca7165c5e80f501de99fa400d71141e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d70a20c7af7348b95385094539ac9ca7165c5e80f501de99fa400d71141e2f->enter($__internal_f2d70a20c7af7348b95385094539ac9ca7165c5e80f501de99fa400d71141e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"container\">
        <h3 class=\"light grey-text text-lighten-3\">Edicion de la funcion:</h3>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "            <script>Materialize.toast(\"";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\", 6000, 'rounded')</script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-4 \">
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
        </div>
        <div class=\"clearfix\">
    </div>
";
        
        $__internal_f2d70a20c7af7348b95385094539ac9ca7165c5e80f501de99fa400d71141e2f->leave($__internal_f2d70a20c7af7348b95385094539ac9ca7165c5e80f501de99fa400d71141e2f_prof);

        
        $__internal_58054feea8cbe5443e7621ea140bbbbbc4a9c5f435a228dda087ec8f39a56c3d->leave($__internal_58054feea8cbe5443e7621ea140bbbbbc4a9c5f435a228dda087ec8f39a56c3d_prof);

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
        return array (  75 => 14,  71 => 13,  66 => 10,  57 => 8,  53 => 7,  49 => 5,  40 => 4,  11 => 1,);
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
        <h3 class=\"light grey-text text-lighten-3\">Edicion de la funcion:</h3>
        {% for message in app.session.flashbag().get('status') %}
            <script>Materialize.toast(\"{{ message }}\", 6000, 'rounded')</script>
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
    </div>
{% endblock %}", "CineBundle:Funcion:edita.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Funcion/edita.html.twig");
    }
}
