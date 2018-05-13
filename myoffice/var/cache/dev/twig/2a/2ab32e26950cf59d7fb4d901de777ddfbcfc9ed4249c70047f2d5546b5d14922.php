<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5f270917a48f234e4fd9496ccf82bf7dea7e8dfaa2a11e2256bf27a95bd32720 extends Twig_Template
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
        $__internal_2c1376b0846f66f4e3e1c33dbbff06a7029bcd2ae2bd5dee3eb8d2eb68b5c3c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1376b0846f66f4e3e1c33dbbff06a7029bcd2ae2bd5dee3eb8d2eb68b5c3c2->enter($__internal_2c1376b0846f66f4e3e1c33dbbff06a7029bcd2ae2bd5dee3eb8d2eb68b5c3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_677cf827e615bb0a840e4eb007f1682ab110341d1a42f59b6ed423578367e5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677cf827e615bb0a840e4eb007f1682ab110341d1a42f59b6ed423578367e5a0->enter($__internal_677cf827e615bb0a840e4eb007f1682ab110341d1a42f59b6ed423578367e5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2c1376b0846f66f4e3e1c33dbbff06a7029bcd2ae2bd5dee3eb8d2eb68b5c3c2->leave($__internal_2c1376b0846f66f4e3e1c33dbbff06a7029bcd2ae2bd5dee3eb8d2eb68b5c3c2_prof);

        
        $__internal_677cf827e615bb0a840e4eb007f1682ab110341d1a42f59b6ed423578367e5a0->leave($__internal_677cf827e615bb0a840e4eb007f1682ab110341d1a42f59b6ed423578367e5a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
