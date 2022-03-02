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

/* base.login.html.twig */
class __TwigTemplate_7acc3c1d8d469ddb847388900b85a63f0aba43adea3f46f9a1d35d8e795242dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'login' => [$this, 'block_login'],
            'register' => [$this, 'block_register'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.login.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.css"), "html", null, true);
        echo "\">
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - BBBootstrap</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style> @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');
        #background-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: -1;

        }
        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
            font-size: 15px;
            line-height: 1.7;
            color: #c4c3ca;

            overflow-x: hidden
        }

        a {
            cursor: pointer;
            transition: all 200ms linear
        }

        a:hover {
            text-decoration: none
        }

        .link {
            color: #c4c3ca
        }

        .link:hover {
            color: #ffeba7
        }

        p {
            font-weight: 500;
            font-size: 14px;
            line-height: 1.7
        }

        h4 {
            font-weight: 600
        }

        h6 span {
            padding: 0 20px;
            text-transform: uppercase;
            font-weight: 700
        }

        .section {
            position: relative;
            width: 100%;
            display: block
        }

        .full-height {
            min-height: 100vh
        }

        [type=\"checkbox\"]:checked,
        [type=\"checkbox\"]:not(:checked) {
            position: absolute;
            left: -9999px
        }

        .checkbox:checked+label,
        .checkbox:not(:checked)+label {
            position: relative;
            display: block;
            text-align: center;
            width: 60px;
            height: 16px;
            border-radius: 8px;
            padding: 0;
            margin: 10px auto;
            cursor: pointer;
            background-color: #ffeba7
        }

        .checkbox:checked+label:before,
        .checkbox:not(:checked)+label:before {
            position: absolute;
            display: block;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            color: #ffeba7;
            background-color: #102770;
            font-family: 'unicons';
            content: '\\eb4f';
            z-index: 20;
            top: -10px;
            left: -10px;
            line-height: 36px;
            text-align: center;
            font-size: 24px;
            transition: all 0.5s ease
        }

        .checkbox:checked+label:before {
            transform: translateX(44px) rotate(-270deg)
        }

        .card-3d-wrap {
            position: relative;
            width: 440px;
            max-width: 100%;
            height: 400px;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            perspective: 800px;
            margin-top: 60px
        }

        .card-3d-wrapper {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            transition: all 600ms ease-out
        }

        .card-front,
        .card-back {
            width: 490px;
            height: 450px;
            background-color: #2a2b38;
            background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg');
            background-position: bottom center;
            background-repeat: no-repeat;
            background-size: 300%;
            position: absolute;
            border-radius: 6px;
            left: 0;
            top: 0;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .card-back {
            transform: rotateY(180deg)
        }

        .checkbox:checked~.card-3d-wrap .card-3d-wrapper {
            transform: rotateY(180deg)
        }

        .center-wrap {
            position: absolute;
            width: 100%;
            padding: 0 35px;
            top: 50%;
            left: 0;
            transform: translate3d(0, -50%, 35px) perspective(100px);
            z-index: 20;
            display: block
        }

        .form-group {
            position: relative;
            display: block;
            margin: 0;
            padding: 0
        }

        .form-style {
            padding: 13px 20px;
            padding-left: 55px;
            height: 48px;
            width: 100%;
            font-weight: 500;
            border-radius: 4px;
            font-size: 14px;
            line-height: 22px;
            letter-spacing: 0.5px;
            outline: none;
            color: #c4c3ca;
            background-color: #1f2029;
            border: none;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
            box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2)
        }

        .form-style:focus,
        .form-style:active {
            border: none;
            outline: none;
            box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2)
        }

        .input-icon {
            position: absolute;
            top: 0;
            left: 18px;
            height: 48px;
            font-size: 24px;
            line-height: 48px;
            text-align: left;
            color: #ffeba7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .form-group input:-ms-input-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .form-group input::-moz-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .form-group input:-moz-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .form-group input::-webkit-input-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .form-group input:focus:-ms-input-placeholder {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .form-group input:focus::-moz-placeholder {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .form-group input:focus:-moz-placeholder {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .form-group input:focus::-webkit-input-placeholder {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .btn {
            border-radius: 4px;
            height: 44px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
            padding: 0 30px;
            letter-spacing: 1px;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -moz-align-items: center;
            -ms-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            -ms-flex-pack: center;
            text-align: center;
            border: none;
            background-color: #ffeba7;
            color: #102770;
            box-shadow: 0 8px 24px 0 rgba(255, 235, 167, .2)
        }

        .btn:active,
        .btn:focus {
            background-color: #102770;
            color: #ffeba7;
            box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2)
        }

        .btn:hover {
            background-color: #102770;
            color: #ffeba7;
            box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2)
        }

        .logo {
            position: absolute;
            top: 30px;
            right: 30px;
            display: block;
            z-index: 100;
            transition: all 250ms linear
        }

        .logo img {
            height: 100px;
            width: 100px;
            display: block
        }</style>
