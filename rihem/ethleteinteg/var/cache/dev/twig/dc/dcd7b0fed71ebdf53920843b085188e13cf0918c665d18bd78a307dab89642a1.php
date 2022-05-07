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

/* indexproduit.html.twig */
class __TwigTemplate_28c34b2a776e4479b666e1462696acb1210c09392202cee27fe5e7f454ffc074 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "indexproduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "indexproduit.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\"/>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <meta name=\"description\" content=\"\"/>
  <meta name=\"author\" content=\"\"/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
 
  <link href= \"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/pace.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pace.min.js"), "html", null, true);
        echo "\"></script>
  <!--favicon-->
  <link rel=\"icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
  <!-- Vector CSS -->
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/vectormap/jquery-jvectormap-2.0.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <!-- simplebar CSS-->
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/simplebar/css/simplebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <!-- Bootstrap core CSS-->
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <!-- animate CSS-->
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Icons CSS-->
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Sidebar CSS-->
  <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sidebar-menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <!-- Custom Style-->
  <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/card.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/button.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
     <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/flipcard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
       <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/jQuery.UI.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  
  


  
</head>

<body class=\"bg-theme bg-theme5\">
 
<!-- Start wrapper-->
 <div id=\"wrapper\">
 
  <!--Start sidebar-wrapper-->
   <div id=\"sidebar-wrapper\" data-simplebar=\"\" data-simplebar-auto-hide=\"true\">
     <div class=\"brand-logo\">
  
       <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logowhite.png"), "html", null, true);
        echo "\"  height=\"20\" width=\"78\">
       <h5 class=\"logo-text\">Dashboard</h5>
  
   </div>
   <ul class=\"sidebar-menu do-nicescrol\">
      <li class=\"sidebar-header\"></li>
        
     
      
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class=\"topbar-nav\">
 <nav class=\"navbar navbar-expand fixed-top\">
  <ul class=\"navbar-nav mr-auto align-items-center\">
    <li class=\"nav-item\">
      <a class=\"nav-link toggle-menu\" href=\"javascript:void();\">
       <i class=\"icon-menu menu-icon\"></i>
     </a>
    </li>
    <li class=\"nav-item\">
     
    </li>
  </ul>
     
  <ul class=\"navbar-nav align-items-center right-nav-link\">
    <li class=\"nav-item dropdown-lg\">
      <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"javascript:void();\">
      <i class=\"fa fa-envelope-open-o\"></i></a>
    </li>
    <li class=\"nav-item dropdown-lg\">
      <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"javascript:void();\">
      <i class=\"fa fa-bell-o\"></i></a>
    </li>
    <li class=\"nav-item language\">
      <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"javascript:void();\"><i class=\"fa fa-flag\"></i></a>
      <ul class=\"dropdown-menu dropdown-menu-right\">
          <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-gb mr-2\"></i> English</li>
          <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-fr mr-2\"></i> French</li>
          <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-cn mr-2\"></i> Chinese</li>
          <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-de mr-2\"></i> German</li>
        </ul>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\" href=\"#\">
        <span class=\"user-profile\"><img src=\"https://via.placeholder.com/110x110\" class=\"img-circle\" alt=\"user avatar\"></span>
      </a>
      <ul class=\"dropdown-menu dropdown-menu-right\">
       <li class=\"dropdown-item user-details\">
        <a href=\"javaScript:void();\">
           <div class=\"media\">
             <div class=\"avatar\"><img class=\"align-self-start mr-3\" src=\"https://via.placeholder.com/110x110\" alt=\"user avatar\"></div>
            <div class=\"media-body\">
            <h6 class=\"mt-2 user-title\">Sarajhon Mccoy</h6>
            <p class=\"user-subtitle\">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class=\"dropdown-divider\"></li>
        <li class=\"dropdown-item\"><i class=\"icon-envelope mr-2\"></i> Inbox</li>
        <li class=\"dropdown-divider\"></li>
        <li class=\"dropdown-item\"><i class=\"icon-wallet mr-2\"></i> Account</li>
        <li class=\"dropdown-divider\"></li>
        <li class=\"dropdown-item\"><i class=\"icon-settings mr-2\"></i> Setting</li>
        <li class=\"dropdown-divider\"></li>
        <li class=\"dropdown-item\"><i class=\"icon-power mr-2\"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class=\"clearfix\"></div>
