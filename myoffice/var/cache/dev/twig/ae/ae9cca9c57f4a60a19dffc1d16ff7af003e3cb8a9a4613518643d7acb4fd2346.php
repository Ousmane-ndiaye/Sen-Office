<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cb1a7cc564830439bd3f0d72399e2624cdf3cd1facaba6c48ae6f93c34d0943b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_57f70b924a174eed950641ce4580b8259560ad322ab6451b6c73aa5dd9238110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f70b924a174eed950641ce4580b8259560ad322ab6451b6c73aa5dd9238110->enter($__internal_57f70b924a174eed950641ce4580b8259560ad322ab6451b6c73aa5dd9238110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_b6417801f46221b25e31e142916a7e86f50ae3aab83c20fe5a4b098ad80294ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6417801f46221b25e31e142916a7e86f50ae3aab83c20fe5a4b098ad80294ec->enter($__internal_b6417801f46221b25e31e142916a7e86f50ae3aab83c20fe5a4b098ad80294ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57f70b924a174eed950641ce4580b8259560ad322ab6451b6c73aa5dd9238110->leave($__internal_57f70b924a174eed950641ce4580b8259560ad322ab6451b6c73aa5dd9238110_prof);

        
        $__internal_b6417801f46221b25e31e142916a7e86f50ae3aab83c20fe5a4b098ad80294ec->leave($__internal_b6417801f46221b25e31e142916a7e86f50ae3aab83c20fe5a4b098ad80294ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b72ed04fb175e4b6e2c99df50adf766290b1eead95ca3c6c06aa4cf908c3cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b72ed04fb175e4b6e2c99df50adf766290b1eead95ca3c6c06aa4cf908c3cf8->enter($__internal_5b72ed04fb175e4b6e2c99df50adf766290b1eead95ca3c6c06aa4cf908c3cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_50f0804770b679d87276d1bc14c04a96a5f69ab805d37379a01442159f971eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f0804770b679d87276d1bc14c04a96a5f69ab805d37379a01442159f971eee->enter($__internal_50f0804770b679d87276d1bc14c04a96a5f69ab805d37379a01442159f971eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_50f0804770b679d87276d1bc14c04a96a5f69ab805d37379a01442159f971eee->leave($__internal_50f0804770b679d87276d1bc14c04a96a5f69ab805d37379a01442159f971eee_prof);

        
        $__internal_5b72ed04fb175e4b6e2c99df50adf766290b1eead95ca3c6c06aa4cf908c3cf8->leave($__internal_5b72ed04fb175e4b6e2c99df50adf766290b1eead95ca3c6c06aa4cf908c3cf8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_56ed7c1fd778638d638455cd604107ab8b97d1802f42564d15d9fc601bfee943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ed7c1fd778638d638455cd604107ab8b97d1802f42564d15d9fc601bfee943->enter($__internal_56ed7c1fd778638d638455cd604107ab8b97d1802f42564d15d9fc601bfee943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1839581f60c801d98d5c656267f811b2c18dccb11071f66c5487bda0b52343ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1839581f60c801d98d5c656267f811b2c18dccb11071f66c5487bda0b52343ec->enter($__internal_1839581f60c801d98d5c656267f811b2c18dccb11071f66c5487bda0b52343ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1839581f60c801d98d5c656267f811b2c18dccb11071f66c5487bda0b52343ec->leave($__internal_1839581f60c801d98d5c656267f811b2c18dccb11071f66c5487bda0b52343ec_prof);

        
        $__internal_56ed7c1fd778638d638455cd604107ab8b97d1802f42564d15d9fc601bfee943->leave($__internal_56ed7c1fd778638d638455cd604107ab8b97d1802f42564d15d9fc601bfee943_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_21f6287fecad0b546f598886ab2e56beab128e4eff3b0041075d906821c00c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f6287fecad0b546f598886ab2e56beab128e4eff3b0041075d906821c00c54->enter($__internal_21f6287fecad0b546f598886ab2e56beab128e4eff3b0041075d906821c00c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33205e1f9d39a4c3102de9e17144492a7106a2c3897d1fcf22e6fa12513c6f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33205e1f9d39a4c3102de9e17144492a7106a2c3897d1fcf22e6fa12513c6f17->enter($__internal_33205e1f9d39a4c3102de9e17144492a7106a2c3897d1fcf22e6fa12513c6f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_33205e1f9d39a4c3102de9e17144492a7106a2c3897d1fcf22e6fa12513c6f17->leave($__internal_33205e1f9d39a4c3102de9e17144492a7106a2c3897d1fcf22e6fa12513c6f17_prof);

        
        $__internal_21f6287fecad0b546f598886ab2e56beab128e4eff3b0041075d906821c00c54->leave($__internal_21f6287fecad0b546f598886ab2e56beab128e4eff3b0041075d906821c00c54_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
