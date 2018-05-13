<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_54d037e5162dfa915310efd058dc1aa6cbcf6bbba891aa6883f83f55c86cb241 extends Twig_Template
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
        $__internal_b13e1111f29982f45366b599c0e2832843171da298aef3718c26ba5079222e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13e1111f29982f45366b599c0e2832843171da298aef3718c26ba5079222e32->enter($__internal_b13e1111f29982f45366b599c0e2832843171da298aef3718c26ba5079222e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1c041b92475aea273c34d77804cd23dc98dca1d2733a5f5bace1873811647517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c041b92475aea273c34d77804cd23dc98dca1d2733a5f5bace1873811647517->enter($__internal_1c041b92475aea273c34d77804cd23dc98dca1d2733a5f5bace1873811647517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b13e1111f29982f45366b599c0e2832843171da298aef3718c26ba5079222e32->leave($__internal_b13e1111f29982f45366b599c0e2832843171da298aef3718c26ba5079222e32_prof);

        
        $__internal_1c041b92475aea273c34d77804cd23dc98dca1d2733a5f5bace1873811647517->leave($__internal_1c041b92475aea273c34d77804cd23dc98dca1d2733a5f5bace1873811647517_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
