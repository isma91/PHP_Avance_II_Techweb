<?php

/* ::base.html.twig */
class __TwigTemplate_eb75fdde76a197c3e43089cf98e9c8e425d446f4364c72e79f4f73019c2ff742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_030ed7b51b1e18ac4b0a0fe950ad4237890a69d17675a0f2bffbf1bffaff3edd = $this->env->getExtension("native_profiler");
        $__internal_030ed7b51b1e18ac4b0a0fe950ad4237890a69d17675a0f2bffbf1bffaff3edd->enter($__internal_030ed7b51b1e18ac4b0a0fe950ad4237890a69d17675a0f2bffbf1bffaff3edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_030ed7b51b1e18ac4b0a0fe950ad4237890a69d17675a0f2bffbf1bffaff3edd->leave($__internal_030ed7b51b1e18ac4b0a0fe950ad4237890a69d17675a0f2bffbf1bffaff3edd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7334f57d2191e256713188c2aa3abc7e7132105663a228488a45fe2c8fb88f5c = $this->env->getExtension("native_profiler");
        $__internal_7334f57d2191e256713188c2aa3abc7e7132105663a228488a45fe2c8fb88f5c->enter($__internal_7334f57d2191e256713188c2aa3abc7e7132105663a228488a45fe2c8fb88f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7334f57d2191e256713188c2aa3abc7e7132105663a228488a45fe2c8fb88f5c->leave($__internal_7334f57d2191e256713188c2aa3abc7e7132105663a228488a45fe2c8fb88f5c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a16070bdc8ba5cf153e59abe1bda8383288a23650b81aa91f2e4f9fcdc5b90ab = $this->env->getExtension("native_profiler");
        $__internal_a16070bdc8ba5cf153e59abe1bda8383288a23650b81aa91f2e4f9fcdc5b90ab->enter($__internal_a16070bdc8ba5cf153e59abe1bda8383288a23650b81aa91f2e4f9fcdc5b90ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a16070bdc8ba5cf153e59abe1bda8383288a23650b81aa91f2e4f9fcdc5b90ab->leave($__internal_a16070bdc8ba5cf153e59abe1bda8383288a23650b81aa91f2e4f9fcdc5b90ab_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dcf1b97f0eba91030ece615757f481744a2ef5da7d16a29b6659ca79c283cf8 = $this->env->getExtension("native_profiler");
        $__internal_8dcf1b97f0eba91030ece615757f481744a2ef5da7d16a29b6659ca79c283cf8->enter($__internal_8dcf1b97f0eba91030ece615757f481744a2ef5da7d16a29b6659ca79c283cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8dcf1b97f0eba91030ece615757f481744a2ef5da7d16a29b6659ca79c283cf8->leave($__internal_8dcf1b97f0eba91030ece615757f481744a2ef5da7d16a29b6659ca79c283cf8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1dc3bf0dcbe86cde415299f9ff98bfbf6de5a8e211e239954efaac4a46d134b1 = $this->env->getExtension("native_profiler");
        $__internal_1dc3bf0dcbe86cde415299f9ff98bfbf6de5a8e211e239954efaac4a46d134b1->enter($__internal_1dc3bf0dcbe86cde415299f9ff98bfbf6de5a8e211e239954efaac4a46d134b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1dc3bf0dcbe86cde415299f9ff98bfbf6de5a8e211e239954efaac4a46d134b1->leave($__internal_1dc3bf0dcbe86cde415299f9ff98bfbf6de5a8e211e239954efaac4a46d134b1_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
