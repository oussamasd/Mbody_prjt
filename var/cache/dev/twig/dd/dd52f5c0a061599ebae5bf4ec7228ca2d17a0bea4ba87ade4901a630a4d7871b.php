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
                             <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/offf.jpg"), "html", null, true);
        echo "\"  alt=\"logo\" width=\"350px\" height=\"200px\">

                             <td> ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "delai", [], "any", false, false, false, 9), 'widget');
        echo " </td>
                             <td> </td>
                             <td>
                                 ";
        // line 12
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "delai", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "valid", [], "any", false, false, false, 12)) {
            // line 13
            echo "                                 <div class=\"alert alert-danger\">
                                     ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "delai", [], "any", false, false, false, 14), 'errors');
            echo "
                                 </div>

                                 ";
        }
        // line 18
        echo "                             </td>
                         </tr>

                           <tr>
                               <th style=\"color:#98b6b4 \">Nom:</th>
                                <td>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'widget');
        echo " </td>
                           </tr>

    <tr>
                               <td></td>
                               <td>  ";
        // line 28
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "valid", [], "any", false, false, false, 28)) {
            // line 29
            echo "                                       <div class=\"alert alert-danger\">
                                           ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), 'errors');
            echo "
                                       </div>

                                   ";
        }
        // line 33
        echo " </td>
                           </tr>
                        <tr>
                        <th style=\"color: #98b6b4\">Description:</th>
                            <td>  ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "Description", [], "any", false, false, false, 37), 'widget');
        echo " </td>
                        </tr>
    <tr>
        <td> </td>
        <td>";
        // line 41
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "Description", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "valid", [], "any", false, false, false, 41)) {
            // line 42
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "Description", [], "any", false, false, false, 43), 'errors');
            echo "
                         </div>
            ";
        }
        // line 46
        echo "                        </td>
                        </tr>
    <tr>
        <th style=\"color: #98b6b4\">Nom_Abonnement:</th>
        <td>  ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "nom_abonnement", [], "any", false, false, false, 50), 'widget');
        echo " </td>
    </tr>
    <tr>
        <td></td>
        <td>  ";
        // line 54
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "nom_abonnement", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "valid", [], "any", false, false, false, 54)) {
            // line 55
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "nom_abonnement", [], "any", false, false, false, 56), 'errors');
            echo "
                </div>

            ";
        }
        // line 59
        echo " </td>
    </tr>


";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'widget');
        echo "
";
        // line 65
        echo "</table>
<button type=\"btn\" class=\"btn btn-primary\"> ";
        // line 66
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 66, $this->source); })()), "Envoyer")) : ("Envoyer")), "html", null, true);
        echo "</button>
";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_end');
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
        return array (  168 => 67,  164 => 66,  161 => 65,  157 => 63,  151 => 59,  144 => 56,  141 => 55,  139 => 54,  132 => 50,  126 => 46,  120 => 43,  117 => 42,  115 => 41,  108 => 37,  102 => 33,  95 => 30,  92 => 29,  90 => 28,  82 => 23,  75 => 18,  68 => 14,  65 => 13,  63 => 12,  57 => 9,  52 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}

<table>

                         <tr>
                         <th style=\"color: #98b6b4\">Delai:</th>
                             <img src=\"{{ asset('/assets/images/offf.jpg') }}\"  alt=\"logo\" width=\"350px\" height=\"200px\">

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
                                <td>{{ form_widget(form.nom) }} </td>
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
                            <td>  {{ form_widget(form.Description) }} </td>
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