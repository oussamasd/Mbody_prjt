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

/* activity/add.html.twig */
class __TwigTemplate_c93ed409af0dd8fdd7c2a3b2223852fb5d2aca24fadd102010fb0294cd0aea56 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/add.html.twig"));

        $this->parent = $this->loadTemplate("base.back.html.twig", "activity/add.html.twig", 1);
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
        echo "<h1>add activite</h1>
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
<table>
    <tr>
        <td>  ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 8, $this->source); })()), "nom_Act", [], "any", false, false, false, 8), 'label', ["label" => "Nom Activite"]);
        echo "  </td>
        <td>  ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 9, $this->source); })()), "nom_Act", [], "any", false, false, false, 9), 'errors');
        echo " </td>
        <td> ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 10, $this->source); })()), "nom_Act", [], "any", false, false, false, 10), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td>  ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 13, $this->source); })()), "date_Act", [], "any", false, false, false, 13), 'label', ["label" => "Date Activite"]);
        echo "  </td>
        <td>  ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 14, $this->source); })()), "date_Act", [], "any", false, false, false, 14), 'errors');
        echo " </td>
        <td> ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 15, $this->source); })()), "date_Act", [], "any", false, false, false, 15), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td>  ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 18, $this->source); })()), "temp_act", [], "any", false, false, false, 18), 'label', ["label" => "Temps  Activite"]);
        echo "  </td>
        <td>  ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 19, $this->source); })()), "temp_act", [], "any", false, false, false, 19), 'errors');
        echo " </td>
        <td> ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 20, $this->source); })()), "temp_act", [], "any", false, false, false, 20), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td>  ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 23, $this->source); })()), "description_Act", [], "any", false, false, false, 23), 'label', ["label" => "Description"]);
        echo "  </td>
        <td>  ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 24, $this->source); })()), "description_Act", [], "any", false, false, false, 24), 'errors');
        echo " </td>
        <td> ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 25, $this->source); })()), "description_Act", [], "any", false, false, false, 25), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td>  ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 28, $this->source); })()), "category", [], "any", false, false, false, 28), 'label', ["label" => "Category"]);
        echo "  </td>
        <td>  ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 29, $this->source); })()), "category", [], "any", false, false, false, 29), 'errors');
        echo " </td>
        <td> ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 30, $this->source); })()), "category", [], "any", false, false, false, 30), 'widget');
        echo "   </td>
    </tr>
    <tr>


    </tr>
</table>
";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
    <table border=\"1\">
        <tr>
            <td>nom activitie</td>
            <td>date activite</td>
            <td>temps activite </td>
            <td>description </td>
            <td>category </td>
            <td>Action </td>

        </tr>
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 49
            echo "            <tr>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getNomAct", [], "method", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getDateAct", [], "method", false, false, false, 51), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getTempAct", [], "method", false, false, false, 52), "H:i"), "html", null, true);
            echo " </td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getDescriptionAct", [], "method", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "getCategory", [], "any", false, false, false, 54), "getNomCat", [], "method", false, false, false, 54), "html", null, true);
            echo " </td>
                <td>
                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ActivityUpdate", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "getId", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\"> Edit </a>
                    <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ActivityDelete", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "getId", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">Delete</a>

                </td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "activity/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 63,  197 => 57,  193 => 56,  188 => 54,  184 => 53,  180 => 52,  176 => 51,  172 => 50,  169 => 49,  165 => 48,  151 => 37,  141 => 30,  137 => 29,  133 => 28,  127 => 25,  123 => 24,  119 => 23,  113 => 20,  109 => 19,  105 => 18,  99 => 15,  95 => 14,  91 => 13,  85 => 10,  81 => 9,  77 => 8,  71 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.back.html.twig' %}
{% block body %}
<h1>add activite</h1>
{#{{ form(formActivity) }}#}
{{ form_start(formActivity) }}
<table>
    <tr>
        <td>  {{ form_label(formActivity.nom_Act,\"Nom Activite\")}}  </td>
        <td>  {{ form_errors(formActivity.nom_Act) }} </td>
        <td> {{ form_widget(formActivity.nom_Act)}}   </td>
    </tr>
    <tr>
        <td>  {{ form_label(formActivity.date_Act,\"Date Activite\")}}  </td>
        <td>  {{ form_errors(formActivity.date_Act) }} </td>
        <td> {{ form_widget(formActivity.date_Act)}}   </td>
    </tr>
    <tr>
        <td>  {{ form_label(formActivity.temp_act,\"Temps  Activite\")}}  </td>
        <td>  {{ form_errors(formActivity.temp_act) }} </td>
        <td> {{ form_widget(formActivity.temp_act)}}   </td>
    </tr>
    <tr>
        <td>  {{ form_label(formActivity.description_Act,\"Description\")}}  </td>
        <td>  {{ form_errors(formActivity.description_Act) }} </td>
        <td> {{ form_widget(formActivity.description_Act)}}   </td>
    </tr>
    <tr>
        <td>  {{ form_label(formActivity.category,\"Category\")}}  </td>
        <td>  {{ form_errors(formActivity.category) }} </td>
        <td> {{ form_widget(formActivity.category)}}   </td>
    </tr>
    <tr>


    </tr>
</table>
{{ form_end(formActivity) }}
    <table border=\"1\">
        <tr>
            <td>nom activitie</td>
            <td>date activite</td>
            <td>temps activite </td>
            <td>description </td>
            <td>category </td>
            <td>Action </td>

        </tr>
        {% for e in activities %}
            <tr>
                <td>{{ e.getNomAct()}}</td>
                <td>{{ e.getDateAct()|date('Y-m-d')}}</td>
                <td>{{ e.getTempAct()|date('H:i')}} </td>
                <td>{{ e.getDescriptionAct()}}</td>
                <td>{{ e.getCategory.getNomCat()}} </td>
                <td>
                    <a href=\"{{ path('ActivityUpdate',{\"id\":e.getId}) }}\"> Edit </a>
                    <a href=\"{{ path('ActivityDelete',{\"id\":e.getId}) }}\">Delete</a>

                </td>

            </tr>
        {% endfor %}
    </table>
{% endblock %}", "activity/add.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\activity\\add.html.twig");
    }
}
