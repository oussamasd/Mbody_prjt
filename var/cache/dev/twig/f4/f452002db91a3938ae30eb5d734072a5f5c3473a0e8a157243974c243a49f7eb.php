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

/* activity/Affichactivity.html.twig */
class __TwigTemplate_801bb569b307bf9cb27ce3bc71d4850b120cd8d33e9ed0e885b041a99e0a8a72 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'b2' => [$this, 'block_b2'],
            'b1' => [$this, 'block_b1'],
            'a1' => [$this, 'block_a1'],
            'a2' => [$this, 'block_a2'],
            'a3' => [$this, 'block_a3'],
            'b3' => [$this, 'block_b3'],
            'css' => [$this, 'block_css'],
            'b4' => [$this, 'block_b4'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/Affichactivity.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/Affichactivity.html.twig"));

        $this->parent = $this->loadTemplate("base.front.html.twig", "activity/Affichactivity.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_b2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "b2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "b2"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_b1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "b1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "b1"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_a1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "a1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "a1"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_a2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "a2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "a2"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_a3($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "a3"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "a3"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_b3($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "b3"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "b3"));

        // line 14
        echo "     ";
        $this->displayBlock('css', $context, $blocks);
        // line 18
        echo "    <div class=\"row\">
        <div class=\"col-lg-6 offset-lg-3\">
            <div class=\"section-heading\">
                <h2>Expert <em>Trainers</em></h2>
                <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/line-dec.png"), "html", null, true);
        echo "\" alt=\"\">
                <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
            </div>
        </div>
    </div>
    <div>
        <input id=\"myInput\" type=\"text\" , placeholder=\"Search....\" >

        ";
        // line 33
        echo "
    </div>

    <div class=\"row\">
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 38
            echo "            ";
            $context["i"] = twig_get_attribute($this->env, $this->source, $context["activity"], "getImages", [], "method", false, false, false, 38);
            // line 60
            echo "
";
            // line 63
            echo "
";
            // line 82
            echo "            ";
            $context["prt"] = twig_get_attribute($this->env, $this->source, $context["activity"], "getRatings", [], "method", false, false, false, 82);
            // line 83
            echo "            ";
            $context["sommerate"] = 0;
            // line 84
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prt"]) || array_key_exists("prt", $context) ? $context["prt"] : (function () { throw new RuntimeError('Variable "prt" does not exist.', 84, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 85
                echo "               ";
                $context["sommerate"] = ((isset($context["sommerate"]) || array_key_exists("sommerate", $context) ? $context["sommerate"] : (function () { throw new RuntimeError('Variable "sommerate" does not exist.', 85, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["p"], "getRate", [], "method", false, false, false, 85));
                // line 86
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "            ";
            $context["rate"] = 0;
            // line 88
            echo "            ";
            if ((0 !== twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "getRatings", [], "method", false, false, false, 88)), 0))) {
                // line 89
                echo "            ";
                $context["rate"] = ((isset($context["sommerate"]) || array_key_exists("sommerate", $context) ? $context["sommerate"] : (function () { throw new RuntimeError('Variable "sommerate" does not exist.', 89, $this->source); })()) / twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "getRatings", [], "method", false, false, false, 89)));
                // line 90
                echo "           ";
                // line 91
                echo "            ";
            }
            // line 92
            echo "
        <div class=\"col-lg-4\">
            <div class=\"trainer-item\">
                <div class=\"image-thumb\">
                    ";
            // line 96
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 96, $this->source); })())), 0))) {
                // line 97
                echo "
                    <img src=\"http://127.0.0.1:8000/uploads/";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 98, $this->source); })()), 0, [], "array", false, false, false, 98), "getImageUrl", [], "method", false, false, false, 98), "html", null, true);
                echo "\" alt=\"\">
                    ";
            } else {
                // line 100
                echo "                    <img src=\"http://127.0.0.1:8000/uploads/noimg.jpg\" alt=\"\">
                    ";
            }
            // line 102
            echo "

                </div>
                <div class=\"down-content\">
                    <tr>
                        <td>
                            <span>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "getCategory", [], "any", false, false, false, 108), "getNomCat", [], "method", false, false, false, 108), "html", null, true);
            echo "</span>
                        </td>
                        <td >

                    <span style=\"padding-left: 30%\">

                            ";
            // line 114
            if ((0 === twig_compare((isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 114, $this->source); })()), 0))) {
                // line 115
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 116
                    echo "                                    <i class=\"hover\" style=\"color: black\">&#9733;</i>

                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                echo "                            ";
            } else {
                // line 120
                echo "
                                ";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 121, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 122
                    echo "                                    <i class=\"hover\" style=\"color: gold\">&#9733;</i>

                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "
                                ";
                // line 126
                if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 126, $this->source); })())), 1))) {
                    // line 127
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (5 - (isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 127, $this->source); })()))));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 128
                        echo "                                        <i class=\"star2\" style=\"color: black\" >&#9733;</i>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    echo "                                ";
                } else {
                    // line 131
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (6 - (isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 131, $this->source); })()))));
                    foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                        // line 132
                        echo "                                        <i class=\"star2\" style=\"color: black\" >&#9733;</i>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 134
                    echo "
                                ";
                }
                // line 136
                echo "                            ";
            }
            // line 137
            echo "
                            <i style=\"font-size: large\"> ";
            // line 138
            echo twig_escape_filter($this->env, (isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 138, $this->source); })()), "html", null, true);
            echo "</i>
                    </span>

                        </td>
                    </tr>









                    <h4>";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "getNomAct", [], "method", false, false, false, 152), "html", null, true);
            echo "</h4>
                    <h6>";
            // line 153
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "getDateAct", [], "any", false, false, false, 153), "Y-m-d"), "html", null, true);
            echo "</h6>
                    <p>";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "getDescriptionAct", [], "method", false, false, false, 154), "html", null, true);
            echo "</p>
                    <table>
                    <tr>
                        <td>
                    <ul class=\"social-icons\">
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                    </ul>
                        </td>
                        <td>
                            <div class=\"stage\">
                                <a class=\"lnkSchow\" href=\"/activity/details/";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "getId", [], "method", false, false, false, 167), "html", null, true);
            echo "\">Read More</a>
                            </div>
                        </td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "
    </div>
    <div style=\"margin-left: 50%\">
    ";
        // line 179
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 179, $this->source); })()));
        echo "
    </div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#myInput\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\".col-lg-4\").filter(function() {
                 \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                 });

            });
        });
    </script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 15
        echo "         ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
         <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ReadmoreCss.css"), "html", null, true);
        echo "\">
     ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 209
    public function block_b4($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "b4"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "b4"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "activity/Affichactivity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 209,  451 => 16,  446 => 15,  436 => 14,  411 => 179,  406 => 176,  391 => 167,  375 => 154,  371 => 153,  367 => 152,  350 => 138,  347 => 137,  344 => 136,  340 => 134,  333 => 132,  328 => 131,  325 => 130,  318 => 128,  313 => 127,  311 => 126,  308 => 125,  300 => 122,  296 => 121,  293 => 120,  290 => 119,  282 => 116,  277 => 115,  275 => 114,  266 => 108,  258 => 102,  254 => 100,  249 => 98,  246 => 97,  244 => 96,  238 => 92,  235 => 91,  233 => 90,  230 => 89,  227 => 88,  224 => 87,  218 => 86,  215 => 85,  210 => 84,  207 => 83,  204 => 82,  201 => 63,  198 => 60,  195 => 38,  191 => 37,  185 => 33,  174 => 22,  168 => 18,  165 => 14,  155 => 13,  137 => 11,  119 => 9,  101 => 7,  83 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.front.html.twig' %}

{% block b2 %}
{% endblock %}
{% block b1 %}
{% endblock %}
{% block a1 %}
{% endblock %}
{% block a2 %}
{% endblock %}
{% block a3 %}
{% endblock %}
{% block b3 %}
     {% block css %}
         {{ parent() }}
         <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('ReadmoreCss.css') }}\">
     {% endblock %}
    <div class=\"row\">
        <div class=\"col-lg-6 offset-lg-3\">
            <div class=\"section-heading\">
                <h2>Expert <em>Trainers</em></h2>
                <img src=\"{{ asset('assets/images/line-dec.png') }}\" alt=\"\">
                <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
            </div>
        </div>
    </div>
    <div>
        <input id=\"myInput\" type=\"text\" , placeholder=\"Search....\" >

        {#<input id=\"check\" type=\"checkbox\" name=\"disponible\" value=\"{{ date }}\" placeholder=\"haha\">
        <label for=\"disponible\"> disponble</label>
        <div id=\"result\" style=\"background: yellow;\"></div>#}

    </div>

    <div class=\"row\">
        {% for activity in activities %}
            {% set i =activity.getImages() %}
{#        <div class=\"col-lg-4\">#}
{#            <div class=\"trainer-item\">#}
{#                <div class=\"image-thumb\">#}
{#                    <img src=\"{{ asset('assets/images/first-trainer.jpg') }}\" alt=\"\">#}
{#                </div>#}
{#                <div class=\"down-content\">#}
{#                    <span>Strength Trainer</span>#}
{#                    <h4>Bret D. Bowers</h4>#}
{#                    <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>#}
{#                    <ul class=\"social-icons\">#}
{#                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>#}
{#                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>#}
{#                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>#}
{#                        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>#}
{#                    </ul>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}
{#        <div class=\"col-lg-4\">#}
{#            <div class=\"trainer-item\">#}
{#                <div class=\"image-thumb\">#}

{#                    {% if i|length >0 %}#}
{#                        {% set imgg =\"uploads/\"+{{ i[0].getImageUrl() }}  %}#}

{#                        <img src=\"http://127.0.0.1:8000/uploads/{{ i[0].getImageUrl() }}\" alt=\"\">#}
{#                     {% else%}#}
{#                         <img src=\"http://127.0.0.1:8000/uploads/noimg.jpg\" alt=\"\">#}
{#                    {% endif %}#}
{#                </div>#}
{#                <div class=\"down-content\">#}
{#                    <span>Muscle Trainer</span>#}
{#                    <h4>Hector T. Daigl</h4>#}
{#                    <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>#}
{#                    <ul class=\"social-icons\">#}
{#                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>#}
{#                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>#}
{#                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>#}
{#                        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>#}
{#                    </ul>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}
            {% set prt = activity.getRatings() %}
            {% set sommerate = 0 %}
            {% for p in prt %}
               {% set sommerate = sommerate + p.getRate()   %}
            {% endfor%}
            {% set rate = 0 %}
            {% if  activity.getRatings()|length !=0 %}
            {% set rate = sommerate / activity.getRatings()|length %}
           {# {% set rateapproche = rate | int  %}#}
            {% endif %}

        <div class=\"col-lg-4\">
            <div class=\"trainer-item\">
                <div class=\"image-thumb\">
                    {% if i|length >0 %}

                    <img src=\"http://127.0.0.1:8000/uploads/{{ i[0].getImageUrl() }}\" alt=\"\">
                    {% else%}
                    <img src=\"http://127.0.0.1:8000/uploads/noimg.jpg\" alt=\"\">
                    {% endif %}


                </div>
                <div class=\"down-content\">
                    <tr>
                        <td>
                            <span>{{ activity.getCategory.getNomCat() }}</span>
                        </td>
                        <td >

                    <span style=\"padding-left: 30%\">

                            {% if rate ==0 %}
                                {% for i in 1..5 %}
                                    <i class=\"hover\" style=\"color: black\">&#9733;</i>

                                {% endfor %}
                            {% else %}

                                {% for i in 1..rate %}
                                    <i class=\"hover\" style=\"color: gold\">&#9733;</i>

                                {% endfor %}

                                {% if rate |length ==1 %}
                                    {% for j in 1..5-rate %}
                                        <i class=\"star2\" style=\"color: black\" >&#9733;</i>
                                    {% endfor %}
                                {% else %}
                                    {% for l in 1..6-rate %}
                                        <i class=\"star2\" style=\"color: black\" >&#9733;</i>
                                    {% endfor %}

                                {% endif%}
                            {% endif %}

                            <i style=\"font-size: large\"> {{ rate }}</i>
                    </span>

                        </td>
                    </tr>









                    <h4>{{ activity.getNomAct() }}</h4>
                    <h6>{{ activity.getDateAct|date('Y-m-d') }}</h6>
                    <p>{{ activity.getDescriptionAct() }}</p>
                    <table>
                    <tr>
                        <td>
                    <ul class=\"social-icons\">
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                    </ul>
                        </td>
                        <td>
                            <div class=\"stage\">
                                <a class=\"lnkSchow\" href=\"/activity/details/{{ activity.getId() }}\">Read More</a>
                            </div>
                        </td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
        {% endfor %}

    </div>
    <div style=\"margin-left: 50%\">
    {{ knp_pagination_render(activities) }}
    </div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#myInput\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\".col-lg-4\").filter(function() {
                 \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                 });

            });
        });
    </script>
  {#  <script>
        \$(document).ready(function(){
            \$('input[type=\"checkbox\"]').click(function(){
                var values = \$(this).val().toLowerCase();
                if(\$(this).is(\":checked\")){
                    \$(\".col-lg-4 \").filter(function() {
                        \$(this).toggle(\$(this).text().equalTo(values))
                    });
                }
                else if(\$(this).is(\":not(:checked)\")){
                    \$(\"#result\").html(\"Checkbox is unchecked.\");
                }
            });
        });
    </script>#}
{% endblock %}
{% block b4 %}
{% endblock %}
", "activity/Affichactivity.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\activity\\Affichactivity.html.twig");
    }
}
