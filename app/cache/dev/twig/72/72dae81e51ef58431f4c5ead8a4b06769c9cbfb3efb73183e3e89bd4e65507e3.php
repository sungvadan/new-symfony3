<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_d5b71aaad8ea723587576ada755dc9d717aa1c0ba0985bffaaad8f2058d9c110 extends Twig_Template
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
        $__internal_1c6b2ca1f75a1dc0cf4be395230a7afd2e5b567c7313bed9bb2fb551e1fe5d72 = $this->env->getExtension("native_profiler");
        $__internal_1c6b2ca1f75a1dc0cf4be395230a7afd2e5b567c7313bed9bb2fb551e1fe5d72->enter($__internal_1c6b2ca1f75a1dc0cf4be395230a7afd2e5b567c7313bed9bb2fb551e1fe5d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "class", array()) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "type", array())) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "function", array()));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array());
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array());
            echo "
";
        }
        
        $__internal_1c6b2ca1f75a1dc0cf4be395230a7afd2e5b567c7313bed9bb2fb551e1fe5d72->leave($__internal_1c6b2ca1f75a1dc0cf4be395230a7afd2e5b567c7313bed9bb2fb551e1fe5d72_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  36 => 6,  32 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if trace.function %}*/
/*     at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})*/
/* {% else %}*/
/*     at n/a*/
/* {% endif %}*/
/* {% if trace.file is defined and trace.line is defined %}*/
/*         in {{ trace.file }} line {{ trace.line }}*/
/* {% endif %}*/
/* */
