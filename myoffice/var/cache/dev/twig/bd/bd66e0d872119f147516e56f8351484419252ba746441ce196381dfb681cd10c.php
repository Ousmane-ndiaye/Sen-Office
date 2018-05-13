<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_22f436b747089ac4b2bb71f1cc99874e82c0e76be258f6b9f829e6bdebfb49f1 extends Twig_Template
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
        $__internal_3622de4a8c760d38f8ca99a6aa614519f063ef2537cd256b5e355940aaa72cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3622de4a8c760d38f8ca99a6aa614519f063ef2537cd256b5e355940aaa72cc3->enter($__internal_3622de4a8c760d38f8ca99a6aa614519f063ef2537cd256b5e355940aaa72cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b85a0cbe856a610762b9b112bcd933ff8679ef95a91d262e1e0e465c6d08ff6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85a0cbe856a610762b9b112bcd933ff8679ef95a91d262e1e0e465c6d08ff6d->enter($__internal_b85a0cbe856a610762b9b112bcd933ff8679ef95a91d262e1e0e465c6d08ff6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3622de4a8c760d38f8ca99a6aa614519f063ef2537cd256b5e355940aaa72cc3->leave($__internal_3622de4a8c760d38f8ca99a6aa614519f063ef2537cd256b5e355940aaa72cc3_prof);

        
        $__internal_b85a0cbe856a610762b9b112bcd933ff8679ef95a91d262e1e0e465c6d08ff6d->leave($__internal_b85a0cbe856a610762b9b112bcd933ff8679ef95a91d262e1e0e465c6d08ff6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
