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
        $__internal_d5bccecdcc3ab05d98e020dec4412f4953a39f17375ccc1e74103efdc4880cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5bccecdcc3ab05d98e020dec4412f4953a39f17375ccc1e74103efdc4880cf3->enter($__internal_d5bccecdcc3ab05d98e020dec4412f4953a39f17375ccc1e74103efdc4880cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fa4c8cd2032be84003db525215ac300c76810dc96fd284b30af3140a456282cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4c8cd2032be84003db525215ac300c76810dc96fd284b30af3140a456282cf->enter($__internal_fa4c8cd2032be84003db525215ac300c76810dc96fd284b30af3140a456282cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
       
         <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

  <!-- Tell the browser to be responsive to screen width  -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/AdminLTE/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"../../dist/css/AdminLTE.min.css\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"../../dist/css/skins/_all-skins.min.css\">
        
        <title>";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    </body>
</html>
";
        
        $__internal_d5bccecdcc3ab05d98e020dec4412f4953a39f17375ccc1e74103efdc4880cf3->leave($__internal_d5bccecdcc3ab05d98e020dec4412f4953a39f17375ccc1e74103efdc4880cf3_prof);

        
        $__internal_fa4c8cd2032be84003db525215ac300c76810dc96fd284b30af3140a456282cf->leave($__internal_fa4c8cd2032be84003db525215ac300c76810dc96fd284b30af3140a456282cf_prof);

    }

    // line 22
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e34d1500806e85d6bbf3b42214861f1f104cf74310f3c21b87077d318f0e602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e34d1500806e85d6bbf3b42214861f1f104cf74310f3c21b87077d318f0e602->enter($__internal_7e34d1500806e85d6bbf3b42214861f1f104cf74310f3c21b87077d318f0e602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39d42c0a44c8b75b597941fe201cb23614850e0becab3515a10a13e7e349625c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d42c0a44c8b75b597941fe201cb23614850e0becab3515a10a13e7e349625c->enter($__internal_39d42c0a44c8b75b597941fe201cb23614850e0becab3515a10a13e7e349625c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_39d42c0a44c8b75b597941fe201cb23614850e0becab3515a10a13e7e349625c->leave($__internal_39d42c0a44c8b75b597941fe201cb23614850e0becab3515a10a13e7e349625c_prof);

        
        $__internal_7e34d1500806e85d6bbf3b42214861f1f104cf74310f3c21b87077d318f0e602->leave($__internal_7e34d1500806e85d6bbf3b42214861f1f104cf74310f3c21b87077d318f0e602_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5cf1146771695c6df6300d410599615525e02463f2bf0f644116469c6a72b4b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf1146771695c6df6300d410599615525e02463f2bf0f644116469c6a72b4b1->enter($__internal_5cf1146771695c6df6300d410599615525e02463f2bf0f644116469c6a72b4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d2a5309efc28d18470c245a02526bdcdfe6db85cd15dc513ecfe36aefc9d3e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a5309efc28d18470c245a02526bdcdfe6db85cd15dc513ecfe36aefc9d3e1d->enter($__internal_d2a5309efc28d18470c245a02526bdcdfe6db85cd15dc513ecfe36aefc9d3e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d2a5309efc28d18470c245a02526bdcdfe6db85cd15dc513ecfe36aefc9d3e1d->leave($__internal_d2a5309efc28d18470c245a02526bdcdfe6db85cd15dc513ecfe36aefc9d3e1d_prof);

        
        $__internal_5cf1146771695c6df6300d410599615525e02463f2bf0f644116469c6a72b4b1->leave($__internal_5cf1146771695c6df6300d410599615525e02463f2bf0f644116469c6a72b4b1_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb2ffba9f6bf3881b5afad301239a95f09f9b66d2330171421ee36af254dc770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2ffba9f6bf3881b5afad301239a95f09f9b66d2330171421ee36af254dc770->enter($__internal_cb2ffba9f6bf3881b5afad301239a95f09f9b66d2330171421ee36af254dc770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8fcc785af487f6e3763de7d11b8f5a35ba6a083c777b70c76bfd4704e8639ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fcc785af487f6e3763de7d11b8f5a35ba6a083c777b70c76bfd4704e8639ec3->enter($__internal_8fcc785af487f6e3763de7d11b8f5a35ba6a083c777b70c76bfd4704e8639ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8fcc785af487f6e3763de7d11b8f5a35ba6a083c777b70c76bfd4704e8639ec3->leave($__internal_8fcc785af487f6e3763de7d11b8f5a35ba6a083c777b70c76bfd4704e8639ec3_prof);

        
        $__internal_cb2ffba9f6bf3881b5afad301239a95f09f9b66d2330171421ee36af254dc770->leave($__internal_cb2ffba9f6bf3881b5afad301239a95f09f9b66d2330171421ee36af254dc770_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_552f7e3bc836e8f1f4f6298eea43c01cac265f090ca899b18df73e25c73ba532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552f7e3bc836e8f1f4f6298eea43c01cac265f090ca899b18df73e25c73ba532->enter($__internal_552f7e3bc836e8f1f4f6298eea43c01cac265f090ca899b18df73e25c73ba532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0bcf5fa75501554ce46b7cdee2561f52b8b04a04798ee0d6c9adaaa57abc04aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bcf5fa75501554ce46b7cdee2561f52b8b04a04798ee0d6c9adaaa57abc04aa->enter($__internal_0bcf5fa75501554ce46b7cdee2561f52b8b04a04798ee0d6c9adaaa57abc04aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0bcf5fa75501554ce46b7cdee2561f52b8b04a04798ee0d6c9adaaa57abc04aa->leave($__internal_0bcf5fa75501554ce46b7cdee2561f52b8b04a04798ee0d6c9adaaa57abc04aa_prof);

        
        $__internal_552f7e3bc836e8f1f4f6298eea43c01cac265f090ca899b18df73e25c73ba532->leave($__internal_552f7e3bc836e8f1f4f6298eea43c01cac265f090ca899b18df73e25c73ba532_prof);

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
        return array (  137 => 28,  120 => 27,  103 => 23,  85 => 22,  73 => 29,  70 => 28,  68 => 27,  61 => 24,  59 => 23,  55 => 22,  41 => 11,  29 => 1,);
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
       
         <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

  <!-- Tell the browser to be responsive to screen width  -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/AdminLTE/bootstrap/css/bootstrap.min.css') }}\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"../../dist/css/AdminLTE.min.css\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"../../dist/css/skins/_all-skins.min.css\">
        
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
