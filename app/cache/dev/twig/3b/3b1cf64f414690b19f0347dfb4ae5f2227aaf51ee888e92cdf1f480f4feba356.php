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
        $__internal_dfe674bbc8b6c7c5ddcca7af3308080c96e785c0bf323a61076c683081a2f29f = $this->env->getExtension("native_profiler");
        $__internal_dfe674bbc8b6c7c5ddcca7af3308080c96e785c0bf323a61076c683081a2f29f->enter($__internal_dfe674bbc8b6c7c5ddcca7af3308080c96e785c0bf323a61076c683081a2f29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dfe674bbc8b6c7c5ddcca7af3308080c96e785c0bf323a61076c683081a2f29f->leave($__internal_dfe674bbc8b6c7c5ddcca7af3308080c96e785c0bf323a61076c683081a2f29f_prof);

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
