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

/* themes/custom/custom_theme/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_dc41b95ce57953281427986d453cf853 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block.html.twig", "themes/custom/custom_theme/templates/block/block--system-branding-block.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo", "site_name", "site_slogan"]);    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "\t<div class=\"@container\">
\t\t<div class=\"@[480px]:px-4 @[480px]:py-3\">
\t\t\t<div class=\"bg-cover bg-center flex flex-col justify-end overflow-hidden bg-[#111418] @[480px]:rounded-xl min-h-80\" style=\"background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0) 25%), url(&quot;https://cdn.usegalileo.ai/sdxl10/b3793b39-a8b8-4020-b2ca-6bf4f976cb56.png&quot;);\">
\t\t\t\t";
        // line 20
        if (($context["site_logo"] ?? null)) {
            // line 21
            yield "\t\t\t\t\t<a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" rel=\"home\" class=\"site-logo\">
\t\t\t\t\t\t<img src=\"";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" fetchpriority=\"high\"/>
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 25
        yield "\t\t\t\t";
        if (($context["site_name"] ?? null)) {
            // line 26
            yield "\t\t\t\t\t<div class=\"site-name flex p-4\">
\t\t\t\t\t\t<a href=\"";
            // line 27
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" rel=\"home\" class=\"text-white tracking-light text-[28px] font-bold leading-tight\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
            yield "</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 30
        yield "\t\t\t\t";
        if (($context["site_slogan"] ?? null)) {
            // line 31
            yield "\t\t\t\t\t<div class=\"site-slogan\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true);
            yield "</div>
\t\t\t\t";
        }
        // line 33
        yield "\t\t\t</div>
\t\t</div>
\t</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/custom_theme/templates/block/block--system-branding-block.html.twig";
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
        return array (  104 => 33,  98 => 31,  95 => 30,  87 => 27,  84 => 26,  81 => 25,  73 => 22,  68 => 21,  66 => 20,  61 => 17,  54 => 16,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Theme override for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}
{% block content %}
\t<div class=\"@container\">
\t\t<div class=\"@[480px]:px-4 @[480px]:py-3\">
\t\t\t<div class=\"bg-cover bg-center flex flex-col justify-end overflow-hidden bg-[#111418] @[480px]:rounded-xl min-h-80\" style=\"background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0) 25%), url(&quot;https://cdn.usegalileo.ai/sdxl10/b3793b39-a8b8-4020-b2ca-6bf4f976cb56.png&quot;);\">
\t\t\t\t{% if site_logo %}
\t\t\t\t\t<a href=\"{{ path('<front>') }}\" rel=\"home\" class=\"site-logo\">
\t\t\t\t\t\t<img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" fetchpriority=\"high\"/>
\t\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t\t{% if site_name %}
\t\t\t\t\t<div class=\"site-name flex p-4\">
\t\t\t\t\t\t<a href=\"{{ path('<front>') }}\" rel=\"home\" class=\"text-white tracking-light text-[28px] font-bold leading-tight\">{{ site_name }}</a>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if site_slogan %}
\t\t\t\t\t<div class=\"site-slogan\">{{ site_slogan }}</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "themes/custom/custom_theme/templates/block/block--system-branding-block.html.twig", "/var/www/html/web/themes/custom/custom_theme/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 1, "if" => 20];
        static $filters = ["escape" => 22, "t" => 22];
        static $functions = ["path" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'if'],
                ['escape', 't'],
                ['path'],
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
