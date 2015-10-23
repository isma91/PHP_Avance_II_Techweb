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
        $__internal_93413d5749dfde0f7c65902fb14bb12d7512e1659216f12b46e4f89a2f812c52 = $this->env->getExtension("native_profiler");
        $__internal_93413d5749dfde0f7c65902fb14bb12d7512e1659216f12b46e4f89a2f812c52->enter($__internal_93413d5749dfde0f7c65902fb14bb12d7512e1659216f12b46e4f89a2f812c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93413d5749dfde0f7c65902fb14bb12d7512e1659216f12b46e4f89a2f812c52->leave($__internal_93413d5749dfde0f7c65902fb14bb12d7512e1659216f12b46e4f89a2f812c52_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fdfbf24fa9fa1f707c9de5d0074c2c9c80c02dcda0a885cca08cfc43c96b49d6 = $this->env->getExtension("native_profiler");
        $__internal_fdfbf24fa9fa1f707c9de5d0074c2c9c80c02dcda0a885cca08cfc43c96b49d6->enter($__internal_fdfbf24fa9fa1f707c9de5d0074c2c9c80c02dcda0a885cca08cfc43c96b49d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fdfbf24fa9fa1f707c9de5d0074c2c9c80c02dcda0a885cca08cfc43c96b49d6->leave($__internal_fdfbf24fa9fa1f707c9de5d0074c2c9c80c02dcda0a885cca08cfc43c96b49d6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce08002a9b4943147cca7e49a029bbc006a65ff91cc5aa2e4c390855e61d6704 = $this->env->getExtension("native_profiler");
        $__internal_ce08002a9b4943147cca7e49a029bbc006a65ff91cc5aa2e4c390855e61d6704->enter($__internal_ce08002a9b4943147cca7e49a029bbc006a65ff91cc5aa2e4c390855e61d6704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ce08002a9b4943147cca7e49a029bbc006a65ff91cc5aa2e4c390855e61d6704->leave($__internal_ce08002a9b4943147cca7e49a029bbc006a65ff91cc5aa2e4c390855e61d6704_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_59ef89d30ecead5517965a56a94f1939dd432f06964f8a42936e9257d51c47e9 = $this->env->getExtension("native_profiler");
        $__internal_59ef89d30ecead5517965a56a94f1939dd432f06964f8a42936e9257d51c47e9->enter($__internal_59ef89d30ecead5517965a56a94f1939dd432f06964f8a42936e9257d51c47e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_59ef89d30ecead5517965a56a94f1939dd432f06964f8a42936e9257d51c47e9->leave($__internal_59ef89d30ecead5517965a56a94f1939dd432f06964f8a42936e9257d51c47e9_prof);

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
