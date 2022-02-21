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
class __TwigTemplate_6e1c91ef3f46302a27dae883e3c3b4ee91e01a015d28c0e65ff12dbd7716792d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'fimage' => [$this, 'block_fimage'],
            'tit' => [$this, 'block_tit'],
            'cat' => [$this, 'block_cat'],
            'dt' => [$this, 'block_dt'],
            'pict' => [$this, 'block_pict'],
            'Exercice' => [$this, 'block_Exercice'],
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

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/slicknav.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/animate.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/fontawesome-all.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/nice-select.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/css/style.css"), "html", null, true);
        echo "\">
</head>

<body>
<div style=\"margin-top: 100px\">

</div>
<!-- Preloader Start -->
<div id=\"preloader-active\">
    <div class=\"preloader d-flex align-items-center justify-content-center\">
        <div class=\"preloader-inner position-relative\">
            <div class=\"preloader-circle\"></div>
            <div class=\"preloader-img pere-text\">
                <img src=\"";
        // line 35
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
        // line 53
        $this->displayBlock('fimage', $context, $blocks);
        // line 54
        echo "                    </div>
                    <div class=\"blog_details\">

                        <h2>
                            ";
        // line 58
        $this->displayBlock('tit', $context, $blocks);
        // line 62
        echo "                        </h2>
                        <ul class=\"blog-info-link mt-3 mb-4\">
                            <li><a href=\"#\">";
        // line 64
        $this->displayBlock('cat', $context, $blocks);
        echo "</li>
                            <li><a href=\"#\">";
        // line 65
        $this->displayBlock('dt', $context, $blocks);
        echo "</li>

                        </ul>
                        <p class=\"excert\">
                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                            should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                            fraction of the camp price. However, who has the willpower
                        </p>

                        <div class=\"quote-wrapper\">
                            <div class=\"quotes\">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at
                                a fraction of the camp price. However, who has the willpower to actually sit through a
                                self-imposed MCSE training.
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
                                    <img src=\"";
        // line 94
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
        // line 143
        $this->displayBlock('pict', $context, $blocks);
        // line 175
        echo "                        </ul>
                    </aside>


                    <aside class=\"single_sidebar_widget popular_post_widget\">
                        <h3 class=\"widget_title\">Exercice</h3>
                        ";
        // line 181
        $this->displayBlock('Exercice', $context, $blocks);
        // line 219
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
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Jquery Mobile Menu -->
<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>

<!-- One Page, Animated-HeadLin -->
<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/animated.headline.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
<!-- counter , waypoint -->
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js\"></script>
<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>

<!-- Nice-select, sticky -->
<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>

<!-- contact js -->
<script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/mail-script.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>

<!-- Jquery Plugins, main Jquery -->
<script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
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
    public function block_tit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tit"));

        // line 59
        echo "                            Second divided from form fish beast made every of seas
                            all gathered us saying he our
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
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

    // line 65
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

    // line 143
    public function block_pict($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pict"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pict"));

        // line 144
        echo "                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_5.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_6.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_7.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_8.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/assets/img/post/post_9.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img class=\"img-fluid\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("detail/ssets/img/post/post_10.png"), "html", null, true);
        echo "a\" alt=\"\">
                                </a>
                            </li>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 181
    public function block_Exercice($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Exercice"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Exercice"));

        // line 182
        echo "                        <div class=\"media post_item\">
                             <img  src=\"";
        // line 183
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
        // line 192
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
        // line 201
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
        // line 210
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
        return array (  577 => 210,  565 => 201,  553 => 192,  541 => 183,  538 => 182,  528 => 181,  514 => 171,  506 => 166,  498 => 161,  490 => 156,  482 => 151,  474 => 146,  470 => 144,  460 => 143,  441 => 65,  422 => 64,  410 => 59,  400 => 58,  379 => 53,  364 => 271,  360 => 270,  354 => 267,  350 => 266,  346 => 265,  342 => 264,  338 => 263,  332 => 260,  328 => 259,  322 => 256,  316 => 253,  312 => 252,  308 => 251,  302 => 248,  298 => 247,  292 => 244,  287 => 242,  283 => 241,  279 => 240,  274 => 238,  253 => 219,  251 => 181,  243 => 175,  241 => 143,  189 => 94,  157 => 65,  153 => 64,  149 => 62,  147 => 58,  141 => 54,  139 => 53,  118 => 35,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  60 => 10,  49 => 1,);
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
                    <div class=\"blog_details\">

                        <h2>
                            {% block tit %}
                            Second divided from form fish beast made every of seas
                            all gathered us saying he our
                            {% endblock %}
                        </h2>
                        <ul class=\"blog-info-link mt-3 mb-4\">
                            <li><a href=\"#\">{% block cat %}<i class=\"fa fa-comments\"></i> 03 Comments</a>{% endblock %}</li>
                            <li><a href=\"#\">{% block dt %}<i class=\"fa fa-user\"></i> Travel, Lifestyle</a>{% endblock %}</li>

                        </ul>
                        <p class=\"excert\">
                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                            should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                            fraction of the camp price. However, who has the willpower
                        </p>

                        <div class=\"quote-wrapper\">
                            <div class=\"quotes\">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at
                                a fraction of the camp price. However, who has the willpower to actually sit through a
                                self-imposed MCSE training.
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
<script src=\"{{ asset('detail/assets/js/vendor/jquery-1.12.4.min.js') }}\"></script>
<script src=\"{{ asset('detail/assets/js/popper.min.js') }}\"></script>
<script src=\"{{ asset('detail/assets/js/bootstrap.min.js') }}\"></script>
<!-- Jquery Mobile Menu -->
<script src=\"{{ asset('detail/assets/js/jquery.slicknav.min.js') }}\"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src=\"{{ asset('detail/assets/js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('detail/assets/js/slick.min.js') }}\"></script>

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

</html>", "base.details.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\base.details.html.twig");
    }
}
