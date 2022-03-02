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

/* base.details.html.twig */
class __TwigTemplate_63ced9352ca6a9f2700d93f6978cfb919cb58d392555c10bb2da5b3ed9e1560e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'tp' => [$this, 'block_tp'],
            'fimage' => [$this, 'block_fimage'],
            'Participe' => [$this, 'block_Participe'],
            'tit' => [$this, 'block_tit'],
            'cat' => [$this, 'block_cat'],
            'dt' => [$this, 'block_dt'],
            'qt' => [$this, 'block_qt'],
            'des' => [$this, 'block_des'],
            'pict' => [$this, 'block_pict'],
            'Exercice' => [$this, 'block_Exercice'],
            'jquery' => [$this, 'block_jquery'],
            'c' => [$this, 'block_c'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.details.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Business HTML-5 Template </title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/favicon.ico"), "html", null, true);
        echo "\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/slicknav.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/animate.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/fontawesome-all.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/nice-select.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/style.css"), "html", null, true);
        echo "\">
</head>

<body>
<div style=\"margin-top: 100px\">
    ";
        // line 28
        $this->displayBlock('tp', $context, $blocks);
        // line 30
        echo "</div>
<!-- Preloader Start -->
<div id=\"preloader-active\">
    <div class=\"preloader d-flex align-items-center justify-content-center\">
        <div class=\"preloader-inner position-relative\">
            <div class=\"preloader-circle\"></div>
            <div class=\"preloader-img pere-text\">
                <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/logo/loder.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start-->

<main>
    <!--? Hero Start -->

    <!-- Hero End -->
    <!--================Blog Area =================-->

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 posts-list\">
                <div class=\"single-post\">
                    <div class=\"feature-img\">
                        ";
        // line 55
        $this->displayBlock('fimage', $context, $blocks);
        // line 56
        echo "                    </div>
                    ";
        // line 57
        $this->displayBlock('Participe', $context, $blocks);
        // line 59
        echo "                    <div class=\"blog_details\">
                        ";
        // line 60
        $this->displayBlock('tit', $context, $blocks);
        // line 68
        echo "                        <ul class=\"blog-info-link mt-3 mb-4\">
                            <li><a href=\"#\">";
        // line 69
        $this->displayBlock('cat', $context, $blocks);
        echo "</li>
                            <li><a href=\"#\">";
        // line 70
        $this->displayBlock('dt', $context, $blocks);
        echo "</li>
                            <li><a href=\"#\">";
        // line 71
        $this->displayBlock('qt', $context, $blocks);
        echo "</li>

                        </ul>


                        <div class=\"quote-wrapper\">
                            <div class=\"quotes\">
                                ";
        // line 78
        $this->displayBlock('des', $context, $blocks);
        // line 84
        echo "                            </div>
                        </div>


                    </div>
                </div>


                <div class=\"comments-area\">
                    <h4>05 Comments</h4>
                    <div class=\"comment-list\">
                        <div class=\"single-comment justify-content-between d-flex\">
                            <div class=\"user justify-content-between d-flex\">
                                <div class=\"thumb\">
                                    <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/comment/comment_1.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"desc\">
                                    <p class=\"comment\">
                                        Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                        Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                    </p>
                                    <div class=\"d-flex justify-content-between\">
                                        <div class=\"d-flex align-items-center\">
                                            <h5>
                                                <a href=\"#\">Emilly Blunt</a>
                                            </h5>
                                            <p class=\"date\">December 4, 2017 at 3:12 pm </p>
                                        </div>
                                        <div class=\"reply-btn\">
                                            <a href=\"#\" class=\"btn-reply text-uppercase\">reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class=\"comment-form\">
                    <h4>Leave a Reply</h4>
                    <form class=\"form-contact comment_form\" action=\"#\" id=\"commentForm\">
                        <div class=\"row\">


                            <div class=\"col-12\">
                                <div class=\"form-group\">
                                    <input class=\"form-control\" name=\"website\" id=\"website\" type=\"text\" placeholder=\"Website\">
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"button button-contactForm btn_1 boxed-btn\">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"blog_right_sidebar\">
                    <aside class=\"single_sidebar_widget instagram_feeds\">
                        <h4 class=\"widget_title\">All Picture</h4>
                        <ul class=\"instagram_row flex-wrap\">
                            ";
        // line 147
        $this->displayBlock('pict', $context, $blocks);
        // line 179
        echo "                        </ul>
                    </aside>


                    <aside class=\"single_sidebar_widget popular_post_widget\">
                        <h3 class=\"widget_title\">Exercice</h3>
                        ";
        // line 185
        $this->displayBlock('Exercice', $context, $blocks);
        // line 223
        echo "                    </aside>


                </div>
            </div>
        </div>
    </div>

    <!--================ Blog Area end =================-->

