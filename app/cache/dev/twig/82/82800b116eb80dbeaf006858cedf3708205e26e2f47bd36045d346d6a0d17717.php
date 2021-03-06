<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_117941c1439801c4c0dbde2e02998b52293fb317ae7914dc03d9f9e5be5d9f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe014c3e4c817ef9cc26914d11cf71304ac3984704acf03a651b77e1c6021414 = $this->env->getExtension("native_profiler");
        $__internal_fe014c3e4c817ef9cc26914d11cf71304ac3984704acf03a651b77e1c6021414->enter($__internal_fe014c3e4c817ef9cc26914d11cf71304ac3984704acf03a651b77e1c6021414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe014c3e4c817ef9cc26914d11cf71304ac3984704acf03a651b77e1c6021414->leave($__internal_fe014c3e4c817ef9cc26914d11cf71304ac3984704acf03a651b77e1c6021414_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_a49a393be9e3d0497476c474988943b0fad8daa2478d3f92da4b70c18f6964e4 = $this->env->getExtension("native_profiler");
        $__internal_a49a393be9e3d0497476c474988943b0fad8daa2478d3f92da4b70c18f6964e4->enter($__internal_a49a393be9e3d0497476c474988943b0fad8daa2478d3f92da4b70c18f6964e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_a49a393be9e3d0497476c474988943b0fad8daa2478d3f92da4b70c18f6964e4->leave($__internal_a49a393be9e3d0497476c474988943b0fad8daa2478d3f92da4b70c18f6964e4_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_e342cd649c26ee6f16b34d49da1a81194d2f5dfb70aa37da793486a24a2a1a18 = $this->env->getExtension("native_profiler");
        $__internal_e342cd649c26ee6f16b34d49da1a81194d2f5dfb70aa37da793486a24a2a1a18->enter($__internal_e342cd649c26ee6f16b34d49da1a81194d2f5dfb70aa37da793486a24a2a1a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('sonata_admin')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
        
        $__internal_e342cd649c26ee6f16b34d49da1a81194d2f5dfb70aa37da793486a24a2a1a18->leave($__internal_e342cd649c26ee6f16b34d49da1a81194d2f5dfb70aa37da793486a24a2a1a18_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 21,  60 => 20,  57 => 19,  51 => 18,  41 => 15,  35 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
/* {% block show_title %}*/
/*     {{ admin.trans(name) }}*/
/* {% endblock %}*/
/* */
/* {% block show_field %}*/
/*     <tr class="sonata-ba-view-container history-audit-compare">*/
/*         {% if elements[field_name] is defined %}*/
/*             {{ elements[field_name]|render_view_element_compare(object, object_compare) }}*/
/*         {% endif %}*/
/*     </tr>*/
/* {% endblock %}*/
/* */
