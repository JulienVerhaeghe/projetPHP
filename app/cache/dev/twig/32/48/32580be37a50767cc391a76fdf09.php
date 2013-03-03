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
      <div id=\"header\">
          <h1><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_accueil"), "html", null, true);
        echo "\">+ Parc informatique</a></h1>
      </div>
 
      <div>
        
        <div id=\"content\" >
          ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        </div>
      </div>
 
      <hr class='break'>
 
      <footer>
        <p>Projet réalisé dans le cadre d'un projet Gobelins CRM.</p>
      </footer>
    </div>
 
  ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo " 
  </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Gestion Parc";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "          ";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "   
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
     
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
        return array (  101 => 35,  98 => 34,  94 => 23,  91 => 22,  84 => 9,  81 => 8,  75 => 6,  69 => 39,  67 => 34,  55 => 24,  53 => 22,  44 => 16,  37 => 11,  35 => 8,  30 => 6,  23 => 1,);
    }
}