\t
  <div class=\"content-wrapper\">
    <div class=\"container-fluid\">

  <!--Start Dashboard Content-->
  ";
        // line 134
        $this->displayBlock('body', $context, $blocks);
        // line 389
        echo "
\t  
\t<!--start overlay-->
\t\t  <div class=\"overlay toggle-menu\"></div>
\t\t<!--end overlay-->
\t\t
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href=\"javaScript:void();\" class=\"back-to-top\"><i class=\"fa fa-angle-double-up\"></i> </a>
    <!--End Back To Top Button-->
\t
\t<!--Start footer-->
\t<footer class=\"footer\">
      <div class=\"container\">
        <div class=\"text-center\">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
\t<!--End footer-->
\t
  <!--start color switcher-->
   <div class=\"right-sidebar\">
    <div class=\"switcher-icon\">
      <i class=\"zmdi zmdi-settings zmdi-hc-spin\"></i>
    </div>
    <div class=\"right-sidebar-content\">

      <p class=\"mb-0\">Gaussion Texture</p>
      <hr>
      
      <ul class=\"switcher\">
        <li id=\"theme1\"></li>
        <li id=\"theme2\"></li>
        <li id=\"theme3\"></li>
        <li id=\"theme4\"></li>
        <li id=\"theme5\"></li>
        <li id=\"theme6\"></li>
      </ul>

      <p class=\"mb-0\">Gradient Background</p>
      <hr>
      
      <ul class=\"switcher\">
        <li id=\"theme7\"></li>
        <li id=\"theme8\"></li>
        <li id=\"theme9\"></li>
        <li id=\"theme10\"></li>
        <li id=\"theme11\"></li>
        <li id=\"theme12\"></li>
\t\t<li id=\"theme13\"></li>
        <li id=\"theme14\"></li>
        <li id=\"theme15\"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"assets/js/popper.min.js\"></script>
  <script src=\"assets/js/bootstrap.min.js\"></script>
\t
 <!-- simplebar js -->
  <script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/simplebar/js/simplebar.js"), "html", null, true);
        echo "\"></script>
  <!-- sidebar-menu js -->
  <script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>
  <!-- loader scripts -->
  <script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.loading-indicator.js"), "html", null, true);
        echo "\"></script>
  <!-- Custom scripts -->
  <script src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app-script.js"), "html", null, true);
        echo "\"></script>
  <!-- Chart js -->
  
  <script src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/Chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
 
  <!-- Index js -->
  <script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/index.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slider.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jQuery.UI.js"), "html", null, true);
        echo "\"></script>
  
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 134
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 135
        echo "\t<div class=\"card mt-3\">
    <div class=\"card-content\">
        <div class=\"row row-group m-0\">
            <div class=\"col-12 col-lg-6 col-xl-3 border-light\">
                <div class=\"card-body\">
                  <h5 class=\"text-white mb-0\">9526 <span class=\"float-right\"><i class=\"fa fa-shopping-cart\"></i></span></h5>
                    <div class=\"progress my-3\" style=\"height:3px;\">
                       <div class=\"progress-bar\" style=\"width:55%\"></div>
                    </div>
                  <p class=\"mb-0 text-white small-font\">Total Orders <span class=\"float-right\">+4.2% <i class=\"zmdi zmdi-long-arrow-up\"></i></span></p>
                </div>
            </div>
            <div class=\"col-12 col-lg-6 col-xl-3 border-light\">
                <div class=\"card-body\">
                  <h5 class=\"text-white mb-0\">8323 <span class=\"float-right\"><i class=\"fa fa-usd\"></i></span></h5>
                    <div class=\"progress my-3\" style=\"height:3px;\">
                       <div class=\"progress-bar\" style=\"width:55%\"></div>
                    </div>
                  <p class=\"mb-0 text-white small-font\">Total Revenue <span class=\"float-right\">+1.2% <i class=\"zmdi zmdi-long-arrow-up\"></i></span></p>
                </div>
            </div>
            <div class=\"col-12 col-lg-6 col-xl-3 border-light\">
                <div class=\"card-body\">
                  <h5 class=\"text-white mb-0\">6200 <span class=\"float-right\"><i class=\"fa fa-eye\"></i></span></h5>
                    <div class=\"progress my-3\" style=\"height:3px;\">
                       <div class=\"progress-bar\" style=\"width:55%\"></div>
                    </div>
                  <p class=\"mb-0 text-white small-font\">Visitors <span class=\"float-right\">+5.2% <i class=\"zmdi zmdi-long-arrow-up\"></i></span></p>
                </div>
            </div>
            <div class=\"col-12 col-lg-6 col-xl-3 border-light\">
                <div class=\"card-body\">
                  <h5 class=\"text-white mb-0\">5630 <span class=\"float-right\"><i class=\"fa fa-envira\"></i></span></h5>
                    <div class=\"progress my-3\" style=\"height:3px;\">
                       <div class=\"progress-bar\" style=\"width:55%\"></div>
                    </div>
                  <p class=\"mb-0 text-white small-font\">Messages <span class=\"float-right\">+2.2% <i class=\"zmdi zmdi-long-arrow-up\"></i></span></p>
                </div>
            </div>
        </div>
    </div>
 </div>  
