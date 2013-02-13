<?php

/* JulienParcInformatiqueBundle:parcInfo:formulaire.html.twig */
class __TwigTemplate_67ffcb96ccd3d9dbd09783ed297a5303 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        echo " 
<h3>Formulaire salle</h3>
 
<div class=\"well\">
    <form method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" />
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 8,  25 => 7,  19 => 3,  38 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
