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

/* abonnementfront/abonnementfront.html.twig */
class __TwigTemplate_79ca1db8c7696eee8cc4d0a9dece4197db90f72fd44185e3e8145465bf5d9e64 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'Produit' => [$this, 'block_Produit'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnementfront/abonnementfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnementfront/abonnementfront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap\" rel=\"stylesheet\">

    <title>MbodyUP-GYM</title>
    <!--

    TemplateMo 548 Training Studio

    https://templatemo.com/tm-548-training-studio

    -->
    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-training-studio.css"), "html", null, true);
        echo "\">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id=\"js-preloader\" class=\"js-preloader\">
    <div class=\"preloader-inner\">
        <span class=\"dot\"></span>
        <div class=\"dots\">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">MBodyUp<em> Gym</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li class=\"scroll-to-section\"><a href=\"#top\" class=\"active\">Accueil</a></li>
                        <li class=\"scroll-to-section\"><a href=\"#features\">Produit</a></li>
                        <li class=\"scroll-to-section\"><a href=\"#our-classes\">Activite</a></li>
                        <li class=\"scroll-to-section\"><a href=\"#schedule\">Abonnement</a></li>
                        <li class=\"scroll-to-section\"><a href=\"#schedule\">Entraineur</a></li>
                        <li class=\"scroll-to-section\"><a href=\"#contact-us\">Feedback</a></li>
                        <li class=\"main-button\"><a href=\"#\">Sign Up</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div class=\"main-banner\" id=\"top\">
    <video autoplay muted loop id=\"bg-video\">
        <source src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gym-video.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\" />
    </video>

    <div class=\"video-overlay header-text\">
        <div class=\"caption\">
            <h6>work harder, get stronger</h6>
            <h2>easy with our <em>gym</em></h2>
            <div class=\"main-button scroll-to-section\">
                <a href=\"#features\">Become a member</a>
            </div>
        </div>
    </div>
</div>

<!-- ***** Main Banner Area End ***** -->

<!-- ***** Features Item Start ***** -->
<section class=\"section\" id=\"features\">
    <div class=\"container\">
        ";
        // line 97
        $this->displayBlock('Produit', $context, $blocks);
        // line 176
        echo "    </div>
</section>
<!-- ***** Features Item End ***** -->

<!-- ***** Call to Action Start ***** -->
<section class=\"section\" id=\"call-to-action\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 offset-lg-1\">
                <div class=\"cta-content\">
                    <h2>Don’t <em>think</em>, begin <em>today</em>!</h2>
                    <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                    <div class=\"main-button scroll-to-section\">
                        <a href=\"#our-classes\">Become a member</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Our Classes Start ***** -->
<section class=\"section\" id=\"our-classes\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3\">
                <div class=\"section-heading\">
                    <h2>Our <em>Classes</em></h2>
                    <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/line-dec.png"), "html", null, true);
        echo "\" alt=\"\">
                    <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                </div>
            </div>
        </div>
        <div class=\"row\" id=\"tabs\">
            <div class=\"col-lg-4\">
                <ul>
                    <li><a href='#tabs-1'><img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tabs-first-icon.png"), "html", null, true);
        echo "\" alt=\"\">First Training Class</a></li>
                    <li><a href='#tabs-2'><img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tabs-first-icon.png"), "html", null, true);
        echo "\" alt=\"\">Second Training Class</a></a></li>
                    <li><a href='#tabs-3'><img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tabs-first-icon.png"), "html", null, true);
        echo "\" alt=\"\">Third Training Class</a></a></li>
                    <li><a href='#tabs-4'><img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tabs-first-icon.png"), "html", null, true);
        echo "\" alt=\"\">Fourth Training Class</a></a></li>
                    <div class=\"main-rounded-button\"><a href=\"#\">View All Schedules</a></div>
                </ul>
            </div>
            <div class=\"col-lg-8\">
                <section class='tabs-content'>
                    <article id='tabs-1'>
                        <img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/training-image-01.jpg"), "html", null, true);
        echo "\" alt=\"First Class\">
                        <h4>First Training Class</h4>
                        <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                        <div class=\"main-button\">
                            <a href=\"#\">View Schedule</a>
                        </div>
                    </article>
                    <article id='tabs-2'>
                        <img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/training-image-02.jpg"), "html", null, true);
        echo "\" alt=\"Second Training\">
                        <h4>Second Training Class</h4>
                        <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <div class=\"main-button\">
                            <a href=\"#\">View Schedule</a>
                        </div>
                    </article>
                    <article id='tabs-3'>
                        <img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/training-image-03.jpg"), "html", null, true);
        echo "\" alt=\"Third Class\">
                        <h4>Third Training Class</h4>
                        <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                        <div class=\"main-button\">
                            <a href=\"#\">View Schedule</a>
                        </div>
                    </article>
                    <article id='tabs-4'>
                        <img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/training-image-04.jpg"), "html", null, true);
        echo "\" alt=\"Fourth Training\">
                        <h4>Fourth Training Class</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
                        <div class=\"main-button\">
                            <a href=\"#\">View Schedule</a>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- ***** Our Classes End ***** -->


<!-- ***** Testimonials Starts ***** -->
<section class=\"section\" id=\"trainers\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3\">
                <div class=\"section-heading\">
                    <h2>Expert <em>Trainers</em></h2>
                    <img src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/line-dec.png"), "html", null, true);
        echo "\" alt=\"\">
                    <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"trainer-item\">
                    <div class=\"image-thumb\">
                        <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/first-trainer.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"down-content\">
                        <span>Strength Trainer</span>
                        <h4>Bret D. Bowers</h4>
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"trainer-item\">
                    <div class=\"image-thumb\">
                        <img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/second-trainer.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"down-content\">
                        <span>Muscle Trainer</span>
                        <h4>Hector T. Daigl</h4>
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"trainer-item\">
                    <div class=\"image-thumb\">
                        <img src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/third-trainer.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"down-content\">
                        <span>Power Trainer</span>
                        <h4>Paul D. Newman</h4>
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Testimonials Ends ***** -->

<!-- ***** Contact Us Area Starts ***** -->
<section class=\"section\" id=\"contact-us\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-xs-12\">
                <div id=\"map\">
                    <iframe src=\"https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed\" width=\"100%\" height=\"600px\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-xs-12\">
                <div class=\"contact-form\">
                    <form id=\"contact\" action=\"\" method=\"post\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                <fieldset>
                                    <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"Your Name*\" required=\"\">
                                </fieldset>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <fieldset>
                                    <input name=\"email\" type=\"text\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" placeholder=\"Your Email*\" required=\"\">
                                </fieldset>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <fieldset>
                                    <input name=\"subject\" type=\"text\" id=\"subject\" placeholder=\"Subject\">
                                </fieldset>
                            </div>
                            <div class=\"col-lg-12\">
                                <fieldset>
                                    <textarea name=\"message\" rows=\"6\" id=\"message\" placeholder=\"Message\" required=\"\"></textarea>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-12\">
                                <fieldset>
                                    <button type=\"submit\" id=\"form-submit\" class=\"main-button\">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Contact Us Area Ends ***** -->

<!-- ***** Footer Start ***** -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright &copy; 2020 Training Studio

                    - Designed by <a rel=\"nofollow\" href=\"https://templatemo.com\" class=\"tm-text-link\" target=\"_parent\">TemplateMo</a></p>

                <!-- You shall support us a little via PayPal to info@templatemo.com -->

            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap -->
<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Plugins -->
<script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scrollreveal.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/imgfix.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/mixitup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/accordions.js"), "html", null, true);
        echo "\"></script>

<!-- Global Init -->
<script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 97
    public function block_Produit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Produit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Produit"));

        // line 98
        echo "            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading\">
                        <h2>Choose <em>Hadil</em></h2>
                        <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/line-dec.png"), "html", null, true);
        echo "\" alt=\"waves\">
                        <p>Training Studio is free CSS template for gyms and fitness centers. You are allowed to use this layout for your business website.</p>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <ul class=\"features-items\">
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/features-first-icon.png"), "html", null, true);
        echo "\" alt=\"First One\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Basic Fitness</h4>
                                <p>Please do not re-distribute this template ZIP file on any template collection website. This is not allowed.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/features-first-icon.png"), "html", null, true);
        echo "\" alt=\"second one\">
                            </div>
                            <div class=\"right-content\">
                                <h4>New Gym Training</h4>
                                <p>If you wish to support TemplateMo website via PayPal, please feel free to contact us. We appreciate it a lot.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/features-first-icon.png"), "html", null, true);
        echo "\" alt=\"third gym training\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Basic Muscle Course</h4>
                                <p>Credit goes to <a rel=\"nofollow\" href=\"https://www.pexels.com\" target=\"_blank\">Pexels website</a> for images and video background used in this HTML template.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-6\">
                    <ul class=\"features-items\">
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/features-first-icon.png"), "html", null, true);
        echo "\" alt=\"fourth muscle\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Advanced Muscle Course</h4>
                                <p>You may want to browse through <a rel=\"nofollow\" href=\"https://templatemo.com/tag/digital-marketing\" target=\"_parent\">Digital Marketing</a> or <a href=\"https://templatemo.com/tag/corporate\">Corporate</a> HTML CSS templates on our website.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/features-first-icon.png"), "html", null, true);
        echo "\" alt=\"training fifth\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Yoga Training</h4>
                                <p>This template is built on Bootstrap v4.3.1 framework. It is easy to adapt the columns and sections.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/features-first-icon.png"), "html", null, true);
        echo "\" alt=\"gym training\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Body Building Course</h4>
                                <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "abonnementfront/abonnementfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 164,  559 => 154,  546 => 144,  529 => 130,  516 => 120,  503 => 110,  492 => 102,  486 => 98,  476 => 97,  462 => 414,  456 => 411,  452 => 410,  448 => 409,  444 => 408,  440 => 407,  436 => 406,  430 => 403,  426 => 402,  420 => 399,  332 => 314,  311 => 296,  290 => 278,  278 => 269,  253 => 247,  242 => 239,  231 => 231,  220 => 223,  210 => 216,  206 => 215,  202 => 214,  198 => 213,  187 => 205,  156 => 176,  154 => 97,  132 => 78,  76 => 25,  71 => 23,  66 => 21,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap\" rel=\"stylesheet\">

    <title>MbodyUP-GYM</title>
    <!--

    TemplateMo 548 Training Studio

    https://templatemo.com/tm-548-training-studio

    -->
    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/font-awesome.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-training-studio.css') }}\">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id=\"js-preloader\" class=\"js-preloader\">
    <div class=\"preloader-inner\">
        <span class=\"dot\"></span>
        <div class=\"dots\">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">MBodyUp<em> Gym</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li class=\"scroll-to-section\"><a href=\"#top\" class=\"active\">Accueil</a></li>
                        <li class=\"scroll-to-section\"><a href=\"#features\">Produit</a></li>
                        <li class=\"scroll-to-section\"><a href=\"#our-classes\">Activite</a></li>
                        <li class=\"scroll-to-section\"><a href=\"#schedule\">Abonnement</a></li>
                        <li class=\"scroll-to-section\"><a href=\"#schedule\">Entraineur</a></li>
                        <li class=\"scroll-to-section\"><a href=\"#contact-us\">Feedback</a></li>
                        <li class=\"main-button\"><a href=\"#\">Sign Up</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div class=\"main-banner\" id=\"top\">
    <video autoplay muted loop id=\"bg-video\">
        <source src=\"{{ asset('assets/images/gym-video.mp4') }}\" type=\"video/mp4\" />
    </video>

    <div class=\"video-overlay header-text\">
        <div class=\"caption\">
            <h6>work harder, get stronger</h6>
            <h2>easy with our <em>gym</em></h2>
            <div class=\"main-button scroll-to-section\">
                <a href=\"#features\">Become a member</a>
            </div>
        </div>
    </div>
