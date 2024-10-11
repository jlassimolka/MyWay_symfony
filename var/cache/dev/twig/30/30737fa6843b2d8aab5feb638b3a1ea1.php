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

/* chauffeur/list.html.twig */
class __TwigTemplate_fe03373e7d8b5bb0b4b188b995922b4d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tableau' => [$this, 'block_tableau'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chauffeur/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chauffeur/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chauffeur/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_tableau($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableau"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableau"));

        // line 4
        echo "    <div class=\"container\">
        <h1>Liste des chauffeurs</h1>
        <form action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chauffeur_search");
        echo "\" method=\"GET\">
            <div class=\"input-group mb-3\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" name=\"q\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\">
                <button class=\"btn btn-primary\" type=\"submit\">Rechercher</button>
            </div>
        </form>
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Horaires</th>
                    <th>Expériences</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chauffeurs"]) || array_key_exists("chauffeurs", $context) ? $context["chauffeurs"] : (function () { throw new RuntimeError('Variable "chauffeurs" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chauffeur"]) {
            // line 25
            echo "                    ";
            if (((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 25, $this->source); })()) && ((((((twig_get_attribute($this->env, $this->source, $context["chauffeur"], "id", [], "any", false, false, false, 25) == (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 25, $this->source); })())) || (twig_get_attribute($this->env, $this->source, $context["chauffeur"], "nom", [], "any", false, false, false, 25) == (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 25, $this->source); })()))) || (twig_get_attribute($this->env, $this->source, $context["chauffeur"], "prenom", [], "any", false, false, false, 25) == (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 25, $this->source); })()))) || (twig_get_attribute($this->env, $this->source, $context["chauffeur"], "horaires", [], "any", false, false, false, 25) == (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 25, $this->source); })()))) || (twig_get_attribute($this->env, $this->source, $context["chauffeur"], "experiences", [], "any", false, false, false, 25) == (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 25, $this->source); })()))) || (twig_get_attribute($this->env, $this->source, $context["chauffeur"], "note", [], "any", false, false, false, 25) == (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 25, $this->source); })()))))) {
                // line 26
                echo "                        <tr class=\"bg-warning\">
                    ";
            } else {
                // line 28
                echo "                        <tr>
                    ";
            }
            // line 30
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "nom", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "prenom", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "horaires", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "experiences", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "note", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chauffeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "chauffeur/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 38,  132 => 35,  128 => 34,  124 => 33,  120 => 32,  116 => 31,  111 => 30,  107 => 28,  103 => 26,  100 => 25,  96 => 24,  77 => 8,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block tableau %}
    <div class=\"container\">
        <h1>Liste des chauffeurs</h1>
        <form action=\"{{ path('chauffeur_search') }}\" method=\"GET\">
            <div class=\"input-group mb-3\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" name=\"q\" value=\"{{ search_term }}\">
                <button class=\"btn btn-primary\" type=\"submit\">Rechercher</button>
            </div>
        </form>
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Horaires</th>
                    <th>Expériences</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                {% for chauffeur in chauffeurs %}
                    {% if search_term and (chauffeur.id == search_term or chauffeur.nom == search_term or chauffeur.prenom == search_term or chauffeur.horaires == search_term or chauffeur.experiences == search_term or chauffeur.note == search_term) %}
                        <tr class=\"bg-warning\">
                    {% else %}
                        <tr>
                    {% endif %}
                        <td>{{ chauffeur.id }}</td>
                        <td>{{ chauffeur.nom }}</td>
                        <td>{{ chauffeur.prenom }}</td>
                        <td>{{ chauffeur.horaires }}</td>
                        <td>{{ chauffeur.experiences }}</td>
                        <td>{{ chauffeur.note }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "chauffeur/list.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\chauffeur\\list.html.twig");
    }
}
