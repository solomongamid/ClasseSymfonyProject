<?php

/* classe/show.html.twig */
class __TwigTemplate_bf6ca2dcc3b343c1a9ccc4236f12a4ded346da0dc8df12e9564495e08ea86019 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "classe/show.html.twig", 1);
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
        $__internal_8d075b4765a26d84206ff7f23a4028a3ce93950ec48bd67b07ae9a714baa7c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d075b4765a26d84206ff7f23a4028a3ce93950ec48bd67b07ae9a714baa7c43->enter($__internal_8d075b4765a26d84206ff7f23a4028a3ce93950ec48bd67b07ae9a714baa7c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classe/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d075b4765a26d84206ff7f23a4028a3ce93950ec48bd67b07ae9a714baa7c43->leave($__internal_8d075b4765a26d84206ff7f23a4028a3ce93950ec48bd67b07ae9a714baa7c43_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_563013ce37f809264f038cd3b4726c6ac078a167f2584f9f0420fbc95f83f41c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563013ce37f809264f038cd3b4726c6ac078a167f2584f9f0420fbc95f83f41c->enter($__internal_563013ce37f809264f038cd3b4726c6ac078a167f2584f9f0420fbc95f83f41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Classe</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Placesnum</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "placesNum", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classe_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classe_edit", array("id" => $this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "id", array()))), "html", null, true);
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
        
        $__internal_563013ce37f809264f038cd3b4726c6ac078a167f2584f9f0420fbc95f83f41c->leave($__internal_563013ce37f809264f038cd3b4726c6ac078a167f2584f9f0420fbc95f83f41c_prof);

    }

    public function getTemplateName()
    {
        return "classe/show.html.twig";
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
    <h1>Classe</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ classe.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ classe.name }}</td>
            </tr>
            <tr>
                <th>Placesnum</th>
                <td>{{ classe.placesNum }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('classe_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('classe_edit', { 'id': classe.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "classe/show.html.twig", "/symfony/app/Resources/views/classe/show.html.twig");
    }
}
