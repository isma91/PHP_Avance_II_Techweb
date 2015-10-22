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
        $__internal_5e4d474206227fb0a6dd51160e5cad08d679cb7122405725a0eecaacb068b144 = $this->env->getExtension("native_profiler");
        $__internal_5e4d474206227fb0a6dd51160e5cad08d679cb7122405725a0eecaacb068b144->enter($__internal_5e4d474206227fb0a6dd51160e5cad08d679cb7122405725a0eecaacb068b144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e4d474206227fb0a6dd51160e5cad08d679cb7122405725a0eecaacb068b144->leave($__internal_5e4d474206227fb0a6dd51160e5cad08d679cb7122405725a0eecaacb068b144_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a79784cb5ee2b8bf3e02be9e35b9da457ef2d1a137525943bc697e4ef7f3a55 = $this->env->getExtension("native_profiler");
        $__internal_2a79784cb5ee2b8bf3e02be9e35b9da457ef2d1a137525943bc697e4ef7f3a55->enter($__internal_2a79784cb5ee2b8bf3e02be9e35b9da457ef2d1a137525943bc697e4ef7f3a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2a79784cb5ee2b8bf3e02be9e35b9da457ef2d1a137525943bc697e4ef7f3a55->leave($__internal_2a79784cb5ee2b8bf3e02be9e35b9da457ef2d1a137525943bc697e4ef7f3a55_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f88758014030474b5bb5f5025dfb064a2d20a224fabb85d967c2ac046b31c991 = $this->env->getExtension("native_profiler");
        $__internal_f88758014030474b5bb5f5025dfb064a2d20a224fabb85d967c2ac046b31c991->enter($__internal_f88758014030474b5bb5f5025dfb064a2d20a224fabb85d967c2ac046b31c991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f88758014030474b5bb5f5025dfb064a2d20a224fabb85d967c2ac046b31c991->leave($__internal_f88758014030474b5bb5f5025dfb064a2d20a224fabb85d967c2ac046b31c991_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7f626fb179a335874109caa66d1d62efbafdd1a274d493897ddb4bbda329895 = $this->env->getExtension("native_profiler");
        $__internal_e7f626fb179a335874109caa66d1d62efbafdd1a274d493897ddb4bbda329895->enter($__internal_e7f626fb179a335874109caa66d1d62efbafdd1a274d493897ddb4bbda329895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e7f626fb179a335874109caa66d1d62efbafdd1a274d493897ddb4bbda329895->leave($__internal_e7f626fb179a335874109caa66d1d62efbafdd1a274d493897ddb4bbda329895_prof);

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
