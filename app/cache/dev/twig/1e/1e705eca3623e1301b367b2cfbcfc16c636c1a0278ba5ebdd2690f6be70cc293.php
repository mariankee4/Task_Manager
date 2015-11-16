<?php

/* TaskListBundle:Task:show.html.twig */
class __TwigTemplate_a3bb47d4eb2f2f79b6f2c37b998fb28818200e2933c66227da4287b0d26068b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TaskListBundle:Task:show.html.twig", 1);
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
        $__internal_ce69132d2c5881111d9244cb14db08f2c88a653e3fb879a7f3f99bb262617f94 = $this->env->getExtension("native_profiler");
        $__internal_ce69132d2c5881111d9244cb14db08f2c88a653e3fb879a7f3f99bb262617f94->enter($__internal_ce69132d2c5881111d9244cb14db08f2c88a653e3fb879a7f3f99bb262617f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TaskListBundle:Task:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce69132d2c5881111d9244cb14db08f2c88a653e3fb879a7f3f99bb262617f94->leave($__internal_ce69132d2c5881111d9244cb14db08f2c88a653e3fb879a7f3f99bb262617f94_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dba1e3c8ebd251cbd19ff2bd94402fb7219883aef793f4cb533914a54c8f57da = $this->env->getExtension("native_profiler");
        $__internal_dba1e3c8ebd251cbd19ff2bd94402fb7219883aef793f4cb533914a54c8f57da->enter($__internal_dba1e3c8ebd251cbd19ff2bd94402fb7219883aef793f4cb533914a54c8f57da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Task</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Name</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Due</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "due", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Completed</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "completed", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCompleted", array()), "H:i:s d/m/Y"), "html", null, true);
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("task");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_dba1e3c8ebd251cbd19ff2bd94402fb7219883aef793f4cb533914a54c8f57da->leave($__internal_dba1e3c8ebd251cbd19ff2bd94402fb7219883aef793f4cb533914a54c8f57da_prof);

    }

    public function getTemplateName()
    {
        return "TaskListBundle:Task:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  91 => 34,  83 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Task</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ entity.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ entity.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Due</th>*/
/*                 <td>{{ entity.due|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Completed</th>*/
/*                 <td>{% if entity.completed %}{{entity.dateCompleted|date ('H:i:s d/m/Y') }}{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('task') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('task_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
