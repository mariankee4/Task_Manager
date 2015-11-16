<?php

/* TaskListBundle:Default:index.html.twig */
class __TwigTemplate_7eb19f63e57365d3b52c66d073ed1045c84212cf5e72d43924821a2eb935f201 extends Twig_Template
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
        $__internal_d83266582f5bb54855bcb8ff6ca6c7395fc3884894a0b8aa9c167bc586806453 = $this->env->getExtension("native_profiler");
        $__internal_d83266582f5bb54855bcb8ff6ca6c7395fc3884894a0b8aa9c167bc586806453->enter($__internal_d83266582f5bb54855bcb8ff6ca6c7395fc3884894a0b8aa9c167bc586806453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TaskListBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_d83266582f5bb54855bcb8ff6ca6c7395fc3884894a0b8aa9c167bc586806453->leave($__internal_d83266582f5bb54855bcb8ff6ca6c7395fc3884894a0b8aa9c167bc586806453_prof);

    }

    public function getTemplateName()
    {
        return "TaskListBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
