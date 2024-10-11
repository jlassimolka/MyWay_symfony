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

/* location/index.html.twig */
class __TwigTemplate_6e680959ed37ff3cef2c55b9abde737c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "location/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Locations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_tableau($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableau"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableau"));

        // line 8
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


            <form method=\"POST\">
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
                  <div class=\"flex row align-content-center\" >
                      ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "field_name", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control border", "placeholder" => "Search"]]);
        echo "
                      <button type=\"submit\" class=\"btn btn-primary mt-3\">Submit</button>
                  </div>
                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
            </form>
        </div>
    </div>
</div>


<div class=\"container-fluid py-4\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"card my-4\">
          <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
            <div class=\"bg-gradient-info shadow-info border-radius-lg pt-4 pb-3\">
              <h6 class=\"text-white text-capitalize ps-3\">Liste des Locations</h6>
            </div>
          </div>
          <div class=\"card-body px-0 pb-2\">
            <div class=\"table-responsive p-0\">
              <table class=\"table align-items-center mb-0\">
                <thead>
                  <tr>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">ID</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">IMAGE</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">NOM</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">DISPONIBILITE</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">TYPE</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">DESCRIPTION</th>
                    <th class=\"text-secondary opacity-7\"></th>
                  </tr>
                </thead>
                <tbody>
                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 60, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 61
            echo "                  <tr>
                    <td class=\"align-middler\">
                      <span class=\"text-secondary text-xs font-weight-bold\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "</span>
                    </td>
                    <td class=\"align-middle\">
                      <span class=\"text-secondary text-xs font-weight-bold\">
                        <img src=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 67))), "html", null, true);
            echo "\" style=\"width: 36px; height: 36px; object-fit: cover; border-radius: 50%;\">
                      </span>
                    </td>
                    <td class=\"align-middler\">
                        <span class=\"text-secondary text-xs font-weight-bold\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "nom", [], "any", false, false, false, 71), "html", null, true);
            echo "</span>
                      </td>
                      <td class=\"align-middler\">
                        <span class=\"text-secondary text-xs font-weight-bold\">";
            // line 74
            echo ((twig_get_attribute($this->env, $this->source, $context["location"], "disponibilite", [], "any", false, false, false, 74)) ? ("<b>DISPONIBLE</b>") : ("<b>NON DISPONIBLE</b>"));
            echo "</span>
                      </td>
                      <td class=\"align-middler\">
                        <span class=\"text-secondary text-xs font-weight-bold\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "type", [], "any", false, false, false, 77), "html", null, true);
            echo "</span>
                      </td>
                      <td class=\"align-middler\">
                        <span class=\"text-secondary text-xs font-weight-bold\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "description", [], "any", false, false, false, 80), "html", null, true);
            echo "</span>
                      </td>
                     
                    <td class=\"align-middle\">
                        ";
            // line 84
            if ( !twig_get_attribute($this->env, $this->source, $context["location"], "contrat", [], "any", false, false, false, 84)) {
                // line 85
                echo "                          <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_new");
                echo "\" class=\"btn btn-danger btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Afficher le contrat\">Ajouter Location</a>
                        ";
            }
            // line 87
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_show", ["id" => twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\" class=\"btn btn-success btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Afficher la location\">Afficher</a>
                        <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Modifier la location\">Modifier</a>
                        <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_pdf", ["id" => twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\" class=\"btn btn-dark btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Modifier la location\">PDF</a>
                    </td>
                  </tr>
                  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 93
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                </tbody>
              </table>
              <div class=\"mx-3\">
                  <a class=\"btn bg-gradient-info info mt-4 w-100\" href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_new");
        echo "\"type=\"button\">Ajouter une nouvelle location</a>
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
        return "location/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 100,  234 => 97,  225 => 93,  216 => 89,  212 => 88,  207 => 87,  201 => 85,  199 => 84,  192 => 80,  186 => 77,  180 => 74,  174 => 71,  167 => 67,  160 => 63,  156 => 61,  151 => 60,  117 => 29,  111 => 26,  106 => 24,  88 => 8,  78 => 7,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}



{% block title %}Liste des Locations{% endblock %}

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


            <form method=\"POST\">
                {{ form_start(form) }}
                  <div class=\"flex row align-content-center\" >
                      {{ form_widget(form.field_name, {'attr': {'class': 'form-control border', 'placeholder': 'Search'}}) }}
                      <button type=\"submit\" class=\"btn btn-primary mt-3\">Submit</button>
                  </div>
                {{ form_end(form) }}
            </form>
        </div>
    </div>
</div>


<div class=\"container-fluid py-4\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"card my-4\">
          <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
            <div class=\"bg-gradient-info shadow-info border-radius-lg pt-4 pb-3\">
              <h6 class=\"text-white text-capitalize ps-3\">Liste des Locations</h6>
            </div>
          </div>
          <div class=\"card-body px-0 pb-2\">
            <div class=\"table-responsive p-0\">
              <table class=\"table align-items-center mb-0\">
                <thead>
                  <tr>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">ID</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">IMAGE</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">NOM</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">DISPONIBILITE</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">TYPE</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">DESCRIPTION</th>
                    <th class=\"text-secondary opacity-7\"></th>
                  </tr>
                </thead>
                <tbody>
                    {% for location in locations %}
                  <tr>
                    <td class=\"align-middler\">
                      <span class=\"text-secondary text-xs font-weight-bold\">{{ location.id }}</span>
                    </td>
                    <td class=\"align-middle\">
                      <span class=\"text-secondary text-xs font-weight-bold\">
                        <img src=\"{{ asset('uploads/images/' ~ location.image) }}\" style=\"width: 36px; height: 36px; object-fit: cover; border-radius: 50%;\">
                      </span>
                    </td>
                    <td class=\"align-middler\">
                        <span class=\"text-secondary text-xs font-weight-bold\">{{ location.nom }}</span>
                      </td>
                      <td class=\"align-middler\">
                        <span class=\"text-secondary text-xs font-weight-bold\">{{ location.disponibilite ? \"<b>DISPONIBLE</b>\" : \"<b>NON DISPONIBLE</b>\" }}</span>
                      </td>
                      <td class=\"align-middler\">
                        <span class=\"text-secondary text-xs font-weight-bold\">{{ location.type }}</span>
                      </td>
                      <td class=\"align-middler\">
                        <span class=\"text-secondary text-xs font-weight-bold\">{{ location.description }}</span>
                      </td>
                     
                    <td class=\"align-middle\">
                        {% if not location.contrat %}
                          <a href=\"{{ path('app_contrat_new') }}\" class=\"btn btn-danger btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Afficher le contrat\">Ajouter Location</a>
                        {% endif %}
                        <a href=\"{{ path('app_location_show', {'id': location.id}) }}\" class=\"btn btn-success btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Afficher la location\">Afficher</a>
                        <a href=\"{{ path('app_location_edit', {'id': location.id}) }}\" class=\"btn btn-warning btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Modifier la location\">Modifier</a>
                        <a href=\"{{ path('app_location_pdf', {'id': location.id}) }}\" class=\"btn btn-dark btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Modifier la location\">PDF</a>
                    </td>
                  </tr>
                  {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
                </tbody>
              </table>
              <div class=\"mx-3\">
                  <a class=\"btn bg-gradient-info info mt-4 w-100\" href=\"{{ path('app_location_new') }}\"type=\"button\">Ajouter une nouvelle location</a>
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

", "location/index.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\location\\index.html.twig");
    }
}