\t  
\t<div class=\"row\">
     <div class=\"col-12 col-lg-8 col-xl-8\">
\t    <div class=\"card\">
\t\t <div class=\"card-header\">Site Traffic
\t\t   <div class=\"card-action\">
\t\t\t <div class=\"dropdown\">
\t\t\t <a href=\"javascript:void();\" class=\"dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\">
\t\t\t  <i class=\"icon-options\"></i>
\t\t\t </a>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void();\">Action</a>
\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void();\">Another action</a>
\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void();\">Something else here</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void();\">Separated link</a>
\t\t\t   </div>
\t\t\t  </div>
\t\t   </div>
\t\t </div>
\t\t <div class=\"card-body\">
\t\t    <ul class=\"list-inline\">
\t\t\t  <li class=\"list-inline-item\"><i class=\"fa fa-circle mr-2 text-white\"></i>New Visitor</li>
\t\t\t  <li class=\"list-inline-item\"><i class=\"fa fa-circle mr-2 text-light\"></i>Old Visitor</li>
\t\t\t</ul>
\t\t\t<div class=\"chart-container-1\">
\t\t\t  <canvas id=\"chart1\"></canvas>
\t\t\t</div>
\t\t </div>
\t\t 
\t\t <div class=\"row m-0 row-group text-center border-top border-light-3\">
\t\t   <div class=\"col-12 col-lg-4\">
\t\t     <div class=\"p-3\">
\t\t       <h5 class=\"mb-0\">45.87M</h5>
\t\t\t   <small class=\"mb-0\">Overall Visitor <span> <i class=\"fa fa-arrow-up\"></i> 2.43%</span></small>
\t\t     </div>
\t\t   </div>
\t\t   <div class=\"col-12 col-lg-4\">
\t\t     <div class=\"p-3\">
\t\t       <h5 class=\"mb-0\">15:48</h5>
\t\t\t   <small class=\"mb-0\">Visitor Duration <span> <i class=\"fa fa-arrow-up\"></i> 12.65%</span></small>
\t\t     </div>
\t\t   </div>
\t\t   <div class=\"col-12 col-lg-4\">
\t\t     <div class=\"p-3\">
\t\t       <h5 class=\"mb-0\">245.65</h5>
\t\t\t   <small class=\"mb-0\">Pages/Visit <span> <i class=\"fa fa-arrow-up\"></i> 5.62%</span></small>
\t\t     </div>
\t\t   </div>
\t\t </div>
\t\t 
\t\t</div>
\t </div>

     <div class=\"col-12 col-lg-4 col-xl-4\">
        <div class=\"card\">
           <div class=\"card-header\">Weekly sales
             <div class=\"card-action\">
             <div class=\"dropdown\">
             <a href=\"javascript:void();\" class=\"dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\">
              <i class=\"icon-options\"></i>
             </a>
              <div class=\"dropdown-menu dropdown-menu-right\">
              <a class=\"dropdown-item\" href=\"javascript:void();\">Action</a>
              <a class=\"dropdown-item\" href=\"javascript:void();\">Another action</a>
              <a class=\"dropdown-item\" href=\"javascript:void();\">Something else here</a>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item\" href=\"javascript:void();\">Separated link</a>
               </div>
              </div>
             </div>
           </div>
           <div class=\"card-body\">
\t\t     <div class=\"chart-container-2\">
               <canvas id=\"chart2\"></canvas>
