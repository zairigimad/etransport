<?php

/* base.html.twig */
class __TwigTemplate_6b9f7a89e350cfa3ec3df934371d46f5d544de1bf33a121a9b6a643781f848f5 extends Twig_Template
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
        $__internal_919a97bb1b5208122046df3d6ee51383aa62cef31707be16b93f24f729f58b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919a97bb1b5208122046df3d6ee51383aa62cef31707be16b93f24f729f58b2c->enter($__internal_919a97bb1b5208122046df3d6ee51383aa62cef31707be16b93f24f729f58b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_484c572097a9fbcf8ab1448f848ba28d7a568af814ea98e9869e045208bcee20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484c572097a9fbcf8ab1448f848ba28d7a568af814ea98e9869e045208bcee20->enter($__internal_484c572097a9fbcf8ab1448f848ba28d7a568af814ea98e9869e045208bcee20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_919a97bb1b5208122046df3d6ee51383aa62cef31707be16b93f24f729f58b2c->leave($__internal_919a97bb1b5208122046df3d6ee51383aa62cef31707be16b93f24f729f58b2c_prof);

        
        $__internal_484c572097a9fbcf8ab1448f848ba28d7a568af814ea98e9869e045208bcee20->leave($__internal_484c572097a9fbcf8ab1448f848ba28d7a568af814ea98e9869e045208bcee20_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4ff1f463691449c9b644ad28dece39f1566e83a536ea814fb402280d33299c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ff1f463691449c9b644ad28dece39f1566e83a536ea814fb402280d33299c0->enter($__internal_d4ff1f463691449c9b644ad28dece39f1566e83a536ea814fb402280d33299c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b7398702a091db9832a2d3a9d80f245779b1833b87e1cbb7018f640149aba2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7398702a091db9832a2d3a9d80f245779b1833b87e1cbb7018f640149aba2c9->enter($__internal_b7398702a091db9832a2d3a9d80f245779b1833b87e1cbb7018f640149aba2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b7398702a091db9832a2d3a9d80f245779b1833b87e1cbb7018f640149aba2c9->leave($__internal_b7398702a091db9832a2d3a9d80f245779b1833b87e1cbb7018f640149aba2c9_prof);

        
        $__internal_d4ff1f463691449c9b644ad28dece39f1566e83a536ea814fb402280d33299c0->leave($__internal_d4ff1f463691449c9b644ad28dece39f1566e83a536ea814fb402280d33299c0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3bd7117085996a829bcfd62e37bdb7851882c7a385350f4d73c8bd67aa64f112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd7117085996a829bcfd62e37bdb7851882c7a385350f4d73c8bd67aa64f112->enter($__internal_3bd7117085996a829bcfd62e37bdb7851882c7a385350f4d73c8bd67aa64f112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_546d94018d7523ab4f0370f2dfea077e1a1a6d963a262636e6ea97880290007d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546d94018d7523ab4f0370f2dfea077e1a1a6d963a262636e6ea97880290007d->enter($__internal_546d94018d7523ab4f0370f2dfea077e1a1a6d963a262636e6ea97880290007d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_546d94018d7523ab4f0370f2dfea077e1a1a6d963a262636e6ea97880290007d->leave($__internal_546d94018d7523ab4f0370f2dfea077e1a1a6d963a262636e6ea97880290007d_prof);

        
        $__internal_3bd7117085996a829bcfd62e37bdb7851882c7a385350f4d73c8bd67aa64f112->leave($__internal_3bd7117085996a829bcfd62e37bdb7851882c7a385350f4d73c8bd67aa64f112_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_35d6988a706853b2e52b7728a0a8d51d6745b872dcc5f83d1981d420252892a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35d6988a706853b2e52b7728a0a8d51d6745b872dcc5f83d1981d420252892a1->enter($__internal_35d6988a706853b2e52b7728a0a8d51d6745b872dcc5f83d1981d420252892a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5638e3636242ea1da3d2a4ab4cff4f69e259df8e1a7fc6a29f65f370116697a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5638e3636242ea1da3d2a4ab4cff4f69e259df8e1a7fc6a29f65f370116697a4->enter($__internal_5638e3636242ea1da3d2a4ab4cff4f69e259df8e1a7fc6a29f65f370116697a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5638e3636242ea1da3d2a4ab4cff4f69e259df8e1a7fc6a29f65f370116697a4->leave($__internal_5638e3636242ea1da3d2a4ab4cff4f69e259df8e1a7fc6a29f65f370116697a4_prof);

        
        $__internal_35d6988a706853b2e52b7728a0a8d51d6745b872dcc5f83d1981d420252892a1->leave($__internal_35d6988a706853b2e52b7728a0a8d51d6745b872dcc5f83d1981d420252892a1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9488afa77acb8d204bf2fdc26a73ea80dc89c0f61ed31df5fd077bf0d5bb4e21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9488afa77acb8d204bf2fdc26a73ea80dc89c0f61ed31df5fd077bf0d5bb4e21->enter($__internal_9488afa77acb8d204bf2fdc26a73ea80dc89c0f61ed31df5fd077bf0d5bb4e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fc9c6457d751edf43c58f9c1bbfa4eeed2c2007cfb581ba5de9748d6a2b8fe09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9c6457d751edf43c58f9c1bbfa4eeed2c2007cfb581ba5de9748d6a2b8fe09->enter($__internal_fc9c6457d751edf43c58f9c1bbfa4eeed2c2007cfb581ba5de9748d6a2b8fe09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fc9c6457d751edf43c58f9c1bbfa4eeed2c2007cfb581ba5de9748d6a2b8fe09->leave($__internal_fc9c6457d751edf43c58f9c1bbfa4eeed2c2007cfb581ba5de9748d6a2b8fe09_prof);

        
        $__internal_9488afa77acb8d204bf2fdc26a73ea80dc89c0f61ed31df5fd077bf0d5bb4e21->leave($__internal_9488afa77acb8d204bf2fdc26a73ea80dc89c0f61ed31df5fd077bf0d5bb4e21_prof);

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
", "base.html.twig", "/var/www/html/etransport/app/Resources/views/base.html.twig");
    }
}
