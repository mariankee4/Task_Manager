<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_0c7c895ed8fae6337b486287aa8adfc8ffe96f98082a24302dd7032e99804f20 extends Twig_Template
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
        $__internal_4f9da308400ec6e8b28cb946b5d71aed7eb7aa8570c4bd8e9f543738c8d18bfa = $this->env->getExtension("native_profiler");
        $__internal_4f9da308400ec6e8b28cb946b5d71aed7eb7aa8570c4bd8e9f543738c8d18bfa->enter($__internal_4f9da308400ec6e8b28cb946b5d71aed7eb7aa8570c4bd8e9f543738c8d18bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4f9da308400ec6e8b28cb946b5d71aed7eb7aa8570c4bd8e9f543738c8d18bfa->leave($__internal_4f9da308400ec6e8b28cb946b5d71aed7eb7aa8570c4bd8e9f543738c8d18bfa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
