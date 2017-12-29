<?php

/* student/show.html.twig */
class __TwigTemplate_8a7389dab9053ef23a280ddceeeec33d54e7bbbe315676bc06b698e22267b027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/show.html.twig", 1);
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
        $__internal_c1f6104e9aa425f6b354f2c5800295c3f4658a3c7fcfbd9e67b32b495de7da74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f6104e9aa425f6b354f2c5800295c3f4658a3c7fcfbd9e67b32b495de7da74->enter($__internal_c1f6104e9aa425f6b354f2c5800295c3f4658a3c7fcfbd9e67b32b495de7da74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1f6104e9aa425f6b354f2c5800295c3f4658a3c7fcfbd9e67b32b495de7da74->leave($__internal_c1f6104e9aa425f6b354f2c5800295c3f4658a3c7fcfbd9e67b32b495de7da74_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_00c010684df8a2a1c4e1023bf4b144d7c4db5926820360a9cf1284fbeb098f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c010684df8a2a1c4e1023bf4b144d7c4db5926820360a9cf1284fbeb098f74->enter($__internal_00c010684df8a2a1c4e1023bf4b144d7c4db5926820360a9cf1284fbeb098f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Student</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nplace</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "nPlace", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_edit", array("id" => $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_00c010684df8a2a1c4e1023bf4b144d7c4db5926820360a9cf1284fbeb098f74->leave($__internal_00c010684df8a2a1c4e1023bf4b144d7c4db5926820360a9cf1284fbeb098f74_prof);

    }

    public function getTemplateName()
    {
        return "student/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Student</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ student.id }}</td>
            </tr>
            <tr>
                <th>Nplace</th>
                <td>{{ student.nPlace }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ student.name }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('student_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('student_edit', { 'id': student.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "student/show.html.twig", "/symfony/app/Resources/views/student/show.html.twig");
    }
}
