<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_05d5afed584b5032657a3de1d2a0f9cd08bee8d6cb9f8ac0ad9fa0edaf02b4d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4eccef44c26593f18a3adbfc1cd93008220824cb947cc725afdec946fa4fe234 = $this->env->getExtension("native_profiler");
        $__internal_4eccef44c26593f18a3adbfc1cd93008220824cb947cc725afdec946fa4fe234->enter($__internal_4eccef44c26593f18a3adbfc1cd93008220824cb947cc725afdec946fa4fe234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eccef44c26593f18a3adbfc1cd93008220824cb947cc725afdec946fa4fe234->leave($__internal_4eccef44c26593f18a3adbfc1cd93008220824cb947cc725afdec946fa4fe234_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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
/* {# DEPRECATED #}*/
/* {# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}*/
/* */
/* {% extends 'SonataAdminBundle:Button:create_button.html.twig' %}*/
/* */
