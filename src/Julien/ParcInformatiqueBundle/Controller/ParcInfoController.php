<?php

namespace Julien\ParcInformatiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class ParcInfoController extends Controller
{
    public function indexAction()
    {
        return $this->render('JulienParcInformatiqueBundle:parcInfo:index.html.twig',array(
                'liste' => ''
        ));
    }
   
    
    
}
