<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f10c2b86ce8887093447dd302deeec66ffc19ee1a0ea5291fe728d9b383e0b0e extends Twig_Template
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
        $__internal_bfd3c674c265115f0a32af4350a8d75af5a9002809df996aeb3d52b2124df66b = $this->env->getExtension("native_profiler");
        $__internal_bfd3c674c265115f0a32af4350a8d75af5a9002809df996aeb3d52b2124df66b->enter($__internal_bfd3c674c265115f0a32af4350a8d75af5a9002809df996aeb3d52b2124df66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bfd3c674c265115f0a32af4350a8d75af5a9002809df996aeb3d52b2124df66b->leave($__internal_bfd3c674c265115f0a32af4350a8d75af5a9002809df996aeb3d52b2124df66b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
