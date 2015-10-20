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
        $__internal_5281c19c88b809637a43014607734dba1cf9073c3d71e79ca9adb5f82cdddd0a = $this->env->getExtension("native_profiler");
        $__internal_5281c19c88b809637a43014607734dba1cf9073c3d71e79ca9adb5f82cdddd0a->enter($__internal_5281c19c88b809637a43014607734dba1cf9073c3d71e79ca9adb5f82cdddd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5281c19c88b809637a43014607734dba1cf9073c3d71e79ca9adb5f82cdddd0a->leave($__internal_5281c19c88b809637a43014607734dba1cf9073c3d71e79ca9adb5f82cdddd0a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74ec1d66ea332d959db1fd0fa6c53b68d1f0185363edf9a8c4a54c5a91efd624 = $this->env->getExtension("native_profiler");
        $__internal_74ec1d66ea332d959db1fd0fa6c53b68d1f0185363edf9a8c4a54c5a91efd624->enter($__internal_74ec1d66ea332d959db1fd0fa6c53b68d1f0185363edf9a8c4a54c5a91efd624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<!--<div>
    layout.logged_in_as |<a href=\"/logout\">layout.logout</a>
</div>-->

 <div>
    <form action=\"/register/\"  method=\"POST\" class=\"fos_user_registration_register\">
        <div id=\"fos_user_registration_form\"><div><label for=\"fos_user_registration_form_email\" class=\"required\">Votre Email :</label><input type=\"email\" id=\"fos_user_registration_form_email\" name=\"fos_user_registration_form[email]\" required=\"required\" /></div><div><label for=\"fos_user_registration_form_username\" class=\"required\">Votre Login :</label><input type=\"text\" id=\"fos_user_registration_form_username\" name=\"fos_user_registration_form[username]\" required=\"required\" maxlength=\"255\" pattern=\".{2,}\" /></div><div><label for=\"fos_user_registration_form_plainPassword_first\" class=\"required\">Votre Password : </label><input type=\"password\" id=\"fos_user_registration_form_plainPassword_first\" name=\"fos_user_registration_form[plainPassword][first]\" required=\"required\" /></div><div><label for=\"fos_user_registration_form_plainPassword_second\" class=\"required\">Confirmer votre Password : </label><input type=\"password\" id=\"fos_user_registration_form_plainPassword_second\" name=\"fos_user_registration_form[plainPassword][second]\" required=\"required\" /></div><input type=\"hidden\" id=\"fos_user_registration_form__token\" name=\"fos_user_registration_form[_token]\"  />
        </div>
        <div>
            <input type=\"submit\" value=\"registration.submit\" />
        </div>
    </form>
</div> 
";
        
        $__internal_74ec1d66ea332d959db1fd0fa6c53b68d1f0185363edf9a8c4a54c5a91efd624->leave($__internal_74ec1d66ea332d959db1fd0fa6c53b68d1f0185363edf9a8c4a54c5a91efd624_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <!--<div>*/
/*     layout.logged_in_as |<a href="/logout">layout.logout</a>*/
/* </div>-->*/
/* */
/*  <div>*/
/*     <form action="/register/"  method="POST" class="fos_user_registration_register">*/
/*         <div id="fos_user_registration_form"><div><label for="fos_user_registration_form_email" class="required">Votre Email :</label><input type="email" id="fos_user_registration_form_email" name="fos_user_registration_form[email]" required="required" /></div><div><label for="fos_user_registration_form_username" class="required">Votre Login :</label><input type="text" id="fos_user_registration_form_username" name="fos_user_registration_form[username]" required="required" maxlength="255" pattern=".{2,}" /></div><div><label for="fos_user_registration_form_plainPassword_first" class="required">Votre Password : </label><input type="password" id="fos_user_registration_form_plainPassword_first" name="fos_user_registration_form[plainPassword][first]" required="required" /></div><div><label for="fos_user_registration_form_plainPassword_second" class="required">Confirmer votre Password : </label><input type="password" id="fos_user_registration_form_plainPassword_second" name="fos_user_registration_form[plainPassword][second]" required="required" /></div><input type="hidden" id="fos_user_registration_form__token" name="fos_user_registration_form[_token]"  />*/
/*         </div>*/
/*         <div>*/
/*             <input type="submit" value="registration.submit" />*/
/*         </div>*/
/*     </form>*/
/* </div> */
/* {% endblock fos_user_content %}*/
