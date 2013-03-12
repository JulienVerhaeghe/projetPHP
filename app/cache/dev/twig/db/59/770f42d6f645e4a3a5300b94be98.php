<?php

/* JulienParcInformatiqueBundle:parcInfo:voir_OS.html.twig */
class __TwigTemplate_db59770f42d6f645e4a3a5300b94be98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JulienParcInformatiqueBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'parcInfo_content' => array($this, 'block_parcInfo_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JulienParcInformatiqueBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Lecture d'un OS - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_parcInfo_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"row\" id='row2'>
 
  <h2>

        ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "os"), "nom"), "html", null, true);
        echo " [ ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "os"), "version"), "html", null, true);
        echo " ]

    </h2>
 
   </div> 
 
 
";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:voir_OS.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
