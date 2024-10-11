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

/* homeadmin/index.html.twig */
class __TwigTemplate_829aa81b02561e9607d69daa386a513f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'tableau' => [$this, 'block_tableau'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homeadmin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homeadmin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homeadmin/index.html.twig", 1);
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

        echo "Hello HomeadminController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <body class=\"g-sidenav-show  bg-gray-100\" >
    

    

    
      <aside class=\"sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   \" style=\" background-color:#8DD3BB; \" id=\"sidenav-main\">

  <div class=\"sidenav-header\" style=\" background-color:white \">
    <i class=\"fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
    <a class=\"navbar-brand m-0\" href=\" https://demos.creative-tim.com/material-dashboard/pages/dashboard \" target=\"_blank\">
      <img height=\"auto\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/logo/logo.png"), "html", null, true);
        echo "\" width=\"70\"   class=\"navbar-brand-img h-100\" alt=\"main_logo\">
      <span class=\"ms-1 font-weight-bold text\" style=\"color:#8DD3BB; \" >My Way</span>
    </a>
  </div>


  <hr class=\"horizontal light mt-0 mb-2\" style=\" background-color:#8DD3BB; \">

  <div class=\"collapse navbar-collapse  w-auto \" style=\" background-color:#8DD3BB; \" id=\"sidenav-collapse-main\">
    <ul class=\"navbar-nav\">
      

      
        

          

          
  
<li class=\"nav-item\">
  <a class=\"nav-link text-white \" >
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
        <i class=\"material-icons opacity-10\">dashboard</i>
      </div>
    
    <span class=\"nav-link-text ms-1\">Dashboard</span>
  </a>
</li>

  
<li class=\"nav-item\">
  <a class=\"nav-link text-white \">
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\" >
        <i class=\"material-icons opacity-10\"  >table_view</i>
      </div>
    
    <span class=\"nav-link-text ms-1\" >Tables</span>
  </a>
</li>

  
<li class=\"nav-item\">
  <a class=\"nav-link text-white \" >
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
        <i class=\"material-icons opacity-10\">receipt_long</i>
      </div>
    
    <span class=\"nav-link-text ms-1\">Billing</span>
  </a>
</li>

  
<li class=\"nav-item\">
  <a class=\"nav-link text-white \" >
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
        <i class=\"material-icons opacity-10\">view_in_ar</i>
      </div>
    
    <span class=\"nav-link-text ms-1\">Virtual Reality</span>
  </a>
</li>

  <li class=\"nav-item\" >
  <a class=\"nav-link text-white \"href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moyentp_index");
        echo "\" >
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
        <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/logo/bus.png"), "html", null, true);
        echo "\" height=\"20px\" width=\"20px\"><i class=\"material-icons opacity-10\"  ></i>
      </div>
    
    <span class=\"nav-link-text ms-1\" href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moyentp_index");
        echo "\">Transport</span>
  </a>
</li>
<li class=\"nav-item\">
  <a class=\"nav-link text-white \" href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ligne_index");
        echo "\" >
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
        <i class=\"material-icons opacity-10\">format_textdirection_r_to_l</i>
      </div>
    
    <span class=\"nav-link-text ms-1\" href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ligne_index");
        echo "\">Ligne</span>
  </a>
</li>

  


  
    <li class=\"nav-item mt-3\">
      <h6 class=\"ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8\">Account pages</h6>
    </li>
  
<li class=\"nav-item\">
  <a class=\"nav-link text-white \" >
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
        <i class=\"material-icons opacity-10\">person</i>
      </div>
    
    <span class=\"nav-link-text ms-1\">Profile</span>
  </a>
</li>

  
<li class=\"nav-item\">
  <a class=\"nav-link text-white \" >
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
        <i class=\"material-icons opacity-10\">login</i>
      </div>
    
    <span class=\"nav-link-text ms-1\">Sign In</span>
  </a>
</li>

  
<li class=\"nav-item\">
  <a class=\"nav-link text-white \" href=\"./sign-up.html\">
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
        <i class=\"material-icons opacity-10\">assignment</i>
      </div>
    
    <span class=\"nav-link-text ms-1\">Sign Up</span>
  </a>
