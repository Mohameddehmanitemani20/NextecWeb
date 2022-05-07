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

/* produit/index.html.twig */
class __TwigTemplate_a255b132f0490b19b5ca1033f23ef67e2d57634c43c8f7c2a5c59dbf54408d72 extends Template
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
        return "indexproduit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("indexproduit.html.twig", "produit/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Produit index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "     <h1>Produits</h1>
     ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formr"]) || array_key_exists("formr", $context) ? $context["formr"] : (function () { throw new RuntimeError('Variable "formr" does not exist.', 7, $this->source); })()), 'form_start');
        echo "

<div class=\"form-row align-items-end\" >
 <div class=\"col\">
   ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formr"]) || array_key_exists("formr", $context) ? $context["formr"] : (function () { throw new RuntimeError('Variable "formr" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), 'row');
        echo "
 </div>

  <div class=\"col\">
   <div class=\"form-group\">
      <button type=\"submit\" class=\"btn btn-success\">Rechercher</button>
    </div>
 </div>
</div>
 ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formr"]) || array_key_exists("formr", $context) ? $context["formr"] : (function () { throw new RuntimeError('Variable "formr" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
     
       <!--Start sidebar-wrapper-->
        <div id=\"sidebar-wrapper\" data-simplebar=\"\" data-simplebar-auto-hide=\"true\">
         <div class=\"brand-logo\">
           <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logowhite.png"), "html", null, true);
        echo "\"  height=\"20\" width=\"78\">
           <h5 class=\"logo-text\">Dashboard</h5> 
         </div>
       <ul class=\"sidebar-menu do-nicescrol\">
         <li class=\"sidebar-header\"></li>
         <div class=\"form-row align-items-end\" >
         <div class=\"col\">

       ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 33, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-group \" >
        <div class=\"col\">
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 36, $this->source); })()), "minPrice", [], "any", false, false, false, 36), 'row');
        echo "
        
         </div>
         <div class=\"col\">
         ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 40, $this->source); })()), "maxPrice", [], "any", false, false, false, 40), 'row');
        echo "
        <button type=\"submit\" class=\"btn btn-success\">Rechercher</button>
        </div>
        <div class=\"col\">
        </div>
        </div>
        ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 46, $this->source); })()), 'form_end');
        echo "





 ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 52, $this->source); })()), 'form_start');
        echo "

          ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 54, $this->source); })()), "category", [], "any", false, false, false, 54), 'row');
        echo "
         </div>
           <div class=\"form-group\">
             <div class=\"col\">
              <button type=\"submit\" class=\"btn btn-success\">Filtrer</button>
             </div>
           </div>
          </div>
          ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 62, $this->source); })()), 'form_end');
        echo " 
 
        <li>
          <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit");
        echo "\">
            <i class=\"zmdi zmdi-format-list-bulleted\"></i> <span>Gestion Produits</span>
          </a>
        </li>
      

      <li>
        <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fournisseur");
        echo "\">
          <i class=\"zmdi zmdi-grid\"></i> <span>Gestion Fournisseurs</span>
        </a>
      </li>

      <li>
        <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation");
        echo "\">
          <i class=\"zmdi zmdi-calendar-check\"></i> <span>Gestion Reclamations</span>
        </a>
      </li>

      <li>
        <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande");
        echo "\">
          <i class=\"zmdi zmdi-face\"></i> <span>Gestion Commandes</span>
        </a>
      </li>

      <li>
        <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("raison");
        echo "\">
          <i class=\"zmdi zmdi-lock\"></i> <span>Raisons</span>
        </a>
      </li>

       <li>
        <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie");
        echo "\">
          <i class=\"zmdi zmdi-account-circle\"></i> <span>Categories</span>
        </a>
      </li>

      <li class=\"sidebar-header\">LABELS</li>
      <li><a href=\"javaScript:void();\"><i class=\"zmdi zmdi-coffee text-danger\"></i> <span>Important</span></a></li>
      <li><a href=\"javaScript:void();\"><i class=\"zmdi zmdi-chart-donut text-success\"></i> <span>Warning</span></a></li>
      <li><a href=\"javaScript:void();\"><i class=\"zmdi zmdi-share text-info\"></i> <span>Information</span></a></li>

    </ul>
   
   </div>
   <!--End sidebar-wrapper-->


 



<h2><a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
        echo "\"><button class=\"button-34\"> +Ajouter un produit</button></a></h2>
    
       <div class=\"cards\">
           ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 119, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 120
            echo "        
           <div class=\"card\">
           <img class=\"card-img-top\" src=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/produit.png"), "html", null, true);
            echo "\" alt=\"Card image\">
            <div class=\"card-body text-center\">
            <h4 class=\"card-title\">";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nomp", [], "any", false, false, false, 124), "html", null, true);
            echo "</h4>
            <p class=\"price\">";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 125), "html", null, true);
            echo " DT</p>

            <p><a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["idp" => twig_get_attribute($this->env, $this->source, $context["produit"], "idp", [], "any", false, false, false, 127)]), "html", null, true);
            echo "\"<button class=\"button-22\">voir plus</button></a></p>
            ";
            // line 128
            echo twig_include($this->env, $context, "produit/_delete_form.html.twig");
            echo "
          </div>
        </div>
         
           ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 133
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "    
  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 137,  315 => 133,  297 => 128,  293 => 127,  288 => 125,  284 => 124,  279 => 122,  275 => 120,  257 => 119,  251 => 116,  228 => 96,  219 => 90,  210 => 84,  201 => 78,  192 => 72,  182 => 65,  176 => 62,  165 => 54,  160 => 52,  151 => 46,  142 => 40,  135 => 36,  129 => 33,  118 => 25,  110 => 20,  98 => 11,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'indexproduit.html.twig' %}

