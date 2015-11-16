<?php

/* TaskListBundle:Task:new.html.twig */
class __TwigTemplate_95c7c33db5df273d75411a18cdaace84b5aa5db2fb2aa657f87e046d85b54928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TaskListBundle:Task:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d12ecbd37b19587211581a7111c8953e4b0d3e865b44070bf00dd71abded999 = $this->env->getExtension("native_profiler");
        $__internal_4d12ecbd37b19587211581a7111c8953e4b0d3e865b44070bf00dd71abded999->enter($__internal_4d12ecbd37b19587211581a7111c8953e4b0d3e865b44070bf00dd71abded999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TaskListBundle:Task:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d12ecbd37b19587211581a7111c8953e4b0d3e865b44070bf00dd71abded999->leave($__internal_4d12ecbd37b19587211581a7111c8953e4b0d3e865b44070bf00dd71abded999_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d74091d69f4c67b15f7d6ebb37a0b88630c9e4f2b26946ed2637d05c58e2dd7 = $this->env->getExtension("native_profiler");
        $__internal_3d74091d69f4c67b15f7d6ebb37a0b88630c9e4f2b26946ed2637d05c58e2dd7->enter($__internal_3d74091d69f4c67b15f7d6ebb37a0b88630c9e4f2b26946ed2637d05c58e2dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Task creation</h1>

    <div class=\"form_error\"></div>
    <form method=\"POST\" class=\"ajaxForm\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("task_create");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        <div id=\"form_body\">
            ";
        // line 10
        $this->loadTemplate("TaskListBundle:Task:form.html.twig", "TaskListBundle:Task:new.html.twig", 10)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 11
        echo "            <br />
            <button type=\"submit\" class=\"btn btn-primary\">Create</button>
        </div>
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("task");
        echo "\">
                Back to the list
            </a>
        </li>
    </ul>
";
        
        $__internal_3d74091d69f4c67b15f7d6ebb37a0b88630c9e4f2b26946ed2637d05c58e2dd7->leave($__internal_3d74091d69f4c67b15f7d6ebb37a0b88630c9e4f2b26946ed2637d05c58e2dd7_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_907ee185a327612fa185e7c6c0c00137b1d7f5120bc661dd9641a806a1a4938f = $this->env->getExtension("native_profiler");
        $__internal_907ee185a327612fa185e7c6c0c00137b1d7f5120bc661dd9641a806a1a4938f->enter($__internal_907ee185a327612fa185e7c6c0c00137b1d7f5120bc661dd9641a806a1a4938f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        initAjaxForm();
        \$(document).ready(function() {
            \$('.date').datepicker({ 
                dateFormat: 'dd-mm-yy',
                disableTouchKeyboard: true,
                autoclose: true,
                minDate: new Date()
            });
        });
    </script>
";
        
        $__internal_907ee185a327612fa185e7c6c0c00137b1d7f5120bc661dd9641a806a1a4938f->leave($__internal_907ee185a327612fa185e7c6c0c00137b1d7f5120bc661dd9641a806a1a4938f_prof);

    }

    public function getTemplateName()
    {
        return "TaskListBundle:Task:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  81 => 25,  68 => 19,  60 => 14,  55 => 11,  53 => 10,  46 => 8,  41 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*         */
/*     <h1>Task creation</h1>*/
/* */
/*     <div class="form_error"></div>*/
/*     <form method="POST" class="ajaxForm" action="{{path('task_create')}}" {{ form_enctype(form) }}>*/
/*         <div id="form_body">*/
/*             {% include 'TaskListBundle:Task:form.html.twig' with {'form': form} %}*/
/*             <br />*/
/*             <button type="submit" class="btn btn-primary">Create</button>*/
/*         </div>*/
/*         {{form_rest(form)}}*/
/*     </form>*/
/* */
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('task') }}">*/
/*                 Back to the list*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript">*/
/*         initAjaxForm();*/
/*         $(document).ready(function() {*/
/*             $('.date').datepicker({ */
/*                 dateFormat: 'dd-mm-yy',*/
/*                 disableTouchKeyboard: true,*/
/*                 autoclose: true,*/
/*                 minDate: new Date()*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
