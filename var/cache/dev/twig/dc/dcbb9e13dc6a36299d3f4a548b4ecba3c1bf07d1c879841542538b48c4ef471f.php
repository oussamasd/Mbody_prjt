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

/* abonnement/index.html.twig */
class __TwigTemplate_2bf83369995874af772d9f152e585b280065e1e1934da80696f598933c8c5beb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'b1' => [$this, 'block_b1'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.front.html.twig", "abonnement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Abonnement index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_b1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "b1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "b1"));

        // line 6
        echo "
    <section class=\"section\" id=\"trainers\" >

        <div class=\"container\">

            <div class=\"row\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 13
            echo "                    <div class=\"col-lg-4\">
                        <div class=\"trainer-item\" >
                            <div class=\"image-thumb\">

                                <img src=\"../uploads/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "photo", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"down-content\">

                             <th> <span> Nom:</span></th>
                                <h4> ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "</h4>
                                <th> <span> Prix-dt:</span></th>
                                <h4>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prix", [], "any", false, false, false, 24), "html", null, true);
            echo "</h4>
                                    <th> <span>Espaces:</span></th>
                                    <h4>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 26), "html", null, true);
            echo "</h4>
                                    <th> <span> Catégories:</span></th>
                                <h4>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "categories", [], "any", false, false, false, 28), "html", null, true);
            echo "</h4>


                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "
                    <h1 >vide</h1>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
            </div>
        </div>
    </section>
    <section class=\"section\" id=\"trainers\" >
    <div class=\"container\">
        <div class=\"row\">
                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 47
            echo "                            <div class=\"col-lg-4\">
                                <div class=\"trainer-item\" >
                                    <div class=\"image-thumb\">
                                    </div>
                                    <div class=\"down-content\">

                                        <th> <span> delai:</span></th>
                                        <h4> ";
            // line 54
            ((twig_get_attribute($this->env, $this->source, $context["offre"], "delai", [], "any", false, false, false, 54)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "delai", [], "any", false, false, false, 54), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</h4>
                                        <th> <span> nom:</span></th>
                                        <h4>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "nom", [], "any", false, false, false, 56), "html", null, true);
            echo "</h4>
                                        <th> <span>description:</span></th>
                                        <h4>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "description", [], "any", false, false, false, 58), "html", null, true);
            echo "</h4>
                                        <th> <span> nom-abonnement:</span></th>
                                        <h4>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offre"], "getNomAbonnement", [], "any", false, false, false, 60), "getNom", [], "method", false, false, false, 60), "html", null, true);
            echo "</h4>


                                    </div>
                                </div>
                            </div>

                              ";
            // line 71
            echo "

                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "                            <h1>vide</h1>
                            <tr>
                                <td colspan=\"5\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "

        </div>
    </div>
</section>

    ";
        // line 86
        echo "    <form method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_new");
        echo "\" >
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "abonnement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 86,  216 => 79,  206 => 74,  199 => 71,  189 => 60,  184 => 58,  179 => 56,  174 => 54,  165 => 47,  160 => 46,  151 => 39,  142 => 35,  130 => 28,  125 => 26,  120 => 24,  115 => 22,  107 => 17,  101 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.front.html.twig' %}

{% block title %}Abonnement index{% endblock %}

{% block b1 %}

    <section class=\"section\" id=\"trainers\" >

        <div class=\"container\">

            <div class=\"row\">
                {% for p in abonnements %}
                    <div class=\"col-lg-4\">
                        <div class=\"trainer-item\" >
                            <div class=\"image-thumb\">

                                <img src=\"../uploads/{{ p.photo }}\">
                            </div>
                            <div class=\"down-content\">

                             <th> <span> Nom:</span></th>
                                <h4> {{ p.nom }}</h4>
                                <th> <span> Prix-dt:</span></th>
                                <h4>{{ p.prix }}</h4>
                                    <th> <span>Espaces:</span></th>
                                    <h4>{{ p.description }}</h4>
                                    <th> <span> Catégories:</span></th>
                                <h4>{{ p.categories }}</h4>


                            </div>
                        </div>
                    </div>
                {% else %}

                    <h1 >vide</h1>

                {% endfor %}

            </div>
        </div>
    </section>
    <section class=\"section\" id=\"trainers\" >
    <div class=\"container\">
        <div class=\"row\">
                        {% for offre in offres %}
                            <div class=\"col-lg-4\">
                                <div class=\"trainer-item\" >
                                    <div class=\"image-thumb\">
                                    </div>
                                    <div class=\"down-content\">

                                        <th> <span> delai:</span></th>
                                        <h4> {{ offre.delai ? offre.delai|date('Y-m-d H:i:s') : '' }}</h4>
                                        <th> <span> nom:</span></th>
                                        <h4>{{ offre.nom }}</h4>
                                        <th> <span>description:</span></th>
                                        <h4>{{ offre.description }}</h4>
                                        <th> <span> nom-abonnement:</span></th>
                                        <h4>{{ offre.getNomAbonnement.getNom() }}</h4>


                                    </div>
                                </div>
                            </div>

                              {#  <td>{{ offre.delai ? offre.delai|date('Y-m-d H:i:s') : '' }}</td>
                                <td>{{ offre.nom }}</td>
                                <td>{{ offre.Description }}</td>
                                <td>{{ offre.getNomAbonnement.getNom()}}</td>#}


                        {% else %}
                            <h1>vide</h1>
                            <tr>
                                <td colspan=\"5\">no records found</td>
                            </tr>
                        {% endfor %}


        </div>
    </div>
</section>

    {#   <a href=\"{{ path('abonnement_new') }}\">Créer nouvelle</a>#}
    <form method=\"post\" action=\"{{ path('abonnement_new') }}\" >
    </form>

{% endblock %}
", "abonnement/index.html.twig", "C:\\xampp\\htdocs\\Mbody_Prjt\\templates\\abonnement\\index.html.twig");
    }
}
