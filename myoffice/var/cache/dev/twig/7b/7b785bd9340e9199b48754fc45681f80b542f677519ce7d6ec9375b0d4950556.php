<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_964e8ad35f4cbf0d7dcd1b9d02a66645a5af639f97878953f462401a21938253 extends Twig_Template
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
        $__internal_3ebdbbfe12fc9b36e8b71f363c6fd28c46ec95b5ac5ffd87855cc7934a172de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ebdbbfe12fc9b36e8b71f363c6fd28c46ec95b5ac5ffd87855cc7934a172de6->enter($__internal_3ebdbbfe12fc9b36e8b71f363c6fd28c46ec95b5ac5ffd87855cc7934a172de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_341e795bd6b7c2acdc7740b5ba9f713b9533a58aa5559e09b76027343bc0c194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341e795bd6b7c2acdc7740b5ba9f713b9533a58aa5559e09b76027343bc0c194->enter($__internal_341e795bd6b7c2acdc7740b5ba9f713b9533a58aa5559e09b76027343bc0c194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_3ebdbbfe12fc9b36e8b71f363c6fd28c46ec95b5ac5ffd87855cc7934a172de6->leave($__internal_3ebdbbfe12fc9b36e8b71f363c6fd28c46ec95b5ac5ffd87855cc7934a172de6_prof);

        
        $__internal_341e795bd6b7c2acdc7740b5ba9f713b9533a58aa5559e09b76027343bc0c194->leave($__internal_341e795bd6b7c2acdc7740b5ba9f713b9533a58aa5559e09b76027343bc0c194_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
