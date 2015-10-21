<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_db50110e7aaea8c5b858b2cb9ee4560d7431084fd495e162a70c957ecd063a6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a13b1ae29e0e0199371de46caac6a59f172e1472d90a5090102bfbe0fae9cac9 = $this->env->getExtension("native_profiler");
        $__internal_a13b1ae29e0e0199371de46caac6a59f172e1472d90a5090102bfbe0fae9cac9->enter($__internal_a13b1ae29e0e0199371de46caac6a59f172e1472d90a5090102bfbe0fae9cac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a13b1ae29e0e0199371de46caac6a59f172e1472d90a5090102bfbe0fae9cac9->leave($__internal_a13b1ae29e0e0199371de46caac6a59f172e1472d90a5090102bfbe0fae9cac9_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab000494b5b538c6de6e3fe0c307db61810acefe1699076f30a91c0c885a0634 = $this->env->getExtension("native_profiler");
        $__internal_ab000494b5b538c6de6e3fe0c307db61810acefe1699076f30a91c0c885a0634->enter($__internal_ab000494b5b538c6de6e3fe0c307db61810acefe1699076f30a91c0c885a0634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "
<div>
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nmuser/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
     
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
     
    <td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</td>
    <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label" => "Login"));
        echo "</td>
    <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "input", "placeholder" => "Nom")));
        echo "</td>

    <td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</td>
    <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email"));
        echo "</td>
    <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "input", "placeholder" => "Adresse email")));
        echo "</td>

    <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "</td>
    <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label" => "Mot de passe"));
        echo "</td>
    <td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "input", "placeholder" => "....")));
        echo "</td>

    <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "</td>
    <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label" => "Confirmez mot de passe"));
        echo "</td>
    <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "input", "placeholder" => "....")));
        echo "</td>


    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

<input class=\"button button-green\" type=\"submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inscription", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
</div> 
";
        
        $__internal_ab000494b5b538c6de6e3fe0c307db61810acefe1699076f30a91c0c885a0634->leave($__internal_ab000494b5b538c6de6e3fe0c307db61810acefe1699076f30a91c0c885a0634_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 29,  113 => 27,  107 => 24,  103 => 23,  99 => 22,  94 => 20,  90 => 19,  86 => 18,  81 => 16,  77 => 15,  73 => 14,  68 => 12,  64 => 11,  60 => 10,  55 => 8,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block fos_user_content %}*/
/* */
/* <div>*/
/* <link rel="stylesheet" href="{{ asset('bundles/nmuser/css/main.css') }}" type="text/css" media="all" />*/
/* <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*      */
/*     {{ form_errors(form) }}*/
/*      */
/*     <td>{{ form_errors(form.username)}}</td>*/
/*     <td>{{ form_label(form.username, 'Login')}}</td>*/
/*     <td>{{ form_widget(form.username, { 'attr': {'class': 'input', 'placeholder' : 'Nom'} }) }}</td>*/
/* */
/*     <td>{{ form_errors(form.email) }}</td>*/
/*     <td>{{ form_label(form.email, 'Email') }}</td>*/
/*     <td>{{ form_widget(form.email, { 'attr': {'class': 'input', 'placeholder' : 'Adresse email'} }) }}</td>*/
/* */
/*     <td>{{ form_errors(form.plainPassword.first) }}</td>*/
/*     <td>{{ form_label(form.plainPassword.first, 'Mot de passe') }}</td>*/
/*     <td>{{ form_widget(form.plainPassword.first, { 'attr': {'class': 'input', 'placeholder' : '....'} }) }}</td>*/
/* */
/*     <td>{{ form_errors(form.plainPassword.second) }}</td>*/
/*     <td>{{ form_label(form.plainPassword.second, 'Confirmez mot de passe') }}</td>*/
/*     <td>{{ form_widget(form.plainPassword.second, { 'attr': {'class': 'input', 'placeholder' : '....'} }) }}</td>*/
/* */
/* */
/*     {{ form_rest(form) }}*/
/* */
/* <input class="button button-green" type="submit" value="{{ 'Inscription'|trans({}, 'FOSUserBundle') }}" />*/
/* </form>*/
/* </div> */
/* {% endblock fos_user_content %}*/
/* */
/* */
/* */
