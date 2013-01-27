<?php

namespace Julien\ParcInformatiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class ParcInfoController extends Controller
{
    public function indexAction()
    {
        return $this->render('JulienParcInformatiqueBundle:parcInfo:index.html.twig');
    }
    
    public function voir_salleAction($id){
        // On utilise le raccourci : il crée un objet Response
        // Et lui donne comme contenu le contenu du template
        return $this->render('JulienParcInformatiqueBundle:parcInfo:voir_salle.html.twig', array(
          'id'  => $id,
        ));
      }
}
