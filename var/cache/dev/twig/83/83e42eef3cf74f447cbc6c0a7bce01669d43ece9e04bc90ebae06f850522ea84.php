<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_232c0d6a8e76b934aa78f12343af1e72a560d38f05385c438eb29092e3925804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be10b76d55e81968107816d9de10b914854f3d954418edb1b4adc22da8238b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be10b76d55e81968107816d9de10b914854f3d954418edb1b4adc22da8238b63->enter($__internal_be10b76d55e81968107816d9de10b914854f3d954418edb1b4adc22da8238b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c9c91fe35ece8c582f6d46a7d620c4ddf962a2c0b055e495966bdfe358c604e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c91fe35ece8c582f6d46a7d620c4ddf962a2c0b055e495966bdfe358c604e3->enter($__internal_c9c91fe35ece8c582f6d46a7d620c4ddf962a2c0b055e495966bdfe358c604e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be10b76d55e81968107816d9de10b914854f3d954418edb1b4adc22da8238b63->leave($__internal_be10b76d55e81968107816d9de10b914854f3d954418edb1b4adc22da8238b63_prof);

        
        $__internal_c9c91fe35ece8c582f6d46a7d620c4ddf962a2c0b055e495966bdfe358c604e3->leave($__internal_c9c91fe35ece8c582f6d46a7d620c4ddf962a2c0b055e495966bdfe358c604e3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_638810e9a05ea08ddd81b28203bc164de0ebb68f3912e8125a3cf2543ae90283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638810e9a05ea08ddd81b28203bc164de0ebb68f3912e8125a3cf2543ae90283->enter($__internal_638810e9a05ea08ddd81b28203bc164de0ebb68f3912e8125a3cf2543ae90283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7167129bb798ed1d20ee6158aadf3bc1da65128ca19353bb2208874d3a817f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7167129bb798ed1d20ee6158aadf3bc1da65128ca19353bb2208874d3a817f6f->enter($__internal_7167129bb798ed1d20ee6158aadf3bc1da65128ca19353bb2208874d3a817f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7167129bb798ed1d20ee6158aadf3bc1da65128ca19353bb2208874d3a817f6f->leave($__internal_7167129bb798ed1d20ee6158aadf3bc1da65128ca19353bb2208874d3a817f6f_prof);

        
        $__internal_638810e9a05ea08ddd81b28203bc164de0ebb68f3912e8125a3cf2543ae90283->leave($__internal_638810e9a05ea08ddd81b28203bc164de0ebb68f3912e8125a3cf2543ae90283_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b661d7c04a40a88fd38a539a78ffcfc28531a60f5d4ff44ed276e6a6c81d260e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b661d7c04a40a88fd38a539a78ffcfc28531a60f5d4ff44ed276e6a6c81d260e->enter($__internal_b661d7c04a40a88fd38a539a78ffcfc28531a60f5d4ff44ed276e6a6c81d260e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae03d433ad84059790b022ac69849c84695271361ddc0679e814e248c46de248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae03d433ad84059790b022ac69849c84695271361ddc0679e814e248c46de248->enter($__internal_ae03d433ad84059790b022ac69849c84695271361ddc0679e814e248c46de248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ae03d433ad84059790b022ac69849c84695271361ddc0679e814e248c46de248->leave($__internal_ae03d433ad84059790b022ac69849c84695271361ddc0679e814e248c46de248_prof);

        
        $__internal_b661d7c04a40a88fd38a539a78ffcfc28531a60f5d4ff44ed276e6a6c81d260e->leave($__internal_b661d7c04a40a88fd38a539a78ffcfc28531a60f5d4ff44ed276e6a6c81d260e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_140082f7dbb4e92af09e48b46b395f123551308ef7072797cb93d6d7f383b85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140082f7dbb4e92af09e48b46b395f123551308ef7072797cb93d6d7f383b85d->enter($__internal_140082f7dbb4e92af09e48b46b395f123551308ef7072797cb93d6d7f383b85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aaff18e70c1773f15e6fb06bd916e9b630afe38b0700cadef8c774464e33817b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaff18e70c1773f15e6fb06bd916e9b630afe38b0700cadef8c774464e33817b->enter($__internal_aaff18e70c1773f15e6fb06bd916e9b630afe38b0700cadef8c774464e33817b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_aaff18e70c1773f15e6fb06bd916e9b630afe38b0700cadef8c774464e33817b->leave($__internal_aaff18e70c1773f15e6fb06bd916e9b630afe38b0700cadef8c774464e33817b_prof);

        
        $__internal_140082f7dbb4e92af09e48b46b395f123551308ef7072797cb93d6d7f383b85d->leave($__internal_140082f7dbb4e92af09e48b46b395f123551308ef7072797cb93d6d7f383b85d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/etransport/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
