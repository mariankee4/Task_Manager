<?php

/* TaskListBundle:Task:edit.html.twig */
class __TwigTemplate_bae5dff444f1da913e76941e4f98aaed7b17c3b1d908fc0bc9fec5c6836a0810 extends Twig_Template
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
        $__internal_01e617fe798c486609724854326e075042f1f6acaaeb2292c87da1f866149c75 = $this->env->getExtension("native_profiler");
        $__internal_01e617fe798c486609724854326e075042f1f6acaaeb2292c87da1f866149c75->enter($__internal_01e617fe798c486609724854326e075042f1f6acaaeb2292c87da1f866149c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TaskListBundle:Task:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01e617fe798c486609724854326e075042f1f6acaaeb2292c87da1f866149c75->leave($__internal_01e617fe798c486609724854326e075042f1f6acaaeb2292c87da1f866149c75_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a0d5a3957799a07980605b9beb924d301360e6fe3a0b2e3cbc01597d67cec23 = $this->env->getExtension("native_profiler");
        $__internal_7a0d5a3957799a07980605b9beb924d301360e6fe3a0b2e3cbc01597d67cec23->enter($__internal_7a0d5a3957799a07980605b9beb924d301360e6fe3a0b2e3cbc01597d67cec23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Task edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_7a0d5a3957799a07980605b9beb924d301360e6fe3a0b2e3cbc01597d67cec23->leave($__internal_7a0d5a3957799a07980605b9beb924d301360e6fe3a0b2e3cbc01597d67cec23_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_50fc6073820f24549c226441c1f03db5ff7c2575952519c116223d1ea66e183f = $this->env->getExtension("native_profiler");
        $__internal_50fc6073820f24549c226441c1f03db5ff7c2575952519c116223d1ea66e183f->enter($__internal_50fc6073820f24549c226441c1f03db5ff7c2575952519c116223d1ea66e183f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_50fc6073820f24549c226441c1f03db5ff7c2575952519c116223d1ea66e183f->leave($__internal_50fc6073820f24549c226441c1f03db5ff7c2575952519c116223d1ea66e183f_prof);

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
        return array (  75 => 18,  69 => 17,  59 => 14,  52 => 10,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
