<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_6495c086ace3f47c0efcf0f80b4c020135f66ff53c1d3301c0be4a94e5eb47b1 extends Twig_Template
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
        $__internal_6cfd62d44988263b44fa9b99d88a4d1472ded2b67559fb91151f84187bd1cf8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cfd62d44988263b44fa9b99d88a4d1472ded2b67559fb91151f84187bd1cf8b->enter($__internal_6cfd62d44988263b44fa9b99d88a4d1472ded2b67559fb91151f84187bd1cf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_9640f25c4673c3d40c230394cab2fecb8c59a0dff2b10da29bb94bb3d7aaeb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9640f25c4673c3d40c230394cab2fecb8c59a0dff2b10da29bb94bb3d7aaeb3c->enter($__internal_9640f25c4673c3d40c230394cab2fecb8c59a0dff2b10da29bb94bb3d7aaeb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_6cfd62d44988263b44fa9b99d88a4d1472ded2b67559fb91151f84187bd1cf8b->leave($__internal_6cfd62d44988263b44fa9b99d88a4d1472ded2b67559fb91151f84187bd1cf8b_prof);

        
        $__internal_9640f25c4673c3d40c230394cab2fecb8c59a0dff2b10da29bb94bb3d7aaeb3c->leave($__internal_9640f25c4673c3d40c230394cab2fecb8c59a0dff2b10da29bb94bb3d7aaeb3c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/var/www/html/etransport/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
