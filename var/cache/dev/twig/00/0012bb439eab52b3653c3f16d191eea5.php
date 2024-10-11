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

/* chart/index.html.twig */
class __TwigTemplate_fe4305e33cefb2e06c95e79d0cb54030 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chart/index.html.twig"));

        $this->parent = $this->loadTemplate("homeadmin/index.html.twig", "chart/index.html.twig", 1);
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
        echo "
  <div class=\"col-xl-0\">
    
    <!--begin::Charts Widget 1-->
        
    <!--begin::Header-->
    <div class=\"card-header border-0 pt-5\">
      <div class=\"container\">

        <!--begin::Tables Widget 3-->
        <div class=\"card card-xl-stretch mb-5 mb-xl-8\" style=\"width: 770px;\">
          <!--begin::Header-->
          <br>
          <br>

          <!-- Card Header - Dropdown -->
          <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
            <h1 class=\"m-0 font-weight-bold text-primary\"><font style=\"color:#8DD3BB; \">Statistique</font></h1>
          </div>

          <!-- Card Body -->
          <div class=\"card-body\">
            <div id=\"piechart\" style=\"width: 100%; height: 500px; position: relative;\"></div>
          </div>
        </div>

        <!-- Load Google Charts -->
        <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>

        <!-- Draw Pie Chart -->
        <script type=\"text/javascript\">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Type', 'Count'],
              ['BUS', ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["nb_bus"]) || array_key_exists("nb_bus", $context) ? $context["nb_bus"] : (function () { throw new RuntimeError('Variable "nb_bus" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "],
              ['METRO', ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["nb_metro"]) || array_key_exists("nb_metro", $context) ? $context["nb_metro"] : (function () { throw new RuntimeError('Variable "nb_metro" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "],
              ['TRAIN', ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["nb_train"]) || array_key_exists("nb_train", $context) ? $context["nb_train"] : (function () { throw new RuntimeError('Variable "nb_train" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "]
            ]);

            var options = {
              title: '',
              colors: ['#e1bee7', '#ffcc80', '#8DD3BB'],
              backgroundColor: '#f2f2f2',
              pieSliceTextStyle: {color: 'black'},
              titleTextStyle: {color: '#100677', fontSize: 20},
              legend: {position: 'bottom'},
              pieHole: 0.4,
              pieSliceBorderColor: 'white',
              pieSliceText: 'value',
              pieSliceTextStyle: {color: 'white'},
              chartArea: {left: '5%', top: '10%', width: '90%', height: '80%'},
              tooltip: {textStyle: {color: '#8DD3BB'}, showColorCode: true},
              animation: {startup: true, duration: 1000, easing: 'out'},
              is3D: true
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
          }
        </script>
      </div>
    </div>
  </div>

  <style>
    #piechart {
      border-radius: 50%;
      box-shadow: 0 0 20px rgba(0,0,0,0.2);
    }
  </style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "chart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  111 => 42,  107 => 41,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homeadmin/index.html.twig' %}

{% block tableau %}

  <div class=\"col-xl-0\">
    
    <!--begin::Charts Widget 1-->
        
    <!--begin::Header-->
    <div class=\"card-header border-0 pt-5\">
      <div class=\"container\">

        <!--begin::Tables Widget 3-->
        <div class=\"card card-xl-stretch mb-5 mb-xl-8\" style=\"width: 770px;\">
          <!--begin::Header-->
          <br>
          <br>

          <!-- Card Header - Dropdown -->
          <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
            <h1 class=\"m-0 font-weight-bold text-primary\"><font style=\"color:#8DD3BB; \">Statistique</font></h1>
          </div>

          <!-- Card Body -->
          <div class=\"card-body\">
            <div id=\"piechart\" style=\"width: 100%; height: 500px; position: relative;\"></div>
          </div>
        </div>

        <!-- Load Google Charts -->
        <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>

        <!-- Draw Pie Chart -->
        <script type=\"text/javascript\">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Type', 'Count'],
              ['BUS', {{ nb_bus }}],
              ['METRO', {{ nb_metro }}],
              ['TRAIN', {{ nb_train }}]
            ]);

            var options = {
              title: '',
              colors: ['#e1bee7', '#ffcc80', '#8DD3BB'],
              backgroundColor: '#f2f2f2',
              pieSliceTextStyle: {color: 'black'},
              titleTextStyle: {color: '#100677', fontSize: 20},
              legend: {position: 'bottom'},
              pieHole: 0.4,
              pieSliceBorderColor: 'white',
              pieSliceText: 'value',
              pieSliceTextStyle: {color: 'white'},
              chartArea: {left: '5%', top: '10%', width: '90%', height: '80%'},
              tooltip: {textStyle: {color: '#8DD3BB'}, showColorCode: true},
              animation: {startup: true, duration: 1000, easing: 'out'},
              is3D: true
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
          }
        </script>
      </div>
    </div>
  </div>

  <style>
    #piechart {
      border-radius: 50%;
      box-shadow: 0 0 20px rgba(0,0,0,0.2);
    }
  </style>

{% endblock %}
", "chart/index.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\chart\\index.html.twig");
    }
}
