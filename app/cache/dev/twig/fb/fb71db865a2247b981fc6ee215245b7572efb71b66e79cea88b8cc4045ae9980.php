<?php

/* job/show.html.twig */
class __TwigTemplate_217e238c07fd2727243ea3de931f907f984255b4ad794f3e4dc120693332b1fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_1344f256b14a13b0556d5e401646fa01ddf5cc997d7a147b9cf11e31463a7059 = $this->env->getExtension("native_profiler");
        $__internal_1344f256b14a13b0556d5e401646fa01ddf5cc997d7a147b9cf11e31463a7059->enter($__internal_1344f256b14a13b0556d5e401646fa01ddf5cc997d7a147b9cf11e31463a7059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1344f256b14a13b0556d5e401646fa01ddf5cc997d7a147b9cf11e31463a7059->leave($__internal_1344f256b14a13b0556d5e401646fa01ddf5cc997d7a147b9cf11e31463a7059_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c96e5023d565ad1e05eca9e2679ea942d6b82365dd7f10a28d1baaeca792cdca = $this->env->getExtension("native_profiler");
        $__internal_c96e5023d565ad1e05eca9e2679ea942d6b82365dd7f10a28d1baaeca792cdca->enter($__internal_c96e5023d565ad1e05eca9e2679ea942d6b82365dd7f10a28d1baaeca792cdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
";
        
        $__internal_c96e5023d565ad1e05eca9e2679ea942d6b82365dd7f10a28d1baaeca792cdca->leave($__internal_c96e5023d565ad1e05eca9e2679ea942d6b82365dd7f10a28d1baaeca792cdca_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_146f2cf02585b2da58f2ceaa1baf09d44efcbed9848bd43f68cdd226b4f9f98d = $this->env->getExtension("native_profiler");
        $__internal_146f2cf02585b2da58f2ceaa1baf09d44efcbed9848bd43f68cdd226b4f9f98d->enter($__internal_146f2cf02585b2da58f2ceaa1baf09d44efcbed9848bd43f68cdd226b4f9f98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_146f2cf02585b2da58f2ceaa1baf09d44efcbed9848bd43f68cdd226b4f9f98d->leave($__internal_146f2cf02585b2da58f2ceaa1baf09d44efcbed9848bd43f68cdd226b4f9f98d_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_14ec644a004689b56851f140bc64ec9a195207c609cad5929eb5c96f2417f527 = $this->env->getExtension("native_profiler");
        $__internal_14ec644a004689b56851f140bc64ec9a195207c609cad5929eb5c96f2417f527->enter($__internal_14ec644a004689b56851f140bc64ec9a195207c609cad5929eb5c96f2417f527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div id=\"job\">
      <h1>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo "</h1>
      <h2>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "location", array()), "html", null, true);
        echo "</h2>
      <h3>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
        <small> - ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "type", array()), "html", null, true);
        echo "</small>
      </h3>
 
      ";
        // line 21
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array())) {
            // line 22
            echo "        <div class=\"logo\">
          <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "url", array()), "html", null, true);
            echo "\">
            <img src=\"/uploads/jobs/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array()), "html", null, true);
            echo "\"
              alt=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
            echo " logo\" />
          </a>
        </div>
      ";
        }
        // line 29
        echo " 
      <div class=\"description\">
        ";
        // line 31
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "description", array()), "html", null, true));
        echo "
      </div>
 
      <h4>How to apply?</h4>
 
      <p class=\"how_to_apply\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "howtoapply", array()), "html", null, true);
        echo "</p>
 
      <div class=\"meta\">
        <small>posted on ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "createdat", array()), "m/d/Y"), "html", null, true);
        echo "</small>
      </div>
 
      <div style=\"padding: 20px 0\">
        <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id", array()))), "html", null, true);
        echo "\">
          Edit
        </a>
      </div>
    </div>
";
        
        $__internal_14ec644a004689b56851f140bc64ec9a195207c609cad5929eb5c96f2417f527->leave($__internal_14ec644a004689b56851f140bc64ec9a195207c609cad5929eb5c96f2417f527_prof);

    }

    public function getTemplateName()
    {
        return "job/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  140 => 39,  134 => 36,  126 => 31,  122 => 29,  115 => 25,  111 => 24,  107 => 23,  104 => 22,  102 => 21,  96 => 18,  92 => 17,  87 => 15,  83 => 14,  80 => 13,  74 => 12,  65 => 9,  60 => 8,  54 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ job.company }} is looking for a {{ job.position }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/job.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="job">*/
/*       <h1>{{ job.company }}</h1>*/
/*       <h2>{{ job.location }}</h2>*/
/*       <h3>*/
/*         {{ job.position }}*/
/*         <small> - {{ job.type }}</small>*/
/*       </h3>*/
/*  */
/*       {% if job.logo %}*/
/*         <div class="logo">*/
/*           <a href="{{ job.url }}">*/
/*             <img src="/uploads/jobs/{{ job.logo }}"*/
/*               alt="{{ job.company }} logo" />*/
/*           </a>*/
/*         </div>*/
/*       {% endif %}*/
/*  */
/*       <div class="description">*/
/*         {{ job.description|nl2br }}*/
/*       </div>*/
/*  */
/*       <h4>How to apply?</h4>*/
/*  */
/*       <p class="how_to_apply">{{ job.howtoapply }}</p>*/
/*  */
/*       <div class="meta">*/
/*         <small>posted on {{ job.createdat|date('m/d/Y') }}</small>*/
/*       </div>*/
/*  */
/*       <div style="padding: 20px 0">*/
/*         <a href="{{ path('ens_job_edit', { 'id': job.id }) }}">*/
/*           Edit*/
/*         </a>*/
/*       </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */