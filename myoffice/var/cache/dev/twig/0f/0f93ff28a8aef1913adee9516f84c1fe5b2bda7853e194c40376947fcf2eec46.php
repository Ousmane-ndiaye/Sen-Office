<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c88fa095271f0b72c40f5caa69b7b8f0d25ed25e6f42e1cf82ff1111deec3979 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d740fdc055ef6ab7c00baf33880c25285d975d0879aa9c8117304306e0ecbca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d740fdc055ef6ab7c00baf33880c25285d975d0879aa9c8117304306e0ecbca->enter($__internal_3d740fdc055ef6ab7c00baf33880c25285d975d0879aa9c8117304306e0ecbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6abf8cc3403f5f662a3028830dd09e9ccbdbbe9ac2838700b54f61a776f7fd1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abf8cc3403f5f662a3028830dd09e9ccbdbbe9ac2838700b54f61a776f7fd1b->enter($__internal_6abf8cc3403f5f662a3028830dd09e9ccbdbbe9ac2838700b54f61a776f7fd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3d740fdc055ef6ab7c00baf33880c25285d975d0879aa9c8117304306e0ecbca->leave($__internal_3d740fdc055ef6ab7c00baf33880c25285d975d0879aa9c8117304306e0ecbca_prof);

        
        $__internal_6abf8cc3403f5f662a3028830dd09e9ccbdbbe9ac2838700b54f61a776f7fd1b->leave($__internal_6abf8cc3403f5f662a3028830dd09e9ccbdbbe9ac2838700b54f61a776f7fd1b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
