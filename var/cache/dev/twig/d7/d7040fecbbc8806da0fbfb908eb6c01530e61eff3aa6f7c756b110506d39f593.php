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

/* accueil/index.html.twig */
class __TwigTemplate_2ce3159b1698496085b8ab3313f2b10576be9b1e1c7e31f1b8069d931ad9d7a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<section id=\"about\" class=\"about\">
\t\t<div class=\"container\">

\t\t\t<div class=\"row no-gutters\">

\t\t\t\t<div class=\"col-lg-6 d-flex flex-column justify-content-center about-content\">

\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\ttop des meilleurs parieurs</h2>
\t\t\t\t\t\t<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"bx bx-fingerprint\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new RuntimeError('Variable "utilisateurs" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 24
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nom", [], "any", false, false, false, 24), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "prenom", [], "any", false, false, false, 24), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t\t<br>

\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\tLe plus d'abonnés</h2>
\t\t\t\t\t\t<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"bx bx-fingerprint\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new RuntimeError('Variable "utilisateurs" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 46
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nom", [], "any", false, false, false, 46), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "prenom", [], "any", false, false, false, 46), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-6 video-box\">
\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<br>
\t\t\t\t\t\t<h2>Actualité</h2>
\t\t\t\t\t\t<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
\t\t\t\t\t</div>
                    <br>
                    <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"bx bx-fingerprint\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new RuntimeError('Variable "utilisateurs" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 66
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nom", [], "any", false, false, false, 66), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "prenom", [], "any", false, false, false, 66), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <br>

\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 68,  162 => 66,  158 => 65,  139 => 48,  128 => 46,  124 => 45,  103 => 26,  92 => 24,  88 => 23,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
\t<section id=\"about\" class=\"about\">
\t\t<div class=\"container\">

\t\t\t<div class=\"row no-gutters\">

\t\t\t\t<div class=\"col-lg-6 d-flex flex-column justify-content-center about-content\">

\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\ttop des meilleurs parieurs</h2>
\t\t\t\t\t\t<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"bx bx-fingerprint\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t{% for utilisateur in utilisateurs %}
\t\t\t\t\t\t\t\t{{utilisateur.nom}} - {{utilisateur.prenom}}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t\t<br>

\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\tLe plus d'abonnés</h2>
\t\t\t\t\t\t<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"bx bx-fingerprint\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t{% for utilisateur in utilisateurs %}
\t\t\t\t\t\t\t\t{{utilisateur.nom}} - {{utilisateur.prenom}}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-6 video-box\">
\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<br>
\t\t\t\t\t\t<h2>Actualité</h2>
\t\t\t\t\t\t<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
\t\t\t\t\t</div>
                    <br>
                    <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"bx bx-fingerprint\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t{% for utilisateur in utilisateurs %}
\t\t\t\t\t\t\t\t{{utilisateur.nom}} - {{utilisateur.prenom}}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <br>

\t\t\t{% endblock %}
", "accueil/index.html.twig", "/var/www/html/commande/reseau/templates/accueil/index.html.twig");
    }
}
