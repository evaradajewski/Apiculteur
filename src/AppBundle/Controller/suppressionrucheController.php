<?php
/**
 * Created by PhpStorm.
 * User: eva
 * Date: 31/12/2017
 * Time: 11:38
 */

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\ruche;
use AppBundle\Entity\intervention;
use AppBundle\Entity\recolte;

class suppressionrucheController extends Controller
{
    /**
     * @Route("/supp/{id}", name="suppid")
     */
    public function suppAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        //$em->remove($ruche);
        //$em->flush;

        $ruche = $em->getRepository('AppBundle:ruche')->find($id);
        $em->remove($ruche);
        $em->flush();

        $idruche = $id;

        $recolte = $em->getRepository('AppBundle:recolte')->find($idruche);
        if(!$recolte)
        {
            $em->remove($recolte);
            $em->flush();
        }

        $intervention = $em->getRepository('AppBundle:intervention')->find($idruche);
        if(!$intervention) {
            $em->remove($intervention);
            $em->flush();
        }

        return new Response('Ruche supprimée !');
    }

}