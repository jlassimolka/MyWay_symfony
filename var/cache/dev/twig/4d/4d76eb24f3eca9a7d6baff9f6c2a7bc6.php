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

/* user/index.html.twig */
class __TwigTemplate_5399991adb6c401e93b12183cfb442d7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'tableau' => [$this, 'block_tableau'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "user/index.html.twig", 1);
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

        echo "User index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_tableau($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableau"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableau"));

        // line 6
        echo "<div class=\"col-xl-0\">

\t\t\t\t\t\t\t\t\t<!--begin::Charts Widget 1-->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!--begin::Header-->
\t\t\t\t\t\t\t\t\t\t
                                        <div class=\"container\">

                                        <div class=\"card card-xl-stretch mb-5 mb-xl-8\" style=\"width: 1000px;\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Header-->
\t\t\t\t\t\t\t\t\t\t


<div class=\"container-fluid py-4\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"card my-4\">
          <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
            <div class=\"bg-gradient-info shadow-info border-radius-lg pt-4 pb-3\">
              <h6 class=\"text-white text-capitalize ps-3\">Liste des Users</h6>
            </div>
          </div>
          <div class=\"card-body px-0 pb-2\">

<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6 text-center\">
            <form method=\"POST\">
                ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start');
        echo "
                  <div class=\"flex row align-content-center\" >
                      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "field_name", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control border", "placeholder" => "Search"]]);
        echo "
                      <button type=\"submit\" class=\"btn btn-primary mt-3\">Submit</button>
                  </div>
                ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
            </form>
        </div>
    </div>
</div>

            <div class=\"table-responsive p-0\">

    <table class=\"table\">
        <thead>
            <tr>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >Id</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >Nom</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >Prenom</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >NumTel</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >Email</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >IsActive</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >Image</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >role</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 62, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 63
            echo "            <tr>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 69)) ? ("Yes") : ("No"));
            echo "</td>
                <td><img style=\"border-radius:50%\" width=\"36\" height=\"36\" src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 70))), "html", null, true);
            echo "\" /></td>
                ";
            // line 71
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 71))) {
                // line 72
                echo "                    <td><b>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 72), "role", [], "any", false, false, false, 72), "html", null, true);
                echo "</b></td>
                ";
            } else {
                // line 74
                echo "                    <td><b>NOT ASSIGNED</b></td>
                ";
            }
            // line 76
            echo "
                <td>
                    <a class=\"btn btn-sm btn-info\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\">show</a>
                    <a class=\"btn btn-sm btn-";
            // line 79
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 79)) ? ("danger") : ("info"));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 79)) ? ("Disable") : ("Activate"));
            echo "</a>
                    <a class=\"btn btn-sm btn-behance\" href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_role", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\">Change Role</a>
                    <a class=\"btn btn-sm btn-dark\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_pdf", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\">PDF</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 85
            echo "            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "        </tbody>
    </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  </div>
        </div>
      </div>
    

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 89,  232 => 85,  223 => 81,  219 => 80,  211 => 79,  207 => 78,  203 => 76,  199 => 74,  193 => 72,  191 => 71,  187 => 70,  183 => 69,  179 => 68,  175 => 67,  171 => 66,  167 => 65,  163 => 64,  160 => 63,  155 => 62,  129 => 39,  123 => 36,  118 => 34,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}User index{% endblock %}

{% block tableau %}
<div class=\"col-xl-0\">

\t\t\t\t\t\t\t\t\t<!--begin::Charts Widget 1-->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!--begin::Header-->
\t\t\t\t\t\t\t\t\t\t
                                        <div class=\"container\">

                                        <div class=\"card card-xl-stretch mb-5 mb-xl-8\" style=\"width: 1000px;\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Header-->
\t\t\t\t\t\t\t\t\t\t


<div class=\"container-fluid py-4\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"card my-4\">
          <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
            <div class=\"bg-gradient-info shadow-info border-radius-lg pt-4 pb-3\">
              <h6 class=\"text-white text-capitalize ps-3\">Liste des Users</h6>
            </div>
          </div>
          <div class=\"card-body px-0 pb-2\">

<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6 text-center\">
            <form method=\"POST\">
                {{ form_start(form) }}
                  <div class=\"flex row align-content-center\" >
                      {{ form_widget(form.field_name, {'attr': {'class': 'form-control border', 'placeholder': 'Search'}}) }}
                      <button type=\"submit\" class=\"btn btn-primary mt-3\">Submit</button>
                  </div>
                {{ form_end(form) }}
            </form>
        </div>
    </div>
</div>

            <div class=\"table-responsive p-0\">

    <table class=\"table\">
        <thead>
            <tr>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >Id</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >Nom</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >Prenom</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >NumTel</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >Email</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >IsActive</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >Image</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >role</th>
                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\" >actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.nom }}</td>
                <td>{{ user.prenom }}</td>
                <td>{{ user.phone }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.isActive ? 'Yes' : 'No' }}</td>
                <td><img style=\"border-radius:50%\" width=\"36\" height=\"36\" src=\"{{ asset(\"uploads/images/\" ~ user.image) }}\" /></td>
                {% if user.role is not null %}
                    <td><b>{{ user.role.role }}</b></td>
                {% else %}
                    <td><b>NOT ASSIGNED</b></td>
                {% endif %}

                <td>
                    <a class=\"btn btn-sm btn-info\" href=\"{{ path('app_user_show', {'id': user.id}) }}\">show</a>
                    <a class=\"btn btn-sm btn-{{ user.isActive ? \"danger\" : \"info\" }}\" href=\"{{ path('app_user_disable', {'id': user.id}) }}\">{{ user.isActive ? 'Disable' : 'Activate' }}</a>
                    <a class=\"btn btn-sm btn-behance\" href=\"{{ path('app_user_role', {'id': user.id}) }}\">Change Role</a>
                    <a class=\"btn btn-sm btn-dark\" href=\"{{ path('app_user_pdf', {'id': user.id}) }}\">PDF</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  </div>
        </div>
      </div>
    

{% endblock %}
", "user/index.html.twig", "C:\\Users\\Admin\\Desktop\\auth\\templates\\user\\index.html.twig");
    }
}
