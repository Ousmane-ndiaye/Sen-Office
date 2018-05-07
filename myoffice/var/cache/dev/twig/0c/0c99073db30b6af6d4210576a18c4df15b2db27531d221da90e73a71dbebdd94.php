<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_eeed8a3662f90e2dc8eb1b15df68dcf5b6db1d834cad3dffcc582142741dd4ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeed8a3662f90e2dc8eb1b15df68dcf5b6db1d834cad3dffcc582142741dd4ba->enter($__internal_eeed8a3662f90e2dc8eb1b15df68dcf5b6db1d834cad3dffcc582142741dd4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_80dbfdf0a77c5da80ad62edcddb177e3d0f4151ba00dbc7861ea31e69bd650a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80dbfdf0a77c5da80ad62edcddb177e3d0f4151ba00dbc7861ea31e69bd650a2->enter($__internal_80dbfdf0a77c5da80ad62edcddb177e3d0f4151ba00dbc7861ea31e69bd650a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeed8a3662f90e2dc8eb1b15df68dcf5b6db1d834cad3dffcc582142741dd4ba->leave($__internal_eeed8a3662f90e2dc8eb1b15df68dcf5b6db1d834cad3dffcc582142741dd4ba_prof);

        
        $__internal_80dbfdf0a77c5da80ad62edcddb177e3d0f4151ba00dbc7861ea31e69bd650a2->leave($__internal_80dbfdf0a77c5da80ad62edcddb177e3d0f4151ba00dbc7861ea31e69bd650a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6793d83fd77d21944b3fae1c8a42c69c534d0b18bf66b6f4d392149acd266e97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6793d83fd77d21944b3fae1c8a42c69c534d0b18bf66b6f4d392149acd266e97->enter($__internal_6793d83fd77d21944b3fae1c8a42c69c534d0b18bf66b6f4d392149acd266e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a2b8fb2fcce225f7a7aec8dc07102956aacb10c0b763b1228054c72f7b6d4939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b8fb2fcce225f7a7aec8dc07102956aacb10c0b763b1228054c72f7b6d4939->enter($__internal_a2b8fb2fcce225f7a7aec8dc07102956aacb10c0b763b1228054c72f7b6d4939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a2b8fb2fcce225f7a7aec8dc07102956aacb10c0b763b1228054c72f7b6d4939->leave($__internal_a2b8fb2fcce225f7a7aec8dc07102956aacb10c0b763b1228054c72f7b6d4939_prof);

        
        $__internal_6793d83fd77d21944b3fae1c8a42c69c534d0b18bf66b6f4d392149acd266e97->leave($__internal_6793d83fd77d21944b3fae1c8a42c69c534d0b18bf66b6f4d392149acd266e97_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4c241626ea61e210e60b137d5bbdf09107237bb60d383822d1b03a086027a529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c241626ea61e210e60b137d5bbdf09107237bb60d383822d1b03a086027a529->enter($__internal_4c241626ea61e210e60b137d5bbdf09107237bb60d383822d1b03a086027a529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eb475b923a4deeb84859ec11937993d961cd8c2333ce04eab97ee0020f6d09c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb475b923a4deeb84859ec11937993d961cd8c2333ce04eab97ee0020f6d09c9->enter($__internal_eb475b923a4deeb84859ec11937993d961cd8c2333ce04eab97ee0020f6d09c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eb475b923a4deeb84859ec11937993d961cd8c2333ce04eab97ee0020f6d09c9->leave($__internal_eb475b923a4deeb84859ec11937993d961cd8c2333ce04eab97ee0020f6d09c9_prof);

        
        $__internal_4c241626ea61e210e60b137d5bbdf09107237bb60d383822d1b03a086027a529->leave($__internal_4c241626ea61e210e60b137d5bbdf09107237bb60d383822d1b03a086027a529_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b97bd02d7f8d51d45e5e8b58bdcfde50bfe9fba6dae7cae44a818cb2723428d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b97bd02d7f8d51d45e5e8b58bdcfde50bfe9fba6dae7cae44a818cb2723428d->enter($__internal_3b97bd02d7f8d51d45e5e8b58bdcfde50bfe9fba6dae7cae44a818cb2723428d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d6d4562edd222b270d658947c46fe39665cf0d4f46e7148e0ed0196ea5cf6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6d4562edd222b270d658947c46fe39665cf0d4f46e7148e0ed0196ea5cf6c8->enter($__internal_3d6d4562edd222b270d658947c46fe39665cf0d4f46e7148e0ed0196ea5cf6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3d6d4562edd222b270d658947c46fe39665cf0d4f46e7148e0ed0196ea5cf6c8->leave($__internal_3d6d4562edd222b270d658947c46fe39665cf0d4f46e7148e0ed0196ea5cf6c8_prof);

        
        $__internal_3b97bd02d7f8d51d45e5e8b58bdcfde50bfe9fba6dae7cae44a818cb2723428d->leave($__internal_3b97bd02d7f8d51d45e5e8b58bdcfde50bfe9fba6dae7cae44a818cb2723428d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
