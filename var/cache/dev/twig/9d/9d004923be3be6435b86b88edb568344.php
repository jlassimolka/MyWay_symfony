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

/* contrat/_form.html.twig */
class __TwigTemplate_99cc76255a2d68eb06b5d5c3294385b4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'errors');
        echo "

    <div class=\"form-group\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "prix", [], "any", false, false, false, 5), 'label', ["label_attr" => ["class" => "col-sm-2 control-label"], "label" => "Prix"]);
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "prix", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control input-border", "style" => "border: 1px solid #ccc"]]);
        echo "
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "prix", [], "any", false, false, false, 8), 'errors');
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "dateDebut", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "col-sm-2 control-label"], "label" => "Date début"]);
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "dateDebut", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control datetimepicker input-border", "style" => "border: 1px solid #ccc"]]);
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "dateDebut", [], "any", false, false, false, 16), 'errors');
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "dateFin", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "col-sm-2 control-label"], "label" => "Date fin"]);
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "dateFin", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control datetimepicker input-border", "style" => "border: 1px solid #ccc"]]);
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "dateFin", [], "any", false, false, false, 24), 'errors');
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "location", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "col-sm-2 control-label"], "label" => "Location"]);
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "location", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control input-border", "style" => "border: 1px solid #ccc"]]);
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "location", [], "any", false, false, false, 32), 'errors');
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 38
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 38, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
        </div>
    </div>

";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contrat/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  122 => 38,  113 => 32,  109 => 31,  104 => 29,  96 => 24,  92 => 23,  87 => 21,  79 => 16,  75 => 15,  70 => 13,  62 => 8,  58 => 7,  53 => 5,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
    {{ form_errors(form) }}

    <div class=\"form-group\">
        {{ form_label(form.prix, 'Prix', {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.prix, {'attr': {'class': 'form-control input-border', 'style': 'border: 1px solid #ccc' }}) }}
            {{ form_errors(form.prix) }}
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.dateDebut, 'Date début', {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.dateDebut, {'attr': {'class': 'form-control datetimepicker input-border', 'style': 'border: 1px solid #ccc'}}) }}
            {{ form_errors(form.dateDebut) }}
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.dateFin, 'Date fin', {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.dateFin, {'attr': {'class': 'form-control datetimepicker input-border', 'style': 'border: 1px solid #ccc'}}) }}
            {{ form_errors(form.dateFin) }}
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.location, 'Location', {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.location, {'attr': {'class': 'form-control input-border', 'style': 'border: 1px solid #ccc'}}) }}
            {{ form_errors(form.location) }}
        </div>
    </div>

    <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
        </div>
    </div>

{{ form_end(form) }}
", "contrat/_form.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\contrat\\_form.html.twig");
    }
}