</li>



          

        
      
    </ul>
  </div>
  
  
    
  </div>
  
</aside>

      <main class=\"main-content border-radius-lg \">
        <!-- Navbar -->

<nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl\" id=\"navbarBlur\" data-scroll=\"true\">
  <div class=\"container-fluid py-1 px-3\">
    <nav aria-label=\"breadcrumb\">
      
      <h1>My Way</h1>
      <h6 class=\"font-weight-bolder mb-0\">Espace Administrateur</h6>
      
    </nav>
    <div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
      <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
          
         
          
      </div>
      <ul class=\"navbar-nav  justify-content-end\">
       
        <li class=\"nav-item d-flex align-items-center\">
          <a href=\"./pages/sign-in.html\" class=\"nav-link text-body font-weight-bold px-0\">
            <i class=\"fa fa-user me-sm-1\"></i>
            
            <span class=\"d-sm-inline d-none\">Sign In</span>
            
          </a>
        </li>
        <li class=\"nav-item d-xl-none ps-3 d-flex align-items-center\">
          <a href=\"javascript:;\" class=\"nav-link text-body p-0\" id=\"iconNavbarSidenav\">
            <div class=\"sidenav-toggler-inner\">
              <i class=\"sidenav-toggler-line\"></i>
              <i class=\"sidenav-toggler-line\"></i>
              <i class=\"sidenav-toggler-line\"></i>
            </div>
          </a>
        </li>
        <li class=\"nav-item px-3 d-flex align-items-center\">
          <a href=\"javascript:;\" class=\"nav-link text-body p-0\">
            <i class=\"fa fa-cog fixed-plugin-button-nav cursor-pointer\"></i>
          </a>
        </li>
        <li class=\"nav-item dropdown pe-2 d-flex align-items-center\">
          <a href=\"javascript:;\" class=\"nav-link text-body p-0\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            <i class=\"fa fa-bell cursor-pointer\"></i>
          </a>

          <ul class=\"dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4\" aria-labelledby=\"dropdownMenuButton\">
            <li class=\"mb-2\">
              <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                <div class=\"d-flex py-1\">
                  <div class=\"my-auto\">
                    <img src=\"./assets/img/team-2.jpg\" class=\"avatar avatar-sm  me-3 \">
                  </div>
                  <div class=\"d-flex flex-column justify-content-center\">
                    <h6 class=\"text-sm font-weight-normal mb-1\">
                      <span class=\"font-weight-bold\">New message</span> from Laur
                    </h6>
                    <p class=\"text-xs text-secondary mb-0\">
                      <i class=\"fa fa-clock me-1\"></i>
                      13 minutes ago
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <li class=\"mb-2\">
              <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                <div class=\"d-flex py-1\">
                  <div class=\"my-auto\">
                    <img src=\"./assets/img/small-logos/logo-spotify.svg\" class=\"avatar avatar-sm bg-gradient-dark  me-3 \">
                  </div>
                  <div class=\"d-flex flex-column justify-content-center\">
                    <h6 class=\"text-sm font-weight-normal mb-1\">
                      <span class=\"font-weight-bold\">New album</span> by Travis Scott
                    </h6>
                    <p class=\"text-xs text-secondary mb-0\">
                      <i class=\"fa fa-clock me-1\"></i>
                      1 day
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                <div class=\"d-flex py-1\">
                  <div class=\"avatar avatar-sm bg-gradient-secondary  me-3  my-auto\">
                    <svg width=\"12px\" height=\"12px\" viewBox=\"0 0 43 36\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"> <title>credit-card</title> <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"> <g transform=\"translate(-2169.000000, -745.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\"> <g transform=\"translate(1716.000000, 291.000000)\"> <g transform=\"translate(453.000000, 454.000000)\"> <path class=\"color-background\" d=\"M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z\" opacity=\"0.593633743\"></path> <path class=\"color-background\" d=\"M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z\"></path> </g> </g> </g> </g> </svg>
                  </div>
                  <div class=\"d-flex flex-column justify-content-center\">
                    <h6 class=\"text-sm font-weight-normal mb-1\">
                      Payment successfully completed
                    </h6>
                    <p class=\"text-xs text-secondary mb-0\">
                      <i class=\"fa fa-clock me-1\"></i>
                      2 days
                    </p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- End Navbar -->


     <div class=\"row gy-5 g-xl-8\">  


