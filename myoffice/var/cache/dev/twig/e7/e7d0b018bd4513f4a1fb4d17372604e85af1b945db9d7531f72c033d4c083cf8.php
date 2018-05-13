<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a673ceafd720c665011418fe4d7e17959c129a9bfa99d999ab0acaad0fb16271 extends Twig_Template
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
        $__internal_ffcf31982858d245e926dbd8816b33a8960fab6fdd31ee3cf3833e33759c95cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffcf31982858d245e926dbd8816b33a8960fab6fdd31ee3cf3833e33759c95cb->enter($__internal_ffcf31982858d245e926dbd8816b33a8960fab6fdd31ee3cf3833e33759c95cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_61d48e313d2a89bc21d22adc43ca47a8a9d6244f599768aebc5152f35cb17049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d48e313d2a89bc21d22adc43ca47a8a9d6244f599768aebc5152f35cb17049->enter($__internal_61d48e313d2a89bc21d22adc43ca47a8a9d6244f599768aebc5152f35cb17049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ffcf31982858d245e926dbd8816b33a8960fab6fdd31ee3cf3833e33759c95cb->leave($__internal_ffcf31982858d245e926dbd8816b33a8960fab6fdd31ee3cf3833e33759c95cb_prof);

        
        $__internal_61d48e313d2a89bc21d22adc43ca47a8a9d6244f599768aebc5152f35cb17049->leave($__internal_61d48e313d2a89bc21d22adc43ca47a8a9d6244f599768aebc5152f35cb17049_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
