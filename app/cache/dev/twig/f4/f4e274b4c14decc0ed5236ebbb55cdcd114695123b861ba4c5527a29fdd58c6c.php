<?php

/* NMTrelloBundle:Projets:new.html.twig */
class __TwigTemplate_21683568fd39dbf28e9e79ddae770fdf94797c3931485d75d9c8abc6aebc1798 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NMTrelloBundle:Projets:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54c83d131b44a8a2c084e7863a76cbe845eaa9eb73f3b44ba2d5ebc5b6febe76 = $this->env->getExtension("native_profiler");
        $__internal_54c83d131b44a8a2c084e7863a76cbe845eaa9eb73f3b44ba2d5ebc5b6febe76->enter($__internal_54c83d131b44a8a2c084e7863a76cbe845eaa9eb73f3b44ba2d5ebc5b6febe76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NMTrelloBundle:Projets:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54c83d131b44a8a2c084e7863a76cbe845eaa9eb73f3b44ba2d5ebc5b6febe76->leave($__internal_54c83d131b44a8a2c084e7863a76cbe845eaa9eb73f3b44ba2d5ebc5b6febe76_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cad686c775910d3b257a15ff4fa09cc6f9d00680a92ee2a18fc76fc21dc16282 = $this->env->getExtension("native_profiler");
        $__internal_cad686c775910d3b257a15ff4fa09cc6f9d00680a92ee2a18fc76fc21dc16282->enter($__internal_cad686c775910d3b257a15ff4fa09cc6f9d00680a92ee2a18fc76fc21dc16282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Projets creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("projets");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_cad686c775910d3b257a15ff4fa09cc6f9d00680a92ee2a18fc76fc21dc16282->leave($__internal_cad686c775910d3b257a15ff4fa09cc6f9d00680a92ee2a18fc76fc21dc16282_prof);

    }

    public function getTemplateName()
    {
        return "NMTrelloBundle:Projets:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Projets creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('projets') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
