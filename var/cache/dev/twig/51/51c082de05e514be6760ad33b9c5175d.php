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
class __TwigTemplate_d94f8cdee92520aac840dac8c75e32d6 extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "user/index.html.twig", 1);
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

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
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start');
        echo "
                  <div class=\"flex row align-content-center\" >
                      ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "field_name", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control border", "placeholder" => "Search"]]);
        echo "
                      <button type=\"submit\" class=\"btn btn-primary mt-3\">Submit</button>
                  </div>
                ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
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
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 52
            echo "            <tr>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 58)) ? ("Yes") : ("No"));
            echo "</td>
                <td><img style=\"border-radius:50%\" width=\"36\" height=\"36\" src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 59))), "html", null, true);
            echo "\" /></td>
                ";
            // line 60
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 60))) {
                // line 61
                echo "                    <td><b>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 61), "role", [], "any", false, false, false, 61), "html", null, true);
                echo "</b></td>
                ";
            } else {
                // line 63
                echo "                    <td><b>NOT ASSIGNED</b></td>
                ";
            }
            // line 65
            echo "
                <td>
                    <a class=\"btn btn-sm btn-info\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">show</a>
                    <a class=\"btn btn-sm btn-";
            // line 68
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 68)) ? ("danger") : ("info"));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 68)) ? ("Disable") : ("Activate"));
            echo "</a>
                    <a class=\"btn btn-sm btn-behance\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_role", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">Change Role</a>
                    <a class=\"btn btn-sm btn-dark\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_pdf", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\">PDF</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </tbody>
    </table>
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
        return array (  230 => 78,  221 => 74,  212 => 70,  208 => 69,  200 => 68,  196 => 67,  192 => 65,  188 => 63,  182 => 61,  180 => 60,  176 => 59,  172 => 58,  168 => 57,  164 => 56,  160 => 55,  156 => 54,  152 => 53,  149 => 52,  144 => 51,  118 => 28,  112 => 25,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}User index{% endblock %}

{% block body %}


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

{% endblock %}
", "user/index.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\user\\index.html.twig");
    }
}
