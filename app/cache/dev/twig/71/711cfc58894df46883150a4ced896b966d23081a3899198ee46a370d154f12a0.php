<?php

/* @SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig */
class __TwigTemplate_ad98b6878f21994d8f5631e4d7dcabe16325af1a3ab455ec9c4968483e351b64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_369aa99959219052790da8b0e1b4e1fe92ad4b4504cde0f9e31d6793fce3b550 = $this->env->getExtension("native_profiler");
        $__internal_369aa99959219052790da8b0e1b4e1fe92ad4b4504cde0f9e31d6793fce3b550->enter($__internal_369aa99959219052790da8b0e1b4e1fe92ad4b4504cde0f9e31d6793fce3b550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_369aa99959219052790da8b0e1b4e1fe92ad4b4504cde0f9e31d6793fce3b550->leave($__internal_369aa99959219052790da8b0e1b4e1fe92ad4b4504cde0f9e31d6793fce3b550_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b307dd9fd64164884d54b26954dced020cdd4ac7deff8c8449b6552b303d1c68 = $this->env->getExtension("native_profiler");
        $__internal_b307dd9fd64164884d54b26954dced020cdd4ac7deff8c8449b6552b303d1c68->enter($__internal_b307dd9fd64164884d54b26954dced020cdd4ac7deff8c8449b6552b303d1c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        $context["route_role"] = twig_upper_filter($this->env, (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
        // line 17
        echo "    ";
        if (((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "id", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "isGranted", array(0 => (isset($context["route_role"]) ? $context["route_role"] : $this->getContext($context, "route_role")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method"))) {
            // line 18
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 20
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_b307dd9fd64164884d54b26954dced020cdd4ac7deff8c8449b6552b303d1c68->leave($__internal_b307dd9fd64164884d54b26954dced020cdd4ac7deff8c8449b6552b303d1c68_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 20,  48 => 18,  45 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% set route_name = field_description.options.route.name %}*/
/*     {% set route_role = route_name | upper %}*/
/*     {% if field_description.hasAssociationAdmin and field_description.associationadmin.id(value) and field_description.associationadmin.isGranted(route_role, value) and field_description.associationadmin.hasRoute(route_name) %}*/
/*         <a href="{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}">{{ value|render_relation_element(field_description) }}</a>*/
/*     {% else %}*/
/*         {{ value|render_relation_element(field_description) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */