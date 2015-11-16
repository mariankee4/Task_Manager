<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_801c703e5602c39e4912d28ad470dd2206c7b9e002b3da65c425f4ee36fac977 extends Twig_Template
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
        $__internal_dbcc1da457e337133bd68faa4a93040c4820f2ba7102242e135c164fd74f47cb = $this->env->getExtension("native_profiler");
        $__internal_dbcc1da457e337133bd68faa4a93040c4820f2ba7102242e135c164fd74f47cb->enter($__internal_dbcc1da457e337133bd68faa4a93040c4820f2ba7102242e135c164fd74f47cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dbcc1da457e337133bd68faa4a93040c4820f2ba7102242e135c164fd74f47cb->leave($__internal_dbcc1da457e337133bd68faa4a93040c4820f2ba7102242e135c164fd74f47cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
