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

/* moyentp/index.html.twig */
class __TwigTemplate_b901eea2bd594d210d95061c69c4b37a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moyentp/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moyentp/index.html.twig"));

        $this->parent = $this->loadTemplate("homeadmin/index.html.twig", "moyentp/index.html.twig", 1);
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
<style>
    #search-input {
        border: none;
        padding: 10px;
        width: 300px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    #results {
        margin-top: 20px;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
</style>
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
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"card-label fw-bolder fs-3 mb-1\">Moyen de transport</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t\t\t
<form>
    <input type=\"text\" id=\"search-input\" placeholder=\"Recherche...\">
</form>
<div id=\"results\"></div>



    <script>
        \$(document).ready(function() {
            \$(\"#search-input\").keyup(function() {
                var matricule = \$(this).val();
                \$.ajax({
                    url: \"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_matricule");
        echo "\",
                    type: \"POST\",
                    dataType: \"json\",
                    data: {
                        matricule: matricule
                    },
                    success: function(response) {
                        var results = \$(\"#results\");
                        results.empty();
                        if (response.length > 0) {
                            \$.each(response, function(key, value) {
                                var html = \"<p>\" + value.nom + \"</p>\";
                                results.append(html);
                            });
                        } else {
                            results.append(\"<p>Aucun résultat</p>\");
                        }
                    }
                });
            });
        });
    </script>



\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t <br>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-toolbar\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-trigger=\"hover\" >
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t               <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moyentp_new");
        echo "\" class=\"btn btn-info\"style=\" background-color:#8DD3BB; \" >
\t\t\t\t\t\t\t\t                
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect opacity=\"0.5\" x=\"11.364\" y=\"20.364\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-90 11.364 20.364)\" fill=\"black\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"4.36396\" y=\"11.364\" width=\"16\" height=\"2\" rx=\"1\" fill=\"black\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->Nouveau moyen de transport</a>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-toolbar float-end\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-trigger=\"hover\">
    <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chart");
        echo "\" class=\"btn btn-info\" style=\"background-color:#8DD3BB; width:280px; margin:1px;\">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
        <!--end::Svg Icon-->Statistique
    </a>
</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end::Header-->
\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body py-3\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Table container-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"myTable\"  class=\"table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Table-->
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Table head-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"fw-bolder text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            <th class=\"min-w-190px\">Nom</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <th class=\"min-w-190px\">Matricule</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"min-w-150px\">type </th>
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
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_sort_filter($this->env, (isset($context["moyentps"]) || array_key_exists("moyentps", $context) ? $context["moyentps"] : (function () { throw new RuntimeError('Variable "moyentps" does not exist.', 133, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["moyentp"]) {
            // line 134
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
                                                           
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold text-muted d-block fs-7\">";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["moyentp"], "nom", [], "any", false, false, false, 137), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold text-muted d-block fs-7\">";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["moyentp"], "matricule", [], "any", false, false, false, 140), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold text-muted d-block fs-7\">";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["moyentp"], "type", [], "any", false, false, false, 144), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end flex-shrink-0\">
                                                                <form action=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moyentp_show", ["id" => twig_get_attribute($this->env, $this->source, $context["moyentp"], "id", [], "any", false, false, false, 149)]), "html", null, true);
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
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moyentp_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["moyentp"], "id", [], "any", false, false, false, 160)]), "html", null, true);
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
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moyentp_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["moyentp"], "id", [], "any", false, false, false, 171)]), "html", null, true);
            echo "\"   method=\"post\">
                                                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["moyentp"], "id", [], "any", false, false, false, 172), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moyentp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
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
\t\t\t\t\t\t\t\t

\t\t
\t\t \t\t\t\t

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "moyentp/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 192,  268 => 172,  264 => 171,  250 => 160,  236 => 149,  228 => 144,  221 => 140,  215 => 137,  210 => 134,  206 => 133,  167 => 97,  152 => 85,  120 => 56,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homeadmin/index.html.twig' %}



{% block tableau %}

<style>
    #search-input {
        border: none;
        padding: 10px;
        width: 300px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    #results {
        margin-top: 20px;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
</style>
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
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"card-label fw-bolder fs-3 mb-1\">Moyen de transport</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t\t\t
<form>
    <input type=\"text\" id=\"search-input\" placeholder=\"Recherche...\">
</form>
<div id=\"results\"></div>



    <script>
        \$(document).ready(function() {
            \$(\"#search-input\").keyup(function() {
                var matricule = \$(this).val();
                \$.ajax({
                    url: \"{{ path('search_matricule') }}\",
                    type: \"POST\",
                    dataType: \"json\",
                    data: {
                        matricule: matricule
                    },
                    success: function(response) {
                        var results = \$(\"#results\");
                        results.empty();
                        if (response.length > 0) {
                            \$.each(response, function(key, value) {
                                var html = \"<p>\" + value.nom + \"</p>\";
                                results.append(html);
                            });
                        } else {
                            results.append(\"<p>Aucun résultat</p>\");
                        }
                    }
                });
            });
        });
    </script>



\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t <br>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-toolbar\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-trigger=\"hover\" >
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t               <a href=\"{{ path('app_moyentp_new') }}\" class=\"btn btn-info\"style=\" background-color:#8DD3BB; \" >
\t\t\t\t\t\t\t\t                
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect opacity=\"0.5\" x=\"11.364\" y=\"20.364\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-90 11.364 20.364)\" fill=\"black\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"4.36396\" y=\"11.364\" width=\"16\" height=\"2\" rx=\"1\" fill=\"black\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->Nouveau moyen de transport</a>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-toolbar float-end\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-trigger=\"hover\">
    <a href=\"{{ path('chart') }}\" class=\"btn btn-info\" style=\"background-color:#8DD3BB; width:280px; margin:1px;\">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
        <!--end::Svg Icon-->Statistique
    </a>
</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end::Header-->
\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body py-3\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Table container-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"myTable\"  class=\"table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Table-->
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Table head-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"fw-bolder text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            <th class=\"min-w-190px\">Nom</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <th class=\"min-w-190px\">Matricule</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"min-w-150px\">type </th>
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
                                                    {% for moyentp in moyentps |sort|reverse  %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
                                                           
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold text-muted d-block fs-7\">{{ moyentp.nom }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold text-muted d-block fs-7\">{{ moyentp.matricule }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold text-muted d-block fs-7\">{{ moyentp.type }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end flex-shrink-0\">
                                                                <form action=\"{{ path('app_moyentp_show', { 'id': moyentp.id }) }}\">
            
                                                        <button class=\"btn btn-sm btn-primary\"style=\"width:15px; margin:1px; background-color:#8DD3BB;\" type=\"submit\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t              <span class=\"svg-icon svg-icon-3\" style=\" margin:-20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.3\" d=\"M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t </button>
                                                                      </form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('app_moyentp_edit', {id : moyentp.id}) }}\" method=\"post\">
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
                                                <form  action=\"{{ path('app_moyentp_delete', { 'id': moyentp.id }) }}\"   method=\"post\">
                                                        <input type=\"hidden\" name=\"id\" value=\"{{ moyentp.id }}\" />

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
\t\t\t\t\t\t\t\t

\t\t
\t\t \t\t\t\t

{% endblock %}
", "moyentp/index.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\moyentp\\index.html.twig");
    }
}
