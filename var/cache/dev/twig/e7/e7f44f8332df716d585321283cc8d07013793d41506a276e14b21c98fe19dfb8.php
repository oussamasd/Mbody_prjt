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
            'star' => [$this, 'block_star'],
            'des' => [$this, 'block_des'],
            'commentaire' => [$this, 'block_commentaire'],
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
    <meta name=\"csrf-token\" content=\"\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/favicon.ico"), "html", null, true);
        echo "\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/slicknav.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/animate.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/fontawesome-all.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/nice-select.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/style.css"), "html", null, true);
        echo "\">
</head>

<body>
<div style=\"margin-top: 100px\">
    ";
        // line 29
        $this->displayBlock('tp', $context, $blocks);
        // line 31
        echo "</div>
<!-- Preloader Start -->
<div id=\"preloader-active\">
    <div class=\"preloader d-flex align-items-center justify-content-center\">
        <div class=\"preloader-inner position-relative\">
            <div class=\"preloader-circle\"></div>
            <div class=\"preloader-img pere-text\">
                <img src=\"";
        // line 38
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
        // line 56
        $this->displayBlock('fimage', $context, $blocks);
        // line 57
        echo "                    </div>
                    ";
        // line 58
        $this->displayBlock('Participe', $context, $blocks);
        // line 60
        echo "                    <div class=\"blog_details\">
                        ";
        // line 61
        $this->displayBlock('tit', $context, $blocks);
        // line 69
        echo "                        <p>
                        <ul class=\"blog-info-link mt-3 mb-4\">
                            <li>";
        // line 71
        $this->displayBlock('cat', $context, $blocks);
        echo "</li>
                            <li>";
        // line 72
        $this->displayBlock('dt', $context, $blocks);
        echo "</li>
                            <li>";
        // line 73
        $this->displayBlock('qt', $context, $blocks);
        echo "</li>
                            ";
        // line 74
        $this->displayBlock('star', $context, $blocks);
        // line 77
        echo "                        </ul>

                        </p>


                        <div class=\"quote-wrapper\">
                            <div class=\"quotes\">
                                ";
        // line 84
        $this->displayBlock('des', $context, $blocks);
        // line 90
        echo "                            </div>
                        </div>


                    </div>
                </div>


                <div class=\"comments-area\">
                    <h4>05 Comments</h4>
                    ";
        // line 100
        $this->displayBlock('commentaire', $context, $blocks);
        // line 126
        echo "


                </div>
                <div class=\"comment-form\">
                    <h4>Leave a Reply</h4>
                    <form class=\"form-contact comment_form\" action=\"#\" id=\"commentForm\">
                        <div class=\"row\">


                            <div class=\"col-12\">
                                <div class=\"form-group\">
                                    <input class=\"form-control hh \"  name=\"website\" id=\"website\" type=\"text\" placeholder=\"ur text here....\">
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\"  class=\"button button-contactForm btn_1 boxed-btn\" >Send Commentaire</button>
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
        // line 153
        $this->displayBlock('pict', $context, $blocks);
        // line 185
        echo "                        </ul>
                    </aside>


                    <aside class=\"single_sidebar_widget popular_post_widget\">
                        <h3 class=\"widget_title\">Exercice</h3>
                        ";
        // line 191
        $this->displayBlock('Exercice', $context, $blocks);
        // line 229
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
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>
<!-- Jquery, Popper, Bootstrap -->
";
        // line 251
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Jquery Mobile Menu -->
<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
";
        // line 257
        $this->displayBlock('jquery', $context, $blocks);
        // line 261
        echo "
<!-- One Page, Animated-HeadLin -->
<script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/animated.headline.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
<!-- counter , waypoint -->
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js\"></script>
<script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>

<!-- Nice-select, sticky -->
<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>

<!-- contact js -->
<script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/mail-script.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>

<!-- Jquery Plugins, main Jquery -->
<script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>

