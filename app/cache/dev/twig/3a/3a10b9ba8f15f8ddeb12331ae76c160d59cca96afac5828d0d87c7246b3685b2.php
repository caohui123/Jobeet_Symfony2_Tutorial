<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_766e4dbb34b54a414414a3becbb4a60e1d551c92653fc76261f55edb8cf651fa extends Twig_Template
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
        $__internal_d84b80b417bdf1ba7b03f342beb01d2437f90bcadadf95befb8db521e02d61c2 = $this->env->getExtension("native_profiler");
        $__internal_d84b80b417bdf1ba7b03f342beb01d2437f90bcadadf95befb8db521e02d61c2->enter($__internal_d84b80b417bdf1ba7b03f342beb01d2437f90bcadadf95befb8db521e02d61c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d84b80b417bdf1ba7b03f342beb01d2437f90bcadadf95befb8db521e02d61c2->leave($__internal_d84b80b417bdf1ba7b03f342beb01d2437f90bcadadf95befb8db521e02d61c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