\t\t\t  </div>
           </div>
           <div class=\"table-responsive\">
             <table class=\"table align-items-center\">
               <tbody>
                 <tr>
                   <td><i class=\"fa fa-circle text-white mr-2\"></i> Direct</td>
                   <td>\$5856</td>
                   <td>+55%</td>
                 </tr>
                 <tr>
                   <td><i class=\"fa fa-circle text-light-1 mr-2\"></i>Affiliate</td>
                   <td>\$2602</td>
                   <td>+25%</td>
                 </tr>
                 <tr>
                   <td><i class=\"fa fa-circle text-light-2 mr-2\"></i>E-mail</td>
                   <td>\$1802</td>
                   <td>+15%</td>
                 </tr>
                 <tr>
                   <td><i class=\"fa fa-circle text-light-3 mr-2\"></i>Other</td>
                   <td>\$1105</td>
                   <td>+5%</td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
     </div>
\t</div><!--End Row-->
\t
\t<div class=\"row\">
\t <div class=\"col-12 col-lg-12\">
\t   <div class=\"card\">
\t     <div class=\"card-header\">Recent Order Tables
\t\t  <div class=\"card-action\">
             <div class=\"dropdown\">
             <a href=\"javascript:void();\" class=\"dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\">
              <i class=\"icon-options\"></i>
             </a>
              <div class=\"dropdown-menu dropdown-menu-right\">
              <a class=\"dropdown-item\" href=\"javascript:void();\">Action</a>
              <a class=\"dropdown-item\" href=\"javascript:void();\">Another action</a>
              <a class=\"dropdown-item\" href=\"javascript:void();\">Something else here</a>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item\" href=\"javascript:void();\">Separated link</a>
               </div>
              </div>
             </div>
\t\t </div>
\t       <div class=\"table-responsive\">
                 <table class=\"table align-items-center table-flush table-borderless\">
                  <thead>
                   <tr>
                     <th>Product</th>
                     <th>Photo</th>
                     <th>Product ID</th>
                     <th>Amount</th>
                     <th>Date</th>
                     <th>Shipping</th>
                   </tr>
                   </thead>
                   <tbody><tr>
                    <td>Iphone 5</td>
                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                    <td>#9405822</td>
                    <td>\$ 1250.00</td>
                    <td>03 Aug 2017</td>
\t\t\t\t\t<td><div class=\"progress shadow\" style=\"height: 3px;\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 90%\"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Earphone GL</td>
                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                    <td>#9405820</td>
                    <td>\$ 1500.00</td>
                    <td>03 Aug 2017</td>
\t\t\t\t\t<td><div class=\"progress shadow\" style=\"height: 3px;\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>HD Hand Camera</td>
                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                    <td>#9405830</td>
                    <td>\$ 1400.00</td>
                    <td>03 Aug 2017</td>
\t\t\t\t\t<td><div class=\"progress shadow\" style=\"height: 3px;\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%\"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Clasic Shoes</td>
                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                    <td>#9405825</td>
                    <td>\$ 1200.00</td>
                    <td>03 Aug 2017</td>
\t\t\t\t\t<td><div class=\"progress shadow\" style=\"height: 3px;\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%\"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Hand Watch</td>
                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                    <td>#9405840</td>
                    <td>\$ 1800.00</td>
                    <td>03 Aug 2017</td>
\t\t\t\t\t<td><div class=\"progress shadow\" style=\"height: 3px;\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 40%\"></div>
                        </div></td>
                   </tr>
\t\t\t\t   
\t\t\t\t   <tr>
                    <td>Clasic Shoes</td>
                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                    <td>#9405825</td>
                    <td>\$ 1200.00</td>
                    <td>03 Aug 2017</td>
\t\t\t\t\t<td><div class=\"progress shadow\" style=\"height: 3px;\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%\"></div>
                        </div></td>
                   </tr>

                 </tbody></table>
               </div>
