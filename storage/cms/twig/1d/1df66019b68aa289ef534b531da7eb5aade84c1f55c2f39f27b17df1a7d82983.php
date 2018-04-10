<?php

/* /Applications/XAMPP/xamppfiles/htdocs/October/themes/WillWritingPartnership/partials/header.htm */
class __TwigTemplate_7b89165353f07cabea7129f7a669a261f1aef48cfac87c29cfd7181a14d48359 extends Twig_Template
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
        echo "<!-- Nav -->
<div class=\" logInButton\">
    <div class=\"text-lg-right\">
        <a href=\" ";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("account");
        echo "\"> <button  class=\"btn btn-primary\">Login <i class=\"fa fa-user\"></i></button></a>

        <a href=\" ";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("account");
        echo "\"><button  class=\"btn btn-primary\">Register <i class=\"fa fa-user-plus\"></i></button></a>
    </div>
</div>
<div class=\"navigation\">
    <ul>
        <div class=\"\">
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("index");
        echo "\"><img class=\"img-fluid menu-logo\" src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/twp-logo.png");
        echo "\"></a>
            <li><a class=\"company-name\" ></a></li>
        </div>
        <div class=\"nav-button\">
            <li class=\"grow\"><a class=\"nav-btn-open\" href=\"#\">Life Planning</a></li>
        </div>
        <div class=\"nav-button\">
            <li class=\"grow\"><a class=\"nav-btn-open\" href=\"#\">Personal Services</a></li>
        </div>
            <li class=\"grow\"><a href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("services");
        echo "\">Online Services</a></li>
            <li class=\"grow\"><a href=\" ";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\">News</a></li>

    </ul>

</div>
<div class=\"nav-overlay\">
    <div class=\"nav-wrap\">
        <ul class=\"wrap-nav\">
            <li ><a class=\"overlay-header\" href=\"#\">Life Planning</a>
                <ul>
                    <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("wills");
        echo "\">Wills</a></li>
                    <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("funeral");
        echo "\">Funeral</a></li>
                    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("probate");
        echo "\">Probate</a></li>
                </ul>
            </li>
            <li><a class=\"overlay-header\" href=\"#\">Personal Services</a>
                <ul>
                    <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("storage");
        echo "\">Storage</a></li>
                    <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("trusts");
        echo "\">Trusts</a></li>
                    <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("inheritance");
        echo "\">Inheritance</a></li>
                    <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("faq");
        echo "\">Frequently Asked Questions</a></li>
                </ul>
            </li>
            </ul>
        </a>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/October/themes/WillWritingPartnership/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 42,  93 => 41,  89 => 40,  85 => 39,  77 => 34,  73 => 33,  69 => 32,  56 => 22,  52 => 21,  38 => 12,  29 => 6,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<div class=\" logInButton\">
    <div class=\"text-lg-right\">
        <a href=\" {{ 'account'|page }}\"> <button  class=\"btn btn-primary\">Login <i class=\"fa fa-user\"></i></button></a>

        <a href=\" {{ 'account'|page }}\"><button  class=\"btn btn-primary\">Register <i class=\"fa fa-user-plus\"></i></button></a>
    </div>
</div>
<div class=\"navigation\">
    <ul>
        <div class=\"\">
            <a href=\"{{ 'index'|page }}\"><img class=\"img-fluid menu-logo\" src=\"{{ 'assets/images/twp-logo.png'|theme }}\"></a>
            <li><a class=\"company-name\" ></a></li>
        </div>
        <div class=\"nav-button\">
            <li class=\"grow\"><a class=\"nav-btn-open\" href=\"#\">Life Planning</a></li>
        </div>
        <div class=\"nav-button\">
            <li class=\"grow\"><a class=\"nav-btn-open\" href=\"#\">Personal Services</a></li>
        </div>
            <li class=\"grow\"><a href=\"{{ 'services'|page }}\">Online Services</a></li>
            <li class=\"grow\"><a href=\" {{ 'blog'|page }}\">News</a></li>

    </ul>

</div>
<div class=\"nav-overlay\">
    <div class=\"nav-wrap\">
        <ul class=\"wrap-nav\">
            <li ><a class=\"overlay-header\" href=\"#\">Life Planning</a>
                <ul>
                    <li><a href=\"{{ 'wills'|page }}\">Wills</a></li>
                    <li><a href=\"{{ 'funeral'|page }}\">Funeral</a></li>
                    <li><a href=\"{{ 'probate'|page }}\">Probate</a></li>
                </ul>
            </li>
            <li><a class=\"overlay-header\" href=\"#\">Personal Services</a>
                <ul>
                    <li><a href=\"{{ 'storage'|page }}\">Storage</a></li>
                    <li><a href=\"{{ 'trusts'|page }}\">Trusts</a></li>
                    <li><a href=\"{{ 'inheritance'|page }}\">Inheritance</a></li>
                    <li><a href=\"{{ 'faq'|page }}\">Frequently Asked Questions</a></li>
                </ul>
            </li>
            </ul>
        </a>
    </div>
</div>
</div>", "/Applications/XAMPP/xamppfiles/htdocs/October/themes/WillWritingPartnership/partials/header.htm", "");
    }
}
