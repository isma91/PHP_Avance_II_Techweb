<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8b8cce690e86fb0b8a98fbec9b872e322325c4076ec0d03607ad6d588182991f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0e097ccc678cbfcabacc2627f76aa7c872558a5b1df61dc3ce07af21c043153 = $this->env->getExtension("native_profiler");
        $__internal_b0e097ccc678cbfcabacc2627f76aa7c872558a5b1df61dc3ce07af21c043153->enter($__internal_b0e097ccc678cbfcabacc2627f76aa7c872558a5b1df61dc3ce07af21c043153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0e097ccc678cbfcabacc2627f76aa7c872558a5b1df61dc3ce07af21c043153->leave($__internal_b0e097ccc678cbfcabacc2627f76aa7c872558a5b1df61dc3ce07af21c043153_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6b130bee2e695bbdb77b10803c11ae08c2045d08bf2d4678d19b5c248088f89 = $this->env->getExtension("native_profiler");
        $__internal_d6b130bee2e695bbdb77b10803c11ae08c2045d08bf2d4678d19b5c248088f89->enter($__internal_d6b130bee2e695bbdb77b10803c11ae08c2045d08bf2d4678d19b5c248088f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d6b130bee2e695bbdb77b10803c11ae08c2045d08bf2d4678d19b5c248088f89->leave($__internal_d6b130bee2e695bbdb77b10803c11ae08c2045d08bf2d4678d19b5c248088f89_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_39ed411f7e4b66741846ad01aa34d930733e142f8080c11bfe163e8a49648d73 = $this->env->getExtension("native_profiler");
        $__internal_39ed411f7e4b66741846ad01aa34d930733e142f8080c11bfe163e8a49648d73->enter($__internal_39ed411f7e4b66741846ad01aa34d930733e142f8080c11bfe163e8a49648d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_39ed411f7e4b66741846ad01aa34d930733e142f8080c11bfe163e8a49648d73->leave($__internal_39ed411f7e4b66741846ad01aa34d930733e142f8080c11bfe163e8a49648d73_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_afe8d9c322cfc85d8e6dc117e195a80842408f5e97f921961190304f076f451b = $this->env->getExtension("native_profiler");
        $__internal_afe8d9c322cfc85d8e6dc117e195a80842408f5e97f921961190304f076f451b->enter($__internal_afe8d9c322cfc85d8e6dc117e195a80842408f5e97f921961190304f076f451b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_afe8d9c322cfc85d8e6dc117e195a80842408f5e97f921961190304f076f451b->leave($__internal_afe8d9c322cfc85d8e6dc117e195a80842408f5e97f921961190304f076f451b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
