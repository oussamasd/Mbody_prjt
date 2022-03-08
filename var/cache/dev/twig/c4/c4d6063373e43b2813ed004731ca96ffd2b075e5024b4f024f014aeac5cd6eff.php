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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/add.html.twig"));

        $this->parent = $this->loadTemplate("base.back.html.twig", "activity/add.html.twig", 1);
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

        // line 37
        echo "    <center>


<h1>add activite</h1>
";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 42, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<table>
    <tr>
        <td>  ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 45, $this->source); })()), "nom_Act", [], "any", false, false, false, 45), 'label', ["label" => "Nom Activite"]);
        echo "  </td>

        <td> ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 47, $this->source); })()), "nom_Act", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrer nom activite"]]);
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>  ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 51, $this->source); })()), "nom_Act", [], "any", false, false, false, 51), 'errors');
        echo " </td>
    </tr>
    <tr>
        <td>  ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 54, $this->source); })()), "date_Act", [], "any", false, false, false, 54), 'label', ["label" => "Date Activite"]);
        echo "  </td>
        <td> ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 55, $this->source); })()), "date_Act", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>  ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 59, $this->source); })()), "date_Act", [], "any", false, false, false, 59), 'errors');
        echo " </td>
    </tr>
    <tr>
        <td>  ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 62, $this->source); })()), "temp_act", [], "any", false, false, false, 62), 'label', ["label" => "Temps  Activite"]);
        echo "  </td>

        <td> ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 64, $this->source); })()), "temp_act", [], "any", false, false, false, 64), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>  ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 68, $this->source); })()), "temp_act", [], "any", false, false, false, 68), 'errors');
        echo " </td>
    </tr>
    <tr>
        <td>  ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 71, $this->source); })()), "quantite", [], "any", false, false, false, 71), 'label', ["label" => "nombre de participation"]);
        echo "  </td>

        <td> ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 73, $this->source); })()), "quantite", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre quantite"]]);
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>  ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 77, $this->source); })()), "quantite", [], "any", false, false, false, 77), 'errors');
        echo " </td>
    </tr>
    <tr>
        <td>  ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 80, $this->source); })()), "description_Act", [], "any", false, false, false, 80), 'label', ["label" => "Description"]);
        echo "  </td>
        <td> ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 81, $this->source); })()), "description_Act", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre description"]]);
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>  ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 85, $this->source); })()), "description_Act", [], "any", false, false, false, 85), 'errors');
        echo " </td>
    </tr>
    <tr>
        <td>  ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 88, $this->source); })()), "category", [], "any", false, false, false, 88), 'label', ["label" => "Category"]);
        echo "  </td>

        <td> ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 90, $this->source); })()), "category", [], "any", false, false, false, 90), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>  ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 94, $this->source); })()), "category", [], "any", false, false, false, 94), 'errors');
        echo " </td>
    </tr>
    <tr>
        <td>  ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 97, $this->source); })()), "images", [], "any", false, false, false, 97), 'label', ["label" => "Image"]);
        echo "  </td>

        <td> ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 99, $this->source); })()), "images", [], "any", false, false, false, 99), 'widget');
        echo "   </td>
    </tr>
    <tr>
        <td></td>
        <td>  ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 103, $this->source); })()), "images", [], "any", false, false, false, 103), 'errors');
        echo " </td>
    </tr>
    <tr>
        <td>
            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 107, $this->source); })()), "exercices", [], "any", false, false, false, 107), 'row');
        echo "
        </td>

    </tr>


</table>
        <div class=\"dibtn\">

            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 116, $this->source); })()), "Add", [], "any", false, false, false, 116), 'row', ["attr" => ["class" => "sub"]]);
        echo "
        </div>



        ";
        // line 122
        echo "
";
        // line 123
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formActivity"]) || array_key_exists("formActivity", $context) ? $context["formActivity"] : (function () { throw new RuntimeError('Variable "formActivity" does not exist.', 123, $this->source); })()), 'form_end');
        echo "
        <div style=\"margin-top: 20px\">

            <a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activityall");
        echo "\"><h6> back to list</h6></a>

        </div>
   ";
        // line 165
        echo "    </center>
    
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
        return array (  294 => 165,  288 => 126,  282 => 123,  279 => 122,  271 => 116,  259 => 107,  252 => 103,  245 => 99,  240 => 97,  234 => 94,  227 => 90,  222 => 88,  216 => 85,  209 => 81,  205 => 80,  199 => 77,  192 => 73,  187 => 71,  181 => 68,  174 => 64,  169 => 62,  163 => 59,  156 => 55,  152 => 54,  146 => 51,  139 => 47,  134 => 45,  128 => 42,  122 => 37,  112 => 35,  69 => 3,  59 => 2,  36 => 1,);
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
{#    <div style=\"padding-left:40%\">#}
    <center>


<h1>add activite</h1>
{#{{ form(formActivity) }}#}
{{ form_start(formActivity , {'attr': {'novalidate': 'novalidate'}}) }}
<table>
    <tr>
        <td>  {{ form_label(formActivity.nom_Act,\"Nom Activite\")}}  </td>

        <td> {{ form_widget(formActivity.nom_Act,{'attr':{'class':'form-control','placeholder':'Entrer nom activite'}})}}   </td>
    </tr>
    <tr>
        <td></td>
        <td>  {{ form_errors(formActivity.nom_Act) }} </td>
    </tr>
    <tr>
        <td>  {{ form_label(formActivity.date_Act,\"Date Activite\")}}  </td>
        <td> {{ form_widget(formActivity.date_Act,{'attr':{'class':'form-control'}})}}   </td>
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
        <td>  {{ form_label(formActivity.quantite,\"nombre de participation\")}}  </td>

        <td> {{ form_widget(formActivity.quantite,{'attr':{'class':'form-control','placeholder':'Entrer votre quantite'}})}}   </td>
    </tr>
    <tr>
        <td></td>
        <td>  {{ form_errors(formActivity.quantite) }} </td>
    </tr>
    <tr>
        <td>  {{ form_label(formActivity.description_Act,\"Description\")}}  </td>
        <td> {{ form_widget(formActivity.description_Act,{'attr':{'class':'form-control','placeholder':'Entrer votre description'}})}}   </td>
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


</table>
        <div class=\"dibtn\">

            {{ form_row(formActivity.Add,{'attr':{'class':'sub'}}) }}
        </div>



        {#    </div>#}

{{ form_end(formActivity) }}
        <div style=\"margin-top: 20px\">

            <a href=\"{{ path('activityall')}}\"><h6> back to list</h6></a>

        </div>
   {# <table border=\"1\" style=\"width: 100%\">
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

                    <a href=\"https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/activity/details/{{ e.getId }}\" >

                        <i class=\"fab fa-facebook-f\"></i>
                    </a>





                </td>

            </tr>
        {% endfor %}
    </table>#}
    </center>
    
{% endblock %}", "activity/add.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\activity\\add.html.twig");
    }
}
