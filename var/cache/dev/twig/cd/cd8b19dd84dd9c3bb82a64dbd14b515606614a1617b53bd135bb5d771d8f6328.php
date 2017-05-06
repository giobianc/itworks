<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5e276029df096f60f1d55e16bb79f27bb0e261287257bb8e74c790056fba810 extends Twig_Template
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
        $__internal_c0a9a2711787539101ce3176871aef493c9c59a57501a1f18a7bcba6ceb2a73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a9a2711787539101ce3176871aef493c9c59a57501a1f18a7bcba6ceb2a73a->enter($__internal_c0a9a2711787539101ce3176871aef493c9c59a57501a1f18a7bcba6ceb2a73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cb380f9383f1ae2ff79e91b345e0c596bdbb2f8dd8de49a16adf1fa5b60694d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb380f9383f1ae2ff79e91b345e0c596bdbb2f8dd8de49a16adf1fa5b60694d2->enter($__internal_cb380f9383f1ae2ff79e91b345e0c596bdbb2f8dd8de49a16adf1fa5b60694d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0a9a2711787539101ce3176871aef493c9c59a57501a1f18a7bcba6ceb2a73a->leave($__internal_c0a9a2711787539101ce3176871aef493c9c59a57501a1f18a7bcba6ceb2a73a_prof);

        
        $__internal_cb380f9383f1ae2ff79e91b345e0c596bdbb2f8dd8de49a16adf1fa5b60694d2->leave($__internal_cb380f9383f1ae2ff79e91b345e0c596bdbb2f8dd8de49a16adf1fa5b60694d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4593027d5bbd6dee679b6dee3ee9c444634618d0f9d969a3a741801eb6a6953a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4593027d5bbd6dee679b6dee3ee9c444634618d0f9d969a3a741801eb6a6953a->enter($__internal_4593027d5bbd6dee679b6dee3ee9c444634618d0f9d969a3a741801eb6a6953a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a03acf9305a51ad5f61e886a2263d4ac65b9d24c57b4b00c1d29cce4d93c2935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03acf9305a51ad5f61e886a2263d4ac65b9d24c57b4b00c1d29cce4d93c2935->enter($__internal_a03acf9305a51ad5f61e886a2263d4ac65b9d24c57b4b00c1d29cce4d93c2935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a03acf9305a51ad5f61e886a2263d4ac65b9d24c57b4b00c1d29cce4d93c2935->leave($__internal_a03acf9305a51ad5f61e886a2263d4ac65b9d24c57b4b00c1d29cce4d93c2935_prof);

        
        $__internal_4593027d5bbd6dee679b6dee3ee9c444634618d0f9d969a3a741801eb6a6953a->leave($__internal_4593027d5bbd6dee679b6dee3ee9c444634618d0f9d969a3a741801eb6a6953a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eff0721f078b9d989ca29f30fb01bb5519af12dcf25d01d0b39dd668643152e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff0721f078b9d989ca29f30fb01bb5519af12dcf25d01d0b39dd668643152e2->enter($__internal_eff0721f078b9d989ca29f30fb01bb5519af12dcf25d01d0b39dd668643152e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7509b9bb3f691f8f62036a562555dad6381eb522cd0d5c370ecd584bf5859391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7509b9bb3f691f8f62036a562555dad6381eb522cd0d5c370ecd584bf5859391->enter($__internal_7509b9bb3f691f8f62036a562555dad6381eb522cd0d5c370ecd584bf5859391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7509b9bb3f691f8f62036a562555dad6381eb522cd0d5c370ecd584bf5859391->leave($__internal_7509b9bb3f691f8f62036a562555dad6381eb522cd0d5c370ecd584bf5859391_prof);

        
        $__internal_eff0721f078b9d989ca29f30fb01bb5519af12dcf25d01d0b39dd668643152e2->leave($__internal_eff0721f078b9d989ca29f30fb01bb5519af12dcf25d01d0b39dd668643152e2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b5fdb4c1133da9dcfb45ef7dad70fa6a3543b8cc8f51b8c678721b99548a5a3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5fdb4c1133da9dcfb45ef7dad70fa6a3543b8cc8f51b8c678721b99548a5a3a->enter($__internal_b5fdb4c1133da9dcfb45ef7dad70fa6a3543b8cc8f51b8c678721b99548a5a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5d54a1ec713de92282ec03d6f054926cceb6c87ac34dbcc52c7a1dedcca8e92f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d54a1ec713de92282ec03d6f054926cceb6c87ac34dbcc52c7a1dedcca8e92f->enter($__internal_5d54a1ec713de92282ec03d6f054926cceb6c87ac34dbcc52c7a1dedcca8e92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5d54a1ec713de92282ec03d6f054926cceb6c87ac34dbcc52c7a1dedcca8e92f->leave($__internal_5d54a1ec713de92282ec03d6f054926cceb6c87ac34dbcc52c7a1dedcca8e92f_prof);

        
        $__internal_b5fdb4c1133da9dcfb45ef7dad70fa6a3543b8cc8f51b8c678721b99548a5a3a->leave($__internal_b5fdb4c1133da9dcfb45ef7dad70fa6a3543b8cc8f51b8c678721b99548a5a3a_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/gianni/workspace/itworks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
