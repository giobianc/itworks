<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_925151eeadba9092905198b04551826dda51d7e9ed18c7d71ac5708ed8941120 extends Twig_Template
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
        $__internal_ed382846c9227c1cb99a317689e1e899a7693a9f0dacbd91f49cb160e76786b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed382846c9227c1cb99a317689e1e899a7693a9f0dacbd91f49cb160e76786b8->enter($__internal_ed382846c9227c1cb99a317689e1e899a7693a9f0dacbd91f49cb160e76786b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_c6d05fbb53120950106eeffd8e39fcdd45d48b5a7ee961b68b105e2f981727d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d05fbb53120950106eeffd8e39fcdd45d48b5a7ee961b68b105e2f981727d0->enter($__internal_c6d05fbb53120950106eeffd8e39fcdd45d48b5a7ee961b68b105e2f981727d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed382846c9227c1cb99a317689e1e899a7693a9f0dacbd91f49cb160e76786b8->leave($__internal_ed382846c9227c1cb99a317689e1e899a7693a9f0dacbd91f49cb160e76786b8_prof);

        
        $__internal_c6d05fbb53120950106eeffd8e39fcdd45d48b5a7ee961b68b105e2f981727d0->leave($__internal_c6d05fbb53120950106eeffd8e39fcdd45d48b5a7ee961b68b105e2f981727d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03ccc6cfe8b92d8bc76d3d218f95f92d6a8df9a17aa42fb5dcde16623f824a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ccc6cfe8b92d8bc76d3d218f95f92d6a8df9a17aa42fb5dcde16623f824a72->enter($__internal_03ccc6cfe8b92d8bc76d3d218f95f92d6a8df9a17aa42fb5dcde16623f824a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_edfe81e602e56e0ff5a7cd71400f6c75de65e85b88de9a266312b4281face7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edfe81e602e56e0ff5a7cd71400f6c75de65e85b88de9a266312b4281face7d0->enter($__internal_edfe81e602e56e0ff5a7cd71400f6c75de65e85b88de9a266312b4281face7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_edfe81e602e56e0ff5a7cd71400f6c75de65e85b88de9a266312b4281face7d0->leave($__internal_edfe81e602e56e0ff5a7cd71400f6c75de65e85b88de9a266312b4281face7d0_prof);

        
        $__internal_03ccc6cfe8b92d8bc76d3d218f95f92d6a8df9a17aa42fb5dcde16623f824a72->leave($__internal_03ccc6cfe8b92d8bc76d3d218f95f92d6a8df9a17aa42fb5dcde16623f824a72_prof);

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
", "@FOSUser/Profile/show.html.twig", "/home/gianni/workspace/itworks/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
