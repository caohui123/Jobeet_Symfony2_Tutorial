<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_1de906d03cb3f12cf7bf9e7e3b76951f9276e9b64001ae2469bd0392b57a004e extends Twig_Template
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
        $__internal_b13e6721540a6f00693331af96e3e9a526ea376710a0eb1dc14b40037511cf0a = $this->env->getExtension("native_profiler");
        $__internal_b13e6721540a6f00693331af96e3e9a526ea376710a0eb1dc14b40037511cf0a->enter($__internal_b13e6721540a6f00693331af96e3e9a526ea376710a0eb1dc14b40037511cf0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b13e6721540a6f00693331af96e3e9a526ea376710a0eb1dc14b40037511cf0a->leave($__internal_b13e6721540a6f00693331af96e3e9a526ea376710a0eb1dc14b40037511cf0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
