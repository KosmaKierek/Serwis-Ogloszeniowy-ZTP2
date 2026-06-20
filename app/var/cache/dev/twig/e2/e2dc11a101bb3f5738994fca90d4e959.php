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

/* advert/category/index.html.twig */
class __TwigTemplate_3e212d51260d2549d9ee40278f95bff0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advert/category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advert/category/index.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.advert_list"), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.advert_list"), "html", null, true);
        yield "</h1>
    ";
        // line 9
        if ((array_key_exists("pagination", $context) && Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 9, $this->source); })()), "items", [], "any", false, false, false, 9)))) {
            // line 10
            yield "
        <div class=\"navigation text-center\">
            ";
            // line 12
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 12, $this->source); })()));
            yield "
        </div>

        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>";
            // line 18
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.id"), "advert.id");
            yield "</th>
                <th>";
            // line 19
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 19, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.created_at"), "advert.createdAt");
            yield "</th>
                <th>";
            // line 20
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 20, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.updated_at"), "advert.updatedAt");
            yield "</th>
                <th>";
            // line 21
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 21, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "advert.title");
            yield "</th>
                <th>";
            // line 22
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 22, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.category"), "category.title");
            yield "</th>
                ";
            // line 24
            yield "                <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.author"), "html", null, true);
            yield "</th>
                <th>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.tags"), "html", null, true);
            yield "</th>
                <th>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
            yield "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 30, $this->source); })()), "items", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
                // line 31
                yield "                <tr>
                    <td>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "id", [], "any", false, false, false, 32), "html", null, true);
                yield "</td>
                    <td>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "createdAt", [], "any", false, false, false, 33), "long"), "html", null, true);
                yield "</td>
                    <td>";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "updatedAt", [], "any", false, false, false, 34), "long"), "html", null, true);
                yield "</td>
                    <td>";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "title", [], "any", false, false, false, 35), "html", null, true);
                yield "</td>
                    <td><a class=\"btn btn-outline-primary\"
                           href=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("advert.category.id_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "category", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
                yield "\"
                           title=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "category", [], "any", false, false, false, 38), "title", [], "any", false, false, false, 38), "html", null, true);
                yield "\">
                            ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "category", [], "any", false, false, false, 39), "title", [], "any", false, false, false, 39), "html", null, true);
                yield "
                        </a></td>
                    <td>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "author", [], "any", false, false, false, 41), "email", [], "any", false, false, false, 41), "html", null, true);
                yield "</td>


                    <td>
                        <a class=\"btn btn-outline-primary\" href=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("advert_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
                yield "\">
                            ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
                yield "
                        </a>

                        ";
                // line 49
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", $context["advert"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 50
                    yield "                            <a class=\"btn btn-outline-success\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("advert_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
                    yield "\">
                                ";
                    // line 51
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
                    yield "
                            </a>
                        ";
                }
                // line 54
                yield "
                        ";
                // line 55
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", $context["advert"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 56
                    yield "                            <a class=\"btn btn-outline-danger\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("advert_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete"), "html", null, true);
                    yield "\">
                                ";
                    // line 57
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete"), "html", null, true);
                    yield "
                            </a>
                        ";
                }
                // line 60
                yield "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['advert'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "            </tbody>
        </table>

        ";
            // line 66
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 67
                yield "            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("advert_create");
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
                yield "\">
            ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
                yield "
        ";
            }
            // line 70
            yield "        </a>
        <br><br>

        <div class=\"navigation text-center\">
            ";
            // line 74
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 74, $this->source); })()));
            yield "
        </div>

    ";
        } else {
            // line 78
            yield "        <p>
            ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.empty_list"), "html", null, true);
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
        return "advert/category/index.html.twig";
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
        return array (  292 => 79,  289 => 78,  282 => 74,  276 => 70,  271 => 68,  264 => 67,  262 => 66,  257 => 63,  249 => 60,  243 => 57,  236 => 56,  234 => 55,  231 => 54,  225 => 51,  218 => 50,  216 => 49,  210 => 46,  204 => 45,  197 => 41,  192 => 39,  188 => 38,  184 => 37,  179 => 35,  175 => 34,  171 => 33,  167 => 32,  164 => 31,  160 => 30,  153 => 26,  149 => 25,  144 => 24,  140 => 22,  136 => 21,  132 => 20,  128 => 19,  124 => 18,  115 => 12,  111 => 10,  109 => 9,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ 'title.advert_list'|trans }}
{% endblock %}

{% block body %}
    <h1>{{ 'title.advert_list'|trans }}</h1>
    {% if pagination is defined and pagination.items|length %}

        <div class=\"navigation text-center\">
            {{ knp_pagination_render(pagination) }}
        </div>

        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>{{ knp_pagination_sortable(pagination, 'label.id'|trans, 'advert.id') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'label.created_at'|trans, 'advert.createdAt') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'label.updated_at'|trans, 'advert.updatedAt') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'label.title'|trans, 'advert.title') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'label.category'|trans, 'category.title') }}</th>
                {#<th>{{ knp_pagination_sortable(pagination, 'label.tags', 'category.tags') }}</th>#}
                <th>{{ 'label.author'|trans }}</th>
                <th>{{ 'label.tags'|trans }}</th>
                <th>{{ 'label.actions'|trans }}</th>
            </tr>
            </thead>
            <tbody>
            {% for advert in pagination.items %}
                <tr>
                    <td>{{ advert.id }}</td>
                    <td>{{ advert.createdAt|format_date('long') }}</td>
                    <td>{{ advert.updatedAt|format_date('long') }}</td>
                    <td>{{ advert.title }}</td>
                    <td><a class=\"btn btn-outline-primary\"
                           href=\"{{ url('advert.category.id_index', {id : advert.category.id}) }}\"
                           title=\"{{ advert.category.title }}\">
                            {{ advert.category.title }}
                        </a></td>
                    <td>{{ advert.author.email }}</td>


                    <td>
                        <a class=\"btn btn-outline-primary\" href=\"{{ url('advert_show', {id: advert.id}) }}\" title=\"{{ 'action.show'|trans }}\">
                            {{ 'action.show'|trans }}
                        </a>

                        {% if is_granted('EDIT', advert) %}
                            <a class=\"btn btn-outline-success\" href=\"{{ url('advert_edit', {id: advert.id}) }}\" title=\"{{ 'action.edit'|trans }}\">
                                {{ 'action.edit'|trans }}
                            </a>
                        {% endif %}

                        {% if is_granted('DELETE', advert) %}
                            <a class=\"btn btn-outline-danger\" href=\"{{ url('advert_delete', {id: advert.id}) }}\" title=\"{{ 'action.delete'|trans }}\">
                                {{ 'action.delete'|trans }}
                            </a>
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <a href=\"{{ url('advert_create') }}\" title=\"{{ 'action.create'|trans }}\">
            {{ 'action.create'|trans }}
        {% endif %}
        </a>
        <br><br>

        <div class=\"navigation text-center\">
            {{ knp_pagination_render(pagination) }}
        </div>

    {% else %}
        <p>
            {{ 'message.empty_list'|trans }}
        </p>
    {% endif %}
{% endblock %}", "advert/category/index.html.twig", "/home/wwwroot/app/templates/advert/category/index.html.twig");
    }
}
