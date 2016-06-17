<?php

/* @SonataAdmin/CRUD/base_filter_field.html.twig */
class __TwigTemplate_ea569c43b6eea1dbb94f87f03f04ed85ebcd8cb125f3effcb1a4fe8574a79f59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9909c2fa660c7537f1b2b696dca11cd01e1f19341bb11af92dc9f5b4a3179e6d = $this->env->getExtension("native_profiler");
        $__internal_9909c2fa660c7537f1b2b696dca11cd01e1f19341bb11af92dc9f5b4a3179e6d->enter($__internal_9909c2fa660c7537f1b2b696dca11cd01e1f19341bb11af92dc9f5b4a3179e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_9909c2fa660c7537f1b2b696dca11cd01e1f19341bb11af92dc9f5b4a3179e6d->leave($__internal_9909c2fa660c7537f1b2b696dca11cd01e1f19341bb11af92dc9f5b4a3179e6d_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_9646cdea693bd3260ab5476637390ec3e469273daf0f15e465406aaf5ff94604 = $this->env->getExtension("native_profiler");
        $__internal_9646cdea693bd3260ab5476637390ec3e469273daf0f15e465406aaf5ff94604->enter($__internal_9646cdea693bd3260ab5476637390ec3e469273daf0f15e465406aaf5ff94604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_9646cdea693bd3260ab5476637390ec3e469273daf0f15e465406aaf5ff94604->leave($__internal_9646cdea693bd3260ab5476637390ec3e469273daf0f15e465406aaf5ff94604_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_6a6dc0a8ac7d8bc3dee4e337f085cccb45681cc961090a3c54b1fd57348cfeac = $this->env->getExtension("native_profiler");
        $__internal_6a6dc0a8ac7d8bc3dee4e337f085cccb45681cc961090a3c54b1fd57348cfeac->enter($__internal_6a6dc0a8ac7d8bc3dee4e337f085cccb45681cc961090a3c54b1fd57348cfeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_6a6dc0a8ac7d8bc3dee4e337f085cccb45681cc961090a3c54b1fd57348cfeac->leave($__internal_6a6dc0a8ac7d8bc3dee4e337f085cccb45681cc961090a3c54b1fd57348cfeac_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* */
/* <div>*/
/*     {% block label %}*/
/*         {% if filter.fielddescription.options.name is defined %}*/
/*             {{ form_label(filter_form, filter.fielddescription.options.name) }}*/
/*         {% else %}*/
/*             {{ form_label(filter_form) }}*/
/*         {% endif %}*/
/*         <br>*/
/*     {% endblock %}*/
/* */
/*     <div class="sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(filter_form) }}{% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
