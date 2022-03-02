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

/* MbodyUp/base.back.html.twig */
class __TwigTemplate_f28865181adde4f49b098ab0d510ed97c674302b05bdea7efcdafe7971f22edb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MbodyUp/base.back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MbodyUp/base.back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Dark Bootstrap Admin by ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"all,follow\">
    <!-- Bootstrap CSS-->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome CSS-->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Custom Font Icons CSS-->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/css/font.css"), "html", null, true);
        echo "\">
    <!-- Google fonts - Muli-->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Muli:300,400,700\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/css/style.default.css"), "html", null, true);
        echo "\" id=\"theme-stylesheet\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/css/custom.css"), "html", null, true);
        echo "\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/img/favicon.ico"), "html", null, true);
        echo "\">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script><![endif]-->
</head>
<body>
<header class=\"header\">
    <nav class=\"navbar navbar-expand-lg\">
        <div class=\"search-panel\">
            <div class=\"search-inner d-flex align-items-center justify-content-center\">
                <div class=\"close-btn\">Close <i class=\"fa fa-close\"></i></div>
                <form id=\"searchForm\" action=\"#\">
                    <div class=\"form-group\">
                        <input type=\"search\" name=\"search\" placeholder=\"What are you searching for...\">
                        <button type=\"submit\" class=\"submit\">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"container-fluid d-flex align-items-center justify-content-between\">
            <div class=\"navbar-header\">
                <!-- Navbar Header--><a href=\"index.html\" class=\"navbar-brand\">
                    <div class=\"brand-text brand-big visible text-uppercase\"><strong class=\"text-primary\">Dark</strong><strong>Admin</strong></div>
                    <div class=\"brand-text brand-sm\"><strong class=\"text-primary\">D</strong><strong>A</strong></div></a>
                <!-- Sidebar Toggle Btn-->
                <button class=\"sidebar-toggle\"><i class=\"fa fa-long-arrow-left\"></i></button>
            </div>
            <div class=\"right-menu list-inline no-margin-bottom\">
                <div class=\"list-inline-item\"><a href=\"#\" class=\"search-open nav-link\"><i class=\"icon-magnifying-glass-browser\"></i></a></div>
                <div class=\"list-inline-item dropdown\"><a id=\"navbarDropdownMenuLink1\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link messages-toggle\"><i class=\"icon-email\"></i><span class=\"badge dashbg-1\">5</span></a>
                    <div aria-labelledby=\"navbarDropdownMenuLink1\" class=\"dropdown-menu messages\"><a href=\"#\" class=\"dropdown-item message d-flex align-items-center\">
                            <div class=\"profile\"><img src=\"img/avatar-3.jpg\" alt=\"...\" class=\"img-fluid\">
                                <div class=\"status online\"></div>
                            </div>
                            <div class=\"content\">   <strong class=\"d-block\">Nadia Halsey</strong><span class=\"d-block\">lorem ipsum dolor sit amit</span><small class=\"date d-block\">9:30am</small></div></a><a href=\"#\" class=\"dropdown-item message d-flex align-items-center\">
                            <div class=\"profile\"><img src=\"img/avatar-2.jpg\" alt=\"...\" class=\"img-fluid\">
                                <div class=\"status away\"></div>
                            </div>
                            <div class=\"content\">   <strong class=\"d-block\">Peter Ramsy</strong><span class=\"d-block\">lorem ipsum dolor sit amit</span><small class=\"date d-block\">7:40am</small></div></a><a href=\"#\" class=\"dropdown-item message d-flex align-items-center\">
                            <div class=\"profile\"><img src=\"img/avatar-1.jpg\" alt=\"...\" class=\"img-fluid\">
                                <div class=\"status busy\"></div>
                            </div>
                            <div class=\"content\">   <strong class=\"d-block\">Sam Kaheil</strong><span class=\"d-block\">lorem ipsum dolor sit amit</span><small class=\"date d-block\">6:55am</small></div></a><a href=\"#\" class=\"dropdown-item message d-flex align-items-center\">
                            <div class=\"profile\"><img src=\"img/avatar-5.jpg\" alt=\"...\" class=\"img-fluid\">
                                <div class=\"status offline\"></div>
                            </div>
                            <div class=\"content\">   <strong class=\"d-block\">Sara Wood</strong><span class=\"d-block\">lorem ipsum dolor sit amit</span><small class=\"date d-block\">10:30pm</small></div></a><a href=\"#\" class=\"dropdown-item text-center message\"> <strong>See All Messages <i class=\"fa fa-angle-right\"></i></strong></a></div>
                </div>
                <!-- Tasks-->
                <div class=\"list-inline-item dropdown\"><a id=\"navbarDropdownMenuLink2\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link tasks-toggle\"><i class=\"icon-new-file\"></i><span class=\"badge dashbg-3\">9</span></a>
                    <div aria-labelledby=\"navbarDropdownMenuLink2\" class=\"dropdown-menu tasks-list\"><a href=\"#\" class=\"dropdown-item\">
                            <div class=\"text d-flex justify-content-between\"><strong>Task 1</strong><span>40% complete</span></div>
                            <div class=\"progress\">
                                <div role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar dashbg-1\"></div>
                            </div></a><a href=\"#\" class=\"dropdown-item\">
                            <div class=\"text d-flex justify-content-between\"><strong>Task 2</strong><span>20% complete</span></div>
                            <div class=\"progress\">
                                <div role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar dashbg-3\"></div>
                            </div></a><a href=\"#\" class=\"dropdown-item\">
                            <div class=\"text d-flex justify-content-between\"><strong>Task 3</strong><span>70% complete</span></div>
                            <div class=\"progress\">
                                <div role=\"progressbar\" style=\"width: 70%\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar dashbg-2\"></div>
                            </div></a><a href=\"#\" class=\"dropdown-item\">
                            <div class=\"text d-flex justify-content-between\"><strong>Task 4</strong><span>30% complete</span></div>
                            <div class=\"progress\">
                                <div role=\"progressbar\" style=\"width: 30%\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar dashbg-4\"></div>
                            </div></a><a href=\"#\" class=\"dropdown-item\">
                            <div class=\"text d-flex justify-content-between\"><strong>Task 5</strong><span>65% complete</span></div>
                            <div class=\"progress\">
                                <div role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar dashbg-1\"></div>
                            </div></a><a href=\"#\" class=\"dropdown-item text-center\"> <strong>See All Tasks <i class=\"fa fa-angle-right\"></i></strong></a>
                    </div>
                </div>
                <!-- Tasks end-->
                <!-- Megamenu-->
                <div class=\"list-inline-item dropdown menu-large\"><a href=\"#\" data-toggle=\"dropdown\" class=\"nav-link\">Mega <i class=\"fa fa-ellipsis-v\"></i></a>
                    <div class=\"dropdown-menu megamenu\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-6\"><strong class=\"text-uppercase\">Elements Heading</strong>
                                <ul class=\"list-unstyled mb-3\">
                                    <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                    <li><a href=\"#\">Sed ut perspiciatis</a></li>
                                    <li><a href=\"#\">Voluptatum deleniti</a></li>
                                    <li><a href=\"#\">At vero eos</a></li>
                                    <li><a href=\"#\">Consectetur adipiscing</a></li>
                                    <li><a href=\"#\">Duis aute irure</a></li>
                                    <li><a href=\"#\">Necessitatibus saepe</a></li>
                                    <li><a href=\"#\">Maiores alias</a></li>
                                </ul>
                            </div>
                            <div class=\"col-lg-3 col-md-6\"><strong class=\"text-uppercase\">Elements Heading</strong>
                                <ul class=\"list-unstyled mb-3\">
                                    <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                    <li><a href=\"#\">Sed ut perspiciatis</a></li>
                                    <li><a href=\"#\">Voluptatum deleniti</a></li>
                                    <li><a href=\"#\">At vero eos</a></li>
                                    <li><a href=\"#\">Consectetur adipiscing</a></li>
                                    <li><a href=\"#\">Duis aute irure</a></li>
                                    <li><a href=\"#\">Necessitatibus saepe</a></li>
                                    <li><a href=\"#\">Maiores alias</a></li>
                                </ul>
                            </div>
                            <div class=\"col-lg-3 col-md-6\"><strong class=\"text-uppercase\">Elements Heading</strong>
                                <ul class=\"list-unstyled mb-3\">
                                    <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                    <li><a href=\"#\">Sed ut perspiciatis</a></li>
                                    <li><a href=\"#\">Voluptatum deleniti</a></li>
                                    <li><a href=\"#\">At vero eos</a></li>
                                    <li><a href=\"#\">Consectetur adipiscing</a></li>
                                    <li><a href=\"#\">Duis aute irure</a></li>
                                    <li><a href=\"#\">Necessitatibus saepe</a></li>
                                    <li><a href=\"#\">Maiores alias</a></li>
                                </ul>
                            </div>
                            <div class=\"col-lg-3 col-md-6\"><strong class=\"text-uppercase\">Elements Heading</strong>
                                <ul class=\"list-unstyled mb-3\">
                                    <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                    <li><a href=\"#\">Sed ut perspiciatis</a></li>
                                    <li><a href=\"#\">Voluptatum deleniti</a></li>
                                    <li><a href=\"#\">At vero eos</a></li>
                                    <li><a href=\"#\">Consectetur adipiscing</a></li>
                                    <li><a href=\"#\">Duis aute irure</a></li>
                                    <li><a href=\"#\">Necessitatibus saepe</a></li>
                                    <li><a href=\"#\">Maiores alias</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"row megamenu-buttons text-center\">
                            <div class=\"col-lg-2 col-md-4\"><a href=\"#\" class=\"d-block megamenu-button-link dashbg-1\"><i class=\"fa fa-clock-o\"></i><strong>Demo 1</strong></a></div>
                            <div class=\"col-lg-2 col-md-4\"><a href=\"#\" class=\"d-block megamenu-button-link dashbg-2\"><i class=\"fa fa-clock-o\"></i><strong>Demo 2</strong></a></div>
                            <div class=\"col-lg-2 col-md-4\"><a href=\"#\" class=\"d-block megamenu-button-link dashbg-3\"><i class=\"fa fa-clock-o\"></i><strong>Demo 3</strong></a></div>
                            <div class=\"col-lg-2 col-md-4\"><a href=\"#\" class=\"d-block megamenu-button-link dashbg-4\"><i class=\"fa fa-clock-o\"></i><strong>Demo 4</strong></a></div>
                            <div class=\"col-lg-2 col-md-4\"><a href=\"#\" class=\"d-block megamenu-button-link bg-danger\"><i class=\"fa fa-clock-o\"></i><strong>Demo 5</strong></a></div>
                            <div class=\"col-lg-2 col-md-4\"><a href=\"#\" class=\"d-block megamenu-button-link bg-info\"><i class=\"fa fa-clock-o\"></i><strong>Demo 6</strong></a></div>
                        </div>
                    </div>
                </div>
                <!-- Megamenu end     -->
                <!-- Languages dropdown    -->
                <div class=\"list-inline-item dropdown\"><a id=\"languages\" rel=\"nofollow\" data-target=\"#\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link language dropdown-toggle\"><img src=\"img/flags/16/GB.png\" alt=\"English\"><span class=\"d-none d-sm-inline-block\">English</span></a>
                    <div aria-labelledby=\"languages\" class=\"dropdown-menu\"><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> <img src=\"img/flags/16/DE.png\" alt=\"English\" class=\"mr-2\"><span>German</span></a><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> <img src=\"img/flags/16/FR.png\" alt=\"English\" class=\"mr-2\"><span>French  </span></a></div>
                </div>
                <!-- Log out               -->
                <div class=\"list-inline-item logout\">                   <a id=\"logout\" href=\"login.html\" class=\"nav-link\"> <span class=\"d-none d-sm-inline\">Logout </span><i class=\"icon-logout\"></i></a></div>
            </div>
        </div>
    </nav>
