<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_fc489aa305f6efd301e9c4a23b156d5213087a22522ed0e0be83fd27b95cb057 extends Twig_Template
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
        $__internal_63a8f8fd87bb637d442b64391a4d0e6323492561889ab2a7a290158d6b16cd4a = $this->env->getExtension("native_profiler");
        $__internal_63a8f8fd87bb637d442b64391a4d0e6323492561889ab2a7a290158d6b16cd4a->enter($__internal_63a8f8fd87bb637d442b64391a4d0e6323492561889ab2a7a290158d6b16cd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_63a8f8fd87bb637d442b64391a4d0e6323492561889ab2a7a290158d6b16cd4a->leave($__internal_63a8f8fd87bb637d442b64391a4d0e6323492561889ab2a7a290158d6b16cd4a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
