<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_229013a302df9d17dc51ed91f2085062b20b3dea64486f8ce4981a3dd907fd31 extends Twig_Template
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
        $__internal_814ec5cb32e260d1ff3efa1138f80288b1ab0d69511bb34d61241fc18a57f7a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814ec5cb32e260d1ff3efa1138f80288b1ab0d69511bb34d61241fc18a57f7a0->enter($__internal_814ec5cb32e260d1ff3efa1138f80288b1ab0d69511bb34d61241fc18a57f7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_6584b689f6092bcc449af73bc062c10f74a713772ac9c9e435a5c2fb3623d827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6584b689f6092bcc449af73bc062c10f74a713772ac9c9e435a5c2fb3623d827->enter($__internal_6584b689f6092bcc449af73bc062c10f74a713772ac9c9e435a5c2fb3623d827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_814ec5cb32e260d1ff3efa1138f80288b1ab0d69511bb34d61241fc18a57f7a0->leave($__internal_814ec5cb32e260d1ff3efa1138f80288b1ab0d69511bb34d61241fc18a57f7a0_prof);

        
        $__internal_6584b689f6092bcc449af73bc062c10f74a713772ac9c9e435a5c2fb3623d827->leave($__internal_6584b689f6092bcc449af73bc062c10f74a713772ac9c9e435a5c2fb3623d827_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
