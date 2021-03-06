<?php

/* JulienParcInformatiqueBundle:parcInfo:ajouter_package.html.twig */
class __TwigTemplate_eeadd568165767e895f889fee3d9a1b3 extends Twig_Template
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
        echo "  Ajouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_parcInfo_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"row\" id='row2'>
 
  <h2>Ajouter un package</h2>
 
  <div class=\"well\">
  <form method=\"post\" ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
 
    ";
        // line 17
        echo "    <a href=\"#\" id=\"add_category\" class=\"btn\">Ajouter une catégorie</a><br /><br />
 
    <input type=\"submit\" class=\"btn btn-primary\" />
  </form>
</div>
 
<!-- On charge la librairie jQuery. Ici, je la prends depuis le site jquery.com, mais si vous l'avez en local, changez simplement l'adresse. -->
<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>
 
<script type=\"text/javascript\">
\$(document).ready(function() {
  // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse
  var \$container = \$('#julien_parcinformatiquebundle_packagetype_logiciels');
 
  // On définit une fonction qui va ajouter un champ
  function add_category() {
    // On définit le numéro du champ (en comptant le nombre de champs déjà ajoutés)
    index = \$container.children().length;
 
    // On ajoute à la fin de la balise <div> le contenu de l'attribut « data-prototype »
    // Après avoir remplacé la variable __name__ qu'il contient par le numéro du champ
    \$container.append(\$(\$container.attr('data-prototype').replace(/__name__/g, index)));
 
    // On ajoute également un bouton pour pouvoir supprimer la catégorie
    \$container.append(\$('<a href=\"#\" id=\"delete_category_' + index + '\" class=\"btn btn-danger\">Supprimer</a><br /><br />'));
 
    // On supprime le champ à chaque clic sur le lien de suppression
    \$('#delete_category_' + index).click(function() {
      \$(this).prev().remove();  // \$(this).prev() est le template ajouté
      \$(this).remove();         // \$(this) est le lien de suppression
      return false;
    });
  }
 
  // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple)
  if(\$container.children().length == 0) {
    add_category();
  }
 
  // On ajoute un nouveau champ à chaque clic sur le lien d'ajout
  \$('#add_category').click(function() {
    add_category();
    return false;
  });
});
</script>
 
  
 
  </div>
 
";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:ajouter_package.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 39,  53 => 14,  23 => 1,  110 => 30,  90 => 20,  86 => 19,  82 => 18,  65 => 12,  62 => 11,  49 => 13,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 29,  38 => 8,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 37,  67 => 34,  61 => 13,  47 => 9,  105 => 24,  93 => 28,  76 => 16,  72 => 14,  68 => 12,  27 => 4,  91 => 22,  84 => 9,  94 => 23,  88 => 6,  79 => 17,  59 => 22,  21 => 2,  44 => 16,  31 => 4,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 34,  78 => 17,  75 => 6,  71 => 19,  58 => 17,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 15,  63 => 24,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 40,  115 => 39,  106 => 36,  101 => 35,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 24,  52 => 24,  50 => 10,  43 => 7,  41 => 7,  37 => 9,  35 => 8,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 30,  98 => 34,  95 => 34,  92 => 33,  89 => 19,  85 => 25,  81 => 8,  73 => 19,  64 => 17,  60 => 23,  57 => 29,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 8,  39 => 7,  36 => 7,  33 => 4,  30 => 6,);
    }
}
