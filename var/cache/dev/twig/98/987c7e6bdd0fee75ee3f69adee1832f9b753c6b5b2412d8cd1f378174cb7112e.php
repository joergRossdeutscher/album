<?php

/* default/listfolder.html.twig */
class __TwigTemplate_179a2c26fa487699044c10fd9b2b9fb460ebff3e1e2dffc036b6948a2f8ecaf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/listfolder.html.twig", 1);
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
        $__internal_b538b2064a9427b46c8cec4868a1a9c4c597f7d38587d494a4e3b2ef3cfe05e4 = $this->env->getExtension("native_profiler");
        $__internal_b538b2064a9427b46c8cec4868a1a9c4c597f7d38587d494a4e3b2ef3cfe05e4->enter($__internal_b538b2064a9427b46c8cec4868a1a9c4c597f7d38587d494a4e3b2ef3cfe05e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/listfolder.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b538b2064a9427b46c8cec4868a1a9c4c597f7d38587d494a4e3b2ef3cfe05e4->leave($__internal_b538b2064a9427b46c8cec4868a1a9c4c597f7d38587d494a4e3b2ef3cfe05e4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c06539cee91f884770c0416cb0ed0804f1cb04eaf0c1348e2bfdebe70d2bee5 = $this->env->getExtension("native_profiler");
        $__internal_5c06539cee91f884770c0416cb0ed0804f1cb04eaf0c1348e2bfdebe70d2bee5->enter($__internal_5c06539cee91f884770c0416cb0ed0804f1cb04eaf0c1348e2bfdebe70d2bee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <ul>
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mediaFolders"]) ? $context["mediaFolders"] : $this->getContext($context, "mediaFolders")));
        foreach ($context['_seq'] as $context["_key"] => $context["mediaFolder"]) {
            // line 8
            echo "                <li><a href=\"http://127.0.0.1:8000/listimages/1/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mediaFolder"], "getId", array(), "method"), "html", null, true);
            echo "\">ƒ ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mediaFolder"], "getPath", array(), "method"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mediaFolder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "                </ul>
        </div>
    </div>
";
        
        $__internal_5c06539cee91f884770c0416cb0ed0804f1cb04eaf0c1348e2bfdebe70d2bee5->leave($__internal_5c06539cee91f884770c0416cb0ed0804f1cb04eaf0c1348e2bfdebe70d2bee5_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ad2d2deb5047f05067755d25c13781fe8fd44bfb64f302fa99c5228cbe7fc36 = $this->env->getExtension("native_profiler");
        $__internal_9ad2d2deb5047f05067755d25c13781fe8fd44bfb64f302fa99c5228cbe7fc36->enter($__internal_9ad2d2deb5047f05067755d25c13781fe8fd44bfb64f302fa99c5228cbe7fc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
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
        
        $__internal_9ad2d2deb5047f05067755d25c13781fe8fd44bfb64f302fa99c5228cbe7fc36->leave($__internal_9ad2d2deb5047f05067755d25c13781fe8fd44bfb64f302fa99c5228cbe7fc36_prof);

    }

    public function getTemplateName()
    {
        return "default/listfolder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  71 => 15,  61 => 10,  50 => 8,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <ul>*/
/*             {% for mediaFolder in mediaFolders %}*/
/*                 <li><a href="http://127.0.0.1:8000/listimages/1/{{ mediaFolder.getId() }}">ƒ {{ mediaFolder.getPath() }}</a></li>*/
/*             {% endfor %}*/
/*                 </ul>*/
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
