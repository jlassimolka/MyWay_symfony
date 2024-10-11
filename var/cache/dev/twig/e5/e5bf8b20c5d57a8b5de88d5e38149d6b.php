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

/* continufront/index.html.twig */
class __TwigTemplate_5ccd4c3830b130c8efc4575792a4ffd9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'html' => [$this, 'block_html'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'continu' => [$this, 'block_continu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "continufront/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "continufront/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "continufront/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html"));

        // line 3
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\">
";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo " <meta name=\"description\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"shortcut icon\" href=\"assets/front/images/favicon.png\" type=\"image/png\">


";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "

";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 232
        echo "</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    
    <!--====== Animate CSS ======-->
    <link rel=\"stylesheet\" href=\"assets/front/css/animate.css\">
        
    <!--====== Nice Select CSS ======-->
    <link rel=\"stylesheet\" href=\"assets/front/css/nice-select.css\">
               
    <!--====== Line Icons CSS ======-->
    <link rel=\"stylesheet\" href=\"assets/front/css/LineIcons.2.0.css\">

    <!--====== Bootstrap CSS ======-->
    <link rel=\"stylesheet\" href=\"assets/front/css/bootstrap.4.5.2.min.css\">
    
    <!--====== Default CSS ======-->
    <link rel=\"stylesheet\" href=\"assets/front/css/default.css\">
    
    <!--====== Style CSS ======-->
    <link rel=\"stylesheet\" href=\"assets/front/css/style.css\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "
    <!--====== Jquery js ======-->
    <script src=\"assets/front/js/vendor/jquery-1.12.4.min.js\"></script>
    <script src=\"assets/front/js/vendor/modernizr-3.7.1.min.js\"></script>
    
    <!--====== Bootstrap js ======-->
    <script src=\"assets/front/js/popper.min.js\"></script>
    <script src=\"assets/front/js/bootstrap.4.5.2.min.js\"></script>

    
    <!--====== Scrolling Nav js ======-->
    <script src=\"assets/front/js/jquery.easing.min.js\"></script>
    <script src=\"assets/front/js/scrolling-nav.js\"></script>
    
    <!--====== Counter Up js ======-->
    <script src=\"assets/front/js/waypoints.min.js\"></script>
    <script src=\"assets/front/js/jquery.counterup.min.js\"></script>
    
    <!--====== Nice Select js ======-->
    <script src=\"assets/front/js/jquery.nice-select.min.js\"></script>
    
    <!--====== WOW js ======-->
    <script src=\"assets/front/js/wow.min.js\"></script>
    
    <!--====== Main js ======-->
    <script src=\"assets/front/js/main.js\"></script>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 65
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 66
        echo "
<body>
<!--[if IE]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--====== PRELOADER PART START ======-->

    <div class=\"preloader\" >
        <div class=\"loader\">
            <div class=\"ytp-spinner\">
                <div class=\"ytp-spinner-container\">
                    <div class=\"ytp-spinner-rotator\">
                        <div class=\"ytp-spinner-left\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                        <div class=\"ytp-spinner-right\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--====== PRELOADER PART ENDS ======-->

<!--====== HEADER PART START ======-->

    <section class=\"header_area\" style=\"background-color:#8DD3BB;\">
        <div class=\"header_navbar\" style=\"background-color:#8DD3BB;\">
            <div class=\"container\" style=\"background-color:#8DD3BB;\">
                <div class=\"row\">
                    <div class=\"col-lg-12\" style=\"background-color:#8DD3BB;\">
                        <nav class=\"navbar navbar-expand-lg\">
                        
                        
                            
                           <h5 style=\"font-family: 'Comic Sans MS'; color:white\">MyWay</h5>
                           

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
                                        <a class=\"page-scroll\" href=\"#about\">About</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"#packges\">Packges</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_location_index");
        echo "\">location</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affichemoyen");
        echo "\">Moyen de transport</a>
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

        
    </section>

    <!--====== HEADER PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->

    <section id=\"about\" class=\"about_area pt-130 pb-130\">
        <div class=\"about_wrapper\">
            
            <div class=\"container\">
            
    <br>

    
                
                    
                       ";
        // line 161
        $this->displayBlock('continu', $context, $blocks);
        // line 163
        echo "
    </section>

    
    <section id=\"footer\" class=\"footer_area\" style=\"background-color:#8DD3BB;\">
        <div class=\"footer_widget pt-80 pb-130\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 order-md-1 order-lg-1\">
                        <div class=\"footer_about mt-50\">
                            <a href=\"#\"><img src=\"assets/front/images/logo.png\" alt=\"MyWay\"></a>
                            <p>Lorem ipsum dolor sifsddt amet, conse tetur sadipscing elitr, sed diam onumy eirmod tempor invidunt ut labore et dolore magna aliquya.</p>
                            <ul class=\"social\">
                                <li><a class=\"social_1\" href=\"javascript:void(0)\"><i class=\"lni lni-facebook-original\"></i></a></li>
                                <li><a class=\"social_2\" href=\"javascript:void(0)\"><i class=\"lni lni-twitter-original\"></i></a></li>
                                <li><a class=\"social_3\" href=\"javascript:void(0)\"><i class=\"lni lni-instagram-original\"></i></a></li>
                                <li><a class=\"social_4\" href=\"javascript:void(0)\"><i class=\"lni lni-linkedin-original\"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class=\"col-lg-4 col-md-12 order-md-3 order-lg-2\">
                        <div class=\"footer_link_wrapper d-flex flex-wrap\">
                            <div class=\"footer_link mt-45\">
                                <h4 class=\"footer_title\">Quick Link</h4>
                                <ul class=\"link\">
                                    <li><a href=\"javascript:void(0)\">Home</a></li>
                                    <li><a href=\"javascript:void(0)\">About</a></li>
                                    <li><a href=\"javascript:void(0)\">Trip Pacakge</a></li>
                                    <li><a href=\"javascript:void(0)\">Services</a></li>
                                    <li><a href=\"javascript:void(0)\">Gallery</a></li>
                                </ul>
                            </div> <!-- footer link -->
                            <div class=\"footer_link mt-45\">
                                <h4 class=\"footer_title\">Support</h4>
                                <ul class=\"link\">
                                    <li><a href=\"javascript:void(0)\">Customer Support</a></li>
                                    <li><a href=\"javascript:void(0)\">Privacy & Policy</a></li>
                                    <li><a href=\"javascript:void(0)\">Terms & Condition</a></li>
                                    <li><a href=\"javascript:void(0)\">Forum</a></li>
                                    <li><a href=\"javascript:void(0)\">Tour Guide</a></li>
                                </ul>
                            </div> <!-- footer link -->
                        </div> <!-- footer link wrapper -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 order-md-2 order-lg-3\">
                        <div class=\"footer_subscribe mt-45\">
                            <h4 class=\"footer_title\">Subscribe Newsletter</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed diam.</p>
                            <div class=\"subscribe_form\">
                                <form action=\"#\">
                                    <input type=\"text\" placeholder=\"Enter email\">
                                    <button><i class=\"lni lni-arrow-right\"></i></button>
                                </form>
                            </div>
                        </div> <!-- footer subscribe -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <p class=\"text-center mt-90\">Designed and Developed by <a href=\"#\">UIdeck</a></p>
        </div> <!-- footer widget -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href=\"#\" class=\"back-to-top\"><i class=\"lni lni-chevron-up\"></i></a>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 161
    public function block_continu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "continu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "continu"));

        // line 162
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "continufront/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 162,  409 => 161,  331 => 163,  329 => 161,  293 => 128,  287 => 125,  226 => 66,  216 => 65,  178 => 34,  168 => 33,  139 => 12,  129 => 11,  110 => 5,  99 => 232,  97 => 65,  93 => 63,  91 => 33,  88 => 32,  86 => 11,  79 => 6,  77 => 5,  73 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block html %}
<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\">
{% block title %}Hello!{% endblock %}
 <meta name=\"description\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"shortcut icon\" href=\"assets/front/images/favicon.png\" type=\"image/png\">


{% block stylesheets %}
    
    <!--====== Animate CSS ======-->
    <link rel=\"stylesheet\" href=\"assets/front/css/animate.css\">
        
    <!--====== Nice Select CSS ======-->
    <link rel=\"stylesheet\" href=\"assets/front/css/nice-select.css\">
               
    <!--====== Line Icons CSS ======-->
    <link rel=\"stylesheet\" href=\"assets/front/css/LineIcons.2.0.css\">

    <!--====== Bootstrap CSS ======-->
    <link rel=\"stylesheet\" href=\"assets/front/css/bootstrap.4.5.2.min.css\">
    
    <!--====== Default CSS ======-->
    <link rel=\"stylesheet\" href=\"assets/front/css/default.css\">
    
    <!--====== Style CSS ======-->
    <link rel=\"stylesheet\" href=\"assets/front/css/style.css\">

{% endblock %}

{% block javascripts %}

    <!--====== Jquery js ======-->
    <script src=\"assets/front/js/vendor/jquery-1.12.4.min.js\"></script>
    <script src=\"assets/front/js/vendor/modernizr-3.7.1.min.js\"></script>
    
    <!--====== Bootstrap js ======-->
    <script src=\"assets/front/js/popper.min.js\"></script>
    <script src=\"assets/front/js/bootstrap.4.5.2.min.js\"></script>

    
    <!--====== Scrolling Nav js ======-->
    <script src=\"assets/front/js/jquery.easing.min.js\"></script>
    <script src=\"assets/front/js/scrolling-nav.js\"></script>
    
    <!--====== Counter Up js ======-->
    <script src=\"assets/front/js/waypoints.min.js\"></script>
    <script src=\"assets/front/js/jquery.counterup.min.js\"></script>
    
    <!--====== Nice Select js ======-->
    <script src=\"assets/front/js/jquery.nice-select.min.js\"></script>
    
    <!--====== WOW js ======-->
    <script src=\"assets/front/js/wow.min.js\"></script>
    
    <!--====== Main js ======-->
    <script src=\"assets/front/js/main.js\"></script>


{% endblock %}


{% block body %}

<body>
<!--[if IE]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--====== PRELOADER PART START ======-->

    <div class=\"preloader\" >
        <div class=\"loader\">
            <div class=\"ytp-spinner\">
                <div class=\"ytp-spinner-container\">
                    <div class=\"ytp-spinner-rotator\">
                        <div class=\"ytp-spinner-left\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                        <div class=\"ytp-spinner-right\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--====== PRELOADER PART ENDS ======-->

<!--====== HEADER PART START ======-->

    <section class=\"header_area\" style=\"background-color:#8DD3BB;\">
        <div class=\"header_navbar\" style=\"background-color:#8DD3BB;\">
            <div class=\"container\" style=\"background-color:#8DD3BB;\">
                <div class=\"row\">
                    <div class=\"col-lg-12\" style=\"background-color:#8DD3BB;\">
                        <nav class=\"navbar navbar-expand-lg\">
                        
                        
                            
                           <h5 style=\"font-family: 'Comic Sans MS'; color:white\">MyWay</h5>
                           

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
                                        <a class=\"page-scroll\" href=\"#about\">About</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"#packges\">Packges</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"{{ path('app_reservation_location_index') }}\">location</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"{{ path('app_affichemoyen') }}\">Moyen de transport</a>
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

        
    </section>

    <!--====== HEADER PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->

    <section id=\"about\" class=\"about_area pt-130 pb-130\">
        <div class=\"about_wrapper\">
            
            <div class=\"container\">
            
    <br>

    
                
                    
                       {% block continu %}
                        {% endblock  %}

    </section>

    
    <section id=\"footer\" class=\"footer_area\" style=\"background-color:#8DD3BB;\">
        <div class=\"footer_widget pt-80 pb-130\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 order-md-1 order-lg-1\">
                        <div class=\"footer_about mt-50\">
                            <a href=\"#\"><img src=\"assets/front/images/logo.png\" alt=\"MyWay\"></a>
                            <p>Lorem ipsum dolor sifsddt amet, conse tetur sadipscing elitr, sed diam onumy eirmod tempor invidunt ut labore et dolore magna aliquya.</p>
                            <ul class=\"social\">
                                <li><a class=\"social_1\" href=\"javascript:void(0)\"><i class=\"lni lni-facebook-original\"></i></a></li>
                                <li><a class=\"social_2\" href=\"javascript:void(0)\"><i class=\"lni lni-twitter-original\"></i></a></li>
                                <li><a class=\"social_3\" href=\"javascript:void(0)\"><i class=\"lni lni-instagram-original\"></i></a></li>
                                <li><a class=\"social_4\" href=\"javascript:void(0)\"><i class=\"lni lni-linkedin-original\"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class=\"col-lg-4 col-md-12 order-md-3 order-lg-2\">
                        <div class=\"footer_link_wrapper d-flex flex-wrap\">
                            <div class=\"footer_link mt-45\">
                                <h4 class=\"footer_title\">Quick Link</h4>
                                <ul class=\"link\">
                                    <li><a href=\"javascript:void(0)\">Home</a></li>
                                    <li><a href=\"javascript:void(0)\">About</a></li>
                                    <li><a href=\"javascript:void(0)\">Trip Pacakge</a></li>
                                    <li><a href=\"javascript:void(0)\">Services</a></li>
                                    <li><a href=\"javascript:void(0)\">Gallery</a></li>
                                </ul>
                            </div> <!-- footer link -->
                            <div class=\"footer_link mt-45\">
                                <h4 class=\"footer_title\">Support</h4>
                                <ul class=\"link\">
                                    <li><a href=\"javascript:void(0)\">Customer Support</a></li>
                                    <li><a href=\"javascript:void(0)\">Privacy & Policy</a></li>
                                    <li><a href=\"javascript:void(0)\">Terms & Condition</a></li>
                                    <li><a href=\"javascript:void(0)\">Forum</a></li>
                                    <li><a href=\"javascript:void(0)\">Tour Guide</a></li>
                                </ul>
                            </div> <!-- footer link -->
                        </div> <!-- footer link wrapper -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 order-md-2 order-lg-3\">
                        <div class=\"footer_subscribe mt-45\">
                            <h4 class=\"footer_title\">Subscribe Newsletter</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed diam.</p>
                            <div class=\"subscribe_form\">
                                <form action=\"#\">
                                    <input type=\"text\" placeholder=\"Enter email\">
                                    <button><i class=\"lni lni-arrow-right\"></i></button>
                                </form>
                            </div>
                        </div> <!-- footer subscribe -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <p class=\"text-center mt-90\">Designed and Developed by <a href=\"#\">UIdeck</a></p>
        </div> <!-- footer widget -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href=\"#\" class=\"back-to-top\"><i class=\"lni lni-chevron-up\"></i></a>
</body>
{% endblock %}
</html>
{% endblock %}
", "continufront/index.html.twig", "C:\\Users\\Admin\\Desktop\\auth\\templates\\continufront\\index.html.twig");
    }
}