</header>
<div class=\"d-flex align-items-stretch\">
    <!-- Sidebar Navigation-->
    <nav id=\"sidebar\">
        <!-- Sidebar Header-->
        <div class=\"sidebar-header d-flex align-items-center\">
            <div class=\"avatar\"><img src=\"img/avatar-6.jpg\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
            <div class=\"title\">
                <h1 class=\"h5\">Mark Stephen</h1>
                <p>Web Designer</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class=\"heading\">Main</span>
        <ul class=\"list-unstyled\">
            <li class=\"active\"><a href=\"index.html\"> <i class=\"icon-home\"></i>Home </a></li>


            <li><a href=\"#exampledropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"icon-windows\"></i>information</a>
                <ul id=\"exampledropdownDropdown\" class=\"collapse list-unstyled \">
                    <li><a href=\"#\">Page</a></li>
                    <li><a href=\"#\">Page</a></li>
                    <li><a href=\"#\">Page</a></li>
                </ul>
            </li>
            <li><a href=\"#exampledropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"icon-windows\"></i>table </a>
                <ul id=\"exampledropdownDropdown\" class=\"collapse list-unstyled \">
                    <li><a href=\"#\">Page</a></li>
                    <li><a href=\"#\">Page</a></li>
                    <li><a href=\"#\">Page</a></li>
                </ul>
            </li>

        </ul>

    </nav>
    <!-- Sidebar Navigation end-->

    <div class=\"page-content\">
        <div class=\"page-header\">
            <div class=\"container-fluid\">
                <h2 class=\"h5 no-margin-bottom\">Dashboard</h2>
            </div>
        </div>

        ";
        // line 214
        $this->displayBlock('body', $context, $blocks);
        // line 235
        echo "




        <footer class=\"footer\">
            <div class=\"footer__block block no-margin-bottom\">
                <div class=\"container-fluid text-center\">

                    <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                    <p class=\"no-margin-bottom\">2020 &copy; Your company. Design by <a href=\"https://bootstrapious.com/p/bootstrap-4-dark-admin\">Bootstrapious</a>.</p>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- JavaScript files-->
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/popper.js/umd/popper.min.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/jquery.cookie/jquery.cookie.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/charts-home.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/front.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bootstrapious.com ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 214
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 215
        echo "        <section class=\"no-padding-bottom\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"bar-chart block no-margin-bottom\">
                            <canvas id=\"barChartExample1\"></canvas>
                        </div>
                        <div class=\"bar-chart block\">
                            <canvas id=\"barChartExample2\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-lg-8\">
                        <div class=\"line-cahrt block\">
                            <canvas id=\"lineCahrt\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "MbodyUp/base.back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 215,  362 => 214,  343 => 6,  330 => 259,  326 => 258,  322 => 257,  318 => 256,  314 => 255,  310 => 254,  306 => 253,  302 => 252,  283 => 235,  281 => 214,  87 => 23,  82 => 21,  77 => 19,  70 => 15,  65 => 13,  60 => 11,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Dark Bootstrap Admin by {% block title %}Bootstrapious.com {% endblock %}</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"all,follow\">
    <!-- Bootstrap CSS-->
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/bootstrap/css/bootstrap.min.css') }}\">
    <!-- Font Awesome CSS-->
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/font-awesome/css/font-awesome.min.css') }}\">
    <!-- Custom Font Icons CSS-->
    <link rel=\"stylesheet\" href=\"{{ asset('Back/css/font.css') }}\">
    <!-- Google fonts - Muli-->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Muli:300,400,700\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\"{{ asset('Back/css/style.default.css') }}\" id=\"theme-stylesheet\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\"{{ asset('Back/css/custom.css') }}\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"{{ asset('Back/img/favicon.ico') }}\">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script><![endif]-->
