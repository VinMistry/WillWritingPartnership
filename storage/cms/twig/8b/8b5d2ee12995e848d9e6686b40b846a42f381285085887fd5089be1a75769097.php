<?php

/* /Applications/XAMPP/xamppfiles/htdocs/October/themes/WillWritingPartnership/pages/createwill.htm */
class __TwigTemplate_0dcc152eb6afd8a3e4e8bada4b543bfe480ece24168f5135dda27de35147bd3b extends Twig_Template
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
        echo "<div class=\"container\">
    ";
        // line 2
        if (($context["user"] ?? null)) {
            // line 3
            echo "    <h1>Enter Basic Details</h1>
    ";
        } else {
            // line 5
            echo "    <h2>Please Log in Or Sign up</h2>
    ";
        }
        // line 7
        echo "</div>
<div class=\"container\">
    <form class=\"form-inline\">
        <div class=\"form-group\">
                <label for=\"titles\" class=\"form-spacing\">Title </label>
                    <select class=\"form-control mb-3 mr-sm-2 mb-sm-0\" id=\"titles\">
                        <option>Mr</option>
                        <option>Miss</option>
                        <option>Mrs</option>
                        <option>Ms</option>
                    </select>
        </div>
        <div class=\"form-group\">
            <label class=\"form-spacing\">First Name </label>
            <input type=\"text\" id=\"firstname\" class=\"form-control mb-2 mr-sm-2 mb-sm-0\" placeholder=\"First Name\" />
        </div>
        <div class=\"form-group\">
            <label class=\"form-spacing\">Last Name </label>
            <input type=\"text\" id=\"lastname\"class=\"form-control mb-2 mr-sm-2 mb-sm-0\" placeholder=\"Last Name\" />
        </div>
    </form>
</div>
<div class=\"container \">
    <form>
        <div class=\"form-group\">
            <label>Mobile Number</label>
            <input type=\"tel\" id=\"mobile\" class=\"form-control\" placeholder=\"Mobile Number\" />
        </div>
        <div class=\"form-group\">
            <label>Work Number</label>
            <input type=\"tel\" id=\"work\" class=\"form-control\" placeholder=\"Work Number\" />
        </div>
        <div class=\"form-group\">
            <label>Home Number</label>
            <input type=\"tel\" id=\"homeNum\" class=\"form-control\" placeholder=\"Home Number\" />
        </div>

        <div class=\"form-group\">
            <label>Email</label>
            <input type=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Email\" />
        </div>
        <div class=\"form-group\">
            <label>Address Line 1</label>
            <input id=\"address-line1\" class=\"form-control\" name=\"address-line1\" type=\"text\" placeholder=\"Address Line 1\">
            <small class=\"form-text text-muted\">Street address, P.O. box, company name, c/o</small>
        </div>
        <div class=\"form-group\">
            <label>Address Line 2</label>
            <input id=\"address-line2\" class=\"form-control\" name=\"address-line2\" type=\"text\" placeholder=\"Address Line 2\">
            <small class=\"form-text text-muted\">Apartment, suite , unit, building, floor, etc.</small>
        </div>
            <div class=\"form-group form-inline\">
                <label  class=\"form-spacing\">City / Town</label>
                <input id=\"city\" name=\"city\" type=\"text\" placeholder=\"City\" class=\"form-control mb-2 mr-sm-2 mb-sm-0\">
                <small class=\"form-text text-muted\"></small>
                <label  class=\"form-spacing\">State / Province / Region</label>
                <input id=\"region\" name=\"region\" type=\"text\" placeholder=\"State / Province / Region\" class=\"form-control mb-2 mr-sm-2 mb-sm-0\">
                <small class=\"text-muted form-text\"></small>
            </div>
            <div class=\"form-group\">
                <label class=\"form-label\">Zip / Postal Code</label>
                <input id=\"postal-code\" name=\"postal-code\" type=\"text\" placeholder=\"Zip or Postal Code\" class=\"form-control\">
                <small class=\"text-muted form-text\">e.g. BL9 5BN </small>
            </div>
    </form>
