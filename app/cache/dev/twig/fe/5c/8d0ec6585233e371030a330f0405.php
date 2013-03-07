<?php

/* JulienParcInformatiqueBundle:parcInfo:supprimer_os.html.twig */
class __TwigTemplate_fe5c8d0ec6585233e371030a330f0405 extends Twig_Template
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
        echo "  Suprimer un OS- ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_parcInfo_content($context, array $blocks = array())
    {
        // line 8
        echo " <div class=\"row\" id='row2'>
  <h2>Suprimer  ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "OS"), "name"), "html", null, true);
        echo "</h2>
 
   <p>
    L'os vient d'être supprimé
  </p>
 
 </div>
 
";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:supprimer_os.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
