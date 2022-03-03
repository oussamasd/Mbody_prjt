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

/* admin/index.html.twig */
class __TwigTemplate_7ed8b5b9f2d02591233859e0623d38c4045a52afe06173ccb025d511533c7047 extends Template
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
        // line 2
        return "base.back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.back.html.twig", "admin/index.html.twig", 2);
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

        echo "Admin. | ";
        $this->displayParentBlock("title", $context, $blocks);
        
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
    <style>

        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>
<div class=\"container-fluid\">
<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <h6 class=\"m-0 font-weight-bold text-primary\">
            Liste des utilisateurs
            </h6>
    </div>
   ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                  ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 23, $this->source); })()), "search", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "btn btn-primary", "type" => "button"]]);
        echo "
            </div>

            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 26, $this->source); })()), "cin", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "id" => "myInput", "placeholder" => "Chercher une User  : Inserer son cin ", "type" => "text"]]);
        echo "
        </div>
    </div>
    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
    <div class=\"card-body\">
        <div class=\"table-responsive\">
";
        // line 33
        echo "            <table class=\"table table-bordered\"  width=\"100%\" cellspacing=\"0\">

                <thead>
                <br>

                <th  style=\"width: 100px\">cin</th>
                <th style=\"width: 100px\">nom</th>
                <th style=\"width: 100px\">email</th>
                <th style=\"width: 100px\">role</th>
                <th style=\"width: 100px\">actions</th>
                <th style=\"width: 100px\">envoyer un email)</th>

                </thead>
                <tbody id=\"myTable\">
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 48
            echo "                <tr>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "cin", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                    <td>  ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 53
                echo "                            ";
                if ((0 === twig_compare($context["role"], "ROLE_USER"))) {
                    // line 54
                    echo "                                  Utilisateur

                            ";
                } elseif ((0 === twig_compare(                // line 56
$context["role"], "ROLE_ADMIN"))) {
                    // line 57
                    echo "                                Administrateur
                            ";
                }
                // line 59
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                    </td>
                    <td> <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerU", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-circle\" >
                            <i class='fa fa-remove'></i></a>
                        <div class=\"my-2\"> </div>
                        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 65
                echo "                        ";
                if ((0 === twig_compare($context["role"], "ROLE_USER"))) {
                    // line 66
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierU", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                    echo "\"  class=\"btn btn-info btn-circle\"><i class=\"fa fa-wrench\"></i></i></a>


                            ";
                } elseif ((0 === twig_compare(                // line 69
$context["role"], "ROLE_ADMIN"))) {
                    // line 70
                    echo "                        ";
                }
                // line 71
                echo "                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "

                    </td>
                     <td>


                        <div class=\"my-2\"> </div>
                         <a href=\"  ";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\" class=\"btn btn-light btn-icon-split\"  >
                              <span class=\"icon text-gray-600\" >
                                <i class=\"fas fa-arrow-right\">
                                </i>
                            </span>
                             <span class=\"text \">envoyer un email</span>

                         </a>

                    </td>
                </tr>


                </tbody ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo ">
            </table>
            <button  class=\"btn btn-info mr-2\" onclick=\"window.print()\" ><i class=\"fa fa-print\" aria-hidden=\"true\"></i></i> Imprimer</button>

        </div>

        </div>
</div>
</div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"myInput\").on(\"keyup\", function() {
                var  value = \$(this).val().toLowerCase();
                \$(\"myTable\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 92,  230 => 79,  221 => 72,  215 => 71,  212 => 70,  210 => 69,  203 => 66,  200 => 65,  196 => 64,  190 => 61,  187 => 60,  181 => 59,  177 => 57,  175 => 56,  171 => 54,  168 => 53,  164 => 52,  160 => 51,  156 => 50,  152 => 49,  149 => 48,  145 => 47,  129 => 33,  123 => 29,  117 => 26,  111 => 23,  104 => 19,  89 => 6,  79 => 5,  59 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.back.html.twig' %}
{% block title %}Admin. | {{ parent() }}{% endblock %}

{% block body %}

    <style>

        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>
<div class=\"container-fluid\">
<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <h6 class=\"m-0 font-weight-bold text-primary\">
            Liste des utilisateurs
            </h6>
    </div>
   {{ form_start(formSearch)}}
    <div class=\"form-group\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                  {{form_row(formSearch.search ,{'attr':{'class':'btn btn-primary','type':'button'}})  }}
            </div>

            {{ form_widget(formSearch.cin,{'attr':{'class':'form-control','id':'myInput','placeholder':'Chercher une User  : Inserer son cin ','type':'text'}}) }}
        </div>
    </div>
    {{ form_end(formSearch) }}
    <div class=\"card-body\">
        <div class=\"table-responsive\">
{#            <p style=\"margin-left: 950px\"> <input  id=\"myInput\"  type=\"text\" placeholder=\"Rechercher..\"></p>#}
            <table class=\"table table-bordered\"  width=\"100%\" cellspacing=\"0\">

                <thead>
                <br>

                <th  style=\"width: 100px\">cin</th>
                <th style=\"width: 100px\">nom</th>
                <th style=\"width: 100px\">email</th>
                <th style=\"width: 100px\">role</th>
                <th style=\"width: 100px\">actions</th>
                <th style=\"width: 100px\">envoyer un email)</th>

                </thead>
                <tbody id=\"myTable\">
                {% for user in users %}
                <tr>
                    <td>{{ user.cin }}</td>
                    <td>{{ user.nom }}</td>
                    <td>{{ user.email }}</td>
                    <td>  {% for role in user.roles %}
                            {% if role == \"ROLE_USER\" %}
                                  Utilisateur

                            {% elseif role == \"ROLE_ADMIN\" %}
                                Administrateur
                            {% endif %}
                        {% endfor %}
                    </td>
                    <td> <a href=\"{{ path ('supprimerU' ,{'id':user.id}) }}\" class=\"btn btn-danger btn-circle\" >
                            <i class='fa fa-remove'></i></a>
                        <div class=\"my-2\"> </div>
                        {% for role in user.roles %}
                        {% if role == \"ROLE_USER\"   %}
                            <a href=\"{{ path ('modifierU' ,{'id':user.id}) }}\"  class=\"btn btn-info btn-circle\"><i class=\"fa fa-wrench\"></i></i></a>


                            {% elseif  role == \"ROLE_ADMIN\" %}
                        {% endif %}
                           {% endfor %}


                    </td>
                     <td>


                        <div class=\"my-2\"> </div>
                         <a href=\"  {{path('contact',{'id':user.id})  }}\" class=\"btn btn-light btn-icon-split\"  >
                              <span class=\"icon text-gray-600\" >
                                <i class=\"fas fa-arrow-right\">
                                </i>
                            </span>
                             <span class=\"text \">envoyer un email</span>

                         </a>

                    </td>
                </tr>


                </tbody {% endfor %}>
            </table>
            <button  class=\"btn btn-info mr-2\" onclick=\"window.print()\" ><i class=\"fa fa-print\" aria-hidden=\"true\"></i></i> Imprimer</button>

        </div>

        </div>
</div>
</div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"myInput\").on(\"keyup\", function() {
                var  value = \$(this).val().toLowerCase();
                \$(\"myTable\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
{% endblock %}
", "admin/index.html.twig", "C:\\xampp\\htdocs\\Mbody_prjt\\templates\\admin\\index.html.twig");
    }
}
