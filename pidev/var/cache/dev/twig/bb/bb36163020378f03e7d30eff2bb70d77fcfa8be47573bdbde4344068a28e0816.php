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

/* front.html.twig */
class __TwigTemplate_4064ac679ae3c610d575d2290c43a92491a53fc53cae7c7b923c9387efe9ac19 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">

<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t\t<title>NEXTEC</title>
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<!-- favicon -->\t\t
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/logo/favicon.ico"), "html", null, true);
        echo "\">

\t\t<!-- all css here -->

\t\t<!-- bootstrap v3.3.6 css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t<!-- owl.carousel css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/owl.carousel.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"css/owl.transitions.css\">
       <!-- Animate css -->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/animate.css"), "html", null, true);
        echo "\">
        <!-- meanmenu css -->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/meanmenu.min.css"), "html", null, true);
        echo "\">
\t\t<!-- font-awesome css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/themify-icons.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/flaticon.css"), "html", null, true);
        echo "\">
\t\t<!-- magnific css -->
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/magnific.min.css"), "html", null, true);
        echo "\">
\t\t<!-- style css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/style.css"), "html", null, true);
        echo "\">
\t\t<!-- responsive css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/responsive.css"), "html", null, true);
        echo "\">

\t\t<!-- modernizr css -->
\t\t<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/vendor/modernizr-2.8.3.min.js"), "html", null, true);
        echo "\"></script>
\t</head>
\t\t<body>

\t<div id=\"preloader\"></div>
        <header class=\"header-one\">
            <!-- Start top bar -->
            <div class=\"topbar-area fix hidden-xs\">
                <div class=\"container\">
                    <div class=\"row\">
                       <div class=\"col-md-6 col-sm-6\">
                           <div class=\"topbar-left\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-envelope\"></i> info@aievari4.com</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-phone\"></i> +909-654-9805</a></li>
                                </ul>
\t\t\t\t\t\t\t</div>
                        </div>
                        <div class=\" col-md-6 col-sm-6\">
                            <div class=\"topbar-right\">
                                <div class=\"top-social\">
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-google\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End top bar -->
            <!-- header-area start -->
            <div id=\"sticker\" class=\"header-area hidden-xs\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12 col-sm-12\">
                            <div class=\"row\">
                                <!-- logo start -->
                                <div class=\"col-md-3 col-sm-3\">
                                    <div class=\"logo\">
                                        <!-- Brand -->
                                        <a class=\"navbar-brand page-scroll white-logo\" href=\"index-2.html\">
                                            <img src=\"img/logo/logo3.png\" alt=\"\">
                                        </a>
                                        <a class=\"navbar-brand page-scroll black-logo\" href=\"index-2.html\">
                                            <img src=\"img/logo/logo.png\" alt=\"\">
                                        </a>
                                    </div>
                                    <!-- logo end -->
                                </div>
                                <div class=\"col-md-9 col-sm-9\">
                                    <div class=\"header-right-link\">
                                        <!-- search option end -->
                                        <a class=\"s-menu\" href=\"login.html\">Login</a>
                                    </div>
                                    <!-- mainmenu start -->
                                    <nav class=\"navbar navbar-default\">
                                        <div class=\"collapse navbar-collapse\" id=\"navbar-example\">
                                            <div class=\"main-menu\">
                                                <ul class=\"nav navbar-nav navbar-right\">
                                                    <li><a class=\"pages\" href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_index");
        echo "\">Equipe</a>
                                                        <ul class=\"sub-menu\">
                                                            <li><a href=\"index-2.html\">Home 01</a></li>
                                                            <li><a href=\"index-3.html\">Home 02</a></li>
                                                        </ul>
                                                    </li>
                                                   
                                                   
                                                    <li><a class=\"pages\" href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invitation_index");
        echo "\">invitation</a>
                                                        <ul class=\"sub-menu\">
                                                            <li><a href=\"blog.html\">Blog grid</a></li>
                                                            <li><a href=\"blog-sidebar.html\">Blog Sidebar</a></li>
                                                            <li><a href=\"blog-details.html\">Blog Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index");
        echo "\">avis</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                    <!-- mainmenu end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class=\"mobile-menu-area hidden-lg hidden-md hidden-sm\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"mobile-menu\">
                                <div class=\"logo\">
                                    <a href=\"index-2.html\"><img src=\"img/logo/logo.png\" alt=\"\" /></a>
                                </div>
                                <nav id=\"dropdown\">
                                    <ul>
                                        <li><a class=\"pages\" href=\"index-2.html\">Home</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"index-2.html\">Home 01</a></li>
                                                <li><a href=\"index-3.html\">Home 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"about.html\">About us</a></li>
                                        <li><a href=\"investment.html\">Investment</a></li>
                                        <li><a class=\"pages\" href=\"#\">Pages</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"team.html\">team</a></li>
                                                <li><a href=\"faq.html\">FAQ</a></li>
                                                <li><a href=\"review.html\">Reviews</a></li>
                                                <li><a href=\"login.html\">Login</a></li>
                                                <li><a href=\"signup.html\">Register</a></li>
                                            </ul>
                                        </li>
                                        <li><a class=\"pages\" href=\"#\">Blog</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"blog.html\">Blog grid</a></li>
                                                <li><a href=\"blog-sidebar.html\">Blog Sidebar</a></li>
                                                <li><a href=\"blog-details.html\">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"contact.html\">contacts</a></li>
                                    </ul>
                                </nav>
                            </div>\t\t\t\t\t
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->\t\t
        </header>
        <!-- header end -->
        <!-- Start Intro Area -->
\t\t<div class=\"slide-area fix\" data-stellar-background-ratio=\"0.6\">
            <div class=\"display-table\">
                <div class=\"display-table-cell\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <!-- Start Slider content -->
                                <div class=\"slide-content text-center\">
                                    <h2 class=\"title2\">Best secure investment plan</h2>
                                    <div class=\"layer-1-3\">
                                        <a href=\"#\" class=\"ready-btn left-btn\" >Get started</a>
                                        <div class=\"video-content\">
                                            <a href=\"https://www.youtube.com/watch?v=O33uuBh6nXA\" class=\"video-play vid-zone\">
                                                <i class=\"fa fa-play\"></i>
                                                <span>watch video</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Slider content -->
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
\t\t</div>
\t\t<!-- End Intro Area -->
          ";
        // line 203
        $this->displayBlock('body', $context, $blocks);
        // line 971
        echo "        <!-- Start Footer Area -->
        <footer class=\"footer1\">
            <div class=\"footer-area\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                            <div class=\"footer-content logo-footer\">
                                <div class=\"footer-head\">
                                    <div class=\"footer-logo\">
                                    \t<a class=\"footer-black-logo\" href=\"#\"><img src=\"img/logo/logo.png\" alt=\"\"></a>
                                    </div>
                                    <p>
                                        Are you looking for professional advice for your new business. Are you looking for professional advice for your new business. Are you looking for professional advice for your new business.
                                    </p>
                                    <div class=\"subs-feilds\">
                                        <div class=\"suscribe-input\">
                                            <input type=\"email\" class=\"email form-control width-80\" id=\"sus_email\" placeholder=\"Type Email\">
                                            <button type=\"submit\" id=\"sus_submit\" class=\"add-btn\">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class=\"col-md-4 col-sm-3 col-xs-12\">
                            <div class=\"footer-content\">
                                <div class=\"footer-head\">
                                    <h4>Services Link</h4>
                                    <ul class=\"footer-list\">
                                        <li><a href=\"#\">About us</a></li>
                                        <li><a href=\"#\">Services </a></li>
                                        <li><a href=\"#\">Events</a></li>
                                        <li><a href=\"#\">Promotion</a></li>
                                        <li><a href=\"#\">Transition</a></li>
                                        <li><a href=\"#\">Social Media</a></li>
                                    </ul>
                                    <ul class=\"footer-list hidden-sm\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Customer Care</a></li>
                                        <li><a href=\"#\">Live chat</a></li>
                                        <li><a href=\"#\">Notification</a></li>
                                        <li><a href=\"#\">Privacy</a></li>
                                        <li><a href=\"#\">Terms & Condition</a></li>
                                        <li><a href=\"#\">Contact us </a></li>
