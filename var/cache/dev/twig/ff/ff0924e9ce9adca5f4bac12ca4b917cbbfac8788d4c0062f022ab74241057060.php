<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* offre/index.html.twig */
class __TwigTemplate_c97ede07edf2720f22a0800e2de3aad171b63dd530b7e4824b9cba2ff89f8a6b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/index.html.twig"));

        $this->parent = $this->loadTemplate("base.back.html.twig", "offre/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Offre index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 style=\"color: #d5606e\">Liste des offres</h1>
    <div class=\"form-group\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
            </div>
            <p style=\"margin-left: 950px\">  <input type=\"text\" id=\"myInput\" class=\"form-control\" placeholder=\"Chercher une offre\">
        </div>
    </div>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Delai</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Nom-Abonnement</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        <tbody  id=\"myTable\">
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 29
            echo "            <tr>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            ((twig_get_attribute($this->env, $this->source, $context["offre"], "delai", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "delai", [], "any", false, false, false, 31), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "nom", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "Description", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offre"], "getNomAbonnement", [], "any", false, false, false, 34), "getNom", [], "method", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>
                   ";
            // line 39
            echo "                    <form  action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_show", ["id" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" >
                        <button type=\"submit\" name=\"submitAction\"  value=\"modifier\" class=\"btn btn-info\">Afficher</button>
                    </form>
                </td>
                <td>
                    <form  action=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" >
                        <button type=\"submit\" name=\"submitAction\"  value=\"modifier\" class=\"btn btn-warning\">Modifier</button>
                    </form>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#myInput\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"#myTable tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
";
        // line 68
        echo "    <form method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_new");
        echo "\" >
        <button type=\"btn\" class=\"btn btn-success\"> ";
        // line 69
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 69, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
    </form>

    <button  class=\"btn btn-info mr-2\" onclick=\"window.print()\" ><i class=\"fa fa-print\" aria-hidden=\"true\"></i></i>  Imprimer</button>
<div style=\"margin-left: 25%\">
";
        // line 74
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 74, $this->source); })()), "offre/pagination.html.twig");
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "offre/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 74,  190 => 69,  185 => 68,  170 => 54,  161 => 50,  150 => 44,  141 => 39,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  117 => 29,  112 => 28,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.back.html.twig' %}

{% block title %}Offre index{% endblock %}

{% block body %}
    <h1 style=\"color: #d5606e\">Liste des offres</h1>
    <div class=\"form-group\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
            </div>
            <p style=\"margin-left: 950px\">  <input type=\"text\" id=\"myInput\" class=\"form-control\" placeholder=\"Chercher une offre\">
        </div>
    </div>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Delai</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Nom-Abonnement</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        <tbody  id=\"myTable\">
        {% for offre in offres %}
            <tr>
                <td>{{ offre.id }}</td>
                <td>{{ offre.delai ? offre.delai|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ offre.nom }}</td>
                <td>{{ offre.Description }}</td>
                <td>{{ offre.getNomAbonnement.getNom()}}</td>
                <td>
                   {#  <a href=\"{{ path('offre_show', {'id': offre.id}) }}\">afficher</a>

                    <a href=\"{{ path('offre_edit', {'id': offre.id}) }}\">Modifier</a>#}
                    <form  action=\"{{ path('offre_show', {'id': offre.id})}}\" >
                        <button type=\"submit\" name=\"submitAction\"  value=\"modifier\" class=\"btn btn-info\">Afficher</button>
                    </form>
                </td>
                <td>
                    <form  action=\"{{ path('offre_edit', {'id': offre.id})}}\" >
                        <button type=\"submit\" name=\"submitAction\"  value=\"modifier\" class=\"btn btn-warning\">Modifier</button>
                    </form>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#myInput\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"#myTable tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
{#    <a href=\"{{ path('offre_new') }}\">Créer nouveau</a>#}
    <form method=\"post\" action=\"{{ path('offre_new') }}\" >
        <button type=\"btn\" class=\"btn btn-success\"> {{ button_label|default('Ajouter') }}</button>
    </form>

    <button  class=\"btn btn-info mr-2\" onclick=\"window.print()\" ><i class=\"fa fa-print\" aria-hidden=\"true\"></i></i>  Imprimer</button>
<div style=\"margin-left: 25%\">
{{ knp_pagination_render(offres,'offre/pagination.html.twig') }}
</div>

{% endblock %}
", "offre/index.html.twig", "C:\\xampp\\htdocs\\Mbody_Prjt\\templates\\offre\\index.html.twig");
    }
}
