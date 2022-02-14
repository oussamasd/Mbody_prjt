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

/* exercice/add.html.twig */
class __TwigTemplate_41481fdf2314d5b296c4c8a8f78ecca7507bdb6960b5aa583f4b751d402a1cbc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/add.html.twig"));

        $this->parent = $this->loadTemplate("base.back.html.twig", "exercice/add.html.twig", 1);
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
        echo "<h1>add exercice</h1>
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
<table>
    <tr>
         <td>  ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 8, $this->source); })()), "nom_Exercice", [], "any", false, false, false, 8), 'label', ["label" => "Nom Exercice"]);
        echo "  </td>
        <td>  ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 9, $this->source); })()), "nom_Exercice", [], "any", false, false, false, 9), 'errors');
        echo " </td>
        <td> ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 10, $this->source); })()), "nom_Exercice", [], "any", false, false, false, 10), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td>  ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 13, $this->source); })()), "dure_Exercice", [], "any", false, false, false, 13), 'label', ["label" => "Duree Exercice"]);
        echo "  </td>
        <td>  ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 14, $this->source); })()), "dure_Exercice", [], "any", false, false, false, 14), 'errors');
        echo " </td>
        <td> ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 15, $this->source); })()), "dure_Exercice", [], "any", false, false, false, 15), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td>  ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 18, $this->source); })()), "description_Exercice", [], "any", false, false, false, 18), 'label', ["label" => "Description Exercice"]);
        echo "  </td>
        <td>  ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 19, $this->source); })()), "description_Exercice", [], "any", false, false, false, 19), 'errors');
        echo " </td>
        <td> ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 20, $this->source); })()), "description_Exercice", [], "any", false, false, false, 20), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td>  ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 23, $this->source); })()), "category", [], "any", false, false, false, 23), 'label', ["label" => "Category"]);
        echo "  </td>
        <td>  ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 24, $this->source); })()), "category", [], "any", false, false, false, 24), 'errors');
        echo " </td>
        <td> ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 25, $this->source); })()), "category", [], "any", false, false, false, 25), 'widget');
        echo "   </td>
    </tr>
    <tr>


    </tr>
</table>
 ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 32, $this->source); })()), "Add", [], "any", false, false, false, 32), 'widget');
        echo "
";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 33, $this->source); })()), 'form_end');
        echo "
    <table border=\"1\">
        <tr>
            <td>nom exercice</td>
            <td>dure exercice</td>
            <td>description </td>
            <td>category</td>
            <td>Action</td>

        </tr>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 44
            echo "            <tr>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getNomExercice", [], "method", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getDureExercice", [], "method", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getDescriptionExercice", [], "method", false, false, false, 47), "html", null, true);
            echo " </td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "getCategory", [], "method", false, false, false, 48), "getNomCat", [], "method", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ExerciceUpdate", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "getId", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\"> Edit </a>
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ExerciceDelete", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "getId", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">Delete</a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "exercice/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 56,  182 => 51,  178 => 50,  173 => 48,  169 => 47,  165 => 46,  161 => 45,  158 => 44,  154 => 43,  141 => 33,  137 => 32,  127 => 25,  123 => 24,  119 => 23,  113 => 20,  109 => 19,  105 => 18,  99 => 15,  95 => 14,  91 => 13,  85 => 10,  81 => 9,  77 => 8,  71 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.back.html.twig' %}
{% block body %}
<h1>add exercice</h1>
{#{{ form(formExercice) }}#}
{{ form_start(formExercice) }}
<table>
    <tr>
         <td>  {{ form_label(formExercice.nom_Exercice,\"Nom Exercice\")}}  </td>
        <td>  {{ form_errors(formExercice.nom_Exercice) }} </td>
        <td> {{ form_widget(formExercice.nom_Exercice)}}   </td>
    </tr>
    <tr>
        <td>  {{ form_label(formExercice.dure_Exercice,\"Duree Exercice\")}}  </td>
        <td>  {{ form_errors(formExercice.dure_Exercice) }} </td>
        <td> {{ form_widget(formExercice.dure_Exercice)}}   </td>
    </tr>
    <tr>
        <td>  {{ form_label(formExercice.description_Exercice,\"Description Exercice\")}}  </td>
        <td>  {{ form_errors(formExercice.description_Exercice) }} </td>
        <td> {{ form_widget(formExercice.description_Exercice)}}   </td>
    </tr>
    <tr>
        <td>  {{ form_label(formExercice.category,\"Category\")}}  </td>
        <td>  {{ form_errors(formExercice.category) }} </td>
        <td> {{ form_widget(formExercice.category)}}   </td>
    </tr>
    <tr>


    </tr>
</table>
 {{ form_widget(formExercice.Add)}}
{{ form_end(formExercice) }}
    <table border=\"1\">
        <tr>
            <td>nom exercice</td>
            <td>dure exercice</td>
            <td>description </td>
            <td>category</td>
            <td>Action</td>

        </tr>
        {% for e in exercices %}
            <tr>
                <td>{{ e.getNomExercice()}}</td>
                <td>{{ e.getDureExercice()}}</td>
                <td>{{ e.getDescriptionExercice()}} </td>
                <td>{{ e.getCategory().getNomCat()}}</td>
                <td>
                    <a href=\"{{ path('ExerciceUpdate',{\"id\":e.getId}) }}\"> Edit </a>
                    <a href=\"{{ path('ExerciceDelete',{\"id\":e.getId}) }}\">Delete</a>

                </td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}", "exercice/add.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\exercice\\add.html.twig");
    }
}