<div class=\"content d-flex flex-column flex-column-fluid\" id=\"kt_content\">
\t\t\t\t\t\t<!--begin::Container-->
\t\t\t\t\t\t<div class=\"container-xxl\" id=\"kt_content_container\">
\t\t\t\t\t\t\t<!--begin::Row-->
\t\t\t\t\t\t\t<div class=\"row gy-5 g-xl-8\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-xl-4\">
\t\t\t\t\t\t\t\t\t<!--begin::Mixed Widget 2-->

\t\t\t\t\t\t\t\t\t<!--end::Mixed Widget 2-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Col-->
\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t<!--end::Row-->
\t\t\t\t\t\t\t<!--begin::Row-->
\t\t\t\t<div class=\"row gy-5 g-xl-8\">



           ";
        // line 296
        $this->displayBlock('tableau', $context, $blocks);
        // line 299
        echo "                  </div>

            

       
        

       
</div>

     
\t\t\t\t\t\t\t\t<!--begin::Col-->
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t<!--begin::Tables Widget 3-->
\t\t\t\t\t\t\t\t
                 
\t\t\t\t\t\t\t\t\t<!--end::Tables Widget 3-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Col-->
\t\t\t\t\t\t\t\t<!--begin::Col-->
\t\t\t\t\t\t\t\t<div class=\"col-xl-4\">
\t\t\t\t\t\t\t\t\t<!--begin::List Widget 1-->

\t\t\t\t\t\t\t\t\t<!--end::List Widget 1-->
\t\t\t\t\t\t\t\t</div>
                </div>
                </div>
\t\t\t\t\t\t\t\t<!--end::Col-->
\t\t\t\t\t\t
      

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 296
    public function block_tableau($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableau"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableau"));

        // line 297
        echo "                 
\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "homeadmin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 297,  442 => 296,  401 => 299,  399 => 296,  201 => 101,  192 => 95,  185 => 91,  179 => 88,  173 => 85,  103 => 18,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeadminController!{% endblock %}

{% block body %}

  <body class=\"g-sidenav-show  bg-gray-100\" >
    

    

    
      <aside class=\"sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   \" style=\" background-color:#8DD3BB; \" id=\"sidenav-main\">

  <div class=\"sidenav-header\" style=\" background-color:white \">
    <i class=\"fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
    <a class=\"navbar-brand m-0\" href=\" https://demos.creative-tim.com/material-dashboard/pages/dashboard \" target=\"_blank\">
      <img height=\"auto\" src=\"{{ asset(\"Back/logo/logo.png\")}}\" width=\"70\"   class=\"navbar-brand-img h-100\" alt=\"main_logo\">
      <span class=\"ms-1 font-weight-bold text\" style=\"color:#8DD3BB; \" >My Way</span>
    </a>
  </div>


  <hr class=\"horizontal light mt-0 mb-2\" style=\" background-color:#8DD3BB; \">

  <div class=\"collapse navbar-collapse  w-auto \" style=\" background-color:#8DD3BB; \" id=\"sidenav-collapse-main\">
    <ul class=\"navbar-nav\">
      

      
        

          

          
  
<li class=\"nav-item\">
  <a class=\"nav-link text-white \" >
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
        <i class=\"material-icons opacity-10\">dashboard</i>
      </div>
    
    <span class=\"nav-link-text ms-1\">Dashboard</span>
  </a>
</li>

  
<li class=\"nav-item\">
  <a class=\"nav-link text-white \">
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\" >
        <i class=\"material-icons opacity-10\"  >table_view</i>
      </div>
    
    <span class=\"nav-link-text ms-1\" >Tables</span>
  </a>
</li>

  
<li class=\"nav-item\">
  <a class=\"nav-link text-white \" >
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
        <i class=\"material-icons opacity-10\">receipt_long</i>
      </div>
    
    <span class=\"nav-link-text ms-1\">Billing</span>
  </a>
