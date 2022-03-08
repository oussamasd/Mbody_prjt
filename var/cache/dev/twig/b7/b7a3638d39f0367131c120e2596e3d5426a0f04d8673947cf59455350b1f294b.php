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

/* activity/index.html.twig */
class __TwigTemplate_b17994d81844f052e6b0555e254024f082f2b79bc8c91c97aa1cce42d4918c3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/index.html.twig"));

        $this->parent = $this->loadTemplate("base.back.html.twig", "activity/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"form-group\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
            </div>
            <p style=\"margin-left: 950px\">  <input type=\"text\" id=\"myInput\" class=\"form-control\" placeholder=\"Chercher une activite\">
        </div>
    </div>
<table border=\"1\" style=\"width: 100%\" id=\"myTable\">
    <tr>
        <th style=\"color: #fffb4c\">nom activitie</th>
        <th>date activite</th>
        <th>temps activite </th>
        <th>description </th>
        <th>category </th>
        <th>Action </th>

    </tr>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 21
            echo "        <tr>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getNomAct", [], "method", false, false, false, 22), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getDateAct", [], "method", false, false, false, 23), "Y-m-d"), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getTempAct", [], "method", false, false, false, 24), "H:i"), "html", null, true);
            echo " </td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getDescriptionAct", [], "method", false, false, false, 25), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "getCategory", [], "any", false, false, false, 26), "getNomCat", [], "method", false, false, false, 26), "html", null, true);
            echo " </td>
            <td>
                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ActivityUpdate", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "getId", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\"> <i class=\"fa-solid fa-cog fa-spin\"></i> </a>

                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ActivityDelete", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "getId", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-xmark\"></i></a>

                <a href=\"https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/activity/details/";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getId", [], "any", false, false, false, 32), "html", null, true);
            echo "\" >

                    <i class=\"fab fa-facebook-f\"></i>
                </a>





            </td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</table>
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "activity/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 45,  125 => 32,  120 => 30,  115 => 28,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  91 => 21,  87 => 20,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.back.html.twig' %}
{% block body %}
    <div class=\"form-group\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
            </div>
            <p style=\"margin-left: 950px\">  <input type=\"text\" id=\"myInput\" class=\"form-control\" placeholder=\"Chercher une activite\">
        </div>
    </div>
<table border=\"1\" style=\"width: 100%\" id=\"myTable\">
    <tr>
        <th style=\"color: #fffb4c\">nom activitie</th>
        <th>date activite</th>
        <th>temps activite </th>
        <th>description </th>
        <th>category </th>
        <th>Action </th>

    </tr>
    {% for e in activities %}
        <tr>
            <td>{{ e.getNomAct()}}</td>
            <td>{{ e.getDateAct()|date('Y-m-d')}}</td>
            <td>{{ e.getTempAct()|date('H:i')}} </td>
            <td>{{ e.getDescriptionAct()}}</td>
            <td>{{ e.getCategory.getNomCat()}} </td>
            <td>
                <a href=\"{{ path('ActivityUpdate',{\"id\":e.getId}) }}\"> <i class=\"fa-solid fa-cog fa-spin\"></i> </a>

                <a href=\"{{ path('ActivityDelete',{\"id\":e.getId}) }}\"><i class=\"fa-solid fa-xmark\"></i></a>

                <a href=\"https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/activity/details/{{ e.getId }}\" >

                    <i class=\"fab fa-facebook-f\"></i>
                </a>





            </td>

        </tr>
    {% endfor %}
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
{% endblock %}", "activity/index.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\activity\\index.html.twig");
    }
}
