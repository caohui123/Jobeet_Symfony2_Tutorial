<?php

/* @EnsJobeet/JobAdmin/list_image.html.twig */
class __TwigTemplate_063f99bc233364714f069f7f307e3dbf37d755bdfdf08330ee1c5cee0804a152 extends Twig_Template
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
        $__internal_7de66790c75fb8e382be005bac35520d33f07c3dc1d85bdbdb13b56b76785d4f = $this->env->getExtension("native_profiler");
        $__internal_7de66790c75fb8e382be005bac35520d33f07c3dc1d85bdbdb13b56b76785d4f->enter($__internal_7de66790c75fb8e382be005bac35520d33f07c3dc1d85bdbdb13b56b76785d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/JobAdmin/list_image.html.twig"));

        // line 1
        echo "<!-- src/Ens/JobeetBundle/Resources/views/JobAdmin/list_image.html.twig -->

<tr>
\t<th>Logo</th>
\t<td><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "webPath", array())), "html", null, true);
        echo "\" /></td>
</tr>";
        
        $__internal_7de66790c75fb8e382be005bac35520d33f07c3dc1d85bdbdb13b56b76785d4f->leave($__internal_7de66790c75fb8e382be005bac35520d33f07c3dc1d85bdbdb13b56b76785d4f_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/JobAdmin/list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,);
    }
}
/* <!-- src/Ens/JobeetBundle/Resources/views/JobAdmin/list_image.html.twig -->*/
/* */
/* <tr>*/
/* 	<th>Logo</th>*/
/* 	<td><img src="{{ asset(object.webPath) }}" /></td>*/
/* </tr>*/