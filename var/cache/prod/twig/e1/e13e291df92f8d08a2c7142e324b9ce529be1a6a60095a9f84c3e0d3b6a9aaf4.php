<?php

/* intervenant/show.html.twig */
class __TwigTemplate_bf160926e356ca1bd0e67e871da2ed4dbbfcb61171631de581811b69573e5d76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "intervenant/show.html.twig", 1);
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
        $__internal_5dceb259d64176a36a15f7c087c5b64b636443ab0a7c66b1e8dda107159a419b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dceb259d64176a36a15f7c087c5b64b636443ab0a7c66b1e8dda107159a419b->enter($__internal_5dceb259d64176a36a15f7c087c5b64b636443ab0a7c66b1e8dda107159a419b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intervenant/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dceb259d64176a36a15f7c087c5b64b636443ab0a7c66b1e8dda107159a419b->leave($__internal_5dceb259d64176a36a15f7c087c5b64b636443ab0a7c66b1e8dda107159a419b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fce82ab918a5f5974d2436b5228f39f3676fbdf10cab1ef208385c8fb6fc829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fce82ab918a5f5974d2436b5228f39f3676fbdf10cab1ef208385c8fb6fc829->enter($__internal_8fce82ab918a5f5974d2436b5228f39f3676fbdf10cab1ef208385c8fb6fc829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Intervenant</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["intervenant"] ?? $this->getContext($context, "intervenant")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["intervenant"] ?? $this->getContext($context, "intervenant")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Material</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["intervenant"] ?? $this->getContext($context, "intervenant")), "material", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("intervenant_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("intervenant_edit", array("id" => $this->getAttribute(($context["intervenant"] ?? $this->getContext($context, "intervenant")), "id", array()))), "html", null, true);
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
        
        $__internal_8fce82ab918a5f5974d2436b5228f39f3676fbdf10cab1ef208385c8fb6fc829->leave($__internal_8fce82ab918a5f5974d2436b5228f39f3676fbdf10cab1ef208385c8fb6fc829_prof);

    }

    public function getTemplateName()
    {
        return "intervenant/show.html.twig";
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
    <h1>Intervenant</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ intervenant.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ intervenant.name }}</td>
            </tr>
            <tr>
                <th>Material</th>
                <td>{{ intervenant.material }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('intervenant_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('intervenant_edit', { 'id': intervenant.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "intervenant/show.html.twig", "/symfony/app/Resources/views/intervenant/show.html.twig");
    }
}
