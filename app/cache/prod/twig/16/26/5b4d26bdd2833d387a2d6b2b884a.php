<?php

/* JulienParcInformatiqueBundle::layout.html.twig */
class __TwigTemplate_16265b4d26bdd2833d387a2d6b2b884a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'parcInfo_body' => array($this, 'block_parcInfo_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "  <hr>
 
  ";
        // line 11
        echo "  ";
        $this->displayBlock('parcInfo_body', $context, $blocks);
        // line 13
        echo " 
";
    }

    // line 11
    public function block_parcInfo_body($context, array $blocks = array())
    {
        // line 12
        echo "  ";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  55 => 11,  50 => 13,  47 => 11,  139 => 63,  136 => 62,  127 => 57,  123 => 56,  115 => 51,  111 => 50,  103 => 45,  99 => 44,  91 => 39,  87 => 38,  79 => 33,  75 => 32,  67 => 27,  63 => 26,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
