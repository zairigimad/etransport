<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_df6ef756d4371ab09de227ee14dff86c21e1115931618690ad5925995aada5cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b9f53805457562d4bba84be20bc0b51529b2825c0acfdc0f0636a6bab097e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9f53805457562d4bba84be20bc0b51529b2825c0acfdc0f0636a6bab097e0e->enter($__internal_8b9f53805457562d4bba84be20bc0b51529b2825c0acfdc0f0636a6bab097e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d2d78c7faf50255667579d5430a266af15b7b08e7b46489de19c2ca6a673fae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d78c7faf50255667579d5430a266af15b7b08e7b46489de19c2ca6a673fae5->enter($__internal_d2d78c7faf50255667579d5430a266af15b7b08e7b46489de19c2ca6a673fae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b9f53805457562d4bba84be20bc0b51529b2825c0acfdc0f0636a6bab097e0e->leave($__internal_8b9f53805457562d4bba84be20bc0b51529b2825c0acfdc0f0636a6bab097e0e_prof);

        
        $__internal_d2d78c7faf50255667579d5430a266af15b7b08e7b46489de19c2ca6a673fae5->leave($__internal_d2d78c7faf50255667579d5430a266af15b7b08e7b46489de19c2ca6a673fae5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_38a3cc837fdb4d576cbf538c1b9713dffaa4a72644ab80d30eb2b4c943496ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a3cc837fdb4d576cbf538c1b9713dffaa4a72644ab80d30eb2b4c943496ac1->enter($__internal_38a3cc837fdb4d576cbf538c1b9713dffaa4a72644ab80d30eb2b4c943496ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5c3be0078eee89a17c69c1d1980e5d5e6ebe37f38fe857493fc11ef7c606bec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3be0078eee89a17c69c1d1980e5d5e6ebe37f38fe857493fc11ef7c606bec9->enter($__internal_5c3be0078eee89a17c69c1d1980e5d5e6ebe37f38fe857493fc11ef7c606bec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5c3be0078eee89a17c69c1d1980e5d5e6ebe37f38fe857493fc11ef7c606bec9->leave($__internal_5c3be0078eee89a17c69c1d1980e5d5e6ebe37f38fe857493fc11ef7c606bec9_prof);

        
        $__internal_38a3cc837fdb4d576cbf538c1b9713dffaa4a72644ab80d30eb2b4c943496ac1->leave($__internal_38a3cc837fdb4d576cbf538c1b9713dffaa4a72644ab80d30eb2b4c943496ac1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6d8ea744a0561eb7287126f8a3fdf81bb1ef49ec5832b47ae891d3327896b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d8ea744a0561eb7287126f8a3fdf81bb1ef49ec5832b47ae891d3327896b3b->enter($__internal_e6d8ea744a0561eb7287126f8a3fdf81bb1ef49ec5832b47ae891d3327896b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0d831a12c6b7716d8cf62bdbccf039184990053e89f50ebcb302ffad1b248e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d831a12c6b7716d8cf62bdbccf039184990053e89f50ebcb302ffad1b248e1e->enter($__internal_0d831a12c6b7716d8cf62bdbccf039184990053e89f50ebcb302ffad1b248e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0d831a12c6b7716d8cf62bdbccf039184990053e89f50ebcb302ffad1b248e1e->leave($__internal_0d831a12c6b7716d8cf62bdbccf039184990053e89f50ebcb302ffad1b248e1e_prof);

        
        $__internal_e6d8ea744a0561eb7287126f8a3fdf81bb1ef49ec5832b47ae891d3327896b3b->leave($__internal_e6d8ea744a0561eb7287126f8a3fdf81bb1ef49ec5832b47ae891d3327896b3b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_92a765c795ee37ffc2cc77df1db50c10b3be468d2193898cfb8e466944d0e5a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a765c795ee37ffc2cc77df1db50c10b3be468d2193898cfb8e466944d0e5a3->enter($__internal_92a765c795ee37ffc2cc77df1db50c10b3be468d2193898cfb8e466944d0e5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e4860726efe1189b6df1913451e79793682600c9f29f112c514a5dfbb08c491f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4860726efe1189b6df1913451e79793682600c9f29f112c514a5dfbb08c491f->enter($__internal_e4860726efe1189b6df1913451e79793682600c9f29f112c514a5dfbb08c491f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e4860726efe1189b6df1913451e79793682600c9f29f112c514a5dfbb08c491f->leave($__internal_e4860726efe1189b6df1913451e79793682600c9f29f112c514a5dfbb08c491f_prof);

        
        $__internal_92a765c795ee37ffc2cc77df1db50c10b3be468d2193898cfb8e466944d0e5a3->leave($__internal_92a765c795ee37ffc2cc77df1db50c10b3be468d2193898cfb8e466944d0e5a3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/etransport/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
