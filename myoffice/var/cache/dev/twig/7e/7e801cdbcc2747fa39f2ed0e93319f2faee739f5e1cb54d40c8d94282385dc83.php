<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d8add65daa6b4b2b35f02ed7c4b0ab966cc0d9d0bcaa1ee841fb5270089c261e extends Twig_Template
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
        $__internal_934e3a130e931d827454e86d998ada56b1caf93f52ce32934805abd116bc69a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_934e3a130e931d827454e86d998ada56b1caf93f52ce32934805abd116bc69a4->enter($__internal_934e3a130e931d827454e86d998ada56b1caf93f52ce32934805abd116bc69a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_66d62b24b3b11b9d2f1a10ae489b5791dd25beee1585c40fef4795548810ef6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d62b24b3b11b9d2f1a10ae489b5791dd25beee1585c40fef4795548810ef6f->enter($__internal_66d62b24b3b11b9d2f1a10ae489b5791dd25beee1585c40fef4795548810ef6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_934e3a130e931d827454e86d998ada56b1caf93f52ce32934805abd116bc69a4->leave($__internal_934e3a130e931d827454e86d998ada56b1caf93f52ce32934805abd116bc69a4_prof);

        
        $__internal_66d62b24b3b11b9d2f1a10ae489b5791dd25beee1585c40fef4795548810ef6f->leave($__internal_66d62b24b3b11b9d2f1a10ae489b5791dd25beee1585c40fef4795548810ef6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
