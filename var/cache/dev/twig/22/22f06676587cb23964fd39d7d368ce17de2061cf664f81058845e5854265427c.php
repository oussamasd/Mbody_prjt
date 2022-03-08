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
class __TwigTemplate_6e70551616a832027817ef55949c6a7ca1c41828d21c09762845993b5f740163 extends Template
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
            echo "
                <td style=\"height: 85px\">
                    <a href=\"/activity/details/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getId", [], "method", false, false, false, 28), "html", null, true);
            echo "\">

                        <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["act"], "getCategory", [], "any", false, false, false, 30), "getNomCat", [], "method", false, false, false, 30), "html", null, true);
            echo "</span>
                        <div class=\"margin-10px-top font-size14 \"><p style=\"color: yellow\">";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getTempAct", [], "any", false, false, false, 31), "H:m"), "html", null, true);
            echo "</p></div>
                        <div class=\"font-size13 text-light-gray\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getNomAct", [], "method", false, false, false, 32), "html", null, true);
            echo "</div>
                    </a>
                </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                ";
        if ((-1 === twig_compare((isset($context["sizeAct1"]) || array_key_exists("sizeAct1", $context) ? $context["sizeAct1"] : (function () { throw new RuntimeError('Variable "sizeAct1" does not exist.', 36, $this->source); })()), 6))) {
            // line 37
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (6 - (isset($context["sizeAct1"]) || array_key_exists("sizeAct1", $context) ? $context["sizeAct1"] : (function () { throw new RuntimeError('Variable "sizeAct1" does not exist.', 37, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 38
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
            // line 45
            echo "                ";
        }
        // line 46
        echo "                ";
        // line 74
        echo "            </tr>


            <tr>
";
        // line 79
        echo "                <th class=\"text-uppercase\">Tuesday</th>

                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act2"]) || array_key_exists("Act2", $context) ? $context["Act2"] : (function () { throw new RuntimeError('Variable "Act2" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 82
            echo "                    <td style=\"height: 85px \">
                        <a href=\"/activity/details/";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getId", [], "method", false, false, false, 83), "html", null, true);
            echo "\">

                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["act"], "getCategory", [], "any", false, false, false, 85), "getNomCat", [], "method", false, false, false, 85), "html", null, true);
            echo "</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getTempAct", [], "any", false, false, false, 86), "H:m"), "html", null, true);
            echo "</p></div>
                            <div class=\"font-size13 text-light-gray\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getNomAct", [], "method", false, false, false, 87), "html", null, true);
            echo "</div>
                        </a>
                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                ";
        if ((-1 === twig_compare((isset($context["sizeAct2"]) || array_key_exists("sizeAct2", $context) ? $context["sizeAct2"] : (function () { throw new RuntimeError('Variable "sizeAct2" does not exist.', 91, $this->source); })()), 6))) {
            // line 92
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (6 - (isset($context["sizeAct2"]) || array_key_exists("sizeAct2", $context) ? $context["sizeAct2"] : (function () { throw new RuntimeError('Variable "sizeAct2" does not exist.', 92, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 93
                echo "                        <td style=\"height: 95px \">
                            <p>.</p>

                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>
                            <p>.</p>
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                ";
        }
        // line 101
        echo "
            <tr>
";
        // line 104
        echo "                <th class=\"text-uppercase\" > Wednesday </th>

                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act3"]) || array_key_exists("Act3", $context) ? $context["Act3"] : (function () { throw new RuntimeError('Variable "Act3" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 107
            echo "                    <td style=\"height: 85px\">
                        <a href=\"/activity/details/";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getId", [], "method", false, false, false, 108), "html", null, true);
            echo "\">

                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["act"], "getCategory", [], "any", false, false, false, 110), "getNomCat", [], "method", false, false, false, 110), "html", null, true);
            echo "</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">";
            // line 111
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getTempAct", [], "any", false, false, false, 111), "H:m"), "html", null, true);
            echo "</p></div>
                            <div class=\"font-size13 text-light-gray\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getNomAct", [], "method", false, false, false, 112), "html", null, true);
            echo "</div>
                        </a>
                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                ";
        if ((-1 === twig_compare((isset($context["sizeAct3"]) || array_key_exists("sizeAct3", $context) ? $context["sizeAct3"] : (function () { throw new RuntimeError('Variable "sizeAct3" does not exist.', 116, $this->source); })()), 6))) {
            // line 117
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (6 - (isset($context["sizeAct3"]) || array_key_exists("sizeAct3", $context) ? $context["sizeAct3"] : (function () { throw new RuntimeError('Variable "sizeAct3" does not exist.', 117, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 118
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
            // line 124
            echo "                ";
        }
        // line 125
        echo "
            <tr>
                <th class=\"text-uppercase\">Thursday</th>

                ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act4"]) || array_key_exists("Act4", $context) ? $context["Act4"] : (function () { throw new RuntimeError('Variable "Act4" does not exist.', 129, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 130
            echo "                    <td style=\"height: 85px\">
                        <a href=\"/activity/details/";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getId", [], "method", false, false, false, 131), "html", null, true);
            echo "\">

                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["act"], "getCategory", [], "any", false, false, false, 133), "getNomCat", [], "method", false, false, false, 133), "html", null, true);
            echo "</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">";
            // line 134
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getTempAct", [], "any", false, false, false, 134), "H:m"), "html", null, true);
            echo "</p></div>
                            <div class=\"font-size13 text-light-gray\">";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getNomAct", [], "method", false, false, false, 135), "html", null, true);
            echo "</div>
                        </a>
                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                ";
        if ((-1 === twig_compare((isset($context["sizeAct4"]) || array_key_exists("sizeAct4", $context) ? $context["sizeAct4"] : (function () { throw new RuntimeError('Variable "sizeAct4" does not exist.', 139, $this->source); })()), 6))) {
            // line 140
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (6 - (isset($context["sizeAct4"]) || array_key_exists("sizeAct4", $context) ? $context["sizeAct4"] : (function () { throw new RuntimeError('Variable "sizeAct4" does not exist.', 140, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 141
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
            // line 147
            echo "                ";
        }
        // line 148
        echo "            </tr>

            <tr>
                <th class=\"text-uppercase\">Friday</th>

                ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act5"]) || array_key_exists("Act5", $context) ? $context["Act5"] : (function () { throw new RuntimeError('Variable "Act5" does not exist.', 153, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 154
            echo "                    <td style=\"height: 85px\">
                        <a href=\"/activity/details/";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getId", [], "method", false, false, false, 155), "html", null, true);
            echo "\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["act"], "getCategory", [], "any", false, false, false, 156), "getNomCat", [], "method", false, false, false, 156), "html", null, true);
            echo "</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">";
            // line 157
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getTempAct", [], "any", false, false, false, 157), "H:m"), "html", null, true);
            echo "</p></div>
                            <div class=\"font-size13 text-light-gray\">";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getNomAct", [], "method", false, false, false, 158), "html", null, true);
            echo "</div>
                        </a>
                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                ";
        if ((-1 === twig_compare((isset($context["sizeAct5"]) || array_key_exists("sizeAct5", $context) ? $context["sizeAct5"] : (function () { throw new RuntimeError('Variable "sizeAct5" does not exist.', 162, $this->source); })()), 6))) {
            // line 163
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (6 - (isset($context["sizeAct5"]) || array_key_exists("sizeAct5", $context) ? $context["sizeAct5"] : (function () { throw new RuntimeError('Variable "sizeAct5" does not exist.', 163, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 164
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
            // line 172
            echo "                ";
        }
        // line 173
        echo "            </tr>
            <tr>
                <th class=\"text-uppercase\">Saturday</th>

                ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act6"]) || array_key_exists("Act6", $context) ? $context["Act6"] : (function () { throw new RuntimeError('Variable "Act6" does not exist.', 177, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 178
            echo "                    <td style=\"height: 85px\">
                        <a href=\"/activity/details/";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getId", [], "method", false, false, false, 179), "html", null, true);
            echo "\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["act"], "getCategory", [], "any", false, false, false, 180), "getNomCat", [], "method", false, false, false, 180), "html", null, true);
            echo "</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">";
            // line 181
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getTempAct", [], "any", false, false, false, 181), "H:m"), "html", null, true);
            echo "</p></div>
                            <div class=\"font-size13 text-light-gray\">";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getNomAct", [], "method", false, false, false, 182), "html", null, true);
            echo "</div>
                        </a>
                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "                ";
        if ((-1 === twig_compare((isset($context["sizeAct6"]) || array_key_exists("sizeAct6", $context) ? $context["sizeAct6"] : (function () { throw new RuntimeError('Variable "sizeAct6" does not exist.', 186, $this->source); })()), 6))) {
            // line 187
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (6 - (isset($context["sizeAct6"]) || array_key_exists("sizeAct6", $context) ? $context["sizeAct6"] : (function () { throw new RuntimeError('Variable "sizeAct6" does not exist.', 187, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 188
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
            // line 196
            echo "                ";
        }
        // line 197
        echo "            </tr>
            <tr>
                <th class=\"text-uppercase\">Sunday</th>

                ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Act7"]) || array_key_exists("Act7", $context) ? $context["Act7"] : (function () { throw new RuntimeError('Variable "Act7" does not exist.', 201, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 202
            echo "                    <td style=\"height: 85px\">
                        <a href=\"/activity/details/";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getId", [], "method", false, false, false, 203), "html", null, true);
            echo "\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["act"], "getCategory", [], "any", false, false, false, 204), "getNomCat", [], "method", false, false, false, 204), "html", null, true);
            echo "</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">";
            // line 205
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getTempAct", [], "any", false, false, false, 205), "H:m"), "html", null, true);
            echo "</p></div>
                            <div class=\"font-size13 text-light-gray\">";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "getNomAct", [], "method", false, false, false, 206), "html", null, true);
            echo "</div>
                        </a>
                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                ";
        if ((-1 === twig_compare((isset($context["sizeAct7"]) || array_key_exists("sizeAct7", $context) ? $context["sizeAct7"] : (function () { throw new RuntimeError('Variable "sizeAct7" does not exist.', 210, $this->source); })()), 6))) {
            // line 211
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (6 - (isset($context["sizeAct7"]) || array_key_exists("sizeAct7", $context) ? $context["sizeAct7"] : (function () { throw new RuntimeError('Variable "sizeAct7" does not exist.', 211, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 212
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
            // line 220
            echo "                ";
        }
        // line 221
        echo "            </tr>
            </tbody>
        </table>
    </div>
</div>
    <div>
        <a href=\"";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity");
        echo "\">show all activity</a>
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
        return array (  506 => 227,  498 => 221,  495 => 220,  482 => 212,  477 => 211,  474 => 210,  464 => 206,  460 => 205,  456 => 204,  452 => 203,  449 => 202,  445 => 201,  439 => 197,  436 => 196,  423 => 188,  418 => 187,  415 => 186,  405 => 182,  401 => 181,  397 => 180,  393 => 179,  390 => 178,  386 => 177,  380 => 173,  377 => 172,  364 => 164,  359 => 163,  356 => 162,  346 => 158,  342 => 157,  338 => 156,  334 => 155,  331 => 154,  327 => 153,  320 => 148,  317 => 147,  306 => 141,  301 => 140,  298 => 139,  288 => 135,  284 => 134,  280 => 133,  275 => 131,  272 => 130,  268 => 129,  262 => 125,  259 => 124,  248 => 118,  243 => 117,  240 => 116,  230 => 112,  226 => 111,  222 => 110,  217 => 108,  214 => 107,  210 => 106,  206 => 104,  202 => 101,  199 => 100,  187 => 93,  182 => 92,  179 => 91,  169 => 87,  165 => 86,  161 => 85,  156 => 83,  153 => 82,  149 => 81,  145 => 79,  139 => 74,  137 => 46,  134 => 45,  122 => 38,  117 => 37,  114 => 36,  104 => 32,  100 => 31,  96 => 30,  91 => 28,  87 => 26,  83 => 25,  80 => 24,  76 => 21,  68 => 3,  58 => 2,  35 => 1,);
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
                    <a href=\"/activity/details/{{ act.getId() }}\">

                        <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                        <div class=\"margin-10px-top font-size14 \"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                        <div class=\"font-size13 text-light-gray\">{{ act.getNomAct() }}</div>
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
                        <a href=\"/activity/details/{{ act.getId() }}\">

                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                            <div class=\"font-size13 text-light-gray\">{{ act.getNomAct() }}</div>
                        </a>
                    </td>
                {% endfor %}
                {% if(sizeAct2<6) %}
                    {% for i in 1..6-sizeAct2 %}
                        <td style=\"height: 95px \">
                            <p>.</p>

                            <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Nothing</span>
                            <p>.</p>
                        </td>
                    {% endfor %}
                {% endif %}

            <tr>
{#                <td class=\"align-middle\">11:00am</td>#}
                <th class=\"text-uppercase\" > Wednesday </th>

                {% for act in Act3 %}
                    <td style=\"height: 85px\">
                        <a href=\"/activity/details/{{ act.getId() }}\">

                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                            <div class=\"font-size13 text-light-gray\">{{ act.getNomAct() }}</div>
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
                        <a href=\"/activity/details/{{ act.getId() }}\">

                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                            <div class=\"font-size13 text-light-gray\">{{ act.getNomAct() }}</div>
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
                        <a href=\"/activity/details/{{ act.getId() }}\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                            <div class=\"font-size13 text-light-gray\">{{ act.getNomAct() }}</div>
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
                        <a href=\"/activity/details/{{ act.getId() }}\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                            <div class=\"font-size13 text-light-gray\">{{ act.getNomAct() }}</div>
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
                        <a href=\"/activity/details/{{ act.getId() }}\">
                            <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                            <div class=\"margin-10px-top font-size14\"><p style=\"color: yellow\">{{ act.getTempAct|date('H:m') }}</p></div>
                            <div class=\"font-size13 text-light-gray\">{{ act.getNomAct() }}</div>
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
    <div>
        <a href=\"{{path('activity')}}\">show all activity</a>
    </div>


{% endblock %}", "activity/schedule.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\activity\\schedule.html.twig");
    }
}
