<?php

/* @SonataAdmin/CRUD/list_trans.html.twig */
class __TwigTemplate_ed47304c1d5198646e845c2cba415c526377b47c947164474494be9adf574f25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d974e08de4ae6622f79bdede5f7717a1e0a974f2ba03cc8ccbbf49024ee1c47 = $this->env->getExtension("native_profiler");
        $__internal_0d974e08de4ae6622f79bdede5f7717a1e0a974f2ba03cc8ccbbf49024ee1c47->enter($__internal_0d974e08de4ae6622f79bdede5f7717a1e0a974f2ba03cc8ccbbf49024ee1c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d974e08de4ae6622f79bdede5f7717a1e0a974f2ba03cc8ccbbf49024ee1c47->leave($__internal_0d974e08de4ae6622f79bdede5f7717a1e0a974f2ba03cc8ccbbf49024ee1c47_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c179bc9bea9e844f574c423c628713bd803d5b82b0dda17c90a020364a289698 = $this->env->getExtension("native_profiler");
        $__internal_c179bc9bea9e844f574c423c628713bd803d5b82b0dda17c90a020364a289698->enter($__internal_c179bc9bea9e844f574c423c628713bd803d5b82b0dda17c90a020364a289698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(sprintf((isset($context["valueFormat"]) ? $context["valueFormat"] : $this->getContext($context, "valueFormat")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), array(), (isset($context["translationDomain"]) ? $context["translationDomain"] : $this->getContext($context, "translationDomain"))), "html", null, true);
        echo "
";
        
        $__internal_c179bc9bea9e844f574c423c628713bd803d5b82b0dda17c90a020364a289698->leave($__internal_c179bc9bea9e844f574c423c628713bd803d5b82b0dda17c90a020364a289698_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  45 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field%}*/
/*     {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}*/
/*     {% set valueFormat = field_description.options.format|default('%s') %}*/
/* */
/*     {{valueFormat|format(value)|trans({}, translationDomain)}}*/
/* {% endblock %}*/
/* */