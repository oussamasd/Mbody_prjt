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

/* categories/index.html.twig */
class __TwigTemplate_c1c3ebdf75463416cc1ae4a711b2d0bec7befa7e01456f6c16c5e5a1a21e1d01 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/index.html.twig"));

        $this->parent = $this->loadTemplate("base.back.html.twig", "categories/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Categories ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("TrierParNom");
        echo " \" class=\"btn btn-success btn-sm\"  href=\"https://startbootstrap.com/theme/sb-admin-pro\"><i class=\"align-middle\" ></i>Trier par Prix</a>
    <a class=\"btn btn-primary\"  href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_listp");
        echo "\">PDF</a>
    <button  class=\"btn btn-info mr-2\" onclick=\"window.print()\" ><i class=\"fa fa-print\" aria-hidden=\"true\"></i></i>  Imprimer</button>
    <div class=\"form-group\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
            </div>
            <p style=\"margin-left: 950px\">  <input type=\"text\" id=\"myInput\" class=\"form-control\" placeholder=\"Chercher un produit\">
        </div>
    </div>
    <h1> Table des Categories </h1>

    <table class=\"table\" style=\"border: medium solid #000000\">
        <thead>
            <tr>
                <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Id</th>
                <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Nom</th>
                <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Type</th>
                <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Description</th>
                <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">actions</th>
            </tr>
        </thead>
        <tbody>
        <tbody  id=\"myTable\">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 32
            echo "            <tr>
                <td >";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td >";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td >";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "type", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td >";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>

                <td>
                    <a class=\"btn btn-info mr-2\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_show", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">show</a>
                    <a class=\"btn btn-info mr-2\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">edit</a>
                    <a class=\"btn btn-info mr-2\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">delete</a>

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
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

    <a class=\"btn btn-primary\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_new");
        echo "\">Create new</a>
    <div style=\"margin-left: 25%\">
        ";
        // line 68
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 68, $this->source); })()), "categories/pagination.html.twig");
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categories/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 68,  193 => 66,  175 => 50,  166 => 46,  156 => 41,  152 => 40,  148 => 39,  142 => 36,  138 => 35,  134 => 34,  130 => 33,  127 => 32,  122 => 31,  96 => 8,  92 => 7,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.back.html.twig' %}
{% block title %}Categories {% endblock %}

{% block body %}


    <a href=\"{{path('TrierParNom')}} \" class=\"btn btn-success btn-sm\"  href=\"https://startbootstrap.com/theme/sb-admin-pro\"><i class=\"align-middle\" ></i>Trier par Prix</a>
    <a class=\"btn btn-primary\"  href=\"{{ path('categories_listp') }}\">PDF</a>
    <button  class=\"btn btn-info mr-2\" onclick=\"window.print()\" ><i class=\"fa fa-print\" aria-hidden=\"true\"></i></i>  Imprimer</button>
    <div class=\"form-group\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
            </div>
            <p style=\"margin-left: 950px\">  <input type=\"text\" id=\"myInput\" class=\"form-control\" placeholder=\"Chercher un produit\">
        </div>
    </div>
    <h1> Table des Categories </h1>

    <table class=\"table\" style=\"border: medium solid #000000\">
        <thead>
            <tr>
                <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Id</th>
                <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Nom</th>
                <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Type</th>
                <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Description</th>
                <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">actions</th>
            </tr>
        </thead>
        <tbody>
        <tbody  id=\"myTable\">
        {% for category in categories %}
            <tr>
                <td >{{ category.id }}</td>
                <td >{{ category.nom }}</td>
                <td >{{ category.type }}</td>
                <td >{{ category.description }}</td>

                <td>
                    <a class=\"btn btn-info mr-2\" href=\"{{ path('categories_show', {'id': category.id}) }}\">show</a>
                    <a class=\"btn btn-info mr-2\" href=\"{{ path('categories_edit', {'id': category.id}) }}\">edit</a>
                    <a class=\"btn btn-info mr-2\" href=\"{{ path('categories_delete', {'id': category.id}) }}\">delete</a>

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

    <a class=\"btn btn-primary\" href=\"{{ path('categories_new') }}\">Create new</a>
    <div style=\"margin-left: 25%\">
        {{ knp_pagination_render(categories,'categories/pagination.html.twig') }}
    </div>
{% endblock %}
", "categories/index.html.twig", "C:\\Users\\Mehdi AZZAZ\\Mbody_Prjt\\templates\\categories\\index.html.twig");
    }
}