\t   </div>
\t </div>
\t</div><!--End Row-->

      <!--End Dashboard Content-->
              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "indexproduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 135,  354 => 134,  339 => 473,  335 => 472,  331 => 471,  325 => 468,  319 => 465,  314 => 463,  309 => 461,  304 => 459,  296 => 454,  229 => 389,  227 => 134,  141 => 51,  121 => 34,  117 => 33,  113 => 32,  109 => 31,  105 => 30,  101 => 29,  96 => 27,  91 => 25,  86 => 23,  81 => 21,  76 => 19,  71 => 17,  66 => 15,  61 => 13,  57 => 12,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\"/>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <meta name=\"description\" content=\"\"/>
  <meta name=\"author\" content=\"\"/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
 
  <link href= \"{{ asset('assets/css/pace.min.css') }}\" rel=\"stylesheet\"/>
  <script src=\"{{ asset('assets/js/pace.min.js') }}\"></script>
  <!--favicon-->
  <link rel=\"icon\" href=\"{{ asset('assets/images/favicon.ico')}}\" type=\"image/x-icon\">
  <!-- Vector CSS -->
  <link href=\"{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}\" rel=\"stylesheet\"/>
  <!-- simplebar CSS-->
  <link href=\"{{ asset('assets/plugins/simplebar/css/simplebar.css')}}\" rel=\"stylesheet\"/>
  <!-- Bootstrap core CSS-->
  <link href=\"{{ asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\"/>
  <!-- animate CSS-->
  <link href=\"{{ asset('assets/css/animate.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Icons CSS-->
  <link href=\"{{ asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Sidebar CSS-->
  <link href=\"{{ asset('assets/css/sidebar-menu.css')}}\" rel=\"stylesheet\"/>
  <!-- Custom Style-->
  <link href=\"{{ asset('assets/css/app-style.css')}}\" rel=\"stylesheet\"/>
  <link href=\"{{ asset('assets/css/card.css')}}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('assets/css/button.css')}}\" rel=\"stylesheet\"/>
     <link href=\"{{ asset('assets/css/flipcard.css')}}\" rel=\"stylesheet\"/>
       <link href=\"{{ asset('assets/css/slider.css')}}\" rel=\"stylesheet\"/>
        <link href=\"{{ asset('assets/css/jQuery.UI.css')}}\" rel=\"stylesheet\"/>
  
  


  
</head>

<body class=\"bg-theme bg-theme5\">
 
<!-- Start wrapper-->
 <div id=\"wrapper\">
 
  <!--Start sidebar-wrapper-->
   <div id=\"sidebar-wrapper\" data-simplebar=\"\" data-simplebar-auto-hide=\"true\">
     <div class=\"brand-logo\">
  
       <img src=\"{{ asset('assets/images/logowhite.png')}}\"  height=\"20\" width=\"78\">
       <h5 class=\"logo-text\">Dashboard</h5>
  
   </div>
   <ul class=\"sidebar-menu do-nicescrol\">
      <li class=\"sidebar-header\"></li>
        
     
      
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class=\"topbar-nav\">
 <nav class=\"navbar navbar-expand fixed-top\">
  <ul class=\"navbar-nav mr-auto align-items-center\">
    <li class=\"nav-item\">
      <a class=\"nav-link toggle-menu\" href=\"javascript:void();\">
       <i class=\"icon-menu menu-icon\"></i>
     </a>
    </li>
    <li class=\"nav-item\">
     
    </li>
  </ul>
     
  <ul class=\"navbar-nav align-items-center right-nav-link\">
    <li class=\"nav-item dropdown-lg\">
      <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"javascript:void();\">
      <i class=\"fa fa-envelope-open-o\"></i></a>
    </li>
    <li class=\"nav-item dropdown-lg\">
      <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"javascript:void();\">
      <i class=\"fa fa-bell-o\"></i></a>
    </li>
    <li class=\"nav-item language\">
      <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"javascript:void();\"><i class=\"fa fa-flag\"></i></a>
      <ul class=\"dropdown-menu dropdown-menu-right\">
          <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-gb mr-2\"></i> English</li>
          <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-fr mr-2\"></i> French</li>
          <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-cn mr-2\"></i> Chinese</li>
          <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-de mr-2\"></i> German</li>
        </ul>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\" href=\"#\">
        <span class=\"user-profile\"><img src=\"https://via.placeholder.com/110x110\" class=\"img-circle\" alt=\"user avatar\"></span>
      </a>
      <ul class=\"dropdown-menu dropdown-menu-right\">
       <li class=\"dropdown-item user-details\">
        <a href=\"javaScript:void();\">
           <div class=\"media\">
             <div class=\"avatar\"><img class=\"align-self-start mr-3\" src=\"https://via.placeholder.com/110x110\" alt=\"user avatar\"></div>
            <div class=\"media-body\">
            <h6 class=\"mt-2 user-title\">Sarajhon Mccoy</h6>
            <p class=\"user-subtitle\">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class=\"dropdown-divider\"></li>
        <li class=\"dropdown-item\"><i class=\"icon-envelope mr-2\"></i> Inbox</li>
        <li class=\"dropdown-divider\"></li>
        <li class=\"dropdown-item\"><i class=\"icon-wallet mr-2\"></i> Account</li>
        <li class=\"dropdown-divider\"></li>
        <li class=\"dropdown-item\"><i class=\"icon-settings mr-2\"></i> Setting</li>
        <li class=\"dropdown-divider\"></li>
        <li class=\"dropdown-item\"><i class=\"icon-power mr-2\"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class=\"clearfix\"></div>
