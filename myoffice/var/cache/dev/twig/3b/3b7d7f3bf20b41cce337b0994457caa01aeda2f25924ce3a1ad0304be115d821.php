<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_35adecb451e73ce7cceefb6918fd41de51bebb7b720e57934a1b209162db4a81 extends Twig_Template
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
        $__internal_3d601ac288de5cfef1859386f5ead1318bde3333c39f4399f82ca2c45ac505b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d601ac288de5cfef1859386f5ead1318bde3333c39f4399f82ca2c45ac505b3->enter($__internal_3d601ac288de5cfef1859386f5ead1318bde3333c39f4399f82ca2c45ac505b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_8288033ebe252fea099a7291362d9e5d109cf6709b6167542618acb377184202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8288033ebe252fea099a7291362d9e5d109cf6709b6167542618acb377184202->enter($__internal_8288033ebe252fea099a7291362d9e5d109cf6709b6167542618acb377184202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3d601ac288de5cfef1859386f5ead1318bde3333c39f4399f82ca2c45ac505b3->leave($__internal_3d601ac288de5cfef1859386f5ead1318bde3333c39f4399f82ca2c45ac505b3_prof);

        
        $__internal_8288033ebe252fea099a7291362d9e5d109cf6709b6167542618acb377184202->leave($__internal_8288033ebe252fea099a7291362d9e5d109cf6709b6167542618acb377184202_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