</head>
<body>
<header class=\"header\">
    <nav class=\"navbar navbar-expand-lg\">
        <div class=\"search-panel\">
            <div class=\"search-inner d-flex align-items-center justify-content-center\">
                <div class=\"close-btn\">Close <i class=\"fa fa-close\"></i></div>
                <form id=\"searchForm\" action=\"#\">
                    <div class=\"form-group\">
                        <input type=\"search\" name=\"search\" placeholder=\"What are you searching for...\">
                        <button type=\"submit\" class=\"submit\">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"container-fluid d-flex align-items-center justify-content-between\">
            <div class=\"navbar-header\">
                <!-- Navbar Header--><a href=\"index.html\" class=\"navbar-brand\">
                    <div class=\"brand-text brand-big visible text-uppercase\"><strong class=\"text-primary\">Dark</strong><strong>Admin</strong></div>
                    <div class=\"brand-text brand-sm\"><strong class=\"text-primary\">D</strong><strong>A</strong></div></a>
                <!-- Sidebar Toggle Btn-->
                <button class=\"sidebar-toggle\"><i class=\"fa fa-long-arrow-left\"></i></button>
            </div>
            <div class=\"right-menu list-inline no-margin-bottom\">
                <div class=\"list-inline-item\"><a href=\"#\" class=\"search-open nav-link\"><i class=\"icon-magnifying-glass-browser\"></i></a></div>
                <div class=\"list-inline-item dropdown\"><a id=\"navbarDropdownMenuLink1\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link messages-toggle\"><i class=\"icon-email\"></i><span class=\"badge dashbg-1\">5</span></a>
                    <div aria-labelledby=\"navbarDropdownMenuLink1\" class=\"dropdown-menu messages\"><a href=\"#\" class=\"dropdown-item message d-flex align-items-center\">
                            <div class=\"profile\"><img src=\"img/avatar-3.jpg\" alt=\"...\" class=\"img-fluid\">
                                <div class=\"status online\"></div>
                            </div>
                            <div class=\"content\">   <strong class=\"d-block\">Nadia Halsey</strong><span class=\"d-block\">lorem ipsum dolor sit amit</span><small class=\"date d-block\">9:30am</small></div></a><a href=\"#\" class=\"dropdown-item message d-flex align-items-center\">
                            <div class=\"profile\"><img src=\"img/avatar-2.jpg\" alt=\"...\" class=\"img-fluid\">
                                <div class=\"status away\"></div>
                            </div>
                            <div class=\"content\">   <strong class=\"d-block\">Peter Ramsy</strong><span class=\"d-block\">lorem ipsum dolor sit amit</span><small class=\"date d-block\">7:40am</small></div></a><a href=\"#\" class=\"dropdown-item message d-flex align-items-center\">
                            <div class=\"profile\"><img src=\"img/avatar-1.jpg\" alt=\"...\" class=\"img-fluid\">
                                <div class=\"status busy\"></div>
                            </div>
                            <div class=\"content\">   <strong class=\"d-block\">Sam Kaheil</strong><span class=\"d-block\">lorem ipsum dolor sit amit</span><small class=\"date d-block\">6:55am</small></div></a><a href=\"#\" class=\"dropdown-item message d-flex align-items-center\">
                            <div class=\"profile\"><img src=\"img/avatar-5.jpg\" alt=\"...\" class=\"img-fluid\">
                                <div class=\"status offline\"></div>
                            </div>
                            <div class=\"content\">   <strong class=\"d-block\">Sara Wood</strong><span class=\"d-block\">lorem ipsum dolor sit amit</span><small class=\"date d-block\">10:30pm</small></div></a><a href=\"#\" class=\"dropdown-item text-center message\"> <strong>See All Messages <i class=\"fa fa-angle-right\"></i></strong></a></div>
                </div>
                <!-- Tasks-->
                <div class=\"list-inline-item dropdown\"><a id=\"navbarDropdownMenuLink2\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link tasks-toggle\"><i class=\"icon-new-file\"></i><span class=\"badge dashbg-3\">9</span></a>
                    <div aria-labelledby=\"navbarDropdownMenuLink2\" class=\"dropdown-menu tasks-list\"><a href=\"#\" class=\"dropdown-item\">
                            <div class=\"text d-flex justify-content-between\"><strong>Task 1</strong><span>40% complete</span></div>
                            <div class=\"progress\">
                                <div role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar dashbg-1\"></div>
                            </div></a><a href=\"#\" class=\"dropdown-item\">
                            <div class=\"text d-flex justify-content-between\"><strong>Task 2</strong><span>20% complete</span></div>
                            <div class=\"progress\">
                                <div role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar dashbg-3\"></div>
                            </div></a><a href=\"#\" class=\"dropdown-item\">
                            <div class=\"text d-flex justify-content-between\"><strong>Task 3</strong><span>70% complete</span></div>
                            <div class=\"progress\">
                                <div role=\"progressbar\" style=\"width: 70%\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar dashbg-2\"></div>
                            </div></a><a href=\"#\" class=\"dropdown-item\">
                            <div class=\"text d-flex justify-content-between\"><strong>Task 4</strong><span>30% complete</span></div>
                            <div class=\"progress\">
                                <div role=\"progressbar\" style=\"width: 30%\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar dashbg-4\"></div>
                            </div></a><a href=\"#\" class=\"dropdown-item\">
                            <div class=\"text d-flex justify-content-between\"><strong>Task 5</strong><span>65% complete</span></div>
                            <div class=\"progress\">
                                <div role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar dashbg-1\"></div>
                            </div></a><a href=\"#\" class=\"dropdown-item text-center\"> <strong>See All Tasks <i class=\"fa fa-angle-right\"></i></strong></a>
                    </div>
                </div>
                <!-- Tasks end-->
                <!-- Megamenu-->
                <div class=\"list-inline-item dropdown menu-large\"><a href=\"#\" data-toggle=\"dropdown\" class=\"nav-link\">Mega <i class=\"fa fa-ellipsis-v\"></i></a>
                    <div class=\"dropdown-menu megamenu\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-6\"><strong class=\"text-uppercase\">Elements Heading</strong>
                                <ul class=\"list-unstyled mb-3\">
                                    <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                    <li><a href=\"#\">Sed ut perspiciatis</a></li>
                                    <li><a href=\"#\">Voluptatum deleniti</a></li>
                                    <li><a href=\"#\">At vero eos</a></li>
                                    <li><a href=\"#\">Consectetur adipiscing</a></li>
                                    <li><a href=\"#\">Duis aute irure</a></li>
                                    <li><a href=\"#\">Necessitatibus saepe</a></li>
                                    <li><a href=\"#\">Maiores alias</a></li>
                                </ul>
                            </div>
                            <div class=\"col-lg-3 col-md-6\"><strong class=\"text-uppercase\">Elements Heading</strong>
                                <ul class=\"list-unstyled mb-3\">
                                    <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                    <li><a href=\"#\">Sed ut perspiciatis</a></li>
                                    <li><a href=\"#\">Voluptatum deleniti</a></li>
                                    <li><a href=\"#\">At vero eos</a></li>
                                    <li><a href=\"#\">Consectetur adipiscing</a></li>
                                    <li><a href=\"#\">Duis aute irure</a></li>
                                    <li><a href=\"#\">Necessitatibus saepe</a></li>
                                    <li><a href=\"#\">Maiores alias</a></li>
                                </ul>
                            </div>
                            <div class=\"col-lg-3 col-md-6\"><strong class=\"text-uppercase\">Elements Heading</strong>
                                <ul class=\"list-unstyled mb-3\">
                                    <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                    <li><a href=\"#\">Sed ut perspiciatis</a></li>
                                    <li><a href=\"#\">Voluptatum deleniti</a></li>
                                    <li><a href=\"#\">At vero eos</a></li>
                                    <li><a href=\"#\">Consectetur adipiscing</a></li>
                                    <li><a href=\"#\">Duis aute irure</a></li>
                                    <li><a href=\"#\">Necessitatibus saepe</a></li>
                                    <li><a href=\"#\">Maiores alias</a></li>
                                </ul>
                            </div>
                            <div class=\"col-lg-3 col-md-6\"><strong class=\"text-uppercase\">Elements Heading</strong>
                                <ul class=\"list-unstyled mb-3\">
                                    <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                    <li><a href=\"#\">Sed ut perspiciatis</a></li>
                                    <li><a href=\"#\">Voluptatum deleniti</a></li>
                                    <li><a href=\"#\">At vero eos</a></li>
                                    <li><a href=\"#\">Consectetur adipiscing</a></li>
                                    <li><a href=\"#\">Duis aute irure</a></li>
                                    <li><a href=\"#\">Necessitatibus saepe</a></li>
                                    <li><a href=\"#\">Maiores alias</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"row megamenu-buttons text-center\">
                            <div class=\"col-lg-2 col-md-4\"><a href=\"#\" class=\"d-block megamenu-button-link dashbg-1\"><i class=\"fa fa-clock-o\"></i><strong>Demo 1</strong></a></div>
                            <div class=\"col-lg-2 col-md-4\"><a href=\"#\" class=\"d-block megamenu-button-link dashbg-2\"><i class=\"fa fa-clock-o\"></i><strong>Demo 2</strong></a></div>
                            <div class=\"col-lg-2 col-md-4\"><a href=\"#\" class=\"d-block megamenu-button-link dashbg-3\"><i class=\"fa fa-clock-o\"></i><strong>Demo 3</strong></a></div>
                            <div class=\"col-lg-2 col-md-4\"><a href=\"#\" class=\"d-block megamenu-button-link dashbg-4\"><i class=\"fa fa-clock-o\"></i><strong>Demo 4</strong></a></div>
                            <div class=\"col-lg-2 col-md-4\"><a href=\"#\" class=\"d-block megamenu-button-link bg-danger\"><i class=\"fa fa-clock-o\"></i><strong>Demo 5</strong></a></div>
                            <div class=\"col-lg-2 col-md-4\"><a href=\"#\" class=\"d-block megamenu-button-link bg-info\"><i class=\"fa fa-clock-o\"></i><strong>Demo 6</strong></a></div>
                        </div>
                    </div>
                </div>
                <!-- Megamenu end     -->
                <!-- Languages dropdown    -->
                <div class=\"list-inline-item dropdown\"><a id=\"languages\" rel=\"nofollow\" data-target=\"#\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link language dropdown-toggle\"><img src=\"img/flags/16/GB.png\" alt=\"English\"><span class=\"d-none d-sm-inline-block\">English</span></a>
                    <div aria-labelledby=\"languages\" class=\"dropdown-menu\"><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> <img src=\"img/flags/16/DE.png\" alt=\"English\" class=\"mr-2\"><span>German</span></a><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> <img src=\"img/flags/16/FR.png\" alt=\"English\" class=\"mr-2\"><span>French  </span></a></div>
                </div>
                <!-- Log out               -->
                <div class=\"list-inline-item logout\">                   <a id=\"logout\" href=\"login.html\" class=\"nav-link\"> <span class=\"d-none d-sm-inline\">Logout </span><i class=\"icon-logout\"></i></a></div>
            </div>
        </div>
    </nav>
