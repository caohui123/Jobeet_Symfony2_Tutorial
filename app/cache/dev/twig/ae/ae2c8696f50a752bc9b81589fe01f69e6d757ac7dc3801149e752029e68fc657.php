<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_88349db668e388d6c9dd7e53547deff5dd8050bfe6a077731af95861e90bf002 extends Twig_Template
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
        $__internal_36d12539f18cb6fcfb4bd0ca6ddf52a2cfbe3d49dcf3c8a3154944ddb06455eb = $this->env->getExtension("native_profiler");
        $__internal_36d12539f18cb6fcfb4bd0ca6ddf52a2cfbe3d49dcf3c8a3154944ddb06455eb->enter($__internal_36d12539f18cb6fcfb4bd0ca6ddf52a2cfbe3d49dcf3c8a3154944ddb06455eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_36d12539f18cb6fcfb4bd0ca6ddf52a2cfbe3d49dcf3c8a3154944ddb06455eb->leave($__internal_36d12539f18cb6fcfb4bd0ca6ddf52a2cfbe3d49dcf3c8a3154944ddb06455eb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */