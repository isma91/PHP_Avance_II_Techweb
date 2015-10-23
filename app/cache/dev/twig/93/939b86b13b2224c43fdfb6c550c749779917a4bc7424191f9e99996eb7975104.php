<?php

/* NMTrelloBundle:taches:index.html.twig */
class __TwigTemplate_b38e1b31ead35ab9f6a68f9188c3409bc9cbe9290b3fc22fa751894c851ca820 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NMTrelloBundle:taches:index.html.twig", 1);
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
        $__internal_29c1ced205d3d7a60354d773cb342438b7a1cd00b906a31b5d46d84345f69f23 = $this->env->getExtension("native_profiler");
        $__internal_29c1ced205d3d7a60354d773cb342438b7a1cd00b906a31b5d46d84345f69f23->enter($__internal_29c1ced205d3d7a60354d773cb342438b7a1cd00b906a31b5d46d84345f69f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NMTrelloBundle:taches:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29c1ced205d3d7a60354d773cb342438b7a1cd00b906a31b5d46d84345f69f23->leave($__internal_29c1ced205d3d7a60354d773cb342438b7a1cd00b906a31b5d46d84345f69f23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99009bafef871081eae941d35de0da0cb291e8d59f682370d5b10d56c84a42d4 = $this->env->getExtension("native_profiler");
        $__internal_99009bafef871081eae941d35de0da0cb291e8d59f682370d5b10d56c84a42d4->enter($__internal_99009bafef871081eae941d35de0da0cb291e8d59f682370d5b10d56c84a42d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>taches list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Etiquette</th>
                <th>Datelimite</th>
                <th>Cheklist</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("taches_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etiquette", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["entity"], "dateLimite", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateLimite", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cheklist", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("taches_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("taches_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("taches_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_99009bafef871081eae941d35de0da0cb291e8d59f682370d5b10d56c84a42d4->leave($__internal_99009bafef871081eae941d35de0da0cb291e8d59f682370d5b10d56c84a42d4_prof);

    }

    public function getTemplateName()
    {
        return "NMTrelloBundle:taches:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  113 => 39,  101 => 33,  95 => 30,  88 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>taches list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Description</th>*/
/*                 <th>Etiquette</th>*/
/*                 <th>Datelimite</th>*/
/*                 <th>Cheklist</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('taches_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.nom }}</td>*/
/*                 <td>{{ entity.description }}</td>*/
/*                 <td>{{ entity.etiquette }}</td>*/
/*                 <td>{% if entity.dateLimite %}{{ entity.dateLimite|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ entity.cheklist }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('taches_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('taches_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('taches_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
