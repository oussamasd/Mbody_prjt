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

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_aa77d30d5e4225d52b16303b2b80daa2e6ec1d91342a4d672f0c3bf86b6f3883 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        $__internal_compile_0 = (("The template \"" . $this->getTemplateName()) . "\" is deprecated since Symfony 4.4, will be removed in 5.0.");
        @trigger_error($__internal_compile_0." (\"@Twig/Exception/exception.css.twig\" at line 1).", E_USER_DEPRECATED);
        // line 2
        echo "/*
";
        // line 3
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", ["exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 3, $this->source); })())]);
        echo "
*/
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% deprecated 'The template \"' ~ _self ~'\" is deprecated since Symfony 4.4, will be removed in 5.0.' %}
/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\Users\\Mehdi AZZAZ\\Mbody_Prjt\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
