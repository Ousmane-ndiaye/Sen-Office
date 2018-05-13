<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_426715d15a10e67499cb0f79af6dc60ac848ad426fa8e22c415a951118105d86 extends Twig_Template
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
        $__internal_462dea1ffcac9e31b6873e7bbe4b4a16f818165335bef5a7efb4425f605a2f77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462dea1ffcac9e31b6873e7bbe4b4a16f818165335bef5a7efb4425f605a2f77->enter($__internal_462dea1ffcac9e31b6873e7bbe4b4a16f818165335bef5a7efb4425f605a2f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9f34f6976a3903a098c5eed875735f19f7daa5900546cecde0e4520249f7e8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f34f6976a3903a098c5eed875735f19f7daa5900546cecde0e4520249f7e8a7->enter($__internal_9f34f6976a3903a098c5eed875735f19f7daa5900546cecde0e4520249f7e8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_462dea1ffcac9e31b6873e7bbe4b4a16f818165335bef5a7efb4425f605a2f77->leave($__internal_462dea1ffcac9e31b6873e7bbe4b4a16f818165335bef5a7efb4425f605a2f77_prof);

        
        $__internal_9f34f6976a3903a098c5eed875735f19f7daa5900546cecde0e4520249f7e8a7->leave($__internal_9f34f6976a3903a098c5eed875735f19f7daa5900546cecde0e4520249f7e8a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
