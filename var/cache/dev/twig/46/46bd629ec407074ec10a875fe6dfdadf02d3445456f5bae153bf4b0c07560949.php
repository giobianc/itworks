<?php

/* base.html.twig */
class __TwigTemplate_f03a4114f3bbc06a5a70f78f5c825420debb072cd257afd9f5197056656666db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3be599a018f39d97b657ef8531f9b67cd690c7856a4c0772a253b3879271d8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be599a018f39d97b657ef8531f9b67cd690c7856a4c0772a253b3879271d8b1->enter($__internal_3be599a018f39d97b657ef8531f9b67cd690c7856a4c0772a253b3879271d8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_830fd1c54bbf984231bf09cc93fa16ce50d214acfea585bd2ff4fd29f6266885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830fd1c54bbf984231bf09cc93fa16ce50d214acfea585bd2ff4fd29f6266885->enter($__internal_830fd1c54bbf984231bf09cc93fa16ce50d214acfea585bd2ff4fd29f6266885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3be599a018f39d97b657ef8531f9b67cd690c7856a4c0772a253b3879271d8b1->leave($__internal_3be599a018f39d97b657ef8531f9b67cd690c7856a4c0772a253b3879271d8b1_prof);

        
        $__internal_830fd1c54bbf984231bf09cc93fa16ce50d214acfea585bd2ff4fd29f6266885->leave($__internal_830fd1c54bbf984231bf09cc93fa16ce50d214acfea585bd2ff4fd29f6266885_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e564ed5c23468ff52e258daf3d522d0fa6f150c4f7b85baec6036ca75a0e78bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e564ed5c23468ff52e258daf3d522d0fa6f150c4f7b85baec6036ca75a0e78bd->enter($__internal_e564ed5c23468ff52e258daf3d522d0fa6f150c4f7b85baec6036ca75a0e78bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d400364362cb2fda7728abe78642c3686be9d210b741a454b03a24f1bc5a5db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d400364362cb2fda7728abe78642c3686be9d210b741a454b03a24f1bc5a5db4->enter($__internal_d400364362cb2fda7728abe78642c3686be9d210b741a454b03a24f1bc5a5db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d400364362cb2fda7728abe78642c3686be9d210b741a454b03a24f1bc5a5db4->leave($__internal_d400364362cb2fda7728abe78642c3686be9d210b741a454b03a24f1bc5a5db4_prof);

        
        $__internal_e564ed5c23468ff52e258daf3d522d0fa6f150c4f7b85baec6036ca75a0e78bd->leave($__internal_e564ed5c23468ff52e258daf3d522d0fa6f150c4f7b85baec6036ca75a0e78bd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_10b22cb18486f39fa31d93a17b8ab7cd23b620d03bda0fafb0c0de4f3abca27a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b22cb18486f39fa31d93a17b8ab7cd23b620d03bda0fafb0c0de4f3abca27a->enter($__internal_10b22cb18486f39fa31d93a17b8ab7cd23b620d03bda0fafb0c0de4f3abca27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ac1989f425c77b99ffb67cc5330cac1ad3c2dba7da4e7e4a4012b0c96988d205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1989f425c77b99ffb67cc5330cac1ad3c2dba7da4e7e4a4012b0c96988d205->enter($__internal_ac1989f425c77b99ffb67cc5330cac1ad3c2dba7da4e7e4a4012b0c96988d205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ac1989f425c77b99ffb67cc5330cac1ad3c2dba7da4e7e4a4012b0c96988d205->leave($__internal_ac1989f425c77b99ffb67cc5330cac1ad3c2dba7da4e7e4a4012b0c96988d205_prof);

        
        $__internal_10b22cb18486f39fa31d93a17b8ab7cd23b620d03bda0fafb0c0de4f3abca27a->leave($__internal_10b22cb18486f39fa31d93a17b8ab7cd23b620d03bda0fafb0c0de4f3abca27a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e48acb0405850abee502f9b73a4ff34378fe825c9d79953d3eee11c390d225ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e48acb0405850abee502f9b73a4ff34378fe825c9d79953d3eee11c390d225ba->enter($__internal_e48acb0405850abee502f9b73a4ff34378fe825c9d79953d3eee11c390d225ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b568ee0e8290f7c8ba2e5f82ffac43ee862df3e78bb0615363e1c8032d79f736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b568ee0e8290f7c8ba2e5f82ffac43ee862df3e78bb0615363e1c8032d79f736->enter($__internal_b568ee0e8290f7c8ba2e5f82ffac43ee862df3e78bb0615363e1c8032d79f736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b568ee0e8290f7c8ba2e5f82ffac43ee862df3e78bb0615363e1c8032d79f736->leave($__internal_b568ee0e8290f7c8ba2e5f82ffac43ee862df3e78bb0615363e1c8032d79f736_prof);

        
        $__internal_e48acb0405850abee502f9b73a4ff34378fe825c9d79953d3eee11c390d225ba->leave($__internal_e48acb0405850abee502f9b73a4ff34378fe825c9d79953d3eee11c390d225ba_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8309afa5b6a80e01cf22f652c74ca867151f310443a7fd8a12be654b359e55c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8309afa5b6a80e01cf22f652c74ca867151f310443a7fd8a12be654b359e55c6->enter($__internal_8309afa5b6a80e01cf22f652c74ca867151f310443a7fd8a12be654b359e55c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_88f7c1f2bc85546304d4313551a3fa267428ad79d07977118b18075d67dda45f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f7c1f2bc85546304d4313551a3fa267428ad79d07977118b18075d67dda45f->enter($__internal_88f7c1f2bc85546304d4313551a3fa267428ad79d07977118b18075d67dda45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_88f7c1f2bc85546304d4313551a3fa267428ad79d07977118b18075d67dda45f->leave($__internal_88f7c1f2bc85546304d4313551a3fa267428ad79d07977118b18075d67dda45f_prof);

        
        $__internal_8309afa5b6a80e01cf22f652c74ca867151f310443a7fd8a12be654b359e55c6->leave($__internal_8309afa5b6a80e01cf22f652c74ca867151f310443a7fd8a12be654b359e55c6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/gianni/workspace/itworks/app/Resources/views/base.html.twig");
    }
}
