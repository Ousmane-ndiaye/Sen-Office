<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6e2cd8997458de8dcd3f435ed9c87348b1b76877eaeadbb74e1360f924f641f6 extends Twig_Template
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
        $__internal_004daa66d8ffe0b446c3444f9ac8c5fb290a592cfb826c47bf33991846b28945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004daa66d8ffe0b446c3444f9ac8c5fb290a592cfb826c47bf33991846b28945->enter($__internal_004daa66d8ffe0b446c3444f9ac8c5fb290a592cfb826c47bf33991846b28945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_07a4f281ae78c811eab3c638d5ba14d0db1321679f99a2bd96bee43096539f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a4f281ae78c811eab3c638d5ba14d0db1321679f99a2bd96bee43096539f75->enter($__internal_07a4f281ae78c811eab3c638d5ba14d0db1321679f99a2bd96bee43096539f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_004daa66d8ffe0b446c3444f9ac8c5fb290a592cfb826c47bf33991846b28945->leave($__internal_004daa66d8ffe0b446c3444f9ac8c5fb290a592cfb826c47bf33991846b28945_prof);

        
        $__internal_07a4f281ae78c811eab3c638d5ba14d0db1321679f99a2bd96bee43096539f75->leave($__internal_07a4f281ae78c811eab3c638d5ba14d0db1321679f99a2bd96bee43096539f75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
