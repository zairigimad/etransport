<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_b26a93ccff0df50f44d42875e0dfa282a70a13bf08161143fd9e9e25cf177666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_5ff6386065ce92ccfb26bd844389e420a9efff1df788c472e4aee7a4ebc1c3c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff6386065ce92ccfb26bd844389e420a9efff1df788c472e4aee7a4ebc1c3c0->enter($__internal_5ff6386065ce92ccfb26bd844389e420a9efff1df788c472e4aee7a4ebc1c3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_644bd474628bdd6f04ed28f7c0a2c3f8ae60e77733ca82a7ad9de3f6ef2d1ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644bd474628bdd6f04ed28f7c0a2c3f8ae60e77733ca82a7ad9de3f6ef2d1ea3->enter($__internal_644bd474628bdd6f04ed28f7c0a2c3f8ae60e77733ca82a7ad9de3f6ef2d1ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ff6386065ce92ccfb26bd844389e420a9efff1df788c472e4aee7a4ebc1c3c0->leave($__internal_5ff6386065ce92ccfb26bd844389e420a9efff1df788c472e4aee7a4ebc1c3c0_prof);

        
        $__internal_644bd474628bdd6f04ed28f7c0a2c3f8ae60e77733ca82a7ad9de3f6ef2d1ea3->leave($__internal_644bd474628bdd6f04ed28f7c0a2c3f8ae60e77733ca82a7ad9de3f6ef2d1ea3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_abc4b6b1661b3394a49f83b129c286aa574955e448f84b08ca511de2a31f6740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abc4b6b1661b3394a49f83b129c286aa574955e448f84b08ca511de2a31f6740->enter($__internal_abc4b6b1661b3394a49f83b129c286aa574955e448f84b08ca511de2a31f6740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4f87048ae7b855039bf0a8f8fca1bfa3aafd1438b81d6efcfa5c894a0d662f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f87048ae7b855039bf0a8f8fca1bfa3aafd1438b81d6efcfa5c894a0d662f62->enter($__internal_4f87048ae7b855039bf0a8f8fca1bfa3aafd1438b81d6efcfa5c894a0d662f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_4f87048ae7b855039bf0a8f8fca1bfa3aafd1438b81d6efcfa5c894a0d662f62->leave($__internal_4f87048ae7b855039bf0a8f8fca1bfa3aafd1438b81d6efcfa5c894a0d662f62_prof);

        
        $__internal_abc4b6b1661b3394a49f83b129c286aa574955e448f84b08ca511de2a31f6740->leave($__internal_abc4b6b1661b3394a49f83b129c286aa574955e448f84b08ca511de2a31f6740_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/var/www/html/etransport/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
