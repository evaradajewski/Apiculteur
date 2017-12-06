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

use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ajoutrucheController extends Controller
{
    /**
     * @Route("/ajoutruche", name="ajoutruche")
     */

    public function indexAction(Request $request)
    {
        $ruche = new ruche();

        $form = $this->createForm(rucheType::class, $ruche);

        $formView = $form->createView();

        // replace this example code with whatever you need
        return $this->render('ajout/ajoutruche.html.twig', array('form' => $formView));
    }
}