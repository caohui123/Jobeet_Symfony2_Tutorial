<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_8992df6e782e041f36ee9c928c45454fc57cdc334953cdbfefb2f452f655baa1 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e80d66c656268ebe4f4ecfda152962f66090ecff5a58f38f1ebf2565ef5e5651 = $this->env->getExtension("native_profiler");
        $__internal_e80d66c656268ebe4f4ecfda152962f66090ecff5a58f38f1ebf2565ef5e5651->enter($__internal_e80d66c656268ebe4f4ecfda152962f66090ecff5a58f38f1ebf2565ef5e5651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e80d66c656268ebe4f4ecfda152962f66090ecff5a58f38f1ebf2565ef5e5651->leave($__internal_e80d66c656268ebe4f4ecfda152962f66090ecff5a58f38f1ebf2565ef5e5651_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a7d76d6ad135c3763ce58741b0391b8d8d5fb4c4e53396ca98e40e21ea79d610 = $this->env->getExtension("native_profiler");
        $__internal_a7d76d6ad135c3763ce58741b0391b8d8d5fb4c4e53396ca98e40e21ea79d610->enter($__internal_a7d76d6ad135c3763ce58741b0391b8d8d5fb4c4e53396ca98e40e21ea79d610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_a7d76d6ad135c3763ce58741b0391b8d8d5fb4c4e53396ca98e40e21ea79d610->leave($__internal_a7d76d6ad135c3763ce58741b0391b8d8d5fb4c4e53396ca98e40e21ea79d610_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
