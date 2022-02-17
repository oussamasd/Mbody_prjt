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

/* activity/schedule.html.twig */
class __TwigTemplate_d7f12b4a29039cb35698f5a9285c2fb17e387b2674a43890fd1997de994eb72c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Act' => [$this, 'block_Act'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.front.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/schedule.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/schedule.html.twig"));

        $this->parent = $this->loadTemplate("base.front.html.twig ", "activity/schedule.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_Act($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Act"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Act"));

        // line 3
        echo "

<div class=\"container\">

    <div class=\"table-responsive\">
        <table class=\"table table-bordered text-center\">
           ";
        // line 21
        echo "            <tbody>
            <tr>
";
        // line 24
        echo "                <th class=\"text-uppercase\">";
        echo twig_escape_filter($this->env, (isset($context["Act1Date"]) || array_key_exists("Act1Date", $context) ? $context["Act1Date"] : (function () { throw new RuntimeError('Variable "Act1Date" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</th>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act1"]) || array_key_exists("Act1", $context) ? $context["Act1"] : (function () { throw new RuntimeError('Variable "Act1" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 26
            echo "                <td>
                    <a href=\"#\">
                        <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["act"], "getCategory", [], "any", false, false, false, 28), "getNomCat", [], "method", false, false, false, 28), "html", null, true);
            echo "</span>
                        <div class=\"margin-10px-top font-size14 \"><p style=\"color: yellow\">";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getTempAct", [], "any", false, false, false, 29), "H:m"), "html", null, true);
            echo "</p></div>
                        <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                    </a>
                </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                ";
        if ((-1 === twig_compare((isset($context["sizeAct1"]) || array_key_exists("sizeAct1", $context) ? $context["sizeAct1"] : (function () { throw new RuntimeError('Variable "sizeAct1" does not exist.', 34, $this->source); })()), 6))) {
            // line 35
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (6 - (isset($context["sizeAct1"]) || array_key_exists("sizeAct1", $context) ? $context["sizeAct1"] : (function () { throw new RuntimeError('Variable "sizeAct1" does not exist.', 35, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 36
                echo "                        <td>
                            <p>.</p>
                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>
                            <p>.</p>
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                ";
        }
        // line 43
        echo "                ";
        // line 71
        echo "            </tr>


            <tr>
";
        // line 76
        echo "                <th class=\"text-uppercase\">";
        echo twig_escape_filter($this->env, (isset($context["Act2Date"]) || array_key_exists("Act2Date", $context) ? $context["Act2Date"] : (function () { throw new RuntimeError('Variable "Act2Date" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "</th>

                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act2"]) || array_key_exists("Act2", $context) ? $context["Act2"] : (function () { throw new RuntimeError('Variable "Act2" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 79
            echo "                    <td>
                        <a href=\"#\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["act"], "getCategory", [], "any", false, false, false, 81), "getNomCat", [], "method", false, false, false, 81), "html", null, true);
            echo "</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getTempAct", [], "any", false, false, false, 82), "H:m"), "html", null, true);
            echo "</p></div>
                            <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                        </a>
                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                ";
        if ((-1 === twig_compare((isset($context["sizeAct2"]) || array_key_exists("sizeAct2", $context) ? $context["sizeAct2"] : (function () { throw new RuntimeError('Variable "sizeAct2" does not exist.', 87, $this->source); })()), 6))) {
            // line 88
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (6 - (isset($context["sizeAct2"]) || array_key_exists("sizeAct2", $context) ? $context["sizeAct2"] : (function () { throw new RuntimeError('Variable "sizeAct2" does not exist.', 88, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 89
                echo "                        <td>
                            <p>.</p>
                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>
                            <p>.</p>
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                ";
        }
        // line 96
        echo "
            <tr>
";
        // line 99
        echo "                <th class=\"text-uppercase\">";
        echo twig_escape_filter($this->env, (isset($context["Act3Date"]) || array_key_exists("Act3Date", $context) ? $context["Act3Date"] : (function () { throw new RuntimeError('Variable "Act3Date" does not exist.', 99, $this->source); })()), "html", null, true);
        echo "</th>

                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act3"]) || array_key_exists("Act3", $context) ? $context["Act3"] : (function () { throw new RuntimeError('Variable "Act3" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 102
            echo "                    <td>
                        <a href=\"#\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["act"], "getCategory", [], "any", false, false, false, 104), "getNomCat", [], "method", false, false, false, 104), "html", null, true);
            echo "</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getTempAct", [], "any", false, false, false, 105), "H:m"), "html", null, true);
            echo "</p></div>
                            <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                        </a>
                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                ";
        if ((-1 === twig_compare((isset($context["sizeAct3"]) || array_key_exists("sizeAct3", $context) ? $context["sizeAct3"] : (function () { throw new RuntimeError('Variable "sizeAct3" does not exist.', 110, $this->source); })()), 6))) {
            // line 111
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (6 - (isset($context["sizeAct3"]) || array_key_exists("sizeAct3", $context) ? $context["sizeAct3"] : (function () { throw new RuntimeError('Variable "sizeAct3" does not exist.', 111, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 112
                echo "                        <td>
                            <p>.</p>
                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>
                            <p>.</p>
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                ";
        }
        // line 119
        echo "
            <tr>
                <th class=\"text-uppercase\">";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["Act4Date"]) || array_key_exists("Act4Date", $context) ? $context["Act4Date"] : (function () { throw new RuntimeError('Variable "Act4Date" does not exist.', 121, $this->source); })()), "html", null, true);
        echo "</th>

                ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act4"]) || array_key_exists("Act4", $context) ? $context["Act4"] : (function () { throw new RuntimeError('Variable "Act4" does not exist.', 123, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 124
            echo "                    <td>
                        <a href=\"#\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["act"], "getCategory", [], "any", false, false, false, 126), "getNomCat", [], "method", false, false, false, 126), "html", null, true);
            echo "</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">";
            // line 127
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getTempAct", [], "any", false, false, false, 127), "H:m"), "html", null, true);
            echo "</p></div>
                            <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                        </a>
                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                ";
        if ((-1 === twig_compare((isset($context["sizeAct4"]) || array_key_exists("sizeAct4", $context) ? $context["sizeAct4"] : (function () { throw new RuntimeError('Variable "sizeAct4" does not exist.', 132, $this->source); })()), 6))) {
            // line 133
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (6 - (isset($context["sizeAct4"]) || array_key_exists("sizeAct4", $context) ? $context["sizeAct4"] : (function () { throw new RuntimeError('Variable "sizeAct4" does not exist.', 133, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 134
                echo "                        <td >
                            <p>.</p>
                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>
                            <p>.</p>
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "                ";
        }
        // line 141
        echo "            </tr>

            <tr>
                <th class=\"text-uppercase\">";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["Act5Date"]) || array_key_exists("Act5Date", $context) ? $context["Act5Date"] : (function () { throw new RuntimeError('Variable "Act5Date" does not exist.', 144, $this->source); })()), "html", null, true);
        echo "</th>

                ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act5"]) || array_key_exists("Act5", $context) ? $context["Act5"] : (function () { throw new RuntimeError('Variable "Act5" does not exist.', 146, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 147
            echo "                    <td>
                        <a href=\"#\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["act"], "getCategory", [], "any", false, false, false, 149), "getNomCat", [], "method", false, false, false, 149), "html", null, true);
            echo "</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">";
            // line 150
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getTempAct", [], "any", false, false, false, 150), "H:m"), "html", null, true);
            echo "</p></div>
                            <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                        </a>
                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                ";
        if ((-1 === twig_compare((isset($context["sizeAct5"]) || array_key_exists("sizeAct5", $context) ? $context["sizeAct5"] : (function () { throw new RuntimeError('Variable "sizeAct5" does not exist.', 155, $this->source); })()), 6))) {
            // line 156
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (6 - (isset($context["sizeAct5"]) || array_key_exists("sizeAct5", $context) ? $context["sizeAct5"] : (function () { throw new RuntimeError('Variable "sizeAct5" does not exist.', 156, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 157
                echo "                        <td >
                            <p>.</p>
                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>

                            <p>.</p>

                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                ";
        }
        // line 166
        echo "            </tr>
            </tbody>
        </table>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "activity/schedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 166,  352 => 165,  339 => 157,  334 => 156,  331 => 155,  320 => 150,  316 => 149,  312 => 147,  308 => 146,  303 => 144,  298 => 141,  295 => 140,  284 => 134,  279 => 133,  276 => 132,  265 => 127,  261 => 126,  257 => 124,  253 => 123,  248 => 121,  244 => 119,  241 => 118,  230 => 112,  225 => 111,  222 => 110,  211 => 105,  207 => 104,  203 => 102,  199 => 101,  193 => 99,  189 => 96,  186 => 95,  175 => 89,  170 => 88,  167 => 87,  156 => 82,  152 => 81,  148 => 79,  144 => 78,  138 => 76,  132 => 71,  130 => 43,  127 => 42,  116 => 36,  111 => 35,  108 => 34,  97 => 29,  93 => 28,  89 => 26,  85 => 25,  80 => 24,  76 => 21,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.front.html.twig ' %}
{% block Act %}


<div class=\"container\">

    <div class=\"table-responsive\">
        <table class=\"table table-bordered text-center\">
           {# <thead>
            <tr class=\"bg-light-gray\">
                #}{#<th class=\"text-uppercase\">Time
                </th>#}{#
                <th class=\"text-uppercase\">{{ Act1Date }}</th>
                <th class=\"text-uppercase\">{{ Act2Date }}</th>
                <th class=\"text-uppercase\">{{ Act3Date }}</th>
                <th class=\"text-uppercase\">{{ Act4Date }}</th>
                <th class=\"text-uppercase\">{{ Act5Date }}</th>
                <th class=\"text-uppercase\">{{ Act6Date }}</th>
            </tr>
            </thead>#}
            <tbody>
            <tr>
{#                <td class=\"align-middle\">09:00am</td>#}
                <th class=\"text-uppercase\">{{ Act1Date }}</th>
                {% for act in Act1 %}
                <td>
                    <a href=\"#\">
                        <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                        <div class=\"margin-10px-top font-size14 \"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                        <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                    </a>
                </td>
                {% endfor %}
                {% if(sizeAct1<6) %}
                    {% for i in 1..6-sizeAct1 %}
                        <td>
                            <p>.</p>
                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>
                            <p>.</p>
                        </td>
                    {% endfor %}
                {% endif %}
                {#<td>
                    <span class=\"bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Yoga</span>
                    <div class=\"margin-10px-top font-size14\">9:00-10:00</div>
                    <div class=\"font-size13 text-light-gray\">Marta Healy</div>
                </td>

                <td>
                    <span class=\"bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Music</span>
                    <div class=\"margin-10px-top font-size14\">9:00-10:00</div>
                    <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                </td>
                <td>
                    <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Dance</span>
                    <div class=\"margin-10px-top font-size14\">9:00-10:00</div>
                    <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                </td>
                <td>
                    <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Art</span>
                    <div class=\"margin-10px-top font-size14\">9:00-10:00</div>
                    <div class=\"font-size13 text-light-gray\">Kate Alley</div>
                </td>
                <td>
                    <span class=\"bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">English</span>
                    <div class=\"margin-10px-top font-size14\">9:00-10:00</div>
                    <div class=\"font-size13 text-light-gray\">James Smith</div>
                </td>

#}
            </tr>


            <tr>
{#                <td class=\"align-middle\">10:00am</td>#}
                <th class=\"text-uppercase\">{{ Act2Date }}</th>

                {% for act in Act2 %}
                    <td>
                        <a href=\"#\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                            <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                        </a>
                    </td>
                {% endfor %}
                {% if(sizeAct2<6) %}
                    {% for i in 1..6-sizeAct2 %}
                        <td>
                            <p>.</p>
                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>
                            <p>.</p>
                        </td>
                    {% endfor %}
                {% endif %}

            <tr>
{#                <td class=\"align-middle\">11:00am</td>#}
                <th class=\"text-uppercase\">{{ Act3Date }}</th>

                {% for act in Act3 %}
                    <td>
                        <a href=\"#\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                            <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                        </a>
                    </td>
                {% endfor %}
                {% if(sizeAct3<6) %}
                    {% for i in 1..6-sizeAct3 %}
                        <td>
                            <p>.</p>
                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>
                            <p>.</p>
                        </td>
                    {% endfor %}
                {% endif %}

            <tr>
                <th class=\"text-uppercase\">{{ Act4Date }}</th>

                {% for act in Act4 %}
                    <td>
                        <a href=\"#\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                            <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                        </a>
                    </td>
                {% endfor %}
                {% if(sizeAct4<6) %}
                    {% for i in 1..6-sizeAct4 %}
                        <td >
                            <p>.</p>
                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>
                            <p>.</p>
                        </td>
                    {% endfor %}
                {% endif %}
            </tr>

            <tr>
                <th class=\"text-uppercase\">{{ Act5Date }}</th>

                {% for act in Act5 %}
                    <td>
                        <a href=\"#\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                            <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                        </a>
                    </td>
                {% endfor %}
                {% if(sizeAct5<6) %}
                    {% for i in 1..6-sizeAct5 %}
                        <td >
                            <p>.</p>
                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>

                            <p>.</p>

                        </td>
                    {% endfor %}
                {% endif %}
            </tr>
            </tbody>
        </table>
    </div>
</div>

{% endblock %}", "activity/schedule.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\activity\\schedule.html.twig");
    }
}
