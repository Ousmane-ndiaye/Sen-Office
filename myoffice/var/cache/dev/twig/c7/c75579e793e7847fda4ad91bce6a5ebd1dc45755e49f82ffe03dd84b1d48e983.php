<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_00d473b1bc5ec8a1fce5cf7751332a771fa11b4b98ff1980c3827c2b5e3734a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_060d48d92b5ddcf2d484b4d6dac9fba8c51a238b12118ce792ff4009fcc0e288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_060d48d92b5ddcf2d484b4d6dac9fba8c51a238b12118ce792ff4009fcc0e288->enter($__internal_060d48d92b5ddcf2d484b4d6dac9fba8c51a238b12118ce792ff4009fcc0e288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_2dd6cd23599ecccfb5af35f2f22874ba9885dd9a79f067ded1c8127ffc40fcd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd6cd23599ecccfb5af35f2f22874ba9885dd9a79f067ded1c8127ffc40fcd5->enter($__internal_2dd6cd23599ecccfb5af35f2f22874ba9885dd9a79f067ded1c8127ffc40fcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_060d48d92b5ddcf2d484b4d6dac9fba8c51a238b12118ce792ff4009fcc0e288->leave($__internal_060d48d92b5ddcf2d484b4d6dac9fba8c51a238b12118ce792ff4009fcc0e288_prof);

        
        $__internal_2dd6cd23599ecccfb5af35f2f22874ba9885dd9a79f067ded1c8127ffc40fcd5->leave($__internal_2dd6cd23599ecccfb5af35f2f22874ba9885dd9a79f067ded1c8127ffc40fcd5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bbbad910c8ac70c679441bc965696ce7add37c559ea2fe661fb1a8ab3529fb7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbbad910c8ac70c679441bc965696ce7add37c559ea2fe661fb1a8ab3529fb7b->enter($__internal_bbbad910c8ac70c679441bc965696ce7add37c559ea2fe661fb1a8ab3529fb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d324ceb2e892d074206d1371a34cb13e4af576ad032103a683c4626c5c639fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d324ceb2e892d074206d1371a34cb13e4af576ad032103a683c4626c5c639fa7->enter($__internal_d324ceb2e892d074206d1371a34cb13e4af576ad032103a683c4626c5c639fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d324ceb2e892d074206d1371a34cb13e4af576ad032103a683c4626c5c639fa7->leave($__internal_d324ceb2e892d074206d1371a34cb13e4af576ad032103a683c4626c5c639fa7_prof);

        
        $__internal_bbbad910c8ac70c679441bc965696ce7add37c559ea2fe661fb1a8ab3529fb7b->leave($__internal_bbbad910c8ac70c679441bc965696ce7add37c559ea2fe661fb1a8ab3529fb7b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_72dadd552ffe584030f1ae80203eb9cdfa980f8d7ea01d43e4af7fa9f905b0ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72dadd552ffe584030f1ae80203eb9cdfa980f8d7ea01d43e4af7fa9f905b0ca->enter($__internal_72dadd552ffe584030f1ae80203eb9cdfa980f8d7ea01d43e4af7fa9f905b0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c24e987d420985b81058d8e26c8ce761c9bef708ea1b26e69ad0d9d09d6ec4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24e987d420985b81058d8e26c8ce761c9bef708ea1b26e69ad0d9d09d6ec4e4->enter($__internal_c24e987d420985b81058d8e26c8ce761c9bef708ea1b26e69ad0d9d09d6ec4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_c24e987d420985b81058d8e26c8ce761c9bef708ea1b26e69ad0d9d09d6ec4e4->leave($__internal_c24e987d420985b81058d8e26c8ce761c9bef708ea1b26e69ad0d9d09d6ec4e4_prof);

        
        $__internal_72dadd552ffe584030f1ae80203eb9cdfa980f8d7ea01d43e4af7fa9f905b0ca->leave($__internal_72dadd552ffe584030f1ae80203eb9cdfa980f8d7ea01d43e4af7fa9f905b0ca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
