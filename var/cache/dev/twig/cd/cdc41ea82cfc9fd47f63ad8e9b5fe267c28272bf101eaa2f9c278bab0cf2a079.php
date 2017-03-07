<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_12b1ec8521f7a292baa8145d4d219ef29c5ce34aa2a4f82f9095b20fc3a34fe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_4c05ba10b05142bcbb1933166528afb5db5cc2353227762c06744a8af17d4c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c05ba10b05142bcbb1933166528afb5db5cc2353227762c06744a8af17d4c75->enter($__internal_4c05ba10b05142bcbb1933166528afb5db5cc2353227762c06744a8af17d4c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_35cb6e005f6675e21603a1f812dbe14c75f5439be92d7ceb6b8ce631b3132bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35cb6e005f6675e21603a1f812dbe14c75f5439be92d7ceb6b8ce631b3132bc3->enter($__internal_35cb6e005f6675e21603a1f812dbe14c75f5439be92d7ceb6b8ce631b3132bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c05ba10b05142bcbb1933166528afb5db5cc2353227762c06744a8af17d4c75->leave($__internal_4c05ba10b05142bcbb1933166528afb5db5cc2353227762c06744a8af17d4c75_prof);

        
        $__internal_35cb6e005f6675e21603a1f812dbe14c75f5439be92d7ceb6b8ce631b3132bc3->leave($__internal_35cb6e005f6675e21603a1f812dbe14c75f5439be92d7ceb6b8ce631b3132bc3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_159617e42da3e13d24fac1b5ac3b5040cd09ed56d56077a5397aaaf684c67cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159617e42da3e13d24fac1b5ac3b5040cd09ed56d56077a5397aaaf684c67cfa->enter($__internal_159617e42da3e13d24fac1b5ac3b5040cd09ed56d56077a5397aaaf684c67cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_48b975fed3b508bd9157c62b7b5932cc482df672f28d813b2b53957e7939981c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b975fed3b508bd9157c62b7b5932cc482df672f28d813b2b53957e7939981c->enter($__internal_48b975fed3b508bd9157c62b7b5932cc482df672f28d813b2b53957e7939981c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_48b975fed3b508bd9157c62b7b5932cc482df672f28d813b2b53957e7939981c->leave($__internal_48b975fed3b508bd9157c62b7b5932cc482df672f28d813b2b53957e7939981c_prof);

        
        $__internal_159617e42da3e13d24fac1b5ac3b5040cd09ed56d56077a5397aaaf684c67cfa->leave($__internal_159617e42da3e13d24fac1b5ac3b5040cd09ed56d56077a5397aaaf684c67cfa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/etransport/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