\t\t\t\t\t\t\t\t\t</ul>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class=\"col-md-3 col-sm-4 col-xs-12\">
                            <div class=\"footer-content last-content\">
                                <div class=\"footer-head\">
                                    <h4>Information</h4> 
                                    <div class=\"footer-contacts\">
\t\t\t\t\t\t\t\t\t\t<p><span>Tel :</span> +0890-564-5644</p>
\t\t\t\t\t\t\t\t\t\t<p><span>Email :</span> info@aievari4.com</p>
\t\t\t\t\t\t\t\t\t\t<p><span>Location :</span> House- 65/4, London</p>
\t\t\t\t\t\t\t\t\t</div> 
                                    <div class=\"footer-icons\">
                                        <ul>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-facebook\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-twitter\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-google\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-pinterest\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-instagram\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"footer-area-bottom\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"copyright\">
                                <p>
                                    Copyright © 2020
                                    <a href=\"#\">Aievari</a> All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
\t\t<!-- all js here -->

\t\t<!-- jquery latest version -->
\t\t<script src=\"";
        // line 1081
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- bootstrap js -->
\t\t<script src=\"";
        // line 1083
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- owl.carousel js -->
\t\t<script src=\"";
        // line 1085
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t  <!-- stellar js -->
        <script src=\"";
        // line 1087
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- magnific js -->
        <script src=\"";
        // line 1089
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/magnific.min.js"), "html", null, true);
        echo "\"></script>
        <!-- wow js -->
        <script src=\"";
        // line 1091
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontjs/wow.min.js"), "html", null, true);
        echo "\"></script>
        <!-- meanmenu js -->
        <script src=\"";
        // line 1093
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.meanmenu.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- Form validator js -->
\t\t<script src=\"";
        // line 1095
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/form-validator.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- plugins js -->
\t\t<script src=\"";
        // line 1097
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/plugins.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- main js -->
\t\t<script src=\"";
        // line 1099
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/main.js"), "html", null, true);
        echo "\"></script>
\t</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 203
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 204
        echo "        <!-- Start Count area -->
        <div class=\"counter-area fix area-padding-2\">
            <div class=\"container\">
                <!-- Start counter Area -->
                 <div class=\"row\">
                    <div class=\"fun-content\">
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <!-- fun_text  -->
                            <div class=\"fun_text\">
                                <span class=\"counter-icon\"><i class=\"flaticon-035-savings\"></i></span>
                                <span class=\"counter\">\$5974544</span>
                                <h4>Total Deposited</h4>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <!-- fun_text  -->
                            <div class=\"fun_text\">
                               <span class=\"counter-icon\"><i class=\"flaticon-034-reward\"></i></span>
                                <span class=\"counter\">2209</span>
                                <h4>Total Members</h4>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <!-- fun_text  -->
                            <div class=\"fun_text\">
                               <span class=\"counter-icon\"><i class=\"flaticon-016-graph\"></i></span>
                                <span class=\"counter\">\$3974544</span>
                                <h4>Total Payments</h4>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <!-- fun_text  -->
                            <div class=\"fun_text\">
                              <span class=\"counter-icon\"><i class=\"flaticon-043-world\"></i></span>
                                <span class=\"counter\">80</span>
                                <h4>World Country</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Count area -->
        <!-- Start Invest area -->
        <div class=\"invest-area bg-color area-padding-2\">
            <div class=\"container\">
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"section-headline text-center\">
                            <h3>The best investment plan</h3>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"row\">
                    <div class=\"pricing-content\">
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"pri_table_list\">
                                <div class=\"top-price-inner\">
                                   <div class=\"rates\">
                                        <span class=\"prices\">5%</span><span class=\"users\">Daily</span>
                                    </div>
                                    <span class=\"per-day\">10 days</span>
                                </div>
                                <ol class=\"pricing-text\">
                                    <li class=\"check\">Minimam Invest : \$100</li>
                                    <li class=\"check\">Maximam Invest : \$1000</li>
                                    <li class=\"check\">Avarage Monthly : 50% </li>
                                </ol>
                                <div class=\"price-btn blue\">
                                    <a class=\"blue\" href=\"#\">Deposite</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"pri_table_list\">
                                <div class=\"top-price-inner\">
                                   <div class=\"rates\">
                                        <span class=\"prices\">15%</span><span class=\"users\">Daily</span>
                                    </div>
                                    <span class=\"per-day\">30 days</span>
                                </div>
                                <ol class=\"pricing-text\">
                                    <li class=\"check\">Minimam Invest : \$1000</li>
                                    <li class=\"check\">Maximam Invest : \$10000</li>
                                    <li class=\"check\">Avarage Monthly :100% </li>
                                </ol>
                                <div class=\"price-btn blue\">
                                    <a class=\"blue\" href=\"#\">Deposite</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"pri_table_list\">
                                <div class=\"top-price-inner\">
                                   <span class=\"base\">Popular</span>
                                   <div class=\"rates\">
                                        <span class=\"prices\">50%</span><span class=\"users\">Daily</span>
                                    </div>
                                    <span class=\"per-day\">45 days</span>
                                </div>
                                <ol class=\"pricing-text\">
                                    <li class=\"check\">Minimam Invest : \$1000</li>
                                    <li class=\"check\">Maximam Invest : \$50000</li>
                                    <li class=\"check\">Avarage Monthly : 200% </li>
                                </ol>
                                <div class=\"price-btn blue\">
                                    <a class=\"blue\" href=\"#\">Deposite</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"pri_table_list\">
                                <span class=\"base\">Best sale</span>
                                <div class=\"top-price-inner\">
                                   <div class=\"rates\">
                                        <span class=\"prices\">100%</span><span class=\"users\">Daily</span>
                                    </div>
                                    <span class=\"per-day\">60 days</span>
                                </div>
                                <ol class=\"pricing-text\">
                                    <li class=\"check\">Minimam Invest : \$1000</li>
                                    <li class=\"check\">Maximam Invest : \$50000</li>
                                    <li class=\"check\">Avarage Monthly : 250% </li>
                                </ol>
                                <div class=\"price-btn blue\">
                                    <a class=\"blue\" href=\"#\">Deposite</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Invest area -->
        <!-- Start Support-service Area -->
        <div class=\"support-service-area fix area-padding-2\">
            <div class=\"container\">
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"section-headline text-center\">
                            <h3>Why choose investment plan</h3>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"row\">
                    <div class=\"support-all\">
                        <!-- Start About -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services wow \">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-023-management\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Expert management</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start About -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services \">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-036-security\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Secure investment</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services \">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-003-approve\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Registered company</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services\">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-042-wallet\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Instant withdrawal</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services \">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-032-report\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Verified security</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services\">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-024-megaphone\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Live customer support</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Support-service Area -->
        <!-- Start Self-area -->
        <div class=\"self-area area-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- column end -->
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"self-content\">
\t\t\t\t\t\t\t<h4>An investment multi-national firm is a invest money of one or more experts. Provides more profite, We help your satele to future life and then create the road. Grow Money speedly without any risk. </h4>
                            <span class=\"talk-text\">Alex ferneld, CEO</span>
                        </div>
                    </div>
                    <!-- column end -->
                </div>
            </div>
        </div>
        <!-- End Self-area -->
        <!-- Start Work proses Area -->
        <div class=\"work-proses fix bg-color area-padding-2\">
