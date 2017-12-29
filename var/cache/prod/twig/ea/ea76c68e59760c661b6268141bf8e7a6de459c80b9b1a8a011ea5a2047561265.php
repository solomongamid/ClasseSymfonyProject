<?php

/* ClassBundle:Default:index.html.twig */
class __TwigTemplate_69faecc8ee110de9735eb930fcea2d511da13a347da3d5f9a5ccf38faf8eaa6f extends Twig_Template
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
        $__internal_ac5aebbb5d57ea1d6dff6220a2cf9bf59f0c445e6a3a466129c66e9e7e1e98f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5aebbb5d57ea1d6dff6220a2cf9bf59f0c445e6a3a466129c66e9e7e1e98f5->enter($__internal_ac5aebbb5d57ea1d6dff6220a2cf9bf59f0c445e6a3a466129c66e9e7e1e98f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClassBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ac5aebbb5d57ea1d6dff6220a2cf9bf59f0c445e6a3a466129c66e9e7e1e98f5->leave($__internal_ac5aebbb5d57ea1d6dff6220a2cf9bf59f0c445e6a3a466129c66e9e7e1e98f5_prof);

    }

    public function getTemplateName()
    {
        return "ClassBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "ClassBundle:Default:index.html.twig", "/symfony/src/ClassBundle/Resources/views/Default/index.html.twig");
    }
}
