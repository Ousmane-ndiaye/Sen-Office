<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_93c2b48841f9e88d0ea5fdda4c1550ec17302284bfae62a3abe551008c9444f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c2b48841f9e88d0ea5fdda4c1550ec17302284bfae62a3abe551008c9444f2->enter($__internal_93c2b48841f9e88d0ea5fdda4c1550ec17302284bfae62a3abe551008c9444f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_84cde227298d573b9d8362187dc4be292478296db45cb4bf39cfcc50b3072e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84cde227298d573b9d8362187dc4be292478296db45cb4bf39cfcc50b3072e67->enter($__internal_84cde227298d573b9d8362187dc4be292478296db45cb4bf39cfcc50b3072e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93c2b48841f9e88d0ea5fdda4c1550ec17302284bfae62a3abe551008c9444f2->leave($__internal_93c2b48841f9e88d0ea5fdda4c1550ec17302284bfae62a3abe551008c9444f2_prof);

        
        $__internal_84cde227298d573b9d8362187dc4be292478296db45cb4bf39cfcc50b3072e67->leave($__internal_84cde227298d573b9d8362187dc4be292478296db45cb4bf39cfcc50b3072e67_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f9cdfb7dc792250f3287c497a3719528cbced335364d5717dcf7a36c5491150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f9cdfb7dc792250f3287c497a3719528cbced335364d5717dcf7a36c5491150->enter($__internal_3f9cdfb7dc792250f3287c497a3719528cbced335364d5717dcf7a36c5491150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ab86aeec2196df33dd2f655203936dbe1d71720c3281ec96ece60d3b1ddc5ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab86aeec2196df33dd2f655203936dbe1d71720c3281ec96ece60d3b1ddc5ab2->enter($__internal_ab86aeec2196df33dd2f655203936dbe1d71720c3281ec96ece60d3b1ddc5ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ab86aeec2196df33dd2f655203936dbe1d71720c3281ec96ece60d3b1ddc5ab2->leave($__internal_ab86aeec2196df33dd2f655203936dbe1d71720c3281ec96ece60d3b1ddc5ab2_prof);

        
        $__internal_3f9cdfb7dc792250f3287c497a3719528cbced335364d5717dcf7a36c5491150->leave($__internal_3f9cdfb7dc792250f3287c497a3719528cbced335364d5717dcf7a36c5491150_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20b0e5ea638ed5d971fe4062f3adb880f286a3b54ca441e91cec7b771d04f2ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20b0e5ea638ed5d971fe4062f3adb880f286a3b54ca441e91cec7b771d04f2ac->enter($__internal_20b0e5ea638ed5d971fe4062f3adb880f286a3b54ca441e91cec7b771d04f2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8ca0ff83e972b2d6e85cd98a4cd79c879ed956eda9e1d11c4f923e436200a8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca0ff83e972b2d6e85cd98a4cd79c879ed956eda9e1d11c4f923e436200a8c6->enter($__internal_8ca0ff83e972b2d6e85cd98a4cd79c879ed956eda9e1d11c4f923e436200a8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8ca0ff83e972b2d6e85cd98a4cd79c879ed956eda9e1d11c4f923e436200a8c6->leave($__internal_8ca0ff83e972b2d6e85cd98a4cd79c879ed956eda9e1d11c4f923e436200a8c6_prof);

        
        $__internal_20b0e5ea638ed5d971fe4062f3adb880f286a3b54ca441e91cec7b771d04f2ac->leave($__internal_20b0e5ea638ed5d971fe4062f3adb880f286a3b54ca441e91cec7b771d04f2ac_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e38b5729c754d96e5bf644f19be01795d6b99de79dccfd6a89e2421af06e0d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38b5729c754d96e5bf644f19be01795d6b99de79dccfd6a89e2421af06e0d6b->enter($__internal_e38b5729c754d96e5bf644f19be01795d6b99de79dccfd6a89e2421af06e0d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_289f494ab0698125f6f6ca567960e68718719aae1fdbd9b733933c29005b829e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289f494ab0698125f6f6ca567960e68718719aae1fdbd9b733933c29005b829e->enter($__internal_289f494ab0698125f6f6ca567960e68718719aae1fdbd9b733933c29005b829e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_289f494ab0698125f6f6ca567960e68718719aae1fdbd9b733933c29005b829e->leave($__internal_289f494ab0698125f6f6ca567960e68718719aae1fdbd9b733933c29005b829e_prof);

        
        $__internal_e38b5729c754d96e5bf644f19be01795d6b99de79dccfd6a89e2421af06e0d6b->leave($__internal_e38b5729c754d96e5bf644f19be01795d6b99de79dccfd6a89e2421af06e0d6b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
