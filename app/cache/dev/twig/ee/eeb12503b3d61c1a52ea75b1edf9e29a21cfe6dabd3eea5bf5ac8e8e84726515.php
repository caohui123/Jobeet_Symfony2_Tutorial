<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_dc130b5be1e84e7370c1078406f5f9cca61f40a4dfb3342eb805076e1563ba9a extends Twig_Template
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
        $__internal_1ec14e8f3d91eb4b9a72c11936d0aff5577ef760c33f0315f4fc361a14fdf641 = $this->env->getExtension("native_profiler");
        $__internal_1ec14e8f3d91eb4b9a72c11936d0aff5577ef760c33f0315f4fc361a14fdf641->enter($__internal_1ec14e8f3d91eb4b9a72c11936d0aff5577ef760c33f0315f4fc361a14fdf641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1ec14e8f3d91eb4b9a72c11936d0aff5577ef760c33f0315f4fc361a14fdf641->leave($__internal_1ec14e8f3d91eb4b9a72c11936d0aff5577ef760c33f0315f4fc361a14fdf641_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */