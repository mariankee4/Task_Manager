<?php

/* TaskListBundle:TaskList:edit.html.twig */
class __TwigTemplate_23c97b9ea0029047a29f32bf6e7095bc9ecae3d58ae3bf3d10d8d767d42d71ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TaskListBundle:TaskList:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc974597255a18e4cfce7e3f62588608afa3a65973893141297a7f357716eb76 = $this->env->getExtension("native_profiler");
        $__internal_cc974597255a18e4cfce7e3f62588608afa3a65973893141297a7f357716eb76->enter($__internal_cc974597255a18e4cfce7e3f62588608afa3a65973893141297a7f357716eb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TaskListBundle:TaskList:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc974597255a18e4cfce7e3f62588608afa3a65973893141297a7f357716eb76->leave($__internal_cc974597255a18e4cfce7e3f62588608afa3a65973893141297a7f357716eb76_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c1fa05fdd34ab0cc607aafe90d19b96d7884a10159733b7593fadbe6f126ae6 = $this->env->getExtension("native_profiler");
        $__internal_8c1fa05fdd34ab0cc607aafe90d19b96d7884a10159733b7593fadbe6f126ae6->enter($__internal_8c1fa05fdd34ab0cc607aafe90d19b96d7884a10159733b7593fadbe6f126ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>TaskList edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("list");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_8c1fa05fdd34ab0cc607aafe90d19b96d7884a10159733b7593fadbe6f126ae6->leave($__internal_8c1fa05fdd34ab0cc607aafe90d19b96d7884a10159733b7593fadbe6f126ae6_prof);

    }

    public function getTemplateName()
    {
        return "TaskListBundle:TaskList:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>TaskList edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('list') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
