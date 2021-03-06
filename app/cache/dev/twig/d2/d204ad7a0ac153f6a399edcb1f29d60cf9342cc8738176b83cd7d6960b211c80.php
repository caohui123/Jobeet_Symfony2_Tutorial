<?php

/* @SonataAdmin/CRUD/list_currency.html.twig */
class __TwigTemplate_2029330c94f8f55d1f2064e3202dd95f479658bfbec6d5ba9c7d6a46a79cb43a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6248eed6b42447dd7d3d2ab7f87ee31ad4bb4aca53ca781063169ae671a63060 = $this->env->getExtension("native_profiler");
        $__internal_6248eed6b42447dd7d3d2ab7f87ee31ad4bb4aca53ca781063169ae671a63060->enter($__internal_6248eed6b42447dd7d3d2ab7f87ee31ad4bb4aca53ca781063169ae671a63060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6248eed6b42447dd7d3d2ab7f87ee31ad4bb4aca53ca781063169ae671a63060->leave($__internal_6248eed6b42447dd7d3d2ab7f87ee31ad4bb4aca53ca781063169ae671a63060_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d7047522e7bd91844210163504e2fc17c950e5ee52d1276aacd993df7e3db164 = $this->env->getExtension("native_profiler");
        $__internal_d7047522e7bd91844210163504e2fc17c950e5ee52d1276aacd993df7e3db164->enter($__internal_d7047522e7bd91844210163504e2fc17c950e5ee52d1276aacd993df7e3db164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_d7047522e7bd91844210163504e2fc17c950e5ee52d1276aacd993df7e3db164->leave($__internal_d7047522e7bd91844210163504e2fc17c950e5ee52d1276aacd993df7e3db164_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
