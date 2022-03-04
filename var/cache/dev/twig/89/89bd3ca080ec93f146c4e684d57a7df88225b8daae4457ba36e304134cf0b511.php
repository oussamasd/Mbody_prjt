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

/* activity/detailActivity.html.twig */
class __TwigTemplate_d1af7a9260f59d2612a20fd9d5d587d48ab29eebf04c79acb2f04d1121a06535 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tp' => [$this, 'block_tp'],
            'fimage' => [$this, 'block_fimage'],
            'Participe' => [$this, 'block_Participe'],
            'tit' => [$this, 'block_tit'],
            'cat' => [$this, 'block_cat'],
            'dt' => [$this, 'block_dt'],
            'qt' => [$this, 'block_qt'],
            'des' => [$this, 'block_des'],
            'star' => [$this, 'block_star'],
            'pict' => [$this, 'block_pict'],
            'commentaire' => [$this, 'block_commentaire'],
            'Exercice' => [$this, 'block_Exercice'],
            'c' => [$this, 'block_c'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.details.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/detailActivity.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/detailActivity.html.twig"));

        // line 11
        $context["i"] = twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 11, $this->source); })()), "images", [], "any", false, false, false, 11);
        // line 1
        $this->parent = $this->loadTemplate("base.details.html.twig", "activity/detailActivity.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_tp($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tp"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tp"));

        // line 3
        echo "    <div style=\"background-color: gray ; width: 70px ; height: 30px ; align-items: center ;align-content: center\">
        <a  href=\"/activitySchedule\"><h5>Home</h5></a>
    </div>
    <div style=\"background-color: yellow ; width: 130px ; height: 30px ; align-items: center ;align-content: center\">
        <a  href=\"/activity\"><h5>Show More</h5></a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_fimage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fimage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fimage"));

        // line 13
        echo "
    ";
        // line 14
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 14, $this->source); })())), 0))) {
            // line 15
            echo "
       <img src=\"http://127.0.0.1:8000/uploads/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 16, $this->source); })()), 0, [], "array", false, false, false, 16), "getImageUrl", [], "method", false, false, false, 16), "html", null, true);
            echo "\" style=\"width: 100% ; height: 400px\" class=\"img-fluid\" id=\"big_img\" alt=\"\">
";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "        <img src=\"http://127.0.0.1:8000/uploads/noimg.jpg\" alt=\"\">
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_Participe($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Participe"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Participe"));

        // line 23
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_tit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tit"));

        // line 29
        echo "    <table>
        <tr>
            <td>
                <h2>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 32, $this->source); })()), "getNomAct", [], "method", false, false, false, 32), "html", null, true);
        echo "</h2>
            </td>
            <td style=\"padding-left: 400px\">
";
        // line 37
        echo "                    ";
        if ((-1 === twig_compare((isset($context["userparticipated"]) || array_key_exists("userparticipated", $context) ? $context["userparticipated"] : (function () { throw new RuntimeError('Variable "userparticipated" does not exist.', 37, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 37, $this->source); })()), "getQuantite", [], "any", false, false, false, 37)))) {
            // line 38
            echo "
                        ";
            // line 39
            if ( !(isset($context["participe"]) || array_key_exists("participe", $context) ? $context["participe"] : (function () { throw new RuntimeError('Variable "participe" does not exist.', 39, $this->source); })())) {
                // line 40
                echo "                            ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["btnParticipe"]) || array_key_exists("btnParticipe", $context) ? $context["btnParticipe"] : (function () { throw new RuntimeError('Variable "btnParticipe" does not exist.', 40, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
                echo "
                            ";
                // line 41
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["btnParticipe"]) || array_key_exists("btnParticipe", $context) ? $context["btnParticipe"] : (function () { throw new RuntimeError('Variable "btnParticipe" does not exist.', 41, $this->source); })()), "Participe", [], "any", false, false, false, 41), 'row', ["attr" => ["class" => " button buttonparticipe"]]);
                echo "
                            ";
                // line 42
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["btnParticipe"]) || array_key_exists("btnParticipe", $context) ? $context["btnParticipe"] : (function () { throw new RuntimeError('Variable "btnParticipe" does not exist.', 42, $this->source); })()), 'form_end');
                echo "
                        ";
            } else {
                // line 44
                echo "                            <button disabled class=\"button \">Participed</button>
                        ";
            }
            // line 46
            echo "                    ";
        } else {
            // line 47
            echo "                        <button disabled class=\"button1 \">No Place</button>
                    ";
        }
        // line 52
        echo "

