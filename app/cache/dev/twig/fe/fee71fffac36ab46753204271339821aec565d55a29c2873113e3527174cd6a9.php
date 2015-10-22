<?php

/* NMTrelloBundle:taches:show.html.twig */
class __TwigTemplate_faa73c651dbaf7bdbc5303d27bd69e92c05e8324bae98480830e79bb7395d405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NMTrelloBundle:taches:show.html.twig", 1);
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
        $__internal_c8f60231dd9d2fd6842bd65bec5fd0b9a12062a2fb6d065faaf1c46ede20c7cb = $this->env->getExtension("native_profiler");
        $__internal_c8f60231dd9d2fd6842bd65bec5fd0b9a12062a2fb6d065faaf1c46ede20c7cb->enter($__internal_c8f60231dd9d2fd6842bd65bec5fd0b9a12062a2fb6d065faaf1c46ede20c7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NMTrelloBundle:taches:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8f60231dd9d2fd6842bd65bec5fd0b9a12062a2fb6d065faaf1c46ede20c7cb->leave($__internal_c8f60231dd9d2fd6842bd65bec5fd0b9a12062a2fb6d065faaf1c46ede20c7cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bb0c4888f2055ca999627d8ca025a7277ec69c132762636e66e458b893ae32b = $this->env->getExtension("native_profiler");
        $__internal_0bb0c4888f2055ca999627d8ca025a7277ec69c132762636e66e458b893ae32b->enter($__internal_0bb0c4888f2055ca999627d8ca025a7277ec69c132762636e66e458b893ae32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>taches</h1>

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
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etiquette</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etiquette", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datelimite</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateLimite", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cheklist</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cheklist", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("taches");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("taches_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_0bb0c4888f2055ca999627d8ca025a7277ec69c132762636e66e458b893ae32b->leave($__internal_0bb0c4888f2055ca999627d8ca025a7277ec69c132762636e66e458b893ae32b_prof);

    }

    public function getTemplateName()
    {
        return "NMTrelloBundle:taches:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 46,  101 => 42,  93 => 37,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>taches</h1>*/
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
/*                 <th>Description</th>*/
/*                 <td>{{ entity.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Etiquette</th>*/
/*                 <td>{{ entity.etiquette }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datelimite</th>*/
/*                 <td>{{ entity.dateLimite|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cheklist</th>*/
/*                 <td>{{ entity.cheklist }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('taches') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('taches_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
