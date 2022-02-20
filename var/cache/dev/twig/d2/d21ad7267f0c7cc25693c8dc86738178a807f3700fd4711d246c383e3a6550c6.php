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
class __TwigTemplate_8478f42d2f903d5ef5eba68ed5a34df9818c906cf6bf29d2de9d9761542373bf extends Template
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
                         <tr>
                         <th>Delai:</th>
                         ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "delai", [], "any", false, false, false, 4), 'widget');
        echo "
                          ";
        // line 5
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "delai", [], "any", false, false, false, 5), "vars", [], "any", false, false, false, 5), "valid", [], "any", false, false, false, 5)) {
            // line 6
            echo "                              <div class=\"alert alert-danger\">
                                  ";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "delai", [], "any", false, false, false, 7), 'errors');
            echo "
                              </div>
                           </tr>
                          ";
        }
        // line 11
        echo "                           <tr>
                               <th>Nom:</th>
";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'widget');
        echo "
                          ";
        // line 14
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "valid", [], "any", false, false, false, 14)) {
            // line 15
            echo "                              <div class=\"alert alert-danger\">
                                  ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'errors');
            echo "
                              </div>

                          ";
        }
        // line 20
        echo "                           </tr>
                        <tr>
                        <th>Description:</th>
 ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "Description", [], "any", false, false, false, 23), 'widget');
        echo "
                          ";
        // line 24
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "Description", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "valid", [], "any", false, false, false, 24)) {
            // line 25
            echo "                              <div class=\"alert alert-danger\">
                                  ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "Description", [], "any", false, false, false, 26), 'errors');
            echo "
                              </div>
                        </tr>
                          ";
        }
        // line 30
        echo "
";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'widget');
        echo "
";
        // line 33
        echo "<button type=\"btn\" class=\"btn btn-primary\"> ";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 33, $this->source); })()), "Envoyer")) : ("Envoyer")), "html", null, true);
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
        return "offre/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  113 => 33,  109 => 31,  106 => 30,  99 => 26,  96 => 25,  94 => 24,  90 => 23,  85 => 20,  78 => 16,  75 => 15,  73 => 14,  69 => 13,  65 => 11,  58 => 7,  55 => 6,  53 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
                         <tr>
                         <th>Delai:</th>
                         {{ form_widget(form.delai) }}
                          {% if not form.delai.vars.valid %}
                              <div class=\"alert alert-danger\">
                                  {{ form_errors(form.delai) }}
                              </div>
                           </tr>
                          {% endif %}
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
                        <th>Description:</th>
 {{ form_widget(form.Description) }}
                          {% if not form.Description.vars.valid %}
                              <div class=\"alert alert-danger\">
                                  {{ form_errors(form.Description) }}
                              </div>
                        </tr>
                          {% endif %}

{{ form_widget(form) }}
{#  <button class=\"btn\">{{ button_label|default('Send') }}</button>#}
<button type=\"btn\" class=\"btn btn-primary\"> {{ button_label|default('Envoyer') }}</button>

{{ form_end(form) }}
", "offre/_form.html.twig", "C:\\xampp\\htdocs\\Mbody_Prjt\\templates\\offre\\_form.html.twig");
    }
}
