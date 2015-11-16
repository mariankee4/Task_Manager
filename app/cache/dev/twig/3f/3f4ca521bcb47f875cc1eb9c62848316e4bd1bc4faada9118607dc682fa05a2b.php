<?php

/* TaskListBundle:TaskList:index.html.twig */
class __TwigTemplate_020496296d1173c9ebe784c1ff44ef25259911a60e951a0f15ae835af3098f87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TaskListBundle:TaskList:index.html.twig", 1);
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
        $__internal_ac268e598e4670046eb4191f4710573c3fd161a6a8289084858c6c45147bdda0 = $this->env->getExtension("native_profiler");
        $__internal_ac268e598e4670046eb4191f4710573c3fd161a6a8289084858c6c45147bdda0->enter($__internal_ac268e598e4670046eb4191f4710573c3fd161a6a8289084858c6c45147bdda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TaskListBundle:TaskList:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac268e598e4670046eb4191f4710573c3fd161a6a8289084858c6c45147bdda0->leave($__internal_ac268e598e4670046eb4191f4710573c3fd161a6a8289084858c6c45147bdda0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_396419dc6367117cfb8116bd18e0ad390d7d44d80d9079ff0d2d1f552bb3bb94 = $this->env->getExtension("native_profiler");
        $__internal_396419dc6367117cfb8116bd18e0ad390d7d44d80d9079ff0d2d1f552bb3bb94->enter($__internal_396419dc6367117cfb8116bd18e0ad390d7d44d80d9079ff0d2d1f552bb3bb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>TaskList list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("list_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_396419dc6367117cfb8116bd18e0ad390d7d44d80d9079ff0d2d1f552bb3bb94->leave($__internal_396419dc6367117cfb8116bd18e0ad390d7d44d80d9079ff0d2d1f552bb3bb94_prof);

    }

    public function getTemplateName()
    {
        return "TaskListBundle:TaskList:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 34,  84 => 29,  72 => 23,  66 => 20,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>TaskList list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td>{{ entity.name }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('list_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('list_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('list_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
