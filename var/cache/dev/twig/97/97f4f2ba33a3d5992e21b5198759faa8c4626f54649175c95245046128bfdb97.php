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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<table>
    <tr>
         <td>  ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 8, $this->source); })()), "nom_Exercice", [], "any", false, false, false, 8), 'label', ["label" => "Nom Exercice"]);
        echo "  </td>

        <td> ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 10, $this->source); })()), "nom_Exercice", [], "any", false, false, false, 10), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>
         ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 15, $this->source); })()), "nom_Exercice", [], "any", false, false, false, 15), 'errors');
        echo "
        </td>
    </tr>
    <tr>
        <td>  ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 19, $this->source); })()), "dure_Exercice", [], "any", false, false, false, 19), 'label', ["label" => "Duree Exercice"]);
        echo "  </td>

        <td> ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 21, $this->source); })()), "dure_Exercice", [], "any", false, false, false, 21), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>
          ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 26, $this->source); })()), "dure_Exercice", [], "any", false, false, false, 26), 'errors');
        echo "
        </td>
    </tr>
    <tr>
        <td>  ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 30, $this->source); })()), "description_Exercice", [], "any", false, false, false, 30), 'label', ["label" => "Description Exercice"]);
        echo "  </td>

        <td> ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 32, $this->source); })()), "description_Exercice", [], "any", false, false, false, 32), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>
          ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 37, $this->source); })()), "description_Exercice", [], "any", false, false, false, 37), 'errors');
        echo "
        </td>
    </tr>
    <tr>
        <td>  ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 41, $this->source); })()), "category", [], "any", false, false, false, 41), 'label', ["label" => "Category"]);
        echo "  </td>

        <td> ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 43, $this->source); })()), "category", [], "any", false, false, false, 43), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>
          ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 48, $this->source); })()), "category", [], "any", false, false, false, 48), 'errors');
        echo " 
        </td>
    </tr>
</table>
 ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 52, $this->source); })()), "Add", [], "any", false, false, false, 52), 'widget');
        echo "
";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
    <table border=\"1\" style=\"width: 100%\">
        <tr>
            <th style=\"color: yellow\">nom exercice</th>
            <th style=\"color: yellow\">dure exercice</th>
            <th style=\"color: yellow\" >description </th>
            <th style=\"color: yellow\" >category</th>
            <th style=\"color: yellow\">Action</th>

        </tr>
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 64
            echo "            <tr>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getNomExercice", [], "method", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getDureExercice", [], "method", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getDescriptionExercice", [], "method", false, false, false, 67), "html", null, true);
            echo " </td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "getCategory", [], "method", false, false, false, 68), "getNomCat", [], "method", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ExerciceUpdate", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "getId", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\"> Edit </a>
                    <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ExerciceDelete", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "getId", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">Delete</a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
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
        return array (  213 => 76,  202 => 71,  198 => 70,  193 => 68,  189 => 67,  185 => 66,  181 => 65,  178 => 64,  174 => 63,  161 => 53,  157 => 52,  150 => 48,  142 => 43,  137 => 41,  130 => 37,  122 => 32,  117 => 30,  110 => 26,  102 => 21,  97 => 19,  90 => 15,  82 => 10,  77 => 8,  71 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.back.html.twig' %}
{% block body %}
<h1>add exercice</h1>
{#{{ form(formExercice) }}#}
{{ form_start(formExercice, {'attr': {'novalidate': 'novalidate'}}) }}
<table>
    <tr>
         <td>  {{ form_label(formExercice.nom_Exercice,\"Nom Exercice\")}}  </td>

        <td> {{ form_widget(formExercice.nom_Exercice)}}   </td>
    </tr>
    <tr>
        <td></td>
        <td>
         {{ form_errors(formExercice.nom_Exercice) }}
        </td>
    </tr>
    <tr>
        <td>  {{ form_label(formExercice.dure_Exercice,\"Duree Exercice\")}}  </td>

        <td> {{ form_widget(formExercice.dure_Exercice)}}   </td>
    </tr>
    <tr>
        <td></td>
        <td>
          {{ form_errors(formExercice.dure_Exercice) }}
        </td>
    </tr>
    <tr>
        <td>  {{ form_label(formExercice.description_Exercice,\"Description Exercice\")}}  </td>

        <td> {{ form_widget(formExercice.description_Exercice)}}   </td>
    </tr>
    <tr>
        <td></td>
        <td>
          {{ form_errors(formExercice.description_Exercice) }}
        </td>
    </tr>
    <tr>
        <td>  {{ form_label(formExercice.category,\"Category\")}}  </td>

        <td> {{ form_widget(formExercice.category)}}   </td>
    </tr>
    <tr>
        <td></td>
        <td>
          {{ form_errors(formExercice.category) }} 
        </td>
    </tr>
</table>
 {{ form_widget(formExercice.Add)}}
{{ form_end(formExercice) }}
    <table border=\"1\" style=\"width: 100%\">
        <tr>
            <th style=\"color: yellow\">nom exercice</th>
            <th style=\"color: yellow\">dure exercice</th>
            <th style=\"color: yellow\" >description </th>
            <th style=\"color: yellow\" >category</th>
            <th style=\"color: yellow\">Action</th>

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
