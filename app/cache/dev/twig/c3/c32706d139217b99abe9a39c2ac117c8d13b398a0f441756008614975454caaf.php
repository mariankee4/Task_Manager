<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_fabc0e9c6562a6190d380b5256bb02b9bf0308a94c3d563601d909e4ff9d37ae extends Twig_Template
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
        $__internal_c3b35d8f0ed33ac406cf559bdeaf0099b366e68b1808d4b3a1fcf75c817cf52e = $this->env->getExtension("native_profiler");
        $__internal_c3b35d8f0ed33ac406cf559bdeaf0099b366e68b1808d4b3a1fcf75c817cf52e->enter($__internal_c3b35d8f0ed33ac406cf559bdeaf0099b366e68b1808d4b3a1fcf75c817cf52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c3b35d8f0ed33ac406cf559bdeaf0099b366e68b1808d4b3a1fcf75c817cf52e->leave($__internal_c3b35d8f0ed33ac406cf559bdeaf0099b366e68b1808d4b3a1fcf75c817cf52e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
