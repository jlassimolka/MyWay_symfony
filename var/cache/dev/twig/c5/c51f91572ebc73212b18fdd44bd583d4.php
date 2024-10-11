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

/* ligne/index.html.twig */
class __TwigTemplate_24d8e2aaff523fea3717f52de722c5eb extends Template
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
        return "homeadmin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ligne/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ligne/index.html.twig"));

        $this->parent = $this->loadTemplate("homeadmin/index.html.twig", "ligne/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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


\t\t
\t\t\t\t\t\t\t\t\t<!--begin::Tables Widget 3-->
\t\t\t\t\t\t\t\t\t<div class=\"card card-xl-stretch mb-5 mb-xl-8\" style=\"width: 780px;\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Header-->
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0 pt-5\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title align-items-start flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"card-label fw-bolder fs-3 mb-1\">Ligne</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-toolbar\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-trigger=\"hover\" >
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t               <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ligne_new");
        echo "\" class=\"btn btn-info\"style=\" background-color:#8DD3BB; \" >
\t\t\t\t\t\t\t\t                
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect opacity=\"0.5\" x=\"11.364\" y=\"20.364\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-90 11.364 20.364)\" fill=\"black\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"4.36396\" y=\"11.364\" width=\"16\" height=\"2\" rx=\"1\" fill=\"black\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->Nouveau ligne</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end::Header-->
\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body py-3\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Table container-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<h5>Rechercher <br><br> <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher par nom..\"></h5>
\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"myTable\"  class=\"table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Table-->
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Table head-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"fw-bolder text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            <th class=\"min-w-190px\">Moyen de Transport</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <th class=\"min-w-190px\"></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"min-w-150px\">Trajet</th>
\t\t\t                                                 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"min-w-100px text-end\">Actions</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Table head-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Table body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"tableBody\">
                                                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_sort_filter($this->env, (isset($context["lignes"]) || array_key_exists("lignes", $context) ? $context["lignes"] : (function () { throw new RuntimeError('Variable "lignes" does not exist.', 69, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 70
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
                                                           
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold text-muted d-block fs-7\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "moyentp", [], "any", false, false, false, 73), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold text-muted d-block fs-7\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold text-muted d-block fs-7\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "trajet", [], "any", false, false, false, 80), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end flex-shrink-0\">
                                                                <form action=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ligne_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ligne"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\">
            
                                                        <button class=\"btn btn-sm btn-primary\"style=\"width:15px; margin:1px; background-color:#8DD3BB;\" type=\"submit\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t              <span class=\"svg-icon svg-icon-3\" style=\" margin:-20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.3\" d=\"M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t </button>
                                                                      </form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ligne_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ligne"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\" method=\"post\">
                                                        <button class=\"btn btn-sm btn-primary\"style=\"width:15px; margin:1px; background-color:#8DD3BB;\" type=\"submit\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t             <span class=\"svg-icon svg-icon-3\" style=\" margin:-20px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.3\" d=\"M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t </button>
                                                                      </form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <form  action=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ligne_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["ligne"], "id", [], "any", false, false, false, 107)]), "html", null, true);
            echo "\"   method=\"post\">
                                                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "id", [], "any", false, false, false, 108), "html", null, true);
            echo "\" />

                                                        <button class=\"btn btn-sm btn-primary\" style=\"width:15px; margin:1px; background-color:#8DD3BB; \" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <span class=\"svg-icon svg-icon-3\" style=\" margin:-20px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.5\" d=\"M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.5\" d=\"M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t </button>
                                                </form>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Table body-->
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Table-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Table container-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Table container-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::Tables Widget 3-->
\t\t\t\t\t\t\t\t\t<script>
// Get the input field and table body
var input = document.getElementById(\"searchInput\");
var tableBody = document.getElementById(\"tableBody\");

// Add event listener to input field
input.addEventListener(\"keyup\", function() {
  // Get the user input and convert to lowercase
  var filter = input.value.toLowerCase();
  
  // Loop through all table rows and hide those that do not match the filter
  for (var i = 0; i < tableBody.rows.length; i++) {
    var row = tableBody.rows[i];
    var nom = row.cells[0].getElementsByTagName(\"span\")[0];
    if (nom.innerHTML.toLowerCase().indexOf(filter) > -1) {
      row.style.display = \"\";
    } else {
      row.style.display = \"none\";
    }
  }
});
</script>

\t\t
\t\t \t\t\t\t

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "ligne/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 128,  195 => 108,  191 => 107,  177 => 96,  163 => 85,  155 => 80,  145 => 73,  140 => 70,  136 => 69,  94 => 30,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homeadmin/index.html.twig' %}



{% block tableau %}


 <div class=\"col-xl-0\">

\t\t\t\t\t\t\t\t\t<!--begin::Charts Widget 1-->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!--begin::Header-->
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0 pt-5\">
                                        <div class=\"container\">


\t\t
\t\t\t\t\t\t\t\t\t<!--begin::Tables Widget 3-->
\t\t\t\t\t\t\t\t\t<div class=\"card card-xl-stretch mb-5 mb-xl-8\" style=\"width: 780px;\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Header-->
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0 pt-5\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title align-items-start flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"card-label fw-bolder fs-3 mb-1\">Ligne</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-toolbar\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-trigger=\"hover\" >
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t               <a href=\"{{ path('app_ligne_new') }}\" class=\"btn btn-info\"style=\" background-color:#8DD3BB; \" >
\t\t\t\t\t\t\t\t                
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect opacity=\"0.5\" x=\"11.364\" y=\"20.364\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-90 11.364 20.364)\" fill=\"black\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"4.36396\" y=\"11.364\" width=\"16\" height=\"2\" rx=\"1\" fill=\"black\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->Nouveau ligne</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end::Header-->
\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body py-3\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Table container-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<h5>Rechercher <br><br> <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher par nom..\"></h5>
\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"myTable\"  class=\"table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Table-->
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Table head-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"fw-bolder text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            <th class=\"min-w-190px\">Moyen de Transport</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <th class=\"min-w-190px\"></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"min-w-150px\">Trajet</th>
\t\t\t                                                 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"min-w-100px text-end\">Actions</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Table head-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Table body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"tableBody\">
                                                    {% for ligne in lignes |sort|reverse  %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
                                                           
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold text-muted d-block fs-7\">{{ ligne.moyentp }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold text-muted d-block fs-7\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold text-muted d-block fs-7\">{{ ligne.trajet }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end flex-shrink-0\">
                                                                <form action=\"{{ path('app_ligne_show', { 'id': ligne.id }) }}\">
            
                                                        <button class=\"btn btn-sm btn-primary\"style=\"width:15px; margin:1px; background-color:#8DD3BB;\" type=\"submit\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t              <span class=\"svg-icon svg-icon-3\" style=\" margin:-20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.3\" d=\"M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t </button>
                                                                      </form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('app_ligne_edit', {id : ligne.id}) }}\" method=\"post\">
                                                        <button class=\"btn btn-sm btn-primary\"style=\"width:15px; margin:1px; background-color:#8DD3BB;\" type=\"submit\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t             <span class=\"svg-icon svg-icon-3\" style=\" margin:-20px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.3\" d=\"M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t </button>
                                                                      </form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <form  action=\"{{ path('app_ligne_delete', { 'id': ligne.id }) }}\"   method=\"post\">
                                                        <input type=\"hidden\" name=\"id\" value=\"{{ ligne.id }}\" />

                                                        <button class=\"btn btn-sm btn-primary\" style=\"width:15px; margin:1px; background-color:#8DD3BB; \" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <span class=\"svg-icon svg-icon-3\" style=\" margin:-20px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.5\" d=\"M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.5\" d=\"M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t </button>
                                                </form>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Table body-->
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Table-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Table container-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Table container-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::Tables Widget 3-->
\t\t\t\t\t\t\t\t\t<script>
// Get the input field and table body
var input = document.getElementById(\"searchInput\");
var tableBody = document.getElementById(\"tableBody\");

// Add event listener to input field
input.addEventListener(\"keyup\", function() {
  // Get the user input and convert to lowercase
  var filter = input.value.toLowerCase();
  
  // Loop through all table rows and hide those that do not match the filter
  for (var i = 0; i < tableBody.rows.length; i++) {
    var row = tableBody.rows[i];
    var nom = row.cells[0].getElementsByTagName(\"span\")[0];
    if (nom.innerHTML.toLowerCase().indexOf(filter) > -1) {
      row.style.display = \"\";
    } else {
      row.style.display = \"none\";
    }
  }
});
</script>

\t\t
\t\t \t\t\t\t

{% endblock %}
", "ligne/index.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\ligne\\index.html.twig");
    }
}
