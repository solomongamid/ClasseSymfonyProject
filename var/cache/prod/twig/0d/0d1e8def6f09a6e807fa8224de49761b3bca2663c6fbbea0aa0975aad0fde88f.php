<?php

/* student/new.html.twig */
class __TwigTemplate_25d353d736a092e38f7f9c8f593a4e64b97bccf411f4c68e16f8094bb59ee3aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a961345bbeb0385d94162c5b57f4afe91a73f048fd80359d59f5408930f1e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a961345bbeb0385d94162c5b57f4afe91a73f048fd80359d59f5408930f1e0e->enter($__internal_5a961345bbeb0385d94162c5b57f4afe91a73f048fd80359d59f5408930f1e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a961345bbeb0385d94162c5b57f4afe91a73f048fd80359d59f5408930f1e0e->leave($__internal_5a961345bbeb0385d94162c5b57f4afe91a73f048fd80359d59f5408930f1e0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd3a7294f67a2bf68f20f9e9dc9b368d03d599e1bed21e5aa8abc30b8538e06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3a7294f67a2bf68f20f9e9dc9b368d03d599e1bed21e5aa8abc30b8538e06d->enter($__internal_bd3a7294f67a2bf68f20f9e9dc9b368d03d599e1bed21e5aa8abc30b8538e06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Student creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bd3a7294f67a2bf68f20f9e9dc9b368d03d599e1bed21e5aa8abc30b8538e06d->leave($__internal_bd3a7294f67a2bf68f20f9e9dc9b368d03d599e1bed21e5aa8abc30b8538e06d_prof);

    }

    public function getTemplateName()
    {
        return "student/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Student creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('student_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "student/new.html.twig", "/symfony/app/Resources/views/student/new.html.twig");
    }
}
