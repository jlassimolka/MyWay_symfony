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

/* front_chauffeur/index.html.twig */
class __TwigTemplate_33818e3b6af911f9cef30101efab5dd4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_chauffeur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_chauffeur/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front_chauffeur/index.html.twig", 1);
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

        echo "My Way";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "

 <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!--====== Favicon Icon ======-->
  <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/logomyway.png"), "html", null, true);
        echo "\" type=\"image/png\">

<!--====== Animate CSS ======-->
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/animate.css"), "html", null, true);
        echo "\">

<!--====== Nice Select CSS ======-->
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/nice-select.css"), "html", null, true);
        echo "\">

<!--====== Line Icons CSS ======-->
<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/LineIcons.2.0.css"), "html", null, true);
        echo "\">

<!--====== Bootstrap CSS ======-->
<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.4.5.2.min.css"), "html", null, true);
        echo "\">

<!--====== Default CSS ======-->
<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/default.css"), "html", null, true);
        echo "\">

<!--====== Style CSS ======-->
<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "
  <section class=\"header_area\">
        <div class=\"header_navbar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <nav class=\"navbar navbar-expand-lg\">
                            <a class=\"navbar-brand\" href=\"index.html\">
                                <img src=\"myway/public/Front/images/logomyway.png\" alt=\"Logo\">
                            </a>
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"toggler-icon\"></span>
                                <span class=\"toggler-icon\"></span>
                                <span class=\"toggler-icon\"></span>
                            </button>

                            <div class=\"collapse navbar-collapse sub-menu-bar\" id=\"navbarSupportedContent\">
                                <ul id=\"nav\" class=\"navbar-nav ml-auto\">
                                    <li class=\"nav-item active\">
                                        <a class=\"page-scroll\" href=\"#home\">Home</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_chauffeur");
        echo "\">Chauffeurs</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_guide");
        echo "\">Guide Touristiques</a>
</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"#services\">Services</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"#gallery\">Gallery</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"#blog\">Blog</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->
          <div id=\"chauffeur\" class=\"header_slider\">
            <div class=\"single_slider bg_cover d-flex align-items-center\" style=\"background-image: url(assets/images/hero-area.jpg)\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-8\">
                            <div class=\"slider_content\">
                                <div class=\"example-wrapper\">
                                 <section id=\"chauffeur\">
    <h1>Notez un chauffeur</h1>

    <form method=\"post\" action=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_chauffeur");
        echo "\">
        <label for=\"chauffeur\">Choisissez le chauffeur:</label>
          <br>
        
        <select name=\"chauffeur\" id=\"chauffeur\">
          <br>
        
            ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chauffeurs"]) || array_key_exists("chauffeurs", $context) ? $context["chauffeurs"] : (function () { throw new RuntimeError('Variable "chauffeurs" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chauffeur"]) {
            // line 99
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "id", [], "any", false, false, false, 99), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "nom", [], "any", false, false, false, 99), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chauffeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "        </select>
          <br>
        
        <br>
        <label>Donnez une note :</label>
        <div class=\"note\">
            <input type=\"radio\" id=\"star5\" name=\"note\" value=\"5\" /><label for=\"star5\" title=\"Excellent\">5 </label>
            <input type=\"radio\" id=\"star4\" name=\"note\" value=\"4\" /><label for=\"star4\" title=\"Très bien\">4 </label>
            <input type=\"radio\" id=\"star3\" name=\"note\" value=\"3\" /><label for=\"star3\" title=\"Bien\">3 </label>
            <input type=\"radio\" id=\"star2\" name=\"note\" value=\"2\" /><label for=\"star2\" title=\"Moyen\">2 </label>
            <input type=\"radio\" id=\"star1\" name=\"note\" value=\"1\" /><label for=\"star1\" title=\"Mauvais\">1 </label>
        </div>
        <br>
        <input type=\"submit\" value=\"Noter\" />
        <script>
    var form = document.getElementById(\"rating-form\");
    form.addEventListener(\"submit\", function(event) {
        event.preventDefault();
        var note = document.querySelector('input[name=\"note\"]:checked').value;
        // envoyer la note sélectionnée à votre serveur ici
        console.log(\"Note sélectionnée : \" + note);
    });
</script>
    </form>
</div>
                                <p class=\"wow fadeInLeftBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.5s\">Ici vous pouvez noter un chauffeur</p>
                            </div> <!-- slider content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->
        </div> <!-- header slider -->
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front_chauffeur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 101,  234 => 99,  230 => 98,  220 => 91,  185 => 59,  179 => 56,  155 => 34,  145 => 33,  133 => 29,  127 => 26,  121 => 23,  115 => 20,  109 => 17,  103 => 14,  97 => 11,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}My Way{% endblock %}
   {% block head %}


 <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!--====== Favicon Icon ======-->
  <link rel=\"shortcut icon\" href=\"{{ asset('front/images/logomyway.png') }}\" type=\"image/png\">

