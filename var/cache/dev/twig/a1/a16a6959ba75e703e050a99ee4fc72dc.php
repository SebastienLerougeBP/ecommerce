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

/* partials/_footer.html.twig */
class __TwigTemplate_200d6c922bcf14bdc9ea23b5298cd03e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        // line 1
        echo "<footer class=\"container-fluid bg-light\">
    <div class=\"row\">
        <section class=\"col col-4\">COL1</section>
        <section class=\"col col-4\">COL2</section>
        <section class=\"col col-4\">COL3</section>
    </div>
    
</footer>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"container-fluid bg-light\">
    <div class=\"row\">
        <section class=\"col col-4\">COL1</section>
        <section class=\"col col-4\">COL2</section>
        <section class=\"col col-4\">COL3</section>
    </div>
    
</footer>", "partials/_footer.html.twig", "C:\\Users\\darkn\\Workspace\\ProjetsTests\\ecommerce\\templates\\partials\\_footer.html.twig");
    }
}
