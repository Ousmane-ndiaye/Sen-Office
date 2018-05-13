<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_bde844aa2457d72e49c1412f1abaaacab5460b987041c62c8a485669be47b9e9 extends Twig_Template
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
        $__internal_0443ceacd15c3363bc35ef977b7e2c45544d4f784e248031fd87769281c727d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0443ceacd15c3363bc35ef977b7e2c45544d4f784e248031fd87769281c727d9->enter($__internal_0443ceacd15c3363bc35ef977b7e2c45544d4f784e248031fd87769281c727d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_0bde2837b59fc2ce95f7cb1b42f1dae54b106d3944ba1b5c7f19d304e5fb20b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bde2837b59fc2ce95f7cb1b42f1dae54b106d3944ba1b5c7f19d304e5fb20b2->enter($__internal_0bde2837b59fc2ce95f7cb1b42f1dae54b106d3944ba1b5c7f19d304e5fb20b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0443ceacd15c3363bc35ef977b7e2c45544d4f784e248031fd87769281c727d9->leave($__internal_0443ceacd15c3363bc35ef977b7e2c45544d4f784e248031fd87769281c727d9_prof);

        
        $__internal_0bde2837b59fc2ce95f7cb1b42f1dae54b106d3944ba1b5c7f19d304e5fb20b2->leave($__internal_0bde2837b59fc2ce95f7cb1b42f1dae54b106d3944ba1b5c7f19d304e5fb20b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
