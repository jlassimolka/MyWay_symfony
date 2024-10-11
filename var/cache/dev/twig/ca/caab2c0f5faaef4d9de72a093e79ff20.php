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

/* affichemoyen/details.html.twig */
class __TwigTemplate_b4199499109160994f18748d035546c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'continu' => [$this, 'block_continu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "continufront/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "affichemoyen/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "affichemoyen/details.html.twig"));

        $this->parent = $this->loadTemplate("continufront/index.html.twig", "affichemoyen/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_continu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "continu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "continu"));

        // line 5
        echo "
  

    

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
                <th class=\"fw-bolder\">Trajet:</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 32, $this->source); })()), "trajet", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"fw-bolder\">Moyen de transport:</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 36, $this->source); })()), "moyentp", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"fw-bolder\">Horaire:</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 40, $this->source); })()), "moyentp", [], "any", false, false, false, 40), "horaire", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th class=\"fw-bolder\">Prix ticket:</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 44, $this->source); })()), "moyentp", [], "any", false, false, false, 44), "getPrixTicket", [], "method", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
           
            
            </tbody>
    </table>
    <br>
    
   <div class=\"form-group\">
    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affichemoyen");
        echo "\" class=\"btn btn-primary\" style=\"width:300px; margin:1px; background-color:#8DD3BB; margin: 0 auto; display: block;\">Liste des moyens de transport</a>
</div>

    
</div>
</div>
</div>
</div>
<br>
  




                

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "affichemoyen/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 53,  118 => 44,  111 => 40,  104 => 36,  97 => 32,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'continufront/index.html.twig' %}


{% block continu %}

  

    

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
                <th class=\"fw-bolder\">Trajet:</th>
                <td>{{ ligne.trajet }}</td>
            </tr>
            <tr>
                <th class=\"fw-bolder\">Moyen de transport:</th>
                <td>{{ ligne.moyentp}}</td>
            </tr>
            <tr>
                <th class=\"fw-bolder\">Horaire:</th>
                <td>{{ ligne.moyentp.horaire}}</td>
            </tr>
             <tr>
                <th class=\"fw-bolder\">Prix ticket:</th>
                <td>{{ ligne.moyentp.getPrixTicket()}}</td>
            </tr>
           
            
            </tbody>
    </table>
    <br>
    
   <div class=\"form-group\">
    <a href=\"{{ path('app_affichemoyen') }}\" class=\"btn btn-primary\" style=\"width:300px; margin:1px; background-color:#8DD3BB; margin: 0 auto; display: block;\">Liste des moyens de transport</a>
</div>

    
</div>
</div>
</div>
</div>
<br>
  




                

{% endblock %}


", "affichemoyen/details.html.twig", "C:\\Users\\Slim\\Downloads\\auth\\templates\\affichemoyen\\details.html.twig");
    }
}
