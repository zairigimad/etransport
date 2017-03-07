<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_721442e8a1af1b789fab075c839f2eb52c795b600462fbbe96c9c0e0507e7a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_06662ce84a979d2f8061288e65c852a8351dccf8bb73ba1ba69171b0b7632f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06662ce84a979d2f8061288e65c852a8351dccf8bb73ba1ba69171b0b7632f3e->enter($__internal_06662ce84a979d2f8061288e65c852a8351dccf8bb73ba1ba69171b0b7632f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_216c0d34bde2a7fccde4d0ca220c738fe767850f2acf40c6b523ecf1fc9e139b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216c0d34bde2a7fccde4d0ca220c738fe767850f2acf40c6b523ecf1fc9e139b->enter($__internal_216c0d34bde2a7fccde4d0ca220c738fe767850f2acf40c6b523ecf1fc9e139b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06662ce84a979d2f8061288e65c852a8351dccf8bb73ba1ba69171b0b7632f3e->leave($__internal_06662ce84a979d2f8061288e65c852a8351dccf8bb73ba1ba69171b0b7632f3e_prof);

        
        $__internal_216c0d34bde2a7fccde4d0ca220c738fe767850f2acf40c6b523ecf1fc9e139b->leave($__internal_216c0d34bde2a7fccde4d0ca220c738fe767850f2acf40c6b523ecf1fc9e139b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77011141cea5bf3c1da50786fcf7af538261c4fc6b212506ccc603e50fd5fbb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77011141cea5bf3c1da50786fcf7af538261c4fc6b212506ccc603e50fd5fbb6->enter($__internal_77011141cea5bf3c1da50786fcf7af538261c4fc6b212506ccc603e50fd5fbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_570c85454a36c10310ccdad03681a470130345bc3d5214dc261dac523bb3476e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570c85454a36c10310ccdad03681a470130345bc3d5214dc261dac523bb3476e->enter($__internal_570c85454a36c10310ccdad03681a470130345bc3d5214dc261dac523bb3476e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_570c85454a36c10310ccdad03681a470130345bc3d5214dc261dac523bb3476e->leave($__internal_570c85454a36c10310ccdad03681a470130345bc3d5214dc261dac523bb3476e_prof);

        
        $__internal_77011141cea5bf3c1da50786fcf7af538261c4fc6b212506ccc603e50fd5fbb6->leave($__internal_77011141cea5bf3c1da50786fcf7af538261c4fc6b212506ccc603e50fd5fbb6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/var/www/html/etransport/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
