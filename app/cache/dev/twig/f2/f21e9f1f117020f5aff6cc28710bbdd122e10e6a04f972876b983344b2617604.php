<?php

/* @SonataAdmin/CRUD/acl.html.twig */
class __TwigTemplate_f1d2f9b2d68a3c8392477921d9305fceb0f49398d956e0f95e01c724093b0f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "@SonataAdmin/CRUD/acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adf71780c2d54494a55507ba90543726daf5eb5bbe8d330c945c2b31fb3aa621 = $this->env->getExtension("native_profiler");
        $__internal_adf71780c2d54494a55507ba90543726daf5eb5bbe8d330c945c2b31fb3aa621->enter($__internal_adf71780c2d54494a55507ba90543726daf5eb5bbe8d330c945c2b31fb3aa621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adf71780c2d54494a55507ba90543726daf5eb5bbe8d330c945c2b31fb3aa621->leave($__internal_adf71780c2d54494a55507ba90543726daf5eb5bbe8d330c945c2b31fb3aa621_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
