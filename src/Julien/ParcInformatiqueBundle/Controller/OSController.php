<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OSController
 *
 * @author psid
 */
namespace Julien\ParcInformatiqueBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Julien\ParcInformatiqueBundle\Controller\ControleurStrategy;
use Julien\ParcInformatiqueBundle\Entity\OS;
use Julien\ParcInformatiqueBundle\Form\OSType;


class OSController extends Controller implements ControleurStrategy {
    public function supprimerAction($id) {
        // On récupère l'EntityManager
      $em = $this->getDoctrine()
                 ->getEntityManager();

      // On récupère l'entité correspondant à l'id $id
      $os = $em->getRepository('JulienParcInformatiqueBundle:OS')
                    ->find($id);

      // Si la salle n'existe pas, on affiche une erreur 404
      if ($os == null) {
        throw $this->createNotFoundException('OS [id='.$id.'] inexistante');
      }

      if ($this->get('request')->getMethod() == 'GET') {

        $this->get('session')->getFlashBag()->add('info', 'OS bien supprimé');
        $em->remove($os);
        $em->flush();
        return $this->render('JulienParcInformatiqueBundle:parcInfo:supprimer_os.html.twig', array(
        'OS' => $os));
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
        $liste_os = $em->getRepository('JulienParcInformatiqueBundle:OS')
                               ->findAll();
        
        // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
        return $this->render('JulienParcInformatiqueBundle:parcInfo:voir_liste.html.twig', array(
                'liste' => $liste_os,
                'title' => 'OS',
                'lien_voir' => 'parcInfo_voir_OS',
                'lien_delete' => 'parcInfo_supprimer_OS',
                'lien_update'=> 'parcInfo_modifier_OS',
                'lien_post' => 'parcInfo_ajouter_OS'
        ));
    }
     public function voirAction($id){
        // On récupère l'EntityManager
        $em = $this->getDoctrine()
                   ->getEntityManager();

      
        // On récupère l'entité correspondant à l'id $id
        $os= $em->getRepository('JulienParcInformatiqueBundle:OS')
                    ->find($id);
        
        if($os === null)
        {
          throw $this->createNotFoundException('OS [id='.$id.'] inexistant.');
        }
    

        // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
        return $this->render('JulienParcInformatiqueBundle:parcInfo:voir_OS.html.twig', array(
          'os'        => $os,
         
        ));
    }
    
    public function ajouterAction()
    {
        $os = new OS();
        $form = $this->createForm(new OSType(), $os);

        $request = $this->get('request');
        if( $request->getMethod() == 'POST' )
        {
          $form->bind($request);
          if( $form->isValid() )
          {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($os);
            $em->flush();
             
            return $this->redirect($this->generateUrl('parcInfo_voir_OS', array('id' => $os->getId())));
          }
        }

        return $this->render('JulienParcInformatiqueBundle:parcInfo:ajouter_OS.html.twig', array(
          'form' => $form->createView(),
        ));
    }
}

?>
