<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_64fc518baba260a492ff403709233a7dc0db08bcc77cb24d90c964d1a1699517 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_7ac7bf9cb0e222809c9ca976ec99169f7141033e3f254b6ee47b00ffb88baa18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac7bf9cb0e222809c9ca976ec99169f7141033e3f254b6ee47b00ffb88baa18->enter($__internal_7ac7bf9cb0e222809c9ca976ec99169f7141033e3f254b6ee47b00ffb88baa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_aa9c71a60fa9ac2b1acfbd47f901815f14dce3536562769474a0ffb421380997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9c71a60fa9ac2b1acfbd47f901815f14dce3536562769474a0ffb421380997->enter($__internal_aa9c71a60fa9ac2b1acfbd47f901815f14dce3536562769474a0ffb421380997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ac7bf9cb0e222809c9ca976ec99169f7141033e3f254b6ee47b00ffb88baa18->leave($__internal_7ac7bf9cb0e222809c9ca976ec99169f7141033e3f254b6ee47b00ffb88baa18_prof);

        
        $__internal_aa9c71a60fa9ac2b1acfbd47f901815f14dce3536562769474a0ffb421380997->leave($__internal_aa9c71a60fa9ac2b1acfbd47f901815f14dce3536562769474a0ffb421380997_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61a10464baccf487a779fe2a6947b73aada2eaddddcf65718228fc51e38ae84f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a10464baccf487a779fe2a6947b73aada2eaddddcf65718228fc51e38ae84f->enter($__internal_61a10464baccf487a779fe2a6947b73aada2eaddddcf65718228fc51e38ae84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a31a901069b4065d76a53a3700b3683384769781079147858dc71f9360bd67f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31a901069b4065d76a53a3700b3683384769781079147858dc71f9360bd67f0->enter($__internal_a31a901069b4065d76a53a3700b3683384769781079147858dc71f9360bd67f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a31a901069b4065d76a53a3700b3683384769781079147858dc71f9360bd67f0->leave($__internal_a31a901069b4065d76a53a3700b3683384769781079147858dc71f9360bd67f0_prof);

        
        $__internal_61a10464baccf487a779fe2a6947b73aada2eaddddcf65718228fc51e38ae84f->leave($__internal_61a10464baccf487a779fe2a6947b73aada2eaddddcf65718228fc51e38ae84f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/gianni/workspace/itworks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
