<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_67b6924862c0c0e01f44fee66a71db0af5f29e9c3f3846d4d72e9f9358ef57f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e4dde9450f492013c6765b94583cf0a66809e19ed673397217ae54f5e98b39f = $this->env->getExtension("native_profiler");
        $__internal_8e4dde9450f492013c6765b94583cf0a66809e19ed673397217ae54f5e98b39f->enter($__internal_8e4dde9450f492013c6765b94583cf0a66809e19ed673397217ae54f5e98b39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8e4dde9450f492013c6765b94583cf0a66809e19ed673397217ae54f5e98b39f->leave($__internal_8e4dde9450f492013c6765b94583cf0a66809e19ed673397217ae54f5e98b39f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea0e61ba1fc1797c982b82db0b54e7e0d1c227db47057183ebc36bc4f2b0caca = $this->env->getExtension("native_profiler");
        $__internal_ea0e61ba1fc1797c982b82db0b54e7e0d1c227db47057183ebc36bc4f2b0caca->enter($__internal_ea0e61ba1fc1797c982b82db0b54e7e0d1c227db47057183ebc36bc4f2b0caca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ea0e61ba1fc1797c982b82db0b54e7e0d1c227db47057183ebc36bc4f2b0caca->leave($__internal_ea0e61ba1fc1797c982b82db0b54e7e0d1c227db47057183ebc36bc4f2b0caca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */