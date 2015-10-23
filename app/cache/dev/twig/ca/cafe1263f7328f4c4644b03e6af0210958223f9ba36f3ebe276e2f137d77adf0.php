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
        $__internal_8398eef4e4a9f25dfbcbe91c4d1e8b68e3b7429baf2fb5961f530d41ca6a1531 = $this->env->getExtension("native_profiler");
        $__internal_8398eef4e4a9f25dfbcbe91c4d1e8b68e3b7429baf2fb5961f530d41ca6a1531->enter($__internal_8398eef4e4a9f25dfbcbe91c4d1e8b68e3b7429baf2fb5961f530d41ca6a1531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8398eef4e4a9f25dfbcbe91c4d1e8b68e3b7429baf2fb5961f530d41ca6a1531->leave($__internal_8398eef4e4a9f25dfbcbe91c4d1e8b68e3b7429baf2fb5961f530d41ca6a1531_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e18974e8e115a999ea9c5ee29e16ea35094eaf59338a1d77eee7d604e3cba8fd = $this->env->getExtension("native_profiler");
        $__internal_e18974e8e115a999ea9c5ee29e16ea35094eaf59338a1d77eee7d604e3cba8fd->enter($__internal_e18974e8e115a999ea9c5ee29e16ea35094eaf59338a1d77eee7d604e3cba8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e18974e8e115a999ea9c5ee29e16ea35094eaf59338a1d77eee7d604e3cba8fd->leave($__internal_e18974e8e115a999ea9c5ee29e16ea35094eaf59338a1d77eee7d604e3cba8fd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7a7406723794928dce43d1fdab95f329831ebe63fe3d9d4292f9f73d530c41f = $this->env->getExtension("native_profiler");
        $__internal_f7a7406723794928dce43d1fdab95f329831ebe63fe3d9d4292f9f73d530c41f->enter($__internal_f7a7406723794928dce43d1fdab95f329831ebe63fe3d9d4292f9f73d530c41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f7a7406723794928dce43d1fdab95f329831ebe63fe3d9d4292f9f73d530c41f->leave($__internal_f7a7406723794928dce43d1fdab95f329831ebe63fe3d9d4292f9f73d530c41f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d8635d9e3d84bbff58829e7ed8967663546190c863d76d46c955e857aa4f40a = $this->env->getExtension("native_profiler");
        $__internal_9d8635d9e3d84bbff58829e7ed8967663546190c863d76d46c955e857aa4f40a->enter($__internal_9d8635d9e3d84bbff58829e7ed8967663546190c863d76d46c955e857aa4f40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9d8635d9e3d84bbff58829e7ed8967663546190c863d76d46c955e857aa4f40a->leave($__internal_9d8635d9e3d84bbff58829e7ed8967663546190c863d76d46c955e857aa4f40a_prof);

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
