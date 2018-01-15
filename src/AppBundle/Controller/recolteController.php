<?php
/**
 * Created by PhpStorm.
 * User: eva
 * Date: 15/12/2017
 * Time: 10:09
 */

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\recolte;
use AppBundle\Form\recolteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;

class recolteController extends Controller
{
    /**
     * @Route("/inforecolte/{id}", name="inforecolte")
     */
    public function indexAction($id)
    {
        $liste_recolte = $this->getDoctrine()
            -> getRepository('AppBundle:recolte')
            -> findByIdruche($id);

        return $this->render('recolte/production.html.twig', array('liste_recolte' => $liste_recolte, 'id' => $id));
    }
}