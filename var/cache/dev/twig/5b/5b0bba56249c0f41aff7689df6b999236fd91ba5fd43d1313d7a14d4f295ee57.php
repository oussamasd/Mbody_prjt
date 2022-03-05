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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), 'widget');
        echo " </td>
                         </tr>
<tr>
    <td></td>
    <td>
        ";
        // line 11
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "valid", [], "any", false, false, false, 11)) {
            // line 12
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'errors');
            echo "
            </div>
        ";
        }
        // line 16
        echo "    </td>
</tr>

                        <tr>
                        <th style=\"color:#98b6b4\">Prix:</th>
 <td>";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "prix", [], "any", false, false, false, 21), 'widget');
        echo " </td>
                        </tr>
<tr>
<td></td>
    <td>   ";
        // line 25
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prix", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "valid", [], "any", false, false, false, 25)) {
            // line 26
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "prix", [], "any", false, false, false, 27), 'errors');
            echo "
            </div>

        ";
        }
        // line 30
        echo " </td>
</tr>

<tr>
    <th style=\"color:#98b6b4\">Catégories:</th>
  <td> ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "categories", [], "any", false, false, false, 35), 'widget');
        echo " </td>

</tr>
    <tr>
        <td></td>
        <td>  ";
        // line 40
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "categories", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "valid", [], "any", false, false, false, 40)) {
            // line 41
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "categories", [], "any", false, false, false, 42), 'errors');
            echo "
                </div>

            ";
        }
        // line 45
        echo " </td>
    </tr>

<tr>

    <th style=\"color:#98b6b4\">description:</th>

   <td>  ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), 'widget');
        echo " </td>

</tr>
    <tr>
        <td></td>
        <td>  ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "description", [], "any", false, false, false, 57), 'errors');
        echo " </td>
    </tr>
    <tr>

        <th style=\"color:#98b6b4\">image:</th>

        <td>  ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "imageFile", [], "any", false, false, false, 63), 'widget');
        echo " </td>

    </tr>

";
        // line 68
        echo "</table>
<button type=\"btn\" class=\"btn btn-primary\"> ";
        // line 69
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 69, $this->source); })()), "Envoyer")) : ("Envoyer")), "html", null, true);
        echo "</button>
";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
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
        return array (  165 => 70,  161 => 69,  158 => 68,  151 => 63,  142 => 57,  134 => 52,  125 => 45,  118 => 42,  115 => 41,  113 => 40,  105 => 35,  98 => 30,  91 => 27,  88 => 26,  86 => 25,  79 => 21,  72 => 16,  66 => 13,  63 => 12,  61 => 11,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
<table>
                         <tr>
                             <th style=\"color:#98b6b4\">Nom:</th>
                             <td> {{ form_widget(form.nom) }} </td>
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
 <td>{{ form_widget(form.prix) }} </td>
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
  <td> {{ form_widget(form.categories) }} </td>

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

   <td>  {{ form_widget(form.description) }} </td>

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
