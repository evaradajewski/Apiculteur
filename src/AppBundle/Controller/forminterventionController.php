<?php
/**
 * Created by PhpStorm.
 * User: eva
 * Date: 14/12/2017
 * Time: 15:41
 */

namespace AppBundle\Controller;

use AppBundle\Entity\intervention;
use AppBundle\Form\interventionType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class forminterventionController extends Controller
{
    /**
     * @Route("inforuche/intervention/{id}", name="intervention")
     */
    public function indexAction(Request $request, $id)
    {
        $intervention = new intervention();
        $intervention->setIdruche($id);

        $form = $this->createForm(interventionType::class, $intervention);

        $form->handleRequest($request);

        if($form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($intervention);
            $em->flush();

            return new Response('intervention inséré !');
        }

        $formView = $form->createView();

        return $this->render('info/formintervention.html.twig', array('form' => $formView));
    }


}