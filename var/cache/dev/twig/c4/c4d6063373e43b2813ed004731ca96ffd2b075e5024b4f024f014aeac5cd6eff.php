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
class __TwigTemplate_965430772dafbc9032105161305aa0ff18429c16fce32c1ad468168b69e65f61 extends Template
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
        echo "    <div style=\"padding-left:40%\">
<h1>add activite</h1>
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<table>
    <tr>
        <td>  ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 9, $this->source); })()), "nom_Act", [], "any", false, false, false, 9), 'label', ["label" => "Nom Activite"]);
        echo "  </td>

        <td> ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 11, $this->source); })()), "nom_Act", [], "any", false, false, false, 11), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>  ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 15, $this->source); })()), "nom_Act", [], "any", false, false, false, 15), 'errors');
        echo " </td>
    </tr>
    <tr>
        <td>  ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 18, $this->source); })()), "date_Act", [], "any", false, false, false, 18), 'label', ["label" => "Date Activite"]);
        echo "  </td>
        <td> ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 19, $this->source); })()), "date_Act", [], "any", false, false, false, 19), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>  ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 23, $this->source); })()), "date_Act", [], "any", false, false, false, 23), 'errors');
        echo " </td>
    </tr>
    <tr>
        <td>  ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 26, $this->source); })()), "temp_act", [], "any", false, false, false, 26), 'label', ["label" => "Temps  Activite"]);
        echo "  </td>

        <td> ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 28, $this->source); })()), "temp_act", [], "any", false, false, false, 28), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>  ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 32, $this->source); })()), "temp_act", [], "any", false, false, false, 32), 'errors');
        echo " </td>
    </tr>
    <tr>
        <td>  ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 35, $this->source); })()), "description_Act", [], "any", false, false, false, 35), 'label', ["label" => "Description"]);
        echo "  </td>
        <td> ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 36, $this->source); })()), "description_Act", [], "any", false, false, false, 36), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>  ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 40, $this->source); })()), "description_Act", [], "any", false, false, false, 40), 'errors');
        echo " </td>
    </tr>
    <tr>
        <td>  ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 43, $this->source); })()), "category", [], "any", false, false, false, 43), 'label', ["label" => "Category"]);
        echo "  </td>

        <td> ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 45, $this->source); })()), "category", [], "any", false, false, false, 45), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>  ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 49, $this->source); })()), "category", [], "any", false, false, false, 49), 'errors');
        echo " </td>
    </tr>
    <tr>
        <td>  ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 52, $this->source); })()), "images", [], "any", false, false, false, 52), 'label', ["label" => "Image"]);
        echo "  </td>

        <td> ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 54, $this->source); })()), "images", [], "any", false, false, false, 54), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>  ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 58, $this->source); })()), "images", [], "any", false, false, false, 58), 'errors');
        echo " </td>
    </tr>
    <tr>
        <td>
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 62, $this->source); })()), "exercices", [], "any", false, false, false, 62), 'row');
        echo "
        </td>

    </tr>
    <tr>
        <td>
            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 68, $this->source); })()), "Add", [], "any", false, false, false, 68), 'row');
        echo "
        </td>

    </tr>
</table>
    </div>

