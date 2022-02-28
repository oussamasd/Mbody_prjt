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
class __TwigTemplate_819d80967006653caad47650438abdd14f0744a7d5e8dc551f600d947fcdf52a extends Template
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
        echo "    <div style=\"margin-left:25% ;padding-left: 10%; height: 40%;width: 40%\">
<h1>add exercice</h1>
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<table>
    <tr>
         <td>  ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 9, $this->source); })()), "nom_Exercice", [], "any", false, false, false, 9), 'label', ["label" => "Nom Exercice"]);
        echo "  </td>

        <td> ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 11, $this->source); })()), "nom_Exercice", [], "any", false, false, false, 11), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>
         ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 16, $this->source); })()), "nom_Exercice", [], "any", false, false, false, 16), 'errors');
        echo "
        </td>
    </tr>
    <tr>
        <td>  ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 20, $this->source); })()), "dure_Exercice", [], "any", false, false, false, 20), 'label', ["label" => "Duree Exercice"]);
        echo "  </td>

        <td> ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 22, $this->source); })()), "dure_Exercice", [], "any", false, false, false, 22), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>
          ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 27, $this->source); })()), "dure_Exercice", [], "any", false, false, false, 27), 'errors');
        echo "
        </td>
    </tr>
    <tr>
        <td>  ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 31, $this->source); })()), "description_Exercice", [], "any", false, false, false, 31), 'label', ["label" => "Description Exercice"]);
        echo "  </td>

        <td> ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 33, $this->source); })()), "description_Exercice", [], "any", false, false, false, 33), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>
          ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 38, $this->source); })()), "description_Exercice", [], "any", false, false, false, 38), 'errors');
        echo "
        </td>
    </tr>
    <tr>
        <td>  ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 42, $this->source); })()), "category", [], "any", false, false, false, 42), 'label', ["label" => "Category"]);
        echo "  </td>

        <td> ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 44, $this->source); })()), "category", [], "any", false, false, false, 44), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>
          ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 49, $this->source); })()), "category", [], "any", false, false, false, 49), 'errors');
        echo "
        </td>
    </tr>
    <tr>

            <td>
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 55, $this->source); })()), "Add", [], "any", false, false, false, 55), 'row');
        echo "
            </td>



    </tr>
</table>
    </div>
 ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 63, $this->source); })()), "Add", [], "any", false, false, false, 63), 'widget');
        echo "
";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 64, $this->source); })()), 'form_end');
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
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 75
            echo "            <tr>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getNomExercice", [], "method", false, false, false, 76), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getDureExercice", [], "method", false, false, false, 77), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getDescriptionExercice", [], "method", false, false, false, 78), "html", null, true);
            echo " </td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "getCategory", [], "method", false, false, false, 79), "getNomCat", [], "method", false, false, false, 79), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ExerciceUpdate", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "getId", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\"> <i class=\"fa-solid fa-cog fa-spin\"></i> </a>
                    <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ExerciceDelete", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "getId", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-xmark\"></i></a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
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
        return array (  227 => 87,  216 => 82,  212 => 81,  207 => 79,  203 => 78,  199 => 77,  195 => 76,  192 => 75,  188 => 74,  175 => 64,  171 => 63,  160 => 55,  151 => 49,  143 => 44,  138 => 42,  131 => 38,  123 => 33,  118 => 31,  111 => 27,  103 => 22,  98 => 20,  91 => 16,  83 => 11,  78 => 9,  72 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.back.html.twig' %}
{% block body %}
    <div style=\"margin-left:25% ;padding-left: 10%; height: 40%;width: 40%\">
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
    <tr>

            <td>
                {{ form_row(formExercice.Add) }}
            </td>



    </tr>
</table>
    </div>
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
                    <a href=\"{{ path('ExerciceUpdate',{\"id\":e.getId}) }}\"> <i class=\"fa-solid fa-cog fa-spin\"></i> </a>
                    <a href=\"{{ path('ExerciceDelete',{\"id\":e.getId}) }}\"><i class=\"fa-solid fa-xmark\"></i></a>

                </td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}", "exercice/add.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\exercice\\add.html.twig");
    }
}
