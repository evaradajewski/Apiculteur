<?php
/**
 * Created by PhpStorm.
 * User: eva
 * Date: 06/12/2017
 * Time: 16:48
 */

namespace AppBundle\Controller;

use AppBundle\Entity\ruche;
use AppBundle\Form\rucheType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ajoutrucheController extends Controller
{
    /**
     * @Route("/ajoutruche", name="ajoutruche")
     */

    public function indexAction(Request $request)
    {
        $ruche = new ruche();

        $form = $this->createForm(rucheType::class, $ruche);

        $form->handleRequest($request);

        if($form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ruche);
            $em->flush();

            return new Response('ruche inséré !');
        }

        $formView = $form->createView();

        return $this->render('ajout/ajoutruche.html.twig', array('form' => $formView));
    }
}