<?php

/* base.html.twig */
class __TwigTemplate_3ea75f1d85a306617f1660db176c86027b5f635cee2bdf39cd4f5694f534d4e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f2f68bfca826b27b43612dd572de2d89c2d288f3fdb5ef20219bbbc92dc92d6 = $this->env->getExtension("native_profiler");
        $__internal_1f2f68bfca826b27b43612dd572de2d89c2d288f3fdb5ef20219bbbc92dc92d6->enter($__internal_1f2f68bfca826b27b43612dd572de2d89c2d288f3fdb5ef20219bbbc92dc92d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1f2f68bfca826b27b43612dd572de2d89c2d288f3fdb5ef20219bbbc92dc92d6->leave($__internal_1f2f68bfca826b27b43612dd572de2d89c2d288f3fdb5ef20219bbbc92dc92d6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b7589bd54c72f355ae48d38201adf39bbb77ddab6c9189afd26b873af04bd4f = $this->env->getExtension("native_profiler");
        $__internal_6b7589bd54c72f355ae48d38201adf39bbb77ddab6c9189afd26b873af04bd4f->enter($__internal_6b7589bd54c72f355ae48d38201adf39bbb77ddab6c9189afd26b873af04bd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6b7589bd54c72f355ae48d38201adf39bbb77ddab6c9189afd26b873af04bd4f->leave($__internal_6b7589bd54c72f355ae48d38201adf39bbb77ddab6c9189afd26b873af04bd4f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5543a72c57fe7cb4d697572753ef6f0b114a2e0fc0f5badb9cd385252985f985 = $this->env->getExtension("native_profiler");
        $__internal_5543a72c57fe7cb4d697572753ef6f0b114a2e0fc0f5badb9cd385252985f985->enter($__internal_5543a72c57fe7cb4d697572753ef6f0b114a2e0fc0f5badb9cd385252985f985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5543a72c57fe7cb4d697572753ef6f0b114a2e0fc0f5badb9cd385252985f985->leave($__internal_5543a72c57fe7cb4d697572753ef6f0b114a2e0fc0f5badb9cd385252985f985_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c43b60315ebce371cd6eb699ff1afd9bcf603dc0a1747ea46f7e6c3e90608d12 = $this->env->getExtension("native_profiler");
        $__internal_c43b60315ebce371cd6eb699ff1afd9bcf603dc0a1747ea46f7e6c3e90608d12->enter($__internal_c43b60315ebce371cd6eb699ff1afd9bcf603dc0a1747ea46f7e6c3e90608d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c43b60315ebce371cd6eb699ff1afd9bcf603dc0a1747ea46f7e6c3e90608d12->leave($__internal_c43b60315ebce371cd6eb699ff1afd9bcf603dc0a1747ea46f7e6c3e90608d12_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7bd749d41fa939fcada3f118b5546e2ec808484b46de4149908c8b4e1b6f2e23 = $this->env->getExtension("native_profiler");
        $__internal_7bd749d41fa939fcada3f118b5546e2ec808484b46de4149908c8b4e1b6f2e23->enter($__internal_7bd749d41fa939fcada3f118b5546e2ec808484b46de4149908c8b4e1b6f2e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7bd749d41fa939fcada3f118b5546e2ec808484b46de4149908c8b4e1b6f2e23->leave($__internal_7bd749d41fa939fcada3f118b5546e2ec808484b46de4149908c8b4e1b6f2e23_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
