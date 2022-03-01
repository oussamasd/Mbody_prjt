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

/* produits/index.html.twig */
class __TwigTemplate_bd849c5dd652915b35a0fad19a482d7ae7e9f69b8f7f0869990c975c30b1face extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/index.html.twig"));

        $this->parent = $this->loadTemplate("base.back.html.twig", "produits/index.html.twig", 1);
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

        echo "Produits ";
        
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
<button  class=\"btn btn-info mr-2\" onclick=\"window.print()\" ><i class=\"fa fa-print\" aria-hidden=\"true\"></i></i>  Imprimer</button>

        <table class=\"table\" class=\"table\" style=\"border: medium solid #000000\">
            <thead>
                <tr>
                    <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Id</th>
                    <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Nom</th>
                    <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Prix</th>
                    <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Quantite</th>
                    <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Categories</th>
                    <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">photo</th>
                    <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 22
            echo "                <tr>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "getNomCat", [], "any", false, false, false, 27), "getNom", [], "method", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td><img style=\"width: 150px;\" src=\"/uploads/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "photo", [], "any", false, false, false, 28), "html", null, true);
            echo "\"></td>
                    <td>
                        <a class=\"btn btn-info mr-2\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">show</a>
                        <a class=\"btn btn-info mr-2\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">edit</a>
                        <a class=\"btn btn-info mr-2\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">delete</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "                <tr>
                    <td colspan=\"5\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>
        </table>

        <a class=\"btn btn-primary\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits_new");
        echo "\">Create new</a>
";
        // line 45
        $this->displayBlock('b1', $context, $blocks);
        // line 50
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_b1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "b1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "b1"));

        // line 46
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produits/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 46,  189 => 45,  177 => 50,  175 => 45,  171 => 43,  166 => 40,  157 => 36,  148 => 32,  144 => 31,  140 => 30,  135 => 28,  131 => 27,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  112 => 22,  107 => 21,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.back.html.twig' %}

{% block title %}Produits {% endblock %}
{% block body %}

<button  class=\"btn btn-info mr-2\" onclick=\"window.print()\" ><i class=\"fa fa-print\" aria-hidden=\"true\"></i></i>  Imprimer</button>

        <table class=\"table\" class=\"table\" style=\"border: medium solid #000000\">
            <thead>
                <tr>
                    <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Id</th>
                    <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Nom</th>
                    <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Prix</th>
                    <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Quantite</th>
                    <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">Categories</th>
                    <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">photo</th>
                    <th style=\"border: thin solid #6495ed\" width=\"5%\" bgcolor=\"#c4c2ff\">actions</th>
                </tr>
            </thead>
            <tbody>
            {% for produit in produits %}
                <tr>
                    <td>{{ produit.id }}</td>
                    <td>{{ produit.nom }}</td>
                    <td>{{ produit.prix }}</td>
                    <td>{{ produit.quantite }}</td>
                    <td>{{ produit.getNomCat.getNom() }}</td>
                    <td><img style=\"width: 150px;\" src=\"/uploads/{{ produit.photo }}\"></td>
                    <td>
                        <a class=\"btn btn-info mr-2\" href=\"{{ path('produits_show', {'id': produit.id}) }}\">show</a>
                        <a class=\"btn btn-info mr-2\" href=\"{{ path('produits_edit', {'id': produit.id}) }}\">edit</a>
                        <a class=\"btn btn-info mr-2\" href=\"{{ path('produits_delete', {'id': produit.id}) }}\">delete</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <a class=\"btn btn-primary\" href=\"{{ path('produits_new') }}\">Create new</a>
{#{% endblock %}#}
{% block b1 %}


{% endblock %}
{#{% block prix %}#}


{% endblock %}
{#{% block Produit %}#}
{#    <h1>Produits index</h1>#}

{#    <table class=\"table\">#}
{#        <thead>#}
{#            <tr>#}
{#                <th>Id</th>#}
{#                <th>Nom</th>#}
{#                <th>Prix</th>#}
{#                <th>Quantite</th>#}
{#                <th>actions</th>#}
{#            </tr>#}
{#        </thead>#}
{#        <tbody>#}
{#        {% for produit in produits %}#}
{#            <tr>#}
{#                <td>{{ produit.id }}</td>#}
{#                <td>{{ produit.nom }}</td>#}
{#                <td>{{ produit.prix }}</td>#}
{#                <td>{{ produit.quantite }}</td>#}
{#                <td>{{ produit.categories }}</td>#}
{#                <td>#}
{#                    <a href=\"{{ path('produits_show', {'id': produit.id}) }}\">show</a>#}
{#                    <a href=\"{{ path('produits_edit', {'id': produit.id}) }}\">edit</a>#}
{#                </td>#}
{#            </tr>#}
{#        {% else %}#}
{#            <tr>#}
{#                <td colspan=\"5\">no records found</td>#}
{#            </tr>#}
{#        {% endfor %}#}
{#        </tbody>#}
{#    </table>#}

{#    <a href=\"{{ path('produits_new') }}\">Create new</a>#}
{#{% endblock %}#}
", "produits/index.html.twig", "C:\\Users\\Mehdi AZZAZ\\Mbody_Prjt\\templates\\produits\\index.html.twig");
    }
}