<!--====== Animate CSS ======-->
<link rel=\"stylesheet\" href=\"{{ asset('front/css/animate.css') }}\">

<!--====== Nice Select CSS ======-->
<link rel=\"stylesheet\" href=\"{{ asset('front/css/nice-select.css') }}\">

<!--====== Line Icons CSS ======-->
<link rel=\"stylesheet\" href=\"{{ asset('front/css/LineIcons.2.0.css') }}\">

<!--====== Bootstrap CSS ======-->
<link rel=\"stylesheet\" href=\"{{ asset('front/css/bootstrap.4.5.2.min.css') }}\">

<!--====== Default CSS ======-->
<link rel=\"stylesheet\" href=\"{{ asset('front/css/default.css') }}\">

<!--====== Style CSS ======-->
<link rel=\"stylesheet\" href=\"{{ asset('front/css/style.css') }}\">
{% endblock %}


{% block body %}

  <section class=\"header_area\">
        <div class=\"header_navbar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <nav class=\"navbar navbar-expand-lg\">
                            <a class=\"navbar-brand\" href=\"index.html\">
                                <img src=\"myway/public/Front/images/logomyway.png\" alt=\"Logo\">
                            </a>
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"toggler-icon\"></span>
                                <span class=\"toggler-icon\"></span>
                                <span class=\"toggler-icon\"></span>
                            </button>

                            <div class=\"collapse navbar-collapse sub-menu-bar\" id=\"navbarSupportedContent\">
                                <ul id=\"nav\" class=\"navbar-nav ml-auto\">
                                    <li class=\"nav-item active\">
                                        <a class=\"page-scroll\" href=\"#home\">Home</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"{{ path('app_front_chauffeur') }}\">Chauffeurs</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"{{ path('app_front_guide') }}\">Guide Touristiques</a>
</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"#services\">Services</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"#gallery\">Gallery</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"#blog\">Blog</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->
          <div id=\"chauffeur\" class=\"header_slider\">
            <div class=\"single_slider bg_cover d-flex align-items-center\" style=\"background-image: url(assets/images/hero-area.jpg)\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-8\">
                            <div class=\"slider_content\">
                                <div class=\"example-wrapper\">
                                 <section id=\"chauffeur\">
    <h1>Notez un chauffeur</h1>

    <form method=\"post\" action=\"{{ path('app_front_chauffeur') }}\">
        <label for=\"chauffeur\">Choisissez le chauffeur:</label>
          <br>
        
        <select name=\"chauffeur\" id=\"chauffeur\">
          <br>
        
            {% for chauffeur in chauffeurs %}
                <option value=\"{{ chauffeur.id }}\">{{ chauffeur.nom }}</option>
            {% endfor %}
        </select>
          <br>
        
        <br>
        <label>Donnez une note :</label>
        <div class=\"note\">
            <input type=\"radio\" id=\"star5\" name=\"note\" value=\"5\" /><label for=\"star5\" title=\"Excellent\">5 </label>
            <input type=\"radio\" id=\"star4\" name=\"note\" value=\"4\" /><label for=\"star4\" title=\"Très bien\">4 </label>
            <input type=\"radio\" id=\"star3\" name=\"note\" value=\"3\" /><label for=\"star3\" title=\"Bien\">3 </label>
            <input type=\"radio\" id=\"star2\" name=\"note\" value=\"2\" /><label for=\"star2\" title=\"Moyen\">2 </label>
            <input type=\"radio\" id=\"star1\" name=\"note\" value=\"1\" /><label for=\"star1\" title=\"Mauvais\">1 </label>
        </div>
        <br>
        <input type=\"submit\" value=\"Noter\" />
        <script>
    var form = document.getElementById(\"rating-form\");
    form.addEventListener(\"submit\", function(event) {
        event.preventDefault();
        var note = document.querySelector('input[name=\"note\"]:checked').value;
        // envoyer la note sélectionnée à votre serveur ici
        console.log(\"Note sélectionnée : \" + note);
    });
</script>
    </form>
</div>
                                <p class=\"wow fadeInLeftBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.5s\">Ici vous pouvez noter un chauffeur</p>
                            </div> <!-- slider content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->
        </div> <!-- header slider -->
    </section>

{% endblock %}", "front_chauffeur/index.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\front_chauffeur\\index.html.twig");
    }
}
