<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e7e616f5ea23dcc2c2de1986e0994b92ad6f3c74ffa7354bf7e8505c62c7fce2 extends Twig_Template
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
        $__internal_e800293ed4753bd6d6daf82a76130df78298511d32e6ee10bf6f28b70630f494 = $this->env->getExtension("native_profiler");
        $__internal_e800293ed4753bd6d6daf82a76130df78298511d32e6ee10bf6f28b70630f494->enter($__internal_e800293ed4753bd6d6daf82a76130df78298511d32e6ee10bf6f28b70630f494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e800293ed4753bd6d6daf82a76130df78298511d32e6ee10bf6f28b70630f494->leave($__internal_e800293ed4753bd6d6daf82a76130df78298511d32e6ee10bf6f28b70630f494_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