";
        // line 55
        echo "            </td>
        </tr>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_cat($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cat"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cat"));

        // line 61
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 61, $this->source); })()), "getCategory", [], "any", false, false, false, 61), "getNomCat", [], "method", false, false, false, 61), "html", null, true);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_dt($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dt"));

        // line 65
        echo "    ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 65, $this->source); })()), "getDateAct", [], "any", false, false, false, 65), "Y-m-d"), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 65, $this->source); })()), "getTempAct", [], "any", false, false, false, 65), "H:m"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_qt($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "qt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "qt"));

        // line 68
        echo "   participer par : ";
        echo twig_escape_filter($this->env, (isset($context["userparticipated"]) || array_key_exists("userparticipated", $context) ? $context["userparticipated"] : (function () { throw new RuntimeError('Variable "userparticipated" does not exist.', 68, $this->source); })()), "html", null, true);
        echo " /";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 68, $this->source); })()), "getQuantite", [], "any", false, false, false, 68), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_des($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "des"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "des"));

        // line 71
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 71, $this->source); })()), "getDescriptionAct", [], "method", false, false, false, 71), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_star($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "star"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "star"));

        // line 74
        echo " <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activityDetails", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 74, $this->source); })()), "getId", [], "any", false, false, false, 74)]), "html", null, true);
        echo "\" method=\"post\">
    <div style=\"margin-left: 80%\">
        ";
        // line 76
        if ( !(isset($context["heRated"]) || array_key_exists("heRated", $context) ? $context["heRated"] : (function () { throw new RuntimeError('Variable "heRated" does not exist.', 76, $this->source); })())) {
            // line 77
            echo "        <input type=\"hidden\" value=\"\" id=\"ratenote\" name=\"rate\" />
        <button style=\"background: none ; border: none\">


            <i class=\"star\" data-note=\"1\">&#9733;</i>
            <i class=\"star\" data-note=\"2\">&#9733;</i>
            <i class=\"star\" data-note=\"3\">&#9733;</i>
            <i class=\"star\" data-note=\"4\">&#9733;</i>
            <i class=\"star\" data-note=\"5\">&#9733;</i>
        </button>
        ";
        } else {
            // line 88
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["didRated"]) || array_key_exists("didRated", $context) ? $context["didRated"] : (function () { throw new RuntimeError('Variable "didRated" does not exist.', 88, $this->source); })()), "getRate", [], "any", false, false, false, 88)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 89
                echo "            <i class=\"hover2\" >&#9733;</i>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (5 - twig_get_attribute($this->env, $this->source, (isset($context["didRated"]) || array_key_exists("didRated", $context) ? $context["didRated"] : (function () { throw new RuntimeError('Variable "didRated" does not exist.', 91, $this->source); })()), "getRate", [], "any", false, false, false, 91))));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 92
                echo "                <i class=\"star2\" >&#9733;</i>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "        ";
        }
        // line 95
        echo "    </div>
 </form>
