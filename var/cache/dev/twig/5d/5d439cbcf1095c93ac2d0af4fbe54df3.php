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

/* registration/login.html.twig */
class __TwigTemplate_cff835d3d2ca0d7553c088e1e0f0ea5f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/login.html.twig"));

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
  <link href=\"fatma/assets/css/nucleo-icons.css\" rel=\"stylesheet\" />
  <link href=\"fatma/assets/css/nucleo-svg.css\" rel=\"stylesheet\" />
  <!-- Font Awesome Icons -->
  <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
  <!-- Material Icons -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons+Round\" rel=\"stylesheet\">
  <!-- CSS Files -->
  <link id=\"pagestyle\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fatma/assets/css/material-dashboard.css?v=3.0.4"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
</head>


<body class=\"\">
  <div class=\"container position-sticky z-index-sticky top-0\">
    <div class=\"row\">
      <div class=\"col-12\">
        <!-- Navbar -->
        
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
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "                </div>

                <div class=\"card-footer text-center pt-0 px-lg-2 px-1\">
                  <p class=\"mb-2 text-sm mx-auto\">
                   froget password ?
                    <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class=\"text-info text-gradient font-weight-bold\">reset</a>
                  </p>
                </div>
                
                
                <div class=\"card-footer text-center pt-0 px-lg-2 px-1\">
                  <p class=\"mb-2 text-sm mx-auto\">
                    Already have an account?
                    <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"text-primary text-gradient font-weight-bold\">Sign up</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
       
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fatma/assets/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fatma/assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fatma/assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fatma/assets/js/plugins/smooth-scrollbar.min.js"), "html", null, true);
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
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fatma/assets/js/material-dashboard.min.js?v=3.0.4"), "html", null, true);
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

    // line 50
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "                    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 51, $this->source); })())) {
            // line 52
            echo "                        <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })()), "messageKey", [], "any", false, false, false, 52), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })()), "messageData", [], "any", false, false, false, 52), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 54
        echo "
                    <form action=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                    

                      <div class=\"input-group input-group-outline mb-3\">
                        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"email\" placeholder=\"email\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "\">
                      </div>

                      <div class=\"input-group input-group-outline mb-3\">
                        <input class=\"form-control\" type=\"password\" id=\"password\" placeholder=\"passowrd\" name=\"password\">
                      </div>

                        ";
        // line 70
        echo "
                        <button  type=\"submit\" class=\"btn btn-primary\" style=\" width:300px; margin:1px; background-color:#8DD3BB; \">login</button>
                    </form>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 70,  231 => 61,  224 => 57,  219 => 55,  216 => 54,  210 => 52,  207 => 51,  197 => 50,  178 => 9,  164 => 114,  148 => 101,  144 => 100,  140 => 99,  136 => 98,  122 => 87,  111 => 79,  104 => 74,  102 => 50,  70 => 21,  57 => 10,  55 => 9,  45 => 1,);
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
  <link href=\"fatma/assets/css/nucleo-icons.css\" rel=\"stylesheet\" />
  <link href=\"fatma/assets/css/nucleo-svg.css\" rel=\"stylesheet\" />
  <!-- Font Awesome Icons -->
  <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
  <!-- Material Icons -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons+Round\" rel=\"stylesheet\">
  <!-- CSS Files -->
  <link id=\"pagestyle\" href=\"{{ asset('fatma/assets/css/material-dashboard.css?v=3.0.4') }}\" rel=\"stylesheet\" />
</head>


<body class=\"\">
  <div class=\"container position-sticky z-index-sticky top-0\">
    <div class=\"row\">
      <div class=\"col-12\">
        <!-- Navbar -->
        
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
                    {% if error %}
                        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}

                    <form action=\"{{ path('app_login') }}\" method=\"post\">

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                    

                      <div class=\"input-group input-group-outline mb-3\">
                        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"email\" placeholder=\"email\" value=\"{{ last_username }}\">
                      </div>

                      <div class=\"input-group input-group-outline mb-3\">
                        <input class=\"form-control\" type=\"password\" id=\"password\" placeholder=\"passowrd\" name=\"password\">
                      </div>

                        {# If you want to control the URL the user is redirected to on success
                        <input type=\"hidden\" name=\"_target_path\" value=\"/account\"> #}

                        <button  type=\"submit\" class=\"btn btn-primary\" style=\" width:300px; margin:1px; background-color:#8DD3BB; \">login</button>
                    </form>
                {% endblock %}
                </div>

                <div class=\"card-footer text-center pt-0 px-lg-2 px-1\">
                  <p class=\"mb-2 text-sm mx-auto\">
                   froget password ?
                    <a href=\"{{ path('app_forgot_password_request') }}\" class=\"text-info text-gradient font-weight-bold\">reset</a>
                  </p>
                </div>
                
                
                <div class=\"card-footer text-center pt-0 px-lg-2 px-1\">
                  <p class=\"mb-2 text-sm mx-auto\">
                    Already have an account?
                    <a href=\"{{ path('app_register') }}\" class=\"text-primary text-gradient font-weight-bold\">Sign up</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
       
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src=\"{{ asset('fatma/assets/js/core/popper.min.js') }}\"></script>
  <script src=\"{{ asset('fatma/assets/js/core/bootstrap.min.js') }}\"></script>
  <script src=\"{{ asset('fatma/assets/js/plugins/perfect-scrollbar.min.js') }}\"></script>
  <script src=\"{{ asset('fatma/assets/js/plugins/smooth-scrollbar.min.js') }}\"></script>
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
  <script src=\"{{ asset('fatma/assets/js/material-dashboard.min.js?v=3.0.4') }}\"></script>
</body>

</html>", "registration/login.html.twig", "C:\\Users\\Admin\\Desktop\\auth\\templates\\registration\\login.html.twig");
    }
}