\t\t\t<div class=\"container\">
\t\t\t    <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"section-headline text-center\">
                            <h3>Referral bonus level</h3>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"work-proses-inner text-center\">
\t\t\t\t\t\t\t    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <div class=\"single-proses\">
                                        <div class=\"proses-content\">
                                            <div class=\"proses-icon point-blue\">
                                                <span class=\"point-view\">01</span>
                                                <a href=\"#\"><i class=\"ti-briefcase\"></i></a>
                                            </div>
                                            <div class=\"proses-text\">
                                                <h4>Level 01 instant 30% commission</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End column -->
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <div class=\"single-proses\">
                                        <div class=\"proses-content\">
                                            <div class=\"proses-icon point-orange\">
                                               <span class=\"point-view\">02</span>
                                                <a href=\"#\"><i class=\"ti-layers\"></i></a>
                                            </div>
                                            <div class=\"proses-text\">
                                                <h4>Level 02 instant 20% commission</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End column -->
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <div class=\"single-proses last-item\">
                                        <div class=\"proses-content\">
                                            <div class=\"proses-icon point-green\">
                                               <span class=\"point-view\">03</span>
                                                <a href=\"#\"><i class=\"ti-bar-chart-alt\"></i></a>
                                            </div>
                                            <div class=\"proses-text\">
                                                <h4>Level 03 instant 10% commission</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End column -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        <!-- End Work proses Area -->
       
        <!-- Start Banner Area -->
        <div class=\"banner-area area-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"banner-all area-80 text-center\">
                            <div class=\"banner-content\">
                                <h3>Our investment plan world wide business relations for development</h3>
                                <a class=\"banner-btn\" href=\"#\">Sign up now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->
        <!-- Start Blog Area-->
        <div class=\"blog-area fix bg-color area-padding-2\">
            <div class=\"container\">
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"section-headline text-center\">
                            <h3>Global investment plan news</h3>
\t\t\t\t\t\t\t<p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"row\">
                    <div class=\"blog-grid home-blog\">
                        <!-- Start single blog -->
                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"single-blog\">
                               <div class=\"blog-image\">
\t\t\t\t\t\t\t\t\t<a class=\"image-scale\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/blog/b1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
                                <div class=\"blog-content\">
                                   <div class=\"blog-meta\">
                                        <span class=\"admin-type\">
                                            <i class=\"fa fa-user\"></i>
                                            Admin
                                        </span>
                                        <span class=\"date-type\">
                                            <i class=\"fa fa-calendar\"></i>
                                            20 july, 2019
                                        </span>
                                        <span class=\"comments-type\">
                                            <i class=\"fa fa-comment-o\"></i>
                                            13
                                        </span>
                                    </div>
                                    <a href=\"#\">
                                        <h4>Creative design clients response is better</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"single-blog\">
                                <div class=\"blog-content\">
                                   <div class=\"blog-meta\">
                                       <span class=\"admin-type\">
                                            <i class=\"fa fa-user\"></i>
                                            Admin
                                        </span>
                                        <span class=\"date-type\">
                                           <i class=\"fa fa-calendar\"></i>
                                            13 may, 2018
                                        </span>
                                        <span class=\"comments-type\">
                                            <i class=\"fa fa-comment-o\"></i>
                                            16
                                        </span>
                                    </div>
                                    <a href=\"#\">
                                        <h4>Web development is a best work in future world</h4>
                                    </a>
                                </div>
                                <div class=\"blog-image\">
\t\t\t\t\t\t\t\t\t<a class=\"image-scale\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/blog/b2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"single-blog\">
                                <div class=\"blog-image\">
\t\t\t\t\t\t\t\t\t<a class=\"image-scale\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/blog/b3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
                                <div class=\"blog-content\">
                                   <div class=\"blog-meta\">
                                        <span class=\"admin-type\">
                                            <i class=\"fa fa-user\"></i>
                                            Admin
                                        </span>
                                        <span class=\"date-type\">
                                           <i class=\"fa fa-calendar\"></i>
                                            24 april, 2019
                                        </span>
                                        <span class=\"comments-type\">
                                            <i class=\"fa fa-comment-o\"></i>
                                            07
                                        </span>
                                    </div>
                                    <a href=\"#\">
                                        <h4>You can trust me and business with together</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"single-blog\">
                                <div class=\"blog-content\">
                                    <div class=\"blog-meta\">
                                        <span class=\"admin-type\">
                                            <i class=\"fa fa-user\"></i>
                                            Admin
                                        </span>
                                        <span class=\"date-type\">
                                           <i class=\"fa fa-calendar\"></i>
                                            28 june, 2019
                                        </span>
                                        <span class=\"comments-type\">
                                            <i class=\"fa fa-comment-o\"></i>
                                            32
                                        </span>
                                    </div>
                                    <a href=\"#\">
                                        <h4>business man want to be benifit any way</h4>
                                    </a>
                                </div>
                                <div class=\"blog-image\">
\t\t\t\t\t\t\t\t\t<a class=\"image-scale\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/blog/b4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div> 
                            </div>
                        </div>
                        <!-- End single blog -->
                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"single-blog\">
                                <div class=\"blog-image\">
