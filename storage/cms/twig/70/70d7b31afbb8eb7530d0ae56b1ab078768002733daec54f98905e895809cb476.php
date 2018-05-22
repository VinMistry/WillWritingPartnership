<?php

/* /Applications/XAMPP/xamppfiles/htdocs/WillWritingPartnership/themes/WillWritingPartnership/partials/calcresult.htm */
class __TwigTemplate_91c2b6738eb3373f2698e0ee2fddeda9802c848f30f140e8b140c710fc121256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($context["answer"] ?? null)) {
            // line 2
            echo "<span class=\"lead\">
    The result is <span class=\"label label-success\">";
            // line 3
            echo twig_escape_filter($this->env, ($context["answer"] ?? null), "html", null, true);
            echo "</span>
    ";
            // line 4
            echo twig_escape_filter($this->env, ($context["test"] ?? null), "html", null, true);
            echo "
</span>
";
        } else {
            // line 7
            echo "<span class=\"text-muted\">
    Click the go button to find answer.
</span>
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/WillWritingPartnership/themes/WillWritingPartnership/partials/calcresult.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if answer %}
<span class=\"lead\">
    The result is <span class=\"label label-success\">{{ answer }}</span>
    {{ test }}
</span>
{% else %}
<span class=\"text-muted\">
    Click the go button to find answer.
</span>
{% endif %}", "/Applications/XAMPP/xamppfiles/htdocs/WillWritingPartnership/themes/WillWritingPartnership/partials/calcresult.htm", "");
    }
}
