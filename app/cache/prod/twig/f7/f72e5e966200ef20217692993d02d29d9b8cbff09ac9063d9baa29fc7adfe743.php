<?php

/* TaskListBundle:Task:log.html.twig */
class __TwigTemplate_42a4d97f45b1279e025939aba49e5a21985aea62617255b50a83135406acaa57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TaskListBundle:Task:log.html.twig", 1);
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
        echo "<h1>Deleted tasks</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Due</th>
                <th>Completed</th>
                <th>Deleted at</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["entity"], "due", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "due", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["entity"], "completed", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCompleted", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDeleted", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("task");
        echo "\">
                Task list
            </a>
        </li>
    </ul>
    ";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
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
    }

    public function getTemplateName()
    {
        return "TaskListBundle:Task:log.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  102 => 37,  92 => 31,  85 => 26,  76 => 23,  68 => 22,  62 => 21,  58 => 20,  54 => 19,  51 => 18,  47 => 17,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Deleted tasks</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <th>Description</th>*/
/*                 <th>Due</th>*/
/*                 <th>Completed</th>*/
/*                 <th>Deleted at</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td>{{ entity.name }}</td>*/
/*                 <td>{{ entity.description }}</td>*/
/*                 <td>{% if entity.due %}{{ entity.due|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if entity.completed %}{{entity.dateCompleted|date('Y-m-d') }}{% else %}No{% endif %}</td>*/
/*                 <td>{{ entity.dateDeleted|date('Y-m-d') }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('task') }}">*/
/*                 Task list*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
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
