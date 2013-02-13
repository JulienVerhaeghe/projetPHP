<?php

/* JulienParcInformatiqueBundle:parcInfo:voir_reference.html.twig */
class __TwigTemplate_d2aa11b6e7594ff198082fbd1c035223 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JulienParcInformatiqueBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
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
        echo "  Lecture d'un ordinateur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>

        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "reference"), "name"), "html", null, true);
        echo " [ ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "reference"), "marque"), "name"), "html", null, true);
        echo " ]

    </h2>
 ";
        // line 14
        if ($this->getAttribute($this->getContext($context, "reference"), "urlProduit")) {
            // line 15
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "reference"), "urlProduit"), "html", null, true);
            echo "\">url du produit</a>
    
  ";
        }
        // line 18
        echo "      
     
 
";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:voir_reference.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  57 => 15,  55 => 14,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
