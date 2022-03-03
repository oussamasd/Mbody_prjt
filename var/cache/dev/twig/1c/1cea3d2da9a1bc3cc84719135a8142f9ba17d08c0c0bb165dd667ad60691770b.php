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

/* test/rating.html.twig */
class __TwigTemplate_be84f85682a2bf587f78295d23b771e36aaa717793215bb7d7ff13e97f813388 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/rating.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/rating.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <style>
        .star{
            font-size: 1.5rem;
        }
        .hover{
            color: yellow;
        }
    </style>

</head>
<body>
<i class=\"star\" data-note=\"1\">&#9733;</i>
<i class=\"star\" data-note=\"2\">&#9733;</i>
<i class=\"star\" data-note=\"3\">&#9733;</i>
<i class=\"star\" data-note=\"4\">&#9733;</i>
<i class=\"star\" data-note=\"5\">&#9733;</i>
<i class=\"note\">Note:</i>

<script>
    const stars =document.querySelectorAll('.star');
    let check = false;
    stars.forEach(star=>{
        star.addEventListener('mouseover',selectStars);
        star.addEventListener('mouseleave',unselectStars);

            star.addEventListener('click',activeSelect);



    })
    function selectStars(e){
        const data =e.target;
        const etoiles = priviousSiblings(data);
        if(!check){
            etoiles.forEach(etoile=>{
                etoile.classList.add('hover');
            })
        }


    }
    function unselectStars(e){
        const data =e.target;
        const etoiles = priviousSiblings(data);
        if(!check){
            etoiles.forEach(etoile=>{
                etoile.classList.remove('hover');
            })
        }

    }
    function priviousSiblings(data){
        let values=[data];
        while (data= data.previousSibling){
            if(data.nodeName ==='I'){
                values.push(data);
            }
        }
        return values;
    }
    function  activeSelect(e){
        check=true;

        document.querySelector('.note').innerHTML='Note: '+ e.target.dataset.note;
    }
</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "test/rating.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <style>
        .star{
            font-size: 1.5rem;
        }
        .hover{
            color: yellow;
        }
    </style>

</head>
<body>
<i class=\"star\" data-note=\"1\">&#9733;</i>
<i class=\"star\" data-note=\"2\">&#9733;</i>
<i class=\"star\" data-note=\"3\">&#9733;</i>
<i class=\"star\" data-note=\"4\">&#9733;</i>
<i class=\"star\" data-note=\"5\">&#9733;</i>
<i class=\"note\">Note:</i>

<script>
    const stars =document.querySelectorAll('.star');
    let check = false;
    stars.forEach(star=>{
        star.addEventListener('mouseover',selectStars);
        star.addEventListener('mouseleave',unselectStars);

            star.addEventListener('click',activeSelect);



    })
    function selectStars(e){
        const data =e.target;
        const etoiles = priviousSiblings(data);
        if(!check){
            etoiles.forEach(etoile=>{
                etoile.classList.add('hover');
            })
        }


    }
    function unselectStars(e){
        const data =e.target;
        const etoiles = priviousSiblings(data);
        if(!check){
            etoiles.forEach(etoile=>{
                etoile.classList.remove('hover');
            })
        }

    }
    function priviousSiblings(data){
        let values=[data];
        while (data= data.previousSibling){
            if(data.nodeName ==='I'){
                values.push(data);
            }
        }
        return values;
    }
    function  activeSelect(e){
        check=true;

        document.querySelector('.note').innerHTML='Note: '+ e.target.dataset.note;
    }
</script>
</body>
</html>", "test/rating.html.twig", "C:\\wamp64\\www\\Mbody_prjt\\templates\\test\\rating.html.twig");
    }
}
