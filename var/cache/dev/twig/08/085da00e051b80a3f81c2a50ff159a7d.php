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

/* baseFront.html.twig */
class __TwigTemplate_f1d442cf6c94b1ab202ac1e9a4b0b1df extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    
    <!--====== Title ======-->
    <title>My Way</title>
    
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!--====== Favicon Icon ======-->
    <link rel=\"shortcut icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/favicon.png"), "html", null, true);
        echo "\" type=\"image/png\">
        
        
    <!--====== Animate CSS ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/animate.css"), "html", null, true);
        echo "\">
        
    <!--====== Nice Select CSS ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/nice-select.css"), "html", null, true);
        echo "\">
        
        
    <!--====== Line Icons CSS ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/LineIcons.2.0.css"), "html", null, true);
        echo "\">
        
    <!--====== Bootstrap CSS ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/bootstrap.4.5.2.min.css"), "html", null, true);
        echo "\">
    
    <!--====== Default CSS ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/default.css"), "html", null, true);
        echo "\">
    
    <!--====== Style CSS ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/style.css"), "html", null, true);
        echo "\">
    
</head>

<body>
    <!--[if IE]>
    <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class=\"preloader\">
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
                            <a class=\"navbar-brand\" >
                            <h5 style=\"font-family: 'Comic Sans MS'; color:white\">MyWay</h5>
                                ";
        // line 76
        echo "                            </a>
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"toggler-icon\"></span>
                                <span class=\"toggler-icon\"></span>
                                <span class=\"toggler-icon\"></span>
                            </button>

                            <div class=\"collapse navbar-collapse sub-menu-bar\">
                                <ul id=\"nav\" class=\"navbar-nav ml-auto\">
                                     <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a>
                                    </li>
                                    <li class=\"nav-item active\">
                                        <a class=\"page-scroll\" href=\"#home\">Trajet</a>
                                    </li>
                                   <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affichemoyen");
        echo "\">Moyen de transport</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        echo "\">Réclamation</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_location_index");
        echo "\">Location</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_guide");
        echo "\">Guide</a>
                                    </li>
                                      <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_chauffeur");
        echo "\">Chauffeur </a>
                                    </li>
                                    ";
        // line 113
        echo "                                    
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->

        <div id=\"home\" class=\"header_slider\">
            <div class=\"single_slider bg_cover d-flex align-items-center\" style=\"background-image: url(assets/front/images/backgroundfront.jpg)\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-8\">
                            <div class=\"slider_content\">
                                <h2 class=\"slider_title wow fadeInLeftBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.2s\">Explorer le monde avec<span> My Way</span></h2>
                                <p class=\"wow fadeInLeftBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.5s\">Cherchez votre trajet et bien plus</p>
                               
                            </div> <!-- slider content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->
        </div> <!-- header slider -->
    </section>

    <!--====== HEADER PART ENDS ======-->

    <!--====== CONTACT PART ENDS ======-->
  
<!--====== Front molka S ======-->
<br>
<br>
";
        // line 146
        $this->displayBlock('body', $context, $blocks);
        // line 148
        echo "

   
    <!--====== FOOTER PART START ======-->

    <section id=\"footer\" class=\"footer_area\" style=\"background-color:#8DD3BB;\">
        <div class=\"footer_widget pt-80 pb-130\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 order-md-1 order-lg-1\">
                        <div class=\"footer_about mt-50\">
                            <a href=\"#\"><img src=\"assets/front/images/logo.png\" alt=\"MyWay\"></a>
                             <p>Avec  notre application voyagez sans être perdu dans les villes et économisez avec les moyens de transport publics.</p> 
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
            ";
        // line 209
        echo "        </div> <!-- footer widget -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href=\"#\" class=\"back-to-top\"><i class=\"lni lni-chevron-up\"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->
    
    <!--====== PART START ======-->

<!--
    <section class=\"\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-\">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->





    <!--====== Jquery js ======-->
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/modernizr-3.7.1.min.js"), "html", null, true);
        echo "\"></script>
    
    <!--====== Bootstrap js ======-->
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.4.5.2.min.js"), "html", null, true);
        echo "\"></script>

    
    <!--====== Scrolling Nav js ======-->
    <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/scrolling-nav.js"), "html", null, true);
        echo "\"></script>
    
    <!--====== Counter Up js ======-->
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    
    <!--====== Nice Select js ======-->
    <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    
    <!--====== WOW js ======-->
    <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    
    <!--====== Main js ======-->
    <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        echo "\"></script>
    
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 146
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
        return "baseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 146,  377 => 264,  371 => 261,  365 => 258,  359 => 255,  355 => 254,  349 => 251,  345 => 250,  338 => 246,  334 => 245,  328 => 242,  324 => 241,  290 => 209,  228 => 148,  226 => 146,  191 => 113,  186 => 104,  180 => 101,  174 => 98,  168 => 95,  162 => 92,  153 => 86,  141 => 76,  97 => 34,  91 => 31,  85 => 28,  79 => 25,  72 => 21,  66 => 18,  59 => 14,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    
    <!--====== Title ======-->
    <title>My Way</title>
    
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!--====== Favicon Icon ======-->
    <link rel=\"shortcut icon\" href=\"{{ asset('Front/images/favicon.png') }}\" type=\"image/png\">
        
        
    <!--====== Animate CSS ======-->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/animate.css') }}\">
        
    <!--====== Nice Select CSS ======-->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/nice-select.css') }}\">
        
        
    <!--====== Line Icons CSS ======-->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/LineIcons.2.0.css') }}\">
        
    <!--====== Bootstrap CSS ======-->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/bootstrap.4.5.2.min.css') }}\">
    
    <!--====== Default CSS ======-->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/default.css') }}\">
    
    <!--====== Style CSS ======-->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/style.css') }}\">
    
