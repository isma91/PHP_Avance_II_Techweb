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
        $__internal_2461040eff96bddb095313c5b907f1f8efce0fd6464611a928c87547770d2c28 = $this->env->getExtension("native_profiler");
        $__internal_2461040eff96bddb095313c5b907f1f8efce0fd6464611a928c87547770d2c28->enter($__internal_2461040eff96bddb095313c5b907f1f8efce0fd6464611a928c87547770d2c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_2461040eff96bddb095313c5b907f1f8efce0fd6464611a928c87547770d2c28->leave($__internal_2461040eff96bddb095313c5b907f1f8efce0fd6464611a928c87547770d2c28_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b84fbaeb6e8696511b200aadcdb66171de5877ed7917285627cd247e537099e9 = $this->env->getExtension("native_profiler");
        $__internal_b84fbaeb6e8696511b200aadcdb66171de5877ed7917285627cd247e537099e9->enter($__internal_b84fbaeb6e8696511b200aadcdb66171de5877ed7917285627cd247e537099e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b84fbaeb6e8696511b200aadcdb66171de5877ed7917285627cd247e537099e9->leave($__internal_b84fbaeb6e8696511b200aadcdb66171de5877ed7917285627cd247e537099e9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98547a61ee20ffccddbb8c559c2f2305dab95140268b6f8b6d7a4806e3d8eed9 = $this->env->getExtension("native_profiler");
        $__internal_98547a61ee20ffccddbb8c559c2f2305dab95140268b6f8b6d7a4806e3d8eed9->enter($__internal_98547a61ee20ffccddbb8c559c2f2305dab95140268b6f8b6d7a4806e3d8eed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_98547a61ee20ffccddbb8c559c2f2305dab95140268b6f8b6d7a4806e3d8eed9->leave($__internal_98547a61ee20ffccddbb8c559c2f2305dab95140268b6f8b6d7a4806e3d8eed9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_87081aae078d8ffe02d2f05280cb8f1929e0c7a8c49e3982aefddb46ef492882 = $this->env->getExtension("native_profiler");
        $__internal_87081aae078d8ffe02d2f05280cb8f1929e0c7a8c49e3982aefddb46ef492882->enter($__internal_87081aae078d8ffe02d2f05280cb8f1929e0c7a8c49e3982aefddb46ef492882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_87081aae078d8ffe02d2f05280cb8f1929e0c7a8c49e3982aefddb46ef492882->leave($__internal_87081aae078d8ffe02d2f05280cb8f1929e0c7a8c49e3982aefddb46ef492882_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48ff39e74041b121b00fb7dd0d01dd36931b85ea7cd5bf8f02c18758613407c7 = $this->env->getExtension("native_profiler");
        $__internal_48ff39e74041b121b00fb7dd0d01dd36931b85ea7cd5bf8f02c18758613407c7->enter($__internal_48ff39e74041b121b00fb7dd0d01dd36931b85ea7cd5bf8f02c18758613407c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_48ff39e74041b121b00fb7dd0d01dd36931b85ea7cd5bf8f02c18758613407c7->leave($__internal_48ff39e74041b121b00fb7dd0d01dd36931b85ea7cd5bf8f02c18758613407c7_prof);

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
