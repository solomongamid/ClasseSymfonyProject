<?php

/* intervenant/new.html.twig */
class __TwigTemplate_8a7e66c5dbe1c1fc41228503a6228728b4dd359cce788289704bd75434874812 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "intervenant/new.html.twig", 1);
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
        $__internal_09866ae42f10828204a8d0697987ef16ba4dc0feb4ec33b2757b312988576f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09866ae42f10828204a8d0697987ef16ba4dc0feb4ec33b2757b312988576f74->enter($__internal_09866ae42f10828204a8d0697987ef16ba4dc0feb4ec33b2757b312988576f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intervenant/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09866ae42f10828204a8d0697987ef16ba4dc0feb4ec33b2757b312988576f74->leave($__internal_09866ae42f10828204a8d0697987ef16ba4dc0feb4ec33b2757b312988576f74_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb6c89d62a0bac6ec835d0947561759c8f3263e8d400e101384335ce0ab9dbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb6c89d62a0bac6ec835d0947561759c8f3263e8d400e101384335ce0ab9dbf8->enter($__internal_bb6c89d62a0bac6ec835d0947561759c8f3263e8d400e101384335ce0ab9dbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Intervenant creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("intervenant_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bb6c89d62a0bac6ec835d0947561759c8f3263e8d400e101384335ce0ab9dbf8->leave($__internal_bb6c89d62a0bac6ec835d0947561759c8f3263e8d400e101384335ce0ab9dbf8_prof);

    }

    public function getTemplateName()
    {
        return "intervenant/new.html.twig";
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
    <h1>Intervenant creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('intervenant_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "intervenant/new.html.twig", "/symfony/app/Resources/views/intervenant/new.html.twig");
    }
}
