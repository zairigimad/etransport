<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_7ee7a59187f80fe52ced68e1e0558e26758e2067761723a56ff55067bbe94b3b extends Twig_Template
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
        $__internal_ae4cd6a3800a1918d44919fda389019c3d39dd669060900edaaa72f18ed4d750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4cd6a3800a1918d44919fda389019c3d39dd669060900edaaa72f18ed4d750->enter($__internal_ae4cd6a3800a1918d44919fda389019c3d39dd669060900edaaa72f18ed4d750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_0f0dc0aa1e73e13d05282a48bb2e6a15ac8173adb2a521da0103630fceaa56aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0dc0aa1e73e13d05282a48bb2e6a15ac8173adb2a521da0103630fceaa56aa->enter($__internal_0f0dc0aa1e73e13d05282a48bb2e6a15ac8173adb2a521da0103630fceaa56aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_ae4cd6a3800a1918d44919fda389019c3d39dd669060900edaaa72f18ed4d750->leave($__internal_ae4cd6a3800a1918d44919fda389019c3d39dd669060900edaaa72f18ed4d750_prof);

        
        $__internal_0f0dc0aa1e73e13d05282a48bb2e6a15ac8173adb2a521da0103630fceaa56aa->leave($__internal_0f0dc0aa1e73e13d05282a48bb2e6a15ac8173adb2a521da0103630fceaa56aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/etransport/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