\t\t\t\t\t\t\t\t\t<a class=\"image-scale\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/blog/b5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
                                <div class=\"blog-content\">
                                    <div class=\"blog-meta\">
                                        <span class=\"admin-type\">
                                            <i class=\"fa fa-user\"></i>
                                            Admin
                                        </span>
                                        <span class=\"date-type\">
                                           <i class=\"fa fa-calendar\"></i>
                                            28 june, 2019
                                        </span>
                                        <span class=\"comments-type\">
                                            <i class=\"fa fa-comment-o\"></i>
                                            32
                                        </span>
                                    </div>
                                    <a href=\"#\">
                                        <h4>business man want to be benifit any way</h4>
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <!-- End single blog -->
                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"single-blog\">
                                <div class=\"blog-content\">
                                    <div class=\"blog-meta\">
                                        <span class=\"admin-type\">
                                            <i class=\"fa fa-user\"></i>
                                            Admin
                                        </span>
                                        <span class=\"date-type\">
                                           <i class=\"fa fa-calendar\"></i>
                                            28 june, 2019
                                        </span>
                                        <span class=\"comments-type\">
                                            <i class=\"fa fa-comment-o\"></i>
                                            32
                                        </span>
                                    </div>
                                    <a href=\"#\">
                                        <h4>business man want to be benifit any way</h4>
                                    </a>
                                </div>
                                <div class=\"blog-image\">
\t\t\t\t\t\t\t\t\t<a class=\"image-scale\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/blog/b6.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Blog Area-->
        <!-- Start reviews Area -->
        <div class=\"reviews-area fix area-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"reviews-top\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                            <div class=\"testimonial-inner\">
                                <div class=\"review-head\">
                                    <h3>Our customer say about our company work</h3>
                                    <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy. The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy</p>
                                    <a class=\"reviews-btn\" href=\"review.html\">More reviews</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-7 col-sm-7 col-xs-12\">
                            <div class=\"reviews-content\">
                                <!-- start testimonial carousel -->
                                <div class=\"testimonial-carousel item-indicator\">
                                    <div class=\"single-testi\">
                                        <div class=\"testi-text\">
                                            <div class=\"clients-text\">
                                                <div class=\"client-rating\">
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                </div>
                                                <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                            </div>
                                            <div class=\"testi-img \">
                                                <img src=\"img/review/1.jpg\" alt=\"\">
                                                <div class=\"guest-details\">
                                                    <h4>Hamilton</h4>
                                                    <span class=\"guest-rev\">Clients - <a href=\"#\">General customer</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class=\"single-testi\">
                                        <div class=\"testi-text\">
                                            <div class=\"clients-text\">
                                                <div class=\"client-rating\">
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                </div>
                                                <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                            </div>
                                            <div class=\"testi-img \">
                                                <img src=\"img/review/2.jpg\" alt=\"\">
                                                <div class=\"guest-details\">
                                                    <h4>Angel lima</h4>
                                                    <span class=\"guest-rev\">Clients - <a href=\"#\">General customer</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class=\"single-testi\">
                                        <div class=\"testi-text\">
                                            <div class=\"clients-text\">
                                                <div class=\"client-rating\">
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                </div>
                                                <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                            </div>
                                            <div class=\"testi-img \">
                                                <img src=\"img/review/3.jpg\" alt=\"\">
                                                <div class=\"guest-details\">
                                                    <h4>Arthur Doil</h4>
                                                    <span class=\"guest-rev\">Clients - <a href=\"#\">General customer</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class=\"single-testi\">
                                        <div class=\"testi-text\">
                                            <div class=\"clients-text\">
                                                <div class=\"client-rating\">
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                </div>
                                                <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                            </div>
                                            <div class=\"testi-img \">
                                                <img src=\"img/review/4.jpg\" alt=\"\">
                                                <div class=\"guest-details\">
                                                    <h4>Gabriel Hank</h4>
                                                    <span class=\"guest-rev\">Clients - <a href=\"#\">General customer</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End reviews Area -->
        <!-- Start FAQ area -->
        <div class=\"faq-area bg-color area-padding\">
            <div class=\"container\">
               <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"section-headline text-center\">
                            <h3>Some important FAQ</h3>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"row\">
                    <!-- Start Column Start -->
                    <div class=\"col-md-7 col-sm-6 col-xs-12\">
                        <div class=\"company-faq\">
                            <div class=\"faq-full\">
\t\t\t\t\t\t\t\t<div class=\"faq-details\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t\t\t\t\t\t<!-- Panel Default -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"active\" data-parent=\"#accordion\" href=\"#check1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"acc-icons\"></span>How to successful our mission and vision
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"check1\" class=\"panel-collapse collapse in\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tWhen replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End Panel Default -->
\t\t\t\t\t\t\t\t\t\t<!-- Panel Default -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#check2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"acc-icons\"></span>Clients satisfaction make company Value.
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"check2\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tWhen replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End Panel Default -->
\t\t\t\t\t\t\t\t\t\t<!-- Panel Default -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#check3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"acc-icons\"></span>World class creative design and development firm. 
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"check3\" class=\"panel-collapse collapse \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tWhen replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End Panel Default -->\t
\t\t\t\t\t\t\t\t\t\t<!-- Panel Default -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#check4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"acc-icons\"></span>We are the best online flatform 
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"check4\" class=\"panel-collapse collapse \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tWhen replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End Panel Default -->
\t\t\t\t\t\t\t\t\t\t<!-- Panel Default -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#check5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"acc-icons\"></span>Clients satisfaction make company Value.
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"check5\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tWhen replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End Panel Default -->\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End FAQ -->
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                    <!-- End Column -->
                    <div class=\"col-md-5 col-sm-6 col-xs-12\">
                        <div class=\"faq-content\">
                        \t<h4>Have a any qustion?</h4>
\t\t\t\t\t\t\t<div class=\"faq-quote\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<form id=\"contactForm\" method=\"POST\" action=\"http://rockstheme.com/rocks/aievari-live/contact.php\" class=\"contact-form\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"name\" class=\"form-control\" placeholder=\"Name\" required data-error=\"Please enter your name\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"email form-control\" id=\"email\" placeholder=\"Email\" required data-error=\"Please enter your email\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"msg_subject\" class=\"form-control\" placeholder=\"Subject\" required=\"\" data-error=\"Please enter your message subject\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"message\" rows=\"7\" placeholder=\"Massage\" class=\"form-control\" required data-error=\"Write your message\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"submit\" class=\"quote-btn\">Submit</button>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"msgSubmit\" class=\"h3 text-center hidden\"></div> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                    <!-- End Column -->
                </div>
            </div>
        </div>
        <!-- End FAQ area -->
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 204,  467 => 203,  452 => 1099,  447 => 1097,  442 => 1095,  437 => 1093,  432 => 1091,  427 => 1089,  422 => 1087,  417 => 1085,  412 => 1083,  407 => 1081,  295 => 971,  293 => 203,  203 => 116,  193 => 109,  182 => 101,  115 => 37,  109 => 34,  104 => 32,  99 => 30,  94 => 28,  90 => 27,  86 => 26,  81 => 24,  76 => 22,  70 => 19,  65 => 17,  57 => 12,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"en\">

