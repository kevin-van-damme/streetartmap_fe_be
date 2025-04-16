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

/* themes/custom/custom_theme/templates/votingapi-widgets-summary.html.twig */
class __TwigTemplate_f504ecbdcef682f5fe4f5eb4218eb2e9 extends Template
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
            yield "    <p class=\"text-[#9daab8] text-sm font-normal leading-normal\">";
            yield t("No votes", array());
            yield "</p>
";
        } else {
            // line 30
            yield "    <p class=\"text-[#9daab8] text-sm font-normal leading-normal\">";
            yield \Drupal::translation()->formatPlural(abs(CoreExtension::getAttribute($this->env, $this->source,             // line 32
($context["results"] ?? null), "vote_field_count", [], "any", false, false, true, 32)), "@results.vote_field_count Vote", "@results.vote_field_count Votes", array("@results.vote_field_count" => CoreExtension::getAttribute($this->env, $this->source,             // line 31
($context["results"] ?? null), "vote_field_count", [], "any", false, false, true, 31), "@results.vote_field_count" => CoreExtension::getAttribute($this->env, $this->source,             // line 33
($context["results"] ?? null), "vote_field_count", [], "any", false, false, true, 33), ));
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
        return "themes/custom/custom_theme/templates/votingapi-widgets-summary.html.twig";
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
        return new Source("{#
/**
 * @file
 * Default template to format a vote summary.
 *
 * Copy this file in your default theme folder to create a custom themed email.
 * If you modify this template you MUST be sure to keep the html, body, and
 * header tags. This template should produce a fully-formed HTML document.
 * Failure to include these will result in a malformed email and possibly
 * errors shown to the user when sending email.
 *
 * To override this template for all emails sent by a given module,
 * rename this template to votingapi-widgets-summary--[module].html.twig.
 *
 * Available variables:
 * - results: Associative array of vote data. Includes the following keys:
 *   - vote_field_count: the message identifier.
 *   - vote_field_average: the machine name of the sending module.
 * - vote:
 * - field_name:
 *
 * @see template_preprocess_votingapi_widgets_summary()
 *
 * @ingroup themeable
 */
#}
{% if results.vote_field_count is same as (0) %}
    <p class=\"text-[#9daab8] text-sm font-normal leading-normal\">{% trans %}No votes{% endtrans %}</p>
{% else %}
    <p class=\"text-[#9daab8] text-sm font-normal leading-normal\">{% trans %}
      {{ results.vote_field_count }} Vote
    {% plural results.vote_field_count %}
      {{ results.vote_field_count }} Votes
    {% endtrans %}</p>
{% endif %}
", "themes/custom/custom_theme/templates/votingapi-widgets-summary.html.twig", "/var/www/html/web/themes/custom/custom_theme/templates/votingapi-widgets-summary.html.twig");
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
