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

/* abonnement/indexback.html.twig */
class __TwigTemplate_08954e70eb9d5c757d1c0b697e677c7996d79b0ad38a436d1fdf165793b399ed extends Template
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
            'b1' => [$this, 'block_b1'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/indexback.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/indexback.html.twig"));

        $this->parent = $this->loadTemplate("base.back.html.twig", "abonnement/indexback.html.twig", 1);
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

        echo "Abonnement index";
        
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
        echo "
    <h1 style=\"color: #d46973\">Liste des abonnements</h1>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraison_list");
        echo "\"class=\"btn btn-danger\">PDF</a>
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("TrierParNom");
        echo " \" class=\"btn btn-success btn-sm\"  href=\"https://startbootstrap.com/theme/sb-admin-pro\"><i class=\"align-middle\" ></i>Trier par Prix</a>
    <div class=\"form-group\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
            </div>
            <p style=\"margin-left: 950px\">  <input type=\"text\" id=\"myInput\" class=\"form-control\" placeholder=\"Chercher une abonnement\">
        </div>
    </div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Categories</th>
                <th>Description</th>
                <th>image</th>
                <th>actions</th>


            </tr>
        </thead>

        <tbody>
    <tbody  id=\"myTable\">
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 35
            echo "            <tr>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo " <br/></td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "nom", [], "any", false, false, false, 37), "html", null, true);
            echo " <br/></td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "prix", [], "any", false, false, false, 38), "html", null, true);
            echo " <br/></td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "categories", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "description", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td><img style=\"width: 150px;\" src=\"/uploads/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "getPhoto", [], "method", false, false, false, 41), "html", null, true);
            echo "\"></td>

                <td>
  ";
            // line 45
            echo "                    ";
            // line 46
            echo "
                    <form  action=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" >
                        <button type=\"submit\" name=\"submitAction\"  value=\"modifier\" class=\"btn btn-info\">Afficher</button>
                    </form>
                </td>
               <td>
                   <form method=\"post\" action=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" >
                       <button type=\"btn\" class=\"btn btn-warning\"> ";
            // line 53
            echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 53, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
            echo "</button>
                   </form>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
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

";
        // line 79
        echo "
     ";
        // line 81
        echo "<form method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_new");
        echo "\" >
<button type=\"btn\" class=\"btn btn-success\"> ";
        // line 82
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 82, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
</form>

    <button  class=\"btn btn-info mr-2\" onclick=\"window.print()\" ><i class=\"fa fa-print\" aria-hidden=\"true\"></i></i>  Imprimer</button>


    ";
        // line 88
        $this->displayBlock('b1', $context, $blocks);
        // line 90
        echo "    <div style=\"margin-left: 25%\">
        ";
        // line 91
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 91, $this->source); })()), "abonnement/pagination.html.twig");
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_b1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "b1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "b1"));

        // line 89
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "abonnement/indexback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 89,  248 => 88,  235 => 91,  232 => 90,  230 => 88,  221 => 82,  216 => 81,  213 => 79,  196 => 63,  186 => 58,  176 => 53,  172 => 52,  164 => 47,  161 => 46,  159 => 45,  153 => 41,  149 => 40,  145 => 39,  141 => 38,  137 => 37,  133 => 36,  130 => 35,  125 => 34,  97 => 9,  93 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.back.html.twig' %}

{% block title %}Abonnement index{% endblock %}

{% block body %}

    <h1 style=\"color: #d46973\">Liste des abonnements</h1>
    <a href=\"{{ path('livraison_list') }}\"class=\"btn btn-danger\">PDF</a>
    <a href=\"{{path('TrierParNom')}} \" class=\"btn btn-success btn-sm\"  href=\"https://startbootstrap.com/theme/sb-admin-pro\"><i class=\"align-middle\" ></i>Trier par Prix</a>
    <div class=\"form-group\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
            </div>
            <p style=\"margin-left: 950px\">  <input type=\"text\" id=\"myInput\" class=\"form-control\" placeholder=\"Chercher une abonnement\">
        </div>
    </div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Categories</th>
                <th>Description</th>
                <th>image</th>
                <th>actions</th>


            </tr>
        </thead>

        <tbody>
    <tbody  id=\"myTable\">
        {% for abonnement in abonnements %}
            <tr>
                <td>{{ abonnement.id }} <br/></td>
                <td>{{ abonnement.nom }} <br/></td>
                <td>{{ abonnement.prix }} <br/></td>
                <td>{{ abonnement.categories }}</td>
                <td>{{ abonnement.description }}</td>
                <td><img style=\"width: 150px;\" src=\"/uploads/{{ abonnement.getPhoto() }}\"></td>

                <td>
  {#                       <a href=\"{{ path('abonnement_show', {'id': abonnement.id}) }}\">Afficher</a>#}
                    {#  <a href=\"{{ path('abonnement_edit', {'id': abonnement.id}) }}\">Modifier</a>#}

                    <form  action=\"{{ path('abonnement_show', {'id': abonnement.id})}}\" >
                        <button type=\"submit\" name=\"submitAction\"  value=\"modifier\" class=\"btn btn-info\">Afficher</button>
                    </form>
                </td>
               <td>
                   <form method=\"post\" action=\"{{ path('abonnement_edit', {'id': abonnement.id}) }}\" >
                       <button type=\"btn\" class=\"btn btn-warning\"> {{ button_label|default('Modifier') }}</button>
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

{#    <div class=\"pagination\"> {{ knp_pagination_render(abonnements) }} </div>#}

     {#   <a href=\"{{ path('abonnement_new') }}\">Créer nouvelle</a>#}
<form method=\"post\" action=\"{{ path('abonnement_new') }}\" >
<button type=\"btn\" class=\"btn btn-success\"> {{ button_label|default('Ajouter') }}</button>
</form>

    <button  class=\"btn btn-info mr-2\" onclick=\"window.print()\" ><i class=\"fa fa-print\" aria-hidden=\"true\"></i></i>  Imprimer</button>


    {% block b1 %}
        {% endblock %}
    <div style=\"margin-left: 25%\">
        {{ knp_pagination_render(abonnements, 'abonnement/pagination.html.twig') }}
    </div>
{% endblock %}
", "abonnement/indexback.html.twig", "C:\\xampp\\htdocs\\Mbody_Prjt\\templates\\abonnement\\indexback.html.twig");
    }
}