<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t\t<title>NEXTEC</title>
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<!-- favicon -->\t\t
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('front/img/logo/favicon.ico')}}\">

\t\t<!-- all css here -->

\t\t<!-- bootstrap v3.3.6 css -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('front/css/bootstrap.min.css')}}\">
\t\t<!-- owl.carousel css -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('front/css/owl.carousel.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"css/owl.transitions.css\">
       <!-- Animate css -->
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/animate.css')}}\">
        <!-- meanmenu css -->
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/meanmenu.min.css')}}\">
\t\t<!-- font-awesome css -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('front/css/font-awesome.min.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('front/css/themify-icons.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('front/css/flaticon.css')}}\">
\t\t<!-- magnific css -->
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/magnific.min.css')}}\">
\t\t<!-- style css -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('front/style.css')}}\">
\t\t<!-- responsive css -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('front/css/responsive.css')}}\">

\t\t<!-- modernizr css -->
\t\t<script src=\"{{ asset('front/js/vendor/modernizr-2.8.3.min.js')}}\"></script>
\t</head>
\t\t<body>

\t<div id=\"preloader\"></div>
        <header class=\"header-one\">
            <!-- Start top bar -->
            <div class=\"topbar-area fix hidden-xs\">
                <div class=\"container\">
                    <div class=\"row\">
                       <div class=\"col-md-6 col-sm-6\">
                           <div class=\"topbar-left\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-envelope\"></i> info@aievari4.com</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-phone\"></i> +909-654-9805</a></li>
                                </ul>
\t\t\t\t\t\t\t</div>
                        </div>
                        <div class=\" col-md-6 col-sm-6\">
                            <div class=\"topbar-right\">
                                <div class=\"top-social\">
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-google\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End top bar -->
            <!-- header-area start -->
            <div id=\"sticker\" class=\"header-area hidden-xs\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12 col-sm-12\">
                            <div class=\"row\">
                                <!-- logo start -->
                                <div class=\"col-md-3 col-sm-3\">
                                    <div class=\"logo\">
                                        <!-- Brand -->
                                        <a class=\"navbar-brand page-scroll white-logo\" href=\"index-2.html\">
                                            <img src=\"img/logo/logo3.png\" alt=\"\">
                                        </a>
                                        <a class=\"navbar-brand page-scroll black-logo\" href=\"index-2.html\">
                                            <img src=\"img/logo/logo.png\" alt=\"\">
                                        </a>
                                    </div>
                                    <!-- logo end -->
                                </div>
                                <div class=\"col-md-9 col-sm-9\">
                                    <div class=\"header-right-link\">
                                        <!-- search option end -->
                                        <a class=\"s-menu\" href=\"login.html\">Login</a>
                                    </div>
                                    <!-- mainmenu start -->
                                    <nav class=\"navbar navbar-default\">
                                        <div class=\"collapse navbar-collapse\" id=\"navbar-example\">
                                            <div class=\"main-menu\">
                                                <ul class=\"nav navbar-nav navbar-right\">
                                                    <li><a class=\"pages\" href=\"{{ path('app_equipe_index') }}\">Equipe</a>
                                                        <ul class=\"sub-menu\">
                                                            <li><a href=\"index-2.html\">Home 01</a></li>
                                                            <li><a href=\"index-3.html\">Home 02</a></li>
                                                        </ul>
                                                    </li>
                                                   
                                                   
                                                    <li><a class=\"pages\" href=\"{{ path('app_invitation_index') }}\">invitation</a>
                                                        <ul class=\"sub-menu\">
                                                            <li><a href=\"blog.html\">Blog grid</a></li>
                                                            <li><a href=\"blog-sidebar.html\">Blog Sidebar</a></li>
                                                            <li><a href=\"blog-details.html\">Blog Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href=\"{{ path('app_avis_index') }}\">avis</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                    <!-- mainmenu end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class=\"mobile-menu-area hidden-lg hidden-md hidden-sm\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"mobile-menu\">
                                <div class=\"logo\">
                                    <a href=\"index-2.html\"><img src=\"img/logo/logo.png\" alt=\"\" /></a>
                                </div>
                                <nav id=\"dropdown\">
                                    <ul>
                                        <li><a class=\"pages\" href=\"index-2.html\">Home</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"index-2.html\">Home 01</a></li>
                                                <li><a href=\"index-3.html\">Home 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"about.html\">About us</a></li>
                                        <li><a href=\"investment.html\">Investment</a></li>
                                        <li><a class=\"pages\" href=\"#\">Pages</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"team.html\">team</a></li>
                                                <li><a href=\"faq.html\">FAQ</a></li>
                                                <li><a href=\"review.html\">Reviews</a></li>
                                                <li><a href=\"login.html\">Login</a></li>
                                                <li><a href=\"signup.html\">Register</a></li>
                                            </ul>
                                        </li>
                                        <li><a class=\"pages\" href=\"#\">Blog</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"blog.html\">Blog grid</a></li>
                                                <li><a href=\"blog-sidebar.html\">Blog Sidebar</a></li>
                                                <li><a href=\"blog-details.html\">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"contact.html\">contacts</a></li>
                                    </ul>
                                </nav>
                            </div>\t\t\t\t\t
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->\t\t
        </header>
        <!-- header end -->
        <!-- Start Intro Area -->
