<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_2791caa51b0d490b9d77346d1fc3cfe74cb9e3429d6e3716a72f11b7877f30d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a9200896b0bc684531cc604eec0d0162108a6dc473d742aed514e794efc98d8 = $this->env->getExtension("native_profiler");
        $__internal_2a9200896b0bc684531cc604eec0d0162108a6dc473d742aed514e794efc98d8->enter($__internal_2a9200896b0bc684531cc604eec0d0162108a6dc473d742aed514e794efc98d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a9200896b0bc684531cc604eec0d0162108a6dc473d742aed514e794efc98d8->leave($__internal_2a9200896b0bc684531cc604eec0d0162108a6dc473d742aed514e794efc98d8_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_9717c04e058013ec84bcbeddaba8902eb4f0626c5f345e9beefccb65feb98617 = $this->env->getExtension("native_profiler");
        $__internal_9717c04e058013ec84bcbeddaba8902eb4f0626c5f345e9beefccb65feb98617->enter($__internal_9717c04e058013ec84bcbeddaba8902eb4f0626c5f345e9beefccb65feb98617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_9717c04e058013ec84bcbeddaba8902eb4f0626c5f345e9beefccb65feb98617->leave($__internal_9717c04e058013ec84bcbeddaba8902eb4f0626c5f345e9beefccb65feb98617_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_5400ecdf0717a0e3a917e6eaac561af75af8b040352c088c062f4e148978db0a = $this->env->getExtension("native_profiler");
        $__internal_5400ecdf0717a0e3a917e6eaac561af75af8b040352c088c062f4e148978db0a->enter($__internal_5400ecdf0717a0e3a917e6eaac561af75af8b040352c088c062f4e148978db0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_5400ecdf0717a0e3a917e6eaac561af75af8b040352c088c062f4e148978db0a->leave($__internal_5400ecdf0717a0e3a917e6eaac561af75af8b040352c088c062f4e148978db0a_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_a427335a44ad59f64e86e546f34058f2ac867c7a368f981c8d51a173ba9bb30d = $this->env->getExtension("native_profiler");
        $__internal_a427335a44ad59f64e86e546f34058f2ac867c7a368f981c8d51a173ba9bb30d->enter($__internal_a427335a44ad59f64e86e546f34058f2ac867c7a368f981c8d51a173ba9bb30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_a427335a44ad59f64e86e546f34058f2ac867c7a368f981c8d51a173ba9bb30d->leave($__internal_a427335a44ad59f64e86e546f34058f2ac867c7a368f981c8d51a173ba9bb30d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
