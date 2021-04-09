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

/* utilisateur/index.html.twig */
class __TwigTemplate_2e1bb961b65b57ea840e9240e40c9d66a152619f6803e651b867d48b9c681c47 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<section id=\"about\" class=\"about\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"quisommesnous\">Inscription</h2>
\t\t\t<br>
\t\t\t<div class=\"row no-gutters\">
\t\t\t\t<div class=\"col-lg-12\" data-aos=\"fade-up\" data-aos-delay=\"300\">
\t\t\t\t\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "php-email-form"]]);
        echo "
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-lg-6 form-group\">
\t\t\t\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "formulaire"], "label" => "EMAIL"]);
        echo "
\t\t\t\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 form-group\">
\t\t\t\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "plainPassword", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "formulaire"], "label" => "PASSWORD"]);
        echo "
\t\t\t\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "plainPassword", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-6 form-group\">
\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "formulaire"], "label" => "NOM"]);
        echo "
\t\t\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 form-group\">
\t\t\t\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "formulaire"], "label" => "PRENOM"]);
        echo "
\t\t\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-6 form-group\">
\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "adresse", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "formulaire"], "label" => "ADRESSE\t"]);
        echo "
\t\t\t\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "adresse", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 form-group\">
\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "ville", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "formulaire"], "label" => "VILLE"]);
        echo "
\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "ville", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-6 form-group\">
\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "telephone", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "formulaire"], "label" => "TELEPHONE"]);
        echo "
\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "telephone", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 form-group\">
\t\t\t\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "photo", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "formulaire"], "label" => "PHOTO"]);
        echo "
\t\t\t\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "photo", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"text-center\">

\t\t\t\t\t\t\t<button type=\"submit\" id=\"button\" class=\"btn btn-valide\">Envoyer</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t<br>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 57,  161 => 47,  157 => 46,  151 => 43,  147 => 42,  140 => 38,  136 => 37,  130 => 34,  126 => 33,  119 => 29,  115 => 28,  109 => 25,  105 => 24,  98 => 20,  94 => 19,  88 => 16,  84 => 15,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<section id=\"about\" class=\"about\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"quisommesnous\">Inscription</h2>
\t\t\t<br>
\t\t\t<div class=\"row no-gutters\">
\t\t\t\t<div class=\"col-lg-12\" data-aos=\"fade-up\" data-aos-delay=\"300\">
\t\t\t\t\t{{ form_start(registrationForm,{'attr': {'class': 'php-email-form'}}) }}
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-lg-6 form-group\">
\t\t\t\t\t\t\t{{form_label(registrationForm.email, 'EMAIL', {'label_attr': {'class': 'formulaire'}})}}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.email, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 form-group\">
\t\t\t\t\t\t\t{{form_label(registrationForm.plainPassword, 'PASSWORD', {'label_attr': {'class': 'formulaire'}})}}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-6 form-group\">
\t\t\t\t\t\t\t{{form_label(registrationForm.nom, 'NOM', {'label_attr': {'class': 'formulaire'}})}}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.nom, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 form-group\">
\t\t\t\t\t\t\t{{form_label(registrationForm.prenom, 'PRENOM', {'label_attr': {'class': 'formulaire'}})}}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.prenom, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-6 form-group\">
\t\t\t\t\t\t\t{{form_label(registrationForm.adresse, 'ADRESSE\t', {'label_attr': {'class': 'formulaire'}})}}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.adresse, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 form-group\">
\t\t\t\t\t\t\t{{form_label(registrationForm.ville, 'VILLE', {'label_attr': {'class': 'formulaire'}})}}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.ville, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-6 form-group\">
\t\t\t\t\t\t\t{{form_label(registrationForm.telephone, 'TELEPHONE', {'label_attr': {'class': 'formulaire'}})}}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.telephone, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 form-group\">
\t\t\t\t\t\t\t{{form_label(registrationForm.photo, 'PHOTO', {'label_attr': {'class': 'formulaire'}})}}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.photo, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"text-center\">

\t\t\t\t\t\t\t<button type=\"submit\" id=\"button\" class=\"btn btn-valide\">Envoyer</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t{{ form_end(registrationForm) }}
\t\t\t\t\t<br>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

    {% endblock %}", "utilisateur/index.html.twig", "/var/www/html/commande/reseau/templates/utilisateur/index.html.twig");
    }
}
