<?php

/* JulienParcInformatiqueBundle:parcInfo:index.html.twig */
class __TwigTemplate_0a65411409a21a7c61d3475fda1a4a40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JulienParcInformatiqueBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'parcInfo_body' => array($this, 'block_parcInfo_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_parcInfo_body($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"menu\">
  <div class=\"row\" id='row1'>
    <ul class=\"nav\">
      <li><a href=\"#salle\">Salles</a></li>
      <li><a href=\"#ordi\">Ordinateurs</a></li>
      <li><a href=\"#package\">Packages</a></li>
      <li><a href=\"#OS\">OS</a></li>
      <li><a href=\"#peripherique\">Périphérique</a></li>
      <li><a href=\"#logiciel\">Logiciel</a></li>
    </ul>
  </div>
  <div class=\"row\" id='row2'>
        
  </div>
          
</div>
  <div class=\"contextMenu\" id=\"salle\">
      <ul>
          <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_liste_salle"), "html", null, true);
        echo "\">Lister salle</a></li>
          <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_ajouter_salle"), "html", null, true);
        echo "\">Ajouter salle</a></li>
      </ul>
  </div>
  <div class=\"contextMenu\" id=\"ordi\">
      <ul>
          <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_ajouter_ordi"), "html", null, true);
        echo "\">Ajouter Ordinateur</a></li>
          <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_liste_ordi"), "html", null, true);
        echo "\">Lister Ordinateur</a></li>
      </ul>
  </div>
  <div class=\"contextMenu\" id=\"package\">
      <ul>
           <li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_ajouter_package"), "html", null, true);
        echo "\">Ajouter Package</a></li>
          <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_liste_package"), "html", null, true);
        echo "\">Lister Package</a></li>
      </ul>
  </div>
  <div class=\"contextMenu\" id=\"OS\">
      <ul>
          <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_ajouter_OS"), "html", null, true);
        echo "\">Ajouter OS</a></li>
          
      </ul>
  </div>
  <div class=\"contextMenu\" id=\"logiciel\">
      <ul>
         
          <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_ajouter_salle"), "html", null, true);
        echo "\">Ajouter une salle</a></li>
      </ul>
  </div>
  <div class=\"contextMenu\" id=\"peripherique\">
      <ul>
          <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_ajouter_OS"), "html", null, true);
        echo "\">OS</a></li>
          <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_ajouter_salle"), "html", null, true);
        echo "\">Ajouter une salle</a></li>
      </ul>
  </div>
  
  ";
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        // line 63
        echo "
<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>
 
<script type=\"text/javascript\">
    \$(function() {
     
     \$('.nav').on('click','a', function(event){
\t\tevent.preventDefault();
\t\tvar \$this = \$(this);
\t\t
\t\tshowContextMenu(\$this.attr(\"href\"));
\t});
    });
    showContextMenu = function(whatToShow){
        var contenu = \$(whatToShow);
        console.log(contenu);
        \$('#row2').html(contenu.html())
           
    }
</script>

";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 63,  130 => 62,  121 => 57,  117 => 56,  109 => 51,  99 => 44,  91 => 39,  87 => 38,  79 => 33,  75 => 32,  67 => 27,  63 => 26,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
