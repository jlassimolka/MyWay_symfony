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

/* registration/register.html.twig */
class __TwigTemplate_935239c32f4d0edb9b281ff7c5062c75 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>
    ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "  </title>
  <!--     Fonts and icons     -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700\" />
  <!-- Nucleo Icons -->
  <link href=\"assets/css/nucleo-icons.css\" rel=\"stylesheet\" />
  <link href=\"assets/css/nucleo-svg.css\" rel=\"stylesheet\" />
  <!-- Font Awesome Icons -->
  <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
  <!-- Material Icons -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons+Round\" rel=\"stylesheet\">
  <!-- CSS Files -->
  <link id=\"pagestyle\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/material-dashboard.css?v=3.0.4"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
</head>

<body class=\"\">
  <div class=\"container position-sticky z-index-sticky top-0\">
    <div class=\"row\">
      <div class=\"col-12\">
        <!-- Navbar -->
        <nav class=\"navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4\">
          <div class=\"container-fluid ps-2 pe-0\">
            <a class=\"navbar-brand font-weight-bolder ms-lg-0 ms-3 \" href=\"../pages/dashboard.html\">
              Material Dashboard 2
            </a>
            <button class=\"navbar-toggler shadow-none ms-2\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navigation\" aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon mt-2\">
                <span class=\"navbar-toggler-bar bar1\"></span>
                <span class=\"navbar-toggler-bar bar2\"></span>
                <span class=\"navbar-toggler-bar bar3\"></span>
              </span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navigation\">
              <ul class=\"navbar-nav mx-auto\">
                <li class=\"nav-item\">
                  <a class=\"nav-link d-flex align-items-center me-2 active\" aria-current=\"page\" href=\"../pages/dashboard.html\">
                    <i class=\"fa fa-chart-pie opacity-6 text-dark me-1\"></i>
                    Dashboard
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link me-2\" href=\"../pages/profile.html\">
                    <i class=\"fa fa-user opacity-6 text-dark me-1\"></i>
                    Profile
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link me-2\" href=\"../pages/sign-up.html\">
                    <i class=\"fas fa-user-circle opacity-6 text-dark me-1\"></i>
                    Sign Up
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link me-2\" href=\"../pages/sign-in.html\">
                    <i class=\"fas fa-key opacity-6 text-dark me-1\"></i>
                    Sign In
                  </a>
                </li>
              </ul>
              <ul class=\"navbar-nav d-lg-flex d-none\">
                <li class=\"nav-item d-flex align-items-center\">
                  <a class=\"btn btn-outline-primary btn-sm mb-0 me-2\" target=\"_blank\" href=\"https://www.creative-tim.com/builder/material?ref=navbar-dashboard\">Online Builder</a>
                </li>
                <li class=\"nav-item\">
                  <a href=\"https://www.creative-tim.com/product/material-dashboard\" class=\"btn btn-sm mb-0 me-1 bg-gradient-dark\">Free download</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class=\"main-content  mt-0\">
    <section>
      <div class=\"page-header min-vh-100\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column\">
              <div class=\"position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center\" style=\"background-image: url('assets/img/illustrations/illustration-signup.jpg'); background-size: cover;\">
              </div>
            </div>
            <div class=\"col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5\">
              <div class=\"card card-plain\">
              
                <div class=\"card-body\">

