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
            'css' => [$this, 'block_css'],
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
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 3
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    .dibtn{
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    }
    .sub {
    width: 140px;
    height: 45px;
    font-family: 'Roboto', sans-serif;
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 2.5px;
    font-weight: 500;
    color: #000;
    background-color: #fff;
    border: none;
    border-radius: 45px;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease 0s;
    cursor: pointer;
    outline: none;
    }

    .sub:hover {
    background-color: #e65f32;
    box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
    color: #fff;
    transform: translateY(-7px);
    }
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "    <center>


";
        // line 40
        echo "<h1>add exercice</h1>
";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 42, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<table>
    <tr>
         <td>  ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 45, $this->source); })()), "nom_Exercice", [], "any", false, false, false, 45), 'label', ["label" => "Nom Exercice"]);
        echo "  </td>

        <td> ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 47, $this->source); })()), "nom_Exercice", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrer nom exercice"]]);
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>
         ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 52, $this->source); })()), "nom_Exercice", [], "any", false, false, false, 52), 'errors');
        echo "
        </td>
    </tr>
    <tr>
        <td>  ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 56, $this->source); })()), "dure_Exercice", [], "any", false, false, false, 56), 'label', ["label" => "Duree Exercice"]);
        echo "  </td>

        <td> ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 58, $this->source); })()), "dure_Exercice", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrer duree exercice"]]);
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>
          ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 63, $this->source); })()), "dure_Exercice", [], "any", false, false, false, 63), 'errors');
        echo "
        </td>
    </tr>
    <tr>
        <td>  ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 67, $this->source); })()), "description_Exercice", [], "any", false, false, false, 67), 'label', ["label" => "Description Exercice"]);
        echo "  </td>

        <td> ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 69, $this->source); })()), "description_Exercice", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrer description exercice"]]);
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>
          ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 74, $this->source); })()), "description_Exercice", [], "any", false, false, false, 74), 'errors');
        echo "
        </td>
    </tr>
    <tr>
        <td>  ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 78, $this->source); })()), "category", [], "any", false, false, false, 78), 'label', ["label" => "Category"]);
        echo "  </td>

        <td> ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 80, $this->source); })()), "category", [], "any", false, false, false, 80), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>
          ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 85, $this->source); })()), "category", [], "any", false, false, false, 85), 'errors');
        echo "
        </td>
    </tr>








</table>
        <div class=\"dibtn\" style=\"margin-top: 20px\">
        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 98, $this->source); })()), "Add", [], "any", false, false, false, 98), 'row', ["attr" => ["class" => "sub"]]);
        echo "
        </div>



        ";
        // line 104
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 104, $this->source); })()), "Add", [], "any", false, false, false, 104), 'widget');
        echo "
";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formExercice"]) || array_key_exists("formExercice", $context) ? $context["formExercice"] : (function () { throw new RuntimeError('Variable "formExercice" does not exist.', 105, $this->source); })()), 'form_end');
        echo "
        <div style=\"margin-top: 20px\">

            <a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exerciceback");
        echo "\"><h6> back to list</h6></a>

        </div>
";
        // line 118
        echo "
";
        // line 129
        echo "
";
        // line 134
        echo "    </center>
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
        return array (  256 => 134,  253 => 129,  250 => 118,  244 => 108,  238 => 105,  233 => 104,  225 => 98,  209 => 85,  201 => 80,  196 => 78,  189 => 74,  181 => 69,  176 => 67,  169 => 63,  161 => 58,  156 => 56,  149 => 52,  141 => 47,  136 => 45,  130 => 42,  127 => 40,  122 => 36,  112 => 35,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.back.html.twig' %}
{% block css %}
    {{ parent() }}
    .dibtn{
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    }
    .sub {
    width: 140px;
    height: 45px;
    font-family: 'Roboto', sans-serif;
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 2.5px;
    font-weight: 500;
    color: #000;
    background-color: #fff;
    border: none;
    border-radius: 45px;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease 0s;
    cursor: pointer;
    outline: none;
    }

    .sub:hover {
    background-color: #e65f32;
    box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
    color: #fff;
    transform: translateY(-7px);
    }
{% endblock %}
{% block body %}
    <center>


{#    <div style=\"margin-left:25% ;padding-left: 10%; height: 40%;width: 40%\">#}
<h1>add exercice</h1>
{#{{ form(formExercice) }}#}
{{ form_start(formExercice, {'attr': {'novalidate': 'novalidate'}}) }}
<table>
    <tr>
         <td>  {{ form_label(formExercice.nom_Exercice,\"Nom Exercice\")}}  </td>

        <td> {{ form_widget(formExercice.nom_Exercice,{'attr':{'class':'form-control','placeholder':'Entrer nom exercice'}})}}   </td>
    </tr>
    <tr>
        <td></td>
        <td>
         {{ form_errors(formExercice.nom_Exercice) }}
        </td>
    </tr>
    <tr>
        <td>  {{ form_label(formExercice.dure_Exercice,\"Duree Exercice\")}}  </td>

        <td> {{ form_widget(formExercice.dure_Exercice,{'attr':{'class':'form-control','placeholder':'Entrer duree exercice'}})}}   </td>
    </tr>
    <tr>
        <td></td>
        <td>
          {{ form_errors(formExercice.dure_Exercice) }}
        </td>
    </tr>
    <tr>
        <td>  {{ form_label(formExercice.description_Exercice,\"Description Exercice\")}}  </td>

        <td> {{ form_widget(formExercice.description_Exercice,{'attr':{'class':'form-control','placeholder':'Entrer description exercice'}})}}   </td>
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
        <div class=\"dibtn\" style=\"margin-top: 20px\">
        {{ form_row(formExercice.Add,{'attr':{'class':'sub'}}) }}
        </div>



        {#    </div>#}
 {{ form_widget(formExercice.Add)}}
{{ form_end(formExercice) }}
        <div style=\"margin-top: 20px\">

            <a href=\"{{ path('exerciceback')}}\"><h6> back to list</h6></a>

        </div>
{#    <table border=\"1\" style=\"width: 100%\">#}
{#        <tr>#}
{#            <th style=\"color: yellow\">nom exercice</th>#}
{#            <th style=\"color: yellow\">dure exercice</th>#}
{#            <th style=\"color: yellow\" >description </th>#}
{#            <th style=\"color: yellow\" >category</th>#}
{#            <th style=\"color: yellow\">Action</th>#}

{#        </tr>#}
{#        {% for e in exercices %}#}
{#            <tr>#}
{#                <td>{{ e.getNomExercice()}}</td>#}
{#                <td>{{ e.getDureExercice()}}</td>#}
{#                <td>{{ e.getDescriptionExercice()}} </td>#}
{#                <td>{{ e.getCategory().getNomCat()}}</td>#}
{#                <td>#}
{#                    <a href=\"{{ path('ExerciceUpdate',{\"id\":e.getId}) }}\"> <i class=\"fa-solid fa-cog fa-spin\"></i> </a>#}
{#                    <a href=\"{{ path('ExerciceDelete',{\"id\":e.getId}) }}\"><i class=\"fa-solid fa-xmark\"></i></a>#}

{#                </td>#}
{#            </tr>#}
{#        {% endfor %}#}
{#    </table>#}
    </center>
{% endblock %}", "exercice/add.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\exercice\\add.html.twig");
    }
}