</li>

  
<li class=\"nav-item\">
  <a class=\"nav-link text-white \" >
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
        <i class=\"material-icons opacity-10\">view_in_ar</i>
      </div>
    
    <span class=\"nav-link-text ms-1\">Virtual Reality</span>
  </a>
</li>

  <li class=\"nav-item\" >
  <a class=\"nav-link text-white \"href=\"{{path('app_moyentp_index')}}\" >
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
        <img src=\"{{ asset(\"Back/logo/bus.png\")}}\" height=\"20px\" width=\"20px\"><i class=\"material-icons opacity-10\"  ></i>
      </div>
    
    <span class=\"nav-link-text ms-1\" href=\"{{path('app_moyentp_index')}}\">Transport</span>
  </a>
</li>
<li class=\"nav-item\">
  <a class=\"nav-link text-white \" href=\"{{path('app_ligne_index')}}\" >
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
        <i class=\"material-icons opacity-10\">format_textdirection_r_to_l</i>
      </div>
    
    <span class=\"nav-link-text ms-1\" href=\"{{path('app_ligne_index')}}\">Ligne</span>
  </a>
</li>

  


  
    <li class=\"nav-item mt-3\">
      <h6 class=\"ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8\">Account pages</h6>
    </li>
  
<li class=\"nav-item\">
  <a class=\"nav-link text-white \" >
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
        <i class=\"material-icons opacity-10\">person</i>
      </div>
    
    <span class=\"nav-link-text ms-1\">Profile</span>
  </a>
</li>

  
<li class=\"nav-item\">
  <a class=\"nav-link text-white \" >
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
        <i class=\"material-icons opacity-10\">login</i>
      </div>
    
    <span class=\"nav-link-text ms-1\">Sign In</span>
  </a>
</li>

  
<li class=\"nav-item\">
  <a class=\"nav-link text-white \" href=\"./sign-up.html\">
    
      <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
        <i class=\"material-icons opacity-10\">assignment</i>
      </div>
    
    <span class=\"nav-link-text ms-1\">Sign Up</span>
  </a>
</li>



          

        
      
    </ul>
  </div>
  
  
    
  </div>
  
</aside>

      <main class=\"main-content border-radius-lg \">
        <!-- Navbar -->

<nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl\" id=\"navbarBlur\" data-scroll=\"true\">
  <div class=\"container-fluid py-1 px-3\">
    <nav aria-label=\"breadcrumb\">
      
      <h1>My Way</h1>
      <h6 class=\"font-weight-bolder mb-0\">Espace Administrateur</h6>
      
    </nav>
    <div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
      <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
          
         
          
      </div>
      <ul class=\"navbar-nav  justify-content-end\">
       
        <li class=\"nav-item d-flex align-items-center\">
          <a href=\"./pages/sign-in.html\" class=\"nav-link text-body font-weight-bold px-0\">
            <i class=\"fa fa-user me-sm-1\"></i>
            
            <span class=\"d-sm-inline d-none\">Sign In</span>
            
          </a>
        </li>
        <li class=\"nav-item d-xl-none ps-3 d-flex align-items-center\">
          <a href=\"javascript:;\" class=\"nav-link text-body p-0\" id=\"iconNavbarSidenav\">
            <div class=\"sidenav-toggler-inner\">
              <i class=\"sidenav-toggler-line\"></i>
              <i class=\"sidenav-toggler-line\"></i>
              <i class=\"sidenav-toggler-line\"></i>
            </div>
          </a>
        </li>
        <li class=\"nav-item px-3 d-flex align-items-center\">
          <a href=\"javascript:;\" class=\"nav-link text-body p-0\">
            <i class=\"fa fa-cog fixed-plugin-button-nav cursor-pointer\"></i>
          </a>
        </li>
        <li class=\"nav-item dropdown pe-2 d-flex align-items-center\">
          <a href=\"javascript:;\" class=\"nav-link text-body p-0\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            <i class=\"fa fa-bell cursor-pointer\"></i>
          </a>

          <ul class=\"dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4\" aria-labelledby=\"dropdownMenuButton\">
            <li class=\"mb-2\">
              <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                <div class=\"d-flex py-1\">
                  <div class=\"my-auto\">
                    <img src=\"./assets/img/team-2.jpg\" class=\"avatar avatar-sm  me-3 \">
                  </div>
                  <div class=\"d-flex flex-column justify-content-center\">
                    <h6 class=\"text-sm font-weight-normal mb-1\">
                      <span class=\"font-weight-bold\">New message</span> from Laur
                    </h6>
                    <p class=\"text-xs text-secondary mb-0\">
                      <i class=\"fa fa-clock me-1\"></i>
                      13 minutes ago
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <li class=\"mb-2\">
              <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                <div class=\"d-flex py-1\">
                  <div class=\"my-auto\">
                    <img src=\"./assets/img/small-logos/logo-spotify.svg\" class=\"avatar avatar-sm bg-gradient-dark  me-3 \">
                  </div>
                  <div class=\"d-flex flex-column justify-content-center\">
                    <h6 class=\"text-sm font-weight-normal mb-1\">
                      <span class=\"font-weight-bold\">New album</span> by Travis Scott
                    </h6>
                    <p class=\"text-xs text-secondary mb-0\">
                      <i class=\"fa fa-clock me-1\"></i>
                      1 day
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                <div class=\"d-flex py-1\">
                  <div class=\"avatar avatar-sm bg-gradient-secondary  me-3  my-auto\">
                    <svg width=\"12px\" height=\"12px\" viewBox=\"0 0 43 36\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"> <title>credit-card</title> <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"> <g transform=\"translate(-2169.000000, -745.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\"> <g transform=\"translate(1716.000000, 291.000000)\"> <g transform=\"translate(453.000000, 454.000000)\"> <path class=\"color-background\" d=\"M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z\" opacity=\"0.593633743\"></path> <path class=\"color-background\" d=\"M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z\"></path> </g> </g> </g> </g> </svg>
                  </div>
                  <div class=\"d-flex flex-column justify-content-center\">
                    <h6 class=\"text-sm font-weight-normal mb-1\">
                      Payment successfully completed
                    </h6>
                    <p class=\"text-xs text-secondary mb-0\">
                      <i class=\"fa fa-clock me-1\"></i>
                      2 days
                    </p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- End Navbar -->


     <div class=\"row gy-5 g-xl-8\">  


<div class=\"content d-flex flex-column flex-column-fluid\" id=\"kt_content\">
\t\t\t\t\t\t<!--begin::Container-->
\t\t\t\t\t\t<div class=\"container-xxl\" id=\"kt_content_container\">
\t\t\t\t\t\t\t<!--begin::Row-->
\t\t\t\t\t\t\t<div class=\"row gy-5 g-xl-8\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-xl-4\">
\t\t\t\t\t\t\t\t\t<!--begin::Mixed Widget 2-->

\t\t\t\t\t\t\t\t\t<!--end::Mixed Widget 2-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Col-->
\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t<!--end::Row-->
\t\t\t\t\t\t\t<!--begin::Row-->
\t\t\t\t<div class=\"row gy-5 g-xl-8\">



           {% block tableau %}
                 
\t\t\t\t\t\t\t\t\t{% endblock %}
                  </div>

            

       
        

       
</div>

     
\t\t\t\t\t\t\t\t<!--begin::Col-->
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t<!--begin::Tables Widget 3-->
\t\t\t\t\t\t\t\t
                 
\t\t\t\t\t\t\t\t\t<!--end::Tables Widget 3-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Col-->
\t\t\t\t\t\t\t\t<!--begin::Col-->
\t\t\t\t\t\t\t\t<div class=\"col-xl-4\">
\t\t\t\t\t\t\t\t\t<!--begin::List Widget 1-->

\t\t\t\t\t\t\t\t\t<!--end::List Widget 1-->
\t\t\t\t\t\t\t\t</div>
                </div>
                </div>
\t\t\t\t\t\t\t\t<!--end::Col-->
\t\t\t\t\t\t
      

{% endblock %}
", "homeadmin/index.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\homeadmin\\index.html.twig");
    }
}
