<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Peripherique
 *
 * @author psid
 */
namespace Julien\ParcInformatiqueBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Julien\ParcInformatiqueBundle\Controller\ControleurStrategy;
use Julien\ParcInformatiqueBundle\Entity\Peripherique;
use Julien\ParcInformatiqueBundle\Form\PeripheriqueType;


class PeripheriqueController extends Controller implements ControleurStrategy {
    public function supprimerAction($id) {
        // On récupère l'EntityManager
      $em = $this->getDoctrine()
                 ->getEntityManager();

      // On récupère l'entité correspondant à l'id $id
      $os = $em->getRepository('JulienParcInformatiqueBundle:Peripherique')
                    ->find($id);

      // Si la salle n'existe pas, on affiche une erreur 404
      if ($os == null) {
        throw $this->createNotFoundException('Peripherique [id='.$id.'] inexistante');
      }

      if ($this->get('request')->getMethod() == 'GET') {

        $this->get('session')->getFlashBag()->add('info', 'Peripherique bien supprimé');
        $em->remove($os);
        $em->flush();
        return $this->render('JulienParcInformatiqueBundle:parcInfo:supprimer_os.html.twig', array(
        'Peripherique' => $os));
      }
    }
    public function modifierAction($id) {
        ;
    }
    public function voirListeAction() {
         // On récupère l'EntityManager
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        // On récupère la liste des salles
        $liste_periph = $em->getRepository('JulienParcInformatiqueBundle:Peripherique')
                               ->findAll();
        
        // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
        return $this->render('JulienParcInformatiqueBundle:parcInfo:voir_liste_peripherique.html.twig', array(
                'liste_peripherique' => $liste_periph
        ));
    }
     public function voirAction($id){
        // On récupère l'EntityManager
        $em = $this->getDoctrine()
                   ->getEntityManager();

      
        // On récupère l'entité correspondant à l'id $id
        $os= $em->getRepository('JulienParcInformatiqueBundle:Peripherique')
                    ->find($id);
        
        if($os === null)
        {
          throw $this->createNotFoundException('Peripherique [id='.$id.'] inexistant.');
        }
    

        // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
        return $this->render('JulienParcInformatiqueBundle:parcInfo:voir.html.twig', array(
          'produit'        => $os,
            'title' => 'Periphérique'
         
        ));
    }
    
    public function ajouterAction()
    {
        $os = new Peripherique();
        $form = $this->createForm(new PeripheriqueType(), $os);

        $request = $this->get('request');
        if( $request->getMethod() == 'POST' )
        {
          $form->bind($request);
          if( $form->isValid() )
          {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($os);
            $em->flush();
             
            return $this->redirect($this->generateUrl('parcInfo_voir_peripherique', array('id' => $os->getId())));
          }
        }

        return $this->render('JulienParcInformatiqueBundle:parcInfo:ajouter_peripherique.html.twig', array(
          'form' => $form->createView(),
        ));
    }
}

?>
