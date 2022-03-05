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
    <iframe src=\"https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2F127.0.0.1%3A8000%2Fabonnement%2Flist&layout=button_count&size=small&width=91&height=20&appId\" width=\"250\" height=\"20\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\"></iframe>
    <p style=\"margin-left: 950px\"> <input  id=\"myInput\"  type=\"text\" placeholder=\"Rechercher..\">
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 30
            echo "            <tr>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo " <br/></td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "nom", [], "any", false, false, false, 32), "html", null, true);
            echo " <br/></td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "prix", [], "any", false, false, false, 33), "html", null, true);
            echo " <br/></td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "categories", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "description", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td><img style=\"width: 150px;\" src=\"/uploads/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "getPhoto", [], "method", false, false, false, 36), "html", null, true);
            echo "\"></td>

                <td>
  ";
            // line 40
            echo "                    ";
            // line 41
            echo "
                    <form  action=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" >
                        <button type=\"submit\" name=\"submitAction\"  value=\"modifier\" class=\"btn btn-info\">Afficher</button>
                    </form>
                </td>
               <td>
                   <form method=\"post\" action=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" >
                       <button type=\"btn\" class=\"btn btn-warning\"> ";
            // line 48
            echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 48, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
            echo "</button>
                   </form>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 58, $this->source); })()), "abonnement/pagination.html.twig");
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
        // line 75
        echo "
     ";
        // line 77
        echo "<form method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_new");
        echo "\" >
<button type=\"btn\" class=\"btn btn-success\"> ";
        // line 78
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 78, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
</form>

    <button  class=\"btn btn-info mr-2\" onclick=\"window.print()\" ><i class=\"fa fa-print\" aria-hidden=\"true\"></i></i>  Imprimer</button>


    ";
        // line 84
        $this->displayBlock('b1', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_b1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "b1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "b1"));

        // line 85
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
        return array (  247 => 85,  228 => 84,  219 => 78,  214 => 77,  211 => 75,  191 => 58,  181 => 53,  171 => 48,  167 => 47,  159 => 42,  156 => 41,  154 => 40,  148 => 36,  144 => 35,  140 => 34,  136 => 33,  132 => 32,  128 => 31,  125 => 30,  120 => 29,  97 => 9,  93 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.back.html.twig' %}

{% block title %}Abonnement index{% endblock %}

{% block body %}

    <h1 style=\"color: #d46973\">Liste des abonnements</h1>
    <a href=\"{{ path('livraison_list') }}\"class=\"btn btn-danger\">PDF</a>
    <a href=\"{{path('TrierParNom')}} \" class=\"btn btn-success btn-sm\"  href=\"https://startbootstrap.com/theme/sb-admin-pro\"><i class=\"align-middle\" ></i>Trier par Prix</a>
    <iframe src=\"https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2F127.0.0.1%3A8000%2Fabonnement%2Flist&layout=button_count&size=small&width=91&height=20&appId\" width=\"250\" height=\"20\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\"></iframe>
    <p style=\"margin-left: 950px\"> <input  id=\"myInput\"  type=\"text\" placeholder=\"Rechercher..\">
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
        {{ knp_pagination_render(abonnements, 'abonnement/pagination.html.twig') }}

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
{% endblock %}
", "abonnement/indexback.html.twig", "C:\\xampp\\htdocs\\Mbody_Prjt\\templates\\abonnement\\indexback.html.twig");
    }
}