\t
  <div class=\"content-wrapper\">
    <div class=\"container-fluid\">

  <!--Start Dashboard Content-->
  {% block body %}
\t<div class=\"card mt-3\">
    <div class=\"card-content\">
        <div class=\"row row-group m-0\">
            <div class=\"col-12 col-lg-6 col-xl-3 border-light\">
                <div class=\"card-body\">
                  <h5 class=\"text-white mb-0\">9526 <span class=\"float-right\"><i class=\"fa fa-shopping-cart\"></i></span></h5>
                    <div class=\"progress my-3\" style=\"height:3px;\">
                       <div class=\"progress-bar\" style=\"width:55%\"></div>
                    </div>
                  <p class=\"mb-0 text-white small-font\">Total Orders <span class=\"float-right\">+4.2% <i class=\"zmdi zmdi-long-arrow-up\"></i></span></p>
                </div>
            </div>
            <div class=\"col-12 col-lg-6 col-xl-3 border-light\">
                <div class=\"card-body\">
                  <h5 class=\"text-white mb-0\">8323 <span class=\"float-right\"><i class=\"fa fa-usd\"></i></span></h5>
                    <div class=\"progress my-3\" style=\"height:3px;\">
                       <div class=\"progress-bar\" style=\"width:55%\"></div>
                    </div>
                  <p class=\"mb-0 text-white small-font\">Total Revenue <span class=\"float-right\">+1.2% <i class=\"zmdi zmdi-long-arrow-up\"></i></span></p>
                </div>
            </div>
            <div class=\"col-12 col-lg-6 col-xl-3 border-light\">
                <div class=\"card-body\">
                  <h5 class=\"text-white mb-0\">6200 <span class=\"float-right\"><i class=\"fa fa-eye\"></i></span></h5>
                    <div class=\"progress my-3\" style=\"height:3px;\">
                       <div class=\"progress-bar\" style=\"width:55%\"></div>
                    </div>
                  <p class=\"mb-0 text-white small-font\">Visitors <span class=\"float-right\">+5.2% <i class=\"zmdi zmdi-long-arrow-up\"></i></span></p>
                </div>
            </div>
            <div class=\"col-12 col-lg-6 col-xl-3 border-light\">
                <div class=\"card-body\">
                  <h5 class=\"text-white mb-0\">5630 <span class=\"float-right\"><i class=\"fa fa-envira\"></i></span></h5>
                    <div class=\"progress my-3\" style=\"height:3px;\">
                       <div class=\"progress-bar\" style=\"width:55%\"></div>
                    </div>
                  <p class=\"mb-0 text-white small-font\">Messages <span class=\"float-right\">+2.2% <i class=\"zmdi zmdi-long-arrow-up\"></i></span></p>
                </div>
            </div>
        </div>
    </div>
 </div>  
\t  
\t<div class=\"row\">
     <div class=\"col-12 col-lg-8 col-xl-8\">
