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

/* reclamation/_form.html.twig */
class __TwigTemplate_58d7a0bbedcaf5dc049b3a90210b0bfc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_form.html.twig"));

        // line 1
        echo "<section id=\"contact\" class=\"contact_area pt-120 pb-130\">
    <div class=\"container\">
        <div class=\"contact_form\">
            ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
                <div class=\"col-lg-6\">
                    <div class=\"single_form\">
                        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7), 'row', ["attr" => ["placeholder" => "Titre"]]);
        echo "
                        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), 'errors');
        echo "
                    </div> <!-- single form -->
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"single_form\">
                        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "message", [], "any", false, false, false, 13), 'row', ["attr" => ["placeholder" => "Message"]]);
        echo "
                        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "message", [], "any", false, false, false, 14), 'errors');
        echo "
                    </div> <!-- single form -->
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"single_form\">
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "category", [], "any", false, false, false, 19), 'row', ["attr" => ["placeholder" => "Category"]]);
        echo "
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "category", [], "any", false, false, false, 20), 'errors');
        echo "
                    </div> <!-- single form -->
                </div>

                <div>
                     ";
        // line 29
        echo "                    <div class=\"single_form\" >
                        <button class=\"main-btn wow fadeInLeftBig\" style=\"background-color:#8DD3BB;\">";
        // line 30
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 30, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                    </div>
                </div>

            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'rest');
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'errors');
        echo "
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        echo "

        </div>
    </div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 36,  104 => 35,  100 => 34,  93 => 30,  90 => 29,  82 => 20,  78 => 19,  70 => 14,  66 => 13,  58 => 8,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"contact\" class=\"contact_area pt-120 pb-130\">
    <div class=\"container\">
        <div class=\"contact_form\">
            {{ form_start(form) }}
                <div class=\"col-lg-6\">
                    <div class=\"single_form\">
                        {{ form_row(form.titre, {'attr': {'placeholder': 'Titre'}}) }}
                        {{ form_errors(form.titre) }}
                    </div> <!-- single form -->
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"single_form\">
                        {{ form_row(form.message, {'attr': {'placeholder': 'Message'}}) }}
                        {{ form_errors(form.message) }}
                    </div> <!-- single form -->
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"single_form\">
                        {{ form_row(form.category, {'attr': {'placeholder': 'Category'}}) }}
                        {{ form_errors(form.category) }}
                    </div> <!-- single form -->
                </div>

                <div>
                     {# <div class=\"single_form\">
                        {{ recaptcha_widget(form) }}
                        {{ form_errors(form.recaptcha) }}
                    </div>  #}
                    <div class=\"single_form\" >
                        <button class=\"main-btn wow fadeInLeftBig\" style=\"background-color:#8DD3BB;\">{{ button_label|default('Save') }}</button>
                    </div>
                </div>

            {{ form_rest(form) }}
            {{ form_errors(form) }}
            {{ form_end(form) }}

        </div>
    </div>
</section>
", "reclamation/_form.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\reclamation\\_form.html.twig");
    }
}
