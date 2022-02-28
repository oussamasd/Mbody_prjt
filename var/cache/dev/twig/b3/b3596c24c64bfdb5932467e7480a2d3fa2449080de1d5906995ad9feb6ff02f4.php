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

/* category/add.html.twig */
class __TwigTemplate_927082effd590591ffc5b85f2969541c581022da7d431d25f14d7e5799313f88 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/add.html.twig"));

        // line 1
        echo "<h1>add category</h1>
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCategory"]) || array_key_exists("formCategory", $context) ? $context["formCategory"] : (function () { throw new RuntimeError('Variable "formCategory" does not exist.', 3, $this->source); })()), 'form_start');
        echo "
<tr>
    <td>";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCategory"]) || array_key_exists("formCategory", $context) ? $context["formCategory"] : (function () { throw new RuntimeError('Variable "formCategory" does not exist.', 5, $this->source); })()), "nom_Cat", [], "any", false, false, false, 5), 'label', ["label" => " New Category"]);
        echo "  </td>
    <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCategory"]) || array_key_exists("formCategory", $context) ? $context["formCategory"] : (function () { throw new RuntimeError('Variable "formCategory" does not exist.', 6, $this->source); })()), "nom_Cat", [], "any", false, false, false, 6), 'errors');
        echo " </td>
    <td>";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCategory"]) || array_key_exists("formCategory", $context) ? $context["formCategory"] : (function () { throw new RuntimeError('Variable "formCategory" does not exist.', 7, $this->source); })()), "nom_Cat", [], "any", false, false, false, 7), 'widget');
        echo "</td>
</tr>
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCategory"]) || array_key_exists("formCategory", $context) ? $context["formCategory"] : (function () { throw new RuntimeError('Variable "formCategory" does not exist.', 9, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "category/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  59 => 7,  55 => 6,  51 => 5,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>add category</h1>
{#{{ form(formCategory) }}#}
{{ form_start(formCategory) }}
<tr>
    <td>{{ form_label(formCategory.nom_Cat,\" New Category\")}}  </td>
    <td>{{ form_errors(formCategory.nom_Cat) }} </td>
    <td>{{ form_widget(formCategory.nom_Cat)}}</td>
</tr>
{{ form_end(formCategory) }}", "category/add.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\category\\add.html.twig");
    }
}
