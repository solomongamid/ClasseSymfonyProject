<?php

/* student/index.html.twig */
class __TwigTemplate_789dd781ca281ae5fabc5136fa372e217ff5b86e870ca6f273dcecdf889e093b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/index.html.twig", 1);
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
        $__internal_0b35df8777aeaea79bc818c79302cbccac5716a53c58d984628fe3ffc26c2b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b35df8777aeaea79bc818c79302cbccac5716a53c58d984628fe3ffc26c2b6e->enter($__internal_0b35df8777aeaea79bc818c79302cbccac5716a53c58d984628fe3ffc26c2b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b35df8777aeaea79bc818c79302cbccac5716a53c58d984628fe3ffc26c2b6e->leave($__internal_0b35df8777aeaea79bc818c79302cbccac5716a53c58d984628fe3ffc26c2b6e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3237f4b1b61d9fac530f3548a81aa0505d306d5257bf3cec017f23d45ed31f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3237f4b1b61d9fac530f3548a81aa0505d306d5257bf3cec017f23d45ed31f7f->enter($__internal_3237f4b1b61d9fac530f3548a81aa0505d306d5257bf3cec017f23d45ed31f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Students list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nplace</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_show", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "nPlace", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_show", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_edit", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_new");
        echo "\">Create a new student</a>
        </li>
    </ul>
";
        
        $__internal_3237f4b1b61d9fac530f3548a81aa0505d306d5257bf3cec017f23d45ed31f7f->leave($__internal_3237f4b1b61d9fac530f3548a81aa0505d306d5257bf3cec017f23d45ed31f7f_prof);

    }

    public function getTemplateName()
    {
        return "student/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Students list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nplace</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for student in students %}
            <tr>
                <td><a href=\"{{ path('student_show', { 'id': student.id }) }}\">{{ student.id }}</a></td>
                <td>{{ student.nPlace }}</td>
                <td>{{ student.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('student_show', { 'id': student.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('student_edit', { 'id': student.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('student_new') }}\">Create a new student</a>
        </li>
    </ul>
{% endblock %}
", "student/index.html.twig", "/symfony/app/Resources/views/student/index.html.twig");
    }
}
