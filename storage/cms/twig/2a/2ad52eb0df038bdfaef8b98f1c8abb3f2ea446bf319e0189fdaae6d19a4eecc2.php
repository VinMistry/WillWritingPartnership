<?php

/* /Applications/XAMPP/xamppfiles/htdocs/WillWritingPartnership/plugins/martin/forms/components/genericform/default.htm */
class __TwigTemplate_37af4ea1187442d7dd2903d886805ed7de741bcd7508178a832fe02cb4ff3ae2 extends Twig_Template
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
        echo "
<div class=\"jumbotron-fluid jumbotron  contact_req_form\">
    <h1 class=\"text-center\">Call 0161 705 382 | Request a call below</h1>
    <div class=\"container\">
        <form data-request=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\" id=\"contact-form\" class=\"\">

                ";
        // line 7
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "

                        <div class=\"form-group contact_form_main\">
                        <label for=\"name\">Name:</label>
                        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
                        </div>

                <div class=\"form-group contact_form_main\">
                    <label for=\"email\">Email:</label>
                    <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
                </div>


                <div class=\"form-group contact_form_main\">
                    <label for=\"subject\">Phone Number:</label>
                    <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\">
                </div>


                <div class=\"form-group contact_form_main\">
                    ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@recaptcha"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "                </div>

                <div class=\"col-auto text-center\">
                    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-primary\">Request a Callback</button>
                </div>
            <br>
            <div id=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>

        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/WillWritingPartnership/plugins/martin/forms/components/genericform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 35,  58 => 29,  54 => 28,  30 => 7,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"jumbotron-fluid jumbotron  contact_req_form\">
    <h1 class=\"text-center\">Call 0161 705 382 | Request a call below</h1>
    <div class=\"container\">
        <form data-request=\"{{ __SELF__ }}::onFormSubmit\" id=\"contact-form\" class=\"\">

                {{ form_token() }}

                        <div class=\"form-group contact_form_main\">
                        <label for=\"name\">Name:</label>
                        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
                        </div>

                <div class=\"form-group contact_form_main\">
                    <label for=\"email\">Email:</label>
                    <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
                </div>


                <div class=\"form-group contact_form_main\">
                    <label for=\"subject\">Phone Number:</label>
                    <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\">
                </div>


                <div class=\"form-group contact_form_main\">
                    {% partial '@recaptcha' %}
                </div>

                <div class=\"col-auto text-center\">
                    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-primary\">Request a Callback</button>
                </div>
            <br>
            <div id=\"{{ __SELF__ }}_forms_flash\"></div>

        </form>
    </div>
</div>
", "/Applications/XAMPP/xamppfiles/htdocs/WillWritingPartnership/plugins/martin/forms/components/genericform/default.htm", "");
    }
}
