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

        return new Response('Ruche supprimée !');
    }

}