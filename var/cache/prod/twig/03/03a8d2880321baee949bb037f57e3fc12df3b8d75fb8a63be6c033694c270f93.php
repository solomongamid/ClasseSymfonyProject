<?php

/* intervenant/index.html.twig */
class __TwigTemplate_b52104b5fd3b055f6a894de8a35308ba36bd2b7c06798f7cc83d251882c45c73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "intervenant/index.html.twig", 1);
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
        $__internal_615514c7769346a86b249bcc62ec62fa95065e5b3898d49b098147b53d1ff27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615514c7769346a86b249bcc62ec62fa95065e5b3898d49b098147b53d1ff27f->enter($__internal_615514c7769346a86b249bcc62ec62fa95065e5b3898d49b098147b53d1ff27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intervenant/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_615514c7769346a86b249bcc62ec62fa95065e5b3898d49b098147b53d1ff27f->leave($__internal_615514c7769346a86b249bcc62ec62fa95065e5b3898d49b098147b53d1ff27f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2df05edc68fdcbe1f6a2dcbfa6a9528fd3a4a767e6a1a03eaeefee51e7c4cc58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df05edc68fdcbe1f6a2dcbfa6a9528fd3a4a767e6a1a03eaeefee51e7c4cc58->enter($__internal_2df05edc68fdcbe1f6a2dcbfa6a9528fd3a4a767e6a1a03eaeefee51e7c4cc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Intervenants list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Material</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["intervenants"] ?? $this->getContext($context, "intervenants")));
        foreach ($context['_seq'] as $context["_key"] => $context["intervenant"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("intervenant_show", array("id" => $this->getAttribute($context["intervenant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["intervenant"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["intervenant"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["intervenant"], "material", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("intervenant_show", array("id" => $this->getAttribute($context["intervenant"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("intervenant_edit", array("id" => $this->getAttribute($context["intervenant"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervenant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("intervenant_new");
        echo "\">Create a new intervenant</a>
        </li>
    </ul>
";
        
        $__internal_2df05edc68fdcbe1f6a2dcbfa6a9528fd3a4a767e6a1a03eaeefee51e7c4cc58->leave($__internal_2df05edc68fdcbe1f6a2dcbfa6a9528fd3a4a767e6a1a03eaeefee51e7c4cc58_prof);

    }

    public function getTemplateName()
    {
        return "intervenant/index.html.twig";
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
    <h1>Intervenants list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Material</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for intervenant in intervenants %}
            <tr>
                <td><a href=\"{{ path('intervenant_show', { 'id': intervenant.id }) }}\">{{ intervenant.id }}</a></td>
                <td>{{ intervenant.name }}</td>
                <td>{{ intervenant.material }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('intervenant_show', { 'id': intervenant.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('intervenant_edit', { 'id': intervenant.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('intervenant_new') }}\">Create a new intervenant</a>
        </li>
    </ul>
{% endblock %}
", "intervenant/index.html.twig", "/symfony/app/Resources/views/intervenant/index.html.twig");
    }
}
