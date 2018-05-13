<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_05c675fbdfb49a052cb5ce133271eca023ace22c43429e5dba605e0b95730305 extends Twig_Template
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
        $__internal_d66c61c8aa36619d193b5cac2659e78f3f6f1c906ea847c6be0993a09143c2ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66c61c8aa36619d193b5cac2659e78f3f6f1c906ea847c6be0993a09143c2ce->enter($__internal_d66c61c8aa36619d193b5cac2659e78f3f6f1c906ea847c6be0993a09143c2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f992c659e95ce375f19d91ba848265cd9b13dd6933c5fda52d4f24367bd67df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f992c659e95ce375f19d91ba848265cd9b13dd6933c5fda52d4f24367bd67df4->enter($__internal_f992c659e95ce375f19d91ba848265cd9b13dd6933c5fda52d4f24367bd67df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d66c61c8aa36619d193b5cac2659e78f3f6f1c906ea847c6be0993a09143c2ce->leave($__internal_d66c61c8aa36619d193b5cac2659e78f3f6f1c906ea847c6be0993a09143c2ce_prof);

        
        $__internal_f992c659e95ce375f19d91ba848265cd9b13dd6933c5fda52d4f24367bd67df4->leave($__internal_f992c659e95ce375f19d91ba848265cd9b13dd6933c5fda52d4f24367bd67df4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
