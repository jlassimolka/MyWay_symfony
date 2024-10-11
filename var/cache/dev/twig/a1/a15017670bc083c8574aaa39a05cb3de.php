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
class __TwigTemplate_e1aa7dabb3afb982783637167f4ba5eb extends Template
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
              <div class=\"position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center\" style=\"background-image: url('assets/front/images/logo.png'); background-size: cover;\">
              </div>
            </div>
            <div class=\"col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5\">
              <div class=\"card card-plain\">
              
                <div class=\"card-body\">

";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 97
        echo "
                </div>
                <div class=\"card-footer text-center pt-0 px-lg-2 px-1\">
                  <p class=\"mb-2 text-sm mx-auto\">
                    Already have an account?
                    <a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"text-primary text-gradient font-weight-bold\" style=\" background-color:#8DD3BB; \">Sign in</a>
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
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fatma/assets/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fatma/assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fatma/assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 116
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
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fatma/back/assets/js/material-dashboard.min.js?v=3.0.4"), "html", null, true);
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

    // line 48
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "    <div class=\"card-header\">
        <h4 class=\"font-weight-bolder\" >Sign Up</h4>
        <p class=\"mb-0\">Enter your information</p>
    </div>

    ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), 'form_start');
        echo "

    <div class=\"input-group input-group-outline mb-3\">
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "email"]]);
        echo "
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "email", [], "any", false, false, false, 58), 'errors');
        echo "
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "password", [], "any", false, false, false, 62), "first", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control password-field", "placeholder" => "password"]]);
        echo "
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "password", [], "any", false, false, false, 63), "first", [], "any", false, false, false, 63), 'errors');
        echo "
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "password", [], "any", false, false, false, 67), "second", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control password-field", "placeholder" => "confirm password"]]);
        echo "
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "password", [], "any", false, false, false, 68), "second", [], "any", false, false, false, 68), 'errors');
        echo "
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "nom", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nom"]]);
        echo "
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "nom", [], "any", false, false, false, 73), 'errors');
        echo "
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "prenom", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "prenom"]]);
        echo "
        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "prenom", [], "any", false, false, false, 78), 'errors');
        echo "
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "phone", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "+216"]]);
        echo "
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "phone", [], "any", false, false, false, 83), 'errors');
        echo "
    </div>

    <div class=\"input-group input-group-outline mb-3\">
        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), "image", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control-file"]]);
        echo "
        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 88, $this->source); })()), "image", [], "any", false, false, false, 88), 'errors');
        echo "
    </div>

    <div class=\"text-center\" >
        <button type=\"submit\" class=\"btn btn-primary\" style=\" width:300px; margin:1px; background-color:#8DD3BB; \">Sign Up</button>
    </div>

    ";
        // line 95
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 95, $this->source); })()), 'form_end');
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
        return array (  287 => 95,  277 => 88,  273 => 87,  266 => 83,  262 => 82,  255 => 78,  251 => 77,  244 => 73,  240 => 72,  233 => 68,  229 => 67,  222 => 63,  218 => 62,  211 => 58,  207 => 57,  201 => 54,  194 => 49,  184 => 48,  165 => 9,  151 => 129,  135 => 116,  131 => 115,  127 => 114,  123 => 113,  109 => 102,  102 => 97,  100 => 48,  70 => 21,  57 => 10,  55 => 9,  45 => 1,);
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
              <div class=\"position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center\" style=\"background-image: url('assets/front/images/logo.png'); background-size: cover;\">
              </div>
            </div>
            <div class=\"col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5\">
              <div class=\"card card-plain\">
              
                <div class=\"card-body\">

{% block body %}
    <div class=\"card-header\">
        <h4 class=\"font-weight-bolder\" >Sign Up</h4>
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

    <div class=\"text-center\" >
        <button type=\"submit\" class=\"btn btn-primary\" style=\" width:300px; margin:1px; background-color:#8DD3BB; \">Sign Up</button>
    </div>

    {{ form_end(registrationForm) }}
{% endblock %}

                </div>
                <div class=\"card-footer text-center pt-0 px-lg-2 px-1\">
                  <p class=\"mb-2 text-sm mx-auto\">
                    Already have an account?
                    <a href=\"{{ path('app_login') }}\" class=\"text-primary text-gradient font-weight-bold\" style=\" background-color:#8DD3BB; \">Sign in</a>
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
  <script src=\"{{ asset('fatma/back/assets/js/material-dashboard.min.js?v=3.0.4') }}\"></script>
</body>

</html>", "registration/register.html.twig", "C:\\Users\\Admin\\Desktop\\auth\\templates\\registration\\register.html.twig");
    }
}
