<?php

/* NMTrelloBundle:Projets:edit.html.twig */
class __TwigTemplate_cef7ddeb0eb1f86c6e7e2d74eaad6d9619ffa3917b47ae5f039dd12cdc914661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NMTrelloBundle:Projets:edit.html.twig", 1);
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
        $__internal_c80f35716e9aaa794570f030e5b30503d861fcf4a272321670b35da01be44345 = $this->env->getExtension("native_profiler");
        $__internal_c80f35716e9aaa794570f030e5b30503d861fcf4a272321670b35da01be44345->enter($__internal_c80f35716e9aaa794570f030e5b30503d861fcf4a272321670b35da01be44345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NMTrelloBundle:Projets:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c80f35716e9aaa794570f030e5b30503d861fcf4a272321670b35da01be44345->leave($__internal_c80f35716e9aaa794570f030e5b30503d861fcf4a272321670b35da01be44345_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_64f047e6b73aeb373f5e6af365f09467b113417b597e3b3b2758b157062a1744 = $this->env->getExtension("native_profiler");
        $__internal_64f047e6b73aeb373f5e6af365f09467b113417b597e3b3b2758b157062a1744->enter($__internal_64f047e6b73aeb373f5e6af365f09467b113417b597e3b3b2758b157062a1744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Projets edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_64f047e6b73aeb373f5e6af365f09467b113417b597e3b3b2758b157062a1744->leave($__internal_64f047e6b73aeb373f5e6af365f09467b113417b597e3b3b2758b157062a1744_prof);

    }

    public function getTemplateName()
    {
        return "NMTrelloBundle:Projets:edit.html.twig";
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
/*     <h1>Projets edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('projets') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
