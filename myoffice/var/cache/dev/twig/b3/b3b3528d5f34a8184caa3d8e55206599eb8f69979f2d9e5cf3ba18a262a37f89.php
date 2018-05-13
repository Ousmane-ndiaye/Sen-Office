<?php

/* OfficeBundle:Front:catalogue.html.twig */
class __TwigTemplate_43e3f08d97fa31090dc7a700428703ab9ad50ef47dd596f4e1132c5b94f81bcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OfficeBundle:Front:acceuil.html.twig", "OfficeBundle:Front:catalogue.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'slide' => array($this, 'block_slide'),
            'recherche' => array($this, 'block_recherche'),
            'offre' => array($this, 'block_offre'),
            'apropos' => array($this, 'block_apropos'),
            'partenaires' => array($this, 'block_partenaires'),
            'galerie' => array($this, 'block_galerie'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OfficeBundle:Front:acceuil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90a61b3fbeb3a073862aef4861c5f447dc255459d12fdd40391c2079c41ef6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a61b3fbeb3a073862aef4861c5f447dc255459d12fdd40391c2079c41ef6b9->enter($__internal_90a61b3fbeb3a073862aef4861c5f447dc255459d12fdd40391c2079c41ef6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfficeBundle:Front:catalogue.html.twig"));

        $__internal_aa40583e7785ec16e72af46fb2942fedda12ff15caad89d17bd89b3de6392038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa40583e7785ec16e72af46fb2942fedda12ff15caad89d17bd89b3de6392038->enter($__internal_aa40583e7785ec16e72af46fb2942fedda12ff15caad89d17bd89b3de6392038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfficeBundle:Front:catalogue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90a61b3fbeb3a073862aef4861c5f447dc255459d12fdd40391c2079c41ef6b9->leave($__internal_90a61b3fbeb3a073862aef4861c5f447dc255459d12fdd40391c2079c41ef6b9_prof);

        
        $__internal_aa40583e7785ec16e72af46fb2942fedda12ff15caad89d17bd89b3de6392038->leave($__internal_aa40583e7785ec16e72af46fb2942fedda12ff15caad89d17bd89b3de6392038_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_73847aa839865167a18cebb5d55f446394bdf1acd68ec7306f615bd76761cf9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73847aa839865167a18cebb5d55f446394bdf1acd68ec7306f615bd76761cf9c->enter($__internal_73847aa839865167a18cebb5d55f446394bdf1acd68ec7306f615bd76761cf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ad107150aadb8c4cbb38c3c5fd4cd74366d0b436c7c149e7ef4bcf099cc237ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad107150aadb8c4cbb38c3c5fd4cd74366d0b436c7c149e7ef4bcf099cc237ef->enter($__internal_ad107150aadb8c4cbb38c3c5fd4cd74366d0b436c7c149e7ef4bcf099cc237ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PremiumBundle:Front:Catalogue";
        
        $__internal_ad107150aadb8c4cbb38c3c5fd4cd74366d0b436c7c149e7ef4bcf099cc237ef->leave($__internal_ad107150aadb8c4cbb38c3c5fd4cd74366d0b436c7c149e7ef4bcf099cc237ef_prof);

        
        $__internal_73847aa839865167a18cebb5d55f446394bdf1acd68ec7306f615bd76761cf9c->leave($__internal_73847aa839865167a18cebb5d55f446394bdf1acd68ec7306f615bd76761cf9c_prof);

    }

    // line 4
    public function block_slide($context, array $blocks = array())
    {
        $__internal_a927c13cb1a4f6e733b7f6f26fdf124c98c0395e226679f5cfbe8ac4c4e2a832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a927c13cb1a4f6e733b7f6f26fdf124c98c0395e226679f5cfbe8ac4c4e2a832->enter($__internal_a927c13cb1a4f6e733b7f6f26fdf124c98c0395e226679f5cfbe8ac4c4e2a832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_283b88eab7bf5384c4cec33fcbbc57131c04b46f1dce7afb198e21909c035985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283b88eab7bf5384c4cec33fcbbc57131c04b46f1dce7afb198e21909c035985->enter($__internal_283b88eab7bf5384c4cec33fcbbc57131c04b46f1dce7afb198e21909c035985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 5
        echo "    <div>
        <br><br>
    </div>
";
        
        $__internal_283b88eab7bf5384c4cec33fcbbc57131c04b46f1dce7afb198e21909c035985->leave($__internal_283b88eab7bf5384c4cec33fcbbc57131c04b46f1dce7afb198e21909c035985_prof);

        
        $__internal_a927c13cb1a4f6e733b7f6f26fdf124c98c0395e226679f5cfbe8ac4c4e2a832->leave($__internal_a927c13cb1a4f6e733b7f6f26fdf124c98c0395e226679f5cfbe8ac4c4e2a832_prof);

    }

    // line 9
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_a47adeb285df1f72c5449bfd869fcb659c7084e04d8bfb7db8a87c59431e86f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47adeb285df1f72c5449bfd869fcb659c7084e04d8bfb7db8a87c59431e86f6->enter($__internal_a47adeb285df1f72c5449bfd869fcb659c7084e04d8bfb7db8a87c59431e86f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_20608bf3d3b79da0e8702199f865e7aed22141d37e72ee89a78c70de3a65997e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20608bf3d3b79da0e8702199f865e7aed22141d37e72ee89a78c70de3a65997e->enter($__internal_20608bf3d3b79da0e8702199f865e7aed22141d37e72ee89a78c70de3a65997e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        
        $__internal_20608bf3d3b79da0e8702199f865e7aed22141d37e72ee89a78c70de3a65997e->leave($__internal_20608bf3d3b79da0e8702199f865e7aed22141d37e72ee89a78c70de3a65997e_prof);

        
        $__internal_a47adeb285df1f72c5449bfd869fcb659c7084e04d8bfb7db8a87c59431e86f6->leave($__internal_a47adeb285df1f72c5449bfd869fcb659c7084e04d8bfb7db8a87c59431e86f6_prof);

    }

    // line 12
    public function block_offre($context, array $blocks = array())
    {
        $__internal_e4bc459ec40eb2789ebe6d7d3392dcbc40c71df8747aace8359bf38e9904f682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4bc459ec40eb2789ebe6d7d3392dcbc40c71df8747aace8359bf38e9904f682->enter($__internal_e4bc459ec40eb2789ebe6d7d3392dcbc40c71df8747aace8359bf38e9904f682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_86d54d2437c2bc7e5bc40598ed9483ca4a83e1e993e16b953b6aee3d946e6f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d54d2437c2bc7e5bc40598ed9483ca4a83e1e993e16b953b6aee3d946e6f57->enter($__internal_86d54d2437c2bc7e5bc40598ed9483ca4a83e1e993e16b953b6aee3d946e6f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 13
        echo "<div><br><br></div>
<div class=\"mg-page-title parallax\">
\t\t\t<div class=\"container \">
\t\t\t\t<div class=\"row \">
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t<h2>Consulter la liste de nos salles</h2>
\t\t\t\t\t\t<p>Tous nos types de salles classés par rapport a vos activités.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mg-gallery-page\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"mg-filter\">
\t\t\t\t\t\t\t<form id=\"mg-filter\">
\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-dark btn-main\"><input type=\"radio\" name=\"filter\" value=\"all\" checked=\"checked\">Tout</label>
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"classic\">Seminaires</label>
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"deluxe\">Informatiques</label>
                                    <label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"royal\">Journées etudes</label>
                                    <label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"royal\">Auditorium/Emphithéatre</label>
                                    <label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"royal\">Formation</label>
                                    <label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"royal\">Coktails</label>
                                    <label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"royal\">Team Bulding</label>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row\" id=\"mg-grid\">
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"classic\"]'>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-1.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-1.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"deluxe\"]'>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-2.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-2.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"royal\"]'>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"classic\"]'>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-4.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-4.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"deluxe\"]'>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-1.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-5.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"classic\"]'>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-2.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-6.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"royal\"]'>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-7.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"royal\"]'>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-8.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"classic\"]'>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-9.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"royal\"]'>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-10.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"deluxe\"]'>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-11.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"classic\"]'>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-12.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
   
";
        
        $__internal_86d54d2437c2bc7e5bc40598ed9483ca4a83e1e993e16b953b6aee3d946e6f57->leave($__internal_86d54d2437c2bc7e5bc40598ed9483ca4a83e1e993e16b953b6aee3d946e6f57_prof);

        
        $__internal_e4bc459ec40eb2789ebe6d7d3392dcbc40c71df8747aace8359bf38e9904f682->leave($__internal_e4bc459ec40eb2789ebe6d7d3392dcbc40c71df8747aace8359bf38e9904f682_prof);

    }

    // line 91
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_6b93219b02aad6280822574a9beea83468cbcb30dda9884a2900ced685b19054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b93219b02aad6280822574a9beea83468cbcb30dda9884a2900ced685b19054->enter($__internal_6b93219b02aad6280822574a9beea83468cbcb30dda9884a2900ced685b19054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_2669c7290268f23c15eaa652a1cb49b14b5a80f0d14a2ee69f02a1c6a1c424c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2669c7290268f23c15eaa652a1cb49b14b5a80f0d14a2ee69f02a1c6a1c424c6->enter($__internal_2669c7290268f23c15eaa652a1cb49b14b5a80f0d14a2ee69f02a1c6a1c424c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 92
        echo "
";
        
        $__internal_2669c7290268f23c15eaa652a1cb49b14b5a80f0d14a2ee69f02a1c6a1c424c6->leave($__internal_2669c7290268f23c15eaa652a1cb49b14b5a80f0d14a2ee69f02a1c6a1c424c6_prof);

        
        $__internal_6b93219b02aad6280822574a9beea83468cbcb30dda9884a2900ced685b19054->leave($__internal_6b93219b02aad6280822574a9beea83468cbcb30dda9884a2900ced685b19054_prof);

    }

    // line 94
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_198effdbe4e98e21bf63bdd8da296b11da9abb00e17e9ff6d68e5f45aaf522a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_198effdbe4e98e21bf63bdd8da296b11da9abb00e17e9ff6d68e5f45aaf522a0->enter($__internal_198effdbe4e98e21bf63bdd8da296b11da9abb00e17e9ff6d68e5f45aaf522a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_7e3c4d0721852f7b9c657ac941e682615c2fee58d14c7a1cddd1f2d34f166f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3c4d0721852f7b9c657ac941e682615c2fee58d14c7a1cddd1f2d34f166f17->enter($__internal_7e3c4d0721852f7b9c657ac941e682615c2fee58d14c7a1cddd1f2d34f166f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        // line 95
        echo "
";
        
        $__internal_7e3c4d0721852f7b9c657ac941e682615c2fee58d14c7a1cddd1f2d34f166f17->leave($__internal_7e3c4d0721852f7b9c657ac941e682615c2fee58d14c7a1cddd1f2d34f166f17_prof);

        
        $__internal_198effdbe4e98e21bf63bdd8da296b11da9abb00e17e9ff6d68e5f45aaf522a0->leave($__internal_198effdbe4e98e21bf63bdd8da296b11da9abb00e17e9ff6d68e5f45aaf522a0_prof);

    }

    // line 97
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_aa5b6a54e0b00e595cfe8a04d2cee79923a03cf71a8aea2f40d0d7682a3c19c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa5b6a54e0b00e595cfe8a04d2cee79923a03cf71a8aea2f40d0d7682a3c19c7->enter($__internal_aa5b6a54e0b00e595cfe8a04d2cee79923a03cf71a8aea2f40d0d7682a3c19c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_a7e7a1d50217fdcba95d295520225dc88207f59a32a7d41ec2587544ac597ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e7a1d50217fdcba95d295520225dc88207f59a32a7d41ec2587544ac597ba9->enter($__internal_a7e7a1d50217fdcba95d295520225dc88207f59a32a7d41ec2587544ac597ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        // line 98
        echo "
";
        
        $__internal_a7e7a1d50217fdcba95d295520225dc88207f59a32a7d41ec2587544ac597ba9->leave($__internal_a7e7a1d50217fdcba95d295520225dc88207f59a32a7d41ec2587544ac597ba9_prof);

        
        $__internal_aa5b6a54e0b00e595cfe8a04d2cee79923a03cf71a8aea2f40d0d7682a3c19c7->leave($__internal_aa5b6a54e0b00e595cfe8a04d2cee79923a03cf71a8aea2f40d0d7682a3c19c7_prof);

    }

    public function getTemplateName()
    {
        return "OfficeBundle:Front:catalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 98,  298 => 97,  287 => 95,  278 => 94,  267 => 92,  258 => 91,  237 => 81,  229 => 78,  221 => 75,  213 => 72,  205 => 69,  197 => 66,  189 => 63,  181 => 60,  173 => 57,  165 => 54,  157 => 51,  149 => 48,  112 => 13,  103 => 12,  86 => 9,  73 => 5,  64 => 4,  46 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OfficeBundle:Front:acceuil.html.twig' %}
{% block title %}PremiumBundle:Front:Catalogue{% endblock %}

{% block slide %}
    <div>
        <br><br>
    </div>
{% endblock %}
{% block recherche %}
{% endblock %}

{% block offre %}
<div><br><br></div>
<div class=\"mg-page-title parallax\">
\t\t\t<div class=\"container \">
\t\t\t\t<div class=\"row \">
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t<h2>Consulter la liste de nos salles</h2>
\t\t\t\t\t\t<p>Tous nos types de salles classés par rapport a vos activités.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mg-gallery-page\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"mg-filter\">
\t\t\t\t\t\t\t<form id=\"mg-filter\">
\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-dark btn-main\"><input type=\"radio\" name=\"filter\" value=\"all\" checked=\"checked\">Tout</label>
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"classic\">Seminaires</label>
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"deluxe\">Informatiques</label>
                                    <label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"royal\">Journées etudes</label>
                                    <label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"royal\">Auditorium/Emphithéatre</label>
                                    <label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"royal\">Formation</label>
                                    <label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"royal\">Coktails</label>
                                    <label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"royal\">Team Bulding</label>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row\" id=\"mg-grid\">
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"classic\"]'>
\t\t\t\t\t\t\t\t<a href=\"{{asset ('assets/template/images/room-1.png')}}\" data-lightbox-gallery=\"rooms\"><img src=\"{{asset ('assets/template/images/room-1.png')}}\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"deluxe\"]'>
\t\t\t\t\t\t\t\t<a href=\"{{asset ('assets/template/images/room-2.png')}}\" data-lightbox-gallery=\"rooms\"><img src=\"{{asset ('assets/template/images/room-2.png')}}\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"royal\"]'>
\t\t\t\t\t\t\t\t<a href=\"{{asset ('assets/template/images/room-3.png')}}\" data-lightbox-gallery=\"rooms\"><img src=\"{{asset ('assets/template/images/room-3.png')}}\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"classic\"]'>
\t\t\t\t\t\t\t\t<a href=\"{{asset ('assets/template/images/room-4.png')}}\" data-lightbox-gallery=\"rooms\"><img src=\"{{asset ('assets/template/images/room-4.png')}}\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"deluxe\"]'>
\t\t\t\t\t\t\t\t<a href=\"{{asset ('assets/template/images/room-1.png')}}\" data-lightbox-gallery=\"rooms\"><img src=\"{{asset ('assets/template/images/room-5.png')}}\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"classic\"]'>
\t\t\t\t\t\t\t\t<a href=\"{{asset ('assets/template/images/room-2.png')}}\" data-lightbox-gallery=\"rooms\"><img src=\"{{asset ('assets/template/images/room-6.png')}}\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"royal\"]'>
\t\t\t\t\t\t\t\t<a href=\"{{asset ('assets/template/images/room-3.png')}}\" data-lightbox-gallery=\"rooms\"><img src=\"{{asset ('assets/template/images/room-7.png')}}\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"royal\"]'>
\t\t\t\t\t\t\t\t<a href=\"{{asset ('assets/template/images/room-3.png')}}\" data-lightbox-gallery=\"rooms\"><img src=\"{{asset ('assets/template/images/room-8.png')}}\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"classic\"]'>
\t\t\t\t\t\t\t\t<a href=\"{{asset ('assets/template/images/room-3.png')}}\" data-lightbox-gallery=\"rooms\"><img src=\"{{asset ('assets/template/images/room-9.png')}}\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"royal\"]'>
\t\t\t\t\t\t\t\t<a href=\"{{asset ('assets/template/images/room-3.png')}}\" data-lightbox-gallery=\"rooms\"><img src=\"{{asset ('assets/template/images/room-10.png')}}\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"deluxe\"]'>
\t\t\t\t\t\t\t\t<a href=\"{{asset ('assets/template/images/room-3.png')}}\" data-lightbox-gallery=\"rooms\"><img src=\"{{asset ('assets/template/images/room-11.png')}}\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"classic\"]'>
\t\t\t\t\t\t\t\t<a href=\"{{asset ('assets/template/images/room-3.png')}}\" data-lightbox-gallery=\"rooms\"><img src=\"{{asset ('assets/template/images/room-12.png')}}\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
   
{% endblock %}

{% block apropos %}

{% endblock %}
{% block partenaires %}

{% endblock %}
{% block galerie %}

{% endblock %}


", "OfficeBundle:Front:catalogue.html.twig", "/var/www/html/senoffice/myoffice/src/OfficeBundle/Resources/views/Front/catalogue.html.twig");
    }
}
