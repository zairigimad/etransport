<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_fada0b46c75a4fd0e064aa82c3ee0d23283fb0707db73e58b98f56087108653f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a537c2977394ed85496e0e9b12ed045735571c1edf2c7979a39e4886ec7e2d1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a537c2977394ed85496e0e9b12ed045735571c1edf2c7979a39e4886ec7e2d1c->enter($__internal_a537c2977394ed85496e0e9b12ed045735571c1edf2c7979a39e4886ec7e2d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_cf465385b351e36eba48ff39211a3ab3e90102bc63b39508aa98827c8ee4f475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf465385b351e36eba48ff39211a3ab3e90102bc63b39508aa98827c8ee4f475->enter($__internal_cf465385b351e36eba48ff39211a3ab3e90102bc63b39508aa98827c8ee4f475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a537c2977394ed85496e0e9b12ed045735571c1edf2c7979a39e4886ec7e2d1c->leave($__internal_a537c2977394ed85496e0e9b12ed045735571c1edf2c7979a39e4886ec7e2d1c_prof);

        
        $__internal_cf465385b351e36eba48ff39211a3ab3e90102bc63b39508aa98827c8ee4f475->leave($__internal_cf465385b351e36eba48ff39211a3ab3e90102bc63b39508aa98827c8ee4f475_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_561e8b9f38118d125609d589d4491f285c7caf3f9b9df04f84cfe13fd7ce5f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561e8b9f38118d125609d589d4491f285c7caf3f9b9df04f84cfe13fd7ce5f53->enter($__internal_561e8b9f38118d125609d589d4491f285c7caf3f9b9df04f84cfe13fd7ce5f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_00502b62d3a00ceb37a70529a9ab9bc4b6c583e3b65b09973ba28a00ea511e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00502b62d3a00ceb37a70529a9ab9bc4b6c583e3b65b09973ba28a00ea511e9c->enter($__internal_00502b62d3a00ceb37a70529a9ab9bc4b6c583e3b65b09973ba28a00ea511e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_00502b62d3a00ceb37a70529a9ab9bc4b6c583e3b65b09973ba28a00ea511e9c->leave($__internal_00502b62d3a00ceb37a70529a9ab9bc4b6c583e3b65b09973ba28a00ea511e9c_prof);

        
        $__internal_561e8b9f38118d125609d589d4491f285c7caf3f9b9df04f84cfe13fd7ce5f53->leave($__internal_561e8b9f38118d125609d589d4491f285c7caf3f9b9df04f84cfe13fd7ce5f53_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/var/www/html/etransport/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
