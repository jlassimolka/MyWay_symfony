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

/* contrat/index.html.twig */
class __TwigTemplate_03c66552df2103ec1f64b84b4cb4fa5a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'tableau' => [$this, 'block_tableau'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "contrat/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ContratLocation index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_tableau($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableau"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableau"));

        // line 6
        echo "
<div class=\"col-xl-0\">

\t\t\t\t\t\t\t\t\t<!--begin::Charts Widget 1-->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!--begin::Header-->
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0 pt-5\">
                                        <div class=\"container\">

                                        <div class=\"card card-xl-stretch mb-5 mb-xl-8\" style=\"width: 780px;\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Header-->
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0 pt-5\">



<div class=\"container-fluid py-4\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"card my-4\">
          <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
            <div class=\"bg-gradient-info shadow-info border-radius-lg pt-4 pb-3\">
              <h6 class=\"text-white text-capitalize ps-3\">Liste des Contrat</h6>
            </div>
          </div>
          <div class=\"card-body px-0 pb-2\">
            <div class=\"table-responsive p-0\">
             <table class=\"table align-items-center mb-0\">
        <thead>
            <tr>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >id</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >Location</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >prix</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >Date_debut</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >Date_fin</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 44, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 45
            echo "            <tr>
                <td class=\"align-middler\">
                  <span class=\"text-secondary text-xs font-weight-bold\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "</span>
                </td>
                <td class=\"align-middler\">
                  <span class=\"text-secondary text-xs font-weight-bold\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contrat"], "location", [], "any", false, false, false, 50), "nom", [], "any", false, false, false, 50), "html", null, true);
            echo "</span>
                </td>
                <td class=\"align-middler\">
                  <span class=\"text-secondary text-xs font-weight-bold\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "prix", [], "any", false, false, false, 53), "html", null, true);
            echo "</span>
                </td>
                <td class=\"align-middler\">
                  <span class=\"text-secondary text-xs font-weight-bold\">";
            // line 56
            ((twig_get_attribute($this->env, $this->source, $context["contrat"], "dateDebut", [], "any", false, false, false, 56)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "dateDebut", [], "any", false, false, false, 56), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</span>
                </td>
                <td class=\"align-middler\">
                  <span class=\"text-secondary text-xs font-weight-bold\">";
            // line 59
            ((twig_get_attribute($this->env, $this->source, $context["contrat"], "dateFin", [], "any", false, false, false, 59)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "dateFin", [], "any", false, false, false, 59), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</span>
                </td>
                <td class=\"align-middler\">
                    <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_show", ["id" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" class=\"btn btn-success btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Afficher le contrat\">show</a>
                    <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Modifier le contrat\" >edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
    </table>
              <div class=\"mx-3\">
                  <a class=\"btn bg-gradient-info info mt-4 w-100\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_new");
        echo "\"type=\"button\">Ajouter contrat</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     </div>
          </div>
        </div>
      </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contrat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 74,  189 => 71,  180 => 67,  171 => 63,  167 => 62,  161 => 59,  155 => 56,  149 => 53,  143 => 50,  137 => 47,  133 => 45,  128 => 44,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}ContratLocation index{% endblock %}

{% block tableau %}

<div class=\"col-xl-0\">

\t\t\t\t\t\t\t\t\t<!--begin::Charts Widget 1-->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!--begin::Header-->
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0 pt-5\">
                                        <div class=\"container\">

                                        <div class=\"card card-xl-stretch mb-5 mb-xl-8\" style=\"width: 780px;\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Header-->
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0 pt-5\">



<div class=\"container-fluid py-4\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"card my-4\">
          <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
            <div class=\"bg-gradient-info shadow-info border-radius-lg pt-4 pb-3\">
              <h6 class=\"text-white text-capitalize ps-3\">Liste des Contrat</h6>
            </div>
          </div>
          <div class=\"card-body px-0 pb-2\">
            <div class=\"table-responsive p-0\">
             <table class=\"table align-items-center mb-0\">
        <thead>
            <tr>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >id</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >Location</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >prix</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >Date_debut</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >Date_fin</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >actions</th>
            </tr>
        </thead>
        <tbody>
        {% for contrat in contrats %}
            <tr>
                <td class=\"align-middler\">
                  <span class=\"text-secondary text-xs font-weight-bold\">{{ contrat.id }}</span>
                </td>
                <td class=\"align-middler\">
                  <span class=\"text-secondary text-xs font-weight-bold\">{{ contrat.location.nom }}</span>
                </td>
                <td class=\"align-middler\">
                  <span class=\"text-secondary text-xs font-weight-bold\">{{ contrat.prix }}</span>
                </td>
                <td class=\"align-middler\">
                  <span class=\"text-secondary text-xs font-weight-bold\">{{ contrat.dateDebut ? contrat.dateDebut|date('Y-m-d') : '' }}</span>
                </td>
                <td class=\"align-middler\">
                  <span class=\"text-secondary text-xs font-weight-bold\">{{ contrat.dateFin ? contrat.dateFin|date('Y-m-d') : '' }}</span>
                </td>
                <td class=\"align-middler\">
                    <a href=\"{{ path('app_contrat_show', {'id': contrat.id}) }}\" class=\"btn btn-success btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Afficher le contrat\">show</a>
                    <a href=\"{{ path('app_contrat_edit', {'id': contrat.id}) }}\" class=\"btn btn-warning btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Modifier le contrat\" >edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
              <div class=\"mx-3\">
                  <a class=\"btn bg-gradient-info info mt-4 w-100\" href=\"{{ path('app_contrat_new') }}\"type=\"button\">Ajouter contrat</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     </div>
          </div>
        </div>
      </div>
    </div>
{% endblock %}
", "contrat/index.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\contrat\\index.html.twig");
    }
}
