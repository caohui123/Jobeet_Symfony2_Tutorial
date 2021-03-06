<?php

/* :job:new.html.twig */
class __TwigTemplate_93afe33a760191f56e798264b341af67a45c41dc0358b962b854397c52a31275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:new.html.twig", 1);
        $this->blocks = array(
            'field_errors' => array($this, 'block_field_errors'),
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
        $__internal_b128aa92c10202f742833dbd640c26a766e2f7e242954ea26ef13bfa973c3975 = $this->env->getExtension("native_profiler");
        $__internal_b128aa92c10202f742833dbd640c26a766e2f7e242954ea26ef13bfa973c3975->enter($__internal_b128aa92c10202f742833dbd640c26a766e2f7e242954ea26ef13bfa973c3975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b128aa92c10202f742833dbd640c26a766e2f7e242954ea26ef13bfa973c3975->leave($__internal_b128aa92c10202f742833dbd640c26a766e2f7e242954ea26ef13bfa973c3975_prof);

    }

    // line 5
    public function block_field_errors($context, array $blocks = array())
    {
        $__internal_935e7f8c9c75c4a6587e740bd085afb9cfb74146b64d664d721f53529eae7b68 = $this->env->getExtension("native_profiler");
        $__internal_935e7f8c9c75c4a6587e740bd085afb9cfb74146b64d664d721f53529eae7b68->enter($__internal_935e7f8c9c75c4a6587e740bd085afb9cfb74146b64d664d721f53529eae7b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_errors"));

        // line 6
        ob_start();
        // line 7
        echo "  ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            echo "    <ul class=\"error_list\">
      ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "        <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"), "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </ul>
  ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_935e7f8c9c75c4a6587e740bd085afb9cfb74146b64d664d721f53529eae7b68->leave($__internal_935e7f8c9c75c4a6587e740bd085afb9cfb74146b64d664d721f53529eae7b68_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0875ab410f74d6c0c9a77d73493252dfac2aea0f28eda237998dfc8aed9542be = $this->env->getExtension("native_profiler");
        $__internal_0875ab410f74d6c0c9a77d73493252dfac2aea0f28eda237998dfc8aed9542be->enter($__internal_0875ab410f74d6c0c9a77d73493252dfac2aea0f28eda237998dfc8aed9542be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0875ab410f74d6c0c9a77d73493252dfac2aea0f28eda237998dfc8aed9542be->leave($__internal_0875ab410f74d6c0c9a77d73493252dfac2aea0f28eda237998dfc8aed9542be_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_65a36bef71ba8f143be7ce17b09619c67c07a64b632b455b36f06eacd1c54533 = $this->env->getExtension("native_profiler");
        $__internal_65a36bef71ba8f143be7ce17b09619c67c07a64b632b455b36f06eacd1c54533->enter($__internal_65a36bef71ba8f143be7ce17b09619c67c07a64b632b455b36f06eacd1c54533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "  <h1>Job creation</h1>
  <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ens_job_new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    <table id=\"job_form\">
      <tfoot>
        <tr>
          <td colspan=\"2\">
            <input type=\"submit\" value=\"Preview your job\" />
          </td>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <th>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'errors');
        echo "
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company", array()), 'errors');
        echo "
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
        echo "
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'errors');
        echo "
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'errors');
        echo "
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'errors');
        echo "
            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
            ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply", array()), 'errors');
        echo "
            ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply", array()), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_public", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_public", array()), 'errors');
        echo "
            ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_public", array()), 'widget');
        echo "
            <br /> Whether the job can also be published on affiliate websites or not.
          </td>
        </tr>
        <tr>
          <th>";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "</th>
          <td>
            ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
            ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
          </td>
        </tr>
      </tbody>
    </table>
 
    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>
";
        
        $__internal_65a36bef71ba8f143be7ce17b09619c67c07a64b632b455b36f06eacd1c54533->leave($__internal_65a36bef71ba8f143be7ce17b09619c67c07a64b632b455b36f06eacd1c54533_prof);

    }

    public function getTemplateName()
    {
        return ":job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 115,  291 => 109,  287 => 108,  282 => 106,  274 => 101,  270 => 100,  265 => 98,  258 => 94,  254 => 93,  249 => 91,  242 => 87,  238 => 86,  233 => 84,  226 => 80,  222 => 79,  217 => 77,  210 => 73,  206 => 72,  201 => 70,  194 => 66,  190 => 65,  185 => 63,  178 => 59,  174 => 58,  169 => 56,  162 => 52,  158 => 51,  153 => 49,  146 => 45,  142 => 44,  137 => 42,  130 => 38,  126 => 37,  121 => 35,  105 => 24,  102 => 23,  96 => 22,  87 => 19,  82 => 18,  76 => 17,  66 => 12,  57 => 10,  53 => 9,  50 => 8,  47 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% form_theme form _self %}*/
/*  */
/* {% block field_errors %}*/
/* {% spaceless %}*/
/*   {% if errors|length > 0 %}*/
/*     <ul class="error_list">*/
/*       {% for error in errors %}*/
/*         <li>{{ error.messageTemplate|trans(error.messageParameters, 'validators') }}</li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock field_errors %}*/
/*  */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/job.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Job creation</h1>*/
/*   <form action="{{ path('ens_job_new') }}" method="post" {{ form_enctype(form) }}>*/
/*     <table id="job_form">*/
/*       <tfoot>*/
/*         <tr>*/
/*           <td colspan="2">*/
/*             <input type="submit" value="Preview your job" />*/
/*           </td>*/
/*         </tr>*/
/*       </tfoot>*/
/*       <tbody>*/
/*         <tr>*/
/*           <th>{{ form_label(form.category) }}</th>*/
/*           <td>*/
/*             {{ form_errors(form.category) }}*/
/*             {{ form_widget(form.category) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(form.type) }}</th>*/
/*           <td>*/
/*             {{ form_errors(form.type) }}*/
/*             {{ form_widget(form.type) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(form.company) }}</th>*/
/*           <td>*/
/*             {{ form_errors(form.company) }}*/
/*             {{ form_widget(form.company) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(form.file) }}</th>*/
/*           <td>*/
/*             {{ form_errors(form.file) }}*/
/*             {{ form_widget(form.file) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(form.url) }}</th>*/
/*           <td>*/
/*             {{ form_errors(form.url) }}*/
/*             {{ form_widget(form.url) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(form.position) }}</th>*/
/*           <td>*/
/*             {{ form_errors(form.position) }}*/
/*             {{ form_widget(form.position) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(form.location) }}</th>*/
/*           <td>*/
/*             {{ form_errors(form.location) }}*/
/*             {{ form_widget(form.location) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(form.description) }}</th>*/
/*           <td>*/
/*             {{ form_errors(form.description) }}*/
/*             {{ form_widget(form.description) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(form.how_to_apply) }}</th>*/
/*           <td>*/
/*             {{ form_errors(form.how_to_apply) }}*/
/*             {{ form_widget(form.how_to_apply) }}*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(form.is_public) }}</th>*/
/*           <td>*/
/*             {{ form_errors(form.is_public) }}*/
/*             {{ form_widget(form.is_public) }}*/
/*             <br /> Whether the job can also be published on affiliate websites or not.*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th>{{ form_label(form.email) }}</th>*/
/*           <td>*/
/*             {{ form_errors(form.email) }}*/
/*             {{ form_widget(form.email) }}*/
/*           </td>*/
/*         </tr>*/
/*       </tbody>*/
/*     </table>*/
/*  */
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* {% endblock %}*/
/* */
