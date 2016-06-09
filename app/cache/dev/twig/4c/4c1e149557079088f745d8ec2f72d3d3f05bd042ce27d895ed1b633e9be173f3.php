<?php

/* job/index.html.twig */
class __TwigTemplate_c4d5dad35dffdbd96fcefdf2bbddab536a7dc5a01aafdac7946b2a376e9f0006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d510b7d2629ab8839a4f3da1c69577bf5019de399bda38e4b0a9eded582d3e76 = $this->env->getExtension("native_profiler");
        $__internal_d510b7d2629ab8839a4f3da1c69577bf5019de399bda38e4b0a9eded582d3e76->enter($__internal_d510b7d2629ab8839a4f3da1c69577bf5019de399bda38e4b0a9eded582d3e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d510b7d2629ab8839a4f3da1c69577bf5019de399bda38e4b0a9eded582d3e76->leave($__internal_d510b7d2629ab8839a4f3da1c69577bf5019de399bda38e4b0a9eded582d3e76_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd1a0d5f73e8afa2c3820c7d7be8fae7f04e5dcec1b67d9619e33af376d777b9 = $this->env->getExtension("native_profiler");
        $__internal_bd1a0d5f73e8afa2c3820c7d7be8fae7f04e5dcec1b67d9619e33af376d777b9->enter($__internal_bd1a0d5f73e8afa2c3820c7d7be8fae7f04e5dcec1b67d9619e33af376d777b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bd1a0d5f73e8afa2c3820c7d7be8fae7f04e5dcec1b67d9619e33af376d777b9->leave($__internal_bd1a0d5f73e8afa2c3820c7d7be8fae7f04e5dcec1b67d9619e33af376d777b9_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_57281e5cb864d0b5f965e354379327d8bd475361f5e6b3459ec05de70c71e3d7 = $this->env->getExtension("native_profiler");
        $__internal_57281e5cb864d0b5f965e354379327d8bd475361f5e6b3459ec05de70c71e3d7->enter($__internal_57281e5cb864d0b5f965e354379327d8bd475361f5e6b3459ec05de70c71e3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "  <div id=\"jobs\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "      <div>
        <div class=\"category\">
          <div class=\"feed\">
            <a href=\"\">Feed</a>
          </div>
          <h1>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</h1>
        </div>
        <table class=\"jobs\">
          ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "activejobs", array()));
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
                // line 20
                echo "            <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\">
              <td class=\"location\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
                echo "</td>
              <td class=\"position\">
                <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "company" => $this->getAttribute($context["entity"], "companyslug", array()), "location" => $this->getAttribute($context["entity"], "locationslug", array()), "position" => $this->getAttribute($context["entity"], "positionslug", array()))), "html", null, true);
                echo "\">
                  ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
                echo "
                </a>
              </td>
              <td class=\"company\">";
                // line 27
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
            // line 30
            echo "        </table>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  </div>
";
        
        $__internal_57281e5cb864d0b5f965e354379327d8bd475361f5e6b3459ec05de70c71e3d7->leave($__internal_57281e5cb864d0b5f965e354379327d8bd475361f5e6b3459ec05de70c71e3d7_prof);

    }

    public function getTemplateName()
    {
        return "job/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 33,  135 => 30,  118 => 27,  112 => 24,  108 => 23,  103 => 21,  98 => 20,  81 => 19,  75 => 16,  68 => 11,  64 => 10,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <div id="jobs">*/
/*     {% for category in categories %}*/
/*       <div>*/
/*         <div class="category">*/
/*           <div class="feed">*/
/*             <a href="">Feed</a>*/
/*           </div>*/
/*           <h1>{{ category.name }}</h1>*/
/*         </div>*/
/*         <table class="jobs">*/
/*           {% for entity in category.activejobs %}*/
/*             <tr class="{{ cycle(['even', 'odd'], loop.index) }}">*/
/*               <td class="location">{{ entity.location }}</td>*/
/*               <td class="position">*/
/*                 <a href="{{ path('ens_job_show', { 'id': entity.id, 'company': entity.companyslug, 'location': entity.locationslug, 'position': entity.positionslug }) }}">*/
/*                   {{ entity.position }}*/
/*                 </a>*/
/*               </td>*/
/*               <td class="company">{{ entity.company }}</td>*/
/*             </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* {% endblock %}*/
/* */
