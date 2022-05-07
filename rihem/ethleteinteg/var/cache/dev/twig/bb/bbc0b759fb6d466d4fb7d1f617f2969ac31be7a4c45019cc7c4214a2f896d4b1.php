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

/* front1.html.twig */
class __TwigTemplate_6f33e5b3c47a137c5d377cf9f1352751f6f5d4f9e55f11fc78fc66eb9d546354 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front1.html.twig"));

        // line 1
        echo "
<!doctype html>
<html class=\"no-js\" lang=\"en\">
\t
<!-- Mirrored from rockstheme.com/rocks/aievari-live/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:28:26 GMT -->
<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t\t<title>Contact | Aievari</title>
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<!-- favicon -->\t\t
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"img/logo/favicon.ico\">

\t\t<!-- all css here -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/css/responsive.css"), "html", null, true);
        echo "\">
\t\t<!-- bootstrap v3.3.6 css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t<!-- owl.carousel css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/css/owl.carousel.css"), "html", null, true);
        echo "\">
\t\t <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/css/owl.transitions.css"), "html", null, true);
        echo "\">
        <!-- Animate css -->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/css/animate.css"), "html", null, true);
        echo "\">
        <!-- meanmenu css -->
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/css/meanmenu.min.css"), "html", null, true);
        echo "\">
\t\t<!-- font-awesome css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/css/themify-icons.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/css/flaticon.css"), "html", null, true);
        echo "\">
\t\t<!-- magnific css -->
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/css/magnific.min.css"), "html", null, true);
        echo "\">
\t\t<!-- style css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/style.css"), "html", null, true);
        echo "\">
\t\t<!-- responsive css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/css/responsive.css"), "html", null, true);
        echo "\">

\t\t<!-- modernizr css -->
\t\t<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/js/vendor/modernizr-2.8.3.min.js"), "html", null, true);
        echo "\"></script>
\t</head>
\t\t<body>

\t\t<!--[if lt IE 8]>
\t\t\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
\t\t<![endif]-->

        <div id=\"preloader\"></div>
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
        <!-- Start breadcumb Area -->
        <div class=\"page-area\">
            <div class=\"breadcumb-overlay\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"breadcrumb text-center\">
                            <div class=\"section-headline white-headline\">
                                <h3>Contact us</h3>
                            </div>
                            <ul class=\"breadcrumb-bg\">
                                <li class=\"home-bread\">Home</li>
                                <li>Contact us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- Start contact Area -->
        <div class=\"contact-area page-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"contact-inner\">
                        <!-- Start contact icon column -->
                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"contact-icon text-center\">
                                <div class=\"single-icon\">
                                    <i class=\"fa fa-mobile\"></i>
                                    <p>
                                        Call : +0011-564-543<br>
                                        <span>Monday-Friday (10am-18pm)</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"contact-icon text-center\">
                                <div class=\"single-icon\">
                                    <i class=\"fa fa-envelope-o\"></i>
                                    <p>
                                        Email : Aievar3@gmail.com<br>
                                        <span>Web: www.rockstheme.com</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"contact-icon text-center\">
                                <div class=\"single-icon\">
                                    <i class=\"fa fa-map-marker\"></i>
                                    <p>
                                        Location : Newyork city<br>
                                        <span>23 house/3 Road</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                     <div class=\"col-md-6 col-sm-6 col-xs-12\">
                         <!-- Start Map -->
                        <div class=\"map-area\">
                            <div id=\"googleMap\" style=\"width:100%;height:380px;\"></div>
                        </div>
                        <!-- End Map -->
                    </div>
                    <!-- Start Left contact -->
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"contact-form\">
                            <div class=\"row\">
                                <form id=\"contactForm\" method=\"POST\" action=\"http://rockstheme.com/rocks/aievari-live/contact.php\" class=\"contact-form\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <input type=\"text\" id=\"name\" class=\"form-control\" placeholder=\"Name\" required data-error=\"Please enter your name\">
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <input type=\"email\" class=\"email form-control\" id=\"email\" placeholder=\"Email\" required data-error=\"Please enter your email\">
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <input type=\"text\" id=\"msg_subject\" class=\"form-control\" placeholder=\"Subject\" required data-error=\"Please enter your message subject\">
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <textarea id=\"message\" rows=\"7\" placeholder=\"Massage\" class=\"form-control\" required data-error=\"Write your message\"></textarea>
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12 text-center\">
                                        <button type=\"submit\" id=\"submit\" class=\"add-btn contact-btn\">Send Message</button>
                                        <div id=\"msgSubmit\" class=\"h3 text-center hidden\"></div> 
                                        <div class=\"clearfix\"></div>
                                    </div>   
                                </form>  
                            </div>
                        </div>
                    </div>
                    <!-- End Left contact -->
                </div>
            </div>
        </div>
        <!-- End Contact Area -->
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
        <!-- End Footer area -->
