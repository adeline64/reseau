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

/* template_parts/_footer.html.twig */
class __TwigTemplate_4fd80f3a39be5f4ed3e0714d219cb1cfc4d9262cc2aa6fe4727cd3630d5fe9b4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template_parts/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template_parts/_footer.html.twig"));

        // line 1
        echo "<div id=\"modalMentionsLegales\" class=\"modal\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"center-align modal-title\">Mentions Légales</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<h5>Hébergeur</h5>
\t\t\t\tLe présent site est hébergé par la société OVH.
\t\t\t\t<br/>
\t\t\t\tOVH SAS, Société par Actions Simplifiée ayant son siège social au 2 rue Kellermann - 59100 Roubaix - France, immatriculée sous le numéro RCS Lille 424 761 419 00045.
\t\t\t\t<a class=\"blue-text\" href=\"https://www.ovh.com\">www.ovh.com</a><br/>
\t\t\t\t<br/>

\t\t\t\t<h5>Contact</h5>
\t\t\t\t<br/>
\t\t\t\tPropriété intellectuelle
\t\t\t\t<br/>
\t\t\t\tConformément à l'article L122-4 du Code de la Propriété intellectuelle : Toute reproduction, représentation, traduction, adaptation, ou citation qu’elle soit intégrale ou partielle, quelqu’en soit le procédé, est strictement interdite sans autorisation expresse du créateur du site
\t\t\t\t. Les marques citées sont la propriété de leurs détenteurs respectifs.
\t\t\t\t<br/>
\t\t\t\t<br/>
\t\t\t\tLe 06 Mai 2020
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<footer
\tclass=\"page-footer navy-blue\">


\t<!-- Footer Links -->
\t<div class=\"container-fluid text-center text-md-left\">
\t\t<div class=\"float-left logo-down\">
\t\t\t<a href=\"\"><img alt=\"logo\" class=\"smlh\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/owl.png"), "html", null, true);
        echo "\"/></a>
\t\t</div>

\t\t<!-- Grid row -->
\t\t<div
\t\t\tclass=\"row\">


\t\t\t<!-- Copyright -->

\t\t\t<div class=\"footer-copyright text-center py-3\">
\t\t\t\t<a href class=\"footer-copyright\" onclick=\"\$('#modalMentionsLegales').modal('show');\">
\t\t\t\t\t© Copyright © OwlBook 2020
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<!-- Copyright -->

\t\t</footer>
\t\t<!-- Footer -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "template_parts/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 42,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modalMentionsLegales\" class=\"modal\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"center-align modal-title\">Mentions Légales</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<h5>Hébergeur</h5>
\t\t\t\tLe présent site est hébergé par la société OVH.
\t\t\t\t<br/>
\t\t\t\tOVH SAS, Société par Actions Simplifiée ayant son siège social au 2 rue Kellermann - 59100 Roubaix - France, immatriculée sous le numéro RCS Lille 424 761 419 00045.
\t\t\t\t<a class=\"blue-text\" href=\"https://www.ovh.com\">www.ovh.com</a><br/>
\t\t\t\t<br/>

\t\t\t\t<h5>Contact</h5>
\t\t\t\t<br/>
\t\t\t\tPropriété intellectuelle
\t\t\t\t<br/>
\t\t\t\tConformément à l'article L122-4 du Code de la Propriété intellectuelle : Toute reproduction, représentation, traduction, adaptation, ou citation qu’elle soit intégrale ou partielle, quelqu’en soit le procédé, est strictement interdite sans autorisation expresse du créateur du site
\t\t\t\t. Les marques citées sont la propriété de leurs détenteurs respectifs.
\t\t\t\t<br/>
\t\t\t\t<br/>
\t\t\t\tLe 06 Mai 2020
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<footer
\tclass=\"page-footer navy-blue\">


\t<!-- Footer Links -->
\t<div class=\"container-fluid text-center text-md-left\">
\t\t<div class=\"float-left logo-down\">
\t\t\t<a href=\"\"><img alt=\"logo\" class=\"smlh\" src=\"{{ asset('assets/images/owl.png') }}\"/></a>
\t\t</div>

\t\t<!-- Grid row -->
\t\t<div
\t\t\tclass=\"row\">


\t\t\t<!-- Copyright -->

\t\t\t<div class=\"footer-copyright text-center py-3\">
\t\t\t\t<a href class=\"footer-copyright\" onclick=\"\$('#modalMentionsLegales').modal('show');\">
\t\t\t\t\t© Copyright © OwlBook 2020
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<!-- Copyright -->

\t\t</footer>
\t\t<!-- Footer -->
", "template_parts/_footer.html.twig", "/var/www/html/commande/reseau/templates/template_parts/_footer.html.twig");
    }
}
