<?php

/* /Applications/XAMPP/xamppfiles/htdocs/WillWritingPartnership/plugins/martin/forms/components/partials/recaptcha.htm */
class __TwigTemplate_53cc7cbdbdd09c7063c978ba085872da1ee4641ddbbf305f4d6fbebe1176be60 extends Twig_Template
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
        if (($context["recaptcha_enabled"] ?? null)) {
            // line 2
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "\" class=\"g-recaptcha\" data-sitekey=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "settings", array()), "recaptcha_site_key", array()), "html", null, true);
            echo "\" data-theme=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "recaptcha_theme"), "method"), "html", null, true);
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "recaptcha_type"), "method"), "html", null, true);
            echo "\" data-size=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "recaptcha_size"), "method"), "html", null, true);
            echo "\"></div>
";
        } elseif (        // line 3
($context["recaptcha_misconfigured"] ?? null)) {
            // line 4
            echo "    <h5>";
            echo twig_escape_filter($this->env, ($context["recaptcha_warn"] ?? null), "html", null, true);
            echo "</h5>
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/WillWritingPartnership/plugins/martin/forms/components/partials/recaptcha.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  34 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if (recaptcha_enabled) %}
    <div id=\"{{ __SELF__ }}\" class=\"g-recaptcha\" data-sitekey=\"{{ __SELF__.settings.recaptcha_site_key }}\" data-theme=\"{{ __SELF__.property('recaptcha_theme') }}\" data-type=\"{{ __SELF__.property('recaptcha_type') }}\" data-size=\"{{ __SELF__.property('recaptcha_size') }}\"></div>
{% elseif (recaptcha_misconfigured) %}
    <h5>{{ recaptcha_warn }}</h5>
{% endif %}", "/Applications/XAMPP/xamppfiles/htdocs/WillWritingPartnership/plugins/martin/forms/components/partials/recaptcha.htm", "");
    }
}
