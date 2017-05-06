<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_3cbca68650962344d6342217161a564a781656f503649e8252d10671110cce66 extends Twig_Template
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
        $__internal_d12851b5e5f5587395ce238121190de00a7e84a3623196fe862fbaec5ac04411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d12851b5e5f5587395ce238121190de00a7e84a3623196fe862fbaec5ac04411->enter($__internal_d12851b5e5f5587395ce238121190de00a7e84a3623196fe862fbaec5ac04411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_f41f7481daee37bb72ae25a6fd5f68555fecd67d6866b8cd6502bd0719a62223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41f7481daee37bb72ae25a6fd5f68555fecd67d6866b8cd6502bd0719a62223->enter($__internal_f41f7481daee37bb72ae25a6fd5f68555fecd67d6866b8cd6502bd0719a62223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d12851b5e5f5587395ce238121190de00a7e84a3623196fe862fbaec5ac04411->leave($__internal_d12851b5e5f5587395ce238121190de00a7e84a3623196fe862fbaec5ac04411_prof);

        
        $__internal_f41f7481daee37bb72ae25a6fd5f68555fecd67d6866b8cd6502bd0719a62223->leave($__internal_f41f7481daee37bb72ae25a6fd5f68555fecd67d6866b8cd6502bd0719a62223_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b31b083506c8e5a151738893186188257eabc0219fb2852ef3066a5fa8f9ac6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31b083506c8e5a151738893186188257eabc0219fb2852ef3066a5fa8f9ac6c->enter($__internal_b31b083506c8e5a151738893186188257eabc0219fb2852ef3066a5fa8f9ac6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ccc31340255740bf951fc697e51cfe9915997a5f02d6ecddd85e8a8bd933b024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc31340255740bf951fc697e51cfe9915997a5f02d6ecddd85e8a8bd933b024->enter($__internal_ccc31340255740bf951fc697e51cfe9915997a5f02d6ecddd85e8a8bd933b024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_ccc31340255740bf951fc697e51cfe9915997a5f02d6ecddd85e8a8bd933b024->leave($__internal_ccc31340255740bf951fc697e51cfe9915997a5f02d6ecddd85e8a8bd933b024_prof);

        
        $__internal_b31b083506c8e5a151738893186188257eabc0219fb2852ef3066a5fa8f9ac6c->leave($__internal_b31b083506c8e5a151738893186188257eabc0219fb2852ef3066a5fa8f9ac6c_prof);

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
", "@FOSUser/Security/login.html.twig", "/home/gianni/workspace/itworks/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
