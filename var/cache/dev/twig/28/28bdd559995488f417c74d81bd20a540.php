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

/* front/index.html.twig */
class __TwigTemplate_d21ea455af59f9ca230cbeef6d667c4c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/index.html.twig", 1);
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
        // line 510
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
                                <img src=\"assets/front/images/logo.svg\" alt=\"Logo\">
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
                                        <a class=\"page-scroll\" href=\"#about\">About</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"#packges\">Packges</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"#services\">Services</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"\">Moyen de transport</a>
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
            <div class=\"single_slider bg_cover d-flex align-items-center\" style=\"background-image: url(assets/front/images/hero-area.jpg)\">
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
    
    <!--====== ABOUT PART START ======-->

    <section id=\"about\" class=\"about_area pt-130 pb-130\">
        <div class=\"about_wrapper\">
            <div class=\"about_image bg_cover\" style=\"background-image: url(assets/front/images/about_image.jpg)\"></div> <!-- about image -->
            <div class=\"container\">
                <div class=\"row justify-content-end\">
                    <div class=\"col-lg-6\">
                        <div class=\"about_content\">
                            <div class=\"section_title\">
                                <h3 class=\"title\">About Us <br> TraveLand in <span>Numbers</span></h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod tempor invidunt ut labore et dolore magna aliqyam era sed diam voluptua. At vero eos et accusam etjusto duo dolres etea reb. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                            </div> <!-- section title -->
                            <a href=\"javascript:void(0)\" class=\"main-btn\">Read More</a>
                        </div> <!-- about content -->
                        <div class=\"about_counter d-flex flex-wrap\">
                            <div class=\"single_counter counter_1 d-flex justify-content-center align-items-center wow fadeInUpBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.2s\">
                                <div class=\"counter_wrapper\">
                                    <span class=\"counter\">534</span>
                                    <p>Trips Done</p>
                                </div> <!-- single wrapper -->
                            </div> <!-- single counter -->
                            
                            <div class=\"single_counter counter_2 d-flex justify-content-center align-items-center wow fadeInUpBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.5s\">
                                <div class=\"counter_wrapper\">
                                    <span class=\"counter\">424</span>
                                    <p>Corporate Clients</p>
                                </div> <!-- single wrapper -->
                            </div> <!-- single counter -->
                            
                            <div class=\"single_counter counter_2 d-flex justify-content-center align-items-center wow fadeInUpBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.8s\">
                                <div class=\"counter_wrapper\">
                                    <span class=\"counter\">35</span>
                                    <p>Visited Countries</p>
                                </div> <!-- single wrapper -->
                            </div> <!-- single counter -->
                            
                            <div class=\"single_counter counter_1 d-flex justify-content-center align-items-center wow fadeInUpBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"1.1s\">
                                <div class=\"counter_wrapper\">
                                    <span class=\"counter\">15</span>
                                    <p>Team Members</p>
                                </div> <!-- single wrapper -->
                            </div> <!-- single counter -->
                        </div> <!-- about_counter -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- about wrapper -->
    </section>

    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== DESTINATION PART START ======-->

    <section id=\"packges\" class=\"destination_area pt-130 pb-130\">

                    <div class=\"section_title text-center pb-25\">
                        <h3 class=\"title\">You are using free lite version</h3>
                        <p>Please, purchase full version of the template to get all pages, features and permission to remove footer credits</p></br>
                        <a href=\"https://rebrand.ly/traveland-ud/\" rel=\"nofollow\" class=\"main-btn\">Purchase Now</a>

                    </div> 
                    
                    <!-- section title -->

    </section>

    <!--====== DESTINATION PART ENDS ======-->
    
    <!--====== SERVICES PART START ======-->

    <section id=\"services\" class=\"services_area pt-120\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6\">
                    <div class=\"section_title text-center pb-25\">
                        <h3 class=\"title\">Service We Provide</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod tempor invidunt ut labore et dolore magna </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_service mt-30 text-center wow fadeInUpBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.2s\">
                        <div class=\"services_icon\">
                            <i class=\"lni lni-apartment\"></i>
                        </div>
                        <div class=\"services_content\">
                            <h4 class=\"title\">Hotel Booking</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_service mt-30 text-center wow fadeInUpBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.4s\">
                        <div class=\"services_icon\">
                            <i class=\"lni lni-plane\"></i>
                        </div>
                        <div class=\"services_content\">
                            <h4 class=\"title\">Flight Booking</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_service mt-30 text-center wow fadeInUpBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.6s\">
                        <div class=\"services_icon\">
                            <i class=\"lni lni-ship\"></i>
                        </div>
                        <div class=\"services_content\">
                            <h4 class=\"title\">Ship Booking</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_service mt-30 text-center wow fadeInUpBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.8s\">
                        <div class=\"services_icon\">
                            <i class=\"lni lni-car-alt\"></i>
                        </div>
                        <div class=\"services_content\">
                            <h4 class=\"title\">Car Booking</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->
    
    <!--====== GALLERY PART START ======-->

    <section id=\"gallery\" class=\"gallery_area pt-120 pb-130\">
    </section>

    <!--====== GALLERY PART ENDS ======-->
    
    <!--====== TEAM PART START ======-->

    <section id=\"team\" class=\"team_area pt-120 pb-130\">

              
                    <div class=\"section_title text-center pb-25\">
                        <h3 class=\"title\">You are using free lite version</h3>
                        <p>Please, purchase full version of the template to get all pages, features and permission to remove footer credits</p></br>
                        <a href=\"https://rebrand.ly/traveland-ud/\" rel=\"nofollow\" class=\"main-btn\">Purchase Now</a>

                    </div> <!-- section title -->


    </section>

    <!--====== TEAM PART ENDS ======-->
    
    <!--====== TESTIMONIAL PART START ======-->

    <section id=\"testimonial\" class=\"testimonial_area pt-120\">
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->
    
    <!--====== BLOG PART START ======-->

    <section id=\"blog\" class=\"blog_area pt-120 pb-130\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6\">
                    <div class=\"section_title text-center pb-25\">
                        <h3 class=\"title\">Recent Blog Post</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod tempor invidunt ut labore et dolore magna </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"single_blog mt-30\">
                        <div class=\"blog_image\">
                            <img src=\"assets/images/blog-1.jpg\" alt=\"blog\">
                        </div>
                        <div class=\"blog_content\">
                            <div class=\"blog_meta\">
                                <ul>
                                    <li>Posted by: <a href=\"javascript:void(0)\">Michle Smith</a></li>
                                    <li>14 June 2023</li>
                                </ul>
                            </div>
                            <h4 class=\"blog_title\"><a href=\"javascript:void(0)\">Tonumy eirmod tempor invidunt ut labore et dolore magn aaliq yam erat, sed diam voluptua.</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magn aaliq yam erat, sed diam voluptua. At vero eos et accusam et justo dolores  ea rebum Stet clita kasd gubergren sea.</p>
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"single_blog d-sm-flex mt-30\">
                        <div class=\"blog_image\">
                            <img src=\"assets/images/blog-2.jpg\" alt=\"blog\">
                        </div>
                        <div class=\"blog_content blog_content_2 media-body\">
                            <h4 class=\"blog_title\"><a href=\"javascript:void(0)\">Tonumy eirmod temporinvi unt ut labore et dolore</a></h4>
                            <p>Lorem ipsum dolor sit ametcon setetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                            <a href=\"javascript:void(0)\" class=\"more\">Read More</a>
                        </div>
                    </div> <!-- single blog -->
                    
                    <div class=\"single_blog d-sm-flex mt-30\">
                        <div class=\"blog_image\">
                            <img src=\"assets/images/blog-3.jpg\" alt=\"blog\">
                        </div>
                        <div class=\"blog_content blog_content_2 media-body\">
                            <h4 class=\"blog_title\"><a href=\"javascript:void(0)\">Tonumy eirmod temporinvi unt ut labore et dolore</a></h4>
                            <p>Lorem ipsum dolor sit ametcon setetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                            <a href=\"javascript:void(0)\" class=\"more\">Read More</a>
                        </div>
                    </div> <!-- single blog -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->

    <section id=\"contact\" class=\"contact_area pt-120 pb-130\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6\">
                    <div class=\"section_title text-center pb-25\">
                        <h3 class=\"title\">Get in Touch</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod tempor invidunt ut labore et dolore magna </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class=\"contact_form\">
                <form action=\"assets/contact.php\" method=\"POST\" id=\"contact-form\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"single_form\">
                                <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name\">
                            </div> <!-- single form -->
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"single_form\">
                                <input type=\"text\" name=\"phone\" id=\"phone\" placeholder=\"Phone\">
                            </div> <!-- single form -->
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"single_form\">
                                <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Email\">
                            </div> <!-- single form -->
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"single_form\">
                                <select id=\"country\" name=\"country\">
                                    <option value=\"0\" selected disabled>Select Trip</option>
                                    <option value=\"1\">Trip 1</option>
                                    <option value=\"2\">Trip 2</option>
                                    <option value=\"3\">Trip 3</option>
                                    <option value=\"4\">Trip 4</option>
                                    <option value=\"5\">Trip 5</option>
                                </select>
                            </div> <!-- single form -->
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"single_form\">
                                <textarea name=\"message\" id=\"message\" placeholder=\"Message\"></textarea>
                            </div> <!-- single form -->
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"single_form\">
                                <button type=\"submit\" class=\"main-btn\">Send Message</button>
                            </div> <!-- single form -->
                        </div>
                    </div> <!-- row -->
                    <p class=\"form-message pt-30\"></p>
                </form>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->

    <section id=\"footer\" class=\"footer_area\">
        <div class=\"footer_widget pt-80 pb-130\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 order-md-1 order-lg-1\">
                        <div class=\"footer_about mt-50\">
                            <a href=\"#\"><img src=\"assets/images/logo.svg\" alt=\"logo\"></a>
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

    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 66,  215 => 65,  177 => 34,  167 => 33,  138 => 12,  128 => 11,  109 => 5,  98 => 510,  96 => 65,  92 => 63,  90 => 33,  87 => 32,  85 => 11,  78 => 6,  76 => 5,  72 => 3,  62 => 2,  39 => 1,);
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
                                <img src=\"assets/front/images/logo.svg\" alt=\"Logo\">
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
                                        <a class=\"page-scroll\" href=\"#about\">About</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"#packges\">Packges</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"#services\">Services</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"page-scroll\" href=\"\">Moyen de transport</a>
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
            <div class=\"single_slider bg_cover d-flex align-items-center\" style=\"background-image: url(assets/front/images/hero-area.jpg)\">
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
    
    <!--====== ABOUT PART START ======-->

    <section id=\"about\" class=\"about_area pt-130 pb-130\">
        <div class=\"about_wrapper\">
            <div class=\"about_image bg_cover\" style=\"background-image: url(assets/front/images/about_image.jpg)\"></div> <!-- about image -->
            <div class=\"container\">
                <div class=\"row justify-content-end\">
                    <div class=\"col-lg-6\">
                        <div class=\"about_content\">
                            <div class=\"section_title\">
                                <h3 class=\"title\">About Us <br> TraveLand in <span>Numbers</span></h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod tempor invidunt ut labore et dolore magna aliqyam era sed diam voluptua. At vero eos et accusam etjusto duo dolres etea reb. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                            </div> <!-- section title -->
                            <a href=\"javascript:void(0)\" class=\"main-btn\">Read More</a>
                        </div> <!-- about content -->
                        <div class=\"about_counter d-flex flex-wrap\">
                            <div class=\"single_counter counter_1 d-flex justify-content-center align-items-center wow fadeInUpBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.2s\">
                                <div class=\"counter_wrapper\">
                                    <span class=\"counter\">534</span>
                                    <p>Trips Done</p>
                                </div> <!-- single wrapper -->
                            </div> <!-- single counter -->
                            
                            <div class=\"single_counter counter_2 d-flex justify-content-center align-items-center wow fadeInUpBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.5s\">
                                <div class=\"counter_wrapper\">
                                    <span class=\"counter\">424</span>
                                    <p>Corporate Clients</p>
                                </div> <!-- single wrapper -->
                            </div> <!-- single counter -->
                            
                            <div class=\"single_counter counter_2 d-flex justify-content-center align-items-center wow fadeInUpBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.8s\">
                                <div class=\"counter_wrapper\">
                                    <span class=\"counter\">35</span>
                                    <p>Visited Countries</p>
                                </div> <!-- single wrapper -->
                            </div> <!-- single counter -->
                            
                            <div class=\"single_counter counter_1 d-flex justify-content-center align-items-center wow fadeInUpBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"1.1s\">
                                <div class=\"counter_wrapper\">
                                    <span class=\"counter\">15</span>
                                    <p>Team Members</p>
                                </div> <!-- single wrapper -->
                            </div> <!-- single counter -->
                        </div> <!-- about_counter -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- about wrapper -->
    </section>

    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== DESTINATION PART START ======-->

    <section id=\"packges\" class=\"destination_area pt-130 pb-130\">

                    <div class=\"section_title text-center pb-25\">
                        <h3 class=\"title\">You are using free lite version</h3>
                        <p>Please, purchase full version of the template to get all pages, features and permission to remove footer credits</p></br>
                        <a href=\"https://rebrand.ly/traveland-ud/\" rel=\"nofollow\" class=\"main-btn\">Purchase Now</a>

                    </div> 
                    
                    <!-- section title -->

    </section>

    <!--====== DESTINATION PART ENDS ======-->
    
    <!--====== SERVICES PART START ======-->

    <section id=\"services\" class=\"services_area pt-120\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6\">
                    <div class=\"section_title text-center pb-25\">
                        <h3 class=\"title\">Service We Provide</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod tempor invidunt ut labore et dolore magna </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_service mt-30 text-center wow fadeInUpBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.2s\">
                        <div class=\"services_icon\">
                            <i class=\"lni lni-apartment\"></i>
                        </div>
                        <div class=\"services_content\">
                            <h4 class=\"title\">Hotel Booking</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_service mt-30 text-center wow fadeInUpBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.4s\">
                        <div class=\"services_icon\">
                            <i class=\"lni lni-plane\"></i>
                        </div>
                        <div class=\"services_content\">
                            <h4 class=\"title\">Flight Booking</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_service mt-30 text-center wow fadeInUpBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.6s\">
                        <div class=\"services_icon\">
                            <i class=\"lni lni-ship\"></i>
                        </div>
                        <div class=\"services_content\">
                            <h4 class=\"title\">Ship Booking</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_service mt-30 text-center wow fadeInUpBig\" data-wow-duration=\"1.3s\" data-wow-delay=\"0.8s\">
                        <div class=\"services_icon\">
                            <i class=\"lni lni-car-alt\"></i>
                        </div>
                        <div class=\"services_content\">
                            <h4 class=\"title\">Car Booking</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->
    
    <!--====== GALLERY PART START ======-->

    <section id=\"gallery\" class=\"gallery_area pt-120 pb-130\">
    </section>

    <!--====== GALLERY PART ENDS ======-->
    
    <!--====== TEAM PART START ======-->

    <section id=\"team\" class=\"team_area pt-120 pb-130\">

              
                    <div class=\"section_title text-center pb-25\">
                        <h3 class=\"title\">You are using free lite version</h3>
                        <p>Please, purchase full version of the template to get all pages, features and permission to remove footer credits</p></br>
                        <a href=\"https://rebrand.ly/traveland-ud/\" rel=\"nofollow\" class=\"main-btn\">Purchase Now</a>

                    </div> <!-- section title -->


    </section>

    <!--====== TEAM PART ENDS ======-->
    
    <!--====== TESTIMONIAL PART START ======-->

    <section id=\"testimonial\" class=\"testimonial_area pt-120\">
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->
    
    <!--====== BLOG PART START ======-->

    <section id=\"blog\" class=\"blog_area pt-120 pb-130\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6\">
                    <div class=\"section_title text-center pb-25\">
                        <h3 class=\"title\">Recent Blog Post</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod tempor invidunt ut labore et dolore magna </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"single_blog mt-30\">
                        <div class=\"blog_image\">
                            <img src=\"assets/images/blog-1.jpg\" alt=\"blog\">
                        </div>
                        <div class=\"blog_content\">
                            <div class=\"blog_meta\">
                                <ul>
                                    <li>Posted by: <a href=\"javascript:void(0)\">Michle Smith</a></li>
                                    <li>14 June 2023</li>
                                </ul>
                            </div>
                            <h4 class=\"blog_title\"><a href=\"javascript:void(0)\">Tonumy eirmod tempor invidunt ut labore et dolore magn aaliq yam erat, sed diam voluptua.</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magn aaliq yam erat, sed diam voluptua. At vero eos et accusam et justo dolores  ea rebum Stet clita kasd gubergren sea.</p>
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"single_blog d-sm-flex mt-30\">
                        <div class=\"blog_image\">
                            <img src=\"assets/images/blog-2.jpg\" alt=\"blog\">
                        </div>
                        <div class=\"blog_content blog_content_2 media-body\">
                            <h4 class=\"blog_title\"><a href=\"javascript:void(0)\">Tonumy eirmod temporinvi unt ut labore et dolore</a></h4>
                            <p>Lorem ipsum dolor sit ametcon setetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                            <a href=\"javascript:void(0)\" class=\"more\">Read More</a>
                        </div>
                    </div> <!-- single blog -->
                    
                    <div class=\"single_blog d-sm-flex mt-30\">
                        <div class=\"blog_image\">
                            <img src=\"assets/images/blog-3.jpg\" alt=\"blog\">
                        </div>
                        <div class=\"blog_content blog_content_2 media-body\">
                            <h4 class=\"blog_title\"><a href=\"javascript:void(0)\">Tonumy eirmod temporinvi unt ut labore et dolore</a></h4>
                            <p>Lorem ipsum dolor sit ametcon setetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                            <a href=\"javascript:void(0)\" class=\"more\">Read More</a>
                        </div>
                    </div> <!-- single blog -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->

    <section id=\"contact\" class=\"contact_area pt-120 pb-130\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6\">
                    <div class=\"section_title text-center pb-25\">
                        <h3 class=\"title\">Get in Touch</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod tempor invidunt ut labore et dolore magna </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class=\"contact_form\">
                <form action=\"assets/contact.php\" method=\"POST\" id=\"contact-form\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"single_form\">
                                <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name\">
                            </div> <!-- single form -->
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"single_form\">
                                <input type=\"text\" name=\"phone\" id=\"phone\" placeholder=\"Phone\">
                            </div> <!-- single form -->
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"single_form\">
                                <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Email\">
                            </div> <!-- single form -->
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"single_form\">
                                <select id=\"country\" name=\"country\">
                                    <option value=\"0\" selected disabled>Select Trip</option>
                                    <option value=\"1\">Trip 1</option>
                                    <option value=\"2\">Trip 2</option>
                                    <option value=\"3\">Trip 3</option>
                                    <option value=\"4\">Trip 4</option>
                                    <option value=\"5\">Trip 5</option>
                                </select>
                            </div> <!-- single form -->
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"single_form\">
                                <textarea name=\"message\" id=\"message\" placeholder=\"Message\"></textarea>
                            </div> <!-- single form -->
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"single_form\">
                                <button type=\"submit\" class=\"main-btn\">Send Message</button>
                            </div> <!-- single form -->
                        </div>
                    </div> <!-- row -->
                    <p class=\"form-message pt-30\"></p>
                </form>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->

    <section id=\"footer\" class=\"footer_area\">
        <div class=\"footer_widget pt-80 pb-130\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 order-md-1 order-lg-1\">
                        <div class=\"footer_about mt-50\">
                            <a href=\"#\"><img src=\"assets/images/logo.svg\" alt=\"logo\"></a>
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
", "front/index.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\front\\index.html.twig");
    }
}
