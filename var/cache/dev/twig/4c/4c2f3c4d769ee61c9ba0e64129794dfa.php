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

/* ligne/edit.html.twig */
class __TwigTemplate_3bf26d9da8264023a604090f8c625d96 extends Template
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
        return "homeadmin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ligne/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ligne/edit.html.twig"));

        $this->parent = $this->loadTemplate("homeadmin/index.html.twig", "ligne/edit.html.twig", 1);
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

        echo "New Moyentp";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_tableau($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableau"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableau"));

        // line 7
        echo " 
    <div class=\"col-xl-0\">
    

        <!--begin::Charts Widget 1-->
        
            <!--begin::Header-->
            <div class=\"card-header border-0 pt-5\">
            <div class=\"container\">


        
        <!--begin::Tables Widget 3-->
        <div class=\"card card-xl-stretch mb-5 mb-xl-8\" style=\"max-width: 680px; border: 1px solid #d6d6d6; padding: 20px;\">
            <!--begin::Header-->
            <div class=\"card-header border-0 pt-5\">
             <h1 class=\"mb-5\">Modifier ligne</h1>

             <div class=\"row justify-content-center\">
                <div class=\"col-md-8\">
                    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
                    <div class=\"form-group\">
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "trajet", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Trajet"]);
        echo "
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "trajet", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control", "style" => "border: 1px solid #ccc;"]]);
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "trajet", [], "any", false, false, false, 31), 'errors');
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "moyentp", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Moyen de transport"]);
        echo "
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "moyentp", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "style" => "border: 1px solid #ccc;"]]);
        echo "
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "trajet", [], "any", false, false, false, 36), 'errors');
        echo "
                    </div>
                    <div class=\"form-group\">
                 
                    <button class=\"btn btn-primary\" style=\"width:300px; margin:1px; background-color:#8DD3BB; margin: 0 auto; display: block;\" type=\"submit\">Modifier</button>

                   
                    </button>
                  </div>
                
                    ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
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
        return "ligne/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 46,  137 => 36,  133 => 35,  129 => 34,  123 => 31,  119 => 30,  115 => 29,  110 => 27,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homeadmin/index.html.twig' %}

{% block title %}New Moyentp{% endblock %}


{% block tableau %}
 
    <div class=\"col-xl-0\">
    

        <!--begin::Charts Widget 1-->
        
            <!--begin::Header-->
            <div class=\"card-header border-0 pt-5\">
            <div class=\"container\">


        
        <!--begin::Tables Widget 3-->
        <div class=\"card card-xl-stretch mb-5 mb-xl-8\" style=\"max-width: 680px; border: 1px solid #d6d6d6; padding: 20px;\">
            <!--begin::Header-->
            <div class=\"card-header border-0 pt-5\">
             <h1 class=\"mb-5\">Modifier ligne</h1>

             <div class=\"row justify-content-center\">
                <div class=\"col-md-8\">
                    {{ form_start(form) }}
                    <div class=\"form-group\">
                        {{ form_label(form.trajet, 'Trajet', {'label_attr': {'class': 'control-label'}}) }}
                        {{ form_widget(form.trajet, {'attr': {'class': 'form-control','style': 'border: 1px solid #ccc;'}}) }}
                        {{ form_errors(form.trajet) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.moyentp, 'Moyen de transport', {'label_attr': {'class': 'control-label'}}) }}
                        {{ form_widget(form.moyentp, {'attr': {'class': 'form-control','style': 'border: 1px solid #ccc;'}}) }}
                        {{ form_errors(form.trajet) }}
                    </div>
                    <div class=\"form-group\">
                 
                    <button class=\"btn btn-primary\" style=\"width:300px; margin:1px; background-color:#8DD3BB; margin: 0 auto; display: block;\" type=\"submit\">Modifier</button>

                   
                    </button>
                  </div>
                
                    {{ form_end(form) }}
                </div>
             </div>
   
            </div>
        </div>
    </div>
{% endblock %}
", "ligne/edit.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\ligne\\edit.html.twig");
    }
}