\t\t<div class=\"slide-area fix\" data-stellar-background-ratio=\"0.6\">
            <div class=\"display-table\">
                <div class=\"display-table-cell\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <!-- Start Slider content -->
                                <div class=\"slide-content text-center\">
                                    <h2 class=\"title2\">Best secure investment plan</h2>
                                    <div class=\"layer-1-3\">
                                        <a href=\"#\" class=\"ready-btn left-btn\" >Get started</a>
                                        <div class=\"video-content\">
                                            <a href=\"https://www.youtube.com/watch?v=O33uuBh6nXA\" class=\"video-play vid-zone\">
                                                <i class=\"fa fa-play\"></i>
                                                <span>watch video</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Slider content -->
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
\t\t</div>
\t\t<!-- End Intro Area -->
          {% block body %}
        <!-- Start Count area -->
        <div class=\"counter-area fix area-padding-2\">
            <div class=\"container\">
                <!-- Start counter Area -->
                 <div class=\"row\">
                    <div class=\"fun-content\">
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <!-- fun_text  -->
                            <div class=\"fun_text\">
                                <span class=\"counter-icon\"><i class=\"flaticon-035-savings\"></i></span>
                                <span class=\"counter\">\$5974544</span>
                                <h4>Total Deposited</h4>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <!-- fun_text  -->
                            <div class=\"fun_text\">
                               <span class=\"counter-icon\"><i class=\"flaticon-034-reward\"></i></span>
                                <span class=\"counter\">2209</span>
                                <h4>Total Members</h4>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <!-- fun_text  -->
                            <div class=\"fun_text\">
                               <span class=\"counter-icon\"><i class=\"flaticon-016-graph\"></i></span>
                                <span class=\"counter\">\$3974544</span>
                                <h4>Total Payments</h4>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <!-- fun_text  -->
                            <div class=\"fun_text\">
                              <span class=\"counter-icon\"><i class=\"flaticon-043-world\"></i></span>
                                <span class=\"counter\">80</span>
                                <h4>World Country</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Count area -->
        <!-- Start Invest area -->
        <div class=\"invest-area bg-color area-padding-2\">
            <div class=\"container\">
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"section-headline text-center\">
                            <h3>The best investment plan</h3>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"row\">
                    <div class=\"pricing-content\">
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"pri_table_list\">
                                <div class=\"top-price-inner\">
                                   <div class=\"rates\">
                                        <span class=\"prices\">5%</span><span class=\"users\">Daily</span>
                                    </div>
                                    <span class=\"per-day\">10 days</span>
                                </div>
                                <ol class=\"pricing-text\">
                                    <li class=\"check\">Minimam Invest : \$100</li>
                                    <li class=\"check\">Maximam Invest : \$1000</li>
                                    <li class=\"check\">Avarage Monthly : 50% </li>
                                </ol>
                                <div class=\"price-btn blue\">
                                    <a class=\"blue\" href=\"#\">Deposite</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"pri_table_list\">
                                <div class=\"top-price-inner\">
                                   <div class=\"rates\">
                                        <span class=\"prices\">15%</span><span class=\"users\">Daily</span>
                                    </div>
                                    <span class=\"per-day\">30 days</span>
                                </div>
                                <ol class=\"pricing-text\">
                                    <li class=\"check\">Minimam Invest : \$1000</li>
                                    <li class=\"check\">Maximam Invest : \$10000</li>
                                    <li class=\"check\">Avarage Monthly :100% </li>
                                </ol>
                                <div class=\"price-btn blue\">
                                    <a class=\"blue\" href=\"#\">Deposite</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"pri_table_list\">
                                <div class=\"top-price-inner\">
                                   <span class=\"base\">Popular</span>
                                   <div class=\"rates\">
                                        <span class=\"prices\">50%</span><span class=\"users\">Daily</span>
                                    </div>
                                    <span class=\"per-day\">45 days</span>
                                </div>
                                <ol class=\"pricing-text\">
                                    <li class=\"check\">Minimam Invest : \$1000</li>
                                    <li class=\"check\">Maximam Invest : \$50000</li>
                                    <li class=\"check\">Avarage Monthly : 200% </li>
                                </ol>
                                <div class=\"price-btn blue\">
                                    <a class=\"blue\" href=\"#\">Deposite</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"pri_table_list\">
                                <span class=\"base\">Best sale</span>
                                <div class=\"top-price-inner\">
                                   <div class=\"rates\">
                                        <span class=\"prices\">100%</span><span class=\"users\">Daily</span>
                                    </div>
                                    <span class=\"per-day\">60 days</span>
                                </div>
                                <ol class=\"pricing-text\">
                                    <li class=\"check\">Minimam Invest : \$1000</li>
                                    <li class=\"check\">Maximam Invest : \$50000</li>
                                    <li class=\"check\">Avarage Monthly : 250% </li>
                                </ol>
                                <div class=\"price-btn blue\">
                                    <a class=\"blue\" href=\"#\">Deposite</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Invest area -->
        <!-- Start Support-service Area -->
        <div class=\"support-service-area fix area-padding-2\">
            <div class=\"container\">
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"section-headline text-center\">
                            <h3>Why choose investment plan</h3>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"row\">
                    <div class=\"support-all\">
                        <!-- Start About -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services wow \">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-023-management\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Expert management</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start About -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services \">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-036-security\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Secure investment</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services \">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-003-approve\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Registered company</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services\">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-042-wallet\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Instant withdrawal</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services \">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-032-report\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Verified security</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services\">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-024-megaphone\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Live customer support</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Support-service Area -->
        <!-- Start Self-area -->
        <div class=\"self-area area-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- column end -->
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"self-content\">
\t\t\t\t\t\t\t<h4>An investment multi-national firm is a invest money of one or more experts. Provides more profite, We help your satele to future life and then create the road. Grow Money speedly without any risk. </h4>
                            <span class=\"talk-text\">Alex ferneld, CEO</span>
                        </div>
                    </div>
                    <!-- column end -->
                </div>
            </div>
        </div>
        <!-- End Self-area -->
        <!-- Start Work proses Area -->
        <div class=\"work-proses fix bg-color area-padding-2\">
\t\t\t<div class=\"container\">
\t\t\t    <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"section-headline text-center\">
                            <h3>Referral bonus level</h3>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"work-proses-inner text-center\">
\t\t\t\t\t\t\t    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <div class=\"single-proses\">
                                        <div class=\"proses-content\">
                                            <div class=\"proses-icon point-blue\">
                                                <span class=\"point-view\">01</span>
                                                <a href=\"#\"><i class=\"ti-briefcase\"></i></a>
                                            </div>
                                            <div class=\"proses-text\">
                                                <h4>Level 01 instant 30% commission</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End column -->
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <div class=\"single-proses\">
                                        <div class=\"proses-content\">
                                            <div class=\"proses-icon point-orange\">
                                               <span class=\"point-view\">02</span>
                                                <a href=\"#\"><i class=\"ti-layers\"></i></a>
                                            </div>
                                            <div class=\"proses-text\">
                                                <h4>Level 02 instant 20% commission</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End column -->
                                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                                    <div class=\"single-proses last-item\">
                                        <div class=\"proses-content\">
                                            <div class=\"proses-icon point-green\">
                                               <span class=\"point-view\">03</span>
                                                <a href=\"#\"><i class=\"ti-bar-chart-alt\"></i></a>
                                            </div>
                                            <div class=\"proses-text\">
                                                <h4>Level 03 instant 10% commission</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End column -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        <!-- End Work proses Area -->
       
        <!-- Start Banner Area -->
        <div class=\"banner-area area-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"banner-all area-80 text-center\">
                            <div class=\"banner-content\">
                                <h3>Our investment plan world wide business relations for development</h3>
                                <a class=\"banner-btn\" href=\"#\">Sign up now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->
        <!-- Start Blog Area-->
        <div class=\"blog-area fix bg-color area-padding-2\">
            <div class=\"container\">
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"section-headline text-center\">
                            <h3>Global investment plan news</h3>
\t\t\t\t\t\t\t<p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"row\">
                    <div class=\"blog-grid home-blog\">
                        <!-- Start single blog -->
                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"single-blog\">
                               <div class=\"blog-image\">
