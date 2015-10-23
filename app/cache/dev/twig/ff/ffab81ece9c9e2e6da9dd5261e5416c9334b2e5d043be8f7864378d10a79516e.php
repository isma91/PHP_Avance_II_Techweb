<?php

/* base.html.twig */
class __TwigTemplate_48b4d941f29809d34935a818fa1291dbf405d209cc57d31eefccb006410d60ca extends Twig_Template
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
        $__internal_b56dc51cc50bb1be341b9822829f85ff51aad7be6bfd20fde5cb2f0bf5f80a1e = $this->env->getExtension("native_profiler");
        $__internal_b56dc51cc50bb1be341b9822829f85ff51aad7be6bfd20fde5cb2f0bf5f80a1e->enter($__internal_b56dc51cc50bb1be341b9822829f85ff51aad7be6bfd20fde5cb2f0bf5f80a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b56dc51cc50bb1be341b9822829f85ff51aad7be6bfd20fde5cb2f0bf5f80a1e->leave($__internal_b56dc51cc50bb1be341b9822829f85ff51aad7be6bfd20fde5cb2f0bf5f80a1e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_81da6bea80304aaa8d4aa092fa649321d3dccabb0db8acc1c025b0bbc3ae4ace = $this->env->getExtension("native_profiler");
        $__internal_81da6bea80304aaa8d4aa092fa649321d3dccabb0db8acc1c025b0bbc3ae4ace->enter($__internal_81da6bea80304aaa8d4aa092fa649321d3dccabb0db8acc1c025b0bbc3ae4ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_81da6bea80304aaa8d4aa092fa649321d3dccabb0db8acc1c025b0bbc3ae4ace->leave($__internal_81da6bea80304aaa8d4aa092fa649321d3dccabb0db8acc1c025b0bbc3ae4ace_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3643698b9a02720094894733753c78361d45158591f6890559b48679d9ab3365 = $this->env->getExtension("native_profiler");
        $__internal_3643698b9a02720094894733753c78361d45158591f6890559b48679d9ab3365->enter($__internal_3643698b9a02720094894733753c78361d45158591f6890559b48679d9ab3365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3643698b9a02720094894733753c78361d45158591f6890559b48679d9ab3365->leave($__internal_3643698b9a02720094894733753c78361d45158591f6890559b48679d9ab3365_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_442ea416ee5050e1dfd796e9244b74a46c1d551ebb4144226d97fe5acc3b9245 = $this->env->getExtension("native_profiler");
        $__internal_442ea416ee5050e1dfd796e9244b74a46c1d551ebb4144226d97fe5acc3b9245->enter($__internal_442ea416ee5050e1dfd796e9244b74a46c1d551ebb4144226d97fe5acc3b9245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_442ea416ee5050e1dfd796e9244b74a46c1d551ebb4144226d97fe5acc3b9245->leave($__internal_442ea416ee5050e1dfd796e9244b74a46c1d551ebb4144226d97fe5acc3b9245_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04d4ddbdf4561a911573dee43a451784272accce80fbe1c484eb5a64f8f2b304 = $this->env->getExtension("native_profiler");
        $__internal_04d4ddbdf4561a911573dee43a451784272accce80fbe1c484eb5a64f8f2b304->enter($__internal_04d4ddbdf4561a911573dee43a451784272accce80fbe1c484eb5a64f8f2b304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_04d4ddbdf4561a911573dee43a451784272accce80fbe1c484eb5a64f8f2b304->leave($__internal_04d4ddbdf4561a911573dee43a451784272accce80fbe1c484eb5a64f8f2b304_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
