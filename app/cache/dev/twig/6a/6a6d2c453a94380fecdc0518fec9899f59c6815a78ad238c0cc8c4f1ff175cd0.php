<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_eee3a6fc43edd5ce8522d1f3b6c2af2d2853b20b223310bcf41a9f9ead0a5792 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ec3215de6025fd87375ee6046b32e5e83c98034e3663feee58e0795a93f1fbe = $this->env->getExtension("native_profiler");
        $__internal_9ec3215de6025fd87375ee6046b32e5e83c98034e3663feee58e0795a93f1fbe->enter($__internal_9ec3215de6025fd87375ee6046b32e5e83c98034e3663feee58e0795a93f1fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_9ec3215de6025fd87375ee6046b32e5e83c98034e3663feee58e0795a93f1fbe->leave($__internal_9ec3215de6025fd87375ee6046b32e5e83c98034e3663feee58e0795a93f1fbe_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_34ac507e78b8c66bc95fad49993b72a961217e7efdd975af8dfd1a71c5bd983b = $this->env->getExtension("native_profiler");
        $__internal_34ac507e78b8c66bc95fad49993b72a961217e7efdd975af8dfd1a71c5bd983b->enter($__internal_34ac507e78b8c66bc95fad49993b72a961217e7efdd975af8dfd1a71c5bd983b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_34ac507e78b8c66bc95fad49993b72a961217e7efdd975af8dfd1a71c5bd983b->leave($__internal_34ac507e78b8c66bc95fad49993b72a961217e7efdd975af8dfd1a71c5bd983b_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_d58a6d6eab32f9449a1e2fd150b8059c828e17ff734ad8741c73303873fc5fc8 = $this->env->getExtension("native_profiler");
        $__internal_d58a6d6eab32f9449a1e2fd150b8059c828e17ff734ad8741c73303873fc5fc8->enter($__internal_d58a6d6eab32f9449a1e2fd150b8059c828e17ff734ad8741c73303873fc5fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_d58a6d6eab32f9449a1e2fd150b8059c828e17ff734ad8741c73303873fc5fc8->leave($__internal_d58a6d6eab32f9449a1e2fd150b8059c828e17ff734ad8741c73303873fc5fc8_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_56108612b66cb67796709d6d07c2ab525b6b53291dbd07b691d4af96ddda5f34 = $this->env->getExtension("native_profiler");
        $__internal_56108612b66cb67796709d6d07c2ab525b6b53291dbd07b691d4af96ddda5f34->enter($__internal_56108612b66cb67796709d6d07c2ab525b6b53291dbd07b691d4af96ddda5f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_56108612b66cb67796709d6d07c2ab525b6b53291dbd07b691d4af96ddda5f34->leave($__internal_56108612b66cb67796709d6d07c2ab525b6b53291dbd07b691d4af96ddda5f34_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
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
/* <th{% if(is_diff|default(false)) %} class="diff"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>*/
/* <td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>*/
/* */
/* {% block field_compare %}*/
/*     {% if(value_compare is defined) %}*/
/*         <td>*/
/*             {% set value = value_compare %}*/
/*             {{ block('field') }}*/
/*         </td>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
