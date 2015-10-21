<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6d81eb2af3ddca90f86f8e88747ab87ce6a53f8b4df792b9d361723134db3b63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d99efcde368b77e83c7789de03a7e5de19d4d46098b40b4636a9f5d89753fff2 = $this->env->getExtension("native_profiler");
        $__internal_d99efcde368b77e83c7789de03a7e5de19d4d46098b40b4636a9f5d89753fff2->enter($__internal_d99efcde368b77e83c7789de03a7e5de19d4d46098b40b4636a9f5d89753fff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d99efcde368b77e83c7789de03a7e5de19d4d46098b40b4636a9f5d89753fff2->leave($__internal_d99efcde368b77e83c7789de03a7e5de19d4d46098b40b4636a9f5d89753fff2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_659a54879828c4d5e275be85b169c8cc0ca374b7091ea84b1d59265cf6937879 = $this->env->getExtension("native_profiler");
        $__internal_659a54879828c4d5e275be85b169c8cc0ca374b7091ea84b1d59265cf6937879->enter($__internal_659a54879828c4d5e275be85b169c8cc0ca374b7091ea84b1d59265cf6937879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nmuser/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">Login</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">Password</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">Se souvenir de moi</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Valider\" />
</form>
";
        
        $__internal_659a54879828c4d5e275be85b169c8cc0ca374b7091ea84b1d59265cf6937879->leave($__internal_659a54879828c4d5e275be85b169c8cc0ca374b7091ea84b1d59265cf6937879_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  57 => 11,  53 => 10,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* <link rel="stylesheet" href="{{ asset('bundles/nmuser/css/main.css') }}" type="text/css" media="all" />*/
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username">Login</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label for="password">Password</label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">Se souvenir de moi</label>*/
/* */
/*     <input type="submit" id="_submit" name="_submit" value="Valider" />*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
