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

/* reservation_location/index.html.twig */
class __TwigTemplate_580dc4d86677511ba5cb46bb4d34183f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_location/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_location/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "reservation_location/index.html.twig", 1);
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

        echo "Liste des Locations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"bg-gradient-info shadow-info border-radius-lg pt-4 pb-3\">
  <h6 class=\"text-capitalize ps-3\">Liste des Locations</h6>
</div>

<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6 text-center\">
            <form method=\"POST\">
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
                  <div class=\"flex row align-content-center\" >
                      ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "field_name", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control border", "placeholder" => "Search"]]);
        echo "
                      <button type=\"submit\" class=\"btn btn-primary mt-3\">Submit</button>
                  </div>
                ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
            </form>
        </div>
    </div>
</div>

<div class=\"container py-4\">
  <div class=\"row\">
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 29
            echo "    <div class=\"col-md-4 mb-4\">
      <div class=\"card h-100\">
        <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 31))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "nom", [], "any", false, false, false, 31), "html", null, true);
            echo "\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</h5>
          <p class=\"card-text\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "description", [], "any", false, false, false, 34), "html", null, true);
            echo "</p>
          <ul class=\"list-unstyled\">
            <li>Disponibilité: ";
            // line 36
            echo ((twig_get_attribute($this->env, $this->source, $context["location"], "disponibilite", [], "any", false, false, false, 36)) ? ("Disponible") : ("Non disponible"));
            echo "</li>
            <li>Type: ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "type", [], "any", false, false, false, 37), "html", null, true);
            echo "</li>
            <li>Dates:
              <ul>
                <li>Début: ";
            // line 40
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["location"], "contrat", [], "any", false, false, false, 40), "dateDebut", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["location"], "contrat", [], "any", false, false, false, 40), "dateDebut", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true))) : (print ("N/A")));
            echo "</li>
                <li>Fin: ";
            // line 41
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["location"], "contrat", [], "any", false, false, false, 41), "dateFin", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["location"], "contrat", [], "any", false, false, false, 41), "dateFin", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true))) : (print ("N/A")));
            echo "</li>
              </ul>
            </li>
            <li>Prix: ";
            // line 44
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["location"], "contrat", [], "any", false, false, false, 44), "prix", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["location"], "contrat", [], "any", false, false, false, 44), "prix", [], "any", false, false, false, 44) . " DT"), "html", null, true))) : (print ("N/A")));
            echo "</li>    
          </ul>
          <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_update", ["id" => twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" class=\"btn btn-success\" data-toggle=\"tooltip\" data-original-title=\"Afficher le contrat\">Réserver</a>
        </div>
      </div>
    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "    <div class=\"col-md-12\">
      <p class=\"text-center\">Aucune location trouvée.</p>
    </div>
   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "     <div class=\" pagination\" style=\"margin-top: 20px; text-align: center; margin-left: 40%;\">
 ";
        // line 57
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 57, $this->source); })()));
        echo "
</div>
  </div>
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation_location/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 57,  191 => 56,  181 => 51,  171 => 46,  166 => 44,  160 => 41,  156 => 40,  150 => 37,  146 => 36,  141 => 34,  137 => 33,  130 => 31,  126 => 29,  121 => 28,  110 => 20,  104 => 17,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Liste des Locations{% endblock %}

{% block body %}

<div class=\"bg-gradient-info shadow-info border-radius-lg pt-4 pb-3\">
  <h6 class=\"text-capitalize ps-3\">Liste des Locations</h6>
</div>

<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6 text-center\">
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

<div class=\"container py-4\">
  <div class=\"row\">
    {% for location in locations %}
    <div class=\"col-md-4 mb-4\">
      <div class=\"card h-100\">
        <img src=\"{{ asset('uploads/images/' ~ location.image) }}\" class=\"card-img-top\" alt=\"{{ location.nom }}\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">{{ location.nom }}</h5>
          <p class=\"card-text\">{{ location.description }}</p>
          <ul class=\"list-unstyled\">
            <li>Disponibilité: {{ location.disponibilite ? \"Disponible\" : \"Non disponible\" }}</li>
            <li>Type: {{ location.type }}</li>
            <li>Dates:
              <ul>
                <li>Début: {{ location.contrat.dateDebut ? location.contrat.dateDebut|date('Y-m-d') : \"N/A\" }}</li>
                <li>Fin: {{ location.contrat.dateFin ? location.contrat.dateFin|date('Y-m-d') : \"N/A\" }}</li>
              </ul>
            </li>
            <li>Prix: {{ location.contrat.prix ? location.contrat.prix ~ \" DT\" : \"N/A\" }}</li>    
          </ul>
          <a href=\"{{ path('app_reservation_update', {'id': location.id}) }}\" class=\"btn btn-success\" data-toggle=\"tooltip\" data-original-title=\"Afficher le contrat\">Réserver</a>
        </div>
      </div>
    </div>
    {% else %}
    <div class=\"col-md-12\">
      <p class=\"text-center\">Aucune location trouvée.</p>
    </div>
   
    {% endfor %}
     <div class=\" pagination\" style=\"margin-top: 20px; text-align: center; margin-left: 40%;\">
 {{ knp_pagination_render(locations) }}
</div>
  </div>
</div>


{% endblock %}
", "reservation_location/index.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\reservation_location\\index.html.twig");
    }
}
