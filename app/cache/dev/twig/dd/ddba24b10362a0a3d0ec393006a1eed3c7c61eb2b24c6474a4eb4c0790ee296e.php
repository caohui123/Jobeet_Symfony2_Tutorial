<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_2e2e076fbc660916033b635d31c444dbb81607777606addaa9ef26ff54306b86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db92ee98707844efb3d0ebe8daef4305cbf900ba042859ffc1e792a472dd97d4 = $this->env->getExtension("native_profiler");
        $__internal_db92ee98707844efb3d0ebe8daef4305cbf900ba042859ffc1e792a472dd97d4->enter($__internal_db92ee98707844efb3d0ebe8daef4305cbf900ba042859ffc1e792a472dd97d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db92ee98707844efb3d0ebe8daef4305cbf900ba042859ffc1e792a472dd97d4->leave($__internal_db92ee98707844efb3d0ebe8daef4305cbf900ba042859ffc1e792a472dd97d4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ae9b92b8e2f81bd7813ead486dab6604c18ea51e047984d5d54aebc07cda3f72 = $this->env->getExtension("native_profiler");
        $__internal_ae9b92b8e2f81bd7813ead486dab6604c18ea51e047984d5d54aebc07cda3f72->enter($__internal_ae9b92b8e2f81bd7813ead486dab6604c18ea51e047984d5d54aebc07cda3f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_ae9b92b8e2f81bd7813ead486dab6604c18ea51e047984d5d54aebc07cda3f72->leave($__internal_ae9b92b8e2f81bd7813ead486dab6604c18ea51e047984d5d54aebc07cda3f72_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
