<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5bea42dbf4ace85a486d477ce38a72459f59ed8a50cdf79dbfe7752fcbcc1b89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad7b7e4b07a342101466c910be2d0ac394adb2edbf18fc5ab387b15153e7391b = $this->env->getExtension("native_profiler");
        $__internal_ad7b7e4b07a342101466c910be2d0ac394adb2edbf18fc5ab387b15153e7391b->enter($__internal_ad7b7e4b07a342101466c910be2d0ac394adb2edbf18fc5ab387b15153e7391b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad7b7e4b07a342101466c910be2d0ac394adb2edbf18fc5ab387b15153e7391b->leave($__internal_ad7b7e4b07a342101466c910be2d0ac394adb2edbf18fc5ab387b15153e7391b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b3170ce734a86781b89dfb1d0d10e4f757f8267fb13d93425f2d079c062d65e7 = $this->env->getExtension("native_profiler");
        $__internal_b3170ce734a86781b89dfb1d0d10e4f757f8267fb13d93425f2d079c062d65e7->enter($__internal_b3170ce734a86781b89dfb1d0d10e4f757f8267fb13d93425f2d079c062d65e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b3170ce734a86781b89dfb1d0d10e4f757f8267fb13d93425f2d079c062d65e7->leave($__internal_b3170ce734a86781b89dfb1d0d10e4f757f8267fb13d93425f2d079c062d65e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3f8e2cef3f521faef06c1e6631adb6d33beaa12d8d2270ad8f283e636532cd8a = $this->env->getExtension("native_profiler");
        $__internal_3f8e2cef3f521faef06c1e6631adb6d33beaa12d8d2270ad8f283e636532cd8a->enter($__internal_3f8e2cef3f521faef06c1e6631adb6d33beaa12d8d2270ad8f283e636532cd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3f8e2cef3f521faef06c1e6631adb6d33beaa12d8d2270ad8f283e636532cd8a->leave($__internal_3f8e2cef3f521faef06c1e6631adb6d33beaa12d8d2270ad8f283e636532cd8a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c49a23f74437856af8b2f28267667de82ee62eb25299837b5343cb2389198088 = $this->env->getExtension("native_profiler");
        $__internal_c49a23f74437856af8b2f28267667de82ee62eb25299837b5343cb2389198088->enter($__internal_c49a23f74437856af8b2f28267667de82ee62eb25299837b5343cb2389198088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c49a23f74437856af8b2f28267667de82ee62eb25299837b5343cb2389198088->leave($__internal_c49a23f74437856af8b2f28267667de82ee62eb25299837b5343cb2389198088_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
