<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_811229ae714a98849d9f4e1c4dae9bb2a5342a12ffb1d8d2bd3935da346b2e9c extends Twig_Template
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
        $__internal_087883b17fe4eac4bd657524deb3fdb1ff98555cc223c766fa7382f6ec3ff9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087883b17fe4eac4bd657524deb3fdb1ff98555cc223c766fa7382f6ec3ff9ce->enter($__internal_087883b17fe4eac4bd657524deb3fdb1ff98555cc223c766fa7382f6ec3ff9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_69ab9ce2ad75f6d9cc6cae3d5e42bd959deed2e42e2d3189e3befd0a114518c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ab9ce2ad75f6d9cc6cae3d5e42bd959deed2e42e2d3189e3befd0a114518c9->enter($__internal_69ab9ce2ad75f6d9cc6cae3d5e42bd959deed2e42e2d3189e3befd0a114518c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_087883b17fe4eac4bd657524deb3fdb1ff98555cc223c766fa7382f6ec3ff9ce->leave($__internal_087883b17fe4eac4bd657524deb3fdb1ff98555cc223c766fa7382f6ec3ff9ce_prof);

        
        $__internal_69ab9ce2ad75f6d9cc6cae3d5e42bd959deed2e42e2d3189e3befd0a114518c9->leave($__internal_69ab9ce2ad75f6d9cc6cae3d5e42bd959deed2e42e2d3189e3befd0a114518c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
