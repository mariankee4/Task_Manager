<?php

/* TaskListBundle:TaskList:show.html.twig */
class __TwigTemplate_ca845ea6b46e68d14da4225069fa622425f23fca65050097b404e5bf790adb4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TaskListBundle:TaskList:show.html.twig", 1);
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
        $__internal_b76fe334762c2fa1bb6277e36c11754c95ffecd8350c3d85a21848046c517520 = $this->env->getExtension("native_profiler");
        $__internal_b76fe334762c2fa1bb6277e36c11754c95ffecd8350c3d85a21848046c517520->enter($__internal_b76fe334762c2fa1bb6277e36c11754c95ffecd8350c3d85a21848046c517520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TaskListBundle:TaskList:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b76fe334762c2fa1bb6277e36c11754c95ffecd8350c3d85a21848046c517520->leave($__internal_b76fe334762c2fa1bb6277e36c11754c95ffecd8350c3d85a21848046c517520_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc0e360eb05604d560c05cbca24dca82ea2d98fbcf0857cb5b9f37c64bdfc508 = $this->env->getExtension("native_profiler");
        $__internal_fc0e360eb05604d560c05cbca24dca82ea2d98fbcf0857cb5b9f37c64bdfc508->enter($__internal_fc0e360eb05604d560c05cbca24dca82ea2d98fbcf0857cb5b9f37c64bdfc508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>TaskList</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("list");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_fc0e360eb05604d560c05cbca24dca82ea2d98fbcf0857cb5b9f37c64bdfc508->leave($__internal_fc0e360eb05604d560c05cbca24dca82ea2d98fbcf0857cb5b9f37c64bdfc508_prof);

    }

    public function getTemplateName()
    {
        return "TaskListBundle:TaskList:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 30,  73 => 26,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>TaskList</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ entity.name }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('list') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('list_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
