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

/* abonnement/pagination.html.twig */
class __TwigTemplate_9572462b7150e4608985dd8bfdd7be315f5f238fc995e39b7a62a7d37c604c9b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/pagination.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ((1 === twig_compare((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 2, $this->source); })()), 1))) {
            // line 3
            echo "    <ul class=\"pagination\">
        ";
            // line 4
            if (array_key_exists("previous", $context)) {
                // line 5
                echo "            <li class=\"page-item\">
                <a rel=\"prev\" href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 6, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 6, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 6, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 6, $this->source); })())])), "html", null, true);
                echo "\" class=\"page-link\">&laquo;&nbsp; Previous</a>
            </li>
        ";
            } else {
                // line 9
                echo "            <li class=\"page-item disabled\">
                <span class=\"page-link\">&laquo;&nbsp; Previous</span>
            </li>
        ";
            }
            // line 13
            echo "
        ";
            // line 14
            if ((1 === twig_compare((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 14, $this->source); })()), 1))) {
                // line 15
                echo "            <li class=\"page-item\">
                <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 16, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 16, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 16, $this->source); })()) => 1])), "html", null, true);
                echo "\" class=\"page-link\">1</a>
            </li>
            ";
                // line 18
                if ((0 === twig_compare((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 18, $this->source); })()), 3))) {
                    // line 19
                    echo "                <li class=\"page-item\">
                    <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 20, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 20, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 20, $this->source); })()) => 2])), "html", null, true);
                    echo "\" class=\"page-link\">2</a>
                </li>
            ";
                } elseif ((0 !== twig_compare(                // line 22
(isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 22, $this->source); })()), 2))) {
                    // line 23
                    echo "                <li class=\"page-item disabled\">
                    <span class=\"page-link\">&hellip;</span>
                </li>
            ";
                }
                // line 27
                echo "        ";
            }
            // line 28
            echo "
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 30
                echo "            ";
                if ((0 !== twig_compare($context["page"], (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 30, $this->source); })())))) {
                    // line 31
                    echo "                <li class=\"page-item\">
                    <a href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 32, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 32, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 32, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\" class=\"page-link\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                } else {
                    // line 35
                    echo "                <li class=\"active page-item\">
                    <span class=\"page-link\">";
                    // line 36
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
                </li>
            ";
                }
                // line 39
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
        ";
            // line 42
            if ((1 === twig_compare((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 42, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 42, $this->source); })())))) {
                // line 43
                echo "            ";
                if ((1 === twig_compare((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 43, $this->source); })()), ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 43, $this->source); })()) + 1)))) {
                    // line 44
                    echo "                ";
                    if ((1 === twig_compare((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 44, $this->source); })()), ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 44, $this->source); })()) + 2)))) {
                        // line 45
                        echo "                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">&hellip;</span>
                    </li>
                ";
                    } else {
                        // line 49
                        echo "                    <li class=\"page-item\">
                        <a href=\"";
                        // line 50
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 50, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 50, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 50, $this->source); })()) => ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 50, $this->source); })()) - 1)])), "html", null, true);
                        echo "\" class=\"page-link\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 50, $this->source); })()) - 1), "html", null, true);
                        echo "</a>
                    </li>
                ";
                    }
                    // line 53
                    echo "            ";
                }
                // line 54
                echo "            <li>
                <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 55, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 55, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 55, $this->source); })()) => (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 55, $this->source); })())])), "html", null, true);
                echo "\" class=\"page-link\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 55, $this->source); })()), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 58
            echo "
        ";
            // line 59
            if (array_key_exists("next", $context)) {
                // line 60
                echo "            <li class=\"page-item\">
                <a rel=\"next\" class=\"page-link\" href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 61, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 61, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 61, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 61, $this->source); })())])), "html", null, true);
                echo "\">Next&nbsp;&raquo;</a>
            </li>
        ";
            } else {
                // line 64
                echo "            <li class=\"page-item disabled\">
                <span class=\"page-link\">Next&nbsp;&raquo;</span>
            </li>
        ";
            }
            // line 68
            echo "    </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "abonnement/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 68,  195 => 64,  189 => 61,  186 => 60,  184 => 59,  181 => 58,  173 => 55,  170 => 54,  167 => 53,  159 => 50,  156 => 49,  150 => 45,  147 => 44,  144 => 43,  142 => 42,  139 => 41,  132 => 39,  126 => 36,  123 => 35,  115 => 32,  112 => 31,  109 => 30,  105 => 29,  102 => 28,  99 => 27,  93 => 23,  91 => 22,  86 => 20,  83 => 19,  81 => 18,  76 => 16,  73 => 15,  71 => 14,  68 => 13,  62 => 9,  56 => 6,  53 => 5,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if pageCount > 1 %}
    <ul class=\"pagination\">
        {% if previous is defined %}
            <li class=\"page-item\">
                <a rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\" class=\"page-link\">&laquo;&nbsp; Previous</a>
            </li>
        {% else %}
            <li class=\"page-item disabled\">
                <span class=\"page-link\">&laquo;&nbsp; Previous</span>
            </li>
        {% endif %}

        {% if startPage > 1 %}
            <li class=\"page-item\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): 1})) }}\" class=\"page-link\">1</a>
            </li>
            {% if startPage == 3 %}
                <li class=\"page-item\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): 2})) }}\" class=\"page-link\">2</a>
                </li>
            {% elseif startPage != 2 %}
                <li class=\"page-item disabled\">
                    <span class=\"page-link\">&hellip;</span>
                </li>
            {% endif %}
        {% endif %}

        {% for page in pagesInRange %}
            {% if page != current %}
                <li class=\"page-item\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\" class=\"page-link\">{{ page }}</a>
                </li>
            {% else %}
                <li class=\"active page-item\">
                    <span class=\"page-link\">{{ page }}</span>
                </li>
            {% endif %}

        {% endfor %}

        {% if pageCount > endPage %}
            {% if pageCount > (endPage + 1) %}
                {% if pageCount > (endPage + 2) %}
                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">&hellip;</span>
                    </li>
                {% else %}
                    <li class=\"page-item\">
                        <a href=\"{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}\" class=\"page-link\">{{ pageCount -1 }}</a>
                    </li>
                {% endif %}
            {% endif %}
            <li>
                <a href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\" class=\"page-link\">{{ pageCount }}</a>
            </li>
        {% endif %}

        {% if next is defined %}
            <li class=\"page-item\">
                <a rel=\"next\" class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">Next&nbsp;&raquo;</a>
            </li>
        {% else %}
            <li class=\"page-item disabled\">
                <span class=\"page-link\">Next&nbsp;&raquo;</span>
            </li>
        {% endif %}
    </ul>
{% endif %}", "abonnement/pagination.html.twig", "C:\\xampp\\htdocs\\Mbody_Prjt\\templates\\abonnement\\pagination.html.twig");
    }
}
