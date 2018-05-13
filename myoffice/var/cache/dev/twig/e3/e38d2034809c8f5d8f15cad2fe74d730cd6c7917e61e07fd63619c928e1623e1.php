<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5a2fe667ffb853048e57f164ce6f24e226f1ff151c606fe9cb902b81e31f21e6 extends Twig_Template
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
        $__internal_71be1ddf30c2cc50ba9329c00eea7b2716b961b8f10b7fac9456b37a06d6bf99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71be1ddf30c2cc50ba9329c00eea7b2716b961b8f10b7fac9456b37a06d6bf99->enter($__internal_71be1ddf30c2cc50ba9329c00eea7b2716b961b8f10b7fac9456b37a06d6bf99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f3828012bd026175969b0b08bcfed72c23be7f99f73a4573f5b3e95deab7f9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3828012bd026175969b0b08bcfed72c23be7f99f73a4573f5b3e95deab7f9fd->enter($__internal_f3828012bd026175969b0b08bcfed72c23be7f99f73a4573f5b3e95deab7f9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_71be1ddf30c2cc50ba9329c00eea7b2716b961b8f10b7fac9456b37a06d6bf99->leave($__internal_71be1ddf30c2cc50ba9329c00eea7b2716b961b8f10b7fac9456b37a06d6bf99_prof);

        
        $__internal_f3828012bd026175969b0b08bcfed72c23be7f99f73a4573f5b3e95deab7f9fd->leave($__internal_f3828012bd026175969b0b08bcfed72c23be7f99f73a4573f5b3e95deab7f9fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
