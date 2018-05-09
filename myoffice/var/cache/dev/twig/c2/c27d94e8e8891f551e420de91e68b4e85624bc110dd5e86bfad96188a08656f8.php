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
        $__internal_d08607cc98c711bf81a81c09f767f60ba4162d1e202b39de79eb83884fde6410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08607cc98c711bf81a81c09f767f60ba4162d1e202b39de79eb83884fde6410->enter($__internal_d08607cc98c711bf81a81c09f767f60ba4162d1e202b39de79eb83884fde6410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0bd26d1109af04b245cd02f9967350f55a1cb76e5d82d410ffa4d276eccbf5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd26d1109af04b245cd02f9967350f55a1cb76e5d82d410ffa4d276eccbf5ca->enter($__internal_0bd26d1109af04b245cd02f9967350f55a1cb76e5d82d410ffa4d276eccbf5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_d08607cc98c711bf81a81c09f767f60ba4162d1e202b39de79eb83884fde6410->leave($__internal_d08607cc98c711bf81a81c09f767f60ba4162d1e202b39de79eb83884fde6410_prof);

        
        $__internal_0bd26d1109af04b245cd02f9967350f55a1cb76e5d82d410ffa4d276eccbf5ca->leave($__internal_0bd26d1109af04b245cd02f9967350f55a1cb76e5d82d410ffa4d276eccbf5ca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b142e2da7c8c1d3bf644206c59021212a9b8b63cf1a6b8b23567dcc2d287629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b142e2da7c8c1d3bf644206c59021212a9b8b63cf1a6b8b23567dcc2d287629->enter($__internal_3b142e2da7c8c1d3bf644206c59021212a9b8b63cf1a6b8b23567dcc2d287629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68285fa2474025cfaffa6c87c8c2f96e7de931093f70f452ba79b6ff3d7514f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68285fa2474025cfaffa6c87c8c2f96e7de931093f70f452ba79b6ff3d7514f8->enter($__internal_68285fa2474025cfaffa6c87c8c2f96e7de931093f70f452ba79b6ff3d7514f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_68285fa2474025cfaffa6c87c8c2f96e7de931093f70f452ba79b6ff3d7514f8->leave($__internal_68285fa2474025cfaffa6c87c8c2f96e7de931093f70f452ba79b6ff3d7514f8_prof);

        
        $__internal_3b142e2da7c8c1d3bf644206c59021212a9b8b63cf1a6b8b23567dcc2d287629->leave($__internal_3b142e2da7c8c1d3bf644206c59021212a9b8b63cf1a6b8b23567dcc2d287629_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_35115dec109032777248bd6854a0f311986524f725eedd524ce1c18107d9b419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35115dec109032777248bd6854a0f311986524f725eedd524ce1c18107d9b419->enter($__internal_35115dec109032777248bd6854a0f311986524f725eedd524ce1c18107d9b419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e3539d3f8ef4f4a30fa06ddf7581b22a1ded9ef7a74e98424cf34d86aee4279d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3539d3f8ef4f4a30fa06ddf7581b22a1ded9ef7a74e98424cf34d86aee4279d->enter($__internal_e3539d3f8ef4f4a30fa06ddf7581b22a1ded9ef7a74e98424cf34d86aee4279d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e3539d3f8ef4f4a30fa06ddf7581b22a1ded9ef7a74e98424cf34d86aee4279d->leave($__internal_e3539d3f8ef4f4a30fa06ddf7581b22a1ded9ef7a74e98424cf34d86aee4279d_prof);

        
        $__internal_35115dec109032777248bd6854a0f311986524f725eedd524ce1c18107d9b419->leave($__internal_35115dec109032777248bd6854a0f311986524f725eedd524ce1c18107d9b419_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e65339761db33402ce7438f3dd11336f3e586df4bb1b3629ded7a1424ee320e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e65339761db33402ce7438f3dd11336f3e586df4bb1b3629ded7a1424ee320e->enter($__internal_1e65339761db33402ce7438f3dd11336f3e586df4bb1b3629ded7a1424ee320e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2edbcd10ec409aebce74a8bce108cf11b452f968381a5300cac5d1b67ba988ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edbcd10ec409aebce74a8bce108cf11b452f968381a5300cac5d1b67ba988ae->enter($__internal_2edbcd10ec409aebce74a8bce108cf11b452f968381a5300cac5d1b67ba988ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2edbcd10ec409aebce74a8bce108cf11b452f968381a5300cac5d1b67ba988ae->leave($__internal_2edbcd10ec409aebce74a8bce108cf11b452f968381a5300cac5d1b67ba988ae_prof);

        
        $__internal_1e65339761db33402ce7438f3dd11336f3e586df4bb1b3629ded7a1424ee320e->leave($__internal_1e65339761db33402ce7438f3dd11336f3e586df4bb1b3629ded7a1424ee320e_prof);

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
", "@Twig/layout.html.twig", "/var/www/html/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
