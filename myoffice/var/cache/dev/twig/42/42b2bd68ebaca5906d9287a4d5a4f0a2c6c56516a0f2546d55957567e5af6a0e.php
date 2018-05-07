<?php

/* base.html.twig */
class __TwigTemplate_a04947d5009d507072a9ba6506ebae3c79fdd03aece5081d3ae329be8551f7d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80fb39c7bdf60625a5b61f4872617a5c9752690bf3f5a010e050aeaedc0ac67f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80fb39c7bdf60625a5b61f4872617a5c9752690bf3f5a010e050aeaedc0ac67f->enter($__internal_80fb39c7bdf60625a5b61f4872617a5c9752690bf3f5a010e050aeaedc0ac67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bd3183f992c934d9bedcd22a64dc4bcccee0b8c411f14cea3fd613e6fcf9c55c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3183f992c934d9bedcd22a64dc4bcccee0b8c411f14cea3fd613e6fcf9c55c->enter($__internal_bd3183f992c934d9bedcd22a64dc4bcccee0b8c411f14cea3fd613e6fcf9c55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_80fb39c7bdf60625a5b61f4872617a5c9752690bf3f5a010e050aeaedc0ac67f->leave($__internal_80fb39c7bdf60625a5b61f4872617a5c9752690bf3f5a010e050aeaedc0ac67f_prof);

        
        $__internal_bd3183f992c934d9bedcd22a64dc4bcccee0b8c411f14cea3fd613e6fcf9c55c->leave($__internal_bd3183f992c934d9bedcd22a64dc4bcccee0b8c411f14cea3fd613e6fcf9c55c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_25c79ff5f63574be72f9b0e8de1e3d3f61949bb2ea0ed665108ca5daf1a8562c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c79ff5f63574be72f9b0e8de1e3d3f61949bb2ea0ed665108ca5daf1a8562c->enter($__internal_25c79ff5f63574be72f9b0e8de1e3d3f61949bb2ea0ed665108ca5daf1a8562c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_efeb1a8bc974fcb60473755b6fdff1b3d29bab3371d9328ab3117c1409f1540e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efeb1a8bc974fcb60473755b6fdff1b3d29bab3371d9328ab3117c1409f1540e->enter($__internal_efeb1a8bc974fcb60473755b6fdff1b3d29bab3371d9328ab3117c1409f1540e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_efeb1a8bc974fcb60473755b6fdff1b3d29bab3371d9328ab3117c1409f1540e->leave($__internal_efeb1a8bc974fcb60473755b6fdff1b3d29bab3371d9328ab3117c1409f1540e_prof);

        
        $__internal_25c79ff5f63574be72f9b0e8de1e3d3f61949bb2ea0ed665108ca5daf1a8562c->leave($__internal_25c79ff5f63574be72f9b0e8de1e3d3f61949bb2ea0ed665108ca5daf1a8562c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_724757521af79c83027a9b2755e9afd3595dc12088eedbb9e870970e5afcfd5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724757521af79c83027a9b2755e9afd3595dc12088eedbb9e870970e5afcfd5b->enter($__internal_724757521af79c83027a9b2755e9afd3595dc12088eedbb9e870970e5afcfd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_877a87eb7b9c5350e497492b1c21cd4072c1c89484066b437a9c0ca3ab7fde2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877a87eb7b9c5350e497492b1c21cd4072c1c89484066b437a9c0ca3ab7fde2c->enter($__internal_877a87eb7b9c5350e497492b1c21cd4072c1c89484066b437a9c0ca3ab7fde2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_877a87eb7b9c5350e497492b1c21cd4072c1c89484066b437a9c0ca3ab7fde2c->leave($__internal_877a87eb7b9c5350e497492b1c21cd4072c1c89484066b437a9c0ca3ab7fde2c_prof);

        
        $__internal_724757521af79c83027a9b2755e9afd3595dc12088eedbb9e870970e5afcfd5b->leave($__internal_724757521af79c83027a9b2755e9afd3595dc12088eedbb9e870970e5afcfd5b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_235b4202edb18796c3f5f27704ae3dfb44776ceb673ec92c9fca0cddca0d6580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_235b4202edb18796c3f5f27704ae3dfb44776ceb673ec92c9fca0cddca0d6580->enter($__internal_235b4202edb18796c3f5f27704ae3dfb44776ceb673ec92c9fca0cddca0d6580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3935ddb59e403a0e9675fe822e7e8c10b87d35265107819c36449c8c53eb0f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3935ddb59e403a0e9675fe822e7e8c10b87d35265107819c36449c8c53eb0f13->enter($__internal_3935ddb59e403a0e9675fe822e7e8c10b87d35265107819c36449c8c53eb0f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3935ddb59e403a0e9675fe822e7e8c10b87d35265107819c36449c8c53eb0f13->leave($__internal_3935ddb59e403a0e9675fe822e7e8c10b87d35265107819c36449c8c53eb0f13_prof);

        
        $__internal_235b4202edb18796c3f5f27704ae3dfb44776ceb673ec92c9fca0cddca0d6580->leave($__internal_235b4202edb18796c3f5f27704ae3dfb44776ceb673ec92c9fca0cddca0d6580_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_47c6b3ed5f2123040eaf54b7d127f56b9d623a953bb657dd3e3845304a5fde47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47c6b3ed5f2123040eaf54b7d127f56b9d623a953bb657dd3e3845304a5fde47->enter($__internal_47c6b3ed5f2123040eaf54b7d127f56b9d623a953bb657dd3e3845304a5fde47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f90e051937b7453aea2d4d1ad409742c77d05ae6b9b6b8b4d397b490f30e0533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90e051937b7453aea2d4d1ad409742c77d05ae6b9b6b8b4d397b490f30e0533->enter($__internal_f90e051937b7453aea2d4d1ad409742c77d05ae6b9b6b8b4d397b490f30e0533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f90e051937b7453aea2d4d1ad409742c77d05ae6b9b6b8b4d397b490f30e0533->leave($__internal_f90e051937b7453aea2d4d1ad409742c77d05ae6b9b6b8b4d397b490f30e0533_prof);

        
        $__internal_47c6b3ed5f2123040eaf54b7d127f56b9d623a953bb657dd3e3845304a5fde47->leave($__internal_47c6b3ed5f2123040eaf54b7d127f56b9d623a953bb657dd3e3845304a5fde47_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/myoffice/app/Resources/views/base.html.twig");
    }
}