\t    <div class=\"card\">
\t\t <div class=\"card-header\">Site Traffic
\t\t   <div class=\"card-action\">
\t\t\t <div class=\"dropdown\">
\t\t\t <a href=\"javascript:void();\" class=\"dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\">
\t\t\t  <i class=\"icon-options\"></i>
\t\t\t </a>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void();\">Action</a>
\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void();\">Another action</a>
\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void();\">Something else here</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void();\">Separated link</a>
\t\t\t   </div>
\t\t\t  </div>
\t\t   </div>
\t\t </div>
\t\t <div class=\"card-body\">
\t\t    <ul class=\"list-inline\">
\t\t\t  <li class=\"list-inline-item\"><i class=\"fa fa-circle mr-2 text-white\"></i>New Visitor</li>
\t\t\t  <li class=\"list-inline-item\"><i class=\"fa fa-circle mr-2 text-light\"></i>Old Visitor</li>
\t\t\t</ul>
\t\t\t<div class=\"chart-container-1\">
\t\t\t  <canvas id=\"chart1\"></canvas>
\t\t\t</div>
\t\t </div>
\t\t 
\t\t <div class=\"row m-0 row-group text-center border-top border-light-3\">
\t\t   <div class=\"col-12 col-lg-4\">
\t\t     <div class=\"p-3\">
\t\t       <h5 class=\"mb-0\">45.87M</h5>
\t\t\t   <small class=\"mb-0\">Overall Visitor <span> <i class=\"fa fa-arrow-up\"></i> 2.43%</span></small>
\t\t     </div>
\t\t   </div>
\t\t   <div class=\"col-12 col-lg-4\">
\t\t     <div class=\"p-3\">
\t\t       <h5 class=\"mb-0\">15:48</h5>
\t\t\t   <small class=\"mb-0\">Visitor Duration <span> <i class=\"fa fa-arrow-up\"></i> 12.65%</span></small>
\t\t     </div>
\t\t   </div>
\t\t   <div class=\"col-12 col-lg-4\">
\t\t     <div class=\"p-3\">
\t\t       <h5 class=\"mb-0\">245.65</h5>
\t\t\t   <small class=\"mb-0\">Pages/Visit <span> <i class=\"fa fa-arrow-up\"></i> 5.62%</span></small>
\t\t     </div>
\t\t   </div>
\t\t </div>
\t\t 
\t\t</div>
\t </div>

     <div class=\"col-12 col-lg-4 col-xl-4\">
        <div class=\"card\">
           <div class=\"card-header\">Weekly sales
             <div class=\"card-action\">
             <div class=\"dropdown\">
             <a href=\"javascript:void();\" class=\"dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\">
              <i class=\"icon-options\"></i>
             </a>
              <div class=\"dropdown-menu dropdown-menu-right\">
              <a class=\"dropdown-item\" href=\"javascript:void();\">Action</a>
              <a class=\"dropdown-item\" href=\"javascript:void();\">Another action</a>
              <a class=\"dropdown-item\" href=\"javascript:void();\">Something else here</a>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item\" href=\"javascript:void();\">Separated link</a>
               </div>
              </div>
             </div>
           </div>
           <div class=\"card-body\">
\t\t     <div class=\"chart-container-2\">
               <canvas id=\"chart2\"></canvas>
\t\t\t  </div>
           </div>
           <div class=\"table-responsive\">
             <table class=\"table align-items-center\">
               <tbody>
                 <tr>
                   <td><i class=\"fa fa-circle text-white mr-2\"></i> Direct</td>
                   <td>\$5856</td>
                   <td>+55%</td>
                 </tr>
                 <tr>
                   <td><i class=\"fa fa-circle text-light-1 mr-2\"></i>Affiliate</td>
                   <td>\$2602</td>
                   <td>+25%</td>
                 </tr>
                 <tr>
                   <td><i class=\"fa fa-circle text-light-2 mr-2\"></i>E-mail</td>
                   <td>\$1802</td>
                   <td>+15%</td>
                 </tr>
                 <tr>
                   <td><i class=\"fa fa-circle text-light-3 mr-2\"></i>Other</td>
                   <td>\$1105</td>
                   <td>+5%</td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
     </div>
\t</div><!--End Row-->
\t
\t<div class=\"row\">
\t <div class=\"col-12 col-lg-12\">
\t   <div class=\"card\">
\t     <div class=\"card-header\">Recent Order Tables
\t\t  <div class=\"card-action\">
             <div class=\"dropdown\">
             <a href=\"javascript:void();\" class=\"dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\">
              <i class=\"icon-options\"></i>
             </a>
              <div class=\"dropdown-menu dropdown-menu-right\">
              <a class=\"dropdown-item\" href=\"javascript:void();\">Action</a>
              <a class=\"dropdown-item\" href=\"javascript:void();\">Another action</a>
              <a class=\"dropdown-item\" href=\"javascript:void();\">Something else here</a>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item\" href=\"javascript:void();\">Separated link</a>
               </div>
              </div>
             </div>
\t\t </div>
\t       <div class=\"table-responsive\">
                 <table class=\"table align-items-center table-flush table-borderless\">
                  <thead>
                   <tr>
                     <th>Product</th>
                     <th>Photo</th>
                     <th>Product ID</th>
                     <th>Amount</th>
                     <th>Date</th>
                     <th>Shipping</th>
                   </tr>
                   </thead>
                   <tbody><tr>
                    <td>Iphone 5</td>
                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                    <td>#9405822</td>
                    <td>\$ 1250.00</td>
                    <td>03 Aug 2017</td>
\t\t\t\t\t<td><div class=\"progress shadow\" style=\"height: 3px;\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 90%\"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Earphone GL</td>
                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                    <td>#9405820</td>
                    <td>\$ 1500.00</td>
                    <td>03 Aug 2017</td>
