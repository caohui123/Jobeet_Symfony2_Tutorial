<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_0a4d6480741dd0ad8fde4fa59b310775cc92beb275da7540006ef4125fa1b60f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc104ecbc3ca789efe898844415f1f77d9ab9c4e5b1f41260edcba14d65393ef = $this->env->getExtension("native_profiler");
        $__internal_dc104ecbc3ca789efe898844415f1f77d9ab9c4e5b1f41260edcba14d65393ef->enter($__internal_dc104ecbc3ca789efe898844415f1f77d9ab9c4e5b1f41260edcba14d65393ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc104ecbc3ca789efe898844415f1f77d9ab9c4e5b1f41260edcba14d65393ef->leave($__internal_dc104ecbc3ca789efe898844415f1f77d9ab9c4e5b1f41260edcba14d65393ef_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4d626759118ebe5331309b1f87496d16203f4d60bec5cbab56b3a4f47341d933 = $this->env->getExtension("native_profiler");
        $__internal_4d626759118ebe5331309b1f87496d16203f4d60bec5cbab56b3a4f47341d933->enter($__internal_4d626759118ebe5331309b1f87496d16203f4d60bec5cbab56b3a4f47341d933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_4d626759118ebe5331309b1f87496d16203f4d60bec5cbab56b3a4f47341d933->leave($__internal_4d626759118ebe5331309b1f87496d16203f4d60bec5cbab56b3a4f47341d933_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <a class="btn btn-primary" href="{{ admin.generateUrl('list') }}">*/
/*         <i class="fa fa-check"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
