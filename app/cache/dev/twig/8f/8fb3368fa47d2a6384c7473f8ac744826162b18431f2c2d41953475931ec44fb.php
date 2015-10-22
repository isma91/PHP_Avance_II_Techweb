<?php

/* NMTrelloBundle:Projets:show.html.twig */
class __TwigTemplate_d60b0217ef5c787eac630a2441c8a1fb6a1158e2aa5053a97315ed8600319c21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NMTrelloBundle:Projets:show.html.twig", 1);
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
        $__internal_fcb24dac7bd3304e7b2bffc2b6b68592dea5bd648cf355f3e36370f6c8d8483a = $this->env->getExtension("native_profiler");
        $__internal_fcb24dac7bd3304e7b2bffc2b6b68592dea5bd648cf355f3e36370f6c8d8483a->enter($__internal_fcb24dac7bd3304e7b2bffc2b6b68592dea5bd648cf355f3e36370f6c8d8483a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NMTrelloBundle:Projets:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcb24dac7bd3304e7b2bffc2b6b68592dea5bd648cf355f3e36370f6c8d8483a->leave($__internal_fcb24dac7bd3304e7b2bffc2b6b68592dea5bd648cf355f3e36370f6c8d8483a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b13fee497dcdf87355b1e140302807ed0f68897019fee79d044af121321f342c = $this->env->getExtension("native_profiler");
        $__internal_b13fee497dcdf87355b1e140302807ed0f68897019fee79d044af121321f342c->enter($__internal_b13fee497dcdf87355b1e140302807ed0f68897019fee79d044af121321f342c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Projets</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Membre</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "membre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Groupe</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "groupe", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("projets");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projets_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_b13fee497dcdf87355b1e140302807ed0f68897019fee79d044af121321f342c->leave($__internal_b13fee497dcdf87355b1e140302807ed0f68897019fee79d044af121321f342c_prof);

    }

    public function getTemplateName()
    {
        return "NMTrelloBundle:Projets:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 42,  94 => 38,  86 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Projets</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ entity.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Date</th>*/
/*                 <td>{{ entity.date|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Membre</th>*/
/*                 <td>{{ entity.membre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Groupe</th>*/
/*                 <td>{{ entity.groupe }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('projets') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('projets_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