</div>

<!-- ***** Main Banner Area End ***** -->

<!-- ***** Features Item Start ***** -->
<section class=\"section\" id=\"features\">
    <div class=\"container\">
        {% block Produit %}
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading\">
                        <h2>Choose <em>Hadil</em></h2>
                        <img src=\"{{ asset('assets/images/line-dec.png') }}\" alt=\"waves\">
                        <p>Training Studio is free CSS template for gyms and fitness centers. You are allowed to use this layout for your business website.</p>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <ul class=\"features-items\">
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"{{ asset('assets/images/features-first-icon.png') }}\" alt=\"First One\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Basic Fitness</h4>
                                <p>Please do not re-distribute this template ZIP file on any template collection website. This is not allowed.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"{{ asset('assets/images/features-first-icon.png') }}\" alt=\"second one\">
                            </div>
                            <div class=\"right-content\">
                                <h4>New Gym Training</h4>
                                <p>If you wish to support TemplateMo website via PayPal, please feel free to contact us. We appreciate it a lot.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"{{ asset('assets/images/features-first-icon.png') }}\" alt=\"third gym training\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Basic Muscle Course</h4>
                                <p>Credit goes to <a rel=\"nofollow\" href=\"https://www.pexels.com\" target=\"_blank\">Pexels website</a> for images and video background used in this HTML template.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-6\">
                    <ul class=\"features-items\">
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"{{ asset('assets/images/features-first-icon.png') }}\" alt=\"fourth muscle\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Advanced Muscle Course</h4>
                                <p>You may want to browse through <a rel=\"nofollow\" href=\"https://templatemo.com/tag/digital-marketing\" target=\"_parent\">Digital Marketing</a> or <a href=\"https://templatemo.com/tag/corporate\">Corporate</a> HTML CSS templates on our website.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"{{ asset('assets/images/features-first-icon.png') }}\" alt=\"training fifth\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Yoga Training</h4>
                                <p>This template is built on Bootstrap v4.3.1 framework. It is easy to adapt the columns and sections.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                        <li class=\"feature-item\">
                            <div class=\"left-icon\">
                                <img src=\"{{ asset('assets/images/features-first-icon.png') }}\" alt=\"gym training\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Body Building Course</h4>
                                <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                                <a href=\"#\" class=\"text-button\">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        {% endblock %}
    </div>