\t\t
\t\t<!-- all js here -->

\t\t<!-- jquery latest version -->
\t\t<script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- bootstrap js -->
\t\t<script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- owl.carousel js -->
\t\t<script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t  <!-- stellar js -->
        <script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- magnific js -->
        <script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/js/magnific.min.js"), "html", null, true);
        echo "\"></script>
        <!-- wow js -->
        <script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <!-- meanmenu js -->
        <script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/js/jquery.meanmenu.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- Form validator js -->
\t\t<script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/js/form-validator.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- plugins js -->
\t\t<script src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/js/plugins.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- main js -->
\t\t<script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front1/js/main.js"), "html", null, true);
        echo "\"></script>
\t</body>

<!-- Mirrored from rockstheme.com/rocks/aievari-live/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:28:28 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  535 => 425,  530 => 423,  525 => 421,  520 => 419,  515 => 417,  510 => 415,  505 => 413,  500 => 411,  495 => 409,  490 => 407,  119 => 39,  113 => 36,  108 => 34,  103 => 32,  98 => 30,  94 => 29,  90 => 28,  85 => 26,  80 => 24,  75 => 22,  71 => 21,  66 => 19,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!doctype html>
<html class=\"no-js\" lang=\"en\">
\t
<!-- Mirrored from rockstheme.com/rocks/aievari-live/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:28:26 GMT -->
<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t\t<title>Contact | Aievari</title>
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<!-- favicon -->\t\t
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"img/logo/favicon.ico\">

\t\t<!-- all css here -->
        <link rel=\"stylesheet\" href=\"{{asset('front1/css/responsive.css')}}\">
\t\t<!-- bootstrap v3.3.6 css -->
\t\t<link rel=\"stylesheet\" href=\"{{asset('front1/css/bootstrap.min.css')}}\">
\t\t<!-- owl.carousel css -->
\t\t<link rel=\"stylesheet\" href=\"{{asset('front1/css/owl.carousel.css')}}\">
\t\t <link rel=\"stylesheet\" href=\"{{asset('front1/css/owl.transitions.css')}}\">
        <!-- Animate css -->
        <link rel=\"stylesheet\" href=\"{{asset('front1/css/animate.css')}}\">
        <!-- meanmenu css -->
        <link rel=\"stylesheet\" href=\"{{asset('front1/css/meanmenu.min.css')}}\">
\t\t<!-- font-awesome css -->
\t\t<link rel=\"stylesheet\" href=\"{{asset('front1/css/font-awesome.min.css')}}\">
\t\t <link rel=\"stylesheet\" href=\"{{asset('front1/css/themify-icons.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('front1/css/flaticon.css')}}\">
\t\t<!-- magnific css -->
        <link rel=\"stylesheet\" href=\"{{asset('front1/css/magnific.min.css')}}\">
\t\t<!-- style css -->
\t\t<link rel=\"stylesheet\" href=\"{{asset('front1/style.css')}}\">
\t\t<!-- responsive css -->
\t\t<link rel=\"stylesheet\" href=\"{{asset('front1/css/responsive.css')}}\">

\t\t<!-- modernizr css -->
\t\t<script src=\"{{ asset('front1/js/vendor/modernizr-2.8.3.min.js')}}\"></script>
\t</head>
\t\t<body>

