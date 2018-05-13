<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_67417af1119ba75592b9b636a2f529736ea74d14ec1b5b1b7fe7bc4e8a3ecd85 extends Twig_Template
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
        $__internal_e0354d6bb5565779d9a52dfca7d81ea2007152653fc9f7abca0af8da14114c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0354d6bb5565779d9a52dfca7d81ea2007152653fc9f7abca0af8da14114c14->enter($__internal_e0354d6bb5565779d9a52dfca7d81ea2007152653fc9f7abca0af8da14114c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_087c7ca4b8726413223e79de775d83a169c825f98978477dcb4848b0b51bcd1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087c7ca4b8726413223e79de775d83a169c825f98978477dcb4848b0b51bcd1b->enter($__internal_087c7ca4b8726413223e79de775d83a169c825f98978477dcb4848b0b51bcd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e0354d6bb5565779d9a52dfca7d81ea2007152653fc9f7abca0af8da14114c14->leave($__internal_e0354d6bb5565779d9a52dfca7d81ea2007152653fc9f7abca0af8da14114c14_prof);

        
        $__internal_087c7ca4b8726413223e79de775d83a169c825f98978477dcb4848b0b51bcd1b->leave($__internal_087c7ca4b8726413223e79de775d83a169c825f98978477dcb4848b0b51bcd1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
