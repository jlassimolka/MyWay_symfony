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
class __TwigTemplate_bbd6087c6161654b49f2094935518b5c extends Template
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
    <title>TraveLand - Tour and Travel Agency Template</title>
    
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

    <section class=\"header_area\">
        <div class=\"header_navbar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <nav class=\"navbar navbar-expand-lg\">
                            <a class=\"navbar-brand\" href=\"index.html\">
                                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/logo.svg"), "html", null, true);
        echo "\" alt=\"Logo\">
                            </a>
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"toggler-icon\"></span>
                                <span class=\"toggler-icon\"></span>
                                <span class=\"toggler-icon\"></span>
                            </button>

                            <div class=\"collapse navbar-collapse sub-menu-bar\">
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

        <div id=\"home\" class=\"header_slider\">
            <div class=\"single_slider bg_cover d-flex align-items-center\" style=\"background-image: url(assets/images/hero-area.jpg)\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-8\">
                            <div class=\"slider_content\">
                                <h2 class=\"slider_title wow fadeInLeftBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.2s\">Explore The World with<span> TraveLand</span></h2>
                                <p class=\"wow fadeInLeftBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.5s\">Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidun dolore.</p>
                                <a href=\"javascript:void(0)\" class=\"main-btn wow fadeInLeftBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.8s\">Book Now</a>
                            </div> <!-- slider content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->
        </div> <!-- header slider -->
    </section>

    <!--====== HEADER PART ENDS ======-->

    <!--====== CONTACT PART ENDS ======-->
    ";
        // line 132
        $this->displayBlock('body', $context, $blocks);
        // line 134
        echo "    <!--====== FOOTER PART START ======-->

    <section id=\"footer\" class=\"footer_area\">
        <div class=\"footer_widget pt-80 pb-130\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 order-md-1 order-lg-1\">
                        <div class=\"footer_about mt-50\">
                            <a href=\"#\"><img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/logo.svg"), "html", null, true);
        echo "\" alt=\"logo\"></a>
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
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/modernizr-3.7.1.min.js"), "html", null, true);
        echo "\"></script>
    
    <!--====== Bootstrap js ======-->
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.4.5.2.min.js"), "html", null, true);
        echo "\"></script>

    
    <!--====== Scrolling Nav js ======-->
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/scrolling-nav.js"), "html", null, true);
        echo "\"></script>
    
    <!--====== Counter Up js ======-->
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    
    <!--====== Nice Select js ======-->
    <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    
    <!--====== WOW js ======-->
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    
    <!--====== Main js ======-->
    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        echo "\"></script>
    
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 132
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 133
        echo "    ";
        
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
        return array (  375 => 133,  365 => 132,  350 => 246,  344 => 243,  338 => 240,  332 => 237,  328 => 236,  322 => 233,  318 => 232,  311 => 228,  307 => 227,  301 => 224,  297 => 223,  213 => 142,  203 => 134,  201 => 132,  139 => 73,  97 => 34,  91 => 31,  85 => 28,  79 => 25,  72 => 21,  66 => 18,  59 => 14,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    
    <!--====== Title ======-->
    <title>TraveLand - Tour and Travel Agency Template</title>
    
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

    <section class=\"header_area\">
        <div class=\"header_navbar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <nav class=\"navbar navbar-expand-lg\">
                            <a class=\"navbar-brand\" href=\"index.html\">
                                <img src=\"{{ asset('Front/images/logo.svg') }}\" alt=\"Logo\">
                            </a>
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"toggler-icon\"></span>
                                <span class=\"toggler-icon\"></span>
                                <span class=\"toggler-icon\"></span>
                            </button>

                            <div class=\"collapse navbar-collapse sub-menu-bar\">
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

        <div id=\"home\" class=\"header_slider\">
            <div class=\"single_slider bg_cover d-flex align-items-center\" style=\"background-image: url(assets/images/hero-area.jpg)\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-8\">
                            <div class=\"slider_content\">
                                <h2 class=\"slider_title wow fadeInLeftBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.2s\">Explore The World with<span> TraveLand</span></h2>
                                <p class=\"wow fadeInLeftBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.5s\">Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidun dolore.</p>
                                <a href=\"javascript:void(0)\" class=\"main-btn wow fadeInLeftBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.8s\">Book Now</a>
                            </div> <!-- slider content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->
        </div> <!-- header slider -->
    </section>

    <!--====== HEADER PART ENDS ======-->

    <!--====== CONTACT PART ENDS ======-->
    {% block body %}
    {% endblock %}
    <!--====== FOOTER PART START ======-->

    <section id=\"footer\" class=\"footer_area\">
        <div class=\"footer_widget pt-80 pb-130\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 order-md-1 order-lg-1\">
                        <div class=\"footer_about mt-50\">
                            <a href=\"#\"><img src=\"{{ asset('Front/images/logo.svg') }}\" alt=\"logo\"></a>
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

</html>", "baseFront.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\baseFront.html.twig");
    }
}
