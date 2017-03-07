<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3e6417b6593cf1eef069436d54f8bc7b0af0fca7c9fac43236fab5d391c6d37c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_622b4e5825ac5e297574f23d747ce984dce58be6abc1e909a9e8b5fd280ed827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_622b4e5825ac5e297574f23d747ce984dce58be6abc1e909a9e8b5fd280ed827->enter($__internal_622b4e5825ac5e297574f23d747ce984dce58be6abc1e909a9e8b5fd280ed827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_12508bf85613acb7715a9f269d123a6352d43e5d4343c3ccff979228c7acfc90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12508bf85613acb7715a9f269d123a6352d43e5d4343c3ccff979228c7acfc90->enter($__internal_12508bf85613acb7715a9f269d123a6352d43e5d4343c3ccff979228c7acfc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_622b4e5825ac5e297574f23d747ce984dce58be6abc1e909a9e8b5fd280ed827->leave($__internal_622b4e5825ac5e297574f23d747ce984dce58be6abc1e909a9e8b5fd280ed827_prof);

        
        $__internal_12508bf85613acb7715a9f269d123a6352d43e5d4343c3ccff979228c7acfc90->leave($__internal_12508bf85613acb7715a9f269d123a6352d43e5d4343c3ccff979228c7acfc90_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67b9ea213eb4618ffee5197efa5b52d40b159ef2c5af574b2c33bbe2574c9c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b9ea213eb4618ffee5197efa5b52d40b159ef2c5af574b2c33bbe2574c9c6e->enter($__internal_67b9ea213eb4618ffee5197efa5b52d40b159ef2c5af574b2c33bbe2574c9c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_433011c6d1402021058c1b042eb8bc3cc0cbcbc68a12d201c3089a9d2a1e2709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433011c6d1402021058c1b042eb8bc3cc0cbcbc68a12d201c3089a9d2a1e2709->enter($__internal_433011c6d1402021058c1b042eb8bc3cc0cbcbc68a12d201c3089a9d2a1e2709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_433011c6d1402021058c1b042eb8bc3cc0cbcbc68a12d201c3089a9d2a1e2709->leave($__internal_433011c6d1402021058c1b042eb8bc3cc0cbcbc68a12d201c3089a9d2a1e2709_prof);

        
        $__internal_67b9ea213eb4618ffee5197efa5b52d40b159ef2c5af574b2c33bbe2574c9c6e->leave($__internal_67b9ea213eb4618ffee5197efa5b52d40b159ef2c5af574b2c33bbe2574c9c6e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8060cd827c65ca0a3038fe4da816984aa0a9f01dcd68c10f1d8e40a53c90325d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8060cd827c65ca0a3038fe4da816984aa0a9f01dcd68c10f1d8e40a53c90325d->enter($__internal_8060cd827c65ca0a3038fe4da816984aa0a9f01dcd68c10f1d8e40a53c90325d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3db5176f2c3a24fc379a0c28b3a5242bf034185a95e8546083c209b7e1065c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db5176f2c3a24fc379a0c28b3a5242bf034185a95e8546083c209b7e1065c23->enter($__internal_3db5176f2c3a24fc379a0c28b3a5242bf034185a95e8546083c209b7e1065c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3db5176f2c3a24fc379a0c28b3a5242bf034185a95e8546083c209b7e1065c23->leave($__internal_3db5176f2c3a24fc379a0c28b3a5242bf034185a95e8546083c209b7e1065c23_prof);

        
        $__internal_8060cd827c65ca0a3038fe4da816984aa0a9f01dcd68c10f1d8e40a53c90325d->leave($__internal_8060cd827c65ca0a3038fe4da816984aa0a9f01dcd68c10f1d8e40a53c90325d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce13aca2802f0568525b6f4ba2074d7fbba0d4acf41415d9999e5c1b6c32c99c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce13aca2802f0568525b6f4ba2074d7fbba0d4acf41415d9999e5c1b6c32c99c->enter($__internal_ce13aca2802f0568525b6f4ba2074d7fbba0d4acf41415d9999e5c1b6c32c99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5e023b9fc79db52ec7c4f25af073fb8da1e45864f3f78bf6494a447c61e30a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e023b9fc79db52ec7c4f25af073fb8da1e45864f3f78bf6494a447c61e30a80->enter($__internal_5e023b9fc79db52ec7c4f25af073fb8da1e45864f3f78bf6494a447c61e30a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5e023b9fc79db52ec7c4f25af073fb8da1e45864f3f78bf6494a447c61e30a80->leave($__internal_5e023b9fc79db52ec7c4f25af073fb8da1e45864f3f78bf6494a447c61e30a80_prof);

        
        $__internal_ce13aca2802f0568525b6f4ba2074d7fbba0d4acf41415d9999e5c1b6c32c99c->leave($__internal_ce13aca2802f0568525b6f4ba2074d7fbba0d4acf41415d9999e5c1b6c32c99c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/etransport/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
