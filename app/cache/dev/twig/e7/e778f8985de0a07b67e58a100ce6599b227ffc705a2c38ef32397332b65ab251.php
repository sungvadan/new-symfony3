<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9188794312196e61d1b4f3a29a4de3f7c3fff41a1a125601fcd03f19c0ff0865 extends Twig_Template
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
        $__internal_cee84554a1eafcde649feb90ed920a5e7bd5442ce9472134cbea2a49964e8c85 = $this->env->getExtension("native_profiler");
        $__internal_cee84554a1eafcde649feb90ed920a5e7bd5442ce9472134cbea2a49964e8c85->enter($__internal_cee84554a1eafcde649feb90ed920a5e7bd5442ce9472134cbea2a49964e8c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cee84554a1eafcde649feb90ed920a5e7bd5442ce9472134cbea2a49964e8c85->leave($__internal_cee84554a1eafcde649feb90ed920a5e7bd5442ce9472134cbea2a49964e8c85_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67ff8281b48c8dcd54284dc648c51855cb5e3cb8f126513ca28b6d47d90313ae = $this->env->getExtension("native_profiler");
        $__internal_67ff8281b48c8dcd54284dc648c51855cb5e3cb8f126513ca28b6d47d90313ae->enter($__internal_67ff8281b48c8dcd54284dc648c51855cb5e3cb8f126513ca28b6d47d90313ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_67ff8281b48c8dcd54284dc648c51855cb5e3cb8f126513ca28b6d47d90313ae->leave($__internal_67ff8281b48c8dcd54284dc648c51855cb5e3cb8f126513ca28b6d47d90313ae_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_632447038d6624aadd57e403129407f7f96690e54d69b00923bc4738dec123bc = $this->env->getExtension("native_profiler");
        $__internal_632447038d6624aadd57e403129407f7f96690e54d69b00923bc4738dec123bc->enter($__internal_632447038d6624aadd57e403129407f7f96690e54d69b00923bc4738dec123bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo ")
";
        
        $__internal_632447038d6624aadd57e403129407f7f96690e54d69b00923bc4738dec123bc->leave($__internal_632447038d6624aadd57e403129407f7f96690e54d69b00923bc4738dec123bc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_158355680f63b310013e48bb6600b0dfd613d624e60ab58a65e668d1660bee63 = $this->env->getExtension("native_profiler");
        $__internal_158355680f63b310013e48bb6600b0dfd613d624e60ab58a65e668d1660bee63->enter($__internal_158355680f63b310013e48bb6600b0dfd613d624e60ab58a65e668d1660bee63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_158355680f63b310013e48bb6600b0dfd613d624e60ab58a65e668d1660bee63->leave($__internal_158355680f63b310013e48bb6600b0dfd613d624e60ab58a65e668d1660bee63_prof);

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
