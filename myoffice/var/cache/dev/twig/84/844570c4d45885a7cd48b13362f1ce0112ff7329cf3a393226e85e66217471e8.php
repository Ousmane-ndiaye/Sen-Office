<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_80c55c5087d3696954d172ff4a55ff231052f4df06063093bf12476658e03caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66e0b147be6971b9d7263e8705d320355bf18a3ab952cb19c36ca201039af775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e0b147be6971b9d7263e8705d320355bf18a3ab952cb19c36ca201039af775->enter($__internal_66e0b147be6971b9d7263e8705d320355bf18a3ab952cb19c36ca201039af775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_2f23204e3f7332b34ed41b62df4f19a6ae64c245d4a453f079d92a27dede6577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f23204e3f7332b34ed41b62df4f19a6ae64c245d4a453f079d92a27dede6577->enter($__internal_2f23204e3f7332b34ed41b62df4f19a6ae64c245d4a453f079d92a27dede6577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_66e0b147be6971b9d7263e8705d320355bf18a3ab952cb19c36ca201039af775->leave($__internal_66e0b147be6971b9d7263e8705d320355bf18a3ab952cb19c36ca201039af775_prof);

        
        $__internal_2f23204e3f7332b34ed41b62df4f19a6ae64c245d4a453f079d92a27dede6577->leave($__internal_2f23204e3f7332b34ed41b62df4f19a6ae64c245d4a453f079d92a27dede6577_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3d3332f5534323085e42b1c2e208806d3ac756c9042209ec5c679010b285bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d3332f5534323085e42b1c2e208806d3ac756c9042209ec5c679010b285bcd->enter($__internal_a3d3332f5534323085e42b1c2e208806d3ac756c9042209ec5c679010b285bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d952ee2b8628e0beb71cea0960170a1011c5989de00f82892186b43873afe106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d952ee2b8628e0beb71cea0960170a1011c5989de00f82892186b43873afe106->enter($__internal_d952ee2b8628e0beb71cea0960170a1011c5989de00f82892186b43873afe106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d952ee2b8628e0beb71cea0960170a1011c5989de00f82892186b43873afe106->leave($__internal_d952ee2b8628e0beb71cea0960170a1011c5989de00f82892186b43873afe106_prof);

        
        $__internal_a3d3332f5534323085e42b1c2e208806d3ac756c9042209ec5c679010b285bcd->leave($__internal_a3d3332f5534323085e42b1c2e208806d3ac756c9042209ec5c679010b285bcd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
