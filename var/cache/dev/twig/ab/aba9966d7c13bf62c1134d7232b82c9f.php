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

/* affichemoyen/index.html.twig */
class __TwigTemplate_fddc61e7d1c1ece25c95eb7f71f7650d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "affichemoyen/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "affichemoyen/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "affichemoyen/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .card {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }

        .card:hover {
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .btn-primary {
            background-color: #8DD3BB;
            border-radius: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }

        .btn-primary:hover {
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

       
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "<h3>Moyen de transport publique</h3>
<div class=\"text-right\">
    <form action=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affichemoyen_rechercher");
        echo "\" method=\"GET\">
        <input type=\"text\" name=\"nom\">
        <input type=\"submit\" value=\"Rechercher\" class=\"btn btn-danger mr-2\" style=\"background-color:#8DD3BB;\">
    </form>
</div>
    <br>
<div class=\"container\">
  <div class=\"row\">
   
  
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignes"]) || array_key_exists("lignes", $context) ? $context["lignes"] : (function () { throw new RuntimeError('Variable "lignes" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 46
            echo "      <div class=\"col-md-4 mb-4\">
        <div class=\"card\">
          <div class=\"card-body\">
          <h3>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "moyentp", [], "any", false, false, false, 49), "type", [], "any", false, false, false, 49), "html", null, true);
            echo "</h3>
          <br>
          ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "moyentp", [], "any", false, false, false, 51), "type", [], "any", false, false, false, 51) == "TRAIN")) {
                // line 52
                echo "            <img src=\"assets/front/images/train.jpg\"  >
          ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 53
$context["ligne"], "moyentp", [], "any", false, false, false, 53), "type", [], "any", false, false, false, 53) == "BUS")) {
                // line 54
                echo "            <img src=\"assets/front/images/bus.jpg\"  >
          ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 55
$context["ligne"], "moyentp", [], "any", false, false, false, 55), "type", [], "any", false, false, false, 55) == "METRO")) {
                // line 56
                echo "            <img src=\"assets/front/images/metro.jpg\"  >
          ";
            }
            // line 58
            echo "           <br>
           <br>
            <h5 class=\"card-title\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "moyentp", [], "any", false, false, false, 60), "html", null, true);
            echo "</h5>
            <p class=\"card-text\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "trajet", [], "any", false, false, false, 61), "html", null, true);
            echo "</p>
            <br>
         
            <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affichemoyen_details", ["id" => twig_get_attribute($this->env, $this->source, $context["ligne"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" class=\"btn btn-primary\" style=\"width:300px; margin:1px; background-color:#8DD3BB; \">Voir</a>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "<div  style=\"margin-left: 526px;\" >
        <style>
 .pagination {
    height: 40px;
    margin: 20px 10px;
}

.pagination ul {
    display: inline-block;
    *display: inline;
    margin-bottom: 0;
    margin-left: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    *zoom: 1;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    padding: 0px;
}

.pagination li {
    display: inline;
}

.pagination a,
.pagination span {
    float: left;
    padding: 0 14px;
    line-height: 38px;
    text-decoration: none;
    background-color: #ffffff;
    border: 1px solid #dddddd;
    border-left-width: 0;
}

.pagination a:hover,
.pagination .active a,
.pagination .active span {
    background-color: #f5f5f5;
}

.pagination .active a,
.pagination .active span {
    color: #999999;
    cursor: default;
}

.pagination .disabled span,
.pagination .disabled a,
.pagination .disabled a:hover {
    color: #999999;
    cursor: default;
    background-color: transparent;
}

.pagination li:first-child a,
.pagination li:first-child span {
    border-left-width: 1px;
    -webkit-border-radius: 3px 0 0 3px;
    -moz-border-radius: 3px 0 0 3px;
    border-radius: 3px 0 0 3px;
}

.pagination li:last-child a,
.pagination li:last-child span {
    -webkit-border-radius: 0 3px 3px 0;
    -moz-border-radius: 0 3px 3px 0;
    border-radius: 0 3px 3px 0;
}

.pagination-centered {
    text-align: center;
}

.pagination-right {
    text-align: right;
}

.pagination a:hover,
.pagination .active a,
.pagination .active span {
  background-color: #8DD3BB;
  color: #fff;
}

