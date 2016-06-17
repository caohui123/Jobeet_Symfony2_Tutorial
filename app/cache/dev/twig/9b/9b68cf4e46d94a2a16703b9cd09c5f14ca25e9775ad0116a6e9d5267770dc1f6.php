<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_3e454767c3514f2841a096a5a1f166250c12247c879267f3d58f61bd5761ecf8 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_026db1bc05f38d70993440c331a2110bc3a80ec88b28a6999e19e08c1819d849 = $this->env->getExtension("native_profiler");
        $__internal_026db1bc05f38d70993440c331a2110bc3a80ec88b28a6999e19e08c1819d849->enter($__internal_026db1bc05f38d70993440c331a2110bc3a80ec88b28a6999e19e08c1819d849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:batch_confirmation.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_026db1bc05f38d70993440c331a2110bc3a80ec88b28a6999e19e08c1819d849->leave($__internal_026db1bc05f38d70993440c331a2110bc3a80ec88b28a6999e19e08c1819d849_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_2fd8d3a3e4ae1c0396625d4d3e0e0739b1f07100aafafa1b2a46bb318864dfd0 = $this->env->getExtension("native_profiler");
        $__internal_2fd8d3a3e4ae1c0396625d4d3e0e0739b1f07100aafafa1b2a46bb318864dfd0->enter($__internal_2fd8d3a3e4ae1c0396625d4d3e0e0739b1f07100aafafa1b2a46bb318864dfd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 15)->display($context);
        
        $__internal_2fd8d3a3e4ae1c0396625d4d3e0e0739b1f07100aafafa1b2a46bb318864dfd0->leave($__internal_2fd8d3a3e4ae1c0396625d4d3e0e0739b1f07100aafafa1b2a46bb318864dfd0_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_e56badb5fce3458b1bf2cf84acb14711525287146c8257c93d91a439116e23b2 = $this->env->getExtension("native_profiler");
        $__internal_e56badb5fce3458b1bf2cf84acb14711525287146c8257c93d91a439116e23b2->enter($__internal_e56badb5fce3458b1bf2cf84acb14711525287146c8257c93d91a439116e23b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_e56badb5fce3458b1bf2cf84acb14711525287146c8257c93d91a439116e23b2->leave($__internal_e56badb5fce3458b1bf2cf84acb14711525287146c8257c93d91a439116e23b2_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_f4135937bf8405467c4b40d30d3f5fc07b42d93951f540a79768d25936cbee8d = $this->env->getExtension("native_profiler");
        $__internal_f4135937bf8405467c4b40d30d3f5fc07b42d93951f540a79768d25936cbee8d->enter($__internal_f4135937bf8405467c4b40d30d3f5fc07b42d93951f540a79768d25936cbee8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h4 class=\"box-title\">";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_batch_confirmation", array("%action%" => (isset($context["action_label"]) ? $context["action_label"] : $this->getContext($context, "action_label"))), "SonataAdminBundle");
        echo "</h4>
            </div>
            <div class=\"box-body\">
                ";
        // line 27
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "all_elements", array())) {
            // line 28
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_batch_all_confirmation", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                ";
        } else {
            // line 30
            echo "                    ";
            echo $this->env->getExtension('translator')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx", array())), array("%count%" => twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx", array()))), "SonataAdminBundle");
            // line 31
            echo "                ";
        }
        // line 32
        echo "            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
        echo "\" method=\"POST\">
                    <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                    <input type=\"hidden\" name=\"data\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <div style=\"display: none\">
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    </div>

                    <button type=\"submit\" class=\"btn btn-danger\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_execute_batch_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>

                    ";
        // line 45
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 46
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-th-list\"></i> ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 52
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_f4135937bf8405467c4b40d30d3f5fc07b42d93951f540a79768d25936cbee8d->leave($__internal_f4135937bf8405467c4b40d30d3f5fc07b42d93951f540a79768d25936cbee8d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 52,  134 => 49,  130 => 48,  124 => 46,  122 => 45,  117 => 43,  111 => 40,  105 => 37,  101 => 36,  96 => 34,  92 => 32,  89 => 31,  86 => 30,  80 => 28,  78 => 27,  72 => 24,  67 => 21,  61 => 20,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="sonata-ba-delete">*/
/*         <div class="box box-danger">*/
/*             <div class="box-header">*/
/*                 <h4 class="box-title">{% trans with {'%action%': action_label} from 'SonataAdminBundle' %}title_batch_confirmation{% endtrans %}</h4>*/
/*             </div>*/
/*             <div class="box-body">*/
/*                 {% if data.all_elements %}*/
/*                     {{ 'message_batch_all_confirmation'|trans({}, 'SonataAdminBundle') }}*/
/*                 {% else %}*/
/*                     {% transchoice data.idx|length with {'%count%': data.idx|length} from 'SonataAdminBundle' %}message_batch_confirmation{% endtranschoice %}*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="box-footer clearfix">*/
/*                 <form action="{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}" method="POST">*/
/*                     <input type="hidden" name="confirmation" value="ok">*/
/*                     <input type="hidden" name="data" value="{{ data|json_encode }}">*/
/*                     <input type="hidden" name="_sonata_csrf_token" value="{{ csrf_token }}">*/
/* */
/*                     <div style="display: none">*/
/*                         {{ form_rest(form) }}*/
/*                     </div>*/
/* */
/*                     <button type="submit" class="btn btn-danger">{{ 'btn_execute_batch_action'|trans({}, 'SonataAdminBundle') }}</button>*/
/* */
/*                     {% if admin.hasRoute('list') and admin.isGranted('LIST') %}*/
/*                         {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}*/
/* */
/*                         <a class="btn btn-success" href="{{ admin.generateUrl('list') }}">*/
/*                             <i class="fa fa-th-list"></i> {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}*/
/*                         </a>*/
/*                     {% endif %}*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
