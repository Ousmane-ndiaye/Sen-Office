<?php

/* OfficeBundle:Default:index.html.twig */
class __TwigTemplate_22ce4d7b3e9c112dd9c886ff5e09c926db7ce402cd6d4e25668c278a01083aec extends Twig_Template
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
        $__internal_01c86d5652239cdf8bd39b9c6a7bde5889b7d31d2267667ba64bd0e598d70b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c86d5652239cdf8bd39b9c6a7bde5889b7d31d2267667ba64bd0e598d70b48->enter($__internal_01c86d5652239cdf8bd39b9c6a7bde5889b7d31d2267667ba64bd0e598d70b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfficeBundle:Default:index.html.twig"));

        $__internal_a5e9c2be2281a8899f757ba49ef3cc8990b572c27377f33b4443bd52b80fa4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e9c2be2281a8899f757ba49ef3cc8990b572c27377f33b4443bd52b80fa4a1->enter($__internal_a5e9c2be2281a8899f757ba49ef3cc8990b572c27377f33b4443bd52b80fa4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_01c86d5652239cdf8bd39b9c6a7bde5889b7d31d2267667ba64bd0e598d70b48->leave($__internal_01c86d5652239cdf8bd39b9c6a7bde5889b7d31d2267667ba64bd0e598d70b48_prof);

        
        $__internal_a5e9c2be2281a8899f757ba49ef3cc8990b572c27377f33b4443bd52b80fa4a1->leave($__internal_a5e9c2be2281a8899f757ba49ef3cc8990b572c27377f33b4443bd52b80fa4a1_prof);

    }

    public function getTemplateName()
    {
        return "OfficeBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "OfficeBundle:Default:index.html.twig", "/var/www/html/myoffice/src/OfficeBundle/Resources/views/Default/index.html.twig");
    }
}