</main>

<!-- Scroll Up -->
<div id=\"back-top\" >
    <a title=\"Go to Top\" href=\"#\"> <i class=\"fas fa-level-up-alt\"></i></a>
</div>

<!-- JS here -->
<!-- All JS Custom Plugins Link Here here -->
<script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>
<!-- Jquery, Popper, Bootstrap -->
";
        // line 245
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Jquery Mobile Menu -->
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
";
        // line 251
        $this->displayBlock('jquery', $context, $blocks);
        // line 255
        echo "
<!-- One Page, Animated-HeadLin -->
<script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/animated.headline.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
<!-- counter , waypoint -->
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js\"></script>
<script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>

<!-- Nice-select, sticky -->
<script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>

<!-- contact js -->
<script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/mail-script.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>

<!-- Jquery Plugins, main Jquery -->
<script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/main.js"), "html", null, true);
        echo "\"></script>
<button href=\"\" id=\"b\" type=\"submit\">bbb</button>
</body>

";
        // line 290
        $this->displayBlock('c', $context, $blocks);
        // line 292
        echo "
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_tp($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tp"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tp"));

        // line 29
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_fimage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fimage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fimage"));

        echo " <img class=\"img-fluid\"  src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/blog/single_blog_1.png"), "html", null, true);
        echo "\" alt=\"\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_Participe($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Participe"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Participe"));

        // line 58
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_tit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tit"));

        // line 61
        echo "                        <h2>

                            Second divided from form fish beast made every of seas
                            all gathered us saying he our

                        </h2>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_cat($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cat"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cat"));

        echo "<i class=\"fa fa-comments\"></i> 03 Comments</a>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_dt($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dt"));

        echo "<i class=\"fa fa-user\"></i> Travel, Lifestyle</a>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_qt($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "qt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "qt"));

        echo "<i class=\"fa fa-user\"></i> Travel, Lifestyle</a>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_des($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "des"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "des"));

        // line 79
        echo "                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at
                                a fraction of the camp price. However, who has the willpower to actually sit through a
                                self-imposed MCSE training.
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 147
    public function block_pict($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pict"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pict"));

        // line 148
        echo "                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_5.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_6.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_7.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_8.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_9.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/ssets/img/post/post_10.png"), "html", null, true);
        echo "a\" alt=\"\">
                                </a>
                            </li>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 185
    public function block_Exercice($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Exercice"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Exercice"));

        // line 186
        echo "                        <div class=\"media post_item\">
                             <img  src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_1.png"), "html", null, true);
        echo "\"  alt=\"post\">
                            <div class=\"media-body\">
                                <a href=\"blog_details.html\">
                                    <h3>From life was you fish...</h3>
                                </a>
                                <p>January 12, 2019</p>
                            </div>
                        </div>
                        <div class=\"media post_item\">
                            <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_2.png"), "html", null, true);
        echo "\" alt=\"post\">
                            <div class=\"media-body\">
                                <a href=\"blog_details.html\">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class=\"media post_item\">
                            <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_3.png"), "html", null, true);
        echo "\" alt=\"post\">
                            <div class=\"media-body\">
                                <a href=\"blog_details.html\">
                                    <h3>Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                            </div>
                        </div>
                        <div class=\"media post_item\">
                            <img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_4.png"), "html", null, true);
        echo "\" alt=\"post\">
                            <div class=\"media-body\">
                                <a href=\"blog_details.html\">
                                    <h3>Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
                            </div>
                        </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 251
    public function block_jquery($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jquery"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jquery"));

        // line 252
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 290
    public function block_c($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "c"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "c"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  721 => 290,  709 => 253,  704 => 252,  694 => 251,  675 => 214,  663 => 205,  651 => 196,  639 => 187,  636 => 186,  626 => 185,  612 => 175,  604 => 170,  596 => 165,  588 => 160,  580 => 155,  572 => 150,  568 => 148,  558 => 147,  544 => 79,  534 => 78,  515 => 71,  496 => 70,  477 => 69,  461 => 61,  451 => 60,  441 => 58,  431 => 57,  410 => 55,  400 => 29,  390 => 28,  377 => 292,  375 => 290,  368 => 277,  364 => 276,  358 => 273,  354 => 272,  350 => 271,  346 => 270,  342 => 269,  336 => 266,  332 => 265,  326 => 262,  320 => 259,  316 => 258,  312 => 257,  308 => 255,  306 => 251,  300 => 248,  295 => 246,  290 => 245,  285 => 242,  264 => 223,  262 => 185,  254 => 179,  252 => 147,  200 => 98,  184 => 84,  182 => 78,  172 => 71,  168 => 70,  164 => 69,  161 => 68,  159 => 60,  156 => 59,  154 => 57,  151 => 56,  149 => 55,  128 => 37,  119 => 30,  117 => 28,  109 => 23,  105 => 22,  101 => 21,  97 => 20,  93 => 19,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  66 => 10,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Business HTML-5 Template </title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('detail/assets/img/favicon.ico') }}\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"{{ asset('detail/assets/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('detail/assets/css/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('detail/assets/css/slicknav.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('detail/assets/css/animate.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('detail/assets/css/magnific-popup.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('detail/assets/css/fontawesome-all.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('detail/assets/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('detail/assets/css/slick.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('detail/assets/css/nice-select.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('detail/assets/css/style.css') }}\">
