<?php
/**
 * Created by PhpStorm.
 * User: eva
 * Date: 14/12/2017
 * Time: 18:28
 */

namespace AppBundle\Controller;

use AppBundle\Entity\recolte;
use AppBundle\Form\recolteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class formrecolteController extends Controller
{
    /**
     * @Route("/recolte", name="recolte")
     */
    public function indexAction(Request $request)
    {
        $recolte = new recolte();

        $form = $this->createForm(recolteType::class, $recolte);

        $form->handleRequest($request);

        if($form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($recolte);
            $em->flush();

            return new Response('recolte inséré !');
        }

        $formView = $form->createView();

        return $this->render('recolte/formrecolte.html.twig', array('form' => $formView));
    }
}