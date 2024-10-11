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

/* chauffeur/pdf.html.twig */
class __TwigTemplate_967b77ac8f288eec6dda686fe75d7180 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chauffeur/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chauffeur/pdf.html.twig"));

        // line 1
        echo "<table class=\"table\">
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
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chauffeurs"]) || array_key_exists("chauffeurs", $context) ? $context["chauffeurs"] : (function () { throw new RuntimeError('Variable "chauffeurs" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["chauffeur"]) {
            // line 15
            echo "    <tr>
      <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
      <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "nom", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
      <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "prenom", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
      <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "horaires", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "experiences", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "note", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>

    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "    <tr>
      <td colspan=\"5\">Aucun résultat trouvé.</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chauffeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  </tbody>
</table>

<style>
  .table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
    background-color: transparent;
    border-collapse: collapse;
  }

  .table td,
  .table th {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
    text-align: center;
  }

  .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
  }

  .table tbody + tbody {
    border-top: 2px solid #dee2e6;
  }
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "chauffeur/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  95 => 25,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  63 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table\">
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
    <tr>
      <td>{{ chauffeur.id }}</td>
      <td>{{ chauffeur.nom }}</td>
      <td>{{ chauffeur.prenom }}</td>
      <td>{{ chauffeur.horaires }}</td>
      <td>{{ chauffeur.experiences }}</td>
      <td>{{ chauffeur.note }}</td>

    </tr>
    {% else %}
    <tr>
      <td colspan=\"5\">Aucun résultat trouvé.</td>
    </tr>
    {% endfor %}
  </tbody>
</table>

<style>
  .table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
    background-color: transparent;
    border-collapse: collapse;
  }

  .table td,
  .table th {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
    text-align: center;
  }

  .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
  }

  .table tbody + tbody {
    border-top: 2px solid #dee2e6;
  }
</style>
", "chauffeur/pdf.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\chauffeur\\pdf.html.twig");
    }
}
