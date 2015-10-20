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
        $__internal_3401ea6144cbdc0180689013a35437b9ae27fffee0122ebda8b4084fadec3abf = $this->env->getExtension("native_profiler");
        $__internal_3401ea6144cbdc0180689013a35437b9ae27fffee0122ebda8b4084fadec3abf->enter($__internal_3401ea6144cbdc0180689013a35437b9ae27fffee0122ebda8b4084fadec3abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3401ea6144cbdc0180689013a35437b9ae27fffee0122ebda8b4084fadec3abf->leave($__internal_3401ea6144cbdc0180689013a35437b9ae27fffee0122ebda8b4084fadec3abf_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_89ba9fd9d58a16c0f76e2313e6a7bb5eb32b2460ab0fb4923ec52afb147637d6 = $this->env->getExtension("native_profiler");
        $__internal_89ba9fd9d58a16c0f76e2313e6a7bb5eb32b2460ab0fb4923ec52afb147637d6->enter($__internal_89ba9fd9d58a16c0f76e2313e6a7bb5eb32b2460ab0fb4923ec52afb147637d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "
 <div>
 <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nmuser/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <form action=\"/register/\"  method=\"POST\" class=\"fos_user_registration_register\">
        <div id=\"fos_user_registration_form\"><div><label for=\"fos_user_registration_form_email\" class=\"required\" id=\"mail\">Votre Email :</label><input type=\"email\" id=\"fos_user_registration_form_email\" name=\"fos_user_registration_form[email]\" required=\"required\" /></div><div><label for=\"fos_user_registration_form_username\" class=\"required\">Votre Login :</label><input type=\"text\" id=\"fos_user_registration_form_username\" name=\"fos_user_registration_form[username]\" required=\"required\" maxlength=\"255\" pattern=\".{2,}\" /></div><div><label for=\"fos_user_registration_form_plainPassword_first\" class=\"required\">Votre Password : </label><input type=\"password\" id=\"fos_user_registration_form_plainPassword_first\" name=\"fos_user_registration_form[plainPassword][first]\" required=\"required\" /></div><div><label for=\"fos_user_registration_form_plainPassword_second\" class=\"required\">Confirmer votre Password : </label><input type=\"password\" id=\"fos_user_registration_form_plainPassword_second\" name=\"fos_user_registration_form[plainPassword][second]\" required=\"required\" /></div><input type=\"hidden\" id=\"fos_user_registration_form__token\" name=\"fos_user_registration_form[_token]\"  />
        </div>
        <div>
            <input type=\"submit\" value=\"registration.submit\" />
        </div>
    </form>
</div> 
";
        
        $__internal_89ba9fd9d58a16c0f76e2313e6a7bb5eb32b2460ab0fb4923ec52afb147637d6->leave($__internal_89ba9fd9d58a16c0f76e2313e6a7bb5eb32b2460ab0fb4923ec52afb147637d6_prof);

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
        return array (  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block fos_user_content %}*/
/* */
/*  <div>*/
/*  <link rel="stylesheet" href="{{ asset('bundles/nmuser/css/main.css') }}" type="text/css" media="all" />*/
/*     <form action="/register/"  method="POST" class="fos_user_registration_register">*/
/*         <div id="fos_user_registration_form"><div><label for="fos_user_registration_form_email" class="required" id="mail">Votre Email :</label><input type="email" id="fos_user_registration_form_email" name="fos_user_registration_form[email]" required="required" /></div><div><label for="fos_user_registration_form_username" class="required">Votre Login :</label><input type="text" id="fos_user_registration_form_username" name="fos_user_registration_form[username]" required="required" maxlength="255" pattern=".{2,}" /></div><div><label for="fos_user_registration_form_plainPassword_first" class="required">Votre Password : </label><input type="password" id="fos_user_registration_form_plainPassword_first" name="fos_user_registration_form[plainPassword][first]" required="required" /></div><div><label for="fos_user_registration_form_plainPassword_second" class="required">Confirmer votre Password : </label><input type="password" id="fos_user_registration_form_plainPassword_second" name="fos_user_registration_form[plainPassword][second]" required="required" /></div><input type="hidden" id="fos_user_registration_form__token" name="fos_user_registration_form[_token]"  />*/
/*         </div>*/
/*         <div>*/
/*             <input type="submit" value="registration.submit" />*/
/*         </div>*/
/*     </form>*/
/* </div> */
/* {% endblock fos_user_content %}*/
/* */