";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 146
        echo "
                </div>
                <div class=\"card-footer text-center pt-0 px-lg-2 px-1\">
                  <p class=\"mb-2 text-sm mx-auto\">
                    Already have an account?
                    <a href=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"text-primary text-gradient font-weight-bold\">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/smooth-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/material-dashboard.min.js?v=3.0.4"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 97
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 98
        echo "    <div class=\"card-header\">
        <h4 class=\"font-weight-bolder\">Sign Up</h4>
        <p class=\"mb-0\">Enter your information</p>
    </div>

    ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 103, $this->source); })()), 'form_start');
        echo "

    <div class=\"input-group input-group-outline mb-3\">
        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 106, $this->source); })()), "email", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "email"]]);
        echo "
        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 107, $this->source); })()), "email", [], "any", false, false, false, 107), 'errors');
        echo "
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 111, $this->source); })()), "password", [], "any", false, false, false, 111), "first", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "form-control password-field", "placeholder" => "password"]]);
        echo "
        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 112, $this->source); })()), "password", [], "any", false, false, false, 112), "first", [], "any", false, false, false, 112), 'errors');
        echo "
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 116, $this->source); })()), "password", [], "any", false, false, false, 116), "second", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "form-control password-field", "placeholder" => "confirm password"]]);
        echo "
        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 117, $this->source); })()), "password", [], "any", false, false, false, 117), "second", [], "any", false, false, false, 117), 'errors');
        echo "
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 121, $this->source); })()), "nom", [], "any", false, false, false, 121), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nom"]]);
        echo "
        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 122, $this->source); })()), "nom", [], "any", false, false, false, 122), 'errors');
        echo "
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 126, $this->source); })()), "prenom", [], "any", false, false, false, 126), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "prenom"]]);
        echo "
        ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 127, $this->source); })()), "prenom", [], "any", false, false, false, 127), 'errors');
        echo "
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 131, $this->source); })()), "phone", [], "any", false, false, false, 131), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "+216"]]);
        echo "
        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 132, $this->source); })()), "phone", [], "any", false, false, false, 132), 'errors');
        echo "
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 136, $this->source); })()), "image", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "form-control-file"]]);
        echo "
        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 137, $this->source); })()), "image", [], "any", false, false, false, 137), 'errors');
        echo "
    </div>

    <div class=\"text-center\">
        <button type=\"submit\" class=\"btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0\">Sign Up</button>
    </div>

    ";
        // line 144
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 144, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 144,  326 => 137,  322 => 136,  315 => 132,  311 => 131,  304 => 127,  300 => 126,  293 => 122,  289 => 121,  282 => 117,  278 => 116,  271 => 112,  267 => 111,  260 => 107,  256 => 106,  250 => 103,  243 => 98,  233 => 97,  214 => 9,  200 => 178,  184 => 165,  180 => 164,  176 => 163,  172 => 162,  158 => 151,  151 => 146,  149 => 97,  70 => 21,  57 => 10,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>
    {% block title %}Register{% endblock %}
  </title>
  <!--     Fonts and icons     -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700\" />
  <!-- Nucleo Icons -->
  <link href=\"assets/css/nucleo-icons.css\" rel=\"stylesheet\" />
  <link href=\"assets/css/nucleo-svg.css\" rel=\"stylesheet\" />
  <!-- Font Awesome Icons -->
  <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
  <!-- Material Icons -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons+Round\" rel=\"stylesheet\">
  <!-- CSS Files -->
  <link id=\"pagestyle\" href=\"{{ asset('assets/css/material-dashboard.css?v=3.0.4') }}\" rel=\"stylesheet\" />
</head>

