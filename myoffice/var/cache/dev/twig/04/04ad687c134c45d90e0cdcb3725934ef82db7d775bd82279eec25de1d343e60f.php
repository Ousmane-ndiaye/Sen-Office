<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ac3c8afc7485c0d9cc2d552518f6bb65ab2eff845447274c1a0b9a1dc733a9dc extends Twig_Template
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
        $__internal_8ae6292b50291a280973d17c73c5d74ab5f4dfc4f87f7d45daf7bb3ad9f0efbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae6292b50291a280973d17c73c5d74ab5f4dfc4f87f7d45daf7bb3ad9f0efbb->enter($__internal_8ae6292b50291a280973d17c73c5d74ab5f4dfc4f87f7d45daf7bb3ad9f0efbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4e46f4ee7cbad9441ddf275a35b9960b7169bfaf4a36a9ef8e2bb5437d9ca1d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e46f4ee7cbad9441ddf275a35b9960b7169bfaf4a36a9ef8e2bb5437d9ca1d7->enter($__internal_4e46f4ee7cbad9441ddf275a35b9960b7169bfaf4a36a9ef8e2bb5437d9ca1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8ae6292b50291a280973d17c73c5d74ab5f4dfc4f87f7d45daf7bb3ad9f0efbb->leave($__internal_8ae6292b50291a280973d17c73c5d74ab5f4dfc4f87f7d45daf7bb3ad9f0efbb_prof);

        
        $__internal_4e46f4ee7cbad9441ddf275a35b9960b7169bfaf4a36a9ef8e2bb5437d9ca1d7->leave($__internal_4e46f4ee7cbad9441ddf275a35b9960b7169bfaf4a36a9ef8e2bb5437d9ca1d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
