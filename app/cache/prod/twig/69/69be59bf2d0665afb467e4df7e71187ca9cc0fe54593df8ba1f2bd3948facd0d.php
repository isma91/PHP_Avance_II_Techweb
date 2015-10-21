<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_eb2f036023833464fe8583e2806ba11200f46c3bf83d5415b12838bed93ee839 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
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
        return array (  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
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
