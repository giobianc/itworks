<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_095121e0f1fda98908655c0438517b9ad23cb18f9c8db8047038400fdf381fa0 extends Twig_Template
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
        $__internal_141a4c2d0ad685a9ff3c6e26de5b5e4e830e55c0b058e5910c4ef32fa1c18ba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_141a4c2d0ad685a9ff3c6e26de5b5e4e830e55c0b058e5910c4ef32fa1c18ba4->enter($__internal_141a4c2d0ad685a9ff3c6e26de5b5e4e830e55c0b058e5910c4ef32fa1c18ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_17a1cd2ce755da7875981d34c23152677d5c28c8ea0a3a28ee8ceb49102ca13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a1cd2ce755da7875981d34c23152677d5c28c8ea0a3a28ee8ceb49102ca13c->enter($__internal_17a1cd2ce755da7875981d34c23152677d5c28c8ea0a3a28ee8ceb49102ca13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_141a4c2d0ad685a9ff3c6e26de5b5e4e830e55c0b058e5910c4ef32fa1c18ba4->leave($__internal_141a4c2d0ad685a9ff3c6e26de5b5e4e830e55c0b058e5910c4ef32fa1c18ba4_prof);

        
        $__internal_17a1cd2ce755da7875981d34c23152677d5c28c8ea0a3a28ee8ceb49102ca13c->leave($__internal_17a1cd2ce755da7875981d34c23152677d5c28c8ea0a3a28ee8ceb49102ca13c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "/home/gianni/workspace/itworks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