</head>
<body oncontextmenu='return false' class='snippet-body'>
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
<a href=\"";
        // line 351
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test");
        echo "\" class=\"logo\" target=\"_blank\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("retour.png"), "html", null, true);
        echo "\" alt=\"\"> </a>
<video id=\"background-video\" autoplay loop muted poster=\"https://assets.codepen.io/6093409/river.jpg\">
    <source src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bg.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
</video>
<div class=\"section\">
    <div class=\"container\">
        <div class=\"row full-height justify-content-center\">
            <div class=\"col-12 text-center align-self-center py-5\">
                <div class=\"section pb-5 pt-5 pt-sm-2 text-center\">
                    <div class=\"card-3d-wrap mx-auto\">
                        <div class=\"card-3d-wrapper\">
                            <div class=\"card-front\">
                                <div class=\"center-wrap\">
                                    <div class=\"section text-center\">
                                        ";
        // line 365
        $this->displayBlock('login', $context, $blocks);
        // line 371
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"card-back\">
                                <div class=\"center-wrap\">
                                    <div class=\"section text-center\">
                                        ";
        // line 377
        $this->displayBlock('register', $context, $blocks);
        // line 383
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript' src=''></script>
<script type='text/javascript' src=''></script>
<script type='text/Javascript'></script>
<script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap -->
<script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Plugins -->
<script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scrollreveal.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/imgfix.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/mixitup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/accordions.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap -->
<script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Plugins -->
<script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scrollreveal.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/imgfix.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/mixitup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/accordions.js"), "html", null, true);
        echo "\"></script>

<!-- Global Init -->
<script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>


