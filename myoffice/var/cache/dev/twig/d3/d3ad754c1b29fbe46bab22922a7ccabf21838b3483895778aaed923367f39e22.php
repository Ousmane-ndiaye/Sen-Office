<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cc9fae85d52094140cdb8b7a0c6582e3d66e16c384a68aa3d2462db8a09be459 extends Twig_Template
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
        $__internal_6e62a955c213b7c737b4368ba9ec213cb090259678513998994877b3ea1f10de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e62a955c213b7c737b4368ba9ec213cb090259678513998994877b3ea1f10de->enter($__internal_6e62a955c213b7c737b4368ba9ec213cb090259678513998994877b3ea1f10de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_d467380b9b55b04909b74da6328baf11e308893e900de3573fc898f3087d9c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d467380b9b55b04909b74da6328baf11e308893e900de3573fc898f3087d9c27->enter($__internal_d467380b9b55b04909b74da6328baf11e308893e900de3573fc898f3087d9c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6e62a955c213b7c737b4368ba9ec213cb090259678513998994877b3ea1f10de->leave($__internal_6e62a955c213b7c737b4368ba9ec213cb090259678513998994877b3ea1f10de_prof);

        
        $__internal_d467380b9b55b04909b74da6328baf11e308893e900de3573fc898f3087d9c27->leave($__internal_d467380b9b55b04909b74da6328baf11e308893e900de3573fc898f3087d9c27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
