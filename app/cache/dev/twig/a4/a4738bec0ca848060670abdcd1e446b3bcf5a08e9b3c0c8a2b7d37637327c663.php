<?php

/* @SonataBlock/Block/block_template.html.twig */
class __TwigTemplate_3fd68d876d1f86f2f1c6e4e72d24b0cd904cf864e5971c8eb71246c04d83c4a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10f5d0fd5ec4cfe6a3459c6e6140b5c2d4c6c0f2087cd8b644e63013d4a01315 = $this->env->getExtension("native_profiler");
        $__internal_10f5d0fd5ec4cfe6a3459c6e6140b5c2d4c6c0f2087cd8b644e63013d4a01315->enter($__internal_10f5d0fd5ec4cfe6a3459c6e6140b5c2d4c6c0f2087cd8b644e63013d4a01315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10f5d0fd5ec4cfe6a3459c6e6140b5c2d4c6c0f2087cd8b644e63013d4a01315->leave($__internal_10f5d0fd5ec4cfe6a3459c6e6140b5c2d4c6c0f2087cd8b644e63013d4a01315_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_93687d8a5db3c096d4d3347b7eae1ba80b01c441cad713f40c49dfd0e2302168 = $this->env->getExtension("native_profiler");
        $__internal_93687d8a5db3c096d4d3347b7eae1ba80b01c441cad713f40c49dfd0e2302168->enter($__internal_93687d8a5db3c096d4d3347b7eae1ba80b01c441cad713f40c49dfd0e2302168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>";
        // line 33
        echo "{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}";
        echo "</pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>";
        // line 43
        echo "{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}";
        echo "</pre>
";
        
        $__internal_93687d8a5db3c096d4d3347b7eae1ba80b01c441cad713f40c49dfd0e2302168->leave($__internal_93687d8a5db3c096d4d3347b7eae1ba80b01c441cad713f40c49dfd0e2302168_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 43,  44 => 33,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <h3>Sonata Block Template</h3>*/
/*     If you want to use the <code>sonata.block.template</code> block type, you need to create a template :*/
/* */
/*     <pre>*/
/*         {%- verbatim -%}*/
/* {# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}*/
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     &lt;h3&gt;The block title&lt;/h3&gt;*/
/*     &lt;p&gt;*/
/*         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus*/
/*         vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,*/
/*         mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet*/
/*         massa volutpat auctor.*/
/*     &lt;/p&gt;*/
/* {% endblock %}*/
/*         {%- endverbatim -%}*/
/*     </pre>*/
/* */
/*     And then call it from a template with the <code>sonata_block_render</code> helper:*/
/* */
/*     <pre>*/
/* {%- verbatim -%}*/
/* {{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {*/
/*     'template': 'MyBundle:Block:my_block_feature_1.html.twig',*/
/* }) }}*/
/* {%- endverbatim -%}*/
/*     </pre>*/
/* {% endblock %}*/
/* */
