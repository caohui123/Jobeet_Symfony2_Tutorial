<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_9617b8235cfc96700337fe828cb026d5adfdf99cde86ef53b5ad37083cee0e0e extends Twig_Template
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
        $__internal_54b72037af8f5db255b35066e9117df8d501acc4b5c7414086e5cb9b0a5aa5fd = $this->env->getExtension("native_profiler");
        $__internal_54b72037af8f5db255b35066e9117df8d501acc4b5c7414086e5cb9b0a5aa5fd->enter($__internal_54b72037af8f5db255b35066e9117df8d501acc4b5c7414086e5cb9b0a5aa5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_54b72037af8f5db255b35066e9117df8d501acc4b5c7414086e5cb9b0a5aa5fd->leave($__internal_54b72037af8f5db255b35066e9117df8d501acc4b5c7414086e5cb9b0a5aa5fd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