";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 75, $this->source); })()), 'form_end');
        echo "
    <table border=\"1\" style=\"width: 100%\">
        <tr>
            <th style=\"color: #fffb4c\">nom activitie</th>
            <th>date activite</th>
            <th>temps activite </th>
            <th>description </th>
            <th>category </th>
            <th>Action </th>

        </tr>
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 87
            echo "            <tr>
                <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getNomAct", [], "method", false, false, false, 88), "html", null, true);
            echo "</td>
                <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getDateAct", [], "method", false, false, false, 89), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getTempAct", [], "method", false, false, false, 90), "H:i"), "html", null, true);
            echo " </td>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getDescriptionAct", [], "method", false, false, false, 91), "html", null, true);
            echo "</td>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "getCategory", [], "any", false, false, false, 92), "getNomCat", [], "method", false, false, false, 92), "html", null, true);
            echo " </td>
                <td>
                    <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ActivityUpdate", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "getId", [], "any", false, false, false, 94)]), "html", null, true);
            echo "\"> <i class=\"fa-solid fa-cog fa-spin\"></i> </a>

                    <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ActivityDelete", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "getId", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-xmark\"></i></a>





                </td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
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
        return array (  267 => 106,  251 => 96,  246 => 94,  241 => 92,  237 => 91,  233 => 90,  229 => 89,  225 => 88,  222 => 87,  218 => 86,  204 => 75,  194 => 68,  185 => 62,  178 => 58,  171 => 54,  166 => 52,  160 => 49,  153 => 45,  148 => 43,  142 => 40,  135 => 36,  131 => 35,  125 => 32,  118 => 28,  113 => 26,  107 => 23,  100 => 19,  96 => 18,  90 => 15,  83 => 11,  78 => 9,  72 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.back.html.twig' %}
{% block body %}
    <div style=\"padding-left:40%\">
<h1>add activite</h1>
{#{{ form(formActivity) }}#}
{{ form_start(formActivity , {'attr': {'novalidate': 'novalidate'}}) }}
<table>
    <tr>
        <td>  {{ form_label(formActivity.nom_Act,\"Nom Activite\")}}  </td>

        <td> {{ form_widget(formActivity.nom_Act)}}   </td>
    </tr>
    <tr>
        <td></td>
        <td>  {{ form_errors(formActivity.nom_Act) }} </td>
    </tr>
    <tr>
        <td>  {{ form_label(formActivity.date_Act,\"Date Activite\")}}  </td>
        <td> {{ form_widget(formActivity.date_Act)}}   </td>
    </tr>
    <tr>
        <td></td>
        <td>  {{ form_errors(formActivity.date_Act) }} </td>
    </tr>
    <tr>
        <td>  {{ form_label(formActivity.temp_act,\"Temps  Activite\")}}  </td>

        <td> {{ form_widget(formActivity.temp_act)}}   </td>
    </tr>
    <tr>
        <td></td>
        <td>  {{ form_errors(formActivity.temp_act) }} </td>
    </tr>
    <tr>
        <td>  {{ form_label(formActivity.description_Act,\"Description\")}}  </td>
        <td> {{ form_widget(formActivity.description_Act)}}   </td>
    </tr>
    <tr>
        <td></td>
        <td>  {{ form_errors(formActivity.description_Act) }} </td>
    </tr>
    <tr>
        <td>  {{ form_label(formActivity.category,\"Category\")}}  </td>

        <td> {{ form_widget(formActivity.category)}}   </td>
    </tr>
    <tr>
        <td></td>
        <td>  {{ form_errors(formActivity.category) }} </td>
    </tr>
    <tr>
        <td>  {{ form_label(formActivity.images,\"Image\")}}  </td>

        <td> {{ form_widget(formActivity.images)}}   </td>
    </tr>
    <tr>
        <td></td>
        <td>  {{ form_errors(formActivity.images) }} </td>
    </tr>
    <tr>
        <td>
            {{ form_row(formActivity.exercices) }}
        </td>

    </tr>
    <tr>
        <td>
            {{ form_row(formActivity.Add) }}
        </td>

    </tr>
</table>
    </div>

{{ form_end(formActivity) }}
    <table border=\"1\" style=\"width: 100%\">
        <tr>
            <th style=\"color: #fffb4c\">nom activitie</th>
            <th>date activite</th>
            <th>temps activite </th>
            <th>description </th>
            <th>category </th>
            <th>Action </th>

        </tr>
        {% for e in activities %}
            <tr>
                <td>{{ e.getNomAct()}}</td>
                <td>{{ e.getDateAct()|date('Y-m-d')}}</td>
                <td>{{ e.getTempAct()|date('H:i')}} </td>
                <td>{{ e.getDescriptionAct()}}</td>
                <td>{{ e.getCategory.getNomCat()}} </td>
                <td>
                    <a href=\"{{ path('ActivityUpdate',{\"id\":e.getId}) }}\"> <i class=\"fa-solid fa-cog fa-spin\"></i> </a>

                    <a href=\"{{ path('ActivityDelete',{\"id\":e.getId}) }}\"><i class=\"fa-solid fa-xmark\"></i></a>





                </td>

            </tr>
        {% endfor %}
    </table>
    
{% endblock %}", "activity/add.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\activity\\add.html.twig");
    }
}
