<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_6f212118890e141595772dca8e03382276f1a1e2d7794725ed169afe22932057 extends Twig_Template
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
        $__internal_4fb3131418ad86975e31a43850a9b421552d7bda085b8790d7756dfd891e3d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb3131418ad86975e31a43850a9b421552d7bda085b8790d7756dfd891e3d4c->enter($__internal_4fb3131418ad86975e31a43850a9b421552d7bda085b8790d7756dfd891e3d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_607c9e724ee02279771dbc5d4c3d1aba8e184ef3b7d1da6cc7faa7fe771c4eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_607c9e724ee02279771dbc5d4c3d1aba8e184ef3b7d1da6cc7faa7fe771c4eba->enter($__internal_607c9e724ee02279771dbc5d4c3d1aba8e184ef3b7d1da6cc7faa7fe771c4eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_4fb3131418ad86975e31a43850a9b421552d7bda085b8790d7756dfd891e3d4c->leave($__internal_4fb3131418ad86975e31a43850a9b421552d7bda085b8790d7756dfd891e3d4c_prof);

        
        $__internal_607c9e724ee02279771dbc5d4c3d1aba8e184ef3b7d1da6cc7faa7fe771c4eba->leave($__internal_607c9e724ee02279771dbc5d4c3d1aba8e184ef3b7d1da6cc7faa7fe771c4eba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/home/gianni/workspace/itworks/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
