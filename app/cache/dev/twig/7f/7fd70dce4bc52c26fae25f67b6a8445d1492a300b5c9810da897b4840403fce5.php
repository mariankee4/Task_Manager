<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e555540807f1a765c956ecebb9e1b92c16c054551817c8115efe1da60c43d1c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f528ce0180d03c6a0c2893b7d9fac0ba0eed724274c807737ff6623e2dd86d3 = $this->env->getExtension("native_profiler");
        $__internal_7f528ce0180d03c6a0c2893b7d9fac0ba0eed724274c807737ff6623e2dd86d3->enter($__internal_7f528ce0180d03c6a0c2893b7d9fac0ba0eed724274c807737ff6623e2dd86d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7f528ce0180d03c6a0c2893b7d9fac0ba0eed724274c807737ff6623e2dd86d3->leave($__internal_7f528ce0180d03c6a0c2893b7d9fac0ba0eed724274c807737ff6623e2dd86d3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f05d9d3852e785d5d8c49c14944d22e5ead603876a8b50cbb4ad74fb92a7bec7 = $this->env->getExtension("native_profiler");
        $__internal_f05d9d3852e785d5d8c49c14944d22e5ead603876a8b50cbb4ad74fb92a7bec7->enter($__internal_f05d9d3852e785d5d8c49c14944d22e5ead603876a8b50cbb4ad74fb92a7bec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f05d9d3852e785d5d8c49c14944d22e5ead603876a8b50cbb4ad74fb92a7bec7->leave($__internal_f05d9d3852e785d5d8c49c14944d22e5ead603876a8b50cbb4ad74fb92a7bec7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
