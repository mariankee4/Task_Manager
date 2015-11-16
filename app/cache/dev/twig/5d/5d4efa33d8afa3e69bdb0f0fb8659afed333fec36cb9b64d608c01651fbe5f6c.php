<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_bd9ceff01af7c8b5ac48a343c8d200bd583e1dca43cbd304b336c90daab295c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2047a711d520644fe73d22922621ce49b54f320b852ddce0c9c7cae23c6a26f = $this->env->getExtension("native_profiler");
        $__internal_c2047a711d520644fe73d22922621ce49b54f320b852ddce0c9c7cae23c6a26f->enter($__internal_c2047a711d520644fe73d22922621ce49b54f320b852ddce0c9c7cae23c6a26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/structure.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/body.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
        <div id=\"content\">
            <div class=\"header clear-fix\">
                <div class=\"header-logo\">
                    <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALYAAAA+CAMAAACxzRGDAAAAUVBMVEX////Ly8yko6WLioxkYmVXVVkwLjLl5eWxsLJKSEzy8vJxcHLY2Ni+vb89Oz9XVVh+fH+Yl5n///+xsbLY2Nlxb3KkpKWXlph+fX+LiYy+vr/IZP61AAAAAXRSTlMAQObYZgAABRBJREFUeNrVmtuWoyAQRS1FEEQSzQU7//+hYxUiXsKQZLJWM+chsUloN+WhCuguYoKyYqzmvGasKqH4HyRKxndipcgcumH8qViTM7TkUclcwaHmf5XM0eWq4km1KjdqXfMXJHVe1J3hL8lk5fCGv6wmT+o0d87U+XNrk0Y9nfv+7LM6ZJH5ZBL6LAbSxQ3Q5FDr22Skr8PQSy4n7isnsQxSX4r6pobhjCHHeDNOKrO3yGmCvZOjV9jmt8ulTdXFKdbKLNh+kOMvBzuVRa4Y7MUsdEUSWQe7xxCfZmcwjHU83LqzFvSbJQOXQvptbPnEFoyZtUUGwTeKuLuTHyT1kaP0P6cR01OKvv448gtl61dqZfmJezQmU/t+1R2fJLtBwXV6uWGwB9SZPrn0fKO2WAvQN1PUhHjTom3xgXYTkvlSKHs19OhslETq6X3HrXbjt8XbGj9b4Gi+lUAnL6XxQj8Pyk9N4Bt1xUrsLVN/3isYMug8rODMdbgOvoHs8uAb2fcANIAzkKCLYy+AXRpSU8sr1r4P67xhLgPp7vM32zlqt7Bhq2fI1Hwp+VgANxok59SsGV3oqdUL0YVDMRY7Yg8QLbVUU4NZNoOq5hJHuxEM28Sh/IyUZ8D3reR+yc58EGvOy2U0HQL6G9V+kWyEWHmzaMx6t4o9RhOm/riUiYrzqij4Ptqkn7AaCXqc+F47m04ahfde7YIz8RHEBN6BdVwdIGRVdNbKqYu1Hc0x0wBY4wqC8+XUgBGnj81SZsQB+0yAS1x/BlI/6ebHHk0lauQLuPDpu6EwAVJ7T0rl2uXa23jcqNyOZekhqYHRz3JOANrF4wCCmEs1f9D1lUe0n4NAATed80Y5e0Q7CO2TezM/BR6wKdgQzKbCF4uOQC3Bk0fKAzbFlyRWg3gksA/gmm7eOjrpaKX7fHlEW2xLbE6GZsPiCiShVzN7RG2xTz2G+OJtEqzdJ7APxy3MrSsV0VukXbKMp9lhs5BN6dr3CN+sySUaoxGwfRUM3I/gdPYONgVU+PLX4vUWm32AvUySarbONvcpV2RQEPKKjEBHFk01kQDGRblnn8ZuE9g+JUl8OWAPbkFK2K6JxhJVvF47FzYYnAN22ttwxKYCoH36rheEB7KG/HF/YUaa2G5JF+55tpyrl7B1WHM39HuP2N2EXPl1UBu8vbj4OjvD+NoTE4ssF+ScARgaJY1N7+u8bY/Y9BSM5PKwJbvMVab32YP5FB5TtcYVrGoASolVLTzI7kVsYVxRtAb5n2JXq1vCdtd47XtYItynrN0835PasLg0y13aOPbmPI+on2Lr9e5tjSHvgkAvclUjL3Fsdaw03IzgTR62yYClk7QMah4IQ0qSsoYYbOix6zJR1ZGDNMOY3Bb6W5S6jiyovep3t7bUPyoq7OkjYumrfESp8zSBc/OLosVf+nTnnKjsqR16++WDwpI8FxJWRFTlI6NKnqYJaL96TqjAbo9Toi5QiWBDcmfdFV+T8dkvFe5bItgstbM2X6QG2mVun+cazfRwOS0eiaeRRJKgLfc3BQAqfnhJyz8lfR6580SF/FXVu83Nz1xrrnFqqXL6Qxl47DNSm4RFflvN5sABDD8peouqLLKQXVdGbnqf+qIpOxON4ZyYdJEJ6sy4zS2c5eRPTT4Jyp46qDE5/ptAWqJOQ9e6yE82FXBbZCk1/tXVoshVoopE3CB0zmraI3nbqCJ/gW3ZMgtbC5nh/QHlOoOZBxQCRgAAAABJRU5ErkJggg==\" alt=\"Symfony\" />
                </div>

                <div class=\"search\">
                    <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                        <div class=\"form-row\">
                            <label for=\"search-id\">
                                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAABUElEQVQoz2NgAIJ29iBdD0d7X2cPb+tY2f9MDMjgP2O2hKu7vS8CBlisZUNSMJ3fxRMkXO61wm2ue6I3iB1q8Z8ZriDZFCS03fm/wX+1/xp/TBo8QPxeqf+MUAW+QIFKj/+q/wX/c/3n/i/6Qd/bx943z/Q/K1SBI1D9fKv/AhCn/Wf5L5EHdFGKw39OqAIXoPpOMziX4T9/DFBBnuN/HqhAEtCKCNf/XDA/rZRyAmrpsvrPDVUw3wrkqCiLaewg6TohX1d7X0ffs5r/OaAKfinmgt3t4ulr4+Xg4ANip3j+l/zPArNT4LNOD0pAgWCSOUIBy3+h/+pXbBa5tni0eMx23+/mB1YSYnENroT5Pw/QSOX/mkCo+l/jgo0v2KJA643s8PgAmsMBDCbu/5xALHPB2husxN9uCzsDOgAq5kAoaZVnYMCh5Ky1r88Eh/+iABM8jUk7ClYIAAAAAElFTkSuQmCC\" alt=\"Search on Symfony website\" />
                            </label>

                            <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"Search on Symfony website\" />

                            <button type=\"submit\" class=\"sf-button\">
                                <span class=\"border-l\">
                                    <span class=\"border-r\">
                                        <span class=\"btn-bg\">OK</span>
                                    </span>
                                </span>
                            </button>
                        </div>
                   </form>
                </div>
            </div>

            <div class=\"sf-reset\">
                ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "            </div>
        </div>
    </body>
</html>
";
        
        $__internal_c2047a711d520644fe73d22922621ce49b54f320b852ddce0c9c7cae23c6a26f->leave($__internal_c2047a711d520644fe73d22922621ce49b54f320b852ddce0c9c7cae23c6a26f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_380f5634e9eca2789c95166717ddaa1fe85e653a2fc58c62cb411f3af483d4ef = $this->env->getExtension("native_profiler");
        $__internal_380f5634e9eca2789c95166717ddaa1fe85e653a2fc58c62cb411f3af483d4ef->enter($__internal_380f5634e9eca2789c95166717ddaa1fe85e653a2fc58c62cb411f3af483d4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_380f5634e9eca2789c95166717ddaa1fe85e653a2fc58c62cb411f3af483d4ef->leave($__internal_380f5634e9eca2789c95166717ddaa1fe85e653a2fc58c62cb411f3af483d4ef_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8c1559337261cf80e6285ac788dab1515147e5477db6ffa58897fc2da1ad0e1 = $this->env->getExtension("native_profiler");
        $__internal_f8c1559337261cf80e6285ac788dab1515147e5477db6ffa58897fc2da1ad0e1->enter($__internal_f8c1559337261cf80e6285ac788dab1515147e5477db6ffa58897fc2da1ad0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f8c1559337261cf80e6285ac788dab1515147e5477db6ffa58897fc2da1ad0e1->leave($__internal_f8c1559337261cf80e6285ac788dab1515147e5477db6ffa58897fc2da1ad0e1_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8d86e7814fcc6f49a0f686d43229c26d6a9f2a4b7d72b552164f6c1f8019975 = $this->env->getExtension("native_profiler");
        $__internal_d8d86e7814fcc6f49a0f686d43229c26d6a9f2a4b7d72b552164f6c1f8019975->enter($__internal_d8d86e7814fcc6f49a0f686d43229c26d6a9f2a4b7d72b552164f6c1f8019975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d8d86e7814fcc6f49a0f686d43229c26d6a9f2a4b7d72b552164f6c1f8019975->leave($__internal_d8d86e7814fcc6f49a0f686d43229c26d6a9f2a4b7d72b552164f6c1f8019975_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 40,  105 => 9,  94 => 6,  83 => 41,  81 => 40,  49 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  30 => 4,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="{{ _charset }}" />*/
/*         <meta name="robots" content="noindex,nofollow" />*/
/*         <title>{% block title %}{% endblock %}</title>*/
/*         <link href="{{ absolute_url(asset('bundles/framework/css/structure.css')) }}" rel="stylesheet" />*/
/*         <link href="{{ absolute_url(asset('bundles/framework/css/body.css')) }}" rel="stylesheet" />*/
/*         {% block head %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         <div id="content">*/
/*             <div class="header clear-fix">*/
/*                 <div class="header-logo">*/
/*                     <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALYAAAA+CAMAAACxzRGDAAAAUVBMVEX////Ly8yko6WLioxkYmVXVVkwLjLl5eWxsLJKSEzy8vJxcHLY2Ni+vb89Oz9XVVh+fH+Yl5n///+xsbLY2Nlxb3KkpKWXlph+fX+LiYy+vr/IZP61AAAAAXRSTlMAQObYZgAABRBJREFUeNrVmtuWoyAQRS1FEEQSzQU7//+hYxUiXsKQZLJWM+chsUloN+WhCuguYoKyYqzmvGasKqH4HyRKxndipcgcumH8qViTM7TkUclcwaHmf5XM0eWq4km1KjdqXfMXJHVe1J3hL8lk5fCGv6wmT+o0d87U+XNrk0Y9nfv+7LM6ZJH5ZBL6LAbSxQ3Q5FDr22Skr8PQSy4n7isnsQxSX4r6pobhjCHHeDNOKrO3yGmCvZOjV9jmt8ulTdXFKdbKLNh+kOMvBzuVRa4Y7MUsdEUSWQe7xxCfZmcwjHU83LqzFvSbJQOXQvptbPnEFoyZtUUGwTeKuLuTHyT1kaP0P6cR01OKvv448gtl61dqZfmJezQmU/t+1R2fJLtBwXV6uWGwB9SZPrn0fKO2WAvQN1PUhHjTom3xgXYTkvlSKHs19OhslETq6X3HrXbjt8XbGj9b4Gi+lUAnL6XxQj8Pyk9N4Bt1xUrsLVN/3isYMug8rODMdbgOvoHs8uAb2fcANIAzkKCLYy+AXRpSU8sr1r4P67xhLgPp7vM32zlqt7Bhq2fI1Hwp+VgANxok59SsGV3oqdUL0YVDMRY7Yg8QLbVUU4NZNoOq5hJHuxEM28Sh/IyUZ8D3reR+yc58EGvOy2U0HQL6G9V+kWyEWHmzaMx6t4o9RhOm/riUiYrzqij4Ptqkn7AaCXqc+F47m04ahfde7YIz8RHEBN6BdVwdIGRVdNbKqYu1Hc0x0wBY4wqC8+XUgBGnj81SZsQB+0yAS1x/BlI/6ebHHk0lauQLuPDpu6EwAVJ7T0rl2uXa23jcqNyOZekhqYHRz3JOANrF4wCCmEs1f9D1lUe0n4NAATed80Y5e0Q7CO2TezM/BR6wKdgQzKbCF4uOQC3Bk0fKAzbFlyRWg3gksA/gmm7eOjrpaKX7fHlEW2xLbE6GZsPiCiShVzN7RG2xTz2G+OJtEqzdJ7APxy3MrSsV0VukXbKMp9lhs5BN6dr3CN+sySUaoxGwfRUM3I/gdPYONgVU+PLX4vUWm32AvUySarbONvcpV2RQEPKKjEBHFk01kQDGRblnn8ZuE9g+JUl8OWAPbkFK2K6JxhJVvF47FzYYnAN22ttwxKYCoH36rheEB7KG/HF/YUaa2G5JF+55tpyrl7B1WHM39HuP2N2EXPl1UBu8vbj4OjvD+NoTE4ssF+ScARgaJY1N7+u8bY/Y9BSM5PKwJbvMVab32YP5FB5TtcYVrGoASolVLTzI7kVsYVxRtAb5n2JXq1vCdtd47XtYItynrN0835PasLg0y13aOPbmPI+on2Lr9e5tjSHvgkAvclUjL3Fsdaw03IzgTR62yYClk7QMah4IQ0qSsoYYbOix6zJR1ZGDNMOY3Bb6W5S6jiyovep3t7bUPyoq7OkjYumrfESp8zSBc/OLosVf+nTnnKjsqR16++WDwpI8FxJWRFTlI6NKnqYJaL96TqjAbo9Toi5QiWBDcmfdFV+T8dkvFe5bItgstbM2X6QG2mVun+cazfRwOS0eiaeRRJKgLfc3BQAqfnhJyz8lfR6580SF/FXVu83Nz1xrrnFqqXL6Qxl47DNSm4RFflvN5sABDD8peouqLLKQXVdGbnqf+qIpOxON4ZyYdJEJ6sy4zS2c5eRPTT4Jyp46qDE5/ptAWqJOQ9e6yE82FXBbZCk1/tXVoshVoopE3CB0zmraI3nbqCJ/gW3ZMgtbC5nh/QHlOoOZBxQCRgAAAABJRU5ErkJggg==" alt="Symfony" />*/
/*                 </div>*/
/* */
/*                 <div class="search">*/
/*                     <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                         <div class="form-row">*/
/*                             <label for="search-id">*/
/*                                 <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAABUElEQVQoz2NgAIJ29iBdD0d7X2cPb+tY2f9MDMjgP2O2hKu7vS8CBlisZUNSMJ3fxRMkXO61wm2ue6I3iB1q8Z8ZriDZFCS03fm/wX+1/xp/TBo8QPxeqf+MUAW+QIFKj/+q/wX/c/3n/i/6Qd/bx943z/Q/K1SBI1D9fKv/AhCn/Wf5L5EHdFGKw39OqAIXoPpOMziX4T9/DFBBnuN/HqhAEtCKCNf/XDA/rZRyAmrpsvrPDVUw3wrkqCiLaewg6TohX1d7X0ffs5r/OaAKfinmgt3t4ulr4+Xg4ANip3j+l/zPArNT4LNOD0pAgWCSOUIBy3+h/+pXbBa5tni0eMx23+/mB1YSYnENroT5Pw/QSOX/mkCo+l/jgo0v2KJA643s8PgAmsMBDCbu/5xALHPB2husxN9uCzsDOgAq5kAoaZVnYMCh5Ky1r88Eh/+iABM8jUk7ClYIAAAAAElFTkSuQmCC" alt="Search on Symfony website" />*/
/*                             </label>*/
/* */
/*                             <input name="q" id="search-id" type="search" placeholder="Search on Symfony website" />*/
/* */
/*                             <button type="submit" class="sf-button">*/
/*                                 <span class="border-l">*/
/*                                     <span class="border-r">*/
/*                                         <span class="btn-bg">OK</span>*/
/*                                     </span>*/
/*                                 </span>*/
/*                             </button>*/
/*                         </div>*/
/*                    </form>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="sf-reset">*/
/*                 {% block body %}{% endblock %}*/
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
