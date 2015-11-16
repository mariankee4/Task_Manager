<?php

/* TaskListBundle:TaskList:new.html.twig */
class __TwigTemplate_cef1fa96772eb5c76c5d454917533ab74a153845aa7b25055238dd5ca5a83026 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TaskListBundle:TaskList:new.html.twig", 1);
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
        $__internal_e41ac4c91a4890651def95036b47bc8f7fcc0aa0a1ecceadcadbf601327ce1ee = $this->env->getExtension("native_profiler");
        $__internal_e41ac4c91a4890651def95036b47bc8f7fcc0aa0a1ecceadcadbf601327ce1ee->enter($__internal_e41ac4c91a4890651def95036b47bc8f7fcc0aa0a1ecceadcadbf601327ce1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TaskListBundle:TaskList:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e41ac4c91a4890651def95036b47bc8f7fcc0aa0a1ecceadcadbf601327ce1ee->leave($__internal_e41ac4c91a4890651def95036b47bc8f7fcc0aa0a1ecceadcadbf601327ce1ee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fbf4db2617c68bcc913418f49eee77f150c31f2c4d0c788fa3d45fc60aa2f8f = $this->env->getExtension("native_profiler");
        $__internal_6fbf4db2617c68bcc913418f49eee77f150c31f2c4d0c788fa3d45fc60aa2f8f->enter($__internal_6fbf4db2617c68bcc913418f49eee77f150c31f2c4d0c788fa3d45fc60aa2f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>TaskList creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_6fbf4db2617c68bcc913418f49eee77f150c31f2c4d0c788fa3d45fc60aa2f8f->leave($__internal_6fbf4db2617c68bcc913418f49eee77f150c31f2c4d0c788fa3d45fc60aa2f8f_prof);

    }

    public function getTemplateName()
    {
        return "TaskListBundle:TaskList:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>TaskList creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('list') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