</div>
<div class=\"container text-center\">
    <a href=\"";
        // line 74
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("addTestators");
        echo "\" class=\"btn btn-primary btn-lg btn-bloc\">Continue</a>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/October/themes/WillWritingPartnership/pages/createwill.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 74,  32 => 7,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    {% if user %}
    <h1>Enter Basic Details</h1>
    {% else %}
    <h2>Please Log in Or Sign up</h2>
    {% endif %}
</div>
<div class=\"container\">
    <form class=\"form-inline\">
        <div class=\"form-group\">
                <label for=\"titles\" class=\"form-spacing\">Title </label>
                    <select class=\"form-control mb-3 mr-sm-2 mb-sm-0\" id=\"titles\">
                        <option>Mr</option>
                        <option>Miss</option>
                        <option>Mrs</option>
                        <option>Ms</option>
                    </select>
        </div>
        <div class=\"form-group\">
            <label class=\"form-spacing\">First Name </label>
            <input type=\"text\" id=\"firstname\" class=\"form-control mb-2 mr-sm-2 mb-sm-0\" placeholder=\"First Name\" />
        </div>
        <div class=\"form-group\">
            <label class=\"form-spacing\">Last Name </label>
            <input type=\"text\" id=\"lastname\"class=\"form-control mb-2 mr-sm-2 mb-sm-0\" placeholder=\"Last Name\" />
        </div>
    </form>
</div>
<div class=\"container \">
    <form>
        <div class=\"form-group\">
            <label>Mobile Number</label>
            <input type=\"tel\" id=\"mobile\" class=\"form-control\" placeholder=\"Mobile Number\" />
        </div>
        <div class=\"form-group\">
            <label>Work Number</label>
            <input type=\"tel\" id=\"work\" class=\"form-control\" placeholder=\"Work Number\" />
        </div>
        <div class=\"form-group\">
            <label>Home Number</label>
            <input type=\"tel\" id=\"homeNum\" class=\"form-control\" placeholder=\"Home Number\" />
        </div>

        <div class=\"form-group\">
            <label>Email</label>
            <input type=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Email\" />
        </div>
        <div class=\"form-group\">
            <label>Address Line 1</label>
            <input id=\"address-line1\" class=\"form-control\" name=\"address-line1\" type=\"text\" placeholder=\"Address Line 1\">
            <small class=\"form-text text-muted\">Street address, P.O. box, company name, c/o</small>
        </div>
        <div class=\"form-group\">
            <label>Address Line 2</label>
            <input id=\"address-line2\" class=\"form-control\" name=\"address-line2\" type=\"text\" placeholder=\"Address Line 2\">
            <small class=\"form-text text-muted\">Apartment, suite , unit, building, floor, etc.</small>
        </div>
            <div class=\"form-group form-inline\">
                <label  class=\"form-spacing\">City / Town</label>
                <input id=\"city\" name=\"city\" type=\"text\" placeholder=\"City\" class=\"form-control mb-2 mr-sm-2 mb-sm-0\">
                <small class=\"form-text text-muted\"></small>
                <label  class=\"form-spacing\">State / Province / Region</label>
                <input id=\"region\" name=\"region\" type=\"text\" placeholder=\"State / Province / Region\" class=\"form-control mb-2 mr-sm-2 mb-sm-0\">
                <small class=\"text-muted form-text\"></small>
            </div>
            <div class=\"form-group\">
                <label class=\"form-label\">Zip / Postal Code</label>
                <input id=\"postal-code\" name=\"postal-code\" type=\"text\" placeholder=\"Zip or Postal Code\" class=\"form-control\">
                <small class=\"text-muted form-text\">e.g. BL9 5BN </small>
            </div>
    </form>
</div>
<div class=\"container text-center\">
    <a href=\"{{ 'addTestators'|page }}\" class=\"btn btn-primary btn-lg btn-bloc\">Continue</a>
</div>", "/Applications/XAMPP/xamppfiles/htdocs/October/themes/WillWritingPartnership/pages/createwill.htm", "");
    }
}
