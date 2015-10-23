<?php

/* NMTrelloBundle:taches:edit.html.twig */
class __TwigTemplate_78f1f533a8804a7ca01bec4dbb356d0590884c09ef96d5c283fd7a45665dcb70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NMTrelloBundle:taches:edit.html.twig", 1);
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
        $__internal_f9e8abb5a915435696e3acd144dd3833ebdd66857f6a28d28efedb9efc3f7f5a = $this->env->getExtension("native_profiler");
        $__internal_f9e8abb5a915435696e3acd144dd3833ebdd66857f6a28d28efedb9efc3f7f5a->enter($__internal_f9e8abb5a915435696e3acd144dd3833ebdd66857f6a28d28efedb9efc3f7f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NMTrelloBundle:taches:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9e8abb5a915435696e3acd144dd3833ebdd66857f6a28d28efedb9efc3f7f5a->leave($__internal_f9e8abb5a915435696e3acd144dd3833ebdd66857f6a28d28efedb9efc3f7f5a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a9806f6d2d5ef827e98d3aa7c8ec4c9335a82b7e6e48d80689c38e790e8ff8b = $this->env->getExtension("native_profiler");
        $__internal_6a9806f6d2d5ef827e98d3aa7c8ec4c9335a82b7e6e48d80689c38e790e8ff8b->enter($__internal_6a9806f6d2d5ef827e98d3aa7c8ec4c9335a82b7e6e48d80689c38e790e8ff8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>taches edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("taches");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_6a9806f6d2d5ef827e98d3aa7c8ec4c9335a82b7e6e48d80689c38e790e8ff8b->leave($__internal_6a9806f6d2d5ef827e98d3aa7c8ec4c9335a82b7e6e48d80689c38e790e8ff8b_prof);

    }

    public function getTemplateName()
    {
        return "NMTrelloBundle:taches:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>taches edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('taches') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
