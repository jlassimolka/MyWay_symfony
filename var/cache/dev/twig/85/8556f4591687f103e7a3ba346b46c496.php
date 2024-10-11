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

/* moyentp/new.html.twig */
class __TwigTemplate_031a63272869a21f9217e7ef3cc91d83 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moyentp/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moyentp/new.html.twig"));

        $this->parent = $this->loadTemplate("homeadmin/index.html.twig", "moyentp/new.html.twig", 1);
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
             <h1>Ajouter moyen de transport</h1>
             <br>
               
                  
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
                  
                  <div class=\"form-group\">
               
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "matricule", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Matricule"]);
        echo "
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "matricule", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Saisir le matricule", "style" => "border: 1px solid #ccc;"]]);
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "matricule", [], "any", false, false, false, 33), 'errors');
        echo "
                  </div>
                  
                  <div class=\"form-group\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "type", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Type"]);
        echo "
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "type", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Saisir le type", "style" => "border: 1px solid #ccc;"]]);
        echo "
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "type", [], "any", false, false, false, 39), 'errors');
        echo "
                  </div>
                  
                  <div class=\"form-group\">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "nbreplace", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nombre de places"]);
        echo "
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "nbreplace", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Saisir le nombre de places", "style" => "border: 1px solid #ccc;"]]);
        echo "
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "nbreplace", [], "any", false, false, false, 45), 'errors');
        echo "
                  </div>
                  
                  <div class=\"form-group\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "prix_ticket", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prix du ticket"]);
        echo "
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "prix_ticket", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Saisir le prix du ticket", "style" => "border: 1px solid #ccc;"]]);
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "prix_ticket", [], "any", false, false, false, 51), 'errors');
        echo "
                  </div>
                  
                  <div class=\"form-group\">
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "horaire", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Horaire"]);
        echo "
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "horaire", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Saisir l'horaire", "style" => "border: 1px solid #ccc;"]]);
        echo "
                      ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "horaire", [], "any", false, false, false, 57), 'errors');
        echo "
                  </div>
                  
                  <div class=\"form-group\">
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "nom", [], "any", false, false, false, 61), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom"]);
        echo "
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "nom", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Saisir le nom", "style" => "border: 1px solid #ccc;"]]);
        echo "
                      ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "nom", [], "any", false, false, false, 63), 'errors');
        echo "
                  </div>
                  <br>

                  <div class=\"form-group\">
                 
                    <button class=\"btn btn-primary\" style=\"width:300px; margin:1px; background-color:#8DD3BB; margin: 0 auto; display: block;\" type=\"submit\">Ajouter</button>

                   
                    </button>
                  </div>
                
                  
                ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
        echo "
                

              
            </div>
            <!--end::Header-->
        </div>
        <!--end::Tables Widget 3-->
        
    </div>
    <!--end::Container-->
</div>

<!--end::Entry-->

 


   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "moyentp/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 76,  200 => 63,  196 => 62,  192 => 61,  185 => 57,  181 => 56,  177 => 55,  170 => 51,  166 => 50,  162 => 49,  155 => 45,  151 => 44,  147 => 43,  140 => 39,  136 => 38,  132 => 37,  125 => 33,  121 => 32,  117 => 31,  110 => 27,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
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
             <h1>Ajouter moyen de transport</h1>
             <br>
               
                  
                {{ form_start(form) }}
                  
                  <div class=\"form-group\">
               
                    {{ form_label(form.matricule, 'Matricule', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.matricule, {'attr': {'class': 'form-control', 'placeholder': 'Saisir le matricule','style': 'border: 1px solid #ccc;'}}) }}
                    {{ form_errors(form.matricule) }}
                  </div>
                  
                  <div class=\"form-group\">
                    {{ form_label(form.type, 'Type', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.type, {'attr': {'class': 'form-control', 'placeholder': 'Saisir le type','style': 'border: 1px solid #ccc;'}}) }}
                    {{ form_errors(form.type) }}
                  </div>
                  
                  <div class=\"form-group\">
                    {{ form_label(form.nbreplace, 'Nombre de places', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.nbreplace, {'attr': {'class': 'form-control', 'placeholder': 'Saisir le nombre de places','style': 'border: 1px solid #ccc;'}}) }}
                    {{ form_errors(form.nbreplace) }}
                  </div>
                  
                  <div class=\"form-group\">
                    {{ form_label(form.prix_ticket, 'Prix du ticket', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.prix_ticket, {'attr': {'class': 'form-control', 'placeholder': 'Saisir le prix du ticket','style': 'border: 1px solid #ccc;'}}) }}
                    {{ form_errors(form.prix_ticket) }}
                  </div>
                  
                  <div class=\"form-group\">
                    {{ form_label(form.horaire, 'Horaire', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.horaire, {'attr': {'class': 'form-control', 'placeholder': 'Saisir l\\'horaire','style': 'border: 1px solid #ccc;'}}) }}
                      {{ form_errors(form.horaire) }}
                  </div>
                  
                  <div class=\"form-group\">
                    {{ form_label(form.nom, 'Nom', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Saisir le nom','style': 'border: 1px solid #ccc;'}}) }}
                      {{ form_errors(form.nom) }}
                  </div>
                  <br>

                  <div class=\"form-group\">
                 
                    <button class=\"btn btn-primary\" style=\"width:300px; margin:1px; background-color:#8DD3BB; margin: 0 auto; display: block;\" type=\"submit\">Ajouter</button>

                   
                    </button>
                  </div>
                
                  
                {{ form_end(form) }}
                

              
            </div>
            <!--end::Header-->
        </div>
        <!--end::Tables Widget 3-->
        
    </div>
    <!--end::Container-->
</div>

<!--end::Entry-->

 


   
{% endblock %}
", "moyentp/new.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\moyentp\\new.html.twig");
    }
}