\t\t<!--[if lt IE 8]>
\t\t\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
\t\t<![endif]-->

        <div id=\"preloader\"></div>
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
        <!-- Start breadcumb Area -->
        <div class=\"page-area\">
            <div class=\"breadcumb-overlay\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"breadcrumb text-center\">
                            <div class=\"section-headline white-headline\">
                                <h3>Contact us</h3>
                            </div>
                            <ul class=\"breadcrumb-bg\">
                                <li class=\"home-bread\">Home</li>
                                <li>Contact us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- Start contact Area -->
        <div class=\"contact-area page-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"contact-inner\">
                        <!-- Start contact icon column -->
                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"contact-icon text-center\">
                                <div class=\"single-icon\">
                                    <i class=\"fa fa-mobile\"></i>
                                    <p>
                                        Call : +0011-564-543<br>
                                        <span>Monday-Friday (10am-18pm)</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"contact-icon text-center\">
                                <div class=\"single-icon\">
                                    <i class=\"fa fa-envelope-o\"></i>
                                    <p>
                                        Email : Aievar3@gmail.com<br>
                                        <span>Web: www.rockstheme.com</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"contact-icon text-center\">
                                <div class=\"single-icon\">
                                    <i class=\"fa fa-map-marker\"></i>
                                    <p>
                                        Location : Newyork city<br>
                                        <span>23 house/3 Road</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                     <div class=\"col-md-6 col-sm-6 col-xs-12\">
                         <!-- Start Map -->
                        <div class=\"map-area\">
                            <div id=\"googleMap\" style=\"width:100%;height:380px;\"></div>
                        </div>
                        <!-- End Map -->
                    </div>
                    <!-- Start Left contact -->
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"contact-form\">
                            <div class=\"row\">
                                <form id=\"contactForm\" method=\"POST\" action=\"http://rockstheme.com/rocks/aievari-live/contact.php\" class=\"contact-form\">
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <input type=\"text\" id=\"name\" class=\"form-control\" placeholder=\"Name\" required data-error=\"Please enter your name\">
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <input type=\"email\" class=\"email form-control\" id=\"email\" placeholder=\"Email\" required data-error=\"Please enter your email\">
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <input type=\"text\" id=\"msg_subject\" class=\"form-control\" placeholder=\"Subject\" required data-error=\"Please enter your message subject\">
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <textarea id=\"message\" rows=\"7\" placeholder=\"Massage\" class=\"form-control\" required data-error=\"Write your message\"></textarea>
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12 text-center\">
                                        <button type=\"submit\" id=\"submit\" class=\"add-btn contact-btn\">Send Message</button>
                                        <div id=\"msgSubmit\" class=\"h3 text-center hidden\"></div> 
                                        <div class=\"clearfix\"></div>
                                    </div>   
                                </form>  
                            </div>
                        </div>
                    </div>
                    <!-- End Left contact -->
                </div>
            </div>
        </div>
        <!-- End Contact Area -->
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
        <!-- End Footer area -->
\t\t
\t\t<!-- all js here -->

\t\t<!-- jquery latest version -->
\t\t<script src=\"{{ asset('front1/js/vendor/jquery-1.12.4.min.js')}}\"></script>
\t\t<!-- bootstrap js -->
\t\t<script src=\"{{ asset('front1/js/bootstrap.min.js')}}\"></script>
\t\t<!-- owl.carousel js -->
\t\t<script src=\"{{ asset('front1/js/owl.carousel.min.js')}}\"></script>
\t\t  <!-- stellar js -->
        <script src=\"{{ asset('front1/js/jquery.stellar.min.js')}}\"></script>
\t\t<!-- magnific js -->
        <script src=\"{{ asset('front1/js/magnific.min.js')}}\"></script>
        <!-- wow js -->
        <script src=\"{{ asset('front1/js/wow.min.js')}}\"></script>
        <!-- meanmenu js -->
        <script src=\"{{ asset('front1/js/jquery.meanmenu.js')}}\"></script>
\t\t<!-- Form validator js -->
\t\t<script src=\"{{ asset('front1/js/form-validator.min.js')}}\"></script>
\t\t<!-- plugins js -->
\t\t<script src=\"{{ asset('front1/js/plugins.js')}}\"></script>
\t\t<!-- main js -->
\t\t<script src=\"{{ asset('front1/js/main.js')}}\"></script>
\t</body>

<!-- Mirrored from rockstheme.com/rocks/aievari-live/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:28:28 GMT -->
</html>", "front1.html.twig", "C:\\Users\\ASUS\\Desktop\\web\\ethleteinteg\\templates\\front1.html.twig");
    }
}
