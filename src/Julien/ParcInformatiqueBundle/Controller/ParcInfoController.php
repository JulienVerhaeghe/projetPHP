<?php

namespace Julien\ParcInformatiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;




use Julien\ParcInformatiqueBundle\Form\CategorieType;




class ParcInfoController extends Controller
{
    public function indexAction()
    {
        return $this->render('JulienParcInformatiqueBundle:parcInfo:index.html.twig');
    }
   
    
    
}
