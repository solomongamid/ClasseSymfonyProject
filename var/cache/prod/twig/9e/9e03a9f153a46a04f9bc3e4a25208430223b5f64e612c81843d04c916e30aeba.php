<?php

/* classe/index.html.twig */
class __TwigTemplate_8194d1a15342d972e996881f368dbc9558b10175a602dbfc1546b000899b5e6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "classe/index.html.twig", 1);
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
        $__internal_b0b4c2dd08cf633dfc176af40325cbc84bd6034a1fb7c25539692cb0a6ef1624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b4c2dd08cf633dfc176af40325cbc84bd6034a1fb7c25539692cb0a6ef1624->enter($__internal_b0b4c2dd08cf633dfc176af40325cbc84bd6034a1fb7c25539692cb0a6ef1624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classe/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0b4c2dd08cf633dfc176af40325cbc84bd6034a1fb7c25539692cb0a6ef1624->leave($__internal_b0b4c2dd08cf633dfc176af40325cbc84bd6034a1fb7c25539692cb0a6ef1624_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6f58bc4ad97ec39d5db68580643aea30d0b1a128277bef5d0012750558da0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f58bc4ad97ec39d5db68580643aea30d0b1a128277bef5d0012750558da0b5->enter($__internal_d6f58bc4ad97ec39d5db68580643aea30d0b1a128277bef5d0012750558da0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Classes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Placesnum</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classes"] ?? $this->getContext($context, "classes")));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classe_show", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "placesNum", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classe_show", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classe_edit", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classe_new");
        echo "\">Create a new classe</a>
        </li>
    </ul>
";
        
        $__internal_d6f58bc4ad97ec39d5db68580643aea30d0b1a128277bef5d0012750558da0b5->leave($__internal_d6f58bc4ad97ec39d5db68580643aea30d0b1a128277bef5d0012750558da0b5_prof);

    }

    public function getTemplateName()
    {
        return "classe/index.html.twig";
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
    <h1>Classes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Placesnum</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for classe in classes %}
            <tr>
                <td><a href=\"{{ path('classe_show', { 'id': classe.id }) }}\">{{ classe.id }}</a></td>
                <td>{{ classe.name }}</td>
                <td>{{ classe.placesNum }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('classe_show', { 'id': classe.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('classe_edit', { 'id': classe.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('classe_new') }}\">Create a new classe</a>
        </li>
    </ul>
{% endblock %}
", "classe/index.html.twig", "/symfony/app/Resources/views/classe/index.html.twig");
    }
}
