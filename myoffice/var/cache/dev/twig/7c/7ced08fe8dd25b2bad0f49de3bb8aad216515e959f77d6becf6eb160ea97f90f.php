<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_80510a88aaf2dd5f69b1390322441018455b468488e97e95a301dda3024907a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee76dc9c850ace95a7992e60ea45b77a8815e500fbf283be35ec0029807c08c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee76dc9c850ace95a7992e60ea45b77a8815e500fbf283be35ec0029807c08c7->enter($__internal_ee76dc9c850ace95a7992e60ea45b77a8815e500fbf283be35ec0029807c08c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0e2b2f306b8d114b8e0e685a110b3165291a6b8fb1fdb967b69b3e0c2b99f9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2b2f306b8d114b8e0e685a110b3165291a6b8fb1fdb967b69b3e0c2b99f9f3->enter($__internal_0e2b2f306b8d114b8e0e685a110b3165291a6b8fb1fdb967b69b3e0c2b99f9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee76dc9c850ace95a7992e60ea45b77a8815e500fbf283be35ec0029807c08c7->leave($__internal_ee76dc9c850ace95a7992e60ea45b77a8815e500fbf283be35ec0029807c08c7_prof);

        
        $__internal_0e2b2f306b8d114b8e0e685a110b3165291a6b8fb1fdb967b69b3e0c2b99f9f3->leave($__internal_0e2b2f306b8d114b8e0e685a110b3165291a6b8fb1fdb967b69b3e0c2b99f9f3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f635d2f805be5ce91b966855e5b640d48b32529b7801d99680874f84221f015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f635d2f805be5ce91b966855e5b640d48b32529b7801d99680874f84221f015->enter($__internal_2f635d2f805be5ce91b966855e5b640d48b32529b7801d99680874f84221f015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8171a19ea93d6faf47ff211d904672c6ba63bb221f69c4035f874a0648f3553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8171a19ea93d6faf47ff211d904672c6ba63bb221f69c4035f874a0648f3553->enter($__internal_c8171a19ea93d6faf47ff211d904672c6ba63bb221f69c4035f874a0648f3553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c8171a19ea93d6faf47ff211d904672c6ba63bb221f69c4035f874a0648f3553->leave($__internal_c8171a19ea93d6faf47ff211d904672c6ba63bb221f69c4035f874a0648f3553_prof);

        
        $__internal_2f635d2f805be5ce91b966855e5b640d48b32529b7801d99680874f84221f015->leave($__internal_2f635d2f805be5ce91b966855e5b640d48b32529b7801d99680874f84221f015_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a282e274f2bd2f5885a628bd0071dfce25282a34ca1609a4a31c2039a6370ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a282e274f2bd2f5885a628bd0071dfce25282a34ca1609a4a31c2039a6370ae->enter($__internal_8a282e274f2bd2f5885a628bd0071dfce25282a34ca1609a4a31c2039a6370ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3be4c4a94f47cdd8bcb8279d16ea730a82312bebcc7df9ce1351b4dd9d270857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be4c4a94f47cdd8bcb8279d16ea730a82312bebcc7df9ce1351b4dd9d270857->enter($__internal_3be4c4a94f47cdd8bcb8279d16ea730a82312bebcc7df9ce1351b4dd9d270857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3be4c4a94f47cdd8bcb8279d16ea730a82312bebcc7df9ce1351b4dd9d270857->leave($__internal_3be4c4a94f47cdd8bcb8279d16ea730a82312bebcc7df9ce1351b4dd9d270857_prof);

        
        $__internal_8a282e274f2bd2f5885a628bd0071dfce25282a34ca1609a4a31c2039a6370ae->leave($__internal_8a282e274f2bd2f5885a628bd0071dfce25282a34ca1609a4a31c2039a6370ae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
