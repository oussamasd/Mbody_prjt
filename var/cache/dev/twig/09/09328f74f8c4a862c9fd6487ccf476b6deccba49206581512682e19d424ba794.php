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

/* base.front.html.twig */
class __TwigTemplate_0ded6d1fdc4c1ad2e92da0ff679b2b8edd1a00861e68cd93468c087d4a414de1 extends Template
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
            'Activite' => [$this, 'block_Activite'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap\" rel=\"stylesheet\">

    <title>Training Studio - Free CSS Template</title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-training-studio.css"), "html", null, true);
        echo "\">

    </head>
  <style>
      * {
          padding: 0;
          margin: 0
      }

      .container {

          display: flex;


      }

      .profile {
          position: relative;
          text-align: center;
          margin-top: 60px
      }



      .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f1f1f1;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
          z-index: 1;
          transition: all 2s
      }

      .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block
      }

      .dropdown-content a:hover {
          background-color: #ddd
      }

      .dropdown:hover .dropdown-content {
          display: block
      }

      .profile ul {
          background-color: #fff;
          width: 200px;
          height: 190px;
          border-radius: 10px;
          right: 25px;
          top: 7px;
          position: absolute;
          padding: 8px;
          transition: all 0.5s;
          z-index: 1
      }

      .profile ul::before {
          content: '';
          position: absolute;
          background-color: #fff;
          height: 10px;
          width: 10px;
          top: -5px;
          transform: rotate(45deg)
      }

      .profile ul li {
          list-style: none;
          text-align: left;
          font-size: 15px;
          padding: 10px;
          display: flex;
          align-items: center;
          transition: all 0.5s;
          cursor: pointer;
          border-radius: 4px
      }

      .profile ul li:hover {
          background-color: #eee
      }

      .profile ul li i {
          margin-right: 7px
      }
  </style>
    
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
                            ";
        // line 151
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 152
            echo "                                <li class=\"scroll-to-section\"> <a href=\"";
            echo "/admin";
            echo "\">Admin</a></li>
                            ";
        }
        // line 154
        echo "
                             ";
        // line 155
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155)) {
            // line 156
            echo "                                 <aside>
                                 <div class=\"container \" >
                                     <div class=\"dropdown \">
                                         <div class=\"profile\"> ";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "user", [], "any", false, false, false, 159), "username", [], "any", false, false, false, 159), "html", null, true);
            echo "
                                             <div class=\"dropdown-content\">
                                                 <ul>
                                                     <li><i class='bx bx-cog'></i><span>Settings</span></li>
                                                     <li><i class='bx bx-user'></i><span><a href=\"";
            // line 163
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_user");
            echo "\"> Profiles</a></span></li>

                                                     <li><i class='bx bx-log-in-circle'></i><span><a href=\"";
            // line 165
            echo "logout";
            echo "\">Logout</a> /span></li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 </aside>
                            ";
        } else {
            // line 173
            echo "                            <li class=\"main-button\"><a href=\"";
            echo "login";
            echo "\">Sign Up</a></li>
                            ";
        }
        // line 175
        echo "                        </ul>        
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
        // line 190
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
        // line 208
        $this->displayBlock('Produit', $context, $blocks);
        // line 287
        echo "        </div>
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
            ";
        // line 312
        $this->displayBlock('Activite', $context, $blocks);
        // line 370
        echo "        </div>
    </section>
    <!-- ***** Our Classes End ***** -->
    
    <section class=\"section\" id=\"schedule\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading dark-bg\">
                        <h2>Classes <em>Schedule</em></h2>
                        <img src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/line-dec.png"), "html", null, true);
        echo "\" alt=\"\">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"filters\">
                        <ul class=\"schedule-filter\">
                            <li class=\"active\" data-tsfilter=\"monday\">Monday</li>
                            <li data-tsfilter=\"tuesday\">Tuesday</li>
                            <li data-tsfilter=\"wednesday\">Wednesday</li>
                            <li data-tsfilter=\"thursday\">Thursday</li>
                            <li data-tsfilter=\"friday\">Friday</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-10 offset-lg-1\">
                    <div class=\"schedule-table filtering\">
                        <table>
                            <tbody>
                                <tr>
                                    <td class=\"day-time\">Fitness Class</td>
                                    <td class=\"monday ts-item show\" data-tsmeta=\"monday\">10:00AM - 11:30AM</td>
                                    <td class=\"tuesday ts-item\" data-tsmeta=\"tuesday\">2:00PM - 3:30PM</td>
                                    <td>William G. Stewart</td>
                                </tr>
                                <tr>
                                    <td class=\"day-time\">Muscle Training</td>
                                    <td class=\"friday ts-item\" data-tsmeta=\"friday\">10:00AM - 11:30AM</td>
                                    <td class=\"thursday friday ts-item\" data-tsmeta=\"thursday\" data-tsmeta=\"friday\">2:00PM - 3:30PM</td>
                                    <td>Paul D. Newman</td>
                                </tr>
                                <tr>
                                    <td class=\"day-time\">Body Building</td>
                                    <td class=\"tuesday ts-item\" data-tsmeta=\"tuesday\">10:00AM - 11:30AM</td>
                                    <td class=\"monday ts-item show\" data-tsmeta=\"monday\">2:00PM - 3:30PM</td>
                                    <td>Boyd C. Harris</td>
                                </tr>
                                <tr>
                                    <td class=\"day-time\">Yoga Training Class</td>
                                    <td class=\"wednesday ts-item\" data-tsmeta=\"wednesday\">10:00AM - 11:30AM</td>
                                    <td class=\"friday ts-item\" data-tsmeta=\"friday\">2:00PM - 3:30PM</td>
                                    <td>Hector T. Daigle</td>
                                </tr>
                                <tr>
                                    <td class=\"day-time\">Advanced Training</td>
                                    <td class=\"thursday ts-item\" data-tsmeta=\"thursday\">10:00AM - 11:30AM</td>
                                    <td class=\"wednesday ts-item\" data-tsmeta=\"wednesday\">2:00PM - 3:30PM</td>
                                    <td>Bret D. Bowers</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Testimonials Starts ***** -->
    <section class=\"section\" id=\"trainers\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading\">
                        <h2>Expert <em>Trainers</em></h2>
                        <img src=\"";
        // line 446
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
        // line 455
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
        // line 473
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
        // line 491
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
        // line 575
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap -->
    <script src=\"";
        // line 578
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Plugins -->
    <script src=\"";
        // line 582
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scrollreveal.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 583
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 584
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 585
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/imgfix.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 586
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/mixitup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 587
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/accordions.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Global Init -->
    <script src=\"";
        // line 590
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

  </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 208
    public function block_Produit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Produit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Produit"));

        // line 209
        echo "            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading\">
                        <h2>Choose <em>Hadil</em></h2>
                        <img src=\"";
        // line 213
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
        // line 221
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
        // line 231
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
        // line 241
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
        // line 255
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
        // line 265
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
        // line 275
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

    // line 312
    public function block_Activite($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activite"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activite"));

        // line 313
        echo "            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading\">
                        <h2>Our <em>Classes</em></h2>
                        <img src=\"";
        // line 317
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
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tabs-first-icon.png"), "html", null, true);
        echo "\" alt=\"\">First Training Class</a></li>
                  <li><a href='#tabs-2'><img src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tabs-first-icon.png"), "html", null, true);
        echo "\" alt=\"\">Second Training Class</a></li>
                  <li><a href='#tabs-3'><img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tabs-first-icon.png"), "html", null, true);
        echo "\" alt=\"\">Third Training Class</a></li>
                  <li><a href='#tabs-4'><img src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tabs-first-icon.png"), "html", null, true);
        echo "\" alt=\"\">Fourth Training Class</a></li>
                  <div class=\"main-rounded-button\"><a href=\"#\">View All Schedules</a></div>
                </ul>
              </div>
              <div class=\"col-lg-8\">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src=\"";
        // line 335
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
        // line 343
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
        // line 351
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
        // line 359
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
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  800 => 359,  789 => 351,  778 => 343,  767 => 335,  757 => 328,  753 => 327,  749 => 326,  745 => 325,  734 => 317,  728 => 313,  718 => 312,  696 => 275,  683 => 265,  670 => 255,  653 => 241,  640 => 231,  627 => 221,  616 => 213,  610 => 209,  600 => 208,  586 => 590,  580 => 587,  576 => 586,  572 => 585,  568 => 584,  564 => 583,  560 => 582,  554 => 579,  550 => 578,  544 => 575,  457 => 491,  436 => 473,  415 => 455,  403 => 446,  334 => 380,  322 => 370,  320 => 312,  293 => 287,  291 => 208,  270 => 190,  253 => 175,  247 => 173,  236 => 165,  231 => 163,  224 => 159,  219 => 156,  217 => 155,  214 => 154,  208 => 152,  206 => 151,  77 => 25,  72 => 23,  67 => 21,  45 => 1,);
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

    <title>Training Studio - Free CSS Template</title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/font-awesome.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-training-studio.css') }}\">

    </head>
  <style>
      * {
          padding: 0;
          margin: 0
      }

      .container {

          display: flex;


      }

      .profile {
          position: relative;
          text-align: center;
          margin-top: 60px
      }



      .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f1f1f1;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
          z-index: 1;
          transition: all 2s
      }

      .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block
      }

      .dropdown-content a:hover {
          background-color: #ddd
      }

      .dropdown:hover .dropdown-content {
          display: block
      }

      .profile ul {
          background-color: #fff;
          width: 200px;
          height: 190px;
          border-radius: 10px;
          right: 25px;
          top: 7px;
          position: absolute;
          padding: 8px;
          transition: all 0.5s;
          z-index: 1
      }

      .profile ul::before {
          content: '';
          position: absolute;
          background-color: #fff;
          height: 10px;
          width: 10px;
          top: -5px;
          transform: rotate(45deg)
      }

      .profile ul li {
          list-style: none;
          text-align: left;
          font-size: 15px;
          padding: 10px;
          display: flex;
          align-items: center;
          transition: all 0.5s;
          cursor: pointer;
          border-radius: 4px
      }

      .profile ul li:hover {
          background-color: #eee
      }

      .profile ul li i {
          margin-right: 7px
      }
  </style>
    
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
                            {% if is_granted('ROLE_ADMIN') %}
                                <li class=\"scroll-to-section\"> <a href=\"{{ '/admin' }}\">Admin</a></li>
                            {% endif %}

                             {% if app.user %}
                                 <aside>
                                 <div class=\"container \" >
                                     <div class=\"dropdown \">
                                         <div class=\"profile\"> {{ app.user.username }}
                                             <div class=\"dropdown-content\">
                                                 <ul>
                                                     <li><i class='bx bx-cog'></i><span>Settings</span></li>
                                                     <li><i class='bx bx-user'></i><span><a href=\"{{ path ('app_profile_user')  }}\"> Profiles</a></span></li>

                                                     <li><i class='bx bx-log-in-circle'></i><span><a href=\"{{ 'logout' }}\">Logout</a> /span></li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 </aside>
                            {% else %}
                            <li class=\"main-button\"><a href=\"{{ 'login' }}\">Sign Up</a></li>
                            {% endif %}
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
            {% block Activite %}
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
                  <li><a href='#tabs-2'><img src=\"{{ asset('assets/images/tabs-first-icon.png') }}\" alt=\"\">Second Training Class</a></li>
                  <li><a href='#tabs-3'><img src=\"{{ asset('assets/images/tabs-first-icon.png') }}\" alt=\"\">Third Training Class</a></li>
                  <li><a href='#tabs-4'><img src=\"{{ asset('assets/images/tabs-first-icon.png') }}\" alt=\"\">Fourth Training Class</a></li>
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
            {% endblock %}
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->
    
    <section class=\"section\" id=\"schedule\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">
                    <div class=\"section-heading dark-bg\">
                        <h2>Classes <em>Schedule</em></h2>
                        <img src=\"{{ asset('assets/images/line-dec.png') }}\" alt=\"\">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"filters\">
                        <ul class=\"schedule-filter\">
                            <li class=\"active\" data-tsfilter=\"monday\">Monday</li>
                            <li data-tsfilter=\"tuesday\">Tuesday</li>
                            <li data-tsfilter=\"wednesday\">Wednesday</li>
                            <li data-tsfilter=\"thursday\">Thursday</li>
                            <li data-tsfilter=\"friday\">Friday</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-10 offset-lg-1\">
                    <div class=\"schedule-table filtering\">
                        <table>
                            <tbody>
                                <tr>
                                    <td class=\"day-time\">Fitness Class</td>
                                    <td class=\"monday ts-item show\" data-tsmeta=\"monday\">10:00AM - 11:30AM</td>
                                    <td class=\"tuesday ts-item\" data-tsmeta=\"tuesday\">2:00PM - 3:30PM</td>
                                    <td>William G. Stewart</td>
                                </tr>
                                <tr>
                                    <td class=\"day-time\">Muscle Training</td>
                                    <td class=\"friday ts-item\" data-tsmeta=\"friday\">10:00AM - 11:30AM</td>
                                    <td class=\"thursday friday ts-item\" data-tsmeta=\"thursday\" data-tsmeta=\"friday\">2:00PM - 3:30PM</td>
                                    <td>Paul D. Newman</td>
                                </tr>
                                <tr>
                                    <td class=\"day-time\">Body Building</td>
                                    <td class=\"tuesday ts-item\" data-tsmeta=\"tuesday\">10:00AM - 11:30AM</td>
                                    <td class=\"monday ts-item show\" data-tsmeta=\"monday\">2:00PM - 3:30PM</td>
                                    <td>Boyd C. Harris</td>
                                </tr>
                                <tr>
                                    <td class=\"day-time\">Yoga Training Class</td>
                                    <td class=\"wednesday ts-item\" data-tsmeta=\"wednesday\">10:00AM - 11:30AM</td>
                                    <td class=\"friday ts-item\" data-tsmeta=\"friday\">2:00PM - 3:30PM</td>
                                    <td>Hector T. Daigle</td>
                                </tr>
                                <tr>
                                    <td class=\"day-time\">Advanced Training</td>
                                    <td class=\"thursday ts-item\" data-tsmeta=\"thursday\">10:00AM - 11:30AM</td>
                                    <td class=\"wednesday ts-item\" data-tsmeta=\"wednesday\">2:00PM - 3:30PM</td>
                                    <td>Bret D. Bowers</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
</html>", "base.front.html.twig", "C:\\xampp\\htdocs\\Mbody_prjt\\templates\\base.front.html.twig");
    }
}
