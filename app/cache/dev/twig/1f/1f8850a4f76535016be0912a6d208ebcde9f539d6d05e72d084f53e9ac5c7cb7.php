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
        $__internal_2e82fd3d11a677fd5370d5e94c58e35f8cedd0100f423c11969c0a1c7db9a9c2 = $this->env->getExtension("native_profiler");
        $__internal_2e82fd3d11a677fd5370d5e94c58e35f8cedd0100f423c11969c0a1c7db9a9c2->enter($__internal_2e82fd3d11a677fd5370d5e94c58e35f8cedd0100f423c11969c0a1c7db9a9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2e82fd3d11a677fd5370d5e94c58e35f8cedd0100f423c11969c0a1c7db9a9c2->leave($__internal_2e82fd3d11a677fd5370d5e94c58e35f8cedd0100f423c11969c0a1c7db9a9c2_prof);

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