<input type=\"hidden\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 97, $this->source); })()), "getId", [], "method", false, false, false, 97), "html", null, true);
        echo "\" id=\"idact\"/>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_pict($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pict"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pict"));

        // line 102
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 103
            echo "    <li>

            <img class=\"img-fluid\" style=\"height: 50% ; width: 100%\" src=\"http://127.0.0.1:8000/uploads/";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "getImageUrl", [], "method", false, false, false, 105), "html", null, true);
            echo "\" id=\"small_img\" alt=\"\">

    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_commentaire($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commentaire"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commentaire"));

        // line 112
        echo "<div class=\"boit-msg \" id=\"boitmesg\">

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_Exercice($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Exercice"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Exercice"));

        // line 117
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 117, $this->source); })()), "exercices", [], "any", false, false, false, 117));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 118
            echo "    <div class=\"media post_item\">
        <img  style=\" width:40%\" src=\"http://127.0.0.1:8000/uploads/noimg.jpg\"  alt=\"post\">
        <div class=\"media-body\">
            <a href=\"blog_details.html\">
                <h3>";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getNomExercice", [], "method", false, false, false, 122), "html", null, true);
            echo "</h3>
            </a>
            <p>";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "getDureExercice", [], "method", false, false, false, 124), "html", null, true);
            echo "</p>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "    <script>


        \$(document).ready(function(){

            \$(\".img-fluid\").click(function(){
                \$(\"#big_img\").attr('src',\$(this).attr('src'));
            });
        });

    </script>
    <script>
        const stars =document.querySelectorAll('.star');
        let check = false;
        stars.forEach(star=>{
            star.addEventListener('mouseover',selectStars);
            star.addEventListener('mouseleave',unselectStars);

            star.addEventListener('click',activeSelect);



        })
        function selectStars(e){
            const data =e.target;
            const etoiles = priviousSiblings(data);
            if(!check){
                etoiles.forEach(etoile=>{
                    etoile.classList.add('hover');
                })
            }


        }
        function unselectStars(e){
            const data =e.target;
            const etoiles = priviousSiblings(data);
            if(!check){
                etoiles.forEach(etoile=>{
                    etoile.classList.remove('hover');
                })
            }

        }
        function priviousSiblings(data){
            let values=[data];
            while (data= data.previousSibling){
                if(data.nodeName ==='I'){
                    values.push(data);
                }
            }
            return values;
        }
        function  activeSelect(e){
            check=true;
           /* document.querySelector('.ratenote').innerHTML='Note: '+ e.target.dataset.note;*/
            document.getElementById(\"ratenote\").value = e.target.dataset.note;

        }
    </script>
<script>

    \$(document).ready(function () {
       /* \$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': \$('meta[name=\"csrf-token\"]').attr('content')
            }
        });*/
        setInterval(function () {
            let idactivity = \$(\"#idact\").text();
            \$.ajax({

                url:\"http://127.0.0.1:8000/commentaiire/\"+idactivity,
                type: \"get\",
                dataType: \"json\",
                cache: false,
                success: function (data , status) {
                    let lenght = data.message.length
                    var MSG=\"\";
                    for (let i =0; i < lenght; i++){
                        MSG += \"<div class='messages'><Strong>\"+ data.message[i].iduser + \":</Strong>\"+ data.message[i].textcommentaire +\"</div></br>\";
                    }
                    \$(\"#boitmesg\").html(MSG);
                },
                error: function (data) {
                    //console.log(\"error: \");
                },
            });
        },5000);
    });


</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 224
    public function block_c($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "c"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "c"));

        // line 225
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "activity/detailActivity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 225,  609 => 224,  505 => 128,  495 => 124,  490 => 122,  484 => 118,  479 => 117,  469 => 116,  456 => 112,  446 => 111,  435 => 109,  425 => 105,  421 => 103,  416 => 102,  406 => 101,  392 => 97,  388 => 95,  385 => 94,  378 => 92,  373 => 91,  366 => 89,  361 => 88,  348 => 77,  346 => 76,  340 => 74,  330 => 73,  317 => 71,  307 => 70,  292 => 68,  282 => 67,  267 => 65,  257 => 64,  243 => 61,  233 => 60,  219 => 55,  215 => 52,  211 => 47,  208 => 46,  204 => 44,  199 => 42,  195 => 41,  190 => 40,  188 => 39,  185 => 38,  182 => 37,  176 => 32,  171 => 29,  161 => 28,  147 => 23,  137 => 22,  125 => 19,  122 => 18,  118 => 16,  115 => 15,  113 => 14,  110 => 13,  100 => 12,  83 => 3,  73 => 2,  62 => 1,  60 => 11,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.details.html.twig' %}
{% block tp %}
    <div style=\"background-color: gray ; width: 70px ; height: 30px ; align-items: center ;align-content: center\">
        <a  href=\"/activitySchedule\"><h5>Home</h5></a>
    </div>
    <div style=\"background-color: yellow ; width: 130px ; height: 30px ; align-items: center ;align-content: center\">
        <a  href=\"/activity\"><h5>Show More</h5></a>
    </div>

{% endblock %}
{% set i = activity.images  %}
{% block fimage %}

    {% if i|length >0 %}

       <img src=\"http://127.0.0.1:8000/uploads/{{ i[0].getImageUrl() }}\" style=\"width: 100% ; height: 400px\" class=\"img-fluid\" id=\"big_img\" alt=\"\">
{#        <img src=\"http://127.0.0.1:8000/uploads/30e8f34236460ef32d5efbc1ed5df021.jpeg\" class=\"img-fluid\" id=\"big_img\" alt=\"\">#}
    {% else%}
        <img src=\"http://127.0.0.1:8000/uploads/noimg.jpg\" alt=\"\">
    {% endif %}
{% endblock %}
{% block Participe %}




{% endblock %}
{% block tit %}
    <table>
        <tr>
            <td>
                <h2>{{ activity.getNomAct() }}</h2>
            </td>
            <td style=\"padding-left: 400px\">
{#                {% set Dateact = date(activity.getDateAct) %}#}
{#                {% if  Dateact < ctdate  %}#}
                    {% if userparticipated< activity.getQuantite%}

                        {% if not participe  %}
                            {{ form_start(btnParticipe,{'attr': {'novalidate': 'novalidate'}}) }}
                            {{ form_row(btnParticipe.Participe ,  { 'attr': {'class': ' button buttonparticipe'}})}}
                            {{ form_end(btnParticipe) }}
                        {% else %}
                            <button disabled class=\"button \">Participed</button>
                        {% endif %}
                    {% else%}
                        <button disabled class=\"button1 \">No Place</button>
                    {% endif %}
{#                {% else %}#}
{#                    <button disabled class=\"button \">passed</button>#}
{#                    <h1>{{  not(1==2) }}</h1>#}


{#                {% endif %}#}
            </td>
        </tr>
    </table>

{% endblock %}
{% block cat %}
    {{ activity.getCategory.getNomCat() }}

{% endblock %}
{% block dt %}
    {{ activity.getDateAct|date('Y-m-d') }} , {{ activity.getTempAct|date('H:m') }}
{% endblock %}
{% block qt %}
   participer par : {{ userparticipated}} /{{ activity.getQuantite }}
{% endblock %}
{% block des %}
    {{ activity.getDescriptionAct() }}
{% endblock %}
{% block star %}
 <form action=\"{{ path('activityDetails',{'id':activity.getId}) }}\" method=\"post\">
    <div style=\"margin-left: 80%\">
        {% if not heRated %}
        <input type=\"hidden\" value=\"\" id=\"ratenote\" name=\"rate\" />
        <button style=\"background: none ; border: none\">


            <i class=\"star\" data-note=\"1\">&#9733;</i>
            <i class=\"star\" data-note=\"2\">&#9733;</i>
            <i class=\"star\" data-note=\"3\">&#9733;</i>
            <i class=\"star\" data-note=\"4\">&#9733;</i>
            <i class=\"star\" data-note=\"5\">&#9733;</i>
        </button>
        {% else %}
            {% for i in 1..didRated.getRate %}
            <i class=\"hover2\" >&#9733;</i>
        {% endfor %}
            {% for j in 1..5-didRated.getRate %}
                <i class=\"star2\" >&#9733;</i>
            {% endfor %}
        {% endif %}
    </div>
 </form>
<input type=\"hidden\" value=\"{{ activity.getId() }}\" id=\"idact\"/>


{% endblock %}
{% block pict %}
   {% for image in i %}
    <li>

            <img class=\"img-fluid\" style=\"height: 50% ; width: 100%\" src=\"http://127.0.0.1:8000/uploads/{{ image.getImageUrl() }}\" id=\"small_img\" alt=\"\">

    </li>
    {% endfor %}

{% endblock %}
{% block commentaire %}
<div class=\"boit-msg \" id=\"boitmesg\">

</div>
{% endblock %}
{% block Exercice %}
    {% for e in activity.exercices %}
    <div class=\"media post_item\">
        <img  style=\" width:40%\" src=\"http://127.0.0.1:8000/uploads/noimg.jpg\"  alt=\"post\">
        <div class=\"media-body\">
            <a href=\"blog_details.html\">
                <h3>{{ e.getNomExercice()}}</h3>
            </a>
            <p>{{ e.getDureExercice()}}</p>
        </div>
    </div>
    {% endfor %}
    <script>


        \$(document).ready(function(){

            \$(\".img-fluid\").click(function(){
                \$(\"#big_img\").attr('src',\$(this).attr('src'));
            });
        });

    </script>
    <script>
        const stars =document.querySelectorAll('.star');
        let check = false;
        stars.forEach(star=>{
            star.addEventListener('mouseover',selectStars);
            star.addEventListener('mouseleave',unselectStars);

            star.addEventListener('click',activeSelect);



        })
        function selectStars(e){
            const data =e.target;
            const etoiles = priviousSiblings(data);
            if(!check){
                etoiles.forEach(etoile=>{
                    etoile.classList.add('hover');
                })
            }


        }
        function unselectStars(e){
            const data =e.target;
            const etoiles = priviousSiblings(data);
            if(!check){
                etoiles.forEach(etoile=>{
                    etoile.classList.remove('hover');
                })
            }

        }
        function priviousSiblings(data){
            let values=[data];
            while (data= data.previousSibling){
                if(data.nodeName ==='I'){
                    values.push(data);
                }
            }
            return values;
        }
        function  activeSelect(e){
            check=true;
           /* document.querySelector('.ratenote').innerHTML='Note: '+ e.target.dataset.note;*/
            document.getElementById(\"ratenote\").value = e.target.dataset.note;

        }
    </script>
<script>

    \$(document).ready(function () {
       /* \$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': \$('meta[name=\"csrf-token\"]').attr('content')
            }
        });*/
        setInterval(function () {
            let idactivity = \$(\"#idact\").text();
            \$.ajax({

                url:\"http://127.0.0.1:8000/commentaiire/\"+idactivity,
                type: \"get\",
                dataType: \"json\",
                cache: false,
                success: function (data , status) {
                    let lenght = data.message.length
                    var MSG=\"\";
                    for (let i =0; i < lenght; i++){
                        MSG += \"<div class='messages'><Strong>\"+ data.message[i].iduser + \":</Strong>\"+ data.message[i].textcommentaire +\"</div></br>\";
                    }
                    \$(\"#boitmesg\").html(MSG);
                },
                error: function (data) {
                    //console.log(\"error: \");
                },
            });
        },5000);
    });


</script>

{% endblock %}

{% block c %}


{% endblock %}", "activity/detailActivity.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\activity\\detailActivity.html.twig");
    }
}
