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

/* activity/pdf.html.twig */
class __TwigTemplate_f5f577713b85e91bc04a1231bba15c2add965e2fb6b6301669d7beb10fce2da7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/pdf.html.twig"));

        // line 1
        echo "<table>
    <tr>
        <td>
            Nom :
        </td>
        <td>
           ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "getNom", [], "any", false, false, false, 7), "html", null, true);
        echo "
        </td>
    </tr>
    <tr>
        <td>
            Nom  Activity :
        </td>
        <td>
            ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 15, $this->source); })()), "getNomAct", [], "any", false, false, false, 15), "html", null, true);
        echo "
        </td>
    </tr>
    <tr>
        <td>
            date :
        </td>
        <td>
            ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 23, $this->source); })()), "getDateAct", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true);
        echo "
        </td>
    </tr>
    <tr>
        <td>
            temp :
        </td>
        <td>
            ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 31, $this->source); })()), "getTempAct", [], "any", false, false, false, 31), "H:m"), "html", null, true);
        echo "
        </td>
    </tr>


</table>
<div >
    <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["imgqr"]) || array_key_exists("imgqr", $context) ? $context["imgqr"] : (function () { throw new RuntimeError('Variable "imgqr" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\" alt=\"\"/>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "activity/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  84 => 31,  73 => 23,  62 => 15,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table>
    <tr>
        <td>
            Nom :
        </td>
        <td>
           {{ user.getNom }}
        </td>
    </tr>
    <tr>
        <td>
            Nom  Activity :
        </td>
        <td>
            {{ activity.getNomAct }}
        </td>
    </tr>
    <tr>
        <td>
            date :
        </td>
        <td>
            {{ activity.getDateAct|date(\"Y-m-d\") }}
        </td>
    </tr>
    <tr>
        <td>
            temp :
        </td>
        <td>
            {{ activity.getTempAct|date(\"H:m\") }}
        </td>
    </tr>


</table>
<div >
    <img src=\"{{ imgqr }}\" alt=\"\"/>
</div>

", "activity/pdf.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\activity\\pdf.html.twig");
    }
}