</head>

<body>
<div style=\"margin-top: 100px\">
    {% block tp %}
    {% endblock %}
</div>
<!-- Preloader Start -->
<div id=\"preloader-active\">
    <div class=\"preloader d-flex align-items-center justify-content-center\">
        <div class=\"preloader-inner position-relative\">
            <div class=\"preloader-circle\"></div>
            <div class=\"preloader-img pere-text\">
                <img src=\"{{ asset('detail/assets/img/logo/loder.jpg') }}\" alt=\"\">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start-->

<main>
    <!--? Hero Start -->

    <!-- Hero End -->
    <!--================Blog Area =================-->

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 posts-list\">
                <div class=\"single-post\">
                    <div class=\"feature-img\">
                        {% block fimage %} <img class=\"img-fluid\"  src=\"{{ asset('detail/assets/img/blog/single_blog_1.png') }}\" alt=\"\">{% endblock %}
                    </div>
                    {% block Participe %}
                    {% endblock %}
                    <div class=\"blog_details\">
                        {% block tit %}
                        <h2>

                            Second divided from form fish beast made every of seas
                            all gathered us saying he our

                        </h2>
                        {% endblock %}
                        <ul class=\"blog-info-link mt-3 mb-4\">
                            <li><a href=\"#\">{% block cat %}<i class=\"fa fa-comments\"></i> 03 Comments</a>{% endblock %}</li>
                            <li><a href=\"#\">{% block dt %}<i class=\"fa fa-user\"></i> Travel, Lifestyle</a>{% endblock %}</li>
                            <li><a href=\"#\">{% block qt %}<i class=\"fa fa-user\"></i> Travel, Lifestyle</a>{% endblock %}</li>

                        </ul>


                        <div class=\"quote-wrapper\">
                            <div class=\"quotes\">
                                {% block des %}
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at
                                a fraction of the camp price. However, who has the willpower to actually sit through a
                                self-imposed MCSE training.
                                {% endblock %}
                            </div>
                        </div>


                    </div>
                </div>


                <div class=\"comments-area\">
                    <h4>05 Comments</h4>
                    <div class=\"comment-list\">
                        <div class=\"single-comment justify-content-between d-flex\">
                            <div class=\"user justify-content-between d-flex\">
                                <div class=\"thumb\">
                                    <img src=\"{{ asset('detail/assets/img/comment/comment_1.png') }}\" alt=\"\">
                                </div>
                                <div class=\"desc\">
                                    <p class=\"comment\">
                                        Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                        Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                    </p>
                                    <div class=\"d-flex justify-content-between\">
                                        <div class=\"d-flex align-items-center\">
                                            <h5>
                                                <a href=\"#\">Emilly Blunt</a>
                                            </h5>
                                            <p class=\"date\">December 4, 2017 at 3:12 pm </p>
                                        </div>
                                        <div class=\"reply-btn\">
                                            <a href=\"#\" class=\"btn-reply text-uppercase\">reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class=\"comment-form\">
                    <h4>Leave a Reply</h4>
                    <form class=\"form-contact comment_form\" action=\"#\" id=\"commentForm\">
                        <div class=\"row\">


                            <div class=\"col-12\">
                                <div class=\"form-group\">
                                    <input class=\"form-control\" name=\"website\" id=\"website\" type=\"text\" placeholder=\"Website\">
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"button button-contactForm btn_1 boxed-btn\">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"blog_right_sidebar\">
                    <aside class=\"single_sidebar_widget instagram_feeds\">
                        <h4 class=\"widget_title\">All Picture</h4>
                        <ul class=\"instagram_row flex-wrap\">
                            {% block pict %}
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"{{ asset('detail/assets/img/post/post_5.png') }}\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"{{ asset('detail/assets/img/post/post_6.png') }}\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"{{ asset('detail/assets/img/post/post_7.png') }}\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"{{ asset('detail/assets/img/post/post_8.png') }}\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"{{ asset('detail/assets/img/post/post_9.png') }}\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"{{ asset('detail/ssets/img/post/post_10.png') }}a\" alt=\"\">
                                </a>
                            </li>
                            {% endblock %}
                        </ul>
                    </aside>


                    <aside class=\"single_sidebar_widget popular_post_widget\">
                        <h3 class=\"widget_title\">Exercice</h3>
                        {% block Exercice %}
                        <div class=\"media post_item\">
                             <img  src=\"{{ asset('detail/assets/img/post/post_1.png')  }}\"  alt=\"post\">
                            <div class=\"media-body\">
                                <a href=\"blog_details.html\">
                                    <h3>From life was you fish...</h3>
                                </a>
                                <p>January 12, 2019</p>
                            </div>
                        </div>
                        <div class=\"media post_item\">
                            <img src=\"{{ asset('detail/assets/img/post/post_2.png') }}\" alt=\"post\">
                            <div class=\"media-body\">
                                <a href=\"blog_details.html\">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class=\"media post_item\">
                            <img src=\"{{ asset('detail/assets/img/post/post_3.png') }}\" alt=\"post\">
                            <div class=\"media-body\">
                                <a href=\"blog_details.html\">
                                    <h3>Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                            </div>
                        </div>
                        <div class=\"media post_item\">
                            <img src=\"{{ asset('detail/assets/img/post/post_4.png') }}\" alt=\"post\">
                            <div class=\"media-body\">
                                <a href=\"blog_details.html\">
                                    <h3>Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
                            </div>
                        </div>
                        {% endblock %}
                    </aside>


                </div>
            </div>
        </div>
    </div>

    <!--================ Blog Area end =================-->

