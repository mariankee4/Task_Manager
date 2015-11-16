<?php

/* TaskListBundle:Task:form.html.twig */
class __TwigTemplate_f3081a28e5282279ebed4f385f7b8293f5fb5e3860c75f8491be79914ae14b3d extends Twig_Template
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
        $__internal_99fe8e4126c443f5e70ac382addf5d34300d41bc4097ddda98344fe5e166d8fc = $this->env->getExtension("native_profiler");
        $__internal_99fe8e4126c443f5e70ac382addf5d34300d41bc4097ddda98344fe5e166d8fc->enter($__internal_99fe8e4126c443f5e70ac382addf5d34300d41bc4097ddda98344fe5e166d8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TaskListBundle:Task:form.html.twig"));

        // line 1
        echo "<div>
    <div>
        <div>";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</div>
        <div>";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "</div>
        <div>
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("placeholder" => "Name", "title" => "Name", "class" => "form-control")));
        echo "
        </div>
    </div>
    <div>
        <div>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "</div>
        <div>
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("placeholder" => "Description", "title" => "Description", "class" => "form-control")));
        echo "
        </div>
    </div>
    <div>
        <div>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "due", array()), 'errors');
        echo "</div>
        <div>
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "due", array()), 'widget', array("attr" => array("placeholder" => "Due date", "title" => "Due date", "class" => "form-control date")));
        echo "
        </div>
    </div>
    <div>
        <div>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taskList", array()), 'errors');
        echo "</div>
        <div>
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taskList", array()), 'label');
        echo "
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taskList", array()), 'widget', array("attr" => array("placeholder" => "Task list", "title" => "Task list", "class" => "form-control")));
        echo "
        </div>
    </div>
    <div>
        <div>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "completed", array()), 'errors');
        echo "</div>
        <div>
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "completed", array()), 'label');
        echo "
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "completed", array()), 'widget', array("attr" => array("title" => "Completed", "class" => "form-control")));
        echo "
        </div>
    </div>
</div>";
        
        $__internal_99fe8e4126c443f5e70ac382addf5d34300d41bc4097ddda98344fe5e166d8fc->leave($__internal_99fe8e4126c443f5e70ac382addf5d34300d41bc4097ddda98344fe5e166d8fc_prof);

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
        return array (  91 => 32,  87 => 31,  82 => 29,  75 => 25,  71 => 24,  66 => 22,  59 => 18,  54 => 16,  47 => 12,  42 => 10,  35 => 6,  30 => 4,  26 => 3,  22 => 1,);
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
