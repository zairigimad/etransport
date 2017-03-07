<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_7d4ec679286e85924392357528b61a098c2a72f982bacc4b7ed974f6047a9f5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_b827ff150999464933569822242242584741f527553ab66e3103d8a015a6eda8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b827ff150999464933569822242242584741f527553ab66e3103d8a015a6eda8->enter($__internal_b827ff150999464933569822242242584741f527553ab66e3103d8a015a6eda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_ee173c2258d35bb4a4e901c6482b42b0acd9f005cbda66a33807c3634b6e2d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee173c2258d35bb4a4e901c6482b42b0acd9f005cbda66a33807c3634b6e2d25->enter($__internal_ee173c2258d35bb4a4e901c6482b42b0acd9f005cbda66a33807c3634b6e2d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b827ff150999464933569822242242584741f527553ab66e3103d8a015a6eda8->leave($__internal_b827ff150999464933569822242242584741f527553ab66e3103d8a015a6eda8_prof);

        
        $__internal_ee173c2258d35bb4a4e901c6482b42b0acd9f005cbda66a33807c3634b6e2d25->leave($__internal_ee173c2258d35bb4a4e901c6482b42b0acd9f005cbda66a33807c3634b6e2d25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb3f51b1ec954b506bbeaf4290c45766cb580461a264af3b5f6aa6c097141bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3f51b1ec954b506bbeaf4290c45766cb580461a264af3b5f6aa6c097141bd5->enter($__internal_fb3f51b1ec954b506bbeaf4290c45766cb580461a264af3b5f6aa6c097141bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_15bd6af8da6bd1d54ca1a588f8d083e66668c62832d9940500c6d5a1a5acf084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15bd6af8da6bd1d54ca1a588f8d083e66668c62832d9940500c6d5a1a5acf084->enter($__internal_15bd6af8da6bd1d54ca1a588f8d083e66668c62832d9940500c6d5a1a5acf084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_15bd6af8da6bd1d54ca1a588f8d083e66668c62832d9940500c6d5a1a5acf084->leave($__internal_15bd6af8da6bd1d54ca1a588f8d083e66668c62832d9940500c6d5a1a5acf084_prof);

        
        $__internal_fb3f51b1ec954b506bbeaf4290c45766cb580461a264af3b5f6aa6c097141bd5->leave($__internal_fb3f51b1ec954b506bbeaf4290c45766cb580461a264af3b5f6aa6c097141bd5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/var/www/html/etransport/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
