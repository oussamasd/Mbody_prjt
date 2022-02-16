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
                    <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["act"], "getCategory", [], "any", false, false, false, 27), "getNomCat", [], "method", false, false, false, 27), "html", null, true);
            echo "</span>
                    <div class=\"margin-10px-top font-size14\">9:00-10:00</div>
                    <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                ";
        // line 60
        echo "            </tr>

           
            <tr>
";
        // line 65
        echo "                <th class=\"text-uppercase\">";
        echo twig_escape_filter($this->env, (isset($context["Act2Date"]) || array_key_exists("Act2Date", $context) ? $context["Act2Date"] : (function () { throw new RuntimeError('Variable "Act2Date" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "</th>

                <td>
                    <span class=\"bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Music</span>
                    <div class=\"margin-10px-top font-size14\">10:00-11:00</div>
                    <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                </td>
                <td class=\"bg-light-gray\">

                </td>
                <td>
                    <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Art</span>
                    <div class=\"margin-10px-top font-size14\">10:00-11:00</div>
                    <div class=\"font-size13 text-light-gray\">Kate Alley</div>
                </td>
                <td>
                    <span class=\"bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Yoga</span>
                    <div class=\"margin-10px-top font-size14\">10:00-11:00</div>
                    <div class=\"font-size13 text-light-gray\">Marta Healy</div>
                </td>
                <td>
                    <span class=\"bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">English</span>
                    <div class=\"margin-10px-top font-size14\">10:00-11:00</div>
                    <div class=\"font-size13 text-light-gray\">James Smith</div>
                </td>
                <td class=\"bg-light-gray\">

                </td>
            </tr>

            <tr>
";
        // line 97
        echo "                <th class=\"text-uppercase\">";
        echo twig_escape_filter($this->env, (isset($context["Act3Date"]) || array_key_exists("Act3Date", $context) ? $context["Act3Date"] : (function () { throw new RuntimeError('Variable "Act3Date" does not exist.', 97, $this->source); })()), "html", null, true);
        echo "</th>

                <td>
                    <span class=\"bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Break</span>
                    <div class=\"margin-10px-top font-size14\">11:00-12:00</div>
                </td>
                <td>
                    <span class=\"bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Break</span>
                    <div class=\"margin-10px-top font-size14\">11:00-12:00</div>
                </td>
                <td>
                    <span class=\"bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Break</span>
                    <div class=\"margin-10px-top font-size14\">11:00-12:00</div>
                </td>
                <td>
                    <span class=\"bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Break</span>
                    <div class=\"margin-10px-top font-size14\">11:00-12:00</div>
                </td>
                <td>
                    <span class=\"bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Break</span>
                    <div class=\"margin-10px-top font-size14\">11:00-12:00</div>
                </td>
                <td>
                    <span class=\"bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Break</span>
                    <div class=\"margin-10px-top font-size14\">11:00-12:00</div>
                </td>
            </tr>

            <tr>
                <th class=\"text-uppercase\">";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["Act4Date"]) || array_key_exists("Act4Date", $context) ? $context["Act4Date"] : (function () { throw new RuntimeError('Variable "Act4Date" does not exist.', 126, $this->source); })()), "html", null, true);
        echo "</th>

                ";
        // line 129
        echo "                <td class=\"bg-light-gray\">

                </td>
                <td>
                    <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Art</span>
                    <div class=\"margin-10px-top font-size14\">12:00-1:00</div>
                    <div class=\"font-size13 text-light-gray\">Kate Alley</div>
                </td>
                <td>
                    <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Dance</span>
                    <div class=\"margin-10px-top font-size14\">12:00-1:00</div>
                    <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                </td>
                <td>
                    <span class=\"bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Music</span>
                    <div class=\"margin-10px-top font-size14\">12:00-1:00</div>
                    <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                </td>
                <td class=\"bg-light-gray\">

                </td>
                <td>
                    <span class=\"bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Yoga</span>
                    <div class=\"margin-10px-top font-size14\">12:00-1:00</div>
                    <div class=\"font-size13 text-light-gray\">Marta Healy</div>
                </td>
            </tr>

            <tr>
                <th class=\"text-uppercase\">";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["Act5Date"]) || array_key_exists("Act5Date", $context) ? $context["Act5Date"] : (function () { throw new RuntimeError('Variable "Act5Date" does not exist.', 158, $this->source); })()), "html", null, true);
        echo "</th>

                ";
        // line 161
        echo "                <td>
                    <span class=\"bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">English</span>
                    <div class=\"margin-10px-top font-size14\">1:00-2:00</div>
                    <div class=\"font-size13 text-light-gray\">James Smith</div>
                </td>
                <td>
                    <span class=\"bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Music</span>
                    <div class=\"margin-10px-top font-size14\">1:00-2:00</div>
                    <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                </td>
                <td class=\"bg-light-gray\">

                </td>
                <td>
                    <span class=\"bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">English</span>
                    <div class=\"margin-10px-top font-size14\">1:00-2:00</div>
                    <div class=\"font-size13 text-light-gray\">James Smith</div>
                </td>
                <td>
                    <span class=\"bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Yoga</span>
                    <div class=\"margin-10px-top font-size14\">1:00-2:00</div>
                    <div class=\"font-size13 text-light-gray\">Marta Healy</div>
                </td>
                <td>
                    <span class=\"bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Music</span>
                    <div class=\"margin-10px-top font-size14\">1:00-2:00</div>
                    <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                </td>
            </tr>
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
        return array (  220 => 161,  215 => 158,  184 => 129,  179 => 126,  146 => 97,  111 => 65,  105 => 60,  103 => 32,  92 => 27,  89 => 26,  85 => 25,  80 => 24,  76 => 21,  68 => 3,  58 => 2,  35 => 1,);
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
                    <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13\">{{ act.getCategory.getNomCat() }}</span>
                    <div class=\"margin-10px-top font-size14\">9:00-10:00</div>
                    <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                </td>
                {% endfor %}
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

                <td>
                    <span class=\"bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Music</span>
                    <div class=\"margin-10px-top font-size14\">10:00-11:00</div>
                    <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                </td>
                <td class=\"bg-light-gray\">

                </td>
                <td>
                    <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Art</span>
                    <div class=\"margin-10px-top font-size14\">10:00-11:00</div>
                    <div class=\"font-size13 text-light-gray\">Kate Alley</div>
                </td>
                <td>
                    <span class=\"bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Yoga</span>
                    <div class=\"margin-10px-top font-size14\">10:00-11:00</div>
                    <div class=\"font-size13 text-light-gray\">Marta Healy</div>
                </td>
                <td>
                    <span class=\"bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">English</span>
                    <div class=\"margin-10px-top font-size14\">10:00-11:00</div>
                    <div class=\"font-size13 text-light-gray\">James Smith</div>
                </td>
                <td class=\"bg-light-gray\">

                </td>
            </tr>

            <tr>
{#                <td class=\"align-middle\">11:00am</td>#}
                <th class=\"text-uppercase\">{{ Act3Date }}</th>

                <td>
                    <span class=\"bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Break</span>
                    <div class=\"margin-10px-top font-size14\">11:00-12:00</div>
                </td>
                <td>
                    <span class=\"bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Break</span>
                    <div class=\"margin-10px-top font-size14\">11:00-12:00</div>
                </td>
                <td>
                    <span class=\"bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Break</span>
                    <div class=\"margin-10px-top font-size14\">11:00-12:00</div>
                </td>
                <td>
                    <span class=\"bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Break</span>
                    <div class=\"margin-10px-top font-size14\">11:00-12:00</div>
                </td>
                <td>
                    <span class=\"bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Break</span>
                    <div class=\"margin-10px-top font-size14\">11:00-12:00</div>
                </td>
                <td>
                    <span class=\"bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Break</span>
                    <div class=\"margin-10px-top font-size14\">11:00-12:00</div>
                </td>
            </tr>

            <tr>
                <th class=\"text-uppercase\">{{ Act4Date }}</th>

                {#                <td class=\"align-middle\">12:00pm</td>#}
                <td class=\"bg-light-gray\">

                </td>
                <td>
                    <span class=\"bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Art</span>
                    <div class=\"margin-10px-top font-size14\">12:00-1:00</div>
                    <div class=\"font-size13 text-light-gray\">Kate Alley</div>
                </td>
                <td>
                    <span class=\"bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Dance</span>
                    <div class=\"margin-10px-top font-size14\">12:00-1:00</div>
                    <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                </td>
                <td>
                    <span class=\"bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Music</span>
                    <div class=\"margin-10px-top font-size14\">12:00-1:00</div>
                    <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                </td>
                <td class=\"bg-light-gray\">

                </td>
                <td>
                    <span class=\"bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Yoga</span>
                    <div class=\"margin-10px-top font-size14\">12:00-1:00</div>
                    <div class=\"font-size13 text-light-gray\">Marta Healy</div>
                </td>
            </tr>

            <tr>
                <th class=\"text-uppercase\">{{ Act5Date }}</th>

                {#                <td class=\"align-middle\">01:00pm</td>#}
                <td>
                    <span class=\"bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">English</span>
                    <div class=\"margin-10px-top font-size14\">1:00-2:00</div>
                    <div class=\"font-size13 text-light-gray\">James Smith</div>
                </td>
                <td>
                    <span class=\"bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Music</span>
                    <div class=\"margin-10px-top font-size14\">1:00-2:00</div>
                    <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                </td>
                <td class=\"bg-light-gray\">

                </td>
                <td>
                    <span class=\"bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">English</span>
                    <div class=\"margin-10px-top font-size14\">1:00-2:00</div>
                    <div class=\"font-size13 text-light-gray\">James Smith</div>
                </td>
                <td>
                    <span class=\"bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Yoga</span>
                    <div class=\"margin-10px-top font-size14\">1:00-2:00</div>
                    <div class=\"font-size13 text-light-gray\">Marta Healy</div>
                </td>
                <td>
                    <span class=\"bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13\">Music</span>
                    <div class=\"margin-10px-top font-size14\">1:00-2:00</div>
                    <div class=\"font-size13 text-light-gray\">Ivana Wong</div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

{% endblock %}", "activity/schedule.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\activity\\schedule.html.twig");
    }
}