\t\t\t\t\t<td><div class=\"progress shadow\" style=\"height: 3px;\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>HD Hand Camera</td>
                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                    <td>#9405830</td>
                    <td>\$ 1400.00</td>
                    <td>03 Aug 2017</td>
\t\t\t\t\t<td><div class=\"progress shadow\" style=\"height: 3px;\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%\"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Clasic Shoes</td>
                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                    <td>#9405825</td>
                    <td>\$ 1200.00</td>
                    <td>03 Aug 2017</td>
\t\t\t\t\t<td><div class=\"progress shadow\" style=\"height: 3px;\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%\"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Hand Watch</td>
                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                    <td>#9405840</td>
                    <td>\$ 1800.00</td>
                    <td>03 Aug 2017</td>
\t\t\t\t\t<td><div class=\"progress shadow\" style=\"height: 3px;\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 40%\"></div>
                        </div></td>
                   </tr>
\t\t\t\t   
\t\t\t\t   <tr>
                    <td>Clasic Shoes</td>
                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                    <td>#9405825</td>
                    <td>\$ 1200.00</td>
                    <td>03 Aug 2017</td>
\t\t\t\t\t<td><div class=\"progress shadow\" style=\"height: 3px;\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%\"></div>
                        </div></td>
                   </tr>

                 </tbody></table>
               </div>
\t   </div>
\t </div>
\t</div><!--End Row-->

      <!--End Dashboard Content-->
              {% endblock %}

\t  
\t<!--start overlay-->
\t\t  <div class=\"overlay toggle-menu\"></div>
\t\t<!--end overlay-->
\t\t
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href=\"javaScript:void();\" class=\"back-to-top\"><i class=\"fa fa-angle-double-up\"></i> </a>
    <!--End Back To Top Button-->
\t
\t<!--Start footer-->
\t<footer class=\"footer\">
      <div class=\"container\">
        <div class=\"text-center\">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
\t<!--End footer-->
\t
  <!--start color switcher-->
   <div class=\"right-sidebar\">
    <div class=\"switcher-icon\">
      <i class=\"zmdi zmdi-settings zmdi-hc-spin\"></i>
    </div>
    <div class=\"right-sidebar-content\">

      <p class=\"mb-0\">Gaussion Texture</p>
      <hr>
      
      <ul class=\"switcher\">
        <li id=\"theme1\"></li>
        <li id=\"theme2\"></li>
        <li id=\"theme3\"></li>
        <li id=\"theme4\"></li>
        <li id=\"theme5\"></li>
        <li id=\"theme6\"></li>
      </ul>

      <p class=\"mb-0\">Gradient Background</p>
      <hr>
      
      <ul class=\"switcher\">
        <li id=\"theme7\"></li>
        <li id=\"theme8\"></li>
        <li id=\"theme9\"></li>
        <li id=\"theme10\"></li>
        <li id=\"theme11\"></li>
        <li id=\"theme12\"></li>
\t\t<li id=\"theme13\"></li>
        <li id=\"theme14\"></li>
        <li id=\"theme15\"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src=\"{{ asset('assets/js/jquery.min.js')}}\"></script>
  <script src=\"assets/js/popper.min.js\"></script>
  <script src=\"assets/js/bootstrap.min.js\"></script>
\t
 <!-- simplebar js -->
  <script src=\"{{ asset('assets/plugins/simplebar/js/simplebar.js')}}\"></script>
  <!-- sidebar-menu js -->
  <script src=\"{{ asset('assets/js/sidebar-menu.js')}}\"></script>
  <!-- loader scripts -->
  <script src=\"{{ asset('assets/js/jquery.loading-indicator.js')}}\"></script>
  <!-- Custom scripts -->
  <script src=\"{{ asset('assets/js/app-script.js')}}\"></script>
  <!-- Chart js -->
  
  <script src=\"{{ asset('assets/plugins/Chart.js/Chart.min.js')}}\"></script>
 
  <!-- Index js -->
  <script src=\"{{ asset('assets/js/index.js')}}\"></script>
    <script src=\"{{ asset('assets/js/slider.js')}}\"></script>
      <script src=\"{{ asset('assets/js/jQuery.UI.js')}}\"></script>
  
</body>
</html>
", "indexproduit.html.twig", "C:\\Users\\ASUS\\Desktop\\web\\ethleteinteg\\templates\\indexproduit.html.twig");
    }
}