<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_36f677c041c3edc70da5e7a10871d49d254856796faf17902c83a7d1e767e484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f20fb5bfffaa0ed7a2c52029b5a49d6f4da9aedfae6eae077461ce3f73a09ad5 = $this->env->getExtension("native_profiler");
        $__internal_f20fb5bfffaa0ed7a2c52029b5a49d6f4da9aedfae6eae077461ce3f73a09ad5->enter($__internal_f20fb5bfffaa0ed7a2c52029b5a49d6f4da9aedfae6eae077461ce3f73a09ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f20fb5bfffaa0ed7a2c52029b5a49d6f4da9aedfae6eae077461ce3f73a09ad5->leave($__internal_f20fb5bfffaa0ed7a2c52029b5a49d6f4da9aedfae6eae077461ce3f73a09ad5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff230ed439f679b592442e1974e1d42283d8a30d065c8a99b6ea228a4b51b3f5 = $this->env->getExtension("native_profiler");
        $__internal_ff230ed439f679b592442e1974e1d42283d8a30d065c8a99b6ea228a4b51b3f5->enter($__internal_ff230ed439f679b592442e1974e1d42283d8a30d065c8a99b6ea228a4b51b3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ff230ed439f679b592442e1974e1d42283d8a30d065c8a99b6ea228a4b51b3f5->leave($__internal_ff230ed439f679b592442e1974e1d42283d8a30d065c8a99b6ea228a4b51b3f5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc4bc4df9f68eb8af9fef26c2979c4d0ac72a0abbc5f6fcb29a771b20d90f1e8 = $this->env->getExtension("native_profiler");
        $__internal_dc4bc4df9f68eb8af9fef26c2979c4d0ac72a0abbc5f6fcb29a771b20d90f1e8->enter($__internal_dc4bc4df9f68eb8af9fef26c2979c4d0ac72a0abbc5f6fcb29a771b20d90f1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dc4bc4df9f68eb8af9fef26c2979c4d0ac72a0abbc5f6fcb29a771b20d90f1e8->leave($__internal_dc4bc4df9f68eb8af9fef26c2979c4d0ac72a0abbc5f6fcb29a771b20d90f1e8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d427f3f876c91663fc3b209b0b8cc511db4c43493212957148f48c4543b500e = $this->env->getExtension("native_profiler");
        $__internal_8d427f3f876c91663fc3b209b0b8cc511db4c43493212957148f48c4543b500e->enter($__internal_8d427f3f876c91663fc3b209b0b8cc511db4c43493212957148f48c4543b500e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8d427f3f876c91663fc3b209b0b8cc511db4c43493212957148f48c4543b500e->leave($__internal_8d427f3f876c91663fc3b209b0b8cc511db4c43493212957148f48c4543b500e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