\t\t\t\t\t\t\t\t\t<a class=\"image-scale\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/blog/b1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
                                <div class=\"blog-content\">
                                   <div class=\"blog-meta\">
                                        <span class=\"admin-type\">
                                            <i class=\"fa fa-user\"></i>
                                            Admin
                                        </span>
                                        <span class=\"date-type\">
                                            <i class=\"fa fa-calendar\"></i>
                                            20 july, 2019
                                        </span>
                                        <span class=\"comments-type\">
                                            <i class=\"fa fa-comment-o\"></i>
                                            13
                                        </span>
                                    </div>
                                    <a href=\"#\">
                                        <h4>Creative design clients response is better</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"single-blog\">
                                <div class=\"blog-content\">
                                   <div class=\"blog-meta\">
                                       <span class=\"admin-type\">
                                            <i class=\"fa fa-user\"></i>
                                            Admin
                                        </span>
                                        <span class=\"date-type\">
                                           <i class=\"fa fa-calendar\"></i>
                                            13 may, 2018
                                        </span>
                                        <span class=\"comments-type\">
                                            <i class=\"fa fa-comment-o\"></i>
                                            16
                                        </span>
                                    </div>
                                    <a href=\"#\">
                                        <h4>Web development is a best work in future world</h4>
                                    </a>
                                </div>
                                <div class=\"blog-image\">
\t\t\t\t\t\t\t\t\t<a class=\"image-scale\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/blog/b2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"single-blog\">
                                <div class=\"blog-image\">
\t\t\t\t\t\t\t\t\t<a class=\"image-scale\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/blog/b3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
                                <div class=\"blog-content\">
                                   <div class=\"blog-meta\">
                                        <span class=\"admin-type\">
                                            <i class=\"fa fa-user\"></i>
                                            Admin
                                        </span>
                                        <span class=\"date-type\">
                                           <i class=\"fa fa-calendar\"></i>
                                            24 april, 2019
                                        </span>
                                        <span class=\"comments-type\">
                                            <i class=\"fa fa-comment-o\"></i>
                                            07
                                        </span>
                                    </div>
                                    <a href=\"#\">
                                        <h4>You can trust me and business with together</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"single-blog\">
                                <div class=\"blog-content\">
                                    <div class=\"blog-meta\">
                                        <span class=\"admin-type\">
                                            <i class=\"fa fa-user\"></i>
                                            Admin
                                        </span>
                                        <span class=\"date-type\">
                                           <i class=\"fa fa-calendar\"></i>
                                            28 june, 2019
                                        </span>
                                        <span class=\"comments-type\">
                                            <i class=\"fa fa-comment-o\"></i>
                                            32
                                        </span>
                                    </div>
                                    <a href=\"#\">
                                        <h4>business man want to be benifit any way</h4>
                                    </a>
                                </div>
                                <div class=\"blog-image\">
\t\t\t\t\t\t\t\t\t<a class=\"image-scale\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/blog/b4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div> 
                            </div>
                        </div>
                        <!-- End single blog -->
                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"single-blog\">
                                <div class=\"blog-image\">
\t\t\t\t\t\t\t\t\t<a class=\"image-scale\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/blog/b5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
                                <div class=\"blog-content\">
                                    <div class=\"blog-meta\">
                                        <span class=\"admin-type\">
                                            <i class=\"fa fa-user\"></i>
                                            Admin
                                        </span>
                                        <span class=\"date-type\">
                                           <i class=\"fa fa-calendar\"></i>
                                            28 june, 2019
                                        </span>
                                        <span class=\"comments-type\">
                                            <i class=\"fa fa-comment-o\"></i>
                                            32
                                        </span>
                                    </div>
                                    <a href=\"#\">
                                        <h4>business man want to be benifit any way</h4>
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <!-- End single blog -->
                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"single-blog\">
                                <div class=\"blog-content\">
                                    <div class=\"blog-meta\">
                                        <span class=\"admin-type\">
                                            <i class=\"fa fa-user\"></i>
                                            Admin
                                        </span>
                                        <span class=\"date-type\">
                                           <i class=\"fa fa-calendar\"></i>
                                            28 june, 2019
                                        </span>
                                        <span class=\"comments-type\">
                                            <i class=\"fa fa-comment-o\"></i>
                                            32
                                        </span>
                                    </div>
                                    <a href=\"#\">
                                        <h4>business man want to be benifit any way</h4>
                                    </a>
                                </div>
                                <div class=\"blog-image\">
\t\t\t\t\t\t\t\t\t<a class=\"image-scale\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/blog/b6.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Blog Area-->
        <!-- Start reviews Area -->
        <div class=\"reviews-area fix area-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"reviews-top\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                            <div class=\"testimonial-inner\">
                                <div class=\"review-head\">
                                    <h3>Our customer say about our company work</h3>
                                    <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy. The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy</p>
                                    <a class=\"reviews-btn\" href=\"review.html\">More reviews</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-7 col-sm-7 col-xs-12\">
                            <div class=\"reviews-content\">
                                <!-- start testimonial carousel -->
                                <div class=\"testimonial-carousel item-indicator\">
                                    <div class=\"single-testi\">
                                        <div class=\"testi-text\">
                                            <div class=\"clients-text\">
                                                <div class=\"client-rating\">
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                </div>
                                                <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                            </div>
                                            <div class=\"testi-img \">
                                                <img src=\"img/review/1.jpg\" alt=\"\">
                                                <div class=\"guest-details\">
                                                    <h4>Hamilton</h4>
                                                    <span class=\"guest-rev\">Clients - <a href=\"#\">General customer</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class=\"single-testi\">
                                        <div class=\"testi-text\">
                                            <div class=\"clients-text\">
                                                <div class=\"client-rating\">
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                </div>
                                                <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                            </div>
                                            <div class=\"testi-img \">
                                                <img src=\"img/review/2.jpg\" alt=\"\">
                                                <div class=\"guest-details\">
                                                    <h4>Angel lima</h4>
                                                    <span class=\"guest-rev\">Clients - <a href=\"#\">General customer</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class=\"single-testi\">
                                        <div class=\"testi-text\">
                                            <div class=\"clients-text\">
                                                <div class=\"client-rating\">
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                </div>
                                                <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                            </div>
                                            <div class=\"testi-img \">
                                                <img src=\"img/review/3.jpg\" alt=\"\">
                                                <div class=\"guest-details\">
                                                    <h4>Arthur Doil</h4>
                                                    <span class=\"guest-rev\">Clients - <a href=\"#\">General customer</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class=\"single-testi\">
                                        <div class=\"testi-text\">
                                            <div class=\"clients-text\">
                                                <div class=\"client-rating\">
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                    <a href=\"#\"><i class=\"ti-star\"></i></a>
                                                </div>
                                                <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                            </div>
                                            <div class=\"testi-img \">
                                                <img src=\"img/review/4.jpg\" alt=\"\">
                                                <div class=\"guest-details\">
                                                    <h4>Gabriel Hank</h4>
                                                    <span class=\"guest-rev\">Clients - <a href=\"#\">General customer</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End reviews Area -->
        <!-- Start FAQ area -->
        <div class=\"faq-area bg-color area-padding\">
            <div class=\"container\">
               <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"section-headline text-center\">
                            <h3>Some important FAQ</h3>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"row\">
                    <!-- Start Column Start -->
                    <div class=\"col-md-7 col-sm-6 col-xs-12\">
                        <div class=\"company-faq\">
                            <div class=\"faq-full\">
