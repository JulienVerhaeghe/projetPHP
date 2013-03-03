<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReferenceController
 *
 * @author psid
 */
namespace Julien\ParcInformatiqueBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Julien\ParcInformatiqueBundle\Controller\ControleurStrategy;

class ReferenceController extends Controller implements ControleurStrategy {
     public function supprimerAction($id) {
        ;
    }
    public function modifierAction($id) {
        ;
    }
    public function voirListeAction() {
        ;
    }
    public function voirAction($id){
        // On récupère l'EntityManager
        $em = $this->getDoctrine()
                   ->getEntityManager();

      
        // On récupère l'entité correspondant à l'id $id
        $reference= $em->getRepository('JulienParcInformatiqueBundle:ReferenceModele')
                    ->find($id);
        
        if($reference === null)
        {
          throw $this->createNotFoundException('reference [id='.$id.'] inexistant.');
        }
    

        // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
        return $this->render('JulienParcInformatiqueBundle:parcInfo:voir_reference.html.twig', array(
          'reference'        => $reference,
         
        ));
    }
    public function ajouterAction()
    {
        $reference = new ReferenceModele();
        $form = $this->createForm(new ReferenceModeleType(), $reference);

        $request = $this->get('request');
        if( $request->getMethod() == 'POST' )
        {
          $form->bind($request);
          if( $form->isValid() )
          {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($reference);
            $em->flush();
             //return print_r($form);
            return $this->redirect($this->generateUrl('parcInfo_voir_reference', array('id' => $reference->getId())));
          }
        }

        return $this->render('JulienParcInformatiqueBundle:parcInfo:ajouter_reference.html.twig', array(
          'form' => $form->createView(),
        ));
    }
}

?>