<!-- Global Init -->
<script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 365
    public function block_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        // line 366
        echo "                                        <h4 class=\"mb-4 pb-3\">Log In</h4>
                                        <div class=\"form-group\"> <input type=\"email\" name=\"logemail\" class=\"form-style\" placeholder=\"Your Email\" id=\"logemail\" autocomplete=\"off\"> <i class=\"input-icon uil uil-at\"></i> </div>
                                        <div class=\"form-group mt-2\"> <input type=\"password\" name=\"logpass\" class=\"form-style\" placeholder=\"Your Password\" id=\"logpass\" autocomplete=\"off\"> <i class=\"input-icon uil uil-lock-alt\"></i> </div> <a href=\"#\" class=\"btn mt-4\">submit</a>
                                        <p class=\"mb-0 mt-4 text-center\"><a href=\"#0\" class=\"link\">Forgot your password?</a></p>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 377
    public function block_register($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "register"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "register"));

        // line 378
        echo "                                        <h4 class=\"mb-4 pb-3\">Sign Up</h4>
                                        <div class=\"form-group\"> <input type=\"text\" name=\"logname\" class=\"form-style\" placeholder=\"Your Full Name\" id=\"logname\" autocomplete=\"off\"> <i class=\"input-icon uil uil-user\"></i> </div>
                                        <div class=\"form-group mt-2\"> <input type=\"email\" name=\"logemail\" class=\"form-style\" placeholder=\"Your Email\" id=\"logemail\" autocomplete=\"off\"> <i class=\"input-icon uil uil-at\"></i> </div>
                                        <div class=\"form-group mt-2\"> <input type=\"password\" name=\"logpass\" class=\"form-style\" placeholder=\"Your Password\" id=\"logpass\" autocomplete=\"off\"> <i class=\"input-icon uil uil-lock-alt\"></i> </div> <a href=\"#\" class=\"btn mt-4\">submit</a>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  590 => 378,  580 => 377,  566 => 366,  556 => 365,  542 => 429,  535 => 425,  529 => 422,  525 => 421,  521 => 420,  517 => 419,  513 => 418,  509 => 417,  503 => 414,  499 => 413,  493 => 410,  489 => 409,  485 => 408,  481 => 407,  477 => 406,  473 => 405,  469 => 404,  463 => 401,  459 => 400,  453 => 397,  437 => 383,  435 => 377,  427 => 371,  425 => 365,  410 => 353,  403 => 351,  55 => 6,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html>
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/font-awesome.css') }}\">
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - BBBootstrap</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style> @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');
        #background-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: -1;

        }
        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
            font-size: 15px;
            line-height: 1.7;
            color: #c4c3ca;

            overflow-x: hidden
        }

        a {
            cursor: pointer;
            transition: all 200ms linear
        }

        a:hover {
            text-decoration: none
        }

        .link {
            color: #c4c3ca
        }

        .link:hover {
            color: #ffeba7
        }

        p {
            font-weight: 500;
            font-size: 14px;
            line-height: 1.7
        }

        h4 {
            font-weight: 600
        }

        h6 span {
            padding: 0 20px;
            text-transform: uppercase;
            font-weight: 700
        }

        .section {
            position: relative;
            width: 100%;
            display: block
        }

        .full-height {
            min-height: 100vh
        }

        [type=\"checkbox\"]:checked,
        [type=\"checkbox\"]:not(:checked) {
            position: absolute;
            left: -9999px
        }

        .checkbox:checked+label,
        .checkbox:not(:checked)+label {
            position: relative;
            display: block;
            text-align: center;
            width: 60px;
            height: 16px;
            border-radius: 8px;
            padding: 0;
            margin: 10px auto;
            cursor: pointer;
            background-color: #ffeba7
        }

        .checkbox:checked+label:before,
        .checkbox:not(:checked)+label:before {
            position: absolute;
            display: block;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            color: #ffeba7;
            background-color: #102770;
            font-family: 'unicons';
            content: '\\eb4f';
            z-index: 20;
            top: -10px;
            left: -10px;
            line-height: 36px;
            text-align: center;
            font-size: 24px;
            transition: all 0.5s ease
        }

        .checkbox:checked+label:before {
            transform: translateX(44px) rotate(-270deg)
        }

        .card-3d-wrap {
            position: relative;
            width: 440px;
            max-width: 100%;
            height: 400px;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            perspective: 800px;
            margin-top: 60px
        }

        .card-3d-wrapper {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            transition: all 600ms ease-out
        }

        .card-front,
        .card-back {
            width: 490px;
            height: 450px;
            background-color: #2a2b38;
            background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg');
            background-position: bottom center;
            background-repeat: no-repeat;
            background-size: 300%;
            position: absolute;
            border-radius: 6px;
            left: 0;
            top: 0;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .card-back {
            transform: rotateY(180deg)
        }

        .checkbox:checked~.card-3d-wrap .card-3d-wrapper {
            transform: rotateY(180deg)
        }

        .center-wrap {
            position: absolute;
            width: 100%;
            padding: 0 35px;
            top: 50%;
            left: 0;
            transform: translate3d(0, -50%, 35px) perspective(100px);
            z-index: 20;
            display: block
        }

        .form-group {
            position: relative;
            display: block;
            margin: 0;
            padding: 0
        }

        .form-style {
            padding: 13px 20px;
            padding-left: 55px;
            height: 48px;
            width: 100%;
            font-weight: 500;
            border-radius: 4px;
            font-size: 14px;
            line-height: 22px;
            letter-spacing: 0.5px;
            outline: none;
            color: #c4c3ca;
            background-color: #1f2029;
            border: none;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
            box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2)
        }

        .form-style:focus,
        .form-style:active {
            border: none;
            outline: none;
            box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2)
        }

        .input-icon {
            position: absolute;
            top: 0;
            left: 18px;
            height: 48px;
            font-size: 24px;
            line-height: 48px;
            text-align: left;
            color: #ffeba7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .form-group input:-ms-input-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .form-group input::-moz-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .form-group input:-moz-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .form-group input::-webkit-input-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .form-group input:focus:-ms-input-placeholder {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .form-group input:focus::-moz-placeholder {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .form-group input:focus:-moz-placeholder {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .form-group input:focus::-webkit-input-placeholder {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear
        }

        .btn {
            border-radius: 4px;
            height: 44px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
            padding: 0 30px;
            letter-spacing: 1px;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -moz-align-items: center;
            -ms-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            -ms-flex-pack: center;
            text-align: center;
            border: none;
            background-color: #ffeba7;
            color: #102770;
            box-shadow: 0 8px 24px 0 rgba(255, 235, 167, .2)
        }

        .btn:active,
        .btn:focus {
            background-color: #102770;
            color: #ffeba7;
            box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2)
        }

        .btn:hover {
            background-color: #102770;
            color: #ffeba7;
            box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2)
        }

        .logo {
            position: absolute;
            top: 30px;
            right: 30px;
            display: block;
            z-index: 100;
            transition: all 250ms linear
        }

        .logo img {
            height: 100px;
            width: 100px;
            display: block
        }</style>
