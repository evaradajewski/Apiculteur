<?php
/**
 * Created by PhpStorm.
 * User: eva
 * Date: 17/11/2017
 * Time: 17:35
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ApiculteurController extends Controller
{
    /**
     * @Route("/apiculteur", name="apiculteurpage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Apiculteur/apiculteur.html.twig');
    }
}