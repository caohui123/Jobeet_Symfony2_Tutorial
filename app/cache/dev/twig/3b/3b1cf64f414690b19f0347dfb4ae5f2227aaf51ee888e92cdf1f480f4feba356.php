<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_bca0bd27e82bc4f4a84988df0b8459f9a64a676eb8b427813edfaedf45096561 extends Twig_Template
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
        $__internal_5fb003e0d6f9cf8d5195ee722edd908bbf93b906c982010e006f27816a493653 = $this->env->getExtension("native_profiler");
        $__internal_5fb003e0d6f9cf8d5195ee722edd908bbf93b906c982010e006f27816a493653->enter($__internal_5fb003e0d6f9cf8d5195ee722edd908bbf93b906c982010e006f27816a493653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5fb003e0d6f9cf8d5195ee722edd908bbf93b906c982010e006f27816a493653->leave($__internal_5fb003e0d6f9cf8d5195ee722edd908bbf93b906c982010e006f27816a493653_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