</head>
<body oncontextmenu='return false' class='snippet-body'>
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
<a href=\"{{ path('test') }}\" class=\"logo\" target=\"_blank\"> <img src=\"{{ asset('retour.png') }}\" alt=\"\"> </a>
<video id=\"background-video\" autoplay loop muted poster=\"https://assets.codepen.io/6093409/river.jpg\">
    <source src=\"{{ asset ('bg.mp4') }}\" type=\"video/mp4\">
</video>
<div class=\"section\">
    <div class=\"container\">
        <div class=\"row full-height justify-content-center\">
            <div class=\"col-12 text-center align-self-center py-5\">
                <div class=\"section pb-5 pt-5 pt-sm-2 text-center\">
                    <div class=\"card-3d-wrap mx-auto\">
                        <div class=\"card-3d-wrapper\">
                            <div class=\"card-front\">
                                <div class=\"center-wrap\">
                                    <div class=\"section text-center\">
                                        {% block login %}
                                        <h4 class=\"mb-4 pb-3\">Log In</h4>
                                        <div class=\"form-group\"> <input type=\"email\" name=\"logemail\" class=\"form-style\" placeholder=\"Your Email\" id=\"logemail\" autocomplete=\"off\"> <i class=\"input-icon uil uil-at\"></i> </div>
                                        <div class=\"form-group mt-2\"> <input type=\"password\" name=\"logpass\" class=\"form-style\" placeholder=\"Your Password\" id=\"logpass\" autocomplete=\"off\"> <i class=\"input-icon uil uil-lock-alt\"></i> </div> <a href=\"#\" class=\"btn mt-4\">submit</a>
                                        <p class=\"mb-0 mt-4 text-center\"><a href=\"#0\" class=\"link\">Forgot your password?</a></p>
                                        {% endblock %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-back\">
                                <div class=\"center-wrap\">
                                    <div class=\"section text-center\">
                                        {% block register %}
                                        <h4 class=\"mb-4 pb-3\">Sign Up</h4>
                                        <div class=\"form-group\"> <input type=\"text\" name=\"logname\" class=\"form-style\" placeholder=\"Your Full Name\" id=\"logname\" autocomplete=\"off\"> <i class=\"input-icon uil uil-user\"></i> </div>
                                        <div class=\"form-group mt-2\"> <input type=\"email\" name=\"logemail\" class=\"form-style\" placeholder=\"Your Email\" id=\"logemail\" autocomplete=\"off\"> <i class=\"input-icon uil uil-at\"></i> </div>
                                        <div class=\"form-group mt-2\"> <input type=\"password\" name=\"logpass\" class=\"form-style\" placeholder=\"Your Password\" id=\"logpass\" autocomplete=\"off\"> <i class=\"input-icon uil uil-lock-alt\"></i> </div> <a href=\"#\" class=\"btn mt-4\">submit</a>
                                        {% endblock %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript' src=''></script>
<script type='text/javascript' src=''></script>
<script type='text/Javascript'></script>
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


<!-- Global Init -->
<script src=\"{{ asset('assets/js/custom.js') }}\"></script>

</body>
</html>", "base.login.html.twig", "C:\\xampp\\htdocs\\Mbody_prjt\\templates\\base.login.html.twig");
    }
}
