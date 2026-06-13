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

/* advert/index.html.twig */
class __TwigTemplate_b01e8da153b71c0e7a8dabc74b565dc8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advert/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advert/index.html.twig"));

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
                   ";
                // line 37
                yield "
                    <td>
                    <a class=\"btn btn-outline-primary\"
                       href=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("advert_index", ["categoryId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "category", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
                yield "\"
                       title=\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "category", [], "any", false, false, false, 41), "title", [], "any", false, false, false, 41), "html", null, true);
                yield "\">
                        ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "category", [], "any", false, false, false, 42), "title", [], "any", false, false, false, 42), "html", null, true);
                yield "
                    </a>
                    </td>

                    <td>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "author", [], "any", false, false, false, 46), "email", [], "any", false, false, false, 46), "html", null, true);
                yield "</td>

                    <td>
                    ";
                // line 49
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "tags", [], "any", true, true, false, 49) && Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "tags", [], "any", false, false, false, 49)))) {
                    // line 50
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "tags", [], "any", false, false, false, 50));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 51
                        yield "                            <a class=\"btn btn-outline-primary\"
                               href=\"";
                        // line 52
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("advert_index", ["tagId" => CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                        yield "\"
                               title=\"";
                        // line 53
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "title", [], "any", false, false, false, 53), "html", null, true);
                        yield "\">
                                ";
                        // line 54
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "title", [], "any", false, false, false, 54), "html", null, true);
                        yield "
                            </a>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    yield "                    ";
                } else {
                    // line 58
                    yield "                        &nbsp;
                    ";
                }
                // line 60
                yield "                    </td>

                    ";
                // line 68
                yield "
                    <td>
                        <a class=\"btn btn-outline-primary\" href=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("advert_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
                yield "\">
                            ";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
                yield "
                        </a>

                        ";
                // line 74
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", $context["advert"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 75
                    yield "                            <a class=\"btn btn-outline-success\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("advert_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
                    yield "\">
                                ";
                    // line 76
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
                    yield "
                            </a>
                        ";
                }
                // line 79
                yield "
                        ";
                // line 80
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", $context["advert"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 81
                    yield "                            <a class=\"btn btn-outline-danger\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("advert_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["advert"], "id", [], "any", false, false, false, 81)]), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete"), "html", null, true);
                    yield "\">
                                ";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete"), "html", null, true);
                    yield "
                            </a>
                        ";
                }
                // line 85
                yield "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['advert'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "            </tbody>
        </table>
        <a class=\"btn btn-outline-primary\" href=\"";
            // line 90
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("advert_index");
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.advert_index"), "html", null, true);
            yield "\">
            ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.advert_index"), "html", null, true);
            yield "
        </a>

        ";
            // line 94
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 95
                yield "            <a class=\"btn btn-primary\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("advert_create");
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
                yield "\">
            ";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create"), "html", null, true);
                yield "
        ";
            }
            // line 98
            yield "        </a>
        <br><br>

        <div class=\"navigation text-center\">
            ";
            // line 102
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 102, $this->source); })()));
            yield "
        </div>

    ";
        } else {
            // line 106
            yield "        <p>
            ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.empty_list"), "html", null, true);
            yield "
        </p>
    ";
        }
        // line 110
        yield "
    ";
        // line 111
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 112
            yield "        <p>
            <a class=\"btn btn-outline-primary\" href=\"";
            // line 113
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_index");
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.user_list"), "html", null, true);
            yield "\">
                ";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.user_list"), "html", null, true);
            yield "
            </a>
        </p>
    ";
        }
        // line 118
        yield "
    ";
        // line 119
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 120
            yield "        <p>
            <a class=\"btn btn-outline-primary\" href=\"";
            // line 121
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("tag_index");
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.tag_list"), "html", null, true);
            yield "\">
                ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.tag_list"), "html", null, true);
            yield "
            </a>
        </p>
    ";
        }
        // line 126
        yield "
    ";
        // line 127
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 128
            yield "        <p>
            <a class=\"btn btn-outline-primary\" href=\"";
            // line 129
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("category_index");
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.category_list"), "html", null, true);
            yield "\">
                ";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.category_list"), "html", null, true);
            yield "
            </a>
        </p>
    ";
        }
        // line 134
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "advert/index.html.twig";
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
        return array (  419 => 134,  412 => 130,  406 => 129,  403 => 128,  401 => 127,  398 => 126,  391 => 122,  385 => 121,  382 => 120,  380 => 119,  377 => 118,  370 => 114,  364 => 113,  361 => 112,  359 => 111,  356 => 110,  350 => 107,  347 => 106,  340 => 102,  334 => 98,  329 => 96,  322 => 95,  320 => 94,  314 => 91,  308 => 90,  304 => 88,  296 => 85,  290 => 82,  283 => 81,  281 => 80,  278 => 79,  272 => 76,  265 => 75,  263 => 74,  257 => 71,  251 => 70,  247 => 68,  243 => 60,  239 => 58,  236 => 57,  227 => 54,  223 => 53,  219 => 52,  216 => 51,  211 => 50,  209 => 49,  203 => 46,  196 => 42,  192 => 41,  188 => 40,  183 => 37,  179 => 35,  175 => 34,  171 => 33,  167 => 32,  164 => 31,  160 => 30,  153 => 26,  149 => 25,  144 => 24,  140 => 22,  136 => 21,  132 => 20,  128 => 19,  124 => 18,  115 => 12,  111 => 10,  109 => 9,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
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
                   {# <td>{{ advert.category.title }}</td> #}

                    <td>
                    <a class=\"btn btn-outline-primary\"
                       href=\"{{ url('advert_index', {'categoryId' : advert.category.id}) }}\"
                       title=\"{{ advert.category.title }}\">
                        {{ advert.category.title }}
                    </a>
                    </td>

                    <td>{{ advert.author.email }}</td>

                    <td>
                    {% if advert.tags is defined and advert.tags|length %}
                        {% for tag in advert.tags %}
                            <a class=\"btn btn-outline-primary\"
                               href=\"{{ url('advert_index', {'tagId' : tag.id}) }}\"
                               title=\"{{ tag.title }}\">
                                {{ tag.title }}
                            </a>
                        {% endfor %}
                    {% else %}
                        &nbsp;
                    {% endif %}
                    </td>

                    {# <td>
                        {% for tag in advert.tags %}
                            {{ tag.title }}<br>{% if not loop.last %}
                        {% endif %}
                        {% endfor %}
                    </td>#}

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
        <a class=\"btn btn-outline-primary\" href=\"{{ url('advert_index') }}\" title=\"{{ 'action.advert_index'|trans }}\">
            {{ 'action.advert_index'|trans }}
        </a>

        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <a class=\"btn btn-primary\" href=\"{{ url('advert_create') }}\" title=\"{{ 'action.create'|trans }}\">
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

    {% if is_granted('ROLE_ADMIN') %}
        <p>
            <a class=\"btn btn-outline-primary\" href=\"{{ url('user_index') }}\" title=\"{{ 'action.user_list'|trans }}\">
                {{ 'action.user_list'|trans }}
            </a>
        </p>
    {% endif %}

    {% if is_granted('ROLE_ADMIN') %}
        <p>
            <a class=\"btn btn-outline-primary\" href=\"{{ url('tag_index') }}\" title=\"{{ 'action.tag_list'|trans }}\">
                {{ 'action.tag_list'|trans }}
            </a>
        </p>
    {% endif %}

    {% if is_granted('ROLE_ADMIN') %}
        <p>
            <a class=\"btn btn-outline-primary\" href=\"{{ url('category_index') }}\" title=\"{{ 'action.category_list'|trans }}\">
                {{ 'action.category_list'|trans }}
            </a>
        </p>
    {% endif %}

{% endblock %}", "advert/index.html.twig", "/home/wwwroot/app/templates/advert/index.html.twig");
    }
}
