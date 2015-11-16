<?php

/* TaskListBundle:Task:form.html.twig */
class __TwigTemplate_245ec4c33ed3732a41a90dfcad26d82bc6caf44ffe51dbef90dabb32f343477f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>
    <div>
        <div>";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "</div>
        <div>";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
        echo "</div>
        <div>
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget', array("attr" => array("placeholder" => "Name", "title" => "Name", "class" => "form-control")));
        echo "
        </div>
    </div>
    <div>
        <div>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'errors');
        echo "</div>
        <div>
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget', array("attr" => array("placeholder" => "Description", "title" => "Description", "class" => "form-control")));
        echo "
        </div>
    </div>
    <div>
        <div>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "due", array()), 'errors');
        echo "</div>
        <div>
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "due", array()), 'widget', array("attr" => array("placeholder" => "Due date", "title" => "Due date", "class" => "form-control date")));
        echo "
        </div>
    </div>
    <div>
        <div>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "taskList", array()), 'errors');
        echo "</div>
        <div>
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "taskList", array()), 'label');
        echo "
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "taskList", array()), 'widget', array("attr" => array("placeholder" => "Task list", "title" => "Task list", "class" => "form-control")));
        echo "
        </div>
    </div>
    <div>
        <div>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "completed", array()), 'errors');
        echo "</div>
        <div>
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "completed", array()), 'label');
        echo "
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "completed", array()), 'widget', array("attr" => array("title" => "Completed", "class" => "form-control")));
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TaskListBundle:Task:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 32,  84 => 31,  79 => 29,  72 => 25,  68 => 24,  63 => 22,  56 => 18,  51 => 16,  44 => 12,  39 => 10,  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div>*/
/*     <div>*/
/*         <div>{{ form_errors(form) }}</div>*/
/*         <div>{{ form_errors(form.name) }}</div>*/
/*         <div>*/
/*             {{ form_widget(form.name,  {'attr': {'placeholder':'Name', 'title':'Name', 'class':'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         <div>{{ form_errors(form.description) }}</div>*/
/*         <div>*/
/*             {{ form_widget(form.description,  {'attr': {'placeholder':'Description', 'title':'Description', 'class':'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         <div>{{ form_errors(form.due) }}</div>*/
/*         <div>*/
/*             {{ form_widget(form.due,  {'attr': {'placeholder':'Due date', 'title':'Due date', 'class':'form-control date'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         <div>{{ form_errors(form.taskList) }}</div>*/
/*         <div>*/
/*             {{ form_label(form.taskList) }}*/
/*             {{ form_widget(form.taskList,  {'attr': {'placeholder':'Task list', 'title':'Task list', 'class':'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         <div>{{ form_errors(form.completed) }}</div>*/
/*         <div>*/
/*             {{ form_label(form.completed) }}*/
/*             {{ form_widget(form.completed,  {'attr': {'title':'Completed', 'class':'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
