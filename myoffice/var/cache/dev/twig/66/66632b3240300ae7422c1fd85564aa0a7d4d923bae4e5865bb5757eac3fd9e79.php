<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_744c421e1e08f50138d3bbccba9c4a78f28b416ceaa0f4f9657b3d6a934e1471 extends Twig_Template
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
        $__internal_325240c15111f4c59739a8384637d62190e5263925cff51c66aec0b6aaa2dfe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_325240c15111f4c59739a8384637d62190e5263925cff51c66aec0b6aaa2dfe4->enter($__internal_325240c15111f4c59739a8384637d62190e5263925cff51c66aec0b6aaa2dfe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d56f7292e07f0ba474c1549f957005b7614c1f1bb3dff834fc2bdd22fa6f501e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56f7292e07f0ba474c1549f957005b7614c1f1bb3dff834fc2bdd22fa6f501e->enter($__internal_d56f7292e07f0ba474c1549f957005b7614c1f1bb3dff834fc2bdd22fa6f501e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_325240c15111f4c59739a8384637d62190e5263925cff51c66aec0b6aaa2dfe4->leave($__internal_325240c15111f4c59739a8384637d62190e5263925cff51c66aec0b6aaa2dfe4_prof);

        
        $__internal_d56f7292e07f0ba474c1549f957005b7614c1f1bb3dff834fc2bdd22fa6f501e->leave($__internal_d56f7292e07f0ba474c1549f957005b7614c1f1bb3dff834fc2bdd22fa6f501e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
