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
        echo "  Ajouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>Ajouter un package</h2>
 
  <div class=\"well\">
  <form method=\"post\" ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
 
    ";
        // line 16
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
 
  <p>
    Vous éditez un article déjà existant,
    ne le changez pas trop pour éviter
    aux membres de ne pas comprendre
    ce qu'il se passe.
  </p>
 
  
 
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
        return array (  57 => 16,  52 => 13,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