</main>

<!-- Scroll Up -->
<div id=\"back-top\" >
    <a title=\"Go to Top\" href=\"#\"> <i class=\"fas fa-level-up-alt\"></i></a>
</div>

<!-- JS here -->
<!-- All JS Custom Plugins Link Here here -->
<script src=\"{{ asset('detail/assets/js/vendor/modernizr-3.5.0.min.js') }}\"></script>
<!-- Jquery, Popper, Bootstrap -->
{#<script src=\"{{ asset('detail/assets/js/vendor/jquery-1.12.4.min.js') }}\"></script>#}
<script src=\"{{ asset('detail/assets/js/popper.min.js') }}\"></script>
<script src=\"{{ asset('detail/assets/js/bootstrap.min.js') }}\"></script>
<!-- Jquery Mobile Menu -->
<script src=\"{{ asset('detail/assets/js/jquery.slicknav.min.js') }}\"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
{% block jquery %}
<script src=\"{{ asset('detail/assets/js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('detail/assets/js/slick.min.js') }}\"></script>
{% endblock %}

<!-- One Page, Animated-HeadLin -->
<script src=\"{{ asset('detail/assets/js/wow.min.js') }}\"></script>
<script src=\"{{ asset('detail/assets/js/animated.headline.js') }}\"></script>
<script src=\"{{ asset('detail/assets/js/jquery.magnific-popup.js') }}\"></script>
<!-- counter , waypoint -->
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js\"></script>
<script src=\"{{ asset('detail/assets/js/jquery.counterup.min.js') }}\"></script>

<!-- Nice-select, sticky -->
<script src=\"{{ asset('detail/assets/js/jquery.nice-select.min.js') }}\"></script>
<script src=\"{{ asset('detail/assets/js/jquery.sticky.js') }}\"></script>

<!-- contact js -->
<script src=\"{{ asset('detail/assets/js/contact.js') }}\"></script>
<script src=\"{{ asset('detail/assets/js/jquery.form.js') }}\"></script>
<script src=\"{{ asset('detail/assets/js/jquery.validate.min.js') }}\"></script>
<script src=\"{{ asset('detail/assets/js/mail-script.js') }}\"></script>
<script src=\"{{ asset('detail/assets/js/jquery.ajaxchimp.min.js') }}\"></script>

<!-- Jquery Plugins, main Jquery -->
<script src=\"{{ asset('detail/assets/js/plugins.js') }}\"></script>
<script src=\"{{ asset('detail/assets/js/main.js') }}\"></script>
<button href=\"\" id=\"b\" type=\"submit\">bbb</button>
</body>

{#<script type=\"text/javascript\">#}
{#    console.log(\"errrrr\");#}
{#    \$(document).ready(function(){#}
{#        console.log(\"errrrr\");#}
{#        \$(\"#small_img\").click(function(){#}
{#            \$(\"#img-fluid\").attr('src',\$(this).attr('src'));#}
{#        });#}
{#    });#}
{#</script>#}
{% block c %}
{% endblock %}

</html>

", "base.details.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\base.details.html.twig");
    }
}
