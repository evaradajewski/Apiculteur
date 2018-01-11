<?php
/**
 * Created by PhpStorm.
 * User: eva
 * Date: 09/12/2017
 * Time: 13:11
 */

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\intervention;
use AppBundle\Form\interventionType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;

class inforucheController extends Controller
{
    /**
     * @Route("/inforuche/{id}", name="inforucheid")
     */
    public function idAction(Request $request, $id)
    {
        $liste = $this->getDoctrine()
            -> getRepository('AppBundle:intervention')
            -> findByIdruche($id);
        $liste_intervention  = $this->get('knp_paginator')->paginate(
            $liste,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            10/*nbre d'éléments par page*/
        );

        return $this->render('info/inforuche.html.twig', array('liste_intervention' => $liste_intervention, 'id' => $id));
    }

}