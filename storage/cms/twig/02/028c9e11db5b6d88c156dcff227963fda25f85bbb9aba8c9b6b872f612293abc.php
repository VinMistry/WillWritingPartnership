<?php

/* /Applications/XAMPP/xamppfiles/htdocs/WillWritingPartnership/themes/WillWritingPartnership/pages/calc.htm */
class __TwigTemplate_03d2f58f41b0262f2f2744bed2599759900d73f6b61d7cf71edafe44c1610404 extends Twig_Template
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
        echo "<h1>Hello</h1>
<form class=\"form-inline\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
    <input type=\"text\" name=\"value1\" value=\"\" class=\"form-control\" >
    <select name=\"operation\" class=\"form-control\">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type=\"text\" name=\"value2\" value=\"\" class=\"form-control\">
    <button type=\"submit\" class=\"btn btn-primary\">Go</button>
</form>

<h3>Result</h3>

<div id=\"result\">
    ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("calcresult"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/WillWritingPartnership/themes/WillWritingPartnership/pages/calc.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 18,  37 => 17,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Hello</h1>
<form class=\"form-inline\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
    <input type=\"text\" name=\"value1\" value=\"\" class=\"form-control\" >
    <select name=\"operation\" class=\"form-control\">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type=\"text\" name=\"value2\" value=\"\" class=\"form-control\">
    <button type=\"submit\" class=\"btn btn-primary\">Go</button>
</form>

<h3>Result</h3>

<div id=\"result\">
    {% partial \"calcresult\" %}
</div>", "/Applications/XAMPP/xamppfiles/htdocs/WillWritingPartnership/themes/WillWritingPartnership/pages/calc.htm", "");
    }
}
