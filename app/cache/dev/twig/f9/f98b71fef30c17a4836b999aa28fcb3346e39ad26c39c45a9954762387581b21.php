<?php

/* @SonataAdmin/CRUD/show.html.twig */
class __TwigTemplate_0cf637740209fa4c9aefe738bd149a0c548b36724ce9ce0d5c69e0c22fbdef8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f28ef048ad446ef19405dee3c31751b09ee5ba7278c12efef89dade3990b7440 = $this->env->getExtension("native_profiler");
        $__internal_f28ef048ad446ef19405dee3c31751b09ee5ba7278c12efef89dade3990b7440->enter($__internal_f28ef048ad446ef19405dee3c31751b09ee5ba7278c12efef89dade3990b7440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f28ef048ad446ef19405dee3c31751b09ee5ba7278c12efef89dade3990b7440->leave($__internal_f28ef048ad446ef19405dee3c31751b09ee5ba7278c12efef89dade3990b7440_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