{% block title %}Produit index{% endblock %}

{% block body %}
     <h1>Produits</h1>
     {{ form_start(formr) }}

<div class=\"form-row align-items-end\" >
 <div class=\"col\">
   {{ form_row(formr.nom) }}
 </div>

  <div class=\"col\">
   <div class=\"form-group\">
      <button type=\"submit\" class=\"btn btn-success\">Rechercher</button>
    </div>
 </div>
</div>
 {{ form_end(formr) }}
     
       <!--Start sidebar-wrapper-->
        <div id=\"sidebar-wrapper\" data-simplebar=\"\" data-simplebar-auto-hide=\"true\">
         <div class=\"brand-logo\">
           <img src=\"{{ asset('assets/images/logowhite.png')}}\"  height=\"20\" width=\"78\">
           <h5 class=\"logo-text\">Dashboard</h5> 
         </div>
       <ul class=\"sidebar-menu do-nicescrol\">
         <li class=\"sidebar-header\"></li>
         <div class=\"form-row align-items-end\" >
         <div class=\"col\">

       {{ form_start(formp) }}
        <div class=\"form-group \" >
        <div class=\"col\">
        {{ form_row(formp.minPrice) }}
        
         </div>
         <div class=\"col\">
         {{ form_row(formp.maxPrice) }}
        <button type=\"submit\" class=\"btn btn-success\">Rechercher</button>
        </div>
        <div class=\"col\">
        </div>
        </div>
        {{ form_end(formp) }}





 {{ form_start(forms) }}

          {{ form_row(forms.category) }}
         </div>
           <div class=\"form-group\">
             <div class=\"col\">
              <button type=\"submit\" class=\"btn btn-success\">Filtrer</button>
             </div>
           </div>
          </div>
          {{ form_end(forms) }} 
 
        <li>
          <a href=\"{{ path('produit') }}\">
            <i class=\"zmdi zmdi-format-list-bulleted\"></i> <span>Gestion Produits</span>
          </a>
        </li>
      

      <li>
        <a href=\"{{ path('fournisseur') }}\">
          <i class=\"zmdi zmdi-grid\"></i> <span>Gestion Fournisseurs</span>
        </a>
      </li>

      <li>
        <a href=\"{{ path('reclamation') }}\">
          <i class=\"zmdi zmdi-calendar-check\"></i> <span>Gestion Reclamations</span>
        </a>
      </li>

      <li>
        <a href=\"{{ path('commande') }}\">
          <i class=\"zmdi zmdi-face\"></i> <span>Gestion Commandes</span>
        </a>
      </li>

      <li>
        <a href=\"{{ path('raison') }}\">
          <i class=\"zmdi zmdi-lock\"></i> <span>Raisons</span>
        </a>
      </li>

       <li>
        <a href=\"{{ path('categorie') }}\">
          <i class=\"zmdi zmdi-account-circle\"></i> <span>Categories</span>
        </a>
      </li>

      <li class=\"sidebar-header\">LABELS</li>
      <li><a href=\"javaScript:void();\"><i class=\"zmdi zmdi-coffee text-danger\"></i> <span>Important</span></a></li>
      <li><a href=\"javaScript:void();\"><i class=\"zmdi zmdi-chart-donut text-success\"></i> <span>Warning</span></a></li>
      <li><a href=\"javaScript:void();\"><i class=\"zmdi zmdi-share text-info\"></i> <span>Information</span></a></li>

    </ul>
   
   </div>
   <!--End sidebar-wrapper-->


 



<h2><a href=\"{{ path('app_produit_new') }}\"><button class=\"button-34\"> +Ajouter un produit</button></a></h2>
    
       <div class=\"cards\">
           {% for produit in produits %}
        
           <div class=\"card\">
           <img class=\"card-img-top\" src=\"{{ asset('assets/images/produit.png')}}\" alt=\"Card image\">
            <div class=\"card-body text-center\">
            <h4 class=\"card-title\">{{produit.nomp}}</h4>
            <p class=\"price\">{{produit.prix}} DT</p>

            <p><a href=\"{{ path('app_produit_show', {'idp': produit.idp}) }}\"<button class=\"button-22\">voir plus</button></a></p>
            {{ include('produit/_delete_form.html.twig') }}
          </div>
        </div>
         
           {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
    
  
{% endblock %}
", "produit/index.html.twig", "C:\\Users\\ASUS\\Desktop\\web\\ethleteinteg\\templates\\produit\\index.html.twig");
    }
}
