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
            echo "        <div class=\"col-lg-4\">
            <div class=\"trainer-item\">
                <div class=\"image-thumb\">
                    ";
            // line 85
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 85, $this->source); })())), 0))) {
                // line 86
                echo "
                    <img src=\"http://127.0.0.1:8000/uploads/";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 87, $this->source); })()), 0, [], "array", false, false, false, 87), "getImageUrl", [], "method", false, false, false, 87), "html", null, true);
                echo "\" alt=\"\">
                    ";
            } else {
                // line 89
                echo "                    <img src=\"http://127.0.0.1:8000/uploads/noimg.jpg\" alt=\"\">
                    ";
            }
            // line 91
            echo "

                </div>
                <div class=\"down-content\">
                    <span>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "getCategory", [], "any", false, false, false, 95), "getNomCat", [], "method", false, false, false, 95), "html", null, true);
            echo "</span>
                    <h4>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "getNomAct", [], "method", false, false, false, 96), "html", null, true);
            echo "</h4>
                    <h6>";
            // line 97
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "getDateAct", [], "any", false, false, false, 97), "Y-m-d"), "html", null, true);
            echo "</h6>
                    <p>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "getDescriptionAct", [], "method", false, false, false, 98), "html", null, true);
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
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "getId", [], "method", false, false, false, 111), "html", null, true);
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
        // line 120
        echo "
    </div>
    <div style=\"margin-left: 50%\">
    ";
        // line 123
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 123, $this->source); })()));
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

    // line 153
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
        return array (  329 => 153,  317 => 16,  312 => 15,  302 => 14,  277 => 123,  272 => 120,  257 => 111,  241 => 98,  237 => 97,  233 => 96,  229 => 95,  223 => 91,  219 => 89,  214 => 87,  211 => 86,  209 => 85,  204 => 82,  201 => 63,  198 => 60,  195 => 38,  191 => 37,  185 => 33,  174 => 22,  168 => 18,  165 => 14,  155 => 13,  137 => 11,  119 => 9,  101 => 7,  83 => 5,  65 => 3,  42 => 1,);
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
                    <span>{{ activity.getCategory.getNomCat() }}</span>
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
