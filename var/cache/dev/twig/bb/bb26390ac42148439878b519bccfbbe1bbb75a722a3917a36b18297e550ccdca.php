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

/* activity/test.html.twig */
class __TwigTemplate_c815717ec627afcfcea749deddff1cdd52bab504f64f13d4f1cbf58dc40a0a14 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/test.html.twig"));

        // line 1
        echo "
<table>
";
        // line 7
        echo "    <tr>
        <td>
            aaa
        </td>
        <td>
            aaa
        </td>
    </tr>
    <tr>
        <td>
            bb
        </td>
        <td>
            bb
        </td>
    </tr>
</table>
<table>
    <tr>

        <td>ccc</td>

    </tr>
    <tr>
        <td>aaa</td>
    </tr>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "activity/test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<table>
{#{% for act in cu %}#}
{#    <h1>{{ act.getDateAct|date('Y-m-d') }}</h1>#}
{#    <h1>{{ act.getTempAct|date('H:m') }}</h1>#}
{#{% endfor %}#}
    <tr>
        <td>
            aaa
        </td>
        <td>
            aaa
        </td>
    </tr>
    <tr>
        <td>
            bb
        </td>
        <td>
            bb
        </td>
    </tr>
</table>
<table>
    <tr>

        <td>ccc</td>

    </tr>
    <tr>
        <td>aaa</td>
    </tr>
</table>
{#<h1>{{ cu}}</h1>#}", "activity/test.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\activity\\test.html.twig");
    }
}
