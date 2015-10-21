<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a4e29c6afb7027d46e1773ec0d923fe0900bf9b6f55fcb70e95577e5e0314776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_17a25ffd30f8f4b80fe9df760a512e68c985f4c4b2570b4d710d1cbe84198b37 = $this->env->getExtension("native_profiler");
        $__internal_17a25ffd30f8f4b80fe9df760a512e68c985f4c4b2570b4d710d1cbe84198b37->enter($__internal_17a25ffd30f8f4b80fe9df760a512e68c985f4c4b2570b4d710d1cbe84198b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17a25ffd30f8f4b80fe9df760a512e68c985f4c4b2570b4d710d1cbe84198b37->leave($__internal_17a25ffd30f8f4b80fe9df760a512e68c985f4c4b2570b4d710d1cbe84198b37_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2b08e840df7d9d98fa5a13c84499c1e1dcf2179a667516952dd3e09a23fed18 = $this->env->getExtension("native_profiler");
        $__internal_c2b08e840df7d9d98fa5a13c84499c1e1dcf2179a667516952dd3e09a23fed18->enter($__internal_c2b08e840df7d9d98fa5a13c84499c1e1dcf2179a667516952dd3e09a23fed18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_c2b08e840df7d9d98fa5a13c84499c1e1dcf2179a667516952dd3e09a23fed18->leave($__internal_c2b08e840df7d9d98fa5a13c84499c1e1dcf2179a667516952dd3e09a23fed18_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
