<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d4252c5b06f44ced77f5201e5e5e5b8dc1fb475778064c08d3f3faedbb50d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d4252c5b06f44ced77f5201e5e5e5b8dc1fb475778064c08d3f3faedbb50d7e->enter($__internal_7d4252c5b06f44ced77f5201e5e5e5b8dc1fb475778064c08d3f3faedbb50d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_de419ba2c06e9e440837890cd810c0917815de4985f95a57883eba893a5b8316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de419ba2c06e9e440837890cd810c0917815de4985f95a57883eba893a5b8316->enter($__internal_de419ba2c06e9e440837890cd810c0917815de4985f95a57883eba893a5b8316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d4252c5b06f44ced77f5201e5e5e5b8dc1fb475778064c08d3f3faedbb50d7e->leave($__internal_7d4252c5b06f44ced77f5201e5e5e5b8dc1fb475778064c08d3f3faedbb50d7e_prof);

        
        $__internal_de419ba2c06e9e440837890cd810c0917815de4985f95a57883eba893a5b8316->leave($__internal_de419ba2c06e9e440837890cd810c0917815de4985f95a57883eba893a5b8316_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9ca20d2f9c7ed069f6a2b7a7778855990956599a5703c2765159357c3941b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ca20d2f9c7ed069f6a2b7a7778855990956599a5703c2765159357c3941b6a->enter($__internal_c9ca20d2f9c7ed069f6a2b7a7778855990956599a5703c2765159357c3941b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6d7c7cab621414186f17439fccb69a28ff8f302cb6d0f2b316998fd0c5c77522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7c7cab621414186f17439fccb69a28ff8f302cb6d0f2b316998fd0c5c77522->enter($__internal_6d7c7cab621414186f17439fccb69a28ff8f302cb6d0f2b316998fd0c5c77522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6d7c7cab621414186f17439fccb69a28ff8f302cb6d0f2b316998fd0c5c77522->leave($__internal_6d7c7cab621414186f17439fccb69a28ff8f302cb6d0f2b316998fd0c5c77522_prof);

        
        $__internal_c9ca20d2f9c7ed069f6a2b7a7778855990956599a5703c2765159357c3941b6a->leave($__internal_c9ca20d2f9c7ed069f6a2b7a7778855990956599a5703c2765159357c3941b6a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f4cfca061a477de30093c024f379cc8a61f6d7f9a0b7d94c1dfc063c357590f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4cfca061a477de30093c024f379cc8a61f6d7f9a0b7d94c1dfc063c357590f4->enter($__internal_f4cfca061a477de30093c024f379cc8a61f6d7f9a0b7d94c1dfc063c357590f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cc28e8044b78b5a2b4c324d4a57e46e1b5593338f5fa17715021ebe8675514a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc28e8044b78b5a2b4c324d4a57e46e1b5593338f5fa17715021ebe8675514a9->enter($__internal_cc28e8044b78b5a2b4c324d4a57e46e1b5593338f5fa17715021ebe8675514a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc28e8044b78b5a2b4c324d4a57e46e1b5593338f5fa17715021ebe8675514a9->leave($__internal_cc28e8044b78b5a2b4c324d4a57e46e1b5593338f5fa17715021ebe8675514a9_prof);

        
        $__internal_f4cfca061a477de30093c024f379cc8a61f6d7f9a0b7d94c1dfc063c357590f4->leave($__internal_f4cfca061a477de30093c024f379cc8a61f6d7f9a0b7d94c1dfc063c357590f4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6f2a49813fd03e844a1372efbfc9ad81bf4b6a965d6898e670a09958455c865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f2a49813fd03e844a1372efbfc9ad81bf4b6a965d6898e670a09958455c865->enter($__internal_b6f2a49813fd03e844a1372efbfc9ad81bf4b6a965d6898e670a09958455c865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c062e5d7ac0bfb934963993590a5292c2615b5e72f5b754173b508f72ca1dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c062e5d7ac0bfb934963993590a5292c2615b5e72f5b754173b508f72ca1dc1->enter($__internal_8c062e5d7ac0bfb934963993590a5292c2615b5e72f5b754173b508f72ca1dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c062e5d7ac0bfb934963993590a5292c2615b5e72f5b754173b508f72ca1dc1->leave($__internal_8c062e5d7ac0bfb934963993590a5292c2615b5e72f5b754173b508f72ca1dc1_prof);

        
        $__internal_b6f2a49813fd03e844a1372efbfc9ad81bf4b6a965d6898e670a09958455c865->leave($__internal_b6f2a49813fd03e844a1372efbfc9ad81bf4b6a965d6898e670a09958455c865_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
