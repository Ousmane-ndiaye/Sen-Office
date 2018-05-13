<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b9fe2bef1d1b026e3c0b7736f21e572ac9473006c19ab78375174fdd839a7745 extends Twig_Template
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
        $__internal_e4cbc334d285aad12c3b1f9ef429d2c7c8f957bb5ff0e68d70caaf6f3d391c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4cbc334d285aad12c3b1f9ef429d2c7c8f957bb5ff0e68d70caaf6f3d391c49->enter($__internal_e4cbc334d285aad12c3b1f9ef429d2c7c8f957bb5ff0e68d70caaf6f3d391c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9e6161238ae0458509b858ae13e68ee0eb698b7f1cce4d629f73aa94b012840e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6161238ae0458509b858ae13e68ee0eb698b7f1cce4d629f73aa94b012840e->enter($__internal_9e6161238ae0458509b858ae13e68ee0eb698b7f1cce4d629f73aa94b012840e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e4cbc334d285aad12c3b1f9ef429d2c7c8f957bb5ff0e68d70caaf6f3d391c49->leave($__internal_e4cbc334d285aad12c3b1f9ef429d2c7c8f957bb5ff0e68d70caaf6f3d391c49_prof);

        
        $__internal_9e6161238ae0458509b858ae13e68ee0eb698b7f1cce4d629f73aa94b012840e->leave($__internal_9e6161238ae0458509b858ae13e68ee0eb698b7f1cce4d629f73aa94b012840e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
