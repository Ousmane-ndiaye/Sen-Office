<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cfe0593cf1e70ae5e610ddb8eb905863979d09a119129026ed04f3409d347406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe0593cf1e70ae5e610ddb8eb905863979d09a119129026ed04f3409d347406->enter($__internal_cfe0593cf1e70ae5e610ddb8eb905863979d09a119129026ed04f3409d347406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_5f367a14728bf4e64f10b89febfdb670230955110a5265d53ef692dafa3b4477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f367a14728bf4e64f10b89febfdb670230955110a5265d53ef692dafa3b4477->enter($__internal_5f367a14728bf4e64f10b89febfdb670230955110a5265d53ef692dafa3b4477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfe0593cf1e70ae5e610ddb8eb905863979d09a119129026ed04f3409d347406->leave($__internal_cfe0593cf1e70ae5e610ddb8eb905863979d09a119129026ed04f3409d347406_prof);

        
        $__internal_5f367a14728bf4e64f10b89febfdb670230955110a5265d53ef692dafa3b4477->leave($__internal_5f367a14728bf4e64f10b89febfdb670230955110a5265d53ef692dafa3b4477_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fdf4694334575389cc9a5550211a395510df0d7b708197e408db3eef8ab3aff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf4694334575389cc9a5550211a395510df0d7b708197e408db3eef8ab3aff9->enter($__internal_fdf4694334575389cc9a5550211a395510df0d7b708197e408db3eef8ab3aff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f7a421510f168a6fcede366b8149bedef378813d45ea27f752e57c7724ffea90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a421510f168a6fcede366b8149bedef378813d45ea27f752e57c7724ffea90->enter($__internal_f7a421510f168a6fcede366b8149bedef378813d45ea27f752e57c7724ffea90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f7a421510f168a6fcede366b8149bedef378813d45ea27f752e57c7724ffea90->leave($__internal_f7a421510f168a6fcede366b8149bedef378813d45ea27f752e57c7724ffea90_prof);

        
        $__internal_fdf4694334575389cc9a5550211a395510df0d7b708197e408db3eef8ab3aff9->leave($__internal_fdf4694334575389cc9a5550211a395510df0d7b708197e408db3eef8ab3aff9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fa6c917db1ed3b5049b37d6fca517f0a7c49e524c68c4a57615e0bb1b6baba6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6c917db1ed3b5049b37d6fca517f0a7c49e524c68c4a57615e0bb1b6baba6b->enter($__internal_fa6c917db1ed3b5049b37d6fca517f0a7c49e524c68c4a57615e0bb1b6baba6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d185572fffe8d8a8ff7d016224e3294ab3d4a4e895e753a0cf9eee4fe1a61057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d185572fffe8d8a8ff7d016224e3294ab3d4a4e895e753a0cf9eee4fe1a61057->enter($__internal_d185572fffe8d8a8ff7d016224e3294ab3d4a4e895e753a0cf9eee4fe1a61057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d185572fffe8d8a8ff7d016224e3294ab3d4a4e895e753a0cf9eee4fe1a61057->leave($__internal_d185572fffe8d8a8ff7d016224e3294ab3d4a4e895e753a0cf9eee4fe1a61057_prof);

        
        $__internal_fa6c917db1ed3b5049b37d6fca517f0a7c49e524c68c4a57615e0bb1b6baba6b->leave($__internal_fa6c917db1ed3b5049b37d6fca517f0a7c49e524c68c4a57615e0bb1b6baba6b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5bcd7c4e3d3b5013645e6f32364f151f934957b1b75d2b9887bad084ad145e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bcd7c4e3d3b5013645e6f32364f151f934957b1b75d2b9887bad084ad145e27->enter($__internal_5bcd7c4e3d3b5013645e6f32364f151f934957b1b75d2b9887bad084ad145e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3707cadd8e32e3cfe41773198ab007a1d6eab03e75dd327075afe2e47b69db0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3707cadd8e32e3cfe41773198ab007a1d6eab03e75dd327075afe2e47b69db0c->enter($__internal_3707cadd8e32e3cfe41773198ab007a1d6eab03e75dd327075afe2e47b69db0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3707cadd8e32e3cfe41773198ab007a1d6eab03e75dd327075afe2e47b69db0c->leave($__internal_3707cadd8e32e3cfe41773198ab007a1d6eab03e75dd327075afe2e47b69db0c_prof);

        
        $__internal_5bcd7c4e3d3b5013645e6f32364f151f934957b1b75d2b9887bad084ad145e27->leave($__internal_5bcd7c4e3d3b5013645e6f32364f151f934957b1b75d2b9887bad084ad145e27_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
