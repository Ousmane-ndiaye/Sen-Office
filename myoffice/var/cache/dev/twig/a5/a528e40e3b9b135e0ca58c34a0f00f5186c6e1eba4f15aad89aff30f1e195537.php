<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b568a4e5ad5ee8f8a71ee37d960e4e2d9c0e55ce8af49f736810b4afd8eae854 extends Twig_Template
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
        $__internal_625ce19c62fa020c038ee4a0364df7901a940071aa5cfd530a8a3db1bf67f1a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625ce19c62fa020c038ee4a0364df7901a940071aa5cfd530a8a3db1bf67f1a4->enter($__internal_625ce19c62fa020c038ee4a0364df7901a940071aa5cfd530a8a3db1bf67f1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e3e2f5a9f6c9de97a9fba651333e32c05f66dc9bf2b262f5887f909bf1c23f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e2f5a9f6c9de97a9fba651333e32c05f66dc9bf2b262f5887f909bf1c23f4d->enter($__internal_e3e2f5a9f6c9de97a9fba651333e32c05f66dc9bf2b262f5887f909bf1c23f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_625ce19c62fa020c038ee4a0364df7901a940071aa5cfd530a8a3db1bf67f1a4->leave($__internal_625ce19c62fa020c038ee4a0364df7901a940071aa5cfd530a8a3db1bf67f1a4_prof);

        
        $__internal_e3e2f5a9f6c9de97a9fba651333e32c05f66dc9bf2b262f5887f909bf1c23f4d->leave($__internal_e3e2f5a9f6c9de97a9fba651333e32c05f66dc9bf2b262f5887f909bf1c23f4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
