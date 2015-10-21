<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_268c48ab7e1e4ed05dcfc7b1811e55815541e8d7b38a8697d45b57c2a57dcb72 extends Twig_Template
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
        $__internal_a19e048527c8685058781945076db543c9b109a225adef786281b52df301c1eb = $this->env->getExtension("native_profiler");
        $__internal_a19e048527c8685058781945076db543c9b109a225adef786281b52df301c1eb->enter($__internal_a19e048527c8685058781945076db543c9b109a225adef786281b52df301c1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p> Votre login : ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p> Votre adresse email : ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>";
        
        $__internal_a19e048527c8685058781945076db543c9b109a225adef786281b52df301c1eb->leave($__internal_a19e048527c8685058781945076db543c9b109a225adef786281b52df301c1eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_user_show">*/
/*     <p> Votre login : {{ user.username }}</p>*/
/*     <p> Votre adresse email : {{ user.email }}</p>*/
/* </div>*/
