<?php

/* NMTrelloBundle:taches:new.html.twig */
class __TwigTemplate_26aa6b4e184a81a494d249d5c2bd07b0b6c094bdd2ccf170906d4caf0e220881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NMTrelloBundle:taches:new.html.twig", 1);
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
        $__internal_045fc669c703f98bf91af693bfc049afc112982f775c5c0870c5eb2ea6529391 = $this->env->getExtension("native_profiler");
        $__internal_045fc669c703f98bf91af693bfc049afc112982f775c5c0870c5eb2ea6529391->enter($__internal_045fc669c703f98bf91af693bfc049afc112982f775c5c0870c5eb2ea6529391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NMTrelloBundle:taches:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_045fc669c703f98bf91af693bfc049afc112982f775c5c0870c5eb2ea6529391->leave($__internal_045fc669c703f98bf91af693bfc049afc112982f775c5c0870c5eb2ea6529391_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_325c10ddd5770373ec7db4a6147887226a4ec9d296401a278922435602e0f6e2 = $this->env->getExtension("native_profiler");
        $__internal_325c10ddd5770373ec7db4a6147887226a4ec9d296401a278922435602e0f6e2->enter($__internal_325c10ddd5770373ec7db4a6147887226a4ec9d296401a278922435602e0f6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>taches creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_325c10ddd5770373ec7db4a6147887226a4ec9d296401a278922435602e0f6e2->leave($__internal_325c10ddd5770373ec7db4a6147887226a4ec9d296401a278922435602e0f6e2_prof);

    }

    public function getTemplateName()
    {
        return "NMTrelloBundle:taches:new.html.twig";
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
/*     <h1>taches creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('taches') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
