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
        $__internal_254fc0e4c6611696bb5fdb2dc203bed977ac7c1ad2b96763a2bb534ee3cd8913 = $this->env->getExtension("native_profiler");
        $__internal_254fc0e4c6611696bb5fdb2dc203bed977ac7c1ad2b96763a2bb534ee3cd8913->enter($__internal_254fc0e4c6611696bb5fdb2dc203bed977ac7c1ad2b96763a2bb534ee3cd8913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_254fc0e4c6611696bb5fdb2dc203bed977ac7c1ad2b96763a2bb534ee3cd8913->leave($__internal_254fc0e4c6611696bb5fdb2dc203bed977ac7c1ad2b96763a2bb534ee3cd8913_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cabaa00aa6bdfc81924a41fa7624131f357825db2bc0d5d404f1315096680d8d = $this->env->getExtension("native_profiler");
        $__internal_cabaa00aa6bdfc81924a41fa7624131f357825db2bc0d5d404f1315096680d8d->enter($__internal_cabaa00aa6bdfc81924a41fa7624131f357825db2bc0d5d404f1315096680d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cabaa00aa6bdfc81924a41fa7624131f357825db2bc0d5d404f1315096680d8d->leave($__internal_cabaa00aa6bdfc81924a41fa7624131f357825db2bc0d5d404f1315096680d8d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6deb6b6a6c682078550aff5ffae967dcb07073436517b844cb486b7ebaad0648 = $this->env->getExtension("native_profiler");
        $__internal_6deb6b6a6c682078550aff5ffae967dcb07073436517b844cb486b7ebaad0648->enter($__internal_6deb6b6a6c682078550aff5ffae967dcb07073436517b844cb486b7ebaad0648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6deb6b6a6c682078550aff5ffae967dcb07073436517b844cb486b7ebaad0648->leave($__internal_6deb6b6a6c682078550aff5ffae967dcb07073436517b844cb486b7ebaad0648_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_87665f6ae6c9264a5221472ddcc12a0beacdd8f3d6a2e4c6ef0c1139201d166c = $this->env->getExtension("native_profiler");
        $__internal_87665f6ae6c9264a5221472ddcc12a0beacdd8f3d6a2e4c6ef0c1139201d166c->enter($__internal_87665f6ae6c9264a5221472ddcc12a0beacdd8f3d6a2e4c6ef0c1139201d166c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_87665f6ae6c9264a5221472ddcc12a0beacdd8f3d6a2e4c6ef0c1139201d166c->leave($__internal_87665f6ae6c9264a5221472ddcc12a0beacdd8f3d6a2e4c6ef0c1139201d166c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df1f02f697dc7225d6fba3a047cdb45afc0fbbfc7263ba6745fbe65f707c5d7d = $this->env->getExtension("native_profiler");
        $__internal_df1f02f697dc7225d6fba3a047cdb45afc0fbbfc7263ba6745fbe65f707c5d7d->enter($__internal_df1f02f697dc7225d6fba3a047cdb45afc0fbbfc7263ba6745fbe65f707c5d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_df1f02f697dc7225d6fba3a047cdb45afc0fbbfc7263ba6745fbe65f707c5d7d->leave($__internal_df1f02f697dc7225d6fba3a047cdb45afc0fbbfc7263ba6745fbe65f707c5d7d_prof);

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
