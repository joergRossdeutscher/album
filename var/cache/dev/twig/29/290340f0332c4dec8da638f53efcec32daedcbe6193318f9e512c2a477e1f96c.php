<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_26d6902fc017866abb0cd3ca8e931595d1783931aa9b1d6960c8446c5b0476c1 extends Twig_Template
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
        $__internal_f41cfcf73fd2b83c2ab9add1a1513645f5cfb6ca0ffdd9f2a3fd0dad50fefccc = $this->env->getExtension("native_profiler");
        $__internal_f41cfcf73fd2b83c2ab9add1a1513645f5cfb6ca0ffdd9f2a3fd0dad50fefccc->enter($__internal_f41cfcf73fd2b83c2ab9add1a1513645f5cfb6ca0ffdd9f2a3fd0dad50fefccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_f41cfcf73fd2b83c2ab9add1a1513645f5cfb6ca0ffdd9f2a3fd0dad50fefccc->leave($__internal_f41cfcf73fd2b83c2ab9add1a1513645f5cfb6ca0ffdd9f2a3fd0dad50fefccc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
