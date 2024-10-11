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

/* guide/index.html.twig */
class __TwigTemplate_3bbf57ece55cc09b078526c782d94d86 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "guide/index.html.twig", 1);
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

        echo "Liste des guides touristiques";
        
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
        echo "<div class=\"col-xl-0\">

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
          <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
            <h6 class=\"text-white text-capitalize ps-3\">Liste des guides touristiques</h6>
          </div>
        </div>
        <div class=\"card-body px-0 pb-2\">
          <div class=\"table-responsive p-0\">
            <div class=\"mb-3 mx-3\">
              <form class=\"form-inline\">
              </form>
            </div>
            <div class=\"text-right\">
    <form action=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_search");
        echo "\" method=\"GET\">
        <input type=\"text\" name=\"nom\">
        <input type=\"submit\" value=\"Rechercher\" class=\"btn btn-danger mr-2\" style=\"background-color:#8DD3BB;\">
    </form>
</div>
            <table class=\"table align-items-center mb-0\">
              <thead>
                <tr>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Id</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Nom</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Prénom</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Age</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Langues</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Expériences</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Note</th>

                  <th class=\"text-secondary opacity-7\"></th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["guides"]) || array_key_exists("guides", $context) ? $context["guides"] : (function () { throw new RuntimeError('Variable "guides" does not exist.', 54, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["guide"]) {
            // line 55
            echo "                <tr class=\"guide-row\">
                  <td class=\"align-middle text-center\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "id", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                  <td class=\"align-middle text-center\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "nom", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                  <td class=\"align-middle text-center\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "prenom", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                  <td class=\"align-middle text-center\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "age", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                  <td class=\"align-middle text-center\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "langues", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                  <td class=\"align-middle text-center\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "experiences", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                  <td class=\"align-middle text-center\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "note", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>

                  <td class=\"align-middle\">
                    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_show", ["id" => twig_get_attribute($this->env, $this->source, $context["guide"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Afficher le guide\">
                      Afficher
                    </a>

                    <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["guide"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Modifier le guide\">
                      Modifier
                    </a>

                 

                  </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            echo "                <tr>
                  <td colspan=\"7\">no records found</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "              </tbody>
            </table>
              <div class=\"mx-3\">


      <a class=\"btn bg-gradient-primary mt-4 w-100\" href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_new");
        echo "\"type=\"button\">Ajouter un nouveau guide touristique</a>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_pdf");
        echo "\" type=\"button\">  Générer PDF</a>
              
              
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
     </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "guide/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 88,  216 => 87,  209 => 82,  200 => 78,  186 => 69,  179 => 65,  173 => 62,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  153 => 57,  149 => 56,  146 => 55,  141 => 54,  118 => 34,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Liste des guides touristiques{% endblock %}

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
          <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
            <h6 class=\"text-white text-capitalize ps-3\">Liste des guides touristiques</h6>
          </div>
        </div>
        <div class=\"card-body px-0 pb-2\">
          <div class=\"table-responsive p-0\">
            <div class=\"mb-3 mx-3\">
              <form class=\"form-inline\">
              </form>
            </div>
            <div class=\"text-right\">
    <form action=\"{{ path('app_guide_search') }}\" method=\"GET\">
        <input type=\"text\" name=\"nom\">
        <input type=\"submit\" value=\"Rechercher\" class=\"btn btn-danger mr-2\" style=\"background-color:#8DD3BB;\">
    </form>
</div>
            <table class=\"table align-items-center mb-0\">
              <thead>
                <tr>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Id</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Nom</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Prénom</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Age</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Langues</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Expériences</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Note</th>

                  <th class=\"text-secondary opacity-7\"></th>
                </tr>
              </thead>
              <tbody>
                {% for guide in guides %}
                <tr class=\"guide-row\">
                  <td class=\"align-middle text-center\">{{ guide.id }}</td>
                  <td class=\"align-middle text-center\">{{ guide.nom }}</td>
                  <td class=\"align-middle text-center\">{{ guide.prenom }}</td>
                  <td class=\"align-middle text-center\">{{ guide.age }}</td>
                  <td class=\"align-middle text-center\">{{ guide.langues }}</td>
                  <td class=\"align-middle text-center\">{{ guide.experiences }}</td>
                  <td class=\"align-middle text-center\">{{ guide.note }}</td>

                  <td class=\"align-middle\">
                    <a href=\"{{ path('app_guide_show', {'id': guide.id}) }}\" class=\"btn btn-primary btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Afficher le guide\">
                      Afficher
                    </a>

                    <a href=\"{{ path('app_guide_edit', {'id': guide.id}) }}\" class=\"btn btn-warning btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Modifier le guide\">
                      Modifier
                    </a>

                 

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


      <a class=\"btn bg-gradient-primary mt-4 w-100\" href=\"{{ path('app_guide_new') }}\"type=\"button\">Ajouter un nouveau guide touristique</a>
            <a class=\"btn btn-success btn-sm\" href=\"{{ path('app_guide_pdf') }}\" type=\"button\">  Générer PDF</a>
              
              
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
     </div>
{% endblock %}

", "guide/index.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\guide\\index.html.twig");
    }
}
