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

/* offre/_form.html.twig */
class __TwigTemplate_00e6010f28e0b6c1c7485ae346eb62ac6e8c4669da6a0856d1902bbef08c6329 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

<table>

                         <tr>
                         <th style=\"color: #98b6b4\">Delai:</th>
                             <td> ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "delai", [], "any", false, false, false, 7), 'widget');
        echo " </td>
                             <td> </td>
                             <td>
                                 ";
        // line 10
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "delai", [], "any", false, false, false, 10), "vars", [], "any", false, false, false, 10), "valid", [], "any", false, false, false, 10)) {
            // line 11
            echo "                                 <div class=\"alert alert-danger\">
                                     ";
            // line 12
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "delai", [], "any", false, false, false, 12), 'errors');
            echo "
                                 </div>

                                 ";
        }
        // line 16
        echo "                             </td>
                         </tr>

                           <tr>
                               <th style=\"color:#98b6b4 \">Nom:</th>
                                <td>";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre nom"]]);
        echo " </td>
                           </tr>

    <tr>
                               <td></td>
                               <td>  ";
        // line 26
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "valid", [], "any", false, false, false, 26)) {
            // line 27
            echo "                                       <div class=\"alert alert-danger\">
                                           ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'errors');
            echo "
                                       </div>

                                   ";
        }
        // line 31
        echo " </td>
                           </tr>
                        <tr>
                        <th style=\"color: #98b6b4\">Description:</th>
                            <td>  ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "Description", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre description"]]);
        echo " </td>
                        </tr>
    <tr>
        <td> </td>
        <td>";
        // line 39
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "Description", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "valid", [], "any", false, false, false, 39)) {
            // line 40
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "Description", [], "any", false, false, false, 41), 'errors');
            echo "
                         </div>
            ";
        }
        // line 44
        echo "                        </td>
                        </tr>
    <tr>
        <th style=\"color: #98b6b4\">Nom_Abonnement:</th>
        <td>  ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "nom_abonnement", [], "any", false, false, false, 48), 'widget');
        echo " </td>
    </tr>
    <tr>
        <td></td>
        <td>  ";
        // line 52
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "nom_abonnement", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "valid", [], "any", false, false, false, 52)) {
            // line 53
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "nom_abonnement", [], "any", false, false, false, 54), 'errors');
            echo "
                </div>

            ";
        }
        // line 57
        echo " </td>
    </tr>


";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'widget');
        echo "
";
        // line 63
        echo "</table>
<button type=\"btn\" class=\"btn btn-primary\"> ";
        // line 64
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 64, $this->source); })()), "Envoyer")) : ("Envoyer")), "html", null, true);
        echo "</button>
";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "offre/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 65,  159 => 64,  156 => 63,  152 => 61,  146 => 57,  139 => 54,  136 => 53,  134 => 52,  127 => 48,  121 => 44,  115 => 41,  112 => 40,  110 => 39,  103 => 35,  97 => 31,  90 => 28,  87 => 27,  85 => 26,  77 => 21,  70 => 16,  63 => 12,  60 => 11,  58 => 10,  52 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}

<table>

                         <tr>
                         <th style=\"color: #98b6b4\">Delai:</th>
                             <td> {{ form_widget(form.delai) }} </td>
                             <td> </td>
                             <td>
                                 {% if not form.delai.vars.valid %}
                                 <div class=\"alert alert-danger\">
                                     {{ form_errors(form.delai) }}
                                 </div>

                                 {% endif %}
                             </td>
                         </tr>

                           <tr>
                               <th style=\"color:#98b6b4 \">Nom:</th>
                                <td>{{ form_widget(form.nom,{'attr':{'class':'form-control','placeholder':'Entrer votre nom'}}) }} </td>
                           </tr>

    <tr>
                               <td></td>
                               <td>  {% if not form.nom.vars.valid %}
                                       <div class=\"alert alert-danger\">
                                           {{ form_errors(form.nom) }}
                                       </div>

                                   {% endif %} </td>
                           </tr>
                        <tr>
                        <th style=\"color: #98b6b4\">Description:</th>
                            <td>  {{ form_widget(form.Description,{'attr':{'class':'form-control','placeholder':'Entrer votre description'}}) }} </td>
                        </tr>
    <tr>
        <td> </td>
        <td>{% if not form.Description.vars.valid %}
            <div class=\"alert alert-danger\">
                {{ form_errors(form.Description) }}
                         </div>
            {% endif %}
                        </td>
                        </tr>
    <tr>
        <th style=\"color: #98b6b4\">Nom_Abonnement:</th>
        <td>  {{ form_widget(form.nom_abonnement) }} </td>
    </tr>
    <tr>
        <td></td>
        <td>  {% if not form.nom_abonnement.vars.valid %}
                <div class=\"alert alert-danger\">
                    {{ form_errors(form.nom_abonnement) }}
                </div>

            {% endif %} </td>
    </tr>


{{ form_widget(form) }}
{#  <button class=\"btn\">{{ button_label|default('Send') }}</button>#}
</table>
<button type=\"btn\" class=\"btn btn-primary\"> {{ button_label|default('Envoyer') }}</button>
{{ form_end(form) }}


", "offre/_form.html.twig", "C:\\xampp\\htdocs\\Mbody_Prjt\\templates\\offre\\_form.html.twig");
    }
}
