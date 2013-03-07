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
            'parcInfo_menu' => array($this, 'block_parcInfo_menu'),
            'parcInfo_content' => array($this, 'block_parcInfo_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
        $this->displayBlock('parcInfo_menu', $context, $blocks);
        // line 24
        echo "  <!-- ici je voudrais ajouter une liste-->
  ";
        // line 25
        $this->displayBlock('parcInfo_content', $context, $blocks);
        // line 29
        echo "  ";
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 11
    public function block_parcInfo_menu($context, array $blocks = array())
    {
        // line 12
        echo "  <div id=\"menu\">
  <div class=\"row\" id='row1'>
    <ul class=\"nav\">
      <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_liste_salle"), "html", null, true);
        echo "\">Salles</a></li>
      <li><a href=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_liste_ordi"), "html", null, true);
        echo ">Ordinateurs</a></li>
      <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_liste_package"), "html", null, true);
        echo "\">Packages</a></li>
      <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_liste_os"), "html", null, true);
        echo "\">OS</a></li>
      <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_liste_peripherique"), "html", null, true);
        echo "\">Périphérique</a></li>
      <li><a href=\"#logiciel\">Logiciel</a></li>
    </ul>
  </div>
  ";
    }

    // line 25
    public function block_parcInfo_content($context, array $blocks = array())
    {
        // line 26
        echo "  <div class=\"row\" id='row2'>
  </div>
  ";
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "
<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>
 <script src=\"http://127.0.0.1/ProjetPHP/web/js/main.js\"></script>


";
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
        return array (  107 => 30,  104 => 29,  98 => 26,  95 => 25,  86 => 19,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  65 => 12,  62 => 11,  57 => 29,  55 => 25,  52 => 24,  49 => 11,  45 => 8,  42 => 7,  35 => 4,  32 => 3,);
    }
}