</section>
<!-- ***** Features Item End ***** -->

<!-- ***** Call to Action Start ***** -->
<section class=\"section\" id=\"call-to-action\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 offset-lg-1\">
                <div class=\"cta-content\">
                    <h2>Don’t <em>think</em>, begin <em>today</em>!</h2>
                    <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                    <div class=\"main-button scroll-to-section\">
                        <a href=\"#our-classes\">Become a member</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Our Classes Start ***** -->
<section class=\"section\" id=\"our-classes\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3\">
                <div class=\"section-heading\">
                    <h2>Our <em>Classes</em></h2>
                    <img src=\"{{ asset('assets/images/line-dec.png') }}\" alt=\"\">
                    <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                </div>
            </div>
        </div>
        <div class=\"row\" id=\"tabs\">
            <div class=\"col-lg-4\">
                <ul>
                    <li><a href='#tabs-1'><img src=\"{{ asset('assets/images/tabs-first-icon.png') }}\" alt=\"\">First Training Class</a></li>
                    <li><a href='#tabs-2'><img src=\"{{ asset('assets/images/tabs-first-icon.png') }}\" alt=\"\">Second Training Class</a></a></li>
                    <li><a href='#tabs-3'><img src=\"{{ asset('assets/images/tabs-first-icon.png') }}\" alt=\"\">Third Training Class</a></a></li>
                    <li><a href='#tabs-4'><img src=\"{{ asset('assets/images/tabs-first-icon.png') }}\" alt=\"\">Fourth Training Class</a></a></li>
                    <div class=\"main-rounded-button\"><a href=\"#\">View All Schedules</a></div>
                </ul>
            </div>
            <div class=\"col-lg-8\">
                <section class='tabs-content'>
                    <article id='tabs-1'>
                        <img src=\"{{ asset('assets/images/training-image-01.jpg') }}\" alt=\"First Class\">
                        <h4>First Training Class</h4>
                        <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                        <div class=\"main-button\">
                            <a href=\"#\">View Schedule</a>
                        </div>
                    </article>
                    <article id='tabs-2'>
                        <img src=\"{{ asset('assets/images/training-image-02.jpg') }}\" alt=\"Second Training\">
                        <h4>Second Training Class</h4>
                        <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <div class=\"main-button\">
                            <a href=\"#\">View Schedule</a>
                        </div>
                    </article>
                    <article id='tabs-3'>
                        <img src=\"{{ asset('assets/images/training-image-03.jpg') }}\" alt=\"Third Class\">
                        <h4>Third Training Class</h4>
                        <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                        <div class=\"main-button\">
                            <a href=\"#\">View Schedule</a>
                        </div>
                    </article>
                    <article id='tabs-4'>
                        <img src=\"{{ asset('assets/images/training-image-04.jpg') }}\" alt=\"Fourth Training\">
                        <h4>Fourth Training Class</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
                        <div class=\"main-button\">
                            <a href=\"#\">View Schedule</a>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- ***** Our Classes End ***** -->