\t\t\t\t\t\t\t\t<div class=\"faq-details\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t\t\t\t\t\t<!-- Panel Default -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" class=\"active\" data-parent=\"#accordion\" href=\"#check1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"acc-icons\"></span>How to successful our mission and vision
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"check1\" class=\"panel-collapse collapse in\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tWhen replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End Panel Default -->
\t\t\t\t\t\t\t\t\t\t<!-- Panel Default -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#check2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"acc-icons\"></span>Clients satisfaction make company Value.
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"check2\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tWhen replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End Panel Default -->
\t\t\t\t\t\t\t\t\t\t<!-- Panel Default -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#check3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"acc-icons\"></span>World class creative design and development firm. 
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"check3\" class=\"panel-collapse collapse \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tWhen replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End Panel Default -->\t
\t\t\t\t\t\t\t\t\t\t<!-- Panel Default -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#check4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"acc-icons\"></span>We are the best online flatform 
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"check4\" class=\"panel-collapse collapse \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tWhen replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End Panel Default -->
\t\t\t\t\t\t\t\t\t\t<!-- Panel Default -->
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"check-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#check5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"acc-icons\"></span>Clients satisfaction make company Value.
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"check5\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tWhen replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End Panel Default -->\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End FAQ -->
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                    <!-- End Column -->
                    <div class=\"col-md-5 col-sm-6 col-xs-12\">
                        <div class=\"faq-content\">
                        \t<h4>Have a any qustion?</h4>
\t\t\t\t\t\t\t<div class=\"faq-quote\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<form id=\"contactForm\" method=\"POST\" action=\"http://rockstheme.com/rocks/aievari-live/contact.php\" class=\"contact-form\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"name\" class=\"form-control\" placeholder=\"Name\" required data-error=\"Please enter your name\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"email form-control\" id=\"email\" placeholder=\"Email\" required data-error=\"Please enter your email\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"msg_subject\" class=\"form-control\" placeholder=\"Subject\" required=\"\" data-error=\"Please enter your message subject\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"message\" rows=\"7\" placeholder=\"Massage\" class=\"form-control\" required data-error=\"Write your message\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"submit\" class=\"quote-btn\">Submit</button>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"msgSubmit\" class=\"h3 text-center hidden\"></div> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                    <!-- End Column -->
                </div>
            </div>
        </div>
        <!-- End FAQ area -->
                    {% endblock %}
        <!-- Start Footer Area -->
        <footer class=\"footer1\">
            <div class=\"footer-area\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                            <div class=\"footer-content logo-footer\">
                                <div class=\"footer-head\">
                                    <div class=\"footer-logo\">
                                    \t<a class=\"footer-black-logo\" href=\"#\"><img src=\"img/logo/logo.png\" alt=\"\"></a>
                                    </div>
                                    <p>
                                        Are you looking for professional advice for your new business. Are you looking for professional advice for your new business. Are you looking for professional advice for your new business.
                                    </p>
                                    <div class=\"subs-feilds\">
                                        <div class=\"suscribe-input\">
                                            <input type=\"email\" class=\"email form-control width-80\" id=\"sus_email\" placeholder=\"Type Email\">
                                            <button type=\"submit\" id=\"sus_submit\" class=\"add-btn\">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class=\"col-md-4 col-sm-3 col-xs-12\">
                            <div class=\"footer-content\">
                                <div class=\"footer-head\">
                                    <h4>Services Link</h4>
                                    <ul class=\"footer-list\">
                                        <li><a href=\"#\">About us</a></li>
                                        <li><a href=\"#\">Services </a></li>
                                        <li><a href=\"#\">Events</a></li>
                                        <li><a href=\"#\">Promotion</a></li>
                                        <li><a href=\"#\">Transition</a></li>
                                        <li><a href=\"#\">Social Media</a></li>
                                    </ul>
                                    <ul class=\"footer-list hidden-sm\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Customer Care</a></li>
                                        <li><a href=\"#\">Live chat</a></li>
                                        <li><a href=\"#\">Notification</a></li>
                                        <li><a href=\"#\">Privacy</a></li>
                                        <li><a href=\"#\">Terms & Condition</a></li>
                                        <li><a href=\"#\">Contact us </a></li>
\t\t\t\t\t\t\t\t\t</ul>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class=\"col-md-3 col-sm-4 col-xs-12\">
                            <div class=\"footer-content last-content\">
                                <div class=\"footer-head\">
                                    <h4>Information</h4> 
                                    <div class=\"footer-contacts\">
\t\t\t\t\t\t\t\t\t\t<p><span>Tel :</span> +0890-564-5644</p>
\t\t\t\t\t\t\t\t\t\t<p><span>Email :</span> info@aievari4.com</p>
\t\t\t\t\t\t\t\t\t\t<p><span>Location :</span> House- 65/4, London</p>
\t\t\t\t\t\t\t\t\t</div> 
                                    <div class=\"footer-icons\">
                                        <ul>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-facebook\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-twitter\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-google\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-pinterest\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-instagram\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"footer-area-bottom\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"copyright\">
                                <p>
                                    Copyright © 2020
                                    <a href=\"#\">Aievari</a> All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
\t\t<!-- all js here -->

\t\t<!-- jquery latest version -->
\t\t<script src=\"{{ asset('front/js/vendor/jquery-1.12.4.min.js')}}\"></script>
\t\t<!-- bootstrap js -->
\t\t<script src=\"{{ asset('front/js/bootstrap.min.js')}}\"></script>
\t\t<!-- owl.carousel js -->
\t\t<script src=\"{{ asset('front/js/owl.carousel.min.js')}}\"></script>
\t\t  <!-- stellar js -->
        <script src=\"{{ asset('front/js/jquery.stellar.min.js')}}\"></script>
\t\t<!-- magnific js -->
        <script src=\"{{ asset('front/js/magnific.min.js')}}\"></script>
        <!-- wow js -->
        <script src=\"{{ asset('frontjs/wow.min.js')}}\"></script>
        <!-- meanmenu js -->
        <script src=\"{{ asset('front/js/jquery.meanmenu.js')}}\"></script>
\t\t<!-- Form validator js -->
\t\t<script src=\"{{ asset('front/js/form-validator.min.js')}}\"></script>
\t\t<!-- plugins js -->
\t\t<script src=\"{{ asset('front/js/plugins.js')}}\"></script>
\t\t<!-- main js -->
\t\t<script src=\"{{ asset('front/js/main.js')}}\"></script>
\t</body>

</html>
", "front.html.twig", "C:\\Users\\anasl\\pidev\\templates\\front.html.twig");
    }
}
