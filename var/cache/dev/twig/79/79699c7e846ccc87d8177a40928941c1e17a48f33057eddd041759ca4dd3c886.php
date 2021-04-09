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

/* template_parts/_nav.html.twig */
class __TwigTemplate_23430f98edba9157d42988e63abf79901d9993a39443a40a0275fe06bdf3e650 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template_parts/_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template_parts/_nav.html.twig"));

        // line 1
        echo "<header id=\"header\">
<div class=\"container\">

\t<div class=\"logo float-left\">
\t\t<h1 class=\"text-light\"><a href=\"#\"><span>Nom de mon site</span></a></h1>
\t\t<!-- Uncomment below if you prefer to use an image logo -->
\t";
        // line 8
        echo "</div>

<nav class=\"nav-menu float-right d-none d-lg-block\">
\t<ul>
\t\t<li>
\t\t\t<a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Accueil</a>
\t\t</li>
        
\t\t

\t\t";
        // line 18
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 18), "email", [], "any", true, true, false, 18)) {
            // line 19
            echo "
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\">Profil</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t</li>
\t\t\t
\t\t";
        } else {
            // line 28
            echo "\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur");
            echo "\">Inscription</a>
\t\t\t</li>
\t\t";
        }
        // line 34
        echo " 

\t</ul>
</nav>
<!-- .nav-menu -->
</div>
</header>
<!-- End Header -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "template_parts/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  94 => 32,  88 => 29,  85 => 28,  78 => 24,  72 => 21,  68 => 19,  66 => 18,  58 => 13,  51 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\">
<div class=\"container\">

\t<div class=\"logo float-left\">
\t\t<h1 class=\"text-light\"><a href=\"#\"><span>Nom de mon site</span></a></h1>
\t\t<!-- Uncomment below if you prefer to use an image logo -->
\t{# <img src=\"{{asset('assets/images/owl.png')}}\" alt=\"\" class=\"img-fluid\"> </a> #}
</div>

<nav class=\"nav-menu float-right d-none d-lg-block\">
\t<ul>
\t\t<li>
\t\t\t<a class=\"nav-link\" href=\"{{path('accueil') }}\">Accueil</a>
\t\t</li>
        
\t\t

\t\t{% if (app.user.email is defined) %}

\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('profil') }}\">Profil</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_logout') }}\">Déconnexion</a>
\t\t\t</li>
\t\t\t
\t\t{% else %}
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_login') }}\">Connexion</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('utilisateur') }}\">Inscription</a>
\t\t\t</li>
\t\t{% endif %} 

\t</ul>
</nav>
<!-- .nav-menu -->
</div>
</header>
<!-- End Header -->
", "template_parts/_nav.html.twig", "/var/www/html/commande/reseau/templates/template_parts/_nav.html.twig");
    }
}
