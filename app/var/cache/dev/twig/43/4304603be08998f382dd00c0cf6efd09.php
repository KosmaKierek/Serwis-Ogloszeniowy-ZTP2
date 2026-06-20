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

/* advert/show.html.twig */
class __TwigTemplate_606501608010e0fcf4bbca2ad372243e extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advert/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advert/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.advert_details", ["%id%" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["advert"] ?? null), "id", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "")) : (""))]), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "    <h1>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.advert_details", ["%id%" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["advert"] ?? null), "id", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "")) : (""))]), "html", null, true);
        yield "</h1>
    ";
        // line 9
        if ((array_key_exists("advert", $context) && Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 9, $this->source); })())))) {
            // line 10
            yield "        <dl class=\"dl-horizontal\">
            <dt>";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.id"), "html", null, true);
            yield "</dt>
            <dd>";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
            yield "</dd>
            <dt>";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.created_at"), "html", null, true);
            yield "</dt>
            <dd>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 14, $this->source); })()), "createdAt", [], "any", false, false, false, 14), "long"), "html", null, true);
            yield "</dd>
            <dt>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.updated_at"), "html", null, true);
            yield "</dt>
            <dd>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 16, $this->source); })()), "updatedAt", [], "any", false, false, false, 16), "long"), "html", null, true);
            yield "</dd>
            <dt>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
            yield "</dt>
            <dd>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
            yield "</dd>
            <dt>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.author"), "html", null, true);
            yield "</dt>
            <dd>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 20, $this->source); })()), "author", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "html", null, true);
            yield "</dd>
            <dt>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.content"), "html", null, true);
            yield "</dt>
            <dd>";
            // line 22
            yield $this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(CoreExtension::getAttribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 22, $this->source); })()), "content", [], "any", false, false, false, 22));
            yield "</dd>
        </dl>
        <p>
            <a class=\"btn btn-outline-primary\" href=\"";
            // line 25
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("advert_index");
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back_to_list"), "html", null, true);
            yield "\">
                ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back_to_list"), "html", null, true);
            yield "
            </a>
        </p>
    ";
        } else {
            // line 30
            yield "        <p>
            ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.record_not_found"), "html", null, true);
            yield "
        </p>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "advert/show.html.twig";
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
        return array (  180 => 31,  177 => 30,  170 => 26,  164 => 25,  158 => 22,  154 => 21,  150 => 20,  146 => 19,  142 => 18,  138 => 17,  134 => 16,  130 => 15,  126 => 14,  122 => 13,  118 => 12,  114 => 11,  111 => 10,  109 => 9,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ 'title.advert_details'|trans({'%id%': advert.id|default('')}) }}
{% endblock %}

{% block body %}
    <h1>{{ 'title.advert_details'|trans({'%id%': advert.id|default('')}) }}</h1>
    {% if advert is defined and advert|length %}
        <dl class=\"dl-horizontal\">
            <dt>{{ 'label.id'|trans }}</dt>
            <dd>{{ advert.id }}</dd>
            <dt>{{ 'label.created_at'|trans }}</dt>
            <dd>{{ advert.createdAt|format_date('long') }}</dd>
            <dt>{{ 'label.updated_at'|trans }}</dt>
            <dd>{{ advert.updatedAt|format_date('long') }}</dd>
            <dt>{{ 'label.title'|trans }}</dt>
            <dd>{{  advert.title }}</dd>
            <dt>{{ 'label.author'|trans }}</dt>
            <dd>{{  advert.author.email }}</dd>
            <dt>{{ 'label.content'|trans }}</dt>
            <dd>{{  advert.content|markdown_to_html }}</dd>
        </dl>
        <p>
            <a class=\"btn btn-outline-primary\" href=\"{{ url('advert_index') }}\" title=\"{{ 'action.back_to_list'|trans }}\">
                {{ 'action.back_to_list'|trans }}
            </a>
        </p>
    {% else %}
        <p>
            {{ 'message.record_not_found'|trans }}
        </p>
    {% endif %}
{% endblock %}", "advert/show.html.twig", "/home/wwwroot/app/templates/advert/show.html.twig");
    }
}