";
        // line 296
        $this->displayBlock('c', $context, $blocks);
        // line 298
        echo "
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_tp($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tp"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tp"));

        // line 30
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
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

    // line 58
    public function block_Participe($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Participe"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Participe"));

        // line 59
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_tit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tit"));

        // line 62
        echo "                        <h2>

                            Second divided from form fish beast made every of seas
                            all gathered us saying he our

                        </h2>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_cat($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cat"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cat"));

        echo "<i class=\"fa fa-comments\"></i> 03 Comments";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_dt($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dt"));

        echo "<i class=\"fa fa-user\"></i> Travel, Lifestyle";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_qt($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "qt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "qt"));

        echo "<i class=\"fa fa-user\"></i> Travel, Lifestyle";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_star($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "star"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "star"));

        // line 75
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_des($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "des"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "des"));

        // line 85
        echo "                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at
                                a fraction of the camp price. However, who has the willpower to actually sit through a
                                self-imposed MCSE training.
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_commentaire($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commentaire"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commentaire"));

        // line 101
        echo "                    <div class=\"comment-list\">
                        <div class=\"single-comment justify-content-between d-flex\">
                            <div class=\"user justify-content-between d-flex\">
                                <div class=\"thumb\">
                                    <img src=\"";
        // line 105
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

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 153
    public function block_pict($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pict"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pict"));

        // line 154
        echo "                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_5.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_6.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_7.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_8.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_9.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/ssets/img/post/post_10.png"), "html", null, true);
        echo "a\" alt=\"\">
                                </a>
                            </li>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 191
    public function block_Exercice($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Exercice"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Exercice"));

        // line 192
        echo "                        <div class=\"media post_item\">
                             <img  src=\"";
        // line 193
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
        // line 202
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
        // line 211
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
        // line 220
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

    // line 257
    public function block_jquery($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jquery"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jquery"));

        // line 258
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 296
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
        return array (  773 => 296,  761 => 259,  756 => 258,  746 => 257,  727 => 220,  715 => 211,  703 => 202,  691 => 193,  688 => 192,  678 => 191,  664 => 181,  656 => 176,  648 => 171,  640 => 166,  632 => 161,  624 => 156,  620 => 154,  610 => 153,  579 => 105,  573 => 101,  563 => 100,  549 => 85,  539 => 84,  528 => 75,  518 => 74,  499 => 73,  480 => 72,  461 => 71,  445 => 62,  435 => 61,  425 => 59,  415 => 58,  394 => 56,  384 => 30,  374 => 29,  361 => 298,  359 => 296,  352 => 283,  348 => 282,  342 => 279,  338 => 278,  334 => 277,  330 => 276,  326 => 275,  320 => 272,  316 => 271,  310 => 268,  304 => 265,  300 => 264,  296 => 263,  292 => 261,  290 => 257,  284 => 254,  279 => 252,  274 => 251,  269 => 248,  248 => 229,  246 => 191,  238 => 185,  236 => 153,  207 => 126,  205 => 100,  193 => 90,  191 => 84,  182 => 77,  180 => 74,  176 => 73,  172 => 72,  168 => 71,  164 => 69,  162 => 61,  159 => 60,  157 => 58,  154 => 57,  152 => 56,  131 => 38,  122 => 31,  120 => 29,  112 => 24,  108 => 23,  104 => 22,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  76 => 15,  69 => 11,  57 => 1,);
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
    <meta name=\"csrf-token\" content=\"\" />
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
                        <p>
                        <ul class=\"blog-info-link mt-3 mb-4\">
                            <li>{% block cat %}<i class=\"fa fa-comments\"></i> 03 Comments{% endblock %}</li>
                            <li>{% block dt %}<i class=\"fa fa-user\"></i> Travel, Lifestyle{% endblock %}</li>
                            <li>{% block qt %}<i class=\"fa fa-user\"></i> Travel, Lifestyle{% endblock %}</li>
                            {% block star %}

                            {% endblock %}
                        </ul>

                        </p>


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
                    {% block commentaire %}
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

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endblock %}



                </div>
                <div class=\"comment-form\">
                    <h4>Leave a Reply</h4>
                    <form class=\"form-contact comment_form\" action=\"#\" id=\"commentForm\">
                        <div class=\"row\">


                            <div class=\"col-12\">
                                <div class=\"form-group\">
                                    <input class=\"form-control hh \"  name=\"website\" id=\"website\" type=\"text\" placeholder=\"ur text here....\">
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\"  class=\"button button-contactForm btn_1 boxed-btn\" >Send Commentaire</button>
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
