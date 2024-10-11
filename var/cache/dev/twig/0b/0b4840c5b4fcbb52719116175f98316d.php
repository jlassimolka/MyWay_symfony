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

/* base.html.twig */
class __TwigTemplate_d37d1c3621cb1b31c9f974580366ac09 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/img/apple-icon.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/img/favicon.png"), "html", null, true);
        echo "\">
        ";
        // line 12
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 42
        echo "
        ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    </head>
    <body>
     

  ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "session", [], "any", false, false, false, 70), "getFlashBag", [], "any", false, false, false, 70), "get", [0 => "success"], "method", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 71
            echo "  <br>
  <br>
  <div class=\"container position-fixed top-3 start-50 translate-middle-x\" style=\"width:300px;\">
    <div class=\"alert alert-success text-center\" role=\"alert\" style=\"background-color: #d4edda; border-color: #c3e6cb; color: #155724; border-radius: .25rem;\">
      ";
            // line 75
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
  </div>

   <script>
        setTimeout(function() {
            document.querySelector('.alert-success').remove();
        }, 3000);
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "



        ";
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "    </body>
</html>
";
        
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

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "
             <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700\" />

<!-- Nucleo Icons -->
<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/css/nucleo-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/css/nucleo-svg.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

<!-- Font Awesome Icons -->
<script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>

<!-- Material Icons -->
<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons+Round\" rel=\"stylesheet\">

<!-- CSS Files -->



<link id=\"pagestyle\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/css/material-dashboard.css?v=3.0.4"), "html", null, true);
        echo "\" rel=\"stylesheet\" />


<!-- Molka -->
<link rel=\"canonical\" href=\"Https://preview.keenthemes.com/seven-html-free\" />
\t\t
\t
\t
<!-- end molka -->

            ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "          <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/js/core/popper.min.js"), "html", null, true);
        echo "\" ></script>
         <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
         <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        echo "\" ></script>
         <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/js/plugins/smooth-scrollbar.min.js"), "html", null, true);
        echo "\" ></script>
         <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/js/material-dashboard.min.js?v=3.0.4"), "html", null, true);
        echo "\"></script>
         <!-- Molka -->
         <!--begin::Javascript-->
\t\t<!--begin::Global Javascript Bundle(used by all pages)-->
\t\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("molka/plugins/global/plugins.bundle.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("molka/js/scripts.bundle.js"), "html", null, true);
        echo "\"></script>
\t\t<!--end::Global Javascript Bundle-->
\t\t<!--begin::Page Vendors Javascript(used by this page)-->
\t\t<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("molka/plugins/custom/fullcalendar/fullcalendar.bundle.js"), "html", null, true);
        echo "\"></script>
\t\t<!--end::Page Vendors Javascript-->
\t\t<!--begin::Page Custom Javascript(used by this page)-->
\t\t<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("molka/js/custom/widgets.js"), "html", null, true);
        echo "\"></script>
\t\t<!--end::Page Custom Javascript-->
\t\t<!--end::Javascript-->
         <!-- end molka -->

            ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 89
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 89,  265 => 64,  257 => 59,  251 => 56,  245 => 53,  241 => 52,  234 => 48,  230 => 47,  226 => 46,  222 => 45,  217 => 44,  207 => 43,  195 => 40,  182 => 30,  167 => 18,  163 => 17,  157 => 13,  147 => 12,  128 => 5,  116 => 90,  114 => 89,  108 => 85,  92 => 75,  86 => 71,  82 => 70,  76 => 66,  74 => 43,  71 => 42,  68 => 12,  64 => 10,  60 => 9,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{asset(\"Back/img/apple-icon.png\")}}\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset(\"Back/img/favicon.png\")}}\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}

             <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700\" />

<!-- Nucleo Icons -->
<link href=\"{{ asset(\"Back/assets/css/nucleo-icons.css\")}}\" rel=\"stylesheet\" />
<link href=\"{{ asset(\"Back/assets/css/nucleo-svg.css\")}}\" rel=\"stylesheet\" />

<!-- Font Awesome Icons -->
<script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>

<!-- Material Icons -->
<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons+Round\" rel=\"stylesheet\">

<!-- CSS Files -->



<link id=\"pagestyle\" href=\"{{ asset(\"Back/assets/css/material-dashboard.css?v=3.0.4\")}}\" rel=\"stylesheet\" />


<!-- Molka -->
<link rel=\"canonical\" href=\"Https://preview.keenthemes.com/seven-html-free\" />
\t\t
\t
\t
<!-- end molka -->

            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
          <script src=\"{{ asset(\"Back/assets/js/core/popper.min.js\")}}\" ></script>
         <script src=\"{{ asset(\"Back/assets/js/core/bootstrap.min.js\")}}\" ></script>
         <script src=\"{{ asset(\"Back/assets/js/plugins/perfect-scrollbar.min.js\")}}\" ></script>
         <script src=\"{{ asset(\"Back/assets/js/plugins/smooth-scrollbar.min.js\")}}\" ></script>
         <script src=\"{{ asset(\"Back/assets/js/material-dashboard.min.js?v=3.0.4\")}}\"></script>
         <!-- Molka -->
         <!--begin::Javascript-->
\t\t<!--begin::Global Javascript Bundle(used by all pages)-->
\t\t<script src=\"{{ asset(\"molka/plugins/global/plugins.bundle.js\")}}\"></script>
\t\t<script src=\"{{ asset(\"molka/js/scripts.bundle.js\")}}\"></script>
\t\t<!--end::Global Javascript Bundle-->
\t\t<!--begin::Page Vendors Javascript(used by this page)-->
\t\t<script src=\"{{ asset(\"molka/plugins/custom/fullcalendar/fullcalendar.bundle.js\")}}\"></script>
\t\t<!--end::Page Vendors Javascript-->
\t\t<!--begin::Page Custom Javascript(used by this page)-->
\t\t<script src=\"{{ asset(\"molka/js/custom/widgets.js\")}}\"></script>
\t\t<!--end::Page Custom Javascript-->
\t\t<!--end::Javascript-->
         <!-- end molka -->

            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
     

  {% for message in app.session.getFlashBag.get('success') %}
  <br>
  <br>
  <div class=\"container position-fixed top-3 start-50 translate-middle-x\" style=\"width:300px;\">
    <div class=\"alert alert-success text-center\" role=\"alert\" style=\"background-color: #d4edda; border-color: #c3e6cb; color: #155724; border-radius: .25rem;\">
      {{ message }}
    </div>
  </div>

   <script>
        setTimeout(function() {
            document.querySelector('.alert-success').remove();
        }, 3000);
    </script>
{% endfor %}




        {% block body %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\base.html.twig");
    }
}
