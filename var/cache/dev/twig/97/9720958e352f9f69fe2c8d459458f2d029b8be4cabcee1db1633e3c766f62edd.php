<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d7e6cce490cf57ea2009fe76aa05ae8cfdb5dae41cedf16f66f00ec05608b804 extends Twig_Template
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
        $__internal_b9b61551852cb692c14b0a3ff6598472169a323279d062fc86d02ad36e474224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b61551852cb692c14b0a3ff6598472169a323279d062fc86d02ad36e474224->enter($__internal_b9b61551852cb692c14b0a3ff6598472169a323279d062fc86d02ad36e474224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b350390abe96b4434e95f731209a2d99b0d5cf5bc144d98ba08446871f7dc209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b350390abe96b4434e95f731209a2d99b0d5cf5bc144d98ba08446871f7dc209->enter($__internal_b350390abe96b4434e95f731209a2d99b0d5cf5bc144d98ba08446871f7dc209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9b61551852cb692c14b0a3ff6598472169a323279d062fc86d02ad36e474224->leave($__internal_b9b61551852cb692c14b0a3ff6598472169a323279d062fc86d02ad36e474224_prof);

        
        $__internal_b350390abe96b4434e95f731209a2d99b0d5cf5bc144d98ba08446871f7dc209->leave($__internal_b350390abe96b4434e95f731209a2d99b0d5cf5bc144d98ba08446871f7dc209_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b43b041f31e9ef83c6ac93bbc2796c081217c9367bac8a030336612daf0d7845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b43b041f31e9ef83c6ac93bbc2796c081217c9367bac8a030336612daf0d7845->enter($__internal_b43b041f31e9ef83c6ac93bbc2796c081217c9367bac8a030336612daf0d7845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7044ab686448dc60c4e9f137e062e7302c053d3ba6448b74c9fa138418581e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7044ab686448dc60c4e9f137e062e7302c053d3ba6448b74c9fa138418581e46->enter($__internal_7044ab686448dc60c4e9f137e062e7302c053d3ba6448b74c9fa138418581e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7044ab686448dc60c4e9f137e062e7302c053d3ba6448b74c9fa138418581e46->leave($__internal_7044ab686448dc60c4e9f137e062e7302c053d3ba6448b74c9fa138418581e46_prof);

        
        $__internal_b43b041f31e9ef83c6ac93bbc2796c081217c9367bac8a030336612daf0d7845->leave($__internal_b43b041f31e9ef83c6ac93bbc2796c081217c9367bac8a030336612daf0d7845_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4cdf5d67615f2fc554ce694a147ba0fcc25cc97f876edb47c22623881d092674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cdf5d67615f2fc554ce694a147ba0fcc25cc97f876edb47c22623881d092674->enter($__internal_4cdf5d67615f2fc554ce694a147ba0fcc25cc97f876edb47c22623881d092674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0805756dcdf716cf7ef0bae1b6251994364cdbcc69671b6875e1e0abf7da8e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0805756dcdf716cf7ef0bae1b6251994364cdbcc69671b6875e1e0abf7da8e8f->enter($__internal_0805756dcdf716cf7ef0bae1b6251994364cdbcc69671b6875e1e0abf7da8e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0805756dcdf716cf7ef0bae1b6251994364cdbcc69671b6875e1e0abf7da8e8f->leave($__internal_0805756dcdf716cf7ef0bae1b6251994364cdbcc69671b6875e1e0abf7da8e8f_prof);

        
        $__internal_4cdf5d67615f2fc554ce694a147ba0fcc25cc97f876edb47c22623881d092674->leave($__internal_4cdf5d67615f2fc554ce694a147ba0fcc25cc97f876edb47c22623881d092674_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c1a81aac8b368f6ef28d20297e6cea443443046e80477e922ee4cf6e25781d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1a81aac8b368f6ef28d20297e6cea443443046e80477e922ee4cf6e25781d1->enter($__internal_1c1a81aac8b368f6ef28d20297e6cea443443046e80477e922ee4cf6e25781d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d38d03eb1ae2a90bc0df3e8ddfa2a3a1fecfc5ab32001b0ad68c48e1821497dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38d03eb1ae2a90bc0df3e8ddfa2a3a1fecfc5ab32001b0ad68c48e1821497dd->enter($__internal_d38d03eb1ae2a90bc0df3e8ddfa2a3a1fecfc5ab32001b0ad68c48e1821497dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d38d03eb1ae2a90bc0df3e8ddfa2a3a1fecfc5ab32001b0ad68c48e1821497dd->leave($__internal_d38d03eb1ae2a90bc0df3e8ddfa2a3a1fecfc5ab32001b0ad68c48e1821497dd_prof);

        
        $__internal_1c1a81aac8b368f6ef28d20297e6cea443443046e80477e922ee4cf6e25781d1->leave($__internal_1c1a81aac8b368f6ef28d20297e6cea443443046e80477e922ee4cf6e25781d1_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/gianni/workspace/itworks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
