<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e31daad123eb878233aa30d3bfdf0dfb91c0b59ce2a124b1ae8fea2fcedafb0c extends Twig_Template
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
        $__internal_352105a7cae87f58bb4775442a6c0bcfe49bf1b04c4a20af5b7200ed2ad18fc2 = $this->env->getExtension("native_profiler");
        $__internal_352105a7cae87f58bb4775442a6c0bcfe49bf1b04c4a20af5b7200ed2ad18fc2->enter($__internal_352105a7cae87f58bb4775442a6c0bcfe49bf1b04c4a20af5b7200ed2ad18fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_352105a7cae87f58bb4775442a6c0bcfe49bf1b04c4a20af5b7200ed2ad18fc2->leave($__internal_352105a7cae87f58bb4775442a6c0bcfe49bf1b04c4a20af5b7200ed2ad18fc2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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