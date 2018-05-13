<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_627299fa42cfd848fd182d99a5255e474fc3368ddd730c0603fa8257bf337c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_033cad6339e3295c9da5647362a359cb0cc56420b90fae557b964d3e725302e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_033cad6339e3295c9da5647362a359cb0cc56420b90fae557b964d3e725302e9->enter($__internal_033cad6339e3295c9da5647362a359cb0cc56420b90fae557b964d3e725302e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_37a5aaff15238ad69d99ae51e2a973a70cca2cbbb012b65df85985162c8920fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a5aaff15238ad69d99ae51e2a973a70cca2cbbb012b65df85985162c8920fb->enter($__internal_37a5aaff15238ad69d99ae51e2a973a70cca2cbbb012b65df85985162c8920fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_033cad6339e3295c9da5647362a359cb0cc56420b90fae557b964d3e725302e9->leave($__internal_033cad6339e3295c9da5647362a359cb0cc56420b90fae557b964d3e725302e9_prof);

        
        $__internal_37a5aaff15238ad69d99ae51e2a973a70cca2cbbb012b65df85985162c8920fb->leave($__internal_37a5aaff15238ad69d99ae51e2a973a70cca2cbbb012b65df85985162c8920fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d95e8bfc3b7cfdc6720b360a1a2cb5e062ccc075ac77458848915d84cb0df7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95e8bfc3b7cfdc6720b360a1a2cb5e062ccc075ac77458848915d84cb0df7f2->enter($__internal_d95e8bfc3b7cfdc6720b360a1a2cb5e062ccc075ac77458848915d84cb0df7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3e8809e2cbb827617646c3bc5d979ca8c67c4b4ba79668570cbf29123bc0077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e8809e2cbb827617646c3bc5d979ca8c67c4b4ba79668570cbf29123bc0077->enter($__internal_e3e8809e2cbb827617646c3bc5d979ca8c67c4b4ba79668570cbf29123bc0077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e3e8809e2cbb827617646c3bc5d979ca8c67c4b4ba79668570cbf29123bc0077->leave($__internal_e3e8809e2cbb827617646c3bc5d979ca8c67c4b4ba79668570cbf29123bc0077_prof);

        
        $__internal_d95e8bfc3b7cfdc6720b360a1a2cb5e062ccc075ac77458848915d84cb0df7f2->leave($__internal_d95e8bfc3b7cfdc6720b360a1a2cb5e062ccc075ac77458848915d84cb0df7f2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_84ccadf85dda0993be0c784e1870f01bf109f559eb0268505c26b2565eb5341e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ccadf85dda0993be0c784e1870f01bf109f559eb0268505c26b2565eb5341e->enter($__internal_84ccadf85dda0993be0c784e1870f01bf109f559eb0268505c26b2565eb5341e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6ccb8022d6fb34902db6f6401218905f76a4bb5637bd187df8aefe8e7b5490b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccb8022d6fb34902db6f6401218905f76a4bb5637bd187df8aefe8e7b5490b8->enter($__internal_6ccb8022d6fb34902db6f6401218905f76a4bb5637bd187df8aefe8e7b5490b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6ccb8022d6fb34902db6f6401218905f76a4bb5637bd187df8aefe8e7b5490b8->leave($__internal_6ccb8022d6fb34902db6f6401218905f76a4bb5637bd187df8aefe8e7b5490b8_prof);

        
        $__internal_84ccadf85dda0993be0c784e1870f01bf109f559eb0268505c26b2565eb5341e->leave($__internal_84ccadf85dda0993be0c784e1870f01bf109f559eb0268505c26b2565eb5341e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d412949d8e8c037d3a2832aec236bce227e4ff9d00cd190b36801b3ba70447a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d412949d8e8c037d3a2832aec236bce227e4ff9d00cd190b36801b3ba70447a5->enter($__internal_d412949d8e8c037d3a2832aec236bce227e4ff9d00cd190b36801b3ba70447a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_98353db16d8e9d98e1f0869712877c8e0dd040b319e1ba117ec4cb7089e68233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98353db16d8e9d98e1f0869712877c8e0dd040b319e1ba117ec4cb7089e68233->enter($__internal_98353db16d8e9d98e1f0869712877c8e0dd040b319e1ba117ec4cb7089e68233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_98353db16d8e9d98e1f0869712877c8e0dd040b319e1ba117ec4cb7089e68233->leave($__internal_98353db16d8e9d98e1f0869712877c8e0dd040b319e1ba117ec4cb7089e68233_prof);

        
        $__internal_d412949d8e8c037d3a2832aec236bce227e4ff9d00cd190b36801b3ba70447a5->leave($__internal_d412949d8e8c037d3a2832aec236bce227e4ff9d00cd190b36801b3ba70447a5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
