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
class __TwigTemplate_93d294d92cfa5497c0e088d9034e4aae10071c2dc7bf590fa64a67577fe4f4d6 extends Template
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
                         <tr>
                         <th>Nom:</th>
                         ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), 'widget');
        echo "
                          ";
        // line 6
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "vars", [], "any", false, false, false, 6), "valid", [], "any", false, false, false, 6)) {
            // line 7
            echo "                              <div class=\"alert alert-danger\">
                                  ";
            // line 8
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), 'errors');
            echo "
                              </div>
                          ";
        }
        // line 11
        echo "                         </tr>
                        <tr>
                        <th>Prix:</th>
 ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "prix", [], "any", false, false, false, 14), 'widget');
        echo "
                          ";
        // line 15
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "prix", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "valid", [], "any", false, false, false, 15)) {
            // line 16
            echo "                              <div class=\"alert alert-danger\">
                                  ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "prix", [], "any", false, false, false, 17), 'errors');
            echo "
                              </div>
                        </tr>
                          ";
        }
        // line 21
        echo "                         <tr>
                         <th>Catégories:</th>
 ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "categories", [], "any", false, false, false, 23), 'widget');
        echo "
                          ";
        // line 24
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "categories", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "valid", [], "any", false, false, false, 24)) {
            // line 25
            echo "                              <div class=\"alert alert-danger\">
                                  ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "categories", [], "any", false, false, false, 26), 'errors');
            echo "
                              </div>
                         </tr>
                          ";
        }
        // line 30
        echo "

";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'widget');
        echo "
";
        // line 34
        echo "<button type=\"btn\" class=\"btn btn-primary\"> ";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 34, $this->source); })()), "Envoyer")) : ("Envoyer")), "html", null, true);
        echo "</button>
";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
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
        return array (  121 => 35,  116 => 34,  112 => 32,  108 => 30,  101 => 26,  98 => 25,  96 => 24,  92 => 23,  88 => 21,  81 => 17,  78 => 16,  76 => 15,  72 => 14,  67 => 11,  61 => 8,  58 => 7,  56 => 6,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
                         <tr>
                         <th>Nom:</th>
                         {{ form_widget(form.nom) }}
                          {% if not form.nom.vars.valid %}
                              <div class=\"alert alert-danger\">
                                  {{ form_errors(form.nom) }}
                              </div>
                          {% endif %}
                         </tr>
                        <tr>
                        <th>Prix:</th>
 {{ form_widget(form.prix) }}
                          {% if not form.prix.vars.valid %}
                              <div class=\"alert alert-danger\">
                                  {{ form_errors(form.prix) }}
                              </div>
                        </tr>
                          {% endif %}
                         <tr>
                         <th>Catégories:</th>
 {{ form_widget(form.categories) }}
                          {% if not form.categories.vars.valid %}
                              <div class=\"alert alert-danger\">
                                  {{ form_errors(form.categories) }}
                              </div>
                         </tr>
                          {% endif %}


{{ form_widget(form) }}
{#<button class=\"btn\"> {{ button_label|default('Envoyer') }}</button>#}
<button type=\"btn\" class=\"btn btn-primary\"> {{ button_label|default('Envoyer') }}</button>
{{ form_end(form) }}

", "abonnement/_form.html.twig", "C:\\xampp\\htdocs\\Mbody_Prjt\\templates\\abonnement\\_form.html.twig");
    }
}
