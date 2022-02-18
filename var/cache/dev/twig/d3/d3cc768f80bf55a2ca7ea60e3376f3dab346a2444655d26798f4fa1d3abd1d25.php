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
        echo "                <th class=\"text-uppercase\">Monday</th>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act1"]) || array_key_exists("Act1", $context) ? $context["Act1"] : (function () { throw new RuntimeError('Variable "Act1" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 26
            echo "                <td style=\"height: 85px\">
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
                echo "                        <td style=\"height: 85px\">
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
        echo "                <th class=\"text-uppercase\">Tuesday</th>

                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act2"]) || array_key_exists("Act2", $context) ? $context["Act2"] : (function () { throw new RuntimeError('Variable "Act2" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 79
            echo "                    <td style=\"height: 85px \">
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
                echo "                        <td style=\"height: 95px \">
                           ";
                // line 93
                echo "                        </td>
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
        echo "                <th class=\"text-uppercase\" > Wednesday </th>

                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act3"]) || array_key_exists("Act3", $context) ? $context["Act3"] : (function () { throw new RuntimeError('Variable "Act3" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 102
            echo "                    <td style=\"height: 85px\">
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
                echo "                        <td   style=\"height: 85px\"  >
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
                <th class=\"text-uppercase\">Thursday</th>

                ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act4"]) || array_key_exists("Act4", $context) ? $context["Act4"] : (function () { throw new RuntimeError('Variable "Act4" does not exist.', 123, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 124
            echo "                    <td style=\"height: 85px\">
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
                echo "                        <td style=\"height: 85px\">
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
                <th class=\"text-uppercase\">Friday</th>

                ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act5"]) || array_key_exists("Act5", $context) ? $context["Act5"] : (function () { throw new RuntimeError('Variable "Act5" does not exist.', 146, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 147
            echo "                    <td style=\"height: 85px\">
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
                echo "                        <td style=\"height: 85px\" >
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
            <tr>
                <th class=\"text-uppercase\">Saturday</th>

                ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act6"]) || array_key_exists("Act6", $context) ? $context["Act6"] : (function () { throw new RuntimeError('Variable "Act6" does not exist.', 170, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 171
            echo "                    <td style=\"height: 85px\">
                        <a href=\"#\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["act"], "getCategory", [], "any", false, false, false, 173), "getNomCat", [], "method", false, false, false, 173), "html", null, true);
            echo "</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">";
            // line 174
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getTempAct", [], "any", false, false, false, 174), "H:m"), "html", null, true);
            echo "</p></div>
                            <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                        </a>
                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                ";
        if ((-1 === twig_compare((isset($context["sizeAct6"]) || array_key_exists("sizeAct6", $context) ? $context["sizeAct6"] : (function () { throw new RuntimeError('Variable "sizeAct6" does not exist.', 179, $this->source); })()), 6))) {
            // line 180
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (6 - (isset($context["sizeAct6"]) || array_key_exists("sizeAct6", $context) ? $context["sizeAct6"] : (function () { throw new RuntimeError('Variable "sizeAct6" does not exist.', 180, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 181
                echo "                        <td style=\"height: 85px\" >
                            <p>.</p>
                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>

                            <p>.</p>

                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                ";
        }
        // line 190
        echo "            </tr>
            <tr>
                <th class=\"text-uppercase\">Sunday</th>

                ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act7"]) || array_key_exists("Act7", $context) ? $context["Act7"] : (function () { throw new RuntimeError('Variable "Act7" does not exist.', 194, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 195
            echo "                    <td style=\"height: 85px\">
                        <a href=\"#\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["act"], "getCategory", [], "any", false, false, false, 197), "getNomCat", [], "method", false, false, false, 197), "html", null, true);
            echo "</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">";
            // line 198
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getTempAct", [], "any", false, false, false, 198), "H:m"), "html", null, true);
            echo "</p></div>
                            <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                        </a>
                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                ";
        if ((-1 === twig_compare((isset($context["sizeAct7"]) || array_key_exists("sizeAct7", $context) ? $context["sizeAct7"] : (function () { throw new RuntimeError('Variable "sizeAct7" does not exist.', 203, $this->source); })()), 6))) {
            // line 204
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (6 - (isset($context["sizeAct7"]) || array_key_exists("sizeAct7", $context) ? $context["sizeAct7"] : (function () { throw new RuntimeError('Variable "sizeAct7" does not exist.', 204, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 205
                echo "                        <td style=\"height: 85px\" >
                            <p>.</p>
                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>

                            <p>.</p>

                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "                ";
        }
        // line 214
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
        return array (  448 => 214,  445 => 213,  432 => 205,  427 => 204,  424 => 203,  413 => 198,  409 => 197,  405 => 195,  401 => 194,  395 => 190,  392 => 189,  379 => 181,  374 => 180,  371 => 179,  360 => 174,  356 => 173,  352 => 171,  348 => 170,  342 => 166,  339 => 165,  326 => 157,  321 => 156,  318 => 155,  307 => 150,  303 => 149,  299 => 147,  295 => 146,  288 => 141,  285 => 140,  274 => 134,  269 => 133,  266 => 132,  255 => 127,  251 => 126,  247 => 124,  243 => 123,  237 => 119,  234 => 118,  223 => 112,  218 => 111,  215 => 110,  204 => 105,  200 => 104,  196 => 102,  192 => 101,  188 => 99,  184 => 96,  181 => 95,  174 => 93,  171 => 89,  166 => 88,  163 => 87,  152 => 82,  148 => 81,  144 => 79,  140 => 78,  136 => 76,  130 => 71,  128 => 43,  125 => 42,  114 => 36,  109 => 35,  106 => 34,  95 => 29,  91 => 28,  87 => 26,  83 => 25,  80 => 24,  76 => 21,  68 => 3,  58 => 2,  35 => 1,);
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
                <th class=\"text-uppercase\">Monday</th>
                {% for act in Act1 %}
                <td style=\"height: 85px\">
                    <a href=\"#\">
                        <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                        <div class=\"margin-10px-top font-size14 \"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                        <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                    </a>
                </td>
                {% endfor %}
                {% if(sizeAct1<6) %}
                    {% for i in 1..6-sizeAct1 %}
                        <td style=\"height: 85px\">
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
                <th class=\"text-uppercase\">Tuesday</th>

                {% for act in Act2 %}
                    <td style=\"height: 85px \">
                        <a href=\"#\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                            <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                        </a>
                    </td>
                {% endfor %}
                {% if(sizeAct2<6) %}
                    {% for i in 1..6-sizeAct2 %}
                        <td style=\"height: 95px \">
                           {# <p>.</p>
                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>
                            <p>.</p>#}
                        </td>
                    {% endfor %}
                {% endif %}

            <tr>
{#                <td class=\"align-middle\">11:00am</td>#}
                <th class=\"text-uppercase\" > Wednesday </th>

                {% for act in Act3 %}
                    <td style=\"height: 85px\">
                        <a href=\"#\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                            <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                        </a>
                    </td>
                {% endfor %}
                {% if(sizeAct3<6) %}
                    {% for i in 1..6-sizeAct3 %}
                        <td   style=\"height: 85px\"  >
                            <p>.</p>
                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>
                            <p>.</p>
                        </td>
                    {% endfor %}
                {% endif %}

            <tr>
                <th class=\"text-uppercase\">Thursday</th>

                {% for act in Act4 %}
                    <td style=\"height: 85px\">
                        <a href=\"#\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                            <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                        </a>
                    </td>
                {% endfor %}
                {% if(sizeAct4<6) %}
                    {% for i in 1..6-sizeAct4 %}
                        <td style=\"height: 85px\">
                            <p>.</p>
                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>
                            <p>.</p>
                        </td>
                    {% endfor %}
                {% endif %}
            </tr>

            <tr>
                <th class=\"text-uppercase\">Friday</th>

                {% for act in Act5 %}
                    <td style=\"height: 85px\">
                        <a href=\"#\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                            <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                        </a>
                    </td>
                {% endfor %}
                {% if(sizeAct5<6) %}
                    {% for i in 1..6-sizeAct5 %}
                        <td style=\"height: 85px\" >
                            <p>.</p>
                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>

                            <p>.</p>

                        </td>
                    {% endfor %}
                {% endif %}
            </tr>
            <tr>
                <th class=\"text-uppercase\">Saturday</th>

                {% for act in Act6 %}
                    <td style=\"height: 85px\">
                        <a href=\"#\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                            <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                        </a>
                    </td>
                {% endfor %}
                {% if(sizeAct6<6) %}
                    {% for i in 1..6-sizeAct6 %}
                        <td style=\"height: 85px\" >
                            <p>.</p>
                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>

                            <p>.</p>

                        </td>
                    {% endfor %}
                {% endif %}
            </tr>
            <tr>
                <th class=\"text-uppercase\">Sunday</th>

                {% for act in Act7 %}
                    <td style=\"height: 85px\">
                        <a href=\"#\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                            <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                        </a>
                    </td>
                {% endfor %}
                {% if(sizeAct7<6) %}
                    {% for i in 1..6-sizeAct7 %}
                        <td style=\"height: 85px\" >
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
