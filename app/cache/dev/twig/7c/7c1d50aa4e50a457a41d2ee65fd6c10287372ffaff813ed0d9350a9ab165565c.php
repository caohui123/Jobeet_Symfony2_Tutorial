<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ee19af70dbcc18cbd4c1b9a1b8a27f71b565459ed2b5c06edb1d701dd21763d5 extends Twig_Template
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
        $__internal_c568be9e742aecd8e0e5064dd4271756bcc5ea4e6497a73d4e98cde36ce6abc5 = $this->env->getExtension("native_profiler");
        $__internal_c568be9e742aecd8e0e5064dd4271756bcc5ea4e6497a73d4e98cde36ce6abc5->enter($__internal_c568be9e742aecd8e0e5064dd4271756bcc5ea4e6497a73d4e98cde36ce6abc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c568be9e742aecd8e0e5064dd4271756bcc5ea4e6497a73d4e98cde36ce6abc5->leave($__internal_c568be9e742aecd8e0e5064dd4271756bcc5ea4e6497a73d4e98cde36ce6abc5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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