<!-- ***** Testimonials Starts ***** -->
<section class=\"section\" id=\"trainers\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3\">
                <div class=\"section-heading\">
                    <h2>Expert <em>Trainers</em></h2>
                    <img src=\"{{ asset('assets/images/line-dec.png') }}\" alt=\"\">
                    <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"trainer-item\">
                    <div class=\"image-thumb\">
                        <img src=\"{{ asset('assets/images/first-trainer.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"down-content\">
                        <span>Strength Trainer</span>
                        <h4>Bret D. Bowers</h4>
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"trainer-item\">
                    <div class=\"image-thumb\">
                        <img src=\"{{ asset('assets/images/second-trainer.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"down-content\">
                        <span>Muscle Trainer</span>
                        <h4>Hector T. Daigl</h4>
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"trainer-item\">
                    <div class=\"image-thumb\">
                        <img src=\"{{ asset('assets/images/third-trainer.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"down-content\">
                        <span>Power Trainer</span>
                        <h4>Paul D. Newman</h4>
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Testimonials Ends ***** -->

<!-- ***** Contact Us Area Starts ***** -->
<section class=\"section\" id=\"contact-us\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-xs-12\">
                <div id=\"map\">
                    <iframe src=\"https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed\" width=\"100%\" height=\"600px\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-xs-12\">
                <div class=\"contact-form\">
                    <form id=\"contact\" action=\"\" method=\"post\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                <fieldset>
                                    <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"Your Name*\" required=\"\">
                                </fieldset>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <fieldset>
                                    <input name=\"email\" type=\"text\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" placeholder=\"Your Email*\" required=\"\">
                                </fieldset>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <fieldset>
                                    <input name=\"subject\" type=\"text\" id=\"subject\" placeholder=\"Subject\">
                                </fieldset>
                            </div>
                            <div class=\"col-lg-12\">
                                <fieldset>
                                    <textarea name=\"message\" rows=\"6\" id=\"message\" placeholder=\"Message\" required=\"\"></textarea>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-12\">
                                <fieldset>
                                    <button type=\"submit\" id=\"form-submit\" class=\"main-button\">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Contact Us Area Ends ***** -->

<!-- ***** Footer Start ***** -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright &copy; 2020 Training Studio

                    - Designed by <a rel=\"nofollow\" href=\"https://templatemo.com\" class=\"tm-text-link\" target=\"_parent\">TemplateMo</a></p>

                <!-- You shall support us a little via PayPal to info@templatemo.com -->

            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src=\"{{ asset('assets/js/jquery-2.1.0.min.js') }}\"></script>

<!-- Bootstrap -->
<script src=\"{{ asset('assets/js/popper.js') }}\"></script>
<script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>

<!-- Plugins -->
<script src=\"{{ asset('assets/js/scrollreveal.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/waypoints.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.counterup.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/imgfix.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/mixitup.js') }}\"></script>
<script src=\"{{ asset('assets/js/accordions.js') }}\"></script>

<!-- Global Init -->
<script src=\"{{ asset('assets/js/custom.js') }}\"></script>

</body>
</html>", "abonnementfront/abonnementfront.html.twig", "C:\\xampp\\htdocs\\Mbody_Prjt\\templates\\abonnementfront\\abonnementfront.html.twig");
    }
}
