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

/* partials/_nav.html.twig */
class __TwigTemplate_f3f15091978fa04b1bc46dfdb04fb144 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_nav.html.twig"));

        // line 1
        echo "<div class=\"container-fluid bg-light\">
\t<nav class=\"navbar navbar-expand-lg bg-body-tertiary rounded\" aria-label=\"Eleventh navbar example\">
\t\t<div class=\"container-fluid\">
\t\t\t<a class=\"navbar-brand\" href=\"#\">Navbar</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsExample09\" aria-controls=\"navbarsExample09\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarsExample09\">
\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Link</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link disabled\" aria-disabled=\"true\">Disabled</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Dropdown</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t\t";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)) {
            // line 37
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Mon compte</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"nav-link\">Me déconnecter</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        } else {
            // line 44
            echo "          <li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"nav-link\">M'inscrire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-link\">Me connecter</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_nav.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  106 => 51,  100 => 48,  94 => 45,  91 => 44,  85 => 41,  79 => 37,  77 => 36,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid bg-light\">
\t<nav class=\"navbar navbar-expand-lg bg-body-tertiary rounded\" aria-label=\"Eleventh navbar example\">
\t\t<div class=\"container-fluid\">
\t\t\t<a class=\"navbar-brand\" href=\"#\">Navbar</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsExample09\" aria-controls=\"navbarsExample09\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarsExample09\">
\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Link</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link disabled\" aria-disabled=\"true\">Disabled</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Dropdown</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Mon compte</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\" class=\"nav-link\">Me déconnecter</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% else %}
          <li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_register') }}\" class=\"nav-link\">M'inscrire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\" class=\"nav-link\">Me connecter</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</div>
", "partials/_nav.html.twig", "C:\\Users\\darkn\\Workspace\\ProjetsTests\\ecommerce\\templates\\partials\\_nav.html.twig");
    }
}
