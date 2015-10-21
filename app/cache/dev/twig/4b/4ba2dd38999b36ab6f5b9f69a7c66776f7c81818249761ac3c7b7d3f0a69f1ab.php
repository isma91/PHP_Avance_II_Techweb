<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0541da71dc4e5506ec268110ae9f4c6a35389bea0af677383bdd19589f6bbe71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_920220a8ca805d1b72a16c51e48d83e6a91cb0eaf23a785019946ee05fefb2cf = $this->env->getExtension("native_profiler");
        $__internal_920220a8ca805d1b72a16c51e48d83e6a91cb0eaf23a785019946ee05fefb2cf->enter($__internal_920220a8ca805d1b72a16c51e48d83e6a91cb0eaf23a785019946ee05fefb2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_920220a8ca805d1b72a16c51e48d83e6a91cb0eaf23a785019946ee05fefb2cf->leave($__internal_920220a8ca805d1b72a16c51e48d83e6a91cb0eaf23a785019946ee05fefb2cf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_968e3a28f05580198eddd4ca85e6de22e0ac89dbce9dd225906de90cb15398ca = $this->env->getExtension("native_profiler");
        $__internal_968e3a28f05580198eddd4ca85e6de22e0ac89dbce9dd225906de90cb15398ca->enter($__internal_968e3a28f05580198eddd4ca85e6de22e0ac89dbce9dd225906de90cb15398ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_968e3a28f05580198eddd4ca85e6de22e0ac89dbce9dd225906de90cb15398ca->leave($__internal_968e3a28f05580198eddd4ca85e6de22e0ac89dbce9dd225906de90cb15398ca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
