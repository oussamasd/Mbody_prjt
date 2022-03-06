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

/* abonnement/_form.html.twig */
class __TwigTemplate_c93ea33417ab7a488c01db0d4a85a240aaaebaa7a5e36cf6691e117ff754d130 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/_form.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<table>
                         <tr>
                             <th style=\"color:#98b6b4\">Nom:</th>
                             <td> ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre nom"]]);
        // line 7
        echo " </td>
                         </tr>
<tr>
    <td></td>
    <td>
        ";
        // line 12
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "valid", [], "any", false, false, false, 12)) {
            // line 13
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'errors');
            echo "
            </div>
        ";
        }
        // line 17
        echo "    </td>
</tr>

                        <tr>
                        <th style=\"color:#98b6b4\">Prix:</th>
 <td>";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "prix", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre prix"]]);
        echo " </td>
                        </tr>
<tr>
<td></td>
    <td>   ";
        // line 26
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "prix", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "valid", [], "any", false, false, false, 26)) {
            // line 27
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prix", [], "any", false, false, false, 28), 'errors');
            echo "
            </div>

        ";
        }
        // line 31
        echo " </td>
</tr>

<tr>
    <th style=\"color:#98b6b4\">Catégories:</th>
  <td> ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "categories", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre catégorie"]]);
        echo " </td>

</tr>
    <tr>
        <td></td>
        <td>  ";
        // line 41
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "categories", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "valid", [], "any", false, false, false, 41)) {
            // line 42
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "categories", [], "any", false, false, false, 43), 'errors');
            echo "
                </div>

            ";
        }
        // line 46
        echo " </td>
    </tr>

<tr>

    <th style=\"color:#98b6b4\">description:</th>

   <td>  ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre description"]]);
        echo " </td>

</tr>
    <tr>
        <td></td>
        <td>  ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "description", [], "any", false, false, false, 58), 'errors');
        echo " </td>
    </tr>
    <tr>

        <th style=\"color:#98b6b4\">image:</th>

        <td>  ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "imageFile", [], "any", false, false, false, 64), 'widget');
        echo " </td>

    </tr>

";
        // line 69
        echo "</table>
<button type=\"btn\" class=\"btn btn-primary\"> ";
        // line 70
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 70, $this->source); })()), "Envoyer")) : ("Envoyer")), "html", null, true);
        echo "</button>
";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "abonnement/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 71,  162 => 70,  159 => 69,  152 => 64,  143 => 58,  135 => 53,  126 => 46,  119 => 43,  116 => 42,  114 => 41,  106 => 36,  99 => 31,  92 => 28,  89 => 27,  87 => 26,  80 => 22,  73 => 17,  67 => 14,  64 => 13,  62 => 12,  55 => 7,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
<table>
                         <tr>
                             <th style=\"color:#98b6b4\">Nom:</th>
                             <td> {{ form_widget(form.nom,{'attr':{'class':'form-control','placeholder':'Entrer votre nom'}}
                                 ) }} </td>
                         </tr>
<tr>
    <td></td>
    <td>
        {% if not form.nom.vars.valid %}
            <div class=\"alert alert-danger\">
                {{ form_errors(form.nom) }}
            </div>
        {% endif %}
    </td>
</tr>

                        <tr>
                        <th style=\"color:#98b6b4\">Prix:</th>
 <td>{{ form_widget(form.prix,{'attr':{'class':'form-control','placeholder':'Entrer votre prix'}}) }} </td>
                        </tr>
<tr>
<td></td>
    <td>   {% if not form.prix.vars.valid %}
            <div class=\"alert alert-danger\">
                {{ form_errors(form.prix) }}
            </div>

        {% endif %} </td>
</tr>

<tr>
    <th style=\"color:#98b6b4\">Catégories:</th>
  <td> {{ form_widget(form.categories,{'attr':{'class':'form-control','placeholder':'Entrer votre catégorie'}}) }} </td>

</tr>
    <tr>
        <td></td>
        <td>  {% if not form.categories.vars.valid %}
                <div class=\"alert alert-danger\">
                    {{ form_errors(form.categories) }}
                </div>

            {% endif %} </td>
    </tr>

<tr>

    <th style=\"color:#98b6b4\">description:</th>

   <td>  {{ form_widget(form.description,{'attr':{'class':'form-control','placeholder':'Entrer votre description'}}) }} </td>

</tr>
    <tr>
        <td></td>
        <td>  {{ form_errors(form.description) }} </td>
    </tr>
    <tr>

        <th style=\"color:#98b6b4\">image:</th>

        <td>  {{ form_widget(form.imageFile) }} </td>

    </tr>

{#<button class=\"btn\"> {{ button_label|default('Envoyer') }}</button>#}
</table>
<button type=\"btn\" class=\"btn btn-primary\"> {{ button_label|default('Envoyer') }}</button>
{{ form_end(form) }}
", "abonnement/_form.html.twig", "C:\\xampp\\htdocs\\Mbody_Prjt\\templates\\abonnement\\_form.html.twig");
    }
}