<body class=\"\">
  <div class=\"container position-sticky z-index-sticky top-0\">
    <div class=\"row\">
      <div class=\"col-12\">
        <!-- Navbar -->
        <nav class=\"navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4\">
          <div class=\"container-fluid ps-2 pe-0\">
            <a class=\"navbar-brand font-weight-bolder ms-lg-0 ms-3 \" href=\"../pages/dashboard.html\">
              Material Dashboard 2
            </a>
            <button class=\"navbar-toggler shadow-none ms-2\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navigation\" aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon mt-2\">
                <span class=\"navbar-toggler-bar bar1\"></span>
                <span class=\"navbar-toggler-bar bar2\"></span>
                <span class=\"navbar-toggler-bar bar3\"></span>
              </span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navigation\">
              <ul class=\"navbar-nav mx-auto\">
                <li class=\"nav-item\">
                  <a class=\"nav-link d-flex align-items-center me-2 active\" aria-current=\"page\" href=\"../pages/dashboard.html\">
                    <i class=\"fa fa-chart-pie opacity-6 text-dark me-1\"></i>
                    Dashboard
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link me-2\" href=\"../pages/profile.html\">
                    <i class=\"fa fa-user opacity-6 text-dark me-1\"></i>
                    Profile
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link me-2\" href=\"../pages/sign-up.html\">
                    <i class=\"fas fa-user-circle opacity-6 text-dark me-1\"></i>
                    Sign Up
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link me-2\" href=\"../pages/sign-in.html\">
                    <i class=\"fas fa-key opacity-6 text-dark me-1\"></i>
                    Sign In
                  </a>
                </li>
              </ul>
              <ul class=\"navbar-nav d-lg-flex d-none\">
                <li class=\"nav-item d-flex align-items-center\">
                  <a class=\"btn btn-outline-primary btn-sm mb-0 me-2\" target=\"_blank\" href=\"https://www.creative-tim.com/builder/material?ref=navbar-dashboard\">Online Builder</a>
                </li>
                <li class=\"nav-item\">
                  <a href=\"https://www.creative-tim.com/product/material-dashboard\" class=\"btn btn-sm mb-0 me-1 bg-gradient-dark\">Free download</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class=\"main-content  mt-0\">
    <section>
      <div class=\"page-header min-vh-100\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column\">
              <div class=\"position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center\" style=\"background-image: url('assets/img/illustrations/illustration-signup.jpg'); background-size: cover;\">
              </div>
            </div>
            <div class=\"col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5\">
              <div class=\"card card-plain\">
              
                <div class=\"card-body\">

{% block body %}
    <div class=\"card-header\">
        <h4 class=\"font-weight-bolder\">Sign Up</h4>
        <p class=\"mb-0\">Enter your information</p>
    </div>

    {{ form_start(registrationForm) }}

    <div class=\"input-group input-group-outline mb-3\">
        {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'email'}}) }}
        {{ form_errors(registrationForm.email) }}
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        {{ form_widget(registrationForm.password.first, {'attr': {'class': 'form-control password-field', 'placeholder': 'password' }}) }}
        {{ form_errors(registrationForm.password.first) }}
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        {{ form_widget(registrationForm.password.second, {'attr': {'class': 'form-control password-field', 'placeholder': 'confirm password' }}) }}
        {{ form_errors(registrationForm.password.second) }}
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        {{ form_widget(registrationForm.nom, {'attr': {'class': 'form-control', 'placeholder': 'nom' }}) }}
        {{ form_errors(registrationForm.nom) }}
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        {{ form_widget(registrationForm.prenom, {'attr': {'class': 'form-control', 'placeholder': 'prenom' }}) }}
        {{ form_errors(registrationForm.prenom) }}
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        {{ form_widget(registrationForm.phone, {'attr': {'class': 'form-control', 'placeholder': '+216' }}) }}
        {{ form_errors(registrationForm.phone) }}
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        {{ form_widget(registrationForm.image, {'attr': {'class': 'form-control-file'}}) }}
        {{ form_errors(registrationForm.image) }}
    </div>

    <div class=\"text-center\">
        <button type=\"submit\" class=\"btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0\">Sign Up</button>
    </div>

    {{ form_end(registrationForm) }}
{% endblock %}

                </div>
                <div class=\"card-footer text-center pt-0 px-lg-2 px-1\">
                  <p class=\"mb-2 text-sm mx-auto\">
                    Already have an account?
                    <a href=\"{{ path('app_login') }}\" class=\"text-primary text-gradient font-weight-bold\">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src=\"{{ asset('assets/js/core/popper.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/core/bootstrap.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}\"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src=\"{{ asset('assets/js/material-dashboard.min.js?v=3.0.4') }}\"></script>
</body>

</html>", "registration/register.html.twig", "D:\\files\\web work\\student symphony\\auth\\templates\\registration\\register.html.twig");
    }
}
