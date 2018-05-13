<?php

/* SenofficeBundle:Front:index.html.twig */
class __TwigTemplate_9b982f0ac6108cb530399837c6dc339f7d569af0f3c45ac1df2451dfda6dfbd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SenofficeBundle:Front:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e103a7a2318f182ce0d075b046208b29fc53e5ba31459ed4ccae1bf900204ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e103a7a2318f182ce0d075b046208b29fc53e5ba31459ed4ccae1bf900204ed->enter($__internal_5e103a7a2318f182ce0d075b046208b29fc53e5ba31459ed4ccae1bf900204ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SenofficeBundle:Front:index.html.twig"));

        $__internal_7986a04aac4b3b88f316342f6c6f530f77e3c462e10a01c3c323b32afa161000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7986a04aac4b3b88f316342f6c6f530f77e3c462e10a01c3c323b32afa161000->enter($__internal_7986a04aac4b3b88f316342f6c6f530f77e3c462e10a01c3c323b32afa161000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SenofficeBundle:Front:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e103a7a2318f182ce0d075b046208b29fc53e5ba31459ed4ccae1bf900204ed->leave($__internal_5e103a7a2318f182ce0d075b046208b29fc53e5ba31459ed4ccae1bf900204ed_prof);

        
        $__internal_7986a04aac4b3b88f316342f6c6f530f77e3c462e10a01c3c323b32afa161000->leave($__internal_7986a04aac4b3b88f316342f6c6f530f77e3c462e10a01c3c323b32afa161000_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b64eadeec9fc0e4d8afc1f0e1dcd4645a9f34951ee9ea86c343e8d5e18c3af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b64eadeec9fc0e4d8afc1f0e1dcd4645a9f34951ee9ea86c343e8d5e18c3af0->enter($__internal_9b64eadeec9fc0e4d8afc1f0e1dcd4645a9f34951ee9ea86c343e8d5e18c3af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dcabe3913a9668a2f4d49e116b0fb76784f129c9302712dd1d25a40ed8027c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcabe3913a9668a2f4d49e116b0fb76784f129c9302712dd1d25a40ed8027c78->enter($__internal_dcabe3913a9668a2f4d49e116b0fb76784f129c9302712dd1d25a40ed8027c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sen Office";
        
        $__internal_dcabe3913a9668a2f4d49e116b0fb76784f129c9302712dd1d25a40ed8027c78->leave($__internal_dcabe3913a9668a2f4d49e116b0fb76784f129c9302712dd1d25a40ed8027c78_prof);

        
        $__internal_9b64eadeec9fc0e4d8afc1f0e1dcd4645a9f34951ee9ea86c343e8d5e18c3af0->leave($__internal_9b64eadeec9fc0e4d8afc1f0e1dcd4645a9f34951ee9ea86c343e8d5e18c3af0_prof);

    }

    public function getTemplateName()
    {
        return "SenofficeBundle:Front:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}Sen Office{% endblock %}
", "SenofficeBundle:Front:index.html.twig", "/var/www/html/senoffice/myoffice/src/ADOB/SenofficeBundle/Resources/views/Front/index.html.twig");
    }
}