</header>
<div class=\"d-flex align-items-stretch\">
    <!-- Sidebar Navigation-->
    <nav id=\"sidebar\">
        <!-- Sidebar Header-->
        <div class=\"sidebar-header d-flex align-items-center\">
            <div class=\"avatar\"><img src=\"img/avatar-6.jpg\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
            <div class=\"title\">
                <h1 class=\"h5\">Mark Stephen</h1>
                <p>Web Designer</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class=\"heading\">Main</span>
        <ul class=\"list-unstyled\">
            <li class=\"active\"><a href=\"index.html\"> <i class=\"icon-home\"></i>Home </a></li>


            <li><a href=\"#exampledropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"icon-windows\"></i>information</a>
                <ul id=\"exampledropdownDropdown\" class=\"collapse list-unstyled \">
                    <li><a href=\"#\">Page</a></li>
                    <li><a href=\"#\">Page</a></li>
                    <li><a href=\"#\">Page</a></li>
                </ul>
            </li>
            <li><a href=\"#exampledropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"icon-windows\"></i>table </a>
                <ul id=\"exampledropdownDropdown\" class=\"collapse list-unstyled \">
                    <li><a href=\"#\">Page</a></li>
                    <li><a href=\"#\">Page</a></li>
                    <li><a href=\"#\">Page</a></li>
                </ul>
            </li>

        </ul>

    </nav>
    <!-- Sidebar Navigation end-->

    <div class=\"page-content\">
        <div class=\"page-header\">
            <div class=\"container-fluid\">
                <h2 class=\"h5 no-margin-bottom\">Dashboard</h2>
            </div>
        </div>

        {% block body %}
        <section class=\"no-padding-bottom\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"bar-chart block no-margin-bottom\">
                            <canvas id=\"barChartExample1\"></canvas>
                        </div>
                        <div class=\"bar-chart block\">
                            <canvas id=\"barChartExample2\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-lg-8\">
                        <div class=\"line-cahrt block\">
                            <canvas id=\"lineCahrt\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {% endblock %}





        <footer class=\"footer\">
            <div class=\"footer__block block no-margin-bottom\">
                <div class=\"container-fluid text-center\">

                    <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                    <p class=\"no-margin-bottom\">2020 &copy; Your company. Design by <a href=\"https://bootstrapious.com/p/bootstrap-4-dark-admin\">Bootstrapious</a>.</p>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- JavaScript files-->
<script src=\"{{ asset('Back/vendor/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('Back/vendor/popper.js/umd/popper.min.js') }}\"> </script>
<script src=\"{{ asset('Back/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('Back/vendor/jquery.cookie/jquery.cookie.js') }}\"> </script>
<script src=\"{{ asset('Back/vendor/chart.js/Chart.min.js') }}\"></script>
<script src=\"{{ asset('Back/vendor/jquery-validation/jquery.validate.min.js') }}\"></script>
<script src=\"{{ asset('Back/js/charts-home.js') }}\"></script>
<script src=\"{{ asset('Back/js/front.js') }}\"></script>
</body>
</html>", "MbodyUp/base.back.html.twig", "C:\\xampp\\htdocs\\Mbody_prjt\\templates\\MbodyUp\\base.back.html.twig");
    }
}
