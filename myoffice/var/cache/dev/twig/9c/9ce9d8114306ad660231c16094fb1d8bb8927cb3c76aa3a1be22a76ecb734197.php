<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2f2e5890ceb5219354dfa04e1836adfa25b0acab71c7ad33dcab7a774e484068 extends Twig_Template
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
        $__internal_0c1f489a2d6a0eca94f8821d08ca5e48914aa2e568a46c7ac765edc87410a607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c1f489a2d6a0eca94f8821d08ca5e48914aa2e568a46c7ac765edc87410a607->enter($__internal_0c1f489a2d6a0eca94f8821d08ca5e48914aa2e568a46c7ac765edc87410a607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_14df1a65c78fe7cce9736861ac7a0326bfd7f5eeb4f34bd18641bbf83e6dfd8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14df1a65c78fe7cce9736861ac7a0326bfd7f5eeb4f34bd18641bbf83e6dfd8a->enter($__internal_14df1a65c78fe7cce9736861ac7a0326bfd7f5eeb4f34bd18641bbf83e6dfd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0c1f489a2d6a0eca94f8821d08ca5e48914aa2e568a46c7ac765edc87410a607->leave($__internal_0c1f489a2d6a0eca94f8821d08ca5e48914aa2e568a46c7ac765edc87410a607_prof);

        
        $__internal_14df1a65c78fe7cce9736861ac7a0326bfd7f5eeb4f34bd18641bbf83e6dfd8a->leave($__internal_14df1a65c78fe7cce9736861ac7a0326bfd7f5eeb4f34bd18641bbf83e6dfd8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
