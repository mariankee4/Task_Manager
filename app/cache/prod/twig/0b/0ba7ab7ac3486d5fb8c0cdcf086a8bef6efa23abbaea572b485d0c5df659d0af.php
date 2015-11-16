<?php

/* TaskListBundle:Task:new.html.twig */
class __TwigTemplate_03dc12713bef452e81998701da8f026c9f44270f508ae694dbdcbf75d4b8f435 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Task creation</h1>

    <div class=\"form_error\"></div>
    <form method=\"POST\" class=\"ajaxForm\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("task_create");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
        <div id=\"form_body\">
            ";
        // line 10
        $this->loadTemplate("TaskListBundle:Task:form.html.twig", "TaskListBundle:Task:new.html.twig", 10)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : null))));
        // line 11
        echo "            <br />
            <button type=\"submit\" class=\"btn btn-primary\">Create</button>
        </div>
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
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
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  72 => 26,  69 => 25,  59 => 19,  51 => 14,  46 => 11,  44 => 10,  37 => 8,  32 => 5,  29 => 3,  11 => 1,);
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
