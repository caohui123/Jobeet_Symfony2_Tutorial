<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_191e5b22d83a026858952555ac64704791f47fc16d3bf9cd5a9159f644324502 extends Twig_Template
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
        $__internal_ddaf08272cc767b063109220568cce50ee8b137a3b68d8119f4a721cc526a8d6 = $this->env->getExtension("native_profiler");
        $__internal_ddaf08272cc767b063109220568cce50ee8b137a3b68d8119f4a721cc526a8d6->enter($__internal_ddaf08272cc767b063109220568cce50ee8b137a3b68d8119f4a721cc526a8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_ddaf08272cc767b063109220568cce50ee8b137a3b68d8119f4a721cc526a8d6->leave($__internal_ddaf08272cc767b063109220568cce50ee8b137a3b68d8119f4a721cc526a8d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
