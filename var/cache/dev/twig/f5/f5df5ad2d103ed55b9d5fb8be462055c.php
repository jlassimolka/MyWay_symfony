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

/* moyentp/show.html.twig */
class __TwigTemplate_f6b0f13fadffdbea77549209360f94b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moyentp/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moyentp/show.html.twig"));

        $this->parent = $this->loadTemplate("homeadmin/index.html.twig", "moyentp/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_tableau($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableau"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableau"));

        // line 3
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
             <h1>Détails</h1>
             <br>

    
    <table class=\"table\">
        <tbody>
          
            <tr>
                <th class=\"fw-bolder\">Matricule:</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["moyentps"]) || array_key_exists("moyentps", $context) ? $context["moyentps"] : (function () { throw new RuntimeError('Variable "moyentps" does not exist.', 30, $this->source); })()), "matricule", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th class=\"fw-bolder\">Type:</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["moyentps"]) || array_key_exists("moyentps", $context) ? $context["moyentps"] : (function () { throw new RuntimeError('Variable "moyentps" does not exist.', 34, $this->source); })()), "type", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"fw-bolder\">Nombre de place:</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["moyentps"]) || array_key_exists("moyentps", $context) ? $context["moyentps"] : (function () { throw new RuntimeError('Variable "moyentps" does not exist.', 38, $this->source); })()), "nbreplace", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
           
            <tr>
                <th class=\"fw-bolder\">Horaire:</th>
                <td> ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["moyentps"]) || array_key_exists("moyentps", $context) ? $context["moyentps"] : (function () { throw new RuntimeError('Variable "moyentps" does not exist.', 43, $this->source); })()), "horaire", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
            <tr>
            <tr>
                <th class=\"fw-bolder\">Nom:</th>
                <td> ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["moyentps"]) || array_key_exists("moyentps", $context) ? $context["moyentps"] : (function () { throw new RuntimeError('Variable "moyentps" does not exist.', 47, $this->source); })()), "nom", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
            <tr>
            <tr>
                <th class=\"fw-bolder\">Prix tickets:</th>
                <td> ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["moyentps"]) || array_key_exists("moyentps", $context) ? $context["moyentps"] : (function () { throw new RuntimeError('Variable "moyentps" does not exist.', 51, $this->source); })()), "getPrixTicket", [], "method", false, false, false, 51), "html", null, true);
        echo "</td>
            <tr>
            </tbody>
    </table>
    <br>
    
   <div class=\"form-group\">
    <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moyentp_index");
        echo "\" class=\"btn btn-primary\" style=\"width:300px; margin:1px; background-color:#8DD3BB; margin: 0 auto; display: block;\">Liste des moyens de transport</a>
</div>

    
</div>
</div>
</div>
</div>
<br>
  
</div>



                

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "moyentp/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 58,  133 => 51,  126 => 47,  119 => 43,  111 => 38,  104 => 34,  97 => 30,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homeadmin/index.html.twig' %}
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
             <h1>Détails</h1>
             <br>

    
    <table class=\"table\">
        <tbody>
          
            <tr>
                <th class=\"fw-bolder\">Matricule:</th>
                <td>{{moyentps.matricule }}</td>
            </tr>
             <tr>
                <th class=\"fw-bolder\">Type:</th>
                <td>{{ moyentps.type }}</td>
            </tr>
            <tr>
                <th class=\"fw-bolder\">Nombre de place:</th>
                <td>{{ moyentps.nbreplace }}</td>
            </tr>
           
            <tr>
                <th class=\"fw-bolder\">Horaire:</th>
                <td> {{ moyentps.horaire }}</td>
            <tr>
            <tr>
                <th class=\"fw-bolder\">Nom:</th>
                <td> {{ moyentps.nom }}</td>
            <tr>
            <tr>
                <th class=\"fw-bolder\">Prix tickets:</th>
                <td> {{ moyentps.getPrixTicket() }}</td>
            <tr>
            </tbody>
    </table>
    <br>
    
   <div class=\"form-group\">
    <a href=\"{{ path('app_moyentp_index') }}\" class=\"btn btn-primary\" style=\"width:300px; margin:1px; background-color:#8DD3BB; margin: 0 auto; display: block;\">Liste des moyens de transport</a>
</div>

    
</div>
</div>
</div>
</div>
<br>
  
</div>



                

{% endblock %}


", "moyentp/show.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\moyentp\\show.html.twig");
    }
}
