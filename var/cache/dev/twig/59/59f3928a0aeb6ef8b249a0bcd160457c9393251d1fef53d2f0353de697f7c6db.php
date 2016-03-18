<?php

/* default/listmedia.html.twig */
class __TwigTemplate_504bab2188d3c1ea29ed9d8061f7894c26e77ac7b168c0878ba9232d81b0a99c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/listmedia.html.twig", 1);
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
        $__internal_52828eb0d1f484220ea2f55c6080d626a297865e54b53fa6edfb35297fba6f68 = $this->env->getExtension("native_profiler");
        $__internal_52828eb0d1f484220ea2f55c6080d626a297865e54b53fa6edfb35297fba6f68->enter($__internal_52828eb0d1f484220ea2f55c6080d626a297865e54b53fa6edfb35297fba6f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/listmedia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52828eb0d1f484220ea2f55c6080d626a297865e54b53fa6edfb35297fba6f68->leave($__internal_52828eb0d1f484220ea2f55c6080d626a297865e54b53fa6edfb35297fba6f68_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b720572301c22f2533819e0e9d95b888ee7b77cd5493eb5b02d30e33d96929e3 = $this->env->getExtension("native_profiler");
        $__internal_b720572301c22f2533819e0e9d95b888ee7b77cd5493eb5b02d30e33d96929e3->enter($__internal_b720572301c22f2533819e0e9d95b888ee7b77cd5493eb5b02d30e33d96929e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            -";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["mediaDriveId"]) ? $context["mediaDriveId"] : $this->getContext($context, "mediaDriveId")), "html", null, true);
        echo "|";
        echo twig_escape_filter($this->env, (isset($context["mediaFolderId"]) ? $context["mediaFolderId"] : $this->getContext($context, "mediaFolderId")), "html", null, true);
        echo "-
            <ul>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mediaFiles"]) ? $context["mediaFiles"] : $this->getContext($context, "mediaFiles")));
        foreach ($context['_seq'] as $context["_key"] => $context["mediaFile"]) {
            // line 9
            echo "                ";
            $context["mediaFolder"] = $this->getAttribute($context["mediaFile"], "getMediaFolder", array(), "method");
            // line 10
            echo "                <li><img src='/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mediaDrive"]) ? $context["mediaDrive"] : $this->getContext($context, "mediaDrive")), "thumbnailBaseFolder", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mediaFolder"]) ? $context["mediaFolder"] : $this->getContext($context, "mediaFolder")), "getPath", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mediaFile"], "thumbFileName", array()), "html", null, true);
            echo "'></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mediaFile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "                </ul>
        </div>
    </div>
";
        
        $__internal_b720572301c22f2533819e0e9d95b888ee7b77cd5493eb5b02d30e33d96929e3->leave($__internal_b720572301c22f2533819e0e9d95b888ee7b77cd5493eb5b02d30e33d96929e3_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5babdccbe4b4d1a853170ced7ce73d121753ce39fd4c8e74a526eb09d4d250ea = $this->env->getExtension("native_profiler");
        $__internal_5babdccbe4b4d1a853170ced7ce73d121753ce39fd4c8e74a526eb09d4d250ea->enter($__internal_5babdccbe4b4d1a853170ced7ce73d121753ce39fd4c8e74a526eb09d4d250ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
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
        
        $__internal_5babdccbe4b4d1a853170ced7ce73d121753ce39fd4c8e74a526eb09d4d250ea->leave($__internal_5babdccbe4b4d1a853170ced7ce73d121753ce39fd4c8e74a526eb09d4d250ea_prof);

    }

    public function getTemplateName()
    {
        return "default/listmedia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  82 => 17,  72 => 12,  59 => 10,  56 => 9,  52 => 8,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             -{{ mediaDriveId}}|{{ mediaFolderId }}-*/
/*             <ul>*/
/*             {% for mediaFile in mediaFiles %}*/
/*                 {% set mediaFolder=mediaFile.getMediaFolder() %}*/
/*                 <li><img src='/{{ mediaDrive.thumbnailBaseFolder() }}/{{ mediaFolder.getPath() }}/{{ mediaFile.thumbFileName }}'></li>*/
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
