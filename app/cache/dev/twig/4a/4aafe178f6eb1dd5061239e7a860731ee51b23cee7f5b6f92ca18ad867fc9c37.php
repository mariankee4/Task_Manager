<?php

/* TaskListBundle:Task:log.html.twig */
class __TwigTemplate_819007049d1431086958a608f7522e65b24ee30928e3b52f2047c56241f16bd4 extends Twig_Template
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
        $__internal_630e16d010ab2447f17ba96fc3529497c0b299f2a888f2366cab58fc8128f564 = $this->env->getExtension("native_profiler");
        $__internal_630e16d010ab2447f17ba96fc3529497c0b299f2a888f2366cab58fc8128f564->enter($__internal_630e16d010ab2447f17ba96fc3529497c0b299f2a888f2366cab58fc8128f564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TaskListBundle:Task:log.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_630e16d010ab2447f17ba96fc3529497c0b299f2a888f2366cab58fc8128f564->leave($__internal_630e16d010ab2447f17ba96fc3529497c0b299f2a888f2366cab58fc8128f564_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f684b57cf99c14b37ab1b96e07f6e3700dc36291dc3e55680a125286c21c56d9 = $this->env->getExtension("native_profiler");
        $__internal_f684b57cf99c14b37ab1b96e07f6e3700dc36291dc3e55680a125286c21c56d9->enter($__internal_f684b57cf99c14b37ab1b96e07f6e3700dc36291dc3e55680a125286c21c56d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
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
        
        $__internal_f684b57cf99c14b37ab1b96e07f6e3700dc36291dc3e55680a125286c21c56d9->leave($__internal_f684b57cf99c14b37ab1b96e07f6e3700dc36291dc3e55680a125286c21c56d9_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b139c75bfd5adfd865caa15a332df9d688c44e379004910c5c26e7339cc341a1 = $this->env->getExtension("native_profiler");
        $__internal_b139c75bfd5adfd865caa15a332df9d688c44e379004910c5c26e7339cc341a1->enter($__internal_b139c75bfd5adfd865caa15a332df9d688c44e379004910c5c26e7339cc341a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b139c75bfd5adfd865caa15a332df9d688c44e379004910c5c26e7339cc341a1->leave($__internal_b139c75bfd5adfd865caa15a332df9d688c44e379004910c5c26e7339cc341a1_prof);

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
        return array (  120 => 38,  114 => 37,  101 => 31,  94 => 26,  85 => 23,  77 => 22,  71 => 21,  67 => 20,  63 => 19,  60 => 18,  56 => 17,  41 => 4,  35 => 3,  11 => 1,);
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
