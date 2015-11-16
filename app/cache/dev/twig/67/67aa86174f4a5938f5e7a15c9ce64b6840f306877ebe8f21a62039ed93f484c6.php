<?php

/* TaskListBundle:Task:index.html.twig */
class __TwigTemplate_720e77d2a059b45f1255a392af447b0cd9056b6d7c738d01b3ee1c0f7d071805 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TaskListBundle:Task:index.html.twig", 1);
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
        $__internal_eaaf6e4bda556c5e72bf93d02b87cab04bddb10d3818f6bb29a73134fb659b52 = $this->env->getExtension("native_profiler");
        $__internal_eaaf6e4bda556c5e72bf93d02b87cab04bddb10d3818f6bb29a73134fb659b52->enter($__internal_eaaf6e4bda556c5e72bf93d02b87cab04bddb10d3818f6bb29a73134fb659b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TaskListBundle:Task:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaaf6e4bda556c5e72bf93d02b87cab04bddb10d3818f6bb29a73134fb659b52->leave($__internal_eaaf6e4bda556c5e72bf93d02b87cab04bddb10d3818f6bb29a73134fb659b52_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_79c8e83cfc3a535e7e98446fbc9924398d59cbe918b956c6eb7f6a625347b403 = $this->env->getExtension("native_profiler");
        $__internal_79c8e83cfc3a535e7e98446fbc9924398d59cbe918b956c6eb7f6a625347b403->enter($__internal_79c8e83cfc3a535e7e98446fbc9924398d59cbe918b956c6eb7f6a625347b403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Task list</h1>
    <div style=\"float:left; margin-right:30px\">
        ";
        // line 7
        echo "        <div class=\"count\">
            Total tasks: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "getTotalItemCount", array()), "html", null, true);
        echo "
        </div>

        <table class=\"records_list\">
            <thead>
                <tr>
                    <th ";
        // line 14
        if ($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "isSorted", array(0 => "t.name"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "Name", "t.name");
        echo "</th>
                    <th ";
        // line 15
        if ($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "isSorted", array(0 => "t.description"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "Description", "t.description");
        echo "</th>
                    <th ";
        // line 16
        if ($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "isSorted", array(0 => "t.due"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "Due", "t.due");
        echo "</th>
                    <th ";
        // line 17
        if ($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "isSorted", array(0 => "t.dompleted"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "Completed", "t.completed");
        echo "</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "                <tr>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            if ($this->getAttribute($context["entity"], "due", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "due", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 27
            if ($this->getAttribute($context["entity"], "completed", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCompleted", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "No | <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_complete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">Complete</a>";
            }
            echo "</td>
                    <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"del\">delete</a>
                        </li>
                    </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>
        ";
        // line 46
        echo "        <div class=\"navigation\">
            ";
        // line 47
        echo $this->env->getExtension('knp_pagination')->render((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "
        </div>
        
    <ul>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("task_new");
        echo "\">
                Create a new entry
            </a>
        </li>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("task_log");
        echo "\">
                View log with deleted tasks
            </a>
        </li>
    </ul>
    </div>
    <div style=\"float:left\">
        ";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form');
        echo "
    </div>

    ";
        
        $__internal_79c8e83cfc3a535e7e98446fbc9924398d59cbe918b956c6eb7f6a625347b403->leave($__internal_79c8e83cfc3a535e7e98446fbc9924398d59cbe918b956c6eb7f6a625347b403_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3ce8500cbb3a2d7ccf44a88b2a75ea9a99bc6a004e4cc98bec932e6e4b5400ce = $this->env->getExtension("native_profiler");
        $__internal_3ce8500cbb3a2d7ccf44a88b2a75ea9a99bc6a004e4cc98bec932e6e4b5400ce->enter($__internal_3ce8500cbb3a2d7ccf44a88b2a75ea9a99bc6a004e4cc98bec932e6e4b5400ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script type=\"text/javascript\">
            \$(document).ready(function(){
                \$(\".del\").click(function(){
                  if (!confirm(\"Are you sure you want to delete this task?\")){
                    return false;
                  }
                });
            });
        </script>
    ";
        
        $__internal_3ce8500cbb3a2d7ccf44a88b2a75ea9a99bc6a004e4cc98bec932e6e4b5400ce->leave($__internal_3ce8500cbb3a2d7ccf44a88b2a75ea9a99bc6a004e4cc98bec932e6e4b5400ce_prof);

    }

    public function getTemplateName()
    {
        return "TaskListBundle:Task:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 69,  195 => 68,  184 => 64,  174 => 57,  166 => 52,  158 => 47,  155 => 46,  151 => 43,  139 => 37,  133 => 34,  127 => 31,  114 => 27,  108 => 26,  104 => 25,  100 => 24,  97 => 23,  93 => 22,  81 => 17,  73 => 16,  65 => 15,  57 => 14,  48 => 8,  45 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Task list</h1>*/
/*     <div style="float:left; margin-right:30px">*/
/*         {# total items count #}*/
/*         <div class="count">*/
/*             Total tasks: {{ entities.getTotalItemCount }}*/
/*         </div>*/
/* */
/*         <table class="records_list">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th {% if entities.isSorted('t.name') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(entities, 'Name', 't.name') }}</th>*/
/*                     <th {% if entities.isSorted('t.description') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(entities, 'Description', 't.description') }}</th>*/
/*                     <th {% if entities.isSorted('t.due') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(entities, 'Due', 't.due') }}</th>*/
/*                     <th {% if entities.isSorted('t.dompleted') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(entities, 'Completed', 't.completed') }}</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td>{{ entity.name }}</td>*/
/*                     <td>{{ entity.description }}</td>*/
/*                     <td>{% if entity.due %}{{ entity.due|date('Y-m-d') }}{% endif %}</td>*/
/*                     <td>{% if entity.completed %}{{entity.dateCompleted|date('Y-m-d') }}{% else %}No | <a href="{{ path('task_complete', { 'id': entity.id }) }}">Complete</a>{% endif %}</td>*/
/*                     <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('task_show', { 'id': entity.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('task_edit', { 'id': entity.id }) }}">edit</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('task_delete', { 'id': entity.id }) }}" class="del">delete</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*         {# display navigation #}*/
/*         <div class="navigation">*/
/*             {{ knp_pagination_render(entities) }}*/
/*         </div>*/
/*         */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('task_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('task_log') }}">*/
/*                 View log with deleted tasks*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     </div>*/
/*     <div style="float:left">*/
/*         {{ form(search_form) }}*/
/*     </div>*/
/* */
/*     {% endblock %}*/
/*     {% block javascripts %}*/
/*         {{ parent() }}*/
/*         <script type="text/javascript">*/
/*             $(document).ready(function(){*/
/*                 $(".del").click(function(){*/
/*                   if (!confirm("Are you sure you want to delete this task?")){*/
/*                     return false;*/
/*                   }*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     {% endblock %}*/
