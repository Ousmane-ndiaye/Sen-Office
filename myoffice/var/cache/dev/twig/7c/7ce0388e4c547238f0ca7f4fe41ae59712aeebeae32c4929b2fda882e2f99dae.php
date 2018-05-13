<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b2d01e4c6530e5f02e811e4cfcadf3de9b280b8fcffbc527ba11c8c8de15be07 extends Twig_Template
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
        $__internal_725132ac77d9949bb2422efa38b65a33e1386fdd1a26a6d0d6818ef90fcb9daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_725132ac77d9949bb2422efa38b65a33e1386fdd1a26a6d0d6818ef90fcb9daa->enter($__internal_725132ac77d9949bb2422efa38b65a33e1386fdd1a26a6d0d6818ef90fcb9daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_83b3a09f87b9642e1a20fe0de173679871e066ab2f70f4584ef409e6dc890e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b3a09f87b9642e1a20fe0de173679871e066ab2f70f4584ef409e6dc890e8d->enter($__internal_83b3a09f87b9642e1a20fe0de173679871e066ab2f70f4584ef409e6dc890e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_725132ac77d9949bb2422efa38b65a33e1386fdd1a26a6d0d6818ef90fcb9daa->leave($__internal_725132ac77d9949bb2422efa38b65a33e1386fdd1a26a6d0d6818ef90fcb9daa_prof);

        
        $__internal_83b3a09f87b9642e1a20fe0de173679871e066ab2f70f4584ef409e6dc890e8d->leave($__internal_83b3a09f87b9642e1a20fe0de173679871e066ab2f70f4584ef409e6dc890e8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
