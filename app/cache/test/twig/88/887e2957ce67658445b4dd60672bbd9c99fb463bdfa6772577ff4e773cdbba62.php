<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_640a2db2b754b49c23d427cf99dadbbfc5a24df6149f4d546f7fde7b9379bd21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91a18afbb6b9553b46e6aa7125ddb651cd01846cfecc6cf91caec83e0418d9b5 = $this->env->getExtension("native_profiler");
        $__internal_91a18afbb6b9553b46e6aa7125ddb651cd01846cfecc6cf91caec83e0418d9b5->enter($__internal_91a18afbb6b9553b46e6aa7125ddb651cd01846cfecc6cf91caec83e0418d9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91a18afbb6b9553b46e6aa7125ddb651cd01846cfecc6cf91caec83e0418d9b5->leave($__internal_91a18afbb6b9553b46e6aa7125ddb651cd01846cfecc6cf91caec83e0418d9b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8fb0aeaedfda90be94f25b62de98c5b323fa66fb0038435faeef167b533576a = $this->env->getExtension("native_profiler");
        $__internal_c8fb0aeaedfda90be94f25b62de98c5b323fa66fb0038435faeef167b533576a->enter($__internal_c8fb0aeaedfda90be94f25b62de98c5b323fa66fb0038435faeef167b533576a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c8fb0aeaedfda90be94f25b62de98c5b323fa66fb0038435faeef167b533576a->leave($__internal_c8fb0aeaedfda90be94f25b62de98c5b323fa66fb0038435faeef167b533576a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_780bb5d815938a6eebb24f94318e379a39155bb878cf30fe1386e70a3cb58f02 = $this->env->getExtension("native_profiler");
        $__internal_780bb5d815938a6eebb24f94318e379a39155bb878cf30fe1386e70a3cb58f02->enter($__internal_780bb5d815938a6eebb24f94318e379a39155bb878cf30fe1386e70a3cb58f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_780bb5d815938a6eebb24f94318e379a39155bb878cf30fe1386e70a3cb58f02->leave($__internal_780bb5d815938a6eebb24f94318e379a39155bb878cf30fe1386e70a3cb58f02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_052be257478a2fab6bf455c0db78bff108c24315efe4a8b55c281b32ad0999c0 = $this->env->getExtension("native_profiler");
        $__internal_052be257478a2fab6bf455c0db78bff108c24315efe4a8b55c281b32ad0999c0->enter($__internal_052be257478a2fab6bf455c0db78bff108c24315efe4a8b55c281b32ad0999c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_052be257478a2fab6bf455c0db78bff108c24315efe4a8b55c281b32ad0999c0->leave($__internal_052be257478a2fab6bf455c0db78bff108c24315efe4a8b55c281b32ad0999c0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
