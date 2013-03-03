<?php

namespace Julien\ParcInformatiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Julien\ParcInformatiqueBundle\Entity\Salle;
use Julien\ParcInformatiqueBundle\Entity\Ordinateur;
use Julien\ParcInformatiqueBundle\Entity\Package;
use Julien\ParcInformatiqueBundle\Entity\OS;
use Julien\ParcInformatiqueBundle\Form\SalleType;
use Julien\ParcInformatiqueBundle\Form\PackageType;
use Julien\ParcInformatiqueBundle\Form\OrdinateurType;
use Julien\ParcInformatiqueBundle\Form\CategorieType;
use Julien\ParcInformatiqueBundle\Form\ReferenceModeleType;
use Julien\ParcInformatiqueBundle\Entity\ReferenceModele;
use Julien\ParcInformatiqueBundle\Form\OSType;


class ParcInfoController extends Controller
{
    public function indexAction()
    {
        return $this->render('JulienParcInformatiqueBundle:parcInfo:index.html.twig');
    }
   
    
    
}
