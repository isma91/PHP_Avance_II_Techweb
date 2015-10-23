<?php

/* form_div_layout.html.twig */
class __TwigTemplate_93ecefab2dd5d3cd9df77f4015a3d7841086f6186164508e87867c727935967e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7add53c8ddceadc3b6fe834c73fca301219dac1d1abb156589b98a892ef48c0e = $this->env->getExtension("native_profiler");
        $__internal_7add53c8ddceadc3b6fe834c73fca301219dac1d1abb156589b98a892ef48c0e->enter($__internal_7add53c8ddceadc3b6fe834c73fca301219dac1d1abb156589b98a892ef48c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 88
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 92
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 96
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 109
        $this->displayBlock('date_widget', $context, $blocks);
        // line 123
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        $this->displayBlock('number_widget', $context, $blocks);
        // line 140
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 145
        $this->displayBlock('money_widget', $context, $blocks);
        // line 149
        $this->displayBlock('url_widget', $context, $blocks);
        // line 154
        $this->displayBlock('search_widget', $context, $blocks);
        // line 159
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 164
        $this->displayBlock('password_widget', $context, $blocks);
        // line 169
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 174
        $this->displayBlock('email_widget', $context, $blocks);
        // line 179
        $this->displayBlock('button_widget', $context, $blocks);
        // line 193
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 198
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 205
        $this->displayBlock('form_label', $context, $blocks);
        // line 227
        $this->displayBlock('button_label', $context, $blocks);
        // line 231
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 239
        $this->displayBlock('form_row', $context, $blocks);
        // line 247
        $this->displayBlock('button_row', $context, $blocks);
        // line 253
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 259
        $this->displayBlock('form', $context, $blocks);
        // line 265
        $this->displayBlock('form_start', $context, $blocks);
        // line 278
        $this->displayBlock('form_end', $context, $blocks);
        // line 285
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 289
        $this->displayBlock('form_errors', $context, $blocks);
        // line 299
        $this->displayBlock('form_rest', $context, $blocks);
        // line 306
        echo "
";
        // line 309
        $this->displayBlock('form_rows', $context, $blocks);
        // line 315
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 332
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 346
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 360
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_7add53c8ddceadc3b6fe834c73fca301219dac1d1abb156589b98a892ef48c0e->leave($__internal_7add53c8ddceadc3b6fe834c73fca301219dac1d1abb156589b98a892ef48c0e_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_b5627ba6b4f2b24bd4865209a376fd74435009269488e291de084c48b363a3bd = $this->env->getExtension("native_profiler");
        $__internal_b5627ba6b4f2b24bd4865209a376fd74435009269488e291de084c48b363a3bd->enter($__internal_b5627ba6b4f2b24bd4865209a376fd74435009269488e291de084c48b363a3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_b5627ba6b4f2b24bd4865209a376fd74435009269488e291de084c48b363a3bd->leave($__internal_b5627ba6b4f2b24bd4865209a376fd74435009269488e291de084c48b363a3bd_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_09cba5871e8352bb0051c591c34c2e25b6cb41869349dffa055c6816ed0d2709 = $this->env->getExtension("native_profiler");
        $__internal_09cba5871e8352bb0051c591c34c2e25b6cb41869349dffa055c6816ed0d2709->enter($__internal_09cba5871e8352bb0051c591c34c2e25b6cb41869349dffa055c6816ed0d2709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_09cba5871e8352bb0051c591c34c2e25b6cb41869349dffa055c6816ed0d2709->leave($__internal_09cba5871e8352bb0051c591c34c2e25b6cb41869349dffa055c6816ed0d2709_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_ea0ffa2a1894792337c1b9a646f425d78b336d216da4000ae788273e3c12f381 = $this->env->getExtension("native_profiler");
        $__internal_ea0ffa2a1894792337c1b9a646f425d78b336d216da4000ae788273e3c12f381->enter($__internal_ea0ffa2a1894792337c1b9a646f425d78b336d216da4000ae788273e3c12f381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_ea0ffa2a1894792337c1b9a646f425d78b336d216da4000ae788273e3c12f381->leave($__internal_ea0ffa2a1894792337c1b9a646f425d78b336d216da4000ae788273e3c12f381_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_ebb25bcfe84b1d12711737ceee6f88e1014e17b5291056fcda4105cc924f6e6c = $this->env->getExtension("native_profiler");
        $__internal_ebb25bcfe84b1d12711737ceee6f88e1014e17b5291056fcda4105cc924f6e6c->enter($__internal_ebb25bcfe84b1d12711737ceee6f88e1014e17b5291056fcda4105cc924f6e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_ebb25bcfe84b1d12711737ceee6f88e1014e17b5291056fcda4105cc924f6e6c->leave($__internal_ebb25bcfe84b1d12711737ceee6f88e1014e17b5291056fcda4105cc924f6e6c_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_0f8bc26765e0ed278d15c68b76595b1939f3e0bcdde5295dcd445a8cf5d6c70e = $this->env->getExtension("native_profiler");
        $__internal_0f8bc26765e0ed278d15c68b76595b1939f3e0bcdde5295dcd445a8cf5d6c70e->enter($__internal_0f8bc26765e0ed278d15c68b76595b1939f3e0bcdde5295dcd445a8cf5d6c70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_0f8bc26765e0ed278d15c68b76595b1939f3e0bcdde5295dcd445a8cf5d6c70e->leave($__internal_0f8bc26765e0ed278d15c68b76595b1939f3e0bcdde5295dcd445a8cf5d6c70e_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_4aa7c69fd18063d99dd6aa466b0297c753cf461da046252d84bda570c71ebb41 = $this->env->getExtension("native_profiler");
        $__internal_4aa7c69fd18063d99dd6aa466b0297c753cf461da046252d84bda570c71ebb41->enter($__internal_4aa7c69fd18063d99dd6aa466b0297c753cf461da046252d84bda570c71ebb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_4aa7c69fd18063d99dd6aa466b0297c753cf461da046252d84bda570c71ebb41->leave($__internal_4aa7c69fd18063d99dd6aa466b0297c753cf461da046252d84bda570c71ebb41_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7e31db16f082e27feadf22fd8e5d56f4a9091126bdffaff41ae5c346ec8564da = $this->env->getExtension("native_profiler");
        $__internal_7e31db16f082e27feadf22fd8e5d56f4a9091126bdffaff41ae5c346ec8564da->enter($__internal_7e31db16f082e27feadf22fd8e5d56f4a9091126bdffaff41ae5c346ec8564da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_7e31db16f082e27feadf22fd8e5d56f4a9091126bdffaff41ae5c346ec8564da->leave($__internal_7e31db16f082e27feadf22fd8e5d56f4a9091126bdffaff41ae5c346ec8564da_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_aea80516e2b2ed5f6b8890d162a476b8a7744c53140fe46a9dc02b311262d6c5 = $this->env->getExtension("native_profiler");
        $__internal_aea80516e2b2ed5f6b8890d162a476b8a7744c53140fe46a9dc02b311262d6c5->enter($__internal_aea80516e2b2ed5f6b8890d162a476b8a7744c53140fe46a9dc02b311262d6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_aea80516e2b2ed5f6b8890d162a476b8a7744c53140fe46a9dc02b311262d6c5->leave($__internal_aea80516e2b2ed5f6b8890d162a476b8a7744c53140fe46a9dc02b311262d6c5_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_b00924340f576e0d8486f1288f534a0970d2756fba3424c782460b34b4ede15e = $this->env->getExtension("native_profiler");
        $__internal_b00924340f576e0d8486f1288f534a0970d2756fba3424c782460b34b4ede15e->enter($__internal_b00924340f576e0d8486f1288f534a0970d2756fba3424c782460b34b4ede15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                // line 83
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b00924340f576e0d8486f1288f534a0970d2756fba3424c782460b34b4ede15e->leave($__internal_b00924340f576e0d8486f1288f534a0970d2756fba3424c782460b34b4ede15e_prof);

    }

    // line 88
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_365cd8b23f29f93ab4b58974136d7d8a418cc5593f10a4bb315b1cb535c70408 = $this->env->getExtension("native_profiler");
        $__internal_365cd8b23f29f93ab4b58974136d7d8a418cc5593f10a4bb315b1cb535c70408->enter($__internal_365cd8b23f29f93ab4b58974136d7d8a418cc5593f10a4bb315b1cb535c70408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 89
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_365cd8b23f29f93ab4b58974136d7d8a418cc5593f10a4bb315b1cb535c70408->leave($__internal_365cd8b23f29f93ab4b58974136d7d8a418cc5593f10a4bb315b1cb535c70408_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_2cb9a159b0ae88db0758a1a83b7acc7b0aa6142464fb6370fd98816f6d647bff = $this->env->getExtension("native_profiler");
        $__internal_2cb9a159b0ae88db0758a1a83b7acc7b0aa6142464fb6370fd98816f6d647bff->enter($__internal_2cb9a159b0ae88db0758a1a83b7acc7b0aa6142464fb6370fd98816f6d647bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_2cb9a159b0ae88db0758a1a83b7acc7b0aa6142464fb6370fd98816f6d647bff->leave($__internal_2cb9a159b0ae88db0758a1a83b7acc7b0aa6142464fb6370fd98816f6d647bff_prof);

    }

    // line 96
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_a32d6c47d5f82eb3342179af30723a56ae6f5bfdb6d4167b72c45f9ef9868420 = $this->env->getExtension("native_profiler");
        $__internal_a32d6c47d5f82eb3342179af30723a56ae6f5bfdb6d4167b72c45f9ef9868420->enter($__internal_a32d6c47d5f82eb3342179af30723a56ae6f5bfdb6d4167b72c45f9ef9868420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 97
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 98
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 105
            echo "</div>";
        }
        
        $__internal_a32d6c47d5f82eb3342179af30723a56ae6f5bfdb6d4167b72c45f9ef9868420->leave($__internal_a32d6c47d5f82eb3342179af30723a56ae6f5bfdb6d4167b72c45f9ef9868420_prof);

    }

    // line 109
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_8a5ff6de567ae2aa85fa46578c802897f06766b624411f8d65fb7312d2e94baf = $this->env->getExtension("native_profiler");
        $__internal_8a5ff6de567ae2aa85fa46578c802897f06766b624411f8d65fb7312d2e94baf->enter($__internal_8a5ff6de567ae2aa85fa46578c802897f06766b624411f8d65fb7312d2e94baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 110
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 115
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 116
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 117
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 119
            echo "</div>";
        }
        
        $__internal_8a5ff6de567ae2aa85fa46578c802897f06766b624411f8d65fb7312d2e94baf->leave($__internal_8a5ff6de567ae2aa85fa46578c802897f06766b624411f8d65fb7312d2e94baf_prof);

    }

    // line 123
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_83c097103fb84e978eea1646eca7416151348e9c98eca764dbdd7779d2ce07c3 = $this->env->getExtension("native_profiler");
        $__internal_83c097103fb84e978eea1646eca7416151348e9c98eca764dbdd7779d2ce07c3->enter($__internal_83c097103fb84e978eea1646eca7416151348e9c98eca764dbdd7779d2ce07c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 124
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 125
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 127
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 128
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 130
            echo "        </div>";
        }
        
        $__internal_83c097103fb84e978eea1646eca7416151348e9c98eca764dbdd7779d2ce07c3->leave($__internal_83c097103fb84e978eea1646eca7416151348e9c98eca764dbdd7779d2ce07c3_prof);

    }

    // line 134
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_325f7a34929c97c89253690e10ba96652652d7751c69ec42b3f2602d11bfcb72 = $this->env->getExtension("native_profiler");
        $__internal_325f7a34929c97c89253690e10ba96652652d7751c69ec42b3f2602d11bfcb72->enter($__internal_325f7a34929c97c89253690e10ba96652652d7751c69ec42b3f2602d11bfcb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 136
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 137
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_325f7a34929c97c89253690e10ba96652652d7751c69ec42b3f2602d11bfcb72->leave($__internal_325f7a34929c97c89253690e10ba96652652d7751c69ec42b3f2602d11bfcb72_prof);

    }

    // line 140
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_0f6b09c374a29b6600263217bc8f64616aea38c973414341a6b98c3735a4acb1 = $this->env->getExtension("native_profiler");
        $__internal_0f6b09c374a29b6600263217bc8f64616aea38c973414341a6b98c3735a4acb1->enter($__internal_0f6b09c374a29b6600263217bc8f64616aea38c973414341a6b98c3735a4acb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 141
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 142
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0f6b09c374a29b6600263217bc8f64616aea38c973414341a6b98c3735a4acb1->leave($__internal_0f6b09c374a29b6600263217bc8f64616aea38c973414341a6b98c3735a4acb1_prof);

    }

    // line 145
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_6632c0401d53182fd0cdc00c8b8829c1f8fbf0cbd396715ab18ed65997708762 = $this->env->getExtension("native_profiler");
        $__internal_6632c0401d53182fd0cdc00c8b8829c1f8fbf0cbd396715ab18ed65997708762->enter($__internal_6632c0401d53182fd0cdc00c8b8829c1f8fbf0cbd396715ab18ed65997708762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 146
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_6632c0401d53182fd0cdc00c8b8829c1f8fbf0cbd396715ab18ed65997708762->leave($__internal_6632c0401d53182fd0cdc00c8b8829c1f8fbf0cbd396715ab18ed65997708762_prof);

    }

    // line 149
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_4eb951d1e8c46de73a5869e4ffb9cff8c9405a07eda9a12194043ff2b74ffcf5 = $this->env->getExtension("native_profiler");
        $__internal_4eb951d1e8c46de73a5869e4ffb9cff8c9405a07eda9a12194043ff2b74ffcf5->enter($__internal_4eb951d1e8c46de73a5869e4ffb9cff8c9405a07eda9a12194043ff2b74ffcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 150
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 151
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4eb951d1e8c46de73a5869e4ffb9cff8c9405a07eda9a12194043ff2b74ffcf5->leave($__internal_4eb951d1e8c46de73a5869e4ffb9cff8c9405a07eda9a12194043ff2b74ffcf5_prof);

    }

    // line 154
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_4e4ac13132436ccf7c95d2f75250c6d60188d6b2b910cf1c68376304e3c86970 = $this->env->getExtension("native_profiler");
        $__internal_4e4ac13132436ccf7c95d2f75250c6d60188d6b2b910cf1c68376304e3c86970->enter($__internal_4e4ac13132436ccf7c95d2f75250c6d60188d6b2b910cf1c68376304e3c86970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 155
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 156
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4e4ac13132436ccf7c95d2f75250c6d60188d6b2b910cf1c68376304e3c86970->leave($__internal_4e4ac13132436ccf7c95d2f75250c6d60188d6b2b910cf1c68376304e3c86970_prof);

    }

    // line 159
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_62ddb756b0a2c27828968604599f843fb5f0572598449edb5ce93f2fe320bc01 = $this->env->getExtension("native_profiler");
        $__internal_62ddb756b0a2c27828968604599f843fb5f0572598449edb5ce93f2fe320bc01->enter($__internal_62ddb756b0a2c27828968604599f843fb5f0572598449edb5ce93f2fe320bc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 160
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 161
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_62ddb756b0a2c27828968604599f843fb5f0572598449edb5ce93f2fe320bc01->leave($__internal_62ddb756b0a2c27828968604599f843fb5f0572598449edb5ce93f2fe320bc01_prof);

    }

    // line 164
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_96475295d56e665908c6cb9e5e698ea8ce8b4128c92a47f75fc7a01d1ff9fbe9 = $this->env->getExtension("native_profiler");
        $__internal_96475295d56e665908c6cb9e5e698ea8ce8b4128c92a47f75fc7a01d1ff9fbe9->enter($__internal_96475295d56e665908c6cb9e5e698ea8ce8b4128c92a47f75fc7a01d1ff9fbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 165
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 166
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_96475295d56e665908c6cb9e5e698ea8ce8b4128c92a47f75fc7a01d1ff9fbe9->leave($__internal_96475295d56e665908c6cb9e5e698ea8ce8b4128c92a47f75fc7a01d1ff9fbe9_prof);

    }

    // line 169
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_7634ebe0876de583dfe5cd77822ac205244effe389290979e5d88af5a06584bd = $this->env->getExtension("native_profiler");
        $__internal_7634ebe0876de583dfe5cd77822ac205244effe389290979e5d88af5a06584bd->enter($__internal_7634ebe0876de583dfe5cd77822ac205244effe389290979e5d88af5a06584bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7634ebe0876de583dfe5cd77822ac205244effe389290979e5d88af5a06584bd->leave($__internal_7634ebe0876de583dfe5cd77822ac205244effe389290979e5d88af5a06584bd_prof);

    }

    // line 174
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_450127d32361cae7b7a7cf350bd15d710224c924f8b57b5e20124a6bf34bee3f = $this->env->getExtension("native_profiler");
        $__internal_450127d32361cae7b7a7cf350bd15d710224c924f8b57b5e20124a6bf34bee3f->enter($__internal_450127d32361cae7b7a7cf350bd15d710224c924f8b57b5e20124a6bf34bee3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_450127d32361cae7b7a7cf350bd15d710224c924f8b57b5e20124a6bf34bee3f->leave($__internal_450127d32361cae7b7a7cf350bd15d710224c924f8b57b5e20124a6bf34bee3f_prof);

    }

    // line 179
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2072dbe1013963da98a54d579a66ccaa83e7452f973c90bbb25d44f1e954bd9d = $this->env->getExtension("native_profiler");
        $__internal_2072dbe1013963da98a54d579a66ccaa83e7452f973c90bbb25d44f1e954bd9d->enter($__internal_2072dbe1013963da98a54d579a66ccaa83e7452f973c90bbb25d44f1e954bd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 180
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 181
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 182
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 183
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 184
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 187
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 190
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>";
        
        $__internal_2072dbe1013963da98a54d579a66ccaa83e7452f973c90bbb25d44f1e954bd9d->leave($__internal_2072dbe1013963da98a54d579a66ccaa83e7452f973c90bbb25d44f1e954bd9d_prof);

    }

    // line 193
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_dbea309b9c5681afc25c4230fb9a215a0cdc35fb498047c89576c77c25425f06 = $this->env->getExtension("native_profiler");
        $__internal_dbea309b9c5681afc25c4230fb9a215a0cdc35fb498047c89576c77c25425f06->enter($__internal_dbea309b9c5681afc25c4230fb9a215a0cdc35fb498047c89576c77c25425f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 195
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_dbea309b9c5681afc25c4230fb9a215a0cdc35fb498047c89576c77c25425f06->leave($__internal_dbea309b9c5681afc25c4230fb9a215a0cdc35fb498047c89576c77c25425f06_prof);

    }

    // line 198
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_a5ae550fbac2f42bf0dfbae470eda0f0a4cc87b6708f44b8a766794ac70741d1 = $this->env->getExtension("native_profiler");
        $__internal_a5ae550fbac2f42bf0dfbae470eda0f0a4cc87b6708f44b8a766794ac70741d1->enter($__internal_a5ae550fbac2f42bf0dfbae470eda0f0a4cc87b6708f44b8a766794ac70741d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 200
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_a5ae550fbac2f42bf0dfbae470eda0f0a4cc87b6708f44b8a766794ac70741d1->leave($__internal_a5ae550fbac2f42bf0dfbae470eda0f0a4cc87b6708f44b8a766794ac70741d1_prof);

    }

    // line 205
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b059fd390225c74ce4a7910caa267afc468bd7824825ac5825be32df6a203716 = $this->env->getExtension("native_profiler");
        $__internal_b059fd390225c74ce4a7910caa267afc468bd7824825ac5825be32df6a203716->enter($__internal_b059fd390225c74ce4a7910caa267afc468bd7824825ac5825be32df6a203716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 206
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 207
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 208
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 210
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 211
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 213
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 214
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 215
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 216
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 217
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 220
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 223
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_b059fd390225c74ce4a7910caa267afc468bd7824825ac5825be32df6a203716->leave($__internal_b059fd390225c74ce4a7910caa267afc468bd7824825ac5825be32df6a203716_prof);

    }

    // line 227
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_d3e7abdc87d9e917a67a12babc6d6c131182a10026d75dc56653596d2534c510 = $this->env->getExtension("native_profiler");
        $__internal_d3e7abdc87d9e917a67a12babc6d6c131182a10026d75dc56653596d2534c510->enter($__internal_d3e7abdc87d9e917a67a12babc6d6c131182a10026d75dc56653596d2534c510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_d3e7abdc87d9e917a67a12babc6d6c131182a10026d75dc56653596d2534c510->leave($__internal_d3e7abdc87d9e917a67a12babc6d6c131182a10026d75dc56653596d2534c510_prof);

    }

    // line 231
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_d28d406b1a9554c3325202f37a730a64ec8b2fcb9042db70932eb0eb7decdfbe = $this->env->getExtension("native_profiler");
        $__internal_d28d406b1a9554c3325202f37a730a64ec8b2fcb9042db70932eb0eb7decdfbe->enter($__internal_d28d406b1a9554c3325202f37a730a64ec8b2fcb9042db70932eb0eb7decdfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 236
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_d28d406b1a9554c3325202f37a730a64ec8b2fcb9042db70932eb0eb7decdfbe->leave($__internal_d28d406b1a9554c3325202f37a730a64ec8b2fcb9042db70932eb0eb7decdfbe_prof);

    }

    // line 239
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7ab7a95a1da0474b28d3db532586b156aad3b5572271fffc6e98e8beadd2a935 = $this->env->getExtension("native_profiler");
        $__internal_7ab7a95a1da0474b28d3db532586b156aad3b5572271fffc6e98e8beadd2a935->enter($__internal_7ab7a95a1da0474b28d3db532586b156aad3b5572271fffc6e98e8beadd2a935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 240
        echo "<div>";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 244
        echo "</div>";
        
        $__internal_7ab7a95a1da0474b28d3db532586b156aad3b5572271fffc6e98e8beadd2a935->leave($__internal_7ab7a95a1da0474b28d3db532586b156aad3b5572271fffc6e98e8beadd2a935_prof);

    }

    // line 247
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b7fd1a044469f7eac87a26df66c9542b85fff88fc4c44e11b5f719fb2b9fbbd2 = $this->env->getExtension("native_profiler");
        $__internal_b7fd1a044469f7eac87a26df66c9542b85fff88fc4c44e11b5f719fb2b9fbbd2->enter($__internal_b7fd1a044469f7eac87a26df66c9542b85fff88fc4c44e11b5f719fb2b9fbbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 248
        echo "<div>";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 250
        echo "</div>";
        
        $__internal_b7fd1a044469f7eac87a26df66c9542b85fff88fc4c44e11b5f719fb2b9fbbd2->leave($__internal_b7fd1a044469f7eac87a26df66c9542b85fff88fc4c44e11b5f719fb2b9fbbd2_prof);

    }

    // line 253
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_b1843e87ab05fd0f6a11957359a2f99d3aa076b96c5738636c2f0fe8e14b9ee3 = $this->env->getExtension("native_profiler");
        $__internal_b1843e87ab05fd0f6a11957359a2f99d3aa076b96c5738636c2f0fe8e14b9ee3->enter($__internal_b1843e87ab05fd0f6a11957359a2f99d3aa076b96c5738636c2f0fe8e14b9ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_b1843e87ab05fd0f6a11957359a2f99d3aa076b96c5738636c2f0fe8e14b9ee3->leave($__internal_b1843e87ab05fd0f6a11957359a2f99d3aa076b96c5738636c2f0fe8e14b9ee3_prof);

    }

    // line 259
    public function block_form($context, array $blocks = array())
    {
        $__internal_c8cf6cb4fc3a7c296406c3a0facf61f111fd718786df87a0ac5ec73658b2253c = $this->env->getExtension("native_profiler");
        $__internal_c8cf6cb4fc3a7c296406c3a0facf61f111fd718786df87a0ac5ec73658b2253c->enter($__internal_c8cf6cb4fc3a7c296406c3a0facf61f111fd718786df87a0ac5ec73658b2253c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 260
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 262
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_c8cf6cb4fc3a7c296406c3a0facf61f111fd718786df87a0ac5ec73658b2253c->leave($__internal_c8cf6cb4fc3a7c296406c3a0facf61f111fd718786df87a0ac5ec73658b2253c_prof);

    }

    // line 265
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_732c16cfe959b6a9aa338132c3090c9f9e602a5198282be94993001f87ce8a8c = $this->env->getExtension("native_profiler");
        $__internal_732c16cfe959b6a9aa338132c3090c9f9e602a5198282be94993001f87ce8a8c->enter($__internal_732c16cfe959b6a9aa338132c3090c9f9e602a5198282be94993001f87ce8a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 266
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 267
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 268
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 270
            $context["form_method"] = "POST";
        }
        // line 272
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 273
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 274
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_732c16cfe959b6a9aa338132c3090c9f9e602a5198282be94993001f87ce8a8c->leave($__internal_732c16cfe959b6a9aa338132c3090c9f9e602a5198282be94993001f87ce8a8c_prof);

    }

    // line 278
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_7b4e1547fab4fba099a41178a960149dd569e8d823ed84ceabf299c939cdacb0 = $this->env->getExtension("native_profiler");
        $__internal_7b4e1547fab4fba099a41178a960149dd569e8d823ed84ceabf299c939cdacb0->enter($__internal_7b4e1547fab4fba099a41178a960149dd569e8d823ed84ceabf299c939cdacb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 279
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 280
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 282
        echo "</form>";
        
        $__internal_7b4e1547fab4fba099a41178a960149dd569e8d823ed84ceabf299c939cdacb0->leave($__internal_7b4e1547fab4fba099a41178a960149dd569e8d823ed84ceabf299c939cdacb0_prof);

    }

    // line 285
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_2ce3c15706240db7b675c469828ef8bece7eb14f6e6fb369cd98d4f83421c351 = $this->env->getExtension("native_profiler");
        $__internal_2ce3c15706240db7b675c469828ef8bece7eb14f6e6fb369cd98d4f83421c351->enter($__internal_2ce3c15706240db7b675c469828ef8bece7eb14f6e6fb369cd98d4f83421c351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 286
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_2ce3c15706240db7b675c469828ef8bece7eb14f6e6fb369cd98d4f83421c351->leave($__internal_2ce3c15706240db7b675c469828ef8bece7eb14f6e6fb369cd98d4f83421c351_prof);

    }

    // line 289
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_fce087aeeefc0e52a00234c5b431d023542763ada5fba7eae776b78823511b06 = $this->env->getExtension("native_profiler");
        $__internal_fce087aeeefc0e52a00234c5b431d023542763ada5fba7eae776b78823511b06->enter($__internal_fce087aeeefc0e52a00234c5b431d023542763ada5fba7eae776b78823511b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 290
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 291
            echo "<ul>";
            // line 292
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 293
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "</ul>";
        }
        
        $__internal_fce087aeeefc0e52a00234c5b431d023542763ada5fba7eae776b78823511b06->leave($__internal_fce087aeeefc0e52a00234c5b431d023542763ada5fba7eae776b78823511b06_prof);

    }

    // line 299
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_84e183d6fd00fdd94265e6f8c51288c7ebb8d6be5b7b8e20385cac0bb63270aa = $this->env->getExtension("native_profiler");
        $__internal_84e183d6fd00fdd94265e6f8c51288c7ebb8d6be5b7b8e20385cac0bb63270aa->enter($__internal_84e183d6fd00fdd94265e6f8c51288c7ebb8d6be5b7b8e20385cac0bb63270aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 300
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 301
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 302
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_84e183d6fd00fdd94265e6f8c51288c7ebb8d6be5b7b8e20385cac0bb63270aa->leave($__internal_84e183d6fd00fdd94265e6f8c51288c7ebb8d6be5b7b8e20385cac0bb63270aa_prof);

    }

    // line 309
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_888f84cb3258f35e41db427ed800791a8b7a431a1c72d7dc45ec84ea50f9562b = $this->env->getExtension("native_profiler");
        $__internal_888f84cb3258f35e41db427ed800791a8b7a431a1c72d7dc45ec84ea50f9562b->enter($__internal_888f84cb3258f35e41db427ed800791a8b7a431a1c72d7dc45ec84ea50f9562b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 311
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_888f84cb3258f35e41db427ed800791a8b7a431a1c72d7dc45ec84ea50f9562b->leave($__internal_888f84cb3258f35e41db427ed800791a8b7a431a1c72d7dc45ec84ea50f9562b_prof);

    }

    // line 315
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_38bf46af1623aeec0f7fef4f7ca2739874b87ef7401217de24f64b013e81f623 = $this->env->getExtension("native_profiler");
        $__internal_38bf46af1623aeec0f7fef4f7ca2739874b87ef7401217de24f64b013e81f623->enter($__internal_38bf46af1623aeec0f7fef4f7ca2739874b87ef7401217de24f64b013e81f623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 316
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 317
        if (((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")) &&  !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "readonly", array(), "any", true, true))) {
            echo " readonly=\"readonly\"";
        }
        // line 318
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 319
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 321
            echo " ";
            // line 322
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 323
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 324
$context["attrvalue"] === true)) {
                // line 325
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 326
$context["attrvalue"] === false)) {
                // line 327
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_38bf46af1623aeec0f7fef4f7ca2739874b87ef7401217de24f64b013e81f623->leave($__internal_38bf46af1623aeec0f7fef4f7ca2739874b87ef7401217de24f64b013e81f623_prof);

    }

    // line 332
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_dfe68dfefeb4ba48079459687546fd54dcb7b84f046fe405eeec831c81eaa029 = $this->env->getExtension("native_profiler");
        $__internal_dfe68dfefeb4ba48079459687546fd54dcb7b84f046fe405eeec831c81eaa029->enter($__internal_dfe68dfefeb4ba48079459687546fd54dcb7b84f046fe405eeec831c81eaa029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 333
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 335
            echo " ";
            // line 336
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 337
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 338
$context["attrvalue"] === true)) {
                // line 339
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 340
$context["attrvalue"] === false)) {
                // line 341
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_dfe68dfefeb4ba48079459687546fd54dcb7b84f046fe405eeec831c81eaa029->leave($__internal_dfe68dfefeb4ba48079459687546fd54dcb7b84f046fe405eeec831c81eaa029_prof);

    }

    // line 346
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_8d6ff7d77e67fb7ad5ca701b5ecb69a14461288946e033a4ced7d781207336b3 = $this->env->getExtension("native_profiler");
        $__internal_8d6ff7d77e67fb7ad5ca701b5ecb69a14461288946e033a4ced7d781207336b3->enter($__internal_8d6ff7d77e67fb7ad5ca701b5ecb69a14461288946e033a4ced7d781207336b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 347
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 349
            echo " ";
            // line 350
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 351
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 352
$context["attrvalue"] === true)) {
                // line 353
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 354
$context["attrvalue"] === false)) {
                // line 355
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8d6ff7d77e67fb7ad5ca701b5ecb69a14461288946e033a4ced7d781207336b3->leave($__internal_8d6ff7d77e67fb7ad5ca701b5ecb69a14461288946e033a4ced7d781207336b3_prof);

    }

    // line 360
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_6a495ea30de441c4d33c0cf0cf5995be4a7505e0b0d5a296b9c91db7d759e098 = $this->env->getExtension("native_profiler");
        $__internal_6a495ea30de441c4d33c0cf0cf5995be4a7505e0b0d5a296b9c91db7d759e098->enter($__internal_6a495ea30de441c4d33c0cf0cf5995be4a7505e0b0d5a296b9c91db7d759e098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 362
            echo " ";
            // line 363
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 364
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 365
$context["attrvalue"] === true)) {
                // line 366
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 367
$context["attrvalue"] === false)) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6a495ea30de441c4d33c0cf0cf5995be4a7505e0b0d5a296b9c91db7d759e098->leave($__internal_6a495ea30de441c4d33c0cf0cf5995be4a7505e0b0d5a296b9c91db7d759e098_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1267 => 368,  1265 => 367,  1260 => 366,  1258 => 365,  1253 => 364,  1251 => 363,  1249 => 362,  1245 => 361,  1239 => 360,  1224 => 355,  1222 => 354,  1217 => 353,  1215 => 352,  1210 => 351,  1208 => 350,  1206 => 349,  1202 => 348,  1193 => 347,  1187 => 346,  1172 => 341,  1170 => 340,  1165 => 339,  1163 => 338,  1158 => 337,  1156 => 336,  1154 => 335,  1150 => 334,  1144 => 333,  1138 => 332,  1123 => 327,  1121 => 326,  1116 => 325,  1114 => 324,  1109 => 323,  1107 => 322,  1105 => 321,  1101 => 320,  1097 => 319,  1093 => 318,  1089 => 317,  1083 => 316,  1077 => 315,  1066 => 311,  1062 => 310,  1056 => 309,  1044 => 302,  1042 => 301,  1038 => 300,  1032 => 299,  1024 => 295,  1016 => 293,  1012 => 292,  1010 => 291,  1008 => 290,  1002 => 289,  993 => 286,  987 => 285,  980 => 282,  977 => 280,  975 => 279,  969 => 278,  959 => 274,  957 => 273,  933 => 272,  930 => 270,  927 => 268,  925 => 267,  923 => 266,  917 => 265,  910 => 262,  908 => 261,  906 => 260,  900 => 259,  893 => 254,  887 => 253,  880 => 250,  878 => 249,  876 => 248,  870 => 247,  863 => 244,  861 => 243,  859 => 242,  857 => 241,  855 => 240,  849 => 239,  842 => 236,  836 => 231,  825 => 227,  802 => 223,  798 => 220,  795 => 217,  794 => 216,  793 => 215,  791 => 214,  789 => 213,  786 => 211,  784 => 210,  781 => 208,  779 => 207,  777 => 206,  771 => 205,  764 => 200,  762 => 199,  756 => 198,  749 => 195,  747 => 194,  741 => 193,  728 => 190,  724 => 187,  721 => 184,  720 => 183,  719 => 182,  717 => 181,  715 => 180,  709 => 179,  702 => 176,  700 => 175,  694 => 174,  687 => 171,  685 => 170,  679 => 169,  672 => 166,  670 => 165,  664 => 164,  656 => 161,  654 => 160,  648 => 159,  641 => 156,  639 => 155,  633 => 154,  626 => 151,  624 => 150,  618 => 149,  611 => 146,  605 => 145,  598 => 142,  596 => 141,  590 => 140,  583 => 137,  581 => 136,  575 => 134,  567 => 130,  557 => 129,  552 => 128,  550 => 127,  547 => 125,  545 => 124,  539 => 123,  531 => 119,  529 => 117,  528 => 116,  527 => 115,  526 => 114,  522 => 113,  519 => 111,  517 => 110,  511 => 109,  503 => 105,  501 => 104,  499 => 103,  497 => 102,  495 => 101,  491 => 100,  488 => 98,  486 => 97,  480 => 96,  463 => 93,  457 => 92,  440 => 89,  434 => 88,  405 => 83,  403 => 82,  400 => 80,  398 => 79,  396 => 78,  391 => 77,  389 => 76,  372 => 75,  366 => 74,  359 => 71,  357 => 70,  355 => 69,  349 => 66,  347 => 65,  345 => 64,  343 => 63,  341 => 62,  332 => 60,  330 => 59,  323 => 58,  320 => 56,  318 => 55,  312 => 54,  305 => 51,  299 => 49,  297 => 48,  293 => 47,  289 => 46,  283 => 45,  275 => 41,  272 => 39,  270 => 38,  264 => 37,  253 => 34,  247 => 33,  240 => 30,  237 => 28,  235 => 27,  229 => 26,  222 => 23,  220 => 22,  218 => 21,  215 => 19,  213 => 18,  209 => 17,  203 => 16,  186 => 13,  184 => 12,  178 => 11,  170 => 7,  167 => 5,  165 => 4,  159 => 3,  152 => 360,  150 => 346,  148 => 332,  146 => 315,  144 => 309,  141 => 306,  139 => 299,  137 => 289,  135 => 285,  133 => 278,  131 => 265,  129 => 259,  127 => 253,  125 => 247,  123 => 239,  121 => 231,  119 => 227,  117 => 205,  115 => 198,  113 => 193,  111 => 179,  109 => 174,  107 => 169,  105 => 164,  103 => 159,  101 => 154,  99 => 149,  97 => 145,  95 => 140,  93 => 134,  91 => 123,  89 => 109,  87 => 96,  85 => 92,  83 => 88,  81 => 74,  79 => 54,  77 => 45,  75 => 37,  73 => 33,  71 => 26,  69 => 16,  67 => 11,  65 => 3,);
    }
}
/* {# Widgets #}*/
/* */
/* {%- block form_widget -%}*/
/*     {% if compound %}*/
/*         {{- block('form_widget_compound') -}}*/
/*     {% else %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% endif %}*/
/* {%- endblock form_widget -%}*/
/* */
/* {%- block form_widget_simple -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/* {%- endblock form_widget_simple -%}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*         {%- if form.parent is empty -%}*/
/*             {{ form_errors(form) }}*/
/*         {%- endif -%}*/
/*         {{- block('form_rows') -}}*/
/*         {{- form_rest(form) -}}*/
/*     </div>*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* {%- block collection_widget -%}*/
/*     {% if prototype is defined %}*/
/*         {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}*/
/*     {% endif %}*/
/*     {{- block('form_widget') -}}*/
/* {%- endblock collection_widget -%}*/
/* */
/* {%- block textarea_widget -%}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* {%- endblock textarea_widget -%}*/
/* */
/* {%- block choice_widget -%}*/
/*     {% if expanded %}*/
/*         {{- block('choice_widget_expanded') -}}*/
/*     {% else %}*/
/*         {{- block('choice_widget_collapsed') -}}*/
/*     {% endif %}*/
/* {%- endblock choice_widget -%}*/
/* */
/* {%- block choice_widget_expanded -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*     {%- for child in form %}*/
/*         {{- form_widget(child) -}}*/
/*         {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}*/
/*     {% endfor -%}*/
/*     </div>*/
/* {%- endblock choice_widget_expanded -%}*/
/* */
/* {%- block choice_widget_collapsed -%}*/
/*     {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}*/
/*         {% set required = false %}*/
/*     {%- endif -%}*/
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*         {%- if placeholder is not none -%}*/
/*             <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ placeholder != '' ? placeholder|trans({}, translation_domain) }}</option>*/
/*         {%- endif -%}*/
/*         {%- if preferred_choices|length > 0 -%}*/
/*             {% set options = preferred_choices %}*/
/*             {{- block('choice_widget_options') -}}*/
/*             {%- if choices|length > 0 and separator is not none -%}*/
/*                 <option disabled="disabled">{{ separator }}</option>*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         {%- set options = choices -%}*/
/*         {{- block('choice_widget_options') -}}*/
/*     </select>*/
/* {%- endblock choice_widget_collapsed -%}*/
/* */
/* {%- block choice_widget_options -%}*/
/*     {% for group_label, choice in options %}*/
/*         {%- if choice is iterable -%}*/
/*             <optgroup label="{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}">*/
/*                 {% set options = choice %}*/
/*                 {{- block('choice_widget_options') -}}*/
/*             </optgroup>*/
/*         {%- else -%}*/
/*             {% set attr = choice.attr %}*/
/*             <option value="{{ choice.value }}" {{ block('attributes') }}{% if choice is selectedchoice(value) %} selected="selected"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>*/
/*         {%- endif -%}*/
/*     {% endfor %}*/
/* {%- endblock choice_widget_options -%}*/
/* */
/* {%- block checkbox_widget -%}*/
/*     <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock checkbox_widget -%}*/
/* */
/* {%- block radio_widget -%}*/
/*     <input type="radio" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock radio_widget -%}*/
/* */
/* {%- block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date) -}}*/
/*             {{- form_widget(form.time) -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock datetime_widget -%}*/
/* */
/* {%- block date_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}':  form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}':   form_widget(form.day),*/
/*             })|raw -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock date_widget -%}*/
/* */
/* {%- block time_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock time_widget -%}*/
/* */
/* {%- block number_widget -%}*/
/*     {# type="number" doesn't work with floats #}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock number_widget -%}*/
/* */
/* {%- block integer_widget -%}*/
/*     {%- set type = type|default('number') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock integer_widget -%}*/
/* */
/* {%- block money_widget -%}*/
/*     {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}*/
/* {%- endblock money_widget -%}*/
/* */
/* {%- block url_widget -%}*/
/*     {%- set type = type|default('url') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock url_widget -%}*/
/* */
/* {%- block search_widget -%}*/
/*     {%- set type = type|default('search') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock search_widget -%}*/
/* */
/* {%- block percent_widget -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }} %*/
/* {%- endblock percent_widget -%}*/
/* */
/* {%- block password_widget -%}*/
/*     {%- set type = type|default('password') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock password_widget -%}*/
/* */
/* {%- block hidden_widget -%}*/
/*     {%- set type = type|default('hidden') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock hidden_widget -%}*/
/* */
/* {%- block email_widget -%}*/
/*     {%- set type = type|default('email') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock email_widget -%}*/
/* */
/* {%- block button_widget -%}*/
/*     {%- if label is empty -%}*/
/*         {%- if label_format is not empty -%}*/
/*             {% set label = label_format|replace({*/
/*                 '%name%': name,*/
/*                 '%id%': id,*/
/*             }) %}*/
/*         {%- else -%}*/
/*             {% set label = name|humanize %}*/
/*         {%- endif -%}*/
/*     {%- endif -%}*/
/*     <button type="{{ type|default('button') }}" {{ block('button_attributes') }}>{{ label|trans({}, translation_domain) }}</button>*/
/* {%- endblock button_widget -%}*/
/* */
/* {%- block submit_widget -%}*/
/*     {%- set type = type|default('submit') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock submit_widget -%}*/
/* */
/* {%- block reset_widget -%}*/
/*     {%- set type = type|default('reset') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock reset_widget -%}*/
/* */
/* {# Labels #}*/
/* */
/* {%- block form_label -%}*/
/*     {% if label is not same as(false) -%}*/
/*         {% if not compound -%}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {%- endif -%}*/
/*         {% if required -%}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {%- endif -%}*/
/*         {% if label is empty -%}*/
/*             {%- if label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>*/
/*     {%- endif -%}*/
/* {%- endblock form_label -%}*/
/* */
/* {%- block button_label -%}{%- endblock -%}*/
/* */
/* {# Rows #}*/
/* */
/* {%- block repeated_row -%}*/
/*     {#*/
/*     No need to render the errors here, as all errors are mapped*/
/*     to the first child (see RepeatedTypeValidatorExtension).*/
/*     #}*/
/*     {{- block('form_rows') -}}*/
/* {%- endblock repeated_row -%}*/
/* */
/* {%- block form_row -%}*/
/*     <div>*/
/*         {{- form_label(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock form_row -%}*/
/* */
/* {%- block button_row -%}*/
/*     <div>*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row -%}*/
/* */
/* {%- block hidden_row -%}*/
/*     {{ form_widget(form) }}*/
/* {%- endblock hidden_row -%}*/
/* */
/* {# Misc #}*/
/* */
/* {%- block form -%}*/
/*     {{ form_start(form) }}*/
/*         {{- form_widget(form) -}}*/
/*     {{ form_end(form) }}*/
/* {%- endblock form -%}*/
/* */
/* {%- block form_start -%}*/
/*     {% set method = method|upper %}*/
/*     {%- if method in ["GET", "POST"] -%}*/
/*         {% set form_method = method %}*/
/*     {%- else -%}*/
/*         {% set form_method = "POST" %}*/
/*     {%- endif -%}*/
/*     <form name="{{ name }}" method="{{ form_method|lower }}" action="{{ action }}"{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %}>*/
/*     {%- if form_method != method -%}*/
/*         <input type="hidden" name="_method" value="{{ method }}" />*/
/*     {%- endif -%}*/
/* {%- endblock form_start -%}*/
/* */
/* {%- block form_end -%}*/
/*     {%- if not render_rest is defined or render_rest -%}*/
/*         {{ form_rest(form) }}*/
/*     {%- endif -%}*/
/*     </form>*/
/* {%- endblock form_end -%}*/
/* */
/* {%- block form_enctype -%}*/
/*     {% if multipart %}enctype="multipart/form-data"{% endif %}*/
/* {%- endblock form_enctype -%}*/
/* */
/* {%- block form_errors -%}*/
/*     {%- if errors|length > 0 -%}*/
/*     <ul>*/
/*         {%- for error in errors -%}*/
/*             <li>{{ error.message }}</li>*/
/*         {%- endfor -%}*/
/*     </ul>*/
/*     {%- endif -%}*/
/* {%- endblock form_errors -%}*/
/* */
/* {%- block form_rest -%}*/
/*     {% for child in form -%}*/
/*         {% if not child.rendered %}*/
/*             {{- form_row(child) -}}*/
/*         {% endif %}*/
/*     {%- endfor %}*/
/* {% endblock form_rest %}*/
/* */
/* {# Support #}*/
/* */
/* {%- block form_rows -%}*/
/*     {% for child in form %}*/
/*         {{- form_row(child) -}}*/
/*     {% endfor %}*/
/* {%- endblock form_rows -%}*/
/* */
/* {%- block widget_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"*/
/*     {%- if read_only and attr.readonly is not defined %} readonly="readonly"{% endif -%}*/
/*     {%- if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- if required %} required="required"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_attributes -%}*/
/* */
/* {%- block widget_container_attributes -%}*/
/*     {%- if id is not empty %}id="{{ id }}"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_container_attributes -%}*/
/* */
/* {%- block button_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"{% if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock button_attributes -%}*/
/* */
/* {% block attributes -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock attributes -%}*/
/* */
