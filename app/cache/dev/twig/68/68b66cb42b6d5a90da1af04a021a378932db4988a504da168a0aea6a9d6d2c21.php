<?php

/* @SonataAdmin/Block/block_stats.html.twig */
class __TwigTemplate_2f132b5c0253703f09431159b7d6695f1833a340d51efd33bfb69ee838258350 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataAdmin/Block/block_stats.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1d5bff136d627a5d798b4e4a12f02b5972161ba803c5a917db67357691af518 = $this->env->getExtension("native_profiler");
        $__internal_f1d5bff136d627a5d798b4e4a12f02b5972161ba803c5a917db67357691af518->enter($__internal_f1d5bff136d627a5d798b4e4a12f02b5972161ba803c5a917db67357691af518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_stats.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1d5bff136d627a5d798b4e4a12f02b5972161ba803c5a917db67357691af518->leave($__internal_f1d5bff136d627a5d798b4e4a12f02b5972161ba803c5a917db67357691af518_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_47a65b7bf784ce1cc95d3331dbcbf1938c1b1b2aae4170498ddad402399e13cb = $this->env->getExtension("native_profiler");
        $__internal_47a65b7bf784ce1cc95d3331dbcbf1938c1b1b2aae4170498ddad402399e13cb->enter($__internal_47a65b7bf784ce1cc95d3331dbcbf1938c1b1b2aae4170498ddad402399e13cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <!-- small box -->
    <div class=\"small-box ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "color", array()), "html", null, true);
        echo "\">
        <div class=\"inner\">
            <h3>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "count", array(), "method"), "html", null, true);
        echo "</h3>

            <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "text", array()), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())), "html", null, true);
        echo "</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "icon", array()), "html", null, true);
        echo "\"></i>
        </div>
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "filters", array()))), "method"), "html", null, true);
        echo "\" class=\"small-box-footer\">
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("stats_view_more", array(), "SonataAdminBundle"), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\"></i>
        </a>
    </div>
";
        
        $__internal_47a65b7bf784ce1cc95d3331dbcbf1938c1b1b2aae4170498ddad402399e13cb->leave($__internal_47a65b7bf784ce1cc95d3331dbcbf1938c1b1b2aae4170498ddad402399e13cb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Block/block_stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 26,  63 => 25,  58 => 23,  52 => 20,  47 => 18,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <!-- small box -->*/
/*     <div class="small-box {{ settings.color }}">*/
/*         <div class="inner">*/
/*             <h3>{{ pager.count() }}</h3>*/
/* */
/*             <p>{{ settings.text|trans({}, admin.translationDomain) }}</p>*/
/*         </div>*/
/*         <div class="icon">*/
/*             <i class="fa {{ settings.icon }}"></i>*/
/*         </div>*/
/*         <a href="{{ admin.generateUrl('list', {filter: settings.filters}) }}" class="small-box-footer">*/
/*             {{ 'stats_view_more'|trans({}, 'SonataAdminBundle') }} <i class="fa fa-arrow-circle-right"></i>*/
/*         </a>*/
/*     </div>*/
/* {% endblock %}*/
/* */