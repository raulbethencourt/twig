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

/* with-sidebar.twig */
class __TwigTemplate_791198e0bfe3c8fd9fd97a5223b6997f65a4661d2df3b4aff91923d2d8efbfec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "with-sidebar.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-xs-8\">
            ";
        // line 6
        $this->displayBlock('main', $context, $blocks);
        // line 7
        echo "        </div>
        <div class=\"col-xs-4\">
            ";
        // line 9
        $this->displayBlock('sidebar', $context, $blocks);
        // line 13
        echo "        </div>
    </div>
";
    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "            <h1>Ma sidebar</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem sint atque sequi. Necessitatibus consectetur, eos minus ab debitis ipsa, quisquam sequi perferendis dignissimos fuga officiis, sed deleniti iure quos non.</p>
            ";
    }

    public function getTemplateName()
    {
        return "with-sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 10,  76 => 9,  70 => 6,  64 => 13,  62 => 9,  58 => 7,  56 => 6,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-xs-8\">
            {% block main %}{% endblock %}
        </div>
        <div class=\"col-xs-4\">
            {% block sidebar %}
            <h1>Ma sidebar</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem sint atque sequi. Necessitatibus consectetur, eos minus ab debitis ipsa, quisquam sequi perferendis dignissimos fuga officiis, sed deleniti iure quos non.</p>
            {% endblock %}
        </div>
    </div>
{% endblock %}", "with-sidebar.twig", "/shared/httpd/twig/www/templates/with-sidebar.twig");
    }
}
