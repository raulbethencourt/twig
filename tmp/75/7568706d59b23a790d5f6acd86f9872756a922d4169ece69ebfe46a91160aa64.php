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

/* home.twig */
class __TwigTemplate_8ccd67413c5b5f3d665e1b5108a9e6f8df3ab48b095212085b1946dc3060f098 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "with-sidebar.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("with-sidebar.twig", "home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<title>Home page</title>
";
    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t<h1>Les derniers tutoriels</h1>

\t<div class=\"row\">
\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tutoriels"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tutoriel"]) {
            // line 12
            echo "\t\t\t<div class=\"col-xs\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<h4 class=\"card-title\">";
            // line 14
            echo twig_escape_filter($this->env, ("Tutoriel : " . $this->extensions['MonExtension']->markdownParse(twig_get_attribute($this->env, $this->source, $context["tutoriel"], "name", [], "any", false, false, false, 14))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 14), "html", null, true);
            echo "</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 17
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 17) % 4)) {
                // line 18
                echo "\t\t\t\t</div><div class=\"row\">\t\t\t\t
\t\t\t";
            }
            // line 20
            echo "\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutoriel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 21,  100 => 20,  96 => 18,  94 => 17,  86 => 14,  82 => 12,  65 => 11,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"with-sidebar.twig\" %}

{% block head %}
\t<title>Home page</title>
{% endblock %}

{% block main %}
\t<h1>Les derniers tutoriels</h1>

\t<div class=\"row\">
\t\t{% for tutoriel in tutoriels %}
\t\t\t<div class=\"col-xs\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<h4 class=\"card-title\">{{ 'Tutoriel : ' ~ tutoriel.name | markdown }} {{ loop.index }}</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% if loop.index is divisible by(4) %}
\t\t\t\t</div><div class=\"row\">\t\t\t\t
\t\t\t{% endif %}
\t\t{% endfor %}
\t</div>
{% endblock %}
", "home.twig", "/shared/httpd/twig/www/templates/home.twig");
    }
}
