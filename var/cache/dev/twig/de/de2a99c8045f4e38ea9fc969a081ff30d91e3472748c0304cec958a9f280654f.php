<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2efbc7534b6574034c1de4751e3b29c0254679eb1ce294817666999a6a3a53d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffb514693dcfc8dba2a5dfedde0f190ca84f2a2b9dd19ab838c47877f4abb53c = $this->env->getExtension("native_profiler");
        $__internal_ffb514693dcfc8dba2a5dfedde0f190ca84f2a2b9dd19ab838c47877f4abb53c->enter($__internal_ffb514693dcfc8dba2a5dfedde0f190ca84f2a2b9dd19ab838c47877f4abb53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffb514693dcfc8dba2a5dfedde0f190ca84f2a2b9dd19ab838c47877f4abb53c->leave($__internal_ffb514693dcfc8dba2a5dfedde0f190ca84f2a2b9dd19ab838c47877f4abb53c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3776b6d4863dc4539b74d5940819e6ca35d751424803e665b8075d123fbad0da = $this->env->getExtension("native_profiler");
        $__internal_3776b6d4863dc4539b74d5940819e6ca35d751424803e665b8075d123fbad0da->enter($__internal_3776b6d4863dc4539b74d5940819e6ca35d751424803e665b8075d123fbad0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3776b6d4863dc4539b74d5940819e6ca35d751424803e665b8075d123fbad0da->leave($__internal_3776b6d4863dc4539b74d5940819e6ca35d751424803e665b8075d123fbad0da_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_087f3145aa404aae93f73e0317b6028c840da6704d8458f2924b49109368c00f = $this->env->getExtension("native_profiler");
        $__internal_087f3145aa404aae93f73e0317b6028c840da6704d8458f2924b49109368c00f->enter($__internal_087f3145aa404aae93f73e0317b6028c840da6704d8458f2924b49109368c00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_087f3145aa404aae93f73e0317b6028c840da6704d8458f2924b49109368c00f->leave($__internal_087f3145aa404aae93f73e0317b6028c840da6704d8458f2924b49109368c00f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fcb301647aa2c72a54dd63e55769a64ea2b0a30f93332c2de47391485d96efd = $this->env->getExtension("native_profiler");
        $__internal_6fcb301647aa2c72a54dd63e55769a64ea2b0a30f93332c2de47391485d96efd->enter($__internal_6fcb301647aa2c72a54dd63e55769a64ea2b0a30f93332c2de47391485d96efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6fcb301647aa2c72a54dd63e55769a64ea2b0a30f93332c2de47391485d96efd->leave($__internal_6fcb301647aa2c72a54dd63e55769a64ea2b0a30f93332c2de47391485d96efd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
