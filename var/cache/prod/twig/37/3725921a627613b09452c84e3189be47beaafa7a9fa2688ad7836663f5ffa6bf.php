<?php

/* base.html.twig */
class __TwigTemplate_e23c17f3b4b947d91d6ac83e2a130ca1221df656d764d3781157ffc5c331cd7a extends Twig_Template
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
        $__internal_e214ca9ef2dda1f2d8d257fcb935f4bc0abc5ea01f64bee14330f93541c09948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e214ca9ef2dda1f2d8d257fcb935f4bc0abc5ea01f64bee14330f93541c09948->enter($__internal_e214ca9ef2dda1f2d8d257fcb935f4bc0abc5ea01f64bee14330f93541c09948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e214ca9ef2dda1f2d8d257fcb935f4bc0abc5ea01f64bee14330f93541c09948->leave($__internal_e214ca9ef2dda1f2d8d257fcb935f4bc0abc5ea01f64bee14330f93541c09948_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1757d142f6e635ec3b7706c91b087137e042a8ad20631ce7f5f709b0326c821a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1757d142f6e635ec3b7706c91b087137e042a8ad20631ce7f5f709b0326c821a->enter($__internal_1757d142f6e635ec3b7706c91b087137e042a8ad20631ce7f5f709b0326c821a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1757d142f6e635ec3b7706c91b087137e042a8ad20631ce7f5f709b0326c821a->leave($__internal_1757d142f6e635ec3b7706c91b087137e042a8ad20631ce7f5f709b0326c821a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_82c606bb8a532927e377fde8a52f8bdff249a9092fd145429b66ca5cbfbb4009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c606bb8a532927e377fde8a52f8bdff249a9092fd145429b66ca5cbfbb4009->enter($__internal_82c606bb8a532927e377fde8a52f8bdff249a9092fd145429b66ca5cbfbb4009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_82c606bb8a532927e377fde8a52f8bdff249a9092fd145429b66ca5cbfbb4009->leave($__internal_82c606bb8a532927e377fde8a52f8bdff249a9092fd145429b66ca5cbfbb4009_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a27c1afdf724383d0ee404d73c50bf06efedd0fb579a12f5fa319e78ab425245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27c1afdf724383d0ee404d73c50bf06efedd0fb579a12f5fa319e78ab425245->enter($__internal_a27c1afdf724383d0ee404d73c50bf06efedd0fb579a12f5fa319e78ab425245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a27c1afdf724383d0ee404d73c50bf06efedd0fb579a12f5fa319e78ab425245->leave($__internal_a27c1afdf724383d0ee404d73c50bf06efedd0fb579a12f5fa319e78ab425245_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dfcc9d25f41e4015a3d8ba9d155a60523e1f1415938f81ea4c76a48a6ebc7aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfcc9d25f41e4015a3d8ba9d155a60523e1f1415938f81ea4c76a48a6ebc7aff->enter($__internal_dfcc9d25f41e4015a3d8ba9d155a60523e1f1415938f81ea4c76a48a6ebc7aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dfcc9d25f41e4015a3d8ba9d155a60523e1f1415938f81ea4c76a48a6ebc7aff->leave($__internal_dfcc9d25f41e4015a3d8ba9d155a60523e1f1415938f81ea4c76a48a6ebc7aff_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
", "base.html.twig", "/symfony/app/Resources/views/base.html.twig");
    }
}
