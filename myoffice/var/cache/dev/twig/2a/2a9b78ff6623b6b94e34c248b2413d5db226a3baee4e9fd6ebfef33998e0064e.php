<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bc1bfe15eb0c1682c3df10213cf5a9ec1e103b13f1bcab79bcdc91cd6a77def5 extends Twig_Template
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
        $__internal_2ac9b36c5cf2c4e43ddc082b5e982a2024962cc4b2b5dd026048131eedccb17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac9b36c5cf2c4e43ddc082b5e982a2024962cc4b2b5dd026048131eedccb17e->enter($__internal_2ac9b36c5cf2c4e43ddc082b5e982a2024962cc4b2b5dd026048131eedccb17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_daab93e557a7263c2f5f4d2aa0490ac1934827d0b5682d8a31edee46738498ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daab93e557a7263c2f5f4d2aa0490ac1934827d0b5682d8a31edee46738498ca->enter($__internal_daab93e557a7263c2f5f4d2aa0490ac1934827d0b5682d8a31edee46738498ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2ac9b36c5cf2c4e43ddc082b5e982a2024962cc4b2b5dd026048131eedccb17e->leave($__internal_2ac9b36c5cf2c4e43ddc082b5e982a2024962cc4b2b5dd026048131eedccb17e_prof);

        
        $__internal_daab93e557a7263c2f5f4d2aa0490ac1934827d0b5682d8a31edee46738498ca->leave($__internal_daab93e557a7263c2f5f4d2aa0490ac1934827d0b5682d8a31edee46738498ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
