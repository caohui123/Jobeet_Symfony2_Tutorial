<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_f5ba2aff53b244c3808dbda28f1fc35fc8fe76f3fb8b71aff57de981a160a74c extends Twig_Template
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
        $__internal_f49e831782d046a627b433abae3079df76a66cf4e96a3d322ee3df889d24009a = $this->env->getExtension("native_profiler");
        $__internal_f49e831782d046a627b433abae3079df76a66cf4e96a3d322ee3df889d24009a->enter($__internal_f49e831782d046a627b433abae3079df76a66cf4e96a3d322ee3df889d24009a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f49e831782d046a627b433abae3079df76a66cf4e96a3d322ee3df889d24009a->leave($__internal_f49e831782d046a627b433abae3079df76a66cf4e96a3d322ee3df889d24009a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
