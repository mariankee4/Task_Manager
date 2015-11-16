<?php

/* :default:index.html.twig */
class __TwigTemplate_62968c3703d488060112704a7b44b3aabbce713085566eef0c2c0c23c10e1a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60a13f71109017694d0b0188cc9fd974aa012f723f18c28f9a168475b0f967ef = $this->env->getExtension("native_profiler");
        $__internal_60a13f71109017694d0b0188cc9fd974aa012f723f18c28f9a168475b0f967ef->enter($__internal_60a13f71109017694d0b0188cc9fd974aa012f723f18c28f9a168475b0f967ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60a13f71109017694d0b0188cc9fd974aa012f723f18c28f9a168475b0f967ef->leave($__internal_60a13f71109017694d0b0188cc9fd974aa012f723f18c28f9a168475b0f967ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7560517e99361d2164eb634e8db8c8a0371ed4a4d05df514730b34744d2c9b45 = $this->env->getExtension("native_profiler");
        $__internal_7560517e99361d2164eb634e8db8c8a0371ed4a4d05df514730b34744d2c9b45->enter($__internal_7560517e99361d2164eb634e8db8c8a0371ed4a4d05df514730b34744d2c9b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Welcome to</span> Task Manager</h1>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("task");
        echo "\">Task list</a><br />
                <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("list");
        echo "\">Task group</a><br />
                <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("task_log");
        echo "\">Log</a>
                
            </div>

        </div>
    </div>
";
        
        $__internal_7560517e99361d2164eb634e8db8c8a0371ed4a4d05df514730b34744d2c9b45->leave($__internal_7560517e99361d2164eb634e8db8c8a0371ed4a4d05df514730b34744d2c9b45_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_904549d56350c701b5f8ac24405dd81b2d470248c1dbc1064810487a68173988 = $this->env->getExtension("native_profiler");
        $__internal_904549d56350c701b5f8ac24405dd81b2d470248c1dbc1064810487a68173988->enter($__internal_904549d56350c701b5f8ac24405dd81b2d470248c1dbc1064810487a68173988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_904549d56350c701b5f8ac24405dd81b2d470248c1dbc1064810487a68173988->leave($__internal_904549d56350c701b5f8ac24405dd81b2d470248c1dbc1064810487a68173988_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  69 => 18,  55 => 10,  51 => 9,  47 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <div id="welcome">*/
/*                 <h1><span>Welcome to</span> Task Manager</h1>*/
/*                 <a href="{{ path('task') }}">Task list</a><br />*/
/*                 <a href="{{ path('list') }}">Task group</a><br />*/
/*                 <a href="{{ path('task_log') }}">Log</a>*/
/*                 */
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     body { background: #F5F5F5; font: 18px/1.5 sans-serif; }*/
/*     h1, h2 { line-height: 1.2; margin: 0 0 .5em; }*/
/*     h1 { font-size: 36px; }*/
/*     h2 { font-size: 21px; margin-bottom: 1em; }*/
/*     p { margin: 0 0 1em 0; }*/
/*     a { color: #0000F0; }*/
/*     a:hover { text-decoration: none; }*/
/*     code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }*/
/*     #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }*/
/*     #container { padding: 2em; }*/
/*     #welcome, #status { margin-bottom: 2em; }*/
/*     #welcome h1 span { display: block; font-size: 75%; }*/
/*     #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }*/
/*     #icon-book { display: none; }*/
/* */
/*     @media (min-width: 768px) {*/
/*         #wrapper { width: 80%; margin: 2em auto; }*/
/*         #icon-book { display: inline-block; }*/
/*         #status a, #next a { display: block; }*/
/* */
/*         @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* */
