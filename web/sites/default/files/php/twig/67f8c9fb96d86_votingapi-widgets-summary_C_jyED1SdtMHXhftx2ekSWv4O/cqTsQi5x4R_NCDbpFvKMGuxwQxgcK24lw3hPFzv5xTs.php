<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* modules/contrib/votingapi_widgets/templates/votingapi-widgets-summary.html.twig */
class __TwigTemplate_218ad8377612c3f72a199fc0ed5d4c63 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["results"] ?? null), "vote_field_count", [], "any", false, false, true, 27) === 0)) {
            // line 28
            yield "    <p>";
            yield t("No votes have been submitted yet.", array());
            yield "</p>
";
        } else {
            // line 30
            yield "    <p>";
            yield \Drupal::translation()->formatPlural(abs(CoreExtension::getAttribute($this->env, $this->source,             // line 32
($context["results"] ?? null), "vote_field_count", [], "any", false, false, true, 32)), "@results.vote_field_count vote with a rating of @results.vote_field_average", "@results.vote_field_count votes with an average rating of @results.vote_field_average", array("@results.vote_field_count" => CoreExtension::getAttribute($this->env, $this->source,             // line 31
($context["results"] ?? null), "vote_field_count", [], "any", false, false, true, 31), "@results.vote_field_average" => CoreExtension::getAttribute($this->env, $this->source, ($context["results"] ?? null), "vote_field_average", [], "any", false, false, true, 31), "@results.vote_field_count" => CoreExtension::getAttribute($this->env, $this->source,             // line 33
($context["results"] ?? null), "vote_field_count", [], "any", false, false, true, 33), "@results.vote_field_average" => CoreExtension::getAttribute($this->env, $this->source, ($context["results"] ?? null), "vote_field_average", [], "any", false, false, true, 33), ));
            // line 34
            yield "</p>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["results"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/votingapi_widgets/templates/votingapi-widgets-summary.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  58 => 34,  56 => 33,  55 => 31,  54 => 32,  52 => 30,  46 => 28,  44 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/votingapi_widgets/templates/votingapi-widgets-summary.html.twig", "/var/www/html/web/modules/contrib/votingapi_widgets/templates/votingapi-widgets-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 27, "trans" => 28];
        static $filters = ["escape" => 31];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