</head>

<body>
    <!--[if IE]>
    <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class=\"preloader\">
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
                            <a class=\"navbar-brand\" >
                            <h5 style=\"font-family: 'Comic Sans MS'; color:white\">MyWay</h5>
                                {# <img src=\"{{ asset('Front/images/logo.svg') }}\" alt=\"Logo\"> #}
                            </a>
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"toggler-icon\"></span>
                                <span class=\"toggler-icon\"></span>
                                <span class=\"toggler-icon\"></span>
                            </button>

                            <div class=\"collapse navbar-collapse sub-menu-bar\">
                                <ul id=\"nav\" class=\"navbar-nav ml-auto\">
                                     <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"{{ path('app_home') }}\">Home</a>
                                    </li>
                                    <li class=\"nav-item active\">
                                        <a class=\"page-scroll\" href=\"#home\">Trajet</a>
                                    </li>
                                   <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"{{ path('app_affichemoyen') }}\">Moyen de transport</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"{{path('app_reclamation_index') }}\">Réclamation</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"{{ path('app_reservation_location_index') }}\">Location</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"{{ path('app_front_guide')}}\">Guide</a>
                                    </li>
                                      <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"{{ path('app_front_chauffeur')}}\">Chauffeur </a>
                                    </li>
                                    {# <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"{{ path('app_user_edit', {'id': user.id}) }}\">Profile</a>

                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"{{ path('app_logout') }}\">Deconexion</a>
                                    </li> #}
                                    
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->

        <div id=\"home\" class=\"header_slider\">
            <div class=\"single_slider bg_cover d-flex align-items-center\" style=\"background-image: url(assets/front/images/backgroundfront.jpg)\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-8\">
                            <div class=\"slider_content\">
                                <h2 class=\"slider_title wow fadeInLeftBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.2s\">Explorer le monde avec<span> My Way</span></h2>
                                <p class=\"wow fadeInLeftBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.5s\">Cherchez votre trajet et bien plus</p>
                               
                            </div> <!-- slider content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->
        </div> <!-- header slider -->
    </section>

    <!--====== HEADER PART ENDS ======-->

    <!--====== CONTACT PART ENDS ======-->
  
<!--====== Front molka S ======-->
<br>
<br>
{% block body %}
{% endblock %}


   
    <!--====== FOOTER PART START ======-->

    <section id=\"footer\" class=\"footer_area\" style=\"background-color:#8DD3BB;\">
        <div class=\"footer_widget pt-80 pb-130\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 order-md-1 order-lg-1\">
                        <div class=\"footer_about mt-50\">
                            <a href=\"#\"><img src=\"assets/front/images/logo.png\" alt=\"MyWay\"></a>
                             <p>Avec  notre application voyagez sans être perdu dans les villes et économisez avec les moyens de transport publics.</p> 
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
            {# <p class=\"text-center mt-90\">Designed and Developed by <a href=\"#\">UIdeck</a></p> #}
        </div> <!-- footer widget -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href=\"#\" class=\"back-to-top\"><i class=\"lni lni-chevron-up\"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->
    
    <!--====== PART START ======-->

<!--
    <section class=\"\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-\">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->





    <!--====== Jquery js ======-->
    <script src=\"{{ asset('Front/js/vendor/jquery-1.12.4.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/vendor/modernizr-3.7.1.min.js') }}\"></script>
    
    <!--====== Bootstrap js ======-->
    <script src=\"{{ asset('Front/js/popper.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/bootstrap.4.5.2.min.js') }}\"></script>

    
    <!--====== Scrolling Nav js ======-->
    <script src=\"{{ asset('Front/js/jquery.easing.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/scrolling-nav.js') }}\"></script>
    
    <!--====== Counter Up js ======-->
    <script src=\"{{ asset('Front/js/waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/jquery.counterup.min.js') }}\"></script>
    
    <!--====== Nice Select js ======-->
    <script src=\"{{ asset('Front/js/jquery.nice-select.min.js') }}\"></script>
    
    <!--====== WOW js ======-->
    <script src=\"{{ asset('Front/js/wow.min.js') }}\"></script>
    
    <!--====== Main js ======-->
    <script src=\"{{ asset('Front/js/main.js')}}\"></script>
    
</body>

</html>", "baseFront.html.twig", "C:\\Users\\Admin\\Desktop\\auth\\templates\\baseFront.html.twig");
    }
}
