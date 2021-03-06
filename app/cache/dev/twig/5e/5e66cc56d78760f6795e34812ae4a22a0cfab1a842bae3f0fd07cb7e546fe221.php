<?php

/* @EnsJobeet/job/list.html.twig */
class __TwigTemplate_746c8ce0eed715d4b8590ae6852cd8f574f7a2b112ffb49defdbd998f4c592aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_747e3a9aea74b20108f7d60e1dd3d2542bf809723a4dae4408349f7089f94d1c = $this->env->getExtension("native_profiler");
        $__internal_747e3a9aea74b20108f7d60e1dd3d2542bf809723a4dae4408349f7089f94d1c->enter($__internal_747e3a9aea74b20108f7d60e1dd3d2542bf809723a4dae4408349f7089f94d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/job/list.html.twig"));

        // line 1
        echo "<!-- src/Ens/JobeetBundle/Resources/views/Job/list.html.twig -->
 
<table class=\"jobs\">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 5
            echo "    <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
      <td class=\"location\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo "</td>
      <td class=\"position\">
        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "company" => $this->getAttribute($context["entity"], "companyslug", array()), "location" => $this->getAttribute($context["entity"], "locationslug", array()), "position" => $this->getAttribute($context["entity"], "positionslug", array()))), "html", null, true);
            echo "\">
          ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "
        </a>
      </td>
      <td class=\"company\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
            echo "</td>
    </tr>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</table>";
        
        $__internal_747e3a9aea74b20108f7d60e1dd3d2542bf809723a4dae4408349f7089f94d1c->leave($__internal_747e3a9aea74b20108f7d60e1dd3d2542bf809723a4dae4408349f7089f94d1c_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/job/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  64 => 12,  58 => 9,  54 => 8,  49 => 6,  44 => 5,  27 => 4,  22 => 1,);
    }
}
/* <!-- src/Ens/JobeetBundle/Resources/views/Job/list.html.twig -->*/
/*  */
/* <table class="jobs">*/
/*   {% for entity in jobs %}*/
/*     <tr class="{{ cycle(['even', 'odd'], loop.index) }}">*/
/*       <td class="location">{{ entity.location }}</td>*/
/*       <td class="position">*/
/*         <a href="{{ path('ens_job_show', { 'id': entity.id, 'company': entity.companyslug, 'location': entity.locationslug, 'position': entity.positionslug }) }}">*/
/*           {{ entity.position }}*/
/*         </a>*/
/*       </td>*/
/*       <td class="company">{{ entity.company }}</td>*/
/*     </tr>*/
/*   {% endfor %}*/
/* </table>*/
