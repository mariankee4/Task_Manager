<?php

/* TaskListBundle:Task:edit.html.twig */
class __TwigTemplate_b2efc219bb219882ff92dc6bc7a254ddd20bb5add2e48b3abb07c3c5bb5ff074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TaskListBundle:Task:edit.html.twig", 1);
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
        // line 4
        echo "<h1>Task edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("task");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
</ul>
";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('.date').datepicker({ 
                dateFormat: 'dd-mm-yy',
                disableTouchKeyboard: true,
                autoclose: true,
                minDate: new Date()
            });
            \$(\".del\").click(function(){
                if (!confirm(\"Are you sure you want to delete this task?\")){
                  return false;
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "TaskListBundle:Task:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  57 => 17,  50 => 14,  43 => 10,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Task edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('task') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript">*/
/*         $(document).ready(function() {*/
/*             $('.date').datepicker({ */
/*                 dateFormat: 'dd-mm-yy',*/
/*                 disableTouchKeyboard: true,*/
/*                 autoclose: true,*/
/*                 minDate: new Date()*/
/*             });*/
/*             $(".del").click(function(){*/
/*                 if (!confirm("Are you sure you want to delete this task?")){*/
/*                   return false;*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