.pagination .active a,
.pagination .active span {
  background-color: #8DD3BB;
  color: #fff;
}
 </style>
 ";
        // line 162
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["lignes"]) || array_key_exists("lignes", $context) ? $context["lignes"] : (function () { throw new RuntimeError('Variable "lignes" does not exist.', 162, $this->source); })()));
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
        return "affichemoyen/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 162,  189 => 69,  178 => 64,  172 => 61,  168 => 60,  164 => 58,  160 => 56,  158 => 55,  155 => 54,  153 => 53,  150 => 52,  148 => 51,  143 => 49,  138 => 46,  134 => 45,  121 => 35,  117 => 33,  107 => 32,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .card {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }

        .card:hover {
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .btn-primary {
            background-color: #8DD3BB;
            border-radius: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }

        .btn-primary:hover {
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

       
    </style>
{% endblock %}

{% block body %}
<h3>Moyen de transport publique</h3>
<div class=\"text-right\">
    <form action=\"{{ path('app_affichemoyen_rechercher') }}\" method=\"GET\">
        <input type=\"text\" name=\"nom\">
        <input type=\"submit\" value=\"Rechercher\" class=\"btn btn-danger mr-2\" style=\"background-color:#8DD3BB;\">
    </form>
</div>
    <br>
<div class=\"container\">
  <div class=\"row\">
   
  
    {% for ligne in lignes %}
      <div class=\"col-md-4 mb-4\">
        <div class=\"card\">
          <div class=\"card-body\">
          <h3>{{ ligne.moyentp.type}}</h3>
          <br>
          {% if ligne.moyentp.type == 'TRAIN' %}
            <img src=\"assets/front/images/train.jpg\"  >
          {% elseif ligne.moyentp.type == 'BUS' %}
            <img src=\"assets/front/images/bus.jpg\"  >
          {% elseif ligne.moyentp.type == 'METRO' %}
            <img src=\"assets/front/images/metro.jpg\"  >
          {% endif %}
           <br>
           <br>
            <h5 class=\"card-title\">{{ ligne.moyentp }}</h5>
            <p class=\"card-text\">{{ ligne.trajet }}</p>
            <br>
         
            <a href=\"{{path('app_affichemoyen_details',{ 'id': ligne.id  })}}\" class=\"btn btn-primary\" class=\"btn btn-primary\" style=\"width:300px; margin:1px; background-color:#8DD3BB; \">Voir</a>
          </div>
        </div>
      </div>
    {% endfor %}
<div  style=\"margin-left: 526px;\" >
        <style>
 .pagination {
    height: 40px;
    margin: 20px 10px;
}

.pagination ul {
    display: inline-block;
    *display: inline;
    margin-bottom: 0;
    margin-left: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    *zoom: 1;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    padding: 0px;
}

.pagination li {
    display: inline;
}

.pagination a,
.pagination span {
    float: left;
    padding: 0 14px;
    line-height: 38px;
    text-decoration: none;
    background-color: #ffffff;
    border: 1px solid #dddddd;
    border-left-width: 0;
}

.pagination a:hover,
.pagination .active a,
.pagination .active span {
    background-color: #f5f5f5;
}

.pagination .active a,
.pagination .active span {
    color: #999999;
    cursor: default;
}

.pagination .disabled span,
.pagination .disabled a,
.pagination .disabled a:hover {
    color: #999999;
    cursor: default;
    background-color: transparent;
}

.pagination li:first-child a,
.pagination li:first-child span {
    border-left-width: 1px;
    -webkit-border-radius: 3px 0 0 3px;
    -moz-border-radius: 3px 0 0 3px;
    border-radius: 3px 0 0 3px;
}

.pagination li:last-child a,
.pagination li:last-child span {
    -webkit-border-radius: 0 3px 3px 0;
    -moz-border-radius: 0 3px 3px 0;
    border-radius: 0 3px 3px 0;
}

.pagination-centered {
    text-align: center;
}

.pagination-right {
    text-align: right;
}

.pagination a:hover,
.pagination .active a,
.pagination .active span {
  background-color: #8DD3BB;
  color: #fff;
}

.pagination .active a,
.pagination .active span {
  background-color: #8DD3BB;
  color: #fff;
}
 </style>
 {{ knp_pagination_render(lignes) }}
</div>



  </div>
</div>

{% endblock %}
", "affichemoyen/index.html.twig", "C:\\Users\\Admin\\Desktop\\auth\\templates\\affichemoyen\\index.html.twig");
    }
}
