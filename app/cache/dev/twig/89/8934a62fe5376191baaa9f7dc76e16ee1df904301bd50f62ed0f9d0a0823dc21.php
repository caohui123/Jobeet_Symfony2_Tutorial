<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_6943d2aa1b16700fd7144d2ea40bf7d94c653416263563065010900ae6b99176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1aec5d0c8914b30441706bd0589b37f576177cac77ab9ccfaea6822df39ee344 = $this->env->getExtension("native_profiler");
        $__internal_1aec5d0c8914b30441706bd0589b37f576177cac77ab9ccfaea6822df39ee344->enter($__internal_1aec5d0c8914b30441706bd0589b37f576177cac77ab9ccfaea6822df39ee344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1aec5d0c8914b30441706bd0589b37f576177cac77ab9ccfaea6822df39ee344->leave($__internal_1aec5d0c8914b30441706bd0589b37f576177cac77ab9ccfaea6822df39ee344_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
