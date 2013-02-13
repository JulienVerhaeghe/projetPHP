<?php

/* ::layout.html.twig */
class __TwigTemplate_324832580be37a50767cc391a76fdf09 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
 
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "  </head>
 
  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">
        <h1>Gestion de parc informatique</h1>
       
      </div>
 
      <div class=\"row\">
        <div id=\"menu\" class=\"span3\">
          <h3>Menu</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_accueil"), "html", null, true);
        echo "\">Accueil</a></li>
            <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_liste_salle"), "html", null, true);
        echo "\">Liste des salles</a></li>
            <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_liste_ordi"), "html", null, true);
        echo "\">Liste des ordinateurs</a></li>
            <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_liste_package"), "html", null, true);
        echo "\">Liste des packages</a></li>
            <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_ajouter_salle"), "html", null, true);
        echo "\">Ajouter une salle</a></li>
            <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_ajouter_ordi"), "html", null, true);
        echo "\">Ajouter un ordi</a></li>
            <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_ajouter_package"), "html", null, true);
        echo "\">Ajouter un package</a></li>
            <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_ajouter_OS"), "html", null, true);
        echo "\">Ajouter un OS</a></li>
            
          </ul>
        </div>
        <div id=\"content\" class=\"span9\">
          ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        </div>
      </div>
 
      <hr>
 
      <footer>
        <p>Projet réalisé dans le cadre d'un projet Gobelins CRM.</p>
      </footer>
    </div>
 
  ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo " 
  </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Sdz";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        // line 37
        echo "          ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        // line 50
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 51,  138 => 50,  136 => 49,  133 => 48,  129 => 37,  126 => 36,  119 => 9,  116 => 8,  110 => 6,  104 => 53,  102 => 48,  90 => 38,  88 => 36,  80 => 31,  76 => 30,  72 => 29,  68 => 28,  64 => 27,  60 => 26,  56 => 25,  52 => 24,  37 => 11,  35 => 8,  23 => 1,  58 => 12,  55 => 11,  50 => 13,  43 => 8,  40 => 7,  33 => 4,  30 => 6,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
