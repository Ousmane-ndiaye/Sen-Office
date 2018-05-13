<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e890e2471bf63b9d90d0658ad6bb37d460be625522422327e9f6ddf2f41e11a0 extends Twig_Template
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
        $__internal_86ab6304cf1f49df334cd85b10a07a638a7a2bdbdbcfe5dced9d5f5f1a9c57d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ab6304cf1f49df334cd85b10a07a638a7a2bdbdbcfe5dced9d5f5f1a9c57d6->enter($__internal_86ab6304cf1f49df334cd85b10a07a638a7a2bdbdbcfe5dced9d5f5f1a9c57d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_a09e3ce45121fe04ef3723e1aafe35100598d13d654eef47e46aa9a18c6ece8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09e3ce45121fe04ef3723e1aafe35100598d13d654eef47e46aa9a18c6ece8d->enter($__internal_a09e3ce45121fe04ef3723e1aafe35100598d13d654eef47e46aa9a18c6ece8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_86ab6304cf1f49df334cd85b10a07a638a7a2bdbdbcfe5dced9d5f5f1a9c57d6->leave($__internal_86ab6304cf1f49df334cd85b10a07a638a7a2bdbdbcfe5dced9d5f5f1a9c57d6_prof);

        
        $__internal_a09e3ce45121fe04ef3723e1aafe35100598d13d654eef47e46aa9a18c6ece8d->leave($__internal_a09e3ce45121fe04ef3723e1aafe35100598d13d654eef47e46aa9a18c6ece8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
