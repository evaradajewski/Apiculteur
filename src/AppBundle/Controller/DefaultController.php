<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ruche;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Mapping as ORM;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request, ruche $ruche = null)
    {
        /*$repository = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('AppBundle:ruche');

        $liste_ruche = $repository->findAll($ruche);*/

        $liste = $this->getDoctrine()
            -> getRepository('AppBundle:ruche')
            -> findAll($ruche);
        $liste_ruche  = $this->get('knp_paginator')->paginate(
            $liste,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            10/*nbre d'éléments par page*/
        );

        return $this->render('default/index.html.twig', array('liste_ruche' => $liste_ruche));
    }
}
