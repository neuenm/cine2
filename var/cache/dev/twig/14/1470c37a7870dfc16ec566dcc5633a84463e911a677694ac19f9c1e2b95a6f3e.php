<?php

/* CineBundle:Reserva:confirma.html.twig */
class __TwigTemplate_59c81cb0bc0b81713923f6a33cf5466d3bc0a71d63ffc6017bc9392c43de09b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CineBundle::layout.html.twig", "CineBundle:Reserva:confirma.html.twig", 1);
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
        $__internal_653397a3945cc51eb89adb284a1193ceea3638fc52589cc102fcccdc65ac99c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_653397a3945cc51eb89adb284a1193ceea3638fc52589cc102fcccdc65ac99c7->enter($__internal_653397a3945cc51eb89adb284a1193ceea3638fc52589cc102fcccdc65ac99c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:confirma.html.twig"));

        $__internal_2675195d3302612088173bea73de3f7a6f86b9fa1f13740d75119433d07866e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2675195d3302612088173bea73de3f7a6f86b9fa1f13740d75119433d07866e4->enter($__internal_2675195d3302612088173bea73de3f7a6f86b9fa1f13740d75119433d07866e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CineBundle:Reserva:confirma.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_653397a3945cc51eb89adb284a1193ceea3638fc52589cc102fcccdc65ac99c7->leave($__internal_653397a3945cc51eb89adb284a1193ceea3638fc52589cc102fcccdc65ac99c7_prof);

        
        $__internal_2675195d3302612088173bea73de3f7a6f86b9fa1f13740d75119433d07866e4->leave($__internal_2675195d3302612088173bea73de3f7a6f86b9fa1f13740d75119433d07866e4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ee0f6e6eb3fad27d89f7592e87df3946210d01c159c5a99c7b8e87de30a1ebbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0f6e6eb3fad27d89f7592e87df3946210d01c159c5a99c7b8e87de30a1ebbc->enter($__internal_ee0f6e6eb3fad27d89f7592e87df3946210d01c159c5a99c7b8e87de30a1ebbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3ab3cfb0c78df6ad0367df41dea8ad79daa88fdc7f388fffa7e4d8a7dbb7368a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab3cfb0c78df6ad0367df41dea8ad79daa88fdc7f388fffa7e4d8a7dbb7368a->enter($__internal_3ab3cfb0c78df6ad0367df41dea8ad79daa88fdc7f388fffa7e4d8a7dbb7368a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["funciones"] ?? $this->getContext($context, "funciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["funcion"]) {
            // line 6
            echo "    <button id=\"funcionId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["funcion"], "id", array()), "html", null, true);
            echo "\" style=\"display:none;\"></button>
    <h3 class=\"light grey-text text-lighten-3\">Ya casi.. Cuantas entradas vas a querer?:</h3>
    <div  class=\"row\">
            <div class=\"col m3\">
                <h5 class=\"light grey-text text-lighten-3\"> Desliza la barra...</h5>
                <form action=\"#\">
                    <p class=\"range-field\">
                        <input id=\"cantidad\" type=\"range\" name=\"cantidad\" min=\"1\" max=\"10\" step=\"1\" value=\"1\">
                    </p>
                </form>
                <h5 class=\"light grey-text text-lighten-3\">Cantidad de entradas:</h5>
                <div class=\"light lime-text\" id=\"cantida\">1</div>


                <h5 class=\"light grey-text text-lighten-3\">Precio total \$\$\$:</h5>
                <div class=\"light lime-text\" id=\"total\" >";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["funcion"], "precio", array()), "html", null, true);
            echo "</div>
            </div>
            <div class=\"col m9\">
                <div class=\"card horizontal\">
                    <div class=\"card-image\">
                        <img  width=\"220\"  height=\"360\"  src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idPeli", array()), "imagen", array()))), "html", null, true);
            echo "\" alt=\"\" class=\"circle\">
                    </div>
                        <div class=\"card-stacked\">
                            <div class=\"card-content\">
                                <h4><b> Peli:</b> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idPeli", array()), "nombre", array()), "html", null, true);
            echo "</h4>
                                <h5><b>Formato:</b> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idFormato", array()), "nombre", array()), "html", null, true);
            echo "</h5>
                                <h5><b>Idioma:</b> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idIoma", array()), "nombre", array()), "html", null, true);
            echo "</h5>
                                <h5><b>Fecha:</b> ";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["funcion"], "fecha", array()), "d-m-y"), "html", null, true);
            echo "</h5>
                                <h5><b>Hora:</b>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["funcion"], "hora", array()), "html", null, true);
            echo "</h5>
                            </div>
                            <a class=\"activator btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">add</i></a>
                        </div>
                    <div class=\"card-reveal\">
                        <span class=\"card-title grey-text text-darken-4\"><i class=\"material-icons right\">close</i></span>
                        <br>
                        <h5><b> Sinopsis:</b> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idPeli", array()), "sinopsis", array()), "html", null, true);
            echo "</h5>
                        <h5><b> Estreno:</b> ";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idPeli", array()), "fechaEstreno", array()), "d-m-y"), "html", null, true);
            echo "</h5>
                        <h5><b> Duracion:</b> ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idPeli", array()), "duracion", array()), "h-m"), "html", null, true);
            echo "</h5>
                        <h5><b> Genero:</b> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["funcion"], "idPeliCopia", array()), "idPeli", array()), "idGenero", array()), "nombre", array()), "html", null, true);
            echo "</h5>
                    </div>
                    </div>
            </div>
    </div>

    <button id=\"calcular\" value=\" ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["funcion"], "precio", array()), "html", null, true);
            echo "\"  onclick=\"redirigir()\" class=\"waves-effect waves-light btn\"><i class=\"material-icons right\">fast_forward</i> Siguiente Paso</button>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['funcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
    <script>
        \$('#cantidad').on('change',function() {
            var precio = \$('#calcular').val();
            var cantidad = \$('#cantidad').val();
            var total= precio*cantidad;
            \$(\"#cantida\").text(cantidad);
            \$(\"#total\").text(total);
        });
        function redirigir() {
            var precio = \$('#calcular').val();
            var cantidad = \$('#cantidad').val();
            var funcionId= \$('#funcionId').val();
            window.location=\"/entrada/pago/\"+precio+\"/\"+cantidad+\"/\"+funcionId;   //VA A LA PESTAÑA DE MERCADOPAGO CON LOS DATOS EN EL LINK PARA ABRIR LA VENTANA DE MERCADOPAGO
           // window.open(\"/reserva/\"+cantidad+\"/\"+funcionId);      //GUARDA LOS DATOS DE L TRANSACCION
        }
    </script>

";
        
        $__internal_3ab3cfb0c78df6ad0367df41dea8ad79daa88fdc7f388fffa7e4d8a7dbb7368a->leave($__internal_3ab3cfb0c78df6ad0367df41dea8ad79daa88fdc7f388fffa7e4d8a7dbb7368a_prof);

        
        $__internal_ee0f6e6eb3fad27d89f7592e87df3946210d01c159c5a99c7b8e87de30a1ebbc->leave($__internal_ee0f6e6eb3fad27d89f7592e87df3946210d01c159c5a99c7b8e87de30a1ebbc_prof);

    }

    public function getTemplateName()
    {
        return "CineBundle:Reserva:confirma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 53,  137 => 50,  128 => 44,  124 => 43,  120 => 42,  116 => 41,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  83 => 26,  75 => 21,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

    {% for funcion in funciones %}
    <button id=\"funcionId\" value=\"{{ funcion.id }}\" style=\"display:none;\"></button>
    <h3 class=\"light grey-text text-lighten-3\">Ya casi.. Cuantas entradas vas a querer?:</h3>
    <div  class=\"row\">
            <div class=\"col m3\">
                <h5 class=\"light grey-text text-lighten-3\"> Desliza la barra...</h5>
                <form action=\"#\">
                    <p class=\"range-field\">
                        <input id=\"cantidad\" type=\"range\" name=\"cantidad\" min=\"1\" max=\"10\" step=\"1\" value=\"1\">
                    </p>
                </form>
                <h5 class=\"light grey-text text-lighten-3\">Cantidad de entradas:</h5>
                <div class=\"light lime-text\" id=\"cantida\">1</div>


                <h5 class=\"light grey-text text-lighten-3\">Precio total \$\$\$:</h5>
                <div class=\"light lime-text\" id=\"total\" >{{ funcion.precio }}</div>
            </div>
            <div class=\"col m9\">
                <div class=\"card horizontal\">
                    <div class=\"card-image\">
                        <img  width=\"220\"  height=\"360\"  src=\"{{asset(\"uploads/\"~funcion.idPeliCopia.idPeli.imagen)}}\" alt=\"\" class=\"circle\">
                    </div>
                        <div class=\"card-stacked\">
                            <div class=\"card-content\">
                                <h4><b> Peli:</b> {{ funcion.idPeliCopia.idPeli.nombre }}</h4>
                                <h5><b>Formato:</b> {{ funcion.idPeliCopia.idFormato.nombre }}</h5>
                                <h5><b>Idioma:</b> {{ funcion.idPeliCopia.idIoma.nombre }}</h5>
                                <h5><b>Fecha:</b> {{ funcion.fecha |date('d-m-y')  }}</h5>
                                <h5><b>Hora:</b>{{ funcion.hora  }}</h5>
                            </div>
                            <a class=\"activator btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">add</i></a>
                        </div>
                    <div class=\"card-reveal\">
                        <span class=\"card-title grey-text text-darken-4\"><i class=\"material-icons right\">close</i></span>
                        <br>
                        <h5><b> Sinopsis:</b> {{ funcion.idPeliCopia.idPeli.sinopsis }}</h5>
                        <h5><b> Estreno:</b> {{ funcion.idPeliCopia.idPeli.fechaEstreno | date(\"d-m-y\")}}</h5>
                        <h5><b> Duracion:</b> {{ funcion.idPeliCopia.idPeli.duracion |date(\"h-m\") }}</h5>
                        <h5><b> Genero:</b> {{ funcion.idPeliCopia.idPeli.idGenero.nombre }}</h5>
                    </div>
                    </div>
            </div>
    </div>

    <button id=\"calcular\" value=\" {{ funcion.precio }}\"  onclick=\"redirigir()\" class=\"waves-effect waves-light btn\"><i class=\"material-icons right\">fast_forward</i> Siguiente Paso</button>

    {% endfor %}

    <script>
        \$('#cantidad').on('change',function() {
            var precio = \$('#calcular').val();
            var cantidad = \$('#cantidad').val();
            var total= precio*cantidad;
            \$(\"#cantida\").text(cantidad);
            \$(\"#total\").text(total);
        });
        function redirigir() {
            var precio = \$('#calcular').val();
            var cantidad = \$('#cantidad').val();
            var funcionId= \$('#funcionId').val();
            window.location=\"/entrada/pago/\"+precio+\"/\"+cantidad+\"/\"+funcionId;   //VA A LA PESTAÑA DE MERCADOPAGO CON LOS DATOS EN EL LINK PARA ABRIR LA VENTANA DE MERCADOPAGO
           // window.open(\"/reserva/\"+cantidad+\"/\"+funcionId);      //GUARDA LOS DATOS DE L TRANSACCION
        }
    </script>

{% endblock %}

", "CineBundle:Reserva:confirma.html.twig", "/home/neuen/php2016/cine2/src/CineBundle/Resources/views/Reserva/confirma.html.twig");
    }
}
